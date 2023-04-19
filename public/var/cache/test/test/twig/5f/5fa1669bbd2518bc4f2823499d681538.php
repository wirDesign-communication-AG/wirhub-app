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

/* @App/_layout/bookmarks.html.twig */
class __TwigTemplate_f945ed726859b64674a7ec7c0482472e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/bookmarks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/bookmarks.html.twig"));

        // line 1
        echo "<div class=\"dropdown\">
    <a class=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " dropdown-toggle no-caret\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-expanded=\"false\" data-module=\"components/Dropdown\" data-module-loading=\"false\"
       data-list=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_user_bookmark_list"), "html", null, true);
        echo "\"><i class=\"material-symbols-sharp\">bookmark</i></a>

    <div class=\"bookmarks dropdown-menu dropdown-menu-right\">
        <p class=\"m-5 text-center\"><span class=\"m-spinner\"></span></p>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_layout/bookmarks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dropdown\">
    <a class=\"{{ btn_class }} dropdown-toggle no-caret\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-expanded=\"false\" data-module=\"components/Dropdown\" data-module-loading=\"false\"
       data-list=\"{{ path('app_user_bookmark_list') }}\"><i class=\"material-symbols-sharp\">bookmark</i></a>

    <div class=\"bookmarks dropdown-menu dropdown-menu-right\">
        <p class=\"m-5 text-center\"><span class=\"m-spinner\"></span></p>
    </div>
</div>", "@App/_layout/bookmarks.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_layout/bookmarks.html.twig");
    }
}
