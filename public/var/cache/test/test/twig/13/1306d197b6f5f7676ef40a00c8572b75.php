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

/* @App/_parcels/app_layout_form_global_contact_button.html.twig */
class __TwigTemplate_63f40651b6e9651d4d2bdd2fb5221aaa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_parcels/app_layout_form_global_contact_button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_parcels/app_layout_form_global_contact_button.html.twig"));

        // line 1
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN")) && $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_FORM_GLOBAL_CONTACT_ENABLED")))) {
            // line 2
            $context["button"] = _twig_default_filter($this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(((twig_constant("AppBundle\\Entity\\Config::TYPE_FORM_GLOBAL_CONTACT_BUTTON") . "--") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2))), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contact"));
            // line 3
            echo "<div class=\"form-global-contact\">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_feature_form_global_contact"), "html", null, true);
            echo "\" class=\"form-global-contact__link\" data-module=\"features/FormGlobalContact\">";
            // line 5
            $context["file"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_FORM_GLOBAL_CONTACT_ICON"));
            // line 6
            if ((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 6, $this->source); })())) {
                // line 7
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\FileTwigExtension']->getPath((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 7, $this->source); })())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 7, $this->source); })()), "html", null, true);
                echo "\"/>";
            } else {
                // line 9
                echo "<i class=\"material-symbols-sharp\">help</i>";
            }
            // line 11
            echo twig_escape_filter($this->env, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 11, $this->source); })()), "html", null, true);
            // line 12
            echo "</a>

        <div class=\"form-global-contact__form\"></div>
    </div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_parcels/app_layout_form_global_contact_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  67 => 11,  64 => 9,  57 => 7,  55 => 6,  53 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if is_granted('ROLE_USER') and not is_granted('ROLE_PREVIOUS_ADMIN') and constant('AppBundle\\\\Entity\\\\Config::TYPE_FORM_GLOBAL_CONTACT_ENABLED')|app_config_get_value_by_key -%}
    {%- set button =  (constant('AppBundle\\\\Entity\\\\Config::TYPE_FORM_GLOBAL_CONTACT_BUTTON') ~ '--' ~ app.request.locale)|app_config_get_value_by_key|default('contact'|trans) -%}
    <div class=\"form-global-contact\">
        <a href=\"{{ path_without_space('app_feature_form_global_contact') }}\" class=\"form-global-contact__link\" data-module=\"features/FormGlobalContact\">
            {%- set file = constant('AppBundle\\\\Entity\\\\Config::TYPE_FORM_GLOBAL_CONTACT_ICON')|app_config_get_value_by_key -%}
            {%- if file -%}
                <img src=\"{{ file|app_file_get_path }}\" alt=\"{{ button }}\"/>
            {%- else -%}
                <i class=\"material-symbols-sharp\">help</i>
            {%- endif -%}
            {{- button -}}
        </a>

        <div class=\"form-global-contact__form\"></div>
    </div>
{%- endif -%}", "@App/_parcels/app_layout_form_global_contact_button.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_parcels/app_layout_form_global_contact_button.html.twig");
    }
}
