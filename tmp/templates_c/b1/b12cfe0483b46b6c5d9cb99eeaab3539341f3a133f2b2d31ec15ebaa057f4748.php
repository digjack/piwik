<?php

/* @UserCountry/_updaterManage.twig */
class __TwigTemplate_566263979ac0c86830e13131cfc5d87a2fc4a1bc101f5614a4a61298e66a9de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"geoipdb-update-info\" ";
        if ( !(isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
    <p>";
        // line 2
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoIPUpdaterInstructions", "<a href=\"http://www.maxmind.com/en/download_files?rId=piwik\" _target=\"blank\">", "</a>", "<a href=\"http://www.maxmind.com/?rId=piwik\">", "</a>"));
        // line 3
        echo "
        <br/><br/>
";
        // line 5
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoLiteCityLink", (("<a href='" . (isset($context["geoLiteUrl"]) ? $context["geoLiteUrl"] : $this->getContext($context, "geoLiteUrl"))) . "'>"), (isset($context["geoLiteUrl"]) ? $context["geoLiteUrl"] : $this->getContext($context, "geoLiteUrl")), "</a>"));
        echo "
\t";
        // line 6
        if ((isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled"))) {
            // line 7
            echo "\t<br/><br/>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoIPUpdaterIntro")), "html", null, true);
            echo ":
\t";
        }
        // line 9
        echo "\t</p>
\t<table class=\"adminTable\" style=\"width:900px;\">
\t\t<tr>
\t\t\t<th>";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_GoalType")), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnDownloadURL")), "html", null, true);
        echo "</th>
\t\t\t<th></th>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_LocationDatabase")), "html", null, true);
        echo "</td>
\t\t\t<td><input type=\"text\" id=\"geoip-location-db\" value=\"";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["geoIPLocUrl"]) ? $context["geoIPLocUrl"] : $this->getContext($context, "geoIPLocUrl")), "html", null, true);
        echo "\"/></td>
\t\t\t<td width=\"164\">
\t\t\t\t<div class=\"form-help\">
\t\t\t\t\t";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_LocationDatabaseHint")), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_ISPDatabase")), "html", null, true);
        echo "</td>
\t\t\t<td><input type=\"text\" id=\"geoip-isp-db\" value=\"";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["geoIPIspUrl"]) ? $context["geoIPIspUrl"] : $this->getContext($context, "geoIPIspUrl")), "html", null, true);
        echo "\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_OrgDatabase")), "html", null, true);
        echo "</td>
\t\t\t<td><input type=\"text\" id=\"geoip-org-db\" value=\"";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["geoIPOrgUrl"]) ? $context["geoIPOrgUrl"] : $this->getContext($context, "geoIPOrgUrl")), "html", null, true);
        echo "\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">";
        // line 34
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_DownloadNewDatabasesEvery")), "html", null, true);
        echo "</td>
\t\t\t<td id=\"geoip-update-period-cell\">
\t\t\t\t<input type=\"radio\" name=\"geoip-update-period\" value=\"month\" id=\"geoip-update-period-month\" ";
        // line 36
        if (((isset($context["geoIPUpdatePeriod"]) ? $context["geoIPUpdatePeriod"] : $this->getContext($context, "geoIPUpdatePeriod")) == "month")) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t<label for=\"geoip-update-period-month\">";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Intl_PeriodMonth")), "html", null, true);
        echo "</label>

\t\t\t\t<input type=\"radio\" name=\"geoip-update-period\" value=\"week\" id=\"geoip-update-period-week\" ";
        // line 39
        if (((isset($context["geoIPUpdatePeriod"]) ? $context["geoIPUpdatePeriod"] : $this->getContext($context, "geoIPUpdatePeriod")) == "week")) {
            echo "checked=\"checked\"";
        }
        echo "/>
\t\t\t\t<label for=\"geoip-update-period-week\">";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Intl_PeriodWeek")), "html", null, true);
        echo "</label>
\t\t\t</td>
\t\t\t<td width=\"164\">
\t\t\t\t<div class=\"form-help\">
\t\t\t\t\t";
        // line 44
        if ((array_key_exists("lastTimeUpdaterRun", $context) &&  !twig_test_empty((isset($context["lastTimeUpdaterRun"]) ? $context["lastTimeUpdaterRun"] : $this->getContext($context, "lastTimeUpdaterRun"))))) {
            // line 45
            echo "\t\t\t\t\t\t";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterWasLastRun", (isset($context["lastTimeUpdaterRun"]) ? $context["lastTimeUpdaterRun"] : $this->getContext($context, "lastTimeUpdaterRun"))));
            echo "
\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t\t";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterHasNotBeenRun")), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t<br/><br/>
\t\t\t\t\t<div id=\"geoip-updater-next-run-time\">
\t\t\t\t\t\t";
        // line 51
        $this->loadTemplate("@UserCountry/_updaterNextRunTime.twig", "@UserCountry/_updaterManage.twig", 51)->display($context);
        // line 52
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<p style=\"display:inline-block;vertical-align:top;\">
\t\t<input type=\"button\" class=\"submit\" value=\"";
        // line 58
        if ( !(isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled"))) {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Continue")), "html", null, true);
        } else {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
        }
        echo "\" id=\"update-geoip-links\"/>
\t</p>
\t<div style=\"display:inline-block;width:700px;\">
\t\t<div id=\"done-updating-updater\"></div>
\t\t<div id=\"geoipdb-update-info-error\"></div>
\t\t<div id=\"geoip-progressbar-container\" style=\"display:none;\">
\t\t\t<div id=\"geoip-updater-progressbar\"></div>
\t\t\t<span id=\"geoip-updater-progressbar-label\"></span>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@UserCountry/_updaterManage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 58,  147 => 52,  145 => 51,  141 => 49,  135 => 47,  129 => 45,  127 => 44,  120 => 40,  114 => 39,  109 => 37,  103 => 36,  98 => 34,  92 => 31,  88 => 30,  82 => 27,  78 => 26,  70 => 21,  64 => 18,  60 => 17,  53 => 13,  49 => 12,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"geoipdb-update-info\" {% if not geoIPDatabasesInstalled %}style=\"display:none;\"{% endif %}>
    <p>{{ 'UserCountry_GeoIPUpdaterInstructions'|translate('<a href=\"http://www.maxmind.com/en/download_files?rId=piwik\" _target=\"blank\">','</a>',
        '<a href=\"http://www.maxmind.com/?rId=piwik\">','</a>')|raw }}
        <br/><br/>
{{ 'UserCountry_GeoLiteCityLink'|translate(\"<a href='\"~geoLiteUrl~\"'>\",geoLiteUrl,'</a>')|raw }}
\t{% if geoIPDatabasesInstalled %}
\t<br/><br/>{{ 'UserCountry_GeoIPUpdaterIntro'|translate }}:
\t{% endif %}
\t</p>
\t<table class=\"adminTable\" style=\"width:900px;\">
\t\t<tr>
\t\t\t<th>{{ 'Live_GoalType'|translate }}</th>
\t\t\t<th>{{ 'Actions_ColumnDownloadURL'|translate }}</th>
\t\t\t<th></th>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">{{ 'UserCountry_LocationDatabase'|translate }}</td>
\t\t\t<td><input type=\"text\" id=\"geoip-location-db\" value=\"{{ geoIPLocUrl }}\"/></td>
\t\t\t<td width=\"164\">
\t\t\t\t<div class=\"form-help\">
\t\t\t\t\t{{ 'UserCountry_LocationDatabaseHint'|translate }}
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">{{ 'UserCountry_ISPDatabase'|translate }}</td>
\t\t\t<td><input type=\"text\" id=\"geoip-isp-db\" value=\"{{ geoIPIspUrl }}\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">{{ 'UserCountry_OrgDatabase'|translate }}</td>
\t\t\t<td><input type=\"text\" id=\"geoip-org-db\" value=\"{{ geoIPOrgUrl }}\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"150\">{{ 'UserCountry_DownloadNewDatabasesEvery'|translate }}</td>
\t\t\t<td id=\"geoip-update-period-cell\">
\t\t\t\t<input type=\"radio\" name=\"geoip-update-period\" value=\"month\" id=\"geoip-update-period-month\" {% if geoIPUpdatePeriod == 'month' %}checked=\"checked\"{% endif %} />
\t\t\t\t<label for=\"geoip-update-period-month\">{{ 'Intl_PeriodMonth'|translate }}</label>

\t\t\t\t<input type=\"radio\" name=\"geoip-update-period\" value=\"week\" id=\"geoip-update-period-week\" {% if geoIPUpdatePeriod == 'week' %}checked=\"checked\"{% endif %}/>
\t\t\t\t<label for=\"geoip-update-period-week\">{{ 'Intl_PeriodWeek'|translate }}</label>
\t\t\t</td>
\t\t\t<td width=\"164\">
\t\t\t\t<div class=\"form-help\">
\t\t\t\t\t{% if lastTimeUpdaterRun is defined and lastTimeUpdaterRun is not empty %}
\t\t\t\t\t\t{{ 'UserCountry_UpdaterWasLastRun'|translate(lastTimeUpdaterRun)|raw }}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{{ 'UserCountry_UpdaterHasNotBeenRun'|translate }}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<br/><br/>
\t\t\t\t\t<div id=\"geoip-updater-next-run-time\">
\t\t\t\t\t\t{% include \"@UserCountry/_updaterNextRunTime.twig\" %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<p style=\"display:inline-block;vertical-align:top;\">
\t\t<input type=\"button\" class=\"submit\" value=\"{% if not geoIPDatabasesInstalled %}{{ 'General_Continue'|translate }}{% else %}{{ 'General_Save'|translate }}{% endif %}\" id=\"update-geoip-links\"/>
\t</p>
\t<div style=\"display:inline-block;width:700px;\">
\t\t<div id=\"done-updating-updater\"></div>
\t\t<div id=\"geoipdb-update-info-error\"></div>
\t\t<div id=\"geoip-progressbar-container\" style=\"display:none;\">
\t\t\t<div id=\"geoip-updater-progressbar\"></div>
\t\t\t<span id=\"geoip-updater-progressbar-label\"></span>
\t\t</div>
\t</div>
</div>
";
    }
}
