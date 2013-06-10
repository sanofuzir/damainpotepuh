<?php

/* damainpotepuhAdminBundle:News:news.html.twig */
class __TwigTemplate_5407194e696d6ae35b5ec57d20e32dc9 extends Twig_Template
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
        echo "<h2>Novice</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_add_news"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> Dodaj Novico</a>
<table style=\"background-color: #F9D49E;\" class=\"table table-condensed table-hover\">
  <thead>
    <tr>
      <th>Id</th>
      <th>Naslov</th>
      <th>Text</th>
      <th>Ustvarjena</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["OneNews"]) {
            // line 20
            echo "    <tr>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["OneNews"]) ? $context["OneNews"] : $this->getContext($context, "OneNews")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["OneNews"]) ? $context["OneNews"] : $this->getContext($context, "OneNews")), "name"), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["OneNews"]) ? $context["OneNews"] : $this->getContext($context, "OneNews")), "text")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["OneNews"]) ? $context["OneNews"] : $this->getContext($context, "OneNews")), "text"), 0, 50) . "...")) : ($this->getAttribute((isset($context["OneNews"]) ? $context["OneNews"] : $this->getContext($context, "OneNews")), "text"))), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["OneNews"]) ? $context["OneNews"] : $this->getContext($context, "OneNews")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_news", array("id" => $this->getAttribute((isset($context["OneNews"]) ? $context["OneNews"] : $this->getContext($context, "OneNews")), "id"))), "html", null, true);
            echo "\" title=\"Uredi Novico\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_news", array("id" => $this->getAttribute((isset($context["OneNews"]) ? $context["OneNews"] : $this->getContext($context, "OneNews")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani novico\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OneNews'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhAdminBundle:News:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  84 => 27,  79 => 25,  75 => 24,  71 => 23,  67 => 22,  63 => 21,  60 => 20,  56 => 19,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
