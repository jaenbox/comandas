<?php

/* administrador/show.html.twig */
class __TwigTemplate_3b321b40914227892ec442555c709ad034cc23859fbc9e843a9c0282c3431f8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "administrador/show.html.twig", 2);
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
        $__internal_c97699bff769e1af747da72a5b9de5729fc88ab95b8a965cdd9bc3da00e9adc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97699bff769e1af747da72a5b9de5729fc88ab95b8a965cdd9bc3da00e9adc2->enter($__internal_c97699bff769e1af747da72a5b9de5729fc88ab95b8a965cdd9bc3da00e9adc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administrador/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c97699bff769e1af747da72a5b9de5729fc88ab95b8a965cdd9bc3da00e9adc2->leave($__internal_c97699bff769e1af747da72a5b9de5729fc88ab95b8a965cdd9bc3da00e9adc2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d8eb7ec7095e757fcf592f0be0677ceba2ce701e4feeb5428af268d71de3868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8eb7ec7095e757fcf592f0be0677ceba2ce701e4feeb5428af268d71de3868->enter($__internal_7d8eb7ec7095e757fcf592f0be0677ceba2ce701e4feeb5428af268d71de3868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administrador ";
        
        $__internal_7d8eb7ec7095e757fcf592f0be0677ceba2ce701e4feeb5428af268d71de3868->leave($__internal_7d8eb7ec7095e757fcf592f0be0677ceba2ce701e4feeb5428af268d71de3868_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e1280578d09a5bb128b76c4b97e4040c8622e22f3a7d4a3ff50f35548647ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1280578d09a5bb128b76c4b97e4040c8622e22f3a7d4a3ff50f35548647ef5->enter($__internal_2e1280578d09a5bb128b76c4b97e4040c8622e22f3a7d4a3ff50f35548647ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_2e1280578d09a5bb128b76c4b97e4040c8622e22f3a7d4a3ff50f35548647ef5->leave($__internal_2e1280578d09a5bb128b76c4b97e4040c8622e22f3a7d4a3ff50f35548647ef5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_348aa0f499d09f3e3654512a7029b78d88e6c4a1ef07cef83dfa78e54d599325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348aa0f499d09f3e3654512a7029b78d88e6c4a1ef07cef83dfa78e54d599325->enter($__internal_348aa0f499d09f3e3654512a7029b78d88e6c4a1ef07cef83dfa78e54d599325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
        <h2 class=\"sub-header\">Administrador</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th><i class=\"fa fa-user fa-2x\"/></th><td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Username</th><td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "username", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Surname</th><td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "surname", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>DNI</th><td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "dni", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-at fa-2x\"/></th><td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "email", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-phone-square fa-2x\"/></th><td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "phone", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Address</th><td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "address", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAdmin");
        echo "\">Atrás</a>
        </div>
\t</div>

";
        
        $__internal_348aa0f499d09f3e3654512a7029b78d88e6c4a1ef07cef83dfa78e54d599325->leave($__internal_348aa0f499d09f3e3654512a7029b78d88e6c4a1ef07cef83dfa78e54d599325_prof);

    }

    public function getTemplateName()
    {
        return "administrador/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  70 => 11,  64 => 10,  54 => 7,  48 => 6,  36 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/Administrador/show.html.twig #}
{% extends \"base.html.twig\" %}
{% trans_default_domain 'AppBundle' %}

{% block title %} Administrador {% endblock %}
{% block stylesheets %}
\t{{ parent() }}
{% endblock %}

{% block body %}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
        <h2 class=\"sub-header\">Administrador</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th><i class=\"fa fa-user fa-2x\"/></th><td>{{ admin.id }}</td></tr>
    \t\t\t\t\t<tr><th>Username</th><td>{{ admin.username }}</td></tr>
    \t\t\t\t\t<tr><th>Surname</th><td>{{ admin.surname }}</td></tr>
    \t\t\t\t\t<tr><th>DNI</th><td>{{ admin.dni }}</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-at fa-2x\"/></th><td>{{ admin.email }}</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-phone-square fa-2x\"/></th><td>{{ admin.phone }}</td></tr>
    \t\t\t\t\t<tr><th>Address</th><td>{{ admin.address }}</td></tr>
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listAdmin' ) }}\">Atrás</a>
        </div>
\t</div>

{% endblock %}
", "administrador/show.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/administrador/show.html.twig");
    }
}
