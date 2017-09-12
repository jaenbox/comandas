<?php

/* :cocinero:show.html.twig */
class __TwigTemplate_e40b6278de4496805c8f1dbcb91769b7d24c630a42aaf2e3b0291640305e404a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cocinero:show.html.twig", 1);
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
        $__internal_2f9c48abf1a9613da4f584d627d170b5346c4def66d739643b9a4842f45b47b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9c48abf1a9613da4f584d627d170b5346c4def66d739643b9a4842f45b47b6->enter($__internal_2f9c48abf1a9613da4f584d627d170b5346c4def66d739643b9a4842f45b47b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cocinero:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f9c48abf1a9613da4f584d627d170b5346c4def66d739643b9a4842f45b47b6->leave($__internal_2f9c48abf1a9613da4f584d627d170b5346c4def66d739643b9a4842f45b47b6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1071cd2d4af52499f5ebb9ff38257e72e10191ddc4a1b399dc926dbc838dc94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1071cd2d4af52499f5ebb9ff38257e72e10191ddc4a1b399dc926dbc838dc94a->enter($__internal_1071cd2d4af52499f5ebb9ff38257e72e10191ddc4a1b399dc926dbc838dc94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Cocinero ";
        
        $__internal_1071cd2d4af52499f5ebb9ff38257e72e10191ddc4a1b399dc926dbc838dc94a->leave($__internal_1071cd2d4af52499f5ebb9ff38257e72e10191ddc4a1b399dc926dbc838dc94a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44e9f65e68c518fd93c9733f838efdc552d9f35a036be972569ecc15d6aec8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e9f65e68c518fd93c9733f838efdc552d9f35a036be972569ecc15d6aec8d7->enter($__internal_44e9f65e68c518fd93c9733f838efdc552d9f35a036be972569ecc15d6aec8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_44e9f65e68c518fd93c9733f838efdc552d9f35a036be972569ecc15d6aec8d7->leave($__internal_44e9f65e68c518fd93c9733f838efdc552d9f35a036be972569ecc15d6aec8d7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b7095dce06b6158527cadc7fd7b4c0a5ca7af70bf2ec4737962eda20e939c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7095dce06b6158527cadc7fd7b4c0a5ca7af70bf2ec4737962eda20e939c62->enter($__internal_4b7095dce06b6158527cadc7fd7b4c0a5ca7af70bf2ec4737962eda20e939c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
        <h2 class=\"sub-header\">Cocinero</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th><i class=\"fa fa-user fa-2x\"/></th><td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cocinero"]) ? $context["cocinero"] : $this->getContext($context, "cocinero")), "id", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Username</th><td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cocinero"]) ? $context["cocinero"] : $this->getContext($context, "cocinero")), "username", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Surname</th><td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cocinero"]) ? $context["cocinero"] : $this->getContext($context, "cocinero")), "surname", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>DNI</th><td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cocinero"]) ? $context["cocinero"] : $this->getContext($context, "cocinero")), "dni", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-at fa-2x\"/></th><td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cocinero"]) ? $context["cocinero"] : $this->getContext($context, "cocinero")), "email", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-phone-square fa-2x\"/></th><td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cocinero"]) ? $context["cocinero"] : $this->getContext($context, "cocinero")), "phone", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Address</th><td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cocinero"]) ? $context["cocinero"] : $this->getContext($context, "cocinero")), "address", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listCocinero");
        echo "\">Atrás</a>
        </div>
\t</div>

";
        
        $__internal_4b7095dce06b6158527cadc7fd7b4c0a5ca7af70bf2ec4737962eda20e939c62->leave($__internal_4b7095dce06b6158527cadc7fd7b4c0a5ca7af70bf2ec4737962eda20e939c62_prof);

    }

    public function getTemplateName()
    {
        return ":cocinero:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 27,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  70 => 10,  64 => 9,  54 => 6,  48 => 5,  36 => 4,  11 => 1,);
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

{% block title %} Cocinero {% endblock %}
{% block stylesheets %}
\t{{ parent() }}
{% endblock %}

{% block body %}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
        <h2 class=\"sub-header\">Cocinero</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th><i class=\"fa fa-user fa-2x\"/></th><td>{{ cocinero.id }}</td></tr>
    \t\t\t\t\t<tr><th>Username</th><td>{{ cocinero.username }}</td></tr>
    \t\t\t\t\t<tr><th>Surname</th><td>{{ cocinero.surname }}</td></tr>
    \t\t\t\t\t<tr><th>DNI</th><td>{{ cocinero.dni }}</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-at fa-2x\"/></th><td>{{ cocinero.email }}</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-phone-square fa-2x\"/></th><td>{{ cocinero.phone }}</td></tr>
    \t\t\t\t\t<tr><th>Address</th><td>{{ cocinero.address }}</td></tr>
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listCocinero' ) }}\">Atrás</a>
        </div>
\t</div>

{% endblock %}", ":cocinero:show.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/cocinero/show.html.twig");
    }
}
