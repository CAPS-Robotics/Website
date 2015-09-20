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
                    <div>
                        <img src=\"http://lorempixel.com/400/200/city\" alt=\"city\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam eos non! Tempore, exercitationem temporibus a.</p>
                    </div>
                    <div>
                        <img src=\"http://lorempixel.com/400/200/cats\" alt=\"cats\">
                        <p>Dolores aperiam repudiandae dicta tenetur ratione esse placeat iure aliquid eaque aliquam, rem! Pariatur, hic, expedita?</p>
                    </div>
                    <div>
                        <img src=\"http://lorempixel.com/400/200/food\" alt=\"food\">
                        <p>Voluptate fugiat tempora doloremque dolorem quis aut deleniti quod, culpa et rerum velit, distinctio autem, nemo.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/utilities.js\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/carousel.js\"></script>
    <script>

    var carousel = new Carousel(document.querySelector('#carousel'));

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
        return array (  74 => 48,  70 => 47,  29 => 9,  19 => 1,);
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
/*                     <div>*/
/*                         <img src="http://lorempixel.com/400/200/city" alt="city">*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam eos non! Tempore, exercitationem temporibus a.</p>*/
/*                     </div>*/
/*                     <div>*/
/*                         <img src="http://lorempixel.com/400/200/cats" alt="cats">*/
/*                         <p>Dolores aperiam repudiandae dicta tenetur ratione esse placeat iure aliquid eaque aliquam, rem! Pariatur, hic, expedita?</p>*/
/*                     </div>*/
/*                     <div>*/
/*                         <img src="http://lorempixel.com/400/200/food" alt="food">*/
/*                         <p>Voluptate fugiat tempora doloremque dolorem quis aut deleniti quod, culpa et rerum velit, distinctio autem, nemo.</p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <script src="{{ baseUrl() }}/js/utilities.js"></script>*/
/*     <script src="{{ baseUrl() }}/js/carousel.js"></script>*/
/*     <script>*/
/* */
/*     var carousel = new Carousel(document.querySelector('#carousel'));*/
/* */
/*     </script>*/
/* */
/* </body>*/
/* </html>*/
/* */
