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

/* @App/_components/smart/jump_marks.html.twig */
class __TwigTemplate_c9abc6527afcc3596f9b50f9675f07f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_components/smart/jump_marks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_components/smart/jump_marks.html.twig"));

        // line 1
        $context["config_jump_mark_reload"] = ((array_key_exists("config_jump_mark_reload", $context)) ? (_twig_default_filter((isset($context["config_jump_mark_reload"]) || array_key_exists("config_jump_mark_reload", $context) ? $context["config_jump_mark_reload"] : (function () { throw new RuntimeError('Variable "config_jump_mark_reload" does not exist.', 1, $this->source); })()), false)) : (false));
        // line 2
        $context["config_jump_mark_design"] = $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("SMART_BLOCK_JUMP_MARK_DESIGN");
        // line 4
        if ((array_key_exists("config_jump_mark_items", $context) && (1 < twig_length_filter($this->env, (isset($context["config_jump_mark_items"]) || array_key_exists("config_jump_mark_items", $context) ? $context["config_jump_mark_items"] : (function () { throw new RuntimeError('Variable "config_jump_mark_items" does not exist.', 4, $this->source); })()))))) {
            // line 5
            if ( !(isset($context["config_jump_mark_reload"]) || array_key_exists("config_jump_mark_reload", $context) ? $context["config_jump_mark_reload"] : (function () { throw new RuntimeError('Variable "config_jump_mark_reload" does not exist.', 5, $this->source); })())) {
                // line 6
                echo "<template id=\"wd--category-jump-marks\" data-design=\"";
                echo twig_escape_filter($this->env, (isset($context["config_jump_mark_design"]) || array_key_exists("config_jump_mark_design", $context) ? $context["config_jump_mark_design"] : (function () { throw new RuntimeError('Variable "config_jump_mark_design" does not exist.', 6, $this->source); })()), "html", null, true);
                echo "\">";
            }
            // line 9
            if (("navbar" == (isset($context["config_jump_mark_design"]) || array_key_exists("config_jump_mark_design", $context) ? $context["config_jump_mark_design"] : (function () { throw new RuntimeError('Variable "config_jump_mark_design" does not exist.', 9, $this->source); })()))) {
                // line 10
                echo "<div class=\"m-jump-marks dropdown\"";
                if ($this->extensions['AppBundle\Twig\UserTwigExtension']->getFunctionSmartEditGranted()) {
                    echo " data-reload=\"";
                    echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_category_jump_marks", ["_space" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 10, $this->source); })()), "space", [], "any", false, false, false, 10), "slug", [], "any", false, false, false, 10), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 10, $this->source); })()), "slug", [], "any", false, false, false, 10)]), "html", null, true);
                    echo "\"";
                }
                echo ">
            <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" id=\"wd--category-jump-marks_link\">
                <ul class=\"list-unstyled mb-0\">";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["config_jump_mark_items"]) || array_key_exists("config_jump_mark_items", $context) ? $context["config_jump_mark_items"] : (function () { throw new RuntimeError('Variable "config_jump_mark_items" does not exist.', 13, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 14
                    $context["item_original"] = twig_get_attribute($this->env, $this->source, $context["item"], "originalElement", [], "any", false, false, false, 14);
                    // line 15
                    $context["item_content"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 15, $this->source); })()), "content2", [], "any", false, false, false, 15))) ? (twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 15, $this->source); })()), "content2", [], "any", false, false, false, 15)) : (twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 15, $this->source); })()), "content", [], "any", false, false, false, 15)));
                    // line 17
                    if ((isset($context["item_content"]) || array_key_exists("item_content", $context) ? $context["item_content"] : (function () { throw new RuntimeError('Variable "item_content" does not exist.', 17, $this->source); })())) {
                        // line 18
                        echo "<li data-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 18, $this->source); })()), "randomId", [], "any", false, false, false, 18), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_striptags((isset($context["item_content"]) || array_key_exists("item_content", $context) ? $context["item_content"] : (function () { throw new RuntimeError('Variable "item_content" does not exist.', 18, $this->source); })())), "html", null, true);
                        echo "</li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "</ul>
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"wd--category-jump-marks_link\">";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["config_jump_mark_items"]) || array_key_exists("config_jump_mark_items", $context) ? $context["config_jump_mark_items"] : (function () { throw new RuntimeError('Variable "config_jump_mark_items" does not exist.', 25, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 26
                    $context["item_original"] = twig_get_attribute($this->env, $this->source, $context["item"], "originalElement", [], "any", false, false, false, 26);
                    // line 27
                    $context["item_content"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 27, $this->source); })()), "content2", [], "any", false, false, false, 27))) ? (twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 27, $this->source); })()), "content2", [], "any", false, false, false, 27)) : (twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 27, $this->source); })()), "content", [], "any", false, false, false, 27)));
                    // line 29
                    if ((isset($context["item_content"]) || array_key_exists("item_content", $context) ? $context["item_content"] : (function () { throw new RuntimeError('Variable "item_content" does not exist.', 29, $this->source); })())) {
                        // line 30
                        echo "<a class=\"dropdown-item\" href=\"#";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 30, $this->source); })()), "randomId", [], "any", false, false, false, 30), "html", null, true);
                        echo "_container\" data-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 30, $this->source); })()), "randomId", [], "any", false, false, false, 30), "html", null, true);
                        echo "\" data-module=\"features/ScrollTo\">";
                        // line 31
                        echo twig_escape_filter($this->env, twig_striptags((isset($context["item_content"]) || array_key_exists("item_content", $context) ? $context["item_content"] : (function () { throw new RuntimeError('Variable "item_content" does not exist.', 31, $this->source); })())), "html", null, true);
                        echo "</a>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "</div>
        </div>";
            } elseif (("body" ==             // line 36
(isset($context["config_jump_mark_design"]) || array_key_exists("config_jump_mark_design", $context) ? $context["config_jump_mark_design"] : (function () { throw new RuntimeError('Variable "config_jump_mark_design" does not exist.', 36, $this->source); })()))) {
                // line 37
                echo "<div class=\"m-jump-marks\"";
                if ($this->extensions['AppBundle\Twig\UserTwigExtension']->getFunctionSmartEditGranted()) {
                    echo " data-reload=\"";
                    echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_category_jump_marks", ["_space" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 37, $this->source); })()), "space", [], "any", false, false, false, 37), "slug", [], "any", false, false, false, 37), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 37, $this->source); })()), "slug", [], "any", false, false, false, 37)]), "html", null, true);
                    echo "\"";
                }
                echo ">
            <ul class=\"list-unstyled mb-0\">";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["config_jump_mark_items"]) || array_key_exists("config_jump_mark_items", $context) ? $context["config_jump_mark_items"] : (function () { throw new RuntimeError('Variable "config_jump_mark_items" does not exist.', 39, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    $context["item_original"] = twig_get_attribute($this->env, $this->source, $context["item"], "originalElement", [], "any", false, false, false, 40);
                    // line 41
                    $context["item_content"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 41, $this->source); })()), "content2", [], "any", false, false, false, 41))) ? (twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 41, $this->source); })()), "content2", [], "any", false, false, false, 41)) : (twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 41, $this->source); })()), "content", [], "any", false, false, false, 41)));
                    // line 43
                    if ((isset($context["item_content"]) || array_key_exists("item_content", $context) ? $context["item_content"] : (function () { throw new RuntimeError('Variable "item_content" does not exist.', 43, $this->source); })())) {
                        // line 44
                        echo "<li data-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 44, $this->source); })()), "randomId", [], "any", false, false, false, 44), "html", null, true);
                        echo "\">
                            <a href=\"#";
                        // line 45
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 45, $this->source); })()), "randomId", [], "any", false, false, false, 45), "html", null, true);
                        echo "_container\" data-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item_original"]) || array_key_exists("item_original", $context) ? $context["item_original"] : (function () { throw new RuntimeError('Variable "item_original" does not exist.', 45, $this->source); })()), "randomId", [], "any", false, false, false, 45), "html", null, true);
                        echo "\" data-module=\"features/ScrollTo\">";
                        // line 46
                        echo twig_escape_filter($this->env, twig_striptags((isset($context["item_content"]) || array_key_exists("item_content", $context) ? $context["item_content"] : (function () { throw new RuntimeError('Variable "item_content" does not exist.', 46, $this->source); })())), "html", null, true);
                        // line 47
                        echo "</a>
                        </li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "</ul>
            <div class=\"scrollbar\">
                <div class=\"pill\"></div>
            </div>
        </div>";
            }
            // line 58
            if ( !(isset($context["config_jump_mark_reload"]) || array_key_exists("config_jump_mark_reload", $context) ? $context["config_jump_mark_reload"] : (function () { throw new RuntimeError('Variable "config_jump_mark_reload" does not exist.', 58, $this->source); })())) {
                // line 59
                echo "</template>";
            }
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_components/smart/jump_marks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 59,  169 => 58,  162 => 51,  154 => 47,  152 => 46,  147 => 45,  142 => 44,  140 => 43,  138 => 41,  136 => 40,  132 => 39,  123 => 37,  121 => 36,  118 => 34,  110 => 31,  104 => 30,  102 => 29,  100 => 27,  98 => 26,  94 => 25,  89 => 21,  78 => 18,  76 => 17,  74 => 15,  72 => 14,  68 => 13,  58 => 10,  56 => 9,  51 => 6,  49 => 5,  47 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set config_jump_mark_reload = config_jump_mark_reload|default(false) -%}
{%- set config_jump_mark_design = 'SMART_BLOCK_JUMP_MARK_DESIGN'|_env -%}

{%- if config_jump_mark_items is defined and 1 < config_jump_mark_items|length -%}
    {%- if not config_jump_mark_reload -%}
        <template id=\"wd--category-jump-marks\" data-design=\"{{ config_jump_mark_design }}\">
    {%- endif -%}

    {%- if 'navbar' == config_jump_mark_design -%}
        <div class=\"m-jump-marks dropdown\"{% if app_user_smart_edit_granted() %} data-reload=\"{{ path('app_category_jump_marks', {'_space': category.space.slug, 'slug': category.slug}) }}\"{% endif %}>
            <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" id=\"wd--category-jump-marks_link\">
                <ul class=\"list-unstyled mb-0\">
                    {%- for item in config_jump_mark_items -%}
                        {%- set item_original = item.originalElement -%}
                        {%- set item_content = ((item_original.content2 is not empty) ? item_original.content2 : item_original.content) -%}

                        {%- if item_content -%}
                            <li data-id=\"{{ item_original.randomId }}\">{{ item_content|striptags }}</li>
                        {%- endif -%}
                    {%- endfor -%}
                </ul>
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"wd--category-jump-marks_link\">
                {%- for item in config_jump_mark_items -%}
                    {%- set item_original = item.originalElement -%}
                    {%- set item_content = ((item_original.content2 is not empty) ? item_original.content2 : item_original.content) -%}

                    {%- if item_content -%}
                        <a class=\"dropdown-item\" href=\"#{{ item_original.randomId }}_container\" data-id=\"{{ item_original.randomId }}\" data-module=\"features/ScrollTo\">
                            {{- item_content|striptags }}</a>
                    {%- endif -%}
                {%- endfor -%}
            </div>
        </div>
    {%- elseif('body' == config_jump_mark_design) -%}
        <div class=\"m-jump-marks\"{% if app_user_smart_edit_granted() %} data-reload=\"{{ path('app_category_jump_marks', {'_space': category.space.slug, 'slug': category.slug}) }}\"{% endif %}>
            <ul class=\"list-unstyled mb-0\">
                {%- for item in config_jump_mark_items -%}
                    {%- set item_original = item.originalElement -%}
                    {%- set item_content = ((item_original.content2 is not empty) ? item_original.content2 : item_original.content) -%}

                    {%- if item_content -%}
                        <li data-id=\"{{ item_original.randomId }}\">
                            <a href=\"#{{ item_original.randomId }}_container\" data-id=\"{{ item_original.randomId }}\" data-module=\"features/ScrollTo\">
                                {{- item_content|striptags -}}
                            </a>
                        </li>
                    {%- endif -%}
                {%- endfor -%}
            </ul>
            <div class=\"scrollbar\">
                <div class=\"pill\"></div>
            </div>
        </div>
    {%- endif -%}

    {%- if not config_jump_mark_reload -%}
        </template>
    {%- endif -%}
{%- endif -%}", "@App/_components/smart/jump_marks.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_components/smart/jump_marks.html.twig");
    }
}
