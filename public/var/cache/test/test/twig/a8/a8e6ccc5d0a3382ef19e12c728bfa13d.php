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

/* @App/element/smart_block/accordion/web.html.twig */
class __TwigTemplate_5aedf6f8f9917ac9ac76916848a4cc2f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/accordion/web.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/accordion/web.html.twig"));

        // line 1
        if (( !array_key_exists("ajax", $context) ||  !(isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "<div class=\"element--accordion_container reload-inline-container\">";
        }
        // line 5
        $context["accordion_remember"] = $this->env->getFunction('app_element_smart_block_accordion_remember')->getCallable()();
        // line 6
        echo "<div class=\"";
        $this->loadTemplate("@App/_components/accordion/class.html.twig", "@App/element/smart_block/accordion/web.html.twig", 6)->display($context);
        echo " wd-accordion\" data-sort=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_smart_block_accordion_sort", ["element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 6, $this->source); })()), "randomId", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\"
         id=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 7, $this->source); })()), "randomId", [], "any", false, false, false, 7), "html", null, true);
        echo "__accordion\" ";
        if ((isset($context["accordion_remember"]) || array_key_exists("accordion_remember", $context) ? $context["accordion_remember"] : (function () { throw new RuntimeError('Variable "accordion_remember" does not exist.', 7, $this->source); })())) {
            echo " data-remember=\"#";
            echo twig_escape_filter($this->env, (isset($context["accordion_remember"]) || array_key_exists("accordion_remember", $context) ? $context["accordion_remember"] : (function () { throw new RuntimeError('Variable "accordion_remember" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "-body\"";
        }
        echo ">";
        // line 9
        if ( !array_key_exists("category", $context)) {
            // line 10
            $context["category"] = twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 10, $this->source); })()), "category", [], "any", false, false, false, 10);
        }
        // line 13
        $context["include_deleted"] = ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "get", [0 => $this->extensions['AppBundle\Twig\PhpTwigExtension']->getFunctionEnumSession("APP_SMART_EDIT_RESTORE_MODE"), 1 => false], "method", false, false, false, 13));
        // line 14
        $context["item_position_displayed"] = 0;
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 16, $this->source); })()), "children", [0 => (isset($context["include_deleted"]) || array_key_exists("include_deleted", $context) ? $context["include_deleted"] : (function () { throw new RuntimeError('Variable "include_deleted" does not exist.', 16, $this->source); })())], "method", false, false, false, 16));
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
            // line 17
            $context["item_position_displayed"] = ((isset($context["item_position_displayed"]) || array_key_exists("item_position_displayed", $context) ? $context["item_position_displayed"] : (function () { throw new RuntimeError('Variable "item_position_displayed" does not exist.', 17, $this->source); })()) + 1);
            // line 18
            echo "<div class=\"m-accordion__item element--accordion_item";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "deleted", [], "any", false, false, false, 18)) {
                echo " deleted";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">

                <div class=\"wd-accordion-options\">";
            // line 21
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "writing", [], "any", false, false, false, 21)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) &&  !twig_get_attribute($this->env, $this->source, $context["item"], "deleted", [], "any", false, false, false, 21))) {
                // line 23
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_smart_block_accordion_item_edit", ["element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 23, $this->source); })()), "randomId", [], "any", false, false, false, 23), "child" => twig_get_attribute($this->env, $this->source, $context["item"], "randomId", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
                echo "\" data-action=\"edit\">
                            <i class=\"material-symbols-sharp\">edit</i>
                        </a>

                        <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_delete", ["element" => twig_get_attribute($this->env, $this->source, $context["item"], "randomId", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
                echo "\" data-action=\"delete\">
                            <i class=\"material-symbols-sharp\">delete</i>
                        </a>";
                // line 31
                echo "                        <a href=\"javascript:void(0)\" class=\"element--accordion_item-drag\"><i class=\"material-symbols-sharp\">zoom_out_map</i></a>";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 32
$context["item"], "deleted", [], "any", false, false, false, 32)) {
                // line 33
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_restore", ["element" => twig_get_attribute($this->env, $this->source, $context["item"], "randomId", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" data-action=\"restore\" data-confirm=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("restore_confirm"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 33), "html", null, true);
                echo "\">
                            <i class=\"material-symbols-sharp\">restore</i>
                        </a>";
            }
            // line 37
            echo "</div>

                <div class=\"m-accordion__item-head collapsed\" role=\"tab\" id=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "randomId", [], "any", false, false, false, 39), "html", null, true);
            echo "\" data-toggle=\"collapse\" href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "randomId", [], "any", false, false, false, 39), "html", null, true);
            echo "-body\" aria-expanded=\"false\">
                    <span class=\"m-accordion__item-mode\"></span>

                    <span class=\"m-accordion__item-title\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
                </div>";
            // line 45
            if ( !twig_get_attribute($this->env, $this->source, $context["item"], "deleted", [], "any", false, false, false, 45)) {
                // line 46
                echo "<div class=\"m-accordion__item-body collapse\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "randomId", [], "any", false, false, false, 46), "html", null, true);
                echo "-body\" role=\"tabpanel\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "randomId", [], "any", false, false, false, 46), "html", null, true);
                echo "\" data-parent=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 46, $this->source); })()), "randomId", [], "any", false, false, false, 46), "html", null, true);
                echo "__accordion\"
                         data-path-remember=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_smart_block_accordion_remember", ["element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 47, $this->source); })()), "randomId", [], "any", false, false, false, 47), "item" => twig_get_attribute($this->env, $this->source, $context["item"], "randomId", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">

                        <div class=\"m-accordion__item-content\">

                            ";
                // line 52
                $context["sub_element_count"] = ($this->extensions['AppBundle\Twig\CategoryTwigExtension']->getElementCount($context["item"]) - 1);
                // line 54
                if ((0 > (isset($context["sub_element_count"]) || array_key_exists("sub_element_count", $context) ? $context["sub_element_count"] : (function () { throw new RuntimeError('Variable "sub_element_count" does not exist.', 54, $this->source); })()))) {
                    // line 56
                    $this->loadTemplate("@App/empty.html.twig", "@App/element/smart_block/accordion/web.html.twig", 56)->display(twig_array_merge($context, ["message" => "elements_missing"]));
                    // line 58
                    if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "writing", [], "any", false, false, false, 58)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR"))) {
                        // line 59
                        $this->loadTemplate("@App/_components/button/add_first_element.html.twig", "@App/element/smart_block/accordion/web.html.twig", 59)->display(twig_array_merge($context, ["parent_element" => $context["item"]]));
                    }
                } else {
                    // line 64
                    echo "                                <ul class=\"list-unstyled\">";
                    // line 65
                    $context["override_layout_container"] = 0;
                    // line 66
                    $context["sub_element_position"] = 0;
                    // line 67
                    $context["sub_element_position_displayed"] = 0;
                    // line 69
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["sub_element_count"]) || array_key_exists("sub_element_count", $context) ? $context["sub_element_count"] : (function () { throw new RuntimeError('Variable "sub_element_count" does not exist.', 69, $this->source); })())));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_element_offset"]) {
                        // line 70
                        $context["sub_element"] = $this->extensions['AppBundle\Twig\CategoryTwigExtension']->getElementByParent($context["item"], $context["sub_element_offset"]);
                        // line 72
                        if ($this->extensions['AppBundle\Twig\ElementTwigExtension']->isAllowed((isset($context["sub_element"]) || array_key_exists("sub_element", $context) ? $context["sub_element"] : (function () { throw new RuntimeError('Variable "sub_element" does not exist.', 72, $this->source); })()))) {
                            // line 73
                            $context["sub_element_position_displayed"] = ((isset($context["sub_element_position_displayed"]) || array_key_exists("sub_element_position_displayed", $context) ? $context["sub_element_position_displayed"] : (function () { throw new RuntimeError('Variable "sub_element_position_displayed" does not exist.', 73, $this->source); })()) + 1);
                            // line 75
                            echo "<li class=\"";
                            $this->loadTemplate("@App/element/smart_block/_list/element_class.html.twig", "@App/element/smart_block/accordion/web.html.twig", 75)->display(twig_array_merge($context, ["element" => (isset($context["sub_element"]) || array_key_exists("sub_element", $context) ? $context["sub_element"] : (function () { throw new RuntimeError('Variable "sub_element" does not exist.', 75, $this->source); })())]));
                            echo "\"
                                                data-reload=\"";
                            // line 76
                            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_ajax_get", ["randomId" => twig_get_attribute($this->env, $this->source, (isset($context["sub_element"]) || array_key_exists("sub_element", $context) ? $context["sub_element"] : (function () { throw new RuntimeError('Variable "sub_element" does not exist.', 76, $this->source); })()), "randomId", [], "any", false, false, false, 76)]), "html", null, true);
                            echo "\"";
                            // line 77
                            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
                                echo " data-preview=\"";
                                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_ajax_preview", ["randomId" => twig_get_attribute($this->env, $this->source, (isset($context["sub_element"]) || array_key_exists("sub_element", $context) ? $context["sub_element"] : (function () { throw new RuntimeError('Variable "sub_element" does not exist.', 77, $this->source); })()), "randomId", [], "any", false, false, false, 77)]), "html", null, true);
                                echo "\"";
                            }
                            // line 78
                            echo $this->extensions['AppBundle\Twig\ElementTwigExtension']->getAttributes((isset($context["sub_element"]) || array_key_exists("sub_element", $context) ? $context["sub_element"] : (function () { throw new RuntimeError('Variable "sub_element" does not exist.', 78, $this->source); })()));
                            echo ">";
                            // line 79
                            if ((true == twig_get_attribute($this->env, $this->source, (isset($context["sub_element"]) || array_key_exists("sub_element", $context) ? $context["sub_element"] : (function () { throw new RuntimeError('Variable "sub_element" does not exist.', 79, $this->source); })()), "deleted", [], "any", false, false, false, 79))) {
                                // line 80
                                echo "<div class=\"deleted-overlay\"></div>";
                            }
                            // line 84
                            $context["item_options"] = ["element" => (isset($context["sub_element"]) || array_key_exists("sub_element", $context) ? $context["sub_element"] : (function () { throw new RuntimeError('Variable "sub_element" does not exist.', 84, $this->source); })()), "position" => (isset($context["sub_element_position"]) || array_key_exists("sub_element_position", $context) ? $context["sub_element_position"] : (function () { throw new RuntimeError('Variable "sub_element_position" does not exist.', 84, $this->source); })())];
                            // line 87
                            if (array_key_exists("position_displayed", $context)) {
                                // line 88
                                $context["item_options"] = twig_array_merge((isset($context["item_options"]) || array_key_exists("item_options", $context) ? $context["item_options"] : (function () { throw new RuntimeError('Variable "item_options" does not exist.', 88, $this->source); })()), ["element_position_name" => ((((twig_sprintf("%02d", (isset($context["position_displayed"]) || array_key_exists("position_displayed", $context) ? $context["position_displayed"] : (function () { throw new RuntimeError('Variable "position_displayed" does not exist.', 88, $this->source); })())) . " | ") . twig_sprintf("%02d", (isset($context["item_position_displayed"]) || array_key_exists("item_position_displayed", $context) ? $context["item_position_displayed"] : (function () { throw new RuntimeError('Variable "item_position_displayed" does not exist.', 88, $this->source); })()))) . " | ") . twig_sprintf("%02d", (isset($context["sub_element_position_displayed"]) || array_key_exists("sub_element_position_displayed", $context) ? $context["sub_element_position_displayed"] : (function () { throw new RuntimeError('Variable "sub_element_position_displayed" does not exist.', 88, $this->source); })())))]);
                            }
                            // line 91
                            $this->loadTemplate("@App/element/smart_block/list_item.html.twig", "@App/element/smart_block/accordion/web.html.twig", 91)->display(twig_array_merge($context, (isset($context["item_options"]) || array_key_exists("item_options", $context) ? $context["item_options"] : (function () { throw new RuntimeError('Variable "item_options" does not exist.', 91, $this->source); })())));
                            // line 93
                            $context["sub_element_position"] = twig_get_attribute($this->env, $this->source, (isset($context["sub_element"]) || array_key_exists("sub_element", $context) ? $context["sub_element"] : (function () { throw new RuntimeError('Variable "sub_element" does not exist.', 93, $this->source); })()), "position", [], "any", false, false, false, 93);
                            // line 94
                            echo "</li>";
                        }
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_element_offset'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    echo "</ul>";
                }
                // line 101
                echo "</div>
                    </div>";
            }
            // line 104
            echo "</div>";
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
        // line 107
        echo "<div class=\"element--accordion_add-item m-accordion__item\" data-path=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_smart_block_accordion_item_add", ["element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 107, $this->source); })()), "randomId", [], "any", false, false, false, 107)]), "html", null, true);
        echo "?parent=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107), "html", null, true);
        echo "\">

            <div class=\"m-accordion__item-head collapsed\">
                <span class=\"m-accordion__item-mode\"></span>
                <span class=\"m-accordion__item-title\">";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add_accordion"), "html", null, true);
        echo "</span>
            </div>

        </div>
    </div>";
        // line 117
        if (( !array_key_exists("ajax", $context) ||  !(isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 117, $this->source); })()))) {
            // line 118
            echo "</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/smart_block/accordion/web.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 118,  301 => 117,  294 => 111,  284 => 107,  270 => 104,  266 => 101,  263 => 98,  248 => 94,  246 => 93,  244 => 91,  241 => 88,  239 => 87,  237 => 84,  234 => 80,  232 => 79,  229 => 78,  223 => 77,  220 => 76,  215 => 75,  213 => 73,  211 => 72,  209 => 70,  192 => 69,  190 => 67,  188 => 66,  186 => 65,  184 => 64,  180 => 59,  178 => 58,  176 => 56,  174 => 54,  172 => 52,  165 => 47,  156 => 46,  154 => 45,  150 => 42,  142 => 39,  138 => 37,  127 => 33,  125 => 32,  123 => 31,  116 => 27,  106 => 23,  104 => 21,  94 => 18,  92 => 17,  75 => 16,  73 => 14,  71 => 13,  68 => 10,  66 => 9,  57 => 7,  50 => 6,  48 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if ajax is not defined or not ajax -%}
<div class=\"element--accordion_container reload-inline-container\">
    {%- endif -%}

    {%- set accordion_remember = app_element_smart_block_accordion_remember() -%}
    <div class=\"{% include \"@App/_components/accordion/class.html.twig\" %} wd-accordion\" data-sort=\"{{ path('app_element_smart_block_accordion_sort', {'element':element.randomId}) }}\"
         id=\"{{ element.randomId }}__accordion\" {% if accordion_remember %} data-remember=\"#{{ accordion_remember }}-body\"{% endif %}>

        {%- if category is not defined -%}
            {%- set category = element.category -%}
        {%- endif -%}

        {%- set include_deleted = (is_granted('ROLE_EDITOR') and app.session.get(enum_session('APP_SMART_EDIT_RESTORE_MODE'), false)) -%}
        {%- set item_position_displayed = 0 -%}

        {%- for item in element.children(include_deleted) -%}
            {%- set item_position_displayed = item_position_displayed + 1 -%}
            <div class=\"m-accordion__item element--accordion_item{% if item.deleted %} deleted{% endif %}\" data-id=\"{{ item.id }}\">

                <div class=\"wd-accordion-options\">
                    {%- if is_granted('ROLE_USER') and app.user.writing and is_granted('ROLE_EDITOR') and not item.deleted -%}
                        {#- Edit/Delete Options for item #}
                        <a href=\"{{ path('app_element_smart_block_accordion_item_edit', {'element': element.randomId, 'child':item.randomId}) }}\" title=\"{{ 'edit'|trans }}\" data-action=\"edit\">
                            <i class=\"material-symbols-sharp\">edit</i>
                        </a>

                        <a href=\"{{ path('app_element_delete', {'element':item.randomId}) }}\" title=\"{{ 'delete'|trans }}\" data-action=\"delete\">
                            <i class=\"material-symbols-sharp\">delete</i>
                        </a>
                        {#- Drag&Drop icon #}
                        <a href=\"javascript:void(0)\" class=\"element--accordion_item-drag\"><i class=\"material-symbols-sharp\">zoom_out_map</i></a>
                    {%- elseif item.deleted -%}
                        <a href=\"{{ path('app_element_restore', {'element':item.randomId}) }}\" data-action=\"restore\" data-confirm=\"{{ 'restore_confirm'|trans }}\" title=\"{{ item.content }}\">
                            <i class=\"material-symbols-sharp\">restore</i>
                        </a>
                    {%- endif -%}
                </div>

                <div class=\"m-accordion__item-head collapsed\" role=\"tab\" id=\"{{ item.randomId }}\" data-toggle=\"collapse\" href=\"#{{ item.randomId }}-body\" aria-expanded=\"false\">
                    <span class=\"m-accordion__item-mode\"></span>

                    <span class=\"m-accordion__item-title\">{{ item.content }}</span>
                </div>

                {%- if not item.deleted -%}
                    <div class=\"m-accordion__item-body collapse\" id=\"{{ item.randomId }}-body\" role=\"tabpanel\" aria-labelledby=\"{{ item.randomId }}\" data-parent=\"#{{ element.randomId }}__accordion\"
                         data-path-remember=\"{{ path('app_element_smart_block_accordion_remember',{'element':element.randomId,'item':item.randomId}) }}\">

                        <div class=\"m-accordion__item-content\">

                            {# Get Subelement count, zero based #}
                            {%- set sub_element_count = item|app_category_element_count - 1 -%}

                            {%- if 0 > sub_element_count -%}
                                {# No element #}
                                {%- include \"@App/empty.html.twig\" with {'message':'elements_missing'} -%}

                                {%- if is_granted('ROLE_USER') and app.user.writing and is_granted('ROLE_EDITOR') -%}
                                    {% include \"@App/_components/button/add_first_element.html.twig\" with {'parent_element':item} %}
                                {%- endif -%}

                            {%- else -%}
                                {# Elements existing #}
                                <ul class=\"list-unstyled\">
                                    {%- set override_layout_container = 0 -%}
                                    {%- set sub_element_position = 0 -%}
                                    {%- set sub_element_position_displayed = 0 -%}

                                    {%- for sub_element_offset in 0..sub_element_count -%}
                                        {%- set sub_element = item|app_category_element_by_parent(sub_element_offset) -%}

                                        {%- if sub_element|app_element_is_allowed -%}
                                            {%- set sub_element_position_displayed = sub_element_position_displayed + 1 -%}

                                            <li class=\"{%- include \"@App/element/smart_block/_list/element_class.html.twig\" with {'element':sub_element} -%}\"
                                                data-reload=\"{{ path('app_element_ajax_get', {'randomId':sub_element.randomId}) }}\"
                                                    {%- if is_granted('ROLE_EDITOR') %} data-preview=\"{{ path('app_element_ajax_preview', {'randomId':sub_element.randomId}) }}\"{% endif -%}
                                                    {{- sub_element|app_element_attributes|raw }}>
                                                {%- if true == sub_element.deleted -%}
                                                    <div class=\"deleted-overlay\"></div>
                                                {%- endif -%}

                                                {#- Base options #}
                                                {%- set item_options = {'element':sub_element, 'position':sub_element_position} -%}

                                                {#- Position description #}
                                                {%- if position_displayed is defined -%}
                                                    {%- set item_options = item_options|merge({element_position_name: (\"%02d\"|format(position_displayed) ~ ' | ' ~ \"%02d\"|format(item_position_displayed) ~ ' | ' ~ \"%02d\"|format(sub_element_position_displayed))}) -%}
                                                {%- endif -%}

                                                {%- include \"@App/element/smart_block/list_item.html.twig\" with item_options -%}

                                                {%- set sub_element_position = sub_element.position -%}
                                            </li>

                                        {%- endif -%}
                                    {%- endfor -%}
                                </ul>
                            {%- endif -%}

                        </div>
                    </div>
                {%- endif -%}
            </div>
        {%- endfor -%}

        <div class=\"element--accordion_add-item m-accordion__item\" data-path=\"{{ path('app_element_smart_block_accordion_item_add', {'element':element.randomId}) }}?parent={{ element.id }}\">

            <div class=\"m-accordion__item-head collapsed\">
                <span class=\"m-accordion__item-mode\"></span>
                <span class=\"m-accordion__item-title\">{{ 'add_accordion'|trans }}</span>
            </div>

        </div>
    </div>

    {%- if ajax is not defined or not ajax -%}
</div>
{%- endif -%}

", "@App/element/smart_block/accordion/web.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/smart_block/accordion/web.html.twig");
    }
}
