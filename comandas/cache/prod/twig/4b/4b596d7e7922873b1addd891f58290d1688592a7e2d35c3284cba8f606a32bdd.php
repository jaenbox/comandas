<?php

/* :plato:list.html.twig */
class __TwigTemplate_e2eb31d798bfcccdd7cc8fbccf44138878283e649ded646eea33d32c399e1a7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":plato:list.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Platos";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Platos</h1>
        <h2 class=\"sub-header\">Selección platos</h2>
        <div class=\"border-right\">
        \t<a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newPlato");
        echo "\">Añadir</a>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">    \t\t\t
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Img</td>
\t\t\t\t\t\t<td>Nombre</td>\t\t\t\t\t\t
\t\t\t\t\t\t<td>Categoria</td>
\t\t\t\t\t\t<td>Price</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["platos"]) ? $context["platos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["plato"]) {
            // line 30
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, ((("http://localhost/dws/web/uploads/documents/" . $this->getAttribute($context["plato"], "id", array())) . ".") . $this->getAttribute($context["plato"], "path", array())), "html", null, true);
            echo "\" class=\"img-circle\" width=\"100\" height=\"100\" border=\"0\" alt=\"img plato\"></td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["plato"], "name", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>";
            // line 33
            if (($this->getAttribute($context["plato"], "category", array()) == "al")) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\talmuerzo</td>
\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 35
$context["plato"], "category", array()) == "co")) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\tcomida</td>
\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 37
$context["plato"], "category", array()) == "ce")) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\tcena</td>
\t\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plato"], "price", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 42
            echo "\t\t\t\t\t\t\t<td>              \t\t\t
                  \t\t\t\t<div class=\"btn-group\">
                      \t\t\t\t<a type=\"button\" class=\"btn btn-success btn_table active\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showPlato", array("id" => $this->getAttribute($context["plato"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-warning btn_table active\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editPlato", array("id" => $this->getAttribute($context["plato"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                      \t\t\t\t<a type=\"button\" class=\"btn btn-danger btn_table active\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletePlato", array("id" => $this->getAttribute($context["plato"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                  \t\t\t\t</div>
                  \t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Atrás</a>
        </div>\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return ":plato:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 55,  131 => 51,  120 => 46,  116 => 45,  112 => 44,  108 => 42,  103 => 40,  99 => 38,  97 => 37,  94 => 36,  92 => 35,  89 => 34,  87 => 33,  83 => 32,  79 => 31,  76 => 30,  72 => 29,  55 => 15,  49 => 11,  46 => 10,  40 => 8,  33 => 5,  30 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":plato:list.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/plato/list.html.twig");
    }
}
