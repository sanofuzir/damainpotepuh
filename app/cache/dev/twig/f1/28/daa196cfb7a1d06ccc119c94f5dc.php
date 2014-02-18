<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f128daa196cfb7a1d06ccc119c94f5dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session")))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ((!twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 8,  191 => 71,  97 => 38,  100 => 33,  59 => 13,  81 => 26,  155 => 81,  150 => 56,  153 => 82,  124 => 50,  102 => 53,  58 => 21,  23 => 4,  146 => 79,  137 => 76,  129 => 51,  110 => 41,  34 => 5,  63 => 21,  325 => 99,  317 => 8,  288 => 128,  256 => 126,  227 => 98,  217 => 95,  206 => 57,  201 => 92,  197 => 91,  184 => 81,  180 => 80,  175 => 78,  161 => 65,  152 => 58,  148 => 69,  77 => 26,  76 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 98,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 121,  247 => 78,  241 => 77,  235 => 74,  229 => 100,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 53,  132 => 74,  128 => 49,  119 => 42,  107 => 48,  71 => 26,  38 => 8,  177 => 65,  165 => 69,  160 => 61,  135 => 74,  126 => 51,  114 => 42,  84 => 27,  70 => 20,  67 => 19,  61 => 21,  94 => 22,  89 => 20,  85 => 23,  75 => 27,  68 => 23,  56 => 19,  87 => 30,  21 => 1,  26 => 3,  93 => 37,  88 => 29,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  196 => 90,  183 => 70,  171 => 77,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 78,  138 => 75,  136 => 66,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 20,  49 => 12,  24 => 3,  25 => 3,  19 => 2,  79 => 28,  72 => 24,  69 => 29,  47 => 8,  40 => 7,  37 => 12,  22 => 3,  246 => 32,  157 => 72,  145 => 46,  139 => 50,  131 => 73,  123 => 47,  120 => 49,  115 => 39,  111 => 56,  108 => 37,  101 => 39,  98 => 33,  96 => 45,  83 => 29,  74 => 31,  66 => 21,  55 => 12,  52 => 19,  50 => 10,  43 => 9,  41 => 9,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 56,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 86,  162 => 62,  154 => 54,  149 => 81,  147 => 58,  144 => 79,  141 => 51,  133 => 53,  130 => 41,  125 => 44,  122 => 54,  116 => 36,  112 => 50,  109 => 41,  106 => 40,  103 => 35,  99 => 46,  95 => 32,  92 => 44,  86 => 33,  82 => 32,  80 => 37,  73 => 25,  64 => 24,  60 => 23,  57 => 20,  54 => 10,  51 => 11,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 7,  33 => 6,  30 => 8,);
    }
}
