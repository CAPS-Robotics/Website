<?php

/* test/navbar.html */
class __TwigTemplate_942d1c069f25342c01a303a9d4ec37fc0d570bc37c92229094822a57e9185fae extends Twig_Template
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
    <title>Navbar</title>

    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/mmr.css\">

    <style>

        body {
            height: 400vh;
            margin-top: 2.75em;
        }

    </style>

</head>
<body>

    <nav class=\"navbar navbar--primary navbar--fixed\">
        <div class=\"container\">
            <ul class=\"navbar-list\">
                <li class=\"active\"><a href=\"#home\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
                <li><a href=\"#media\">Media</a></li>
            </ul>
        </div>
    </nav>

    <br>

    <nav class=\"navbar navbar--success\">
        <div class=\"container\">
            <ul class=\"navbar-list\">
                <li class=\"active\"><a href=\"#home\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
                <li><a href=\"#media\">Media</a></li>
            </ul>
        </div>
    </nav>

    <br>

    <nav class=\"navbar navbar--info\">
        <div class=\"container\">
            <ul class=\"navbar-list\">
                <li class=\"active\"><a href=\"#home\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
                <li><a href=\"#media\">Media</a></li>
            </ul>
        </div>
    </nav>

    <br>

    <nav class=\"navbar navbar--warning\">
        <div class=\"container\">
            <ul class=\"navbar-list\">
                <li class=\"active\"><a href=\"#home\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
                <li><a href=\"#media\">Media</a></li>
            </ul>
        </div>
    </nav>

    <br>

    <nav class=\"navbar navbar--danger\">
        <div class=\"container\">
            <ul class=\"navbar-list\">
                <li class=\"active\"><a href=\"#home\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
                <li><a href=\"#media\">Media</a></li>
            </ul>
        </div>
    </nav>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "test/navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Navbar</title>*/
/* */
/*     <link rel="stylesheet" href="{{ baseUrl() }}/css/mmr.css">*/
/* */
/*     <style>*/
/* */
/*         body {*/
/*             height: 400vh;*/
/*             margin-top: 2.75em;*/
/*         }*/
/* */
/*     </style>*/
/* */
/* </head>*/
/* <body>*/
/* */
/*     <nav class="navbar navbar--primary navbar--fixed">*/
/*         <div class="container">*/
/*             <ul class="navbar-list">*/
/*                 <li class="active"><a href="#home">Home</a></li>*/
/*                 <li><a href="#about">About</a></li>*/
/*                 <li><a href="#contact">Contact</a></li>*/
/*                 <li><a href="#media">Media</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/*     <br>*/
/* */
/*     <nav class="navbar navbar--success">*/
/*         <div class="container">*/
/*             <ul class="navbar-list">*/
/*                 <li class="active"><a href="#home">Home</a></li>*/
/*                 <li><a href="#about">About</a></li>*/
/*                 <li><a href="#contact">Contact</a></li>*/
/*                 <li><a href="#media">Media</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/*     <br>*/
/* */
/*     <nav class="navbar navbar--info">*/
/*         <div class="container">*/
/*             <ul class="navbar-list">*/
/*                 <li class="active"><a href="#home">Home</a></li>*/
/*                 <li><a href="#about">About</a></li>*/
/*                 <li><a href="#contact">Contact</a></li>*/
/*                 <li><a href="#media">Media</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/*     <br>*/
/* */
/*     <nav class="navbar navbar--warning">*/
/*         <div class="container">*/
/*             <ul class="navbar-list">*/
/*                 <li class="active"><a href="#home">Home</a></li>*/
/*                 <li><a href="#about">About</a></li>*/
/*                 <li><a href="#contact">Contact</a></li>*/
/*                 <li><a href="#media">Media</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/*     <br>*/
/* */
/*     <nav class="navbar navbar--danger">*/
/*         <div class="container">*/
/*             <ul class="navbar-list">*/
/*                 <li class="active"><a href="#home">Home</a></li>*/
/*                 <li><a href="#about">About</a></li>*/
/*                 <li><a href="#contact">Contact</a></li>*/
/*                 <li><a href="#media">Media</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/* </body>*/
/* </html>*/
/* */
