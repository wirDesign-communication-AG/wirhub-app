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

/* @App/_layout/default_body_class.html.twig */
class __TwigTemplate_6aabdc99b36e12531419bcf1ed2de1d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/default_body_class.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/default_body_class.html.twig"));

        // line 1
        if ( !(isset($context["is_one_pager"]) || array_key_exists("is_one_pager", $context) ? $context["is_one_pager"] : (function () { throw new RuntimeError('Variable "is_one_pager" does not exist.', 1, $this->source); })())) {
            echo "aside-left--enabled";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1), "get", [0 => $this->extensions['AppBundle\Twig\PhpTwigExtension']->getFunctionEnumSession("APP_SETTING_ASIDE_CLOSED"), 1 => false], "method", false, false, false, 1)) {
                echo " aside-left--closed";
            }
            echo " ";
        }
        echo "is-preloading page page--";
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->env->getFilter('sha1')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1)), 1, 8), "html", null, true);
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            echo " is-user";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_layout/default_body_class.html.twig";
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
        return new Source("{% if not is_one_pager %}aside-left--enabled{% if app.session.get(enum_session('APP_SETTING_ASIDE_CLOSED'), false) %} aside-left--closed{% endif %} {% endif %}is-preloading page page--{{ app.request.get('_route')|sha1|slice(1,8) }}{% if is_granted('ROLE_USER') %} is-user{% endif %}", "@App/_layout/default_body_class.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_layout/default_body_class.html.twig");
    }
}
