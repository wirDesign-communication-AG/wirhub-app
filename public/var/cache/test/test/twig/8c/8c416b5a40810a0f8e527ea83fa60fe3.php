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

/* @App/element/toolbar/label.html.twig */
class __TwigTemplate_e5a95c5cb0f9d2a9b1c21b7610614cde extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/toolbar/label.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/toolbar/label.html.twig"));

        // line 1
        echo "<div class=\"description\" data-position=\"";
        if (array_key_exists("element_position_name", $context)) {
            echo twig_escape_filter($this->env, (isset($context["element_position_name"]) || array_key_exists("element_position_name", $context) ? $context["element_position_name"] : (function () { throw new RuntimeError('Variable "element_position_name" does not exist.', 1, $this->source); })()), "html", null, true);
        }
        echo "\">";
        // line 2
        if (array_key_exists("element_position_name", $context)) {
            echo twig_escape_filter($this->env, (isset($context["element_position_name"]) || array_key_exists("element_position_name", $context) ? $context["element_position_name"] : (function () { throw new RuntimeError('Variable "element_position_name" does not exist.', 2, $this->source); })()), "html", null, true);
        }
        echo "&nbsp;";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 3, $this->source); })()), "description", [], "any", false, false, false, 3)) {
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 4, $this->source); })()), "description", [], "any", false, false, false, 4), "html", null, true);
            // line 5
            if ((twig_constant("AppBundle\\Entity\\Element::TYPE_ALIAS") == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 5, $this->source); })()), "type", [], "any", false, false, false, 5))) {
                // line 6
                echo "&nbsp;(";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 6, $this->source); })()), "type", [], "any", false, false, false, 6)), "html", null, true);
                echo ")";
            } elseif (            // line 7
(isset($context["has_aliases"]) || array_key_exists("has_aliases", $context) ? $context["has_aliases"] : (function () { throw new RuntimeError('Variable "has_aliases" does not exist.', 7, $this->source); })())) {
                // line 8
                echo "&nbsp;(";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("original"), "html", null, true);
                echo ")";
            }
        } else {
            // line 11
            if (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 11, $this->source); })()), "original", [], "any", false, false, false, 11)) {
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 12, $this->source); })()), "original", [], "any", false, false, false, 12), "type", [], "any", false, false, false, 12)), "html", null, true);
                echo "&nbsp;(";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12)), "html", null, true);
                echo ")";
            } else {
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 14, $this->source); })()), "type", [], "any", false, false, false, 14)), "html", null, true);
                if ((isset($context["has_aliases"]) || array_key_exists("has_aliases", $context) ? $context["has_aliases"] : (function () { throw new RuntimeError('Variable "has_aliases" does not exist.', 14, $this->source); })())) {
                    echo "&nbsp;(";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("original"), "html", null, true);
                    echo ")";
                }
            }
        }
        // line 17
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/toolbar/label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  80 => 14,  74 => 12,  72 => 11,  66 => 8,  64 => 7,  60 => 6,  58 => 5,  56 => 4,  54 => 3,  49 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"description\" data-position=\"{%- if element_position_name is defined -%}{{ element_position_name }}{%- endif -%}\">
    {%- if element_position_name is defined -%}{{ element_position_name }}{%- endif -%}&nbsp;
    {%- if element.description -%}
        {{- element.description }}
        {%- if constant('AppBundle\\\\Entity\\\\Element::TYPE_ALIAS') == element.type -%}
            &nbsp;({{ element.type|trans }})
        {%- elseif has_aliases -%}
            &nbsp;({{ 'original'|trans }})
        {%- endif -%}
    {%- else -%}
        {%- if element.original -%}
            {{- element.original.type|trans -}}&nbsp;({{ element.type|trans }})
        {%- else -%}
            {{- element.type|trans }}{%- if has_aliases -%}&nbsp;({{ 'original'|trans }}){% endif %}
        {%- endif -%}
    {%- endif -%}
</div>", "@App/element/toolbar/label.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/toolbar/label.html.twig");
    }
}
