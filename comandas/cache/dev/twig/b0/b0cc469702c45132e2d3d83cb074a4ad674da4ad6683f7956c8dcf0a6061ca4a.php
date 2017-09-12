<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0c715c5033c67ab5e3916434a6e0a44be7b53edc3bcbe1d23fb6ef461fc495f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9be768ef01b3e0e0f93b39a8c08d2a8b8ccc3bfb5033ef47d803cdd52384b518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be768ef01b3e0e0f93b39a8c08d2a8b8ccc3bfb5033ef47d803cdd52384b518->enter($__internal_9be768ef01b3e0e0f93b39a8c08d2a8b8ccc3bfb5033ef47d803cdd52384b518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be768ef01b3e0e0f93b39a8c08d2a8b8ccc3bfb5033ef47d803cdd52384b518->leave($__internal_9be768ef01b3e0e0f93b39a8c08d2a8b8ccc3bfb5033ef47d803cdd52384b518_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed4eab540d3c18844246f5a9ee220eabd616eb502fbb4e8c5b437521048cde93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4eab540d3c18844246f5a9ee220eabd616eb502fbb4e8c5b437521048cde93->enter($__internal_ed4eab540d3c18844246f5a9ee220eabd616eb502fbb4e8c5b437521048cde93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ed4eab540d3c18844246f5a9ee220eabd616eb502fbb4e8c5b437521048cde93->leave($__internal_ed4eab540d3c18844246f5a9ee220eabd616eb502fbb4e8c5b437521048cde93_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a07b79c67f7fe0873edd4d192c01a21311ab32707c8a58d580c528434eb23f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07b79c67f7fe0873edd4d192c01a21311ab32707c8a58d580c528434eb23f7e->enter($__internal_a07b79c67f7fe0873edd4d192c01a21311ab32707c8a58d580c528434eb23f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a07b79c67f7fe0873edd4d192c01a21311ab32707c8a58d580c528434eb23f7e->leave($__internal_a07b79c67f7fe0873edd4d192c01a21311ab32707c8a58d580c528434eb23f7e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_49443b381ae563cc4bc380be60b15e73b4ec6355d679e18f8f6a27374574b243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49443b381ae563cc4bc380be60b15e73b4ec6355d679e18f8f6a27374574b243->enter($__internal_49443b381ae563cc4bc380be60b15e73b4ec6355d679e18f8f6a27374574b243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_49443b381ae563cc4bc380be60b15e73b4ec6355d679e18f8f6a27374574b243->leave($__internal_49443b381ae563cc4bc380be60b15e73b4ec6355d679e18f8f6a27374574b243_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
