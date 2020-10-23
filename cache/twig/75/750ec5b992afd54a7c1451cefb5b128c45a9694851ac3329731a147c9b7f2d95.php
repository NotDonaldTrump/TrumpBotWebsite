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

/* forms/fields/parents/parents.html.twig */
class __TwigTemplate_6b90d52ff53b21ea29012cd8b145e545b49a99dace1958e1a330ea191fe09ec5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/fields/pages/pages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/fields/pages/pages.html.twig", "forms/fields/parents/parents.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $context["last_page_route"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "page", []), "getLastPageRoute", []);
        // line 5
        echo "    ";
        $context["show_slug_val"] = true;
        // line 6
        echo "    ";
        $context["show_fullpath_val"] = false;
        // line 7
        echo "    ";
        $context["show_all_val"] = true;
        // line 8
        echo "
    ";
        // line 9
        $context["show_parents"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pages.show_parents"], "method");
        // line 10
        echo "    ";
        if ((($context["show_parents"] ?? null) == "folder")) {
            // line 11
            echo "        ";
            $context["show_slug_val"] = false;
            // line 12
            echo "    ";
        } elseif ((($context["show_parents"] ?? null) == "fullpath")) {
            // line 13
            echo "        ";
            $context["show_fullpath_val"] = true;
            // line 14
            echo "    ";
        }
        // line 15
        echo "    
    ";
        // line 16
        $context["limit_levels_val"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pages.parents_levels"], "method");
        // line 17
        echo "
    ";
        // line 18
        $context["show_modular_val"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pages.show_modular", 1 => true], "method");
        // line 19
        echo "    ";
        if ((($context["show_modular_val"] ?? null) == false)) {
            // line 20
            echo "        ";
            $context["show_all_val"] = false;
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $context["defaults"] = ["show_root" => true, "show_all" => ($context["show_all_val"] ?? null), "show_modular" => ($context["show_modular_val"] ?? null), "show_slug" => ($context["show_slug_val"] ?? null), "show_fullpath" => ($context["show_fullpath_val"] ?? null), "default" => ($context["last_page_route"] ?? null), "limit_levels" => ($context["limit_levels_val"] ?? null)];
        // line 24
        echo "    ";
        $context["field"] = twig_array_merge(($context["field"] ?? null), ($context["defaults"] ?? null));
        // line 25
        echo "    ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/parents/parents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  98 => 24,  96 => 23,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  82 => 18,  79 => 17,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/fields/pages/pages.html.twig\" %}

{% block input %}
    {% set last_page_route = admin.page.getLastPageRoute %}
    {% set show_slug_val = true %}
    {% set show_fullpath_val = false %}
    {% set show_all_val = true %}

    {% set show_parents = config.get('plugins.admin.pages.show_parents') %}
    {% if show_parents == 'folder' %}
        {% set show_slug_val = false %}
    {% elseif show_parents == 'fullpath' %}
        {% set show_fullpath_val = true %}
    {% endif %}
    
    {% set limit_levels_val = config.get('plugins.admin.pages.parents_levels') %}

    {% set show_modular_val = config.get('plugins.admin.pages.show_modular', true) %}
    {% if show_modular_val == false %}
        {% set show_all_val = false %}
    {% endif %}

    {% set defaults = {show_root:true, show_all:show_all_val, show_modular:show_modular_val, show_slug:show_slug_val, show_fullpath:show_fullpath_val, default:last_page_route, limit_levels:limit_levels_val} %}
    {% set field = field|merge(defaults) %}
    {{ parent() }}
{% endblock %}
", "forms/fields/parents/parents.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\parents\\parents.html.twig");
    }
}
