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

/* forms/fields/toggle/toggle.html.twig */
class __TwigTemplate_61b304e64ceaebcb70cabc55a2730e7f5a4e3ab232a56fe5398e6ea992fe7f6f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 8
        $context["macro"] = $this;
        // line 10
        $context["has_hidden"] = false;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 12
            if (twig_test_empty($context["key"])) {
                // line 13
                $context["has_hidden"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/toggle/toggle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 18
        echo "  ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
  data-grav-field-name=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
";
    }

    // line 22
    public function block_input($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        $context["value"] = (((($context["value"] ?? null) === false)) ? (0) : (($context["value"] ?? null)));
        // line 24
        echo "
  <div class=\"switch-toggle switch-grav ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " switch-";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "options", [])), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\">
    ";
        // line 26
        $context["maxLen"] = 0;
        // line 27
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 28
            echo "      ";
            $context["translation"] = twig_trim_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"]));
            // line 29
            echo "      ";
            $context["maxLen"] = max(twig_length_filter($this->env, ($context["translation"] ?? null)), ($context["maxLen"] ?? null));
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 33
            echo "      ";
            $context["id"] = (("toggle_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . $context["key"]);
            // line 34
            echo "      ";
            $context["translation"] = twig_trim_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"]));
            // line 35
            echo "
      <input type=\"radio\"
             value=\"";
            // line 37
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
             id=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"
             name=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
          ";
            // line 40
            if ($this->getAttribute(($context["field"] ?? null), "highlight", [], "any", true, true)) {
                // line 41
                echo "            class=\"";
                echo ((($this->getAttribute(($context["field"] ?? null), "highlight", []) == ("" . $context["key"]))) ? ("highlight") : (""));
                echo "\"
          ";
            }
            // line 43
            echo "          ";
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 44
            echo "          ";
            if ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) {
                // line 45
                echo "            ";
                if ((("" . $context["key"]) == ("" . ($context["value"] ?? null)))) {
                    // line 46
                    echo "              checked=\"checked\"
            ";
                } elseif ((                // line 47
(isset($context["value"]) || array_key_exists("value", $context)) && (($context["key"] == 1) || ($context["key"] == "1")))) {
                    // line 48
                    echo "              checked=\"checked\"
            ";
                }
                // line 50
                echo "          ";
            } else {
                // line 51
                echo "            ";
                if ((("" . $context["key"]) == ("" . ($context["value"] ?? null)))) {
                    // line 52
                    echo "              checked=\"checked\"
            ";
                }
                // line 54
                echo "          ";
            }
            // line 55
            echo "          ";
            if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
                echo "required=\"required\"";
            }
            // line 56
            echo "          ";
            if ($this->getAttribute(($context["field"] ?? null), "tabindex", [])) {
                echo "tabindex=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "tabindex", []), "html", null, true);
                echo "\"";
            }
            // line 57
            echo "      />
      <label for=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">";
            echo twig_trim_filter($context["macro"]->getspanToggle(($context["translation"] ?? null), ($context["maxLen"] ?? null)));
            echo "</label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "  </div>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "  ";
            $context["space"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2));
            // line 5
            echo "  ";
            echo ((($context["space"] ?? null) . ($context["input"] ?? null)) . ($context["space"] ?? null));
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/toggle/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 5,  221 => 4,  208 => 3,  203 => 60,  193 => 58,  190 => 57,  183 => 56,  178 => 55,  175 => 54,  171 => 52,  168 => 51,  165 => 50,  161 => 48,  159 => 47,  156 => 46,  153 => 45,  150 => 44,  145 => 43,  139 => 41,  137 => 40,  133 => 39,  129 => 38,  125 => 37,  121 => 35,  118 => 34,  115 => 33,  111 => 32,  108 => 31,  102 => 30,  99 => 29,  96 => 28,  91 => 27,  89 => 26,  81 => 25,  78 => 24,  75 => 23,  72 => 22,  66 => 19,  61 => 18,  58 => 17,  53 => 1,  46 => 13,  44 => 12,  40 => 11,  38 => 10,  36 => 8,  30 => 1,);
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

{% macro spanToggle(input, length) %}
  {% set space = repeat('&nbsp;&nbsp;', (length - input|length) / 2) %}
  {{ (space ~ input ~ space)|raw }}
{% endmacro %}

{% import _self as macro %}

{% set has_hidden = false %}
{% for key, text in field.options %}
  {% if key is empty %}
    {% set has_hidden = true %}
  {% endif %}
{% endfor %}

{% block global_attributes %}
  {{ parent() }}
  data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\"
{% endblock %}

{% block input %}
    {% set value = (value is same as(false) ? 0 : value) %}

  <div class=\"switch-toggle switch-grav {{ field.size }} switch-{{ field.options|length }} {{ field.classes }}\">
    {% set maxLen = 0 %}
    {% for text in field.options %}
      {% set translation = text|t|trim %}
      {% set maxLen = max(translation|length, maxLen) %}
    {% endfor %}

    {% for key, text in field.options %}
      {% set id = \"toggle_\" ~ field.name ~ key %}
      {% set translation = text|t|trim %}

      <input type=\"radio\"
             value=\"{{ key }}\"
             id=\"{{ id }}\"
             name=\"{{ (scope ~ field.name)|fieldName }}\"
          {% if field.highlight is defined %}
            class=\"{{ field.highlight == '' ~ key ? 'highlight' : '' }}\"
          {% endif %}
          {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
          {% if field.toggleable %}
            {% if '' ~ key == '' ~ value %}
              checked=\"checked\"
            {% elseif value is defined and (key == 1 or key == '1') %}
              checked=\"checked\"
            {% endif %}
          {% else %}
            {% if '' ~ key == '' ~ value %}
              checked=\"checked\"
            {% endif %}
          {% endif %}
          {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
          {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
      />
      <label for=\"{{ id }}\">{{ (macro.spanToggle(translation, maxLen)|trim)|raw }}</label>
    {% endfor %}
  </div>
{% endblock %}
", "forms/fields/toggle/toggle.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\plugins\\form\\templates\\forms\\fields\\toggle\\toggle.html.twig");
    }
}
