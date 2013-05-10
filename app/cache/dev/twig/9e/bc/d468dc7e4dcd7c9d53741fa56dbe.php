<?php

/* damainpotepuhStaticBundle:Default:Menu.html.twig */
class __TwigTemplate_9ebcd468dc7e4dcd7c9d53741fa56dbe extends Twig_Template
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
        echo "<div class=\"menu\">
    <h3>Meni</h3>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subcategorys"]) ? $context["subcategorys"] : $this->getContext($context, "subcategorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 4
            echo "    <ul>
        <li>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "name"), "html", null, true);
            echo "</li>
    </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Default:Menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
