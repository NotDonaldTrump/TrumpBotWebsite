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

/* item.html.twig */
class __TwigTemplate_d5da05227d070787516cc18abafbf005e61cd8ee93bfd6b7cb29e59597a1ab87 extends \Twig\Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1597918921")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% block content %}
        {% if config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        <div class=\"blog-content-item grid pure-g-r\">
            <div id=\"item\" class=\"block pure-u-2-3\">
                {% include 'partials/blog_item.html.twig' with {'blog': page.parent, 'truncate': false} %}
            </div>
            <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
                {% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "item.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\themes\\cascade\\templates\\item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_d5da05227d070787516cc18abafbf005e61cd8ee93bfd6b7cb29e59597a1ab87___1597918921 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 5
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 5)->display($context);
            // line 6
            echo "        ";
        }
        // line 7
        echo "
        <div class=\"blog-content-item grid pure-g-r\">
            <div id=\"item\" class=\"block pure-u-2-3\">
                ";
        // line 10
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 10)->display(twig_array_merge($context, ["blog" => $this->getAttribute(($context["page"] ?? null), "parent", []), "truncate" => false]));
        // line 11
        echo "            </div>
            <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
                ";
        // line 13
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 13)->display(twig_array_merge($context, ["blog" => $this->getAttribute(($context["page"] ?? null), "parent", [])]));
        // line 14
        echo "            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 14,  123 => 13,  119 => 11,  117 => 10,  112 => 7,  109 => 6,  106 => 5,  103 => 4,  100 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% block content %}
        {% if config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        <div class=\"blog-content-item grid pure-g-r\">
            <div id=\"item\" class=\"block pure-u-2-3\">
                {% include 'partials/blog_item.html.twig' with {'blog': page.parent, 'truncate': false} %}
            </div>
            <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
                {% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "item.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\themes\\cascade\\templates\\item.html.twig");
    }
}
