<?php

/* damainpotepuhStaticBundle:Ad:ads.html.twig */
class __TwigTemplate_2c149cea26b8dc09b21fe0928447f9cc extends Twig_Template
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
        echo "Zmenkarije";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h1 style=\"text-shadow: none;\">Oglasi</h1>

<a class=\"addbutton\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_add_ad"), "html", null, true);
        echo "\">Dodaj oglas</a>

    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : $this->getContext($context, "ads")));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 12
            echo "        <div class=\"ad\" style=\"background-image: url('../../../bundles/damainpotepuhstatic/images/ad_background.jpg');\">
            <div class=\"ad-text\">
                <a class=\"ad-img\" style=\"position: absolute; width: 150px; margin: 10px 0px 0px 250px;\"
                   href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "path"), "html", null, true);
            echo "\" rel=\"lightbox\" alt=\"slika\">
                    <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "path"), "html", null, true);
            echo "\" alt=\"slika\" />
                </a>
                <h4>Ime: </h4>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "name"), "html", null, true);
            echo "
                <h4>Telefon: </h4>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "telephone"), "html", null, true);
            echo "
                <h4>Email: </h4>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "email"), "html", null, true);
            echo "
                <h4>Datum objave: </h4>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "created"), "d.m.Y"), "html", null, true);
            echo "
                <span class=\"description\">
                    <h4>Oglas: </h4>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "text"), "html", null, true);
            echo "
                </span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Ad:ads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 6,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  94 => 22,  89 => 20,  85 => 23,  75 => 23,  68 => 18,  56 => 9,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 16,  49 => 19,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 19,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 28,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 21,  73 => 19,  64 => 17,  60 => 6,  57 => 15,  54 => 10,  51 => 14,  48 => 11,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
