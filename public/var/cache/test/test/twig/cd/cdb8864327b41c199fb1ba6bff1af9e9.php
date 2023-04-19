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

/* @App/_components/info_icon.html.twig */
class __TwigTemplate_1afee7e733ec521c1b5f41768526f59c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_components/info_icon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_components/info_icon.html.twig"));

        // line 1
        $context["icon_text_style"] = ((array_key_exists("icon_text_style", $context)) ? (_twig_default_filter((isset($context["icon_text_style"]) || array_key_exists("icon_text_style", $context) ? $context["icon_text_style"] : (function () { throw new RuntimeError('Variable "icon_text_style" does not exist.', 1, $this->source); })()), "muted")) : ("muted"));
        // line 2
        echo "<div class=\"text-center m-5\">
    <i class=\"material-symbols-sharp text-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["icon_text_style"]) || array_key_exists("icon_text_style", $context) ? $context["icon_text_style"] : (function () { throw new RuntimeError('Variable "icon_text_style" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " font-size--600p\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 3, $this->source); })()), "info")) : ("info")), "html", null, true);
        echo "</i>

    <p class=\"mt-4\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })())), "html", null, true);
        echo "</p>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_components/info_icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 5,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set icon_text_style = icon_text_style|default('muted') -%}
<div class=\"text-center m-5\">
    <i class=\"material-symbols-sharp text-{{ icon_text_style }} font-size--600p\">{{ icon|default('info') }}</i>

    <p class=\"mt-4\">{{ message|trans }}</p>
</div>", "@App/_components/info_icon.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_components/info_icon.html.twig");
    }
}
