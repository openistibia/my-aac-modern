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

/* news.html.twig */
class __TwigTemplate_bd347df98e58ba363d7c320b47043f19af8efa568875288265e0850b808e48b9 extends \Twig\Template
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
        echo "<table class=\"table\" style=\"clear:both\" border=0 cellpadding=0 cellspacing=0 width=\"100%\" >
\t<tr>
\t\t<th width=\"15%\">";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), $this->getAttribute(($context["config"] ?? null), "news_date_format", [])), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</th>
\t\t";
        // line 5
        if ( !twig_test_empty(($context["author"] ?? null))) {
            // line 6
            echo "\t\t<th style=\"text-align: right\" width=\"30%\"><b>Author: </b><i>";
            echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
            echo "</i></th>
\t\t";
        }
        // line 8
        echo "\t</tr>
\t<tr>
\t\t<td colspan=\"3\" style=\"padding-left:10px;padding-right:10px;\" >";
        // line 10
        echo ($context["content"] ?? null);
        echo "</td>
\t</tr>
\t";
        // line 12
        if ( !(null === ($context["comments"] ?? null))) {
            // line 13
            echo "\t<tr>
\t\t<td colspan=\"3\">
\t\t\t<div style=\"text-align: right; margin-right: 10px;\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["comments"] ?? null), "html", null, true);
            echo "\">» Comment on this news</a></div>
\t\t</td>
\t</tr>
\t";
        }
        // line 19
        echo "\t</table>
<br/>";
    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  65 => 15,  61 => 13,  59 => 12,  54 => 10,  50 => 8,  44 => 6,  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table\" style=\"clear:both\" border=0 cellpadding=0 cellspacing=0 width=\"100%\" >
\t<tr>
\t\t<th width=\"15%\">{{ date|date(config.news_date_format) }}</th>
\t\t<th>{{ title }}</th>
\t\t{% if author is not empty %}
\t\t<th style=\"text-align: right\" width=\"30%\"><b>Author: </b><i>{{ author }}</i></th>
\t\t{% endif %}
\t</tr>
\t<tr>
\t\t<td colspan=\"3\" style=\"padding-left:10px;padding-right:10px;\" >{{ content|raw }}</td>
\t</tr>
\t{% if comments is not null %}
\t<tr>
\t\t<td colspan=\"3\">
\t\t\t<div style=\"text-align: right; margin-right: 10px;\"><a href=\"{{ comments }}\">» Comment on this news</a></div>
\t\t</td>
\t</tr>
\t{% endif %}
\t</table>
<br/>", "news.html.twig", "C:\\xampp\\htdocs\\templates\\ShadowCores\\news.html.twig");
    }
}
