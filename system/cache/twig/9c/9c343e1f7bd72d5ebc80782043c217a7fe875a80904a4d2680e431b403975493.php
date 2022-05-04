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

/* account.welcome_mail.html.twig */
class __TwigTemplate_173be77601efe7530e9d16705b168f24b9339f0c50eb7d30145d399a45212a9a extends \Twig\Template
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
        echo "<h3>Dear player,</h3>
<p>Thanks for your registration at <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "\"><b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "</b></a></p>
<br/><br/>
Your login details:
<p>Account ";
        // line 5
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "name";
        } else {
            echo "number";
        }
        echo ": <b>";
        echo twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true);
        echo "</b></p>
<p>Password: <b>************</b> (hidden for security reasons)</p>
<p>Kind Regards,</p>";
    }

    public function getTemplateName()
    {
        return "account.welcome_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h3>Dear player,</h3>
<p>Thanks for your registration at <a href=\"{{ constant('BASE_URL') }}\"><b>{{ config.lua.serverName }}</b></a></p>
<br/><br/>
Your login details:
<p>Account {% if constant('USE_ACCOUNT_NAME') %}name{% else %}number{% endif %}: <b>{{ account }}</b></p>
<p>Password: <b>************</b> (hidden for security reasons)</p>
<p>Kind Regards,</p>", "account.welcome_mail.html.twig", "C:\\xampp\\htdocs\\system\\templates\\account.welcome_mail.html.twig");
    }
}
