<?php

/* damainpotepuhStaticBundle:Default:contact.html.twig */
class __TwigTemplate_8bb2c682dbb6ffbe829c3fce1412fe52 extends Twig_Template
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
        echo "Kontakt";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

<table id=\"contact\">
    <tr>
        <td  style=\"padding-top: -100px;\">
            <div>
            <h1>Kontakt</h1>
            <b>DAMA IN POTEPUH, Nina Grabnar s.p.</b><br />
            Dolenska cesta 149<br />
            1000 Ljubljana<br />
            Slovenija
            </p>
            <p> 
                Telefon:    <br />
                GSM: +386 70 852 660<br />
                GSM: +386 41 247 294<br />
                email:<a href=\"mailto:info@damainpotepuh.si\"> info@damainpotepuh.si</a>
            </p> 
            </div>
        </td>
        <td style=\"padding-left: 100px;\">
            <h3>Kje smo?</h3>
            <iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" 
                    src=\"https://maps.google.com/maps?q=Dolenska+cesta+149&amp;ie=UTF8&amp;hl=en&amp;hq=Dolenska+cesta+149&amp;hnear=&amp;t=h&amp;ll=46.021352,14.541746&amp;spn=0.006295,0.006295&amp;output=embed\">
            </iframe><br />
            <small>
                <a href=\"https://maps.google.com/maps?q=Dolenska+cesta+149&amp;ie=UTF8&amp;hl=en&amp;hq=Dolenska+cesta+149&amp;hnear=&amp;t=h&amp;ll=46.021352,14.541746&amp;spn=0.006295,0.006295&amp;source=embed\" style=\"color:#0000FF;text-align:left\">Prikaži večji zemljevid</a></small>
        </td>
    </tr>
</table>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 79,  277 => 8,  270 => 105,  232 => 103,  228 => 97,  210 => 81,  198 => 76,  178 => 72,  161 => 61,  152 => 58,  146 => 55,  129 => 50,  96 => 38,  52 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 80,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 79,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  111 => 37,  107 => 43,  71 => 19,  38 => 6,  177 => 65,  165 => 62,  160 => 61,  139 => 50,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  47 => 8,  94 => 22,  89 => 20,  85 => 25,  79 => 18,  75 => 22,  68 => 14,  56 => 14,  50 => 10,  29 => 3,  87 => 20,  72 => 16,  55 => 15,  21 => 1,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 20,  41 => 7,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 59,  151 => 57,  142 => 54,  138 => 53,  136 => 56,  123 => 47,  121 => 48,  117 => 47,  115 => 43,  105 => 40,  101 => 32,  91 => 26,  69 => 18,  66 => 15,  62 => 23,  49 => 19,  24 => 3,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 74,  182 => 73,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 51,  130 => 41,  125 => 49,  122 => 43,  116 => 36,  112 => 45,  109 => 41,  106 => 33,  103 => 42,  99 => 30,  95 => 34,  92 => 37,  86 => 28,  82 => 22,  80 => 22,  73 => 19,  64 => 16,  60 => 15,  57 => 11,  54 => 10,  51 => 14,  48 => 11,  45 => 8,  42 => 7,  39 => 14,  36 => 5,  33 => 4,  30 => 8,);
    }
}
