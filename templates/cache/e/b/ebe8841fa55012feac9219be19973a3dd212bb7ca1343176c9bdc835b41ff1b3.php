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

    <div>
        <img src=\"http://lorempixel.com/400/200/city\" alt=\"\">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsa blanditiis sint, cumque praesentium distinctio eligendi iure dolores. Aperiam, atque.</p>
    </div>
    <div>
        <img src=\"http://lorempixel.com/400/200/food\" alt=\"\">
        <p>Fugit quas, ipsum rerum natus autem, quaerat illum excepturi, numquam iure placeat facilis! Modi animi, sint magni nam minus neque.</p>
    </div>
    <div>
        <img src=\"http://lorempixel.com/400/200/sports\" alt=\"\">
        <p>Iusto quisquam inventore impedit dolores quas facere earum voluptatibus repudiandae rem, pariatur, dolore delectus accusamus perferendis et asperiores quaerat nisi?</p>
    </div>

</div>

<div id=\"carousel-controller\" class=\"carousel-controller\"></div>

<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/utilities.js\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/carousel.js\"></script>
<script>

var carousel = new Carousel(document.querySelector(\"#carousel\"),
                            document.querySelector(\"#carousel-controller\"));

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
        return array (  44 => 21,  40 => 20,  19 => 1,);
    }
}
/* <div id="carousel" class="carousel">*/
/* */
/*     <div>*/
/*         <img src="http://lorempixel.com/400/200/city" alt="">*/
/*         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsa blanditiis sint, cumque praesentium distinctio eligendi iure dolores. Aperiam, atque.</p>*/
/*     </div>*/
/*     <div>*/
/*         <img src="http://lorempixel.com/400/200/food" alt="">*/
/*         <p>Fugit quas, ipsum rerum natus autem, quaerat illum excepturi, numquam iure placeat facilis! Modi animi, sint magni nam minus neque.</p>*/
/*     </div>*/
/*     <div>*/
/*         <img src="http://lorempixel.com/400/200/sports" alt="">*/
/*         <p>Iusto quisquam inventore impedit dolores quas facere earum voluptatibus repudiandae rem, pariatur, dolore delectus accusamus perferendis et asperiores quaerat nisi?</p>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <div id="carousel-controller" class="carousel-controller"></div>*/
/* */
/* <script src="{{ baseUrl() }}/js/utilities.js"></script>*/
/* <script src="{{ baseUrl() }}/js/carousel.js"></script>*/
/* <script>*/
/* */
/* var carousel = new Carousel(document.querySelector("#carousel"),*/
/*                             document.querySelector("#carousel-controller"));*/
/* */
/* </script>*/
/* */
