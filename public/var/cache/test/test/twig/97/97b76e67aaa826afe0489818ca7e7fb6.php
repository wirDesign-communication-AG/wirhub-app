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

/* @App/app.html.twig */
class __TwigTemplate_a929f1e99ef0f453afe6b74b18c4e47b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head_styles' => [$this, 'block_head_styles'],
            'head_favicon_href' => [$this, 'block_head_favicon_href'],
            'navbar' => [$this, 'block_navbar'],
            'layout_header_topbar_item_user' => [$this, 'block_layout_header_topbar_item_user'],
            'body_scripts' => [$this, 'block_body_scripts'],
            'layout_footer_copyright' => [$this, 'block_layout_footer_copyright'],
            'layout_footer_menu_items' => [$this, 'block_layout_footer_menu_items'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@App/_layout/default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/app.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/app.html.twig"));

        // line 8
        $context["current_theme_slug"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "query", [], "any", false, false, false, 8), "get", [0 => "theme", 1 => $this->extensions['AppBundle\Twig\SettingTwigExtension']->getThemeDefault()], "method", false, false, false, 8);
        // line 9
        $context["current_theme_object"] = $this->env->getFilter('setting_theme_get_by_slug')->getCallable()((isset($context["current_theme_slug"]) || array_key_exists("current_theme_slug", $context) ? $context["current_theme_slug"] : (function () { throw new RuntimeError('Variable "current_theme_slug" does not exist.', 9, $this->source); })()));
        // line 39
        $context["config_favicon"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_favicon_upload");
        // line 40
        if ((isset($context["config_favicon"]) || array_key_exists("config_favicon", $context) ? $context["config_favicon"] : (function () { throw new RuntimeError('Variable "config_favicon" does not exist.', 40, $this->source); })())) {
            // line 41
            $context["config_favicon_file"] = $this->extensions['AppBundle\Twig\FileTwigExtension']->get((isset($context["config_favicon"]) || array_key_exists("config_favicon", $context) ? $context["config_favicon"] : (function () { throw new RuntimeError('Variable "config_favicon" does not exist.', 41, $this->source); })()));
            // line 42
            $context["favicon"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_asset_file_inline", ["randomId" => twig_get_attribute($this->env, $this->source, (isset($context["config_favicon_file"]) || array_key_exists("config_favicon_file", $context) ? $context["config_favicon_file"] : (function () { throw new RuntimeError('Variable "config_favicon_file" does not exist.', 42, $this->source); })()), "randomId", [], "any", false, false, false, 42), "fileNameAscii" => twig_get_attribute($this->env, $this->source, (isset($context["config_favicon_file"]) || array_key_exists("config_favicon_file", $context) ? $context["config_favicon_file"] : (function () { throw new RuntimeError('Variable "config_favicon_file" does not exist.', 42, $this->source); })()), "nameAscii", [], "any", false, false, false, 42)]);
        } else {
            // line 44
            $context["favicon"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_favicon");
        }
        // line 1
        $this->parent = $this->loadTemplate("@App/_layout/default.html.twig", "@App/app.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        if (array_key_exists("space_name", $context)) {
            echo twig_escape_filter($this->env, (isset($context["space_name"]) || array_key_exists("space_name", $context) ? $context["space_name"] : (function () { throw new RuntimeError('Variable "space_name" does not exist.', 17, $this->source); })()), "html", null, true);
            echo " | ";
        }
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_head_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_styles"));

        // line 22
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterFileVersion($this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_theme_minified", ["theme" => (isset($context["current_theme_slug"]) || array_key_exists("current_theme_slug", $context) ? $context["current_theme_slug"] : (function () { throw new RuntimeError('Variable "current_theme_slug" does not exist.', 22, $this->source); })()), "fileName" => "styleguide"], false, false)), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 25
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterFileVersion($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/css/login.min.css")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\"/>";
            // line 27
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN"))) {
                // line 28
                echo "<link href=\"";
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterFileVersion($this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_theme_minified", ["theme" => (isset($context["current_theme_slug"]) || array_key_exists("current_theme_slug", $context) ? $context["current_theme_slug"] : (function () { throw new RuntimeError('Variable "current_theme_slug" does not exist.', 28, $this->source); })()), "fileName" => "editor"], false, false)), "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\"/>";
            }
        }
        // line 33
        if (("test" == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "environment", [], "any", false, false, false, 33))) {
            // line 34
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterFileVersion($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/css/test.css")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\"/>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_head_favicon_href($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon_href"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon_href"));

        echo twig_escape_filter($this->env, (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new RuntimeError('Variable "favicon" does not exist.', 47, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 52
        if ($this->extensions['AppBundle\Twig\SpaceTwigExtension']->getFunctionDefaultUsed()) {
            // line 53
            echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("category_default_space", ["currentClass" => "active", "ancestorClass" => "active", "style" => "navbar-metronic"]);
        } else {
            // line 55
            echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("category", ["currentClass" => "active", "ancestorClass" => "active", "style" => "navbar-metronic"]);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_layout_header_topbar_item_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_topbar_item_user"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_topbar_item_user"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_body_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_scripts"));

        // line 65
        echo "    <a class=\"m-scroll-top\" data-module=\"features/ScrollTo\" href=\"#\">
        <i class=\"material-symbols-sharp\">arrow_upward</i>
    </a>

    <script type=\"text/javascript\">

        const wdStyleGuideConfig = {
            debug: ";
        // line 72
        if ((isset($context["debug_javascript"]) || array_key_exists("debug_javascript", $context) ? $context["debug_javascript"] : (function () { throw new RuntimeError('Variable "debug_javascript" does not exist.', 72, $this->source); })())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
            http: {
                referer: '";
        // line 74
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 74), "server", [], "any", false, true, false, 74), "get", [0 => "HTTP_REFERER"], "method", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 74), "server", [], "any", false, true, false, 74), "get", [0 => "HTTP_REFERER"], "method", false, false, false, 74), "")) : ("")), "html", null, true);
        echo "'
            },
            space: '";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getCurrentSpaceSlug(), "html", null, true);
        echo "',
            locale: '";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Services\Twig\LocaleTwigExtension']->getFilterLocaleCurrent(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77)), "html", null, true);
        echo "',
            theme: '";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["current_theme_slug"]) || array_key_exists("current_theme_slug", $context) ? $context["current_theme_slug"] : (function () { throw new RuntimeError('Variable "current_theme_slug" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "',
            selectors: {
                util: {
                    invisible: '.invisible'
                },
                portlet: {
                    body: '.m-portlet__body'
                },
            },
            /* Warning: use runtime.js.twig for new routes! */
            path: {
                login: '";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_user_security_login"), "html", null, true);
        echo "',
                app_ajax_categories: '";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_ajax_categories_for_space", ["_space" => "__SPACE__"]), "html", null, true);
        echo "',
                app_ajax_elements: '";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_ajax_elements", ["_space" => "__SPACE__", "category" => "__CATEGORY__", "type" => "__TYPE__"]), "html", null, true);
        echo "',
                app_ajax_short_link: '";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_ajax_short_link"), "html", null, true);
        echo "',
                app_ajax_element_by_comment: '";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_ajax_element_by_comment", ["_space" => "__SPACE__", "comment" => "__COMMENT__"]), "html", null, true);
        echo "'
            }
        };";
        // line 97
        if ( !array_key_exists("spaces", $context)) {
            // line 98
            $context["spaces"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getFunctionFindAll();
        }
        // line 100
        echo "
        const wdStyleGuideSpaces = [";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spaces"]) || array_key_exists("spaces", $context) ? $context["spaces"] : (function () { throw new RuntimeError('Variable "spaces" does not exist.', 101, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["space"]) {
            // line 102
            echo "            {
                id: '";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["space"], "id", [], "any", false, false, false, 103), "html", null, true);
            echo "',
                slug: '";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["space"], "slug", [], "any", false, false, false, 104), "html", null, true);
            echo "',
                name: '";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["space"], "name", [], "any", false, false, false, 105), "html", null, true);
            echo "'
            }";
            // line 106
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 106)) {
                echo ",";
            }
            // line 107
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['space'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];

        ";
        // line 109
        if ((isset($context["debug_javascript"]) || array_key_exists("debug_javascript", $context) ? $context["debug_javascript"] : (function () { throw new RuntimeError('Variable "debug_javascript" does not exist.', 109, $this->source); })())) {
            echo "window.dataLayer = [];";
        }
        // line 110
        echo "
    </script>";
        // line 112
        $this->loadTemplate("@App/asset/scripts.html.twig", "@App/app.html.twig", 112)->display($context);
        // line 114
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 115
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterFileVersion($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/js/login.min.js")), "html", null, true);
            echo "\"></script>";
        }
        // line 118
        if (("test" == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "environment", [], "any", false, false, false, 118))) {
            // line 119
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterFileVersion($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/js/app_test.min.js")), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\">
            /* console stuff */
            if (typeof console !== \"undefined\") {
                const nodeDebug = document.createElement('div');
                nodeDebug.style.color = 'red';
                nodeDebug.style.margin = '5rem';
                nodeDebug.style.padding = '2rem';
                nodeDebug.style.border = '1px dashed red';

                const nodeRoot = document.querySelector('.root-content');
                if (null !== nodeRoot) {
                    nodeRoot.appendChild(nodeDebug);
                } else {
                    document.body.appendChild(nodeDebug);
                }


                console.log = (message) => {
                    const nodeMessage = document.createElement('p');
                    nodeMessage.innerHTML = message;

                    nodeDebug.appendChild(nodeMessage);
                };

                console.error = console.debug = console.info = console.log;
            }
        </script>";
        }
        // line 149
        if ((isset($context["debug_javascript"]) || array_key_exists("debug_javascript", $context) ? $context["debug_javascript"] : (function () { throw new RuntimeError('Variable "debug_javascript" does not exist.', 149, $this->source); })())) {
            // line 150
            echo "<script type=\"text/javascript\">
            pmUtil.config.debugging = true;
        </script>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 158
    public function block_layout_footer_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_copyright"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_copyright"));

        echo "&copy; Copyright ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " wirDesign;";
        // line 159
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 160
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_releases"), "html", null, true);
            echo "\">v";
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 160, $this->source); })()), "html", null, true);
            echo "</a>";
        } else {
            // line 162
            echo "        v";
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 162, $this->source); })()), "html", null, true);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 167
    public function block_layout_footer_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_menu_items"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_menu_items"));

        // line 168
        $context["config_tos"] = false;
        // line 170
        if ($this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_LEGAL_INTERNAL_SITES"))) {
            // line 171
            $context["config_imprint"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_legal_imprint");
            // line 172
            echo "        ";
            $context["config_privacy"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_legal_privacy");
            // line 174
            if ($this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_LEGAL_INTERNAL_SITE_TOS_ENABLED"))) {
                // line 175
                $context["config_tos"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_default_legal_tos");
            }
            // line 178
            $context["target"] = "_self";
        } else {
            // line 180
            $context["config_privacy"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_privacy");
            // line 181
            echo "        ";
            $context["config_imprint"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_imprint");
            // line 183
            if ($this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_LEGAL_INTERNAL_SITE_TOS_ENABLED"))) {
                // line 184
                $context["config_tos"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey("config_template_tos");
            }
            // line 187
            $context["target"] = "_blank";
        }
        // line 190
        if ((isset($context["config_imprint"]) || array_key_exists("config_imprint", $context) ? $context["config_imprint"] : (function () { throw new RuntimeError('Variable "config_imprint" does not exist.', 190, $this->source); })())) {
            // line 191
            echo "<li class=\"m-nav__item\">
            <a href=\"";
            // line 192
            echo twig_escape_filter($this->env, (isset($context["config_imprint"]) || array_key_exists("config_imprint", $context) ? $context["config_imprint"] : (function () { throw new RuntimeError('Variable "config_imprint" does not exist.', 192, $this->source); })()), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 192, $this->source); })()), "html", null, true);
            echo "\" class=\"m-nav__link\">
                <span class=\"m-nav__link-text\">";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("config_template_imprint"), "html", null, true);
            echo "</span>
            </a>
        </li>";
        }
        // line 198
        if ((isset($context["config_privacy"]) || array_key_exists("config_privacy", $context) ? $context["config_privacy"] : (function () { throw new RuntimeError('Variable "config_privacy" does not exist.', 198, $this->source); })())) {
            // line 199
            echo "<li class=\"m-nav__item\">
            <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, (isset($context["config_privacy"]) || array_key_exists("config_privacy", $context) ? $context["config_privacy"] : (function () { throw new RuntimeError('Variable "config_privacy" does not exist.', 200, $this->source); })()), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 200, $this->source); })()), "html", null, true);
            echo "\" class=\"m-nav__link\">
                <span class=\"m-nav__link-text\">";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("config_template_privacy"), "html", null, true);
            echo "</span>
            </a>
        </li>";
        }
        // line 206
        if ((isset($context["config_tos"]) || array_key_exists("config_tos", $context) ? $context["config_tos"] : (function () { throw new RuntimeError('Variable "config_tos" does not exist.', 206, $this->source); })())) {
            // line 207
            echo "<li class=\"m-nav__item\">
            <a href=\"";
            // line 208
            echo twig_escape_filter($this->env, (isset($context["config_tos"]) || array_key_exists("config_tos", $context) ? $context["config_tos"] : (function () { throw new RuntimeError('Variable "config_tos" does not exist.', 208, $this->source); })()), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 208, $this->source); })()), "html", null, true);
            echo "\" class=\"m-nav__link\">
                <span class=\"m-nav__link-text\">";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("config_template_tos"), "html", null, true);
            echo "</span>
            </a>
        </li>";
        }
        // line 214
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
            // line 215
            echo "<li class=\"m-nav__item\">
            <a href=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_default_help"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help"), "html", null, true);
            echo "\" class=\"m-nav__link is-link is-link--dialog\" data-dialog=\"default\">
                <span class=\"m-nav__link-text\"><i class=\"material-symbols-sharp\">bug_report</i></span>
            </a>
        </li>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@App/app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 216,  540 => 215,  538 => 214,  532 => 209,  526 => 208,  523 => 207,  521 => 206,  515 => 201,  509 => 200,  506 => 199,  504 => 198,  498 => 193,  492 => 192,  489 => 191,  487 => 190,  484 => 187,  481 => 184,  479 => 183,  476 => 181,  474 => 180,  471 => 178,  468 => 175,  466 => 174,  463 => 172,  461 => 171,  459 => 170,  457 => 168,  447 => 167,  435 => 162,  428 => 160,  426 => 159,  413 => 158,  400 => 150,  398 => 149,  366 => 119,  364 => 118,  359 => 115,  357 => 114,  355 => 112,  352 => 110,  348 => 109,  331 => 107,  327 => 106,  323 => 105,  319 => 104,  315 => 103,  312 => 102,  295 => 101,  292 => 100,  289 => 98,  287 => 97,  282 => 93,  278 => 92,  274 => 91,  270 => 90,  266 => 89,  252 => 78,  248 => 77,  244 => 76,  239 => 74,  230 => 72,  221 => 65,  211 => 63,  193 => 60,  182 => 55,  179 => 53,  177 => 52,  167 => 50,  148 => 47,  135 => 34,  133 => 33,  127 => 28,  125 => 27,  121 => 25,  119 => 24,  115 => 22,  105 => 20,  82 => 17,  71 => 1,  68 => 44,  65 => 42,  63 => 41,  61 => 40,  59 => 39,  57 => 9,  55 => 8,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@App/_layout/default.html.twig\" %}

{#
-------
Variables
-------
#}
{% set current_theme_slug = app.request.query.get('theme', setting_theme_default()) %}
{% set current_theme_object = current_theme_slug|setting_theme_get_by_slug %}


{#
-------
Blocks
-------
#}
{% block title %}{% if space_name is defined %}{{ space_name }} | {% endif %}{{ parent() }}{% endblock %}

{# Style #}
{% block head_styles %}
    {#- Generated theme CSS #}
    <link href=\"{{ path('app_theme_minified', {'theme':current_theme_slug,'fileName':'styleguide'}, false, false)|file_version }}\" rel=\"stylesheet\" type=\"text/css\"/>

    {%- if is_granted('ROLE_USER') -%}
        <link href=\"{{ asset('bundles/app/css/login.min.css')|file_version }}\" rel=\"stylesheet\" type=\"text/css\"/>

        {%- if is_granted('ROLE_EDITOR') or is_granted('ROLE_PREVIOUS_ADMIN') -%}
            <link href=\"{{ path('app_theme_minified', {'theme':current_theme_slug,'fileName':'editor'}, false, false)|file_version }}\" rel=\"stylesheet\" type=\"text/css\"/>
        {%- endif -%}

    {%- endif -%}

    {%- if 'test' == app.environment -%}
        <link href=\"{{ asset('bundles/app/css/test.css')|file_version }}\" rel=\"stylesheet\" type=\"text/css\"/>
    {%- endif -%}
{% endblock %}

{# Favicon #}
{% set config_favicon = 'config_template_favicon_upload'|app_config_get_value_by_key %}
{% if config_favicon %}
    {%- set config_favicon_file = config_favicon|app_file_get -%}
    {%- set favicon = path('app_asset_file_inline', {'randomId':config_favicon_file.randomId, 'fileNameAscii':config_favicon_file.nameAscii}) -%}
{% else %}
    {% set favicon = 'config_template_favicon'|app_config_get_value_by_key|raw %}
{% endif %}

{% block head_favicon_href %}{{ favicon }}{% endblock %}

{# Navbar #}
{% block navbar %}
    {#- Categories #}
    {%- if app_space_default_used() -%}
        {{- knp_menu_render(\"category_default_space\", {\"currentClass\": \"active\", \"ancestorClass\": \"active\", \"style\":\"navbar-metronic\"}) -}}
    {%- else -%}
        {{- knp_menu_render(\"category\", {\"currentClass\": \"active\", \"ancestorClass\": \"active\", \"style\":\"navbar-metronic\"}) -}}
    {%- endif -%}
{% endblock %}

{# No users menu #}
{% block layout_header_topbar_item_user %}{% endblock %}

{# Scripts #}
{% block body_scripts %}
    {#- Scroll to top #}
    <a class=\"m-scroll-top\" data-module=\"features/ScrollTo\" href=\"#\">
        <i class=\"material-symbols-sharp\">arrow_upward</i>
    </a>

    <script type=\"text/javascript\">

        const wdStyleGuideConfig = {
            debug: {% if debug_javascript %}true{% else %}false{% endif %},
            http: {
                referer: '{{ app.request.server.get('HTTP_REFERER')|default('') }}'
            },
            space: '{{ app_space_get_current_slug() }}',
            locale: '{{ app.request|app_locale_current }}',
            theme: '{{ current_theme_slug }}',
            selectors: {
                util: {
                    invisible: '.invisible'
                },
                portlet: {
                    body: '.m-portlet__body'
                },
            },
            /* Warning: use runtime.js.twig for new routes! */
            path: {
                login: '{{ path_without_space('app_user_security_login') }}',
                app_ajax_categories: '{{ path('app_ajax_categories_for_space', {'_space':'__SPACE__'}) }}',
                app_ajax_elements: '{{ path('app_ajax_elements', {'_space':'__SPACE__', 'category': '__CATEGORY__','type':'__TYPE__'}) }}',
                app_ajax_short_link: '{{ path_without_space('app_ajax_short_link') }}',
                app_ajax_element_by_comment: '{{ path('app_ajax_element_by_comment', {'_space':'__SPACE__', 'comment': '__COMMENT__'}) }}'
            }
        };

        {%- if spaces is not defined %}
        {%- set spaces = app_space_find_all() -%}
        {%- endif %}

        const wdStyleGuideSpaces = [{% for space in spaces %}
            {
                id: '{{ space.id }}',
                slug: '{{ space.slug }}',
                name: '{{ space.name }}'
            }{% if not loop.last %},{% endif %}
            {% endfor %}];

        {% if debug_javascript %}window.dataLayer = [];{% endif %}

    </script>
    {%- include \"@App/asset/scripts.html.twig\" -%}

    {%- if is_granted('ROLE_USER') -%}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/login.min.js')|file_version }}\"></script>
    {%- endif -%}

    {%- if 'test' ==  app.environment -%}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/app/js/app_test.min.js')|file_version }}\"></script>
        <script type=\"text/javascript\">
            /* console stuff */
            if (typeof console !== \"undefined\") {
                const nodeDebug = document.createElement('div');
                nodeDebug.style.color = 'red';
                nodeDebug.style.margin = '5rem';
                nodeDebug.style.padding = '2rem';
                nodeDebug.style.border = '1px dashed red';

                const nodeRoot = document.querySelector('.root-content');
                if (null !== nodeRoot) {
                    nodeRoot.appendChild(nodeDebug);
                } else {
                    document.body.appendChild(nodeDebug);
                }


                console.log = (message) => {
                    const nodeMessage = document.createElement('p');
                    nodeMessage.innerHTML = message;

                    nodeDebug.appendChild(nodeMessage);
                };

                console.error = console.debug = console.info = console.log;
            }
        </script>
    {%- endif -%}

    {%- if debug_javascript -%}
        <script type=\"text/javascript\">
            pmUtil.config.debugging = true;
        </script>
    {%- endif -%}
{% endblock %}


{# Footer copyright #}
{% block layout_footer_copyright %}&copy; Copyright {{ 'now'|date('Y') }} wirDesign;
    {%- if is_granted('ROLE_USER') %}
        <a href=\"{{ path_without_space('app_default_releases') }}\">v{{ version }}</a>
    {%- else %}
        v{{ version }}
    {%- endif %}
{% endblock %}

{# Footer Language selection #}
{% block layout_footer_menu_items %}
    {%- set config_tos = false -%}
    {# Privacy and Imprint #}
    {%- if constant('AppBundle\\\\Entity\\\\Config::TYPE_LEGAL_INTERNAL_SITES')|app_config_get_value_by_key -%}
        {% set config_imprint = path_without_space('app_default_legal_imprint') %}
        {% set config_privacy = path_without_space('app_default_legal_privacy') %}

        {%- if constant('AppBundle\\\\Entity\\\\Config::TYPE_LEGAL_INTERNAL_SITE_TOS_ENABLED')|app_config_get_value_by_key -%}
            {% set config_tos = path_without_space('app_default_legal_tos') %}
        {%- endif -%}

        {%- set target = \"_self\" -%}
    {%- else -%}
        {% set config_privacy = 'config_template_privacy'|app_config_get_value_by_key %}
        {% set config_imprint = 'config_template_imprint'|app_config_get_value_by_key %}

        {%- if constant('AppBundle\\\\Entity\\\\Config::TYPE_LEGAL_INTERNAL_SITE_TOS_ENABLED')|app_config_get_value_by_key -%}
            {% set config_tos = 'config_template_tos'|app_config_get_value_by_key %}
        {%- endif -%}

        {%- set target = \"_blank\" -%}
    {%- endif -%}

    {%- if config_imprint -%}
        <li class=\"m-nav__item\">
            <a href=\"{{ config_imprint }}\" target=\"{{ target }}\" class=\"m-nav__link\">
                <span class=\"m-nav__link-text\">{{ 'config_template_imprint'|trans }}</span>
            </a>
        </li>
    {%- endif -%}

    {%- if config_privacy -%}
        <li class=\"m-nav__item\">
            <a href=\"{{ config_privacy }}\" target=\"{{ target }}\" class=\"m-nav__link\">
                <span class=\"m-nav__link-text\">{{ 'config_template_privacy'|trans }}</span>
            </a>
        </li>
    {%- endif -%}

    {%- if config_tos -%}
        <li class=\"m-nav__item\">
            <a href=\"{{ config_tos }}\" target=\"{{ target }}\" class=\"m-nav__link\">
                <span class=\"m-nav__link-text\">{{ 'config_template_tos'|trans }}</span>
            </a>
        </li>
    {%- endif -%}

    {%- if is_granted('ROLE_EDITOR') -%}
        <li class=\"m-nav__item\">
            <a href=\"{{ path('app_default_help') }}\" title=\"{{ 'help'|trans }}\" class=\"m-nav__link is-link is-link--dialog\" data-dialog=\"default\">
                <span class=\"m-nav__link-text\"><i class=\"material-symbols-sharp\">bug_report</i></span>
            </a>
        </li>
    {%- endif -%}
{% endblock %}", "@App/app.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/app.html.twig");
    }
}
