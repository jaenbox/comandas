<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Pedido;
use AppBundle\Entity\Camarero;
use AppBundle\Form\PedidoForm;

class PedidoController extends Controller {
    
    public function newAction(Request $request) {
        
        $camarero = new Camarero();
        $user = $this->getUser();
        
        $logger = $this->get('logger');
        $logger->info('*************ID user ****  '.$user->getId());
        /*
        $em = $this->getDoctrine()->getManager();
        $camarero = $em->getRepository('AppBundle:User')->find($user->getId());
        
        $logger->info('*************Buscamos el camarero****  ');
        $logger->info('*************ID: '.$camarero->getId());
        $logger->info('*************Username: '.$camarero->getUsername());
        $pedido = new Pedido();
        $fecha = date('Y-m-d');
        $formato = 'Y-m-d';
        $fecha = \DateTime::createFromFormat($formato, $fecha);
        $pedido->setFecha($fecha);        
        $pedido->setEstado('cocina');
        $pedido->setUsers($camarero->setId($user->getId()));
        */
        
        
        /*
        $camarero = new Camarero();
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $camarero = $em->getRepository('AppBundle:User')->find($user->getId());
        
        $carrito->add($camarero);*/
        
        $form = $this->createForm(new PedidoForm(), $pedido, array(
            'method' => 'POST'
        ));
        
        if ($request->isMethod('POST')) {
            $form->handlerequest($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($pedido);
                $em->flush();
                
                $nextAction = 'listMesa';
                return $this->redirectToRoute($nextAction);
            }
        }
        
        return $this->render('pedido/new.html.twig', array(
            'form' => $form->createView(), 
        ));
    }
    
    public function editAction($id, Request $request) {
        
    }
}