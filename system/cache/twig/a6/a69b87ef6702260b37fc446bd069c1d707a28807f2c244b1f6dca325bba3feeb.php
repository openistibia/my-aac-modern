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

/* buttons.logout.html.twig */
class __TwigTemplate_8c656505b08a17a4d0f740ad6904ff4ed3f74be910c5c96a9b414ab056b8798e extends \Twig\Template
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
        $context["button_name"] = "Logout";
        // line 2
        $context["button_image"] = "_sbutton_logout";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.logout.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set button_name = 'Logout' %}
{% set button_image = '_sbutton_logout' %}
{% include('buttons.base.html.twig') %}", "buttons.logout.html.twig", "C:\\xampp\\htdocs\\templates\\tibiacom\\buttons.logout.html.twig");
    }
}
