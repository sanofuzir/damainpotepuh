<?php

/* damainpotepuhStaticBundle:Default:dating.html.twig */
class __TwigTemplate_aea60352a153dc86e1fa8a94cd323e7a extends Twig_Template
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
<h2>Zmenkarije</h2>
<table class=\"ads\">
    <a class=\"btn btn-small pull-right\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_add_ad"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> Dodaj oglas</a>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : $this->getContext($context, "ads")));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 11
            echo "    <tr>
      <td><img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "path"), "html", null, true);
            echo "\" alt=\"slika\" /></td>
      <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "name"), "html", null, true);
            echo "</td>
      <td><span class=\"description\">
          ";
            // line 15
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "text")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "text"), 0, 50) . "...")) : ($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "text"))), "html", null, true);
            echo "
          </span>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Default:dating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  64 => 15,  59 => 13,  54 => 12,  51 => 11,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
