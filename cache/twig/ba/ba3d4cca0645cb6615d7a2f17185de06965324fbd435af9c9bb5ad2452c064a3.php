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

/* partials/sidebar.html.twig */
class __TwigTemplate_61dafc710aad163fe23f564ac8c047bce327f2c7ba66e3bb9ff355056fbfb2e3 extends \Twig\Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((        // line 2
($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", []))) : ($this->getAttribute(        // line 3
($context["blog"] ?? null), "url", [])));
        // line 4
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(        // line 6
($context["blog"] ?? null), "url", [])));
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 9
            echo "    <div class=\"sidebar-content\">
        <h4>Search:</h4>
        ";
            // line 11
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 11)->display($context);
            // line 12
            echo "    </div>
";
        }
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 15
            echo "    <h4>Related:</h4>
    ";
            // line 16
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 16)->display($context);
        }
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 19
            echo "    <div class=\"sidebar-content\">
        <h4>Random Article:</h4>
        <a class=\"button\" href=\"";
            // line 21
            echo ($context["base_url"] ?? null);
            echo "/random\">
            <i class=\"fa fa-retweet\"></i>
            ";
            // line 23
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY");
            echo "</a>
    </div>
";
        }
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 27
            echo "    <div class=\"sidebar-content\">
        <h4>Tags:</h4>
        ";
            // line 29
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 29)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 30
            echo "    </div>
";
        }
        // line 32
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 33
            echo "    <div class=\"sidebar-content\">
        <h4>Archives:</h4>
        ";
            // line 35
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 35)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 36
            echo "    </div>
";
        }
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 39
            echo "    <div class=\"sidebar-content syndicate\">
        <h4>Syndicate:</h4>
        <a class=\"button\" href=\"";
            // line 41
            echo ($context["feed_url"] ?? null);
            echo ".atom\">
            <i class=\"fa fa-rss-square\"></i>
            Atom 1.0</a>
        <a class=\"button\" href=\"";
            // line 44
            echo ($context["feed_url"] ?? null);
            echo ".rss\">
            <i class=\"fa fa-rss-square\"></i>
            RSS</a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  107 => 41,  103 => 39,  101 => 38,  97 => 36,  95 => 35,  91 => 33,  89 => 32,  85 => 30,  83 => 29,  79 => 27,  77 => 26,  71 => 23,  66 => 21,  62 => 19,  60 => 18,  57 => 16,  54 => 15,  52 => 14,  48 => 12,  46 => 11,  42 => 9,  40 => 8,  37 => 7,  35 => 6,  34 => 4,  32 => 3,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative
    ? (base_url_relative ~ '/' ~ blog.slug)
    : blog.url %}
{% set new_base_url = blog.url == '/'
    ? ''
    : blog.url %}

{% if config.plugins.simplesearch.enabled %}
    <div class=\"sidebar-content\">
        <h4>Search:</h4>
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages | length > 0 %}
    <h4>Related:</h4>
    {% include 'partials/relatedpages.html.twig' %}
{% endif %}
{% if config.plugins.random.enabled %}
    <div class=\"sidebar-content\">
        <h4>Random Article:</h4>
        <a class=\"button\" href=\"{{ base_url }}/random\">
            <i class=\"fa fa-retweet\"></i>
            {{ 'SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>
    </div>
{% endif %}
{% if config.plugins.taxonomylist.enabled %}
    <div class=\"sidebar-content\">
        <h4>Tags:</h4>
        {% include 'partials/taxonomylist.html.twig' with {'base_url': new_base_url, 'taxonomy': 'tag'} %}
    </div>
{% endif %}
{% if config.plugins.archives.enabled %}
    <div class=\"sidebar-content\">
        <h4>Archives:</h4>
        {% include 'partials/archives.html.twig' with {'base_url': new_base_url} %}
    </div>
{% endif %}
{% if config.plugins.feed.enabled %}
    <div class=\"sidebar-content syndicate\">
        <h4>Syndicate:</h4>
        <a class=\"button\" href=\"{{ feed_url }}.atom\">
            <i class=\"fa fa-rss-square\"></i>
            Atom 1.0</a>
        <a class=\"button\" href=\"{{ feed_url }}.rss\">
            <i class=\"fa fa-rss-square\"></i>
            RSS</a>
    </div>
{% endif %}
", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\themes\\cascade\\templates\\partials\\sidebar.html.twig");
    }
}
