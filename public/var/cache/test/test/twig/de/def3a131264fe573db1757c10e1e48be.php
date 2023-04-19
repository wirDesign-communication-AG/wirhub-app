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

/* @App/element/toolbar/add.html.twig */
class __TwigTemplate_3ca866ff119a87c091eec0333c60b5f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/toolbar/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/toolbar/add.html.twig"));

        // line 1
        if (( !array_key_exists("hide_add", $context) ||  !(isset($context["hide_add"]) || array_key_exists("hide_add", $context) ? $context["hide_add"] : (function () { throw new RuntimeError('Variable "hide_add" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <div class=\"btn-group m-btn-group m-btn-group--air mr-2\">
        <button type=\"button\" class=\"element__insert_dropdown ";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"material-symbols-sharp\">add</i>
        </button>
        <div class=\"dropdown-menu\">";
            // line 7
            $context["path_create_choice"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_create_choice", ["category" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 7, $this->source); })()), "slug", [], "any", false, false, false, 7)]);
            // line 8
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["path_create_choice"]) || array_key_exists("path_create_choice", $context) ? $context["path_create_choice"] : (function () { throw new RuntimeError('Variable "path_create_choice" does not exist.', 8, $this->source); })()), "html", null, true);
            if (twig_in_filter("?", (isset($context["path_create_choice"]) || array_key_exists("path_create_choice", $context) ? $context["path_create_choice"] : (function () { throw new RuntimeError('Variable "path_create_choice" does not exist.', 8, $this->source); })()))) {
                echo "&";
            } else {
                echo "?";
            }
            echo "after=";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 8, $this->source); })()), "position", [], "any", false, false, false, 8) - 1), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["add_query"]) || array_key_exists("add_query", $context) ? $context["add_query"] : (function () { throw new RuntimeError('Variable "add_query" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "\"
               class=\"dropdown-item has-icon element__insert_above is-link is-link--dialog\" data-dialog-class=\"dialog--f85aa5b2\" data-dialog-center=\"false\">
                <i class=\"material-symbols-sharp\">arrow_upward</i>";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("above"), "html", null, true);
            // line 11
            echo "</a>
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["path_create_choice"]) || array_key_exists("path_create_choice", $context) ? $context["path_create_choice"] : (function () { throw new RuntimeError('Variable "path_create_choice" does not exist.', 12, $this->source); })()), "html", null, true);
            if (twig_in_filter("?", (isset($context["path_create_choice"]) || array_key_exists("path_create_choice", $context) ? $context["path_create_choice"] : (function () { throw new RuntimeError('Variable "path_create_choice" does not exist.', 12, $this->source); })()))) {
                echo "&";
            } else {
                echo "?";
            }
            echo "after=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 12, $this->source); })()), "position", [], "any", false, false, false, 12), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["add_query"]) || array_key_exists("add_query", $context) ? $context["add_query"] : (function () { throw new RuntimeError('Variable "add_query" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\"
               class=\"dropdown-item has-icon element__insert_below is-link is-link--dialog\" data-dialog-class=\"dialog--f85aa5b2\" data-dialog-center=\"false\">
                <i class=\"material-symbols-sharp\">arrow_downward</i>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("below"), "html", null, true);
            // line 15
            echo "</a>
        </div>
    </div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/toolbar/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  88 => 14,  75 => 12,  72 => 11,  70 => 10,  56 => 8,  54 => 7,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if hide_add is not defined or not hide_add %}
    <div class=\"btn-group m-btn-group m-btn-group--air mr-2\">
        <button type=\"button\" class=\"element__insert_dropdown {{ btn_class }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"material-symbols-sharp\">add</i>
        </button>
        <div class=\"dropdown-menu\">
            {%- set path_create_choice = path_without_space('app_element_create_choice', {'category':category.slug}) -%}
            <a href=\"{{ path_create_choice }}{% if '?' in path_create_choice %}&{% else %}?{% endif %}after={{ element.position - 1 }}{{ add_query }}\"
               class=\"dropdown-item has-icon element__insert_above is-link is-link--dialog\" data-dialog-class=\"dialog--f85aa5b2\" data-dialog-center=\"false\">
                <i class=\"material-symbols-sharp\">arrow_upward</i>{{ 'above'|trans -}}
            </a>
            <a href=\"{{ path_create_choice }}{% if '?' in path_create_choice %}&{% else %}?{% endif %}after={{ element.position }}{{ add_query }}\"
               class=\"dropdown-item has-icon element__insert_below is-link is-link--dialog\" data-dialog-class=\"dialog--f85aa5b2\" data-dialog-center=\"false\">
                <i class=\"material-symbols-sharp\">arrow_downward</i>{{ 'below'|trans -}}
            </a>
        </div>
    </div>
{%- endif %}
", "@App/element/toolbar/add.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/toolbar/add.html.twig");
    }
}
