<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_411a9fce10c85b35ef30ed563a0b116758ba261882d3e058f8ad24ce646cabe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33b1ce7b07205a9a0d8e418c0b909fce738ff3d4bf84fe244b38aaf684100728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b1ce7b07205a9a0d8e418c0b909fce738ff3d4bf84fe244b38aaf684100728->enter($__internal_33b1ce7b07205a9a0d8e418c0b909fce738ff3d4bf84fe244b38aaf684100728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_33b1ce7b07205a9a0d8e418c0b909fce738ff3d4bf84fe244b38aaf684100728->leave($__internal_33b1ce7b07205a9a0d8e418c0b909fce738ff3d4bf84fe244b38aaf684100728_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f9510c3fe6c7b32704f6b9358fe13a5af7e4e98971807b817b0cd501cba8933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9510c3fe6c7b32704f6b9358fe13a5af7e4e98971807b817b0cd501cba8933->enter($__internal_3f9510c3fe6c7b32704f6b9358fe13a5af7e4e98971807b817b0cd501cba8933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3f9510c3fe6c7b32704f6b9358fe13a5af7e4e98971807b817b0cd501cba8933->leave($__internal_3f9510c3fe6c7b32704f6b9358fe13a5af7e4e98971807b817b0cd501cba8933_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
