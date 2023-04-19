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

/* @App/dashboard/index.html.twig */
class __TwigTemplate_2d70ffd7db4be36f1c2150e1892871b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_body_sub_header_title' => [$this, 'block_layout_body_sub_header_title'],
            'layout_body_sub_header_breadcrumb' => [$this, 'block_layout_body_sub_header_breadcrumb'],
            'body_class' => [$this, 'block_body_class'],
            'page_content' => [$this, 'block_page_content'],
            'body_content' => [$this, 'block_body_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@App/app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("@App/app.html.twig", "@App/dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_layout_body_sub_header_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_body_sub_header_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_body_sub_header_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_layout_body_sub_header_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_body_sub_header_breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_body_sub_header_breadcrumb"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $this->displayParentBlock("body_class", $context, $blocks);
        $this->loadTemplate("@App/_components/smart/body_class.html.twig", "@App/dashboard/index.html.twig", 7)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 12
        if ( !(isset($context["user_has_dashboard"]) || array_key_exists("user_has_dashboard", $context) ? $context["user_has_dashboard"] : (function () { throw new RuntimeError('Variable "user_has_dashboard" does not exist.', 12, $this->source); })())) {
            // line 16
            echo "        <div class=\"mt-5 text-center\">";
            // line 17
            $this->loadTemplate("@App/_components/alert/danger_big.html.twig", "@App/dashboard/index.html.twig", 17)->display(twig_array_merge($context, ["message" => "no_access_granted", "message_text_style" => "default"]));
            // line 19
            $context["contactPerson"] = $this->extensions['AppBundle\Twig\UserTwigExtension']->getFunctionGroupContactPerson();
            // line 20
            if ((isset($context["contactPerson"]) || array_key_exists("contactPerson", $context) ? $context["contactPerson"] : (function () { throw new RuntimeError('Variable "contactPerson" does not exist.', 20, $this->source); })())) {
                // line 21
                echo "<p class=\"mt-4\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("your_contact_person", ["{name}" => twig_get_attribute($this->env, $this->source, (isset($context["contactPerson"]) || array_key_exists("contactPerson", $context) ? $context["contactPerson"] : (function () { throw new RuntimeError('Variable "contactPerson" does not exist.', 21, $this->source); })()), "displayName", [], "any", false, false, false, 21)]), "html", null, true);
                echo "</p>

                <p><a href=\"mailto:";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactPerson"]) || array_key_exists("contactPerson", $context) ? $context["contactPerson"] : (function () { throw new RuntimeError('Variable "contactPerson" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), "html", null, true);
                echo "\" class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contact_by_mail"), "html", null, true);
                echo "</a></p>";
            }
            // line 25
            echo "</div>";
            // line 27
            $this->loadTemplate("@App/category/_parcels/edit_toggle.html.twig", "@App/dashboard/index.html.twig", 27)->display(twig_array_merge($context, ["category" => null]));
        } else {
            // line 30
            if ($this->extensions['AppBundle\Twig\SpaceTwigExtension']->getFunctionDefaultUsed()) {
                // line 31
                $context["type"] = "default";
            } else {
                // line 33
                $context["type"] = "space";
            }
            // line 36
            $this->loadTemplate("@App/Default/index_dynamic.html.twig", "@App/dashboard/index.html.twig", 36)->display(twig_array_merge($context, ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 36, $this->source); })())]));
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_body_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_content"));

        // line 41
        $this->displayParentBlock("body_content", $context, $blocks);
        // line 42
        $this->loadTemplate("@App/_parcels/app_layout_form_global_contact_button.html.twig", "@App/dashboard/index.html.twig", 42)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@App/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 42,  184 => 41,  174 => 40,  163 => 36,  160 => 33,  157 => 31,  155 => 30,  152 => 27,  150 => 25,  144 => 23,  138 => 21,  136 => 20,  134 => 19,  132 => 17,  130 => 16,  128 => 12,  118 => 10,  98 => 7,  80 => 5,  62 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@App/app.html.twig\" %}

{# Remove breadcrumb #}
{% block layout_body_sub_header_title %}{% endblock %}
{% block layout_body_sub_header_breadcrumb %}{% endblock %}

{% block body_class %}{{ parent() }}{% include \"@App/_components/smart/body_class.html.twig\" %}{% endblock %}

{# Content #}
{% block page_content %}

    {%- if not user_has_dashboard -%}
        {#-
        User is not allowed to see anything.
        #}
        <div class=\"mt-5 text-center\">
            {%- include \"@App/_components/alert/danger_big.html.twig\" with {message:'no_access_granted', message_text_style: 'default'} -%}

            {%- set contactPerson = app_user_group_contact_person() -%}
            {%- if contactPerson -%}
                <p class=\"mt-4\">{{ 'your_contact_person'|trans({'{name}':contactPerson.displayName}) }}</p>

                <p><a href=\"mailto:{{ contactPerson.email }}\" class=\"btn btn-primary\">{{ 'contact_by_mail'|trans }}</a></p>
            {%- endif -%}
        </div>

        {%- include \"@App/category/_parcels/edit_toggle.html.twig\" with {'category': null} -%}

    {%- else -%}
        {%- if app_space_default_used() -%}
            {%- set type = 'default' -%}
        {%- else -%}
            {%- set type = 'space' -%}
        {%- endif -%}

        {%- include \"@App/Default/index_dynamic.html.twig\" with {'type':type} -%}
    {%- endif -%}
{% endblock %}

{% block body_content %}
    {{- parent() -}}
    {%- include \"@App/_parcels/app_layout_form_global_contact_button.html.twig\" -%}
{% endblock %}", "@App/dashboard/index.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/dashboard/index.html.twig");
    }
}
