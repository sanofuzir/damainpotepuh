<?php

/* damainpotepuhStaticBundle:Product:Menu.html.twig */
class __TwigTemplate_0fb83ff9c291421857faa6ccfc0d6377 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subcategorys"]) ? $context["subcategorys"] : $this->getContext($context, "subcategorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 2
            echo "    <ul>
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_subcategory", array("categoryName" => $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "category"), "subcategoryName" => $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "subcategory"))), "html", null, true);
            // line 5
            echo "\">
        <li>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "subcategory"), "html", null, true);
            echo "</li>
        <hr />
        </a>
    </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Product:Menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  26 => 3,  23 => 2,  19 => 1,  91 => 27,  80 => 23,  76 => 22,  71 => 20,  66 => 18,  63 => 17,  59 => 16,  52 => 12,  48 => 11,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
