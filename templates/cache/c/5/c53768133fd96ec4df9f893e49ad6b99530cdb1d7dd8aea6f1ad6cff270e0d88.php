<?php

/* base/base.html */
class __TwigTemplate_71e2c11a9febc80fd74c00dfdbb335a8c5eb9f3f931c66e06541f1bdc4275bcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'customHead' => array($this, 'block_customHead'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>FRC Team 2410 :: The Metal Mustangs</title>

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

    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/zepto.min.js\"></script>

    ";
        // line 21
        $this->displayBlock('customHead', $context, $blocks);
        // line 22
        echo "</head>
<body>

    <nav class=\"navbar navbar--primary navbar--fixed\">
        <div class=\"container\">
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "\" class=\"navbar-brand\">2410</a>
            <ul class=\"navbar-list\">
                <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/media\">Media</a></li>
                <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/robots\">Robots</a></li>
                <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/contact\">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class=\"container\">

        ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "
    </div>

    <script>

    \$(\".navbar-list\").on(\"click\", function(e) {
        \$(this).toggleClass(\"active\");
    })

    </script>

</body>
</html>
";
    }

    // line 21
    public function block_customHead($context, array $blocks = array())
    {
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base/base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  104 => 21,  87 => 40,  85 => 39,  75 => 32,  71 => 31,  67 => 30,  63 => 29,  58 => 27,  51 => 22,  49 => 21,  44 => 19,  31 => 9,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>FRC Team 2410 :: The Metal Mustangs</title>*/
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
/*     <script src="{{ baseUrl() }}/js/zepto.min.js"></script>*/
/* */
/*     {% block customHead %}{% endblock %}*/
/* </head>*/
/* <body>*/
/* */
/*     <nav class="navbar navbar--primary navbar--fixed">*/
/*         <div class="container">*/
/*             <a href="{{ baseUrl() }}" class="navbar-brand">2410</a>*/
/*             <ul class="navbar-list">*/
/*                 <li><a href="{{ baseUrl() }}">Home</a></li>*/
/*                 <li><a href="{{ baseUrl() }}/media">Media</a></li>*/
/*                 <li><a href="{{ baseUrl() }}/robots">Robots</a></li>*/
/*                 <li><a href="{{ baseUrl() }}/contact">Contact</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/*     <div class="container">*/
/* */
/*         {% block content %}{% endblock %}*/
/* */
/*     </div>*/
/* */
/*     <script>*/
/* */
/*     $(".navbar-list").on("click", function(e) {*/
/*         $(this).toggleClass("active");*/
/*     })*/
/* */
/*     </script>*/
/* */
/* </body>*/
/* </html>*/
/* */
