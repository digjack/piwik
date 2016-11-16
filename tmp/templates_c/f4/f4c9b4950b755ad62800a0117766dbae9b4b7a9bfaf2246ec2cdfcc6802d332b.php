<?php

/* @ScheduledReports/_addReport.twig */
class __TwigTemplate_f7b91de151bb25cb4f6f8e1e02638eaf2dfbad4a4f51a2f2a5052faeec886e2b extends Twig_Template
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
        echo "<div class=\"entityAddContainer\" style=\"display:none;\">
    <div class='clear'></div>
    <form id='addEditReport'>
        <table class=\"dataTable entityTable\">
            <thead>
            <tr class=\"first\">
                <th colspan=\"2\">";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_CreateAndScheduleReport")), "html", null, true);
        echo "</th>
            <tr>
            </thead>
            <tbody>
            <tr>
                <td class=\"first\">";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Website")), "html", null, true);
        echo " </td>
                <td style=\"width:650px;\">
                    ";
        // line 14
        echo (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName"));
        echo "
                </td>
            </tr>
            <tr>
                <td class=\"first\">";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
        echo " </td>
                <td>
                    <textarea cols=\"30\" rows=\"3\" id=\"report_description\" class=\"inp\"></textarea>

                    <div class=\"entityInlineHelp\">
                        ";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_DescriptionOnFirstPage")), "html", null, true);
        echo "
                    </div>
                </td>
            </tr>
            ";
        // line 27
        if ((isset($context["segmentEditorActivated"]) ? $context["segmentEditorActivated"] : $this->getContext($context, "segmentEditorActivated"))) {
            // line 28
            echo "            <tr>
                <td class=\"first\">";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_ChooseASegment")), "html", null, true);
            echo " </td>
                <td>
                    <select id='report_segment'>
                        <option value=\"\">";
            // line 32
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_DefaultAllVisits")), "html", null, true);
            echo "</option>
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["savedSegmentsById"]) ? $context["savedSegmentsById"] : $this->getContext($context, "savedSegmentsById")));
            foreach ($context['_seq'] as $context["savedSegmentId"] => $context["savedSegmentName"]) {
                // line 34
                echo "                            <option value=\"";
                echo \Piwik\piwik_escape_filter($this->env, $context["savedSegmentId"], "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_slice($this->env, $context["savedSegmentName"], 0, 50), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['savedSegmentId'], $context['savedSegmentName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    </select>

                    <div class=\"entityInlineHelp\">
                        ";
            // line 39
            ob_start();
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_DefaultAllVisits")), "html", null, true);
            $context["SegmentEditor_DefaultAllVisits"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "                        ";
            ob_start();
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AddNewSegment")), "html", null, true);
            $context["SegmentEditor_AddNewSegment"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 41
            echo "                        ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_Segment_Help", "<a href=\"./\" rel=\"noreferrer\"  target=\"_blank\">", "</a>", (isset($context["SegmentEditor_DefaultAllVisits"]) ? $context["SegmentEditor_DefaultAllVisits"] : $this->getContext($context, "SegmentEditor_DefaultAllVisits")), (isset($context["SegmentEditor_AddNewSegment"]) ? $context["SegmentEditor_AddNewSegment"] : $this->getContext($context, "SegmentEditor_AddNewSegment"))));
            echo "
                    </div>
                </td>
            </tr>
            ";
        }
        // line 46
        echo "            <tr>
                <td class=\"first\">";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_EmailSchedule")), "html", null, true);
        echo "</td>
                <td>
                    <select id=\"report_period\" class=\"inp\">
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periods"]) ? $context["periods"] : $this->getContext($context, "periods")));
        foreach ($context['_seq'] as $context["periodId"] => $context["period"]) {
            // line 51
            echo "                            <option value=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["periodId"], "html", null, true);
            echo "\">
                                ";
            // line 52
            echo \Piwik\piwik_escape_filter($this->env, $context["period"], "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['periodId'], $context['period'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </select>

                    <div class=\"entityInlineHelp\">
                        ";
        // line 58
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_WeeklyScheduleHelp")), "html", null, true);
        echo "
                        <br/>
                        ";
        // line 60
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_MonthlyScheduleHelp")), "html", null, true);
        echo "
                        <br/>

                        ";
        // line 63
        ob_start();
        // line 64
        echo "                            <select id=\"report_hour\">
                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 66
            echo "                                ";
            if (((((isset($context["timeZoneDifference"]) ? $context["timeZoneDifference"] : $this->getContext($context, "timeZoneDifference")) * 2) % 2) != 0)) {
                // line 67
                echo "                                    <option value=\"";
                echo \Piwik\piwik_escape_filter($this->env, $context["i"], "html", null, true);
                echo ".5\">";
                echo \Piwik\piwik_escape_filter($this->env, $context["i"], "html", null, true);
                echo ":30</option>
                                ";
            } else {
                // line 69
                echo "                                    <option value=\"";
                echo \Piwik\piwik_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                ";
            }
            // line 71
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                            </select>
                        ";
        $context["hourInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 74
        echo "
                        ";
        // line 75
        if (((isset($context["timeZoneDifference"]) ? $context["timeZoneDifference"] : $this->getContext($context, "timeZoneDifference")) != 0)) {
            // line 76
            echo "                            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportHourWithUTC", (isset($context["hourInput"]) ? $context["hourInput"] : $this->getContext($context, "hourInput")), "<span id=\"hour_utc\"></span>"));
            echo "
                        ";
        } else {
            // line 78
            echo "                            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportHour", (isset($context["hourInput"]) ? $context["hourInput"] : $this->getContext($context, "hourInput"))));
            echo "
                        ";
        }
        // line 80
        echo "                    </div>
                </td>
            </tr>

            <tr ";
        // line 84
        if ((twig_length_filter($this->env, (isset($context["reportTypes"]) ? $context["reportTypes"] : $this->getContext($context, "reportTypes"))) == 1)) {
            echo "style=\"display:none;\"";
        }
        echo ">
                <td class=\"first\">
                    ";
        // line 86
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportType")), "html", null, true);
        echo "
                </td>
                <td>
                    <select id=\"report_type\">
                        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportTypes"]) ? $context["reportTypes"] : $this->getContext($context, "reportTypes")));
        foreach ($context['_seq'] as $context["reportType"] => $context["reportTypeIcon"]) {
            // line 91
            echo "                            <option value=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, twig_upper_filter($this->env, $context["reportType"]), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['reportType'], $context['reportTypeIcon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                    </select>
                </td>
            </tr>

            <tr>
                <td class=\"first\">
                    ";
        // line 99
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportFormat")), "html", null, true);
        echo "
                </td>

                <td>
                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportFormatsByReportType"]) ? $context["reportFormatsByReportType"] : $this->getContext($context, "reportFormatsByReportType")));
        foreach ($context['_seq'] as $context["reportType"] => $context["reportFormats"]) {
            // line 104
            echo "                        <select name='report_format' class='";
            echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
            echo "'>
                            ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["reportFormats"]);
            foreach ($context['_seq'] as $context["reportFormat"] => $context["reportFormatIcon"]) {
                // line 106
                echo "                                <option value=\"";
                echo \Piwik\piwik_escape_filter($this->env, $context["reportFormat"], "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_upper_filter($this->env, $context["reportFormat"]), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['reportFormat'], $context['reportFormatIcon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                        </select>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['reportType'], $context['reportFormats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                </td>
            </tr>

            ";
        // line 113
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.reportParametersScheduledReports"));
        echo "

            <tr class='email' id=\"row_report_display_options\">
                <td class=\"first\">
                    ";
        // line 118
        echo "                    ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_AggregateReportsFormat")), "html", null, true);
        echo "
                </td>
                <td>
                    <select id=\"display_format\">
                        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["displayFormats"]) ? $context["displayFormats"] : $this->getContext($context, "displayFormats")));
        foreach ($context['_seq'] as $context["formatValue"] => $context["formatLabel"]) {
            // line 123
            echo "                            <option ";
            if (($context["formatValue"] == 1)) {
                echo "selected";
            }
            echo " value=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["formatValue"], "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $context["formatLabel"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['formatValue'], $context['formatLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                    </select>

                    <div class='report_evolution_graph'>
                        <br/>
                        <input type=\"checkbox\" id=\"report_evolution_graph\"/>
                        <label for=\"report_evolution_graph\"><em>";
        // line 130
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_EvolutionGraph", 5)), "html", null, true);
        echo "</em></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td class=\"first\">";
        // line 136
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportsIncluded")), "html", null, true);
        echo "</td>
                <td>
                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportsByCategoryByReportType"]) ? $context["reportsByCategoryByReportType"] : $this->getContext($context, "reportsByCategoryByReportType")));
        foreach ($context['_seq'] as $context["reportType"] => $context["reportsByCategory"]) {
            // line 139
            echo "                        <div name='reportsList' class='";
            echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
            echo "'>

                            ";
            // line 141
            if ($this->getAttribute((isset($context["allowMultipleReportsByReportType"]) ? $context["allowMultipleReportsByReportType"] : $this->getContext($context, "allowMultipleReportsByReportType")), $context["reportType"], array(), "array")) {
                // line 142
                echo "                                ";
                $context["reportInputType"] = "checkbox";
                // line 143
                echo "                            ";
            } else {
                // line 144
                echo "                                ";
                $context["reportInputType"] = "radio";
                // line 145
                echo "                            ";
            }
            // line 146
            echo "
                            ";
            // line 147
            $context["countCategory"] = 0;
            // line 148
            echo "
                            ";
            // line 149
            $context["newColumnAfter"] = (int) floor(((twig_length_filter($this->env, $context["reportsByCategory"]) + 1) / 2));
            // line 150
            echo "
                            <div id='leftcolumn'>
                                ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["reportsByCategory"]);
            foreach ($context['_seq'] as $context["category"] => $context["reports"]) {
                // line 153
                echo "                                ";
                if ((((isset($context["countCategory"]) ? $context["countCategory"] : $this->getContext($context, "countCategory")) >= (isset($context["newColumnAfter"]) ? $context["newColumnAfter"] : $this->getContext($context, "newColumnAfter"))) && ((isset($context["newColumnAfter"]) ? $context["newColumnAfter"] : $this->getContext($context, "newColumnAfter")) != 0))) {
                    // line 154
                    echo "                                ";
                    $context["newColumnAfter"] = 0;
                    // line 155
                    echo "                            </div>
                            <div id='rightcolumn'>
                                ";
                }
                // line 158
                echo "                                <div class='reportCategory'>";
                echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</div>
                                <ul class='listReports'>
                                    ";
                // line 160
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["reports"]);
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 161
                    echo "                                        <li>
                                            <input type='";
                    // line 162
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportInputType"]) ? $context["reportInputType"] : $this->getContext($context, "reportInputType")), "html", null, true);
                    echo "' id=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["report"], "uniqueId", array()), "html", null, true);
                    echo "\" report-unique-id='";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["report"], "uniqueId", array()), "html", null, true);
                    echo "'
                                                   name='";
                    // line 163
                    echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
                    echo "Reports'/>
                                            <label for=\"";
                    // line 164
                    echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["report"], "uniqueId", array()), "html", null, true);
                    echo "\">
                                                ";
                    // line 165
                    echo $this->getAttribute($context["report"], "name", array());
                    echo "
                                                ";
                    // line 166
                    if (($this->getAttribute($context["report"], "uniqueId", array()) == "MultiSites_getAll")) {
                        // line 167
                        echo "                                                    <div class=\"entityInlineHelp\">";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportIncludeNWebsites", (isset($context["countWebsites"]) ? $context["countWebsites"] : $this->getContext($context, "countWebsites")))), "html", null, true);
                        // line 168
                        echo "</div>
                                                ";
                    }
                    // line 170
                    echo "                                            </label>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                                    ";
                $context["countCategory"] = ((isset($context["countCategory"]) ? $context["countCategory"] : $this->getContext($context, "countCategory")) + 1);
                // line 174
                echo "                                </ul>
                                <br/>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['reports'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['reportType'], $context['reportsByCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                </td>
            </tr>

            </tbody>
        </table>

        <input type=\"hidden\" id=\"report_idreport\" value=\"\">
        <input type=\"submit\" id=\"report_submit\" name=\"submit\" class=\"submit\"/>

    </form>
    <div class='entityCancel'>
        ";
        // line 191
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OrCancel", "<a class='entityCancelLink'>", "</a>"));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/_addReport.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 191,  478 => 180,  470 => 177,  462 => 174,  459 => 173,  451 => 170,  447 => 168,  444 => 167,  442 => 166,  438 => 165,  433 => 164,  429 => 163,  420 => 162,  417 => 161,  413 => 160,  407 => 158,  402 => 155,  399 => 154,  396 => 153,  392 => 152,  388 => 150,  386 => 149,  383 => 148,  381 => 147,  378 => 146,  375 => 145,  372 => 144,  369 => 143,  366 => 142,  364 => 141,  358 => 139,  354 => 138,  349 => 136,  340 => 130,  333 => 125,  318 => 123,  314 => 122,  306 => 118,  299 => 113,  294 => 110,  287 => 108,  276 => 106,  272 => 105,  267 => 104,  263 => 103,  256 => 99,  248 => 93,  237 => 91,  233 => 90,  226 => 86,  219 => 84,  213 => 80,  207 => 78,  201 => 76,  199 => 75,  196 => 74,  192 => 72,  186 => 71,  178 => 69,  170 => 67,  167 => 66,  163 => 65,  160 => 64,  158 => 63,  152 => 60,  147 => 58,  142 => 55,  133 => 52,  128 => 51,  124 => 50,  118 => 47,  115 => 46,  106 => 41,  101 => 40,  97 => 39,  92 => 36,  81 => 34,  77 => 33,  73 => 32,  67 => 29,  64 => 28,  62 => 27,  55 => 23,  47 => 18,  40 => 14,  35 => 12,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"entityAddContainer\" style=\"display:none;\">
    <div class='clear'></div>
    <form id='addEditReport'>
        <table class=\"dataTable entityTable\">
            <thead>
            <tr class=\"first\">
                <th colspan=\"2\">{{ 'ScheduledReports_CreateAndScheduleReport'|translate }}</th>
            <tr>
            </thead>
            <tbody>
            <tr>
                <td class=\"first\">{{ 'General_Website'|translate }} </td>
                <td style=\"width:650px;\">
                    {{ siteName|raw }}
                </td>
            </tr>
            <tr>
                <td class=\"first\">{{ 'General_Description'|translate }} </td>
                <td>
                    <textarea cols=\"30\" rows=\"3\" id=\"report_description\" class=\"inp\"></textarea>

                    <div class=\"entityInlineHelp\">
                        {{ 'ScheduledReports_DescriptionOnFirstPage'|translate }}
                    </div>
                </td>
            </tr>
            {% if segmentEditorActivated %}
            <tr>
                <td class=\"first\">{{ 'SegmentEditor_ChooseASegment'|translate }} </td>
                <td>
                    <select id='report_segment'>
                        <option value=\"\">{{ 'SegmentEditor_DefaultAllVisits'|translate }}</option>
                        {% for savedSegmentId, savedSegmentName in savedSegmentsById %}
                            <option value=\"{{ savedSegmentId }}\">{{ savedSegmentName[:50] }}</option>
                        {% endfor %}
                    </select>

                    <div class=\"entityInlineHelp\">
                        {% set SegmentEditor_DefaultAllVisits %}{{ 'SegmentEditor_DefaultAllVisits'|translate }}{% endset %}
                        {% set SegmentEditor_AddNewSegment %}{{ 'SegmentEditor_AddNewSegment'|translate }}{% endset %}
                        {{ 'ScheduledReports_Segment_Help'|translate('<a href=\"./\" rel=\"noreferrer\"  target=\"_blank\">','</a>',SegmentEditor_DefaultAllVisits,SegmentEditor_AddNewSegment)|raw }}
                    </div>
                </td>
            </tr>
            {% endif %}
            <tr>
                <td class=\"first\">{{ 'ScheduledReports_EmailSchedule'|translate }}</td>
                <td>
                    <select id=\"report_period\" class=\"inp\">
                        {% for periodId, period in periods %}
                            <option value=\"{{ periodId }}\">
                                {{ period }}
                            </option>
                        {% endfor %}
                    </select>

                    <div class=\"entityInlineHelp\">
                        {{ 'ScheduledReports_WeeklyScheduleHelp'|translate }}
                        <br/>
                        {{ 'ScheduledReports_MonthlyScheduleHelp'|translate }}
                        <br/>

                        {% set hourInput %}
                            <select id=\"report_hour\">
                            {% for i in 0..23 %}
                                {% if (timeZoneDifference*2)%2 != 0 %}
                                    <option value=\"{{ i }}.5\">{{ i }}:30</option>
                                {% else %}
                                    <option value=\"{{ i }}\">{{ i }}</option>
                                {%  endif %}
                            {% endfor %}
                            </select>
                        {% endset %}

                        {% if timeZoneDifference != 0 %}
                            {{ 'ScheduledReports_ReportHourWithUTC'|translate(hourInput, '<span id=\"hour_utc\"></span>')|raw }}
                        {% else %}
                            {{ 'ScheduledReports_ReportHour'|translate(hourInput)|raw }}
                        {% endif %}
                    </div>
                </td>
            </tr>

            <tr {% if reportTypes|length == 1 %}style=\"display:none;\"{% endif %}>
                <td class=\"first\">
                    {{ 'ScheduledReports_ReportType'|translate }}
                </td>
                <td>
                    <select id=\"report_type\">
                        {% for reportType, reportTypeIcon in reportTypes %}
                            <option value=\"{{ reportType }}\">{{ reportType|upper }}</option>
                        {% endfor %}
                    </select>
                </td>
            </tr>

            <tr>
                <td class=\"first\">
                    {{ 'ScheduledReports_ReportFormat'|translate }}
                </td>

                <td>
                    {% for reportType, reportFormats in reportFormatsByReportType %}
                        <select name='report_format' class='{{ reportType }}'>
                            {% for reportFormat, reportFormatIcon in reportFormats %}
                                <option value=\"{{ reportFormat }}\">{{ reportFormat|upper }}</option>
                            {% endfor %}
                        </select>
                    {% endfor %}
                </td>
            </tr>

            {{ postEvent(\"Template.reportParametersScheduledReports\") }}

            <tr class='email' id=\"row_report_display_options\">
                <td class=\"first\">
                    {# ScheduledReports_AggregateReportsFormat should be named ScheduledReports_DisplayFormat #}
                    {{ 'ScheduledReports_AggregateReportsFormat'|translate }}
                </td>
                <td>
                    <select id=\"display_format\">
                        {% for formatValue, formatLabel in displayFormats %}
                            <option {% if formatValue==1 %}selected{% endif %} value=\"{{ formatValue }}\">{{ formatLabel }}</option>
                        {% endfor %}
                    </select>

                    <div class='report_evolution_graph'>
                        <br/>
                        <input type=\"checkbox\" id=\"report_evolution_graph\"/>
                        <label for=\"report_evolution_graph\"><em>{{ 'ScheduledReports_EvolutionGraph'|translate(5) }}</em></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td class=\"first\">{{ 'ScheduledReports_ReportsIncluded'|translate }}</td>
                <td>
                    {% for reportType, reportsByCategory in reportsByCategoryByReportType %}
                        <div name='reportsList' class='{{ reportType }}'>

                            {% if allowMultipleReportsByReportType[reportType] %}
                                {% set reportInputType='checkbox' %}
                            {% else %}
                                {% set reportInputType='radio' %}
                            {% endif %}

                            {% set countCategory=0 %}

                            {% set newColumnAfter=(reportsByCategory|length + 1)//2 %}

                            <div id='leftcolumn'>
                                {% for category, reports in reportsByCategory %}
                                {% if countCategory >= newColumnAfter and newColumnAfter != 0 %}
                                {% set newColumnAfter=0 %}
                            </div>
                            <div id='rightcolumn'>
                                {% endif %}
                                <div class='reportCategory'>{{ category }}</div>
                                <ul class='listReports'>
                                    {% for report in reports %}
                                        <li>
                                            <input type='{{ reportInputType }}' id=\"{{ reportType }}{{ report.uniqueId }}\" report-unique-id='{{ report.uniqueId }}'
                                                   name='{{ reportType }}Reports'/>
                                            <label for=\"{{ reportType }}{{ report.uniqueId }}\">
                                                {{ report.name|raw }}
                                                {% if report.uniqueId=='MultiSites_getAll' %}
                                                    <div class=\"entityInlineHelp\">{{ 'ScheduledReports_ReportIncludeNWebsites'|translate(countWebsites)
                                                        }}</div>
                                                {% endif %}
                                            </label>
                                        </li>
                                    {% endfor %}
                                    {% set countCategory=countCategory+1 %}
                                </ul>
                                <br/>
                                {% endfor %}
                            </div>
                        </div>
                    {% endfor %}
                </td>
            </tr>

            </tbody>
        </table>

        <input type=\"hidden\" id=\"report_idreport\" value=\"\">
        <input type=\"submit\" id=\"report_submit\" name=\"submit\" class=\"submit\"/>

    </form>
    <div class='entityCancel'>
        {{ 'General_OrCancel'|translate(\"<a class='entityCancelLink'>\",\"</a>\")|raw }}
    </div>
</div>
";
    }
}
