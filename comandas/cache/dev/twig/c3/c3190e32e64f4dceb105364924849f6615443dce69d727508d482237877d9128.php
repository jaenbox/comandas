<?php

/* pedido/show.html.twig */
class __TwigTemplate_51c3fbd19d9c4590e9b7e3e62d0c43f8c44d7d2249ebc6a2bfa8ab86e9c6ef07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/show.html.twig", 1);
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
        $__internal_b5ebae5fb9de2c4a55f30f0621321b11eaa55beb84978c1c41d2365c6bbe1c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ebae5fb9de2c4a55f30f0621321b11eaa55beb84978c1c41d2365c6bbe1c99->enter($__internal_b5ebae5fb9de2c4a55f30f0621321b11eaa55beb84978c1c41d2365c6bbe1c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5ebae5fb9de2c4a55f30f0621321b11eaa55beb84978c1c41d2365c6bbe1c99->leave($__internal_b5ebae5fb9de2c4a55f30f0621321b11eaa55beb84978c1c41d2365c6bbe1c99_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f1591f33f3219f55ef9d24ef9f7afe24d34ce8f4ea117ac8a6e40ba435aef99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1591f33f3219f55ef9d24ef9f7afe24d34ce8f4ea117ac8a6e40ba435aef99->enter($__internal_5f1591f33f3219f55ef9d24ef9f7afe24d34ce8f4ea117ac8a6e40ba435aef99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5f1591f33f3219f55ef9d24ef9f7afe24d34ce8f4ea117ac8a6e40ba435aef99->leave($__internal_5f1591f33f3219f55ef9d24ef9f7afe24d34ce8f4ea117ac8a6e40ba435aef99_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_be9dd468e11f6a619c18cd20a7b32bf98b3843dae514bba7c3353e4d83885abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9dd468e11f6a619c18cd20a7b32bf98b3843dae514bba7c3353e4d83885abf->enter($__internal_be9dd468e11f6a619c18cd20a7b32bf98b3843dae514bba7c3353e4d83885abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")));
        echo "
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Pedido</h1>    
        <h2 class=\"sub-header\">Show / Lineas de pedido ";
        // line 10
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "comandas", array())), "html", null, true);
        echo "</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>      \t\t\t\t\t
    \t\t\t\t<tr><th>Pedido</th><td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t<tr><th>Fecha</th><td>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha", array()), "d-m-Y"), "html", null, true);
        echo "</td></tr>
    \t\t\t\t<tr><th>Pagado</th><td>";
        // line 16
        if (($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "isPagado", array()) == "0")) {
            // line 17
            echo "                        \t\t\timpago</td>
                        \t\t    ";
        } else {
            // line 19
            echo "                        \t\t\t\tpagado</td>
                        \t    ";
        }
        // line 20
        echo "</td></tr>
    \t\t\t\t<tr><th>Estado</th><td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t<tr><th>Mesa núm</th><td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "mesa", array()), "num", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t<tr><th>Camarero</th><td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "users", array()), "username", array()), "html", null, true);
        echo "</td></tr>    \t\t\t\t    \t\t\t\t\t
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<p></p>
\t\t<div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Plato</th>
\t\t\t\t\t\t<th>Precio</th>\t\t\t\t\t\t
\t\t\t\t\t\t<th>Observaciones</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
    \t\t\t<tbody>
    \t\t\t";
        // line 39
        $context["total"] = "";
        // line 40
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "comandas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comanda"]) {
            echo " 
                    \t<tr>
                        \t<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comanda"], "plato", array()), "name", array()), "html", null, true);
            echo "</td>
                        \t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comanda"], "plato", array()), "price", array()), "html", null, true);
            echo "</td>
                        \t<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["comanda"], "observaciones", array()), "html", null, true);
            echo "</td>
                        \t";
            // line 45
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($this->getAttribute($context["comanda"], "plato", array()), "price", array()));
            // line 46
            echo "                    \t</tr>                    \t
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comanda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    \t<tr>
                    \t\t<td></td>
                    \t\t<td></td>
                        \t<td><strong>TOTAL ";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " €</strong></td>
                        </tr>                  \t\t\t\t    \t\t\t\t\t
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>\t\t
       \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchPedido");
        echo "\">Atrás</a>
        </div>  
  \t</div>
";
        
        $__internal_be9dd468e11f6a619c18cd20a7b32bf98b3843dae514bba7c3353e4d83885abf->leave($__internal_be9dd468e11f6a619c18cd20a7b32bf98b3843dae514bba7c3353e4d83885abf_prof);

    }

    public function getTemplateName()
    {
        return "pedido/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 57,  154 => 51,  149 => 48,  142 => 46,  140 => 45,  136 => 44,  132 => 43,  128 => 42,  120 => 40,  118 => 39,  99 => 23,  95 => 22,  91 => 21,  88 => 20,  84 => 19,  80 => 17,  78 => 16,  74 => 15,  70 => 14,  63 => 10,  57 => 7,  51 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
{{ dump(pedido) }}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Pedido</h1>    
        <h2 class=\"sub-header\">Show / Lineas de pedido {{ pedido.comandas|length }}</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>      \t\t\t\t\t
    \t\t\t\t<tr><th>Pedido</th><td>{{ pedido.id }}</td></tr>
    \t\t\t\t<tr><th>Fecha</th><td>{{ pedido.fecha|date(\"d-m-Y\") }}</td></tr>
    \t\t\t\t<tr><th>Pagado</th><td>{% if pedido.isPagado == '0' %}
                        \t\t\timpago</td>
                        \t\t    {% else %}
                        \t\t\t\tpagado</td>
                        \t    {% endif %}</td></tr>
    \t\t\t\t<tr><th>Estado</th><td>{{ pedido.estado }}</td></tr>
    \t\t\t\t<tr><th>Mesa núm</th><td>{{ pedido.mesa.num }}</td></tr>
    \t\t\t\t<tr><th>Camarero</th><td>{{ pedido.users.username }}</td></tr>    \t\t\t\t    \t\t\t\t\t
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<p></p>
\t\t<div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Plato</th>
\t\t\t\t\t\t<th>Precio</th>\t\t\t\t\t\t
\t\t\t\t\t\t<th>Observaciones</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
    \t\t\t<tbody>
    \t\t\t{% set total = '' %}
                    {% for comanda in pedido.comandas %} 
                    \t<tr>
                        \t<td>{{ comanda.plato.name }}</td>
                        \t<td>{{ comanda.plato.price }}</td>
                        \t<td>{{ comanda.observaciones }}</td>
                        \t{% set total =  total + comanda.plato.price %}
                    \t</tr>                    \t
                    {% endfor %}
                    \t<tr>
                    \t\t<td></td>
                    \t\t<td></td>
                        \t<td><strong>TOTAL {{ total }} €</strong></td>
                        </tr>                  \t\t\t\t    \t\t\t\t\t
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>\t\t
       \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'searchPedido' ) }}\">Atrás</a>
        </div>  
  \t</div>
{% endblock %}

    \t\t\t", "pedido/show.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/pedido/show.html.twig");
    }
}
