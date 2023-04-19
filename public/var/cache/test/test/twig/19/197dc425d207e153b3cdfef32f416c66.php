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

/* @App/element/smart_block/list_item.html.twig */
class __TwigTemplate_c509ff35e0ec9e11931eb93b54cd10ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/list_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/list_item.html.twig"));

        // line 2
        if ($this->extensions['AppBundle\Twig\UserTwigExtension']->getFunctionSmartEditGranted()) {
            // line 3
            $this->loadTemplate("@App/element/smart_block/toolbar.html.twig", "@App/element/smart_block/list_item.html.twig", 3)->display($context);
        }
        // line 6
        if (array_key_exists("loop", $context)) {
            // line 7
            $context["loop_first"] = twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 7, $this->source); })()), "first", [], "any", false, false, false, 7);
        } else {
            // line 9
            $context["loop_first"] = false;
        }
        // line 12
        $context["template"] = $this->extensions['AppBundle\Twig\Element\SmartBlockTwigExtension']->getFilterTemplate((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 12, $this->source); })()));
        // line 14
        if ($this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterTemplateIsExisting((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 14, $this->source); })()))) {
            // line 15
            if (((twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 15, $this->source); })()), "hasLayoutContainer", [], "any", false, false, false, 15) && ((1 == twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 15, $this->source); })()), "layoutContainer", [], "any", false, false, false, 15)) || (twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 15, $this->source); })()), "original", [], "any", false, false, false, 15) && (1 == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 15, $this->source); })()), "original", [], "any", false, false, false, 15), "layoutContainer", [], "any", false, false, false, 15))))) && ( !array_key_exists("override_layout_container", $context) || (1 == (isset($context["override_layout_container"]) || array_key_exists("override_layout_container", $context) ? $context["override_layout_container"] : (function () { throw new RuntimeError('Variable "override_layout_container" does not exist.', 15, $this->source); })()))))) {
                // line 17
                echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div ";
                // line 20
                echo $this->extensions['AppBundle\Twig\ElementTwigExtension']->getContainerAttributes((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 20, $this->source); })()));
                echo ">";
                // line 22
                $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 22, $this->source); })()), "@App/element/smart_block/list_item.html.twig", 22)->display(twig_array_merge($context, ["element" => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 22, $this->source); })()), "loop_first" => (isset($context["loop_first"]) || array_key_exists("loop_first", $context) ? $context["loop_first"] : (function () { throw new RuntimeError('Variable "loop_first" does not exist.', 22, $this->source); })())]));
                // line 24
                $this->loadTemplate("@App/element/smart_block/comments.html.twig", "@App/element/smart_block/list_item.html.twig", 24)->display(twig_array_merge($context, ["element" => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 24, $this->source); })())]));
                // line 25
                echo "</div>
                </div>
            </div>
        </div>";
            } else {
                // line 31
                echo "        <div ";
                echo $this->extensions['AppBundle\Twig\ElementTwigExtension']->getContainerAttributes((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 31, $this->source); })()));
                echo ">";
                // line 32
                $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 32, $this->source); })()), "@App/element/smart_block/list_item.html.twig", 32)->display(twig_array_merge($context, ["element" => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 32, $this->source); })()), "loop_first" => (isset($context["loop_first"]) || array_key_exists("loop_first", $context) ? $context["loop_first"] : (function () { throw new RuntimeError('Variable "loop_first" does not exist.', 32, $this->source); })())]));
                // line 34
                $this->loadTemplate("@App/element/smart_block/comments.html.twig", "@App/element/smart_block/list_item.html.twig", 34)->display(twig_array_merge($context, ["element" => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 34, $this->source); })())]));
                // line 35
                echo "</div>";
            }
            // line 38
            if ((array_key_exists("include_class", $context) && (true == (isset($context["include_class"]) || array_key_exists("include_class", $context) ? $context["include_class"] : (function () { throw new RuntimeError('Variable "include_class" does not exist.', 38, $this->source); })())))) {
                // line 39
                echo "<input type=\"hidden\" name=\"element_class\" value=\"";
                $this->loadTemplate("@App/element/smart_block/_list/element_class.html.twig", "@App/element/smart_block/list_item.html.twig", 39)->display($context);
                echo "\"/>";
            }
        } else {
            // line 42
            echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">";
            // line 45
            $this->loadTemplate("@App/_components/alert/warning.html.twig", "@App/element/smart_block/list_item.html.twig", 45)->display(twig_array_merge($context, ["text" => "missing_template"]));
            // line 46
            echo "</div>
        </div>
    </div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/smart_block/list_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 46,  103 => 45,  99 => 42,  93 => 39,  91 => 38,  88 => 35,  86 => 34,  84 => 32,  80 => 31,  74 => 25,  72 => 24,  70 => 22,  67 => 20,  62 => 17,  60 => 15,  58 => 14,  56 => 12,  53 => 9,  50 => 7,  48 => 6,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#- Toolbar #}
{%- if app_user_smart_edit_granted() -%}
    {%- include \"@App/element/smart_block/toolbar.html.twig\" -%}
{%- endif -%}

{%- if loop is defined -%}
    {%- set loop_first = loop.first -%}
{%- else -%}
    {%- set loop_first = false -%}
{%- endif -%}

{%- set template = element|app_element_smart_block_template -%}

{%- if template|template_is_existing -%}
    {%- if element.hasLayoutContainer and (1 == element.layoutContainer or (element.original and 1 == element.original.layoutContainer)) and (override_layout_container is not defined or 1 == override_layout_container) -%}
        {#- Boxed #}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div {{ element|app_element_container_attributes|raw }}>

                        {%- include template with {'element':element, 'loop_first': loop_first} -%}

                        {%- include \"@App/element/smart_block/comments.html.twig\" with {'element': element} -%}
                    </div>
                </div>
            </div>
        </div>
    {%- else -%}
        {#- Fluid or Full width #}
        <div {{ element|app_element_container_attributes|raw }}>
            {%- include template with {'element':element, 'loop_first': loop_first} -%}

            {%- include \"@App/element/smart_block/comments.html.twig\" with {'element': element} -%}
        </div>
    {%- endif -%}

    {%- if include_class is defined and true == include_class -%}
        <input type=\"hidden\" name=\"element_class\" value=\"{% include \"@App/element/smart_block/_list/element_class.html.twig\" %}\"/>
    {%- endif -%}
{% else %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                {%- include \"@App/_components/alert/warning.html.twig\" with {'text': 'missing_template'} -%}
            </div>
        </div>
    </div>
{%- endif -%}", "@App/element/smart_block/list_item.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/smart_block/list_item.html.twig");
    }
}
