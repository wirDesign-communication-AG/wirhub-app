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

/* @App/_components/icons/svg_photo_pin.html.twig */
class __TwigTemplate_c08252b9c80be463028562deb23e1c1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_components/icons/svg_photo_pin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/_components/icons/svg_photo_pin.html.twig"));

        // line 1
        echo "<svg width=\"36\" height=\"36\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><path d=\"M0 0h36v36H0z\"/><path d=\"M15 4.5v3H7.5v21h21.03V19h3v9.5c0 1.65-1.35 3-3 3h-21c-1.65 0-3-1.35-3-3v-21c0-1.65 1.35-3 3-3H15zm9.849-2.107l7.273 7.273-4.243 1.818-1.212 4.849-1.212 1.212-3.352-3.352-4.243 4.243-2.12.303.302-2.121 4.243-4.243L16.97 9.06l1.212-1.212 4.848-1.212 1.819-4.243z\" fill=\"#000\" fill-rule=\"nonzero\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@App/_components/icons/svg_photo_pin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg width=\"36\" height=\"36\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><path d=\"M0 0h36v36H0z\"/><path d=\"M15 4.5v3H7.5v21h21.03V19h3v9.5c0 1.65-1.35 3-3 3h-21c-1.65 0-3-1.35-3-3v-21c0-1.65 1.35-3 3-3H15zm9.849-2.107l7.273 7.273-4.243 1.818-1.212 4.849-1.212 1.212-3.352-3.352-4.243 4.243-2.12.303.302-2.121 4.243-4.243L16.97 9.06l1.212-1.212 4.848-1.212 1.819-4.243z\" fill=\"#000\" fill-rule=\"nonzero\"/></g></svg>", "@App/_components/icons/svg_photo_pin.html.twig", "/var/www/wirhub/app/vendor/wirdesign-communication-ag/wirhub/Resources/views/_components/icons/svg_photo_pin.html.twig");
    }
}
