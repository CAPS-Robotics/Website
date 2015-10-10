<?php

/* media.html */
class __TwigTemplate_175d7a6afc514df2ab9bb24211aa3d004b6bc8dfe964817820e5aa0788ff4211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html", "media.html", 1);
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
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "    <img data-src=\"http://lorempixel.com/640/480\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/jquery.unveil.js\"></script>
<script>

\$(document).ready(function() {
    \$(\"img\").unveil();
});

</script>

";
    }

    public function getTemplateName()
    {
        return "media.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  45 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base/base.html" %}*/
/* */
/* {% block content %}*/
/* */
/* {% for i in 0..100 %}*/
/*     <img data-src="http://lorempixel.com/640/480">*/
/* {% endfor %}*/
/* */
/* <script src="{{ baseUrl() }}/js/jquery.unveil.js"></script>*/
/* <script>*/
/* */
/* $(document).ready(function() {*/
/*     $("img").unveil();*/
/* });*/
/* */
/* </script>*/
/* */
/* {% endblock %}*/
/* */
