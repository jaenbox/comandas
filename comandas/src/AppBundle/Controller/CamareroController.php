<?php
// src/AppBundle/Controller/CamareroController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\UserForm;
use AppBundle\Entity\Camarero;
use Symfony\Component\HttpFoundation\Request;

class CamareroController extends Controller {
    
    public function newAction(Request $request) {
        
        $camarero = new Camarero();
        /* Recogemos el rol del usuario,
         * se almacena el rol,
         * marcamos como activo el usuario,
         * generamos el campo salt
         */
        $rol = $this->getDoctrine()->getRepository('AppBundle:Roles')->find('3');
        $camarero->setIsActive(True);
        $cadena_salt = md5(uniqid(null, true));
        $camarero->setSalt($cadena_salt);
        $camarero->addRole($rol);

        // Se crea el formulario
        $form = $this->createForm(new UserForm(), $camarero, array(
            'method' => 'POST'
        ));
        
        if($request->isMethod('POST')) {
            // Recogemos los datos del formulario.
            $form->handlerequest($request);
            
            if($form->isValid()) {
                // Codificamos el password.
                $password = $this->get('security.password_encoder')
                ->encodePassword($camarero, $camarero->getPassword());
                $camarero->setPassword($password);
                // Se almacena en la base de datos.
                $em = $this->getDoctrine()->getManager();
                $em->persist($camarero);	// Persistimos
                $em->flush();			// Alamcenamos en la db
                
                // ... hacer cualquier otra cosa, como enviar un email, etc
                // establecer un mensaje "flash" de éxito para el usuario
                
                $nextAction = 'listCamarero';
                
                return $this->redirectToRoute($nextAction);	// Mostramos $nexAction donde se encuentran todos los usuarios.
            }
        }
        
        return $this->render(
            'camarero/new.html.twig', array('form' => $form->createView()));
    }
    
    public function editAction($id, Request $request) {
        
        $camarero = new Camarero();
        
        $em = $this->getDoctrine()->getManager();
        $camarero = $em->getRepository('AppBundle:Camarero')->find($id);
        
        // Se crea el formulario
        $form = $this->createForm(new UserForm(), $camarero, array(
            'method' => 'POST'
        ));
        
        if($request->isMethod('POST')) {
            // Recogemos los datos del formulario.
            $form->handlerequest($request);
            
            if($form->isValid()) {
                // Codificamos el password.
                $password = $this->get('security.password_encoder')
                ->encodePassword($camarero, $camarero->getPassword());
                $camarero->setPassword($password);
                // Se almacena en la base de datos.
                $em = $this->getDoctrine()->getManager();
                $em->persist($camarero);	// Persistimos
                $em->flush();			// Alamcenamos en la db
                
                // ... hacer cualquier otra cosa, como enviar un email, etc
                // establecer un mensaje "flash" de éxito para el usuario
                
                $nextAction = 'listCamarero';
                
                return $this->redirectToRoute($nextAction);	// Mostramos $nexAction donde se encuentran todos los usuarios.
            }
        }
        
        return $this->render('camarero/new.html.twig', array('form' => $form->createView()));
    }
    
    public function deleteAction($id) {
        
        $camarero = new Camarero();
        
        $em = $this->getDoctrine()->getManager(); // Se recoge el manager
        $camarero = $em->getRepository('AppBundle:Camarero')->find($id);	// Buscamos en la db por id
        
        // Si no existe el camarero mostramos excepción
        if(!$camarero) {
            throw $this->createNotFoundException(
                'No existe el camarero con el id: '.$id );
        }
        
        $em->remove($camarero);
        $em->flush();
        
        $nextAction = 'listCamarero';
        return $this->redirectToRoute($nextAction);
    }
    
    public function showAction($id) {
        
        $camarero = $this->getDoctrine()->getRepository('AppBundle:Camarero')->find($id);
        
        // Si no existe el camarero mostramos excepción
        if(!$camarero) {
            throw $this->createNotFoundException(
                'No existe el camarero con el id: '.$id );
        }
        
        return $this->render('camarero/show.html.twig', array('camarero' => $camarero));
    }
    
    public function listAction(Request $request) {
        // Recogemos el repositorio
        $repository = $this->getDoctrine() ->getRepository('AppBundle:Camarero');
        // recuperamos todos los datos
        $camareros = $repository->findAll();
        
        return $this->render('camarero/list.html.twig', array( 'camareros' => $camareros));
    }
    
}