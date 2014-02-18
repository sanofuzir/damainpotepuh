<?php

/* damainpotepuhAdminBundle:Ad:ads.html.twig */
class __TwigTemplate_30f0f6e8c19d459e525974b837313af0 extends Twig_Template
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
        echo "Oglasi";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Oglasi</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_add_ad"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> Dodaj Oglas</a>
<table style=\"background-color: #F9D49E;\" class=\"table table-condensed table-hover\">
  <thead>
    <tr>
      <th>Id</th>
      <th>ime</th>
      <th>Text</th>
      <th>Datum / ura vnosa</th>
      <th>Slika</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : $this->getContext($context, "ads")));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 21
            echo "    <tr>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "name"), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "text")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "text"), 0, 50) . "...")) : ($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "text"))), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td>
          <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "path"), "html", null, true);
            echo "\" rel=\"lightbox\">
            <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "path"), "html", null, true);
            echo "\" alt=\"slika\" width=\"50\"/>
          </a>
      </td>
      <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_ad", array("id" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id"))), "html", null, true);
            echo "\" title=\"Uredi Oglas\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_ad", array("id" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani oglas\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhAdminBundle:Ad:ads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  155 => 81,  150 => 80,  153 => 82,  124 => 69,  102 => 53,  58 => 21,  23 => 2,  146 => 79,  137 => 76,  129 => 52,  110 => 41,  34 => 5,  63 => 16,  325 => 99,  317 => 8,  288 => 128,  256 => 126,  227 => 98,  217 => 95,  206 => 93,  201 => 92,  197 => 91,  184 => 81,  180 => 80,  175 => 78,  161 => 73,  152 => 70,  148 => 69,  77 => 26,  76 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 98,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 121,  247 => 78,  241 => 77,  235 => 74,  229 => 100,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 77,  132 => 74,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 6,  177 => 65,  165 => 74,  160 => 61,  135 => 74,  126 => 51,  114 => 42,  84 => 30,  70 => 20,  67 => 15,  61 => 21,  94 => 22,  89 => 20,  85 => 23,  75 => 23,  68 => 23,  56 => 9,  87 => 20,  21 => 1,  26 => 3,  93 => 31,  88 => 31,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  196 => 90,  183 => 70,  171 => 77,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 78,  138 => 75,  136 => 66,  121 => 46,  117 => 44,  105 => 40,  91 => 45,  62 => 20,  49 => 12,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 24,  69 => 29,  47 => 13,  40 => 7,  37 => 6,  22 => 2,  246 => 32,  157 => 72,  145 => 46,  139 => 50,  131 => 73,  123 => 47,  120 => 68,  115 => 57,  111 => 56,  108 => 37,  101 => 32,  98 => 33,  96 => 28,  83 => 25,  74 => 21,  66 => 21,  55 => 16,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 86,  162 => 62,  154 => 54,  149 => 81,  147 => 58,  144 => 79,  141 => 51,  133 => 53,  130 => 41,  125 => 44,  122 => 50,  116 => 36,  112 => 42,  109 => 41,  106 => 40,  103 => 37,  99 => 36,  95 => 35,  92 => 33,  86 => 28,  82 => 22,  80 => 37,  73 => 25,  64 => 22,  60 => 6,  57 => 20,  54 => 10,  51 => 15,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
