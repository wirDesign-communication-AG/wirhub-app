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

/* @App/category/_parcels/edit_toggle.html.twig */
class __TwigTemplate_7a55933fa5a3cc2305875ecde63e07ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/category/_parcels/edit_toggle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/category/_parcels/edit_toggle.html.twig"));

        // line 1
        $context["show_category_approval"] = ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 1, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 1, $this->source); })()), "approval", [], "any", false, false, false, 1)) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 1, $this->source); })()), "approval", [], "any", false, false, false, 1), "rejectedAt", [], "any", false, false, false, 1) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 1, $this->source); })()), "approval", [], "any", false, false, false, 1), "approvedAt", [], "any", false, false, false, 1)));
        // line 3
        if ($this->extensions['AppBundle\Twig\UserTwigExtension']->getFunctionSmartEditGranted()) {
            // line 5
            $context["restoreMode"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "session", [], "any", false, false, false, 5), "get", [0 => $this->extensions['AppBundle\Twig\PhpTwigExtension']->getFunctionEnumSession("APP_SMART_EDIT_RESTORE_MODE"), 1 => false], "method", false, false, false, 5);
            // line 6
            echo "<div class=\"wd--edit-toggle flex-column align-items-center justify-content-end\">";
            // line 8
            echo "        <a href=\"javascript:void(0)\" class=\"wd--edit-toggle_warning is-link is-link--dialog bubble small invisible\" data-type=\"alert\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hint"), "html", null, true);
            echo "\">
            <i class=\"material-symbols-sharp small\">error</i></a>";
            // line 12
            $context["user_groups"] = $this->extensions['AppBundle\Twig\UserTwigExtension']->getFunctionGroups();
            // line 13
            if ((0 < twig_length_filter($this->env, (isset($context["user_groups"]) || array_key_exists("user_groups", $context) ? $context["user_groups"] : (function () { throw new RuntimeError('Variable "user_groups" does not exist.', 13, $this->source); })())))) {
                // line 14
                echo "<div class=\"dropdown dropleft\">
                <a href=\"javascript:void(0)\" class=\"bubble small display-flex-on-editing has-tooltip\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"material-symbols-sharp small\">manage_accounts</i>
                </a>
                <div class=\"dropdown-menu\">
                    <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_user_impersonate"), "html", null, true);
                echo "\" class=\"dropdown-item\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("without_group"), "html", null, true);
                echo "</a>
                    <div class=\"dropdown-divider\"></div>";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["user_groups"]) || array_key_exists("user_groups", $context) ? $context["user_groups"] : (function () { throw new RuntimeError('Variable "user_groups" does not exist.', 21, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_user_impersonate_group", ["group" => twig_get_attribute($this->env, $this->source, $context["group"], "slug", [], "any", false, false, false, 21)]), "html", null, true);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 21), "html", null, true);
                    echo "</a>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "</div>
            </div>";
            } else {
                // line 25
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_user_impersonate"), "html", null, true);
                echo "\" class=\"bubble small display-flex-on-editing has-tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("impersonate_default"), "html", null, true);
                echo "\" data-placement=\"left\">
                <i class=\"material-symbols-sharp small\">manage_accounts</i></a>";
            }
            // line 30
            $context["locales"] = $this->extensions['AppBundle\Twig\SettingTwigExtension']->getFunctionLocales();
            // line 31
            if (((0 < twig_length_filter($this->env, (isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 31, $this->source); })()))) && (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 31, $this->source); })()))) {
                // line 32
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_category_translate_tools", ["category" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 32, $this->source); })()), "slug", [], "any", false, false, false, 32), "_space" => $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getCurrentSpaceSlug()]), "html", null, true);
                echo "\" data-placement=\"left\"
               class=\"bubble small display-flex-on-editing has-tooltip is-link is-link--dialog is-tooltip\" title=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translation"), "html", null, true);
                echo "\" data-dialog-title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translation"), "html", null, true);
                echo "\">
                <i class=\"material-symbols-sharp small\">translate</i></a>";
            }
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_default_toggle_restore"), "html", null, true);
            echo "\" class=\"wd--restore-toggle_link bubble small display-flex-on-editing has-tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("restore"), "html", null, true);
            echo "\" data-placement=\"left\">
            <i class=\"material-symbols-sharp small";
            // line 39
            echo (((isset($context["restoreMode"]) || array_key_exists("restoreMode", $context) ? $context["restoreMode"] : (function () { throw new RuntimeError('Variable "restoreMode" does not exist.', 39, $this->source); })())) ? (" text-primary") : (""));
            echo "\">restore</i></a>";
            // line 42
            if ((((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 42, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 42, $this->source); })()), "hidden", [], "any", false, false, false, 42)) && $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_APPROVAL_CATEGORY_ENABLED")))) {
                // line 43
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 44
                    if ((isset($context["show_category_approval"]) || array_key_exists("show_category_approval", $context) ? $context["show_category_approval"] : (function () { throw new RuntimeError('Variable "show_category_approval" does not exist.', 44, $this->source); })())) {
                        // line 45
                        echo "<a href=\"javascript:void(0)\" class=\"bubble small has-tooltip highlight d-none category-approval\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("process_request"), "html", null, true);
                        echo "\" data-placement=\"left\">
                        <i class=\"material-symbols-sharp small\">visibility</i></a>";
                    }
                } else {
                    // line 49
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 49, $this->source); })()), "approval", [], "any", false, false, false, 49) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 49, $this->source); })()), "approval", [], "any", false, false, false, 49), "rejectedAt", [], "any", false, false, false, 49))) {
                        // line 50
                        echo "<span class=\"bubble small display-flex-on-editing has-tooltip disabled material-symbols-sharp\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("approval_in_progress"), "html", null, true);
                        echo "\"
                          data-placement=\"left\">approval_delegation</span>";
                    } else {
                        // line 53
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_category_approval_request", ["_slug" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 53, $this->source); })()), "slug", [], "any", false, false, false, 53)]), "html", null, true);
                        echo "\" class=\"bubble small display-flex-on-editing has-tooltip is-link is-link--dialog highlight\"
                       data-dialog=\"form\" data-dialog-title=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("request_approval"), "html", null, true);
                        echo "\" data-button-save=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("send_request"), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("request_approval"), "html", null, true);
                        echo "\" data-placement=\"left\">
                        <i class=\"material-symbols-sharp small\">approval_delegation</i></a>";
                    }
                }
            }
            // line 61
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_ajax_toggle_edit_mode"), "html", null, true);
            echo "\" class=\"is-link smart--edit bubble has-tooltip highlight\" data-edit=\"toggle\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
            echo "\"
           data-placement=\"left\" data-module=\"smartBlock/feature/Edit\" data-shortcut=\"shift+e\"><i class=\"material-symbols-sharp\">edit</i>
        </a>";
            // line 66
            $context["sidebar_is_hidden"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "session", [], "any", false, false, false, 66), "get", [0 => $this->extensions['AppBundle\Twig\PhpTwigExtension']->getFunctionEnumSession("APP_SMART_SIDEBAR_TOGGLE")], "method", false, false, false, 66);
            // line 67
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_ajax_toggle_sidebar"), "html", null, true);
            echo "\" class=\"is-link smart--edit bubble small display-flex-on-editing has-tooltip\" data-edit=\"toggle-sidebar\" data-placement=\"left\"
           data-original-title=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toggle_sidebar"), "html", null, true);
            echo "\" data-module=\"smartBlock/feature/Edit\" data-shortcut=\"shift+s\">";
            // line 69
            $this->loadTemplate("@App/ajax/toggle_sidebar.html.twig", "@App/category/_parcels/edit_toggle.html.twig", 69)->display(twig_array_merge($context, ["hidden" => (isset($context["sidebar_is_hidden"]) || array_key_exists("sidebar_is_hidden", $context) ? $context["sidebar_is_hidden"] : (function () { throw new RuntimeError('Variable "sidebar_is_hidden" does not exist.', 69, $this->source); })())]));
            // line 70
            echo "</a>
    </div>";
            // line 73
            $this->loadTemplate("@App/category/_parcels/edit_sidebar.html.twig", "@App/category/_parcels/edit_toggle.html.twig", 73)->display(twig_array_merge($context, ["hidden" => (isset($context["sidebar_is_hidden"]) || array_key_exists("sidebar_is_hidden", $context) ? $context["sidebar_is_hidden"] : (function () { throw new RuntimeError('Variable "sidebar_is_hidden" does not exist.', 73, $this->source); })())]));
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 76
            echo "    <div class=\"wd--edit-toggle flex-column align-items-center justify-content-end\">
        <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_user_impersonate_back"), "html", null, true);
            echo "\" class=\"bubble has-tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("impersonate_back"), "html", null, true);
            echo "\" data-placement=\"left\">
            <i class=\"material-symbols-sharp\">visibility_off</i>
        </a>
    </div>";
        }
        // line 83
        if ((isset($context["show_category_approval"]) || array_key_exists("show_category_approval", $context) ? $context["show_category_approval"] : (function () { throw new RuntimeError('Variable "show_category_approval" does not exist.', 83, $this->source); })())) {
            // line 84
            echo "<div class=\"snackbar snackbar--full-size snackbar-container snackbar-category-approval\">
        <p>";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("request_for_approval", ["{user}" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 85, $this->source); })()), "approval", [], "any", false, false, false, 85), "createdBy", [], "any", false, false, false, 85)]), "html", null, true);
            echo "</p>
        <div class=\"actions\">
            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_category_approval_approve", ["_slug" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 87, $this->source); })()), "slug", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" class=\"btn btn-icon btn-pill btn-primary\" data-module=\"features/Reload\">
                <i class=\"material-symbols-sharp\">visibility</i>";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("publish_category"), "html", null, true);
            echo "</a>
            <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_category_approval_reject", ["_slug" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 89, $this->source); })()), "slug", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" class=\"btn btn-icon btn-pill btn-secondary is-link is-link--dialog\" data-dialog=\"form\"
               data-dialog-title=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reject_approval"), "html", null, true);
            echo "\" data-button-save=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("send_rejection"), "html", null, true);
            echo "\"><i class=\"material-symbols-sharp\">cancel</i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reject_approval"), "html", null, true);
            echo "</a>
        </div>

        <a href=\"javascript:void(0)\" class=\"link-close\" data-action=\"close\"><i class=\"material-symbols-sharp\">close</i></a>
    </div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/category/_parcels/edit_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 90,  217 => 89,  213 => 88,  209 => 87,  204 => 85,  201 => 84,  199 => 83,  190 => 77,  187 => 76,  184 => 73,  181 => 70,  179 => 69,  176 => 68,  171 => 67,  169 => 66,  161 => 61,  150 => 54,  145 => 53,  139 => 50,  137 => 49,  130 => 45,  128 => 44,  126 => 43,  124 => 42,  121 => 39,  114 => 38,  107 => 33,  102 => 32,  100 => 31,  98 => 30,  90 => 25,  86 => 22,  73 => 21,  67 => 19,  60 => 14,  58 => 13,  56 => 12,  51 => 8,  49 => 6,  47 => 5,  45 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set show_category_approval = (is_granted('ROLE_ADMIN') and category and category.approval and not (category.approval.rejectedAt or category.approval.approvedAt)) -%}

{%- if app_user_smart_edit_granted() -%}
    {#- Editor with writing access #}
    {%- set restoreMode = app.session.get(enum_session('APP_SMART_EDIT_RESTORE_MODE'), false) -%}
    <div class=\"wd--edit-toggle flex-column align-items-center justify-content-end\">
        {#- Optional alert #}
        <a href=\"javascript:void(0)\" class=\"wd--edit-toggle_warning is-link is-link--dialog bubble small invisible\" data-type=\"alert\" title=\"{{ 'hint'|trans }}\">
            <i class=\"material-symbols-sharp small\">error</i></a>

        {#- Impersonate User #}
        {%- set user_groups = app_user_groups() -%}
        {%- if 0 < user_groups|length -%}
            <div class=\"dropdown dropleft\">
                <a href=\"javascript:void(0)\" class=\"bubble small display-flex-on-editing has-tooltip\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"material-symbols-sharp small\">manage_accounts</i>
                </a>
                <div class=\"dropdown-menu\">
                    <a href=\"{{ path_without_space('app_user_impersonate') }}\" class=\"dropdown-item\">{{ 'without_group'|trans }}</a>
                    <div class=\"dropdown-divider\"></div>
                    {%- for group in user_groups %}<a href=\"{{ path_without_space('app_user_impersonate_group', {'group':group.slug}) }}\" class=\"dropdown-item\">{{ group.name }}</a>{% endfor -%}
                </div>
            </div>
        {%- else -%}
            <a href=\"{{ path_without_space('app_user_impersonate') }}\" class=\"bubble small display-flex-on-editing has-tooltip\" title=\"{{ 'impersonate_default'|trans }}\" data-placement=\"left\">
                <i class=\"material-symbols-sharp small\">manage_accounts</i></a>
        {%- endif -%}

        {#- Language switch #}
        {%- set locales = app_setting_locale_all() -%}
        {%- if 0 < locales|length and category -%}
            <a href=\"{{ path('app_category_translate_tools', {'category':category.slug, '_space': app_space_get_current_slug()}) }}\" data-placement=\"left\"
               class=\"bubble small display-flex-on-editing has-tooltip is-link is-link--dialog is-tooltip\" title=\"{{ 'translation'|trans }}\" data-dialog-title=\"{{ 'translation'|trans }}\">
                <i class=\"material-symbols-sharp small\">translate</i></a>
        {%- endif -%}

        {#- Restore deleted SmartBlocks #}
        <a href=\"{{ path('app_default_toggle_restore') }}\" class=\"wd--restore-toggle_link bubble small display-flex-on-editing has-tooltip\" title=\"{{ 'restore'|trans }}\" data-placement=\"left\">
            <i class=\"material-symbols-sharp small{{ restoreMode ? ' text-primary' }}\">restore</i></a>

        {#- Approval #}
        {%- if category and category.hidden and constant('AppBundle\\\\Entity\\\\Config::TYPE_APPROVAL_CATEGORY_ENABLED')|app_config_get_value_by_key -%}
            {%- if is_granted('ROLE_ADMIN') -%}
                {%- if show_category_approval -%}
                    <a href=\"javascript:void(0)\" class=\"bubble small has-tooltip highlight d-none category-approval\" title=\"{{ 'process_request'|trans }}\" data-placement=\"left\">
                        <i class=\"material-symbols-sharp small\">visibility</i></a>
                {%- endif -%}
            {%- else -%}
                {%- if category.approval and not category.approval.rejectedAt -%}
                    <span class=\"bubble small display-flex-on-editing has-tooltip disabled material-symbols-sharp\" title=\"{{ 'approval_in_progress'|trans }}\"
                          data-placement=\"left\">approval_delegation</span>
                {%- else -%}
                    <a href=\"{{ path('app_category_approval_request', {'_slug': category.slug}) }}\" class=\"bubble small display-flex-on-editing has-tooltip is-link is-link--dialog highlight\"
                       data-dialog=\"form\" data-dialog-title=\"{{ 'request_approval'|trans }}\" data-button-save=\"{{ 'send_request'|trans }}\" title=\"{{ 'request_approval'|trans }}\" data-placement=\"left\">
                        <i class=\"material-symbols-sharp small\">approval_delegation</i></a>
                {%- endif -%}
            {%- endif -%}
        {%- endif -%}

        {#- Big: Edit #}
        <a href=\"{{ path_without_space('app_ajax_toggle_edit_mode') }}\" class=\"is-link smart--edit bubble has-tooltip highlight\" data-edit=\"toggle\" data-original-title=\"{{ 'edit'|trans }}\"
           data-placement=\"left\" data-module=\"smartBlock/feature/Edit\" data-shortcut=\"shift+e\"><i class=\"material-symbols-sharp\">edit</i>
        </a>

        {#- Toggle sidebar #}
        {%- set sidebar_is_hidden = app.request.session.get(enum_session('APP_SMART_SIDEBAR_TOGGLE')) -%}
        <a href=\"{{ path_without_space('app_ajax_toggle_sidebar') }}\" class=\"is-link smart--edit bubble small display-flex-on-editing has-tooltip\" data-edit=\"toggle-sidebar\" data-placement=\"left\"
           data-original-title=\"{{ 'toggle_sidebar'|trans }}\" data-module=\"smartBlock/feature/Edit\" data-shortcut=\"shift+s\">
            {%- include \"@App/ajax/toggle_sidebar.html.twig\" with {'hidden': sidebar_is_hidden} -%}
        </a>
    </div>

    {%- include \"@App/category/_parcels/edit_sidebar.html.twig\" with {'hidden': sidebar_is_hidden} -%}
{%- elseif is_granted('ROLE_PREVIOUS_ADMIN') -%}
    {# Switched role #}
    <div class=\"wd--edit-toggle flex-column align-items-center justify-content-end\">
        <a href=\"{{ path_without_space('app_user_impersonate_back') }}\" class=\"bubble has-tooltip\" title=\"{{ 'impersonate_back'|trans }}\" data-placement=\"left\">
            <i class=\"material-symbols-sharp\">visibility_off</i>
        </a>
    </div>
{%- endif -%}

{%- if show_category_approval -%}
    <div class=\"snackbar snackbar--full-size snackbar-container snackbar-category-approval\">
        <p>{{ 'request_for_approval'|trans({'{user}': category.approval.createdBy}) }}</p>
        <div class=\"actions\">
            <a href=\"{{ path('app_category_approval_approve', {'_slug': category.slug}) }}\" class=\"btn btn-icon btn-pill btn-primary\" data-module=\"features/Reload\">
                <i class=\"material-symbols-sharp\">visibility</i>{{- 'publish_category'|trans }}</a>
            <a href=\"{{ path('app_category_approval_reject', {'_slug': category.slug}) }}\" class=\"btn btn-icon btn-pill btn-secondary is-link is-link--dialog\" data-dialog=\"form\"
               data-dialog-title=\"{{ 'reject_approval'|trans }}\" data-button-save=\"{{ 'send_rejection'|trans }}\"><i class=\"material-symbols-sharp\">cancel</i>{{- 'reject_approval'|trans }}</a>
        </div>

        <a href=\"javascript:void(0)\" class=\"link-close\" data-action=\"close\"><i class=\"material-symbols-sharp\">close</i></a>
    </div>
{%- endif -%}
", "@App/category/_parcels/edit_toggle.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/category/_parcels/edit_toggle.html.twig");
    }
}
