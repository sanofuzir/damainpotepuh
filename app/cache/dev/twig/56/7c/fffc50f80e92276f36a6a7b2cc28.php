<?php

/* damainpotepuhStaticBundle:Product:singleProduct.html.twig */
class __TwigTemplate_567cfffc50f80e92276f36a6a7b2cc28 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"header-img\">
    
    <!-- Carousel
    ================================================== -->
    <div id=\"myCarousel\" class=\"carousel slide\">
      <div class=\"carousel-inner\">
        <div class=\"item active\">
          <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/products-img.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"container\">
            <div style=\"background: none;\" class=\"damainpotepuh-carousel-caption carousel-caption\">
              <h2 style=\"color: #fff; margin-left: 200px; margin-top: -250px;\">Ptice - slogan</h2>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/products-img2.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"container\">
            <div  style=\"background: none;\" class=\"damainpotepuh-carousel-caption carousel-caption\">
              <h2 style=\"color: #fff; margin-left: 200px; margin-top: -250px;\">Hrčki - slogan</h2>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/products-img3.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"container\">
            <div  style=\"background: none;\" class=\"damainpotepuh-carousel-caption carousel-caption\">
              <h2 style=\"color: #fff; margin-left: 200px; margin-top: -250px;\">Glodalci - slogan</h2>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/products-img4.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"container\">
            <div  style=\"background: none;\" class=\"damainpotepuh-carousel-caption carousel-caption\">
              <h2 style=\"color: #fff; margin-left: 200px; margin-top: -250px;\">Ribe - slogan</h2>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/products-img5.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"container\">
            <div  style=\"background: none;\" class=\"damainpotepuh-carousel-caption carousel-caption\">
              <h2 style=\"color: #fff; margin-left: 200px; margin-top: -250px;\">Psi - slogan</h2>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/products-img6.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"container\">
            <div  style=\"background: none;\" class=\"damainpotepuh-carousel-caption carousel-caption\">
              <h2 style=\"color: #fff; margin-left: 200px; margin-top: -250px;\">Mačke - slogan</h2>
            </div>
          </div>
        </div>
      </div>
      <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
    </div><!-- /.carousel -->
 
</div>

<div class=\"menu\" >
    <h2>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category"), "html", null, true);
        echo "</h2>
    ";
        // line 69
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("damainpotepuhStaticBundle:Product:Menu", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))));
        echo "
</div>

<div class=\"products\" style=\"margin-bottom: 200px;\">
    <div class=\"singleProduct product\">
        <h2>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</h2>
        <p><b>Opis:</b><br />
           ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description"), "html", null, true);
        echo "
        </p>
        <p>Dodan ";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "created"), "d.m.Y"), "html", null, true);
        echo "<p>
        <p><span class=\"price\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), "html", null, true);
        echo " €</span></p>
        <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("products/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "path"), "html", null, true);
        echo "\" rel=\"lightbox\" >
            <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("products/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "path"), "html", null, true);
        echo "\" alt=\"slika\"/>
        </a>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Product:singleProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 81,  150 => 80,  153 => 82,  124 => 69,  102 => 53,  58 => 21,  23 => 2,  146 => 79,  137 => 76,  129 => 52,  110 => 41,  34 => 5,  63 => 16,  325 => 99,  317 => 8,  288 => 128,  256 => 126,  227 => 98,  217 => 95,  206 => 93,  201 => 92,  197 => 91,  184 => 81,  180 => 80,  175 => 78,  161 => 73,  152 => 70,  148 => 69,  77 => 26,  76 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 98,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 121,  247 => 78,  241 => 77,  235 => 74,  229 => 100,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 77,  132 => 74,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 6,  177 => 65,  165 => 74,  160 => 61,  135 => 74,  126 => 51,  114 => 42,  84 => 30,  70 => 20,  67 => 15,  61 => 13,  94 => 22,  89 => 20,  85 => 23,  75 => 23,  68 => 18,  56 => 9,  87 => 20,  21 => 1,  26 => 3,  93 => 28,  88 => 31,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  196 => 90,  183 => 70,  171 => 77,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 78,  138 => 75,  136 => 66,  121 => 46,  117 => 44,  105 => 40,  91 => 45,  62 => 20,  49 => 12,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 19,  69 => 29,  47 => 13,  40 => 7,  37 => 6,  22 => 2,  246 => 32,  157 => 72,  145 => 46,  139 => 50,  131 => 73,  123 => 47,  120 => 68,  115 => 57,  111 => 56,  108 => 37,  101 => 32,  98 => 31,  96 => 28,  83 => 25,  74 => 21,  66 => 21,  55 => 16,  52 => 13,  50 => 10,  43 => 9,  41 => 16,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 86,  162 => 62,  154 => 54,  149 => 81,  147 => 58,  144 => 79,  141 => 51,  133 => 53,  130 => 41,  125 => 44,  122 => 50,  116 => 36,  112 => 42,  109 => 41,  106 => 40,  103 => 37,  99 => 36,  95 => 35,  92 => 33,  86 => 28,  82 => 22,  80 => 37,  73 => 25,  64 => 17,  60 => 6,  57 => 14,  54 => 10,  51 => 15,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
