<?php
// src/AppBundle/Controller/CocineroController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\UserForm;
use AppBundle\Entity\Administrador;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Cocinero;
use Doctrine\ORM\Query\ResultSetMapping;

class CocineroController extends Controller {
    
    public function newAction(Request $request) {
        /*
         * El programa de gestión solo dispone un posible concinero, 
         * si encuentra otro no permite crear más.
         * */
        $cocinero = new Cocinero();
        $cocinero = $this->getDoctrine()->getRepository('AppBundle:Cocinero')->find(2);
        
        // Si existe el cocinero mostramos excepción
        if($cocinero) {
            throw $this->createNotFoundException(
                'Ya dispone de un usuario cocinero. No se permite la creación de más usuarios con este rol.' );
        } else {
            /* Recogemos el rol del usuario,
             * se almacena el rol,
             * marcamos como activo el usuario,
             * generamos el campo salt
             */
            $cocinero = new Cocinero();
            $rol = $this->getDoctrine()->getRepository('AppBundle:Roles')->find('2');
            $cocinero->setIsActive(True);
            $cadena_salt = md5(uniqid(null, true));
            $cocinero->setSalt($cadena_salt);
            $cocinero->addRole($rol);
            
            // Se crea el formulario
            $form = $this->createForm(new UserForm(), $cocinero, array(
                'method' => 'POST'
            ));
            
            if($request->isMethod('POST')) {
                // Recogemos los datos del formulario.
                $form->handlerequest($request);
                
                if($form->isValid()) {
                    // Codificamos el password.
                    $password = $this->get('security.password_encoder')
                    ->encodePassword($cocinero, $cocinero->getPassword());
                    $cocinero->setPassword($password);
                    // Se almacena en la base de datos.
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($cocinero);	// Persistimos
                    $em->flush();			// Alamcenamos en la db
                    
                    // ... hacer cualquier otra cosa, como enviar un email, etc
                    // establecer un mensaje "flash" de éxito para el usuario
                    
                    $nextAction = 'listCocinero';
                    
                    return $this->redirectToRoute($nextAction);	// Mostramos $nexAction donde se encuentran todos los usuarios.
                }
            }
        }
        return $this->render(
            'cocinero/new.html.twig', array('form' => $form->createView()));
    }
    
    public function editAction($id, Request $request) {
        
        $cocinero = new Cocinero();
        
        $em = $this->getDoctrine()->getManager();
        $cocinero = $em->getRepository('AppBundle:Cocinero')->find($id);
        
        // Si no existe el cocinero mostramos excepción
        if(!$cocinero) {
            throw $this->createNotFoundException(
                'No existe el cocinero con el id: '.$id );
        }
        
        // Se crea el formulario
        $form = $this->createForm(new UserForm(), $cocinero, array(
            'method' => 'POST'
        ));
        
        if($request->isMethod('POST')) {
            // Recogemos los datos del formulario.
            $form->handlerequest($request);
            
            if($form->isValid()) {
                // Codificamos el password.
                $password = $this->get('security.password_encoder')
                ->encodePassword($cocinero, $cocinero->getPassword());
                $cocinero->setPassword($password);
                // Se almacena en la base de datos.
                $em = $this->getDoctrine()->getManager();
                $em->persist($cocinero);	// Persistimos
                $em->flush();			// Alamcenamos en la db
                
                // ... hacer cualquier otra cosa, como enviar un email, etc
                // establecer un mensaje "flash" de éxito para el usuario
                
                $nextAction = 'listCocinero';
                
                return $this->redirectToRoute($nextAction);	// Mostramos $nexAction donde se encuentran todos los usuarios.
            }
        }
        
        return $this->render('cocinero/new.html.twig', array('form' => $form->createView()));
    }
    
    public function showAction($id) {
        
        $cocinero = $this->getDoctrine()->getRepository('AppBundle:Cocinero')->find($id);
        
        // Si no existe el cocinero mostramos excepción
        if(!$cocinero) {
            throw $this->createNotFoundException(
                'No existe cocinero con el id: '.$id );
        }
        
        return $this->render('cocinero/show.html.twig', array('cocinero' => $cocinero));
    }
    
    public function listAction(Request $request) {
        // Recogemos el repositorio
        $repository = $this->getDoctrine() ->getRepository('AppBundle:Cocinero');
        // recuperamos todos los datos
        $cocineros = $repository->findAll();
        
        return $this->render('cocinero/list.html.twig', array( 'cocineros' => $cocineros));
    }
}