<?php

/* :administrador:show.html.twig */
class __TwigTemplate_655789269fa378fd7ddd7b32ab49d9d87b5340ab255bc67e0d5b52c46671ec15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":administrador:show.html.twig", 2);
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
        $__internal_bb496df6452a7d42e3279b120f0c4e19f270446682adfa44c938bebc08a3fea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb496df6452a7d42e3279b120f0c4e19f270446682adfa44c938bebc08a3fea7->enter($__internal_bb496df6452a7d42e3279b120f0c4e19f270446682adfa44c938bebc08a3fea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrador:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb496df6452a7d42e3279b120f0c4e19f270446682adfa44c938bebc08a3fea7->leave($__internal_bb496df6452a7d42e3279b120f0c4e19f270446682adfa44c938bebc08a3fea7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9c2e43c2878ebeeeaa1c65f5129a5efe3c6688ca30db55e50b50ce8d07aac21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c2e43c2878ebeeeaa1c65f5129a5efe3c6688ca30db55e50b50ce8d07aac21->enter($__internal_e9c2e43c2878ebeeeaa1c65f5129a5efe3c6688ca30db55e50b50ce8d07aac21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administrador ";
        
        $__internal_e9c2e43c2878ebeeeaa1c65f5129a5efe3c6688ca30db55e50b50ce8d07aac21->leave($__internal_e9c2e43c2878ebeeeaa1c65f5129a5efe3c6688ca30db55e50b50ce8d07aac21_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf3787567ee9fd4356a51e53ca939d2ef5e7f832b0273f8dbb2a122ecd3f4af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3787567ee9fd4356a51e53ca939d2ef5e7f832b0273f8dbb2a122ecd3f4af0->enter($__internal_cf3787567ee9fd4356a51e53ca939d2ef5e7f832b0273f8dbb2a122ecd3f4af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_cf3787567ee9fd4356a51e53ca939d2ef5e7f832b0273f8dbb2a122ecd3f4af0->leave($__internal_cf3787567ee9fd4356a51e53ca939d2ef5e7f832b0273f8dbb2a122ecd3f4af0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd6abff633ce9c458f31371e7f7ac648362b6cef95184c4c0003e302ee0dfe0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6abff633ce9c458f31371e7f7ac648362b6cef95184c4c0003e302ee0dfe0e->enter($__internal_dd6abff633ce9c458f31371e7f7ac648362b6cef95184c4c0003e302ee0dfe0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd6abff633ce9c458f31371e7f7ac648362b6cef95184c4c0003e302ee0dfe0e->leave($__internal_dd6abff633ce9c458f31371e7f7ac648362b6cef95184c4c0003e302ee0dfe0e_prof);

    }

    public function getTemplateName()
    {
        return ":administrador:show.html.twig";
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
", ":administrador:show.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/administrador/show.html.twig");
    }
}
