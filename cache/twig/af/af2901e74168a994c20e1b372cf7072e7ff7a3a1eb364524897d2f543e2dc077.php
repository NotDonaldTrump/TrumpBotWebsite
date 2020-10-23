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

/* partials/login-twofa.html.twig */
class __TwigTemplate_cd11c8769c13bbcb78f44faa1c2a8c5cc1cc3a12fd40f757a1d863a59fdb62a7 extends \Twig\Template
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
        $this->loadTemplate("partials/login-twofa.html.twig", "partials/login-twofa.html.twig", 1, "1308404432")->display(twig_array_merge($context, ["title" => "Grav 2-Factor Authentication", "redirect" => $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "redirect", [])]));
    }

    public function getTemplateName()
    {
        return "partials/login-twofa.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Source("{% embed 'partials/login.html.twig' with {title:'Grav 2-Factor Authentication', redirect: admin.session.redirect} %}

{% block integration %}
{% endblock %}

{% block form %}

    {% set form = forms['login-twofa'] %}

    {% for field in form.fields %}
        {% if field.type %}
            <div>
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            </div>
        {% endif %}
    {% endfor %}

    <div class=\"{{ form_button_outer_classes ?: 'form-actions primary-accent' }}\">
        <div class=\"form-actions primary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"twofa\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_LOGIN.BTN_LOGIN'|t }}</button>
        </div>
    </div>

{% endblock %}

{% endembed %}
", "partials/login-twofa.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login-twofa.html.twig");
    }
}


/* partials/login-twofa.html.twig */
class __TwigTemplate_cd11c8769c13bbcb78f44faa1c2a8c5cc1cc3a12fd40f757a1d863a59fdb62a7___1308404432 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'integration' => [$this, 'block_integration'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/login.html.twig", "partials/login-twofa.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_integration($context, array $blocks = [])
    {
    }

    // line 6
    public function block_form($context, array $blocks = [])
    {
        // line 7
        echo "
    ";
        // line 8
        $context["form"] = $this->getAttribute(($context["forms"] ?? null), "login-twofa", [], "array");
        // line 9
        echo "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 11
            echo "        ";
            if ($this->getAttribute($context["field"], "type", [])) {
                // line 12
                echo "            <div>
                ";
                // line 13
                $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "partials/login-twofa.html.twig", 13)->display($context);
                // line 14
                echo "            </div>
        ";
            }
            // line 16
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    <div class=\"";
        // line 18
        ((($context["form_button_outer_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_button_outer_classes"] ?? null), "html", null, true))) : (print ("form-actions primary-accent")));
        echo "\">
        <div class=\"form-actions primary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"twofa\"><i class=\"fa fa-sign-in\"></i> ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_LOGIN.BTN_LOGIN"), "html", null, true);
        echo "</button>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "partials/login-twofa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 20,  176 => 18,  173 => 17,  159 => 16,  155 => 14,  153 => 13,  150 => 12,  147 => 11,  130 => 10,  127 => 9,  125 => 8,  122 => 7,  119 => 6,  114 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title:'Grav 2-Factor Authentication', redirect: admin.session.redirect} %}

{% block integration %}
{% endblock %}

{% block form %}

    {% set form = forms['login-twofa'] %}

    {% for field in form.fields %}
        {% if field.type %}
            <div>
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            </div>
        {% endif %}
    {% endfor %}

    <div class=\"{{ form_button_outer_classes ?: 'form-actions primary-accent' }}\">
        <div class=\"form-actions primary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"twofa\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_LOGIN.BTN_LOGIN'|t }}</button>
        </div>
    </div>

{% endblock %}

{% endembed %}
", "partials/login-twofa.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login-twofa.html.twig");
    }
}
