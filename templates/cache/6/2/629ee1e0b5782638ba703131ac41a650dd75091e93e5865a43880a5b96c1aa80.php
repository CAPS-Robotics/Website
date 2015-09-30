<?php

/* contact.html */
class __TwigTemplate_65cfc533ea843aaebd52ef54b830551f25defc975d0e8a0273caa3a5e82124d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html", "contact.html", 1);
        $this->blocks = array(
            'customHead' => array($this, 'block_customHead'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_customHead($context, array $blocks = array())
    {
        // line 4
        echo "
    <style>

        .button {
            min-width: 9em;
        }

    </style>

";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
    <div class=\"row\">
        <div class=\"md-five columns\">
            <img src=\"https://maps.googleapis.com/maps/api/staticmap?center=7501 W 149th Terrace, Overland Park, KS 66223&maptype=roadmap&size=560x280&markers=7501 W 149th Terrace, Overland Park, KS 66223\" alt=\"Google Maps, Center for Advanced Profession Studies, 7501 W 149th Terrace, Overland Park, KS 66223\" width=\"100%\">
            <address class=\"padding\">
                <b>Center for Advanced Professional Stuides</b><br>
                Our home<br>
                7501 West 149th Terrace<br>
                Overland Park, KS<br>
                Phone: +1 (913) 239-5900
            </address>
        </div>
        <div class=\"md-four columns\">
            <h3 class=\"text-info\">People Of Interest</h3>

            <address>
                <b>Dan Ritter</b><br>
                Head Mentor<br>
                Email: <a href=\"mailto:dpritter@bluevalleyk12.org\">dpritter@bluevalleyk12.org</a>
            </address>

            <address>
                <b>Dominc Tassio</b> and <b>Allison Meegan</b><br>
                Team Captains<br>
                Email: <a href=\"mailto:captain@mmr2410.com\">captain@mmr2410.com</a>
            </address>

            <address>
                <b>Webmaster</b><br>
                Email: <a href=\"mailto:webmaster@mmr2410.com\">webmaster@mmr2410.com</a>
            </address>
        </div>
        <div class=\"md-three columns\">
            <h3 class=\"text-info\">Social Media</h3>
            <p class=\"text-no-indent\"><a href=\"https://twitter.com/team2410\" class=\"button button--success\">Twitter</a></p>
            <p class=\"text-no-indent\"><a href=\"https://facebook.com/FRC2410\" class=\"button button--success\">Facebook</a></p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "contact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  45 => 15,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "base/base.html" %}*/
/* */
/* {% block customHead %}*/
/* */
/*     <style>*/
/* */
/*         .button {*/
/*             min-width: 9em;*/
/*         }*/
/* */
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="md-five columns">*/
/*             <img src="https://maps.googleapis.com/maps/api/staticmap?center=7501 W 149th Terrace, Overland Park, KS 66223&maptype=roadmap&size=560x280&markers=7501 W 149th Terrace, Overland Park, KS 66223" alt="Google Maps, Center for Advanced Profession Studies, 7501 W 149th Terrace, Overland Park, KS 66223" width="100%">*/
/*             <address class="padding">*/
/*                 <b>Center for Advanced Professional Stuides</b><br>*/
/*                 Our home<br>*/
/*                 7501 West 149th Terrace<br>*/
/*                 Overland Park, KS<br>*/
/*                 Phone: +1 (913) 239-5900*/
/*             </address>*/
/*         </div>*/
/*         <div class="md-four columns">*/
/*             <h3 class="text-info">People Of Interest</h3>*/
/* */
/*             <address>*/
/*                 <b>Dan Ritter</b><br>*/
/*                 Head Mentor<br>*/
/*                 Email: <a href="mailto:dpritter@bluevalleyk12.org">dpritter@bluevalleyk12.org</a>*/
/*             </address>*/
/* */
/*             <address>*/
/*                 <b>Dominc Tassio</b> and <b>Allison Meegan</b><br>*/
/*                 Team Captains<br>*/
/*                 Email: <a href="mailto:captain@mmr2410.com">captain@mmr2410.com</a>*/
/*             </address>*/
/* */
/*             <address>*/
/*                 <b>Webmaster</b><br>*/
/*                 Email: <a href="mailto:webmaster@mmr2410.com">webmaster@mmr2410.com</a>*/
/*             </address>*/
/*         </div>*/
/*         <div class="md-three columns">*/
/*             <h3 class="text-info">Social Media</h3>*/
/*             <p class="text-no-indent"><a href="https://twitter.com/team2410" class="button button--success">Twitter</a></p>*/
/*             <p class="text-no-indent"><a href="https://facebook.com/FRC2410" class="button button--success">Facebook</a></p>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
