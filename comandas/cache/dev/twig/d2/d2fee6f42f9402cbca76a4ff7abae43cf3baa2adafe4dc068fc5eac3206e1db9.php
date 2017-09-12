<?php

/* :camarero:list.html.twig */
class __TwigTemplate_8e7845b3de2b578497b259c496a82aa935c3aedda993ee6f4a2bde116ee53a4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":camarero:list.html.twig", 1);
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
        $__internal_393f9dbb9afd544a31b921e25070fd7df219b57d795ee29513830eb7aeec3074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393f9dbb9afd544a31b921e25070fd7df219b57d795ee29513830eb7aeec3074->enter($__internal_393f9dbb9afd544a31b921e25070fd7df219b57d795ee29513830eb7aeec3074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":camarero:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_393f9dbb9afd544a31b921e25070fd7df219b57d795ee29513830eb7aeec3074->leave($__internal_393f9dbb9afd544a31b921e25070fd7df219b57d795ee29513830eb7aeec3074_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3cc35877049f80d61dc42bcc3e3fbdc3883f677bf513caa4ec0130b71bdc8ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc35877049f80d61dc42bcc3e3fbdc3883f677bf513caa4ec0130b71bdc8ef5->enter($__internal_3cc35877049f80d61dc42bcc3e3fbdc3883f677bf513caa4ec0130b71bdc8ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_3cc35877049f80d61dc42bcc3e3fbdc3883f677bf513caa4ec0130b71bdc8ef5->leave($__internal_3cc35877049f80d61dc42bcc3e3fbdc3883f677bf513caa4ec0130b71bdc8ef5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_56a0018335ef5d3601435af98622ffba1fc7ab328e29c808a29443fd84e27ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a0018335ef5d3601435af98622ffba1fc7ab328e29c808a29443fd84e27ae7->enter($__internal_56a0018335ef5d3601435af98622ffba1fc7ab328e29c808a29443fd84e27ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Camarero</h2>
        <div class=\"border-right\">
        \t<a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newCamarero");
        echo "\">Añadir</a>
        </div>
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["camareros"]) ? $context["camareros"] : $this->getContext($context, "camareros")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 27
            echo "              \t\t<tr>
              \t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "username", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "phone", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "email", array()), "html", null, true);
            echo "</td>
              \t\t\t<td>              \t\t\t
                  \t\t\t<div class=\"btn-group\">
                  \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showCamarero", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editCamarero", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-danger btn_table active\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteCamarero", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                  \t\t\t</div>
              \t\t\t</td>                       \t\t\t
              \t\t</tr>
              \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </tbody>
            </table>
          </div>
          <div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Atrás</a>
        </div>     
  \t</div>
";
        
        $__internal_56a0018335ef5d3601435af98622ffba1fc7ab328e29c808a29443fd84e27ae7->leave($__internal_56a0018335ef5d3601435af98622ffba1fc7ab328e29c808a29443fd84e27ae7_prof);

    }

    public function getTemplateName()
    {
        return ":camarero:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 44,  120 => 40,  109 => 35,  105 => 34,  101 => 33,  95 => 30,  91 => 29,  87 => 28,  84 => 27,  80 => 26,  64 => 13,  57 => 8,  51 => 7,  41 => 5,  35 => 4,  11 => 1,);
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
    
        <h2 class=\"sub-header\">Camarero</h2>
        <div class=\"border-right\">
        \t<a type=\"button\" class=\"btn btn-primary\" href=\"{{ path( 'newCamarero' ) }}\">Añadir</a>
        </div>
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
              \t{% for a in camareros %}
              \t\t<tr>
              \t\t\t<td>{{ a.username }}</td>
              \t\t\t<td>{{ a.phone }}</td>
              \t\t\t<td>{{ a.email }}</td>
              \t\t\t<td>              \t\t\t
                  \t\t\t<div class=\"btn-group\">
                  \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"{{ path( 'showCamarero', { 'id': a.id } ) }}\">Show</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"{{ path( 'editCamarero', { 'id': a.id } ) }}\">Edit</a>
                  \t\t\t\t<a type=\"button\" class=\"btn btn-danger btn_table active\" href=\"{{ path( 'deleteCamarero', { 'id': a.id } ) }}\">Delete</a>
                  \t\t\t</div>
              \t\t\t</td>                       \t\t\t
              \t\t</tr>
              \t{% endfor %}
              </tbody>
            </table>
          </div>
          <div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'index' ) }}\">Atrás</a>
        </div>     
  \t</div>
{% endblock %}", ":camarero:list.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/camarero/list.html.twig");
    }
}
