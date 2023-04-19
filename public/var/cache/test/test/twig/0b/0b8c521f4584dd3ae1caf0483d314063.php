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

/* @App/_layout/aside_sticky_languages.html.twig */
class __TwigTemplate_a487f9535f914f624e6b140ad9a67eaa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/aside_sticky_languages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/aside_sticky_languages.html.twig"));

        // line 1
        $context["locales"] = $this->extensions['AppBundle\Twig\SettingTwigExtension']->getFunctionLocales();
        // line 2
        if ((0 < twig_length_filter($this->env, (isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 2, $this->source); })())))) {
            // line 3
            $context["locale_default"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "defaultLocale", [], "any", false, false, false, 3);
            // line 4
            if ( !array_key_exists("locale_current", $context)) {
                // line 5
                $context["locale_current"] = $this->extensions['AppBundle\Services\Twig\LocaleTwigExtension']->getFilterLocaleCurrent(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5));
            }
            // line 8
            $context["locale_current_is_default"] = ((isset($context["locale_current"]) || array_key_exists("locale_current", $context) ? $context["locale_current"] : (function () { throw new RuntimeError('Variable "locale_current" does not exist.', 8, $this->source); })()) == (isset($context["locale_default"]) || array_key_exists("locale_default", $context) ? $context["locale_default"] : (function () { throw new RuntimeError('Variable "locale_default" does not exist.', 8, $this->source); })()));
            // line 9
            echo "<ul class=\"languages\">
        <li";
            // line 10
            if (((isset($context["locale_current"]) || array_key_exists("locale_current", $context) ? $context["locale_current"] : (function () { throw new RuntimeError('Variable "locale_current" does not exist.', 10, $this->source); })()) == (isset($context["locale_default"]) || array_key_exists("locale_default", $context) ? $context["locale_default"] : (function () { throw new RuntimeError('Variable "locale_default" does not exist.', 10, $this->source); })()))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_locale", ["locale" => (isset($context["locale_default"]) || array_key_exists("locale_default", $context) ? $context["locale_default"] : (function () { throw new RuntimeError('Variable "locale_default" does not exist.', 11, $this->source); })())]), "html", null, true);
            echo "\" data-module=\"features/Reload\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["locale_default"]) || array_key_exists("locale_default", $context) ? $context["locale_default"] : (function () { throw new RuntimeError('Variable "locale_default" does not exist.', 11, $this->source); })())), "html", null, true);
            echo "</a>
        </li>";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 14
                echo "            <li";
                if ((twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 14) == (isset($context["locale_current"]) || array_key_exists("locale_current", $context) ? $context["locale_current"] : (function () { throw new RuntimeError('Variable "locale_current" does not exist.', 14, $this->source); })()))) {
                    echo " class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_locale", ["locale" => twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\" data-module=\"features/Reload\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 15)), "html", null, true);
                echo "</a>
            </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_layout/aside_sticky_languages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  82 => 15,  75 => 14,  71 => 13,  65 => 11,  59 => 10,  56 => 9,  54 => 8,  51 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set locales = app_setting_locale_all() -%}
{%- if 0 < locales|length -%}
    {%- set locale_default = app.request.defaultLocale -%}
    {%- if locale_current is not defined -%}
        {%- set locale_current = app.request|app_locale_current -%}
    {%- endif -%}

    {%- set locale_current_is_default = (locale_current == locale_default) -%}
    <ul class=\"languages\">
        <li{% if (locale_current == locale_default) %} class=\"active\"{% endif %}>
            <a href=\"{{ path_without_space('app_default_locale', {'locale':locale_default}) }}\" data-module=\"features/Reload\">{{ locale_default|upper }}</a>
        </li>
        {%- for locale in locales %}
            <li{% if locale.name == locale_current %} class=\"active\"{% endif %}>
                <a href=\"{{ path_without_space('app_default_locale', {'locale':locale.name}) }}\" data-module=\"features/Reload\">{{ locale.name|upper }}</a>
            </li>
        {%- endfor %}
    </ul>

{%- endif -%}", "@App/_layout/aside_sticky_languages.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_layout/aside_sticky_languages.html.twig");
    }
}
