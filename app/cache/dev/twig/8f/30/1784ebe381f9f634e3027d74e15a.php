<?php

/* damainpotepuhStaticBundle::layout.html.twig */
class __TwigTemplate_8f301784ebe381f9f634e3027d74e15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "Dama in potepuh</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <meta name=\"author\" content=\"Sano Fužir\">

    
    ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c96f5a1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_bootstrap_1.css");
            // line 20
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "c96f5a1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_bootstrap-responsive_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "c96f5a1_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_style_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "c96f5a1_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_lightbox_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "c96f5a1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "
  </head>

  <body>
      
  
<div id=\"wrap\">
    <div class=\"navbar navbar-damainpotepuh navbar-fixed-top\">
      <div class=\"navbar-damainpotepuh navbar-inner\">
        <div class=\"container\">
          <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"brand\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" id=\"logo\"/>
          </a>          
          <div class=\"nav-collapse-damainpotepuh nav-collapse collapse\">
              <ul class=\"nav\">
                <li style=\"margin-left: 35px;\"><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home"), "html", null, true);
        echo "\" style=\"color: #fff;\">DOMOV</a></li>
                <li style=\"margin-left: 35px;\"><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_o_nas"), "html", null, true);
        echo "\" style=\"color: #fff;\">O NAS</a></li>
                 <li class=\"dropdown\"  style=\"margin-left: 40px;\">
                  <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_artikli"), "html", null, true);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" style=\"color: #fff;\">ARTIKLI <b class=\"caret\"></b></a>
                  <ul class=\"damainpotepuh-dropdown-menu dropdown-menu\">
                    <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_dogs"), "html", null, true);
        echo "\" style=\"color: #fff;\">PSI</a></li>
                    <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_cats"), "html", null, true);
        echo "\" style=\"color: #fff;\">MAČKE</a></li>
                    <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_birds"), "html", null, true);
        echo "\" style=\"color: #fff;\">PTICE</a></li>
                    <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_rodents"), "html", null, true);
        echo "\" style=\"color: #fff;\">GLODALCI</a></li>
                    <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_fishes"), "html", null, true);
        echo "\" style=\"color: #fff;\">RIBE</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_action_products"), "html", null, true);
        echo "\" style=\"color: #fff;\">AKCIJSKI IZDELKI</a></li>
                    <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_new_products"), "html", null, true);
        echo "\" style=\"color: #fff;\">NOVI IZDELKI</a></li>
                    <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_fancy"), "html", null, true);
        echo "\" style=\"color: #fff;\">ŠMENSI-FENSI</a></li>
                  </ul>
                </li>
                <li style=\"margin-left: 35px;\"><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_galerija"), "html", null, true);
        echo "\" style=\"color: #fff;\">GALERIJA</a></li>
                <li style=\"margin-left: 35px;\"><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_kontakt"), "html", null, true);
        echo "\" style=\"color: #fff;\">KONTAKT</a></li>
                <li style=\"margin-left: 35px;\">
                    <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/heart.jpg"), "html", null, true);
        echo "\" alt=\"Heart\" id=\"heart\" />
                    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_zmenkarije"), "html", null, true);
        echo "\" style=\"color: #fff; margin-top: -20px;\">ZMENKARIJE</a>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          
        </div>
      </div>
    </div>

    <div class=\"container\">
      ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 73
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 74
                echo "              <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo " fade in\" data-alert=\"alert\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><div class=\"alert-heading\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</div></div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 76
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "    
                  
        <div class=\"symfony-content\">
            ";
        // line 79
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "        </div>
    </div>      
        
    <div id=\"push\"></div>
              
</div>
    <div id=\"footer\">
        <div class=\"container\">
            <p class=\"damainpotepuh-footer muted credit\"><span style=\"background-color: #F9D49E; padding: 0px 5px;\">Dama in potepuh - Trgovina za male živali, Nina Grabnar s.p. Dolenska cesta 149, 1000 Ljubljana</span></p>  
        </div>
    </div>     
    
      
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 97
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2f5d228_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_jquery-1.9.1_1.js");
            // line 103
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "2f5d228_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_jquery-1.7.2.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "2f5d228_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_lightbox_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "2f5d228_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_bootstrap_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "2f5d228_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_part_5_script_1.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "2f5d228"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 105
        echo "
  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 79
    public function block_content($context, array $blocks = array())
    {
        // line 80
        echo "            ";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 80,  282 => 79,  277 => 8,  270 => 105,  232 => 103,  228 => 97,  210 => 81,  208 => 79,  198 => 76,  187 => 74,  182 => 73,  178 => 72,  165 => 62,  161 => 61,  156 => 59,  152 => 58,  146 => 55,  142 => 54,  138 => 53,  133 => 51,  129 => 50,  125 => 49,  121 => 48,  117 => 47,  112 => 45,  103 => 42,  92 => 37,  75 => 22,  43 => 20,  39 => 14,  30 => 8,  21 => 1,  111 => 41,  107 => 43,  100 => 36,  96 => 38,  89 => 31,  85 => 30,  78 => 26,  74 => 25,  67 => 21,  63 => 20,  56 => 16,  52 => 15,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
