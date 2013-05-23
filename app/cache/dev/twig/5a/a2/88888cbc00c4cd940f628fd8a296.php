<?php

/* damainpotepuhStaticBundle:Default:index.html.twig */
class __TwigTemplate_5aa288888cbc00c4cd940f628fd8a296 extends Twig_Template
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
        echo "Home";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"header-img\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/index-img.jpg"), "html", null, true);
        echo "\" alt=\"images\"/>
</div>
<div class=\"index-container\">
    <p class=\"header-text-white\">TRGOVINA
        <p class=\"header-text\">ZA MALE ŽIVALI</p>
    </p>
    <ul>
        <li>
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_dogs"), "html", null, true);
        echo "\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/dog.jpg"), "html", null, true);
        echo "\" alt=\"psi\"/>
            <p class=\"index-link\">PSI</p></a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_cats"), "html", null, true);
        echo "\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/cat.jpg"), "html", null, true);
        echo "\" alt=\"cat\"/>
            <p class=\"index-link\">MAČKE</p></a>
        </li>
        <li>
            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_birds"), "html", null, true);
        echo "\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/bird.jpg"), "html", null, true);
        echo "\" alt=\"bird\"/>
            <p class=\"index-link\">PTICE</p></a>
        </li>
        <li>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_rodents"), "html", null, true);
        echo "\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/rodent.jpg"), "html", null, true);
        echo "\" alt=\"rodent\"/>
            <p class=\"index-link\">GLODALCI</p></a>
        </li>
        <li>
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_fishes"), "html", null, true);
        echo "\">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/fish.jpg"), "html", null, true);
        echo "\" alt=\"fish\"/>
            <p class=\"index-link\">RIBE</p></a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_action_products"), "html", null, true);
        echo "\">
            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/action_products.jpg"), "html", null, true);
        echo "\" alt=\"hamster\"/>
            <p class=\"index-link\">AKCIJSKI IZDELKI</p></a>
        </li>
    </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  107 => 40,  100 => 36,  96 => 35,  89 => 31,  85 => 30,  78 => 26,  74 => 25,  67 => 21,  63 => 20,  56 => 16,  52 => 15,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
