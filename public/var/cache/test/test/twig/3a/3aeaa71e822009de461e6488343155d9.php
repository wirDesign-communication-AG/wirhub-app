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

/* @App/app_no_login.html.twig */
class __TwigTemplate_b70a8df3f04896bd281986e38861ef14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta_description' => [$this, 'block_meta_description'],
            'login_logo' => [$this, 'block_login_logo'],
            'body_content' => [$this, 'block_body_content'],
            'body_scripts' => [$this, 'block_body_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/app_no_login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/app_no_login.html.twig"));

        // line 1
        $context["default_theme"] = $this->extensions['AppBundle\Twig\SettingTwigExtension']->getThemeDefault();
        // line 2
        $context["entity_user"] = "AppBundle:User";
        // line 4
        $context["title"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_TEMPLATE_TITLE"));
        // line 5
        $context["config_favicon"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_TEMPLATE_FAVICON_UPLOAD"));
        // line 7
        $context["login_background"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_DESIGN_LOGIN_BACKGROUND"));
        // line 8
        if ((0 < twig_length_filter($this->env, (isset($context["login_background"]) || array_key_exists("login_background", $context) ? $context["login_background"] : (function () { throw new RuntimeError('Variable "login_background" does not exist.', 8, $this->source); })())))) {
            // line 9
            $context["login_background_file"] = $this->extensions['AppBundle\Twig\FileTwigExtension']->get((isset($context["login_background"]) || array_key_exists("login_background", $context) ? $context["login_background"] : (function () { throw new RuntimeError('Variable "login_background" does not exist.', 9, $this->source); })()));
            // line 10
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["login_background_file"]) || array_key_exists("login_background_file", $context) ? $context["login_background_file"] : (function () { throw new RuntimeError('Variable "login_background_file" does not exist.', 10, $this->source); })()), "video", [], "any", false, false, false, 10)) {
                // line 11
                $context["login_background_image"] = $this->extensions['AppBundle\Twig\FileTwigExtension']->getPath((isset($context["login_background_file"]) || array_key_exists("login_background_file", $context) ? $context["login_background_file"] : (function () { throw new RuntimeError('Variable "login_background_file" does not exist.', 11, $this->source); })()));
            }
        } else {
            // line 14
            $context["login_background_image"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/images/Login.svg");
        }
        // line 17
        $context["login_hide_logo"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_DESIGN_LOGIN_HIDE_LOGO"));
        // line 18
        $context["login_headline"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_DESIGN_LOGIN_HEADLINE"));
        // line 20
        $context["template_scripts_on_login"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_TEMPLATE_SCRIPTS_LOGIN"));
        // line 22
        if ((isset($context["template_scripts_on_login"]) || array_key_exists("template_scripts_on_login", $context) ? $context["template_scripts_on_login"] : (function () { throw new RuntimeError('Variable "template_scripts_on_login" does not exist.', 22, $this->source); })())) {
            // line 23
            $context["config_tracking_google_tag_manager"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_CONNECTION_GOOGLE_TAG_MANAGER"));
        } else {
            // line 25
            $context["config_tracking_google_tag_manager"] = false;
        }
        // line 28
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>

    <title>";
        // line 33
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 34
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">";
        // line 39
        if ((isset($context["config_tracking_google_tag_manager"]) || array_key_exists("config_tracking_google_tag_manager", $context) ? $context["config_tracking_google_tag_manager"] : (function () { throw new RuntimeError('Variable "config_tracking_google_tag_manager" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "<script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
                const f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l !== 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["config_tracking_google_tag_manager"]) || array_key_exists("config_tracking_google_tag_manager", $context) ? $context["config_tracking_google_tag_manager"] : (function () { throw new RuntimeError('Variable "config_tracking_google_tag_manager" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "');
        </script>";
        }
        // line 52
        $context["theme"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "query", [], "any", false, false, false, 52), "get", [0 => "theme", 1 => (isset($context["default_theme"]) || array_key_exists("default_theme", $context) ? $context["default_theme"] : (function () { throw new RuntimeError('Variable "default_theme" does not exist.', 52, $this->source); })())], "method", false, false, false, 52);
        // line 53
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterFileVersion($this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_theme_minified", ["theme" => (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 53, $this->source); })()), "fileName" => "styleguide"])), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>";
        // line 55
        if ((isset($context["config_favicon"]) || array_key_exists("config_favicon", $context) ? $context["config_favicon"] : (function () { throw new RuntimeError('Variable "config_favicon" does not exist.', 55, $this->source); })())) {
            // line 56
            $context["favicon"] = $this->extensions['AppBundle\Twig\FileTwigExtension']->getPath((isset($context["config_favicon"]) || array_key_exists("config_favicon", $context) ? $context["config_favicon"] : (function () { throw new RuntimeError('Variable "config_favicon" does not exist.', 56, $this->source); })()));
        } else {
            // line 58
            $context["favicon"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_favicon");
        }
        // line 61
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new RuntimeError('Variable "favicon" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "\"/>";
        // line 63
        if ((isset($context["template_scripts_on_login"]) || array_key_exists("template_scripts_on_login", $context) ? $context["template_scripts_on_login"] : (function () { throw new RuntimeError('Variable "template_scripts_on_login" does not exist.', 63, $this->source); })())) {
            // line 64
            echo $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_scripts_head");
        }
        // line 66
        echo "</head>
<body class=\"wd--page-";
        // line 67
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->env->getFilter('sha1')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "get", [0 => "_route"], "method", false, false, false, 67)), 1, 8), "html", null, true);
        echo " wd--page-security\"
      ";
        // line 68
        if (array_key_exists("login_background_image", $context)) {
            echo "style=\"background-image: url(";
            echo twig_escape_filter($this->env, (isset($context["login_background_image"]) || array_key_exists("login_background_image", $context) ? $context["login_background_image"] : (function () { throw new RuntimeError('Variable "login_background_image" does not exist.', 68, $this->source); })()), "html", null, true);
            echo ")\"";
        }
        echo ">";
        // line 70
        if ((isset($context["config_tracking_google_tag_manager"]) || array_key_exists("config_tracking_google_tag_manager", $context) ? $context["config_tracking_google_tag_manager"] : (function () { throw new RuntimeError('Variable "config_tracking_google_tag_manager" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "<noscript>
        <iframe src=\"https://www.googletagmanager.com/ns.html?id=";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["config_tracking_google_tag_manager"]) || array_key_exists("config_tracking_google_tag_manager", $context) ? $context["config_tracking_google_tag_manager"] : (function () { throw new RuntimeError('Variable "config_tracking_google_tag_manager" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "\"
                height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
    </noscript>";
        }
        // line 77
        if ((array_key_exists("login_background_file", $context) && twig_get_attribute($this->env, $this->source, (isset($context["login_background_file"]) || array_key_exists("login_background_file", $context) ? $context["login_background_file"] : (function () { throw new RuntimeError('Variable "login_background_file" does not exist.', 77, $this->source); })()), "video", [], "any", false, false, false, 77))) {
            // line 78
            echo "<div class=\"fullscreen-background\">
        <video autoplay muted loop>
            <source src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\FileTwigExtension']->getPath((isset($context["login_background_file"]) || array_key_exists("login_background_file", $context) ? $context["login_background_file"] : (function () { throw new RuntimeError('Variable "login_background_file" does not exist.', 80, $this->source); })())), "html", null, true);
            echo "\" type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["login_background_file"]) || array_key_exists("login_background_file", $context) ? $context["login_background_file"] : (function () { throw new RuntimeError('Variable "login_background_file" does not exist.', 80, $this->source); })()), "mimeType", [], "any", false, false, false, 80), "html", null, true);
            echo "\">
        </video>
    </div>";
        }
        // line 85
        echo "<div class=\"d-flex h-100\">
    <div class=\"form-container ml-auto mr-auto mr-md-0 d-flex flex-column justify-content-center\">

        <div class=\"d-flex flex-column w-100 mt-auto\">

            ";
        // line 91
        $this->displayBlock('login_logo', $context, $blocks);
        // line 108
        if ((isset($context["login_headline"]) || array_key_exists("login_headline", $context) ? $context["login_headline"] : (function () { throw new RuntimeError('Variable "login_headline" does not exist.', 108, $this->source); })())) {
            // line 109
            echo "<h1>";
            echo twig_escape_filter($this->env, (isset($context["login_headline"]) || array_key_exists("login_headline", $context) ? $context["login_headline"] : (function () { throw new RuntimeError('Variable "login_headline" does not exist.', 109, $this->source); })()), "html", null, true);
            echo "</h1>";
        }
        // line 114
        $this->displayBlock('body_content', $context, $blocks);
        // line 118
        echo "
        </div>";
        // line 122
        $context["config_tos_enabled"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_LEGAL_INTERNAL_SITE_TOS_ENABLED"));
        // line 123
        if ($this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_LEGAL_INTERNAL_SITES"))) {
            // line 124
            $context["config_imprint"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_legal_imprint");
            // line 125
            $context["config_privacy"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_legal_privacy");
            // line 126
            $context["config_tos"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_legal_tos");
        } else {
            // line 128
            $context["config_privacy"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_privacy");
            // line 129
            $context["config_imprint"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_imprint");
            // line 131
            if ((isset($context["config_tos_enabled"]) || array_key_exists("config_tos_enabled", $context) ? $context["config_tos_enabled"] : (function () { throw new RuntimeError('Variable "config_tos_enabled" does not exist.', 131, $this->source); })())) {
                // line 132
                $context["config_tos"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_tos");
            }
        }
        // line 136
        echo "<div class=\"mt-auto text-right\">";
        // line 137
        if ((isset($context["config_imprint"]) || array_key_exists("config_imprint", $context) ? $context["config_imprint"] : (function () { throw new RuntimeError('Variable "config_imprint" does not exist.', 137, $this->source); })())) {
            // line 138
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["config_imprint"]) || array_key_exists("config_imprint", $context) ? $context["config_imprint"] : (function () { throw new RuntimeError('Variable "config_imprint" does not exist.', 138, $this->source); })()), "html", null, true);
            echo "\" target=\"_blank\" class=\"pr-3\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("config_template_imprint"), "html", null, true);
            echo "</a>";
        }
        // line 141
        if ((isset($context["config_privacy"]) || array_key_exists("config_privacy", $context) ? $context["config_privacy"] : (function () { throw new RuntimeError('Variable "config_privacy" does not exist.', 141, $this->source); })())) {
            // line 142
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["config_privacy"]) || array_key_exists("config_privacy", $context) ? $context["config_privacy"] : (function () { throw new RuntimeError('Variable "config_privacy" does not exist.', 142, $this->source); })()), "html", null, true);
            echo "\" target=\"_blank\" class=\"pr-3\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("config_template_privacy"), "html", null, true);
            echo "</a>";
        }
        // line 145
        if (((isset($context["config_tos_enabled"]) || array_key_exists("config_tos_enabled", $context) ? $context["config_tos_enabled"] : (function () { throw new RuntimeError('Variable "config_tos_enabled" does not exist.', 145, $this->source); })()) && (isset($context["config_tos"]) || array_key_exists("config_tos", $context) ? $context["config_tos"] : (function () { throw new RuntimeError('Variable "config_tos" does not exist.', 145, $this->source); })()))) {
            // line 146
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["config_tos"]) || array_key_exists("config_tos", $context) ? $context["config_tos"] : (function () { throw new RuntimeError('Variable "config_tos" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("config_template_tos"), "html", null, true);
            echo "</a>";
        }
        // line 148
        echo "        </div>

    </div>
</div>

";
        // line 153
        $this->displayBlock('body_scripts', $context, $blocks);
        // line 160
        $context["messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "session", [], "any", false, false, false, 160), "flashBag", [], "any", false, false, false, 160), "keys", [], "method", false, false, false, 160);
        // line 161
        if ((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 161, $this->source); })())) {
            // line 162
            echo "<script type=\"text/javascript\">
        ";
            // line 163
            $this->loadTemplate("@App/_layout/snackbar.html.twig", "@App/app_no_login.html.twig", 163)->display($context);
            // line 164
            echo "    </script>";
        }
        // line 167
        if ((isset($context["template_scripts_on_login"]) || array_key_exists("template_scripts_on_login", $context) ? $context["template_scripts_on_login"] : (function () { throw new RuntimeError('Variable "template_scripts_on_login" does not exist.', 167, $this->source); })())) {
            echo $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_scripts");
        }
        // line 168
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 33
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 33, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_login_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_logo"));

        // line 92
        if ( !(isset($context["login_hide_logo"]) || array_key_exists("login_hide_logo", $context) ? $context["login_hide_logo"] : (function () { throw new RuntimeError('Variable "login_hide_logo" does not exist.', 92, $this->source); })())) {
            // line 93
            echo "<div class=\"logo\">";
            // line 94
            $context["logo"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_logo_upload");
            // line 95
            if ((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 95, $this->source); })())) {
                // line 96
                $context["logo_file"] = $this->extensions['AppBundle\Twig\FileTwigExtension']->get((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 96, $this->source); })()));
                // line 97
                $context["logo"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_asset_file_inline", ["randomId" => twig_get_attribute($this->env, $this->source, (isset($context["logo_file"]) || array_key_exists("logo_file", $context) ? $context["logo_file"] : (function () { throw new RuntimeError('Variable "logo_file" does not exist.', 97, $this->source); })()), "randomId", [], "any", false, false, false, 97), "fileNameAscii" => twig_get_attribute($this->env, $this->source, (isset($context["logo_file"]) || array_key_exists("logo_file", $context) ? $context["logo_file"] : (function () { throw new RuntimeError('Variable "logo_file" does not exist.', 97, $this->source); })()), "nameAscii", [], "any", false, false, false, 97)]);
            } else {
                // line 99
                $context["logo"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_logo");
            }
            // line 102
            echo "<img alt=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 102, $this->source); })()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 102, $this->source); })()), "html", null, true);
            echo "\"/>
                    </div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 114
    public function block_body_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_content"));

        // line 115
        echo "

            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 153
    public function block_body_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_scripts"));

        // line 154
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterFileVersion($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/js/app.min.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@App/app_no_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 154,  389 => 153,  377 => 115,  367 => 114,  351 => 102,  348 => 99,  345 => 97,  343 => 96,  341 => 95,  339 => 94,  337 => 93,  335 => 92,  325 => 91,  307 => 34,  288 => 33,  277 => 168,  273 => 167,  270 => 164,  268 => 163,  265 => 162,  263 => 161,  261 => 160,  259 => 153,  252 => 148,  245 => 146,  243 => 145,  236 => 142,  234 => 141,  227 => 138,  225 => 137,  223 => 136,  219 => 132,  217 => 131,  215 => 129,  213 => 128,  210 => 126,  208 => 125,  206 => 124,  204 => 123,  202 => 122,  199 => 118,  197 => 114,  192 => 109,  190 => 108,  188 => 91,  181 => 85,  173 => 80,  169 => 78,  167 => 77,  161 => 72,  158 => 71,  156 => 70,  149 => 68,  145 => 67,  142 => 66,  139 => 64,  137 => 63,  133 => 61,  130 => 58,  127 => 56,  125 => 55,  121 => 53,  119 => 52,  114 => 48,  104 => 40,  102 => 39,  96 => 34,  92 => 33,  85 => 28,  82 => 25,  79 => 23,  77 => 22,  75 => 20,  73 => 18,  71 => 17,  68 => 14,  64 => 11,  62 => 10,  60 => 9,  58 => 8,  56 => 7,  54 => 5,  52 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set default_theme = setting_theme_default() -%}
{%- set entity_user = 'AppBundle:User' -%}

{%- set title = constant('AppBundle\\\\Entity\\\\Config::TYPE_TEMPLATE_TITLE')|app_config_get_value_by_key -%}
{%- set config_favicon = constant('AppBundle\\\\Entity\\\\Config::TYPE_TEMPLATE_FAVICON_UPLOAD')|app_config_get_value_by_key -%}

{%- set login_background = constant('AppBundle\\\\Entity\\\\Config::TYPE_DESIGN_LOGIN_BACKGROUND')|app_config_get_value_by_key -%}
{%- if 0 < login_background|length -%}
    {%- set login_background_file = login_background|app_file_get -%}
    {%- if not login_background_file.video -%}
        {%- set login_background_image = login_background_file|app_file_get_path -%}
    {%- endif -%}
{%- else -%}
    {%- set login_background_image = asset('bundles/app/images/Login.svg') -%}
{%- endif -%}

{%- set login_hide_logo = constant('AppBundle\\\\Entity\\\\Config::TYPE_DESIGN_LOGIN_HIDE_LOGO')|app_config_get_value_by_key -%}
{%- set login_headline = constant('AppBundle\\\\Entity\\\\Config::TYPE_DESIGN_LOGIN_HEADLINE')|app_config_get_value_by_key -%}

{%- set template_scripts_on_login = constant('AppBundle\\\\Entity\\\\Config::TYPE_TEMPLATE_SCRIPTS_LOGIN')|app_config_get_value_by_key -%}

{%- if template_scripts_on_login -%}
    {%- set config_tracking_google_tag_manager = constant('AppBundle\\\\Entity\\\\Config::TYPE_CONNECTION_GOOGLE_TAG_MANAGER')|app_config_get_value_by_key -%}
{%- else -%}
    {%- set config_tracking_google_tag_manager = false -%}
{%- endif -%}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>

    <title>{% block title %}{{ title }}{% endblock %}</title>
    <meta name=\"description\" content=\"{% block meta_description %}{% endblock %}\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    {%- if config_tracking_google_tag_manager -%}
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
                const f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l !== 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '{{ config_tracking_google_tag_manager }}');
        </script>
    {%- endif -%}

    {%- set theme = app.request.query.get('theme',default_theme) -%}
    <link href=\"{{ path('app_theme_minified', {'theme':theme,'fileName':'styleguide'})|file_version }}\" rel=\"stylesheet\" type=\"text/css\"/>

    {%- if config_favicon -%}
        {%- set favicon = config_favicon|app_file_get_path -%}
    {%- else -%}
        {% set favicon = 'config_template_favicon'|app_config_get_value_by_key|raw %}
    {%- endif -%}

    <link rel=\"shortcut icon\" href=\"{{ favicon }}\"/>

    {%- if template_scripts_on_login -%}
        {{- 'config_template_scripts_head'|app_config_get_value_by_key|raw -}}
    {%- endif -%}
</head>
<body class=\"wd--page-{{ app.request.get('_route')|sha1|slice(1,8) }} wd--page-security\"
      {% if login_background_image is defined -%}style=\"background-image: url({{ login_background_image }})\" {%- endif %}>

{%- if config_tracking_google_tag_manager -%}
    <noscript>
        <iframe src=\"https://www.googletagmanager.com/ns.html?id={{ config_tracking_google_tag_manager }}\"
                height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
    </noscript>
{%- endif -%}

{%- if login_background_file is defined and login_background_file.video -%}
    <div class=\"fullscreen-background\">
        <video autoplay muted loop>
            <source src=\"{{ login_background_file|app_file_get_path }}\" type=\"{{ login_background_file.mimeType }}\">
        </video>
    </div>
{%- endif -%}

<div class=\"d-flex h-100\">
    <div class=\"form-container ml-auto mr-auto mr-md-0 d-flex flex-column justify-content-center\">

        <div class=\"d-flex flex-column w-100 mt-auto\">

            {# Logo #}
            {%- block login_logo -%}
                {%- if not login_hide_logo -%}
                    <div class=\"logo\">
                        {%- set logo = 'config_template_logo_upload'|app_config_get_value_by_key -%}
                        {%- if logo -%}
                            {%- set logo_file = logo|app_file_get -%}
                            {%- set logo = path('app_asset_file_inline', {'randomId':logo_file.randomId, 'fileNameAscii': logo_file.nameAscii}) -%}
                        {%- else -%}
                            {%- set logo = 'config_template_logo'|app_config_get_value_by_key|raw -%}
                        {%- endif -%}

                        <img alt=\"{{ title }}\" src=\"{{ logo }}\"/>
                    </div>
                {%- endif -%}
            {%- endblock -%}

            {# Headline #}
            {%- if login_headline -%}
                <h1>{{ login_headline }}</h1>
            {%- endif -%}



            {% block body_content %}


            {% endblock %}

        </div>

        {#- Privacy and Imprint #}
        {%- set config_tos_enabled = constant('AppBundle\\\\Entity\\\\Config::TYPE_LEGAL_INTERNAL_SITE_TOS_ENABLED')|app_config_get_value_by_key -%}
        {%- if constant('AppBundle\\\\Entity\\\\Config::TYPE_LEGAL_INTERNAL_SITES')|app_config_get_value_by_key -%}
            {%- set config_imprint = path_without_space('app_default_legal_imprint') %}
            {%- set config_privacy = path_without_space('app_default_legal_privacy') %}
            {%- set config_tos = path_without_space('app_default_legal_tos') %}
        {%- else -%}
            {%- set config_privacy = 'config_template_privacy'|app_config_get_value_by_key -%}
            {%- set config_imprint = 'config_template_imprint'|app_config_get_value_by_key -%}

            {%- if config_tos_enabled -%}
                {%- set config_tos = 'config_template_tos'|app_config_get_value_by_key -%}
            {%- endif -%}
        {%- endif -%}

        <div class=\"mt-auto text-right\">
            {%- if config_imprint -%}
                <a href=\"{{ config_imprint }}\" target=\"_blank\" class=\"pr-3\">{{ 'config_template_imprint'|trans }}</a>
            {%- endif -%}

            {%- if config_privacy -%}
                <a href=\"{{ config_privacy }}\" target=\"_blank\" class=\"pr-3\">{{ 'config_template_privacy'|trans }}</a>
            {%- endif %}

            {%- if config_tos_enabled and config_tos -%}
                <a href=\"{{ config_tos }}\" target=\"_blank\">{{ 'config_template_tos'|trans }}</a>
            {%- endif %}
        </div>

    </div>
</div>

{% block body_scripts %}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/app.min.js')|file_version }}\"></script>
{% endblock %}

{#-
Success messages as snackbar
#}
{%- set messages = app.session.flashBag.keys() -%}
{%- if messages -%}
    <script type=\"text/javascript\">
        {% include \"@App/_layout/snackbar.html.twig\" %}
    </script>
{%- endif -%}

{%- if template_scripts_on_login -%}{{- 'config_template_scripts'|app_config_get_value_by_key|raw -}}{%- endif -%}
</body>
</html>", "@App/app_no_login.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/app_no_login.html.twig");
    }
}
