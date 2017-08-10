<?php
/*
namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\Administrador;

class LoadUserData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface {
    
    /**
     *
     * @var ContainerInterface
     */
/*    private $container;
    
    public function setContainer(ContainerInterface $container = null) {
        
        $this->container = $container;
        
    }
    
    public function load(ObjectManager $manager) {
        
        // Recogemos la ubicación del proyecto symfony
        $symfony_app_base_dir = $this->container->getParameter('kernel.root_dir');
        
        // abrimos el fichero y lo recorremos en modo lectura
        $fd = fopen($symfony_app_base_dir.'/Resources/data/usuarios.csv', "r");
        
        if($fd) {
            while (($data = fgetcsv($fd)) !== false) {
                // Creamos el objeto
                $admin = new Administrador();
                
                // Recogemos el objeto del fichero
                $admin->setUsername($data[0]);
                $admin->setSurname($data[1]);
                $admin->setDni($data[2]);
                $admin->setPhone($data[3]);
                $admin->setEmail($data[4]);
                $admin->setAddress($data[5]);
                $admin->setPassword($data[6]);
                $admin->setIsActive($data[7]);
                $cadena_salt = md5(uniqid(null, true));
                $admin->setSalt($cadena_salt);
                /*$em = $this->container->get('doctrine')->getManager();
                $rol = $em->getRepository('AppBundle:Roles')->find($data[9]);*/                
/*                $admin->setRoles($this->getReference($data[9]));
                
                $manager->persist($admin);
                // alamacenamos en la base de datos.
                $manager->flush();
                
                // referenciamos el estado.
                $this->addReference($admin->getRole(), $admin);
            }
            fclose($fd);	// se cierra el fichero
        }
        
    }
    
    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
     */
/*    public function getOrder() {
        
        return 2;
    }
}
*/
