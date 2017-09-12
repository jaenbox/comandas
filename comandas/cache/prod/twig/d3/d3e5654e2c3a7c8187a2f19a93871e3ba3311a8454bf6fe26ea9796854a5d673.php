<?php

/* :mesa:list.html.twig */
class __TwigTemplate_c72d0113bb7ae78a5c1bf44708f33774ae6b71c01ea587048ea7793909abe15e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":mesa:list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Mesas";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Mesas</h1>
        <h2 class=\"sub-header\">Selección mesa</h2>
        <div class=\"border-right\">
        \t<a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newMesa");
        echo "\">Añadir</a>
        </div>
       \t<div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
              \t<tr>
                  \t<td>Num. Mesa</td>
\t\t\t\t\t<td>Comensales</td>\t
\t\t\t\t\t<td></td>                  
                </tr>
              </thead>
              <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesas"]) ? $context["mesas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mesa"]) {
            // line 26
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["mesa"], "num", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["mesa"], "comensales", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>              \t\t\t
                  \t\t\t\t<div class=\"btn-group\">
                      \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showMesa", array("id" => $this->getAttribute($context["mesa"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMesa", array("id" => $this->getAttribute($context["mesa"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-danger btn_table active\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteMesa", array("id" => $this->getAttribute($context["mesa"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                  \t\t\t\t</div>
              \t\t\t\t</td>\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "              </tbody>
            </table>
     \t</div>
     \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Atrás</a>
        </div>     
  \t</div>
";
    }

    public function getTemplateName()
    {
        return ":mesa:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  106 => 38,  95 => 33,  91 => 32,  87 => 31,  81 => 28,  77 => 27,  74 => 26,  70 => 25,  55 => 13,  49 => 9,  46 => 8,  40 => 7,  33 => 5,  30 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":mesa:list.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/mesa/list.html.twig");
    }
}
