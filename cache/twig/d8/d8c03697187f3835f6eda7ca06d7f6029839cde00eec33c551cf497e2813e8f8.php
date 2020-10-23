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

/* core/footer.html.twig */
class __TwigTemplate_7a839fd150feee0fd8148a7725d327892f6643bd885c9b48d51ac86fa6262599 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"site-footer background-black\">
    <div class=\"cell\">
        <div class=\"col\">
            <div class=\"col width-5of5\">
                <div class=\"col width-1of5\">
                    <div class=\"col\">
                        <div class=\"body\">
                            <div class=\"col\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col width-3of5\">
                    <div class=\"body\">
                        <div class=\"cell\">
                            <div class=\"col width-fit\">
                                <ul class=\"nav pipes\">
                                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "                                        ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 19
                echo "                                            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 22
                echo "                                            <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                                                <a href=\"";
                // line 23
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a>
                                                <span class=\"icon icon-16  icon-ellipsis-vertical\"></span>
                                            </li>
                                        ";
            }
            // line 27
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                       
                    </div>
                </div>
                <div class=\"col width-fill\">
                    <div class=\"col\">
                        <div class=\"body\">
                            <div class=\"col\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Closing two <div> tags below were originally opened in the header core element.-->
</div>
</div>
";
        // line 50
        $this->displayBlock('bottom', $context, $blocks);
        // line 51
        echo "</body>
<!--Closing <body> tag resides in the footer core element because the footer is still within the body of the HTML code.-->
</html>
";
    }

    // line 50
    public function block_bottom($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "core/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 50,  105 => 51,  103 => 50,  79 => 28,  73 => 27,  64 => 23,  59 => 22,  56 => 19,  53 => 18,  49 => 17,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"site-footer background-black\">
    <div class=\"cell\">
        <div class=\"col\">
            <div class=\"col width-5of5\">
                <div class=\"col width-1of5\">
                    <div class=\"col\">
                        <div class=\"body\">
                            <div class=\"col\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col width-3of5\">
                    <div class=\"body\">
                        <div class=\"cell\">
                            <div class=\"col width-fit\">
                                <ul class=\"nav pipes\">
                                    {% for page in pages.children %}
                                        {% if page.visible %}
                                            {% set current_page = (page.active or page.activeChild)
                                                ? 'active'
                                                : '' %}
                                            <li class=\"{{ current_page }}\">
                                                <a href=\"{{ page.url }}\">{{ page.menu }}</a>
                                                <span class=\"icon icon-16  icon-ellipsis-vertical\"></span>
                                            </li>
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                       
                    </div>
                </div>
                <div class=\"col width-fill\">
                    <div class=\"col\">
                        <div class=\"body\">
                            <div class=\"col\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Closing two <div> tags below were originally opened in the header core element.-->
</div>
</div>
{% block bottom %}{% endblock %}
</body>
<!--Closing <body> tag resides in the footer core element because the footer is still within the body of the HTML code.-->
</html>
", "core/footer.html.twig", "C:\\xampp\\htdocs\\trumpbot.xyz\\user\\themes\\cascade\\templates\\core\\footer.html.twig");
    }
}
