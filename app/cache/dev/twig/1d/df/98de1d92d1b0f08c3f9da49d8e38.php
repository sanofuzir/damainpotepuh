<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1ddf98de1d92d1b0f08c3f9da49d8e38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 8,  191 => 71,  97 => 38,  100 => 33,  59 => 13,  81 => 26,  155 => 81,  150 => 56,  153 => 82,  124 => 50,  102 => 53,  58 => 21,  23 => 4,  146 => 79,  137 => 76,  129 => 51,  110 => 41,  34 => 7,  63 => 21,  325 => 99,  317 => 8,  288 => 128,  256 => 126,  227 => 98,  217 => 95,  206 => 57,  201 => 92,  197 => 91,  184 => 81,  180 => 80,  175 => 78,  161 => 65,  152 => 58,  148 => 69,  77 => 26,  76 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 98,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 121,  247 => 78,  241 => 77,  235 => 74,  229 => 100,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 53,  132 => 74,  128 => 49,  119 => 42,  107 => 48,  71 => 26,  38 => 8,  177 => 65,  165 => 69,  160 => 61,  135 => 74,  126 => 51,  114 => 42,  84 => 27,  70 => 20,  67 => 19,  61 => 21,  94 => 22,  89 => 20,  85 => 23,  75 => 27,  68 => 23,  56 => 19,  87 => 30,  21 => 1,  26 => 12,  93 => 37,  88 => 29,  78 => 21,  46 => 7,  27 => 4,  44 => 9,  31 => 6,  28 => 5,  196 => 90,  183 => 70,  171 => 77,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 78,  138 => 75,  136 => 66,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 20,  49 => 11,  24 => 7,  25 => 3,  19 => 2,  79 => 28,  72 => 24,  69 => 29,  47 => 8,  40 => 7,  37 => 7,  22 => 2,  246 => 32,  157 => 72,  145 => 46,  139 => 50,  131 => 73,  123 => 47,  120 => 49,  115 => 39,  111 => 56,  108 => 37,  101 => 39,  98 => 33,  96 => 45,  83 => 29,  74 => 31,  66 => 21,  55 => 12,  52 => 19,  50 => 10,  43 => 9,  41 => 9,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 56,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 86,  162 => 62,  154 => 54,  149 => 81,  147 => 58,  144 => 79,  141 => 51,  133 => 53,  130 => 41,  125 => 44,  122 => 54,  116 => 36,  112 => 50,  109 => 41,  106 => 40,  103 => 35,  99 => 46,  95 => 32,  92 => 44,  86 => 33,  82 => 32,  80 => 37,  73 => 25,  64 => 24,  60 => 23,  57 => 20,  54 => 10,  51 => 11,  48 => 12,  45 => 11,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
