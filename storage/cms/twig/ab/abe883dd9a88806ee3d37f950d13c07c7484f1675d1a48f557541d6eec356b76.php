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

/* C:\laragon\www\test2/themes/jumplink-viola/partials/navigation/sidebar-items.htm */
class __TwigTemplate_9f1b41578b51c595fa66144342711a6d3450cad282da0b941e08bce3c4fe2550 extends \Twig\Template
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <a class=\"";
            echo twig_escape_filter($this->env, ($context["itemClass"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 3), "cssClass", [], "any", false, false, false, 3), "html", null, true);
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 3)) ? ("dropdown") : (""));
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 3)) {
                echo "data-toggle=\"dropdown\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 3), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 3), "cssClass", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 4), "html", null, true);
            echo "
            ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 5)) {
                // line 6
                echo "                <span class=\"caret\"></span>
            ";
            }
            // line 8
            echo "        </a>
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 9)) {
                // line 10
                echo "            ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 10)                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 11
                echo "        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\test2/themes/jumplink-viola/partials/navigation/sidebar-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  88 => 12,  85 => 11,  78 => 10,  76 => 9,  73 => 8,  69 => 6,  67 => 5,  63 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ class }}\">
    {% for item in items %}
        <a class=\"{{ itemClass }} {{ item.viewBag.cssClass }} {{ item.items ? 'dropdown' : '' }}\" {% if item.items %}data-toggle=\"dropdown\"{% endif %} href=\"{{ item.url }}#{{ item.viewBag.cssClass }}\">
            {{ item.title }}
            {% if item.items %}
                <span class=\"caret\"></span>
            {% endif %}
        </a>
        {% if item.items %}
            {% partial 'menu-items' items=item.items class='dropdown-menu' %}
        {% endif %}
    {% endfor %}
</div>", "C:\\laragon\\www\\test2/themes/jumplink-viola/partials/navigation/sidebar-items.htm", "");
    }
}
