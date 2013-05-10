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
        <li>
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_subcategory", array("categoryName" => $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "category"), "subcategoryName" => $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "subcategory"))), "html", null, true);
            // line 6
            echo "\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "subcategory"), "html", null, true);
            echo "
            </a>
        </li>
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
        return array (  32 => 7,  27 => 4,  23 => 2,  19 => 1,  92 => 31,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  66 => 24,  63 => 23,  59 => 22,  43 => 9,  38 => 6,  35 => 5,  29 => 6,);
    }
}
