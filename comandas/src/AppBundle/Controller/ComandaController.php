<?php

namespace AppBundle\Controller;

use AppBundle\Form\ComandaForm;
use AppBundle\Entity\Comanda;
use AppBundle\Entity\Camarero;
use AppBundle\Entity\Pedido;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ComandaController extends Controller {
    
    public function newAction(Request $request) {
        /*
        $camarero = $this->getUser();
        $pedido = new Pedido();
        
        $fecha = date('Y-m-d');
        $formato = 'Y-m-d';
        $fecha = \DateTime::createFromFormat($formato, $fecha);
        $pedido->setFecha($fecha);
        $pedido->setEstado('cocina');
        $pedido->setCamarero($camarero);
        */
        
        
        $form = $this->createForm(new ComandaForm(), $pedido, array(
            'method' => 'POST'
        ));
        
        return $this->render('comanda/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function editAction($id, Request $request) { 
        
        $comanda = new Comanda();
        
        $em = $this->getDoctrine()->getManager();
        $comanda = $em->getRepository('AppBundle:Comanda')->find($id);
        
        // Si no existe el cocinero mostramos excepción
        if(!$comanda) {
            throw $this->createNotFoundException(
                'No existe la comanda con el id: '.$id );
        }
        
        // Se crea el formulario
        $form = $this->createForm(new ComandaForm(), $comanda, array(
            'method' => 'POST'
        ));
        
        if ($request->isMethod('POST')) {
            $form->handlerequest($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($comanda);
                $em->flush();
                
                $nextAction = 'listComanda';
                return $this->redirectToRoute($nextAction);
            }
        }
        return $this->render('comanda/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function listAction(Request $request) {
        // Recogemos el repositorio
        $repository = $this->getDoctrine() ->getRepository('AppBundle:Comanda');
        // recuperamos todos los datos
        $comandas = $repository->findAll();
        
        return $this->render('comanda/list.html.twig', array( 'comandas' => $comandas));
    }
}
