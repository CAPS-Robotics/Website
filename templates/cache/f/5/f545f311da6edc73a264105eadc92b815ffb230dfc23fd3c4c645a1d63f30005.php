<?php

/* community.html */
class __TwigTemplate_93d737961b9de9c6958605f5e76db4e283156da86075bff8dab0c6075e1f6754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html", "community.html", 1);
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
<div class=\"xs-twelve md-eight columns\">

    <div>
        <h4>NASCAR​​ <small>September 2010-Present</small></h4>
        <p>The Metal Mustangs began discussion with the NASCAR arena in Kansas City in 2011 in the hopes of procuring a booth at their events. Since then, we have braved Kansas's temperamental weather twice a year to take our robots to Kansas Speedway. In a tent across from the Ford booth, we have had the chance to meet thousands of NASCAR fans, telling them who we are and what we do as well as giving demonstrations of both our robots from previous years and FLL 'bots. Through this NASCAR event, we have also discovered mentors for our team, networked with FLL coaches, and opened the door for further opportunities in mentoring FLL teams, including finding four of the teams that we have recently worked with.</p>
    </div>

    <div>
        <h4>Orphan Run <small>September 2013</small></h4>
        <p>The Orphan Run was a chance for the community to come together to raise money for the less fortunate youth in the Kansas City area. A plethora of booths with activities for children was set up with the intent of encouraging&nbsp;children to&nbsp;take advantage of various activities. We set up a booth allowing students to control our competition robots, as well as discussed&nbsp;the importance of STEM education at a young age.</p>
    </div>

    <div>
        <h4>HALO​​ <small>October 2013</small></h4>
        <p>Team 2410 invited the students of the Helping Art Liberate Orphans (HALO) Organization to CAPS, the team's work base. They worked alongside members of the team in order to complete engineering-like challenges such as toothpick tower building and a classic paper airplane contest for mini-prizes. Giving underprivileged students the opportunity to explore engineering and its possibilities was an incredibly special experience to the HALO students and team as well.</p>
    </div>

    <div>
        <h4>Operation Breakthrough​ <small>October 2012</small></h4>
        <p>We paired with the organization Operation Breakthrough, which specializes in mentoring and providing education for children trapped in poverty. We went downtown to their facility in Kansas City to give a presentation about engineering and demo our robot, as well as answer any questions the kids had. Operation Breakthrough has been focused on bringing information and, by extension, passion and curiosity about STEM to kids who otherwise would have little to no exposure to such opportunities. It has not only been an eye-opening experience for the kids, but also an entirely new sort of experience for us.</p>
    </div>

    <div>
        <h4>FLL Scrimmage​​ <small></small></h4>
        <p></p>
    </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "community.html";
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
/* <div class="xs-twelve md-eight columns">*/
/* */
/*     <div>*/
/*         <h4>NASCAR​​ <small>September 2010-Present</small></h4>*/
/*         <p>The Metal Mustangs began discussion with the NASCAR arena in Kansas City in 2011 in the hopes of procuring a booth at their events. Since then, we have braved Kansas's temperamental weather twice a year to take our robots to Kansas Speedway. In a tent across from the Ford booth, we have had the chance to meet thousands of NASCAR fans, telling them who we are and what we do as well as giving demonstrations of both our robots from previous years and FLL 'bots. Through this NASCAR event, we have also discovered mentors for our team, networked with FLL coaches, and opened the door for further opportunities in mentoring FLL teams, including finding four of the teams that we have recently worked with.</p>*/
/*     </div>*/
/* */
/*     <div>*/
/*         <h4>Orphan Run <small>September 2013</small></h4>*/
/*         <p>The Orphan Run was a chance for the community to come together to raise money for the less fortunate youth in the Kansas City area. A plethora of booths with activities for children was set up with the intent of encouraging&nbsp;children to&nbsp;take advantage of various activities. We set up a booth allowing students to control our competition robots, as well as discussed&nbsp;the importance of STEM education at a young age.</p>*/
/*     </div>*/
/* */
/*     <div>*/
/*         <h4>HALO​​ <small>October 2013</small></h4>*/
/*         <p>Team 2410 invited the students of the Helping Art Liberate Orphans (HALO) Organization to CAPS, the team's work base. They worked alongside members of the team in order to complete engineering-like challenges such as toothpick tower building and a classic paper airplane contest for mini-prizes. Giving underprivileged students the opportunity to explore engineering and its possibilities was an incredibly special experience to the HALO students and team as well.</p>*/
/*     </div>*/
/* */
/*     <div>*/
/*         <h4>Operation Breakthrough​ <small>October 2012</small></h4>*/
/*         <p>We paired with the organization Operation Breakthrough, which specializes in mentoring and providing education for children trapped in poverty. We went downtown to their facility in Kansas City to give a presentation about engineering and demo our robot, as well as answer any questions the kids had. Operation Breakthrough has been focused on bringing information and, by extension, passion and curiosity about STEM to kids who otherwise would have little to no exposure to such opportunities. It has not only been an eye-opening experience for the kids, but also an entirely new sort of experience for us.</p>*/
/*     </div>*/
/* */
/*     <div>*/
/*         <h4>FLL Scrimmage​​ <small></small></h4>*/
/*         <p></p>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
