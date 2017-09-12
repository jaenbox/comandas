<?php

/* :plato:show.html.twig */
class __TwigTemplate_6c1b1ba6240ce19f3bd7db4b5b5f4a2b20d219593d5cf9813005f58208075954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":plato:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_a7bad83fce57afa30992ca75600468e95ab9dca31ab0b2ef21cc7c75a8f99b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bad83fce57afa30992ca75600468e95ab9dca31ab0b2ef21cc7c75a8f99b7e->enter($__internal_a7bad83fce57afa30992ca75600468e95ab9dca31ab0b2ef21cc7c75a8f99b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":plato:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7bad83fce57afa30992ca75600468e95ab9dca31ab0b2ef21cc7c75a8f99b7e->leave($__internal_a7bad83fce57afa30992ca75600468e95ab9dca31ab0b2ef21cc7c75a8f99b7e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_de2e7833c380b15034e06f06a1f7f83293125d63ee5b150599d6e10faa4a365c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2e7833c380b15034e06f06a1f7f83293125d63ee5b150599d6e10faa4a365c->enter($__internal_de2e7833c380b15034e06f06a1f7f83293125d63ee5b150599d6e10faa4a365c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Plato ";
        
        $__internal_de2e7833c380b15034e06f06a1f7f83293125d63ee5b150599d6e10faa4a365c->leave($__internal_de2e7833c380b15034e06f06a1f7f83293125d63ee5b150599d6e10faa4a365c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54a036df892a05bb0b5c07839c55fb1347f5e230478c7371e7a250cb36627308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a036df892a05bb0b5c07839c55fb1347f5e230478c7371e7a250cb36627308->enter($__internal_54a036df892a05bb0b5c07839c55fb1347f5e230478c7371e7a250cb36627308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_54a036df892a05bb0b5c07839c55fb1347f5e230478c7371e7a250cb36627308->leave($__internal_54a036df892a05bb0b5c07839c55fb1347f5e230478c7371e7a250cb36627308_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1306fe1651261a26751f1c78147f5ee0655e8d4da9b2941aeee9bedb5b83b8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1306fe1651261a26751f1c78147f5ee0655e8d4da9b2941aeee9bedb5b83b8c9->enter($__internal_1306fe1651261a26751f1c78147f5ee0655e8d4da9b2941aeee9bedb5b83b8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Plato</h1>
        <h2 class=\"sub-header\">Show</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th></th><td><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ((("http://localhost/dws/web/uploads/documents/" . $this->getAttribute((isset($context["plato"]) ? $context["plato"] : $this->getContext($context, "plato")), "id", array())) . ".") . $this->getAttribute((isset($context["plato"]) ? $context["plato"] : $this->getContext($context, "plato")), "path", array())), "html", null, true);
        echo "\" class=\"img-thumbnail\" width=\"700\" height=\"300\" border=\"0\" alt=\"img plato\"></td></tr>
    \t\t\t\t\t
    \t\t\t\t\t<tr><th>Category</th>
    \t\t\t\t\t\t<td>";
        // line 19
        if (($this->getAttribute((isset($context["plato"]) ? $context["plato"] : $this->getContext($context, "plato")), "category", array()) == "al")) {
            // line 20
            echo "\t\t\t\t\t\t\t\t\talmuerzo</td>
\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 21
(isset($context["plato"]) ? $context["plato"] : $this->getContext($context, "plato")), "category", array()) == "co")) {
            // line 22
            echo "\t\t\t\t\t\t\t\t\tcomida</td>
\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 23
(isset($context["plato"]) ? $context["plato"] : $this->getContext($context, "plato")), "category", array()) == "ce")) {
            // line 24
            echo "\t\t\t\t\t\t\t\t\tcena</td>
\t\t\t\t\t\t\t\t";
        }
        // line 25
        echo "</tr>
    \t\t\t\t\t<tr><th>Price</th><td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plato"]) ? $context["plato"] : $this->getContext($context, "plato")), "price", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Description</th><td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plato"]) ? $context["plato"] : $this->getContext($context, "plato")), "description", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listPlato");
        echo "\">Atrás</a>
        </div>
\t</div>
";
        
        $__internal_1306fe1651261a26751f1c78147f5ee0655e8d4da9b2941aeee9bedb5b83b8c9->leave($__internal_1306fe1651261a26751f1c78147f5ee0655e8d4da9b2941aeee9bedb5b83b8c9_prof);

    }

    public function getTemplateName()
    {
        return ":plato:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  107 => 27,  103 => 26,  100 => 25,  96 => 24,  94 => 23,  91 => 22,  89 => 21,  86 => 20,  84 => 19,  78 => 16,  70 => 10,  64 => 9,  54 => 6,  48 => 5,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% trans_default_domain 'AppBundle' %}

{% block title %} Plato {% endblock %}
{% block stylesheets %}
\t{{ parent() }}
{% endblock %}

{% block body %}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Plato</h1>
        <h2 class=\"sub-header\">Show</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th></th><td><img src=\"{{ 'http://localhost/dws/web/uploads/documents/'~plato.id~'.'~plato.path }}\" class=\"img-thumbnail\" width=\"700\" height=\"300\" border=\"0\" alt=\"img plato\"></td></tr>
    \t\t\t\t\t
    \t\t\t\t\t<tr><th>Category</th>
    \t\t\t\t\t\t<td>{% if plato.category == 'al' %}
\t\t\t\t\t\t\t\t\talmuerzo</td>
\t\t\t\t\t\t\t\t{% elseif plato.category == 'co' %}
\t\t\t\t\t\t\t\t\tcomida</td>
\t\t\t\t\t\t\t\t{% elseif plato.category == 'ce' %}
\t\t\t\t\t\t\t\t\tcena</td>
\t\t\t\t\t\t\t\t{% endif %}</tr>
    \t\t\t\t\t<tr><th>Price</th><td>{{ plato.price }}</td></tr>
    \t\t\t\t\t<tr><th>Description</th><td>{{ plato.description }}</td></tr>
    \t\t\t\t\t
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listPlato' ) }}\">Atrás</a>
        </div>
\t</div>
{% endblock %}", ":plato:show.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/plato/show.html.twig");
    }
}
