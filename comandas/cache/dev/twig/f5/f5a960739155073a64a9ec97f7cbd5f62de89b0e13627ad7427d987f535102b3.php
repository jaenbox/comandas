<?php

/* :cocinero:new.html.twig */
class __TwigTemplate_d2f41e4b793145b88bd75df32fd90858dba66cec8d1edfda558d91be13bc3a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cocinero:new.html.twig", 1);
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
        $__internal_f29c9f880e9bdf00dcaffc7ed109a5fdb16263205b452b2296c5d9e8a3e05dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29c9f880e9bdf00dcaffc7ed109a5fdb16263205b452b2296c5d9e8a3e05dc9->enter($__internal_f29c9f880e9bdf00dcaffc7ed109a5fdb16263205b452b2296c5d9e8a3e05dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cocinero:new.html.twig"));

        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f29c9f880e9bdf00dcaffc7ed109a5fdb16263205b452b2296c5d9e8a3e05dc9->leave($__internal_f29c9f880e9bdf00dcaffc7ed109a5fdb16263205b452b2296c5d9e8a3e05dc9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b38cf8e99138cfac928f8fed0b6954b763a7697cd6071ef6d2677ddc18876e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38cf8e99138cfac928f8fed0b6954b763a7697cd6071ef6d2677ddc18876e3e->enter($__internal_b38cf8e99138cfac928f8fed0b6954b763a7697cd6071ef6d2677ddc18876e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_b38cf8e99138cfac928f8fed0b6954b763a7697cd6071ef6d2677ddc18876e3e->leave($__internal_b38cf8e99138cfac928f8fed0b6954b763a7697cd6071ef6d2677ddc18876e3e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2206cd35a408d44d8d3b5599255a7934eacddbffcfdcff09f7412a782c1baf4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2206cd35a408d44d8d3b5599255a7934eacddbffcfdcff09f7412a782c1baf4f->enter($__internal_2206cd35a408d44d8d3b5599255a7934eacddbffcfdcff09f7412a782c1baf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Cocinero</h2>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listCocinero");
        echo "\">Atrás</a>
        </div>    
  \t</div>
";
        
        $__internal_2206cd35a408d44d8d3b5599255a7934eacddbffcfdcff09f7412a782c1baf4f->leave($__internal_2206cd35a408d44d8d3b5599255a7934eacddbffcfdcff09f7412a782c1baf4f_prof);

    }

    public function getTemplateName()
    {
        return ":cocinero:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  71 => 14,  67 => 13,  60 => 8,  54 => 7,  44 => 5,  38 => 4,  31 => 1,  29 => 3,  11 => 1,);
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
{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}
{% block stylesheets %}
\t{{ parent() }}
{% endblock %}
{% block body %}
<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Cocinero</h2>
        <div class=\"div_form\">
        \t<form action=\"#\" method=\"post\" {{ form_enctype(form) }}>
                {{ form_widget(form) }}
\t\t\t</form>
        </div>
        <div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listCocinero' ) }}\">Atrás</a>
        </div>    
  \t</div>
{% endblock %}", ":cocinero:new.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/cocinero/new.html.twig");
    }
}
