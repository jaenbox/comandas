<?php

/* :index:index.html.twig */
class __TwigTemplate_0a91982afc61cdacaa6c2f801c40dbd099aa8e55b0d18b7682cc4226f7845286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":index:index.html.twig", 1);
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
        $__internal_0d47c55a26c63ad2f28bc9b650ae5b0595d6c66c41d8cb1886e67ac32a2c08cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d47c55a26c63ad2f28bc9b650ae5b0595d6c66c41d8cb1886e67ac32a2c08cb->enter($__internal_0d47c55a26c63ad2f28bc9b650ae5b0595d6c66c41d8cb1886e67ac32a2c08cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d47c55a26c63ad2f28bc9b650ae5b0595d6c66c41d8cb1886e67ac32a2c08cb->leave($__internal_0d47c55a26c63ad2f28bc9b650ae5b0595d6c66c41d8cb1886e67ac32a2c08cb_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e95de813f4ee56851ad8faf0f0b81e743ebf848cc5e749c024750f6418d1d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e95de813f4ee56851ad8faf0f0b81e743ebf848cc5e749c024750f6418d1d26->enter($__internal_7e95de813f4ee56851ad8faf0f0b81e743ebf848cc5e749c024750f6418d1d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7e95de813f4ee56851ad8faf0f0b81e743ebf848cc5e749c024750f6418d1d26->leave($__internal_7e95de813f4ee56851ad8faf0f0b81e743ebf848cc5e749c024750f6418d1d26_prof);

    }

    public function getTemplateName()
    {
        return ":index:index.html.twig";
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
", ":index:index.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/index/index.html.twig");
    }
}
