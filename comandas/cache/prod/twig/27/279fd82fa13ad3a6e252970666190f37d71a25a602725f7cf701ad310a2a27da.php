<?php

/* :cocinero:new.html.twig */
class __TwigTemplate_e14cb505b1de2a3a312f7b8f49d0f54ebea15cf75a40cc6797b714a077da62d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cocinero:new.html.twig", 1);
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
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Usuarios</h1>
    
        <h2 class=\"sub-header\">Cocinero</h2>
        <div class=\"div_form\">
        \t<form action=\"#\" method=\"post\" ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t\t\t</form>
        </div>
        <div class=\"border-left\">
        \t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listCocinero");
        echo "\">Atrás</a>
        </div>    
  \t</div>
";
    }

    public function getTemplateName()
    {
        return ":cocinero:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  56 => 14,  52 => 13,  45 => 8,  42 => 7,  35 => 5,  32 => 4,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":cocinero:new.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/cocinero/new.html.twig");
    }
}
