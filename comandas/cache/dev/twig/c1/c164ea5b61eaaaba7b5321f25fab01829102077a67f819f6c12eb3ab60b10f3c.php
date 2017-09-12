<?php

/* :plato:new.html.twig */
class __TwigTemplate_c036b5b20ce7e0a2d84d4a3aac03e638397a64080eb11c5173046e76defc5656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":plato:new.html.twig", 1);
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
        $__internal_9cba2b0c32a0112a19822213f8b0863497a909d4553348178adaf773776ab166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cba2b0c32a0112a19822213f8b0863497a909d4553348178adaf773776ab166->enter($__internal_9cba2b0c32a0112a19822213f8b0863497a909d4553348178adaf773776ab166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":plato:new.html.twig"));

        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cba2b0c32a0112a19822213f8b0863497a909d4553348178adaf773776ab166->leave($__internal_9cba2b0c32a0112a19822213f8b0863497a909d4553348178adaf773776ab166_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8cc1b9fe722d966d07616adfd13d5797ff828d837d36e53b32d5836a75dabe25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc1b9fe722d966d07616adfd13d5797ff828d837d36e53b32d5836a75dabe25->enter($__internal_8cc1b9fe722d966d07616adfd13d5797ff828d837d36e53b32d5836a75dabe25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_8cc1b9fe722d966d07616adfd13d5797ff828d837d36e53b32d5836a75dabe25->leave($__internal_8cc1b9fe722d966d07616adfd13d5797ff828d837d36e53b32d5836a75dabe25_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7442c694f45a73214f9b02481441125e567c3ccbe1530b457f87f2bdcc79cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7442c694f45a73214f9b02481441125e567c3ccbe1530b457f87f2bdcc79cd8->enter($__internal_d7442c694f45a73214f9b02481441125e567c3ccbe1530b457f87f2bdcc79cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Plato</h1>
    
        <h2 class=\"sub-header\">Añadir plato</h2>
        <div class=\"div_form\">
        \t<form action=\"#\" method=\"post\" ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t</form>
        </div>
       \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listPlato");
        echo "\">Atrás</a>
        </div>  
  \t</div>
";
        
        $__internal_d7442c694f45a73214f9b02481441125e567c3ccbe1530b457f87f2bdcc79cd8->leave($__internal_d7442c694f45a73214f9b02481441125e567c3ccbe1530b457f87f2bdcc79cd8_prof);

    }

    public function getTemplateName()
    {
        return ":plato:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  71 => 14,  67 => 13,  60 => 8,  54 => 7,  44 => 5,  38 => 4,  31 => 1,  29 => 2,  11 => 1,);
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
{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}
{% trans_default_domain 'AppBundle' %}
{% block stylesheets %}
\t{{ parent() }}
{% endblock %}
{% block body %}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Plato</h1>
    
        <h2 class=\"sub-header\">Añadir plato</h2>
        <div class=\"div_form\">
        \t<form action=\"#\" method=\"post\" {{ form_enctype(form) }}>
                {{ form_widget(form) }}
\t\t\t</form>
        </div>
       \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listPlato' ) }}\">Atrás</a>
        </div>  
  \t</div>
{% endblock %}
", ":plato:new.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/plato/new.html.twig");
    }
}
