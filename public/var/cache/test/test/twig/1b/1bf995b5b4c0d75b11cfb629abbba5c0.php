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

/* @App/asset/runtime.js.twig */
class __TwigTemplate_ffbb06a4fd611ba5194f54cd91c537e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/asset/runtime.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/asset/runtime.js.twig"));

        // line 1
        echo "const wdStyleGuideTranslation = {
    add: '";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add"), "js", null, true);
        echo "',
    all_categories: '";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("all_categories"), "js", null, true);
        echo "',
    are_you_sure: '";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("are_you_sure"), "js", null, true);
        echo "',
    category: '";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category"), "js", null, true);
        echo "',
    categories: '";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("categories"), "js", null, true);
        echo "',
    cancel: '";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cancel"), "js", null, true);
        echo "',
    changes_saved: '";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("changes_saved"), "js", null, true);
        echo "',
    close: '";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("close"), "js", null, true);
        echo "',
    description: '";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("description"), "js", null, true);
        echo "',
    delete: '";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "js", null, true);
        echo "',
    download: '";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download"), "js", null, true);
        echo "',
    editor: {
        bold: \"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bold"), "js", null, true);
        echo "\",
        code: \"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("code"), "js", null, true);
        echo "\",
        generic_list: \"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("generic_list"), "js", null, true);
        echo "\",
        heading: \"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("heading"), "js", null, true);
        echo "\",
        italic: \"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("italic"), "js", null, true);
        echo "\",
        external_link: \"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("external_link"), "js", null, true);
        echo "\",
        internal_link: \"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("internal_link"), "js", null, true);
        echo "\",
        link: \"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("set_link"), "js", null, true);
        echo "\",
        numbered_list: \"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("numbered_list"), "js", null, true);
        echo "\",
        quote: \"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("quote"), "js", null, true);
        echo "\",
        strikethrough: \"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("strikethrough"), "js", null, true);
        echo "\",
        table: \"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("table"), "js", null, true);
        echo "\"
    },
    error: '";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error"), "js", null, true);
        echo "',
    jump_mark: '";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("jump_mark"), "js", null, true);
        echo "',
    messages: {
        success_default: '";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("flash_bag.success.default"), "js", null, true);
        echo "',
        success_file_deleted: '";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("flash_bag.success.file_deleted"), "js", null, true);
        echo "',
        success_link_copied: '";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("flash_bag.success.link_copied"), "js", null, true);
        echo "',
        warning_image_file_size: '";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("warning_image_file_size"), "js", null, true);
        echo "',
        error_loading_ajax: '";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error_loading_ajax"), "js", null, true);
        echo "',
        error_unsecure_context: '";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error_unsecure_context"), "js", null, true);
        echo "'
    },
    new_window: '";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("new_window"), "js", null, true);
        echo "',
    same_window: '";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("same_window"), "js", null, true);
        echo "',
    save: '";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("save"), "js", null, true);
        echo "',
    space: '";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("space"), "js", null, true);
        echo "',
    target: '";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("target"), "js", null, true);
        echo "',
    unknown_error: '";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unknown_error"), "js", null, true);
        echo "',
    unsaved_changes: '";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsaved_changes"), "js", null, true);
        echo "',
    url: '";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("url"), "js", null, true);
        echo "'
};

const wdDropZone = {
    dictDefaultMessage: \"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dictDefaultMessage"), "js", null, true);
        echo "\",
    dictFallbackMessage: \"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dictFallbackMessage"), "js", null, true);
        echo "\",
    dictFallbackText: \"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dictFallbackText"), "js", null, true);
        echo "\",
    dictFileTooBig: \"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dictFileTooBig"), "js", null, true);
        echo "\",
    dictInvalidFileType: \"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dictInvalidFileType"), "js", null, true);
        echo "\",
    dictResponseError: \"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dictResponseError"), "js", null, true);
        echo "\",
    dictCancelUpload: \"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dictCancelUpload"), "js", null, true);
        echo "\",
    dictCancelUploadConfirmation: \"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dictCancelUploadConfirmation"), "js", null, true);
        echo "\",
    dictRemoveFile: \"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dictRemoveFile"), "js", null, true);
        echo "\",
    dictMaxFilesExceeded: \"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dictMaxFilesExceeded"), "js", null, true);
        echo "\",
    maxFilesize: null,
    timeout: 1800000
};

const wirhubConfig = {
    env: \"";
        // line 63
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("APP_ENV")), "js", null, true);
        echo "\",
    google_analytics_event_prefix: \"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("APP_GOOGLE_ANALYTICS_EVENT_PREFIX"), "js", null, true);
        echo "\",
    version: \"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("VERSION"), "js", null, true);
        echo "\"
}

const wirhubRoutes = {
    ajax_spaces: \"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_ajax_spaces"), "js", null, true);
        echo "\",
    ajax_categories: \"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_ajax_categories"), "js", null, true);
        echo "\",
    ajax_categories_for_space: \"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_ajax_categories_for_space", ["_space" => "__SPACE__"]), "js", null, true);
        echo "\",
    ajax_internal_link: \"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_ajax_internal_link"), "js", null, true);
        echo "\",
    ajax_short_link: '";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_ajax_short_link", ["_space" => "__SPACE__"]), "js", null, true);
        echo "',
    user_bookmark_toggle: '";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_user_bookmark_toggle"), "js", null, true);
        echo "',
    element_edit_description: '";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_edit_description", ["_randomId" => "__ID__"]), "js", null, true);
        echo "',
    element_edit_quick: '";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_element_edit_quick", ["_randomId" => "__ID__"]), "js", null, true);
        echo "',
    feature_metrics_category: '";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\SpaceTwigExtension']->getPathWithoutSpace("app_feature_metrics_category", ["token" => "__TOKEN__"]), "js", null, true);
        echo "'
};

const AppConfig = {
    version: '";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("VERSION"), "js", null, true);
        echo "',
    locale: '";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['AppBundle\Twig\CoreTwigExtension']->getFilterEnv("APP_LOCALE"), "js", null, true);
        echo "',
    templates: {
        dialog_empty: '<div class=\"modal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\"><h5 class=\"modal-title\"></h5><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button></div>' +
            '<div class=\"modal-body\"></div><div class=\"modal-footer\"></div></div></div></div>',
        dialog_buttons_alert: '<button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ok"), "js", null, true);
        echo "</button>',
        dialog_buttons_confirm: '<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cancel"), "js", null, true);
        echo "</button><button type=\"button\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yes"), "js", null, true);
        echo "</button>'
    },
    translations: wdStyleGuideTranslation
};";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/asset/runtime.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 87,  319 => 86,  312 => 82,  308 => 81,  301 => 77,  297 => 76,  293 => 75,  289 => 74,  285 => 73,  281 => 72,  277 => 71,  273 => 70,  269 => 69,  262 => 65,  258 => 64,  254 => 63,  245 => 57,  241 => 56,  237 => 55,  233 => 54,  229 => 53,  225 => 52,  221 => 51,  217 => 50,  213 => 49,  209 => 48,  202 => 44,  198 => 43,  194 => 42,  190 => 41,  186 => 40,  182 => 39,  178 => 38,  174 => 37,  169 => 35,  165 => 34,  161 => 33,  157 => 32,  153 => 31,  149 => 30,  144 => 28,  140 => 27,  135 => 25,  131 => 24,  127 => 23,  123 => 22,  119 => 21,  115 => 20,  111 => 19,  107 => 18,  103 => 17,  99 => 16,  95 => 15,  91 => 14,  86 => 12,  82 => 11,  78 => 10,  74 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("const wdStyleGuideTranslation = {
    add: '{{ 'add'|trans }}',
    all_categories: '{{ 'all_categories'|trans }}',
    are_you_sure: '{{ 'are_you_sure'|trans }}',
    category: '{{ 'category'|trans }}',
    categories: '{{ 'categories'|trans }}',
    cancel: '{{ 'cancel'|trans }}',
    changes_saved: '{{ 'changes_saved'|trans }}',
    close: '{{ 'close'|trans }}',
    description: '{{ 'description'|trans }}',
    delete: '{{ 'delete'|trans }}',
    download: '{{ 'download'|trans }}',
    editor: {
        bold: \"{{ 'bold'|trans }}\",
        code: \"{{ 'code'|trans }}\",
        generic_list: \"{{ 'generic_list'|trans }}\",
        heading: \"{{ 'heading'|trans }}\",
        italic: \"{{ 'italic'|trans }}\",
        external_link: \"{{ 'external_link'|trans }}\",
        internal_link: \"{{ 'internal_link'|trans }}\",
        link: \"{{ 'set_link'|trans }}\",
        numbered_list: \"{{ 'numbered_list'|trans }}\",
        quote: \"{{ 'quote'|trans }}\",
        strikethrough: \"{{ 'strikethrough'|trans }}\",
        table: \"{{ 'table'|trans }}\"
    },
    error: '{{ 'error'|trans }}',
    jump_mark: '{{ 'jump_mark'|trans }}',
    messages: {
        success_default: '{{ 'flash_bag.success.default'|trans }}',
        success_file_deleted: '{{ 'flash_bag.success.file_deleted'|trans }}',
        success_link_copied: '{{ 'flash_bag.success.link_copied'|trans }}',
        warning_image_file_size: '{{ 'warning_image_file_size'|trans }}',
        error_loading_ajax: '{{ 'error_loading_ajax'|trans }}',
        error_unsecure_context: '{{ 'error_unsecure_context'|trans }}'
    },
    new_window: '{{ 'new_window'|trans }}',
    same_window: '{{ 'same_window'|trans }}',
    save: '{{ 'save'|trans }}',
    space: '{{ 'space'|trans }}',
    target: '{{ 'target'|trans }}',
    unknown_error: '{{ 'unknown_error'|trans }}',
    unsaved_changes: '{{ 'unsaved_changes'|trans }}',
    url: '{{ 'url'|trans }}'
};

const wdDropZone = {
    dictDefaultMessage: \"{{ 'dictDefaultMessage'|trans }}\",
    dictFallbackMessage: \"{{ 'dictFallbackMessage'|trans }}\",
    dictFallbackText: \"{{ 'dictFallbackText'|trans }}\",
    dictFileTooBig: \"{{ 'dictFileTooBig'|trans }}\",
    dictInvalidFileType: \"{{ 'dictInvalidFileType'|trans }}\",
    dictResponseError: \"{{ 'dictResponseError'|trans }}\",
    dictCancelUpload: \"{{ 'dictCancelUpload'|trans }}\",
    dictCancelUploadConfirmation: \"{{ 'dictCancelUploadConfirmation'|trans }}\",
    dictRemoveFile: \"{{ 'dictRemoveFile'|trans }}\",
    dictMaxFilesExceeded: \"{{ 'dictMaxFilesExceeded'|trans }}\",
    maxFilesize: null,
    timeout: 1800000
};

const wirhubConfig = {
    env: \"{{ 'APP_ENV'|_env|lower }}\",
    google_analytics_event_prefix: \"{{ 'APP_GOOGLE_ANALYTICS_EVENT_PREFIX'|_env }}\",
    version: \"{{ 'VERSION'|_env }}\"
}

const wirhubRoutes = {
    ajax_spaces: \"{{ path_without_space('app_ajax_spaces') }}\",
    ajax_categories: \"{{ path_without_space('app_ajax_categories') }}\",
    ajax_categories_for_space: \"{{ path_without_space('app_ajax_categories_for_space', {'_space':'__SPACE__'}) }}\",
    ajax_internal_link: \"{{ path_without_space('app_ajax_internal_link') }}\",
    ajax_short_link: '{{ path_without_space('app_ajax_short_link', {'_space':'__SPACE__'}) }}',
    user_bookmark_toggle: '{{ path_without_space('app_user_bookmark_toggle') }}',
    element_edit_description: '{{ path_without_space('app_element_edit_description', {'_randomId': '__ID__'}) }}',
    element_edit_quick: '{{ path_without_space('app_element_edit_quick', {'_randomId':'__ID__'}) }}',
    feature_metrics_category: '{{ path_without_space('app_feature_metrics_category', {'token': '__TOKEN__'}) }}'
};

const AppConfig = {
    version: '{{ 'VERSION'|_env }}',
    locale: '{{ 'APP_LOCALE'|_env }}',
    templates: {
        dialog_empty: '<div class=\"modal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\"><h5 class=\"modal-title\"></h5><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button></div>' +
            '<div class=\"modal-body\"></div><div class=\"modal-footer\"></div></div></div></div>',
        dialog_buttons_alert: '<button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">{{ 'ok'|trans }}</button>',
        dialog_buttons_confirm: '<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ 'cancel'|trans }}</button><button type=\"button\" class=\"btn btn-primary\">{{ 'yes'|trans }}</button>'
    },
    translations: wdStyleGuideTranslation
};", "@App/asset/runtime.js.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/asset/runtime.js.twig");
    }
}
