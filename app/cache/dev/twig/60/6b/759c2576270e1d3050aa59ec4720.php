<?php

/* damainpotepuhAdminBundle:Category:editSubcategory.html.twig */
class __TwigTemplate_606b759c2576270e1d3050aa59ec4720 extends Twig_Template
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
        echo "Podkategorije";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Podkategorije</h2>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "id")) ? ($this->env->getExtension('routing')->getPath("_admin_edit_subcategory", array("id" => $this->getAttribute((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")), "id")))) : ($this->env->getExtension('routing')->getPath("_admin_add_subcategory"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <!--div class=\"form-actions\"-->
        <input type=\"submit\" name=\"save\" value=\"Shrani\" class=\"btn btn-primary\">
    <!--/div-->
</form>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhAdminBundle:Category:editSubcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
