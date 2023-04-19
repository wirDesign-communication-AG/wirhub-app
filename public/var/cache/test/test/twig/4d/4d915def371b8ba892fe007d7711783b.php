<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @App/element/smart_block/_list/element_class.html.twig */
class __TwigTemplate_43ddc465b4909308805b14261f06deb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/_list/element_class.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/_list/element_class.html.twig"));

        // line 2
        $context["classes"] = [0 => "element", 1 => ("element--" . twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 4, $this->source); })()), "type", [], "any", false, false, false, 4)), 2 => ("group--" . twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 5, $this->source); })()), "group", [], "any", false, false, false, 5))];
        // line 9
        if ((array_key_exists("first", $context) && (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 9, $this->source); })()))) {
            // line 10
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 10, $this->source); })()), [0 => "element--first"]);
        }
        // line 16
        if ((0 < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 16, $this->source); })()), "aliases", [], "any", false, false, false, 16)))) {
            // line 17
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 17, $this->source); })()), [0 => "element--has-alias"]);
        }
        // line 23
        if ($this->extensions['AppBundle\Twig\ElementTwigExtension']->isCut((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 23, $this->source); })()))) {
            // line 24
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 24, $this->source); })()), [0 => "is-cut"]);
        }
        // line 27
        if (("alias" == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 27, $this->source); })()), "type", [], "any", false, false, false, 27))) {
            // line 28
            $context["element_settings"] = twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 28, $this->source); })()), "original", [], "any", false, false, false, 28);
        } else {
            // line 30
            $context["element_settings"] = (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 30, $this->source); })());
        }
        // line 34
        if (( !array_key_exists("ignore_spacing", $context) || (false == (isset($context["ignore_spacing"]) || array_key_exists("ignore_spacing", $context) ? $context["ignore_spacing"] : (function () { throw new RuntimeError('Variable "ignore_spacing" does not exist.', 34, $this->source); })())))) {
            // line 35
            if (((("stage" != twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35)) ||  !array_key_exists("first", $context)) ||  !(isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 35, $this->source); })()))) {
                // line 36
                if (("alias" == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36))) {
                    // line 37
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 37, $this->source); })()), [0 => ("element--" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 38
(isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 38, $this->source); })()), "original", [], "any", false, false, false, 38), "type", [], "any", false, false, false, 38))]);
                }
                // line 42
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 42, $this->source); })()), [0 => ("s__t-" . ((twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "spacingUp", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "spacingUp", [], "any", false, false, false, 42), "none")) : ("none")))]);
                // line 43
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 43, $this->source); })()), [0 => ("s__r-" . ((twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "spacingRight", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "spacingRight", [], "any", false, false, false, 43), "none")) : ("none")))]);
                // line 44
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 44, $this->source); })()), [0 => ("s__b-" . ((twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "spacingBottom", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "spacingBottom", [], "any", false, false, false, 44), "none")) : ("none")))]);
                // line 45
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 45, $this->source); })()), [0 => ("s__l-" . ((twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "spacingLeft", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "spacingLeft", [], "any", false, false, false, 45), "none")) : ("none")))]);
                // line 46
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 46, $this->source); })()), [0 => ("p__t-" . ((twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "paddingUp", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "paddingUp", [], "any", false, false, false, 46), "none")) : ("none")))]);
                // line 47
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 47, $this->source); })()), [0 => ("p__r-" . ((twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "paddingRight", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "paddingRight", [], "any", false, false, false, 47), "none")) : ("none")))]);
                // line 48
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 48, $this->source); })()), [0 => ("p__b-" . ((twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "paddingBottom", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "paddingBottom", [], "any", false, false, false, 48), "none")) : ("none")))]);
                // line 49
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 49, $this->source); })()), [0 => ("p__l-" . ((twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "paddingLeft", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["element_settings"] ?? null), "paddingLeft", [], "any", false, false, false, 49), "none")) : ("none")))]);
            }
        }
        // line 54
        if (((twig_get_attribute($this->env, $this->source, (isset($context["element_settings"]) || array_key_exists("element_settings", $context) ? $context["element_settings"] : (function () { throw new RuntimeError('Variable "element_settings" does not exist.', 54, $this->source); })()), "fullWidth", [], "any", false, false, false, 54) || (2 == twig_get_attribute($this->env, $this->source, (isset($context["element_settings"]) || array_key_exists("element_settings", $context) ? $context["element_settings"] : (function () { throw new RuntimeError('Variable "element_settings" does not exist.', 54, $this->source); })()), "layoutContainer", [], "any", false, false, false, 54))) && ( !array_key_exists("override_layout_container", $context) || (2 == (isset($context["override_layout_container"]) || array_key_exists("override_layout_container", $context) ? $context["override_layout_container"] : (function () { throw new RuntimeError('Variable "override_layout_container" does not exist.', 54, $this->source); })()))))) {
            // line 55
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 55, $this->source); })()), [0 => "element--full-width"]);
        }
        // line 61
        if ((twig_get_attribute($this->env, $this->source, (isset($context["element_settings"]) || array_key_exists("element_settings", $context) ? $context["element_settings"] : (function () { throw new RuntimeError('Variable "element_settings" does not exist.', 61, $this->source); })()), "designColorBackgroundEnabled", [], "any", false, false, false, 61) && twig_get_attribute($this->env, $this->source, (isset($context["element_settings"]) || array_key_exists("element_settings", $context) ? $context["element_settings"] : (function () { throw new RuntimeError('Variable "element_settings" does not exist.', 61, $this->source); })()), "designColorBackground", [], "any", false, false, false, 61))) {
            // line 62
            if ((true == $this->extensions['AppBundle\Twig\Element\AttributeTwigExtension']->getBooleanValue((isset($context["element_settings"]) || array_key_exists("element_settings", $context) ? $context["element_settings"] : (function () { throw new RuntimeError('Variable "element_settings" does not exist.', 62, $this->source); })()), "ColorBackgroundFullWidth"))) {
                // line 63
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 63, $this->source); })()), [0 => "element--full-width-background"]);
            }
        }
        // line 68
        if ((0 < twig_get_attribute($this->env, $this->source, (isset($context["element_settings"]) || array_key_exists("element_settings", $context) ? $context["element_settings"] : (function () { throw new RuntimeError('Variable "element_settings" does not exist.', 68, $this->source); })()), "setting1", [], "any", false, false, false, 68))) {
            // line 69
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 69, $this->source); })()), [0 => ("element--setting1-" . twig_get_attribute($this->env, $this->source,             // line 70
(isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 70, $this->source); })()), "setting1", [], "any", false, false, false, 70))]);
        }
        // line 75
        if (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 75, $this->source); })()), "hidden", [], "any", false, false, false, 75)) {
            // line 76
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 76, $this->source); })()), [0 => "element--hidden"]);
        }
        // line 80
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 80, $this->source); })()), " "), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/smart_block/_list/element_class.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 80,  119 => 76,  117 => 75,  114 => 70,  113 => 69,  111 => 68,  107 => 63,  105 => 62,  103 => 61,  100 => 55,  98 => 54,  94 => 49,  92 => 48,  90 => 47,  88 => 46,  86 => 45,  84 => 44,  82 => 43,  80 => 42,  77 => 38,  76 => 37,  74 => 36,  72 => 35,  70 => 34,  67 => 30,  64 => 28,  62 => 27,  59 => 24,  57 => 23,  54 => 17,  52 => 16,  49 => 10,  47 => 9,  45 => 5,  44 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#- Default classes #}
{%- set classes = [
    'element',
    'element--' ~ element.type,
    'group--' ~ element.group
] -%}

{# First element #}
{%- if first is defined and first -%}
    {%- set classes = classes|merge([
        'element--first'
    ]) -%}
{%- endif -%}

{#- Has aliases #}
{%- if 0 < element.aliases|length -%}
    {%- set classes = classes|merge([
        'element--has-alias'
    ]) -%}
{%- endif -%}

{#- Is-Cut Feature #}
{%- if element|app_element_is_cut() -%}
    {%- set classes = classes|merge(['is-cut']) -%}
{%- endif -%}

 {%- if 'alias' == element.type -%}
     {%- set element_settings = element.original -%}
 {%- else -%}
     {%- set element_settings = element -%}
 {%- endif -%}

{#- Spacing (not for stage if first element; can be ignored e.g. for search results) #}
{%- if ignore_spacing is not defined or false == ignore_spacing -%}
    {%- if 'stage' != element.type or not first is defined or not first -%}
        {%- if 'alias' == element.type -%}
            {%- set classes = classes|merge([
                'element--' ~ element.original.type,
            ]) -%}
        {%- endif -%}

        {%- set classes = classes|merge(['s__t-' ~ element_settings.spacingUp|default('none')]) -%}
        {%- set classes = classes|merge(['s__r-' ~ element_settings.spacingRight|default('none')]) -%}
        {%- set classes = classes|merge(['s__b-' ~ element_settings.spacingBottom|default('none')]) -%}
        {%- set classes = classes|merge(['s__l-' ~ element_settings.spacingLeft|default('none')]) -%}
        {%- set classes = classes|merge(['p__t-' ~ element_settings.paddingUp|default('none')]) -%}
        {%- set classes = classes|merge(['p__r-' ~ element_settings.paddingRight|default('none')]) -%}
        {%- set classes = classes|merge(['p__b-' ~ element_settings.paddingBottom|default('none')]) -%}
        {%- set classes = classes|merge(['p__l-' ~ element_settings.paddingLeft|default('none')]) -%}
    {%- endif -%}
{%- endif -%}

{#- Full width #}
{%- if (element_settings.fullWidth or 2 == element_settings.layoutContainer) and (override_layout_container is not defined or 2 == override_layout_container) -%}
    {%- set classes = classes|merge([
        'element--full-width'
    ]) -%}
{%- endif -%}

{#- Full width background #}
{%- if element_settings.designColorBackgroundEnabled and element_settings.designColorBackground -%}
    {%- if true == element_settings|app_element_attribute_boolean_value('ColorBackgroundFullWidth') -%}
        {%- set classes = classes|merge(['element--full-width-background']) -%}
    {%- endif -%}
{%- endif -%}

{# Setting1 #}
{%- if 0 < element_settings.setting1 -%}
    {%- set classes = classes|merge([
        'element--setting1-' ~ element.setting1
    ]) -%}
{%- endif -%}

{# Hidden #}
{% if element.hidden %}
    {%- set classes = classes|merge([
        'element--hidden'
    ]) -%}
{% endif -%}
{{- classes|join(' ') -}}", "@App/element/smart_block/_list/element_class.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/smart_block/_list/element_class.html.twig");
    }
}
