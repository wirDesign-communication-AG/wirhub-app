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

/* @App/_layout/newsmenu.html.twig */
class __TwigTemplate_bef6b7c1750d62b5b59d16106c2255af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/newsmenu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_layout/newsmenu.html.twig"));

        // line 1
        if ((true == $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_NEWS_ENABLED")))) {
            // line 2
            echo "<div class=\"dropdown\">
        <a class=\"";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 3, $this->source); })()), "html", null, true);
            echo " dropdown-toggle no-caret\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-expanded=\"false\" data-module=\"components/Dropdown\" data-module-loading=\"false\"";
            // line 4
            echo (($this->extensions['AppBundle\Services\Twig\NewsTwigExtension']->getFunctionUserHasUnread()) ? ("data-smart=\"news-modal\" ") : (""));
            echo "data-list=\"";
            echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_feature_news_dropdown"), "html", null, true);
            echo "\">
            <i class=\"material-symbols-sharp";
            // line 5
            echo (($this->extensions['AppBundle\Services\Twig\NewsTwigExtension']->getFunctionUserHasUnread()) ? (" is-new") : (""));
            echo "\">notifications</i>
        </a>

        <div class=\"news dropdown-menu dropdown-menu-right\">
            <p class=\"m-5 text-center\"><span class=\"m-spinner\"></span></p>
        </div>
    </div>

    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_layout/newsmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if true == constant('AppBundle\\\\Entity\\\\Config::TYPE_NEWS_ENABLED')|app_config_get_value_by_key -%}
    <div class=\"dropdown\">
        <a class=\"{{ btn_class }} dropdown-toggle no-caret\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-expanded=\"false\" data-module=\"components/Dropdown\" data-module-loading=\"false\"
           {{- app_news_unread() ? 'data-smart=\"news-modal\" ' }}data-list=\"{{ path('app_feature_news_dropdown') }}\">
            <i class=\"material-symbols-sharp{{ app_news_unread() ? ' is-new' }}\">notifications</i>
        </a>

        <div class=\"news dropdown-menu dropdown-menu-right\">
            <p class=\"m-5 text-center\"><span class=\"m-spinner\"></span></p>
        </div>
    </div>

    {#
    <div id=\"newsmenu\" class=\"{{ first_level_class }}\" m-dropdown-toggle=\"hover\" aria-expanded=\"true\">
        <a class=\"{{ btn_class }} m-dropdown__toggle\" href=\"javascript:void(0)\">
            <i class=\"material-symbols-sharp m--regular-font-size-lg3{{ unreadNews ? ' text-primary' }}\">{{ unreadNews ? 'notifications_active' : 'notifications' }}</i>
        </a>
        <div class=\"m-dropdown__wrapper\" aria-labelledby=\"newsmenu\">
            <span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>
            <div class=\"m-dropdown__inner\">
                <div class=\"m-dropdown__body\">
                    <div class=\"m-dropdown__content\">
                        <ul class=\"m-nav\">
                            {%- for news in app_news_get_top() -%}
                                <li class=\"m-nav__item\">
                                    <a href=\"{% include '@App/feature/news/_news_link.html.twig' %}\"
                                       class=\" m-nav__link \">
                                        {% if settings.newsReadTimestamp < news.published %}
                                            <span class=\"m-badge m-badge--wide m-badge--brand\">{{ 'new'|trans }}</span>
                                        {% endif %}
                                        <span class=\"m-nav__link-title d-block\">{{ news.category.name }}</span>
                                        <span class=\"m-nav__link-text d-block\">{{ news|app_news_title }}</span>
                                    </a>
                                </li>
                                <li class=\"m-nav__separator m-nav__separator--fit\"></li>
                            {% endfor %}
                            <li class=\"m-nav__item\">
                                <a href=\"{{ path_without_space('app_feature_news_index') }}\" class=\"m-nav__link \">
                                    <i class=\"m-nav__link-icon material-symbols-sharp\">chevron_right</i>

                                    <span class=\"m-nav__link-text\">{{ 'news_link_text'|trans }}</span>
                                </a>
                            </li>
                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"m-nav__separator m-nav__separator--fit\"></li>
                                <li class=\"m-nav__item\">
                                    <a href=\"{{ path_without_space('app_settings_feature_news_index') }}\" class=\"m-nav__link \">
                                        <i class=\"m-nav__link-icon material-symbols-sharp\">edit</i>

                                        <span class=\"m-nav__link-text\">{{ 'news_edit'|trans }}</span>
                                    </a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    #}
{%- endif -%}", "@App/_layout/newsmenu.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_layout/newsmenu.html.twig");
    }
}
