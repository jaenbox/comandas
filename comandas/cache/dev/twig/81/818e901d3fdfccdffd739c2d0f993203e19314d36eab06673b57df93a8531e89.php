<?php

/* :administrador:new.html.twig */
class __TwigTemplate_4b61a541f016a6a15ec438bb64d6555104bca1ae2289b4faa171280cc7d555db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":administrador:new.html.twig", 1);
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
        $__internal_dd1e7a53f63f5507b233652cbaa4074eb5b2f0279eb8313c3d8ab42cce71791a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1e7a53f63f5507b233652cbaa4074eb5b2f0279eb8313c3d8ab42cce71791a->enter($__internal_dd1e7a53f63f5507b233652cbaa4074eb5b2f0279eb8313c3d8ab42cce71791a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrador:new.html.twig"));

        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd1e7a53f63f5507b233652cbaa4074eb5b2f0279eb8313c3d8ab42cce71791a->leave($__internal_dd1e7a53f63f5507b233652cbaa4074eb5b2f0279eb8313c3d8ab42cce71791a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b60822734dbf2e96c92c4d6ecdc36921607ac45e483de7ef151f17c09deb42bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60822734dbf2e96c92c4d6ecdc36921607ac45e483de7ef151f17c09deb42bb->enter($__internal_b60822734dbf2e96c92c4d6ecdc36921607ac45e483de7ef151f17c09deb42bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_b60822734dbf2e96c92c4d6ecdc36921607ac45e483de7ef151f17c09deb42bb->leave($__internal_b60822734dbf2e96c92c4d6ecdc36921607ac45e483de7ef151f17c09deb42bb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c256f7f610c8c6713c12332985eb66396dc69c2e2622a46476b87c792eabc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c256f7f610c8c6713c12332985eb66396dc69c2e2622a46476b87c792eabc15->enter($__internal_2c256f7f610c8c6713c12332985eb66396dc69c2e2622a46476b87c792eabc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Admininstrador</h2>
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
        <div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAdmin");
        echo "\">Atrás</a>
        </div>   
  \t</div>
\t\t
";
        
        $__internal_2c256f7f610c8c6713c12332985eb66396dc69c2e2622a46476b87c792eabc15->leave($__internal_2c256f7f610c8c6713c12332985eb66396dc69c2e2622a46476b87c792eabc15_prof);

    }

    public function getTemplateName()
    {
        return ":administrador:new.html.twig";
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
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Admininstrador</h2>
        <div class=\"div_form\">
        \t<form action=\"#\" method=\"post\" {{ form_enctype(form) }}>
                {{ form_widget(form) }}
\t\t\t</form>
        </div>
        <div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listAdmin' ) }}\">Atrás</a>
        </div>   
  \t</div>
\t\t
{% endblock %}
", ":administrador:new.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/administrador/new.html.twig");
    }
}
