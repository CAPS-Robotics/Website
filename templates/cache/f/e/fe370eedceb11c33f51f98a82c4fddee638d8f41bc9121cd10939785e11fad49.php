<?php

/* test/carousel.html */
class __TwigTemplate_ed507cdc54f68f0b057625a5b5f2938d08f9b7f50b1ddeda72c1420586358072 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Carousel</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/mmr.css\">

    <style>

    body {
        margin-top: 5.25em;
    }

    </style>

</head>
<body>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"md-five columns\">

                <div id=\"carousel\" class=\"carousel\">
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

            </div>
        </div>

    </div>

    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/jquery-1.11.3.min.js\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/carousel.js\"></script>
    <script>

    var carousel = new Carousel(\"#carousel\");

    </script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "test/carousel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 51,  73 => 50,  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Carousel</title>*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <link rel="stylesheet" href="{{ baseUrl() }}/css/mmr.css">*/
/* */
/*     <style>*/
/* */
/*     body {*/
/*         margin-top: 5.25em;*/
/*     }*/
/* */
/*     </style>*/
/* */
/* </head>*/
/* <body>*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="md-five columns">*/
/* */
/*                 <div id="carousel" class="carousel">*/
/*                     <div id="carousel-items" class="carousel-items">*/
/*                         <div class="carousel-item">*/
/*                             <img src="http://lorempixel.com/400/200/city">*/
/*                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis similique harum eum enim unde repellat hic, laudantium cupiditate, excepturi nulla.</p>*/
/*                         </div>*/
/*                         <div class="carousel-item">*/
/*                             <img src="http://lorempixel.com/400/200/sports">*/
/*                             <p>Quia, fuga dolorum blanditiis odio iste, minima deserunt possimus illum, eum mollitia nobis nam ex optio, aut amet quidem doloremque.</p>*/
/*                         </div>*/
/*                         <div class="carousel-item">*/
/*                             <img src="http://lorempixel.com/400/200/food">*/
/*                             <p>Qui similique commodi autem a, at, delectus dolores amet voluptatem quisquam quae aspernatur tempore veritatis dolorem eligendi et inventore cupiditate?</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div id="carousel-controls" class="carousel-controls"></div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <script src="{{ baseUrl() }}/js/jquery-1.11.3.min.js"></script>*/
/*     <script src="{{ baseUrl() }}/js/carousel.js"></script>*/
/*     <script>*/
/* */
/*     var carousel = new Carousel("#carousel");*/
/* */
/*     </script>*/
/* */
/* </body>*/
/* </html>*/
/* */
