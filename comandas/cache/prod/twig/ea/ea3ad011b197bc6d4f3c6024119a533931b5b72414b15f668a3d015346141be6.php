<?php

/* :comanda:list.html.twig */
class __TwigTemplate_382cafb855aff093556a8cf0c3508c228e0522cfff924a2571936cc4df9f01d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comanda:list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Comanda</h2>
        
            <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
              \t<tr>
              \t  <th>Pedido</th>
                  <th>Mesa</th>
                  <th>Fecha</th>
                  <th>Estado</th>
                  <th>Pagado</th>                  
                </tr>
              </thead>
              <tbody>
              \t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comandas"]) ? $context["comandas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 26
            echo "              \t\t<tr>
              \t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "pedido", array()), "id", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "mesa", array()), "num", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "pedido", array()), "fecha", array()), "d-m-Y"), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "estado", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 31
            if (($this->getAttribute($this->getAttribute($context["a"], "pedido", array()), "isPagado", array()) == null)) {
                // line 32
                echo "              \t\t\t\t\tpendiente
              \t\t\t\t";
            } else {
                // line 34
                echo "              \t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "isPagado", array()), "html", null, true);
                echo "</td> 
              \t            ";
            }
            // line 35
            echo " 
              \t\t\t<td>              \t\t\t
              \t\t\t\t<div class=\"btn-group\">
                  \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showCocinero", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editCocinero", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
              \t\t\t\t</div>
              \t\t\t</td>                       \t\t\t
              \t\t</tr>
              \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "              </tbody>
            </table>
      \t</div>
      \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Atrás</a>
        </div>
  \t</div>
";
    }

    public function getTemplateName()
    {
        return ":comanda:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 48,  116 => 44,  105 => 39,  101 => 38,  96 => 35,  90 => 34,  86 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  68 => 27,  65 => 26,  61 => 25,  42 => 8,  39 => 7,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":comanda:list.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/comanda/list.html.twig");
    }
}
