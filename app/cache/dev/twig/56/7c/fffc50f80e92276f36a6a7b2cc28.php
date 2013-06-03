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

<div class=\"menu\">
    <h2>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category"), "html", null, true);
        echo "</h2>
    ";
        // line 69
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("damainpotepuhStaticBundle:Product:Menu", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))));
        echo "
</div>

<div class=\"products\">
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
        return array (  155 => 81,  150 => 80,  146 => 79,  142 => 78,  137 => 76,  132 => 74,  124 => 69,  120 => 68,  102 => 53,  91 => 45,  80 => 37,  69 => 29,  58 => 21,  47 => 13,  38 => 6,  35 => 5,  29 => 3,);
    }
}
