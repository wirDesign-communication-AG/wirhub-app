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

/* @App/Default/index_dynamic.html.twig */
class __TwigTemplate_912393549b50acd41657bcbccc227174 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Default/index_dynamic.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Default/index_dynamic.html.twig"));

        // line 1
        $context["dashboard"] = $this->extensions['AppBundle\Services\Twig\DashboardTwigExtension']->getDashboard((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })()));
        // line 3
        $context["container"] = [0 => "wd--smart"];
        // line 4
        if ($this->extensions['AppBundle\Twig\UserTwigExtension']->getFunctionSmartEditGranted()) {
            // line 5
            $context["container"] = twig_array_merge((isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 5, $this->source); })()), [0 => "is-writing"]);
            // line 7
            if ($this->env->getFunction('app_user_edit_mode')->getCallable()()) {
                // line 8
                $context["container"] = twig_array_merge((isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 8, $this->source); })()), [0 => "editing"]);
            }
            // line 10
            if ($this->env->getFunction('app_user_restore_mode')->getCallable()()) {
                // line 11
                $context["container"] = twig_array_merge((isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 11, $this->source); })()), [0 => "restoring"]);
            }
        }
        // line 15
        $context["config_jump_mark_items"] = [];
        // line 16
        echo "
<div class=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 17, $this->source); })()), " "), "html", null, true);
        echo "\" ";
        if ((isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 17, $this->source); })())) {
            echo "data-sort=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_sort_category", ["_slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 17, $this->source); })()), "category", [], "any", false, false, false, 17), "slug", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\"";
        }
        echo ">

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                ";
        // line 22
        $context["count"] = $this->extensions['AppBundle\Services\Twig\DashboardTwigExtension']->getElementCount((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 22, $this->source); })()));
        // line 24
        if (((isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 24, $this->source); })()) && (0 < (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 24, $this->source); })())))) {
            // line 25
            $context["category"] = twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25);
            // line 26
            $context["position_displayed"] = 0;
            // line 28
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 28, $this->source); })()) - 1);
            // line 29
            $context["first"] = true;
            // line 30
            echo "<ul class=\"list-unstyled\">
                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 31, $this->source); })())));
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
            foreach ($context['_seq'] as $context["_key"] => $context["offset"]) {
                // line 32
                $context["element"] = $this->extensions['AppBundle\Twig\CategoryTwigExtension']->getElement((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 32, $this->source); })()), $context["offset"]);
                // line 33
                if (( -$this->extensions['AppBundle\Twig\ElementTwigExtension']->isAllowed((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 33, $this->source); })())) && $this->extensions['AppBundle\Twig\ElementTwigExtension']->hasLanguage((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 33, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33)))) {
                    // line 35
                    if ((("headline" == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 35, $this->source); })()), "originalType", [], "any", false, false, false, 35)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 35, $this->source); })()), "originalElement", [], "any", false, false, false, 35), "boolean1", [], "any", false, false, false, 35))) {
                        // line 36
                        $context["config_jump_mark_items"] = twig_array_merge((isset($context["config_jump_mark_items"]) || array_key_exists("config_jump_mark_items", $context) ? $context["config_jump_mark_items"] : (function () { throw new RuntimeError('Variable "config_jump_mark_items" does not exist.', 36, $this->source); })()), [0 => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 36, $this->source); })())]);
                    }
                    // line 39
                    if ((twig_constant("AppBundle\\Entity\\Dashboard::TYPE_INDEX") == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 39, $this->source); })()))) {
                        // line 40
                        $context["path_reload"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_ajax_get_dashboard", ["randomId" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 40, $this->source); })()), "randomId", [], "any", false, false, false, 40)]);
                    } else {
                        // line 42
                        $context["path_reload"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_ajax_get", ["randomId" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 42, $this->source); })()), "randomId", [], "any", false, false, false, 42)]);
                    }
                    // line 45
                    echo "<li class=\"";
                    $this->loadTemplate("@App/element/smart_block/_list/element_class.html.twig", "@App/Default/index_dynamic.html.twig", 45)->display(twig_array_merge($context, ["first" => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 45, $this->source); })())]));
                    echo ((twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 45, $this->source); })()), "deleted", [], "any", false, false, false, 45)) ? (" deleted") : (""));
                    echo "\" ";
                    echo $this->extensions['AppBundle\Twig\ElementTwigExtension']->getAttributes((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 45, $this->source); })()));
                    echo "
                                    data-reload=\"";
                    // line 46
                    echo twig_escape_filter($this->env, (isset($context["path_reload"]) || array_key_exists("path_reload", $context) ? $context["path_reload"] : (function () { throw new RuntimeError('Variable "path_reload" does not exist.', 46, $this->source); })()), "html", null, true);
                    echo "\"";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
                        echo " data-preview=\"";
                        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_ajax_preview", ["randomId" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 46, $this->source); })()), "randomId", [], "any", false, false, false, 46)]), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                                    ";
                    // line 47
                    if ((true == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 47, $this->source); })()), "deleted", [], "any", false, false, false, 47))) {
                        // line 48
                        echo "                                        <div class=\"deleted-overlay\">
                                        </div>
                                    ";
                    }
                    // line 52
                    $context["position_displayed"] = ((isset($context["position_displayed"]) || array_key_exists("position_displayed", $context) ? $context["position_displayed"] : (function () { throw new RuntimeError('Variable "position_displayed" does not exist.', 52, $this->source); })()) + 1);
                    // line 53
                    $context["element_position_name"] = twig_sprintf("%02d", (isset($context["position_displayed"]) || array_key_exists("position_displayed", $context) ? $context["position_displayed"] : (function () { throw new RuntimeError('Variable "position_displayed" does not exist.', 53, $this->source); })()));
                    // line 54
                    $this->loadTemplate("@App/element/smart_block/list_item.html.twig", "@App/Default/index_dynamic.html.twig", 54)->display($context);
                    // line 56
                    $context["position"] = twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 56, $this->source); })()), "position", [], "any", false, false, false, 56);
                    // line 57
                    echo "                                </li>";
                    // line 59
                    $context["first"] = false;
                }
                // line 61
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                    </ul>";
        } else {
            // line 66
            echo "<div class=\"text-center m--margin-25\">";
            // line 67
            $this->loadTemplate("@App/empty.html.twig", "@App/Default/index_dynamic.html.twig", 67)->display(twig_array_merge($context, ["message" => "elements_missing"]));
            // line 69
            if ($this->extensions['AppBundle\Twig\UserTwigExtension']->getFunctionSmartEditGranted()) {
                // line 70
                echo "<div class=\"text-center wd--smart-add\">
                                <p class=\"mt-4\">
                                    <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_dashboard_create", ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 72, $this->source); })()), "_space" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 72), "get", [0 => "_space"], "method", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 72), "get", [0 => "_space"], "method", false, false, false, 72), twig_constant("AppBundle\\Entity\\Space::SLUG_NONE"))) : (twig_constant("AppBundle\\Entity\\Space::SLUG_NONE")))]), "html", null, true);
                echo "\"
                                       class=\"element__add_button btn btn-brand is-link is-link--dialog\" data-dialog-class=\"dialog--f85aa5b2\" data-dialog-center=\"false\">
                                        <i class=\"material-symbols-sharp\">add</i> ";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element_create_first"), "html", null, true);
                echo "
                                    </a>
                                </p>
                            </div>";
            }
            // line 79
            echo "</div>";
        }
        // line 82
        echo "</div>

        </div>
    </div>";
        // line 87
        $this->loadTemplate("@App/category/_parcels/edit_toggle.html.twig", "@App/Default/index_dynamic.html.twig", 87)->display(twig_array_merge($context, ["category" => (((isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 87, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 87, $this->source); })()), "category", [], "any", false, false, false, 87)) : (null))]));
        // line 88
        echo "</div>";
        // line 95
        $this->loadTemplate("@App/_components/smart/jump_marks.html.twig", "@App/Default/index_dynamic.html.twig", 95)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/index_dynamic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 95,  217 => 88,  215 => 87,  210 => 82,  207 => 79,  200 => 74,  195 => 72,  191 => 70,  189 => 69,  187 => 67,  185 => 66,  182 => 62,  168 => 61,  165 => 59,  163 => 57,  161 => 56,  159 => 54,  157 => 53,  155 => 52,  150 => 48,  148 => 47,  138 => 46,  130 => 45,  127 => 42,  124 => 40,  122 => 39,  119 => 36,  117 => 35,  115 => 33,  113 => 32,  96 => 31,  93 => 30,  91 => 29,  89 => 28,  87 => 26,  85 => 25,  83 => 24,  81 => 22,  67 => 17,  64 => 16,  62 => 15,  58 => 11,  56 => 10,  53 => 8,  51 => 7,  49 => 5,  47 => 4,  45 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set dashboard = type|app_dashboard -%}

{%- set container = ['wd--smart'] -%}
{%- if app_user_smart_edit_granted() -%}
    {%- set container = container|merge(['is-writing']) -%}

    {%- if app_user_edit_mode() -%}
        {%- set container = container|merge(['editing']) -%}
    {%- endif -%}
    {%- if app_user_restore_mode() -%}
        {%- set container = container|merge(['restoring']) -%}
    {%- endif -%}
{%- endif -%}

{%- set config_jump_mark_items = [] %}

<div class=\"{{ container|join(' ') }}\" {% if dashboard %}data-sort=\"{{ path('app_element_sort_category', {'_slug':dashboard.category.slug}) }}\"{% endif %}>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                {% set count = type|app_dashboard_element_count %}

                {%- if dashboard and 0 < count -%}
                    {%- set category = dashboard.category -%}
                    {%- set position_displayed = 0 -%}

                    {%- set count = count - 1 -%}
                    {%- set first = true -%}
                    <ul class=\"list-unstyled\">
                        {% for offset in 0..count %}
                            {%- set element = category|app_category_element(offset) -%}
                            {% if- element|app_element_is_allowed and element|app_element_has_language(app.request) -%}

                                {%- if 'headline' == element.originalType  and not element.originalElement.boolean1 -%}
                                    {%- set config_jump_mark_items = config_jump_mark_items|merge([element]) -%}
                                {%- endif -%}

                                {%- if constant('AppBundle\\\\Entity\\\\Dashboard::TYPE_INDEX') == type %}
                                    {%- set path_reload = path_without_space('app_element_ajax_get_dashboard', {'randomId':element.randomId}) -%}
                                {%- else -%}
                                    {%- set path_reload = path_without_space('app_element_ajax_get', {'randomId':element.randomId}) -%}
                                {%- endif -%}

                                <li class=\"{% include \"@App/element/smart_block/_list/element_class.html.twig\" with {'first':first} %}{{ element.deleted ? ' deleted' }}\" {{ element|app_element_attributes|raw }}
                                    data-reload=\"{{ path_reload }}\"{% if is_granted('ROLE_EDITOR') %} data-preview=\"{{ path('app_element_ajax_preview', {'randomId':element.randomId}) }}\"{% endif %}>
                                    {% if true == element.deleted %}
                                        <div class=\"deleted-overlay\">
                                        </div>
                                    {% endif %}

                                    {%- set position_displayed = position_displayed + 1 -%}
                                    {%- set element_position_name = \"%02d\"|format(position_displayed) -%}
                                    {%- include \"@App/element/smart_block/list_item.html.twig\" -%}

                                    {% set position = element.position %}
                                </li>

                                {%- set first = false -%}
                            {% endif %}
                        {% endfor %}
                    </ul>


                {%- else -%}
                    <div class=\"text-center m--margin-25\">
                        {%- include \"@App/empty.html.twig\" with {'message': 'elements_missing' } -%}

                        {%- if app_user_smart_edit_granted() -%}
                            <div class=\"text-center wd--smart-add\">
                                <p class=\"mt-4\">
                                    <a href=\"{{ path('app_dashboard_create', {'type':type, '_space': app.request.get('_space')|default(constant('AppBundle\\\\Entity\\\\Space::SLUG_NONE')) }) }}\"
                                       class=\"element__add_button btn btn-brand is-link is-link--dialog\" data-dialog-class=\"dialog--f85aa5b2\" data-dialog-center=\"false\">
                                        <i class=\"material-symbols-sharp\">add</i> {{ 'element_create_first'|trans }}
                                    </a>
                                </p>
                            </div>
                        {%- endif -%}
                    </div>
                {%- endif -%}

            </div>

        </div>
    </div>

    {%- include \"@App/category/_parcels/edit_toggle.html.twig\" with {'category':(dashboard ? dashboard.category : null)} -%}
</div>

{#-
-------------------
Jump Marks
-------------------
#}
{%- include \"@App/_components/smart/jump_marks.html.twig\" -%}", "@App/Default/index_dynamic.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/Default/index_dynamic.html.twig");
    }
}
