<?php

/* robots.html */
class __TwigTemplate_7067f833a71438ba9328fba2fd6ac729dc7e478e233e22b23019d2854a0acabd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html", "robots.html", 1);
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

    <div class=\"robot xs-twelve sm-twelve md-four lg-four xl-four columns\">
        <h4>Apollo II <small>Recycle Rush 2015</small></h4>
        <p><b>Greater Kansas City Regional</b></p>
        <ul>
            <li>Rank: 4th</li>
            <li>Qualifier Average: 79.00</li>
            <li>Playoff Average: 61.00</li>
            <li>Quality Award</li>
        </ul>
        <p><b>Hub City Regional</b></p>
        <ul>
            <li>Rank: 8th</li>
            <li>Qualifier Score: 79.50</li>
            <li>Playoff Score: 101.00</li>
            <li>Dean's List Finalist (Allison Meegan)</li>
        </ul>
    </div>

    <div class=\"robot xs-twelve sm-twelve md-four lg-four xl-four columns\">
        <h4>Bullseye <small>Arial Assist 2014</small></h4>
        <p><b>Greater Kansas City Regional</b></p>
        <ul>
            <li>Rank: 19th</li>
            <li>Score: 7-8-0</li>
            <li>Judges Award</li>
        </ul>
        <p><b>Oklahoma Regional</b></p>
        <ul>
            <li>Rank: 5th</li>
            <li>Score: 8-4-1</li>
            <li>Judges Award</li>
            <li>Dean's List Finalist (Lauren Pudvan)</li>
        </ul>
    </div>

    <div class=\"robot xs-twelve sm-twelve md-four lg-four xl-four columns\">
        <h4>Pegasus <small>Ultimate Ascent 2013</small></h4>
        <p><b>Greater Kansas City Regional</b></p>
        <ul>
            <li>Rank: 35th</li>
            <li>Score: 4-6-0</li>
            <li>Gracious Professionalism Award</li>
        </ul>
        <p><b>Razorback Regional</b></p>
        <ul>
            <li>Rank: 14th</li>
            <li>Score: 9-8-0</li>
            <li>Woodie Flowers Finalist (Dan Ritter)</li>
            <li>Team Spirit Award</li>
        </ul>
    </div>

    <div class=\"robot xs-twelve sm-twelve md-four lg-four xl-four columns\">
        <h4>Epona <small>Rebound Rumble 2012</small></h4>
        <p><b>Greater Kansas City Regional</b></p>
        <ul>
            <li>Rank: 60th</li>
            <li>Score: 1-8-0</li>
        </ul>
        <p><b>Oklahoma Regional</b></p>
        <ul>
            <li>Rank: 19th</li>
            <li>Score: 6-6-0</li>
            <li>Team Spirit Award</li>
        </ul>
        <p><b>Archimedes Division</b></p>
        <ul>
            <li>Rank: 90th</li>
            <li>Score: 3-6-0</li>
        </ul>
    </div>

    <div class=\"robot xs-twelve sm-twelve md-four lg-four xl-four columns\">
        <h4>Shadowfax <small>Logomotion 2011</small></h4>
        <p><b>Greater Kansas City Regional</b></p>
        <ul>
            <li>Rank: 11th</li>
            <li>Score: 7-5-0</li>
            <li>Innovation in Control Award</li>
        </ul>
        <p><b>Midwest Regional</b></p>
        <ul>
            <li>Rank: 18th</li>
            <li>Score: 5-7-0</li>
        </ul>
    </div>

    <div class=\"robot xs-twelve sm-twelve md-four lg-four xl-four columns\">
        <h4>Trigger <small>Breakaway 2010</small></h4>
        <p><b>Greater Kansas City Regional</b></p>
        <ul>
            <li>Rank: 20th</li>
            <li>Score: 10-5-2</li>
            <li>Finalist Award</li>
        </ul>
        <p><b>Oklahoma Regional</b></p>
        <ul>
            <li>Rank: 1st</li>
            <li>Score: 14-3-0</li>
        </ul>
        <p><b>Curie Division</b></p>
        <ul>
            <li>Rank: 41st</li>
            <li>Score: 6-4-0</li>
        </ul>
    </div>

    <div class=\"robot xs-twelve sm-twelve md-four lg-four xl-four columns\">
        <h4>G.B.A.L. <small>Lunacy 2009</small></h4>
        <p><b>Greater Kansas City Regional</b></p>
        <ul>
            <li>Rank: 9th</li>
            <li>Score: 6-4-0</li>
        </ul>
        <p><b>Colorado Regional</b></p>
        <ul>
            <li>Rank: 16th</li>
            <li>Score: 4-5-0</li>
        </ul>
    </div>

    <div class=\"robot xs-twelve sm-twelve md-four lg-four xl-four columns\">
        <h4>Ally Luminum <small>Overdrive 2008</small></h4>
        <p><b>St. Louis Regional</b></p>
        <ul>
            <li>Rank: 38th</li>
            <li>Score: 3-6-0</li>
            <li>Rookie All Star Award</li>
        </ul>
        <p><b>Greater Kansas City Regional</b></p>
        <ul>
            <li>Rank: 25th</li>
            <li>Score: 3-5-1</li>
        </ul>
        <p><b>Curie Division</b></p>
        <ul>
            <li>Rank: 72nd</li>
            <li>Score: 2-5-0</li>
        </ul>
    </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "robots.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base/base.html" %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="row">*/
/* */
/*     <div class="robot xs-twelve sm-twelve md-four lg-four xl-four columns">*/
/*         <h4>Apollo II <small>Recycle Rush 2015</small></h4>*/
/*         <p><b>Greater Kansas City Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 4th</li>*/
/*             <li>Qualifier Average: 79.00</li>*/
/*             <li>Playoff Average: 61.00</li>*/
/*             <li>Quality Award</li>*/
/*         </ul>*/
/*         <p><b>Hub City Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 8th</li>*/
/*             <li>Qualifier Score: 79.50</li>*/
/*             <li>Playoff Score: 101.00</li>*/
/*             <li>Dean's List Finalist (Allison Meegan)</li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="robot xs-twelve sm-twelve md-four lg-four xl-four columns">*/
/*         <h4>Bullseye <small>Arial Assist 2014</small></h4>*/
/*         <p><b>Greater Kansas City Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 19th</li>*/
/*             <li>Score: 7-8-0</li>*/
/*             <li>Judges Award</li>*/
/*         </ul>*/
/*         <p><b>Oklahoma Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 5th</li>*/
/*             <li>Score: 8-4-1</li>*/
/*             <li>Judges Award</li>*/
/*             <li>Dean's List Finalist (Lauren Pudvan)</li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="robot xs-twelve sm-twelve md-four lg-four xl-four columns">*/
/*         <h4>Pegasus <small>Ultimate Ascent 2013</small></h4>*/
/*         <p><b>Greater Kansas City Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 35th</li>*/
/*             <li>Score: 4-6-0</li>*/
/*             <li>Gracious Professionalism Award</li>*/
/*         </ul>*/
/*         <p><b>Razorback Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 14th</li>*/
/*             <li>Score: 9-8-0</li>*/
/*             <li>Woodie Flowers Finalist (Dan Ritter)</li>*/
/*             <li>Team Spirit Award</li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="robot xs-twelve sm-twelve md-four lg-four xl-four columns">*/
/*         <h4>Epona <small>Rebound Rumble 2012</small></h4>*/
/*         <p><b>Greater Kansas City Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 60th</li>*/
/*             <li>Score: 1-8-0</li>*/
/*         </ul>*/
/*         <p><b>Oklahoma Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 19th</li>*/
/*             <li>Score: 6-6-0</li>*/
/*             <li>Team Spirit Award</li>*/
/*         </ul>*/
/*         <p><b>Archimedes Division</b></p>*/
/*         <ul>*/
/*             <li>Rank: 90th</li>*/
/*             <li>Score: 3-6-0</li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="robot xs-twelve sm-twelve md-four lg-four xl-four columns">*/
/*         <h4>Shadowfax <small>Logomotion 2011</small></h4>*/
/*         <p><b>Greater Kansas City Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 11th</li>*/
/*             <li>Score: 7-5-0</li>*/
/*             <li>Innovation in Control Award</li>*/
/*         </ul>*/
/*         <p><b>Midwest Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 18th</li>*/
/*             <li>Score: 5-7-0</li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="robot xs-twelve sm-twelve md-four lg-four xl-four columns">*/
/*         <h4>Trigger <small>Breakaway 2010</small></h4>*/
/*         <p><b>Greater Kansas City Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 20th</li>*/
/*             <li>Score: 10-5-2</li>*/
/*             <li>Finalist Award</li>*/
/*         </ul>*/
/*         <p><b>Oklahoma Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 1st</li>*/
/*             <li>Score: 14-3-0</li>*/
/*         </ul>*/
/*         <p><b>Curie Division</b></p>*/
/*         <ul>*/
/*             <li>Rank: 41st</li>*/
/*             <li>Score: 6-4-0</li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="robot xs-twelve sm-twelve md-four lg-four xl-four columns">*/
/*         <h4>G.B.A.L. <small>Lunacy 2009</small></h4>*/
/*         <p><b>Greater Kansas City Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 9th</li>*/
/*             <li>Score: 6-4-0</li>*/
/*         </ul>*/
/*         <p><b>Colorado Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 16th</li>*/
/*             <li>Score: 4-5-0</li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="robot xs-twelve sm-twelve md-four lg-four xl-four columns">*/
/*         <h4>Ally Luminum <small>Overdrive 2008</small></h4>*/
/*         <p><b>St. Louis Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 38th</li>*/
/*             <li>Score: 3-6-0</li>*/
/*             <li>Rookie All Star Award</li>*/
/*         </ul>*/
/*         <p><b>Greater Kansas City Regional</b></p>*/
/*         <ul>*/
/*             <li>Rank: 25th</li>*/
/*             <li>Score: 3-5-1</li>*/
/*         </ul>*/
/*         <p><b>Curie Division</b></p>*/
/*         <ul>*/
/*             <li>Rank: 72nd</li>*/
/*             <li>Score: 2-5-0</li>*/
/*         </ul>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
