<?php

/* @ScheduledReports/index.twig */
class __TwigTemplate_d447075783b37b6cd7dee12c2cdc71faf6305cb27605c7b90867d8cf5e9d6149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user.twig", "@ScheduledReports/index.twig", 1);
        $this->blocks = array(
            'topcontrols' => array($this, 'block_topcontrols'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_PersonalEmailReports")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topcontrols($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@ScheduledReports/index.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@ScheduledReports/index.twig", 7)->display($context);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"emailReports\">
    <h2 piwik-enriched-headline help-url=\"http://piwik.org/docs/email-reports/\">";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>

    <span id=\"reportSentSuccess\"></span>
    <span id=\"reportUpdatedSuccess\"></span>

    <div class=\"entityContainer\">
        ";
        // line 19
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@ScheduledReports/index.twig", 19);
        // line 20
        echo "        ";
        echo $context["ajax"]->geterrorDiv();
        echo "
        ";
        // line 21
        echo $context["ajax"]->getloadingDiv();
        echo "
        ";
        // line 22
        $this->loadTemplate("@ScheduledReports/_listReports.twig", "@ScheduledReports/index.twig", 22)->display($context);
        // line 23
        echo "        ";
        $this->loadTemplate("@ScheduledReports/_addReport.twig", "@ScheduledReports/index.twig", 23)->display($context);
        // line 24
        echo "        <a id='bottom'></a>
    </div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_AreYouSureDeleteReport")), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<script type=\"text/javascript\">
    var timeZoneDifference = ";
        // line 35
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["timeZoneDifference"]) ? $context["timeZoneDifference"] : $this->getContext($context, "timeZoneDifference")), "html", null, true);
        echo ";
    var ReportPlugin = {};
    ReportPlugin.defaultPeriod = '";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultPeriod"]) ? $context["defaultPeriod"] : $this->getContext($context, "defaultPeriod")), "html", null, true);
        echo "';
    ReportPlugin.defaultHour = '";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultHour"]) ? $context["defaultHour"] : $this->getContext($context, "defaultHour")), "html", null, true);
        echo "';
    ReportPlugin.defaultReportType = '";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultReportType"]) ? $context["defaultReportType"] : $this->getContext($context, "defaultReportType")), "html", null, true);
        echo "';
    ReportPlugin.defaultReportFormat = '";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultReportFormat"]) ? $context["defaultReportFormat"] : $this->getContext($context, "defaultReportFormat")), "html", null, true);
        echo "';
    ReportPlugin.reportList = ";
        // line 41
        echo (isset($context["reportsJSON"]) ? $context["reportsJSON"] : $this->getContext($context, "reportsJSON"));
        echo ";
    ReportPlugin.createReportString = \"";
        // line 42
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_CreateReport")), "html", null, true);
        echo "\";
    ReportPlugin.updateReportString = \"";
        // line 43
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_UpdateReport")), "html", null, true);
        echo "\";
    \$(function () {
        initManagePdf();
    });
</script>
<style type=\"text/css\">
    .reportCategory {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .entityAddContainer {
        position:relative;
    }

    .emailReports .top_controls {
        padding-bottom: 18px;
    }

</style>
";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  124 => 42,  120 => 41,  116 => 40,  112 => 39,  108 => 38,  104 => 37,  99 => 35,  92 => 31,  88 => 30,  84 => 29,  77 => 24,  74 => 23,  72 => 22,  68 => 21,  63 => 20,  61 => 19,  52 => 13,  48 => 11,  45 => 10,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  26 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'user.twig' %}

{% set title %}{{ 'ScheduledReports_PersonalEmailReports'|translate }}{% endset %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% include \"@CoreHome/_periodSelect.twig\" %}
{% endblock %}

{% block content %}

<div class=\"emailReports\">
    <h2 piwik-enriched-headline help-url=\"http://piwik.org/docs/email-reports/\">{{ title }}</h2>

    <span id=\"reportSentSuccess\"></span>
    <span id=\"reportUpdatedSuccess\"></span>

    <div class=\"entityContainer\">
        {% import 'ajaxMacros.twig' as ajax %}
        {{ ajax.errorDiv() }}
        {{ ajax.loadingDiv() }}
        {% include \"@ScheduledReports/_listReports.twig\" %}
        {% include \"@ScheduledReports/_addReport.twig\" %}
        <a id='bottom'></a>
    </div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>{{ 'ScheduledReports_AreYouSureDeleteReport'|translate }}</h2>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>

<script type=\"text/javascript\">
    var timeZoneDifference = {{ timeZoneDifference }};
    var ReportPlugin = {};
    ReportPlugin.defaultPeriod = '{{ defaultPeriod }}';
    ReportPlugin.defaultHour = '{{ defaultHour }}';
    ReportPlugin.defaultReportType = '{{ defaultReportType }}';
    ReportPlugin.defaultReportFormat = '{{ defaultReportFormat }}';
    ReportPlugin.reportList = {{ reportsJSON | raw }};
    ReportPlugin.createReportString = \"{{ 'ScheduledReports_CreateReport'|translate }}\";
    ReportPlugin.updateReportString = \"{{ 'ScheduledReports_UpdateReport'|translate }}\";
    \$(function () {
        initManagePdf();
    });
</script>
<style type=\"text/css\">
    .reportCategory {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .entityAddContainer {
        position:relative;
    }

    .emailReports .top_controls {
        padding-bottom: 18px;
    }

</style>
{% endblock %}
";
    }
}
