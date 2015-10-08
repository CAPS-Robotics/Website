<?php

/* includes/carousel.html */
class __TwigTemplate_8df522667a08e236ccd26c0d0f6dbbdba0889a51419c5bbb2a8ac2577897a0b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"carousel\" class=\"carousel\">
    <div id=\"carousel-items\" class=\"carousel-items\">
        <div class=\"carousel-item\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/img/home/team.jpg\">
            <p>Our team after the 2014 Greater Kansas City Regional. We won the Judges award and were looking forward to Oklahoma!</p>
        </div>
        <div class=\"carousel-item\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/img/home/caps.jpg\">
            <p>The group of students within the CAPS program who worked on our 2015 Recycle Rush robot.</p>
        </div>
        <div class=\"carousel-item\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/img/home/okc.jpg\">
            <p>Our team after the 2014 Okalhoma City Regional!</p>
        </div>
    </div>
    <div id=\"carousel-controls\" class=\"carousel-controls\"></div>
</div>

<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/carousel.js\"></script>
<script>

var carousel = new Carousel(\"#carousel\");

</script>
";
    }

    public function getTemplateName()
    {
        return "includes/carousel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  38 => 12,  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div id="carousel" class="carousel">*/
/*     <div id="carousel-items" class="carousel-items">*/
/*         <div class="carousel-item">*/
/*             <img src="{{ baseUrl() }}/img/home/team.jpg">*/
/*             <p>Our team after the 2014 Greater Kansas City Regional. We won the Judges award and were looking forward to Oklahoma!</p>*/
/*         </div>*/
/*         <div class="carousel-item">*/
/*             <img src="{{ baseUrl() }}/img/home/caps.jpg">*/
/*             <p>The group of students within the CAPS program who worked on our 2015 Recycle Rush robot.</p>*/
/*         </div>*/
/*         <div class="carousel-item">*/
/*             <img src="{{ baseUrl() }}/img/home/okc.jpg">*/
/*             <p>Our team after the 2014 Okalhoma City Regional!</p>*/
/*         </div>*/
/*     </div>*/
/*     <div id="carousel-controls" class="carousel-controls"></div>*/
/* </div>*/
/* */
/* <script src="{{ baseUrl() }}/js/carousel.js"></script>*/
/* <script>*/
/* */
/* var carousel = new Carousel("#carousel");*/
/* */
/* </script>*/
/* */
