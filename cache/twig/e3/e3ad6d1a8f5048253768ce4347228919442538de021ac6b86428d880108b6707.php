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

/* error.html.twig */
class __TwigTemplate_aece970aee10560a995a89cda0485f022187424b1515e648e798eea76c8df616 extends \Twig\Template
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
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "
    <div class=\"col\">
        <div class=\"cell panel\">
            <div class=\"header\">
                <h1>";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "ERROR");
        echo "
                    ";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h1>
            </div>
            <div class=\"body\">
                <div class=\"cell\">
                    <p>
                        ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                    </p>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  52 => 8,  48 => 7,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block content %}

    <div class=\"col\">
        <div class=\"cell panel\">
            <div class=\"header\">
                <h1>{{ 'ERROR'|t }}
                    {{ page.header.http_response_code }}</h1>
            </div>
            <div class=\"body\">
                <div class=\"cell\">
                    <p>
                        {{ page.content }}
                    </p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "error.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\themes\\cascade\\templates\\error.html.twig");
    }
}
