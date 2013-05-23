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
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) ? $context["categorys"] : $this->getContext($context, "categorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "    <tr>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\" title=\"Uredi Kategorijo\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["subcategorys"]) ? $context["subcategorys"] : $this->getContext($context, "subcategorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 41
            echo "    <tr>
      <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "name"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_subcategory", array("id" => $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "id"))), "html", null, true);
            echo "\" title=\"Uredi Podkategorijo\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_subcategory", array("id" => $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "id"))), "html", null, true);
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
        return array (  132 => 50,  122 => 46,  117 => 44,  113 => 43,  109 => 42,  106 => 41,  102 => 40,  88 => 28,  78 => 24,  73 => 22,  69 => 21,  65 => 20,  62 => 19,  58 => 18,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
