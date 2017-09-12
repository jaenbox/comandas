<?php

/* :camarero:new.html.twig */
class __TwigTemplate_779e3d21d485934f429aaca2fb27f3e1973fa306171fa68df345cd0ee6a2892f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":camarero:new.html.twig", 1);
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
        $__internal_e6f631c88ddb438f0e55ac508bb4cd25eccd8843b12329986325fd58dcaaa2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f631c88ddb438f0e55ac508bb4cd25eccd8843b12329986325fd58dcaaa2f4->enter($__internal_e6f631c88ddb438f0e55ac508bb4cd25eccd8843b12329986325fd58dcaaa2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":camarero:new.html.twig"));

        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f631c88ddb438f0e55ac508bb4cd25eccd8843b12329986325fd58dcaaa2f4->leave($__internal_e6f631c88ddb438f0e55ac508bb4cd25eccd8843b12329986325fd58dcaaa2f4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8de5fb891134953b5382720e86bb5ed01ae2798230dc625790d9caecce442a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de5fb891134953b5382720e86bb5ed01ae2798230dc625790d9caecce442a9f->enter($__internal_8de5fb891134953b5382720e86bb5ed01ae2798230dc625790d9caecce442a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_8de5fb891134953b5382720e86bb5ed01ae2798230dc625790d9caecce442a9f->leave($__internal_8de5fb891134953b5382720e86bb5ed01ae2798230dc625790d9caecce442a9f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_84b3b1b633b59ff70ef15bc2bfdf67a97d83983c0d8f1a225bf0df21c65ba928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b3b1b633b59ff70ef15bc2bfdf67a97d83983c0d8f1a225bf0df21c65ba928->enter($__internal_84b3b1b633b59ff70ef15bc2bfdf67a97d83983c0d8f1a225bf0df21c65ba928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Camarero</h2>
        <div class=\"div_form\">
        \t<form action=\"#\" method=\"post\" ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t</form>
        </div>
        <div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listCamarero");
        echo "\">Atrás</a>
        </div>   
  \t</div>
";
        
        $__internal_84b3b1b633b59ff70ef15bc2bfdf67a97d83983c0d8f1a225bf0df21c65ba928->leave($__internal_84b3b1b633b59ff70ef15bc2bfdf67a97d83983c0d8f1a225bf0df21c65ba928_prof);

    }

    public function getTemplateName()
    {
        return ":camarero:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  71 => 15,  67 => 14,  60 => 9,  54 => 8,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
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
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Camarero</h2>
        <div class=\"div_form\">
        \t<form action=\"#\" method=\"post\" {{ form_enctype(form) }}>
                {{ form_widget(form) }}
\t\t\t</form>
        </div>
        <div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listCamarero' ) }}\">Atrás</a>
        </div>   
  \t</div>
{% endblock %}", ":camarero:new.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/camarero/new.html.twig");
    }
}
