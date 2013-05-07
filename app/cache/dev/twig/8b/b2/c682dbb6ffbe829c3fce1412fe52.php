<?php

/* damainpotepuhStaticBundle:Default:contact.html.twig */
class __TwigTemplate_8bb2c682dbb6ffbe829c3fce1412fe52 extends Twig_Template
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
        echo "Kontakt";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

<table id=\"contact\">
    <tr>
        <td  style=\"padding-top: -100px;\">
            <h2>Kontakt</h2>
            <b>DAMA IN POTEPUH, Nina Grabnar s.p.</b><br />
            Dolenska cesta 149<br />
            1000 Ljubljana<br />
            Slovenija
            </p>
            <p> 
                Telefon:    <br />
                GSM: +386 70 852 660<br />
                GSM: +386 41 247 294<br />
                email:<a href=\"mailto:ninagrabnar293@gmail.com\"> ninagrabnar293@gmail.com</a>
            </p>    
        </td>
        <td style=\"padding-left: 100px;\">
            <h3>Kje smo?</h3>
            <iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" 
                    src=\"https://maps.google.com/maps?q=Dolenska+cesta+149&amp;ie=UTF8&amp;hl=en&amp;hq=Dolenska+cesta+149&amp;hnear=&amp;t=h&amp;ll=46.021352,14.541746&amp;spn=0.006295,0.006295&amp;output=embed\">
            </iframe><br />
            <small>
                <a href=\"https://maps.google.com/maps?q=Dolenska+cesta+149&amp;ie=UTF8&amp;hl=en&amp;hq=Dolenska+cesta+149&amp;hnear=&amp;t=h&amp;ll=46.021352,14.541746&amp;spn=0.006295,0.006295&amp;source=embed\" style=\"color:#0000FF;text-align:left\">Prikaži večji zemljevid</a></small>
        </td>
    </tr>
</table>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
