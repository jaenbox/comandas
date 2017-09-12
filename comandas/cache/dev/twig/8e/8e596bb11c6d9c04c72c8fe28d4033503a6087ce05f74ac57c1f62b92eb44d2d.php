<?php

/* index/index.html.twig */
class __TwigTemplate_ec2e7a876bb7663b15339a1a46d092074b2408378d03f9c2bdfa84283aa47ab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0eaab91f082f4fcce868a0389433c5edf375fc8fd22936bbebe921513a1b835e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eaab91f082f4fcce868a0389433c5edf375fc8fd22936bbebe921513a1b835e->enter($__internal_0eaab91f082f4fcce868a0389433c5edf375fc8fd22936bbebe921513a1b835e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eaab91f082f4fcce868a0389433c5edf375fc8fd22936bbebe921513a1b835e->leave($__internal_0eaab91f082f4fcce868a0389433c5edf375fc8fd22936bbebe921513a1b835e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cee5ed4fffdff6a2a35b80e5c90a387f5cd956ffdb95f740f3cc615514a4c59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee5ed4fffdff6a2a35b80e5c90a387f5cd956ffdb95f740f3cc615514a4c59c->enter($__internal_cee5ed4fffdff6a2a35b80e5c90a387f5cd956ffdb95f740f3cc615514a4c59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Dashboard</h1>
    
        <h2 class=\"sub-header\">Ventas</h2>
        <div class=\"table-responsive\">
        \t<table class=\"table table-striped\">
            \t            \t      
            </table>
\t\t</div>
        <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
\t</div>            \t
";
        
        $__internal_cee5ed4fffdff6a2a35b80e5c90a387f5cd956ffdb95f740f3cc615514a4c59c->leave($__internal_cee5ed4fffdff6a2a35b80e5c90a387f5cd956ffdb95f740f3cc615514a4c59c_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% trans_default_domain 'AppBundle' %}

{% block body %}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Dashboard</h1>
    
        <h2 class=\"sub-header\">Ventas</h2>
        <div class=\"table-responsive\">
        \t<table class=\"table table-striped\">
            \t            \t      
            </table>
\t\t</div>
        <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
\t</div>            \t
{% endblock %}       
", "index/index.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/index/index.html.twig");
    }
}
