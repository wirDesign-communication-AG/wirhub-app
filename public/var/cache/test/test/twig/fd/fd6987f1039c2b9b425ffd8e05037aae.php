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

/* @App/_components/form/default.html.twig */
class __TwigTemplate_633feb7fa3a690376429b7f6d8018584 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@App/_components/form/default.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'date_range_row' => [$this, 'block_date_range_row'],
                'form_start' => [$this, 'block_form_start'],
                'form_row' => [$this, 'block_form_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'base64_upload_row' => [$this, 'block_base64_upload_row'],
                'chunked_upload_row' => [$this, 'block_chunked_upload_row'],
                'button_widget' => [$this, 'block_button_widget'],
                'form_help' => [$this, 'block_form_help'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_errors' => [$this, 'block_form_label_errors'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'bootstrap_collection_widget' => [$this, 'block_bootstrap_collection_widget'],
                'accordion_collection_row' => [$this, 'block_accordion_collection_row'],
                'accordion_collection_widget' => [$this, 'block_accordion_collection_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_components/form/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_components/form/default.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('date_range_row', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('form_start', $context, $blocks);
        // line 60
        echo "
";
        // line 62
        $this->displayBlock('form_row', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('base64_upload_row', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('chunked_upload_row', $context, $blocks);
        // line 84
        echo "
";
        // line 86
        $this->displayBlock('button_widget', $context, $blocks);
        // line 109
        echo "

";
        // line 111
        $this->displayBlock('form_help', $context, $blocks);
        // line 120
        echo "
";
        // line 124
        $this->displayBlock('form_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 227
        echo "

";
        // line 230
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('bootstrap_collection_widget', $context, $blocks);
        // line 287
        $this->displayBlock('accordion_collection_row', $context, $blocks);
        // line 330
        $this->displayBlock('accordion_collection_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_date_range_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_row"));

        // line 4
        echo "    <div class=\"form--date-range\">
        ";
        // line 5
        $this->displayBlock("form_label", $context, $blocks);
        echo "

        <div class=\"selector\" data-module=\"features/FormDateRange\">";
        // line 8
        $context["dateStart"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "start", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8);
        // line 9
        $context["dateEnd"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "end", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9);
        // line 10
        echo "            <div class=\"label\">";
        // line 11
        if ((twig_date_format_filter($this->env, (isset($context["dateStart"]) || array_key_exists("dateStart", $context) ? $context["dateStart"] : (function () { throw new RuntimeError('Variable "dateStart" does not exist.', 11, $this->source); })()), "mY") == twig_date_format_filter($this->env, (isset($context["dateEnd"]) || array_key_exists("dateEnd", $context) ? $context["dateEnd"] : (function () { throw new RuntimeError('Variable "dateEnd" does not exist.', 11, $this->source); })()), "mY"))) {
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateStart"]) || array_key_exists("dateStart", $context) ? $context["dateStart"] : (function () { throw new RuntimeError('Variable "dateStart" does not exist.', 12, $this->source); })()), "m"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateStart"]) || array_key_exists("dateStart", $context) ? $context["dateStart"] : (function () { throw new RuntimeError('Variable "dateStart" does not exist.', 12, $this->source); })()), "y"), "html", null, true);
        } else {
            // line 14
            if ((twig_date_format_filter($this->env, (isset($context["dateEnd"]) || array_key_exists("dateEnd", $context) ? $context["dateEnd"] : (function () { throw new RuntimeError('Variable "dateEnd" does not exist.', 14, $this->source); })()), "dmY") == twig_date_format_filter($this->env, "now", "dmY"))) {
                // line 15
                $context["labelDateEnd"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("time.today");
            } else {
                // line 17
                $context["labelDateEnd"] = ((twig_date_format_filter($this->env, (isset($context["dateEnd"]) || array_key_exists("dateEnd", $context) ? $context["dateEnd"] : (function () { throw new RuntimeError('Variable "dateEnd" does not exist.', 17, $this->source); })()), "m") . "/") . twig_date_format_filter($this->env, (isset($context["dateEnd"]) || array_key_exists("dateEnd", $context) ? $context["dateEnd"] : (function () { throw new RuntimeError('Variable "dateEnd" does not exist.', 17, $this->source); })()), "y"));
            }
            // line 20
            if (("01" == twig_date_format_filter($this->env, (isset($context["dateStart"]) || array_key_exists("dateStart", $context) ? $context["dateStart"] : (function () { throw new RuntimeError('Variable "dateStart" does not exist.', 20, $this->source); })()), "d"))) {
                // line 21
                $context["labelDateStart"] = ((twig_date_format_filter($this->env, (isset($context["dateStart"]) || array_key_exists("dateStart", $context) ? $context["dateStart"] : (function () { throw new RuntimeError('Variable "dateStart" does not exist.', 21, $this->source); })()), "m") . "/") . twig_date_format_filter($this->env, (isset($context["dateStart"]) || array_key_exists("dateStart", $context) ? $context["dateStart"] : (function () { throw new RuntimeError('Variable "dateStart" does not exist.', 21, $this->source); })()), "y"));
            } else {
                // line 23
                $context["labelDateStart"] = $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, (isset($context["dateStart"]) || array_key_exists("dateStart", $context) ? $context["dateStart"] : (function () { throw new RuntimeError('Variable "dateStart" does not exist.', 23, $this->source); })()), "short");
            }
            // line 26
            echo twig_escape_filter($this->env, (isset($context["labelDateStart"]) || array_key_exists("labelDateStart", $context) ? $context["labelDateStart"] : (function () { throw new RuntimeError('Variable "labelDateStart" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "&nbsp;-&nbsp;";
            echo twig_escape_filter($this->env, (isset($context["labelDateEnd"]) || array_key_exists("labelDateEnd", $context) ? $context["labelDateEnd"] : (function () { throw new RuntimeError('Variable "labelDateEnd" does not exist.', 26, $this->source); })()), "html", null, true);
        }
        // line 28
        echo "            </div>
            <div class=\"dropdown\">
                <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"material-symbols-sharp\">expand_more</i></a>

                <div class=\"dropdown-menu dropdown-menu-right\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-item\" data-start=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "last month", "Y-m-01"), "html", null, true);
        echo "\" data-end=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "last month", "Y-m-t"), "html", null, true);
        echo "\"
                       data-label=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "last month", "m/y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("time.last_month"), "html", null, true);
        echo "</a>
                    <a href=\"javascript:void(0)\" class=\"dropdown-item\" data-start=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-01"), "html", null, true);
        echo "\" data-end=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                       data-label=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("this_month"), "html", null, true);
        echo "</a>
                    <a href=\"javascript:void(0)\" class=\"dropdown-item\" data-start=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "-30 days", "Y-m-d"), "html", null, true);
        echo "\" data-end=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                       data-label=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "-30 days", "short"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("time.today"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("last_thirty_days"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>

        <div class=\"d-none\">";
        // line 43
        $this->displayBlock("form_widget", $context, $blocks);
        echo "</div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 48
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 48)) {
            // line 49
            echo "        ";
            $context["class"] = twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 49, $this->source); })()), "class", [], "any", false, false, false, 49);
            // line 50
            echo "    ";
        } else {
            // line 51
            echo "        ";
            $context["class"] = "";
            // line 52
            echo "    ";
        }
        // line 53
        echo "
    ";
        // line 54
        $context["class"] = twig_trim_filter(((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 54, $this->source); })()) . " m-form"));
        // line 55
        echo "
    ";
        // line 56
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 56, $this->source); })()), ["class" => (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 56, $this->source); })())]);
        // line 57
        echo "
    ";
        // line 58
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 63
        if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 63, $this->source); })()))) {
            // line 64
            $context["element"] = "fieldset";
        }
        // line 66
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 66, $this->source); })()), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group m-form__group ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 66), "id", [], "any", true, true, false, 66)) {
            echo "form-group--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
        }
        echo "\">";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'label');
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'widget');
        // line 69
        $this->displayBlock("form_help", $context, $blocks);
        // line 70
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 70, $this->source); })()), "div")) : ("div")), "html", null, true);
        echo ">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 74
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_base64_upload_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base64_upload_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base64_upload_row"));

        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'widget');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_chunked_upload_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chunked_upload_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chunked_upload_row"));

        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'widget');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 87
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 87, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 87)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 87), "btn-primary")) : ("btn-primary")) . " btn"))]);
        // line 89
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 89, $this->source); })()))) {
            // line 90
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 90, $this->source); })()))) {
                // line 91
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 91, $this->source); })()), ["%name%" =>                 // line 92
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 92, $this->source); })()), "%id%" =>                 // line 93
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 93, $this->source); })())]);
            } elseif ( !(            // line 95
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 95, $this->source); })()) === false)) {
                // line 96
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 96, $this->source); })()));
            }
        }
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icon", [], "any", true, true, false, 100)) {
            // line 101
            $context["icon"] = (("<i class=\"material-symbols-sharp\">" . twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 101, $this->source); })()), "icon", [], "any", false, false, false, 101)) . "</i> ");
            // line 102
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 102, $this->source); })()), ["icon" => false]);
        } else {
            // line 104
            $context["icon"] = "";
        }
        // line 107
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 107, $this->source); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 107, $this->source); })());
        echo twig_escape_filter($this->env, (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 107, $this->source); })()) === false) || ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 107, $this->source); })()) === false))) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 107, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 107, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 107, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 107, $this->source); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 111
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 112
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "help_text", [], "any", true, true, false, 112) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 112, $this->source); })()), "help_text", [], "any", false, false, false, 112)))) {
            // line 113
            echo "        ";
            $context["help_text"] = twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 113, $this->source); })()), "help_text", [], "any", false, false, false, 113);
            // line 114
            echo "    ";
        }
        // line 115
        echo "    ";
        $context["help_text"] = ((array_key_exists("help_text", $context)) ? (_twig_default_filter((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new RuntimeError('Variable "help_text" does not exist.', 115, $this->source); })()), "")) : (""));
        // line 116
        echo "    ";
        if ( !twig_test_empty((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new RuntimeError('Variable "help_text" does not exist.', 116, $this->source); })()))) {
            // line 117
            echo "        <span class=\"m-form__help\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new RuntimeError('Variable "help_text" does not exist.', 117, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 117, $this->source); })())), "html", null, true);
            echo "</span>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 124
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 125
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 125, $this->source); })()) === false)) {
            // line 126
            if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 126, $this->source); })()))) {
                // line 127
                $context["element"] = "legend";
                // line 128
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 128, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 128)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 128), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 130
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 130, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 130, $this->source); })())]);
            }
            // line 132
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 132, $this->source); })())) {
                // line 133
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 133, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 133), "")) : ("")) . " required"))]);
            }
            // line 135
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 135, $this->source); })()))) {
                // line 136
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 136, $this->source); })()))) {
                    // line 137
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 137, $this->source); })()), ["%name%" =>                     // line 138
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 138, $this->source); })()), "%id%" =>                     // line 139
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 139, $this->source); })())]);
                } else {
                    // line 142
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 142, $this->source); })()));
                }
            }
            // line 146
            if (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "help_text", [], "any", true, true, false, 146)) {
                // line 147
                $context["help_text"] = twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 147, $this->source); })()), "help_text", [], "any", false, false, false, 147);
                // line 148
                $context["help_text_domain"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "help_text_domain", [], "any", true, true, false, 148)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "help_text_domain", [], "any", false, false, false, 148), "messages")) : ("messages"));
                // line 149
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 149, $this->source); })()), ["help_text" => false]);
            }
            // line 152
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 152, $this->source); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 152, $this->source); })())) {
                $__internal_compile_0 = $context;
                $__internal_compile_1 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 152, $this->source); })())];
                if (!twig_test_iterable($__internal_compile_1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 152, $this->getSourceContext());
                }
                $__internal_compile_1 = twig_to_array($__internal_compile_1);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_0;
            }
            echo ">
        ";
            // line 153
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 153, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 153, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 153, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 153, $this->source); })())))), "html", null, true);
            // line 154
            if (array_key_exists("help_text", $context)) {
                // line 155
                echo "&nbsp;";
                $this->loadTemplate("@App/_components/icons/tooltip_help.html.twig", "@App/_components/form/default.html.twig", 155)->display(twig_array_merge($context, ["help_text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new RuntimeError('Variable "help_text" does not exist.', 155, $this->source); })()), [], (isset($context["help_text_domain"]) || array_key_exists("help_text_domain", $context) ? $context["help_text_domain"] : (function () { throw new RuntimeError('Variable "help_text_domain" does not exist.', 155, $this->source); })()))]));
            }
            // line 158
            $this->displayBlock('form_label_errors', $context, $blocks);
            // line 159
            echo "        </";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 159, $this->source); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        } else {
            // line 161
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 161, $this->source); })())) > 0)) {
                // line 162
                echo "<div id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 162, $this->source); })()), "html", null, true);
                echo "_errors\" class=\"mb-2\">";
                // line 163
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), 'errors');
                // line 164
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 158
    public function block_form_label_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_errors"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), 'errors');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 169
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 171
        if (array_key_exists("widget", $context)) {
            // line 172
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 172), "vars", [], "any", false, true, false, 172), "expanded", [], "any", true, true, false, 172) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "parent", [], "any", false, false, false, 172), "vars", [], "any", false, false, false, 172), "expanded", [], "any", false, false, false, 172)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "parent", [], "any", false, false, false, 172), "vars", [], "any", false, false, false, 172), "multiple", [], "any", false, false, false, 172)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 172), "original_type", [], "any", true, true, false, 172) && ("radio" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "vars", [], "any", false, false, false, 172), "original_type", [], "any", false, false, false, 172))))) {
                // line 173
                echo "            ";
                $context["metronic_class"] = "m-radio";
                // line 174
                echo "        ";
            } else {
                // line 175
                echo "            ";
                $context["metronic_class"] = "m-checkbox";
                // line 176
                echo "        ";
            }
            // line 177
            echo "
        ";
            // line 178
            $context["is_parent_custom"] = (array_key_exists("parent_label_class", $context) && (twig_in_filter("checkbox-custom", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 178, $this->source); })())) || twig_in_filter("radio-custom", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 178, $this->source); })()))));
            // line 179
            echo "        ";
            $context["is_custom"] = (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 179) && (twig_in_filter("checkbox-custom", twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 179, $this->source); })()), "class", [], "any", false, false, false, 179)) || twig_in_filter("radio-custom", twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 179, $this->source); })()), "class", [], "any", false, false, false, 179))));
            // line 180
            if (((isset($context["is_parent_custom"]) || array_key_exists("is_parent_custom", $context) ? $context["is_parent_custom"] : (function () { throw new RuntimeError('Variable "is_parent_custom" does not exist.', 180, $this->source); })()) || (isset($context["is_custom"]) || array_key_exists("is_custom", $context) ? $context["is_custom"] : (function () { throw new RuntimeError('Variable "is_custom" does not exist.', 180, $this->source); })()))) {
                // line 181
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 181, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 181)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 181), "")) : ("")) . " custom-control-label"))]);
            } else {
                // line 183
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 183, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 183)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 183), "")) : ("")) . " form-check-label ") . (isset($context["metronic_class"]) || array_key_exists("metronic_class", $context) ? $context["metronic_class"] : (function () { throw new RuntimeError('Variable "metronic_class" does not exist.', 183, $this->source); })())))]);
            }
            // line 185
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 185, $this->source); })())) {
                // line 186
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 186, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 186, $this->source); })())]);
            }
            // line 188
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 188, $this->source); })())) {
                // line 189
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 189, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 189)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 189), "")) : ("")) . " required"))]);
            }
            // line 193
            if (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "help_text", [], "any", true, true, false, 193)) {
                // line 194
                $context["help_text"] = twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 194, $this->source); })()), "help_text", [], "any", false, false, false, 194);
                // line 195
                $context["help_text_domain"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "help_text_domain", [], "any", true, true, false, 195)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "help_text_domain", [], "any", false, false, false, 195), "messages")) : ("messages"));
                // line 196
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 196, $this->source); })()), ["help_text" => false]);
            }
            // line 199
            if (array_key_exists("parent_label_class", $context)) {
                // line 200
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 200, $this->source); })()), ["class" => twig_trim_filter(twig_replace_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 200)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 200), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 200, $this->source); })())), ["checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => ""]))]);
            }
            // line 202
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 202, $this->source); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 202, $this->source); })())))) {
                // line 203
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 203, $this->source); })()))) {
                    // line 204
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 204, $this->source); })()), ["%name%" =>                     // line 205
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 205, $this->source); })()), "%id%" =>                     // line 206
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 206, $this->source); })())]);
                } else {
                    // line 209
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 209, $this->source); })()));
                }
            }
            // line 213
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 213, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 214
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 214, $this->source); })());
            // line 216
            (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 216, $this->source); })()) === false)) ? (print (twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 216, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 216, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 216, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 216, $this->source); })())))), "html", null, true))) : (print ("")));
            // line 217
            echo "<span></span>";
            // line 219
            if (array_key_exists("help_text", $context)) {
                // line 220
                echo "&nbsp;";
                $this->loadTemplate("@App/_components/icons/tooltip_help.html.twig", "@App/_components/form/default.html.twig", 220)->display(twig_array_merge($context, ["help_text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new RuntimeError('Variable "help_text" does not exist.', 220, $this->source); })()), [], (isset($context["help_text_domain"]) || array_key_exists("help_text_domain", $context) ? $context["help_text_domain"] : (function () { throw new RuntimeError('Variable "help_text_domain" does not exist.', 220, $this->source); })()))]));
            }
            // line 223
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), 'errors');
            // line 224
            echo "</label>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 230
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 231
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 232
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 232, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 232, $this->source); })()), 'row')]);
            // line 233
            echo "    ";
        }
        // line 234
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 237
    public function block_bootstrap_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_collection_widget"));

        // line 238
        echo "    ";
        $context["delete_button_text"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 238), "delete_button_text", [], "any", true, true, false, 238)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 238), "delete_button_text", [], "any", false, false, false, 238), "delete")) : ("delete"));
        // line 239
        echo "    ";
        $context["add_button_text"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 239), "add_button_text", [], "any", true, true, false, 239)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 239), "add_button_text", [], "any", false, false, false, 239), "add")) : ("add"));
        // line 240
        echo "    ";
        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 240, $this->source); })()) === false)) {
            // line 241
            echo "        ";
            $context["delete_button_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["delete_button_text"]) || array_key_exists("delete_button_text", $context) ? $context["delete_button_text"] : (function () { throw new RuntimeError('Variable "delete_button_text" does not exist.', 241, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 241, $this->source); })()));
            // line 242
            echo "        ";
            $context["add_button_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["add_button_text"]) || array_key_exists("add_button_text", $context) ? $context["add_button_text"] : (function () { throw new RuntimeError('Variable "add_button_text" does not exist.', 242, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 242, $this->source); })()));
            // line 243
            echo "    ";
        }
        // line 244
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 245
            echo "        ";
            $context["prototype_vars"] = [];
            // line 246
            echo "        ";
            if (array_key_exists("style", $context)) {
                // line 247
                echo "            ";
                $context["prototype_vars"] = twig_array_merge((isset($context["prototype_vars"]) || array_key_exists("prototype_vars", $context) ? $context["prototype_vars"] : (function () { throw new RuntimeError('Variable "prototype_vars" does not exist.', 247, $this->source); })()), ["style" => (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 247, $this->source); })())]);
                // line 248
                echo "        ";
            }
            // line 249
            echo "        ";
            $context["prototype_html"] = (((("<div class=\"col-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "vars", [], "any", false, false, false, 249), "sub_widget_col", [], "any", false, false, false, 249)) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 249, $this->source); })()), 'widget', (isset($context["prototype_vars"]) || array_key_exists("prototype_vars", $context) ? $context["prototype_vars"] : (function () { throw new RuntimeError('Variable "prototype_vars" does not exist.', 249, $this->source); })()))) . "</div>");
            // line 250
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "vars", [], "any", false, false, false, 250), "allow_delete", [], "any", false, false, false, 250)) {
                // line 251
                echo "            ";
                $context["prototype_html"] = ((((((((isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new RuntimeError('Variable "prototype_html" does not exist.', 251, $this->source); })()) . "<div class=\"col-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "vars", [], "any", false, false, false, 251), "button_col", [], "any", false, false, false, 251)) . "\"><a href=\"#\" class=\"") . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 251), "delete_button_class", [], "any", true, true, false, 251)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 251), "delete_button_class", [], "any", false, false, false, 251), "btn btn-default")) : ("btn btn-default"))) . "\" data-removefield=\"collection\" data-field=\"__id__\">") . (isset($context["delete_button_text"]) || array_key_exists("delete_button_text", $context) ? $context["delete_button_text"] : (function () { throw new RuntimeError('Variable "delete_button_text" does not exist.', 251, $this->source); })())) . "</a></div>");
                // line 252
                echo "        ";
            }
            // line 253
            echo "        ";
            $context["prototype_html"] = (("<div class=\"row mb-2\">" . (isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new RuntimeError('Variable "prototype_html" does not exist.', 253, $this->source); })())) . "</div>");
            // line 254
            echo "
        ";
            // line 255
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 255, $this->source); })()), ["data-prototype" => (isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new RuntimeError('Variable "prototype_html" does not exist.', 255, $this->source); })())]);
            // line 256
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 256, $this->source); })()), ["data-prototype-name" => (isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new RuntimeError('Variable "prototype_name" does not exist.', 256, $this->source); })())]);
            // line 257
            echo "    ";
        }
        // line 258
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <ul class=\"bc-collection list-unstyled\">
            ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 261
            echo "                <li>
                    <div class=\"row mb-2\">
                        <div class=\"col-";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "vars", [], "any", false, false, false, 263), "sub_widget_col", [], "any", false, false, false, 263), "html", null, true);
            echo "\">
                            ";
            // line 264
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                            ";
            // line 265
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
            echo "
                        </div>
                        ";
            // line 267
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "vars", [], "any", false, false, false, 267), "allow_delete", [], "any", false, false, false, 267)) {
                // line 268
                echo "                            <div class=\"col-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "vars", [], "any", false, false, false, 268), "button_col", [], "any", false, false, false, 268), "html", null, true);
                echo "\">
                                <a href=\"#\" class=\"";
                // line 269
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 269), "delete_button_class", [], "any", true, true, false, 269)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 269), "delete_button_class", [], "any", false, false, false, 269), "btn btn-default")) : ("btn btn-default")), "html", null, true);
                echo "\"
                                   data-removefield=\"collection\"
                                   data-field=\"";
                // line 271
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 271), "id", [], "any", false, false, false, 271), "html", null, true);
                echo "\">";
                echo (isset($context["delete_button_text"]) || array_key_exists("delete_button_text", $context) ? $context["delete_button_text"] : (function () { throw new RuntimeError('Variable "delete_button_text" does not exist.', 271, $this->source); })());
                echo "</a>
                            </div>
                        ";
            }
            // line 274
            echo "                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "        </ul>
        ";
        // line 278
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "vars", [], "any", false, false, false, 278), "allow_add", [], "any", false, false, false, 278)) {
            // line 279
            echo "            <a href=\"#\" class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 279), "add_button_class", [], "any", true, true, false, 279)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 279), "add_button_class", [], "any", false, false, false, 279), "btn btn-primary")) : ("btn btn-primary")), "html", null, true);
            echo "\" data-addfield=\"collection\" data-collection=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 279, $this->source); })()), "vars", [], "any", false, false, false, 279), "id", [], "any", false, false, false, 279), "html", null, true);
            echo "\"
               data-prototype-name=\"";
            // line 280
            echo twig_escape_filter($this->env, (isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new RuntimeError('Variable "prototype_name" does not exist.', 280, $this->source); })()), "html", null, true);
            echo "\">";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "vars", [], "any", false, false, false, 280), "add_button_icon", [], "any", false, false, false, 280)) {
                echo "<i class=\"material-symbols-sharp\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "vars", [], "any", false, false, false, 280), "add_button_icon", [], "any", false, false, false, 280), "html", null, true);
                echo "</i>&nbsp;";
            }
            // line 281
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["add_button_text"]) || array_key_exists("add_button_text", $context) ? $context["add_button_text"] : (function () { throw new RuntimeError('Variable "add_button_text" does not exist.', 281, $this->source); })())), "html", null, true);
            echo "</a>
        ";
        }
        // line 283
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 287
    public function block_accordion_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_collection_row"));

        // line 288
        $context["formContainer"] = (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })());
        // line 289
        echo "
    <div class=\"collection c-accordion mb-3\"";
        // line 290
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 290, $this->source); })()), "rendered", [], "any", false, false, false, 290))) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 290, $this->source); })()), 'row'));
            echo "\"";
        }
        // line 291
        echo "         id=\"accordion_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "vars", [], "any", false, false, false, 291), "id", [], "any", false, false, false, 291), "html", null, true);
        echo "\" data-index-next=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })())), "html", null, true);
        echo "\">";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()));
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
        foreach ($context['_seq'] as $context["fieldIndex"] => $context["field"]) {
            // line 293
            $context["form"] = $context["field"];
            // line 294
            $this->displayBlock("accordion_collection_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['fieldIndex'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        $context["form"] = (isset($context["formContainer"]) || array_key_exists("formContainer", $context) ? $context["formContainer"] : (function () { throw new RuntimeError('Variable "formContainer" does not exist.', 297, $this->source); })());
        // line 300
        if ((true == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "vars", [], "any", false, false, false, 300), "allow_add", [], "any", false, false, false, 300))) {
            // line 301
            echo "            <div class=\"collection-item c-accordion-item\">
                <div class=\"c-accordion-header\">
                    <a href=\"javascript:void(0)\" class=\"has-icon\" type=\"button\" data-module-loading=\"false\" data-action=\"add\" data-module=\"form/Collection\">
                        <i class=\"material-symbols-sharp new-size mr-2\">add</i>";
            // line 304
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "vars", [], "any", false, false, false, 304), "add_button_text", [], "any", false, false, false, 304)), "html", null, true);
            // line 305
            echo "</a>
                </div>";
            // line 309
            echo "<template>
                    <div class=\"collection-item c-accordion-item\">
                        <div class=\"c-accordion-header\">
                            <a href=\"javascript:void(0)\" class=\"collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse_";
            // line 312
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "vars", [], "any", false, false, false, 312), "id", [], "any", false, false, false, 312), "html", null, true);
            echo "___name__\" aria-expanded=\"false\"
                               aria-controls=\"collapse_";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "vars", [], "any", false, false, false, 313), "id", [], "any", false, false, false, 313), "html", null, true);
            echo "___name__\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "vars", [], "any", false, false, false, 313), "label", [], "any", false, false, false, 313)), "html", null, true);
            echo "</a>";
            // line 315
            if ((true == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 315, $this->source); })()), "vars", [], "any", false, false, false, 315), "allow_delete", [], "any", false, false, false, 315))) {
                // line 316
                echo "                                <a href=\"javascript:void(0)\" data-action=\"remove\" data-module=\"form/Collection\" data-module-loading=\"false\">
                                    <i class=\"material-symbols-sharp new-size text-danger\">delete</i></a>";
            }
            // line 319
            echo "                        </div>
                        <div id=\"collapse_";
            // line 320
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "vars", [], "any", false, false, false, 320), "id", [], "any", false, false, false, 320), "html", null, true);
            echo "___name__\" class=\"accordion-collapse collapse\" data-parent=\"#accordion_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "vars", [], "any", false, false, false, 320), "id", [], "any", false, false, false, 320), "html", null, true);
            echo "\">
                            <div class=\"c-accordion-body\">__prototype__</div>
                        </div>
                    </div>
                </template>
            </div>";
        }
        // line 327
        echo "    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 330
    public function block_accordion_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_collection_widget"));

        // line 331
        echo "    <div class=\"collection-item c-accordion-item\">
        <div class=\"c-accordion-header\">
            <a href=\"javascript:void(0)\" class=\"collapsed";
        // line 333
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "vars", [], "any", false, false, false, 333), "valid", [], "any", false, false, false, 333)) {
            echo " text-danger";
        }
        echo "\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "vars", [], "any", false, false, false, 333), "id", [], "any", false, false, false, 333), "html", null, true);
        echo "\"
               aria-expanded=\"false\" aria-controls=\"collapse_";
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "vars", [], "any", false, false, false, 334), "id", [], "any", false, false, false, 334), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "vars", [], "any", false, false, false, 334), "label", [], "any", false, false, false, 334)), "html", null, true);
        echo "</a>";
        // line 336
        if ((true == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 336, $this->source); })()), "parent", [], "any", false, false, false, 336), "vars", [], "any", false, false, false, 336), "allow_delete", [], "any", false, false, false, 336))) {
            // line 337
            echo "                <a href=\"javascript:void(0)\" data-action=\"remove\" data-module=\"form/Collection\" data-module-loading=\"false\"><i class=\"material-symbols-sharp new-size text-danger\">delete</i></a>";
        }
        // line 339
        echo "        </div>
        <div id=\"collapse_";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 340, $this->source); })()), "vars", [], "any", false, false, false, 340), "id", [], "any", false, false, false, 340), "html", null, true);
        echo "\" class=\"accordion-collapse collapse\" data-parent=\"#accordion_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 340, $this->source); })()), "parent", [], "any", false, false, false, 340), "vars", [], "any", false, false, false, 340), "id", [], "any", false, false, false, 340), "html", null, true);
        echo "\">
            <div class=\"c-accordion-body\">";
        // line 341
        $this->displayBlock("form_widget", $context, $blocks);
        echo "</div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@App/_components/form/default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1096 => 341,  1090 => 340,  1087 => 339,  1084 => 337,  1082 => 336,  1077 => 334,  1069 => 333,  1065 => 331,  1055 => 330,  1045 => 327,  1034 => 320,  1031 => 319,  1027 => 316,  1025 => 315,  1020 => 313,  1016 => 312,  1011 => 309,  1008 => 305,  1006 => 304,  1001 => 301,  999 => 300,  997 => 297,  983 => 294,  981 => 293,  964 => 292,  958 => 291,  952 => 290,  949 => 289,  947 => 288,  937 => 287,  926 => 283,  921 => 281,  913 => 280,  906 => 279,  904 => 278,  901 => 277,  893 => 274,  885 => 271,  880 => 269,  875 => 268,  873 => 267,  868 => 265,  864 => 264,  860 => 263,  856 => 261,  852 => 260,  846 => 258,  843 => 257,  840 => 256,  838 => 255,  835 => 254,  832 => 253,  829 => 252,  826 => 251,  823 => 250,  820 => 249,  817 => 248,  814 => 247,  811 => 246,  808 => 245,  805 => 244,  802 => 243,  799 => 242,  796 => 241,  793 => 240,  790 => 239,  787 => 238,  777 => 237,  764 => 234,  761 => 233,  758 => 232,  755 => 231,  745 => 230,  734 => 224,  732 => 223,  728 => 220,  726 => 219,  724 => 217,  722 => 216,  720 => 214,  704 => 213,  700 => 209,  697 => 206,  696 => 205,  695 => 204,  693 => 203,  691 => 202,  688 => 200,  686 => 199,  683 => 196,  681 => 195,  679 => 194,  677 => 193,  674 => 189,  672 => 188,  669 => 186,  667 => 185,  664 => 183,  661 => 181,  659 => 180,  656 => 179,  654 => 178,  651 => 177,  648 => 176,  645 => 175,  642 => 174,  639 => 173,  637 => 172,  635 => 171,  625 => 169,  606 => 158,  594 => 164,  592 => 163,  588 => 162,  586 => 161,  581 => 159,  579 => 158,  575 => 155,  573 => 154,  571 => 153,  555 => 152,  552 => 149,  550 => 148,  548 => 147,  546 => 146,  542 => 142,  539 => 139,  538 => 138,  537 => 137,  535 => 136,  533 => 135,  530 => 133,  528 => 132,  525 => 130,  522 => 128,  520 => 127,  518 => 126,  516 => 125,  506 => 124,  492 => 117,  489 => 116,  486 => 115,  483 => 114,  480 => 113,  477 => 112,  467 => 111,  450 => 107,  447 => 104,  444 => 102,  442 => 101,  440 => 100,  436 => 96,  434 => 95,  432 => 93,  431 => 92,  430 => 91,  428 => 90,  426 => 89,  424 => 87,  414 => 86,  404 => 82,  394 => 81,  384 => 78,  374 => 77,  361 => 74,  351 => 73,  338 => 70,  336 => 69,  334 => 68,  332 => 67,  323 => 66,  320 => 64,  318 => 63,  308 => 62,  296 => 58,  293 => 57,  291 => 56,  288 => 55,  286 => 54,  283 => 53,  280 => 52,  277 => 51,  274 => 50,  271 => 49,  268 => 48,  258 => 47,  245 => 43,  233 => 38,  227 => 37,  221 => 36,  215 => 35,  209 => 34,  203 => 33,  196 => 28,  191 => 26,  188 => 23,  185 => 21,  183 => 20,  180 => 17,  177 => 15,  175 => 14,  170 => 12,  168 => 11,  166 => 10,  164 => 9,  162 => 8,  157 => 5,  154 => 4,  144 => 3,  134 => 330,  132 => 287,  130 => 237,  127 => 236,  125 => 230,  121 => 227,  119 => 169,  116 => 168,  114 => 124,  111 => 120,  109 => 111,  105 => 109,  103 => 86,  100 => 84,  98 => 81,  95 => 80,  93 => 77,  90 => 76,  88 => 73,  85 => 72,  83 => 62,  80 => 60,  78 => 47,  75 => 46,  73 => 3,  70 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% use \"bootstrap_4_layout.html.twig\" %}

{% block date_range_row %}
    <div class=\"form--date-range\">
        {{ block('form_label') }}

        <div class=\"selector\" data-module=\"features/FormDateRange\">
            {%- set dateStart = form.start.vars.value %}
            {%- set dateEnd = form.end.vars.value %}
            <div class=\"label\">
                {%- if dateStart|date('mY') == dateEnd|date('mY') %}
                    {{- dateStart|date('m') }}/{{ dateStart|date('y') }}
                {%- else %}
                    {%- if dateEnd|date('dmY') == 'now'|date('dmY') %}
                        {%- set labelDateEnd = 'time.today'|trans %}
                    {%- else %}
                        {%- set labelDateEnd =  dateEnd|date('m') ~ '/' ~ dateEnd|date('y') %}
                    {%- endif %}

                    {%- if '01' == dateStart|date('d') %}
                        {%- set labelDateStart = dateStart|date('m') ~ '/' ~  dateStart|date('y') %}
                    {%- else %}
                        {%- set labelDateStart = dateStart|format_date('short') %}
                    {%- endif %}

                    {{- labelDateStart }}&nbsp;-&nbsp;{{ labelDateEnd }}
                {%- endif %}
            </div>
            <div class=\"dropdown\">
                <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"material-symbols-sharp\">expand_more</i></a>

                <div class=\"dropdown-menu dropdown-menu-right\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-item\" data-start=\"{{ 'last month'|date('Y-m-01') }}\" data-end=\"{{ 'last month'|date('Y-m-t') }}\"
                       data-label=\"{{ 'last month'|date('m/y') }}\">{{ 'time.last_month'|trans }}</a>
                    <a href=\"javascript:void(0)\" class=\"dropdown-item\" data-start=\"{{ 'now'|date('Y-m-01') }}\" data-end=\"{{ 'now'|date('Y-m-d') }}\"
                       data-label=\"{{ 'now'|date('m/y') }}\">{{ 'this_month'|trans }}</a>
                    <a href=\"javascript:void(0)\" class=\"dropdown-item\" data-start=\"{{ '-30 days'|date('Y-m-d') }}\" data-end=\"{{ 'now'|date('Y-m-d') }}\"
                       data-label=\"{{ '-30 days'|format_date('short') }} - {{ 'time.today'|trans }}\">{{ 'last_thirty_days'|trans }}</a>
                </div>
            </div>
        </div>

        <div class=\"d-none\">{{- block('form_widget') }}</div>
    </div>
{% endblock %}

{% block form_start %}
    {% if attr.class is defined %}
        {% set class = attr.class %}
    {% else %}
        {% set class = '' %}
    {% endif %}

    {% set class = (class ~ ' m-form')|trim %}

    {% set attr = attr|merge({'class':class}) %}

    {{ parent() }}
{% endblock form_start %}

{# Rows #}
{% block form_row %}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group m-form__group {% if form.vars.id is defined %}form-group--{{ form.vars.id }}{% endif %}\">
    {{- form_label(form) -}}
    {{- form_widget(form) -}}
    {{- block('form_help') -}}
    </{{ element|default('div') }}>
{% endblock form_row %}

{% block checkbox_row %}
    {{ block('form_row') }}
{% endblock %}

{% block base64_upload_row %}
    {{- form_widget(form) -}}
{% endblock base64_upload_row %}

{% block chunked_upload_row %}
    {{- form_widget(form) -}}
{% endblock chunked_upload_row %}

{# Widgets #}
{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-primary') ~ ' btn')|trim}) -%}

    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- elseif label is not same as(false) -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}

    {%- if attr.icon is defined -%}
        {%- set icon = '<i class=\"material-symbols-sharp\">' ~ attr.icon ~ '</i> ' -%}
        {%- set attr = attr|merge({icon: false}) -%}
    {%- else -%}
        {%- set icon = '' -%}
    {%- endif -%}

    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ icon|raw }}{{ translation_domain is same as(false) or label is same as(false) ? label : label|trans(label_translation_parameters, translation_domain) }}</button>
{%- endblock button_widget %}


{% block form_help %}
    {% if attr.help_text is defined and attr.help_text is not empty %}
        {% set help_text = attr.help_text %}
    {% endif %}
    {% set help_text = help_text|default('') %}
    {% if help_text is not empty %}
        <span class=\"m-form__help\">{{ help_text|trans({}, translation_domain) }}</span>
    {% endif %}
{% endblock form_help %}

{#
Labels
#}
{% block form_label -%}
    {% if label is not same as(false) -%}
        {%- if compound is defined and compound -%}
            {%- set element = 'legend' -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- else -%}
            {%- set label_attr = label_attr|merge({for: id}) -%}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        {#- Help dialog #}
        {%- if label_attr.help_text is defined -%}
            {%- set help_text = label_attr.help_text -%}
            {%- set help_text_domain = label_attr.help_text_domain|default('messages') -%}
            {%- set label_attr = label_attr|merge({help_text:false}) -%}
        {%- endif -%}

        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
        {%- if help_text is defined -%}
            &nbsp;{% include \"@App/_components/icons/tooltip_help.html.twig\" with {'help_text':help_text|trans({}, help_text_domain)} %}
        {%- endif -%}

        {% block form_label_errors %}{{- form_errors(form) -}}{% endblock form_label_errors %}
        </{{ element|default('label') }}>
    {%- else -%}
        {%- if errors|length > 0 -%}
            <div id=\"{{ id }}_errors\" class=\"mb-2\">
                {{- form_errors(form) -}}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {% if (form.parent.vars.expanded is defined and form.parent.vars.expanded and not form.parent.vars.multiple) or (form.vars.original_type is defined and 'radio' == form.vars.original_type) %}
            {% set metronic_class = 'm-radio' %}
        {% else %}
            {% set metronic_class = 'm-checkbox' %}
        {% endif %}

        {% set is_parent_custom = parent_label_class is defined and ('checkbox-custom' in parent_label_class or 'radio-custom' in parent_label_class) %}
        {% set is_custom = label_attr.class is defined and ('checkbox-custom' in label_attr.class or 'radio-custom' in label_attr.class) %}
        {%- if is_parent_custom or is_custom -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' custom-control-label')|trim}) -%}
        {%- else %}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~  ' form-check-label ' ~ metronic_class)|trim}) -%}
        {%- endif %}
        {%- if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}

        {#- Tooltip help #}
        {%- if label_attr.help_text is defined -%}
            {%- set help_text = label_attr.help_text -%}
            {%- set help_text_domain = label_attr.help_text_domain|default('messages') -%}
            {%- set label_attr = label_attr|merge({help_text:false}) -%}
        {%- endif -%}

        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|replace({'checkbox-inline': '', 'radio-inline': '', 'checkbox-custom': '', 'radio-custom': ''})|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}

        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}

        {{- label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        <span></span>

        {%- if help_text is defined -%}
            &nbsp;{% include \"@App/_components/icons/tooltip_help.html.twig\" with {'help_text':help_text|trans({}, help_text_domain)} -%}
        {%- endif -%}

        {{- form_errors(form) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}


{# Braincrafted Bootstrap bundle #}
{% block collection_widget %}
    {% if prototype is defined %}
        {% set attr = attr|merge({'data-prototype': form_row(prototype) }) %}
    {% endif %}
    {{ block('form_widget') }}
{% endblock collection_widget %}

{% block bootstrap_collection_widget %}
    {% set delete_button_text = form.vars.delete_button_text|default('delete') %}
    {% set add_button_text = form.vars.add_button_text|default('add') %}
    {% if translation_domain is not same as (false) %}
        {% set delete_button_text = delete_button_text|trans({}, translation_domain) %}
        {% set add_button_text = add_button_text|trans({}, translation_domain) %}
    {% endif %}
    {% if prototype is defined %}
        {% set prototype_vars = {} %}
        {% if style is defined %}
            {% set prototype_vars = prototype_vars|merge({'style': style}) %}
        {% endif %}
        {% set prototype_html = '<div class=\"col-' ~ form.vars.sub_widget_col ~ '\">' ~ form_widget(prototype, prototype_vars) ~ '</div>' %}
        {% if form.vars.allow_delete %}
            {% set prototype_html = prototype_html ~ '<div class=\"col-' ~ form.vars.button_col ~ '\"><a href=\"#\" class=\"' ~ form.vars.delete_button_class|default('btn btn-default') ~ '\" data-removefield=\"collection\" data-field=\"__id__\">' ~ delete_button_text|raw ~ '</a></div>' %}
        {% endif %}
        {% set prototype_html = '<div class=\"row mb-2\">' ~ prototype_html ~ '</div>' %}

        {% set attr = attr|merge({'data-prototype': prototype_html }) %}
        {% set attr = attr|merge({'data-prototype-name': prototype_name }) %}
    {% endif %}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"bc-collection list-unstyled\">
            {% for field in form %}
                <li>
                    <div class=\"row mb-2\">
                        <div class=\"col-{{ form.vars.sub_widget_col }}\">
                            {{ form_widget(field) }}
                            {{ form_errors(field) }}
                        </div>
                        {% if form.vars.allow_delete %}
                            <div class=\"col-{{ form.vars.button_col }}\">
                                <a href=\"#\" class=\"{{ form.vars.delete_button_class|default('btn btn-default') }}\"
                                   data-removefield=\"collection\"
                                   data-field=\"{{ field.vars.id }}\">{{ delete_button_text|raw }}</a>
                            </div>
                        {% endif %}
                    </div>
                </li>
            {% endfor %}
        </ul>
        {% if form.vars.allow_add %}
            <a href=\"#\" class=\"{{ form.vars.add_button_class|default('btn btn-primary') }}\" data-addfield=\"collection\" data-collection=\"{{ form.vars.id }}\"
               data-prototype-name=\"{{ prototype_name }}\">{% if form.vars.add_button_icon %}<i class=\"material-symbols-sharp\">{{ form.vars.add_button_icon }}</i>&nbsp;{% endif %}
                {{- add_button_text|trans }}</a>
        {% endif %}
    </div>
{% endblock bootstrap_collection_widget %}


{%- block accordion_collection_row -%}
    {%- set formContainer = form %}

    <div class=\"collection c-accordion mb-3\"{% if prototype is defined and not prototype.rendered %} data-prototype=\"{{ form_row(prototype)|escape }}\"{% endif %}
         id=\"accordion_{{ form.vars.id }}\" data-index-next=\"{{ form|length }}\">
        {%- for fieldIndex, field in form %}
            {%- set form = field %}
            {{- block('accordion_collection_widget') }}
        {%- endfor %}

        {%- set form = formContainer %}

        {#- Add -#}
        {%- if true == form.vars.allow_add %}
            <div class=\"collection-item c-accordion-item\">
                <div class=\"c-accordion-header\">
                    <a href=\"javascript:void(0)\" class=\"has-icon\" type=\"button\" data-module-loading=\"false\" data-action=\"add\" data-module=\"form/Collection\">
                        <i class=\"material-symbols-sharp new-size mr-2\">add</i>{{ form.vars.add_button_text|trans -}}
                    </a>
                </div>

                {#- Template -#}
                <template>
                    <div class=\"collection-item c-accordion-item\">
                        <div class=\"c-accordion-header\">
                            <a href=\"javascript:void(0)\" class=\"collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse_{{ form.vars.id }}___name__\" aria-expanded=\"false\"
                               aria-controls=\"collapse_{{ form.vars.id }}___name__\">{{ form.vars.label|trans }}</a>

                            {%- if true == form.vars.allow_delete %}
                                <a href=\"javascript:void(0)\" data-action=\"remove\" data-module=\"form/Collection\" data-module-loading=\"false\">
                                    <i class=\"material-symbols-sharp new-size text-danger\">delete</i></a>
                            {%- endif %}
                        </div>
                        <div id=\"collapse_{{ form.vars.id }}___name__\" class=\"accordion-collapse collapse\" data-parent=\"#accordion_{{ form.vars.id }}\">
                            <div class=\"c-accordion-body\">__prototype__</div>
                        </div>
                    </div>
                </template>
            </div>
        {%- endif %}
    </div>
{%- endblock accordion_collection_row -%}

{% block accordion_collection_widget %}
    <div class=\"collection-item c-accordion-item\">
        <div class=\"c-accordion-header\">
            <a href=\"javascript:void(0)\" class=\"collapsed{% if not form.vars.valid %} text-danger{% endif %}\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse_{{ form.vars.id }}\"
               aria-expanded=\"false\" aria-controls=\"collapse_{{ form.vars.id }}\">{{ form.vars.label|trans }}</a>

            {%- if true == form.parent.vars.allow_delete %}
                <a href=\"javascript:void(0)\" data-action=\"remove\" data-module=\"form/Collection\" data-module-loading=\"false\"><i class=\"material-symbols-sharp new-size text-danger\">delete</i></a>
            {%- endif %}
        </div>
        <div id=\"collapse_{{ form.vars.id }}\" class=\"accordion-collapse collapse\" data-parent=\"#accordion_{{ form.parent.vars.id }}\">
            <div class=\"c-accordion-body\">{{ block('form_widget') }}</div>
        </div>
    </div>
{% endblock accordion_collection_widget %}", "@App/_components/form/default.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_components/form/default.html.twig");
    }
}
