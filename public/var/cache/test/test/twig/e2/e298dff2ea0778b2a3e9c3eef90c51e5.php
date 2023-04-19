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

/* @App/asset/scripts.html.twig */
class __TwigTemplate_4375738f6c28cb8a66532c5b80448ffc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'module' => [$this, 'block_module'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/asset/scripts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/asset/scripts.html.twig"));

        // line 1
        $context["version"] = $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("VERSION");
        // line 2
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterFileVersion($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/js/app.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_asset_script_runtime", ["version" => (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 3, $this->source); })())]), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
    class wirhubUser {
        static getRole() {
            return";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            echo " \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "roleCore", [], "any", false, false, false, 8), "html", null, true);
            echo "\"";
        } else {
            echo " null";
        }
        echo ";
        }

        static getLegalPopupPath() {
            return";
        // line 12
        if (( !(is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "get", [0 => "_route"], "method", false, false, false, 12)) && is_string($__internal_compile_1 = "app_default_legal_") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))) && $this->extensions['AppBundle\Twig\SettingTwigExtension']->getFunctionLegalPopupShow())) {
            echo " '";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_default_legal_popup"), "html", null, true);
            echo "'";
        } else {
            echo " ''";
        }
        echo ";
        }
    }
</script>";
        // line 26
        $context["_app_asset_path"] = ((array_key_exists("_app_asset_path", $context)) ? (_twig_default_filter((isset($context["_app_asset_path"]) || array_key_exists("_app_asset_path", $context) ? $context["_app_asset_path"] : (function () { throw new RuntimeError('Variable "_app_asset_path" does not exist.', 26, $this->source); })()), (("bundles/app/" . (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 26, $this->source); })())) . "/js/app.min.js"))) : ((("bundles/app/" . (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 26, $this->source); })())) . "/js/app.min.js")));
        // line 27
        $this->displayBlock('module', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_module($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "module"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "module"));

        // line 28
        echo "    <script type=\"module\">

        import App from '";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["_app_asset_path"]) || array_key_exists("_app_asset_path", $context) ? $context["_app_asset_path"] : (function () { throw new RuntimeError('Variable "_app_asset_path" does not exist.', 30, $this->source); })())), "html", null, true);
        echo "';

        const app = new App(AppConfig);
        new wirhub(app);

        window.app = app;
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@App/asset/scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  105 => 28,  86 => 27,  84 => 26,  72 => 12,  59 => 8,  51 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set version = ('VERSION'|_env) -%}
<script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/app.min.js')|file_version }}\"></script>
<script type=\"text/javascript\" src=\"{{ path_without_space('app_asset_script_runtime', {'version': version}) }}\"></script>

<script type=\"text/javascript\">
    class wirhubUser {
        static getRole() {
            return{% if is_granted('ROLE_USER') %} \"{{ app.user.roleCore }}\"{% else %} null{% endif %};
        }

        static getLegalPopupPath() {
            return{% if not (app.request.get('_route') starts with 'app_default_legal_') and setting_legal_popup_show() %} '{{ path('app_default_legal_popup') }}'{%- else %} ''{% endif %};
        }
    }
</script>

{#-
<script type=\"importmap\">
    {
      \"imports\": {
        \"app\": \"\"
      }
    }
</script>
-#}
{%- set _app_asset_path = _app_asset_path|default('bundles/app/' ~ version ~ '/js/app.min.js') -%}
{% block module %}
    <script type=\"module\">

        import App from '{{ asset(_app_asset_path) }}';

        const app = new App(AppConfig);
        new wirhub(app);

        window.app = app;
    </script>
{% endblock %}", "@App/asset/scripts.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/asset/scripts.html.twig");
    }
}
