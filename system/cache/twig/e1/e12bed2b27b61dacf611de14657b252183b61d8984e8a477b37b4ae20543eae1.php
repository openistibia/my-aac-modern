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

/* newcomer.html.twig */
class __TwigTemplate_76aa833710429fcefe81d44ae2a6ad8bf2897dcabf33ec8a0754c3db2211c789 extends \Twig\Template
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
        echo "<div id=\"NewcomerBox\" class=\"Themebox\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/themeboxes/newcomer/newcomerbox.gif);\">
\t<a class=\"ThemeboxButton\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/create"]), "html", null, true);
        echo "\" onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton.gif);\"><div class=\"BigButtonOver\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton_over.gif);\"></div><div class=\"ButtonText\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/_sbutton_jointibia.gif);\"></div>
\t</a>
\t<div class=\"Bottom\" style=\"background-image:url(";
        // line 4
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/box-bottom.gif);\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "newcomer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"NewcomerBox\" class=\"Themebox\" style=\"background-image:url({{ template_path }}/images/themeboxes/newcomer/newcomerbox.gif);\">
\t<a class=\"ThemeboxButton\" href=\"{{ getLink('account/create') }}\" onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\" style=\"background-image:url({{ template_path }}/images/global/buttons/sbutton.gif);\"><div class=\"BigButtonOver\" style=\"background-image:url({{ template_path }}/images/global/buttons/sbutton_over.gif);\"></div><div class=\"ButtonText\" style=\"background-image:url({{ template_path }}/images/global/buttons/_sbutton_jointibia.gif);\"></div>
\t</a>
\t<div class=\"Bottom\" style=\"background-image:url({{ template_path }}/images/general/box-bottom.gif);\"></div>
</div>
", "newcomer.html.twig", "C:\\xampp\\htdocs\\templates\\tibiacom\\boxes\\templates\\newcomer.html.twig");
    }
}
