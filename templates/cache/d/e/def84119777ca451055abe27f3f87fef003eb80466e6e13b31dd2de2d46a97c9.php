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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione nulla nobis architecto, voluptate iure, accusantium consectetur rerum perspiciatis ea obcaecati, iusto expedita quisquam dolor totam, distinctio voluptatum enim suscipit sint. Veritatis, aperiam, sunt. Amet sint cumque tempora est ex voluptates, excepturi nostrum veniam assumenda.</p>
            <p>Questions? <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/contact\">Get in touch!</a> or email us at <a href=\"mailto:captain@mmr2410.com\">captain@mmr2410.com</a></p>

            <h3 class=\"text-info\">What is FIRST?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, in quasi adipisci unde obcaecati dolorem placeat praesentium distinctio quisquam at omnis esse. Dolore corporis, quisquam itaque beatae, nam consectetur incidunt optio error nihil, earum sequi aperiam quos nobis maiores mollitia dolores. Dolorem ex aperiam adipisci?</p>
            <p>Want to learn more about FIRST? <a href=\"http://www.usfirst.org\">www.usfirst.org</a></p>

            <h3 class=\"text-info\">Dates to know!</h3>
            <ul>
                <li>
                    <span>2015 Off Season Competition (Cow Town Throwdown)</span>
                    <span class=\"pull-right\">October 30 and 31</span>
                </li>
                <li>
                    <span>2016 Competition Kickoff</span>
                    <span class=\"pull-right\">January 9th</span>
                </li>
                <li>
                    <span>2016 Greater Kansas City Regional</span>
                    <span class=\"pull-right\">TBD</span>
                </li>
                <li>
                    <span>2016 Other Regional</span>
                    <span class=\"pull-right\">TBD</span>
                </li>
            </ul>

        </div>

        <div class=\"md-five columns pull-left\">

            ";
        // line 40
        $this->loadTemplate("includes/carousel.html", "index.html", 40)->display($context);
        // line 41
        echo "
            ";
        // line 42
        $this->loadTemplate("includes/twitter.html", "index.html", 42)->display($context);
        // line 43
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
        return array (  79 => 43,  77 => 42,  74 => 41,  72 => 40,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
/*             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione nulla nobis architecto, voluptate iure, accusantium consectetur rerum perspiciatis ea obcaecati, iusto expedita quisquam dolor totam, distinctio voluptatum enim suscipit sint. Veritatis, aperiam, sunt. Amet sint cumque tempora est ex voluptates, excepturi nostrum veniam assumenda.</p>*/
/*             <p>Questions? <a href="{{ baseUrl() }}/contact">Get in touch!</a> or email us at <a href="mailto:captain@mmr2410.com">captain@mmr2410.com</a></p>*/
/* */
/*             <h3 class="text-info">What is FIRST?</h3>*/
/*             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, in quasi adipisci unde obcaecati dolorem placeat praesentium distinctio quisquam at omnis esse. Dolore corporis, quisquam itaque beatae, nam consectetur incidunt optio error nihil, earum sequi aperiam quos nobis maiores mollitia dolores. Dolorem ex aperiam adipisci?</p>*/
/*             <p>Want to learn more about FIRST? <a href="http://www.usfirst.org">www.usfirst.org</a></p>*/
/* */
/*             <h3 class="text-info">Dates to know!</h3>*/
/*             <ul>*/
/*                 <li>*/
/*                     <span>2015 Off Season Competition (Cow Town Throwdown)</span>*/
/*                     <span class="pull-right">October 30 and 31</span>*/
/*                 </li>*/
/*                 <li>*/
/*                     <span>2016 Competition Kickoff</span>*/
/*                     <span class="pull-right">January 9th</span>*/
/*                 </li>*/
/*                 <li>*/
/*                     <span>2016 Greater Kansas City Regional</span>*/
/*                     <span class="pull-right">TBD</span>*/
/*                 </li>*/
/*                 <li>*/
/*                     <span>2016 Other Regional</span>*/
/*                     <span class="pull-right">TBD</span>*/
/*                 </li>*/
/*             </ul>*/
/* */
/*         </div>*/
/* */
/*         <div class="md-five columns pull-left">*/
/* */
/*             {% include "includes/carousel.html" %}*/
/* */
/*             {% include "includes/twitter.html" %}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
