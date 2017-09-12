<?php

/* :comanda:new.html.twig */
class __TwigTemplate_1bddb3d59169bb4caa6aacbae6714b730c44af6653ce545bf4914b81dfca38d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comanda:new.html.twig", 1);
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
        $__internal_4eba39a0114020eb8c33102cf98f5c1478b1d6efaabf8aeeafab37ffba4af3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eba39a0114020eb8c33102cf98f5c1478b1d6efaabf8aeeafab37ffba4af3cc->enter($__internal_4eba39a0114020eb8c33102cf98f5c1478b1d6efaabf8aeeafab37ffba4af3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comanda:new.html.twig"));

        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eba39a0114020eb8c33102cf98f5c1478b1d6efaabf8aeeafab37ffba4af3cc->leave($__internal_4eba39a0114020eb8c33102cf98f5c1478b1d6efaabf8aeeafab37ffba4af3cc_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afe0534dbdcb32fa52d96bc0cc573539c457c67670400a6d1b67de903559ec42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe0534dbdcb32fa52d96bc0cc573539c457c67670400a6d1b67de903559ec42->enter($__internal_afe0534dbdcb32fa52d96bc0cc573539c457c67670400a6d1b67de903559ec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_afe0534dbdcb32fa52d96bc0cc573539c457c67670400a6d1b67de903559ec42->leave($__internal_afe0534dbdcb32fa52d96bc0cc573539c457c67670400a6d1b67de903559ec42_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7df4008e3015723e51f677d72c6f469b4b6635d1ad19c72d87de1f29392a61c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df4008e3015723e51f677d72c6f469b4b6635d1ad19c72d87de1f29392a61c7->enter($__internal_7df4008e3015723e51f677d72c6f469b4b6635d1ad19c72d87de1f29392a61c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Comandas</h1>
    
        <h2 class=\"sub-header\">Create/Edit</h2>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listComanda");
        echo "\">Atrás</a>
        </div>
  \t</div>
";
        
        $__internal_7df4008e3015723e51f677d72c6f469b4b6635d1ad19c72d87de1f29392a61c7->leave($__internal_7df4008e3015723e51f677d72c6f469b4b6635d1ad19c72d87de1f29392a61c7_prof);

    }

    public function getTemplateName()
    {
        return ":comanda:new.html.twig";
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
    \t<h1 class=\"page-header\">Comandas</h1>
    
        <h2 class=\"sub-header\">Create/Edit</h2>
        <div class=\"div_form\">
        \t<form action=\"#\" method=\"post\" {{ form_enctype(form) }}>
                {{ form_widget(form) }}
\t\t\t</form>
        </div>
       \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listComanda' ) }}\">Atrás</a>
        </div>
  \t</div>
{% endblock %}", ":comanda:new.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/comanda/new.html.twig");
    }
}
