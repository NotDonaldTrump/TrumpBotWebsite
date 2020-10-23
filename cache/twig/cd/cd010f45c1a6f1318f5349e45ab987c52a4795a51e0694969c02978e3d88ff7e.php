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

/* partials/blog_item.html.twig */
class __TwigTemplate_6099b8deb0ab2ed14d33ee5990c77930b55ba8c71c43834da3f6a15131130065 extends \Twig\Template
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
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), true);
        // line 2
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_width", []), 900);
        // line 3
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_height", []), 300);
        // line 4
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_file", []);
        // line 5
        echo "
<div class=\"col\">
    <div class=\"body\">
        <div class=\"cell\">
            <div class=\"col\">
                <div class=\"cell panel\">
                    <div class=\"width-fill narrow site-body\">
                        <figure>
                            ";
        // line 13
        if (($context["header_image"] ?? null)) {
            // line 14
            echo "                                ";
            if (($context["header_image_file"] ?? null)) {
                // line 15
                echo "                                    ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), ($context["header_image_file"] ?? null), [], "array");
                // line 16
                echo "                                ";
            } else {
                // line 17
                echo "                                    ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
                // line 18
                echo "                                ";
            }
            // line 19
            echo "                                ";
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "html", []);
            echo "
                            ";
        }
        // line 21
        echo "                        </figure>
                    </div>
                    <div class=\"body\">
                        <div class=\"col width-1of5\">
                            <div class=\"cell panel\">
                                <div class=\"header\">
                                    <span class=\"list-blog-date\">
                                        <span>";
        // line 28
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d");
        echo "</span>
                                        <span>";
        // line 29
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M");
        echo "</span>
                                        <span>";
        // line 30
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "Y");
        echo "</span>
                                    </span>
                                </div>
                                <div class=\"body\">
                                    <div class=\"cell tags\">
                                        ";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 36
            echo "                                            <nav class=\"blocks\">
                                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 38
                echo "                                                    <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["blog"] ?? null), "url", []), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">#";
                echo $context["tag"];
                echo "</a>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                            </nav>
                                        ";
        }
        // line 42
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col width-fill\">
                            <div class=\"cell panel\">
                                <div class=\"header\">
                                    ";
        // line 49
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 50
            echo "                                        <h4>
                                            ";
            // line 51
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 52
                echo "                                                <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\">
                                                    <i class=\"fa fa-angle-double-right\"></i>
                                                </a>
                                            ";
            }
            // line 56
            echo "                                            <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a>
                                        </h4>
                                    ";
        } else {
            // line 59
            echo "                                        <h4>
                                            <a href=\"";
            // line 60
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a>
                                        </h4>
                                    ";
        }
        // line 63
        echo "                                </div>
                                <div class=\"body\">
                                    <div class=\"cell\">
                                        ";
        // line 66
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 67
            echo "                                            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
                                            ";
            // line 68
            if ( !($context["truncate"] ?? null)) {
                // line 69
                echo "                                                ";
                $context["show_prev_next"] = true;
                // line 70
                echo "                                            ";
            }
            // line 71
            echo "                                        ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 72
            echo "                                            ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
                                            <p>
                                                <a href=\"";
            // line 74
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Continue Reading...</a>
                                            </p>
                                        ";
        } elseif (        // line 76
($context["truncate"] ?? null)) {
            // line 77
            echo "                                            ";
            if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 78
                echo "                                                ";
                echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
                echo "
                                            ";
            } else {
                // line 80
                echo "                                                ";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "
                                            ";
            }
            // line 82
            echo "                                            <p>
                                                <a href=\"";
            // line 83
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Continue Reading...</a>
                                            </p>
                                        ";
        } else {
            // line 86
            echo "                                            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
                                            ";
            // line 87
            $context["show_prev_next"] = true;
            // line 88
            echo "                                        ";
        }
        // line 89
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"col\">

    ";
        // line 102
        if (($context["show_prev_next"] ?? null)) {
            // line 103
            echo "
        <p class=\"prev-next\">
            ";
            // line 105
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 106
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\">
                    <i class=\"fa fa-chevron-left\"></i>
                    Next Post</a>
            ";
            }
            // line 110
            echo "
            ";
            // line 111
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 112
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\">Previous Post
                    <i class=\"fa fa-chevron-right\"></i>
                </a>
            ";
            }
            // line 116
            echo "        </p>
    ";
        }
        // line 118
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 118,  281 => 116,  273 => 112,  271 => 111,  268 => 110,  260 => 106,  258 => 105,  254 => 103,  252 => 102,  237 => 89,  234 => 88,  232 => 87,  227 => 86,  221 => 83,  218 => 82,  212 => 80,  206 => 78,  203 => 77,  201 => 76,  196 => 74,  190 => 72,  187 => 71,  184 => 70,  181 => 69,  179 => 68,  174 => 67,  172 => 66,  167 => 63,  159 => 60,  156 => 59,  147 => 56,  139 => 52,  137 => 51,  134 => 50,  132 => 49,  123 => 42,  119 => 40,  105 => 38,  101 => 37,  98 => 36,  96 => 35,  88 => 30,  84 => 29,  80 => 28,  71 => 21,  65 => 19,  62 => 18,  59 => 17,  56 => 16,  53 => 15,  50 => 14,  48 => 13,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set header_image = page.header.header_image | defined(true) %}
{% set header_image_width = page.header.header_image_width | defined(900) %}
{% set header_image_height = page.header.header_image_height | defined(300) %}
{% set header_image_file = page.header.header_image_file %}

<div class=\"col\">
    <div class=\"body\">
        <div class=\"cell\">
            <div class=\"col\">
                <div class=\"cell panel\">
                    <div class=\"width-fill narrow site-body\">
                        <figure>
                            {% if header_image %}
                                {% if header_image_file %}
                                    {% set header_image_media = page.media.images[header_image_file] %}
                                {% else %}
                                    {% set header_image_media = page.media.images | first %}
                                {% endif %}
                                {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}
                            {% endif %}
                        </figure>
                    </div>
                    <div class=\"body\">
                        <div class=\"col width-1of5\">
                            <div class=\"cell panel\">
                                <div class=\"header\">
                                    <span class=\"list-blog-date\">
                                        <span>{{ page.date|date(\"d\") }}</span>
                                        <span>{{ page.date|date(\"M\") }}</span>
                                        <span>{{ page.date|date(\"Y\") }}</span>
                                    </span>
                                </div>
                                <div class=\"body\">
                                    <div class=\"cell tags\">
                                        {% if page.taxonomy.tag %}
                                            <nav class=\"blocks\">
                                                {% for tag in page.taxonomy.tag %}
                                                    <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\">#{{ tag }}</a>
                                                {% endfor %}
                                            </nav>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col width-fill\">
                            <div class=\"cell panel\">
                                <div class=\"header\">
                                    {% if page.header.link %}
                                        <h4>
                                            {% if page.header.continue_link is not sameas(false) %}
                                                <a href=\"{{ page.url }}\">
                                                    <i class=\"fa fa-angle-double-right\"></i>
                                                </a>
                                            {% endif %}
                                            <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
                                        </h4>
                                    {% else %}
                                        <h4>
                                            <a href=\"{{ page.url }}\">{{ page.title }}</a>
                                        </h4>
                                    {% endif %}
                                </div>
                                <div class=\"body\">
                                    <div class=\"cell\">
                                        {% if page.header.continue_link is sameas(false) %}
                                            {{ page.content }}
                                            {% if not truncate %}
                                                {% set show_prev_next = true %}
                                            {% endif %}
                                        {% elseif truncate and page.summary != page.content %}
                                            {{ page.summary }}
                                            <p>
                                                <a href=\"{{ page.url }}\">Continue Reading...</a>
                                            </p>
                                        {% elseif truncate %}
                                            {% if page.summary != page.content %}
                                                {{ page.content|truncate(550) }}
                                            {% else %}
                                                {{ page.content }}
                                            {% endif %}
                                            <p>
                                                <a href=\"{{ page.url }}\">Continue Reading...</a>
                                            </p>
                                        {% else %}
                                            {{ page.content }}
                                            {% set show_prev_next = true %}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"col\">

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\">
                    <i class=\"fa fa-chevron-left\"></i>
                    Next Post</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">Previous Post
                    <i class=\"fa fa-chevron-right\"></i>
                </a>
            {% endif %}
        </p>
    {% endif %}

</div>
", "partials/blog_item.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\themes\\cascade\\templates\\partials\\blog_item.html.twig");
    }
}
