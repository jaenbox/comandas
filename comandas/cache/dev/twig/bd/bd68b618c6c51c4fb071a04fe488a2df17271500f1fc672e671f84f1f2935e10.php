<?php

/* :mesa:list.html.twig */
class __TwigTemplate_ea869fc4bd67a33643e394666ab22c9f5a976c216367f3a791f18ea7dfb1141e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":mesa:list.html.twig", 1);
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
        $__internal_d12bd8f1a759fb6e63fd64b30fe090516b1a440ec824573ad3d9e81f0c29205f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12bd8f1a759fb6e63fd64b30fe090516b1a440ec824573ad3d9e81f0c29205f->enter($__internal_d12bd8f1a759fb6e63fd64b30fe090516b1a440ec824573ad3d9e81f0c29205f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mesa:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d12bd8f1a759fb6e63fd64b30fe090516b1a440ec824573ad3d9e81f0c29205f->leave($__internal_d12bd8f1a759fb6e63fd64b30fe090516b1a440ec824573ad3d9e81f0c29205f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbdbcfa7425c15e0c52dad77abf57b7d6066c7b28c371b585ceee7dba4693b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdbcfa7425c15e0c52dad77abf57b7d6066c7b28c371b585ceee7dba4693b18->enter($__internal_bbdbcfa7425c15e0c52dad77abf57b7d6066c7b28c371b585ceee7dba4693b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_bbdbcfa7425c15e0c52dad77abf57b7d6066c7b28c371b585ceee7dba4693b18->leave($__internal_bbdbcfa7425c15e0c52dad77abf57b7d6066c7b28c371b585ceee7dba4693b18_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbfe42d707d3c61887a71b5ca0a59720a4bf2eb37bbc1ff650ec2ed1ad1d2886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfe42d707d3c61887a71b5ca0a59720a4bf2eb37bbc1ff650ec2ed1ad1d2886->enter($__internal_fbfe42d707d3c61887a71b5ca0a59720a4bf2eb37bbc1ff650ec2ed1ad1d2886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mesas";
        
        $__internal_fbfe42d707d3c61887a71b5ca0a59720a4bf2eb37bbc1ff650ec2ed1ad1d2886->leave($__internal_fbfe42d707d3c61887a71b5ca0a59720a4bf2eb37bbc1ff650ec2ed1ad1d2886_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_eae4393df8ac9e89a3af4e9a151dc8dbe4e276357792b9d7b03301ee21a3456e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae4393df8ac9e89a3af4e9a151dc8dbe4e276357792b9d7b03301ee21a3456e->enter($__internal_eae4393df8ac9e89a3af4e9a151dc8dbe4e276357792b9d7b03301ee21a3456e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Mesas</h1>
        <h2 class=\"sub-header\">Selección mesa</h2>
        <div class=\"border-right\">
        \t<a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newMesa");
        echo "\">Añadir</a>
        </div>
       \t<div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
              \t<tr>
                  \t<td>Num. Mesa</td>
\t\t\t\t\t<td>Comensales</td>\t
\t\t\t\t\t<td></td>                  
                </tr>
              </thead>
              <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesas"]) ? $context["mesas"] : $this->getContext($context, "mesas")));
        foreach ($context['_seq'] as $context["_key"] => $context["mesa"]) {
            // line 26
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["mesa"], "num", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["mesa"], "comensales", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>              \t\t\t
                  \t\t\t\t<div class=\"btn-group\">
                      \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showMesa", array("id" => $this->getAttribute($context["mesa"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMesa", array("id" => $this->getAttribute($context["mesa"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-danger btn_table active\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteMesa", array("id" => $this->getAttribute($context["mesa"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                  \t\t\t\t</div>
              \t\t\t\t</td>\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "              </tbody>
            </table>
     \t</div>
     \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Atrás</a>
        </div>     
  \t</div>
";
        
        $__internal_eae4393df8ac9e89a3af4e9a151dc8dbe4e276357792b9d7b03301ee21a3456e->leave($__internal_eae4393df8ac9e89a3af4e9a151dc8dbe4e276357792b9d7b03301ee21a3456e_prof);

    }

    public function getTemplateName()
    {
        return ":mesa:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  127 => 38,  116 => 33,  112 => 32,  108 => 31,  102 => 28,  98 => 27,  95 => 26,  91 => 25,  76 => 13,  70 => 9,  64 => 8,  52 => 7,  42 => 5,  36 => 4,  11 => 1,);
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
{% block title %}Mesas{% endblock %}
{% block body %}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Mesas</h1>
        <h2 class=\"sub-header\">Selección mesa</h2>
        <div class=\"border-right\">
        \t<a type=\"button\" class=\"btn btn-primary\" href=\"{{ path( 'newMesa' ) }}\">Añadir</a>
        </div>
       \t<div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
              \t<tr>
                  \t<td>Num. Mesa</td>
\t\t\t\t\t<td>Comensales</td>\t
\t\t\t\t\t<td></td>                  
                </tr>
              </thead>
              <tbody>
                {% for mesa in mesas %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ mesa.num }}</td>
\t\t\t\t\t\t\t<td>{{ mesa.comensales }}</td>
\t\t\t\t\t\t\t<td>              \t\t\t
                  \t\t\t\t<div class=\"btn-group\">
                      \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"{{ path( 'showMesa', { 'id': mesa.id } ) }}\">Show</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"{{ path( 'editMesa', { 'id': mesa.id } ) }}\">Edit</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-danger btn_table active\" href=\"{{ path( 'deleteMesa', { 'id': mesa.id } ) }}\">Delete</a>
                  \t\t\t\t</div>
              \t\t\t\t</td>\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
              </tbody>
            </table>
     \t</div>
     \t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'index' ) }}\">Atrás</a>
        </div>     
  \t</div>
{% endblock %}", ":mesa:list.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/mesa/list.html.twig");
    }
}
