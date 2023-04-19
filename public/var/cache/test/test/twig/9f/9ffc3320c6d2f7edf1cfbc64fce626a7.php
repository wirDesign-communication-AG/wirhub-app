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

/* @App/element/create/choice_full_tools.html.twig */
class __TwigTemplate_28f8e721dc16130d8bef2829aa2d27a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/create/choice_full_tools.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/create/choice_full_tools.html.twig"));

        // line 1
        $context["link_class"] = "btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--air";
        // line 2
        echo "<div class=\"card\">
    <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">
            <div class=\"d-flex\">
                <div class=\"flex-grow-1\">
                    <strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file_transfer"), "html", null, true);
        echo "</strong>

                    <p class=\"m-0\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file_transfer_description"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"align-self-center\">
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_create_type_quick", ["type" => "file_transfer", "category" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 12, $this->source); })()), "slug", [], "any", false, false, false, 12)]), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
                        <i class=\"material-symbols-sharp\">navigate_next</i>
                    </a>
                </div>
            </div>
        </li>
        <li class=\"list-group-item\">
            <div class=\"d-flex\">
                <div class=\"flex-grow-1\">
                    <strong>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tool_framing"), "html", null, true);
        echo "</strong>

                    <p class=\"m-0\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tool_framing_description"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"align-self-center\">
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_create_type_quick", ["type" => "tool_framing", "category" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()), "slug", [], "any", false, false, false, 26)]), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\">
                        <i class=\"material-symbols-sharp\">navigate_next</i>
                    </a>
                </div>
            </div>
        </li>
        <li class=\"list-group-item\">
            <div class=\"d-flex\">
                <div class=\"flex-grow-1\">
                    <strong>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tool_inspiration"), "html", null, true);
        echo "</strong>

                    <p class=\"m-0\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tool_inspiration_description"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"align-self-center\">
                    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_create_type_quick", ["type" => "tool_inspiration", "category" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 40, $this->source); })()), "slug", [], "any", false, false, false, 40)]), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\">
                        <i class=\"material-symbols-sharp\">navigate_next</i>
                    </a>
                </div>
            </div>
        </li>";
        // line 47
        if ((true == $this->extensions['AppBundle\Twig\Feature\ConnectionTwigExtension']->getFunctionMediacockpitEnabled())) {
            // line 48
            echo "<li class=\"list-group-item\">
                <div class=\"d-flex\">
                    <div class=\"flex-grow-1\">
                        <strong>";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("type_mediacockpit"), "html", null, true);
            echo "</strong>

                        <p class=\"m-0\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("type_mediacockpit_description"), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"align-self-center\">
                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_create_type_quick", ["type" => "mediacockpit", "category" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 56, $this->source); })()), "slug", [], "any", false, false, false, 56)]), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "\">
                            <i class=\"material-symbols-sharp\">navigate_next</i>
                        </a>
                    </div>
                </div>
            </li>";
        }
        // line 64
        echo "<li class=\"list-group-item\">
            <div class=\"d-flex\">
                <div class=\"flex-grow-1\">
                    <strong>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("qr_generator"), "html", null, true);
        echo "</strong>

                    <p class=\"m-0\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("qr_generator_description"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"align-self-center\">
                    <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_create_type_quick", ["type" => "qr_generator", "category" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 72, $this->source); })()), "slug", [], "any", false, false, false, 72)]), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "\">
                        <i class=\"material-symbols-sharp\">navigate_next</i>
                    </a>
                </div>
            </div>
        </li>";
        // line 79
        $context["menu"] = $this->extensions['AppBundle\Twig\CustomerTwigExtension']->getFunctionToolsMenu();
        // line 80
        if ((0 < twig_length_filter($this->env, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 80, $this->source); })())))) {
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 81, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 82
                echo "<li class=\"list-group-item\">
                    <div class=\"d-flex\">
                        <div class=\"flex-grow-1\">
                            <strong>";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 85)), "html", null, true);
                echo "</strong>

                            <p class=\"m-0\">";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 87) . "_description")), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"align-self-center\">
                            <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_create_type_quick", ["type" => twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 90), "category" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 90, $this->source); })()), "slug", [], "any", false, false, false, 90)]), "html", null, true);
                echo "?";
                echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 90, $this->source); })()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 90, $this->source); })()), "html", null, true);
                echo "\">
                                <i class=\"material-symbols-sharp\">navigate_next</i>
                            </a>
                        </div>
                    </div>
                </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 98
        echo "</ul>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/create/choice_full_tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 98,  212 => 90,  206 => 87,  201 => 85,  196 => 82,  192 => 81,  190 => 80,  188 => 79,  176 => 72,  170 => 69,  165 => 67,  160 => 64,  147 => 56,  141 => 53,  136 => 51,  131 => 48,  129 => 47,  117 => 40,  111 => 37,  106 => 35,  90 => 26,  84 => 23,  79 => 21,  63 => 12,  57 => 9,  52 => 7,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set link_class = 'btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--air' -%}
<div class=\"card\">
    <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">
            <div class=\"d-flex\">
                <div class=\"flex-grow-1\">
                    <strong>{{ 'file_transfer'|trans }}</strong>

                    <p class=\"m-0\">{{ 'file_transfer_description'|trans }}</p>
                </div>
                <div class=\"align-self-center\">
                    <a href=\"{{ path_without_space('app_element_create_type_quick', {'type':'file_transfer','category':category.slug}) }}?{{ query }}\" class=\"{{ link_class }}\">
                        <i class=\"material-symbols-sharp\">navigate_next</i>
                    </a>
                </div>
            </div>
        </li>
        <li class=\"list-group-item\">
            <div class=\"d-flex\">
                <div class=\"flex-grow-1\">
                    <strong>{{ 'tool_framing'|trans }}</strong>

                    <p class=\"m-0\">{{ 'tool_framing_description'|trans }}</p>
                </div>
                <div class=\"align-self-center\">
                    <a href=\"{{ path_without_space('app_element_create_type_quick', {'type':'tool_framing','category':category.slug}) }}?{{ query }}\" class=\"{{ link_class }}\">
                        <i class=\"material-symbols-sharp\">navigate_next</i>
                    </a>
                </div>
            </div>
        </li>
        <li class=\"list-group-item\">
            <div class=\"d-flex\">
                <div class=\"flex-grow-1\">
                    <strong>{{ 'tool_inspiration'|trans }}</strong>

                    <p class=\"m-0\">{{ 'tool_inspiration_description'|trans }}</p>
                </div>
                <div class=\"align-self-center\">
                    <a href=\"{{ path_without_space('app_element_create_type_quick', {'type':'tool_inspiration','category':category.slug}) }}?{{ query }}\" class=\"{{ link_class }}\">
                        <i class=\"material-symbols-sharp\">navigate_next</i>
                    </a>
                </div>
            </div>
        </li>

        {%- if true == app_feature_connection_mediacockpit_enabled() -%}
            <li class=\"list-group-item\">
                <div class=\"d-flex\">
                    <div class=\"flex-grow-1\">
                        <strong>{{ 'type_mediacockpit'|trans }}</strong>

                        <p class=\"m-0\">{{ 'type_mediacockpit_description'|trans }}</p>
                    </div>
                    <div class=\"align-self-center\">
                        <a href=\"{{ path_without_space('app_element_create_type_quick', {'type':'mediacockpit','category':category.slug}) }}?{{ query }}\" class=\"{{ link_class }}\">
                            <i class=\"material-symbols-sharp\">navigate_next</i>
                        </a>
                    </div>
                </div>
            </li>
        {%- endif -%}

        <li class=\"list-group-item\">
            <div class=\"d-flex\">
                <div class=\"flex-grow-1\">
                    <strong>{{ 'qr_generator'|trans }}</strong>

                    <p class=\"m-0\">{{ 'qr_generator_description'|trans }}</p>
                </div>
                <div class=\"align-self-center\">
                    <a href=\"{{ path_without_space('app_element_create_type_quick', {'type':'qr_generator','category':category.slug}) }}?{{ query }}\" class=\"{{ link_class }}\">
                        <i class=\"material-symbols-sharp\">navigate_next</i>
                    </a>
                </div>
            </div>
        </li>

        {%- set menu = app_customer_tools_menu() -%}
        {%- if  0 < menu|length -%}
            {%- for entry in menu -%}
                <li class=\"list-group-item\">
                    <div class=\"d-flex\">
                        <div class=\"flex-grow-1\">
                            <strong>{{ entry.type|trans }}</strong>

                            <p class=\"m-0\">{{ (entry.type ~ '_description')|trans }}</p>
                        </div>
                        <div class=\"align-self-center\">
                            <a href=\"{{ path_without_space('app_element_create_type_quick', {'type':entry.type,'category':category.slug}) }}?{{ query }}\" class=\"{{ link_class }}\">
                                <i class=\"material-symbols-sharp\">navigate_next</i>
                            </a>
                        </div>
                    </div>
                </li>
            {%- endfor -%}
        {%- endif -%}
    </ul>
</div>", "@App/element/create/choice_full_tools.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/create/choice_full_tools.html.twig");
    }
}
