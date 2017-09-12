<?php

/* :mesa:show.html.twig */
class __TwigTemplate_b4e19f1a2f3ab292b08b45162eba822446b70e1c81351d6e76db929cbfe01c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":mesa:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " Administrador ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Mesa</h1>
        <h2 class=\"sub-header\">Show</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th>Número mesa</th><td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesa"]) ? $context["mesa"] : null), "num", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Comensales</th><td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesa"]) ? $context["mesa"] : null), "comensales", array()), "html", null, true);
        echo "</td></tr>    \t\t\t\t\t
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listMesa");
        echo "\">Atrás</a>
        </div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return ":mesa:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  61 => 17,  57 => 16,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":mesa:show.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/mesa/show.html.twig");
    }
}
