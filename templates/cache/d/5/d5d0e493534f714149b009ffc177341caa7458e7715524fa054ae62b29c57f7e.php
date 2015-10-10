<?php

/* test/grid.html */
class __TwigTemplate_0c1ba7e258f798edae9b245d4598ed3ebf4a01c20f61ded26298cb2915eb3644 extends Twig_Template
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
    <title>Grid</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/mmr.css\">

    <style>

        .column,
        .columns {
            text-align: center;
            background-color: #e0e0e0;
            border: 1px solid #616161;
        }

    </style>

</head>
<body>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"xs-one column\">One</div>
            <div class=\"xs-eleven columns\">Eleven</div>
        </div>

        <div class=\"row\">
            <div class=\"xs-two columns\">Two</div>
            <div class=\"xs-ten columns\">Ten</div>
        </div>

        <div class=\"row\">
            <div class=\"xs-three columns\">Three</div>
            <div class=\"xs-nine columns\">Nine</div>
        </div>

        <div class=\"row\">
            <div class=\"xs-four columns\">Four</div>
            <div class=\"xs-eight columns\">Eight</div>
        </div>

        <div class=\"row\">
            <div class=\"xs-five columns\">Five</div>
            <div class=\"xs-seven columns\">Seven</div>
        </div>

        <div class=\"row\">
            <div class=\"xs-six columns\">Six</div>
            <div class=\"xs-six columns\">Six</div>
        </div>

    </div>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
            <div class=\"xs-twelve sm-six md-four lg-three xl-two column\">Varies</div>
        </div>

    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"xs-twelve columns\">

                <div class=\"hidden-xs-above\">xs - above</div>
                <div class=\"hidden-xs-below\">xs - below</div>

                <div class=\"hidden-sm-above\">sm - above</div>
                <div class=\"hidden-sm-below\">sm - below</div>

                <div class=\"hidden-md-above\">md - above</div>
                <div class=\"hidden-md-below\">md - below</div>

                <div class=\"hidden-lg-above\">lg - above</div>
                <div class=\"hidden-lg-below\">lg - below</div>

                <div class=\"hidden-xl-above\">xl - above</div>
                <div class=\"hidden-xl-below\">xl - below</div>

            </div>
        </div>
    </div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "test/grid.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Grid</title>*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <link rel="stylesheet" href="{{ baseUrl() }}/css/mmr.css">*/
/* */
/*     <style>*/
/* */
/*         .column,*/
/*         .columns {*/
/*             text-align: center;*/
/*             background-color: #e0e0e0;*/
/*             border: 1px solid #616161;*/
/*         }*/
/* */
/*     </style>*/
/* */
/* </head>*/
/* <body>*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="xs-one column">One</div>*/
/*             <div class="xs-eleven columns">Eleven</div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="xs-two columns">Two</div>*/
/*             <div class="xs-ten columns">Ten</div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="xs-three columns">Three</div>*/
/*             <div class="xs-nine columns">Nine</div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="xs-four columns">Four</div>*/
/*             <div class="xs-eight columns">Eight</div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="xs-five columns">Five</div>*/
/*             <div class="xs-seven columns">Seven</div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="xs-six columns">Six</div>*/
/*             <div class="xs-six columns">Six</div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*             <div class="xs-twelve sm-six md-four lg-three xl-two column">Varies</div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="xs-twelve columns">*/
/* */
/*                 <div class="hidden-xs-above">xs - above</div>*/
/*                 <div class="hidden-xs-below">xs - below</div>*/
/* */
/*                 <div class="hidden-sm-above">sm - above</div>*/
/*                 <div class="hidden-sm-below">sm - below</div>*/
/* */
/*                 <div class="hidden-md-above">md - above</div>*/
/*                 <div class="hidden-md-below">md - below</div>*/
/* */
/*                 <div class="hidden-lg-above">lg - above</div>*/
/*                 <div class="hidden-lg-below">lg - below</div>*/
/* */
/*                 <div class="hidden-xl-above">xl - above</div>*/
/*                 <div class="hidden-xl-below">xl - below</div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
