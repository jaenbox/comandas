<?php

/* pedido/search.html.twig */
class __TwigTemplate_2177ca97393a7dae38c1d3aca3587df1a266328cdfdb18a0e92584fbb38cf7d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/search.html.twig", 1);
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
        $__internal_01cccf73f6a256155ecd582cddf3a5a0cb2ec0efd154767f7c258fade5c2e1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cccf73f6a256155ecd582cddf3a5a0cb2ec0efd154767f7c258fade5c2e1fc->enter($__internal_01cccf73f6a256155ecd582cddf3a5a0cb2ec0efd154767f7c258fade5c2e1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01cccf73f6a256155ecd582cddf3a5a0cb2ec0efd154767f7c258fade5c2e1fc->leave($__internal_01cccf73f6a256155ecd582cddf3a5a0cb2ec0efd154767f7c258fade5c2e1fc_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9568a473d8fb42d0e490025b273a6df44c1d2aad045a109d7d39173592c8d18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9568a473d8fb42d0e490025b273a6df44c1d2aad045a109d7d39173592c8d18a->enter($__internal_9568a473d8fb42d0e490025b273a6df44c1d2aad045a109d7d39173592c8d18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_9568a473d8fb42d0e490025b273a6df44c1d2aad045a109d7d39173592c8d18a->leave($__internal_9568a473d8fb42d0e490025b273a6df44c1d2aad045a109d7d39173592c8d18a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_125933a4cd775f9400cfdf3e083af944d9fb97950ddd7f74d21bfdddeb54dcc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125933a4cd775f9400cfdf3e083af944d9fb97950ddd7f74d21bfdddeb54dcc9->enter($__internal_125933a4cd775f9400cfdf3e083af944d9fb97950ddd7f74d21bfdddeb54dcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")));
        echo "
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Pedidos</h1>
    \t<h2 class=\"sub-header\">Listado de pedidos realizados el día ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "d-m-Y"), "html", null, true);
        echo "</h2>
    \t";
        // line 11
        if (((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")) == null)) {
            // line 12
            echo "    \t\t<p>No existen pedidos de el día ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "d-m-Y"), "html", null, true);
            echo "</p>
    \t";
        } else {
            // line 14
            echo "    \t\t<div class=\"table-responsive\">
                <table class=\"table table-striped\">    \t\t\t
    \t\t\t\t<thead>
    \t\t\t\t\t<tr>
    \t\t\t\t\t\t<td>Id</td>
    \t\t\t\t\t\t<td>Pagado</td>\t\t\t\t\t\t
    \t\t\t\t\t\t<td>estado</td>\t\t\t\t\t\t
    \t\t\t\t\t\t<td></td>
    \t\t\t\t\t</tr>
    \t\t\t\t</thead>
    \t\t\t\t<tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
            foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
                // line 26
                echo "                        <tr>
                        \t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "id", array()), "html", null, true);
                echo "</td>
                        \t<td>";
                // line 28
                if (($this->getAttribute($context["pedido"], "isPagado", array()) == "0")) {
                    // line 29
                    echo "                        \t\t\timpago</td>
                        \t\t    ";
                } else {
                    // line 31
                    echo "                        \t\t\t\tpagado</td>
                        \t    ";
                }
                // line 33
                echo "                        \t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "estado", array()), "html", null, true);
                echo "</td>
                        \t<td>              \t\t\t
                  \t\t\t\t<div class=\"btn-group\">
                      \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showPedido", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
                echo "\">Show</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editPedido", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
                echo "\">Edit</a>                      \t\t\t\t
                  \t\t\t\t</div>
                  \t\t\t</td>
                        </tr>                        \t
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                    </tbody>
    \t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"border-left\">
        \t\t<a type=\"button\" class=\"btn btn-default\" href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\">Atrás</a>
        \t</div>
    \t";
        }
        // line 49
        echo "   \t</div>
";
        
        $__internal_125933a4cd775f9400cfdf3e083af944d9fb97950ddd7f74d21bfdddeb54dcc9->leave($__internal_125933a4cd775f9400cfdf3e083af944d9fb97950ddd7f74d21bfdddeb54dcc9_prof);

    }

    public function getTemplateName()
    {
        return "pedido/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  136 => 46,  130 => 42,  119 => 37,  115 => 36,  108 => 33,  104 => 31,  100 => 29,  98 => 28,  94 => 27,  91 => 26,  87 => 25,  74 => 14,  68 => 12,  66 => 11,  62 => 10,  51 => 7,  41 => 5,  35 => 4,  11 => 1,);
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
{% block body %}{{ dump(fecha) }}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Pedidos</h1>
    \t<h2 class=\"sub-header\">Listado de pedidos realizados el día {{ fecha|date(\"d-m-Y\") }}</h2>
    \t{% if pedidos == null %}
    \t\t<p>No existen pedidos de el día {{ fecha|date(\"d-m-Y\") }}</p>
    \t{% else %}
    \t\t<div class=\"table-responsive\">
                <table class=\"table table-striped\">    \t\t\t
    \t\t\t\t<thead>
    \t\t\t\t\t<tr>
    \t\t\t\t\t\t<td>Id</td>
    \t\t\t\t\t\t<td>Pagado</td>\t\t\t\t\t\t
    \t\t\t\t\t\t<td>estado</td>\t\t\t\t\t\t
    \t\t\t\t\t\t<td></td>
    \t\t\t\t\t</tr>
    \t\t\t\t</thead>
    \t\t\t\t<tbody>
                        {% for pedido in pedidos %}
                        <tr>
                        \t<td>{{ pedido.id }}</td>
                        \t<td>{% if pedido.isPagado == '0' %}
                        \t\t\timpago</td>
                        \t\t    {% else %}
                        \t\t\t\tpagado</td>
                        \t    {% endif %}
                        \t<td>{{ pedido.estado }}</td>
                        \t<td>              \t\t\t
                  \t\t\t\t<div class=\"btn-group\">
                      \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"{{ path( 'showPedido', { 'id': pedido.id } ) }}\">Show</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"{{ path( 'editPedido', { 'id': pedido.id } ) }}\">Edit</a>                      \t\t\t\t
                  \t\t\t\t</div>
                  \t\t\t</td>
                        </tr>                        \t
                        {% endfor %}
                    </tbody>
    \t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"border-left\">
        \t\t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'index' ) }}\">Atrás</a>
        \t</div>
    \t{% endif %}
   \t</div>
{% endblock %}", "pedido/search.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/pedido/search.html.twig");
    }
}
