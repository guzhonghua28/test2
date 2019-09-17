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

/* C:\laragon\www\test2/themes/jumplink-viola/partials/slideshow.htm */
class __TwigTemplate_b16f6900715e677cf08c469d8c338bd4b5d6127f1d148357f7fde211ef714107 extends \Twig\Template
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
        if ((($context["slideshow"] ?? null) && (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["slideshow"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["slides"] ?? null) : null))) {
            // line 2
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-interval='3500'>
        <div class=\"carousel-inner\" role=\"listbox\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["slideshow"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["slides"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["slide"]) {
                // line 5
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 5), "path", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "                    <div class='carousel-item";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 6)) {
                        echo " active";
                    }
                    echo "'>
                        ";
                    // line 7
                    if (twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 7)) {
                        // line 8
                        echo "                            <a class=\"carousel-image-background\" style=\"background-image: url('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 8), "path", [], "any", false, false, false, 8), "html", null, true);
                        echo "');\" alt='";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
                        echo "' href='";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 8), "html", null, true);
                        echo "' target='_blank'></a>
                        ";
                    } else {
                        // line 10
                        echo "                            <div class=\"carousel-image-background\" style=\"background-image: url('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10), "html", null, true);
                        echo "');\" alt='";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
                        echo "'></div>
                        ";
                    }
                    // line 12
                    echo "                        ";
                    if (((twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 12) || twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 12)) || twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 12))) {
                        // line 13
                        echo "                            <div class=\"carousel-caption clearfix white-caption\">
                                ";
                        // line 14
                        if (twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 14)) {
                            echo "<h4 class='carousel-caption-title'>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 14), "html", null, true);
                            echo "</h4>";
                        }
                        // line 15
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 15)) {
                            echo "<p>";
                            echo twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 15);
                            echo "</p>";
                        }
                        // line 16
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 16)) {
                            echo "<a class='carousel-caption-link' href='";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 16), "html", null, true);
                            echo "' target='_blank'>Learn more</a>";
                        }
                        // line 17
                        echo "                            </div>
                         ";
                    }
                    // line 19
                    echo "                    </div>
                ";
                }
                // line 21
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\test2/themes/jumplink-viola/partials/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 22,  126 => 21,  122 => 19,  118 => 17,  111 => 16,  104 => 15,  98 => 14,  95 => 13,  92 => 12,  84 => 10,  74 => 8,  72 => 7,  65 => 6,  62 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if slideshow and slideshow['slides'] %}
    <div id=\"{{id}}\" class=\"carousel slide\" data-ride=\"carousel\" data-interval='3500'>
        <div class=\"carousel-inner\" role=\"listbox\">
            {% for i, slide in slideshow['slides'] %}
                {% if slide.image.path %}
                    <div class='carousel-item{% if loop.first %} active{% endif %}'>
                        {% if slide.link %}
                            <a class=\"carousel-image-background\" style=\"background-image: url('{{ slide.image.path }}');\" alt='{{ slide.image.title }}' href='{{ slide.link }}' target='_blank'></a>
                        {% else %}
                            <div class=\"carousel-image-background\" style=\"background-image: url('{{ slide.image.path }}');\" alt='{{ slide.image.title }}'></div>
                        {% endif %}
                        {% if slide.title or slide.description or slide.link %}
                            <div class=\"carousel-caption clearfix white-caption\">
                                {% if slide.title %}<h4 class='carousel-caption-title'>{{ slide.title }}</h4>{% endif %}
                                {% if slide.description %}<p>{{ slide.description|raw }}</p>{% endif %}
                                {% if slide.link %}<a class='carousel-caption-link' href='{{ slide.link }}' target='_blank'>Learn more</a>{% endif %}
                            </div>
                         {% endif %}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endif %}", "C:\\laragon\\www\\test2/themes/jumplink-viola/partials/slideshow.htm", "");
    }
}
