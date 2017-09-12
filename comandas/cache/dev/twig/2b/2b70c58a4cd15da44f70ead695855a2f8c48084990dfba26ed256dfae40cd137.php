<?php

/* mesa/show.html.twig */
class __TwigTemplate_cdd6ceef3841d2879bd74c27cd2f9e3af05e8a19a7322d13e57b85d0acd70d2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mesa/show.html.twig", 1);
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
        $__internal_26f45e5f29282e77ee166f4a447f43c7d23d74738f2da45a6b6fe0d639c83c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f45e5f29282e77ee166f4a447f43c7d23d74738f2da45a6b6fe0d639c83c2b->enter($__internal_26f45e5f29282e77ee166f4a447f43c7d23d74738f2da45a6b6fe0d639c83c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mesa/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f45e5f29282e77ee166f4a447f43c7d23d74738f2da45a6b6fe0d639c83c2b->leave($__internal_26f45e5f29282e77ee166f4a447f43c7d23d74738f2da45a6b6fe0d639c83c2b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae955eab49912742504409416ef6ab458f7b020a8b32dc4ada68ebf89b0f31cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae955eab49912742504409416ef6ab458f7b020a8b32dc4ada68ebf89b0f31cb->enter($__internal_ae955eab49912742504409416ef6ab458f7b020a8b32dc4ada68ebf89b0f31cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administrador ";
        
        $__internal_ae955eab49912742504409416ef6ab458f7b020a8b32dc4ada68ebf89b0f31cb->leave($__internal_ae955eab49912742504409416ef6ab458f7b020a8b32dc4ada68ebf89b0f31cb_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a8d6b841c4ab66f3871e404f63f85059bd779c54962ec05fc4657880ba8d8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8d6b841c4ab66f3871e404f63f85059bd779c54962ec05fc4657880ba8d8cb->enter($__internal_3a8d6b841c4ab66f3871e404f63f85059bd779c54962ec05fc4657880ba8d8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_3a8d6b841c4ab66f3871e404f63f85059bd779c54962ec05fc4657880ba8d8cb->leave($__internal_3a8d6b841c4ab66f3871e404f63f85059bd779c54962ec05fc4657880ba8d8cb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_99dc5a31874e8759cd69b1f96b3b46fff6e32a2b1ccba04f81b6397105e0b570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dc5a31874e8759cd69b1f96b3b46fff6e32a2b1ccba04f81b6397105e0b570->enter($__internal_99dc5a31874e8759cd69b1f96b3b46fff6e32a2b1ccba04f81b6397105e0b570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_99dc5a31874e8759cd69b1f96b3b46fff6e32a2b1ccba04f81b6397105e0b570->leave($__internal_99dc5a31874e8759cd69b1f96b3b46fff6e32a2b1ccba04f81b6397105e0b570_prof);

    }

    public function getTemplateName()
    {
        return "mesa/show.html.twig";
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

{% endblock %}", "mesa/show.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/mesa/show.html.twig");
    }
}
