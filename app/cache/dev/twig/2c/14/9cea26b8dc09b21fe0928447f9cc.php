<?php

/* damainpotepuhStaticBundle:Ad:ads.html.twig */
class __TwigTemplate_2c149cea26b8dc09b21fe0928447f9cc extends Twig_Template
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
        echo "Zmenkarije";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>Oglasi</h1>

<a class=\"addbutton\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_add_ad"), "html", null, true);
        echo "\">Dodaj oglas</a>

    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : $this->getContext($context, "ads")));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 12
            echo "        <div class=\"ad\">
            <div class=\"ad-text\">
                <a class=\"ad-img\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "path"), "html", null, true);
            echo "\" rel=\"lightbox\" alt=\"slika\">
                    <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "path"), "html", null, true);
            echo "\" alt=\"slika\" />
                </a>
                <h4>Ime: </h4>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "name"), "html", null, true);
            echo "
                <h4>Telefon: </h4>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "telephone"), "html", null, true);
            echo "
                <h4>Email: </h4>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "email"), "html", null, true);
            echo "
                <span class=\"description\">
                    <h4>Oglas: </h4>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "text"), "html", null, true);
            echo "
                </span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "
";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Ad:ads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  80 => 21,  75 => 19,  71 => 18,  67 => 17,  61 => 15,  56 => 14,  52 => 12,  48 => 11,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
