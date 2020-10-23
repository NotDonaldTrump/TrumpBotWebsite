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

/* partials/base.html.twig */
class __TwigTemplate_baa292b904e8080dd137d8bbf1f1ea2e1f764450d82f809186aa64b2a607f27d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("core/doctype.html.twig", "partials/base.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("core/header.html.twig", "partials/base.html.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"body\">
    <div class=\"cell\">
        <div class=\"col\">
            <div class=\"cell\">
                ";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "            </div>
        </div>
    </div>
</div>

";
        // line 16
        $this->loadTemplate("core/footer.html.twig", "partials/base.html.twig", 16)->display($context);
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo "                    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 8,  51 => 16,  44 => 11,  42 => 8,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% include 'core/doctype.html.twig' %}
{% include 'core/header.html.twig' %}

<div class=\"body\">
    <div class=\"cell\">
        <div class=\"col\">
            <div class=\"cell\">
                {% block content %}
                    {{ page.content }}
                {% endblock %}
            </div>
        </div>
    </div>
</div>

{% include 'core/footer.html.twig' %}
", "partials/base.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\themes\\cascade\\templates\\partials\\base.html.twig");
    }
}
