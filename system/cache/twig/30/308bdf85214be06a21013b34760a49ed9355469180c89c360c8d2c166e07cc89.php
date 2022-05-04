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
class __TwigTemplate_77711debaf097d824d1f7ed7522ca99bed42f99b5b55b82741f506453b39274b extends \Twig\Template
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
        echo "<div id=\"News\">
\t<div class=\"NewsHeadline\">
\t\t<div class=\"NewsHeadlineBackground\" style=\"background-image:url(";
        // line 3
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/news/newsheadline_background.gif)\">
\t\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/news/icon_";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo ".gif\" class=\"NewsHeadlineIcon\" />
\t\t\t<div class=\"NewsHeadlineDate\">";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), $this->getAttribute(($context["config"] ?? null), "news_date_format", [])), "html", null, true);
        echo " - </div>
\t\t\t<div class=\"NewsHeadlineText\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
\t\t\t";
        // line 7
        if ( !twig_test_empty(($context["author"] ?? null))) {
            // line 8
            echo "\t\t\t<div class=\"NewsHeadlineAuthor\"><b>Author: </b><i>";
            echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
            echo "</i></div>
\t\t\t";
        }
        // line 10
        echo "\t\t</div>
\t</div>
</div>
<table style=\"clear:both\" border=0 cellpadding=0 cellspacing=0 width=\"100%\" >
\t<tr>
\t\t<td style=\"padding-left:10px;padding-right:10px;\" >";
        // line 15
        echo ($context["content"] ?? null);
        echo "</td>
\t</tr>
\t";
        // line 17
        if ( !(null === ($context["comments"] ?? null))) {
            // line 18
            echo "\t<tr>
\t\t<td>
\t\t\t<div style=\"text-align: right; margin-right: 10px;\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["comments"] ?? null), "html", null, true);
            echo "\">» Comment on this news</a></div>
\t\t</td>
\t</tr>
\t";
        }
        // line 24
        echo "</table>
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
        return array (  85 => 24,  78 => 20,  74 => 18,  72 => 17,  67 => 15,  60 => 10,  54 => 8,  52 => 7,  48 => 6,  44 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"News\">
\t<div class=\"NewsHeadline\">
\t\t<div class=\"NewsHeadlineBackground\" style=\"background-image:url({{template_path }}/images/news/newsheadline_background.gif)\">
\t\t\t<img src=\"{{ template_path }}/images/news/icon_{{ icon }}.gif\" class=\"NewsHeadlineIcon\" />
\t\t\t<div class=\"NewsHeadlineDate\">{{ date|date(config.news_date_format) }} - </div>
\t\t\t<div class=\"NewsHeadlineText\">{{ title }}</div>
\t\t\t{% if author is not empty %}
\t\t\t<div class=\"NewsHeadlineAuthor\"><b>Author: </b><i>{{ author }}</i></div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
</div>
<table style=\"clear:both\" border=0 cellpadding=0 cellspacing=0 width=\"100%\" >
\t<tr>
\t\t<td style=\"padding-left:10px;padding-right:10px;\" >{{ content|raw }}</td>
\t</tr>
\t{% if comments is not null %}
\t<tr>
\t\t<td>
\t\t\t<div style=\"text-align: right; margin-right: 10px;\"><a href=\"{{ comments }}\">» Comment on this news</a></div>
\t\t</td>
\t</tr>
\t{% endif %}
</table>
<br/>", "news.html.twig", "C:\\xampp\\htdocs\\templates\\kathrine\\news.html.twig");
    }
}
