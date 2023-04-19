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

/* @App/element/smart_block/comments.html.twig */
class __TwigTemplate_5c92f7fd437fcacf4e895f5232a5cf4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/comments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/smart_block/comments.html.twig"));

        // line 1
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (true == $this->extensions['AppBundle\Twig\Element\AttributeTwigExtension']->getBooleanValue((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 1, $this->source); })()), "Comments")))) {
            // line 2
            echo "    <div class=\"mt-4 pb-3\">
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_element_comment", ["element" => twig_get_attribute($this->env, $this->source, (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 3, $this->source); })()), "randomId", [], "any", false, false, false, 3)]), "html", null, true);
            echo "\" class=\"btn btn-secondary wd--smart-comments is-link\">
            <i class=\"material-symbols-sharp\">keyboard_arrow_up</i> ";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comments"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\ElementTwigExtension']->getCommentsCount((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 4, $this->source); })())), "html", null, true);
            echo ")
        </a>

        <div class=\"result\"></div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/smart_block/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('ROLE_USER') and true == element|app_element_attribute_boolean_value('Comments') %}
    <div class=\"mt-4 pb-3\">
        <a href=\"{{ path('app_element_comment',{'element':element.randomId}) }}\" class=\"btn btn-secondary wd--smart-comments is-link\">
            <i class=\"material-symbols-sharp\">keyboard_arrow_up</i> {{ 'comments'|trans }} ({{ element|app_element_comments_count }})
        </a>

        <div class=\"result\"></div>
    </div>
{% endif %}", "@App/element/smart_block/comments.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/smart_block/comments.html.twig");
    }
}
