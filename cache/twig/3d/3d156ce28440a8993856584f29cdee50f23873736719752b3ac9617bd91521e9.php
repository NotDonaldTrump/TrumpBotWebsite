<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/header.html.twig */
class __TwigTemplate_c109daaf23448bbc236781d56721eefb0ba9194ff257af336e8ba52106f00334 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"site-center\">
    <div class=\"site-body\">

        <div class=\"site-header\">
            <div class=\"tags sitemenutags\"></div>
            <div class=\"col width-fit sitemenu\">
                <div class=\"col width-fit mobile-width-fit\">
                    <div class=\"cell\">
                        <ul class=\"nav\">

                            <li>
                                <h1>
                                    <span class=\"icon icon-32 icon-terminal\"></span>";
        // line 13
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</h1>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col width-fit mobile-width-fit\">
                    <div class=\"cell\">
                        <ul class=\"nav\">
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 22
            echo "                                ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 23
                echo "                                    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 26
                echo "                                    <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                                        <a href=\"";
                // line 27
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a>
                                    </li>
                                ";
            }
            // line 30
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"sitemenu-responsive col collapsible collapsed\">
                <div class=\"col collapse-trigger\">
                    <div class=\"cell\">
                        <ul class=\"nav \">
                            <li>
                                <a href=\"#\">
                                    <span class=\"icon icon-32 icon-align-justify\"></span>
                                </a>
                            </li>
                            <li>&nbsp;</li>
                            <li>
                                <h1>";
        // line 46
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</h1>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"right collapse-section\">
                        <div class=\"cell\">
                            <ul class=\"nav\">
                                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 56
            echo "                                    ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 57
                echo "                                        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 60
                echo "                                        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                                            <a href=\"";
                // line 61
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a>
                                        </li>
                                    ";
            }
            // line 64
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "core/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 65,  136 => 64,  128 => 61,  123 => 60,  120 => 57,  117 => 56,  113 => 55,  101 => 46,  84 => 31,  78 => 30,  70 => 27,  65 => 26,  62 => 23,  59 => 22,  55 => 21,  44 => 13,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"site-center\">
    <div class=\"site-body\">

        <div class=\"site-header\">
            <div class=\"tags sitemenutags\"></div>
            <div class=\"col width-fit sitemenu\">
                <div class=\"col width-fit mobile-width-fit\">
                    <div class=\"cell\">
                        <ul class=\"nav\">

                            <li>
                                <h1>
                                    <span class=\"icon icon-32 icon-terminal\"></span>{{ site.title }}</h1>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col width-fit mobile-width-fit\">
                    <div class=\"cell\">
                        <ul class=\"nav\">
                            {% for page in pages.children %}
                                {% if page.visible %}
                                    {% set current_page = (page.active or page.activeChild)
                                        ? 'active'
                                        : '' %}
                                    <li class=\"{{ current_page }}\">
                                        <a href=\"{{ page.url }}\">{{ page.menu }}</a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"sitemenu-responsive col collapsible collapsed\">
                <div class=\"col collapse-trigger\">
                    <div class=\"cell\">
                        <ul class=\"nav \">
                            <li>
                                <a href=\"#\">
                                    <span class=\"icon icon-32 icon-align-justify\"></span>
                                </a>
                            </li>
                            <li>&nbsp;</li>
                            <li>
                                <h1>{{ site.title }}</h1>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"right collapse-section\">
                        <div class=\"cell\">
                            <ul class=\"nav\">
                                {% for page in pages.children %}
                                    {% if page.visible %}
                                        {% set current_page = (page.active or page.activeChild)
                                            ? 'active'
                                            : '' %}
                                        <li class=\"{{ current_page }}\">
                                            <a href=\"{{ page.url }}\">{{ page.menu }}</a>
                                        </li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
", "core/header.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\themes\\cascade\\templates\\core\\header.html.twig");
    }
}
