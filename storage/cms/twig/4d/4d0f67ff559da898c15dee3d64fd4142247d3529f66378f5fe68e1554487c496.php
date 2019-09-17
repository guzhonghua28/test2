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

/* C:\laragon\www\test2/themes/jumplink-viola/partials/navigation/navbar-items.htm */
class __TwigTemplate_1ba3b8f638c420df3045e2c68fda1e5b731e90f35ee586dbc3f05a2d1bb56ab9 extends \Twig\Template
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
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, ($context["itemClass"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 3), "cssClass", [], "any", false, false, false, 3), "html", null, true);
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 3)) ? ("dropdown") : (""));
            echo "\">
            <a class=\"nav-link\" ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 4)) {
                echo "data-toggle=\"dropdown\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 4), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 4), "cssClass", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
                ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 5), "html", null, true);
            echo "
                ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 6)) {
                // line 7
                echo "                    <span class=\"caret\"></span>
                ";
            }
            // line 9
            echo "            </a>
            ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 10)) {
                // line 11
                echo "                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 11)                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 12
                echo "            ";
            }
            // line 13
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\test2/themes/jumplink-viola/partials/navigation/navbar-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 15,  90 => 13,  87 => 12,  80 => 11,  78 => 10,  75 => 9,  71 => 7,  69 => 6,  65 => 5,  55 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"{{ class }}\">
    {% for item in items %}
        <li class=\"{{ itemClass }} {{ item.viewBag.cssClass }} {{ item.items ? 'dropdown' : '' }}\">
            <a class=\"nav-link\" {% if item.items %}data-toggle=\"dropdown\"{% endif %} href=\"{{ item.url }}#{{ item.viewBag.cssClass }}\">
                {{ item.title }}
                {% if item.items %}
                    <span class=\"caret\"></span>
                {% endif %}
            </a>
            {% if item.items %}
                {% partial 'menu-items' items=item.items class='dropdown-menu' %}
            {% endif %}
        </li>
    {% endfor %}
</ul>", "C:\\laragon\\www\\test2/themes/jumplink-viola/partials/navigation/navbar-items.htm", "");
    }
}
