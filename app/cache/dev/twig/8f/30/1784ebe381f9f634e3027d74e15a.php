<?php

/* damainpotepuhStaticBundle::layout.html.twig */
class __TwigTemplate_8f301784ebe381f9f634e3027d74e15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "Dama in potepuh</title>
    <meta name=\"description\" content=\"Trgovina za male živali\">
    <meta name=\"keywords\" content=\"Trgovina za male živali, hrana za živali\">
    <meta name=\"author\" content=\"Sano Fužir\">
    <meta name=\"viewport\" content=\"width=device-width\">

    
    ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c96f5a1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_bootstrap_1.css");
            // line 21
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "c96f5a1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_bootstrap-responsive_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "c96f5a1_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_style_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "c96f5a1_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_lightbox_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "c96f5a1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c96f5a1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://assets.cookieconsent.silktide.com/current/style.min.css\"/>
    <script type=\"text/javascript\">
        /*
        Copyright 2012 Silktide Ltd.

        This program is free software: you can redistribute it and/or modify
        it under the terms of the GNU General Public License as published by
        the Free Software Foundation, either version 3 of the License, or
        (at your option) any later version.

        This program is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.

        You should have received a copy of the GNU General Public License
        along with this program.  If not, see <http://www.gnu.org/licenses/>
         */
        var cc={version:\"1.0.9\",jqueryversionrequired:\"1.4.4\",initobj:false,ismobile:false,setupcomplete:false,allasked:false,checkedlocal:false,checkedremote:false,remoteresponse:false,frommodal:false,hassetupmobile:false,sessionkey:false,noclosewin:false,closingmodal:false,jqueryattempts:0,reloadkey:false,forcereload:false,allagree:true,checkedipdb:false,cookies:{},uniqelemid:0,executionblock:0,defaultCookies:{social:{},analytics:{},advertising:{}},remoteCookies:{},approved:{},bindfunctions:{},checkeddonottrack:false,eumemberstates:[\"BE\",\"BG\",\"CZ\",\"DK\",\"DE\",\"EE\",\"IE\",\"EL\",\"ES\",\"FR\",\"IT\",\"CY\",\"LV\",\"LT\",\"LU\",\"HU\",\"MT\",\"NL\",\"AT\",\"PL\",\"PT\",\"RO\",\"SI\",\"SK\",\"FI\",\"SE\",\"UK\"],settings:{refreshOnConsent:false,style:\"dark\",bannerPosition:\"top\",clickAnyLinkToConsent:false,privacyPolicy:false,collectStatistics:false,tagPosition:\"bottom-right\",useSSL:false,serveraddr:\"http://cookieconsent.silktide.com/\",clearprefs:false,consenttype:\"explicit\",onlyshowbanneronce:false,hideallsitesbutton:false,disableallsites:false,hideprivacysettingstab:false,scriptdelay:800,testmode:false,overridewarnings:false,onlyshowwithineu:false,ipinfodbkey:false},strings:{jqueryWarning:\"Developer: Caution! In order to use Cookie Consent, you need to use jQuery 1.4.4 or higher.\",noJsBlocksWarning:\"Developer: Warning! It doesn't look like you have set up Cookie Consent correctly.  You must follow all steps of the setup guide at http://silktide.com/cookieconsent/code.  If you believe you are seeing this message in error, you can use the overridewarnings setting (see docs for more information).\",noKeyWarning:\"Developer: Warning! You have set the plugin to only show within the EU, but you have not provided an API key for the IP Info DB.  Check the documentation at http://silktide.com/cookieconsent for more information\",invalidKeyWarning:\"Developer: Warning! You must provide a valid API key for IP Info DB.  Check the documentation at http://silktide.com/cookieconsent for more information\",necessaryDefaultTitle:\"Strictly necessary\",socialDefaultTitle:\"Social media\",analyticsDefaultTitle:\"Analytics\",advertisingDefaultTitle:\"Advertising\",defaultTitle:\"Default cookie title\",necessaryDefaultDescription:\"Some cookies on this website are strictly necessary and cannot be disabled.\",socialDefaultDescription:\"Facebook, Twitter and other social websites need to know who you are to work properly.\",analyticsDefaultDescription:\"Naša spletna stran uporablja piškotke, zato, da lahko razločujemo med obiskovalci in štejemo njihovo število in tako izboljšujemo delovanje strani. \",advertisingDefaultDescription:\"Adverts will be chosen for you automatically based on your past behaviour and interests.\",defaultDescription:\"Default cookie description.\",notificationTitle:\"Spletno mesto uporablja piškotke z namenom zagotavljanja spletne storitve, oglasnih sistemov in funkcionalnosti, ki jih brez piškotkov ne bi mogli nuditi.  Z obiskom in uporabo spletnega mesta soglašate s piškotki.\",notificationTitleImplicit:\"We use cookies to ensure you get the best experience on our website\",poweredBy:\"Cookie Consent plugin for the EU cookie law\",privacyPolicy:\"Privacy policy\",learnMore:\"Learn more\",seeDetails:\"pokaži pordobnosti\",seeDetailsImplicit:\"change your settings\",hideDetails:\"skrij podrobnosti\",savePreference:\"Shrani nastavitve\",saveForAllSites:\"Shrani za vse strani\",allowCookies:\"Dovoli piškotke\",allowCookiesImplicit:\"Close\",allowForAllSites:\"Dovoli za vse strani\",customCookie:\"This website uses a custom type of cookie which needs specific approval\",privacySettings:\"Privacy settings\",privacySettingsDialogTitleA:\"Privacy settings\",privacySettingsDialogTitleB:\"for this website\",privacySettingsDialogSubtitle:\"Some features of this website need your consent to remember who you are.\",closeWindow:\"Close window\",changeForAllSitesLink:\"Change settings for all websites\",preferenceUseGlobal:\"Use global setting\",preferenceConsent:\"I consent\",preferenceDecline:\"I decline\",preferenceAsk:\"Ask me each time\",preferenceAlways:\"Always allow\",preferenceNever:\"Never allow\",notUsingCookies:\"This website does not use any cookies.\",clearedCookies:\"Your cookies have been cleared, you will need to reload this page for the settings to have effect.\",allSitesSettingsDialogTitleA:\"Privacy settings\",allSitesSettingsDialogTitleB:\"for all websites\",allSitesSettingsDialogSubtitle:\"You may consent to these cookies for all websites that use this plugin.\",backToSiteSettings:\"Back to website settings\"},onconsent:function(a,b){if(cc.isfunction(b)){fn=b}else{scriptname=b;fn=function(){cc.insertscript(scriptname)}}if(cc.cookies&&cc.cookies[a]&&cc.cookies[a].approved){cc.cookies[a].executed=true;fn()}else{if(window.jQuery){jQuery(document).bind(\"cc_\"+a,fn)}else{if(cc.bindfunctions[a]){cc.bindfunctions[a][cc.bindfunctions[a].length]=fn}else{cc.bindfunctions[a]=new Array(fn)}}}},geturlparameter:function(b){b=b.replace(/[\\[]/,\"\\\\[\").replace(/[\\]]/,\"\\\\]\");var a=\"[\\\\?&]\"+b+\"=([^&#]*)\";var d=new RegExp(a);var c=d.exec(window.location.search);if(c==null){return false}else{return decodeURIComponent(c[1].replace(/\\+/g,\" \"))}},isfunction:function(a){var b={};return a&&b.toString.call(a)==\"[object Function]\"},setup:function(){jQuery.each(cc.bindfunctions,function(b,c){for(i=0;i<c.length;i++){jQuery(document).bind(\"cc_\"+b,c[i])}});verstr=jQuery().jquery;parts=verstr.split(\".\");versionRequired=cc.jqueryversionrequired.split(\".\");jqueryOk=true;for(i=0;i<parts.length&&i<versionRequired.length;i++){currentpart=parseInt(parts[i]);requiredpart=parseInt(versionRequired[i]);if(currentpart<requiredpart){jqueryok=false;break}if(currentpart>requiredpart){break}}if(!jqueryOk){alert(cc.strings.jqueryWarning)}jQuery.each(cc.defaultCookies,function(b,c){if(b==\"necessary\"){cc.defaultCookies[b].title=cc.strings.necessaryDefaultTitle;cc.defaultCookies[b].description=cc.strings.necessaryDefaultDescription}else{if(b==\"social\"){cc.defaultCookies[b].title=cc.strings.socialDefaultTitle;cc.defaultCookies[b].description=cc.strings.socialDefaultDescription}else{if(b==\"analytics\"){cc.defaultCookies[b].title=cc.strings.analyticsDefaultTitle;cc.defaultCookies[b].description=cc.strings.analyticsDefaultDescription}else{if(b==\"advertising\"){cc.defaultCookies[b].title=cc.strings.advertisingDefaultTitle;cc.defaultCookies[b].description=cc.strings.advertisingDefaultDescription}}}}});jQuery.each(cc.initobj.cookies,function(b,c){if(!c.title){if(b==\"necessary\"){cc.initobj.cookies[b].title=cc.strings.necessaryDefaultTitle}else{if(b==\"social\"){cc.initobj.cookies[b].title=cc.strings.socialDefaultTitle}else{if(b==\"analytics\"){cc.initobj.cookies[b].title=cc.strings.analyticsDefaultTitle}else{if(b==\"advertising\"){cc.initobj.cookies[b].title=cc.strings.advertisingDefaultTitle}else{cc.initobj.cookies[b].title=cc.strings.defaultTitle}}}}}if(!c.description){if(b==\"necessary\"){cc.initobj.cookies[b].description=cc.strings.necessaryDefaultDescription}else{if(b==\"social\"){cc.initobj.cookies[b].description=cc.strings.socialDefaultDescription}else{if(b==\"analytics\"){cc.initobj.cookies[b].description=cc.strings.analyticsDefaultDescription}else{if(b==\"advertising\"){cc.initobj.cookies[b].description=cc.strings.advertisingDefaultDescription}else{cc.initobj.cookies[b].description=cc.strings.defaultDescription}}}}}if(!c.defaultstate){cc.initobj.cookies[b].defaultstate=\"on\"}cc.initobj.cookies[b].asked=false;cc.initobj.cookies[b].approved=false;cc.initobj.cookies[b].executed=false});if(cc.settings.onlyshowwithineu&&!cc.settings.ipinfodbkey){alert(cc.strings.noKeyWarning)}testmode=cc.geturlparameter(\"cctestmode\");if(testmode==\"accept\"||testmode==\"decline\"){cc.settings.testmode=testmode}if(cc.settings.disableallsites){cc.settings.hideallsitesbutton=true}for(var a in cc.initobj.cookies){cc.cookies[a]=cc.initobj.cookies[a];if(cc.settings.testmode==\"accept\"){cc.approved[a]=\"yes\"}if(cc.settings.testmode==\"decline\"){cc.approved[a]=\"no\"}}},initialise:function(b){cc.initobj=b;if(b.settings!==undefined){for(var a in b.settings){this.settings[a]=b.settings[a]}}if(b.strings!==undefined){for(var a in b.strings){this.strings[a]=b.strings[a]}}cc.settings.style=\"cc-\"+cc.settings.style;cc.settings.bannerPosition=\"cc-\"+cc.settings.bannerPosition;if(cc.settings.useSSL){cc.settings.serveraddr=\"https://cookieconsent.silktide.com/\"}if(window.jQuery){cc.setupcomplete=true;cc.setup()}},calculatestatsparams:function(){params=\"c=\";first=true;jQuery.each(cc.initobj.cookies,function(a,b){if(first){first=false}else{params+=\";\"}params+=encodeURIComponent(a)+\":\";if(cc.approved[a]){params+=cc.approved[a]}else{params+=\"none\"}if(b.statsid){params+=\":\"+b.statsid}});if(cc.ismobile){params+=\"&m=1\"}else{params+=\"&m=0\"}params+=\"&u=\"+encodeURIComponent(document.URL);return params},setsessionkey:function(a){cc.sessionkey=a},fetchprefs:function(){cc.remoteresponse=false;params=\"?s=1\";if(cc.settings.collectStatistics){params=\"?s=1&\"+cc.calculatestatsparams()}if(cc.settings.clearprefs){params+=\"&v=1\";cc.settings.clearprefs=false}cc.insertscript(cc.settings.serveraddr+params);setTimeout(function(){if(!cc.remoteresponse){cc.checkapproval()}},3000);this.checkedremote=true},responseids:function(a){jQuery.each(a,function(b,c){cc.cookies[b].statsid=c})},insertscript:function(a){var b=document.createElement(\"script\");b.setAttribute(\"type\",\"text/javascript\");b.setAttribute(\"src\",a);document.getElementsByTagName(\"head\")[0].appendChild(b)},insertscripttag:function(b){var a=document.createElement(\"script\");a.setAttribute(\"type\",\"text/javascript\");a.innerHTML=b;document.getElementsByTagName(\"head\")[0].appendChild(a)},checklocal:function(){this.checkedlocal=true;jQuery.each(cc.cookies,function(a,b){cookieval=cc.getcookie(\"cc_\"+a);if(cookieval){cc.approved[a]=cookieval}});this.checkapproval()},response:function(b){cc.remoteresponse=true;jQuery.each(b,function(c,d){if(cc.cookies[c]&&(!cc.approved[c]||(cc.approved[c]&&(cc.approved[c]==\"always\"||cc.approved[c]==\"never\")))){cc.setcookie(\"cc_\"+c,d,365)}});for(var a in b){cc.remoteCookies[a]=b[a];if(this.approved[a]!=\"yes\"&&this.approved[a]!=\"no\"){this.approved[a]=b[a]}}jQuery.each(cc.cookies,function(c,d){if(!b[c]&&(cc.approved[c]==\"always\"||cc.approved[c]==\"never\")){cc.cookies[c].approved=false;cc.deletecookie(c);delete cc.approved[c]}});this.checkapproval()},deletecookie:function(a){date=new Date();date.setDate(date.getDate()-1);document.cookie=escape(\"cc_\"+a)+\"=; path=/; expires=\"+date},reloadifnecessary:function(){if(cc.settings.refreshOnConsent||cc.ismobile||cc.forcereload){setTimeout(\"location.reload(true);\",50)}},onkeyup:function(a){if(a.keyCode==27){cc.closemodals()}},closemodals:function(){if(!cc.closingmodal){if(cc.noclosewin){cc.noclosewin=false}else{if(jQuery(\"#cc-modal\").is(\":visible\")){jQuery(\"#cc-modal .cc-modal-closebutton a\").click()}if(jQuery(\"#cc-settingsmodal\").is(\":visible\")){jQuery(\"#cc-settingsmodal #cc-settingsmodal-closebutton a\").click()}}}},showbanner:function(){jQuery(\"#cc-tag\").fadeOut(null,function(){jQuery(this).remove()});jQuery(\"#cc-notification\").remove();if(cc.ismobile){cc.setupformobile();jQuery(\"head\").append('<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\">');jQuery(\"body\").html(\"\").css(\"margin\",0)}data='<div id=\"cc-notification\"><div id=\"cc-notification-wrapper\"><h2><span>'+cc.strings.notificationTitle+'</span></h2><div id=\"cc-notification-permissions\"><a id=\"cc-notification-logo\" class=\"cc-logo\" target=\"_blank\" href=\"http://silktide.com/cookieconsent\" title=\"'+cc.strings.poweredBy+'\"><span>'+cc.strings.poweredBy+'</span></a> </div><ul class=\"cc-notification-buttons\"><li><a class=\"cc-link\" href=\"http://cookieconsent.silktide.com\" id=\"cc-approve-button-allsites\">'+cc.strings.allowForAllSites+'</a></li><li><a class=\"cc-link\" href=\"#\" id=\"cc-approve-button-thissite\">'+cc.strings.allowCookies+'</a></li></ul><div class=\"cc-clear\"></div></div></div>';jQuery(\"body\").prepend(data);if(cc.settings.hideallsitesbutton){jQuery(\"#cc-approve-button-allsites\").hide()}if(cc.settings.consenttype==\"implicit\"){jQuery(\"#cc-notification h2 span\").html(cc.strings.notificationTitleImplicit);jQuery(\"#cc-approve-button-thissite\").html(cc.strings.allowCookiesImplicit);jQuery(\"#cc-approve-button-thissite\").parent().after(jQuery(\"#cc-approve-button-allsites\").parent());jQuery(\"#cc-approve-button-allsites\").hide()}jQuery(\"#cc-notification-logo\").hide();if(cc.settings.privacyPolicy){jQuery(\"#cc-notification-moreinformation\").prepend('<a href=\"'+cc.settings.privacyPolicy+'\">'+cc.strings.privacyPolicy+\"</a> | \")}jQuery(\"#cc-notification\").addClass(cc.settings.style).addClass(cc.settings.bannerPosition);bannerh=jQuery(\"#cc-notification\").height();jQuery(\"#cc-notification\").hide();if(cc.ismobile){jQuery(\"#cc-notification\").addClass(\"cc-mobile\")}jQuery(\"#cc-notification-permissions\").prepend(\"<ul></ul>\");allcustom=true;jQuery.each(cc.cookies,function(a,b){if(!b.asked){jQuery(\"#cc-notification-permissions ul\").append('<li><input type=\"checkbox\" checked=\"checked\" id=\"cc-checkbox-'+a+'\" /> <label id=\"cc-label-'+a+'\" for=\"cc-checkbox-'+a+'\"><strong>'+b.title+\"</strong> \"+b.description+\"</label></li>\");if(b.link){jQuery(\"#cc-label-\"+a).append(' <a target=\"_blank\" href=\"'+b.link+'\" class=\"cc-learnmore-link\">'+cc.strings.learnMore+\"</a>\")}if(a==\"social\"||a==\"analytics\"||a==\"advertising\"){allcustom=false}jQuery(\"#cc-checkbox-\"+a).change(function(){if(jQuery(this).is(\":checked\")){jQuery(this).parent().removeClass(\"cc-notification-permissions-inactive\")}else{jQuery(this).parent().addClass(\"cc-notification-permissions-inactive\")}});if(b.defaultstate==\"off\"){jQuery(\"#cc-checkbox-\"+a).removeAttr(\"checked\").parent().addClass(\"cc-notification-permissions-inactive\")}if(a==\"necessary\"){jQuery(\"#cc-checkbox-\"+a).attr(\"disabled\",\"disabled\")}}});jQuery(\"#cc-notification-wrapper h2\").append(' - <a class=\"cc-link\" href=\"#\" id=\"cc-notification-moreinfo\">'+cc.strings.seeDetails+\"</a>\");if(cc.settings.consenttype==\"implicit\"){jQuery(\"#cc-notification-moreinfo\").html(cc.strings.seeDetailsImplicit)}jQuery(\"#cc-notification-moreinfo\").click(function(){if(jQuery(this).html()==cc.strings.seeDetails||jQuery(this).html()==cc.strings.seeDetailsImplicit){if(cc.settings.consenttype==\"implicit\"){if(!cc.settings.hideallsitesbutton){jQuery(\"#cc-approve-button-allsites\").show()}}jQuery(\"#cc-approve-button-thissite\").html(cc.strings.savePreference);jQuery(\"#cc-approve-button-allsites\").html(cc.strings.saveForAllSites);jQuery(this).html(cc.strings.hideDetails)}else{jQuery.each(cc.cookies,function(a,b){if(b.defaultstate==\"off\"){jQuery(\"#cc-checkbox-\"+a).removeAttr(\"checked\");jQuery(this).parent().addClass(\"cc-notification-permissions-inactive\")}else{jQuery(\"#cc-checkbox-\"+a).attr(\"checked\",\"checked\");jQuery(this).parent().removeClass(\"cc-notification-permissions-inactive\")}});if(cc.settings.consenttype==\"implicit\"){jQuery(this).html(cc.strings.seeDetailsImplicit);jQuery(\"#cc-approve-button-thissite\").html(cc.strings.allowCookiesImplicit);jQuery(\"#cc-approve-button-allsites\").hide()}else{jQuery(this).html(cc.strings.seeDetails);jQuery(\"#cc-approve-button-thissite\").html(cc.strings.allowCookies);jQuery(\"#cc-approve-button-allsites\").html(cc.strings.allowForAllSites)}}jQuery(\"#cc-notification-logo\").fadeToggle();jQuery(\"#cc-notification-permissions\").slideToggle();jQuery(this).blur();return false});if(!cc.ismobile){if(cc.settings.bannerPosition==\"cc-push\"){jQuery(\"html\").animate({marginTop:bannerh},400)}jQuery(\"#cc-notification\").slideDown()}else{jQuery(\"#cc-notification\").show()}jQuery(\"#cc-approve-button-thissite\").click(cc.onlocalconsentgiven);if(cc.settings.clickAnyLinkToConsent){jQuery(\"a\").filter(\":not(.cc-link)\").click(cc.onlocalconsentgiven)}if(allcustom){jQuery(\"#cc-notification h2 span\").html(cc.strings.customCookie);jQuery(\"#cc-approve-button-allsites\").hide()}else{jQuery(\"#cc-approve-button-allsites\").click(cc.onremoteconsentgiven)}},timestamp:function(){return Math.round((new Date()).getTime()/1000)},locationcallback:function(a){if(a.statusCode==\"OK\"&&a.countryCode){ineu=\"yes\";if(jQuery.inArray(a.countryCode,cc.eumemberstates)==-1){ineu=\"no\";jQuery.each(cc.cookies,function(b,c){cc.approved[b]=\"yes\"});cc.settings.hideprivacysettingstab=true}cc.setcookie(\"cc_ineu\",ineu,365)}if(a.statusCode==\"ERROR\"&&a.statusMessage==\"Invalid API key.\"){alert(cc.strings.invalidKeyWarning)}cc.checkapproval()},checkdonottrack:function(){cc.checkeddonottrack=true;if(navigator.doNotTrack==\"yes\"||navigator.doNotTrack==\"1\"||navigator.msDoNotTrack==\"yes\"||navigator.msDoNotTrack==\"1\"){jQuery.each(cc.cookies,function(a,b){cc.approved[a]=\"no\"})}cc.checkapproval()},checkapproval:function(){if(!cc.checkedipdb&&cc.settings.onlyshowwithineu){cc.checkedipdb=true;ineu=cc.getcookie(\"cc_ineu\");if(ineu){if(ineu==\"no\"){jQuery.each(cc.cookies,function(a,b){cc.approved[a]=\"yes\"});cc.settings.hideprivacysettingstab=true}}else{jQuery.getScript(\"http://api.ipinfodb.com/v3/ip-country/?key=\"+cc.settings.ipinfodbkey+\"&format=json&callback=cc.locationcallback\");return}}cc.allasked=true;jQuery.each(cc.cookies,function(a,b){if(cc.approved[a]){if(cc.approved[a]==\"yes\"||(cc.approved[a]==\"always\"&&cc.checkedremote)){cc.cookies[a].asked=true;cc.cookies[a].approved=true;cc.execute(a)}else{if((cc.approved[a]==\"never\"&&cc.checkedremote)||cc.approved[a]==\"no\"){cc.cookies[a].asked=true;cc.cookies[a].approved=false}else{cc.allasked=false}}}else{cc.allasked=false}});if(!cc.allasked){if(!cc.checkedlocal){cc.checklocal();return}if(!cc.checkedremote&&!cc.settings.disableallsites){cc.fetchprefs();return}if(!cc.checkeddonottrack){cc.checkdonottrack();return}if(cc.settings.consenttype==\"implicit\"){jQuery.each(cc.cookies,function(a,b){if(!cc.cookies[a].asked){if(cc.settings.onlyshowbanneronce){cc.setcookie(\"cc_\"+a,\"yes\",365)}cc.execute(a)}})}cc.showbanner()}else{if(cc.settings.collectStatistics){params=\"\";params+=\"?s=1&n=1&\"+cc.calculatestatsparams();cc.insertscript(cc.settings.serveraddr+params)}cc.showminiconsent()}},execute:function(a){if(a==\"necessary\"){return}if(cc.cookies[a].executed){return}jQuery(\".cc-placeholder-\"+a).remove();jQuery(\"script.cc-onconsent-\"+a+'[type=\"text/plain\"]').each(function(){if(jQuery(this).attr(\"src\")){jQuery(this).after('<script type=\"text/javascript\" src=\"'+jQuery(this).attr(\"src\")+'\"><\\/script>')}else{jQuery(this).after('<script type=\"text/javascript\">'+jQuery(this).html()+\"<\\/script>\")}});cc.cookies[a].executed=true;jQuery(document).trigger(\"cc_\"+a);cc.executescriptinclusion(a)},executescriptinclusion:function(a){timetaken=jQuery(\"script.cc-onconsent-inline-\"+a+'[type=\"text/plain\"]').size()*cc.settings.scriptdelay;now=new Date().getTime();if(now<cc.executionblock){setTimeout(cc.executescriptinclusion,cc.executionblock-now,[a]);return}cc.executionblock=now+timetaken;cc.insertscripts(a)},insertscripts:function(a){jQuery(\"script.cc-onconsent-inline-\"+a+'[type=\"text/plain\"]').first().each(function(){cc.uniqelemid++;if(jQuery(this).parents(\"body\").size()>0){jQuery(this).after('<div id=\"cc-consentarea-'+cc.uniqelemid+'\" class=\"'+a+'\"></div>');document.write=function(b){jQuery(\"#cc-consentarea-\"+cc.uniqelemid).append(b)};document.writeln=function(b){jQuery(\"#cc-consentarea-\"+cc.uniqelemid).append(b)}}if(jQuery(this).attr(\"src\")){jQuery(this).after('<script type=\"text/javascript\" src=\"'+jQuery(this).attr(\"src\")+'\"><\\/script>')}else{jQuery(this).after('<script type=\"text/javascript\">'+jQuery(this).html()+\"<\\/script>\")}jQuery(this).remove()});if(jQuery(\"script.cc-onconsent-inline-\"+a+'[type=\"text/plain\"]').size()>0){setTimeout(cc.insertscripts,cc.settings.scriptdelay,[a])}},getcookie:function(b){var c,a,e,d=document.cookie.split(\";\");for(c=0;c<d.length;c++){a=d[c].substr(0,d[c].indexOf(\"=\"));e=d[c].substr(d[c].indexOf(\"=\")+1);a=a.replace(/^\\s+|\\s+\$/g,\"\");if(a==b){return unescape(e)}}return false},setcookie:function(a,b,d){var c=new Date();c.setDate(c.getDate()+d);document.cookie=a+\"=\"+b+\"; expires=\"+c.toUTCString()+\"; path=/\"},onremoteconsentgiven:function(){if(cc.settings.clickAnyLinkToConsent){jQuery(\"a\").filter(\":not(.cc-link)\").unbind(\"click\")}cc.allagree=true;jQuery.each(cc.cookies,function(a,b){if(!b.approved&&!b.asked){if(jQuery(\"#cc-checkbox-\"+a).is(\":checked\")){if(a==\"social\"||a==\"analytics\"||a==\"advertising\"){cc.remoteCookies[a]=\"always\";cc.approved[a]=\"always\"}else{cc.approved[a]=\"yes\"}cc.cookies[a].asked=true}else{if(a==\"social\"||a==\"analytics\"||a==\"advertising\"){cc.remoteCookies[a]=\"never\";cc.approved[a]=\"never\"}else{cc.approved[a]=\"no\"}cc.allagree=false;cc.cookies[a].asked=true}cc.setcookie(\"cc_\"+a,cc.approved[a],365)}else{}});urlx=cc.settings.serveraddr+\"?p=1&tokenonly=true&cc-key=\"+cc.sessionkey;if(cc.remoteCookies.social){urlx+=\"&cc-cookies-social=\"+cc.approved.social}if(cc.remoteCookies.analytics){urlx+=\"&cc-cookies-analytics=\"+cc.approved.analytics}if(cc.remoteCookies.advertising){urlx+=\"&cc-cookies-advertising=\"+cc.approved.advertising}cc.reloadkey=true;cc.insertscript(urlx);if(!cc.ismobile){jQuery(\"#cc-notification\").slideUp();if(cc.settings.bannerPosition==\"cc-push\"){jQuery(\"html\").animate({marginTop:0},400)}}cc.checkapproval();return false},onlocalconsentgiven:function(){enableall=false;enablejustone=false;if(jQuery(this).hasClass(\"cc-button-enableall\")||jQuery(this).hasClass(\"cc-button-enable-all\")){enableall=true;jQuery.each(cc.cookies,function(a,b){cc.cookies[a].asked=false})}elem=this;jQuery.each(cc.cookies,function(a,b){if(jQuery(elem).hasClass(\"cc-button-enable-\"+a)){enablejustone=true;cc.approved[a]=\"yes\";cc.cookies[a].asked=true;cc.setcookie(\"cc_\"+a,cc.approved[a],365)}});cc.allagree=true;if(!enablejustone){if(cc.settings.clickAnyLinkToConsent){jQuery(\"a\").filter(\":not(.cc-link)\").unbind(\"click\")}jQuery.each(cc.cookies,function(a,b){if(!b.approved&&!b.asked){if(enableall||jQuery(\"#cc-checkbox-\"+a).is(\":checked\")){cc.approved[a]=\"yes\";cc.cookies[a].asked=true}else{cc.approved[a]=\"no\";cc.cookies[a].asked=true;cc.allagree=false}cc.setcookie(\"cc_\"+a,cc.approved[a],365)}else{}})}if(!cc.allagree&&cc.settings.consenttype==\"implicit\"){cc.forcereload=true}if(!cc.ismobile){jQuery(\"#cc-notification\").slideUp();if(cc.settings.bannerPosition==\"cc-push\"){jQuery(\"html\").animate({marginTop:0},400)}}cc.checkapproval();cc.reloadifnecessary();return false},showminiconsent:function(){if(jQuery(\"#cc-tag\").length==0){data='<div id=\"cc-tag\" class=\"cc-tag-'+cc.settings.tagPosition+'\"><a class=\"cc-link\" href=\"#\" id=\"cc-tag-button\" title=\"'+cc.strings.privacySettings+'\"><span>'+cc.strings.privacySettings+\"</span></a></div>\";jQuery(\"body\").prepend(data);jQuery(\"#cc-tag\").addClass(cc.settings.style);if(!cc.settings.hideprivacysettingstab){jQuery(\"#cc-tag\").fadeIn()}else{jQuery(\"#cc-tag\").hide()}jQuery(\".cc-privacy-link\").click(cc.showmodal);jQuery(\"#cc-tag-button\").click(cc.showmodal)}},getsize:function(c){var b=0,a;for(a in c){if(c.hasOwnProperty(a)){b++}}return b},settoken:function(a){if(cc.reloadkey){cc.reloadkey=false;if(!cc.allagree&&cc.settings.consenttype==\"implicit\"){cc.forcereload=true}cc.reloadifnecessary()}cc.sessionkey=a},showmodal:function(){if(!cc.checkedremote&&!cc.settings.disableallsites){cc.fetchprefs()}jQuery(document).bind(\"keyup\",cc.onkeyup);jQuery(\"body\").prepend('<div id=\"cc-modal-overlay\"></div>');jQuery(this).blur();if(cc.ismobile){cc.setupformobile()}data='<div id=\"cc-modal\"><div id=\"cc-modal-wrapper\"><h2>'+cc.strings.privacySettingsDialogTitleA+\" <span>\"+cc.strings.privacySettingsDialogTitleB+'</span></h2><p class=\"cc-subtitle\">'+cc.strings.privacySettingsDialogSubtitle+'</p><div class=\"cc-content\"></div><div class=\"cc-clear\"></div><p id=\"cc-modal-closebutton\" class=\"cc-modal-closebutton\"><a class=\"cc-link\" href=\"#\" title=\"'+cc.strings.closeWindow+'\"><span>'+cc.strings.closeWindow+'</span></a></p><div id=\"cc-modal-footer-buttons\"><p id=\"cc-modal-global\"><a class=\"cc-link\" href=\"#\" title=\"'+cc.strings.changeForAllSitesLink+'\"><span>'+cc.strings.changeForAllSitesLink+'</span></a></p></div><a id=\"cc-notification-logo\" class=\"cc-logo\" target=\"_blank\" href=\"http://silktide.com/cookieconsent\" title=\"'+cc.strings.poweredBy+'\"><span>'+cc.strings.poweredBy+'</span></a> <div class=\"cc-clear\"></div></div></div>';jQuery(\"body\").prepend(data);if(cc.settings.disableallsites){jQuery(\"#cc-modal-global\").hide()}jQuery(\"#cc-modal\").addClass(cc.settings.style).click(cc.closemodals);if(cc.ismobile){jQuery(\"#cc-modal\").addClass(\"cc-mobile\")}cc.reloadmodal();jQuery(\"#cc-modal\").fadeIn();jQuery(\"#cc-modal-overlay\").fadeIn();jQuery(\"#cc-modal-wrapper\").click(function(){cc.noclosewin=true});jQuery(\"#cc-modal .cc-modal-closebutton a\").click(function(){cc.showhidemodal();cc.reloadifnecessary();return false});jQuery(\"#cc-modal-global\").click(function(){cc.frommodal=true;cc.gotosettings();return false});jQuery(\"#cc-tag-button\").unbind(\"click\").click(cc.showhidemodal);jQuery(\".cc-privacy-link\").unbind(\"click\").click(cc.showhidemodal);return false},closepreferencesmodal:function(){jQuery.each(cc.defaultCookies,function(a,b){b=jQuery(\"#cc-globalpreference-selector-\"+a).val();if(cc.approved[a]!=\"yes\"&&cc.approved[a]!=\"no\"){cc.approved[a]=b;cc.setcookie(\"cc_\"+a,cc.approved[a],365)}cc.remoteCookies[a]=b});urlx=cc.settings.serveraddr+\"?p=1&tokenonly=true&cc-key=\"+cc.sessionkey;if(cc.remoteCookies.social){urlx+=\"&cc-cookies-social=\"+cc.remoteCookies.social}if(cc.remoteCookies.analytics){urlx+=\"&cc-cookies-analytics=\"+cc.remoteCookies.analytics}if(cc.remoteCookies.advertising){urlx+=\"&cc-cookies-advertising=\"+cc.remoteCookies.advertising}cc.insertscript(urlx);jQuery(\"#cc-notification\").hide().remove();jQuery(this).blur();jQuery(\"#cc-settingsmodal\").fadeOut(null,function(){jQuery(\"#cc-settingsmodal\").remove()});if(!cc.frommodal){cc.checkapproval();cc.reloadifnecessary()}else{cc.frommodal=false;cc.showhidemodal()}return false},showhidemodal:function(){jQuery(this).blur();cc.checkedlocal=false;cc.checkedremote=false;if(jQuery(\"#cc-modal\").is(\":visible\")&&!cc.frommodal){cc.closingmodal=true;jQuery(\"#cc-modal-overlay\").fadeToggle(null,function(){cc.closingmodal=false});jQuery.each(cc.cookies,function(a,b){thisval=jQuery(\"#cc-preference-selector-\"+a).val();if(a==\"necessary\"){thisval=\"yes\"}if(thisval==\"no\"){cc.cookies[a].approved=false;cc.approved[a]=\"no\";cc.setcookie(\"cc_\"+a,cc.approved[a],365)}else{if(thisval==\"yes\"){cc.cookies[a].approved=true;cc.approved[a]=\"yes\";cc.setcookie(\"cc_\"+a,cc.approved[a],365)}else{cc.cookies[a].approved=false;cc.deletecookie(a);delete cc.approved[a]}}cc.cookies[a].asked=false});cc.checkapproval()}else{if(!jQuery(\"#cc-settingsmodal\").is(\":visible\")&&!jQuery(\"#cc-modal\").is(\":visible\")){cc.closingmodal=true;jQuery(\"#cc-modal-overlay\").fadeToggle(null,function(){cc.closingmodal=false})}}if(cc.ismobile){jQuery(\"#cc-modal\").toggle()}else{jQuery(\"#cc-modal\").fadeToggle()}return false},reloadmodal:function(){jQuery(\"#cc-modal-wrapper .cc-content\").html(\"\");if(cc.getsize(cc.cookies)>0){jQuery(\"#cc-modal-wrapper .cc-content\").append(\"<ul></ul>\");jQuery.each(cc.cookies,function(a,b){jQuery(\"#cc-modal-wrapper ul\").append('<li id=\"cc-preference-element-'+a+'\"><label for=\"cc-preference-selector-'+a+'\"><strong>'+b.title+\"</strong><span>\"+b.description+'</span></label><select id=\"cc-preference-selector-'+a+'\"><option value=\"yes\">'+cc.strings.preferenceConsent+'</option><option value=\"no\">'+cc.strings.preferenceDecline+\"</option></select></li>\");if(b.link){jQuery(\"#cc-preference-element-\"+a+\" label span\").append(' <a target=\"_blank\" href=\"'+b.link+'\" class=\"cc-learnmore-link\">'+cc.strings.learnMore+\"</a>\")}if((a==\"social\"||a==\"advertising\"||a==\"analytics\")&&!cc.settings.disableallsites){jQuery(\"#cc-preference-selector-\"+a).append('<option value=\"global\">'+cc.strings.preferenceUseGlobal+\"</option>\")}jQuery(\"#cc-change-button-allsites\").unbind(\"click\").click(function(){cc.frommodal=true;cc.gotosettings();return false});jQuery(\"#cc-preference-selector-\"+a).change(function(){});if(a==\"necessary\"){jQuery(\"#cc-preference-selector-\"+a).remove()}if(cc.approved[a]==\"yes\"){jQuery(\"#cc-preference-selector-\"+a).val(\"yes\")}else{if(cc.approved[a]==\"no\"){jQuery(\"#cc-preference-selector-\"+a).val(\"no\")}else{jQuery(\"#cc-preference-selector-\"+a).val(\"global\")}}})}else{jQuery(\"#cc-modal-wrapper .cc-content\").append(\"<p>\"+cc.strings.notUsingCookies+\"</p>\")}jQuery(\".cc-content\").append('<div class=\"cc-clear\"></div>')},reloadsettingsmodal:function(){jQuery(\"#cc-settingsmodal-wrapper .cc-content\").html(\"\");if(cc.getsize(cc.defaultCookies)>0){jQuery(\"#cc-settingsmodal-wrapper .cc-content\").append(\"<ul></ul>\");jQuery.each(cc.defaultCookies,function(a,b){jQuery(\"#cc-settingsmodal-wrapper ul\").append('<li id=\"cc-globalpreference-element-'+a+'\"><label for=\"cc-globalpreference-selector-'+a+'\"><strong>'+b.title+\"</strong><span>\"+b.description+'</span></label><select id=\"cc-globalpreference-selector-'+a+'\"><option value=\"ask\">'+cc.strings.preferenceAsk+'</option><option value=\"always\">'+cc.strings.preferenceAlways+'</option><option value=\"never\">'+cc.strings.preferenceNever+\"</option></select></li>\");if(b.link){jQuery(\"#cc-globalpreference-element-\"+a+\" label span\").append(' <a target=\"_blank\" href=\"'+b.link+'\" class=\"cc-learnmore-link\">'+cc.strings.learnMore+\"</a>\")}jQuery(\"#cc-globalpreference-selector-\"+a).change(function(){});if(cc.remoteCookies[a]==\"always\"){jQuery(\"#cc-globalpreference-selector-\"+a).val(\"always\")}else{if(cc.remoteCookies[a]==\"never\"){jQuery(\"#cc-globalpreference-selector-\"+a).val(\"never\")}else{jQuery(\"#cc-globalpreference-selector-\"+a).val(\"ask\")}}})}else{jQuery(\"#cc-settingsmodal-wrapper .cc-content\").append(\"<p>\"+cc.strings.notUsingCookies+\"</p>\")}jQuery(\"#cc-settingsmodal-wrapper .cc-content\").append('<div class=\"cc-clear\"></div>')},approvedeny:function(){key=jQuery(this).attr(\"id\").split(\"-\")[2];if(cc.cookies[key].approved){cc.cookies[key].approved=false;cc.approved[key]=\"no\"}else{cc.cookies[key].approved=true;cc.approved[key]=\"yes\"}cc.setcookie(\"cc_\"+key,cc.approved[key],365);cc.checkapproval();cc.reloadmodal();return false},clearalllocalcookies:function(){var d=document.cookie.split(\";\");for(var c=0;c<d.length;c++){var b=d[c];var e=b.indexOf(\"=\");var a=e>-1?b.substr(0,e):b;document.cookie=a+\"=;expires=Thu, 01 Jan 1970 00:00:00 GMT\"}},clearlocal:function(){cc.clearalllocalcookies();jQuery(this).before(\"<p>\"+cc.strings.clearedCookies+\"</p>\")},getcurrenturl:function(){return window.location.protocol+\"//\"+window.location.host+window.location.pathname},gotosettings:function(){if(jQuery(\"#cc-modal\").is(\":visible\")){cc.showhidemodal()}jQuery(this).blur();if(cc.ismobile){cc.setupformobile();jQuery(\"#cc-notification\").remove()}if(cc.frommodal){buttontext=cc.strings.backToSiteSettings}else{buttontext=cc.strings.closeWindow}data='<div id=\"cc-settingsmodal\"><div id=\"cc-settingsmodal-wrapper\"><h2>'+cc.strings.allSitesSettingsDialogTitleA+\" <span>\"+cc.strings.allSitesSettingsDialogTitleB+'</span></h2><p class=\"cc-subtitle\">'+cc.strings.allSitesSettingsDialogSubtitle+'</p><div class=\"cc-content\"></div><div class=\"cc-clear\"></div><p id=\"cc-settingsmodal-closebutton\" class=\"cc-settingsmodal-closebutton\"><a class=\"cc-link\" href=\"#\" title=\"'+buttontext+'\"><span>'+buttontext+'</span></a></p><div id=\"cc-settingsmodal-footer-buttons\"><p id=\"cc-settingsmodal-secondclosebutton\" class=\"cc-settingsmodal-closebutton\"><a class=\"cc-link\" href=\"#\" title=\"'+buttontext+'\"><span>'+buttontext+'</span></a></p></div><a id=\"cc-notification-logo\" class=\"cc-logo\" target=\"_blank\" href=\"http://silktide.com/cookieconsent\" title=\"'+cc.strings.poweredBy+'\"><span>'+cc.strings.poweredBy+\"</span></a> </div></div>\";jQuery(\"body\").prepend(data);cc.reloadsettingsmodal();jQuery(\"#cc-settingsmodal\").addClass(cc.settings.style).click(cc.closemodals);jQuery(\"#cc-settingsmodal-wrapper\").click(function(){cc.noclosewin=true});if(cc.ismobile){jQuery(\"#cc-settingsmodal\").addClass(\"cc-mobile\")}jQuery(\"#cc-settingsmodal\").fadeIn();jQuery(\".cc-settingsmodal-closebutton\").click(cc.closepreferencesmodal);return false},setupformobile:function(){if(!cc.hassetupmobile){cc.hassetupmobile=true;jQuery(\"head\").append('<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\">');if(cc.settings.style==\"cc-light\"){bgcol=\"#e1e1e1\"}else{bgcol=\"#1d1d1d\"}jQuery(\"body\").html(\"\").css(\"margin\",0).css(\"width\",\"auto\").css(\"backgroundColor\",bgcol).css(\"backgroundImage\",\"none\")}},onfirstload:function(){if(!cc.setupcomplete&&cc.initobj){if(!(window.jQuery)){cc.jqueryattempts++;if(cc.jqueryattempts>=5){return}setTimeout(cc.onfirstload,200);return}cc.setupcomplete=true;cc.setup()}setTimeout(cc.afterload,50);cc.checkapproval()},afterload:function(){jQuery(\".cc-button-enableall\").addClass(\"cc-link\").click(cc.onlocalconsentgiven);jQuery(\".cc-button-enable-all\").addClass(\"cc-link\").click(cc.onlocalconsentgiven);jQuery.each(cc.cookies,function(a,b){jQuery(\".cc-button-enable-\"+a).addClass(\"cc-link\").click(cc.onlocalconsentgiven)})}};if(!(window.jQuery)){var s=document.createElement(\"script\");s.setAttribute(\"src\",\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\");s.setAttribute(\"type\",\"text/javascript\");document.getElementsByTagName(\"head\")[0].appendChild(s);if(window.onload!=null){var oldOnload=window.onload;window.onload=function(a){oldOnload(a);cc.onfirstload()}}else{window.onload=cc.onfirstload}}else{jQuery(document).ready(cc.onfirstload)}(function(b){cc.ismobile=/android.+mobile|avantgo|bada\\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\\/|plucker|pocket|psp|symbian|treo|up\\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(b)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\\-(n|u)|c55\\/|capi|ccwa|cdm\\-|cell|chtm|cldc|cmd\\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\\-s|devi|dica|dmob|do(c|p)o|ds(12|\\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\\-|_)|g1 u|g560|gene|gf\\-5|g\\-mo|go(\\.w|od)|gr(ad|un)|haie|hcit|hd\\-(m|p|t)|hei\\-|hi(pt|ta)|hp( i|ip)|hs\\-c|ht(c(\\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\\-(20|go|ma)|i230|iac( |\\-|\\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\\/)|klon|kpt |kwc\\-|kyo(c|k)|le(no|xi)|lg( g|\\/(k|l|u)|50|54|e\\-|e\\/|\\-[a-w])|libw|lynx|m1\\-w|m3ga|m50\\/|ma(te|ui|xo)|mc(01|21|ca)|m\\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\\-2|po(ck|rt|se)|prox|psio|pt\\-g|qa\\-a|qc(07|12|21|32|60|\\-[2-7]|i\\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\\-|oo|p\\-)|sdk\\/|se(c(\\-|0|1)|47|mc|nd|ri)|sgh\\-|shar|sie(\\-|m)|sk\\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\\-|v\\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\\-|tdg\\-|tel(i|m)|tim\\-|t\\-mo|to(pl|sh)|ts(70|m\\-|m3|m5)|tx\\-9|up(\\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\\-|2|g)|yas\\-|your|zeto|zte\\-/i.test(b.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);WebFontConfig={google:{families:[\"Open+Sans:400,600:latin\"]}};(function(){var a=document.createElement(\"script\");a.src=(\"https:\"==document.location.protocol?\"https\":\"http\")+\"://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js\";a.type=\"text/javascript\";a.async=\"true\";var b=document.getElementsByTagName(\"script\")[0];b.parentNode.insertBefore(a,b)})();
    </script>
    
    <script type=\"text/javascript\">
    // <![CDATA[
    cc.initialise({
            cookies: {
                    analytics: {}
            },
            settings: {
                    style: \"light\"
            }
    });
    // ]]>
    </script>
    <!-- End Cookie Consent plugin -->
    
    <script type=\"text/javascript\">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XXXXX-Y']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

  </head>

  <body>
      
  
<div id=\"wrap\">
    <div class=\"navbar navbar-damainpotepuh navbar-fixed-top\">
      <div class=\"navbar-damainpotepuh navbar-inner\">
        <div class=\"container\">
          <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"brand\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" id=\"logo\"/>
          </a>          
          <div class=\"nav-collapse-damainpotepuh nav-collapse collapse\">
              <ul class=\"nav\">
                <li style=\"margin-left: 10px;\"><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home"), "html", null, true);
        echo "\" style=\"color: #fff;\">DOMOV</a></li>
                <li style=\"margin-left: 10px;\"><a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_o_nas"), "html", null, true);
        echo "\" style=\"color: #fff;\">O NAS</a></li>
                 <li class=\"dropdown\"  style=\"margin-left: 33px;\">
                  <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_artikli"), "html", null, true);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" style=\"color: #fff;\">ARTIKLI <b class=\"caret\"></b></a>
                  <ul class=\"damainpotepuh-dropdown-menu dropdown-menu\">
                    <li><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_dogs"), "html", null, true);
        echo "\" style=\"color: #fff;\">PSI</a></li>
                    <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_cats"), "html", null, true);
        echo "\" style=\"color: #fff;\">MAČKE</a></li>
                    <li><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_birds"), "html", null, true);
        echo "\" style=\"color: #fff;\">PTICE</a></li>
                    <li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_rodents"), "html", null, true);
        echo "\" style=\"color: #fff;\">GLODALCI</a></li>
                    <li><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_fishes"), "html", null, true);
        echo "\" style=\"color: #fff;\">RIBE</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_action_products"), "html", null, true);
        echo "\" style=\"color: #fff;\">AKCIJSKI IZDELKI</a></li>
                    <li><a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_new_products"), "html", null, true);
        echo "\" style=\"color: #fff;\">NOVI IZDELKI</a></li>
                    <li><a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_fancy"), "html", null, true);
        echo "\" style=\"color: #fff;\">ŠMENSI-FENSI</a></li>
                  </ul>
                </li>
                <li style=\"margin-left: 10px;\"><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_galerija"), "html", null, true);
        echo "\" style=\"color: #fff;\">GALERIJA</a></li>
                <li style=\"margin-left: 10px;\"><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_video"), "html", null, true);
        echo "\" style=\"color: #fff;\">VIDEO</a></li>
                <li style=\"margin-left: 10px;\"><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_kontakt"), "html", null, true);
        echo "\" style=\"color: #fff;\">KONTAKT</a></li>
                <li style=\"margin-left: 10px;\">
                    <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/damainpotepuhstatic/images/heart.jpg"), "html", null, true);
        echo "\" alt=\"Heart\" id=\"heart\" />
                    <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_zmenkarije"), "html", null, true);
        echo "\" style=\"color: #fff; margin-top: -20px;\">ZMENKARIJE</a>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          
        </div>
      </div>
    </div>

    <div class=\"container\">
      ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 125
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 126
                echo "              <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo " fade in\" data-alert=\"alert\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><div class=\"alert-heading\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</div></div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 128
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "    
                  
        <div class=\"symfony-content\">
            ";
        // line 131
        $this->displayBlock('content', $context, $blocks);
        // line 133
        echo "        </div>
    </div>      
        
    <div id=\"push\"></div>
              
</div>
    <div id=\"footer\">
        <div class=\"container\">
            <hr />
            <p class=\"damainpotepuh-footer muted credit\">
                <span style=\"background-color: #F9D49E; padding: 0px 5px;\">
                    Dama in potepuh - Trgovina za male živali, Nina Grabnar s.p. Dolenska cesta 149, 1000 Ljubljana
                </span>
            </p>            
        </div>
    </div>     
    
      
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 154
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f60858d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f60858d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_jquery-1.7.2_1.js");
            // line 159
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "f60858d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f60858d_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_lightbox_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "f60858d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f60858d_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_bootstrap_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "f60858d_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f60858d_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_part_4_script_1.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "f60858d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f60858d") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 161
        echo "    <script>
      !function (\$) {
        \$(function(){
          // carousel demo
          \$('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script type=\"text/javascript\">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-42160059-1']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 131
    public function block_content($context, array $blocks = array())
    {
        // line 132
        echo "            ";
    }

    public function getTemplateName()
    {
        return "damainpotepuhStaticBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 132,  357 => 131,  352 => 8,  324 => 161,  292 => 159,  288 => 154,  265 => 133,  263 => 131,  253 => 128,  242 => 126,  237 => 125,  233 => 124,  220 => 114,  216 => 113,  211 => 111,  207 => 110,  203 => 109,  197 => 106,  193 => 105,  189 => 104,  184 => 102,  180 => 101,  176 => 100,  172 => 99,  168 => 98,  163 => 96,  158 => 94,  154 => 93,  147 => 89,  143 => 88,  76 => 23,  44 => 21,  40 => 15,  30 => 8,  21 => 1,);
    }
}
