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

/* buttons.account_lost.html.twig */
class __TwigTemplate_40390d394f72a4c80cc0ae5390adcf2d41d879d9a81ad71da8b0a04cd66d2403 extends \Twig\Template
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
        $context["button_name"] = "Account lost?";
        // line 2
        $this->loadTemplate("buttons.base.html.twig", "buttons.account_lost.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.account_lost.html.twig";
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
        return new Source("{% set button_name = 'Account lost?' %}
{% include('buttons.base.html.twig') %}", "buttons.account_lost.html.twig", "C:\\xampp\\htdocs\\system\\templates\\buttons.account_lost.html.twig");
    }
}
