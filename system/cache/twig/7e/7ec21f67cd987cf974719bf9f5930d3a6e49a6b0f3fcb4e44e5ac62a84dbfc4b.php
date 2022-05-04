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

/* hint.html.twig */
class __TwigTemplate_8af3e880c4d5dcaeca1ec038d91d07a604ccdf99bfc7d97c367b5912942e0b20 extends \Twig\Template
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
        echo "To play on ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " you need an account.
All you have to do to create your new account is to enter an account ";
        // line 2
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "name";
        } else {
            echo "number";
        }
        echo ", password";
        if ($this->getAttribute(($context["config"] ?? null), "recaptcha_enabled", [])) {
            echo ", confirm reCAPTCHA";
        }
        if ($this->getAttribute(($context["config"] ?? null), "account_country", [])) {
            echo ", country";
        }
        echo " and your email address.
Also you have to agree to the terms presented below. If you have done so, your account ";
        // line 3
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "name";
        } else {
            echo "number";
        }
        echo " will be shown on the following page and your account password will be sent to your email address along with further instructions. If you do not receive the email with your password, please check your spam filter.<br/><br/>
";
    }

    public function getTemplateName()
    {
        return "hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("To play on {{ config.lua.serverName }} you need an account.
All you have to do to create your new account is to enter an account {% if constant('USE_ACCOUNT_NAME') %}name{% else %}number{% endif %}, password{% if config.recaptcha_enabled %}, confirm reCAPTCHA{% endif %}{% if config.account_country %}, country{% endif %} and your email address.
Also you have to agree to the terms presented below. If you have done so, your account {% if constant('USE_ACCOUNT_NAME') %}name{% else %}number{% endif %} will be shown on the following page and your account password will be sent to your email address along with further instructions. If you do not receive the email with your password, please check your spam filter.<br/><br/>
", "hint.html.twig", "C:\\xampp\\htdocs\\plugins\\account-create-hint\\hint.html.twig");
    }
}
