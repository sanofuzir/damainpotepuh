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
            <p class=\"index-link\">AKCIJE</p></a>
        </li>
    </ul>
</div>

<div class=\"news\">
    <h2>Novice</h2>

    ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["OneNews"]) {
            // line 51
            echo "    <div class=\"Singlenews\">
        <h3>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["OneNews"]) ? $context["OneNews"] : $this->getContext($context, "OneNews")), "name"), "html", null, true);
            echo "</h3>
        <p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["OneNews"]) ? $context["OneNews"] : $this->getContext($context, "OneNews")), "text"), "html", null, true);
            echo "</p><br />
        <p>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["OneNews"]) ? $context["OneNews"] : $this->getContext($context, "OneNews")), "created"), "d.m.Y"), "html", null, true);
            echo "</p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OneNews'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 57
        echo "
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
        return array (  146 => 57,  137 => 54,  133 => 53,  129 => 52,  126 => 51,  122 => 50,  110 => 41,  106 => 40,  99 => 36,  95 => 35,  88 => 31,  84 => 30,  77 => 26,  73 => 25,  66 => 21,  62 => 20,  55 => 16,  51 => 15,  40 => 7,  37 => 6,  34 => 5,  29 => 3,);
    }
}
