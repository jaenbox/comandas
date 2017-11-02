<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Plato;
use AppBundle\Form\PlatoForm;

class PlatoController extends Controller {
        
    public function newAction(Request $request) {
        
        $plato = new Plato();
        
        $form = $this->createForm(new PlatoForm(), $plato, array(
            'method' => 'POST'          
        ));
        
        if ($request->isMethod('POST')) {
            $form->handlerequest($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($plato);
                $em->flush();
                
                $nextAction = 'listPlato';
                return $this->redirectToRoute($nextAction);
            }
        }
        
        return $this->render('plato/new.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }
    
    public function editAction($id, Request $request) {
        
        $plato = new Plato();
        
        $em = $this->getDoctrine()->getManager();
        $plato = $em->getRepository('AppBundle:Plato')->find($id);
        
        // Si no existe el plato mostramos excepción
        if(!$plato) {
            throw $this->createNotFoundException(
                'No existe el plato con el id: '.$id );
        }
        
        $form = $this->createForm(new PlatoForm(), $plato, array(
            'method' => 'POST'
        ));
        
        if ($request->isMethod('POST')) {
            $form->handlerequest($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($plato);
                $em->flush();
                
                $nextAction = 'listPlato';
                return $this->redirectToRoute($nextAction);
            }
        }
        
        return $this->render('plato/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function deleteAction($id) {
        
        $plato = new Plato();
        
        $em = $this->getDoctrine()->getManager(); // Se recoge el manager
        $plato = $em->getRepository('AppBundle:Plato')->find($id);	// Buscamos en la db por id
        
        // Si no existe el plato mostramos excepción
        if(!$plato) {
            throw $this->createNotFoundException(
                'No existe el plato con el id: '.$id );
        }
        
        $em->remove($plato);
        $em->flush();
        
        $nextAction = 'listPlato';
        return $this->redirectToRoute($nextAction);
    }
    
    public function showAction($id) {
        
        $plato = $this->getDoctrine()->getRepository('AppBundle:Plato')->find($id);
        
        // Si no existe el plato mostramos excepción
        if(!$plato) {
            throw $this->createNotFoundException(
                'No existe el plato con el id: '.$id );
        }
        
        return $this->render('plato/show.html.twig', array('plato' => $plato));
    }
    
    public function listAction(Request $request) {
        // Recogemos el repositorio
        $repository = $this->getDoctrine() ->getRepository('AppBundle:Plato');
        // recuperamos todos los datos
        $platos = $repository->findAll();
        
        return $this->render('plato/list.html.twig', array( 'platos' => $platos));
    }
}
