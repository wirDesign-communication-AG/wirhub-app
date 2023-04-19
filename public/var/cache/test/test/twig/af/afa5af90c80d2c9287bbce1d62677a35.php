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

/* @App/element/toolbar/buttons_default.html.twig */
class __TwigTemplate_53cda2edfa62feb9296fc4eb5423de07 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/toolbar/buttons_default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/toolbar/buttons_default.html.twig"));

        // line 1
        if ((array_key_exists("is_dropdown_item", $context) && (isset($context["is_dropdown_item"]) || array_key_exists("is_dropdown_item", $context) ? $context["is_dropdown_item"] : (function () { throw new RuntimeError('Variable "is_dropdown_item" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    ";
            $context["tooltip_placement"] = "right";
            // line 3
            $context["btn_class"] = ("dropdown-item " . (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 3, $this->source); })()));
        } else {
            // line 5
            echo "    ";
            $context["tooltip_placement"] = "top";
        }
        // line 9
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_clipboard_cut", ["randomId" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 9, $this->source); })()), "randomId", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " visible-is-cut is-tooltip\" data-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\" data-placement=\"";
        echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\"
   data-module=\"smartBlock/feature/Cut\"><i class=\"material-symbols-sharp\">content_cut</i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cancel_cutting"), "html", null, true);
        echo "
</a>";
        // line 14
        echo "<a href=\"javascript:void(0)\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " editor--sidebar-tune is-tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("quick_edit"), "html", null, true);
        echo "\" data-placement=\"";
        echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\">
    <i class=\"material-symbols-sharp\">tune</i></a>";
        // line 17
        if (((twig_get_attribute($this->env, $this->source, (isset($context["element_to_edit"]) || array_key_exists("element_to_edit", $context) ? $context["element_to_edit"] : (function () { throw new RuntimeError('Variable "element_to_edit" does not exist.', 17, $this->source); })()), "editable", [], "any", false, false, false, 17) &&  !(isset($context["is_dashboard_spaces"]) || array_key_exists("is_dashboard_spaces", $context) ? $context["is_dashboard_spaces"] : (function () { throw new RuntimeError('Variable "is_dashboard_spaces" does not exist.', 17, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 17, $this->source); })()), "category", [], "any", false, false, false, 17), "space", [], "any", false, false, false, 17))) {
            // line 18
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_edit_full_size", ["_element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 18, $this->source); })()), "randomId", [], "any", false, false, false, 18), "category" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18), "_space" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 18, $this->source); })()), "category", [], "any", false, false, false, 18), "space", [], "any", false, false, false, 18), "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" data-hidden=\"invisible\"
       title=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 19, $this->source); })()), "html", null, true);
            echo " element__edit is-tooltip\" data-placement=\"";
            echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\">
        <i class=\"material-symbols-sharp\">edit</i>
    </a>
";
        }
        // line 25
        if (((isset($context["has_button_copy"]) || array_key_exists("has_button_copy", $context) ? $context["has_button_copy"] : (function () { throw new RuntimeError('Variable "has_button_copy" does not exist.', 25, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 25, $this->source); })()), "original", [], "any", false, false, false, 25))) {
            // line 26
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_clipboard_copy", ["randomId" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 26, $this->source); })()), "randomId", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 26, $this->source); })()), "html", null, true);
            echo " is-tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("copy"), "html", null, true);
            echo "\" data-placement=\"";
            echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "\"
       data-module=\"smartBlock/feature/Copy\"><i class=\"material-symbols-sharp\">file_copy</i> </a>";
        }
        // line 31
        if ((isset($context["has_button_cut"]) || array_key_exists("has_button_cut", $context) ? $context["has_button_cut"] : (function () { throw new RuntimeError('Variable "has_button_cut" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_clipboard_cut", ["randomId" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 32, $this->source); })()), "randomId", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 32, $this->source); })()), "html", null, true);
            echo " is-tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cut"), "html", null, true);
            echo "\" data-placement=\"";
            echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\"
       data-module=\"smartBlock/feature/Cut\" data-id=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\"><i class=\"material-symbols-sharp\">content_cut</i> </a>";
        }
        // line 37
        if (("" != twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 37, $this->source); })()), "language", [], "any", false, false, false, 37))) {
            // line 38
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_translate", ["element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 38, $this->source); })()), "randomId", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 38, $this->source); })()), "html", null, true);
            echo " is-link is-link--dialog is-tooltip\" data-dialog=\"form\" data-placement=\"";
            echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "\"
       title=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translate"), "html", null, true);
            echo "\" data-dialog-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translate"), "html", null, true);
            echo "\"><i class=\"material-symbols-sharp\">translate</i></a>";
        }
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 43, $this->source); })()), "original", [], "any", false, false, false, 43)) {
            // line 44
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 44, $this->source); })()), "original", [], "any", false, false, false, 44), "category", [], "any", false, false, false, 44), "space", [], "any", false, false, false, 44)) {
                // line 45
                $context["path_original_category"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_category_index", ["_space" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 45, $this->source); })()), "original", [], "any", false, false, false, 45), "category", [], "any", false, false, false, 45), "space", [], "any", false, false, false, 45), "slug", [], "any", false, false, false, 45), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 45, $this->source); })()), "original", [], "any", false, false, false, 45), "category", [], "any", false, false, false, 45), "slug", [], "any", false, false, false, 45)]);
            } else {
                // line 47
                $context["path_original_category"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_index");
            }
            // line 49
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["path_original_category"]) || array_key_exists("path_original_category", $context) ? $context["path_original_category"] : (function () { throw new RuntimeError('Variable "path_original_category" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 49, $this->source); })()), "original", [], "any", false, false, false, 49), "randomId", [], "any", false, false, false, 49), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 49, $this->source); })()), "category", [], "any", false, false, false, 49) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 49, $this->source); })()), "original", [], "any", false, false, false, 49), "category", [], "any", false, false, false, 49))) {
                echo "_container";
            }
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 49, $this->source); })()), "html", null, true);
            echo " is-tooltip\"
       title=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show_original"), "html", null, true);
            echo "\" data-placement=\"";
            echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\"><i class=\"material-symbols-sharp\">arrow_forward</i></a>";
        }
        // line 54
        if (((isset($context["is_alias"]) || array_key_exists("is_alias", $context) ? $context["is_alias"] : (function () { throw new RuntimeError('Variable "is_alias" does not exist.', 54, $this->source); })()) || (isset($context["has_aliases"]) || array_key_exists("has_aliases", $context) ? $context["has_aliases"] : (function () { throw new RuntimeError('Variable "has_aliases" does not exist.', 54, $this->source); })()))) {
            // line 55
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_alias_relations", ["_randomId" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 55, $this->source); })()), "randomId", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 55, $this->source); })()), "html", null, true);
            echo " is-link is-link--dialog is-tooltip\"
       data-placement=\"";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("relations"), "html", null, true);
            echo "\" data-dialog-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("relations"), "html", null, true);
            echo "\"><i class=\"material-symbols-sharp\">warning</i></a>
";
        }
        // line 60
        if ((isset($context["has_button_delete"]) || array_key_exists("has_button_delete", $context) ? $context["has_button_delete"] : (function () { throw new RuntimeError('Variable "has_button_delete" does not exist.', 60, $this->source); })())) {
            // line 61
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_delete", ["element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 61, $this->source); })()), "randomId", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 61, $this->source); })()), "html", null, true);
            echo " is-link is-link--dialog is-tooltip\"
       data-placement=\"";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 62, $this->source); })()), "html", null, true);
            echo "\" data-dialog-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
            echo "\" data-dialog=\"form\"><i class=\"material-symbols-sharp\">delete</i></a>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/toolbar/buttons_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 62,  193 => 61,  191 => 60,  182 => 56,  175 => 55,  173 => 54,  167 => 50,  155 => 49,  152 => 47,  149 => 45,  147 => 44,  145 => 43,  139 => 39,  130 => 38,  128 => 37,  124 => 33,  113 => 32,  111 => 31,  99 => 26,  97 => 25,  86 => 19,  81 => 18,  79 => 17,  70 => 14,  66 => 10,  55 => 9,  51 => 5,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_dropdown_item is defined and is_dropdown_item %}
    {% set tooltip_placement = 'right' %}
    {%- set btn_class = 'dropdown-item ' ~ btn_class %}
{% else %}
    {% set tooltip_placement = 'top' %}
{% endif %}

{#- Undo cut #}
<a href=\"{{ path('app_element_clipboard_cut', {'randomId':element.randomId}) }}\" class=\"{{ btn_class }} visible-is-cut is-tooltip\" data-id=\"{{ element.id }}\" data-placement=\"{{ tooltip_placement }}\"
   data-module=\"smartBlock/feature/Cut\"><i class=\"material-symbols-sharp\">content_cut</i> {{ 'cancel_cutting'|trans }}
</a>

{#- Edit #}
<a href=\"javascript:void(0)\" class=\"{{ btn_class }} editor--sidebar-tune is-tooltip\" title=\"{{ 'quick_edit'|trans }}\" data-placement=\"{{ tooltip_placement }}\">
    <i class=\"material-symbols-sharp\">tune</i></a>

{%- if element_to_edit.editable and not is_dashboard_spaces and element.category.space -%}
    <a href=\"{{ path('app_element_edit_full_size', {'_element':element.randomId, 'category':category.slug, '_space': element.category.space.slug}) }}\" data-hidden=\"invisible\"
       title=\"{{ 'edit'|trans }}\" class=\"{{ btn_class }} element__edit is-tooltip\" data-placement=\"{{ tooltip_placement }}\">
        <i class=\"material-symbols-sharp\">edit</i>
    </a>
{% endif %}

{#- Copy #}
{%- if has_button_copy and not element.original -%}
    <a href=\"{{ path('app_element_clipboard_copy', {'randomId': element.randomId}) }}\" class=\"{{ btn_class }} is-tooltip\" title=\"{{ 'copy'|trans }}\" data-placement=\"{{ tooltip_placement }}\"
       data-module=\"smartBlock/feature/Copy\"><i class=\"material-symbols-sharp\">file_copy</i> </a>
{%- endif -%}

{#- Cut #}
{%- if has_button_cut -%}
    <a href=\"{{ path('app_element_clipboard_cut', {'randomId':element.randomId}) }}\" class=\"{{ btn_class }} is-tooltip\" title=\"{{ 'cut'|trans }}\" data-placement=\"{{ tooltip_placement }}\"
       data-module=\"smartBlock/feature/Cut\" data-id=\"{{ element.id }}\"><i class=\"material-symbols-sharp\">content_cut</i> </a>
{%- endif -%}

{#- Translation #}
{%- if '' != element.language -%}
    <a href=\"{{ path('app_element_translate', {element:element.randomId}) }}\" class=\"{{ btn_class }} is-link is-link--dialog is-tooltip\" data-dialog=\"form\" data-placement=\"{{ tooltip_placement }}\"
       title=\"{{ 'translate'|trans }}\" data-dialog-title=\"{{ 'translate'|trans }}\"><i class=\"material-symbols-sharp\">translate</i></a>
{%- endif -%}

{#- Show original #}
{%- if element.original -%}
    {%- if element.original.category.space -%}
        {%- set path_original_category = path_without_space('app_category_index', {'_space': element.original.category.space.slug, 'slug':element.original.category.slug}) -%}
    {%- else -%}
        {%- set path_original_category = path_without_space('app_default_index') -%}
    {%- endif -%}
    <a href=\"{{ path_original_category }}#{{ element.original.randomId }}{% if element.category == element.original.category %}_container{% endif %}\" class=\"{{ btn_class }} is-tooltip\"
       title=\"{{ 'show_original'|trans }}\" data-placement=\"{{ tooltip_placement }}\"><i class=\"material-symbols-sharp\">arrow_forward</i></a>
{%- endif -%}

{#- Warning: Alias #}
{% if is_alias or has_aliases %}
    <a href=\"{{ path_without_space('app_element_alias_relations', {'_randomId':element.randomId}) }}\" class=\"{{ btn_class }} is-link is-link--dialog is-tooltip\"
       data-placement=\"{{ tooltip_placement }}\" title=\"{{ 'relations'|trans }}\" data-dialog-title=\"{{ 'relations'|trans }}\"><i class=\"material-symbols-sharp\">warning</i></a>
{% endif %}

{#- Delete button (e.g. Dashboard Spaces) #}
{%- if has_button_delete -%}
    <a href=\"{{ path('app_element_delete', {'element':element.randomId}) }}\" title=\"{{ 'delete'|trans }}\" class=\"{{ btn_class }} is-link is-link--dialog is-tooltip\"
       data-placement=\"{{ tooltip_placement }}\" data-dialog-title=\"{{ 'delete'|trans }}\" data-dialog=\"form\"><i class=\"material-symbols-sharp\">delete</i></a>
{%- endif -%}", "@App/element/toolbar/buttons_default.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/toolbar/buttons_default.html.twig");
    }
}
