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

/* @App/_layout/aside_sticky_user.html.twig */
class __TwigTemplate_a65e2bb12db62de4dac1ffa7c02509c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/aside_sticky_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/aside_sticky_user.html.twig"));

        // line 1
        echo "<ul class=\"user\">";
        // line 2
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 3
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN")) {
                // line 4
                echo "<div class=\"d-flex align-items-center font-weight-bold\"><i class=\"material-symbols-sharp new-size mr-2\">person</i>";
                if ((0 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "groups", [], "any", false, false, false, 4)))) {
                    // line 5
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("without_group"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "groups", [], "any", false, false, false, 5), "first", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
                }
                echo "</div>";
            }
            // line 8
            if ($this->extensions['AppBundle\Twig\CoreTwigExtension']->isInstanceof(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "AppBundle\\Entity\\User")) {
                // line 9
                echo "<li class=\"username\">
                <div class=\"dropdown dropup\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle no-caret has-icon\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"material-symbols-sharp new-size mr-3\">person</i>";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "displayName", [], "any", false, false, false, 12), "html", null, true);
                echo "<i class=\"material-symbols-sharp new-size\">keyboard_arrow_down</i>
                    </a>

                    <div class=\"dropdown-menu\">";
                // line 16
                $context["myHubItems"] = $this->extensions['AppBundle\Twig\MenuTwigExtension']->getFunctionDropdownMyHubItems();
                // line 17
                if ((0 < twig_length_filter($this->env, (isset($context["myHubItems"]) || array_key_exists("myHubItems", $context) ? $context["myHubItems"] : (function () { throw new RuntimeError('Variable "myHubItems" does not exist.', 17, $this->source); })())))) {
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["myHubItems"]) || array_key_exists("myHubItems", $context) ? $context["myHubItems"] : (function () { throw new RuntimeError('Variable "myHubItems" does not exist.', 18, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["userMenuItem"]) {
                        // line 19
                        $context["link_attr"] = twig_get_attribute($this->env, $this->source, $context["userMenuItem"], "attributesArray", [], "any", false, false, false, 19);
                        // line 20
                        $context["link_attr"] = twig_array_merge((isset($context["link_attr"]) || array_key_exists("link_attr", $context) ? $context["link_attr"] : (function () { throw new RuntimeError('Variable "link_attr" does not exist.', 20, $this->source); })()), [0 => (("href=\"" . twig_get_attribute($this->env, $this->source,                         // line 21
$context["userMenuItem"], "path", [], "any", false, false, false, 21)) . "\""), 1 => (("title=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                         // line 22
$context["userMenuItem"], "title", [], "any", false, false, false, 22))) . "\"")]);
                        // line 25
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["userMenuItem"], "icon", [], "any", false, false, false, 25))) {
                            // line 26
                            $context["link_attr"] = twig_array_merge((isset($context["link_attr"]) || array_key_exists("link_attr", $context) ? $context["link_attr"] : (function () { throw new RuntimeError('Variable "link_attr" does not exist.', 26, $this->source); })()), [0 => "class=\"dropdown-item has-icon\""]);
                        } else {
                            // line 30
                            $context["link_attr"] = twig_array_merge((isset($context["link_attr"]) || array_key_exists("link_attr", $context) ? $context["link_attr"] : (function () { throw new RuntimeError('Variable "link_attr" does not exist.', 30, $this->source); })()), [0 => "class=\"dropdown-item\""]);
                        }
                        // line 35
                        echo "<a ";
                        echo twig_join_filter((isset($context["link_attr"]) || array_key_exists("link_attr", $context) ? $context["link_attr"] : (function () { throw new RuntimeError('Variable "link_attr" does not exist.', 35, $this->source); })()), " ");
                        echo ">";
                        // line 36
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["userMenuItem"], "icon", [], "any", false, false, false, 36))) {
                            // line 37
                            echo "<i class=\"material-symbols-sharp\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userMenuItem"], "icon", [], "any", false, false, false, 37), "html", null, true);
                            echo "</i>
                                    ";
                        }
                        // line 39
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["userMenuItem"], "title", [], "any", false, false, false, 39)), "html", null, true);
                        // line 40
                        echo "</a>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userMenuItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                            <div class=\"dropdown-divider\"></div>";
                }
                // line 45
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "hasOAuthRelation", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_user_changepassword"), "html", null, true);
                    echo "\" data-dialog=\"form\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password"), "html", null, true);
                    echo "\"
                               class=\"dropdown-item is-link is-link--dialog has-icon\"><i class=\"material-symbols-sharp\">key</i>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password"), "html", null, true);
                    echo "</a>";
                }
                // line 49
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
                    // line 50
                    if ((false == $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getFunctionDefaultUsed())) {
                        // line 51
                        $context["path_settings"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_settings_category_index_space", ["slug" => $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getCurrentSpaceSlug()]);
                    } else {
                        // line 53
                        $context["path_settings"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_settings_category_index");
                    }
                    // line 55
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["path_settings"]) || array_key_exists("path_settings", $context) ? $context["path_settings"] : (function () { throw new RuntimeError('Variable "path_settings" does not exist.', 55, $this->source); })()), "html", null, true);
                    echo "\" class=\"dropdown-item has-icon\" data-shortcut=\"shift+a\">
                                <i class=\"material-symbols-sharp\">settings</i>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings"), "html", null, true);
                    echo "</a>";
                }
                // line 58
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_user_security_logout"), "html", null, true);
                echo "\" class=\"dropdown-item has-icon\"><i class=\"material-symbols-sharp\">logout</i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("logout"), "html", null, true);
                echo "</a>
                    </div>
                </div>
            </li>";
            }
        }
        // line 64
        echo "</ul>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_layout/aside_sticky_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 64,  149 => 58,  145 => 56,  140 => 55,  137 => 53,  134 => 51,  132 => 50,  130 => 49,  126 => 47,  119 => 46,  117 => 45,  114 => 42,  108 => 40,  106 => 39,  100 => 37,  98 => 36,  94 => 35,  91 => 30,  88 => 26,  86 => 25,  84 => 22,  83 => 21,  82 => 20,  80 => 19,  76 => 18,  74 => 17,  72 => 16,  66 => 12,  61 => 9,  59 => 8,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"user\">
    {%- if is_granted('ROLE_USER') -%}
        {%- if is_granted('ROLE_PREVIOUS_ADMIN') -%}
            <div class=\"d-flex align-items-center font-weight-bold\"><i class=\"material-symbols-sharp new-size mr-2\">person</i>{% if 0 == app.user.groups|length %}
                    {{- 'without_group'|trans }}{% else %}{{ app.user.groups.first.name }}{% endif %}</div>
        {%- endif -%}

        {%- if app.user is instance_of('AppBundle\\\\Entity\\\\User') -%}
            <li class=\"username\">
                <div class=\"dropdown dropup\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle no-caret has-icon\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"material-symbols-sharp new-size mr-3\">person</i>{{ app.user.displayName -}}<i class=\"material-symbols-sharp new-size\">keyboard_arrow_down</i>
                    </a>

                    <div class=\"dropdown-menu\">
                        {%- set myHubItems = app_menu_dropdown_myhub_items() -%}
                        {%- if 0 < myHubItems|length -%}
                            {%- for userMenuItem in myHubItems %}
                                {%- set link_attr = userMenuItem.attributesArray %}
                                {%- set link_attr = link_attr|merge([
                                    'href=\"' ~ userMenuItem.path ~ '\"',
                                    'title=\"' ~ (userMenuItem.title|trans) ~ '\"'
                                ]) -%}

                                {%- if userMenuItem.icon is not empty -%}
                                    {%- set link_attr = link_attr|merge([
                                        'class=\"dropdown-item has-icon\"',
                                    ]) -%}
                                {%- else -%}
                                    {%- set link_attr = link_attr|merge([
                                        'class=\"dropdown-item\"',
                                    ]) -%}
                                {%- endif -%}

                                <a {{ link_attr|join(' ')|raw }}>
                                    {%- if userMenuItem.icon is not empty -%}
                                        <i class=\"material-symbols-sharp\">{{ userMenuItem.icon }}</i>
                                    {% endif -%}
                                    {{- (userMenuItem.title|trans) -}}
                                </a>
                            {%- endfor %}
                            <div class=\"dropdown-divider\"></div>
                        {%- endif -%}

                        {%- if not app.user.hasOAuthRelation -%}
                            <a href=\"{{ path_without_space('app_user_changepassword') }}\" data-dialog=\"form\" title=\"{{ 'change_password'|trans }}\"
                               class=\"dropdown-item is-link is-link--dialog has-icon\"><i class=\"material-symbols-sharp\">key</i>{{ 'change_password'|trans }}</a>
                        {%- endif -%}
                        {%- if is_granted('ROLE_EDITOR') -%}
                            {%- if false == app_space_default_used() -%}
                                {%- set path_settings = path('app_settings_category_index_space', {'slug': app_space_get_current_slug()}) -%}
                            {%- else -%}
                                {%- set path_settings = path_without_space('app_settings_category_index') -%}
                            {%- endif -%}
                            <a href=\"{{ path_settings }}\" class=\"dropdown-item has-icon\" data-shortcut=\"shift+a\">
                                <i class=\"material-symbols-sharp\">settings</i>{{ 'settings'|trans }}</a>
                        {%- endif -%}
                        <a href=\"{{ path_without_space('app_user_security_logout') }}\" class=\"dropdown-item has-icon\"><i class=\"material-symbols-sharp\">logout</i> {{ 'logout'|trans }}</a>
                    </div>
                </div>
            </li>
        {%- endif %}
    {%- endif -%}
</ul>", "@App/_layout/aside_sticky_user.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_layout/aside_sticky_user.html.twig");
    }
}
