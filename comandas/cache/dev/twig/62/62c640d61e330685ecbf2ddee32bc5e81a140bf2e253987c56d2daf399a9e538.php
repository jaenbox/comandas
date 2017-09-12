<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_92e19cd41832aef1c0226d2b69b82529511333f4a421d709c8d9bb0e6f86dfab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e75d4e7540ad1cfe66f55a7b9545ddd6d8bc9af856acc54d52c5baa7eb6ae34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e75d4e7540ad1cfe66f55a7b9545ddd6d8bc9af856acc54d52c5baa7eb6ae34->enter($__internal_4e75d4e7540ad1cfe66f55a7b9545ddd6d8bc9af856acc54d52c5baa7eb6ae34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e75d4e7540ad1cfe66f55a7b9545ddd6d8bc9af856acc54d52c5baa7eb6ae34->leave($__internal_4e75d4e7540ad1cfe66f55a7b9545ddd6d8bc9af856acc54d52c5baa7eb6ae34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3700f2d61c47954ff84227c0e8278c2e2524dfa6df372a6c5064ddd8640a1f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3700f2d61c47954ff84227c0e8278c2e2524dfa6df372a6c5064ddd8640a1f3d->enter($__internal_3700f2d61c47954ff84227c0e8278c2e2524dfa6df372a6c5064ddd8640a1f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3700f2d61c47954ff84227c0e8278c2e2524dfa6df372a6c5064ddd8640a1f3d->leave($__internal_3700f2d61c47954ff84227c0e8278c2e2524dfa6df372a6c5064ddd8640a1f3d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_047461a7c1cb27b250e5b4916cfc8e665a579d558be326160482f342edbac619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047461a7c1cb27b250e5b4916cfc8e665a579d558be326160482f342edbac619->enter($__internal_047461a7c1cb27b250e5b4916cfc8e665a579d558be326160482f342edbac619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_047461a7c1cb27b250e5b4916cfc8e665a579d558be326160482f342edbac619->leave($__internal_047461a7c1cb27b250e5b4916cfc8e665a579d558be326160482f342edbac619_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_def7edfb66151da4b0b0bf4d3cbf50c04c56a0864a128fe8856454ad70e10ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def7edfb66151da4b0b0bf4d3cbf50c04c56a0864a128fe8856454ad70e10ccb->enter($__internal_def7edfb66151da4b0b0bf4d3cbf50c04c56a0864a128fe8856454ad70e10ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_def7edfb66151da4b0b0bf4d3cbf50c04c56a0864a128fe8856454ad70e10ccb->leave($__internal_def7edfb66151da4b0b0bf4d3cbf50c04c56a0864a128fe8856454ad70e10ccb_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b147a5b281f7a42f3184019f14b24a8f652935d675ebb3f1efb7f5aed3d235d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b147a5b281f7a42f3184019f14b24a8f652935d675ebb3f1efb7f5aed3d235d->enter($__internal_0b147a5b281f7a42f3184019f14b24a8f652935d675ebb3f1efb7f5aed3d235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0b147a5b281f7a42f3184019f14b24a8f652935d675ebb3f1efb7f5aed3d235d->leave($__internal_0b147a5b281f7a42f3184019f14b24a8f652935d675ebb3f1efb7f5aed3d235d_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
