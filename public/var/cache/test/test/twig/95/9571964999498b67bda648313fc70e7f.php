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

/* @App/user/security_login.html.twig */
class __TwigTemplate_8bb28e2b6bb797c12462d095db50c504 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_content' => [$this, 'block_body_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@App/app_no_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/user/security_login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/user/security_login.html.twig"));

        $this->parent = $this->loadTemplate("@App/app_no_login.html.twig", "@App/user/security_login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_content"));

        // line 4
        if ($this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterGetenvBoolean("OAUTH_ENABLED")) {
            // line 6
            echo "<div class=\"wd--oauth-login\">

            <ul class=\"list-unstyled\">
                ";
            // line 9
            if (("true" == $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("OAUTH_AZURE_ENABLED"))) {
                // line 10
                $context["azure_design"] = $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("OAUTH_AZURE_DESIGN");
                // line 11
                echo "<li class=\"azure ";
                echo twig_escape_filter($this->env, (isset($context["azure_design"]) || array_key_exists("azure_design", $context) ? $context["azure_design"] : (function () { throw new RuntimeError('Variable "azure_design" does not exist.', 11, $this->source); })()), "html", null, true);
                echo " mt-2\">
                        <a class=\"d-flex flex-row justify-content-between align-items-center\"
                           href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("hwi_oauth_service_redirect", ["service" => "azure"]), "html", null, true);
                echo "\">
                            <span>";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sign_in_with_" . (isset($context["azure_design"]) || array_key_exists("azure_design", $context) ? $context["azure_design"] : (function () { throw new RuntimeError('Variable "azure_design" does not exist.', 14, $this->source); })()))), "html", null, true);
                echo "</span>

                            <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterFileVersion($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("/bundles/app/images/icon_" . (isset($context["azure_design"]) || array_key_exists("azure_design", $context) ? $context["azure_design"] : (function () { throw new RuntimeError('Variable "azure_design" does not exist.', 16, $this->source); })())) . ".svg"))), "html", null, true);
                echo "\" height=\"16\" alt=\"\"/>
                        </a>
                    </li>
                ";
            }
            // line 21
            if (("true" == $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("OAUTH_OKTA_ENABLED"))) {
                // line 22
                $context["text"] = $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("OAUTH_OKTA_BUTTON_TEXT");
                // line 23
                echo "<li class=\"okta mt-2\">
                        <a class=\"d-flex flex-row justify-content-between align-items-center\"
                           href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("hwi_oauth_service_redirect", ["service" => "okta"]), "html", null, true);
                echo "\">
                            <span>";
                // line 26
                if ((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 26, $this->source); })())) {
                    echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 26, $this->source); })()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sign_in_with_okta"), "html", null, true);
                }
                echo "</span>

                            <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterFileVersion($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/app/images/logo_okta.svg")), "html", null, true);
                echo "\" height=\"16\" alt=\"okta\"/>
                        </a>
                    </li>";
            }
            // line 32
            echo "</ul>

        </div>

        <div class=\"m-divider mb-3\">
            <span></span>
            <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or"), "html", null, true);
            echo "</span>
            <span></span>
        </div>";
        }
        // line 43
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "<br/>
        <div class=\"m-alert m-alert--icon alert alert-danger\" role=\"alert\">
            <div class=\"m-alert__icon\">
                <i class=\"material-symbols-sharp\">warning</i>
            </div>
            <div class=\"m-alert__text\">";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 49, $this->source); })()), "messageKey", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 49, $this->source); })()), "messageData", [], "any", false, false, false, 49), "security"), "html", null, true);
            echo "</div>
        </div>";
        }
        // line 53
        echo "<form class=\"m-login__form m-form\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"form-group m-form__group\">";
        // line 55
        $context["text_user"] = $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("AUTH_USERNAME_PLACEHOLDER");
        // line 56
        echo "<input class=\"form-control m-input\" type=\"text\" id=\"username\" name=\"_username\" autocomplete=\"off\" placeholder=\"";
        if ((isset($context["text_user"]) || array_key_exists("text_user", $context) ? $context["text_user"] : (function () { throw new RuntimeError('Variable "text_user" does not exist.', 56, $this->source); })())) {
            echo twig_escape_filter($this->env, (isset($context["text_user"]) || array_key_exists("text_user", $context) ? $context["text_user"] : (function () { throw new RuntimeError('Variable "text_user" does not exist.', 56, $this->source); })()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email"), "html", null, true);
        }
        echo "\"
                   value=\"";
        // line 57
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 57, $this->source); })()), $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("AUTH_USERNAME_DEFAULT"))) : ($this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("AUTH_USERNAME_DEFAULT"))), "html", null, true);
        echo "\" required=\"required\"/>
        </div>";
        // line 60
        $context["text_password"] = $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("AUTH_PASSWORD_PLACEHOLDER");
        // line 61
        echo "<div class=\"form-group m-form__group\">
            <input class=\"form-control m-input m-login__form-input--last\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"
                   placeholder=\"";
        // line 63
        if ((isset($context["text_password"]) || array_key_exists("text_password", $context) ? $context["text_password"] : (function () { throw new RuntimeError('Variable "text_password" does not exist.', 63, $this->source); })())) {
            echo twig_escape_filter($this->env, (isset($context["text_password"]) || array_key_exists("text_password", $context) ? $context["text_password"] : (function () { throw new RuntimeError('Variable "text_password" does not exist.', 63, $this->source); })()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("password"), "html", null, true);
        }
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("AUTH_PASSWORD_DEFAULT"), "html", null, true);
        echo "\"
            />
        </div>

        <div class=\"mt-2 mt-md-4 d-flex flex-column flex-md-row-reverse\">
            <div class=\"m--align-right flex-md-grow-1 d-md-flex flex-md-column justify-content-md-end\">
                <div>
                    <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithSpace("app_user_password_reset_request"), "html", null, true);
        echo "\" class=\"m-link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forgot_password"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"mt-4 mt-md-auto\">
                <button class=\"btn btn-sm btn-brand btn-block m-btn m-btn--custom m-btn--air m-login__btn m-login__btn--primary\" type=\"submit\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login"), "html", null, true);
        echo "</button>
            </div>
        </div>

        ";
        // line 78
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 78, $this->source); })())) {
            // line 79
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 79, $this->source); })()), "html", null, true);
            echo "\"/>
        ";
        }
        // line 81
        echo "    </form>";
        // line 84
        echo "    ";
        // line 85
        if ($this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_DESIGN_LOGIN_BROWSER_HINT_ENABLED"))) {
            // line 86
            $context["text"] = $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(((twig_constant("AppBundle\\Entity\\Config::TYPE_DESIGN_LOGIN_BROWSER_HINT_TEXT") . "--") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "request", [], "any", false, false, false, 86), "locale", [], "any", false, false, false, 86)));
            // line 87
            if (twig_test_empty((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 87, $this->source); })()))) {
                $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("browser_hint_default_text");
            }
            // line 89
            echo "<div class=\"browser-hint\">
            <i class=\"material-symbols-sharp\">info</i>

            <div class=\"text-container\">";
            // line 93
            echo $this->extensions['AppBundle\Services\Twig\VendorTwigExtension']->getParsedownHtmlByMarkdown((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 93, $this->source); })()));
            echo "
            </div>
        </div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@App/user/security_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 93,  234 => 89,  230 => 87,  228 => 86,  226 => 85,  224 => 84,  222 => 81,  216 => 79,  214 => 78,  207 => 74,  198 => 70,  182 => 63,  178 => 61,  176 => 60,  172 => 57,  163 => 56,  161 => 55,  156 => 53,  151 => 49,  144 => 44,  142 => 43,  136 => 38,  128 => 32,  122 => 28,  113 => 26,  109 => 25,  105 => 23,  103 => 22,  101 => 21,  94 => 16,  89 => 14,  85 => 13,  79 => 11,  77 => 10,  75 => 9,  70 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@App/app_no_login.html.twig\" %}

{% block body_content %}
    {%- if 'OAUTH_ENABLED'|getenv_boolean -%}

        <div class=\"wd--oauth-login\">

            <ul class=\"list-unstyled\">
                {% if 'true' == 'OAUTH_AZURE_ENABLED'|_env %}
                    {%- set azure_design = 'OAUTH_AZURE_DESIGN'|_env -%}
                    <li class=\"azure {{ azure_design }} mt-2\">
                        <a class=\"d-flex flex-row justify-content-between align-items-center\"
                           href=\"{{ path('hwi_oauth_service_redirect', {'service':'azure'}) }}\">
                            <span>{{ ('sign_in_with_' ~ azure_design)|trans }}</span>

                            <img src=\"{{ asset('/bundles/app/images/icon_' ~ azure_design ~ '.svg')|file_version }}\" height=\"16\" alt=\"\"/>
                        </a>
                    </li>
                {% endif %}

                {%- if 'true' == 'OAUTH_OKTA_ENABLED'|_env -%}
                    {%- set text='OAUTH_OKTA_BUTTON_TEXT'|_env -%}
                    <li class=\"okta mt-2\">
                        <a class=\"d-flex flex-row justify-content-between align-items-center\"
                           href=\"{{ path('hwi_oauth_service_redirect', {'service':'okta'}) }}\">
                            <span>{% if text %}{{ text }}{% else %}{{ 'sign_in_with_okta'|trans }}{% endif %}</span>

                            <img src=\"{{ asset('/bundles/app/images/logo_okta.svg')|file_version }}\" height=\"16\" alt=\"okta\"/>
                        </a>
                    </li>
                {%- endif -%}
            </ul>

        </div>

        <div class=\"m-divider mb-3\">
            <span></span>
            <span>{{ 'or'|trans }}</span>
            <span></span>
        </div>
    {%- endif -%}

    {%- if error -%}
        <br/>
        <div class=\"m-alert m-alert--icon alert alert-danger\" role=\"alert\">
            <div class=\"m-alert__icon\">
                <i class=\"material-symbols-sharp\">warning</i>
            </div>
            <div class=\"m-alert__text\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        </div>
    {%- endif -%}

    <form class=\"m-login__form m-form\" action=\"{{ path(\"app_user_security_check\") }}\" method=\"post\">
        <div class=\"form-group m-form__group\">
            {%- set text_user = 'AUTH_USERNAME_PLACEHOLDER'|_env -%}
            <input class=\"form-control m-input\" type=\"text\" id=\"username\" name=\"_username\" autocomplete=\"off\" placeholder=\"{% if text_user %}{{ text_user }}{% else %}{{ 'email'|trans }}{% endif %}\"
                   value=\"{{ last_username|default('AUTH_USERNAME_DEFAULT'|_env) }}\" required=\"required\"/>
        </div>

        {%- set text_password = 'AUTH_PASSWORD_PLACEHOLDER'|_env -%}
        <div class=\"form-group m-form__group\">
            <input class=\"form-control m-input m-login__form-input--last\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"
                   placeholder=\"{% if text_password %}{{ text_password }}{% else %}{{ 'password'|trans }}{% endif %}\" value=\"{{ 'AUTH_PASSWORD_DEFAULT'|_env }}\"
            />
        </div>

        <div class=\"mt-2 mt-md-4 d-flex flex-column flex-md-row-reverse\">
            <div class=\"m--align-right flex-md-grow-1 d-md-flex flex-md-column justify-content-md-end\">
                <div>
                    <a href=\"{{ path('app_user_password_reset_request') }}\" class=\"m-link\">{{ 'forgot_password'|trans }}</a>
                </div>
            </div>
            <div class=\"mt-4 mt-md-auto\">
                <button class=\"btn btn-sm btn-brand btn-block m-btn m-btn--custom m-btn--air m-login__btn m-login__btn--primary\" type=\"submit\">{{ 'login'|trans }}</button>
            </div>
        </div>

        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
        {% endif %}
    </form>

    {#- Browser hint #}
    {# {{ (config ~ '--' ~ code)|app_config_get_value_by_key|u.truncate(80) }} #}
    {%- if constant('AppBundle\\\\Entity\\\\Config::TYPE_DESIGN_LOGIN_BROWSER_HINT_ENABLED')|app_config_get_value_by_key -%}
        {%- set text = (constant('AppBundle\\\\Entity\\\\Config::TYPE_DESIGN_LOGIN_BROWSER_HINT_TEXT') ~ '--' ~ app.request.locale )|app_config_get_value_by_key -%}
        {%- if text is empty %}{% set text = 'browser_hint_default_text'|trans %}{% endif -%}

        <div class=\"browser-hint\">
            <i class=\"material-symbols-sharp\">info</i>

            <div class=\"text-container\">
                {{- text|parsedown_convert_markdown_to_html }}
            </div>
        </div>
    {%- endif -%}
{% endblock %}", "@App/user/security_login.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/user/security_login.html.twig");
    }
}
