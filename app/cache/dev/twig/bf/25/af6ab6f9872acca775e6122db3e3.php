<?php

/* damainpotepuhAdminBundle:Product:products.html.twig */
class __TwigTemplate_bf25af6ab6f9872acca775e6122db3e3 extends Twig_Template
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
        echo "Izdelki";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Izdelki</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_add_product"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> Dodaj Izdelek</a>
<table style=\"background-color: #F9D49E;\" class=\"table table-condensed table-hover\">
  <thead>
    <tr>
      <th>Id</th>
      <th>Ime izdelka</th>
      <th>cena</th>
      <th>opis</th>
      <th>datum/ura vnosa</th>
      <th>Kategorija</th>
      <th>Podkategorija</th>
      <th>Slika</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 24
            echo "    <tr>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), "html", null, true);
            echo "€</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description"), 0, 50) . "...")) : ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description"))), "html", null, true);
            echo "</td>
      <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category"), "html", null, true);
            echo "</td>
      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "subcategory"), "html", null, true);
            echo "</td>
      <td><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("products/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "path"), "html", null, true);
            echo "\" alt=\"slika\" width=\"50\"/></td>
      <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_product", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" title=\"Uredi Izdelek\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_product", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani izdelek\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhAdminBundle:Product:products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  105 => 35,  100 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  64 => 24,  60 => 23,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
