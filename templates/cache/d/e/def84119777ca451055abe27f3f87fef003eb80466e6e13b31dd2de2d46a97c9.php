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
        <div class=\"md-five columns\">
            <img src=\"http://placehold.it/320x240\" width=\"100%\">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut eos amet quas, eveniet illo sit molestiae quis quae saepe expedita.</p>

            <div>
                <a class=\"twitter-timeline\" data-dnt=\"true\" href=\"https://twitter.com/Team2410\" data-widget-id=\"554386837306105856\">Tweets by @Team2410</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
            </div>
        </div>
        <div class=\"md-seven columns\">
            <h3 class=\"text-info\">Who are we?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione nulla nobis architecto, voluptate iure, accusantium consectetur rerum perspiciatis ea obcaecati, iusto expedita quisquam dolor totam, distinctio voluptatum enim suscipit sint. Veritatis, aperiam, sunt. Amet sint cumque tempora est ex voluptates, excepturi nostrum veniam assumenda.</p>
            <p>Questions? <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/contact\" class=\"button button--primary\">Get in touch!</a> or <a href=\"mailto:captain@mmr2410.com\" class=\"button button--primary\">captain@mmr2410.com</a></p>

            <h3 class=\"text-info\">What is FIRST?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, in quasi adipisci unde obcaecati dolorem placeat praesentium distinctio quisquam at omnis esse. Dolore corporis, quisquam itaque beatae, nam consectetur incidunt optio error nihil, earum sequi aperiam quos nobis maiores mollitia dolores. Dolorem ex aperiam adipisci?</p>
            <p>Want to learn more about FIRST? <a href=\"http://www.usfirst.org\" class=\"button button--primary\">www.usfirst.org</a></p>

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
        return array (  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base/base.html" %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="md-five columns">*/
/*             <img src="http://placehold.it/320x240" width="100%">*/
/*             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut eos amet quas, eveniet illo sit molestiae quis quae saepe expedita.</p>*/
/* */
/*             <div>*/
/*                 <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Team2410" data-widget-id="554386837306105856">Tweets by @Team2410</a>*/
/*                 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>*/
/*             </div>*/
/*         </div>*/
/*         <div class="md-seven columns">*/
/*             <h3 class="text-info">Who are we?</h3>*/
/*             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione nulla nobis architecto, voluptate iure, accusantium consectetur rerum perspiciatis ea obcaecati, iusto expedita quisquam dolor totam, distinctio voluptatum enim suscipit sint. Veritatis, aperiam, sunt. Amet sint cumque tempora est ex voluptates, excepturi nostrum veniam assumenda.</p>*/
/*             <p>Questions? <a href="{{ baseUrl() }}/contact" class="button button--primary">Get in touch!</a> or <a href="mailto:captain@mmr2410.com" class="button button--primary">captain@mmr2410.com</a></p>*/
/* */
/*             <h3 class="text-info">What is FIRST?</h3>*/
/*             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, in quasi adipisci unde obcaecati dolorem placeat praesentium distinctio quisquam at omnis esse. Dolore corporis, quisquam itaque beatae, nam consectetur incidunt optio error nihil, earum sequi aperiam quos nobis maiores mollitia dolores. Dolorem ex aperiam adipisci?</p>*/
/*             <p>Want to learn more about FIRST? <a href="http://www.usfirst.org" class="button button--primary">www.usfirst.org</a></p>*/
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
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
