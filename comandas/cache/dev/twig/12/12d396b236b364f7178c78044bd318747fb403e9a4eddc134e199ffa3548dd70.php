<?php

/* :pedido:new.html.twig */
class __TwigTemplate_eccc34deabec4a962b26a9ebe67a8e5863c7abc33b711cd8b0f2a1a38529aeac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:new.html.twig", 1);
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
        $__internal_460c7b0e3f500a61c398d9e33c76d0adc74d98d7a40e0c9db51b1bd5b5bf0869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460c7b0e3f500a61c398d9e33c76d0adc74d98d7a40e0c9db51b1bd5b5bf0869->enter($__internal_460c7b0e3f500a61c398d9e33c76d0adc74d98d7a40e0c9db51b1bd5b5bf0869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_460c7b0e3f500a61c398d9e33c76d0adc74d98d7a40e0c9db51b1bd5b5bf0869->leave($__internal_460c7b0e3f500a61c398d9e33c76d0adc74d98d7a40e0c9db51b1bd5b5bf0869_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68fcc23d5efbe318977ea1deca9e8f428b537638b6483e838d6c4545e87f171a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68fcc23d5efbe318977ea1deca9e8f428b537638b6483e838d6c4545e87f171a->enter($__internal_68fcc23d5efbe318977ea1deca9e8f428b537638b6483e838d6c4545e87f171a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_68fcc23d5efbe318977ea1deca9e8f428b537638b6483e838d6c4545e87f171a->leave($__internal_68fcc23d5efbe318977ea1deca9e8f428b537638b6483e838d6c4545e87f171a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_29d2fc8c18b174529e2b08327f5ff3777c52ecf521a5e36ffec4420880358f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d2fc8c18b174529e2b08327f5ff3777c52ecf521a5e36ffec4420880358f63->enter($__internal_29d2fc8c18b174529e2b08327f5ff3777c52ecf521a5e36ffec4420880358f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Pedido</h1>
    
        <h2 class=\"sub-header\">Añadir pedido</h2>
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
        
        $__internal_29d2fc8c18b174529e2b08327f5ff3777c52ecf521a5e36ffec4420880358f63->leave($__internal_29d2fc8c18b174529e2b08327f5ff3777c52ecf521a5e36ffec4420880358f63_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:new.html.twig";
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
    \t<h1 class=\"page-header\">Pedido</h1>
    
        <h2 class=\"sub-header\">Añadir pedido</h2>
        <div class=\"div_form\">
        \t<form action=\"#\" method=\"post\" {{ form_enctype(form) }}>
                {{ form_widget(form) }}
\t\t\t</form>
        </div>
       \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listPlato' ) }}\">Atrás</a>
        </div>  
  \t</div>
{% endblock %}", ":pedido:new.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/pedido/new.html.twig");
    }
}
