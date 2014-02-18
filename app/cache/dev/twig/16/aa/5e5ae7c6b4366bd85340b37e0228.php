<?php

/* damainpotepuhAdminBundle:Default:home.html.twig */
class __TwigTemplate_16aa5e5ae7c6b4366bd85340b37e0228 extends Twig_Template
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
        echo "Admin";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Admin - nadzorna plošča</h2>
<br />
<div class=\"admin\">
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_products"), "html", null, true);
        echo "\"><h4>Urejanje izdelkov</h4></a><br />
    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_categorys"), "html", null, true);
        echo "\"><h4>Urejanje kategorij</h4></a><br />
    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_images"), "html", null, true);
        echo "\"><h4>Urejanje Galerije</h4></a><br />
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_videos"), "html", null, true);
        echo "\"><h4>Urejanje Video posnetkov</h4></a><br />
    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_ads"), "html", null, true);
        echo "\"><h4>Urejanje Oglasev</h4></a><br />
    <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_news"), "html", null, true);
        echo "\"><h4>Urejanje Novic</h4></a>
</div>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhAdminBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
