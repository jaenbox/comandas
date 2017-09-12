<?php

/* :security:login.html.twig */
class __TwigTemplate_1763fdd54deb3cf380425fb624277298d042c30ab1be4dee1cf8c7be895f0945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd144f0e1c345477c3febd20e0affd4a7de086626e8afa68a4fb299e70b83646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd144f0e1c345477c3febd20e0affd4a7de086626e8afa68a4fb299e70b83646->enter($__internal_cd144f0e1c345477c3febd20e0affd4a7de086626e8afa68a4fb299e70b83646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_cd144f0e1c345477c3febd20e0affd4a7de086626e8afa68a4fb299e70b83646->leave($__internal_cd144f0e1c345477c3febd20e0affd4a7de086626e8afa68a4fb299e70b83646_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_41e907bb6702a6ff1df6558953b373f909f9bfa740a88b708a582073a92a2079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e907bb6702a6ff1df6558953b373f909f9bfa740a88b708a582073a92a2079->enter($__internal_41e907bb6702a6ff1df6558953b373f909f9bfa740a88b708a582073a92a2079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "        
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "523d556_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_523d556_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/523d556_index_1.jpg");
            // line 5
            echo "    \t<img id=\"fondo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"fondo\" />
    ";
        } else {
            // asset "523d556"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_523d556") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/523d556.jpg");
            echo "    \t<img id=\"fondo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"fondo\" />
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e7b5a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3e7b5a2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3e7b5a2_part_1_dashboard_1.css");
            // line 8
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
            // asset "3e7b5a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3e7b5a2_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3e7b5a2_part_1_index_2.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        } else {
            // asset "3e7b5a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3e7b5a2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3e7b5a2.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        <div class=\"login\">
        \t<div class=\"login-screen\">
        \t\t<div class=\"app-title\">
        \t\t\t<h1>Login</h1>
        \t\t</div>
        \t\t<div class=\"login-form\">
        \t\t\t<form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        \t\t\t\t<div class=\"control-group\">
        \t\t\t\t\t<label for=\"username\">";
        // line 18
        echo "Username";
        echo "</label>
        \t    \t\t\t<input class=\"input_login\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        \t    \t\t</div>
        \t    \t\t<div class=\"control-group\">
        \t    \t\t\t<label for=\"password\">";
        // line 22
        echo "Password";
        echo "</label>
        \t    \t\t\t<input class=\"input_login\" type=\"password\" id=\"password\" name=\"_password\" />
        \t    \t\t</div>
        \t    \t\t<button class=\"btn btn-primary btn-large btn-block\" type=\"submit\">";
        // line 25
        echo "Login";
        echo "</button>
        \t    \t</form>
        \t\t</div>
        \t</div>
\t\t</div>
\t\t";
        // line 30
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 31
            echo "\t\t\t<div class=\"alert alert-danger div_centrado\">Introduce un usuario y contraseña validos</div>
\t    ";
        }
        
        $__internal_41e907bb6702a6ff1df6558953b373f909f9bfa740a88b708a582073a92a2079->leave($__internal_41e907bb6702a6ff1df6558953b373f909f9bfa740a88b708a582073a92a2079_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 31,  120 => 30,  112 => 25,  106 => 22,  100 => 19,  96 => 18,  91 => 16,  83 => 10,  63 => 8,  58 => 7,  44 => 5,  40 => 4,  26 => 3,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'AppBundle' %}

{% block body %}        
    {% image '@AppBundle/Resources/public/images/index.jpg' %}
    \t<img id=\"fondo\" src=\"{{ asset_url }}\" alt=\"fondo\" />
    {% endimage %}
    {% stylesheets '@AppBundle/Resources/public/css/*' filter='cssrewrite' %}
    \t\t<link href=\"{{ asset_url }}\" rel=\"stylesheet\" type=\"text/css\" />
        {% endstylesheets %}
        <div class=\"login\">
        \t<div class=\"login-screen\">
        \t\t<div class=\"app-title\">
        \t\t\t<h1>Login</h1>
        \t\t</div>
        \t\t<div class=\"login-form\">
        \t\t\t<form action=\"{{ path('login_check') }}\" method=\"post\">
        \t\t\t\t<div class=\"control-group\">
        \t\t\t\t\t<label for=\"username\">{{ 'Username'}}</label>
        \t    \t\t\t<input class=\"input_login\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
        \t    \t\t</div>
        \t    \t\t<div class=\"control-group\">
        \t    \t\t\t<label for=\"password\">{{ 'Password'}}</label>
        \t    \t\t\t<input class=\"input_login\" type=\"password\" id=\"password\" name=\"_password\" />
        \t    \t\t</div>
        \t    \t\t<button class=\"btn btn-primary btn-large btn-block\" type=\"submit\">{{ 'Login'}}</button>
        \t    \t</form>
        \t\t</div>
        \t</div>
\t\t</div>
\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger div_centrado\">Introduce un usuario y contraseña validos</div>
\t    {% endif %}
{% endblock %}", ":security:login.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/security/login.html.twig");
    }
}
