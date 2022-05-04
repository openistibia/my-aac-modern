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

/* characters.form.html.twig */
class __TwigTemplate_dcb3c5f37a2a6d862435497ab84f0a53df490e9f7bfdcc51262a3cf155c5b151 extends \Twig\Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\" method=\"post\">
\t<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t\t<tr><td bgcolor=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
        echo "\" class=\"white\"><B>Search Character</B></TD></TR>
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo "\">
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Name:</td><td><input name=\"name\" value=\"\" size=\"29\" maxlength=\"29\"";
        // line 8
        if (($context["autofocus"] ?? null)) {
            echo " autofocus";
        }
        echo "></TD>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 10
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "characters.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  47 => 8,  41 => 5,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ link }}\" method=\"post\">
\t<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t\t<tr><td bgcolor=\"{{ config.vdarkborder }}\" class=\"white\"><B>Search Character</B></TD></TR>
\t\t<tr>
\t\t\t<td bgcolor=\"{{ config.darkborder }}\">
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Name:</td><td><input name=\"name\" value=\"\" size=\"29\" maxlength=\"29\"{% if autofocus %} autofocus{% endif %}></TD>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ include('buttons.submit.html.twig') }}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>", "characters.form.html.twig", "C:\\xampp\\htdocs\\system\\templates\\characters.form.html.twig");
    }
}
