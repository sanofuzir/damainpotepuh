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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_0") : $this->env->getExtension('assets')->getAssetUrl("css/style_bootstrap_1.css");
            // line 20
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
            // asset "c96f5a1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_1") : $this->env->getExtension('assets')->getAssetUrl("css/style_bootstrap-responsive_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
            // asset "c96f5a1_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_2") : $this->env->getExtension('assets')->getAssetUrl("css/style_style_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
            // asset "c96f5a1_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_3") : $this->env->getExtension('assets')->getAssetUrl("css/style_lightbox_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "c96f5a1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1") : $this->env->getExtension('assets')->getAssetUrl("css/style.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 73
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 74
                echo "              <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo " fade in\" data-alert=\"alert\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><div class=\"alert-heading\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228_0") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_jquery-1.9.1_1.js");
            // line 103
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "2f5d228_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228_1") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_jquery-1.7.2.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "2f5d228_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228_2") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_lightbox_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "2f5d228_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228_3") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_bootstrap_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "2f5d228_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228_4") : $this->env->getExtension('assets')->getAssetUrl("js/scripts_part_5_script_1.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "2f5d228"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2f5d228") : $this->env->getExtension('assets')->getAssetUrl("js/scripts.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
        return array (  282 => 79,  277 => 8,  270 => 105,  232 => 103,  228 => 97,  210 => 81,  198 => 76,  178 => 72,  161 => 61,  152 => 58,  146 => 55,  129 => 50,  96 => 38,  52 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 80,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 79,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  111 => 37,  107 => 43,  71 => 19,  38 => 6,  177 => 65,  165 => 62,  160 => 61,  139 => 50,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  47 => 9,  94 => 22,  89 => 20,  85 => 25,  79 => 18,  75 => 22,  68 => 14,  56 => 14,  50 => 10,  29 => 3,  87 => 20,  72 => 16,  55 => 15,  21 => 1,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 20,  41 => 7,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 59,  151 => 57,  142 => 54,  138 => 53,  136 => 56,  123 => 47,  121 => 48,  117 => 47,  115 => 43,  105 => 40,  101 => 32,  91 => 26,  69 => 18,  66 => 15,  62 => 23,  49 => 19,  24 => 3,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 74,  182 => 73,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 51,  130 => 41,  125 => 49,  122 => 43,  116 => 36,  112 => 45,  109 => 41,  106 => 33,  103 => 42,  99 => 30,  95 => 34,  92 => 37,  86 => 28,  82 => 22,  80 => 22,  73 => 19,  64 => 16,  60 => 15,  57 => 11,  54 => 10,  51 => 14,  48 => 11,  45 => 8,  42 => 7,  39 => 14,  36 => 5,  33 => 4,  30 => 8,);
    }
}
