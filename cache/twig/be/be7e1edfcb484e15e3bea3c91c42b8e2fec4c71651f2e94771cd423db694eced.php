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

/* config.html.twig */
class __TwigTemplate_dbd3e1903569175845f9b417ec3c1b1588d308c294096748d6d54b3d79d522db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_top' => [$this, 'block_content_top'],
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
        // line 3
        $context["config_slug"] = twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "basename", []));
        // line 4
        $context["isInfo"] = (($context["config_slug"] ?? null) == "info");
        // line 6
        $context["tab_title_string"] = ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["config_slug"] ?? null)));
        // line 7
        $context["tab_title"] = ((($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["tab_title_string"] ?? null)) == ($context["tab_title_string"] ?? null))) ? (twig_capitalize_string_filter($this->env, ($context["config_slug"] ?? null))) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["tab_title_string"] ?? null))));
        // line 8
        $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION") . ": ") . ($context["tab_title"] ?? null));
        // line 10
        $context["config_ignores"] = [0 => "scheduler", 1 => "backups"];
        // line 12
        if ( !($context["isInfo"] ?? null)) {
            // line 13
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("config/" . ($context["config_slug"] ?? null))], "method");
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")], "method");
        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 25
    public function block_titlebar($context, array $blocks = [])
    {
        // line 26
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
        ";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", [])) {
            // line 29
            echo "        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 31
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["tab_title"] ?? null), "html", null, true);
        echo "</h1>
";
    }

    // line 35
    public function block_content_top($context, array $blocks = [])
    {
        // line 36
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", [])) {
            // line 37
            echo "    <div class=\"alert notice\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", []), [($context["base_path"] ?? null) => ""]), "html", null, true);
            echo "</b></div>
    ";
        }
        // line 39
        echo "
    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">

            ";
        // line 43
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration_system", 1 => "admin.super"])) {
            // line 44
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "system")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/system\">
                <span>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 48
        echo "
            ";
        // line 49
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration_site", 1 => "admin.super"])) {
            // line 50
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "site")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/site\">
                <span>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 54
        echo "
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "configurations", []));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            if (!twig_in_filter($context["configuration"], ($context["config_ignores"] ?? null))) {
                // line 56
                echo "                ";
                if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => ("admin.configuration_" . $context["configuration"]), 1 => "admin.super"])) {
                    // line 57
                    echo "                    ";
                    $context["current_blueprints"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "data", [0 => ("config/" . $context["configuration"])], "method"), "blueprints", []), "toArray", [], "method");
                    // line 58
                    echo "                    ";
                    if ((((($context["configuration"] != "system") && ($context["configuration"] != "site")) &&  !$this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "hidden", [])) && ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "fields", [])) ||  !twig_test_empty($this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "field", []))))) {
                        // line 59
                        echo "                        <a ";
                        if ((($context["config_slug"] ?? null) == $context["configuration"])) {
                            echo "class=\"active\"";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                        echo "/config/";
                        echo twig_escape_filter($this->env, $context["configuration"], "html", null, true);
                        echo "\">
                            ";
                        // line 60
                        $context["configuration_string"] = ("PLUGIN_ADMIN." . twig_upper_filter($this->env, $context["configuration"]));
                        // line 61
                        echo "                            <span>";
                        echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["configuration_string"] ?? null)) == ($context["configuration_string"] ?? null))) ? (twig_capitalize_string_filter($this->env, $context["configuration"])) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["configuration_string"] ?? null)))), "html", null, true);
                        echo "</span>
                        </a>
                    ";
                    }
                    // line 64
                    echo "                ";
                }
                // line 65
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
            ";
        // line 67
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration_info", 1 => "admin.super"])) {
            // line 68
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "info")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/info\">
                <span>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 72
        echo "
        </div>
    </div>
";
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        // line 78
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => ("admin.configuration_" . ($context["config_slug"] ?? null)), 1 => "admin.super"])) {
            // line 79
            echo "        ";
            if (($context["isInfo"] ?? null)) {
                // line 80
                echo "            <div id=\"phpinfo\">
                ";
                // line 81
                echo $this->getAttribute(($context["admin"] ?? null), "phpinfo", []);
                echo "
            </div>
        ";
            } else {
                // line 84
                echo "            <div class=\"config-wrapper-";
                echo twig_escape_filter($this->env, ($context["config_slug"] ?? null), "html", null, true);
                echo "\">
            ";
                // line 85
                $this->loadTemplate("partials/blueprints.html.twig", "config.html.twig", 85)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", []), "data" => ($context["data"] ?? null)]));
                // line 86
                echo "            </div>
        ";
            }
            // line 88
            echo "    ";
        }
        // line 89
        echo "    ";
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "config.html.twig", 89)->display($context);
    }

    public function getTemplateName()
    {
        return "config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 89,  275 => 88,  271 => 86,  269 => 85,  264 => 84,  258 => 81,  255 => 80,  252 => 79,  249 => 78,  246 => 77,  239 => 72,  233 => 69,  224 => 68,  222 => 67,  219 => 66,  212 => 65,  209 => 64,  202 => 61,  200 => 60,  189 => 59,  186 => 58,  183 => 57,  180 => 56,  175 => 55,  172 => 54,  166 => 51,  157 => 50,  155 => 49,  152 => 48,  146 => 45,  137 => 44,  135 => 43,  129 => 39,  121 => 37,  118 => 36,  115 => 35,  107 => 32,  104 => 31,  98 => 29,  96 => 28,  90 => 27,  87 => 26,  84 => 25,  77 => 22,  74 => 21,  67 => 18,  64 => 17,  61 => 16,  56 => 1,  53 => 13,  51 => 12,  49 => 10,  47 => 8,  45 => 7,  43 => 6,  41 => 4,  39 => 3,  33 => 1,);
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

{% set config_slug = uri.basename|e %}
{% set isInfo = (config_slug == 'info') %}

{% set tab_title_string = \"PLUGIN_ADMIN.\" ~ config_slug|upper %}
{% set tab_title = (tab_title_string|tu == tab_title_string ? config_slug|capitalize : tab_title_string|tu)  %}
{% set title = \"PLUGIN_ADMIN.CONFIGURATION\"|tu ~ \": \" ~ tab_title %}

{% set config_ignores = ['scheduler', 'backups'] %}

{% if not isInfo %}
    {% set data = admin.data('config/' ~ config_slug) %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss(theme_url ~ '/css/codemirror/codemirror.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block titlebar %}
    <div class=\"button-bar\">
        <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        {% if data.file.filename %}
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
        {% endif %}
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> {{ \"PLUGIN_ADMIN.CONFIGURATION\"|tu }} - {{ tab_title }}</h1>
{% endblock %}

{% block content_top %}
    {% if data.file.filename %}
    <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>
    {% endif %}

    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">

            {% if authorize(['admin.configuration_system', 'admin.super']) %}
            <a {% if config_slug == 'system' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/system\">
                <span>{{ \"PLUGIN_ADMIN.SYSTEM\"|tu }}</span>
            </a>
            {% endif %}

            {% if authorize(['admin.configuration_site', 'admin.super']) %}
            <a {% if config_slug == 'site' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/site\">
                <span>{{ \"PLUGIN_ADMIN.SITE\"|tu }}</span>
            </a>
            {% endif %}

            {% for configuration in admin.configurations if (configuration not in config_ignores) %}
                {% if authorize(['admin.configuration_' ~ configuration, 'admin.super']) %}
                    {% set current_blueprints = admin.data('config/' ~ configuration).blueprints.toArray() %}
                    {% if configuration != 'system' and configuration != 'site' and not current_blueprints.form.hidden and (current_blueprints.form.fields is not empty or current_blueprints.form.field is not empty) %}
                        <a {% if config_slug == configuration %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/{{configuration}}\">
                            {% set configuration_string = \"PLUGIN_ADMIN.\" ~ configuration|upper %}
                            <span>{{ (configuration_string|tu == configuration_string ? configuration|capitalize : configuration_string|tu) }}</span>
                        </a>
                    {% endif %}
                {% endif %}
            {% endfor %}

            {% if authorize(['admin.configuration_info', 'admin.super']) %}
            <a {% if config_slug == 'info' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/info\">
                <span>{{ \"PLUGIN_ADMIN.INFO\"|tu }}</span>
            </a>
            {% endif %}

        </div>
    </div>
{% endblock %}

{% block content %}
    {% if authorize(['admin.configuration_' ~ config_slug, 'admin.super']) %}
        {% if isInfo %}
            <div id=\"phpinfo\">
                {{ admin.phpinfo|raw }}
            </div>
        {% else %}
            <div class=\"config-wrapper-{{  config_slug }}\">
            {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}
            </div>
        {% endif %}
    {% endif %}
    {% include 'partials/modal-changes-detected.html.twig' %}
{% endblock %}
", "config.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\plugins\\admin\\themes\\grav\\templates\\config.html.twig");
    }
}
