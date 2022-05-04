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

/* news.tickers.html.twig */
class __TwigTemplate_a24742944f8139266ecc1013326fc8e4e71bd364b565e9de96dcdfda752c756a extends \Twig\Template
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
        echo "    <div class=\"my-3 p-3 bg-white rounded box-shadow\">
      <h6 class=\"border-bottom border-gray pb-2 mb-0\">Ankrahmun Updates</h6>
      <div class=\"media text-muted pt-3\">
        <img data-src=\"holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1\" alt=\"\" class=\"mr-2 rounded\">
        <div class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
          <div class=\"d-flex justify-content-between align-items-center w-100\">
            <strong class=\"text-gray-dark\">          <span class=\"d-block\">";
        // line 7
        echo $this->getAttribute(($context["ticker"] ?? null), "body", []);
        echo "</span>
</strong>
            <td style=\"width: 80px;\">";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ticker"] ?? null), "date", []), "j M Y"), "html", null, true);
        echo "</td>
          </div>
          <span class=\"d-block\">
          \t  \t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tickers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticker"]) {
            // line 13
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
            echo "\">
\t\t<td style=\"width: 16px;\"><img src=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/news/icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "icon", []), "html", null, true);
            echo "_small.gif\"/></td>
\t\t<td>";
            // line 15
            echo $this->getAttribute($context["ticker"], "body", []);
            echo "</td>
\t</tr>
";
            // line 17
            $context["i"] = (($context["i"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "          </span>
        </div>
      </div>


";
    }

    public function getTemplateName()
    {
        return "news.tickers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  69 => 17,  64 => 15,  58 => 14,  53 => 13,  49 => 12,  43 => 9,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"my-3 p-3 bg-white rounded box-shadow\">
      <h6 class=\"border-bottom border-gray pb-2 mb-0\">Ankrahmun Updates</h6>
      <div class=\"media text-muted pt-3\">
        <img data-src=\"holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1\" alt=\"\" class=\"mr-2 rounded\">
        <div class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
          <div class=\"d-flex justify-content-between align-items-center w-100\">
            <strong class=\"text-gray-dark\">          <span class=\"d-block\">{{ ticker.body|raw }}</span>
</strong>
            <td style=\"width: 80px;\">{{ ticker.date|date(\"j M Y\") }}</td>
          </div>
          <span class=\"d-block\">
          \t  \t{% for ticker in tickers %}
\t<tr bgcolor=\"{{ getStyle(i) }}\">
\t\t<td style=\"width: 16px;\"><img src=\"{{ template_path }}/images/news/icon_{{ ticker.icon }}_small.gif\"/></td>
\t\t<td>{{ ticker.body|raw }}</td>
\t</tr>
{% set i = i + 1 %}
{% endfor %}
          </span>
        </div>
      </div>


", "news.tickers.html.twig", "C:\\xampp\\htdocs\\system\\templates\\news.tickers.html.twig");
    }
}
