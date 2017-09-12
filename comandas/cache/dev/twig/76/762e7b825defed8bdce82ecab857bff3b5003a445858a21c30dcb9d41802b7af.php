<?php

/* :mesa:new.html.twig */
class __TwigTemplate_ae0ec46622345133fbef8e645e6f3ed561c868e09468d36411731c23aa6b7c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":mesa:new.html.twig", 1);
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
        $__internal_767a3e66dc87321d19a19f3754d031712abfbca0491a96ad4823c3d7a9b271c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767a3e66dc87321d19a19f3754d031712abfbca0491a96ad4823c3d7a9b271c1->enter($__internal_767a3e66dc87321d19a19f3754d031712abfbca0491a96ad4823c3d7a9b271c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mesa:new.html.twig"));

        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767a3e66dc87321d19a19f3754d031712abfbca0491a96ad4823c3d7a9b271c1->leave($__internal_767a3e66dc87321d19a19f3754d031712abfbca0491a96ad4823c3d7a9b271c1_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_399af416e8b71603611931078c7db1be0dd4f55160292b013157627565b42bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399af416e8b71603611931078c7db1be0dd4f55160292b013157627565b42bc7->enter($__internal_399af416e8b71603611931078c7db1be0dd4f55160292b013157627565b42bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_399af416e8b71603611931078c7db1be0dd4f55160292b013157627565b42bc7->leave($__internal_399af416e8b71603611931078c7db1be0dd4f55160292b013157627565b42bc7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c766986224deb6051a3ec31b809399db439314d3b8f57e189a19c32c1817d719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c766986224deb6051a3ec31b809399db439314d3b8f57e189a19c32c1817d719->enter($__internal_c766986224deb6051a3ec31b809399db439314d3b8f57e189a19c32c1817d719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Mesa</h1>
    
        <h2 class=\"sub-header\">Añadir mesa</h2>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listMesa");
        echo "\">Atrás</a>
        </div>    
  \t</div>
";
        
        $__internal_c766986224deb6051a3ec31b809399db439314d3b8f57e189a19c32c1817d719->leave($__internal_c766986224deb6051a3ec31b809399db439314d3b8f57e189a19c32c1817d719_prof);

    }

    public function getTemplateName()
    {
        return ":mesa:new.html.twig";
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
    \t<h1 class=\"page-header\">Mesa</h1>
    
        <h2 class=\"sub-header\">Añadir mesa</h2>
        <div class=\"div_form\">
        \t<form action=\"#\" method=\"post\" {{ form_enctype(form) }}>
                {{ form_widget(form) }}
\t\t\t</form>
        </div>
        <div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listMesa' ) }}\">Atrás</a>
        </div>    
  \t</div>
{% endblock %}
", ":mesa:new.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/mesa/new.html.twig");
    }
}
