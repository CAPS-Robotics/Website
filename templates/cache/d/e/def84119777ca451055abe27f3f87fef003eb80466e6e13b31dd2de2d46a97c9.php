<?php

/* index.html */
class __TwigTemplate_dd1509b5b9557b84594ea84eed358acf7b910cbf49116a69647c87005c9345be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html", "index.html", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row\">

        <div class=\"md-seven columns pull-right\">
            <h3 class=\"text-info\">Who are we?</h3>
            ";
        // line 9
        $this->loadTemplate("includes/who-are-we.html", "index.html", 9)->display($context);
        // line 10
        echo "
            <p>Questions? <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/contact\">Get in touch!</a> or email us at <a href=\"mailto:captain@mmr2410.com\">captain@mmr2410.com</a></p>

            <h3 class=\"text-info\">What is FIRST?</h3>
            ";
        // line 14
        $this->loadTemplate("includes/first.html", "index.html", 14)->display($context);
        // line 15
        echo "
            <p>Want to learn more about FIRST? <a href=\"http://www.usfirst.org\">www.usfirst.org</a></p>

            <h3 class=\"text-info\">A big thank you to our sponsors</h3>
            ";
        // line 19
        $this->loadTemplate("includes/sponsors.html", "index.html", 19)->display($context);
        // line 20
        echo "
            <h3 class=\"text-info\">Dates to know!</h3>
            ";
        // line 22
        $this->loadTemplate("includes/dates-to-know.html", "index.html", 22)->display($context);
        // line 23
        echo "

        </div>

        <div class=\"md-five columns pull-left\">

            ";
        // line 29
        $this->loadTemplate("includes/carousel.html", "index.html", 29)->display($context);
        // line 30
        echo "
            <div class=\"text-center margin-b\">
                <a href=\"https://www.facebook.com/FRC2410\" class=\"button button--facebook\">
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/img/social/facebook.png\" alt=\"Facebook\" width=\"60\">
                </a>
                <a href=\"https://www.twitter.com/team2410\" class=\"button button--twitter\">
                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/img/social/twitter.png\" alt=\"Twitter\" width=\"60\">
                </a>
                <a href=\"https://github.com/caps-robotics\" class=\"button button--github\">
                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/img/social/github.png\" alt=\"Github\" width=\"60\">
                </a>
            </div>

            ";
        // line 43
        $this->loadTemplate("includes/twitter.html", "index.html", 43)->display($context);
        // line 44
        echo "
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 44,  99 => 43,  92 => 39,  86 => 36,  80 => 33,  75 => 30,  73 => 29,  65 => 23,  63 => 22,  59 => 20,  57 => 19,  51 => 15,  49 => 14,  43 => 11,  40 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base/base.html" %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/* */
/*         <div class="md-seven columns pull-right">*/
/*             <h3 class="text-info">Who are we?</h3>*/
/*             {% include "includes/who-are-we.html" %}*/
/* */
/*             <p>Questions? <a href="{{ baseUrl() }}/contact">Get in touch!</a> or email us at <a href="mailto:captain@mmr2410.com">captain@mmr2410.com</a></p>*/
/* */
/*             <h3 class="text-info">What is FIRST?</h3>*/
/*             {% include "includes/first.html" %}*/
/* */
/*             <p>Want to learn more about FIRST? <a href="http://www.usfirst.org">www.usfirst.org</a></p>*/
/* */
/*             <h3 class="text-info">A big thank you to our sponsors</h3>*/
/*             {% include "includes/sponsors.html" %}*/
/* */
/*             <h3 class="text-info">Dates to know!</h3>*/
/*             {% include "includes/dates-to-know.html" %}*/
/* */
/* */
/*         </div>*/
/* */
/*         <div class="md-five columns pull-left">*/
/* */
/*             {% include "includes/carousel.html" %}*/
/* */
/*             <div class="text-center margin-b">*/
/*                 <a href="https://www.facebook.com/FRC2410" class="button button--facebook">*/
/*                     <img src="{{ baseUrl() }}/img/social/facebook.png" alt="Facebook" width="60">*/
/*                 </a>*/
/*                 <a href="https://www.twitter.com/team2410" class="button button--twitter">*/
/*                     <img src="{{ baseUrl() }}/img/social/twitter.png" alt="Twitter" width="60">*/
/*                 </a>*/
/*                 <a href="https://github.com/caps-robotics" class="button button--github">*/
/*                     <img src="{{ baseUrl() }}/img/social/github.png" alt="Github" width="60">*/
/*                 </a>*/
/*             </div>*/
/* */
/*             {% include "includes/twitter.html" %}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
