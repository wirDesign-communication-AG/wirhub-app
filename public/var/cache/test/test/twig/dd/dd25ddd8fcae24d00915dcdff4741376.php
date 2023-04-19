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

/* @App/element/smart_block/toolbar.html.twig */
class __TwigTemplate_55549b12f6b3540a951af73cf923ffef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/toolbar.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 1, $this->source); })()), "original", [], "any", false, false, false, 1)) {
            // line 2
            $context["element_to_edit"] = twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 2, $this->source); })()), "original", [], "any", false, false, false, 2);
        } else {
            // line 4
            $context["element_to_edit"] = (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 4, $this->source); })());
        }
        // line 7
        if ( !array_key_exists("category", $context)) {
            // line 8
            $context["category"] = twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 8, $this->source); })()), "category", [], "any", false, false, false, 8);
        }
        // line 12
        $context["add_query"] = "";
        // line 14
        $context["is_alias"] = (twig_constant("AppBundle\\Entity\\Element::TYPE_ALIAS") == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 14, $this->source); })()), "type", [], "any", false, false, false, 14));
        // line 15
        $context["is_dashboard_spaces"] = (twig_constant("AppBundle\\Entity\\Category::TYPE_DASHBOARD_SPACES") == twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15));
        // line 16
        $context["is_in_column"] = (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 16, $this->source); })()), "parent", [], "any", false, false, false, 16) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 16, $this->source); })()), "parent", [], "any", false, false, false, 16), "typeInChain", [0 => twig_constant("AppBundle\\Entity\\Element::TYPE_COLUMNS")], "method", false, false, false, 16));
        // line 18
        $context["has_aliases"] = (0 < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 18, $this->source); })()), "aliases", [], "any", false, false, false, 18)));
        // line 20
        $context["has_button_copy"] = true;
        // line 21
        $context["has_button_cut"] = true;
        // line 22
        $context["has_button_delete"] = false;
        // line 24
        $context["has_option_history"] =  !(isset($context["is_dashboard_spaces"]) || array_key_exists("is_dashboard_spaces", $context) ? $context["is_dashboard_spaces"] : (function () { throw new RuntimeError('Variable "is_dashboard_spaces" does not exist.', 24, $this->source); })());
        // line 25
        $context["has_option_share"] =  !(isset($context["is_dashboard_spaces"]) || array_key_exists("is_dashboard_spaces", $context) ? $context["is_dashboard_spaces"] : (function () { throw new RuntimeError('Variable "is_dashboard_spaces" does not exist.', 25, $this->source); })());
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 28, $this->source); })()), "parent", [], "any", false, false, false, 28) && ("headline" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 28, $this->source); })()), "parent", [], "any", false, false, false, 28), "type", [], "any", false, false, false, 28)))) {
            // line 29
            $context["add_query"] = ("&parent=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 29, $this->source); })()), "parent", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29));
        }
        // line 32
        $context["btn_class"] = "m-btn btn btn-secondary";
        // line 33
        echo "<div class=\"element-toolbar on-hover";
        if (((isset($context["has_aliases"]) || array_key_exists("has_aliases", $context) ? $context["has_aliases"] : (function () { throw new RuntimeError('Variable "has_aliases" does not exist.', 33, $this->source); })()) || (isset($context["is_alias"]) || array_key_exists("is_alias", $context) ? $context["is_alias"] : (function () { throw new RuntimeError('Variable "is_alias" does not exist.', 33, $this->source); })()))) {
            echo " element-toolbar--danger";
        }
        if ((isset($context["is_in_column"]) || array_key_exists("is_in_column", $context) ? $context["is_in_column"] : (function () { throw new RuntimeError('Variable "is_in_column" does not exist.', 33, $this->source); })())) {
            echo " element-toolbar--column";
        }
        echo "\">
    <div class=\"btn-toolbar\">";
        // line 36
        if (( !twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 36, $this->source); })()), "deleted", [], "any", false, false, false, 36) &&  !(isset($context["is_in_column"]) || array_key_exists("is_in_column", $context) ? $context["is_in_column"] : (function () { throw new RuntimeError('Variable "is_in_column" does not exist.', 36, $this->source); })()))) {
            // line 37
            $this->loadTemplate("@App/element/toolbar/add.html.twig", "@App/element/smart_block/toolbar.html.twig", 37)->display($context);
        }
        // line 40
        if ( !(isset($context["is_in_column"]) || array_key_exists("is_in_column", $context) ? $context["is_in_column"] : (function () { throw new RuntimeError('Variable "is_in_column" does not exist.', 40, $this->source); })())) {
            // line 42
            echo "            <div class=\"btn-group m-btn-group m-btn-group--air mr-2\">";
            // line 43
            $this->loadTemplate("@App/element/toolbar/label.html.twig", "@App/element/smart_block/toolbar.html.twig", 43)->display($context);
            // line 45
            if ((true == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 45, $this->source); })()), "deleted", [], "any", false, false, false, 45))) {
                // line 46
                $this->loadTemplate("@App/element/toolbar/button_restore.html.twig", "@App/element/smart_block/toolbar.html.twig", 46)->display($context);
            } else {
                // line 48
                $this->loadTemplate("@App/element/toolbar/buttons_default.html.twig", "@App/element/smart_block/toolbar.html.twig", 48)->display($context);
                // line 49
                echo "
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 51, $this->source); })()), "html", null, true);
                echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"material-symbols-sharp\">more_vert</i>
                        </button>
                        <div class=\"dropdown-menu\">";
                // line 55
                $this->loadTemplate("@App/element/toolbar/buttons_advanced.html.twig", "@App/element/smart_block/toolbar.html.twig", 55)->display($context);
                // line 56
                echo "                        </div>
                    </div>
                ";
            }
            // line 59
            echo "            </div>";
            // line 62
            echo "<div class=\"btn-group m-btn-group m-btn-group--air mr-2\">
                <button type=\"button\" class=\"";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 63, $this->source); })()), "html", null, true);
            echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"material-symbols-sharp\">visibility</i>
                </button>
                <div class=\"dropdown-menu\">";
            // line 68
            if (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 68, $this->source); })()), "translatable", [], "any", false, false, false, 68)) {
                // line 69
                $context["locales"] = $this->extensions['AppBundle\Twig\SettingTwigExtension']->getFunctionLocales();
                // line 70
                if ((0 < twig_length_filter($this->env, (isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 70, $this->source); })())))) {
                    // line 71
                    $context["locale_default"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "defaultLocale", [], "any", false, false, false, 71);
                    // line 72
                    if ( !array_key_exists("locale_current", $context)) {
                        // line 73
                        $context["locale_current"] = $this->extensions['AppBundle\Services\Twig\LocaleTwigExtension']->getFilterLocaleCurrent(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73));
                    }
                    // line 76
                    echo "<h6 class=\"dropdown-header\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("languages"), "html", null, true);
                    echo "</h6>

                            <form class=\"m-form\" action=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_edit_visibility_language", ["_randomId" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 78, $this->source); })()), "randomId", [], "any", false, false, false, 78)]), "html", null, true);
                    echo "\" data-locale=\"";
                    echo twig_escape_filter($this->env, (isset($context["locale_current"]) || array_key_exists("locale_current", $context) ? $context["locale_current"] : (function () { throw new RuntimeError('Variable "locale_current" does not exist.', 78, $this->source); })()), "html", null, true);
                    echo "\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label m-radio\" for=\"vis_lang_";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80), "html", null, true);
                    echo "_all\">
                                        <input type=\"radio\" id=\"vis_lang_";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81), "html", null, true);
                    echo "_all\" name=\"language\" class=\"form-check-input\" value=\"\"";
                    // line 82
                    if ( !twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 82, $this->source); })()), "language", [], "any", false, false, false, 82)) {
                        echo " checked=\"checked\"";
                    }
                    echo " data-module=\"smartBlock/feature/Update\">";
                    // line 83
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("all"), "html", null, true);
                    echo "<span></span>
                                    </label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label m-radio\" for=\"vis_lang_";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["locale_default"]) || array_key_exists("locale_default", $context) ? $context["locale_default"] : (function () { throw new RuntimeError('Variable "locale_default" does not exist.', 88, $this->source); })()), "html", null, true);
                    echo "\">
                                        <input type=\"radio\" id=\"vis_lang_";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["locale_default"]) || array_key_exists("locale_default", $context) ? $context["locale_default"] : (function () { throw new RuntimeError('Variable "locale_default" does not exist.', 89, $this->source); })()), "html", null, true);
                    echo "\" name=\"language\" class=\"form-check-input\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["locale_default"]) || array_key_exists("locale_default", $context) ? $context["locale_default"] : (function () { throw new RuntimeError('Variable "locale_default" does not exist.', 89, $this->source); })()), "html", null, true);
                    echo "\"
                                                ";
                    // line 90
                    if (((isset($context["locale_default"]) || array_key_exists("locale_default", $context) ? $context["locale_default"] : (function () { throw new RuntimeError('Variable "locale_default" does not exist.', 90, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 90, $this->source); })()), "language", [], "any", false, false, false, 90))) {
                        echo " checked=\"checked\"";
                    }
                    echo " data-module=\"smartBlock/feature/Update\">";
                    // line 91
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->getLanguageName((isset($context["locale_default"]) || array_key_exists("locale_default", $context) ? $context["locale_default"] : (function () { throw new RuntimeError('Variable "locale_default" does not exist.', 91, $this->source); })())), "html", null, true);
                    echo "<span></span>
                                    </label>
                                </div>";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 94, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                        // line 95
                        echo "                                    <div class=\"form-check\">
                                        <label class=\"form-check-label m-radio\" for=\"vis_lang_";
                        // line 96
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 96), "html", null, true);
                        echo "\">
                                            <input type=\"radio\" id=\"vis_lang_";
                        // line 97
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 97), "html", null, true);
                        echo "\" name=\"language\" class=\"form-check-input\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 97), "html", null, true);
                        echo "\"";
                        // line 98
                        if ((twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 98) == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 98, $this->source); })()), "language", [], "any", false, false, false, 98))) {
                            echo " checked=\"checked\"";
                        }
                        echo " data-module=\"smartBlock/feature/Update\">";
                        // line 99
                        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->getLanguageName(twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 99)), "html", null, true);
                        echo " <span></span>
                                        </label>
                                    </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "                            </form>

                            <div class=\"dropdown-divider\"></div>";
                }
            }
            // line 108
            echo "
                    <h6 class=\"dropdown-header\">";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("visibility"), "html", null, true);
            echo "</h6>

                    <form class=\"m-form px-3\" action=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_edit_visibility_hidden", ["_randomId" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 111, $this->source); })()), "randomId", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-4\">
                            <span class=\"m-switch m-switch--sm\">
                                <label class=\"mb-0\">
                                    <input data-switch=\"\" type=\"checkbox\" name=\"hidden\" value=\"no\"";
            // line 116
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 116, $this->source); })()), "hidden", [], "any", false, false, false, 116)) {
                echo " checked=\"checked\"";
            }
            echo " data-module=\"smartBlock/feature/Update\">
                                    <span></span>
                                </label>
                            </span>
                            </div>
                            <label class=\"col-8\">";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users"), "html", null, true);
            echo "</label>
                        </div>
                    </form>";
            // line 125
            if ( !array_key_exists("is_public", $context)) {
                // line 126
                $context["is_public"] = ("true" == $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("APP_PUBLIC"));
            }
            // line 129
            if ((isset($context["is_public"]) || array_key_exists("is_public", $context) ? $context["is_public"] : (function () { throw new RuntimeError('Variable "is_public" does not exist.', 129, $this->source); })())) {
                // line 130
                echo "                        <form class=\"m-form px-3\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_edit_visibility_public", ["_randomId" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 130, $this->source); })()), "randomId", [], "any", false, false, false, 130)]), "html", null, true);
                echo "\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-4\">
                            <span class=\"m-switch m-switch--sm\">
                                <label class=\"mb-0\">
                                    <input data-switch=\"\" type=\"checkbox\" name=\"public\" value=\"yes\"";
                // line 135
                if (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 135, $this->source); })()), "public", [], "any", false, false, false, 135)) {
                    echo " checked=\"checked\"";
                }
                echo " data-module=\"smartBlock/feature/Update\">
                                    <span></span>
                                </label>
                            </span>
                                </div>
                                <label class=\"col-8\">";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("public"), "html", null, true);
                echo "</label>
                            </div>
                        </form>";
            }
            // line 144
            echo "
                </div>
            </div>";
            // line 149
            if (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 149, $this->source); })()), "movable", [], "any", false, false, false, 149)) {
                // line 150
                echo "<div class=\"btn-group m-btn-group m-btn-group--air\">
                    <a href=\"javascript:void(0)\" class=\"";
                // line 151
                echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 151, $this->source); })()), "html", null, true);
                echo " is-tooltip\" data-module=\"smartBlock/feature/Edit\" data-edit=\"move\" data-direction=\"up\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("move_up"), "html", null, true);
                echo "\"";
                // line 152
                if (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 152, $this->source); })()), "parent", [], "any", false, false, false, 152)) {
                    echo "data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 152, $this->source); })()), "parent", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152), "html", null, true);
                    echo "\"";
                }
                echo ">
                        <i class=\"material-symbols-sharp\">arrow_upward</i></a>
                    <a href=\"javascript:void(0)\" class=\"";
                // line 154
                echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 154, $this->source); })()), "html", null, true);
                echo " is-tooltip\" data-module=\"smartBlock/feature/Edit\" data-edit=\"move\" data-direction=\"down\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("move_down"), "html", null, true);
                echo "\"";
                // line 155
                if (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 155, $this->source); })()), "parent", [], "any", false, false, false, 155)) {
                    echo "data-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 155, $this->source); })()), "parent", [], "any", false, false, false, 155), "id", [], "any", false, false, false, 155), "html", null, true);
                    echo "\"";
                }
                echo ">
                        <i class=\" material-symbols-sharp\">arrow_downward</i></a>
                </div>";
            }
        } else {
            // line 161
            $this->loadTemplate("@App/element/toolbar/label.html.twig", "@App/element/smart_block/toolbar.html.twig", 161)->display($context);
            // line 162
            echo "
            <div class=\"btn-group m-btn-group m-btn-group--air\">
                <button type=\"button\" class=\"element__insert_dropdown ";
            // line 164
            echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 164, $this->source); })()), "html", null, true);
            echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"material-symbols-sharp\">settings</i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-bottom p-0\">";
            // line 168
            if ((true == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 168, $this->source); })()), "deleted", [], "any", false, false, false, 168))) {
                // line 169
                $this->loadTemplate("@App/element/toolbar/button_restore.html.twig", "@App/element/smart_block/toolbar.html.twig", 169)->display(twig_array_merge($context, ["is_dropdown_item" => true]));
            } else {
                // line 171
                $this->loadTemplate("@App/element/toolbar/buttons_default.html.twig", "@App/element/smart_block/toolbar.html.twig", 171)->display(twig_array_merge($context, ["is_dropdown_item" => true]));
                // line 172
                echo "
                        <div class=\"dropdown-item btn btn-secondary advanced\">
                            <i class=\"material-symbols-sharp\">more_horiz</i>
                            <div>";
                // line 176
                $this->loadTemplate("@App/element/toolbar/buttons_advanced.html.twig", "@App/element/smart_block/toolbar.html.twig", 176)->display(twig_array_merge($context, ["is_submenu" => true]));
                // line 177
                echo "                            </div>
                        </div>";
            }
            // line 180
            echo "                </div>
            </div>";
        }
        // line 183
        echo "    </div>
</div>";
        // line 186
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate((((("@App/element/smart_" . twig_get_attribute($this->env, $this->source, (isset($context["element_to_edit"]) || array_key_exists("element_to_edit", $context) ? $context["element_to_edit"] : (function () { throw new RuntimeError('Variable "element_to_edit" does not exist.', 186, $this->source); })()), "groupName", [], "any", false, false, false, 186)) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["element_to_edit"]) || array_key_exists("element_to_edit", $context) ? $context["element_to_edit"] : (function () { throw new RuntimeError('Variable "element_to_edit" does not exist.', 186, $this->source); })()), "type", [], "any", false, false, false, 186)) . "/toolbar_inline.html.twig"), "@App/element/smart_block/toolbar.html.twig", 186);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/smart_block/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 186,  385 => 183,  381 => 180,  377 => 177,  375 => 176,  370 => 172,  368 => 171,  365 => 169,  363 => 168,  357 => 164,  353 => 162,  351 => 161,  340 => 155,  335 => 154,  326 => 152,  321 => 151,  318 => 150,  316 => 149,  312 => 144,  306 => 140,  296 => 135,  287 => 130,  285 => 129,  282 => 126,  280 => 125,  275 => 121,  265 => 116,  257 => 111,  252 => 109,  249 => 108,  243 => 103,  234 => 99,  229 => 98,  222 => 97,  216 => 96,  213 => 95,  209 => 94,  204 => 91,  199 => 90,  191 => 89,  185 => 88,  177 => 83,  172 => 82,  169 => 81,  165 => 80,  158 => 78,  152 => 76,  149 => 73,  147 => 72,  145 => 71,  143 => 70,  141 => 69,  139 => 68,  133 => 63,  130 => 62,  128 => 59,  123 => 56,  121 => 55,  115 => 51,  111 => 49,  109 => 48,  106 => 46,  104 => 45,  102 => 43,  100 => 42,  98 => 40,  95 => 37,  93 => 36,  83 => 33,  81 => 32,  78 => 29,  76 => 28,  74 => 25,  72 => 24,  70 => 22,  68 => 21,  66 => 20,  64 => 18,  62 => 16,  60 => 15,  58 => 14,  56 => 12,  53 => 8,  51 => 7,  48 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if element.original -%}
    {%- set element_to_edit = element.original -%}
{%- else -%}
    {%- set element_to_edit = element -%}
{%- endif -%}

{%- if category is not defined -%}
    {%- set category = element.category -%}
{% endif %}


{%- set add_query = '' -%}

{%- set is_alias = (constant('AppBundle\\\\Entity\\\\Element::TYPE_ALIAS') == element.type) -%}
{%- set is_dashboard_spaces = (constant('AppBundle\\\\Entity\\\\Category::TYPE_DASHBOARD_SPACES') == category.type) -%}
{%- set is_in_column = (element.parent and element.parent.typeInChain(constant('AppBundle\\\\Entity\\\\Element::TYPE_COLUMNS'))) -%}

{%- set has_aliases = (0 < element.aliases|length) -%}

{%- set has_button_copy = true -%}
{%- set has_button_cut = true -%}
{%- set has_button_delete = false -%}

{%- set has_option_history = (not is_dashboard_spaces) -%}
{%- set has_option_share = (not is_dashboard_spaces) -%}

{#- Accordions: add parent id to query #}
{%- if element.parent and 'headline' == element.parent.type -%}
    {%- set add_query = '&parent=' ~ element.parent.id -%}
{%- endif -%}

{%- set btn_class ='m-btn btn btn-secondary' -%}
<div class=\"element-toolbar on-hover{% if has_aliases or is_alias %} element-toolbar--danger{% endif %}{% if is_in_column %} element-toolbar--column{% endif %}\">
    <div class=\"btn-toolbar\">
        {#- Add #}
        {%- if not element.deleted and not is_in_column -%}
            {%- include \"@App/element/toolbar/add.html.twig\" %}
        {%- endif -%}

        {%- if not is_in_column %}
            {#- Default options #}
            <div class=\"btn-group m-btn-group m-btn-group--air mr-2\">
                {%- include \"@App/element/toolbar/label.html.twig\" %}

                {%- if true == element.deleted -%}
                    {%- include \"@App/element/toolbar/button_restore.html.twig\" %}
                {%- else -%}
                    {%- include \"@App/element/toolbar/buttons_default.html.twig\" %}

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"{{ btn_class }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"material-symbols-sharp\">more_vert</i>
                        </button>
                        <div class=\"dropdown-menu\">
                            {%- include \"@App/element/toolbar/buttons_advanced.html.twig\" %}
                        </div>
                    </div>
                {% endif %}
            </div>

            {#- Visibility -#}
            <div class=\"btn-group m-btn-group m-btn-group--air mr-2\">
                <button type=\"button\" class=\"{{ btn_class }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"material-symbols-sharp\">visibility</i>
                </button>
                <div class=\"dropdown-menu\">
                    {#- Languages -#}
                    {%- if element.translatable %}
                        {%- set locales = app_setting_locale_all() -%}
                        {%- if 0 < locales|length %}
                            {%- set locale_default = app.request.defaultLocale -%}
                            {%- if locale_current is not defined -%}
                                {%- set locale_current = app.request|app_locale_current -%}
                            {%- endif -%}

                            <h6 class=\"dropdown-header\">{{ 'languages'|trans }}</h6>

                            <form class=\"m-form\" action=\"{{ path('app_element_edit_visibility_language', {'_randomId': element.randomId}) }}\" data-locale=\"{{ locale_current }}\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label m-radio\" for=\"vis_lang_{{ element.id }}_all\">
                                        <input type=\"radio\" id=\"vis_lang_{{ element.id }}_all\" name=\"language\" class=\"form-check-input\" value=\"\"
                                                {%- if not element.language %} checked=\"checked\"{% endif %} data-module=\"smartBlock/feature/Update\">
                                        {{- 'all'|trans }}<span></span>
                                    </label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label m-radio\" for=\"vis_lang_{{ element.id }}_{{ locale_default }}\">
                                        <input type=\"radio\" id=\"vis_lang_{{ element.id }}_{{ locale_default }}\" name=\"language\" class=\"form-check-input\" value=\"{{ locale_default }}\"
                                                {% if locale_default == element.language %} checked=\"checked\"{% endif %} data-module=\"smartBlock/feature/Update\">
                                        {{- locale_default|language_name }}<span></span>
                                    </label>
                                </div>
                                {%- for locale in locales %}
                                    <div class=\"form-check\">
                                        <label class=\"form-check-label m-radio\" for=\"vis_lang_{{ element.id }}_{{ locale.name }}\">
                                            <input type=\"radio\" id=\"vis_lang_{{ element.id }}_{{ locale.name }}\" name=\"language\" class=\"form-check-input\" value=\"{{ locale.name }}\"
                                                    {%- if locale.name == element.language %} checked=\"checked\"{% endif %} data-module=\"smartBlock/feature/Update\">
                                            {{- locale.name |language_name }} <span></span>
                                        </label>
                                    </div>
                                {%- endfor %}
                            </form>

                            <div class=\"dropdown-divider\"></div>
                        {%- endif %}
                    {%- endif %}

                    <h6 class=\"dropdown-header\">{{ 'visibility'|trans }}</h6>

                    <form class=\"m-form px-3\" action=\"{{ path('app_element_edit_visibility_hidden', {'_randomId': element.randomId}) }}\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-4\">
                            <span class=\"m-switch m-switch--sm\">
                                <label class=\"mb-0\">
                                    <input data-switch=\"\" type=\"checkbox\" name=\"hidden\" value=\"no\"{% if not element.hidden %} checked=\"checked\"{% endif %} data-module=\"smartBlock/feature/Update\">
                                    <span></span>
                                </label>
                            </span>
                            </div>
                            <label class=\"col-8\">{{ 'users'|trans }}</label>
                        </div>
                    </form>

                    {%- if is_public is not defined %}
                        {%- set is_public = ('true' == 'APP_PUBLIC'|_env) %}
                    {%- endif %}

                    {%- if is_public %}
                        <form class=\"m-form px-3\" action=\"{{ path('app_element_edit_visibility_public', {'_randomId': element.randomId}) }}\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-4\">
                            <span class=\"m-switch m-switch--sm\">
                                <label class=\"mb-0\">
                                    <input data-switch=\"\" type=\"checkbox\" name=\"public\" value=\"yes\"{% if element.public %} checked=\"checked\"{% endif %} data-module=\"smartBlock/feature/Update\">
                                    <span></span>
                                </label>
                            </span>
                                </div>
                                <label class=\"col-8\">{{ 'public'|trans }}</label>
                            </div>
                        </form>
                    {%- endif %}

                </div>
            </div>

            {#- Moveable -#}
            {%- if element.movable -%}
                <div class=\"btn-group m-btn-group m-btn-group--air\">
                    <a href=\"javascript:void(0)\" class=\"{{ btn_class }} is-tooltip\" data-module=\"smartBlock/feature/Edit\" data-edit=\"move\" data-direction=\"up\" title=\"{{ 'move_up'|trans }}\"
                       {%- if element.parent %}data-parent=\"{{ element.parent.id }}\"{% endif %}>
                        <i class=\"material-symbols-sharp\">arrow_upward</i></a>
                    <a href=\"javascript:void(0)\" class=\"{{ btn_class }} is-tooltip\" data-module=\"smartBlock/feature/Edit\" data-edit=\"move\" data-direction=\"down\" title=\"{{ 'move_down'|trans }}\"
                       {%- if element.parent %}data-parent=\"{{ element.parent.id }}\"{% endif %}>
                        <i class=\" material-symbols-sharp\">arrow_downward</i></a>
                </div>
            {%- endif -%}
        {%- else %}
            {#- Custom options for columns #}
            {%- include \"@App/element/toolbar/label.html.twig\" %}

            <div class=\"btn-group m-btn-group m-btn-group--air\">
                <button type=\"button\" class=\"element__insert_dropdown {{ btn_class }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"material-symbols-sharp\">settings</i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-bottom p-0\">
                    {%- if true == element.deleted -%}
                        {%- include \"@App/element/toolbar/button_restore.html.twig\" with {'is_dropdown_item': true} %}
                    {%- else -%}
                        {%- include \"@App/element/toolbar/buttons_default.html.twig\" with {'is_dropdown_item': true} %}

                        <div class=\"dropdown-item btn btn-secondary advanced\">
                            <i class=\"material-symbols-sharp\">more_horiz</i>
                            <div>
                                {%- include \"@App/element/toolbar/buttons_advanced.html.twig\" with {is_submenu: true} %}
                            </div>
                        </div>
                    {%- endif %}
                </div>
            </div>
        {%- endif %}
    </div>
</div>

{%- include \"@App/element/smart_\" ~ element_to_edit.groupName  ~ \"/\" ~ element_to_edit.type  ~ \"/toolbar_inline.html.twig\" ignore missing -%}", "@App/element/smart_block/toolbar.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/smart_block/toolbar.html.twig");
    }
}
