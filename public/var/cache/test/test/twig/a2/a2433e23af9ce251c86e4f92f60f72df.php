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

/* @App/_layout/spinner.html.twig */
class __TwigTemplate_5dc042b54835c86259c98d68ef011dfa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/spinner.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/spinner.html.twig"));

        // line 1
        $context["style"] = "position: fixed; border: 0; margin: 0; padding: 0; cursor: wait;";
        // line 2
        echo "<div class=\"wd--preload\">
    <div style=\"display:none;\" class=\"blockUI\"></div>
    <div style=\"z-index: 2000; ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " width: 100%; height: 100%; top: 0; left: 0; background-color: rgb(0, 0, 0); opacity: 0.5;\"
         class=\"blockUI blockOverlay\"></div>

    <div style=\"z-index: 2011; ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " width: auto; top: 50%; left: 50%; text-align: center; color: rgb(0, 0, 0);\"
         class=\"blockUI blockMsg blockPage\">
        <div class=\"m-spinner\"></div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_layout/spinner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set style = 'position: fixed; border: 0; margin: 0; padding: 0; cursor: wait;' -%}
<div class=\"wd--preload\">
    <div style=\"display:none;\" class=\"blockUI\"></div>
    <div style=\"z-index: 2000; {{ style }} width: 100%; height: 100%; top: 0; left: 0; background-color: rgb(0, 0, 0); opacity: 0.5;\"
         class=\"blockUI blockOverlay\"></div>

    <div style=\"z-index: 2011; {{ style }} width: auto; top: 50%; left: 50%; text-align: center; color: rgb(0, 0, 0);\"
         class=\"blockUI blockMsg blockPage\">
        <div class=\"m-spinner\"></div>
    </div>
</div>", "@App/_layout/spinner.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_layout/spinner.html.twig");
    }
}
