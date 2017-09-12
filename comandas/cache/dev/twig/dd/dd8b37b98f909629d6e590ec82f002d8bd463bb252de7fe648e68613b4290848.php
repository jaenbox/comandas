<?php

/* :cocinero:list.html.twig */
class __TwigTemplate_ce7293c210577aff7bb68418d520249075fa8906d29bdb76e1f8e6f65f5fe46a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cocinero:list.html.twig", 1);
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
        $__internal_7644964acd85e8ee1aee995da33b4b35408e55ad468d920e3b1d3e7c9aa644c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7644964acd85e8ee1aee995da33b4b35408e55ad468d920e3b1d3e7c9aa644c6->enter($__internal_7644964acd85e8ee1aee995da33b4b35408e55ad468d920e3b1d3e7c9aa644c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cocinero:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7644964acd85e8ee1aee995da33b4b35408e55ad468d920e3b1d3e7c9aa644c6->leave($__internal_7644964acd85e8ee1aee995da33b4b35408e55ad468d920e3b1d3e7c9aa644c6_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e61ef4ff11581237c546c3a50778bd32c577bbdeefc4bf79874bb02b1db9aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e61ef4ff11581237c546c3a50778bd32c577bbdeefc4bf79874bb02b1db9aea->enter($__internal_0e61ef4ff11581237c546c3a50778bd32c577bbdeefc4bf79874bb02b1db9aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_0e61ef4ff11581237c546c3a50778bd32c577bbdeefc4bf79874bb02b1db9aea->leave($__internal_0e61ef4ff11581237c546c3a50778bd32c577bbdeefc4bf79874bb02b1db9aea_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_605c8c784ed44d0b5cd217267c480c1b09a2cf853ce70c4c5ea9eb113e8e5f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605c8c784ed44d0b5cd217267c480c1b09a2cf853ce70c4c5ea9eb113e8e5f89->enter($__internal_605c8c784ed44d0b5cd217267c480c1b09a2cf853ce70c4c5ea9eb113e8e5f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Cocineros</h2>
            <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
              \t<tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th></th>                  
                </tr>
              </thead>
              <tbody>
              \t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cocineros"]) ? $context["cocineros"] : $this->getContext($context, "cocineros")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 24
            echo "              \t\t<tr>
              \t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "username", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "phone", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "email", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>              \t\t\t
              \t\t\t\t<div class=\"btn-group\">
                  \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showCocinero", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editCocinero", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
              \t\t\t\t</div>
              \t\t\t</td>                       \t\t\t
              \t\t</tr>
              \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "              </tbody>
            </table>
    \t</div>
    \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Atrás</a>
        </div>  
  \t</div>
";
        
        $__internal_605c8c784ed44d0b5cd217267c480c1b09a2cf853ce70c4c5ea9eb113e8e5f89->leave($__internal_605c8c784ed44d0b5cd217267c480c1b09a2cf853ce70c4c5ea9eb113e8e5f89_prof);

    }

    public function getTemplateName()
    {
        return ":cocinero:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  110 => 36,  99 => 31,  95 => 30,  89 => 27,  85 => 26,  81 => 25,  78 => 24,  74 => 23,  57 => 8,  51 => 7,  41 => 5,  35 => 4,  11 => 1,);
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
{% block stylesheets %}
\t{{ parent() }}
{% endblock %}
{% block body %}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Cocineros</h2>
            <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
              \t<tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th></th>                  
                </tr>
              </thead>
              <tbody>
              \t{% for a in cocineros %}
              \t\t<tr>
              \t\t\t<td>{{ a.username }}</td>
              \t\t\t<td>{{ a.phone }}</td>
              \t\t\t<td>{{ a.email }}</td>
              \t\t\t<td>              \t\t\t
              \t\t\t\t<div class=\"btn-group\">
                  \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"{{ path( 'showCocinero', { 'id': a.id } ) }}\">Show</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"{{ path( 'editCocinero', { 'id': a.id } ) }}\">Edit</a>
              \t\t\t\t</div>
              \t\t\t</td>                       \t\t\t
              \t\t</tr>
              \t{% endfor %}
              </tbody>
            </table>
    \t</div>
    \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'index' ) }}\">Atrás</a>
        </div>  
  \t</div>
{% endblock %}", ":cocinero:list.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/cocinero/list.html.twig");
    }
}
