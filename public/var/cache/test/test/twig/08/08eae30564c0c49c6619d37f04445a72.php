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

/* @App/element/toolbar/buttons_advanced.html.twig */
class __TwigTemplate_c5ec9762c2cab475f84d985693ece0ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/toolbar/buttons_advanced.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/toolbar/buttons_advanced.html.twig"));

        // line 1
        if ((array_key_exists("is_submenu", $context) && (isset($context["is_submenu"]) || array_key_exists("is_submenu", $context) ? $context["is_submenu"] : (function () { throw new RuntimeError('Variable "is_submenu" does not exist.', 1, $this->source); })()))) {
            // line 2
            $context["label"] = false;
            // line 3
            $context["link_class"] = "btn btn-secondary is-tooltip";
        } else {
            // line 5
            $context["label"] = true;
            // line 6
            $context["link_class"] = "dropdown-item has-icon";
        }
        // line 10
        if ( !(isset($context["has_button_delete"]) || array_key_exists("has_button_delete", $context) ? $context["has_button_delete"] : (function () { throw new RuntimeError('Variable "has_button_delete" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_delete", ["element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 11, $this->source); })()), "randomId", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 11, $this->source); })()), "html", null, true);
            echo " is-link is-link--dialog\" data-dialog-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
            echo "\"
       data-dialog=\"form\"><i class=\"material-symbols-sharp\">delete</i>";
            // line 12
            if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 12, $this->source); })())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
            }
            echo "</a>";
        }
        // line 16
        if ((((isset($context["has_option_history"]) || array_key_exists("has_option_history", $context) ? $context["has_option_history"] : (function () { throw new RuntimeError('Variable "has_option_history" does not exist.', 16, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 16, $this->source); })()), "reversible", [], "any", false, false, false, 16)) &&  !twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 16, $this->source); })()), "original", [], "any", false, false, false, 16))) {
            // line 17
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_history_list", ["category" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 17, $this->source); })()), "category", [], "any", false, false, false, 17), "slug", [], "any", false, false, false, 17), "_element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 17, $this->source); })()), "randomId", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("history"), "html", null, true);
            echo "\">
        <i class=\"material-symbols-sharp\">history</i>";
            // line 18
            if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 18, $this->source); })())) {
                echo "  ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("history"), "html", null, true);
            }
            echo "</a>";
        }
        // line 22
        if ((isset($context["has_option_share"]) || array_key_exists("has_option_share", $context) ? $context["has_option_share"] : (function () { throw new RuntimeError('Variable "has_option_share" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_share_form", ["element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 23, $this->source); })()), "randomId", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("share"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 23, $this->source); })()), "html", null, true);
            echo " is-link is-link--dialog\" data-dialog-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("share"), "html", null, true);
            echo "\"
       data-dialog=\"form\" data-button-save=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_create"), "html", null, true);
            echo "\"><i class=\"material-symbols-sharp\">share</i>";
            if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 24, $this->source); })())) {
                echo "  ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("share"), "html", null, true);
            }
            // line 25
            echo "    </a>";
        }
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_debug", ["element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 30, $this->source); })()), "randomId", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 30, $this->source); })()), "html", null, true);
            echo " is-link is-link--dialog\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("debug"), "html", null, true);
            echo "\" data-dialog-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("debug"), "html", null, true);
            echo "\">
        <i class=\"material-symbols-sharp\">bug_report</i>";
            // line 31
            if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 31, $this->source); })())) {
                echo "  ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("debug"), "html", null, true);
            }
            echo "</a>";
        }
        // line 35
        if (("tool_framing" == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35))) {
            // line 36
            $this->loadTemplate("@App/element/smart_tool/framing/toolbar.html.twig", "@App/element/toolbar/buttons_advanced.html.twig", 36)->display($context);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/toolbar/buttons_advanced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 36,  136 => 35,  129 => 31,  118 => 30,  116 => 29,  113 => 25,  106 => 24,  95 => 23,  93 => 22,  86 => 18,  77 => 17,  75 => 16,  68 => 12,  57 => 11,  55 => 10,  52 => 6,  50 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_submenu is defined and is_submenu %}
    {%- set label = false %}
    {%- set link_class = 'btn btn-secondary is-tooltip' %}
{% else %}
    {%- set label = true %}
    {%- set link_class = 'dropdown-item has-icon' %}
{% endif %}

{#- Delete #}
{%- if not has_button_delete -%}
    <a href=\"{{ path('app_element_delete', {'element':element.randomId}) }}\" title=\"{{ 'delete'|trans }}\" class=\"{{ link_class }} is-link is-link--dialog\" data-dialog-title=\"{{ 'delete'|trans }}\"
       data-dialog=\"form\"><i class=\"material-symbols-sharp\">delete</i>{% if label %} {{ 'delete'|trans }}{% endif %}</a>
{%- endif -%}

{#- History #}
{%- if has_option_history and element.reversible and not element.original -%}
    <a href=\"{{ path('app_element_history_list', {'category':element.category.slug,'_element':element.randomId}) }}\" class=\"{{ link_class }}\" title=\"{{ 'history'|trans }}\">
        <i class=\"material-symbols-sharp\">history</i>{% if label %}  {{ 'history'|trans }}{% endif %}</a>
{%- endif -%}

{# Share #}
{%- if has_option_share -%}
    <a href=\"{{ path('app_element_share_form', {'element':element.randomId}) }}\" title=\"{{ 'share'|trans }}\" class=\"{{ link_class }} is-link is-link--dialog\" data-dialog-title=\"{{ 'share'|trans }}\"
       data-dialog=\"form\" data-button-save=\"{{ 'link_create'|trans }}\"><i class=\"material-symbols-sharp\">share</i>{% if label %}  {{ 'share'|trans }}{% endif %}
    </a>
{%- endif -%}

{# Debug #}
{%- if is_granted('ROLE_ADMIN') -%}
    <a href=\"{{ path('app_element_debug', {'element':element.randomId}) }}\" class=\"{{ link_class }} is-link is-link--dialog\" title=\"{{ 'debug'|trans }}\" data-dialog-title=\"{{ 'debug'|trans }}\">
        <i class=\"material-symbols-sharp\">bug_report</i>{% if label %}  {{ 'debug'|trans }}{% endif %}</a>
{%- endif -%}

{#- Element Based Stuff #}
{%- if 'tool_framing' == element.type -%}
    {%- include \"@App/element/smart_tool/framing/toolbar.html.twig\" %}
{%- endif -%}", "@App/element/toolbar/buttons_advanced.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/toolbar/buttons_advanced.html.twig");
    }
}
