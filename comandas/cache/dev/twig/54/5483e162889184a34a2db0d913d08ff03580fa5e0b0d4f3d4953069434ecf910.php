<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_29ca4c3a7ffaeed454ba1db89d29a2714badf2d89678f4bc2ca63ddb598d3e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44d0e9934e3a2787ac7814b5a08176f7da3cfc635d40994b1d174afd4dd05b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d0e9934e3a2787ac7814b5a08176f7da3cfc635d40994b1d174afd4dd05b95->enter($__internal_44d0e9934e3a2787ac7814b5a08176f7da3cfc635d40994b1d174afd4dd05b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_44d0e9934e3a2787ac7814b5a08176f7da3cfc635d40994b1d174afd4dd05b95->leave($__internal_44d0e9934e3a2787ac7814b5a08176f7da3cfc635d40994b1d174afd4dd05b95_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'TwigBundle:Exception:error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
