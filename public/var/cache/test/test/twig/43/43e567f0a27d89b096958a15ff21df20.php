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

/* @App/_components/button/add_first_element.html.twig */
class __TwigTemplate_9d521281c5d8fe3aad2bb5dcbc422077 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_components/button/add_first_element.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_components/button/add_first_element.html.twig"));

        // line 1
        $context["route"] = "app_element_create_choice";
        // line 2
        $context["routeParameters"] = ["category" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 2, $this->source); })()), "slug", [], "any", false, false, false, 2)];
        // line 3
        if (array_key_exists("parent_element", $context)) {
            // line 4
            $context["routeParameters"] = twig_array_merge((isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 4, $this->source); })()), ["parent" => twig_get_attribute($this->env, $this->source, (isset($context["parent_element"]) || array_key_exists("parent_element", $context) ? $context["parent_element"] : (function () { throw new RuntimeError('Variable "parent_element" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]);
        }
        // line 7
        echo "<div class=\"text-center\">
    <p class=\"mt-4\">
        <a class=\"element__add_button btn btn-brand no-fade is-link is-link--dialog\" data-dialog-class=\"dialog--f85aa5b2\" data-dialog-center=\"false\"
           href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 10, $this->source); })()), (isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "\"><i class=\"material-symbols-sharp\">add</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element_create_first"), "html", null, true);
        echo "
        </a>
    </p>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_components/button/add_first_element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 7,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set route = 'app_element_create_choice' -%}
{%- set routeParameters = {'category':category.slug} -%}
{%- if parent_element is defined -%}
    {%- set routeParameters = routeParameters|merge({'parent':parent_element.id}) -%}
{%- endif -%}

<div class=\"text-center\">
    <p class=\"mt-4\">
        <a class=\"element__add_button btn btn-brand no-fade is-link is-link--dialog\" data-dialog-class=\"dialog--f85aa5b2\" data-dialog-center=\"false\"
           href=\"{{ path(route, routeParameters) }}\"><i class=\"material-symbols-sharp\">add</i> {{ 'element_create_first'|trans }}
        </a>
    </p>
</div>", "@App/_components/button/add_first_element.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_components/button/add_first_element.html.twig");
    }
}
