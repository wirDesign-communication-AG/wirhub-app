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

/* @App/category/_parcels/edit_sidebar.html.twig */
class __TwigTemplate_42aa972e5c50f5e899db440ebda1832a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/category/_parcels/edit_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/category/_parcels/edit_sidebar.html.twig"));

        // line 1
        echo "<div class=\"editor--sidebar\">
    <ul class=\"list-unstyled\">
        <li class=\"open\" data-tab=\".layers\"><i class=\"material-symbols-sharp\">layers</i></li>
        <li data-tab=\".tune\"><i class=\"material-symbols-sharp\">tune</i></li>
    </ul>

    <div class=\"layers open\">
        <h3>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("smart_blocks"), "html", null, true);
        echo "</h3>

        <ul class=\"list-unstyled\">
            <template>
                <li><i class=\"material-symbols-sharp sorting-selector\">drag_handle</i> <span class=\"goto\"></span> <i class=\"material-symbols-sharp edit\">edit</i></li>
            </template>
        </ul>
    </div>
    <div class=\"tune\">
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("quick_edit"), "html", null, true);
        echo "</h3>

        <p class=\"hint\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("select_smartblock_first"), "html", null, true);
        echo "</p>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/category/_parcels/edit_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  64 => 17,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"editor--sidebar\">
    <ul class=\"list-unstyled\">
        <li class=\"open\" data-tab=\".layers\"><i class=\"material-symbols-sharp\">layers</i></li>
        <li data-tab=\".tune\"><i class=\"material-symbols-sharp\">tune</i></li>
    </ul>

    <div class=\"layers open\">
        <h3>{{ 'smart_blocks'|trans }}</h3>

        <ul class=\"list-unstyled\">
            <template>
                <li><i class=\"material-symbols-sharp sorting-selector\">drag_handle</i> <span class=\"goto\"></span> <i class=\"material-symbols-sharp edit\">edit</i></li>
            </template>
        </ul>
    </div>
    <div class=\"tune\">
        <h3>{{ 'quick_edit'|trans }}</h3>

        <p class=\"hint\">{{ 'select_smartblock_first'|trans }}</p>
    </div>
</div>", "@App/category/_parcels/edit_sidebar.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/category/_parcels/edit_sidebar.html.twig");
    }
}
