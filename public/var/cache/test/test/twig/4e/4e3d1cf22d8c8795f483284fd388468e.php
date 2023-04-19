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

/* @App/menu.html.twig */
class __TwigTemplate_780d52c3279c0a59cb62ee549fed7caa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'list' => [$this, 'block_list'],
            'children' => [$this, 'block_children'],
            'item' => [$this, 'block_item'],
            'dividerElement' => [$this, 'block_dividerElement'],
            'linkElement' => [$this, 'block_linkElement'],
            'spaceSwitch' => [$this, 'block_spaceSwitch'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KnpMenu/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/menu.html.twig"));

        $this->parent = $this->loadTemplate("@KnpMenu/menu.html.twig", "@App/menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 4
        $this->displayBlock("children", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 8));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            $this->displayBlock("item", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "displayed", [], "any", false, false, false, 15)) {
            // line 16
            $context["classes"] = [0 => "m-menu__item"];
            // line 17
            if ((array_key_exists("matcher", $context) && (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 17, $this->source); })()), "isCurrent", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })())], "method", false, false, false, 17) || twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 17, $this->source); })()), "isAncestor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 17, $this->source); })()), "depth", [], "any", false, false, false, 17)], "method", false, false, false, 17)))) {
                // line 18
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 18, $this->source); })()), [0 => "active"]);
            }
            // line 20
            if (((((array_key_exists("matcher", $context) && twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 20, $this->source); })()), "isCurrent", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })())], "method", false, false, false, 20)) || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "current", [], "any", true, true, false, 20) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "current", [], "any", false, false, false, 20))) || (array_key_exists("matcher", $context) && twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 20, $this->source); })()), "isAncestor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 20, $this->source); })()), "depth", [], "any", false, false, false, 20)], "method", false, false, false, 20))) || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "currentAncestor", [], "any", true, true, false, 20) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "currentAncestor", [], "any", false, false, false, 20)))) {
                // line 21
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 21, $this->source); })()), [0 => "m-menu__item--open", 1 => " m-menu__item--expanded"]);
            }
            // line 25
            if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "hasChildren", [], "any", false, false, false, 25) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 25, $this->source); })()), "depth", [], "any", false, false, false, 25) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "displayChildren", [], "any", false, false, false, 25))) {
                // line 26
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 26, $this->source); })()), [0 => "m-menu__item--submenu"]);
            }
            // line 29
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", true, true, false, 29)) {
                // line 30
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 30), "margin", [], "any", true, true, false, 30)) {
                    // line 31
                    if (("bottom" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "extras", [], "any", false, false, false, 31), "margin", [], "any", false, false, false, 31))) {
                        // line 32
                        $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 32, $this->source); })()), [0 => "mb-3"]);
                    }
                }
                // line 36
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 36), "is_new", [], "any", true, true, false, 36) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "extras", [], "any", false, false, false, 36), "is_new", [], "any", false, false, false, 36))) {
                    // line 37
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 37, $this->source); })()), [0 => "is-new"]);
                }
                // line 40
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 40), "divider", [], "any", true, true, false, 40) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "extras", [], "any", false, false, false, 40), "divider", [], "any", false, false, false, 40))) {
                    // line 41
                    $context["classes"] = [0 => "m-menu__section"];
                }
            }
            // line 46
            echo "<li class=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 46, $this->source); })()), " "), "html", null, true);
            echo "\" data-position=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 46, $this->source); })()), "index", [], "any", false, false, false, 46), "html", null, true);
            echo "\">";
            // line 47
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", true, true, false, 47) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 47), "divider", [], "any", true, true, false, 47)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "extras", [], "any", false, false, false, 47), "divider", [], "any", false, false, false, 47))) {
                // line 48
                $this->displayBlock("dividerElement", $context, $blocks);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 49
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "uri", [], "any", false, false, false, 49)) && ( !twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 49, $this->source); })()), "isCurrent", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })())], "method", false, false, false, 49) || twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 49, $this->source); })()), "currentAsLink", [], "any", false, false, false, 49)))) {
                // line 50
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 52
                if (("space_switch" == twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52))) {
                    // line 53
                    $this->displayBlock("spaceSwitch", $context, $blocks);
                } else {
                    // line 55
                    $this->displayBlock("spanElement", $context, $blocks);
                }
            }
            // line 59
            if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "hasChildren", [], "any", false, false, false, 59) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 59, $this->source); })()), "depth", [], "any", false, false, false, 59) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "displayChildren", [], "any", false, false, false, 59))) {
                // line 60
                echo "<div class=\"m-menu__submenu \">
                    <ul class=\"m-menu__subnav\">";
                // line 61
                $this->displayBlock("children", $context, $blocks);
                echo "</ul>
                </div>";
            }
            // line 64
            echo "</li>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_dividerElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 69
        echo "<h4 class=\"m-menu__section-text\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        // line 73
        $context["classes"] = [0 => "m-menu__link"];
        // line 75
        $context["is_dashboard"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", true, true, false, 75) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 75), "dashboard", [], "any", true, true, false, 75)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 75, $this->source); })()), "extras", [], "any", false, false, false, 75), "dashboard", [], "any", false, false, false, 75));
        // line 76
        if ((isset($context["is_dashboard"]) || array_key_exists("is_dashboard", $context) ? $context["is_dashboard"] : (function () { throw new RuntimeError('Variable "is_dashboard" does not exist.', 76, $this->source); })())) {
            // line 77
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 77, $this->source); })()), [0 => "has-icon-left", 1 => "is-dashboard"]);
        }
        // line 80
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 80, $this->source); })()), "hasChildren", [], "any", false, false, false, 80) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 80, $this->source); })()), "depth", [], "any", false, false, false, 80) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 80, $this->source); })()), "displayChildren", [], "any", false, false, false, 80))) {
            // line 81
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 81, $this->source); })()), [0 => "m-menu__toggle"]);
        }
        // line 84
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 84, $this->source); })()), "uri", [], "any", false, false, false, 84), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 84, $this->source); })()), " "), "html", null, true);
        echo "\" title=\"";
        $this->displayBlock("label", $context, $blocks);
        echo "\"";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", true, true, false, 85)) {
            // line 86
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 86), "target", [], "any", true, true, false, 86)) {
                echo " target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 86, $this->source); })()), "extras", [], "any", false, false, false, 86), "target", [], "any", false, false, false, 86), "html", null, true);
                echo "\"";
            }
            // line 87
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 87), "module", [], "any", true, true, false, 87)) {
                echo " data-module=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 87, $this->source); })()), "extras", [], "any", false, false, false, 87), "module", [], "any", false, false, false, 87), "html", null, true);
                echo "\"";
            }
        }
        // line 89
        if (("#" == twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 89, $this->source); })()), "uri", [], "any", false, false, false, 89), 0, 1))) {
            echo " data-module=\"features/ScrollTo\"";
        }
        // line 90
        echo ">";
        // line 91
        if ((isset($context["is_dashboard"]) || array_key_exists("is_dashboard", $context) ? $context["is_dashboard"] : (function () { throw new RuntimeError('Variable "is_dashboard" does not exist.', 91, $this->source); })())) {
            echo "<i class=\"material-symbols-sharp\">category</i>";
        }
        // line 92
        echo "        <span class=\"m-menu__link-text\">";
        // line 93
        $this->displayBlock("label", $context, $blocks);
        // line 95
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 95), "hidden", [], "any", true, true, false, 95) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "extras", [], "any", false, false, false, 95), "hidden", [], "any", false, false, false, 95))) {
            // line 96
            echo "&nbsp;<i class=\"material-symbols-sharp is-tooltip\" data-toggle=\"tooltip\" data-placement=\"top\"
                         title=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("visible_writing_only"), "html", null, true);
            echo "\">visibility_off</i>";
        }
        // line 100
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 100), "private", [], "any", true, true, false, 100) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 100, $this->source); })()), "extras", [], "any", false, false, false, 100), "private", [], "any", false, false, false, 100))) {
            // line 101
            echo "&nbsp;<i class=\"material-symbols-sharp is-tooltip\" data-toggle=\"tooltip\" data-placement=\"top\"
                         title=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not_public"), "html", null, true);
            echo "\">vpn_key</i>";
        }
        // line 104
        echo "</span>";
        // line 106
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 106, $this->source); })()), "hasChildren", [], "any", false, false, false, 106) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 106, $this->source); })()), "depth", [], "any", false, false, false, 106) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 106, $this->source); })()), "displayChildren", [], "any", false, false, false, 106))) {
            // line 107
            echo "<i class=\"m-menu__ver-arrow material-symbols-sharp\">keyboard_arrow_right</i>";
        } else {
        }
        // line 110
        echo "</a>";
        // line 111
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (isset($context["is_dashboard"]) || array_key_exists("is_dashboard", $context) ? $context["is_dashboard"] : (function () { throw new RuntimeError('Variable "is_dashboard" does not exist.', 111, $this->source); })()))) {
            // line 112
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_dashboard_settings", ["_space" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 112, $this->source); })()), "extras", [], "any", false, false, false, 112), "space_slug", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\" class=\"m-menu__option is-link is-link--dialog\" data-dialog=\"form\"
           title=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings"), "html", null, true);
            echo "\"><i class=\"material-symbols-sharp\">settings</i>
        </a>";
        }
        // line 117
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", true, true, false, 117) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 117), "icon", [], "any", true, true, false, 117)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "extras", [], "any", false, false, false, 117), "icon", [], "any", false, false, false, 117))) {
            // line 118
            echo "<span class=\"m-menu__option no-link\"><i class=\"material-symbols-sharp text-white\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 118, $this->source); })()), "extras", [], "any", false, false, false, 118), "icon", [], "any", false, false, false, 118), "html", null, true);
            echo "</i></span>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_spaceSwitch($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spaceSwitch"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spaceSwitch"));

        // line 124
        $context["spaces"] = $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getFunctionFindAll();
        // line 125
        if ((1 < twig_length_filter($this->env, (isset($context["spaces"]) || array_key_exists("spaces", $context) ? $context["spaces"] : (function () { throw new RuntimeError('Variable "spaces" does not exist.', 125, $this->source); })())))) {
            // line 126
            echo "<div class=\"m-space-switch dropdown\">
            <button class=\"btn btn-default dropdown-toggle no-caret has-icon\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <span>";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 128, $this->source); })()), "label", [], "any", false, false, false, 128)), "html", null, true);
            echo "</span><i class=\"material-symbols-sharp\">sync_alt</i>
            </button>
            <div class=\"dropdown-menu\">";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["spaces"]) || array_key_exists("spaces", $context) ? $context["spaces"] : (function () { throw new RuntimeError('Variable "spaces" does not exist.', 131, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["space"]) {
                // line 132
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_dashboard_index", ["_space" => twig_get_attribute($this->env, $this->source, $context["space"], "slug", [], "any", false, false, false, 132)]), "html", null, true);
                echo "\" class=\"dropdown-item\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["space"], "name", [], "any", false, false, false, 132), "html", null, true);
                echo "</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['space'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "</div>
        </div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@App/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 134,  392 => 132,  388 => 131,  383 => 128,  379 => 126,  377 => 125,  375 => 124,  365 => 123,  352 => 118,  350 => 117,  345 => 113,  340 => 112,  338 => 111,  336 => 110,  332 => 107,  330 => 106,  328 => 104,  324 => 102,  321 => 101,  319 => 100,  315 => 97,  312 => 96,  310 => 95,  308 => 93,  306 => 92,  302 => 91,  300 => 90,  296 => 89,  289 => 87,  283 => 86,  281 => 85,  273 => 84,  270 => 81,  268 => 80,  265 => 77,  263 => 76,  261 => 75,  259 => 73,  249 => 72,  237 => 69,  227 => 68,  216 => 64,  211 => 61,  208 => 60,  206 => 59,  202 => 55,  199 => 53,  197 => 52,  194 => 50,  192 => 49,  190 => 48,  188 => 47,  182 => 46,  178 => 41,  176 => 40,  173 => 37,  171 => 36,  167 => 32,  165 => 31,  163 => 30,  161 => 29,  158 => 26,  156 => 25,  153 => 21,  151 => 20,  148 => 18,  146 => 17,  144 => 16,  142 => 15,  132 => 14,  110 => 9,  93 => 8,  83 => 7,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- extends '@KnpMenu/menu.html.twig' -%}

{%- block list -%}
    {{ block('children') }}
{%- endblock -%}

{%- block children -%}
    {%- for item in item.children -%}
        {{ block('item') }}
    {%- endfor -%}
{%- endblock -%}


{%- block item -%}
    {%- if item.displayed -%}
        {%- set classes = ['m-menu__item'] -%}
        {%- if (matcher is defined and (matcher.isCurrent(item) or matcher.isAncestor(item, options.depth))) %}
            {%- set classes = classes|merge(['active']) -%}
        {%- endif %}
        {%- if (matcher is defined and matcher.isCurrent(item)) or (item.current is defined and item.current) or (matcher is defined and matcher.isAncestor(item, options.depth)) or (item.currentAncestor is defined and item.currentAncestor) -%}
            {%- set classes = classes|merge(['m-menu__item--open',' m-menu__item--expanded']) -%}
        {%- endif -%}

        {# Dropdown? #}
        {%- if item.hasChildren and options.depth is not same as(0) and item.displayChildren -%}
            {%- set classes = classes|merge(['m-menu__item--submenu']) -%}
        {%- endif -%}

        {%- if item.extras is defined -%}
            {%- if item.extras.margin is defined -%}
                {%- if 'bottom' == item.extras.margin -%}
                    {%- set classes = classes|merge(['mb-3']) -%}
                {%- endif -%}
            {%- endif -%}

            {%- if item.extras.is_new is defined and item.extras.is_new -%}
                {%- set classes = classes|merge(['is-new']) -%}
            {%- endif -%}

            {%- if item.extras.divider is defined and item.extras.divider -%}
                {%- set classes = ['m-menu__section'] -%}
            {%- endif -%}
        {%- endif -%}

        {#- displaying the item -#}
        <li class=\"{{ classes|join(' ') }}\" data-position=\"{{ loop.index }}\">
            {%- if item.extras is defined and item.extras.divider is defined and item.extras.divider -%}
                {{- block('dividerElement') -}}
            {%- elseif item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) -%}
                {{- block('linkElement') -}}
            {%- else -%}
                {%- if 'space_switch' == item.name -%}
                    {{- block('spaceSwitch') -}}
                {%- else -%}
                    {{- block('spanElement') -}}
                {%- endif -%}
            {%- endif -%}

            {%- if item.hasChildren and options.depth is not same as(0) and item.displayChildren -%}
                <div class=\"m-menu__submenu \">
                    <ul class=\"m-menu__subnav\">{{- block('children') -}}</ul>
                </div>
            {%- endif -%}
        </li>
    {%- endif -%}
{%- endblock -%}

{%- block dividerElement -%}
    <h4 class=\"m-menu__section-text\">{{ block('label') }}</h4>
{%- endblock -%}

{%- block linkElement -%}
    {%- set classes = ['m-menu__link'] -%}

    {%- set is_dashboard= (item.extras is defined and item.extras.dashboard is defined and item.extras.dashboard) %}
    {%- if is_dashboard %}
        {%- set classes = classes|merge(['has-icon-left', 'is-dashboard']) -%}
    {%- endif %}

    {%- if item.hasChildren and options.depth is not same as(0) and item.displayChildren -%}
        {%- set classes = classes|merge(['m-menu__toggle']) -%}
    {%- endif -%}

    <a href=\"{{ item.uri }}\" class=\"{{ classes|join(' ') }}\" title=\"{{- block('label') }}\"
            {%- if item.extras is defined -%}
                {%- if item.extras.target is defined %} target=\"{{ item.extras.target }}\"{% endif -%}
                {%- if item.extras.module is defined %} data-module=\"{{ item.extras.module }}\"{% endif -%}
            {%- endif -%}
            {%- if '#' == item.uri|slice(0,1) %} data-module=\"features/ScrollTo\"{% endif -%}
    >
        {%- if is_dashboard %}<i class=\"material-symbols-sharp\">category</i>{% endif %}
        <span class=\"m-menu__link-text\">
            {{- block('label') }}

            {%- if item.extras.hidden is defined and item.extras.hidden -%}
                &nbsp;<i class=\"material-symbols-sharp is-tooltip\" data-toggle=\"tooltip\" data-placement=\"top\"
                         title=\"{{ 'visible_writing_only'|trans }}\">visibility_off</i>
            {%- endif -%}

            {%- if item.extras.private is defined and item.extras.private -%}
                &nbsp;<i class=\"material-symbols-sharp is-tooltip\" data-toggle=\"tooltip\" data-placement=\"top\"
                         title=\"{{ 'not_public'|trans }}\">vpn_key</i>
            {%- endif -%}
        </span>

        {%- if item.hasChildren and options.depth is not same as(0) and item.displayChildren -%}
            <i class=\"m-menu__ver-arrow material-symbols-sharp\">keyboard_arrow_right</i>
        {%- else -%}
        {%- endif -%}
    </a>
    {%- if is_granted('ROLE_ADMIN') and is_dashboard -%}
        <a href=\"{{ path_without_space('app_dashboard_settings', {'_space': item.extras.space_slug}) }}\" class=\"m-menu__option is-link is-link--dialog\" data-dialog=\"form\"
           title=\"{{ 'settings'|trans }}\"><i class=\"material-symbols-sharp\">settings</i>
        </a>
    {%- endif -%}

    {%- if item.extras is defined and item.extras.icon is defined and item.extras.icon -%}
        <span class=\"m-menu__option no-link\"><i class=\"material-symbols-sharp text-white\">{{ item.extras.icon }}</i></span>
    {%- endif -%}

{%- endblock -%}

{% block spaceSwitch %}
    {%- set spaces = app_space_find_all() -%}
    {%- if 1 < spaces|length -%}
        <div class=\"m-space-switch dropdown\">
            <button class=\"btn btn-default dropdown-toggle no-caret has-icon\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <span>{{ item.label|trans }}</span><i class=\"material-symbols-sharp\">sync_alt</i>
            </button>
            <div class=\"dropdown-menu\">
                {%- for space in spaces -%}
                    <a href=\"{{ path('app_dashboard_index', {'_space': space.slug}) }}\" class=\"dropdown-item\">{{ space.name }}</a>
                {%- endfor -%}
            </div>
        </div>
    {%- endif -%}
{% endblock %}", "@App/menu.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/menu.html.twig");
    }
}
