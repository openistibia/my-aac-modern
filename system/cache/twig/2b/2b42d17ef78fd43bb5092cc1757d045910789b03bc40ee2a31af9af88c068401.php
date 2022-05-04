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

/* buttons.delete_character.html.twig */
class __TwigTemplate_cf2e57da6e71a1f8c729adfe00feaa6c41d2afd46507ecc9489eadac4fa6b34b extends \Twig\Template
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
        $context["button_name"] = "Delete Character";
        // line 2
        $context["button_image"] = "_sbutton_deletecharacter";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.delete_character.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.delete_character.html.twig";
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
        return new Source("{% set button_name = 'Delete Character' %}
{% set button_image = '_sbutton_deletecharacter' %}
{% include('buttons.base.html.twig') %}", "buttons.delete_character.html.twig", "C:\\xampp\\htdocs\\templates\\tibiacom\\buttons.delete_character.html.twig");
    }
}
