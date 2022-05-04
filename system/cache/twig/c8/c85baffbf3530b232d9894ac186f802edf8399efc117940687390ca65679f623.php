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

/* buttons.back.html.twig */
class __TwigTemplate_4010ab273e015c47e8a111bf20c96fdb8feadadb4ac742c62cc584827f6e6de0 extends \Twig\Template
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
        $context["button_name"] = "Back";
        // line 2
        $this->loadTemplate("buttons.base.html.twig", "buttons.back.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set button_name = 'Back' %}
{% include('buttons.base.html.twig') %}", "buttons.back.html.twig", "C:\\xampp\\htdocs\\system\\templates\\buttons.back.html.twig");
    }
}
