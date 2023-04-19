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

/* @App/element/create/choice_full.html.twig */
class __TwigTemplate_03610f63c12ff44ca3477799bd45a978 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/create/choice_full.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/create/choice_full.html.twig"));

        // line 1
        if (($this->extensions['AppBundle\Twig\Element\SmartBlock\AliasTwigExtension']->hasClipboard() || $this->env->getFunction('app_element_get_cut')->getCallable()())) {
            // line 2
            $context["show_clipboard"] = true;
        } else {
            // line 4
            $context["show_clipboard"] = false;
        }
        // line 8
        if (((isset($context["parent_entity"]) || array_key_exists("parent_entity", $context) ? $context["parent_entity"] : (function () { throw new RuntimeError('Variable "parent_entity" does not exist.', 8, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["parent_entity"]) || array_key_exists("parent_entity", $context) ? $context["parent_entity"] : (function () { throw new RuntimeError('Variable "parent_entity" does not exist.', 8, $this->source); })()), "typeInChain", [0 => twig_constant("AppBundle\\Entity\\Element::TYPE_COLUMNS")], "method", false, false, false, 8) || twig_get_attribute($this->env, $this->source, (isset($context["parent_entity"]) || array_key_exists("parent_entity", $context) ? $context["parent_entity"] : (function () { throw new RuntimeError('Variable "parent_entity" does not exist.', 8, $this->source); })()), "typeInChain", [0 => twig_constant("AppBundle\\Entity\\Element::TYPE_ACCORDION")], "method", false, false, false, 8)))) {
            // line 9
            $context["show_smart_tools"] = false;
        } else {
            // line 11
            $context["show_smart_tools"] = true;
        }
        // line 14
        echo "<ul class=\"nav nav-tabs  m-tabs-line m-tabs-line--2x m-tabs-line--brand\">
    <li class=\"nav-item m-tabs__item\">
        <a class=\"nav-link m-tabs__link";
        // line 16
        echo (( !(isset($context["show_clipboard"]) || array_key_exists("show_clipboard", $context) ? $context["show_clipboard"] : (function () { throw new RuntimeError('Variable "show_clipboard" does not exist.', 16, $this->source); })())) ? (" active") : (""));
        echo "\" data-toggle=\"tab\" href=\"#tab-blocks\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("smart_blocks"), "html", null, true);
        echo "</a>
    </li>";
        // line 19
        if ((isset($context["show_smart_tools"]) || array_key_exists("show_smart_tools", $context) ? $context["show_smart_tools"] : (function () { throw new RuntimeError('Variable "show_smart_tools" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "<li class=\"nav-item m-tabs__item\">
            <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#tab-tools\">";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("smart_tools"), "html", null, true);
            echo "</a>
        </li>";
        }
        // line 25
        if ((isset($context["show_clipboard"]) || array_key_exists("show_clipboard", $context) ? $context["show_clipboard"] : (function () { throw new RuntimeError('Variable "show_clipboard" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "<li class=\"nav-item m-tabs__item\">
            <a class=\"nav-link m-tabs__link active\" data-toggle=\"tab\" href=\"#tab-clipboard\">";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("clipboard"), "html", null, true);
            echo "</a>
        </li>";
        }
        // line 31
        echo "</ul>
<div class=\"tab-content\">
    <div class=\"tab-pane";
        // line 33
        echo (( !(isset($context["show_clipboard"]) || array_key_exists("show_clipboard", $context) ? $context["show_clipboard"] : (function () { throw new RuntimeError('Variable "show_clipboard" does not exist.', 33, $this->source); })())) ? (" active") : (""));
        echo "\" id=\"tab-blocks\">";
        // line 34
        $this->loadTemplate("@App/element/create/choice_full_blocks.html.twig", "@App/element/create/choice_full.html.twig", 34)->display($context);
        // line 35
        echo "</div>
    <div class=\"tab-pane\" id=\"tab-tools\">";
        // line 37
        $this->loadTemplate("@App/element/create/choice_full_tools.html.twig", "@App/element/create/choice_full.html.twig", 37)->display($context);
        // line 38
        echo "</div>";
        // line 40
        if ((isset($context["show_clipboard"]) || array_key_exists("show_clipboard", $context) ? $context["show_clipboard"] : (function () { throw new RuntimeError('Variable "show_clipboard" does not exist.', 40, $this->source); })())) {
            // line 41
            $this->loadTemplate("@App/element/create/choice_tab_clipboard.html.twig", "@App/element/create/choice_full.html.twig", 41)->display($context);
        }
        // line 43
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/create/choice_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 43,  107 => 41,  105 => 40,  103 => 38,  101 => 37,  98 => 35,  96 => 34,  93 => 33,  89 => 31,  84 => 27,  81 => 26,  79 => 25,  74 => 21,  71 => 20,  69 => 19,  63 => 16,  59 => 14,  56 => 11,  53 => 9,  51 => 8,  48 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if (app_element_smart_block_alias_has_clipboard() or app_element_get_cut()) -%}
    {%- set show_clipboard = true -%}
{%- else -%}
    {%- set show_clipboard = false -%}
{%- endif -%}

{# No tools column or accordion #}
{%- if parent_entity and (parent_entity.typeInChain(constant('AppBundle\\\\Entity\\\\Element::TYPE_COLUMNS')) or parent_entity.typeInChain(constant('AppBundle\\\\Entity\\\\Element::TYPE_ACCORDION'))) -%}
    {%- set show_smart_tools = false -%}
{%- else -%}
    {%- set show_smart_tools = true -%}
{%- endif -%}

<ul class=\"nav nav-tabs  m-tabs-line m-tabs-line--2x m-tabs-line--brand\">
    <li class=\"nav-item m-tabs__item\">
        <a class=\"nav-link m-tabs__link{{ not show_clipboard ? ' active' }}\" data-toggle=\"tab\" href=\"#tab-blocks\">{{ 'smart_blocks'|trans }}</a>
    </li>

    {%- if show_smart_tools -%}
        <li class=\"nav-item m-tabs__item\">
            <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#tab-tools\">{{ 'smart_tools'|trans }}</a>
        </li>
    {%- endif -%}

    {%- if show_clipboard -%}
        <li class=\"nav-item m-tabs__item\">
            <a class=\"nav-link m-tabs__link active\" data-toggle=\"tab\" href=\"#tab-clipboard\">{{ 'clipboard'|trans }}</a>
        </li>
    {%- endif -%}

</ul>
<div class=\"tab-content\">
    <div class=\"tab-pane{{ not show_clipboard ? ' active' }}\" id=\"tab-blocks\">
        {%- include \"@App/element/create/choice_full_blocks.html.twig\" -%}
    </div>
    <div class=\"tab-pane\" id=\"tab-tools\">
        {%- include \"@App/element/create/choice_full_tools.html.twig\" -%}
    </div>

    {%- if show_clipboard -%}
        {%- include \"@App/element/create/choice_tab_clipboard.html.twig\" -%}
    {%- endif -%}
</div>", "@App/element/create/choice_full.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/create/choice_full.html.twig");
    }
}
