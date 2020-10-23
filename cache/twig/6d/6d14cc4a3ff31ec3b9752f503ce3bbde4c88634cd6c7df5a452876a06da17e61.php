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

/* core/doctype.html.twig */
class __TwigTemplate_b592058a0baf6962f415ab965537b463f1ce007b050833d2a85bf2b0d099591e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 53
        echo "    </head>
    <body class=\"narrow\">
        <!--Opening <body> tag resides in the doctype core element so that the header element may reside within the body.-->
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 9
            echo "                <meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "description", []);
            echo "\">
            ";
        } else {
            // line 11
            echo "                <meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["site"] ?? null), "description", []);
            echo "\">
            ";
        }
        // line 13
        echo "            ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 14
            echo "                <meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", []);
            echo "\">
            ";
        }
        // line 16
        echo "            <link rel=\"icon\" type=\"image/png\" href=\"";
        echo ($context["theme_url"] ?? null);
        echo "/img/favicon.png\">

            <title>
                ";
        // line 19
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo "
                    |
                ";
        }
        // line 21
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>

            ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
            ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "        ";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 24
        echo "                ";
        // line 25
        echo "                ";
        $this->getAttribute(        // line 26
($context["assets"] ?? null), "add", [0 => "theme://css/cascade/production/build-full.min.css", 1 => 101], "method");
        // line 27
        echo "
                ";
        // line 29
        echo "                ";
        $this->getAttribute(        // line 30
($context["assets"] ?? null), "add", [0 => "theme://css/site.css", 1 => 100], "method");
        // line 31
        echo "                ";
        $this->getAttribute(        // line 32
($context["assets"] ?? null), "add", [0 => "theme://css/cascade.css", 1 => 100], "method");
        // line 33
        echo "
                ";
        // line 34
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        // line 38
        echo "                ";
        $this->getAttribute(        // line 39
($context["assets"] ?? null), "add", [0 => "theme://js/module/jquery/jquery-2.1.1.min.js", 1 => 101], "method");
        // line 40
        echo "                ";
        $this->getAttribute(        // line 41
($context["assets"] ?? null), "add", [0 => "theme://js/app.js"], "method");
        // line 42
        echo "                ";
        $this->getAttribute(        // line 43
($context["assets"] ?? null), "add", [0 => "theme://js/site/base.js"], "method");
        // line 44
        echo "
                ";
        // line 45
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 46
            echo "                    ";
            $this->getAttribute(            // line 47
($context["assets"] ?? null), "add", [0 => "theme://js/shim/iehtmlshiv.js"], "method");
            // line 48
            echo "                ";
        }
        // line 49
        echo "
                ";
        // line 50
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "core/doctype.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 50,  164 => 49,  161 => 48,  159 => 47,  157 => 46,  155 => 45,  152 => 44,  150 => 43,  148 => 42,  146 => 41,  144 => 40,  142 => 39,  140 => 38,  137 => 37,  131 => 34,  128 => 33,  126 => 32,  124 => 31,  122 => 30,  120 => 29,  117 => 27,  115 => 26,  113 => 25,  111 => 24,  108 => 23,  104 => 52,  102 => 37,  99 => 36,  97 => 23,  92 => 21,  85 => 19,  78 => 16,  72 => 14,  69 => 13,  63 => 11,  57 => 9,  55 => 8,  50 => 5,  47 => 4,  40 => 53,  38 => 4,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            {% if header.description %}
                <meta name=\"description\" content=\"{{ header.description }}\">
            {% else %}
                <meta name=\"description\" content=\"{{ site.description }}\">
            {% endif %}
            {% if header.robots %}
                <meta name=\"robots\" content=\"{{ header.robots }}\">
            {% endif %}
            <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/img/favicon.png\">

            <title>
                {% if header.title %}{{ header.title }}
                    |
                {% endif %}{{ site.title }}</title>

            {% block stylesheets %}
                {# Cascade core CSS #}
                {% do
                    assets.add('theme://css/cascade/production/build-full.min.css', 101) %}

                {# CSS cascade custom #}
                {% do
                    assets.add('theme://css/site.css', 100) %}
                {% do
                    assets.add('theme://css/cascade.css', 100) %}

                {{ assets.css() }}
            {% endblock %}

            {% block javascripts %}
                {% do
                    assets.add('theme://js/module/jquery/jquery-2.1.1.min.js', 101) %}
                {% do
                    assets.add('theme://js/app.js') %}
                {% do
                    assets.add('theme://js/site/base.js') %}

                {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                    {% do
                        assets.add('theme://js/shim/iehtmlshiv.js') %}
                {% endif %}

                {{ assets.js() }}
            {% endblock %}
        {% endblock head %}
    </head>
    <body class=\"narrow\">
        <!--Opening <body> tag resides in the doctype core element so that the header element may reside within the body.-->
", "core/doctype.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\themes\\cascade\\templates\\core\\doctype.html.twig");
    }
}
