<?php

/* :pedido:search.html.twig */
class __TwigTemplate_d4b629574dc8db555a6ab568ba22301d7829bb94ec2af2b8ed49ccc427f1c43c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:search.html.twig", 1);
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
        $__internal_7576bae1ee834349c5f7356e96e12f4abab5b0200f7e9b3da9f12157e6226ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7576bae1ee834349c5f7356e96e12f4abab5b0200f7e9b3da9f12157e6226ab3->enter($__internal_7576bae1ee834349c5f7356e96e12f4abab5b0200f7e9b3da9f12157e6226ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:search.html.twig"));

        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7576bae1ee834349c5f7356e96e12f4abab5b0200f7e9b3da9f12157e6226ab3->leave($__internal_7576bae1ee834349c5f7356e96e12f4abab5b0200f7e9b3da9f12157e6226ab3_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5efbb06f50a1b573518b5d0802b5145b1688945a7233c154181abf26599befad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efbb06f50a1b573518b5d0802b5145b1688945a7233c154181abf26599befad->enter($__internal_5efbb06f50a1b573518b5d0802b5145b1688945a7233c154181abf26599befad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5efbb06f50a1b573518b5d0802b5145b1688945a7233c154181abf26599befad->leave($__internal_5efbb06f50a1b573518b5d0802b5145b1688945a7233c154181abf26599befad_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_09560e208796c48297bedd22b24afc893fe080a7ecc7b4e8d0edb830860af617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09560e208796c48297bedd22b24afc893fe080a7ecc7b4e8d0edb830860af617->enter($__internal_09560e208796c48297bedd22b24afc893fe080a7ecc7b4e8d0edb830860af617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        echo "
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Filtrar Pedidos</h1>
    \t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 12
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "fecha", array()), "html", null, true);
            echo "</td>\t\t\t\t
\t\t\t\t
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "   \t</div>
";
        
        $__internal_09560e208796c48297bedd22b24afc893fe080a7ecc7b4e8d0edb830860af617->leave($__internal_09560e208796c48297bedd22b24afc893fe080a7ecc7b4e8d0edb830860af617_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  73 => 13,  70 => 12,  66 => 11,  60 => 8,  54 => 7,  44 => 5,  38 => 4,  31 => 1,  29 => 2,  11 => 1,);
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
{{ dump(pedidos) }}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Filtrar Pedidos</h1>
    \t{% for pedido in pedidos %}
\t\t\t<tr>
\t\t\t\t<td>{{ pedido.fecha }}</td>\t\t\t\t
\t\t\t\t
\t\t\t</tr>
\t\t{% endfor %}
   \t</div>
{% endblock %}", ":pedido:search.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/pedido/search.html.twig");
    }
}
