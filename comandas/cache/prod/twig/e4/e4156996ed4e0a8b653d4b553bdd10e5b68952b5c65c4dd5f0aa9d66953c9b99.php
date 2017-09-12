<?php

/* :security:login.html.twig */
class __TwigTemplate_fec66d3fd2ac526f139f9ebee38c140d05419a20f18fc1be4dc0da8b43fa4f09 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        echo "        
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "523d556_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_523d556_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/523d556_index_1.jpg");
            // line 5
            echo "    \t<img id=\"fondo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"fondo\" />
    ";
        } else {
            // asset "523d556"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_523d556") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/523d556.jpg");
            echo "    \t<img id=\"fondo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"fondo\" />
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e7b5a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3e7b5a2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3e7b5a2_part_1_dashboard_1.css");
            // line 8
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
            // asset "3e7b5a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3e7b5a2_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3e7b5a2_part_1_index_2.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        } else {
            // asset "3e7b5a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3e7b5a2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3e7b5a2.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 31
            echo "\t\t\t<div class=\"alert alert-danger div_centrado\">Introduce un usuario y contraseña validos</div>
\t    ";
        }
    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 31,  111 => 30,  103 => 25,  97 => 22,  91 => 19,  87 => 18,  82 => 16,  74 => 10,  54 => 8,  49 => 7,  35 => 5,  31 => 4,  23 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":security:login.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/security/login.html.twig");
    }
}
