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

/* @App/ajax/toggle_sidebar.html.twig */
class __TwigTemplate_f4fe8f9755e0ceb27e07b5f3bfbb3e98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/ajax/toggle_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/ajax/toggle_sidebar.html.twig"));

        // line 1
        echo "<i class=\"material-symbols-sharp\" data-toggle=\"";
        if ((isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 1, $this->source); })())) {
            echo "hidden";
        } else {
            echo "visible";
        }
        echo "\">";
        if ((isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 1, $this->source); })())) {
            echo "chevron_left";
        } else {
            echo "chevron_right";
        }
        echo "</i>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/ajax/toggle_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<i class=\"material-symbols-sharp\" data-toggle=\"{% if hidden %}hidden{% else %}visible{% endif %}\">{% if hidden %}chevron_left{% else %}chevron_right{% endif %}</i>", "@App/ajax/toggle_sidebar.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/ajax/toggle_sidebar.html.twig");
    }
}
