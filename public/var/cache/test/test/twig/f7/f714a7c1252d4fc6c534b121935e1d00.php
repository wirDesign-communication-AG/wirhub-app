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

/* @App/_layout/navbar.html.twig */
class __TwigTemplate_f30509736af8b18218a4a68c073c5e49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/navbar.html.twig"));

        // line 2
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "get", [0 => "_space"], "method", false, false, false, 2) && ("default" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "get", [0 => "_space"], "method", false, false, false, 2)))) {
            // line 3
            echo "    ";
            $context["spaces"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getFunctionFindAll();
            // line 4
            echo "    ";
            $context["space_slug"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", [0 => "_space"], "method", false, false, false, 4);
            // line 5
            echo "    ";
            $context["space_entity"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->findOneBySlug((isset($context["space_slug"]) || array_key_exists("space_slug", $context) ? $context["space_slug"] : (function () { throw new RuntimeError('Variable "space_slug" does not exist.', 5, $this->source); })()));
            // line 6
            echo "
    ";
            // line 7
            $context["space_name"] = twig_get_attribute($this->env, $this->source, (isset($context["space_entity"]) || array_key_exists("space_entity", $context) ? $context["space_entity"] : (function () { throw new RuntimeError('Variable "space_entity" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7);
            // line 8
            echo "
    ";
            // line 10
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["space_entity"]) || array_key_exists("space_entity", $context) ? $context["space_entity"] : (function () { throw new RuntimeError('Variable "space_entity" does not exist.', 10, $this->source); })()), "logo", [], "any", false, false, false, 10)) {
                // line 11
                echo "        ";
                $context["logo"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_asset_file_inline", ["randomId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["space_entity"]) || array_key_exists("space_entity", $context) ? $context["space_entity"] : (function () { throw new RuntimeError('Variable "space_entity" does not exist.', 11, $this->source); })()), "logo", [], "any", false, false, false, 11), "randomId", [], "any", false, false, false, 11), "fileNameAscii" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["space_entity"]) || array_key_exists("space_entity", $context) ? $context["space_entity"] : (function () { throw new RuntimeError('Variable "space_entity" does not exist.', 11, $this->source); })()), "logo", [], "any", false, false, false, 11), "nameAscii", [], "any", false, false, false, 11)]);
                // line 12
                echo "    ";
            }
        } else {
            // line 14
            echo "    ";
            $context["space_slug"] = "default";
        }
        // line 16
        echo "
";
        // line 17
        if ( !array_key_exists("logo", $context)) {
            // line 18
            $context["logo"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_logo_upload");
            // line 19
            if ((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 19, $this->source); })())) {
                // line 20
                $context["logo_file"] = $this->extensions['AppBundle\Twig\FileTwigExtension']->get((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 20, $this->source); })()));
                // line 21
                $context["logo"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_asset_file_inline", ["randomId" => twig_get_attribute($this->env, $this->source, (isset($context["logo_file"]) || array_key_exists("logo_file", $context) ? $context["logo_file"] : (function () { throw new RuntimeError('Variable "logo_file" does not exist.', 21, $this->source); })()), "randomId", [], "any", false, false, false, 21), "fileNameAscii" => twig_get_attribute($this->env, $this->source, (isset($context["logo_file"]) || array_key_exists("logo_file", $context) ? $context["logo_file"] : (function () { throw new RuntimeError('Variable "logo_file" does not exist.', 21, $this->source); })()), "nameAscii", [], "any", false, false, false, 21)]);
            } else {
                // line 23
                $context["logo"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_logo");
            }
        }
        // line 27
        $context["config_jump_mark_design"] = $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("SMART_BLOCK_JUMP_MARK_DESIGN");
        // line 28
        echo "<nav class=\"navbar navbar-expand-lg\"";
        if (("body" == (isset($context["config_jump_mark_design"]) || array_key_exists("config_jump_mark_design", $context) ? $context["config_jump_mark_design"] : (function () { throw new RuntimeError('Variable "config_jump_mark_design" does not exist.', 28, $this->source); })()))) {
            echo " data-jump-mark-design=\"body\"";
        }
        echo ">
    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_index"), "html", null, true);
        echo "\" class=\"navbar-brand\">
        <img alt=\"Logo\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\"/>
    </a>";
        // line 33
        if (("navbar" == (isset($context["config_jump_mark_design"]) || array_key_exists("config_jump_mark_design", $context) ? $context["config_jump_mark_design"] : (function () { throw new RuntimeError('Variable "config_jump_mark_design" does not exist.', 33, $this->source); })()))) {
            // line 34
            echo "<div class=\"m-breadcrumb mr-auto\">
            <ul>";
            // line 36
            $context["space_current"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getFilterCurrentSpace(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36));
            // line 37
            $context["breadcrumb_items"] = ((array_key_exists("breadcrumb_items", $context)) ? (_twig_default_filter((isset($context["breadcrumb_items"]) || array_key_exists("breadcrumb_items", $context) ? $context["breadcrumb_items"] : (function () { throw new RuntimeError('Variable "breadcrumb_items" does not exist.', 37, $this->source); })()), [])) : ([]));
            // line 38
            if (((0 < twig_length_filter($this->env, (isset($context["breadcrumb_items"]) || array_key_exists("breadcrumb_items", $context) ? $context["breadcrumb_items"] : (function () { throw new RuntimeError('Variable "breadcrumb_items" does not exist.', 38, $this->source); })()))) || ((isset($context["space_current"]) || array_key_exists("space_current", $context) ? $context["space_current"] : (function () { throw new RuntimeError('Variable "space_current" does not exist.', 38, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["space_current"]) || array_key_exists("space_current", $context) ? $context["space_current"] : (function () { throw new RuntimeError('Variable "space_current" does not exist.', 38, $this->source); })()), "custom", [], "any", false, false, false, 38)))) {
                // line 39
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_index"), "html", null, true);
                echo "\"><i class=\"material-symbols-sharp\">home</i></a></li>";
                // line 40
                if (((isset($context["space_current"]) || array_key_exists("space_current", $context) ? $context["space_current"] : (function () { throw new RuntimeError('Variable "space_current" does not exist.', 40, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["space_current"]) || array_key_exists("space_current", $context) ? $context["space_current"] : (function () { throw new RuntimeError('Variable "space_current" does not exist.', 40, $this->source); })()), "custom", [], "any", false, false, false, 40))) {
                    // line 41
                    echo "<li>";
                    // line 42
                    $context["spaces"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getFunctionFindAll();
                    // line 43
                    if ((1 < twig_length_filter($this->env, (isset($context["spaces"]) || array_key_exists("spaces", $context) ? $context["spaces"] : (function () { throw new RuntimeError('Variable "spaces" does not exist.', 43, $this->source); })())))) {
                        // line 44
                        echo "<div class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\">";
                        // line 45
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["space_current"]) || array_key_exists("space_current", $context) ? $context["space_current"] : (function () { throw new RuntimeError('Variable "space_current" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
                        echo "</a>

                                    <div class=\"dropdown-menu\">";
                        // line 48
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["spaces"]) || array_key_exists("spaces", $context) ? $context["spaces"] : (function () { throw new RuntimeError('Variable "spaces" does not exist.', 48, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["space_loop"]) {
                            // line 49
                            if (($context["space_loop"] != (isset($context["space_current"]) || array_key_exists("space_current", $context) ? $context["space_current"] : (function () { throw new RuntimeError('Variable "space_current" does not exist.', 49, $this->source); })()))) {
                                // line 50
                                echo "<a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_dashboard_index", ["_space" => twig_get_attribute($this->env, $this->source, $context["space_loop"], "slug", [], "any", false, false, false, 50)]), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["space_loop"], "name", [], "any", false, false, false, 50), "html", null, true);
                                echo "\"
                                                   class=\"dropdown-item \">";
                                // line 51
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["space_loop"], "name", [], "any", false, false, false, 51), "html", null, true);
                                echo "</a>";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['space_loop'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "</div>
                                </div>";
                    } else {
                        // line 57
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_dashboard_index", ["_space" => twig_get_attribute($this->env, $this->source, (isset($context["space_current"]) || array_key_exists("space_current", $context) ? $context["space_current"] : (function () { throw new RuntimeError('Variable "space_current" does not exist.', 57, $this->source); })()), "slug", [], "any", false, false, false, 57)]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["space_current"]) || array_key_exists("space_current", $context) ? $context["space_current"] : (function () { throw new RuntimeError('Variable "space_current" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
                        echo "</a>";
                    }
                    // line 59
                    echo "</li>";
                }
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb_items"]) || array_key_exists("breadcrumb_items", $context) ? $context["breadcrumb_items"] : (function () { throw new RuntimeError('Variable "breadcrumb_items" does not exist.', 61, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                    // line 62
                    if (("__no-translation" == twig_slice($this->env, $context["label"],  -16))) {
                        // line 63
                        $context["label"] = twig_slice($this->env, $context["label"], 0,  -16);
                    } else {
                        // line 65
                        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["label"]);
                    }
                    // line 67
                    echo "                        <li class=\"item";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 67)) {
                        echo " item--category";
                    }
                    echo "\">
                            <a href=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $context["uri"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "</a>
                        </li>";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 72
            echo "            </ul>
        </div>";
        }
        // line 76
        echo "<div class=\"navbar-aside d-flex ml-auto mr-lg-5\">";
        // line 78
        $context["btn_class"] = "btn btn-default btn-icon-only";
        // line 79
        $context["first_level_class"] = "m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push";
        // line 81
        $this->loadTemplate("@App/_layout/default_header_aside.html.twig", "@App/_layout/navbar.html.twig", 81)->display($context);
        // line 82
        echo "</div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_layout/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 82,  238 => 81,  236 => 79,  234 => 78,  232 => 76,  228 => 72,  209 => 68,  202 => 67,  199 => 65,  196 => 63,  194 => 62,  177 => 61,  174 => 59,  167 => 57,  163 => 54,  155 => 51,  148 => 50,  146 => 49,  142 => 48,  137 => 45,  134 => 44,  132 => 43,  130 => 42,  128 => 41,  126 => 40,  122 => 39,  120 => 38,  118 => 37,  116 => 36,  113 => 34,  111 => 33,  107 => 30,  103 => 29,  96 => 28,  94 => 27,  90 => 23,  87 => 21,  85 => 20,  83 => 19,  81 => 18,  79 => 17,  76 => 16,  72 => 14,  68 => 12,  65 => 11,  62 => 10,  59 => 8,  57 => 7,  54 => 6,  51 => 5,  48 => 4,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# logo #}
{% if app.request.get('_space') and 'default' != app.request.get('_space') %}
    {% set spaces = app_space_find_all() %}
    {% set space_slug = app.request.get('_space') %}
    {% set space_entity = space_slug|space_find_by_slug %}

    {% set space_name = space_entity.name %}

    {# Override space logo #}
    {% if space_entity.logo %}
        {% set logo = path_without_space('app_asset_file_inline', {randomId:space_entity.logo.randomId, fileNameAscii:space_entity.logo.nameAscii}) %}
    {% endif %}
{% else %}
    {% set space_slug = 'default' %}
{% endif %}

{% if logo is not defined %}
    {%- set logo = 'config_template_logo_upload'|app_config_get_value_by_key -%}
    {%- if logo -%}
        {%- set logo_file = logo|app_file_get -%}
        {%- set logo = path('app_asset_file_inline', {'randomId':logo_file.randomId, 'fileNameAscii': logo_file.nameAscii}) -%}
    {%- else -%}
        {%- set logo = 'config_template_logo'|app_config_get_value_by_key|raw -%}
    {%- endif -%}
{% endif %}

{%- set config_jump_mark_design = 'SMART_BLOCK_JUMP_MARK_DESIGN'|_env  -%}
<nav class=\"navbar navbar-expand-lg\"{% if 'body' == config_jump_mark_design %} data-jump-mark-design=\"body\"{% endif %}>
    <a href=\"{{ path_without_space('app_default_index') }}\" class=\"navbar-brand\">
        <img alt=\"Logo\" src=\"{{ logo }}\"/>
    </a>

    {%- if 'navbar' == config_jump_mark_design -%}
        <div class=\"m-breadcrumb mr-auto\">
            <ul>
                {%- set space_current = app.request|app_space_current -%}
                {%- set  breadcrumb_items = breadcrumb_items|default([]) %}
                {%- if 0 < breadcrumb_items|length or (space_current and space_current.custom) %}
                    <li><a href=\"{{ path_without_space('app_default_index') }}\"><i class=\"material-symbols-sharp\">home</i></a></li>
                    {%- if space_current and space_current.custom -%}
                        <li>
                            {%- set spaces = app_space_find_all() -%}
                            {%- if 1 < spaces|length -%}
                                <div class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\">{{ space_current.name }}</a>

                                    <div class=\"dropdown-menu\">
                                        {%- for space_loop in spaces -%}
                                            {%- if space_loop != space_current -%}
                                                <a href=\"{{ path_without_space('app_dashboard_index', {'_space':space_loop.slug}) }}\" title=\"{{ space_loop.name }}\"
                                                   class=\"dropdown-item \">{{ space_loop.name }}</a>
                                            {%- endif -%}
                                        {%- endfor -%}
                                    </div>
                                </div>
                            {%- else %}
                                <a href=\"{{ path_without_space('app_dashboard_index', {'_space': space_current.slug}) }}\">{{ space_current.name }}</a>
                            {%- endif -%}
                        </li>
                    {%- endif %}
                    {%- for label,uri in breadcrumb_items %}
                        {%- if '__no-translation' == label|slice(-16) %}
                            {%- set label = label|slice(0,-16) %}
                        {%- else %}
                            {%- set label = label|trans %}
                        {%- endif %}
                        <li class=\"item{% if loop.last %} item--category{% endif %}\">
                            <a href=\"{{ uri }}\">{{ label }}</a>
                        </li>
                    {%- endfor %}
                {%- endif %}
            </ul>
        </div>
    {%- endif -%}

    <div class=\"navbar-aside d-flex ml-auto mr-lg-5\">

        {%- set btn_class = 'btn btn-default btn-icon-only' -%}
        {%- set first_level_class = 'm-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push' -%}

        {%- include \"@App/_layout/default_header_aside.html.twig\" -%}
    </div>
</nav>", "@App/_layout/navbar.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_layout/navbar.html.twig");
    }
}
