<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1040b8834b100185615a8039b6b545f76f63a242675b916e2397c04a2dd9e08d extends Twig_Template
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
        $__internal_4a7864c070594397487d118b19e43c22259f940717ddbf97e52a899baf7f3ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7864c070594397487d118b19e43c22259f940717ddbf97e52a899baf7f3ec5->enter($__internal_4a7864c070594397487d118b19e43c22259f940717ddbf97e52a899baf7f3ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a7864c070594397487d118b19e43c22259f940717ddbf97e52a899baf7f3ec5->leave($__internal_4a7864c070594397487d118b19e43c22259f940717ddbf97e52a899baf7f3ec5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_735c438c2edb2343bdf039c6afcd9e97b8936b700854aadfc0be83fd82de5369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735c438c2edb2343bdf039c6afcd9e97b8936b700854aadfc0be83fd82de5369->enter($__internal_735c438c2edb2343bdf039c6afcd9e97b8936b700854aadfc0be83fd82de5369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_735c438c2edb2343bdf039c6afcd9e97b8936b700854aadfc0be83fd82de5369->leave($__internal_735c438c2edb2343bdf039c6afcd9e97b8936b700854aadfc0be83fd82de5369_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4bd810fe867c4e5ef01bf3ec3f9a2e7f868e95a17cb2520c6d93fb873d0143d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bd810fe867c4e5ef01bf3ec3f9a2e7f868e95a17cb2520c6d93fb873d0143d->enter($__internal_d4bd810fe867c4e5ef01bf3ec3f9a2e7f868e95a17cb2520c6d93fb873d0143d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d4bd810fe867c4e5ef01bf3ec3f9a2e7f868e95a17cb2520c6d93fb873d0143d->leave($__internal_d4bd810fe867c4e5ef01bf3ec3f9a2e7f868e95a17cb2520c6d93fb873d0143d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f07115d1210062b647d63bb44122c372e6f768f1e806f557754bdec7aa637e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07115d1210062b647d63bb44122c372e6f768f1e806f557754bdec7aa637e1b->enter($__internal_f07115d1210062b647d63bb44122c372e6f768f1e806f557754bdec7aa637e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f07115d1210062b647d63bb44122c372e6f768f1e806f557754bdec7aa637e1b->leave($__internal_f07115d1210062b647d63bb44122c372e6f768f1e806f557754bdec7aa637e1b_prof);

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
