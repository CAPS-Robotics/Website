<?php

/* test/button.html */
class __TwigTemplate_30fd711ccc588341b1ac31a59f7db886c20be4482c25c4d2ba020c6d21f301d4 extends Twig_Template
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
    <title>Button</title>

    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/mmr.css\">

</head>
<body>

    <button class=\"button button--default\">Default!</button>
    <a href=\"#\" class=\"button button--default\">Default!</a>

    <br>
    <br>

    <button class=\"button button--primary\">Primary!</button>
    <a href=\"#\" class=\"button button--primary\">Primary!</a>

    <br>
    <br>

    <button class=\"button button--success\">Primary!</button>
    <a href=\"#\" class=\"button button--success\">Primary!</a>

    <br>
    <br>

    <button class=\"button button--info\">Primary!</button>
    <a href=\"#\" class=\"button button--info\">Primary!</a>

    <br>
    <br>

    <button class=\"button button--warning\">Primary!</button>
    <a href=\"#\" class=\"button button--warning\">Primary!</a>

    <br>
    <br>

    <button class=\"button button--danger\">Primary!</button>
    <a href=\"#\" class=\"button button--danger\">Primary!</a>

    <br>
    <br>

    <button class=\"button button--link\">Link!</button>
    <a href=\"#\" class=\"button button--link\">Link!</a>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "test/button.html";
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
/*     <title>Button</title>*/
/* */
/*     <link rel="stylesheet" href="{{ baseUrl() }}/css/mmr.css">*/
/* */
/* </head>*/
/* <body>*/
/* */
/*     <button class="button button--default">Default!</button>*/
/*     <a href="#" class="button button--default">Default!</a>*/
/* */
/*     <br>*/
/*     <br>*/
/* */
/*     <button class="button button--primary">Primary!</button>*/
/*     <a href="#" class="button button--primary">Primary!</a>*/
/* */
/*     <br>*/
/*     <br>*/
/* */
/*     <button class="button button--success">Primary!</button>*/
/*     <a href="#" class="button button--success">Primary!</a>*/
/* */
/*     <br>*/
/*     <br>*/
/* */
/*     <button class="button button--info">Primary!</button>*/
/*     <a href="#" class="button button--info">Primary!</a>*/
/* */
/*     <br>*/
/*     <br>*/
/* */
/*     <button class="button button--warning">Primary!</button>*/
/*     <a href="#" class="button button--warning">Primary!</a>*/
/* */
/*     <br>*/
/*     <br>*/
/* */
/*     <button class="button button--danger">Primary!</button>*/
/*     <a href="#" class="button button--danger">Primary!</a>*/
/* */
/*     <br>*/
/*     <br>*/
/* */
/*     <button class="button button--link">Link!</button>*/
/*     <a href="#" class="button button--link">Link!</a>*/
/* */
/* </body>*/
/* </html>*/
/* */
