<?php

/* damainpotepuhAdminBundle:Category:categorys.html.twig */
class __TwigTemplate_60c723ad8586c0e6756ec2bd5ee09869 extends Twig_Template
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
        echo "Kategorije";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Kategorije</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_add_category"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> Dodaj kategorijo</a>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_add_subcategory"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> Dodaj podkategorijo</a>
<table style=\"background-color: #F9D49E;\" class=\"table table-condensed table-hover\">
  <thead>
    <tr>
      <th>Id</th>
      <th>Ime kategorije</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) ? $context["categorys"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "    <tr>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"))), "html", null, true);
            echo "\" title=\"Uredi Kategorijo\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani kategorijo\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "  </tbody>
</table>
<h2>Podkategorije</h2>
<table style=\"background-color: #F9D49E;\" class=\"table table-condensed table-hover\">
  <thead>
    <tr>
      <th>Id</th>
      <th>Ime podkategorije</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subcategorys"]) ? $context["subcategorys"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 41
            echo "    <tr>
      <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : null), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : null), "name"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_subcategory", array("id" => $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : null), "id"))), "html", null, true);
            echo "\" title=\"Uredi Podkategorijo\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_subcategory", array("id" => $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : null), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani podkategorijo\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "damainpotepuhAdminBundle:Category:categorys.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 43,  102 => 40,  58 => 18,  108 => 37,  81 => 27,  65 => 20,  76 => 25,  59 => 16,  23 => 2,  100 => 36,  74 => 25,  63 => 17,  282 => 79,  277 => 8,  270 => 105,  232 => 103,  228 => 97,  210 => 81,  198 => 76,  178 => 72,  161 => 61,  152 => 58,  146 => 55,  129 => 50,  96 => 35,  52 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 80,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 79,  169 => 60,  143 => 56,  140 => 55,  132 => 50,  128 => 49,  119 => 42,  111 => 41,  107 => 40,  71 => 23,  38 => 6,  177 => 65,  165 => 62,  160 => 61,  139 => 50,  135 => 47,  126 => 45,  114 => 42,  84 => 26,  70 => 20,  67 => 21,  61 => 21,  47 => 8,  94 => 22,  89 => 31,  85 => 30,  79 => 25,  75 => 24,  68 => 23,  56 => 16,  50 => 10,  29 => 3,  87 => 20,  72 => 24,  55 => 15,  21 => 1,  26 => 3,  98 => 33,  93 => 31,  88 => 28,  78 => 24,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 6,  43 => 20,  41 => 7,  28 => 5,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 59,  151 => 57,  142 => 54,  138 => 53,  136 => 56,  123 => 47,  121 => 48,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 21,  66 => 18,  62 => 19,  49 => 12,  24 => 3,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 74,  182 => 73,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 51,  130 => 41,  125 => 49,  122 => 46,  116 => 36,  112 => 45,  109 => 42,  106 => 41,  103 => 42,  99 => 30,  95 => 34,  92 => 37,  86 => 28,  82 => 22,  80 => 23,  73 => 22,  64 => 22,  60 => 17,  57 => 20,  54 => 10,  51 => 14,  48 => 11,  45 => 8,  42 => 7,  39 => 14,  36 => 5,  33 => 4,  30 => 8,);
    }
}
