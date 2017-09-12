<?php

/* :camarero:show.html.twig */
class __TwigTemplate_7ead9cac652f620feb63b92f8b61a745b2fa53aca753aae963ddf2e731099a72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":camarero:show.html.twig", 1);
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
        $__internal_771d4acfad2c3f95e45129a9dba65233ef399f008941e48eac2f149d9c38cf20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771d4acfad2c3f95e45129a9dba65233ef399f008941e48eac2f149d9c38cf20->enter($__internal_771d4acfad2c3f95e45129a9dba65233ef399f008941e48eac2f149d9c38cf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":camarero:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_771d4acfad2c3f95e45129a9dba65233ef399f008941e48eac2f149d9c38cf20->leave($__internal_771d4acfad2c3f95e45129a9dba65233ef399f008941e48eac2f149d9c38cf20_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_403ebf769a3f543c7a49dbf05c6df347aa38762f50e7c18c3161842c12c3a4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403ebf769a3f543c7a49dbf05c6df347aa38762f50e7c18c3161842c12c3a4a2->enter($__internal_403ebf769a3f543c7a49dbf05c6df347aa38762f50e7c18c3161842c12c3a4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Camarero ";
        
        $__internal_403ebf769a3f543c7a49dbf05c6df347aa38762f50e7c18c3161842c12c3a4a2->leave($__internal_403ebf769a3f543c7a49dbf05c6df347aa38762f50e7c18c3161842c12c3a4a2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e7ca3ea0ffc6320e2758341907925c67c6d0efd1099974253da2be27a1a1b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7ca3ea0ffc6320e2758341907925c67c6d0efd1099974253da2be27a1a1b98->enter($__internal_7e7ca3ea0ffc6320e2758341907925c67c6d0efd1099974253da2be27a1a1b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_7e7ca3ea0ffc6320e2758341907925c67c6d0efd1099974253da2be27a1a1b98->leave($__internal_7e7ca3ea0ffc6320e2758341907925c67c6d0efd1099974253da2be27a1a1b98_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_841c916490eb6a855855fd086c9c6c328473083a7acd91dbe355449644e9d1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841c916490eb6a855855fd086c9c6c328473083a7acd91dbe355449644e9d1ff->enter($__internal_841c916490eb6a855855fd086c9c6c328473083a7acd91dbe355449644e9d1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
        <h2 class=\"sub-header\">Camarero</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th><i class=\"fa fa-user fa-2x\"/></th><td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["camarero"]) ? $context["camarero"] : $this->getContext($context, "camarero")), "id", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Username</th><td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["camarero"]) ? $context["camarero"] : $this->getContext($context, "camarero")), "username", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Surname</th><td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["camarero"]) ? $context["camarero"] : $this->getContext($context, "camarero")), "surname", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>DNI</th><td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["camarero"]) ? $context["camarero"] : $this->getContext($context, "camarero")), "dni", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-at fa-2x\"/></th><td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["camarero"]) ? $context["camarero"] : $this->getContext($context, "camarero")), "email", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-phone-square fa-2x\"/></th><td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["camarero"]) ? $context["camarero"] : $this->getContext($context, "camarero")), "phone", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Address</th><td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["camarero"]) ? $context["camarero"] : $this->getContext($context, "camarero")), "address", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listCamarero");
        echo "\">Atrás</a>
        </div>
\t</div>

";
        
        $__internal_841c916490eb6a855855fd086c9c6c328473083a7acd91dbe355449644e9d1ff->leave($__internal_841c916490eb6a855855fd086c9c6c328473083a7acd91dbe355449644e9d1ff_prof);

    }

    public function getTemplateName()
    {
        return ":camarero:show.html.twig";
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

{% block title %} Camarero {% endblock %}
{% block stylesheets %}
\t{{ parent() }}
{% endblock %}

{% block body %}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
        <h2 class=\"sub-header\">Camarero</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th><i class=\"fa fa-user fa-2x\"/></th><td>{{ camarero.id }}</td></tr>
    \t\t\t\t\t<tr><th>Username</th><td>{{ camarero.username }}</td></tr>
    \t\t\t\t\t<tr><th>Surname</th><td>{{ camarero.surname }}</td></tr>
    \t\t\t\t\t<tr><th>DNI</th><td>{{ camarero.dni }}</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-at fa-2x\"/></th><td>{{ camarero.email }}</td></tr>
    \t\t\t\t\t<tr><th><i class=\"fa fa-phone-square fa-2x\"/></th><td>{{ camarero.phone }}</td></tr>
    \t\t\t\t\t<tr><th>Address</th><td>{{ camarero.address }}</td></tr>
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listCamarero' ) }}\">Atrás</a>
        </div>
\t</div>

{% endblock %}", ":camarero:show.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/camarero/show.html.twig");
    }
}
