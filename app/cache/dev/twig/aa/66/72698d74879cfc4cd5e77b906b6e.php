<?php

/* damainpotepuhStaticBundle:Default:about.html.twig */
class __TwigTemplate_aa6672698d74879cfc4cd5e77b906b6e extends Twig_Template
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
        echo "O nas";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h1 style=\"text-shadow: none;\">O nas</h1>
<div class=\"about\">
    SMO MAJČKENO DRUŽINSKO PODJETJE ( 8 ČLANOV :), KI NAM JE LJUBEZEN DO ŽIVALI, ŽIVLJENJE OBRNILO NA GLAVO, 
    Z NAKUPOM PRVE PSIČKE CANE CORSICE- CANE SMO SE INTENZIVNO ZAČELI UKVARJATI Z RAZSTAVAMI, ŠOLANJEM, 
    S PASJIMI REKREATIVNIMI URICAMI, PREBIRANJEM IN UČENJEM O PREHRANI, NEGI, ZDRAVJU, ŠOLANJU, 
    PREDVSEM PA O ZDRAVEM ODNOSU MED ČLOVEKOM IN ŽIVALIJO.KER JE NAŠE SRCE VELIKO IN ŠIROKO, 
    SMO SE KMALU ODLOČILI ZA NAKUP ŠE ENE PSICE,  TAKO JE  SREDI ZIME PRIŠLA DOMOV SESTRICA  KONNA. 
    CANA JE PRIDNO HODILA V ŠOLO, OPRAVILA VSE TEČAJE, BBH-A IZPIT. PRIŠEL JE ČAS, DA SMO SE GLEDE NA NJEN 
    IZREDEN KARAKTER, NJENO MOČNO PRIVRŽENOST, PRIJAZNOST ODLOČILI, DA BOMO IMELI  LEGLO. 
    ČEZ ČAS SE JE NA SVET SKOTILO 1O ZDRAVIH, MOČNIH, PREČUDOVITIH KEPIC, KI ZDAJ VSAK PO SVOJE ŽIVI 
    PRI IZJEMNIH NOVIH LASTNIKIH. VSAKO LETO SE USPEMO DOBITI, DA PRAZNUJEMO NJIHOV ROJSTNI DAN. 
    (LETOS UPIHNEMO 2 SVEČKO ). DA NE POZABIMO OMENIT, DA EN MAJČKEN ALI VELIK DELEŽ DRESURE, 
    CANE IN KONNE IMA  NAŠ POGLAVAR IN DIRIGENT KOKO (SIVI ŽAKO). 
</div>
<div class=\"about\"> 
    ČEBLJA IN GOVORI, NAM DIRIGIRA TEMPO OD
    JUTRA DO VEČERA NJEGOV TALENT IN SMISEL ZA HUMOR, BOMO UPORABILI V NAŠI TRGOVINICI, 
    VERJETNO PA BO POTREBEN ŠE KAKŠEN TEČAJ LEPEGA OBNAŠANJA.
    PREDSTAVITEV NAŠE DRUŽINICE SE BLIŽA KONCU, 
    MANJKATA ŠE DVA ČLANA: ČIN ČIN ČILIII TO JE GOZDNI NAVIHANI MAČEK, AJOOJJJ IN PIKA NA I, SUPER AKTIVNA, 
    NAVIHANA, ADIJO PAMET, NAJMLAJŠA CORSICA, ZLATOREPKA ANDY, KI SRKA ZNANJE IN LUMPARIJE STAREJŠIH SESTER. 
    IMAMO REGISTRIRANO PSARNO, VZREJAMO SOCIALIZIRANE, DRUŽINSKE PSE,  SKOZI ŽIVLJENEJE V SOBIVANJU Z ŽIVALMI 
    SMO SI PRIDOBILI VELIKO IZKUŠENJ IN ZNANJA, ZATO SMO SE TUDI ODLOČILI, DA ODPREMO SPECIALIZIRANO TRGOVINICO 
    ZA MALE ŽIVALI,KJER BOMO VSAKOGAR ZELO VESELI, MU STROKOVNO SVETOVALI PRI IZBERI HRANE, OPREME, 
    VAM POSKUŠALI ODGOVORITI NA VAŠE VPRAŠANJE, VAM SVETOVALI. K NAM LAHKO PRIDETE TUDI SAMO NA ČVEK 
    IN DOBRO KAVICO, SEVEDA NE POZABITE VAŠEGA LJUBLJENČKA, KER GA VEDNO ČAKA PRESENEČENJE.
    <br />.
</div>

";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle:Default:about.html.twig";
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
