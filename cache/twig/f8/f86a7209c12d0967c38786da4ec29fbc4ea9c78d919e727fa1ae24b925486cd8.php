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

/* forms/fields/multilevel/multilevel.html.twig */
class __TwigTemplate_2304b90c1412caf5f38f51d0fab89060167f68831855d958c6a60de1c54ddfe3 extends \Twig\Template
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
        // line 84
        $context["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/multilevel/multilevel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 86
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 87
        echo "    data-grav-array-name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
    data-grav-array-keyname=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_key", []))), "html", null, true);
        echo "\"
    data-grav-array-valuename=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", []))), "html", null, true);
        echo "\"
    ";
        // line 90
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 93
    public function block_input($context, array $blocks = [])
    {
        // line 94
        echo "    <div data-id=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc(), "html", null, true);
        echo "\" data-grav-multilevel-field data-grav-array-type=\"container\" data-grav-array-mode=\"value_only\"";
        echo (((twig_length_filter($this->env, ($context["value"] ?? null)) <= 1)) ? (" class=\"one-child\"") : (""));
        echo ">
        ";
        // line 95
        if (twig_length_filter($this->env, ($context["value"] ?? null))) {
            // line 96
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["content"]) {
                // line 97
                echo "<div class=\"element-wrapper\">
                    ";
                // line 98
                echo $context["macro"]->getrenderer($context["key"], $context["content"], ($context["field"] ?? null), ($context["scope"] ?? null), 0, (("[" . $context["key"]) . "]"), true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 103
            echo "            <div class=\"element-wrapper\">
                <div class=\"form-row array-field-value_only js__multilevel-field\"
                    data-grav-array-type=\"row\">

                    <input
                        type=\"text\"
                        name=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
                        placeholder=\"Enter value\"
                        value=\"\" />

                    <span class=\"fa fa-minus js__remove-item\"></span>
                    <span class=\"fa fa-plus js__add-sibling hidden\" data-level=\"0\" ></span>
                    <span class=\"fa fa-plus-circle js__add-children hidden\" data-level=\"0\"></span>
                </div>
            </div>";
        }
        // line 119
        echo "    </div>
";
    }

    // line 6
    public function getfield($__value__ = null, $__key__ = null, $__level__ = null, $__globalvars__ = null, $__disable_name__ = null, $__hidden__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "key" => $__key__,
            "level" => $__level__,
            "globalvars" => $__globalvars__,
            "disable_name" => $__disable_name__,
            "hidden" => $__hidden__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 7
            echo "        ";
            $context["name"] = ((("data[" . twig_replace_filter($this->getAttribute($this->getAttribute(($context["globalvars"] ?? null), "field", []), "name", []), ["." => "]["])) . "]") . ($context["key"] ?? null));
            // line 8
            echo "        <div class=\"form-row array-field-value_only js__multilevel-field ";
            echo (((($context["level"] ?? null) == 0)) ? ("top") : (""));
            echo "\"
            data-grav-array-type=\"row\" ";
            // line 9
            if (((((isset($context["hidden"]) || array_key_exists("hidden", $context))) ? (_twig_default_filter(($context["hidden"] ?? null), false)) : (false)) == true)) {
                echo "style=\"display: none\"";
            }
            echo ">
            <input
                type=\"text\"
                ";
            // line 12
            if ((($context["disable_name"] ?? null) != true)) {
                echo "name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 13
            echo "                data-attr-name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                placeholder=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", []))), "html", null, true);
            echo "\"
                style=\"margin-left: ";
            // line 15
            echo twig_escape_filter($this->env, (($context["level"] ?? null) * 50), "html", null, true);
            echo "px\"
                value=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />

            <span class=\"fa fa-minus js__remove-item\"></span>
            <span class=\"fa fa-plus js__add-sibling hidden\" data-level=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"></span>
            <span class=\"fa fa-plus-circle js__add-children hidden\" data-level=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"></span>
        </div>
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

    // line 3
    public function getrenderer($__key__ = null, $__content__ = null, $__field__ = null, $__scope__ = null, $__level__ = null, $__parent_key__ = null, $__up_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "content" => $__content__,
            "field" => $__field__,
            "scope" => $__scope__,
            "level" => $__level__,
            "parent_key" => $__parent_key__,
            "up_level" => $__up_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["self"] = $this;
            // line 5
            echo "
    ";
            // line 23
            echo "
    ";
            // line 24
            if ((($context["level"] ?? null) == 0)) {
                // line 25
                echo "
        ";
                // line 26
                echo $context["self"]->getfield(($context["key"] ?? null), "", ($context["level"] ?? null), $context, true, ((is_numeric(($context["key"] ?? null))) ? (true) : (false)));
                echo "

        ";
                // line 28
                if ( !twig_test_iterable(($context["content"] ?? null))) {
                    // line 29
                    echo "            ";
                    $context["level2"] = (($context["level"] ?? null) + 1);
                    // line 30
                    echo "
            <div class=\"children-wrapper\">
                <div class=\"element-wrapper\">
                    ";
                    // line 33
                    echo $context["self"]->getfield(($context["content"] ?? null), (("[" . ($context["key"] ?? null)) . "]"), ($context["level2"] ?? null), $context);
                    echo "
                </div>
            </div>
        ";
                }
                // line 37
                echo "    ";
            }
            // line 38
            echo "
    ";
            // line 39
            if (($context["up_level"] ?? null)) {
                // line 40
                echo "        ";
                $context["level"] = (($context["level"] ?? null) + 1);
                // line 41
                echo "    ";
            }
            // line 42
            echo "    <div class=\"children-wrapper\">
        ";
            // line 43
            $context["unique_child"] = (((is_array(($context["content"] ?? null)) && ($this->getAttribute(($context["content"] ?? null), "length", []) > 1))) ? (true) : (false));
            // line 44
            echo "
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["inner_key"] => $context["inner_content"]) {
                // line 46
                echo "<div class=\"element-wrapper\">
                ";
                // line 47
                if ( !is_numeric($context["inner_key"])) {
                    // line 48
                    echo "                    ";
                    if ((twig_length_filter($this->env, ($context["content"] ?? null)) > 1)) {
                        // line 49
                        echo "                        ";
                        echo $context["self"]->getfield($context["inner_key"], ($context["parent_key"] ?? null), ($context["level"] ?? null), $context, true);
                        echo "
                    ";
                    } else {
                        // line 51
                        echo "                        ";
                        echo $context["self"]->getfield($context["inner_key"], ($context["parent_key"] ?? null), ($context["level"] ?? null), $context);
                        echo "
                    ";
                    }
                    // line 53
                    echo "                    ";
                    $context["level2"] = (($context["level"] ?? null) + 1);
                    // line 54
                    echo "                    ";
                    $context["up_level"] = true;
                    // line 55
                    echo "                ";
                } else {
                    // line 56
                    echo "                    ";
                    $context["up_level"] = false;
                    // line 57
                    echo "                    ";
                    $context["level2"] = ($context["level"] ?? null);
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "
                ";
                // line 60
                if ( !twig_test_iterable($context["inner_content"])) {
                    // line 61
                    echo "
                    ";
                    // line 62
                    if ( !is_numeric($context["inner_key"])) {
                        // line 63
                        echo "                        <div class=\"children-wrapper\">
                            <div class=\"element-wrapper\">
                    ";
                    }
                    // line 66
                    echo "
                    ";
                    // line 67
                    $context["last_key"] = ((is_numeric($context["inner_key"])) ? ("") : ($context["inner_key"]));
                    // line 68
                    echo "                    ";
                    echo $context["self"]->getfield($context["inner_content"], (((($context["parent_key"] ?? null) . "[") . $context["inner_key"]) . "]"), ($context["level2"] ?? null), $context);
                    echo "

                    ";
                    // line 70
                    if ( !is_numeric($context["inner_key"])) {
                        // line 71
                        echo "                            </div>
                        </div>
                    ";
                    }
                    // line 74
                    echo "                ";
                } else {
                    // line 75
                    echo "
                    ";
                    // line 76
                    $context["inner_parent_key"] = (((($context["parent_key"] ?? null) . "[") . $context["inner_key"]) . "]");
                    // line 77
                    echo "                    ";
                    echo $context["self"]->getrenderer($context["inner_key"], $context["inner_content"], ($context["field"] ?? null), ($context["scope"] ?? null), ($context["level"] ?? null), ($context["inner_parent_key"] ?? null), ($context["up_level"] ?? null));
                    echo "
                ";
                }
                // line 79
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['inner_key'], $context['inner_content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "    </div>
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
        return "forms/fields/multilevel/multilevel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 81,  365 => 79,  359 => 77,  357 => 76,  354 => 75,  351 => 74,  346 => 71,  344 => 70,  338 => 68,  336 => 67,  333 => 66,  328 => 63,  326 => 62,  323 => 61,  321 => 60,  318 => 59,  315 => 58,  312 => 57,  309 => 56,  306 => 55,  303 => 54,  300 => 53,  294 => 51,  288 => 49,  285 => 48,  283 => 47,  280 => 46,  276 => 45,  273 => 44,  271 => 43,  268 => 42,  265 => 41,  262 => 40,  260 => 39,  257 => 38,  254 => 37,  247 => 33,  242 => 30,  239 => 29,  237 => 28,  232 => 26,  229 => 25,  227 => 24,  224 => 23,  221 => 5,  218 => 4,  200 => 3,  182 => 20,  178 => 19,  172 => 16,  168 => 15,  164 => 14,  159 => 13,  153 => 12,  145 => 9,  140 => 8,  137 => 7,  120 => 6,  115 => 119,  103 => 109,  95 => 103,  85 => 98,  82 => 97,  77 => 96,  75 => 95,  68 => 94,  65 => 93,  59 => 90,  55 => 89,  51 => 88,  46 => 87,  43 => 86,  38 => 1,  36 => 84,  30 => 1,);
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

{% macro renderer(key, content, field, scope, level, parent_key, up_level) %}
    {% import _self as self %}

    {% macro field(value, key, level, globalvars, disable_name, hidden) %}
        {% set name = 'data[' ~ globalvars.field.name|replace({'.': ']['}) ~ ']' ~ key %}
        <div class=\"form-row array-field-value_only js__multilevel-field {{ level == 0 ? 'top' : '' }}\"
            data-grav-array-type=\"row\" {% if (hidden|default(false) == true) %}style=\"display: none\"{% endif %}>
            <input
                type=\"text\"
                {% if (disable_name != true) %}name=\"{{ name }}\"{% endif %}
                data-attr-name=\"{{ name }}\"
                placeholder=\"{{ field.placeholder_value|e|tu }}\"
                style=\"margin-left: {{ level * 50 }}px\"
                value=\"{{ value }}\" />

            <span class=\"fa fa-minus js__remove-item\"></span>
            <span class=\"fa fa-plus js__add-sibling hidden\" data-level=\"{{level}}\"></span>
            <span class=\"fa fa-plus-circle js__add-children hidden\" data-level=\"{{level}}\"></span>
        </div>
    {% endmacro %}

    {% if level == 0 %}

        {{ self.field(key, '', level, _context, true, (is_numeric(key) ? true : false)) }}

        {% if content is not iterable %}
            {% set level2 = level + 1 %}

            <div class=\"children-wrapper\">
                <div class=\"element-wrapper\">
                    {{ self.field(content, '[' ~ key ~ ']', level2, _context) }}
                </div>
            </div>
        {% endif %}
    {% endif %}

    {% if up_level %}
        {% set level = level + 1 %}
    {% endif %}
    <div class=\"children-wrapper\">
        {% set unique_child = (is_array(content) and content.length > 1) ? true : false %}

        {% for inner_key, inner_content in content -%}
            <div class=\"element-wrapper\">
                {% if not is_numeric(inner_key) %}
                    {% if (content|length > 1) %}
                        {{ self.field(inner_key, parent_key, level, _context, true) }}
                    {% else %}
                        {{ self.field(inner_key, parent_key, level, _context) }}
                    {% endif %}
                    {% set level2 = level + 1 %}
                    {% set up_level = true %}
                {% else %}
                    {% set up_level = false %}
                    {% set level2 = level %}
                {% endif %}

                {% if inner_content is not iterable %}

                    {% if not is_numeric(inner_key) %}
                        <div class=\"children-wrapper\">
                            <div class=\"element-wrapper\">
                    {% endif %}

                    {% set last_key = (is_numeric(inner_key)) ? '' : inner_key %}
                    {{ self.field(inner_content, parent_key ~ '[' ~ inner_key ~ ']', level2, _context) }}

                    {% if not is_numeric(inner_key) %}
                            </div>
                        </div>
                    {% endif %}
                {% else %}

                    {% set inner_parent_key = parent_key ~ '[' ~ inner_key ~ ']' %}
                    {{ self.renderer(inner_key, inner_content, field, scope, level, inner_parent_key, up_level) }}
                {% endif %}
            </div>
        {% endfor %}
    </div>
{% endmacro %}

{% import _self as macro %}

{% block global_attributes %}
    data-grav-array-name=\"{{ (scope ~ field.name)|fieldName }}\"
    data-grav-array-keyname=\"{{ field.placeholder_key|e|tu }}\"
    data-grav-array-valuename=\"{{ field.placeholder_value|e|tu }}\"
    {{ parent() }}
{% endblock %}

{% block input %}
    <div data-id=\"{{random_string()}}\" data-grav-multilevel-field data-grav-array-type=\"container\" data-grav-array-mode=\"value_only\"{{ value|length <= 1 ? ' class=\"one-child\"' : '' }}>
        {% if value|length %}
            {% for key, content in value -%}
                <div class=\"element-wrapper\">
                    {{ macro.renderer(key, content, field, scope, 0, '[' ~ key ~ ']', true) }}
                </div>
            {% endfor %}
        {%- else -%}
            {# Empty value, mock the entry field#}
            <div class=\"element-wrapper\">
                <div class=\"form-row array-field-value_only js__multilevel-field\"
                    data-grav-array-type=\"row\">

                    <input
                        type=\"text\"
                        name=\"{{ (scope ~ field.name)|fieldName }}\"
                        placeholder=\"Enter value\"
                        value=\"\" />

                    <span class=\"fa fa-minus js__remove-item\"></span>
                    <span class=\"fa fa-plus js__add-sibling hidden\" data-level=\"0\" ></span>
                    <span class=\"fa fa-plus-circle js__add-children hidden\" data-level=\"0\"></span>
                </div>
            </div>
        {%- endif %}
    </div>
{% endblock %}
", "forms/fields/multilevel/multilevel.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\multilevel\\multilevel.html.twig");
    }
}
