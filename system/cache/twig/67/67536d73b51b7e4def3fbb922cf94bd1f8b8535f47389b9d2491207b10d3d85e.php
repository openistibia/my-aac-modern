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

/* buttons.base.html.twig */
class __TwigTemplate_262736d5c3aebdf3b7318333b2dfa137f64b1c3aa22c9bc7ba73ddbac7dcb021 extends \Twig\Template
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
        echo "<input type=\"submit\" name=\"";
        echo twig_escape_filter($this->env, ($context["button_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["button_name"] ?? null), "html", null, true);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "buttons.base.html.twig";
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
        return new Source("<input type=\"submit\" name=\"{{ button_name }}\" value=\"{{ button_name }}\" />", "buttons.base.html.twig", "C:\\xampp\\htdocs\\system\\templates\\buttons.base.html.twig");
    }
}
