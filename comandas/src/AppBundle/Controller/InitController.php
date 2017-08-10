<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InitController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('index/index.html.twig');
    }
    
    public function optionAction($_id, Request $request)
    {        
        // Array con las rutas.
        $optionA = array("newAdmin", "newCocinero", "newCamarero", "newMesa", "newPlato", "newComanda");
        $optionB = array("listAdmin", "listCocinero", "listCamarero", "listMesa", "listPlato", "listComanda");
        
        $new = $optionA[$_id];
        $list = $optionB[$_id];
        
        // replace this example code with whatever you need
        return $this->render('default/option.html.twig', array('new' => $new, 'list' => $list ));
    }
}
