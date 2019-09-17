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

/* C:\laragon\www\test2/themes/jumplink-viola/partials/navigation.htm */
class __TwigTemplate_9e73b9de5dc71a423de3775fcf9a51c24a07783b7f62f2e1b5873c53965cc9ad extends \Twig\Template
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
        // line 1
        echo "<!-- Nav -->
<nav class=\"navbar fixed-top navbar-toggleable-xs navbar-light bg-white-transparent fg-primary navbar-big\" id=\"main-navbar\">
    <button class=\"navbar-toggler navbar-toggler-right hidden-md-up\" type=\"button\">
        &#9776;
    </button>
    <div class=\"container\">
        <a href=\"/\" class=\"navbar-brand\">&nbsp;</a>
        <div class=\"w-100\">
            ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "menuItems", [], "any", false, false, false, 9)        ;
        $context['__cms_partial_params']['class'] = "hidden-xs-down navbar-nav d-flex justify-content-end"        ;
        $context['__cms_partial_params']['itemClass'] = "nav-item"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/navbar-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        </div>
    </div>
</nav>

<!-- http://dcdeiv.github.io/simpler-sidebar/ -->
<div id=\"sidebar\">
    <div id=\"sidebar-wrapper\" class=\"sidebar-wrapper bg-white fg-primary\">
        ";
        // line 17
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "menuItems", [], "any", false, false, false, 17)        ;
        $context['__cms_partial_params']['class'] = "list-group"        ;
        $context['__cms_partial_params']['itemClass'] = "list-group-item"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/sidebar-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "    </div>
</div>

";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 22
        echo "    <script type=\"text/javascript\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/partials/navigation.js");
        echo "\"></script>
";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\test2/themes/jumplink-viola/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  77 => 22,  75 => 21,  70 => 18,  63 => 17,  54 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<nav class=\"navbar fixed-top navbar-toggleable-xs navbar-light bg-white-transparent fg-primary navbar-big\" id=\"main-navbar\">
    <button class=\"navbar-toggler navbar-toggler-right hidden-md-up\" type=\"button\">
        &#9776;
    </button>
    <div class=\"container\">
        <a href=\"/\" class=\"navbar-brand\">&nbsp;</a>
        <div class=\"w-100\">
            {% partial 'navigation/navbar-items' items=main.menuItems class='hidden-xs-down navbar-nav d-flex justify-content-end' itemClass='nav-item' %}
        </div>
    </div>
</nav>

<!-- http://dcdeiv.github.io/simpler-sidebar/ -->
<div id=\"sidebar\">
    <div id=\"sidebar-wrapper\" class=\"sidebar-wrapper bg-white fg-primary\">
        {% partial 'navigation/sidebar-items' items=main.menuItems class='list-group' itemClass='list-group-item' %}
    </div>
</div>

{% put scripts %}
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/partials/navigation.js' |theme }}\"></script>
{% endput %}", "C:\\laragon\\www\\test2/themes/jumplink-viola/partials/navigation.htm", "");
    }
}
