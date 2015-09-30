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
            <img src=\"http://lorempixel.com/400/200/city\">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis similique harum eum enim unde repellat hic, laudantium cupiditate, excepturi nulla.</p>
        </div>
        <div class=\"carousel-item\">
            <img src=\"http://lorempixel.com/400/200/sports\">
            <p>Quia, fuga dolorum blanditiis odio iste, minima deserunt possimus illum, eum mollitia nobis nam ex optio, aut amet quidem doloremque.</p>
        </div>
        <div class=\"carousel-item\">
            <img src=\"http://lorempixel.com/400/200/food\">
            <p>Qui similique commodi autem a, at, delectus dolores amet voluptatem quisquam quae aspernatur tempore veritatis dolorem eligendi et inventore cupiditate?</p>
        </div>
    </div>
    <div id=\"carousel-controls\" class=\"carousel-controls\"></div>
</div>

<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/jquery-1.11.3.min.js\"></script>
<script src=\"";
        // line 20
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
        return array (  43 => 20,  39 => 19,  19 => 1,);
    }
}
/* <div id="carousel" class="carousel">*/
/*     <div id="carousel-items" class="carousel-items">*/
/*         <div class="carousel-item">*/
/*             <img src="http://lorempixel.com/400/200/city">*/
/*             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis similique harum eum enim unde repellat hic, laudantium cupiditate, excepturi nulla.</p>*/
/*         </div>*/
/*         <div class="carousel-item">*/
/*             <img src="http://lorempixel.com/400/200/sports">*/
/*             <p>Quia, fuga dolorum blanditiis odio iste, minima deserunt possimus illum, eum mollitia nobis nam ex optio, aut amet quidem doloremque.</p>*/
/*         </div>*/
/*         <div class="carousel-item">*/
/*             <img src="http://lorempixel.com/400/200/food">*/
/*             <p>Qui similique commodi autem a, at, delectus dolores amet voluptatem quisquam quae aspernatur tempore veritatis dolorem eligendi et inventore cupiditate?</p>*/
/*         </div>*/
/*     </div>*/
/*     <div id="carousel-controls" class="carousel-controls"></div>*/
/* </div>*/
/* */
/* <script src="{{ baseUrl() }}/js/jquery-1.11.3.min.js"></script>*/
/* <script src="{{ baseUrl() }}/js/carousel.js"></script>*/
/* <script>*/
/* */
/* var carousel = new Carousel("#carousel");*/
/* */
/* </script>*/
/* */
