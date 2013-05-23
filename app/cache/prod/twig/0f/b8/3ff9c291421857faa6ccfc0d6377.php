<?php

/* damainpotepuhStaticBundle:Product:Menu.html.twig */
class __TwigTemplate_0fb83ff9c291421857faa6ccfc0d6377 extends Twig_Template
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
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subcategorys"]) ? $context["subcategorys"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 2
            echo "    <ul>
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_subcategory", array("categoryName" => $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : null), "category"), "subcategoryName" => $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : null), "subcategory"))), "html", null, true);
            // line 5
            echo "\">
        <li>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : null), "subcategory"), "html", null, true);
            echo "</li>
        <hr />
        </a>
    </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Product:Menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  100 => 36,  74 => 25,  63 => 20,  282 => 79,  277 => 8,  270 => 105,  232 => 103,  228 => 97,  210 => 81,  198 => 76,  178 => 72,  161 => 61,  152 => 58,  146 => 55,  129 => 50,  96 => 35,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 80,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 79,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  111 => 41,  107 => 40,  71 => 19,  38 => 6,  177 => 65,  165 => 62,  160 => 61,  139 => 50,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 21,  61 => 13,  47 => 8,  94 => 22,  89 => 31,  85 => 30,  79 => 18,  75 => 22,  68 => 14,  56 => 16,  50 => 10,  29 => 3,  87 => 20,  72 => 16,  55 => 15,  21 => 1,  26 => 3,  98 => 31,  93 => 28,  88 => 6,  78 => 26,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 6,  43 => 20,  41 => 7,  28 => 5,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 59,  151 => 57,  142 => 54,  138 => 53,  136 => 56,  123 => 47,  121 => 48,  117 => 47,  115 => 43,  105 => 40,  101 => 32,  91 => 26,  69 => 18,  66 => 15,  62 => 23,  49 => 12,  24 => 3,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 74,  182 => 73,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 51,  130 => 41,  125 => 49,  122 => 43,  116 => 36,  112 => 45,  109 => 41,  106 => 33,  103 => 42,  99 => 30,  95 => 34,  92 => 37,  86 => 28,  82 => 22,  80 => 22,  73 => 19,  64 => 16,  60 => 15,  57 => 14,  54 => 10,  51 => 14,  48 => 11,  45 => 11,  42 => 7,  39 => 14,  36 => 5,  33 => 4,  30 => 8,);
    }
}
