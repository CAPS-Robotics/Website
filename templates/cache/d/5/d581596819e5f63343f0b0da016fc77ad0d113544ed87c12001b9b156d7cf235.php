<?php

/* includes/sponsors.html */
class __TwigTemplate_f35996c61ddb6edfaae166c8e3dd9240b46f47966c074f3db3047fb601f771ab extends Twig_Template
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
        $context["sponsors"] = array(0 => array(0 => "Blue Valley CAPS", 1 => "http://www.bvcaps.org", 2 => "success"), 1 => array(0 => "BVEF", 1 => "http://www.bvef.org", 2 => "warning"), 2 => array(0 => "Sprint", 1 => "http://www.sprint.com", 2 => "warning"), 3 => array(0 => "General Motors", 1 => "http://www.gm.com", 2 => "default"), 4 => array(0 => "Honeywell", 1 => "http://www.honeywell.com", 2 => "danger"), 5 => array(0 => "Cerner", 1 => "http://www.cerner.com", 2 => "success"), 6 => array(0 => "Ryerson", 1 => "http://www.ryerson.com", 2 => "primary"));
        // line 10
        echo "
<div class=\"margin-b text-center\">

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sponsors"]) ? $context["sponsors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 14
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sponsor"], 1, array(), "array"), "html", null, true);
            echo "\" class=\"button button--sponsor-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sponsor"], 2, array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sponsor"], 0, array(), "array"), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "includes/sponsors.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  30 => 14,  26 => 13,  21 => 10,  19 => 1,);
    }
}
/* {% set sponsors = [*/
/*     ['Blue Valley CAPS', 'http://www.bvcaps.org', 'success'],*/
/*     ['BVEF', 'http://www.bvef.org', 'warning'],*/
/*     ['Sprint', 'http://www.sprint.com', 'warning'],*/
/*     ['General Motors', 'http://www.gm.com', 'default'],*/
/*     ['Honeywell', 'http://www.honeywell.com', 'danger'],*/
/*     ['Cerner', 'http://www.cerner.com', 'success'],*/
/*     ['Ryerson', 'http://www.ryerson.com', 'primary']*/
/* ] %}*/
/* */
/* <div class="margin-b text-center">*/
/* */
/*     {% for sponsor in sponsors %}*/
/*         <a href="{{ sponsor[1] }}" class="button button--sponsor-{{ sponsor[2] }}">{{ sponsor[0] }}</a>*/
/*     {% endfor %}*/
/* */
/* </div>*/
/* */
