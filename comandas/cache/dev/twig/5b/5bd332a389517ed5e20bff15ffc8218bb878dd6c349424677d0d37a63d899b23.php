<?php

/* administrador/list.html.twig */
class __TwigTemplate_a29980bc34a5ff100b54b920a6bd3c2272939f0dedc576563979993a48f42000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "administrador/list.html.twig", 1);
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
        $__internal_70d864dd0862ab7354dabcd819885216174deac289eb4a033e3c1993f2b90499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d864dd0862ab7354dabcd819885216174deac289eb4a033e3c1993f2b90499->enter($__internal_70d864dd0862ab7354dabcd819885216174deac289eb4a033e3c1993f2b90499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administrador/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d864dd0862ab7354dabcd819885216174deac289eb4a033e3c1993f2b90499->leave($__internal_70d864dd0862ab7354dabcd819885216174deac289eb4a033e3c1993f2b90499_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f836a6bff2f951f1d2a1ea9a42386fb5e16dc3a57ba72613bee67b490319acd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f836a6bff2f951f1d2a1ea9a42386fb5e16dc3a57ba72613bee67b490319acd9->enter($__internal_f836a6bff2f951f1d2a1ea9a42386fb5e16dc3a57ba72613bee67b490319acd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_f836a6bff2f951f1d2a1ea9a42386fb5e16dc3a57ba72613bee67b490319acd9->leave($__internal_f836a6bff2f951f1d2a1ea9a42386fb5e16dc3a57ba72613bee67b490319acd9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_aacc8e1d5e1aa06cbea2b3ef0de0e808fb1ef44f4f21d730f403317dd7ebd744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacc8e1d5e1aa06cbea2b3ef0de0e808fb1ef44f4f21d730f403317dd7ebd744->enter($__internal_aacc8e1d5e1aa06cbea2b3ef0de0e808fb1ef44f4f21d730f403317dd7ebd744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Admininstradores</h2>
        <div class=\"border-right\">
        \t<a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newAdmin");
        echo "\">Añadir</a>
        </div>        
        
       \t<div class=\"table-responsive\">
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 28
            echo "              \t\t<tr>
              \t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "username", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "phone", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "email", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>              \t\t\t
                  \t\t\t<div class=\"btn-group\">
                  \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAdmin", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAdmin", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-danger btn_table active\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteAdmin", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                  \t\t\t</div>
                  \t\t</td>                       \t\t\t
              \t\t</tr>
              \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "              </tbody>
            </table>        
  \t\t</div>
  \t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Atrás</a>
        </div>
  \t</div>
";
        
        $__internal_aacc8e1d5e1aa06cbea2b3ef0de0e808fb1ef44f4f21d730f403317dd7ebd744->leave($__internal_aacc8e1d5e1aa06cbea2b3ef0de0e808fb1ef44f4f21d730f403317dd7ebd744_prof);

    }

    public function getTemplateName()
    {
        return "administrador/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  121 => 41,  110 => 36,  106 => 35,  102 => 34,  96 => 31,  92 => 30,  88 => 29,  85 => 28,  81 => 27,  64 => 13,  57 => 8,  51 => 7,  41 => 5,  35 => 4,  11 => 1,);
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
    
        <h2 class=\"sub-header\">Admininstradores</h2>
        <div class=\"border-right\">
        \t<a type=\"button\" class=\"btn btn-primary\" href=\"{{ path( 'newAdmin' ) }}\">Añadir</a>
        </div>        
        
       \t<div class=\"table-responsive\">
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
              \t{% for a in admins %}
              \t\t<tr>
              \t\t\t<td>{{ a.username }}</td>
              \t\t\t<td>{{ a.phone }}</td>
              \t\t\t<td>{{ a.email }}</td>
              \t\t\t<td>              \t\t\t
                  \t\t\t<div class=\"btn-group\">
                  \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"{{ path( 'showAdmin', { 'id': a.id } ) }}\">Show</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"{{ path( 'editAdmin', { 'id': a.id } ) }}\">Edit</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-danger btn_table active\" href=\"{{ path( 'deleteAdmin', { 'id': a.id } ) }}\">Delete</a>
                  \t\t\t</div>
                  \t\t</td>                       \t\t\t
              \t\t</tr>
              \t{% endfor %}
              </tbody>
            </table>        
  \t\t</div>
  \t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'index' ) }}\">Atrás</a>
        </div>
  \t</div>
{% endblock %}", "administrador/list.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/administrador/list.html.twig");
    }
}
