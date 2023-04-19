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

/* @App/element/smart_block/_manage/dialog_add_item.html.twig */
class __TwigTemplate_84b6406ae321074c6bf976c040c90194 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/_manage/dialog_add_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/_manage/dialog_add_item.html.twig"));

        // line 1
        if (( !array_key_exists("enabled", $context) || (true == (isset($context["enabled"]) || array_key_exists("enabled", $context) ? $context["enabled"] : (function () { throw new RuntimeError('Variable "enabled" does not exist.', 1, $this->source); })())))) {
            // line 2
            if ((array_key_exists("quick", $context) && (isset($context["quick"]) || array_key_exists("quick", $context) ? $context["quick"] : (function () { throw new RuntimeError('Variable "quick" does not exist.', 2, $this->source); })()))) {
                // line 3
                $context["route"] = "app_element_create_type_quick";
            }
            // line 6
            $context["route"] = ((array_key_exists("route", $context)) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })()), "app_element_create_type_full_size")) : ("app_element_create_type_full_size"));
            // line 7
            $context["path"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 7, $this->source); })()), ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 7, $this->source); })()), "category" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 7, $this->source); })()), "slug", [], "any", false, false, false, 7)]);
            // line 9
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 9, $this->source); })()), "html", null, true);
            if (twig_in_filter("?", (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 9, $this->source); })()))) {
                echo "&";
            } else {
                echo "?";
            }
            echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\"
       class=\"add-smartblock add-smartblock-";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" data-tags=\"";
            echo twig_escape_filter($this->env, (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\">";
            // line 11
            if (array_key_exists("custom_icon", $context)) {
                // line 12
                $this->loadTemplate((("@App/_components/icons/" . (isset($context["custom_icon"]) || array_key_exists("custom_icon", $context) ? $context["custom_icon"] : (function () { throw new RuntimeError('Variable "custom_icon" does not exist.', 12, $this->source); })())) . ".html.twig"), "@App/element/smart_block/_manage/dialog_add_item.html.twig", 12)->display($context);
            } else {
                // line 14
                echo "<i class=\"material-symbols-sharp\">";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 14, $this->source); })()), "html", null, true);
                echo "</i>";
            }
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 17, $this->source); })())), "html", null, true);
            // line 18
            echo "</a>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/smart_block/_manage/dialog_add_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  80 => 17,  75 => 14,  72 => 12,  70 => 11,  65 => 10,  54 => 9,  52 => 7,  50 => 6,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if enabled is not defined or true == enabled -%}
    {%- if quick is defined and quick -%}
        {%- set route = 'app_element_create_type_quick' -%}
    {%- endif -%}

    {%- set route = route|default('app_element_create_type_full_size') -%}
    {%- set path = path_without_space(route, {'type':type,'category':category.slug}) -%}

    <a href=\"{{ path }}{% if '?' in path %}&{% else %}?{% endif %}{{ query }}\"
       class=\"add-smartblock add-smartblock-{{ type }}\" data-tags=\"{{ tags }}\">
        {%- if custom_icon is defined -%}
            {%- include \"@App/_components/icons/\" ~ custom_icon ~ \".html.twig\" -%}
        {%- else -%}
            <i class=\"material-symbols-sharp\">{{ icon }}</i>
        {%- endif -%}

        {{- type|trans -}}
    </a>
{% endif %}", "@App/element/smart_block/_manage/dialog_add_item.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/smart_block/_manage/dialog_add_item.html.twig");
    }
}
