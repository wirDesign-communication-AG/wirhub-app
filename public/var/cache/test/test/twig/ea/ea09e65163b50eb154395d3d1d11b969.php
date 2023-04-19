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

/* @App/element/create/choice_full_blocks.html.twig */
class __TwigTemplate_77f81f7fcd766a332525f47e7030ed97 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/create/choice_full_blocks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/element/create/choice_full_blocks.html.twig"));

        // line 1
        echo "<ul class=\"tag-choice list-unstyled\">
    <li data-tag=\"\" class=\"active\"><span>27</span>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("all"), "html", null, true);
        echo "</li>
    <li data-tag=\"media\"><span>12</span>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("media"), "html", null, true);
        echo "</li>
    <li data-tag=\"image\"><span>10</span>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("image"), "html", null, true);
        echo "</li>
    <li data-tag=\"text\"><span>16</span>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("text"), "html", null, true);
        echo "</li>
    <li data-tag=\"layout\"><span>7</span>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout"), "html", null, true);
        echo "</li>
    <li data-tag=\"advanced\"><span>13</span>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("advanced"), "html", null, true);
        echo "</li>
</ul>

<div class=\"add-smartblock-container d-flex flex-row flex-wrap\">";
        // line 11
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 11)->display(twig_array_merge($context, ["type" => "headline", "icon" => "title", "quick" => true, "tags" => "text"]));
        // line 13
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 13)->display(twig_array_merge($context, ["type" => "text", "icon" => "subject", "quick" => true, "tags" => "text"]));
        // line 15
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 15)->display(twig_array_merge($context, ["type" => "image", "icon" => "insert_photo", "quick" => true, "tags" => "media,image"]));
        // line 17
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 17)->display(twig_array_merge($context, ["type" => "video", "icon" => "video_library", "quick" => true, "tags" => "media"]));
        // line 19
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 19)->display(twig_array_merge($context, ["type" => "audio", "icon" => "audiotrack", "quick" => true, "tags" => "media"]));
        // line 21
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 21)->display(twig_array_merge($context, ["type" => "lottie", "icon" => "crop_original", "tags" => "media,image"]));
        // line 23
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 23)->display(twig_array_merge($context, ["type" => "attachment", "icon" => "get_app", "quick" => true, "tags" => "media"]));
        // line 25
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 25)->display(twig_array_merge($context, ["type" => "teaser", "icon" => "art_track", "tags" => "media,image,text,layout"]));
        // line 27
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 27)->display(twig_array_merge($context, ["type" => "stage", "icon" => "picture_in_picture_alt", "quick" => true, "tags" => "media,image,text,layout"]));
        // line 29
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 29)->display(twig_array_merge($context, ["type" => "gallery", "icon" => "collections", "quick" => true, "tags" => "media,image,layout"]));
        // line 31
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 31)->display(twig_array_merge($context, ["type" => "slider", "icon" => "view_carousel", "quick" => true, "tags" => "media,image,text,layout"]));
        // line 33
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 33)->display(twig_array_merge($context, ["type" => "annotation", "custom_icon" => "svg_photo_pin", "tags" => "media,image,text,advanced"]));
        // line 35
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 35)->display(twig_array_merge($context, ["type" => "cta", "icon" => "smart_button", "quick" => true, "tags" => "text,advanced"]));
        // line 37
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 37)->display(twig_array_merge($context, ["type" => "do_dont", "icon" => "flaky", "quick" => true, "tags" => "image,text,advanced"]));
        // line 39
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 39)->display(twig_array_merge($context, ["type" => "news", "icon" => "notifications", "quick" => true, "tags" => "media", "enabled" => $this->extensions['AppBundle\Services\Twig\ConfigTwigExtension']->getValueByKey(twig_constant("AppBundle\\Entity\\Config::TYPE_NEWS_ENABLED"))]));
        // line 41
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 41)->display(twig_array_merge($context, ["type" => "note", "icon" => "feedback", "tags" => "text"]));
        // line 43
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 43)->display(twig_array_merge($context, ["type" => "pattern", "icon" => "style", "tags" => "text,advanced"]));
        // line 45
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 45)->display(twig_array_merge($context, ["type" => "code", "icon" => "code", "tags" => "text,advanced"]));
        // line 47
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 47)->display(twig_array_merge($context, ["type" => "icon_list", "icon" => "apps", "tags" => "media,image,advanced"]));
        // line 49
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 49)->display(twig_array_merge($context, ["type" => "colors", "icon" => "palette", "quick" => true, "tags" => "text,advanced"]));
        // line 51
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 51)->display(twig_array_merge($context, ["type" => "chapter_teaser", "icon" => "featured_play_list", "quick" => true, "tags" => "media,image,text"]));
        // line 53
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 53)->display(twig_array_merge($context, ["type" => "contact", "icon" => "email", "tags" => "text,advanced"]));
        // line 55
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 55)->display(twig_array_merge($context, ["type" => "contact_person", "icon" => "person", "tags" => "image,text,advanced"]));
        // line 57
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 57)->display(twig_array_merge($context, ["type" => "divider", "icon" => "remove", "quick" => true, "tags" => "layout"]));
        // line 59
        if ((null == (isset($context["parent_entity"]) || array_key_exists("parent_entity", $context) ? $context["parent_entity"] : (function () { throw new RuntimeError('Variable "parent_entity" does not exist.', 59, $this->source); })()))) {
            // line 60
            $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 60)->display(twig_array_merge($context, ["type" => "accordion", "icon" => "storage", "quick" => true, "tags" => "layout,advanced"]));
        }
        // line 63
        if (((null == (isset($context["parent_entity"]) || array_key_exists("parent_entity", $context) ? $context["parent_entity"] : (function () { throw new RuntimeError('Variable "parent_entity" does not exist.', 63, $this->source); })())) || (true == twig_get_attribute($this->env, $this->source, (isset($context["parent_entity"]) || array_key_exists("parent_entity", $context) ? $context["parent_entity"] : (function () { throw new RuntimeError('Variable "parent_entity" does not exist.', 63, $this->source); })()), "typeInChain", [0 => twig_constant("AppBundle\\Entity\\Element::TYPE_ACCORDION")], "method", false, false, false, 63)))) {
            // line 65
            $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 65)->display(twig_array_merge($context, ["type" => "columns", "icon" => "view_column", "tags" => "layout"]));
        }
        // line 68
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 68)->display(twig_array_merge($context, ["type" => "table", "icon" => "table_chart", "tags" => "text,advanced"]));
        // line 70
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 70)->display(twig_array_merge($context, ["type" => "html", "icon" => "web", "tags" => "text,advanced"]));
        // line 72
        $this->loadTemplate("@App/element/smart_block/_manage/dialog_add_item.html.twig", "@App/element/create/choice_full_blocks.html.twig", 72)->display(twig_array_merge($context, ["type" => "scorm", "icon" => "school", "tags" => "advanced", "quick" => true]));
        // line 73
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/element/create/choice_full_blocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 73,  134 => 72,  132 => 70,  130 => 68,  127 => 65,  125 => 63,  122 => 60,  120 => 59,  118 => 57,  116 => 55,  114 => 53,  112 => 51,  110 => 49,  108 => 47,  106 => 45,  104 => 43,  102 => 41,  100 => 39,  98 => 37,  96 => 35,  94 => 33,  92 => 31,  90 => 29,  88 => 27,  86 => 25,  84 => 23,  82 => 21,  80 => 19,  78 => 17,  76 => 15,  74 => 13,  72 => 11,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"tag-choice list-unstyled\">
    <li data-tag=\"\" class=\"active\"><span>27</span>{{ 'all'|trans }}</li>
    <li data-tag=\"media\"><span>12</span>{{ 'media'|trans }}</li>
    <li data-tag=\"image\"><span>10</span>{{ 'image'|trans }}</li>
    <li data-tag=\"text\"><span>16</span>{{ 'text'|trans }}</li>
    <li data-tag=\"layout\"><span>7</span>{{ 'layout'|trans }}</li>
    <li data-tag=\"advanced\"><span>13</span>{{ 'advanced'|trans }}</li>
</ul>

<div class=\"add-smartblock-container d-flex flex-row flex-wrap\">
    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'headline', 'icon':'title', 'quick':true, 'tags': 'text'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'text', 'icon':'subject', 'quick':true, 'tags': 'text'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'image', 'icon':'insert_photo', 'quick':true, 'tags': 'media,image'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'video', 'icon':'video_library', 'quick': true, 'tags': 'media'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'audio', 'icon':'audiotrack', 'quick':true, 'tags': 'media'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'lottie', 'icon':'crop_original', 'tags': 'media,image'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'attachment', 'icon':'get_app', 'quick':true, 'tags': 'media'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'teaser', 'icon':'art_track', 'tags': 'media,image,text,layout'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'stage', 'icon':'picture_in_picture_alt', 'quick':true, 'tags': 'media,image,text,layout'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'gallery', 'icon':'collections', 'quick':true, 'tags': 'media,image,layout'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'slider', 'icon':'view_carousel', 'quick':true, 'tags': 'media,image,text,layout'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'annotation', 'custom_icon':'svg_photo_pin', 'tags': 'media,image,text,advanced'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'cta', 'icon':'smart_button', 'quick':true, 'tags': 'text,advanced'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'do_dont', 'icon':'flaky', 'quick':true, 'tags': 'image,text,advanced'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'news', 'icon':'notifications', 'quick':true, 'tags': 'media', 'enabled': constant('AppBundle\\\\Entity\\\\Config::TYPE_NEWS_ENABLED')|app_config_get_value_by_key } -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'note', 'icon':'feedback', 'tags': 'text'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'pattern', 'icon':'style', 'tags': 'text,advanced'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'code', 'icon':'code', 'tags': 'text,advanced'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'icon_list', 'icon':'apps', 'tags': 'media,image,advanced'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'colors', 'icon':'palette', 'quick':true, 'tags': 'text,advanced'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type': 'chapter_teaser', 'icon':'featured_play_list', 'quick': true, 'tags': 'media,image,text'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'contact', 'icon':'email', 'tags': 'text,advanced'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'contact_person', 'icon':'person', 'tags': 'image,text,advanced'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'divider', 'icon':'remove', 'quick':true, 'tags': 'layout'} -%}

    {%- if null == parent_entity -%}
        {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'accordion', 'icon':'storage', 'quick':true, 'tags': 'layout,advanced'} -%}
    {%- endif -%}

    {%- if null == parent_entity or true == parent_entity.typeInChain(constant('AppBundle\\\\Entity\\\\Element::TYPE_ACCORDION')) %}
        {#- Issue #15: Allow columns in accordions #}
        {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'columns', 'icon':'view_column', 'tags': 'layout'} -%}
    {% endif -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'table', 'icon':'table_chart', 'tags': 'text,advanced'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'html', 'icon':'web', 'tags': 'text,advanced'} -%}

    {%- include \"@App/element/smart_block/_manage/dialog_add_item.html.twig\" with {'type':'scorm', 'icon':'school', 'tags': 'advanced', 'quick': true} -%}
</div>", "@App/element/create/choice_full_blocks.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/element/create/choice_full_blocks.html.twig");
    }
}
