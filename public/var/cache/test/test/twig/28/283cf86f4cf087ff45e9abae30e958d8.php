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

/* @App/_layout/quick-search.html.twig */
class __TwigTemplate_cb8e725ee488b845b29c455b756c2211 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/quick-search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/quick-search.html.twig"));

        // line 1
        $context["space_slug"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "get", [0 => "_space"], "method", false, false, false, 1);
        // line 3
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\" class=\"quick-search\" data-path=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_search_quick", ["_space" => (isset($context["space_slug"]) || array_key_exists("space_slug", $context) ? $context["space_slug"] : (function () { throw new RuntimeError('Variable "space_slug" does not exist.', 3, $this->source); })())]), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2\">
                <form method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_search_full", ["_space" => (isset($context["space_slug"]) || array_key_exists("space_slug", $context) ? $context["space_slug"] : (function () { throw new RuntimeError('Variable "space_slug" does not exist.', 7, $this->source); })())]), "html", null, true);
        echo "\">
                    <div class=\"quick-search__form\">
                        <i class=\"material-symbols-sharp\">search</i>
                        <input type=\"text\" name=\"query\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search_term_dots"), "html", null, true);
        echo "\" value=\"\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search"), "html", null, true);
        echo "</button>
                    </div>
                </form>

                <div class=\"quick-search__loading d-none\">
                    <div class=\"m-5 text-center\">
                        <div class=\"m-spinner\"></div>
                    </div>
                </div>

                <div class=\"quick-search__result\"></div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_layout/quick-search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  61 => 10,  55 => 7,  45 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set space_slug = app.request.get('_space') -%}

<div id=\"{{ id }}\" class=\"quick-search\" data-path=\"{{ path_without_space('app_search_quick', {'_space':space_slug}) }}\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2\">
                <form method=\"post\" action=\"{{ path_without_space('app_search_full', {'_space':space_slug}) }}\">
                    <div class=\"quick-search__form\">
                        <i class=\"material-symbols-sharp\">search</i>
                        <input type=\"text\" name=\"query\" placeholder=\"{{ 'search_term_dots'|trans }}\" value=\"\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">{{ 'search'|trans }}</button>
                    </div>
                </form>

                <div class=\"quick-search__loading d-none\">
                    <div class=\"m-5 text-center\">
                        <div class=\"m-spinner\"></div>
                    </div>
                </div>

                <div class=\"quick-search__result\"></div>
            </div>
        </div>
    </div>
</div>", "@App/_layout/quick-search.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_layout/quick-search.html.twig");
    }
}
