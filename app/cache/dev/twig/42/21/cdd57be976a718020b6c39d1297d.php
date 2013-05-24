<?php

/* damainpotepuhStaticBundle:Product:products.html.twig */
class __TwigTemplate_4221cdd57be976a718020b6c39d1297d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")), 0), "category"), "html", null, true);
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
            <div class=\"carousel-caption\">
              <h1>Ptice - slogan</h1>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/products-img2.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Hrčki - slogan</h1>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/products-img3.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Glodalci - slogan</h1>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/products-img4.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Ptice - slogan</h1>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/products-img5.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Ptice - slogan</h1>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/products-img6.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Ptice - slogan</h1>
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")), 0), "category"), "html", null, true);
        echo "</h2>
    ";
        // line 69
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("damainpotepuhStaticBundle:Product:Menu", array("id" => $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")), 0), "category"))));
        echo "
</div>

<div class=\"products\">
";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 74
            echo "    <div class=\"product\">
        <h2>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
            echo "</h2>
        <p class=\"product_link\">
            <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_product", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" >Več...&raquo;</a>
        </p>
        <p class=\"price-info\" style=\"margin-left: 0px;\"><span style=\"padding-right: 20px;\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), "html", null, true);
            echo " €</span></p>
        <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("products/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "path"), "html", null, true);
            echo "\" alt=\"slika\"/>
        
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 84
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Product:products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 84,  152 => 80,  148 => 79,  143 => 77,  138 => 75,  135 => 74,  131 => 73,  124 => 69,  120 => 68,  102 => 53,  91 => 45,  80 => 37,  69 => 29,  58 => 21,  47 => 13,  38 => 6,  35 => 5,  29 => 3,);
    }
}
