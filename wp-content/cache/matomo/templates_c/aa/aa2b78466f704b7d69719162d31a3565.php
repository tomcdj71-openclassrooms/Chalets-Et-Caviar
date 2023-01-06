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

/* @CustomDimensions/manage.twig */
class __TwigTemplate_fb0fe65ab439638252eec4e6c5d55910 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin.twig", "@CustomDimensions/manage.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"top_bar_sites_selector piwikTopControl\">
        <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
    </div>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div piwik-custom-dimensions-manage></div>
";
    }

    public function getTemplateName()
    {
        return "@CustomDimensions/manage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% block topcontrols %}
    <div class=\"top_bar_sites_selector piwikTopControl\">
        <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
    </div>
{% endblock %}

{% block content %}
    <div piwik-custom-dimensions-manage></div>
{% endblock %}", "@CustomDimensions/manage.twig", "/var/www/html/chalets-et-caviar.dew-it.dev/wp-content/plugins/matomo/app/plugins/CustomDimensions/templates/manage.twig");
    }
}
