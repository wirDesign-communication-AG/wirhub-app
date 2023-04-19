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

/* @App/element/create/choice.html.twig */
class __TwigTemplate_a30060f2dfc26b67824d0bcdff250c87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@App/app_ajax.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/create/choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/create/choice.html.twig"));

        // line 3
        $context["group_class"] = "element-choice btn-group m-btn-group flex-wrap";
        // line 4
        $context["btn_class"] = "m-btn m-btn--square btn btn-secondary";
        // line 1
        $this->parent = $this->loadTemplate("@App/app_ajax.html.twig", "@App/element/create/choice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        if ((twig_constant("AppBundle\\Entity\\Category::TYPE_DASHBOARD_SPACES") == twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 7, $this->source); })()), "type", [], "any", false, false, false, 7))) {
            // line 9
            $this->loadTemplate("@App/element/create/choice_dashboard.html.twig", "@App/element/create/choice.html.twig", 9)->display($context);
        } else {
            // line 12
            $this->loadTemplate("@App/element/create/choice_full.html.twig", "@App/element/create/choice.html.twig", 12)->display($context);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/create/choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  75 => 9,  73 => 7,  63 => 6,  52 => 1,  50 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@App/app_ajax.html.twig\" %}

{% set group_class = 'element-choice btn-group m-btn-group flex-wrap' %}
{% set btn_class = 'm-btn m-btn--square btn btn-secondary' %}

{% block page_content %}
    {%- if constant('AppBundle\\\\Entity\\\\Category::TYPE_DASHBOARD_SPACES') == category.type -%}
        {#- Dashboard elements #}
        {%- include \"@App/element/create/choice_dashboard.html.twig\" -%}
    {%- else -%}
        {#- Global elements #}
        {%- include \"@App/element/create/choice_full.html.twig\" -%}
    {%- endif -%}

{% endblock %}
", "@App/element/create/choice.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/create/choice.html.twig");
    }
}
