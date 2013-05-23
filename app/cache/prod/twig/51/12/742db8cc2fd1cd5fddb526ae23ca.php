<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5112742db8cc2fd1cd5fddb526ae23ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("damainpotepuhUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "damainpotepuhUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "    <form class=\"form-signin\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
        <h2 class=\"form-signin-heading\">Damainpotepuh.si Login</h2>
        <input type=\"text\" class=\"input-block-level\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
        <input type=\"password\" class=\"input-block-level\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
        <label for=\"remember_me\" class=\"checkbox\">
          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remember me", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </label>
        <input class=\"btn btn-large btn-primary\"  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  206 => 57,  191 => 71,  150 => 56,  124 => 50,  120 => 49,  97 => 38,  37 => 7,  83 => 29,  113 => 43,  102 => 40,  58 => 18,  108 => 37,  81 => 26,  65 => 20,  76 => 25,  59 => 16,  23 => 4,  100 => 33,  74 => 25,  63 => 21,  282 => 79,  277 => 8,  270 => 105,  232 => 103,  228 => 97,  210 => 81,  198 => 8,  178 => 72,  161 => 65,  152 => 58,  146 => 55,  129 => 51,  96 => 35,  52 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 80,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 79,  169 => 60,  143 => 56,  140 => 53,  132 => 50,  128 => 49,  119 => 42,  111 => 41,  107 => 40,  71 => 26,  38 => 8,  177 => 65,  165 => 69,  160 => 61,  139 => 50,  135 => 47,  126 => 45,  114 => 42,  84 => 26,  70 => 20,  67 => 17,  61 => 21,  47 => 8,  94 => 22,  89 => 31,  85 => 30,  79 => 28,  75 => 27,  68 => 23,  56 => 14,  50 => 10,  29 => 3,  87 => 30,  72 => 19,  55 => 12,  21 => 1,  26 => 12,  98 => 33,  93 => 37,  88 => 29,  78 => 24,  46 => 11,  27 => 5,  40 => 9,  44 => 9,  35 => 7,  31 => 4,  43 => 12,  41 => 9,  28 => 4,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 59,  151 => 57,  142 => 54,  138 => 53,  136 => 56,  123 => 47,  121 => 48,  117 => 44,  115 => 39,  105 => 40,  101 => 39,  91 => 31,  69 => 21,  66 => 18,  62 => 15,  49 => 11,  24 => 7,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 56,  199 => 67,  193 => 73,  189 => 71,  187 => 74,  182 => 73,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 51,  130 => 41,  125 => 49,  122 => 46,  116 => 36,  112 => 45,  109 => 41,  106 => 41,  103 => 35,  99 => 30,  95 => 32,  92 => 37,  86 => 33,  82 => 32,  80 => 23,  73 => 22,  64 => 24,  60 => 23,  57 => 20,  54 => 10,  51 => 12,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}