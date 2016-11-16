<?php

/* @ScheduledReports/_listReports.twig */
class __TwigTemplate_36c59adec3600c0c42fb2564dd8c5a4b6b3c7d590d1fad12946e885bb366ffa2 extends Twig_Template
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
        echo "<div id='entityEditContainer'>
    <table class=\"dataTable entityTable\">
        <thead>
        <tr>
            <th class=\"first\">";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
        echo "</th>
            <th>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_EmailSchedule")), "html", null, true);
        echo "</th>
            <th>";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportFormat")), "html", null, true);
        echo "</th>
            <th>";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_SendReportTo")), "html", null, true);
        echo "</th>
            <th>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Download")), "html", null, true);
        echo "</th>
            <th>";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
        echo "</th>
            <th>";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
        echo "</th>
        </tr>
        </thead>

    ";
        // line 15
        if (((isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")) == "anonymous")) {
            // line 16
            echo "        <tr>
            <td colspan='7'>
                <br/>
                ";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_MustBeLoggedIn")), "html", null, true);
            echo "
                <br/>&rsaquo; <a href='index.php?module=";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["loginModule"]) ? $context["loginModule"] : $this->getContext($context, "loginModule")), "html", null, true);
            echo "'>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</a>
                <br/><br/>
            </td>
        </tr>
    ";
        } elseif (twig_test_empty(        // line 24
(isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")))) {
            // line 25
            echo "        <tr>
            <td colspan='7'>
                <br/>
                ";
            // line 28
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ThereIsNoReportToManage", (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName"))));
            echo ".
                <br/><br/>
            </td>
        </tr>
    ";
        } else {
            // line 33
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")));
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 34
                echo "        <tr>
            <td class=\"first\">
                ";
                // line 36
                echo $this->getAttribute($context["report"], "description", array());
                echo "
                ";
                // line 37
                if (((isset($context["segmentEditorActivated"]) ? $context["segmentEditorActivated"] : $this->getContext($context, "segmentEditorActivated")) && $this->getAttribute($context["report"], "idsegment", array()))) {
                    // line 38
                    echo "                    <div class=\"entityInlineHelp\" style=\"font-size: 9pt;\">
                        ";
                    // line 39
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["savedSegmentsById"]) ? $context["savedSegmentsById"] : $this->getContext($context, "savedSegmentsById")), $this->getAttribute($context["report"], "idsegment", array()), array(), "array"), "html", null, true);
                    echo "
                    </div>
                ";
                }
                // line 42
                echo "            </td>
            <td>";
                // line 43
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["periods"]) ? $context["periods"] : $this->getContext($context, "periods")), $this->getAttribute($context["report"], "period", array()), array(), "array"), "html", null, true);
                echo "
                <!-- Last sent on ";
                // line 44
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["report"], "ts_last_sent", array()), "html", null, true);
                echo " -->
            </td>
            <td>
                ";
                // line 47
                if ( !twig_test_empty($this->getAttribute($context["report"], "format", array()))) {
                    // line 48
                    echo "                    ";
                    echo \Piwik\piwik_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["report"], "format", array())), "html", null, true);
                    echo "
                ";
                }
                // line 50
                echo "            </td>
            <td>
                ";
                // line 53
                echo "                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["report"], "recipients", array())) == 0)) {
                    // line 54
                    echo "                    ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_NoRecipients")), "html", null, true);
                    echo "
                ";
                } else {
                    // line 56
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["report"], "recipients", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                        // line 57
                        echo "                        ";
                        echo \Piwik\piwik_escape_filter($this->env, $context["recipient"], "html", null, true);
                        echo "
                        <br/>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                    ";
                    // line 61
                    echo "                    <a href=\"#\" idreport=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["report"], "idreport", array()), "html", null, true);
                    echo "\" name=\"linkSendNow\" class=\"link_but withIcon\" style=\"margin-top:3px;\">
                        <img border=0 src='";
                    // line 62
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["reportTypes"]) ? $context["reportTypes"] : $this->getContext($context, "reportTypes")), $this->getAttribute($context["report"], "type", array()), array(), "array"), "html", null, true);
                    echo "'/>
                        ";
                    // line 63
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_SendReportNow")), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 66
                echo "            </td>
            <td>
                ";
                // line 69
                echo "                <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "API", "segment" => null, "token_auth" => (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "method" => "ScheduledReports.generateReport", "idReport" => $this->getAttribute(                // line 70
$context["report"], "idreport", array()), "outputType" =>                 // line 71
(isset($context["downloadOutputType"]) ? $context["downloadOutputType"] : $this->getContext($context, "downloadOutputType")), "language" => (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "format" => ((twig_in_filter($this->getAttribute(                // line 72
$context["report"], "format", array()), array(0 => "html", 1 => "csv"))) ? ($this->getAttribute($context["report"], "format", array())) : (false))))), "html", null, true);
                // line 73
                echo "\"
                   rel=\"noreferrer\"  target=\"_blank\" name=\"linkDownloadReport\" id=\"";
                // line 74
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["report"], "idreport", array()), "html", null, true);
                echo "\" class=\"link_but withIcon\">
                    <img src='";
                // line 75
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reportFormatsByReportType"]) ? $context["reportFormatsByReportType"] : $this->getContext($context, "reportFormatsByReportType")), $this->getAttribute($context["report"], "type", array()), array(), "array"), $this->getAttribute($context["report"], "format", array()), array(), "array"), "html", null, true);
                echo "' border=\"0\"/>
                    ";
                // line 76
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Download")), "html", null, true);
                echo "
                </a>
            </td>
            <td class=\"text-center\">
                <button id=\"";
                // line 80
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["report"], "idreport", array()), "html", null, true);
                echo "\" class=\"edit-report btn btn-flat btn-lg\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
                echo "\">
                    <span class=\"icon-edit\"></span>
                </button>
            </td>
            <td class=\"text-center\">
                <button id=\"";
                // line 85
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["report"], "idreport", array()), "html", null, true);
                echo "\" class=\"delete-report btn btn-flat btn-lg\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                echo "\">
                    <span class=\"icon-delete\"></span>
                </button>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "    ";
        }
        // line 92
        echo "
    </table>

    ";
        // line 95
        if (((isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")) != "anonymous")) {
            // line 96
            echo "        <p>
            <button id=\"add-report\" class=\"btn btn-lg btn-flat\">
                <span class=\"icon-add\"></span>
                ";
            // line 99
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_CreateAndScheduleReport")), "html", null, true);
            echo "
            </button>
        </p>
    ";
        }
        // line 103
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/_listReports.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 103,  248 => 99,  243 => 96,  241 => 95,  236 => 92,  233 => 91,  219 => 85,  209 => 80,  202 => 76,  198 => 75,  194 => 74,  191 => 73,  189 => 72,  188 => 71,  187 => 70,  185 => 69,  181 => 66,  175 => 63,  171 => 62,  166 => 61,  164 => 60,  154 => 57,  149 => 56,  143 => 54,  140 => 53,  136 => 50,  130 => 48,  128 => 47,  122 => 44,  118 => 43,  115 => 42,  109 => 39,  106 => 38,  104 => 37,  100 => 36,  96 => 34,  91 => 33,  83 => 28,  78 => 25,  76 => 24,  67 => 20,  63 => 19,  58 => 16,  56 => 15,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<div id='entityEditContainer'>
    <table class=\"dataTable entityTable\">
        <thead>
        <tr>
            <th class=\"first\">{{ 'General_Description'|translate }}</th>
            <th>{{ 'ScheduledReports_EmailSchedule'|translate }}</th>
            <th>{{ 'ScheduledReports_ReportFormat'|translate }}</th>
            <th>{{ 'ScheduledReports_SendReportTo'|translate }}</th>
            <th>{{ 'General_Download'|translate }}</th>
            <th>{{ 'General_Edit'|translate }}</th>
            <th>{{ 'General_Delete'|translate }}</th>
        </tr>
        </thead>

    {% if userLogin == 'anonymous' %}
        <tr>
            <td colspan='7'>
                <br/>
                {{ 'ScheduledReports_MustBeLoggedIn'|translate }}
                <br/>&rsaquo; <a href='index.php?module={{ loginModule }}'>{{ 'Login_LogIn'|translate }}</a>
                <br/><br/>
            </td>
        </tr>
    {% elseif reports is empty %}
        <tr>
            <td colspan='7'>
                <br/>
                {{ 'ScheduledReports_ThereIsNoReportToManage'|translate(siteName)|raw }}.
                <br/><br/>
            </td>
        </tr>
    {% else %}
    {% for report in reports %}
        <tr>
            <td class=\"first\">
                {{ report.description | raw }}
                {% if segmentEditorActivated and report.idsegment %}
                    <div class=\"entityInlineHelp\" style=\"font-size: 9pt;\">
                        {{ savedSegmentsById[report.idsegment] }}
                    </div>
                {% endif %}
            </td>
            <td>{{ periods[report.period] }}
                <!-- Last sent on {{ report.ts_last_sent }} -->
            </td>
            <td>
                {% if report.format is not empty %}
                    {{ report.format|upper }}
                {% endif %}
            </td>
            <td>
                {# report recipients #}
                {% if report.recipients|length == 0 %}
                    {{ 'ScheduledReports_NoRecipients'|translate }}
                {% else %}
                    {% for recipient in report.recipients %}
                        {{ recipient }}
                        <br/>
                    {% endfor %}
                    {# send now link #}
                    <a href=\"#\" idreport=\"{{ report.idreport }}\" name=\"linkSendNow\" class=\"link_but withIcon\" style=\"margin-top:3px;\">
                        <img border=0 src='{{ reportTypes[report.type] }}'/>
                        {{ 'ScheduledReports_SendReportNow'|translate }}
                    </a>
                {% endif %}
            </td>
            <td>
                {# download link #}
                <a href=\"{{ linkTo({'module':'API', 'segment': null, 'token_auth':token_auth,
                            'method':'ScheduledReports.generateReport', 'idReport':report.idreport,
                            'outputType':downloadOutputType, 'language':language,
                            'format': (report.format in ['html', 'csv']) ? report.format : false
                       }) }}\"
                   rel=\"noreferrer\"  target=\"_blank\" name=\"linkDownloadReport\" id=\"{{ report.idreport }}\" class=\"link_but withIcon\">
                    <img src='{{ reportFormatsByReportType[report.type][report.format] }}' border=\"0\"/>
                    {{ 'General_Download'|translate }}
                </a>
            </td>
            <td class=\"text-center\">
                <button id=\"{{ report.idreport }}\" class=\"edit-report btn btn-flat btn-lg\" title=\"{{ 'General_Edit'|translate }}\">
                    <span class=\"icon-edit\"></span>
                </button>
            </td>
            <td class=\"text-center\">
                <button id=\"{{ report.idreport }}\" class=\"delete-report btn btn-flat btn-lg\" title=\"{{ 'General_Delete'|translate }}\">
                    <span class=\"icon-delete\"></span>
                </button>
            </td>
        </tr>
    {% endfor %}
    {% endif %}

    </table>

    {% if userLogin != 'anonymous' %}
        <p>
            <button id=\"add-report\" class=\"btn btn-lg btn-flat\">
                <span class=\"icon-add\"></span>
                {{ 'ScheduledReports_CreateAndScheduleReport'|translate }}
            </button>
        </p>
    {% endif %}

</div>
";
    }
}
