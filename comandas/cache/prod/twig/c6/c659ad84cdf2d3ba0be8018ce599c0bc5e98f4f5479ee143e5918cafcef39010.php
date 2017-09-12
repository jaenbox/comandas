<?php

/* :plato:show.html.twig */
class __TwigTemplate_340c1969bd54da991c889b13bdd714b34f473939f59b3e5cc026202bee211a91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":plato:show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Plato ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Plato</h1>
        <h2 class=\"sub-header\">Show</h2>
        <div class=\"table-responsive\">
    \t\t<table class=\"table\">
    \t\t\t<tbody>
    \t\t\t\t\t<tr><th></th><td><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ((("http://localhost/dws/web/uploads/documents/" . $this->getAttribute((isset($context["plato"]) ? $context["plato"] : null), "id", array())) . ".") . $this->getAttribute((isset($context["plato"]) ? $context["plato"] : null), "path", array())), "html", null, true);
        echo "\" class=\"img-thumbnail\" width=\"700\" height=\"300\" border=\"0\" alt=\"img plato\"></td></tr>
    \t\t\t\t\t
    \t\t\t\t\t<tr><th>Category</th>
    \t\t\t\t\t\t<td>";
        // line 19
        if (($this->getAttribute((isset($context["plato"]) ? $context["plato"] : null), "category", array()) == "al")) {
            // line 20
            echo "\t\t\t\t\t\t\t\t\talmuerzo</td>
\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 21
(isset($context["plato"]) ? $context["plato"] : null), "category", array()) == "co")) {
            // line 22
            echo "\t\t\t\t\t\t\t\t\tcomida</td>
\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 23
(isset($context["plato"]) ? $context["plato"] : null), "category", array()) == "ce")) {
            // line 24
            echo "\t\t\t\t\t\t\t\t\tcena</td>
\t\t\t\t\t\t\t\t";
        }
        // line 25
        echo "</tr>
    \t\t\t\t\t<tr><th>Price</th><td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plato"]) ? $context["plato"] : null), "price", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t<tr><th>Description</th><td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plato"]) ? $context["plato"] : null), "description", array()), "html", null, true);
        echo "</td></tr>
    \t\t\t\t\t
    \t\t\t</tbody>
    \t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listPlato");
        echo "\">Atrás</a>
        </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return ":plato:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  86 => 27,  82 => 26,  79 => 25,  75 => 24,  73 => 23,  70 => 22,  68 => 21,  65 => 20,  63 => 19,  57 => 16,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":plato:show.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/plato/show.html.twig");
    }
}
