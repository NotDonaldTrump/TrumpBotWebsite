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

/* forms/fields/range/range.html.twig */
class __TwigTemplate_20dccfc4a92c320bc4eb67d716a3409ad6d7cd6897bea35f26c865060a7ca933 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/range/range.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 4
        echo "    type=\"range\"
    class=\"rangefield ";
        // line 5
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo " ";
        }
        echo "\"
    ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", [])) {
            echo "min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", []), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", [])) {
            echo "max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", []), "html", null, true);
            echo "\"";
        }
        // line 8
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "step", [])) {
            echo "step=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "step", []), "html", null, true);
            echo "\"";
        }
        // line 9
        echo "    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            // line 10
            echo "        id=\"range_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", [])), ["." => "_"]), "html", null, true);
            echo "\"
        oninput=\"number_";
            // line 11
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", [])), ["." => "_"]), "html", null, true);
            echo "_output.value = this.value\"
    ";
        } else {
            // line 13
            echo "        id=\"range_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])), ["." => "_"]), "html", null, true);
            echo "\"
        oninput=\"number_";
            // line 14
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])), ["." => "_"]), "html", null, true);
            echo "_output.value = this.value\"
    ";
        }
        // line 16
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_append($context, array $blocks = [])
    {
        // line 19
        echo "    <input
        type=\"number\"
        class=\"rangefield ";
        // line 21
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo " ";
        }
        echo "\"
        ";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", [])) {
            echo "min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", []), "html", null, true);
            echo "\"";
        }
        // line 23
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", [])) {
            echo "max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", []), "html", null, true);
            echo "\"";
        }
        // line 24
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "step", [])) {
            echo "step=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "step", []), "html", null, true);
            echo "\"";
        }
        // line 25
        echo "        ";
        if (($context["value"] ?? null)) {
            // line 26
            echo "            value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        ";
        } elseif ($this->getAttribute(        // line 27
($context["field"] ?? null), "default", [])) {
            // line 28
            echo "            value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "default", []), "html", null, true);
            echo "\"
        ";
        } else {
            // line 30
            echo "            value=\"0\"
        ";
        }
        // line 32
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            // line 33
            echo "            id=\"number_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", [])), ["." => "_"]), "html", null, true);
            echo "_output\"
            oninput=\"range_";
            // line 34
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", [])), ["." => "_"]), "html", null, true);
            echo ".value = this.value\"
        ";
        } else {
            // line 36
            echo "            id=\"number_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])), ["." => "_"]), "html", null, true);
            echo "_output\"
            oninput=\"range_";
            // line 37
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])), ["." => "_"]), "html", null, true);
            echo ".value = this.value\"
        ";
        }
        // line 39
        echo "    />
    <span class=\"range-append\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "append", []), "html", null, true);
        echo "</span>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/range/range.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 40,  180 => 39,  175 => 37,  170 => 36,  165 => 34,  160 => 33,  157 => 32,  153 => 30,  147 => 28,  145 => 27,  140 => 26,  137 => 25,  130 => 24,  123 => 23,  117 => 22,  110 => 21,  106 => 19,  103 => 18,  96 => 16,  91 => 14,  86 => 13,  81 => 11,  76 => 10,  73 => 9,  66 => 8,  59 => 7,  53 => 6,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input_attributes %}
    type=\"range\"
    class=\"rangefield {% if field.classes is defined %}{{ field.classes }} {% endif %}\"
    {% if field.validate.min %}min=\"{{ field.validate.min }}\"{% endif %}
    {% if field.validate.max %}max=\"{{ field.validate.max }}\"{% endif %}
    {% if field.validate.step %}step=\"{{ field.validate.step }}\"{% endif %}
    {% if field.id is defined %}
        id=\"range_{{ field.id|e|replace({'.': '_'}) }}\"
        oninput=\"number_{{ field.id|e|replace({'.': '_'}) }}_output.value = this.value\"
    {% else %}
        id=\"range_{{ field.name|e|replace({'.': '_'}) }}\"
        oninput=\"number_{{ field.name|e|replace({'.': '_'}) }}_output.value = this.value\"
    {% endif %}
    {{ parent() }}
{% endblock %}
{% block append %}
    <input
        type=\"number\"
        class=\"rangefield {% if field.classes is defined %}{{ field.classes }} {% endif %}\"
        {% if field.validate.min %}min=\"{{ field.validate.min }}\"{% endif %}
        {% if field.validate.max %}max=\"{{ field.validate.max }}\"{% endif %}
        {% if field.validate.step %}step=\"{{ field.validate.step }}\"{% endif %}
        {% if value %}
            value=\"{{ value }}\"
        {% elseif field.default %}
            value=\"{{ field.default }}\"
        {% else %}
            value=\"0\"
        {% endif %}
        {% if field.id is defined %}
            id=\"number_{{ field.id|e|replace({'.': '_'}) }}_output\"
            oninput=\"range_{{ field.id|e|replace({'.': '_'}) }}.value = this.value\"
        {% else %}
            id=\"number_{{ field.name|e|replace({'.': '_'}) }}_output\"
            oninput=\"range_{{ field.name|e|replace({'.': '_'}) }}.value = this.value\"
        {% endif %}
    />
    <span class=\"range-append\">{{ field.append }}</span>

{% endblock append %}
", "forms/fields/range/range.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\range\\range.html.twig");
    }
}
