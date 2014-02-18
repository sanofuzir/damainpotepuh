<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_cadc36b1fd6029d05b12bf91be74e16d extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    -moz-border-radius: 16px;
    -webkit-border-radius: 16px;
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 66,  118 => 49,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 169,  369 => 165,  348 => 153,  334 => 145,  327 => 141,  293 => 118,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 97,  248 => 96,  243 => 93,  240 => 92,  221 => 85,  219 => 84,  202 => 75,  195 => 71,  188 => 68,  185 => 67,  172 => 64,  134 => 54,  113 => 48,  90 => 27,  53 => 12,  198 => 8,  191 => 67,  97 => 38,  100 => 39,  59 => 14,  81 => 23,  155 => 81,  150 => 55,  153 => 56,  124 => 50,  102 => 40,  58 => 21,  23 => 4,  146 => 79,  137 => 76,  129 => 51,  110 => 41,  34 => 7,  63 => 21,  325 => 99,  317 => 8,  288 => 116,  256 => 126,  227 => 98,  217 => 95,  206 => 57,  201 => 92,  197 => 91,  184 => 81,  180 => 80,  175 => 65,  161 => 63,  152 => 58,  148 => 69,  77 => 26,  76 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 157,  341 => 149,  337 => 103,  322 => 98,  314 => 99,  312 => 129,  309 => 97,  305 => 125,  298 => 121,  294 => 90,  285 => 115,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 121,  247 => 78,  241 => 77,  235 => 89,  229 => 87,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 58,  132 => 74,  128 => 49,  119 => 40,  107 => 48,  71 => 26,  38 => 6,  177 => 64,  165 => 60,  160 => 61,  135 => 74,  126 => 51,  114 => 42,  84 => 24,  70 => 19,  67 => 24,  61 => 21,  94 => 22,  89 => 20,  85 => 23,  75 => 27,  68 => 23,  56 => 14,  87 => 34,  21 => 1,  26 => 12,  93 => 37,  88 => 29,  78 => 21,  46 => 13,  27 => 3,  44 => 9,  31 => 4,  28 => 4,  196 => 90,  183 => 70,  171 => 77,  166 => 71,  163 => 70,  158 => 62,  156 => 58,  151 => 59,  142 => 78,  138 => 75,  136 => 66,  121 => 50,  117 => 44,  105 => 34,  91 => 31,  62 => 15,  49 => 14,  24 => 7,  25 => 3,  19 => 1,  79 => 28,  72 => 19,  69 => 29,  47 => 8,  40 => 9,  37 => 7,  22 => 3,  246 => 32,  157 => 72,  145 => 46,  139 => 50,  131 => 73,  123 => 42,  120 => 49,  115 => 39,  111 => 47,  108 => 37,  101 => 39,  98 => 33,  96 => 37,  83 => 33,  74 => 31,  66 => 21,  55 => 16,  52 => 19,  50 => 10,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 3,  209 => 79,  203 => 56,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 61,  164 => 86,  162 => 59,  154 => 60,  149 => 81,  147 => 54,  144 => 79,  141 => 51,  133 => 53,  130 => 46,  125 => 51,  122 => 54,  116 => 39,  112 => 50,  109 => 41,  106 => 40,  103 => 35,  99 => 31,  95 => 32,  92 => 44,  86 => 33,  82 => 32,  80 => 32,  73 => 20,  64 => 23,  60 => 23,  57 => 20,  54 => 10,  51 => 12,  48 => 12,  45 => 10,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}
