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
class __TwigTemplate_a078ffb33b586b8494ee2bf1f8dc3ba73c4e9c6946df5d4bcc89b9733c947455 extends \Twig\Template
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
        ob_start();
        // line 2
        echo "<div class=\"BigButton\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton.gif)\">
\t<div onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\">
\t\t<div class=\"BigButtonOver\" style=\"background-image:url(";
        // line 4
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton_over.gif);\" ></div>
\t\t<input class=\"ButtonText\" type=\"image\" name=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["button_name"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["button_name"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/";
        echo twig_escape_filter($this->env, ($context["button_image"] ?? null), "html", null, true);
        echo ".gif\" />
\t</div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return array (  42 => 5,  38 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
<div class=\"BigButton\" style=\"background-image:url({{ template_path }}/images/global/buttons/sbutton.gif)\">
\t<div onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\">
\t\t<div class=\"BigButtonOver\" style=\"background-image:url({{ template_path }}/images/global/buttons/sbutton_over.gif);\" ></div>
\t\t<input class=\"ButtonText\" type=\"image\" name=\"{{ button_name }}\" alt=\"{{ button_name }}\" src=\"{{ template_path }}/images/global/buttons/{{ button_image }}.gif\" />
\t</div>
</div>
{% endspaceless %}", "buttons.base.html.twig", "C:\\xampp\\htdocs\\templates\\tibiacom\\buttons.base.html.twig");
    }
}
