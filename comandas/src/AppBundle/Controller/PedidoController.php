<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Pedido;
use AppBundle\Entity\Camarero;
use AppBundle\Form\PedidoForm;

class PedidoController extends Controller {
    
    public function selectAction(Request $request) {   
        
        // Se ecoge la hora del sistema y se pasas a la query
        $fecha = date('Y-m-d');
        $formato = 'Y-m-d';
        $fecha = \DateTime::createFromFormat($formato, $fecha);
        $fecha = date_format($fecha, 'Y-m-d');
        
        // Consultando objetos con DQL
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:Pedido p WHERE p.fecha = :fecha'
        )->setParameter('fecha', $fecha);
            
        $pedidos = $query->getResult();
        
        // Consultando objetos con DQL
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT DISTINCT p.fecha FROM AppBundle:Pedido p');
        
        $fechas = $query->getResult();
        
        
        return $this->render('pedido/search.html.twig', array(
            'pedidos' => $pedidos, 'fechas' => $fechas, 'fechaActual' => $fecha
        ));
        
    }
    
    public function searchAction($fecha, Request $request) {      
                
        // Consultando objetos con DQL
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:Pedido p WHERE p.fecha = :fecha'
            )->setParameter('fecha', $fecha);
            
        $pedidos = $query->getResult();
        
        // Consultando objetos con DQL
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT DISTINCT p.fecha FROM AppBundle:Pedido p');
        
        $fechas = $query->getResult();
        
        return $this->render('pedido/search.html.twig', array(
            'pedidos' => $pedidos, 'fechas' => $fechas, 'fechaActual' => $fecha
        ));
        
    }
    
    public function editAction($id, Request $request) {
        
        $pedido = new Pedido();
        
        $em = $this->getDoctrine()->getManager();
        $pedido = $em->getRepository('AppBundle:Pedido')->find($id);
        
        // Si no existe el pedido mostramos excepción
        if(!$pedido) {
            throw $this->createNotFoundException(
                'No existe el pedido con el id: '.$id );
        }
        
        $form = $this->createForm(new PedidoForm(), $pedido, array(
            'method' => 'POST'
        ));
        
        if ($request->isMethod('POST')) {
            $form->handlerequest($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($pedido);
                $em->flush();
                
                $nextAction = 'selectPedido';
                return $this->redirectToRoute($nextAction);
            }
        }
        
        return $this->render('pedido/edit.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }
    
    public function showAction($id, Request $request) {
       
       $pedido = $this->getDoctrine()->getRepository('AppBundle:Pedido')->find($id);
       
       // Si no existe el pedido mostramos excepción
       if(!$pedido) {
           throw $this->createNotFoundException(
               'No existe el pedido con el id: '.$id );
       }       
       return $this->render('pedido/show.html.twig', array('pedido' => $pedido));
    }
    
    public function pendienteAction( Request $request) {

        // Se ecoge la hora del sistema y se pasas a la query
        $fecha = date('Y-m-d');
        $formato = 'Y-m-d';
        $fecha = \DateTime::createFromFormat($formato, $fecha);
        $fecha = date_format($fecha, 'Y-m-d');
        
        // Consultando objetos con DQL
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:Pedido p WHERE p.estado = :estado AND p.fecha = :fecha'
            )->setParameter('estado', 'cocina')
            ->setParameter('fecha', $fecha);
            
        $pedidos = $query->getResult();
        
        return $this->render('pedido/pendiente.html.twig', array(
            'pedidos' => $pedidos, 'fechaActual' => $fecha, 'opt' => 'cocina'
        ));
    }
}