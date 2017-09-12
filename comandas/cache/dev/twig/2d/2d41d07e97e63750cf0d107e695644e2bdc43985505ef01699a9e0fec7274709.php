<?php

/* base.html.twig */
class __TwigTemplate_86f9e477812c6bd85149662809e82beb84fdf9d70684f80e573cd26e6b8a2213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78d61364d53ecb5e5155ed4fb9eb47db8098517bd1d13455249e656f8e3e2c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d61364d53ecb5e5155ed4fb9eb47db8098517bd1d13455249e656f8e3e2c1c->enter($__internal_78d61364d53ecb5e5155ed4fb9eb47db8098517bd1d13455249e656f8e3e2c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3a78334_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a78334_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a78334_part_1_bootstrap-theme_1.css");
            // line 25
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
            // asset "3a78334_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a78334_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a78334_part_1_bootstrap-theme.css_2.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
            // asset "3a78334_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a78334_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a78334_part_1_bootstrap-theme.min_3.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
            // asset "3a78334_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a78334_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a78334_part_1_bootstrap-theme.min.css_4.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
            // asset "3a78334_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a78334_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a78334_part_1_bootstrap_5.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
            // asset "3a78334_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a78334_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a78334_part_1_bootstrap.css_6.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
            // asset "3a78334_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a78334_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a78334_part_1_bootstrap.min_7.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
            // asset "3a78334_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a78334_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a78334_part_1_bootstrap.min.css_8.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        } else {
            // asset "3a78334"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a78334") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a78334.css");
            echo "    \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e7b5a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3e7b5a2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3e7b5a2_part_1_dashboard_1.css");
            // line 28
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
        // line 30
        echo "    </head>
    
    
    <body>
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
          <div class=\"container-fluid\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"#\">Comandas</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav navbar-right\">          
                <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Logout</a></li>
                <li><a href=\"#\">Idioma</a></li>
                <li><a href=\"#\">Help</a></li>
              </ul>          
            </div>
          </div>
        </nav>
    
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-sm-3 col-md-2 sidebar\">
              <ul class=\"nav nav-sidebar\">
                <li class=\"active\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Dashboard<span class=\"sr-only\">(current)</span></a></li>            
              </ul>
              <ul class=\"nav nav-sidebar\">
                <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAdmin");
        echo "\">Administrador</a></li>
                <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listCocinero");
        echo "\">Cocinero</a></li>
                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listCamarero");
        echo "\">Camarero</a></li>
              </ul>
              <ul class=\"nav nav-sidebar\">
                <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listMesa");
        echo "\">Mesas</a></li>            
              </ul>
              <ul class=\"nav nav-sidebar\">
                <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listPlato");
        echo "\">Platos</a></li>            
              </ul>
              <ul class=\"nav nav-sidebar\">
                <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchPedido");
        echo "\">Pedidos</a></li>            
              </ul>
            </div>
            ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "            
          </div>
        </div>
    ";
        // line 81
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "992eca5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_992eca5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/992eca5_holder.min_1.css");
            // line 90
            echo "    \t \t<!-- Include all compiled plugins (below), or include individual files as needed -->
    \t\t<link href=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        } else {
            // asset "992eca5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_992eca5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/992eca5.css");
            // line 90
            echo "    \t \t<!-- Include all compiled plugins (below), or include individual files as needed -->
    \t\t<link href=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 93
        echo "\t</body>
</html>";
        
        $__internal_78d61364d53ecb5e5155ed4fb9eb47db8098517bd1d13455249e656f8e3e2c1c->leave($__internal_78d61364d53ecb5e5155ed4fb9eb47db8098517bd1d13455249e656f8e3e2c1c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_25cd3e92da3e0883ee69f5e79ae4566cd6a477bef324a741ad484c8eab858b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cd3e92da3e0883ee69f5e79ae4566cd6a477bef324a741ad484c8eab858b13->enter($__internal_25cd3e92da3e0883ee69f5e79ae4566cd6a477bef324a741ad484c8eab858b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Comandas";
        
        $__internal_25cd3e92da3e0883ee69f5e79ae4566cd6a477bef324a741ad484c8eab858b13->leave($__internal_25cd3e92da3e0883ee69f5e79ae4566cd6a477bef324a741ad484c8eab858b13_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43a2f9e0dbd03375c111e57efd6a040ecc24515e99d34849745400f881519dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a2f9e0dbd03375c111e57efd6a040ecc24515e99d34849745400f881519dc4->enter($__internal_43a2f9e0dbd03375c111e57efd6a040ecc24515e99d34849745400f881519dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        \t<!-- Bootstrap -->
\t        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css\" />
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\"/>
\t        <!-- Latest compiled and minified CSS -->
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
\t        <!-- Optional theme -->
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
\t        <!-- Latest compiled and minified JavaScript -->
\t        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
\t        <!--  Google font ROBOTO -->
\t        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>       
\t        
\t        
        ";
        
        $__internal_43a2f9e0dbd03375c111e57efd6a040ecc24515e99d34849745400f881519dc4->leave($__internal_43a2f9e0dbd03375c111e57efd6a040ecc24515e99d34849745400f881519dc4_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1eace551dc579666ee0dfda6e1b3630f59d71841eb8ace9f3d7dc9328ecbf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1eace551dc579666ee0dfda6e1b3630f59d71841eb8ace9f3d7dc9328ecbf88->enter($__internal_a1eace551dc579666ee0dfda6e1b3630f59d71841eb8ace9f3d7dc9328ecbf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "            \t
            ";
        
        $__internal_a1eace551dc579666ee0dfda6e1b3630f59d71841eb8ace9f3d7dc9328ecbf88->leave($__internal_a1eace551dc579666ee0dfda6e1b3630f59d71841eb8ace9f3d7dc9328ecbf88_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9184a90525e8f70fd54ee09aabb24f2c92a99ba8fd992f77b8d3b5a601a52ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9184a90525e8f70fd54ee09aabb24f2c92a99ba8fd992f77b8d3b5a601a52ac6->enter($__internal_9184a90525e8f70fd54ee09aabb24f2c92a99ba8fd992f77b8d3b5a601a52ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "    \t\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    \t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    \t\t    \t\t
    \t\t<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
\t\t\t<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
\t\t\t
    ";
        
        $__internal_9184a90525e8f70fd54ee09aabb24f2c92a99ba8fd992f77b8d3b5a601a52ac6->leave($__internal_9184a90525e8f70fd54ee09aabb24f2c92a99ba8fd992f77b8d3b5a601a52ac6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 82,  294 => 81,  286 => 77,  280 => 76,  260 => 10,  254 => 9,  242 => 6,  234 => 93,  228 => 91,  225 => 90,  218 => 91,  215 => 90,  210 => 89,  208 => 81,  203 => 78,  201 => 76,  195 => 73,  189 => 70,  183 => 67,  177 => 64,  173 => 63,  169 => 62,  163 => 59,  148 => 47,  129 => 30,  109 => 28,  104 => 27,  48 => 25,  43 => 24,  41 => 9,  37 => 8,  32 => 6,  26 => 2,);
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Comandas{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% block stylesheets %}
        \t<!-- Bootstrap -->
\t        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css\" />
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\"/>
\t        <!-- Latest compiled and minified CSS -->
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
\t        <!-- Optional theme -->
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
\t        <!-- Latest compiled and minified JavaScript -->
\t        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
\t        <!--  Google font ROBOTO -->
\t        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>       
\t        
\t        
        {% endblock %}
        {% stylesheets '@AppBundle/Resources/public/css/bootstrap/dist/css/*' filter='cssrewrite' %}
    \t\t<link href=\"{{ asset_url }}\" rel=\"stylesheet\" type=\"text/css\" />
        {% endstylesheets %}
        {% stylesheets '@AppBundle/Resources/public/css/*' filter='cssrewrite' %}
    \t\t<link href=\"{{ asset_url }}\" rel=\"stylesheet\" type=\"text/css\" />
        {% endstylesheets %}
    </head>
    
    
    <body>
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
          <div class=\"container-fluid\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"#\">Comandas</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav navbar-right\">          
                <li><a href=\"{{ path('logout') }}\">Logout</a></li>
                <li><a href=\"#\">Idioma</a></li>
                <li><a href=\"#\">Help</a></li>
              </ul>          
            </div>
          </div>
        </nav>
    
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-sm-3 col-md-2 sidebar\">
              <ul class=\"nav nav-sidebar\">
                <li class=\"active\"><a href=\"{{ path('index') }}\">Dashboard<span class=\"sr-only\">(current)</span></a></li>            
              </ul>
              <ul class=\"nav nav-sidebar\">
                <li><a href=\"{{ path('listAdmin') }}\">Administrador</a></li>
                <li><a href=\"{{ path('listCocinero') }}\">Cocinero</a></li>
                <li><a href=\"{{ path('listCamarero') }}\">Camarero</a></li>
              </ul>
              <ul class=\"nav nav-sidebar\">
                <li><a href=\"{{ path('listMesa') }}\">Mesas</a></li>            
              </ul>
              <ul class=\"nav nav-sidebar\">
                <li><a href=\"{{ path('listPlato') }}\">Platos</a></li>            
              </ul>
              <ul class=\"nav nav-sidebar\">
                <li><a href=\"{{ path('searchPedido') }}\">Pedidos</a></li>            
              </ul>
            </div>
            {% block body %}
            \t
            {% endblock %}            
          </div>
        </div>
    {% block javascripts %}
    \t\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    \t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    \t\t    \t\t
    \t\t<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
\t\t\t<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
\t\t\t
    {% endblock %}
        {% stylesheets '@AppBundle/Resources/public/css/bootstrap/docs/assets/js/vendor/holder.min.js' filter='cssrewrite' %}
    \t \t<!-- Include all compiled plugins (below), or include individual files as needed -->
    \t\t<link href=\"{{ asset_url }}\" rel=\"stylesheet\" type=\"text/css\" />
        {% endstylesheets %}
\t</body>
</html>", "base.html.twig", "/home/linuxjaen/Escritorio/proyecto_dam/comandas/app/Resources/views/base.html.twig");
    }
}
