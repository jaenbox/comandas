<?php

/* :cocinero:list.html.twig */
class __TwigTemplate_46b9ad7451452df843f29ebebc52578eb290409e4e140643ed010a44e6ff1fc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cocinero:list.html.twig", 1);
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
    
        <h2 class=\"sub-header\">Cocineros</h2>
            <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
              \t<tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th></th>                  
                </tr>
              </thead>
              <tbody>
              \t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cocineros"]) ? $context["cocineros"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 24
            echo "              \t\t<tr>
              \t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "username", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "phone", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "email", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>              \t\t\t
              \t\t\t\t<div class=\"btn-group\">
                  \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showCocinero", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"";
            // line 31
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
        // line 36
        echo "              </tbody>
            </table>
    \t</div>
    \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Atrás</a>
        </div>  
  \t</div>
";
    }

    public function getTemplateName()
    {
        return ":cocinero:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 40,  95 => 36,  84 => 31,  80 => 30,  74 => 27,  70 => 26,  66 => 25,  63 => 24,  59 => 23,  42 => 8,  39 => 7,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":cocinero:list.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/cocinero/list.html.twig");
    }
}
