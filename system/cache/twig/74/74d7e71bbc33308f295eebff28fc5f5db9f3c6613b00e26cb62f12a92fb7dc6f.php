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

/* install.license.html.twig */
class __TwigTemplate_5294c700faa2dd6c37b00b7ea44bce30b7c68f44d62f9c89ada92afd3fdff132 extends \Twig\Template
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
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "install/\" method=\"post\">
\t<input type=\"hidden\" name=\"step\" id=\"step\" value=\"requirements\" />
\t<textarea rows=\"10\" cols=\"80\" readonly=\"1\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["license"] ?? null), "html", null, true);
        echo "</textarea>

\t";
        // line 5
        echo ($context["buttons"] ?? null);
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "install.license.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "install.license.html.twig", "C:\\xampp\\htdocs\\system\\templates\\install.license.html.twig");
    }
}
