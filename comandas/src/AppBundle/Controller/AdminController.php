<?php
// src/AppBundle/Controller/AdminController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\UserForm;
use AppBundle\Entity\Administrador;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller {
    
    public function newAction(Request $request) {
       
        $admin = new Administrador();
        /* Recogemos el rol del usuario, 
         * se almacena el rol, 
         * marcamos como activo el usuario, 
         * generamos el campo salt
         */
        $rol = $this->getDoctrine()->getRepository('AppBundle:Roles')->find('1');
        $admin->setIsActive(True);
        $cadena_salt = md5(uniqid(null, true));
        $admin->setSalt($cadena_salt);
        $admin->addRole($rol);
        
        // Se crea el formulario
        $form = $this->createForm(new UserForm(), $admin, array(
            'method' => 'POST'
        ));
        
        if($request->isMethod('POST')) {
            // Recogemos los datos del formulario.
            $form->handlerequest($request);
            
            if($form->isValid()) {
                // Codificamos el password.
                $password = $this->get('security.password_encoder')
                ->encodePassword($admin, $admin->getPassword());
                $admin->setPassword($password);
                // Se almacena en la base de datos.
                $em = $this->getDoctrine()->getManager();
                $em->persist($admin);	// Persistimos
                $em->flush();			// Alamcenamos en la db
                
                // ... hacer cualquier otra cosa, como enviar un email, etc
                // establecer un mensaje "flash" de éxito para el usuario
                
                $nextAction = 'listAdmin';
                
                return $this->redirectToRoute($nextAction);	// Mostramos $nexAction donde se encuentran todos los usuarios.
            }
        }
            
        return $this->render(
            'administrador/new.html.twig', array('form' => $form->createView()));
    }
    
    public function editAction($id, Request $request) { 
        
        $admin = new Administrador();
        
        $em = $this->getDoctrine()->getManager();
        $admin = $em->getRepository('AppBundle:Administrador')->find($id);
        
        // Si no existe el admin mostramos excepción
        if(!$admin) {
            throw $this->createNotFoundException(
                'No existe la administrador con el id: '.$id );
        }
        
        // Se crea el formulario
        $form = $this->createForm(new UserForm(), $admin, array(
            'method' => 'POST'
        ));
        
        if($request->isMethod('POST')) {
            // Recogemos los datos del formulario.
            $form->handlerequest($request);
            
            if($form->isValid()) {
                // Codificamos el password.
                $password = $this->get('security.password_encoder')
                ->encodePassword($admin, $admin->getPassword());
                $admin->setPassword($password);
                // Se almacena en la base de datos.
                $em = $this->getDoctrine()->getManager();
                $em->persist($admin);	// Persistimos
                $em->flush();			// Alamcenamos en la db
                
                // ... hacer cualquier otra cosa, como enviar un email, etc
                // establecer un mensaje "flash" de éxito para el usuario
                
                $nextAction = 'listAdmin';
                
                return $this->redirectToRoute($nextAction);	// Mostramos $nexAction donde se encuentran todos los usuarios.
            }
        }
        
        return $this->render('administrador/new.html.twig', array('form' => $form->createView()));
    }
    
    public function deleteAction($id) {
        
        $admin = new Administrador();
        
        $em = $this->getDoctrine()->getManager(); // Se recoge el manager
        $admin = $em->getRepository('AppBundle:Administrador')->find($id);	// Buscamos en la db por id
        
        // Si no existe el administrador mostramos excepción
        if(!$admin) {
            throw $this->createNotFoundException(
                'No existe el administrador con el id: '.$id );
        }
        
        $em->remove($admin);
        $em->flush();
        
        $nextAction = 'listAdmin';
        return $this->redirectToRoute($nextAction);
    }
    
    public function showAction($id) {
        
        $admin = $this->getDoctrine()->getRepository('AppBundle:Administrador')->find($id);
        
        // Si no existe el adinistrador mostramos excepción
        if(!$admin) {
            throw $this->createNotFoundException(
                'No existe el administrador con el id: '.$id );
        }
        
        return $this->render('administrador/show.html.twig', array( 'admin' => $admin));
    }
    
    public function listAction(Request $request) { 
        // Recogemos el repositorio
        $repository = $this->getDoctrine() ->getRepository('AppBundle:Administrador');
        // recuperamos todos los datos
        $admins = $repository->findAll();
        
        return $this->render('administrador/list.html.twig', array( 'admins' => $admins));
    }
    
}