<?php

/* plato/list.html.twig */
class __TwigTemplate_5ca88570fb647aa88b7191390536bb1185efc1fdd9c0286bacbff6ba243a6eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "plato/list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0503338a53c6b58eda2924de6667b22c74e371702a4e1e0cf7665b4305afff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0503338a53c6b58eda2924de6667b22c74e371702a4e1e0cf7665b4305afff0->enter($__internal_c0503338a53c6b58eda2924de6667b22c74e371702a4e1e0cf7665b4305afff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "plato/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0503338a53c6b58eda2924de6667b22c74e371702a4e1e0cf7665b4305afff0->leave($__internal_c0503338a53c6b58eda2924de6667b22c74e371702a4e1e0cf7665b4305afff0_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_355a29b97268ca232455c6611149b7f62d16cfc7036ac928dace5c4fa4da03ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355a29b97268ca232455c6611149b7f62d16cfc7036ac928dace5c4fa4da03ad->enter($__internal_355a29b97268ca232455c6611149b7f62d16cfc7036ac928dace5c4fa4da03ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_355a29b97268ca232455c6611149b7f62d16cfc7036ac928dace5c4fa4da03ad->leave($__internal_355a29b97268ca232455c6611149b7f62d16cfc7036ac928dace5c4fa4da03ad_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5e452ae0fa2698a96e405e32f6cee5c4f17ff7aac85803ccab0005b6127b2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e452ae0fa2698a96e405e32f6cee5c4f17ff7aac85803ccab0005b6127b2c3->enter($__internal_d5e452ae0fa2698a96e405e32f6cee5c4f17ff7aac85803ccab0005b6127b2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Platos";
        
        $__internal_d5e452ae0fa2698a96e405e32f6cee5c4f17ff7aac85803ccab0005b6127b2c3->leave($__internal_d5e452ae0fa2698a96e405e32f6cee5c4f17ff7aac85803ccab0005b6127b2c3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_de7bec327107be21c565cb22ba4149dfefd51dae825aa8a4c0a508d1e1ee9fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7bec327107be21c565cb22ba4149dfefd51dae825aa8a4c0a508d1e1ee9fc3->enter($__internal_de7bec327107be21c565cb22ba4149dfefd51dae825aa8a4c0a508d1e1ee9fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Platos</h1>
        <h2 class=\"sub-header\">Selección platos</h2>
        <div class=\"border-right\">
        \t<a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newPlato");
        echo "\">Añadir</a>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">    \t\t\t
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Img</td>
\t\t\t\t\t\t<td>Nombre</td>\t\t\t\t\t\t
\t\t\t\t\t\t<td>Categoria</td>
\t\t\t\t\t\t<td>Price</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["platos"]) ? $context["platos"] : $this->getContext($context, "platos")));
        foreach ($context['_seq'] as $context["_key"] => $context["plato"]) {
            // line 30
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, ((("http://localhost/dws/web/uploads/documents/" . $this->getAttribute($context["plato"], "id", array())) . ".") . $this->getAttribute($context["plato"], "path", array())), "html", null, true);
            echo "\" class=\"img-circle\" width=\"100\" height=\"100\" border=\"0\" alt=\"img plato\"></td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["plato"], "name", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>";
            // line 33
            if (($this->getAttribute($context["plato"], "category", array()) == "al")) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\talmuerzo</td>
\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 35
$context["plato"], "category", array()) == "co")) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\tcomida</td>
\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 37
$context["plato"], "category", array()) == "ce")) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\tcena</td>
\t\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plato"], "price", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 42
            echo "\t\t\t\t\t\t\t<td>              \t\t\t
                  \t\t\t\t<div class=\"btn-group\">
                      \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showPlato", array("id" => $this->getAttribute($context["plato"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editPlato", array("id" => $this->getAttribute($context["plato"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-danger btn_table active\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletePlato", array("id" => $this->getAttribute($context["plato"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                  \t\t\t\t</div>
                  \t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Atrás</a>
        </div>\t
\t</div>
";
        
        $__internal_de7bec327107be21c565cb22ba4149dfefd51dae825aa8a4c0a508d1e1ee9fc3->leave($__internal_de7bec327107be21c565cb22ba4149dfefd51dae825aa8a4c0a508d1e1ee9fc3_prof);

    }

    public function getTemplateName()
    {
        return "plato/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 55,  152 => 51,  141 => 46,  137 => 45,  133 => 44,  129 => 42,  124 => 40,  120 => 38,  118 => 37,  115 => 36,  113 => 35,  110 => 34,  108 => 33,  104 => 32,  100 => 31,  97 => 30,  93 => 29,  76 => 15,  70 => 11,  64 => 10,  52 => 8,  42 => 5,  36 => 4,  11 => 1,);
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

{% block title %}Platos{% endblock %}

{% block body %}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Platos</h1>
        <h2 class=\"sub-header\">Selección platos</h2>
        <div class=\"border-right\">
        \t<a type=\"button\" class=\"btn btn-primary\" href=\"{{ path( 'newPlato' ) }}\">Añadir</a>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">    \t\t\t
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Img</td>
\t\t\t\t\t\t<td>Nombre</td>\t\t\t\t\t\t
\t\t\t\t\t\t<td>Categoria</td>
\t\t\t\t\t\t<td>Price</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for plato in platos %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><img src=\"{{ 'http://localhost/dws/web/uploads/documents/'~plato.id~'.'~plato.path }}\" class=\"img-circle\" width=\"100\" height=\"100\" border=\"0\" alt=\"img plato\"></td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>{{ plato.name }}</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>{% if plato.category == 'al' %}
\t\t\t\t\t\t\t\t\talmuerzo</td>
\t\t\t\t\t\t\t\t{% elseif plato.category == 'co' %}
\t\t\t\t\t\t\t\t\tcomida</td>
\t\t\t\t\t\t\t\t{% elseif plato.category == 'ce' %}
\t\t\t\t\t\t\t\t\tcena</td>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<td>{{ plato.price}}</td>
\t\t\t\t\t\t\t{# <td><img src=\"{{ asset('uploads/documents/'~ plato.id~ '.'~ plato.path) }}\" width=\"30\" height=\"30\" border=\"0\" alt=\"Img del plato\"></td>#}
\t\t\t\t\t\t\t<td>              \t\t\t
                  \t\t\t\t<div class=\"btn-group\">
                      \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"{{ path( 'showPlato', { 'id': plato.id } ) }}\">Show</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"{{ path( 'editPlato', { 'id': plato.id } ) }}\">Edit</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-danger btn_table active\" href=\"{{ path( 'deletePlato', { 'id': plato.id } ) }}\">Delete</a>
                  \t\t\t\t</div>
                  \t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t    {% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'index' ) }}\">Atrás</a>
        </div>\t
\t</div>
{% endblock %}", "plato/list.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/plato/list.html.twig");
    }
}
