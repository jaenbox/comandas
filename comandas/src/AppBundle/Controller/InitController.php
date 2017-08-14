<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ob\HighchartsBundle\Highcharts\Highchart;

class InitController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // Chart
        $series = array(
            array("name" => "Data Serie Name", "data" => array(1,2,4,5,6,3,8))
        );
        
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Ventas');
        $ob->xAxis->title(array('text'  => "Día"));
        $ob->yAxis->title(array('text'  => "Núm ventas", 'tickInterval' => 1));
        $ob->series($series);
        
        // replace this example code with whatever you need
        return $this->render('index/index.html.twig', array(
            'chart' => $ob));
    }
    
    /**
     * Listado de úlitmas comandas
     * @param Request $request
     */
    public function listAction(Request $request) {
        
    }
}
