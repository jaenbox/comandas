<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Mesa;
use AppBundle\Form\MesaForm;

class MesaController extends Controller {
    
    public function newAction(Request $request) {
        
        $mesa = new Mesa();
        
        $form = $this->createForm(new MesaForm(), $mesa, array(
            'method' => 'POST'
        ));
        
        if ($request->isMethod('POST')) {
            $form->handlerequest($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($mesa);
                $em->flush();
                
                $nextAction = 'listMesa';
                return $this->redirectToRoute($nextAction);
            }
        }
        
        return $this->render('mesa/new.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }
    
    public function editAction($id, Request $request) {
        
        $mesa = new Mesa();
        
        $em = $this->getDoctrine()->getManager();
        $mesa = $em->getRepository('AppBundle:Mesa')->find($id);
        
        // Si no existe la mesa mostramos excepción
        if(!$mesa) {
            throw $this->createNotFoundException(
                'No existe la mesa con el id: '.$id );
        }
        
        $form = $this->createForm(new MesaForm(), $mesa, array(
            'method' => 'POST'
        ));
        
        if ($request->isMethod('POST')) {
            $form->handlerequest($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($mesa);
                $em->flush();
                
                $nextAction = 'listMesa';
                return $this->redirectToRoute($nextAction);
            }
        }
        
        return $this->render('mesa/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function deleteAction($id) {
        
        $mesa = new Mesa();
        
        $em = $this->getDoctrine()->getManager(); // Se recoge el manager
        $mesa = $em->getRepository('AppBundle:Mesa')->find($id);	// Buscamos en la db por id
        
        // Si no existe la mesa mostramos excepción
        if(!$mesa) {
            throw $this->createNotFoundException(
                'No existe la mesa con el id: '.$id );
        }
        
        $em->remove($mesa);
        $em->flush();
        
        $nextAction = 'mesa';
        return $this->redirectToRoute($nextAction);
    }
    
    public function showAction($id) {
        
        $mesa = $this->getDoctrine()->getRepository('AppBundle:Mesa')->find($id);
        
        // Si no existe el mesa mostramos excepción
        if(!$mesa) {
            throw $this->createNotFoundException(
                'No existe la mesa con el id: '.$id );
        }
        
        return $this->render('mesa/show.html.twig', array('mesa' => $mesa));
    }
    
    public function listAction(Request $request) {
        // Recogemos el repositorio
        $repository = $this->getDoctrine()->getRepository('AppBundle:Mesa');
        // recuperamos todos los datos
        $mesas = $repository->findAll();
        
        return $this->render('mesa/list.html.twig', array( 'mesas' => $mesas));
    }
    
}
