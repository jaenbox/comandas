<?php

/* :mesa:show.html.twig */
class __TwigTemplate_bd81cb5619632288207230f78c56f788ac521430f1e5ef1653d7ecf4a879bdb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":mesa:show.html.twig", 1);
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
        $__internal_3dc0464ca585a91582ac7806181c2d6c76cda5286be3f2f667dd823b38b58a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc0464ca585a91582ac7806181c2d6c76cda5286be3f2f667dd823b38b58a11->enter($__internal_3dc0464ca585a91582ac7806181c2d6c76cda5286be3f2f667dd823b38b58a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mesa:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc0464ca585a91582ac7806181c2d6c76cda5286be3f2f667dd823b38b58a11->leave($__internal_3dc0464ca585a91582ac7806181c2d6c76cda5286be3f2f667dd823b38b58a11_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d74dd6b69d3b5b0ed499ffd39f472aa97b0ba04e7b03c0b2393970ff67ca7c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74dd6b69d3b5b0ed499ffd39f472aa97b0ba04e7b03c0b2393970ff67ca7c70->enter($__internal_d74dd6b69d3b5b0ed499ffd39f472aa97b0ba04e7b03c0b2393970ff67ca7c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administrador ";
        
        $__internal_d74dd6b69d3b5b0ed499ffd39f472aa97b0ba04e7b03c0b2393970ff67ca7c70->leave($__internal_d74dd6b69d3b5b0ed499ffd39f472aa97b0ba04e7b03c0b2393970ff67ca7c70_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1bbb38be3364274b20367ba96f5d0cd38c0c4fa4c881dd572dce597a21ae565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bbb38be3364274b20367ba96f5d0cd38c0c4fa4c881dd572dce597a21ae565->enter($__internal_e1bbb38be3364274b20367ba96f5d0cd38c0c4fa4c881dd572dce597a21ae565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_e1bbb38be3364274b20367ba96f5d0cd38c0c4fa4c881dd572dce597a21ae565->leave($__internal_e1bbb38be3364274b20367ba96f5d0cd38c0c4fa4c881dd572dce597a21ae565_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3c7be0d16b5e8d1cc7c24ec9077fb1e77f7b086ad63c64d2c7431bfa99d3895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c7be0d16b5e8d1cc7c24ec9077fb1e77f7b086ad63c64d2c7431bfa99d3895->enter($__internal_c3c7be0d16b5e8d1cc7c24ec9077fb1e77f7b086ad63c64d2c7431bfa99d3895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Mesa</h1>
        <h2 class=\"sub-header\">Show</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th>Número mesa</th><td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesa"]) ? $context["mesa"] : $this->getContext($context, "mesa")), "num", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Comensales</th><td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesa"]) ? $context["mesa"] : $this->getContext($context, "mesa")), "comensales", array()), "html", null, true);
        echo "</td></tr>    \t\t\t\t\t
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listMesa");
        echo "\">Atrás</a>
        </div>
\t</div>

";
        
        $__internal_c3c7be0d16b5e8d1cc7c24ec9077fb1e77f7b086ad63c64d2c7431bfa99d3895->leave($__internal_c3c7be0d16b5e8d1cc7c24ec9077fb1e77f7b086ad63c64d2c7431bfa99d3895_prof);

    }

    public function getTemplateName()
    {
        return ":mesa:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  82 => 17,  78 => 16,  70 => 10,  64 => 9,  54 => 6,  48 => 5,  36 => 4,  11 => 1,);
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

{% block title %} Administrador {% endblock %}
{% block stylesheets %}
\t{{ parent() }}
{% endblock %}

{% block body %}
\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Mesa</h1>
        <h2 class=\"sub-header\">Show</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th>Número mesa</th><td>{{ mesa.num }}</td></tr>
    \t\t\t\t\t<tr><th>Comensales</th><td>{{ mesa.comensales }}</td></tr>    \t\t\t\t\t
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"{{ path( 'listMesa' ) }}\">Atrás</a>
        </div>
\t</div>

{% endblock %}", ":mesa:show.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/mesa/show.html.twig");
    }
}
