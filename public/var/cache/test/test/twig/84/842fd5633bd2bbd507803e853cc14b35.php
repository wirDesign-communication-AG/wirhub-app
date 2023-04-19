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

/* @App/_layout/default.html.twig */
class __TwigTemplate_50286f906023ddf5a7b9a342eb4c1374 extends Template
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
            'head_webfont' => [$this, 'block_head_webfont'],
            'head_styles' => [$this, 'block_head_styles'],
            'head_favicon_href' => [$this, 'block_head_favicon_href'],
            'head_additional' => [$this, 'block_head_additional'],
            'body_class' => [$this, 'block_body_class'],
            'body_attr' => [$this, 'block_body_attr'],
            'body_content' => [$this, 'block_body_content'],
            'layout_body' => [$this, 'block_layout_body'],
            'layout_body_aside_left' => [$this, 'block_layout_body_aside_left'],
            'navbar_container_class' => [$this, 'block_navbar_container_class'],
            'navbar_class' => [$this, 'block_navbar_class'],
            'navbar' => [$this, 'block_navbar'],
            'layout_body_wrapper_class' => [$this, 'block_layout_body_wrapper_class'],
            'layout_content_class' => [$this, 'block_layout_content_class'],
            'messages' => [$this, 'block_messages'],
            'page_content' => [$this, 'block_page_content'],
            'layout_footer_copyright' => [$this, 'block_layout_footer_copyright'],
            'layout_footer_menu_items' => [$this, 'block_layout_footer_menu_items'],
            'body_scripts' => [$this, 'block_body_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/default.html.twig"));

        // line 1
        $context["config_tracking_google_tag_manager"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_CONNECTION_GOOGLE_TAG_MANAGER"));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>

    <meta name=\"format-detection\" content=\"telephone=no\"/>

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">";
        // line 15
        if ((isset($context["config_tracking_google_tag_manager"]) || array_key_exists("config_tracking_google_tag_manager", $context) ? $context["config_tracking_google_tag_manager"] : (function () { throw new RuntimeError('Variable "config_tracking_google_tag_manager" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "<script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l !== 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["config_tracking_google_tag_manager"]) || array_key_exists("config_tracking_google_tag_manager", $context) ? $context["config_tracking_google_tag_manager"] : (function () { throw new RuntimeError('Variable "config_tracking_google_tag_manager" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "');
        </script>";
        }
        // line 28
        echo $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_scripts_head");
        // line 30
        $this->displayBlock('head_webfont', $context, $blocks);
        // line 31
        echo "
    ";
        // line 32
        $this->displayBlock('head_styles', $context, $blocks);
        // line 33
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 34
        $this->displayBlock('head_favicon_href', $context, $blocks);
        echo "\"/>

    ";
        // line 36
        $this->displayBlock('head_additional', $context, $blocks);
        // line 37
        echo "</head>";
        // line 39
        if ( !array_key_exists("space", $context)) {
            // line 40
            $context["space"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getFunctionActive();
        }
        // line 43
        $context["is_one_pager"] = (((isset($context["space"]) || array_key_exists("space", $context) ? $context["space"] : (function () { throw new RuntimeError('Variable "space" does not exist.', 43, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["space"]) || array_key_exists("space", $context) ? $context["space"] : (function () { throw new RuntimeError('Variable "space" does not exist.', 43, $this->source); })()), "onePager", [], "any", false, false, false, 43)) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR"));
        // line 44
        if ((true == (isset($context["is_one_pager"]) || array_key_exists("is_one_pager", $context) ? $context["is_one_pager"] : (function () { throw new RuntimeError('Variable "is_one_pager" does not exist.', 44, $this->source); })()))) {
            // line 45
            $context["hide_search"] = true;
        }
        // line 47
        echo "<body data-metrics-token=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\MetricsTwigExtension']->getFilterToken(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47)), "html", null, true);
        echo "\" class=\"";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\"";
        // line 48
        $this->displayBlock('body_attr', $context, $blocks);
        if (array_key_exists("page_module", $context)) {
            echo " data-page=\"";
            echo twig_escape_filter($this->env, (isset($context["page_module"]) || array_key_exists("page_module", $context) ? $context["page_module"] : (function () { throw new RuntimeError('Variable "page_module" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo " data-aside-sort=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\MenuTwigExtension']->getFilterSorting(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48)), "html", null, true);
        echo "\">";
        // line 50
        if ((isset($context["config_tracking_google_tag_manager"]) || array_key_exists("config_tracking_google_tag_manager", $context) ? $context["config_tracking_google_tag_manager"] : (function () { throw new RuntimeError('Variable "config_tracking_google_tag_manager" does not exist.', 50, $this->source); })())) {
            // line 51
            echo "<noscript>
        <iframe src=\"https://www.googletagmanager.com/ns.html?id=";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["config_tracking_google_tag_manager"]) || array_key_exists("config_tracking_google_tag_manager", $context) ? $context["config_tracking_google_tag_manager"] : (function () { throw new RuntimeError('Variable "config_tracking_google_tag_manager" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
    </noscript>";
        }
        // line 57
        $this->loadTemplate("@App/_layout/spinner.html.twig", "@App/_layout/default.html.twig", 57)->display($context);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('body_content', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('body_scripts', $context, $blocks);
        // line 149
        $context["messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "session", [], "any", false, false, false, 149), "flashBag", [], "any", false, false, false, 149), "keys", [], "method", false, false, false, 149);
        // line 150
        if ((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 150, $this->source); })())) {
            // line 151
            echo "<script type=\"text/javascript\">
        ";
            // line 152
            $this->loadTemplate("@App/_layout/snackbar.html.twig", "@App/_layout/default.html.twig", 152)->display($context);
            // line 153
            echo "    </script>";
        }
        // line 156
        echo $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_scripts");
        // line 158
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
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

    // line 30
    public function block_head_webfont($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_webfont"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_webfont"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_head_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_styles"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_head_favicon_href($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon_href"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon_href"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_head_additional($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_additional"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_additional"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $this->loadTemplate("@App/_layout/default_body_class.html.twig", "@App/_layout/default.html.twig", 47)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_body_attr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attr"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_body_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_content"));

        // line 60
        $this->loadTemplate("@App/_layout/navbar.html.twig", "@App/_layout/default.html.twig", 60)->display(twig_array_merge($context, ["hide_search" => ((array_key_exists("hide_search", $context)) ? (_twig_default_filter((isset($context["hide_search"]) || array_key_exists("hide_search", $context) ? $context["hide_search"] : (function () { throw new RuntimeError('Variable "hide_search" does not exist.', 60, $this->source); })()), false)) : (false))]));
        // line 61
        echo "
    <div class=\"root m-grid m-grid--hor m-grid--root\">";
        // line 63
        if ( !(isset($context["is_one_pager"]) || array_key_exists("is_one_pager", $context) ? $context["is_one_pager"] : (function () { throw new RuntimeError('Variable "is_one_pager" does not exist.', 63, $this->source); })())) {
            // line 64
            $this->loadTemplate("@App/_layout/quick-search.html.twig", "@App/_layout/default.html.twig", 64)->display(twig_array_merge($context, ["id" => "quick-search"]));
        }
        // line 66
        $this->displayBlock('layout_body', $context, $blocks);
        // line 131
        echo "
        <footer class=\"m-grid__item m-footer \">
            <div class=\"container-fluid m-container--full-height\">
                <div class=\"m-footer__copyright\">";
        // line 134
        $this->displayBlock('layout_footer_copyright', $context, $blocks);
        echo "</div>
                <ul class=\"m-footer__nav list-unstyled\">
                    ";
        // line 136
        $this->displayBlock('layout_footer_menu_items', $context, $blocks);
        // line 137
        echo "                </ul>
            </div>
        </footer>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_layout_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_body"));

        // line 67
        echo "            <div class=\"m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body\">";
        // line 70
        $this->displayBlock('layout_body_aside_left', $context, $blocks);
        // line 102
        echo "                <div class=\"";
        $this->displayBlock('layout_body_wrapper_class', $context, $blocks);
        echo "\">";
        // line 104
        echo "                    <div class=\"";
        $this->displayBlock('layout_content_class', $context, $blocks);
        echo "\">";
        // line 105
        $this->displayBlock('messages', $context, $blocks);
        // line 125
        $this->displayBlock('page_content', $context, $blocks);
        // line 126
        echo "</div>
                </div>

            </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_layout_body_aside_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_body_aside_left"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_body_aside_left"));

        // line 71
        if ( !(isset($context["is_one_pager"]) || array_key_exists("is_one_pager", $context) ? $context["is_one_pager"] : (function () { throw new RuntimeError('Variable "is_one_pager" does not exist.', 71, $this->source); })())) {
            // line 72
            $context["aside_default_closed"] = ((array_key_exists("aside_default_closed", $context)) ? (_twig_default_filter((isset($context["aside_default_closed"]) || array_key_exists("aside_default_closed", $context) ? $context["aside_default_closed"] : (function () { throw new RuntimeError('Variable "aside_default_closed" does not exist.', 72, $this->source); })()), "false")) : ("false"));
            // line 73
            echo "<a href=\"#\" class=\"btn btn-brand aside-left-toggle\" data-module=\"features/MenuAside\"><i class=\"material-symbols-sharp\">menu</i></a>
                        <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_ajax_toggle_aside_menu"), "html", null, true);
            echo "\" class=\"btn btn-brand aside-left-toggle aside-left-toggle--desktop\" data-module=\"features/MenuAside\"
                           data-closed-default=\"";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["aside_default_closed"]) || array_key_exists("aside_default_closed", $context) ? $context["aside_default_closed"] : (function () { throw new RuntimeError('Variable "aside_default_closed" does not exist.', 75, $this->source); })()), "html", null, true);
            echo "\">
                            <i class=\"material-symbols-sharp\">menu";
            // line 76
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "session", [], "any", false, false, false, 76), "get", [0 => $this->extensions['AppBundle\Twig\PhpTwigExtension']->getFunctionEnumSession("APP_SETTING_ASIDE_CLOSED"), 1 => false], "method", false, false, false, 76) && ("false" == (isset($context["aside_default_closed"]) || array_key_exists("aside_default_closed", $context) ? $context["aside_default_closed"] : (function () { throw new RuntimeError('Variable "aside_default_closed" does not exist.', 76, $this->source); })())))) {
                echo "_open";
            }
            echo "</i>
                        </a>

                        <div id=\"m_aside_left\" class=\"m-grid__item m-aside-left aside-left\">
                            <div id=\"m_ver_menu\" class=\"";
            // line 80
            $this->displayBlock('navbar_container_class', $context, $blocks);
            echo "\">
                                <ul class=\"";
            // line 81
            $this->displayBlock('navbar_class', $context, $blocks);
            echo "\">";
            // line 82
            $this->displayBlock('navbar', $context, $blocks);
            // line 83
            echo "<li class=\"m-menu__item mt-5\">
                                        <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_ajax_toggle_aside_sorting"), "html", null, true);
            echo "\" class=\"m-menu__link\" data-module=\"features/MenuAside\" data-toggle=\"sort\" data-state=\"default\">
                                            <span class=\"m-menu__link-text\">";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sort_alphabetically"), "html", null, true);
            echo "<br/>
                                            <i class=\"material-symbols-sharp\">toggle_off</i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"aside-sticky\">";
            // line 94
            $this->loadTemplate("@App/_layout/aside_sticky_user.html.twig", "@App/_layout/default.html.twig", 94)->display($context);
            // line 95
            $this->loadTemplate("@App/_layout/aside_sticky_custom.html.twig", "@App/_layout/default.html.twig", 95)->display($context);
            // line 96
            $this->loadTemplate("@App/_layout/aside_sticky_languages.html.twig", "@App/_layout/default.html.twig", 96)->display($context);
            // line 97
            echo "                        </div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_navbar_container_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_container_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_container_class"));

        echo "m-aside-menu";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_navbar_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_class"));

        echo "m-menu__nav  m-menu__nav--dropdown-submenu-arrow";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
    public function block_layout_body_wrapper_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_body_wrapper_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_body_wrapper_class"));

        echo "m-grid__item m-grid__item--fluid m-wrapper";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 104
    public function block_layout_content_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_content_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_content_class"));

        echo "root-content";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 106
        $context["messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "session", [], "any", false, false, false, 106), "flashBag", [], "any", false, false, false, 106), "keys", [], "method", false, false, false, 106);
        // line 107
        if ((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 107, $this->source); })())) {
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 108, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 109
                if ((("success" != $context["type"]) && ("warning" != $context["type"]))) {
                    // line 110
                    echo "<div class=\"m--margin-bottom-20 m-alert m-alert--icon m-alert--outline m-alert--outline-2x alert alert-";
                    if (("error" == $context["type"])) {
                        echo "danger";
                    } else {
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    }
                    echo "\"
                                             role=\"alert\">
                                            <div class=\"m-alert__icon\">";
                    // line 113
                    if ((("error" == $context["type"]) || ("danger" == $context["type"]))) {
                        // line 114
                        echo "<i class=\"material-symbols-sharp\">error</i>";
                    }
                    // line 116
                    echo "</div>
                                            <div class=\"m-alert__text\">
                                                ";
                    // line 118
                    echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "session", [], "any", false, false, false, 118), "flashBag", [], "any", false, false, false, 118), "get", [0 => $context["type"]], "method", false, false, false, 118), " "), "html", null, true);
                    echo "
                                            </div>
                                        </div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 125
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 134
    public function block_layout_footer_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_copyright"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_copyright"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 136
    public function block_layout_footer_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_menu_items"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_menu_items"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 144
    public function block_body_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_scripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@App/_layout/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  716 => 144,  698 => 136,  680 => 134,  662 => 125,  643 => 118,  639 => 116,  636 => 114,  634 => 113,  624 => 110,  622 => 109,  618 => 108,  616 => 107,  614 => 106,  604 => 105,  585 => 104,  566 => 102,  548 => 82,  529 => 81,  510 => 80,  499 => 97,  497 => 96,  495 => 95,  493 => 94,  482 => 85,  478 => 84,  475 => 83,  473 => 82,  470 => 81,  466 => 80,  457 => 76,  453 => 75,  449 => 74,  446 => 73,  444 => 72,  442 => 71,  432 => 70,  419 => 126,  417 => 125,  415 => 105,  411 => 104,  407 => 102,  405 => 70,  403 => 67,  393 => 66,  378 => 137,  376 => 136,  371 => 134,  366 => 131,  364 => 66,  361 => 64,  359 => 63,  356 => 61,  354 => 60,  344 => 59,  326 => 48,  307 => 47,  289 => 36,  271 => 34,  253 => 32,  235 => 30,  217 => 10,  198 => 9,  187 => 158,  185 => 156,  182 => 153,  180 => 152,  177 => 151,  175 => 150,  173 => 149,  171 => 144,  168 => 143,  166 => 59,  163 => 58,  161 => 57,  156 => 52,  153 => 51,  151 => 50,  141 => 48,  135 => 47,  132 => 45,  130 => 44,  128 => 43,  125 => 40,  123 => 39,  121 => 37,  119 => 36,  114 => 34,  111 => 33,  109 => 32,  106 => 31,  104 => 30,  102 => 28,  97 => 24,  87 => 16,  85 => 15,  79 => 10,  75 => 9,  66 => 2,  64 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set config_tracking_google_tag_manager = constant('AppBundle\\\\Entity\\\\Config::TYPE_CONNECTION_GOOGLE_TAG_MANAGER')|app_config_get_value_by_key -%}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>

    <meta name=\"format-detection\" content=\"telephone=no\"/>

    <title>{% block title %}{{ 'config_template_title'|app_config_get_value_by_key }}{% endblock %}</title>
    <meta name=\"description\" content=\"{% block meta_description %}{% endblock %}\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    {%- if config_tracking_google_tag_manager -%}
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l !== 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '{{ config_tracking_google_tag_manager }}');
        </script>
    {%- endif -%}

    {{- 'config_template_scripts_head'|app_config_get_value_by_key|raw -}}

    {% block head_webfont %}{% endblock %}

    {% block head_styles %}{% endblock %}

    <link rel=\"shortcut icon\" href=\"{% block head_favicon_href %}{% endblock %}\"/>

    {% block head_additional %}{% endblock %}
</head>

{%- if space is not defined -%}
    {%- set space = app_space_active() -%}
{%- endif -%}

{%- set is_one_pager = (space and space.onePager and not is_granted('ROLE_EDITOR')) -%}
{%- if true == is_one_pager -%}
    {%- set hide_search = true -%}
{%- endif -%}
<body data-metrics-token=\"{{ app.request|app_metrics_get_token }}\" class=\"{% block body_class %}{% include \"@App/_layout/default_body_class.html.twig\" %}{% endblock %}\"
        {%- block body_attr %}{% endblock %}{% if page_module is defined %} data-page=\"{{ page_module }}\"{% endif %} data-aside-sort=\"{{ app.request|app_menu_sorting }}\">

{%- if config_tracking_google_tag_manager -%}
    <noscript>
        <iframe src=\"https://www.googletagmanager.com/ns.html?id={{ config_tracking_google_tag_manager }}\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
    </noscript>
{%- endif -%}

{# Block page while loading #}
{% include \"@App/_layout/spinner.html.twig\" %}

{% block body_content %}
    {%- include \"@App/_layout/navbar.html.twig\" with {hide_search: hide_search|default(false)} %}

    <div class=\"root m-grid m-grid--hor m-grid--root\">
        {%- if not is_one_pager -%}
            {%- include \"@App/_layout/quick-search.html.twig\" with {'id': 'quick-search'} -%}
        {%- endif -%}
        {%- block layout_body %}
            <div class=\"m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body\">

                {#- Left aside menu #}
                {%- block layout_body_aside_left %}
                    {%- if not is_one_pager -%}
                        {%- set aside_default_closed = aside_default_closed|default('false') -%}
                        <a href=\"#\" class=\"btn btn-brand aside-left-toggle\" data-module=\"features/MenuAside\"><i class=\"material-symbols-sharp\">menu</i></a>
                        <a href=\"{{ path('app_ajax_toggle_aside_menu') }}\" class=\"btn btn-brand aside-left-toggle aside-left-toggle--desktop\" data-module=\"features/MenuAside\"
                           data-closed-default=\"{{ aside_default_closed }}\">
                            <i class=\"material-symbols-sharp\">menu{%- if not app.session.get(enum_session('APP_SETTING_ASIDE_CLOSED'), false) and 'false' == aside_default_closed %}_open{% endif %}</i>
                        </a>

                        <div id=\"m_aside_left\" class=\"m-grid__item m-aside-left aside-left\">
                            <div id=\"m_ver_menu\" class=\"{% block navbar_container_class %}m-aside-menu{% endblock %}\">
                                <ul class=\"{% block navbar_class %}m-menu__nav  m-menu__nav--dropdown-submenu-arrow{% endblock %}\">
                                    {%- block navbar %}{% endblock -%}
                                    <li class=\"m-menu__item mt-5\">
                                        <a href=\"{{ path('app_ajax_toggle_aside_sorting') }}\" class=\"m-menu__link\" data-module=\"features/MenuAside\" data-toggle=\"sort\" data-state=\"default\">
                                            <span class=\"m-menu__link-text\">{{ 'sort_alphabetically'|trans }}<br/>
                                            <i class=\"material-symbols-sharp\">toggle_off</i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"aside-sticky\">
                            {%- include \"@App/_layout/aside_sticky_user.html.twig\" %}
                            {%- include \"@App/_layout/aside_sticky_custom.html.twig\" %}
                            {%- include \"@App/_layout/aside_sticky_languages.html.twig\" %}
                        </div>
                    {%- endif -%}
                {%- endblock %}

                {#- Right Body panel #}
                <div class=\"{% block layout_body_wrapper_class %}m-grid__item m-grid__item--fluid m-wrapper{% endblock %}\">
                    {#- Begin Main Content #}
                    <div class=\"{% block layout_content_class %}root-content{% endblock %}\">
                        {%- block messages -%}
                            {%- set messages = app.session.flashBag.keys() -%}
                            {%- if messages -%}
                                {%- for type in messages -%}
                                    {%- if 'success' != type and 'warning' != type -%}
                                        <div class=\"m--margin-bottom-20 m-alert m-alert--icon m-alert--outline m-alert--outline-2x alert alert-{% if 'error' == type %}danger{% else %}{{ type }}{% endif %}\"
                                             role=\"alert\">
                                            <div class=\"m-alert__icon\">
                                                {%- if 'error' == type or 'danger' == type -%}
                                                    <i class=\"material-symbols-sharp\">error</i>
                                                {%- endif -%}
                                            </div>
                                            <div class=\"m-alert__text\">
                                                {{ app.session.flashBag.get(type)|join(' ') }}
                                            </div>
                                        </div>
                                    {%- endif -%}
                                {%- endfor -%}
                            {%- endif -%}
                        {%- endblock messages -%}
                        {%- block page_content %}{% endblock page_content -%}
                    </div>
                </div>

            </div>
        {%- endblock layout_body %}

        <footer class=\"m-grid__item m-footer \">
            <div class=\"container-fluid m-container--full-height\">
                <div class=\"m-footer__copyright\">{% block layout_footer_copyright %}{% endblock %}</div>
                <ul class=\"m-footer__nav list-unstyled\">
                    {% block layout_footer_menu_items %}{% endblock %}
                </ul>
            </div>
        </footer>

    </div>
{% endblock %}

{% block body_scripts %}{% endblock %}

{#-
Success messages as snackbar
-#}
{%- set messages = app.session.flashBag.keys() -%}
{%- if messages -%}
    <script type=\"text/javascript\">
        {% include \"@App/_layout/snackbar.html.twig\" %}
    </script>
{%- endif -%}

{{- 'config_template_scripts'|app_config_get_value_by_key|raw -}}

</body>
</html>", "@App/_layout/default.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_layout/default.html.twig");
    }
}
