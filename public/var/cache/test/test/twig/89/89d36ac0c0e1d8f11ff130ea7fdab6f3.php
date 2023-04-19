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

/* @App/_layout/aside_sticky_custom.html.twig */
class __TwigTemplate_0889c212f23cb53200f048cd7ec54de1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/aside_sticky_custom.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/aside_sticky_custom.html.twig"));

        // line 1
        $context["custom_links"] = $this->extensions['AppBundle\Twig\Component\MenuAsideTwigExtension']->getFilterCustomLinks(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1));
        // line 2
        echo "<ul class=\"custom";
        if ((0 < twig_length_filter($this->env, (isset($context["custom_links"]) || array_key_exists("custom_links", $context) ? $context["custom_links"] : (function () { throw new RuntimeError('Variable "custom_links" does not exist.', 2, $this->source); })())))) {
            echo " has-links mt-4";
        } else {
            echo " mt-2";
        }
        echo "\">";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_links"]) || array_key_exists("custom_links", $context) ? $context["custom_links"] : (function () { throw new RuntimeError('Variable "custom_links" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["link"], "linkToRelatedCategory", [], "any", false, false, false, 4)) {
                // line 5
                $context["category"] = twig_get_attribute($this->env, $this->source, $context["link"], "linkRelatedCategory", [], "any", false, false, false, 5);
                // line 6
                $context["path"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_category_index", ["_space" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 6, $this->source); })()), "space", [], "any", false, false, false, 6), "slug", [], "any", false, false, false, 6), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 6, $this->source); })()), "slug", [], "any", false, false, false, 6)]);
                // line 7
                $context["label"] = twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 7, $this->source); })()), "name", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "locale", [], "any", false, false, false, 7)], "method", false, false, false, 7);
            } else {
                // line 9
                $context["path"] = twig_get_attribute($this->env, $this->source, $context["link"], "linkUrl", [], "any", false, false, false, 9);
                // line 10
                $context["label"] = twig_get_attribute($this->env, $this->source, $context["link"], "linkLabel", [], "any", false, false, false, 10);
            }
            // line 12
            echo "<li>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 13)) {
                echo " class=\"has-icon\"";
            } else {
                echo " class=\"ml-5\"";
            }
            echo ">";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 14)) {
                echo "<i class=\"material-symbols-sharp new-size mr-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 14), "html", null, true);
                echo "</i>";
            }
            // line 15
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 15, $this->source); })()), "html", null, true);
            // line 16
            echo "</a>
        </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        if ($this->extensions['AppBundle\Twig\UserTwigExtension']->getFunctionSmartEditGranted()) {
            // line 20
            echo "<li class=\"edit\">
            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_components_menu_aside_custom_links"), "html", null, true);
            echo "\" class=\"has-icon text-muted\" data-reload-target=\"ul\" data-module=\"components/Dialog\"
               title=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create_custom_links"), "html", null, true);
            echo "\"><i class=\"material-symbols-sharp new-size text-muted";
            if ((0 == twig_length_filter($this->env, (isset($context["custom_links"]) || array_key_exists("custom_links", $context) ? $context["custom_links"] : (function () { throw new RuntimeError('Variable "custom_links" does not exist.', 22, $this->source); })())))) {
                echo " mr-2";
            }
            echo "\">edit</i>";
            // line 23
            if ((0 == twig_length_filter($this->env, (isset($context["custom_links"]) || array_key_exists("custom_links", $context) ? $context["custom_links"] : (function () { throw new RuntimeError('Variable "custom_links" does not exist.', 23, $this->source); })())))) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create_custom_links"), "html", null, true);
            }
            echo "</a>
        </li>";
        }
        // line 26
        echo "</ul>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_layout/aside_sticky_custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 26,  114 => 23,  107 => 22,  103 => 21,  100 => 20,  98 => 19,  91 => 16,  89 => 15,  83 => 14,  74 => 13,  71 => 12,  68 => 10,  66 => 9,  63 => 7,  61 => 6,  59 => 5,  57 => 4,  53 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set custom_links = app.request|app_component_menu_aside_custom_links -%}
<ul class=\"custom{% if 0 < custom_links|length %} has-links mt-4{% else %} mt-2{% endif %}\">
    {%- for link in custom_links -%}
        {%- if link.linkToRelatedCategory -%}
            {%- set category = link.linkRelatedCategory -%}
            {%- set path = path('app_category_index', {'_space': category.space.slug, 'slug': category.slug}) -%}
            {%- set label = category.name(app.request.locale) -%}
        {%- else -%}
            {%- set path = link.linkUrl -%}
            {%- set label = link.linkLabel -%}
        {%- endif -%}
        <li>
            <a href=\"{{ path }}\" {% if link.icon %} class=\"has-icon\"{% else %} class=\"ml-5\"{% endif %}>
                {%- if link.icon %}<i class=\"material-symbols-sharp new-size mr-3\">{{ link.icon }}</i>{% endif -%}
                {{- label -}}
            </a>
        </li>
    {%- endfor -%}
    {%- if app_user_smart_edit_granted() -%}
        <li class=\"edit\">
            <a href=\"{{ path('app_components_menu_aside_custom_links') }}\" class=\"has-icon text-muted\" data-reload-target=\"ul\" data-module=\"components/Dialog\"
               title=\"{{ 'create_custom_links'|trans }}\"><i class=\"material-symbols-sharp new-size text-muted{%- if 0 == custom_links|length %} mr-2{% endif %}\">edit</i>
                {%- if 0 == custom_links|length %}{{ 'create_custom_links'|trans }}{% endif %}</a>
        </li>
    {%- endif -%}
</ul>", "@App/_layout/aside_sticky_custom.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_layout/aside_sticky_custom.html.twig");
    }
}
