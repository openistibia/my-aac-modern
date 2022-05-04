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

/* account.create.js.html.twig */
class __TwigTemplate_c89a32617ce2cf05ee69a38541932a203e024c716f884a29ec3e5d124b0d6dd0 extends \Twig\Template
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
        echo "<script type=\"text/javascript\">
\tvar eventId = 0;
\tvar lastSend = 0;

\t\$(function() {
\t\tupdateFlag();
\t\t\$('#account_country').change(function() {
\t\t\tupdateFlag();
\t\t});

\t\t\$('#account_input').blur(function() {
\t\t\tcheckAccount();
\t\t});
\t\t\$('#email').blur(function() {
\t\t\tcheckEmail();
\t\t});
\t\t\$('#password').blur(function() {
\t\t\tcheckPassword();
\t\t});
\t\t\$('#password2').blur(function() {
\t\t\tcheckPassword();
\t\t});
\t});

\tfunction updateFlag()
\t{
\t\tvar img = \$('#account_country_img');
\t\tvar country = \$('#account_country :selected').val();
\t\tif(country.length) {
\t\t\timg.attr('src', 'images/flags/' + country + '.gif');
\t\t\timg.show();
\t\t}
\t\telse {
\t\t\timg.hide();
\t\t}
\t}

\tfunction checkAccount()
\t{
\t\tif(eventId != 0)
\t\t{
\t\t\tclearInterval(eventId)
\t\t\teventId = 0;
\t\t}

\t\tif(document.getElementById(\"account_input\").value == \"\")
\t\t{
\t\t\t\$('#account_error').html('Please enter account ";
        // line 48
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "name";
        } else {
            echo "number";
        }
        echo ".');
\t\t\t\$('#account_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#account_indicator').show();
\t\t\treturn;
\t\t}

\t\t//anti flood
\t\tvar date = new Date;
\t\tvar timeNow = parseInt(date.getTime());

\t\tif(lastSend != 0)
\t\t{
\t\t\tif(timeNow - lastSend < 1100)
\t\t\t{
\t\t\t\teventId = setInterval('checkAccount()', 1100)
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\tvar account = document.getElementById(\"account_input\").value;
\t\t\$.getJSON(\"tools/validate.php\", { account: account, uid: Math.random() },
\t\t\tfunction(data){
\t\t\t\tif(data.hasOwnProperty('success')) {
\t\t\t\t\t\$('#account_error').html ('');
\t\t\t\t\t\$('#account_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t}
\t\t\t\telse if(data.hasOwnProperty('error')) {
\t\t\t\t\t\$('#account_error').html(data.error);
\t\t\t\t\t\$('#account_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t}

\t\t\t\t\$('#account_indicator').show();
\t\t\t}
\t\t);

\t\tlastSend = timeNow;
\t}

\tfunction checkEmail()
\t{
\t\tif(eventId != 0)
\t\t{
\t\t\tclearInterval(eventId)
\t\t\teventId = 0;
\t\t}

\t\tif(document.getElementById(\"email\").value == \"\")
\t\t{
\t\t\t\$('#email_error').html('Please enter e-mail.');
\t\t\t\$('#email_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#email_indicator').show();
\t\t\treturn;
\t\t}

\t\t//anti flood
\t\tvar date = new Date;
\t\tvar timeNow = parseInt(date.getTime());

\t\tif(lastSend != 0)
\t\t{
\t\t\tif(timeNow - lastSend < 1100)
\t\t\t{
\t\t\t\teventId = setInterval('checkEmail()', 1100)
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\tvar email = document.getElementById(\"email\").value;
\t\t\$.getJSON(\"tools/validate.php\", { email: email, uid: Math.random() },
\t\t\tfunction(data){
\t\t\t\tif(data.hasOwnProperty('success')) {
\t\t\t\t\t\$('#email_error').html ('');
\t\t\t\t\t\$('#email_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t}
\t\t\t\telse if(data.hasOwnProperty('error')) {
\t\t\t\t\t\$('#email_error').html(data.error);
\t\t\t\t\t\$('#email_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t}

\t\t\t\t\$('#email_indicator').show();
\t\t\t}
\t\t);

\t\tlastSend = timeNow;
\t}

\tfunction checkPassword()
\t{
\t\tif(eventId != 0)
\t\t{
\t\t\tclearInterval(eventId)
\t\t\teventId = 0;
\t\t}

\t\tif(document.getElementById(\"password\").value == \"\")
\t\t{
\t\t\t\$('#password_error').html('Please enter the password for your new account.');
\t\t\t\$('#password_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#password_indicator').show();
\t\t\treturn;
\t\t}

\t\tif(document.getElementById(\"password2\").value == \"\")
\t\t{
\t\t\t\$('#password2_error').html('Please enter the password again!');
\t\t\t\$('#password2_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#password2_indicator').show();
\t\t\treturn;
\t\t}

\t\t//anti flood
\t\tvar date = new Date;
\t\tvar timeNow = parseInt(date.getTime());

\t\tif(lastSend != 0)
\t\t{
\t\t\tif(timeNow - lastSend < 1100)
\t\t\t{
\t\t\t\teventId = setInterval('checkPassword()', 1100)
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\tvar password = document.getElementById(\"password\").value;
\t\tvar password2 = document.getElementById(\"password2\").value;
\t\t\$.getJSON(\"tools/validate.php\", { password: password, password2: password2, uid: Math.random() },
\t\t\tfunction(data){
\t\t\t\tif(data.hasOwnProperty('success')) {
\t\t\t\t\t\$('#password_error').html ('');
\t\t\t\t\t\$('#password2_error').html ('');
\t\t\t\t\t\$('#password_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t\t\$('#password2_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t}
\t\t\t\telse if(data.hasOwnProperty('error')) {
\t\t\t\t\t\$('#password_error').html(data.error);
\t\t\t\t\t\$('#password2_error').html(data.error);
\t\t\t\t\t\$('#password_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t\t\$('#password2_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t}

\t\t\t\t\$('#password_indicator').show();
\t\t\t\t\$('#password2_indicator').show();
\t\t\t}
\t\t);

\t\tlastSend = timeNow;
\t}
</script>
";
    }

    public function getTemplateName()
    {
        return "account.create.js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 48,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
\tvar eventId = 0;
\tvar lastSend = 0;

\t\$(function() {
\t\tupdateFlag();
\t\t\$('#account_country').change(function() {
\t\t\tupdateFlag();
\t\t});

\t\t\$('#account_input').blur(function() {
\t\t\tcheckAccount();
\t\t});
\t\t\$('#email').blur(function() {
\t\t\tcheckEmail();
\t\t});
\t\t\$('#password').blur(function() {
\t\t\tcheckPassword();
\t\t});
\t\t\$('#password2').blur(function() {
\t\t\tcheckPassword();
\t\t});
\t});

\tfunction updateFlag()
\t{
\t\tvar img = \$('#account_country_img');
\t\tvar country = \$('#account_country :selected').val();
\t\tif(country.length) {
\t\t\timg.attr('src', 'images/flags/' + country + '.gif');
\t\t\timg.show();
\t\t}
\t\telse {
\t\t\timg.hide();
\t\t}
\t}

\tfunction checkAccount()
\t{
\t\tif(eventId != 0)
\t\t{
\t\t\tclearInterval(eventId)
\t\t\teventId = 0;
\t\t}

\t\tif(document.getElementById(\"account_input\").value == \"\")
\t\t{
\t\t\t\$('#account_error').html('Please enter account {% if constant('USE_ACCOUNT_NAME') %}name{% else %}number{% endif %}.');
\t\t\t\$('#account_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#account_indicator').show();
\t\t\treturn;
\t\t}

\t\t//anti flood
\t\tvar date = new Date;
\t\tvar timeNow = parseInt(date.getTime());

\t\tif(lastSend != 0)
\t\t{
\t\t\tif(timeNow - lastSend < 1100)
\t\t\t{
\t\t\t\teventId = setInterval('checkAccount()', 1100)
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\tvar account = document.getElementById(\"account_input\").value;
\t\t\$.getJSON(\"tools/validate.php\", { account: account, uid: Math.random() },
\t\t\tfunction(data){
\t\t\t\tif(data.hasOwnProperty('success')) {
\t\t\t\t\t\$('#account_error').html ('');
\t\t\t\t\t\$('#account_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t}
\t\t\t\telse if(data.hasOwnProperty('error')) {
\t\t\t\t\t\$('#account_error').html(data.error);
\t\t\t\t\t\$('#account_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t}

\t\t\t\t\$('#account_indicator').show();
\t\t\t}
\t\t);

\t\tlastSend = timeNow;
\t}

\tfunction checkEmail()
\t{
\t\tif(eventId != 0)
\t\t{
\t\t\tclearInterval(eventId)
\t\t\teventId = 0;
\t\t}

\t\tif(document.getElementById(\"email\").value == \"\")
\t\t{
\t\t\t\$('#email_error').html('Please enter e-mail.');
\t\t\t\$('#email_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#email_indicator').show();
\t\t\treturn;
\t\t}

\t\t//anti flood
\t\tvar date = new Date;
\t\tvar timeNow = parseInt(date.getTime());

\t\tif(lastSend != 0)
\t\t{
\t\t\tif(timeNow - lastSend < 1100)
\t\t\t{
\t\t\t\teventId = setInterval('checkEmail()', 1100)
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\tvar email = document.getElementById(\"email\").value;
\t\t\$.getJSON(\"tools/validate.php\", { email: email, uid: Math.random() },
\t\t\tfunction(data){
\t\t\t\tif(data.hasOwnProperty('success')) {
\t\t\t\t\t\$('#email_error').html ('');
\t\t\t\t\t\$('#email_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t}
\t\t\t\telse if(data.hasOwnProperty('error')) {
\t\t\t\t\t\$('#email_error').html(data.error);
\t\t\t\t\t\$('#email_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t}

\t\t\t\t\$('#email_indicator').show();
\t\t\t}
\t\t);

\t\tlastSend = timeNow;
\t}

\tfunction checkPassword()
\t{
\t\tif(eventId != 0)
\t\t{
\t\t\tclearInterval(eventId)
\t\t\teventId = 0;
\t\t}

\t\tif(document.getElementById(\"password\").value == \"\")
\t\t{
\t\t\t\$('#password_error').html('Please enter the password for your new account.');
\t\t\t\$('#password_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#password_indicator').show();
\t\t\treturn;
\t\t}

\t\tif(document.getElementById(\"password2\").value == \"\")
\t\t{
\t\t\t\$('#password2_error').html('Please enter the password again!');
\t\t\t\$('#password2_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#password2_indicator').show();
\t\t\treturn;
\t\t}

\t\t//anti flood
\t\tvar date = new Date;
\t\tvar timeNow = parseInt(date.getTime());

\t\tif(lastSend != 0)
\t\t{
\t\t\tif(timeNow - lastSend < 1100)
\t\t\t{
\t\t\t\teventId = setInterval('checkPassword()', 1100)
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\tvar password = document.getElementById(\"password\").value;
\t\tvar password2 = document.getElementById(\"password2\").value;
\t\t\$.getJSON(\"tools/validate.php\", { password: password, password2: password2, uid: Math.random() },
\t\t\tfunction(data){
\t\t\t\tif(data.hasOwnProperty('success')) {
\t\t\t\t\t\$('#password_error').html ('');
\t\t\t\t\t\$('#password2_error').html ('');
\t\t\t\t\t\$('#password_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t\t\$('#password2_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t}
\t\t\t\telse if(data.hasOwnProperty('error')) {
\t\t\t\t\t\$('#password_error').html(data.error);
\t\t\t\t\t\$('#password2_error').html(data.error);
\t\t\t\t\t\$('#password_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t\t\$('#password2_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t}

\t\t\t\t\$('#password_indicator').show();
\t\t\t\t\$('#password2_indicator').show();
\t\t\t}
\t\t);

\t\tlastSend = timeNow;
\t}
</script>
", "account.create.js.html.twig", "C:\\xampp\\htdocs\\system\\templates\\account.create.js.html.twig");
    }
}
