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

/* @App/_layout/default_header_aside.html.twig */
class __TwigTemplate_1e22249a7fc2e5fb4216fe9ac4486e01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/default_header_aside.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/default_header_aside.html.twig"));

        // line 1
        $context["space"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getFunctionActive();
        // line 2
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 3
            $context["hide_search"] = ((array_key_exists("hide_search", $context)) ? (_twig_default_filter((isset($context["hide_search"]) || array_key_exists("hide_search", $context) ? $context["hide_search"] : (function () { throw new RuntimeError('Variable "hide_search" does not exist.', 3, $this->source); })()), false)) : (false));
            // line 4
            if ( !(isset($context["hide_search"]) || array_key_exists("hide_search", $context) ? $context["hide_search"] : (function () { throw new RuntimeError('Variable "hide_search" does not exist.', 4, $this->source); })())) {
                // line 5
                echo "<a class=\"btn btn-default d-none d-md-inline-block quick-search-toggle\" data-module=\"features/QuickSearch\" data-target=\"#quick-search\" href=\"javascript:void(0)\">
            <i class=\"material-symbols-sharp\">search</i></a>";
            }
            // line 9
            if (( !array_key_exists("hide_news", $context) || (false == (isset($context["hide_news"]) || array_key_exists("hide_news", $context) ? $context["hide_news"] : (function () { throw new RuntimeError('Variable "hide_news" does not exist.', 9, $this->source); })())))) {
                // line 10
                $this->loadTemplate("@App/_layout/newsmenu.html.twig", "@App/_layout/default_header_aside.html.twig", 10)->display(twig_array_merge($context, ["btn_class" => "btn btn-default ml-2", "first_level_class" => "m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"]));
            }
            // line 13
            if (( !(isset($context["space"]) || array_key_exists("space", $context) ? $context["space"] : (function () { throw new RuntimeError('Variable "space" does not exist.', 13, $this->source); })()) ||  !twig_get_attribute($this->env, $this->source, (isset($context["space"]) || array_key_exists("space", $context) ? $context["space"] : (function () { throw new RuntimeError('Variable "space" does not exist.', 13, $this->source); })()), "onePager", [], "any", false, false, false, 13))) {
                // line 14
                $this->loadTemplate("@App/_layout/bookmarks.html.twig", "@App/_layout/default_header_aside.html.twig", 14)->display(twig_array_merge($context, ["btn_class" => "btn btn-default ml-2", "first_level_class" => "m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"]));
            }
            // line 17
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_user_security_logout"), "html", null, true);
            echo "\" class=\"m-brand__icon m--visible-tablet-and-mobile-inline-block\"><i class=\"material-symbols-sharp\">power_settings_new</i></a>";
        } else {
            // line 19
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_user_security_login"), "html", null, true);
            echo "\" class=\"m-brand__icon m--visible-tablet-and-mobile-inline-block\"><i class=\"material-symbols-sharp\">person</i></a>";
        }
        // line 22
        if ((("true" == $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("APP_DOWNLOAD_CENTER_ENABLED")) && ( !(isset($context["space"]) || array_key_exists("space", $context) ? $context["space"] : (function () { throw new RuntimeError('Variable "space" does not exist.', 22, $this->source); })()) ||  !twig_get_attribute($this->env, $this->source, (isset($context["space"]) || array_key_exists("space", $context) ? $context["space"] : (function () { throw new RuntimeError('Variable "space" does not exist.', 22, $this->source); })()), "onePager", [], "any", false, false, false, 22)))) {
            // line 23
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_feature_download_center_default_index"), "html", null, true);
            echo "\" class=\"btn btn-default ml-2\"><i class=\"material-symbols-sharp\">download</i></a>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_layout/default_header_aside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  75 => 22,  70 => 19,  65 => 17,  62 => 14,  60 => 13,  57 => 10,  55 => 9,  51 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set space = app_space_active() -%}
{%- if is_granted('ROLE_USER') -%}
    {%- set hide_search = hide_search|default(false) -%}
    {%- if not hide_search -%}
        <a class=\"btn btn-default d-none d-md-inline-block quick-search-toggle\" data-module=\"features/QuickSearch\" data-target=\"#quick-search\" href=\"javascript:void(0)\">
            <i class=\"material-symbols-sharp\">search</i></a>
    {%- endif %}

    {%- if hide_news is not defined or false == hide_news %}
        {%- include '@App/_layout/newsmenu.html.twig' with { 'btn_class': 'btn btn-default ml-2', 'first_level_class': 'm-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push'} -%}
    {%- endif %}

    {%- if not space or not space.onePager -%}
        {%- include \"@App/_layout/bookmarks.html.twig\" with { 'btn_class': 'btn btn-default ml-2', 'first_level_class': 'm-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push'} -%}
    {%- endif -%}

    <a href=\"{{ path_without_space('app_user_security_logout') }}\" class=\"m-brand__icon m--visible-tablet-and-mobile-inline-block\"><i class=\"material-symbols-sharp\">power_settings_new</i></a>
{%- else -%}
    <a href=\"{{ path_without_space('app_user_security_login') }}\" class=\"m-brand__icon m--visible-tablet-and-mobile-inline-block\"><i class=\"material-symbols-sharp\">person</i></a>
{%- endif -%}

{%- if 'true' == 'APP_DOWNLOAD_CENTER_ENABLED'|_env and (not space or not space.onePager) -%}
    <a href=\"{{ path('app_feature_download_center_default_index') }}\" class=\"btn btn-default ml-2\"><i class=\"material-symbols-sharp\">download</i></a>
{%- endif -%}", "@App/_layout/default_header_aside.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_layout/default_header_aside.html.twig");
    }
}
