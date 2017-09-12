<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c8e1a5ed31517af604840d1a6428d61dc30605c9ff5affd42fa51dc4f9b0b04e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_975216dd76373612a553fa6848c3e9f37fddeb0134f54697a3d1834127f2f7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975216dd76373612a553fa6848c3e9f37fddeb0134f54697a3d1834127f2f7ae->enter($__internal_975216dd76373612a553fa6848c3e9f37fddeb0134f54697a3d1834127f2f7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_975216dd76373612a553fa6848c3e9f37fddeb0134f54697a3d1834127f2f7ae->leave($__internal_975216dd76373612a553fa6848c3e9f37fddeb0134f54697a3d1834127f2f7ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6beef6e6e9da1b0b715eba4375cdeb5f10596a16c6d8aa86f81555aa936b1ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6beef6e6e9da1b0b715eba4375cdeb5f10596a16c6d8aa86f81555aa936b1ded->enter($__internal_6beef6e6e9da1b0b715eba4375cdeb5f10596a16c6d8aa86f81555aa936b1ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6beef6e6e9da1b0b715eba4375cdeb5f10596a16c6d8aa86f81555aa936b1ded->leave($__internal_6beef6e6e9da1b0b715eba4375cdeb5f10596a16c6d8aa86f81555aa936b1ded_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9090cca1c5da79c9a0ae6a21c5745bd36dbffb479ed22dcf8bd9805820e8f898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9090cca1c5da79c9a0ae6a21c5745bd36dbffb479ed22dcf8bd9805820e8f898->enter($__internal_9090cca1c5da79c9a0ae6a21c5745bd36dbffb479ed22dcf8bd9805820e8f898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9090cca1c5da79c9a0ae6a21c5745bd36dbffb479ed22dcf8bd9805820e8f898->leave($__internal_9090cca1c5da79c9a0ae6a21c5745bd36dbffb479ed22dcf8bd9805820e8f898_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
