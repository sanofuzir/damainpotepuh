<?php

/* damainpotepuhStaticBundle:Ad:editAd.html.twig */
class __TwigTemplate_c8d0c8cccf96f5a1ca479d4ab8502194 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("damainpotepuhStaticBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "damainpotepuhStaticBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Oglasi";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Dodaj Oglas</h2>

<form class=\"ad_form\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id")) ? ($this->env->getExtension('routing')->getPath("_edit_ad", array("id" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id")))) : ($this->env->getExtension('routing')->getPath("_add_ad"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <!--div class=\"form-actions\"-->
        <input type=\"submit\" name=\"save\" value=\"Shrani\" class=\"ad_form_save btn btn-primary\">
    <!--/div-->
</form>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Ad:editAd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 99,  317 => 8,  288 => 128,  256 => 126,  227 => 98,  217 => 95,  206 => 93,  201 => 92,  197 => 91,  184 => 81,  180 => 80,  175 => 78,  161 => 73,  152 => 70,  148 => 69,  77 => 24,  76 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 98,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 121,  247 => 78,  241 => 77,  235 => 74,  229 => 100,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 67,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 6,  177 => 65,  165 => 74,  160 => 61,  135 => 47,  126 => 62,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  94 => 22,  89 => 20,  85 => 23,  75 => 23,  68 => 18,  56 => 9,  87 => 20,  21 => 1,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  196 => 90,  183 => 70,  171 => 77,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 66,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 16,  49 => 19,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 19,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 72,  145 => 46,  139 => 50,  131 => 64,  123 => 47,  120 => 40,  115 => 57,  111 => 56,  108 => 37,  101 => 32,  98 => 31,  96 => 28,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 12,  50 => 10,  43 => 9,  41 => 16,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 68,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 61,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 21,  73 => 19,  64 => 17,  60 => 6,  57 => 15,  54 => 10,  51 => 14,  48 => 9,  45 => 22,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
