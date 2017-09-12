<?php

/* :index:index.html.twig */
class __TwigTemplate_5b514daa3e8d98a3be72162f802ce72d0ebd2bbd9c9ad0105381311251cd8b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":index:index.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    \t<h1 class=\"page-header\">Dashboard</h1>
    
        <h2 class=\"sub-header\">Ventas</h2>
        <div class=\"table-responsive\">
        \t<table class=\"table table-striped\">
            \t            \t      
            </table>
\t\t</div>
        <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
\t</div>            \t
";
    }

    public function getTemplateName()
    {
        return ":index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":index:index.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/index/index.html.twig");
    }
}
