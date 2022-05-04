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

/* serverinfo.html.twig */
class __TwigTemplate_ca98bdc4949ded1558a17fdf761798d1b6cb249310bc746aca48d0df4be40240 extends \Twig\Template
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
        echo "<div style=\"position:center\" class=\"card\">
  <div class=\"card-body\">
    <h5 style=\"color:black\" align=\"center\" class=\"card-title\">Server: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "</h5>
    <h6 class=\"card-subtitle mb-2 text-muted\">
     ";
        // line 5
        if (($context["experienceStages"] ?? null)) {
            // line 6
            echo "        Experience stages: ";
            echo twig_escape_filter($this->env, ($context["experienceStages"] ?? null), "html", null, true);
            echo "<br>
     ";
        }
        // line 8
        echo "    </h6>
    <p align=\"left\" class=\"card-text\">Saiba de todas as Informações sobre o ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " Global.</p>
    <p align=\"left\" class=\"card-text\">Conheça nossa equipe e nosso comandos.</p>
    <p align=\"left\" class=\"card-text\">Sou programador e apaixonado por tibia, vou desenvolver este servidor porque, os jogadores de otserver merecem um produto de qualidade</p>
    <p align=\"left\" class=\"card-text\"> Conheça as minhas habilidades acessando meu Github e o Linkedin </p>

    <a style=\"color:black\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["commands"]), "html", null, true);
        echo "\" class=\"card-link\">Commands</a>
    <a style=\"color:black\" href=\"https://github.com/underewarrr\" class=\"card-link\">Quem é Rafhael Oliveira</a>
    <a style=\"color:black\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["team"]), "html", null, true);
        echo "\" class=\"card-link\">Team</a>
  </div>
</div>

<div class=\"card\" style=\"\">
  <div class=\"card-body\">
    <h5 style=\"color:black\" class=\"card-title\">Informações do servidor</h5>
    <h6 class=\"card-subtitle mb-2 text-muted\">Conheça um pouco mais o ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " server</h6>
    <p class=\"card-text\">
        <li class=\"list-group-item list-group-item-action\" >IP:<b>";
        // line 25
        echo twig_escape_filter($this->env, ($context["serverIp"] ?? null), "html", null, true);
        echo "</li>
        <li class=\"list-group-item list-group-item-action\" >Online: <b>24/7</b></li>
            ";
        // line 27
        if (($context["globalSaveHour"] ?? null)) {
            // line 28
            echo "        <li class=\"list-group-item list-group-item-action\" >Global save: <b>";
            echo twig_escape_filter($this->env, ($context["globalSaveHour"] ?? null), "html", null, true);
            echo ":00</b></li>
             ";
        }
        // line 30
        echo "        <li class=\"list-group-item list-group-item-action\" >World type: <b>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "worldType", [])), "html", null, true);
        echo " <i>(Protection level: ";
        echo twig_escape_filter($this->env, ($context["protectionLevel"] ?? null), "html", null, true);
        echo ")</i></b></li>
        <li class=\"list-group-item list-group-item-action\" >House rent: ";
        // line 31
        echo twig_escape_filter($this->env, ($context["houseRent"] ?? null), "html", null, true);
        echo ".</li>
            ";
        // line 32
        if (($context["houseOld"] ?? null)) {
            // line 33
            echo "        <li class=\"list-group-item list-group-item-action\" >Houses with inactive owners are cleaned after 30 days.</li>
            ";
        }
        // line 35
        echo "            ";
        if (($context["houseLevel"] ?? null)) {
            // line 36
            echo "         <li class=\"list-group-item list-group-item-action\">Houses: <b>";
            echo twig_escape_filter($this->env, ($context["houseLevel"] ?? null), "html", null, true);
            echo " level</b></li>
            ";
        }
        // line 38
        echo "         <li class=\"list-group-item list-group-item-action\">Create guild: <b>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "guild_need_level", []), "html", null, true);
        echo " level</b> </li>
   </div>
  </div>
  </div>
<div class=\"card\"\">
  <div class=\"card-body\">
    <h5 style=\"color:black\" align=\"center\" class=\"card-title\">Rates e Frags</h5>
    Conheça as taxas do servidor.
    <h6 class=\"card-subtitle mb-2 text-muted\">
        ";
        // line 47
        if ((isset($context["rateExp"]) || array_key_exists("rateExp", $context))) {
            // line 48
            echo "        <ul>
    <li class=\"list-group-item list-group-item-action\" >Exp Rate: <b>x";
            // line 49
            echo twig_escape_filter($this->env, ($context["rateExp"] ?? null), "html", null, true);
            echo "</b></li>
        ";
        }
        // line 51
        echo "        ";
        if (($context["rateExpFromPlayers"] ?? null)) {
            // line 52
            echo "    <li class=\"list-group-item list-group-item-action\" >Exp Rate from Players: <b>x";
            echo twig_escape_filter($this->env, ($context["rateExpFromPlayers"] ?? null), "html", null, true);
            echo "</b></li>
        ";
        }
        // line 54
        echo "        ";
        if ((isset($context["rateMagic"]) || array_key_exists("rateMagic", $context))) {
            // line 55
            echo "    <li class=\"list-group-item list-group-item-action\">Magic Level: <b>x";
            echo twig_escape_filter($this->env, ($context["rateMagic"] ?? null), "html", null, true);
            echo "</b></li>
         ";
        }
        // line 57
        echo "         ";
        if ((isset($context["rateSkill"]) || array_key_exists("rateSkill", $context))) {
            // line 58
            echo "    <li class=\"list-group-item list-group-item-action\">Skills: <b>x";
            echo twig_escape_filter($this->env, ($context["rateSkill"] ?? null), "html", null, true);
            echo "</b></li>
        ";
        }
        // line 60
        echo "        ";
        if ((isset($context["rateLoot"]) || array_key_exists("rateLoot", $context))) {
            // line 61
            echo "    <li class=\"list-group-item list-group-item-action\">Loot: <b>x";
            echo twig_escape_filter($this->env, ($context["rateLoot"] ?? null), "html", null, true);
            echo "</b></li>
        ";
        }
        // line 63
        echo "        ";
        if ((isset($context["rateSpawn"]) || array_key_exists("rateSpawn", $context))) {
            // line 64
            echo "    <li class=\"list-group-item list-group-item-action\">Spawn: <b>x";
            echo twig_escape_filter($this->env, ($context["rateSpawn"] ?? null), "html", null, true);
            echo "</b></li>
        ";
        }
        // line 66
        echo "           <li class=\"list-group-item list-group-item-action\">PZ Lock: <b>";
        echo twig_escape_filter($this->env, (($context["pzLocked"] ?? null) / (60 * 1000)), "html", null, true);
        echo " min</b></li>
    ";
        // line 67
        if (($context["whiteSkullTime"] ?? null)) {
            // line 68
            echo "        <li class=\"list-group-item list-group-item-action\">White Skull Time: <b>";
            echo twig_escape_filter($this->env, ($context["whiteSkullTime"] ?? null), "html", null, true);
            echo " min</b></li>
    ";
        }
        // line 70
        echo "        <li class=\"list-group-item list-group-item-action\">Red skull length: <b>";
        echo twig_escape_filter($this->env, (($context["redSkullLength"] ?? null) / ((24 * 60) * 60)), "html", null, true);
        echo " days</b></li>
    ";
        // line 71
        if (($context["blackSkull"] ?? null)) {
            // line 72
            echo "        <li class=\"list-group-item list-group-item-action\">Black skull length: <b>";
            echo twig_escape_filter($this->env, (($context["blackSkullLength"] ?? null) / ((24 * 60) * 60)), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 74
        echo "\t";
        if ((isset($context["killsToRedSkull"]) || array_key_exists("killsToRedSkull", $context))) {
            // line 75
            echo "        <li class=\"list-group-item list-group-item-action\">Kills to red skull: <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "killsToRedSkull", []), "html", null, true);
            echo "</b></li>
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 76
($context["config"] ?? null), "lua", [], "any", false, true), "dailyFragsToRedSkull", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", [], "any", false, true), "kills_per_day_red_skull", [], "any", true, true))) {
            // line 77
            echo "        <li class=\"list-group-item list-group-item-action\">
        </ul>
        <h3>Red skull</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">";
            // line 81
            echo twig_escape_filter($this->env, ($context["dailyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags daily</li>
                <li class=\"list-group-item list-group-item-action\">";
            // line 82
            echo twig_escape_filter($this->env, ($context["weeklyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">";
            // line 83
            echo twig_escape_filter($this->env, ($context["monthlyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags monthly</li>
        </ul>
        ";
            // line 85
            if (((($context["blackSkull"] ?? null) && $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", [], "any", false, true), "dailyFragsToBlackSkull", [], "any", true, true)) || $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", [], "any", false, true), "kills_per_day_black_skull", [], "any", true, true))) {
                // line 86
                echo "        <h3>Black skull</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">";
                // line 88
                echo twig_escape_filter($this->env, ($context["dailyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags daily</li>
                <li class=\"list-group-item list-group-item-action\">";
                // line 89
                echo twig_escape_filter($this->env, ($context["weeklyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">";
                // line 90
                echo twig_escape_filter($this->env, ($context["monthlyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags monthly</li>
        </ul>
        ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 92
($context["config"] ?? null), "lua", [], "any", false, true), "dailyFragsToBanishment", [], "any", true, true)) {
                // line 93
                echo "        <h3>Banishment</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "dailyFragsToBanishment", []), "html", null, true);
                echo " frags daily</li>
                <li class=\"list-group-item list-group-item-action\">";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "weeklyFragsToBanishment", []), "html", null, true);
                echo " frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "monthlyFragsToBanishment", []), "html", null, true);
                echo " frags monthly</li>
        </ul>
        ";
            }
            // line 100
            echo "    </li>
    ";
        }
        // line 102
        echo "    ";
        if (($context["banishmentLength"] ?? null)) {
            // line 103
            echo "        <li class=\"list-group-item list-group-item-action\">Banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["banishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 105
        echo "\t";
        if (($context["finalBanishmentLength"] ?? null)) {
            // line 106
            echo "        <li class=\"list-group-item list-group-item-action\">Final banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["finalBanishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 108
        echo "\t";
        if (($context["ipBanishmentLength"] ?? null)) {
            // line 109
            echo "        <li class=\"list-group-item list-group-item-action\">IP banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["ipBanishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 111
        echo "  </div>
</div>
    <h2 align=\"center\" style=\"color:black\">Frags & Skull system</h2>
        <li class=\"list-group-item list-group-item-action\">PZ Lock: <b>";
        // line 114
        echo twig_escape_filter($this->env, (($context["pzLocked"] ?? null) / (60 * 1000)), "html", null, true);
        echo " min</b></li>
    ";
        // line 115
        if (($context["whiteSkullTime"] ?? null)) {
            // line 116
            echo "        <li class=\"list-group-item list-group-item-action\">White Skull Time: <b>";
            echo twig_escape_filter($this->env, ($context["whiteSkullTime"] ?? null), "html", null, true);
            echo " min</b></li>
    ";
        }
        // line 118
        echo "        <li class=\"list-group-item list-group-item-action\">Red skull length: <b>";
        echo twig_escape_filter($this->env, (($context["redSkullLength"] ?? null) / ((24 * 60) * 60)), "html", null, true);
        echo " days</b></li>
    ";
        // line 119
        if (($context["blackSkull"] ?? null)) {
            // line 120
            echo "        <li class=\"list-group-item list-group-item-action\">Black skull length: <b>";
            echo twig_escape_filter($this->env, (($context["blackSkullLength"] ?? null) / ((24 * 60) * 60)), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 122
        echo "\t";
        if ((isset($context["killsToRedSkull"]) || array_key_exists("killsToRedSkull", $context))) {
            // line 123
            echo "        <li class=\"list-group-item list-group-item-action\">Kills to red skull: <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "killsToRedSkull", []), "html", null, true);
            echo "</b></li>
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 124
($context["config"] ?? null), "lua", [], "any", false, true), "dailyFragsToRedSkull", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", [], "any", false, true), "kills_per_day_red_skull", [], "any", true, true))) {
            // line 125
            echo "        <li class=\"list-group-item list-group-item-action\">
        <h3>Red skull</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">";
            // line 128
            echo twig_escape_filter($this->env, ($context["dailyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags daily</li>
                <li class=\"list-group-item list-group-item-action\">";
            // line 129
            echo twig_escape_filter($this->env, ($context["weeklyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">";
            // line 130
            echo twig_escape_filter($this->env, ($context["monthlyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags monthly</li>
        </ul>
        ";
            // line 132
            if (((($context["blackSkull"] ?? null) && $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", [], "any", false, true), "dailyFragsToBlackSkull", [], "any", true, true)) || $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", [], "any", false, true), "kills_per_day_black_skull", [], "any", true, true))) {
                // line 133
                echo "        <h3>Black skull</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">";
                // line 135
                echo twig_escape_filter($this->env, ($context["dailyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags daily</li>
                <li class=\"list-group-item list-group-item-action\">";
                // line 136
                echo twig_escape_filter($this->env, ($context["weeklyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">";
                // line 137
                echo twig_escape_filter($this->env, ($context["monthlyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags monthly</li>
        </ul>
        ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 139
($context["config"] ?? null), "lua", [], "any", false, true), "dailyFragsToBanishment", [], "any", true, true)) {
                // line 140
                echo "        <h3>Banishment</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "dailyFragsToBanishment", []), "html", null, true);
                echo " frags daily</li>
                <li class=\"list-group-item list-group-item-action\">";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "weeklyFragsToBanishment", []), "html", null, true);
                echo " frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "monthlyFragsToBanishment", []), "html", null, true);
                echo " frags monthly</li>
        </ul>
        ";
            }
            // line 147
            echo "    </li>
    ";
        }
        // line 149
        echo "    ";
        if (($context["banishmentLength"] ?? null)) {
            // line 150
            echo "        <li class=\"list-group-item list-group-item-action\">Banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["banishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 152
        echo "\t";
        if (($context["finalBanishmentLength"] ?? null)) {
            // line 153
            echo "        <li class=\"list-group-item list-group-item-action\">Final banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["finalBanishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 155
        echo "\t";
        if (($context["ipBanishmentLength"] ?? null)) {
            // line 156
            echo "        <li class=\"list-group-item list-group-item-action\">IP banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["ipBanishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 158
        echo "    <br>
    </div>
</div>

    <h2>Other</h2>
        <li class=\"list-group-item list-group-item-action\">Respect our <a href=\"";
        // line 163
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["rules"]), "html", null, true);
        echo "\">rules</a>.</li>
        <li class=\"list-group-item list-group-item-action\">Please report rule violations (Botters, players breaking rules etc) with <b>CTRL + R</b>.</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "serverinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 163,  438 => 158,  432 => 156,  429 => 155,  423 => 153,  420 => 152,  414 => 150,  411 => 149,  407 => 147,  401 => 144,  397 => 143,  393 => 142,  389 => 140,  387 => 139,  382 => 137,  378 => 136,  374 => 135,  370 => 133,  368 => 132,  363 => 130,  359 => 129,  355 => 128,  350 => 125,  348 => 124,  343 => 123,  340 => 122,  334 => 120,  332 => 119,  327 => 118,  321 => 116,  319 => 115,  315 => 114,  310 => 111,  304 => 109,  301 => 108,  295 => 106,  292 => 105,  286 => 103,  283 => 102,  279 => 100,  273 => 97,  269 => 96,  265 => 95,  261 => 93,  259 => 92,  254 => 90,  250 => 89,  246 => 88,  242 => 86,  240 => 85,  235 => 83,  231 => 82,  227 => 81,  221 => 77,  219 => 76,  214 => 75,  211 => 74,  205 => 72,  203 => 71,  198 => 70,  192 => 68,  190 => 67,  185 => 66,  179 => 64,  176 => 63,  170 => 61,  167 => 60,  161 => 58,  158 => 57,  152 => 55,  149 => 54,  143 => 52,  140 => 51,  135 => 49,  132 => 48,  130 => 47,  117 => 38,  111 => 36,  108 => 35,  104 => 33,  102 => 32,  98 => 31,  91 => 30,  85 => 28,  83 => 27,  78 => 25,  73 => 23,  63 => 16,  58 => 14,  50 => 9,  47 => 8,  41 => 6,  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"position:center\" class=\"card\">
  <div class=\"card-body\">
    <h5 style=\"color:black\" align=\"center\" class=\"card-title\">Server: {{ config.lua.serverName }}</h5>
    <h6 class=\"card-subtitle mb-2 text-muted\">
     {%  if experienceStages %}
        Experience stages: {{ experienceStages }}<br>
     {%  endif %}
    </h6>
    <p align=\"left\" class=\"card-text\">Saiba de todas as Informações sobre o {{config.lua.serverName}} Global.</p>
    <p align=\"left\" class=\"card-text\">Conheça nossa equipe e nosso comandos.</p>
    <p align=\"left\" class=\"card-text\">Sou programador e apaixonado por tibia, vou desenvolver este servidor porque, os jogadores de otserver merecem um produto de qualidade</p>
    <p align=\"left\" class=\"card-text\"> Conheça as minhas habilidades acessando meu Github e o Linkedin </p>

    <a style=\"color:black\" href=\"{{ getLink('commands') }}\" class=\"card-link\">Commands</a>
    <a style=\"color:black\" href=\"https://github.com/underewarrr\" class=\"card-link\">Quem é Rafhael Oliveira</a>
    <a style=\"color:black\" href=\"{{ getLink('team') }}\" class=\"card-link\">Team</a>
  </div>
</div>

<div class=\"card\" style=\"\">
  <div class=\"card-body\">
    <h5 style=\"color:black\" class=\"card-title\">Informações do servidor</h5>
    <h6 class=\"card-subtitle mb-2 text-muted\">Conheça um pouco mais o {{ config.lua.serverName }} server</h6>
    <p class=\"card-text\">
        <li class=\"list-group-item list-group-item-action\" >IP:<b>{{ serverIp }}</li>
        <li class=\"list-group-item list-group-item-action\" >Online: <b>24/7</b></li>
            {%  if globalSaveHour %}
        <li class=\"list-group-item list-group-item-action\" >Global save: <b>{{ globalSaveHour }}:00</b></li>
             {%  endif %}
        <li class=\"list-group-item list-group-item-action\" >World type: <b>{{ config.lua.worldType|upper }} <i>(Protection level: {{ protectionLevel }})</i></b></li>
        <li class=\"list-group-item list-group-item-action\" >House rent: {{ houseRent }}.</li>
            {%  if houseOld %}
        <li class=\"list-group-item list-group-item-action\" >Houses with inactive owners are cleaned after 30 days.</li>
            {%  endif %}
            {%  if houseLevel %}
         <li class=\"list-group-item list-group-item-action\">Houses: <b>{{ houseLevel }} level</b></li>
            {%  endif %}
         <li class=\"list-group-item list-group-item-action\">Create guild: <b>{{ config.guild_need_level }} level</b> </li>
   </div>
  </div>
  </div>
<div class=\"card\"\">
  <div class=\"card-body\">
    <h5 style=\"color:black\" align=\"center\" class=\"card-title\">Rates e Frags</h5>
    Conheça as taxas do servidor.
    <h6 class=\"card-subtitle mb-2 text-muted\">
        {%  if rateExp is defined %}
        <ul>
    <li class=\"list-group-item list-group-item-action\" >Exp Rate: <b>x{{ rateExp }}</b></li>
        {%  endif %}
        {%  if rateExpFromPlayers %}
    <li class=\"list-group-item list-group-item-action\" >Exp Rate from Players: <b>x{{ rateExpFromPlayers }}</b></li>
        {%  endif %}
        {%  if rateMagic is defined %}
    <li class=\"list-group-item list-group-item-action\">Magic Level: <b>x{{ rateMagic }}</b></li>
         {%  endif %}
         {%  if rateSkill is defined %}
    <li class=\"list-group-item list-group-item-action\">Skills: <b>x{{ rateSkill }}</b></li>
        {% endif %}
        {%  if rateLoot is defined %}
    <li class=\"list-group-item list-group-item-action\">Loot: <b>x{{ rateLoot }}</b></li>
        {%  endif %}
        {%  if rateSpawn is defined %}
    <li class=\"list-group-item list-group-item-action\">Spawn: <b>x{{ rateSpawn }}</b></li>
        {%  endif %}
           <li class=\"list-group-item list-group-item-action\">PZ Lock: <b>{{ pzLocked / (60 * 1000) }} min</b></li>
    {%  if whiteSkullTime %}
        <li class=\"list-group-item list-group-item-action\">White Skull Time: <b>{{ whiteSkullTime }} min</b></li>
    {%  endif %}
        <li class=\"list-group-item list-group-item-action\">Red skull length: <b>{{ redSkullLength / (24 * 60 * 60) }} days</b></li>
    {% if blackSkull %}
        <li class=\"list-group-item list-group-item-action\">Black skull length: <b>{{ blackSkullLength / (24 * 60 * 60) }} days</b></li>
    {%  endif %}
\t{% if killsToRedSkull is defined %}
        <li class=\"list-group-item list-group-item-action\">Kills to red skull: <b>{{ config.lua.killsToRedSkull }}</b></li>
    {%  elseif config.lua.dailyFragsToRedSkull is defined or config.lua.kills_per_day_red_skull is defined %}
        <li class=\"list-group-item list-group-item-action\">
        </ul>
        <h3>Red skull</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">{{ dailyFragsToRedSkull }} frags daily</li>
                <li class=\"list-group-item list-group-item-action\">{{ weeklyFragsToRedSkull }} frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">{{ monthlyFragsToRedSkull }} frags monthly</li>
        </ul>
        {% if blackSkull and config.lua.dailyFragsToBlackSkull is defined or config.lua.kills_per_day_black_skull is defined %}
        <h3>Black skull</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">{{ dailyFragsToBlackSkull }} frags daily</li>
                <li class=\"list-group-item list-group-item-action\">{{ weeklyFragsToBlackSkull }} frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">{{ monthlyFragsToBlackSkull }} frags monthly</li>
        </ul>
        {% elseif config.lua.dailyFragsToBanishment is defined %}
        <h3>Banishment</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">{{ config.lua.dailyFragsToBanishment }} frags daily</li>
                <li class=\"list-group-item list-group-item-action\">{{ config.lua.weeklyFragsToBanishment }} frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">{{ config.lua.monthlyFragsToBanishment }} frags monthly</li>
        </ul>
        {% endif %}
    </li>
    {% endif %}
    {% if banishmentLength %}
        <li class=\"list-group-item list-group-item-action\">Banishment length: <b>{{ banishmentLength }} days</b></li>
    {% endif %}
\t{% if finalBanishmentLength %}
        <li class=\"list-group-item list-group-item-action\">Final banishment length: <b>{{ finalBanishmentLength }} days</b></li>
    {% endif %}
\t{% if ipBanishmentLength %}
        <li class=\"list-group-item list-group-item-action\">IP banishment length: <b>{{ ipBanishmentLength }} days</b></li>
    {% endif %}
  </div>
</div>
    <h2 align=\"center\" style=\"color:black\">Frags & Skull system</h2>
        <li class=\"list-group-item list-group-item-action\">PZ Lock: <b>{{ pzLocked / (60 * 1000) }} min</b></li>
    {%  if whiteSkullTime %}
        <li class=\"list-group-item list-group-item-action\">White Skull Time: <b>{{ whiteSkullTime }} min</b></li>
    {%  endif %}
        <li class=\"list-group-item list-group-item-action\">Red skull length: <b>{{ redSkullLength / (24 * 60 * 60) }} days</b></li>
    {% if blackSkull %}
        <li class=\"list-group-item list-group-item-action\">Black skull length: <b>{{ blackSkullLength / (24 * 60 * 60) }} days</b></li>
    {%  endif %}
\t{% if killsToRedSkull is defined %}
        <li class=\"list-group-item list-group-item-action\">Kills to red skull: <b>{{ config.lua.killsToRedSkull }}</b></li>
    {%  elseif config.lua.dailyFragsToRedSkull is defined or config.lua.kills_per_day_red_skull is defined %}
        <li class=\"list-group-item list-group-item-action\">
        <h3>Red skull</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">{{ dailyFragsToRedSkull }} frags daily</li>
                <li class=\"list-group-item list-group-item-action\">{{ weeklyFragsToRedSkull }} frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">{{ monthlyFragsToRedSkull }} frags monthly</li>
        </ul>
        {% if blackSkull and config.lua.dailyFragsToBlackSkull is defined or config.lua.kills_per_day_black_skull is defined %}
        <h3>Black skull</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">{{ dailyFragsToBlackSkull }} frags daily</li>
                <li class=\"list-group-item list-group-item-action\">{{ weeklyFragsToBlackSkull }} frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">{{ monthlyFragsToBlackSkull }} frags monthly</li>
        </ul>
        {% elseif config.lua.dailyFragsToBanishment is defined %}
        <h3>Banishment</h3>
        <ul>
                <li class=\"list-group-item list-group-item-action\">{{ config.lua.dailyFragsToBanishment }} frags daily</li>
                <li class=\"list-group-item list-group-item-action\">{{ config.lua.weeklyFragsToBanishment }} frags weekly</li>
                <li class=\"list-group-item list-group-item-action\">{{ config.lua.monthlyFragsToBanishment }} frags monthly</li>
        </ul>
        {% endif %}
    </li>
    {% endif %}
    {% if banishmentLength %}
        <li class=\"list-group-item list-group-item-action\">Banishment length: <b>{{ banishmentLength }} days</b></li>
    {% endif %}
\t{% if finalBanishmentLength %}
        <li class=\"list-group-item list-group-item-action\">Final banishment length: <b>{{ finalBanishmentLength }} days</b></li>
    {% endif %}
\t{% if ipBanishmentLength %}
        <li class=\"list-group-item list-group-item-action\">IP banishment length: <b>{{ ipBanishmentLength }} days</b></li>
    {% endif %}
    <br>
    </div>
</div>

    <h2>Other</h2>
        <li class=\"list-group-item list-group-item-action\">Respect our <a href=\"{{ getLink('rules') }}\">rules</a>.</li>
        <li class=\"list-group-item list-group-item-action\">Please report rule violations (Botters, players breaking rules etc) with <b>CTRL + R</b>.</li>
</ul>", "serverinfo.html.twig", "C:\\xampp\\htdocs\\system\\templates\\serverinfo.html.twig");
    }
}
