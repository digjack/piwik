<?php

/* @CoreHome/ReportRenderer/_htmlReportBody.twig */
class __TwigTemplate_eb93787eaca333dc211cdc95fbc2250a3321a07272633ce11c042c2995789bbd extends Twig_Template
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
        echo "<h2 id=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportId"]) ? $context["reportId"] : $this->getContext($context, "reportId")), "html", null, true);
        echo "\" style=\"color: rgb(";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTitleTextColor"]) ? $context["reportTitleTextColor"] : $this->getContext($context, "reportTitleTextColor")), "html", null, true);
        echo "); font-size: ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTitleTextSize"]) ? $context["reportTitleTextSize"] : $this->getContext($context, "reportTitleTextSize")), "html", null, true);
        echo "pt; font-weight:normal;\">
    ";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportName"]) ? $context["reportName"] : $this->getContext($context, "reportName")), "html", null, true);
        echo "
</h2>

";
        // line 5
        if (twig_test_empty((isset($context["reportRows"]) ? $context["reportRows"] : $this->getContext($context, "reportRows")))) {
            // line 6
            echo "    ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_ThereIsNoDataForThisReport")), "html", null, true);
            echo "
";
        } else {
            // line 8
            echo "    ";
            if ((isset($context["displayGraph"]) ? $context["displayGraph"] : $this->getContext($context, "displayGraph"))) {
                // line 9
                echo "        <img alt=\"\"
                ";
                // line 10
                if ((isset($context["renderImageInline"]) ? $context["renderImageInline"] : $this->getContext($context, "renderImageInline"))) {
                    // line 11
                    echo "                    src=\"data:image/png;base64,";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["generatedImageGraph"]) ? $context["generatedImageGraph"] : $this->getContext($context, "generatedImageGraph")), "html", null, true);
                    echo "\"
                ";
                } else {
                    // line 13
                    echo "                    src=\"cid:";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportId"]) ? $context["reportId"] : $this->getContext($context, "reportId")), "html", null, true);
                    echo "\"
                ";
                }
                // line 15
                echo "                height=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["graphHeight"]) ? $context["graphHeight"] : $this->getContext($context, "graphHeight")), "html", null, true);
                echo "\"
                width=\"";
                // line 16
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["graphWidth"]) ? $context["graphWidth"] : $this->getContext($context, "graphWidth")), "html", null, true);
                echo "\"/>
    ";
            }
            // line 18
            echo "
    ";
            // line 19
            if (((isset($context["displayGraph"]) ? $context["displayGraph"] : $this->getContext($context, "displayGraph")) && (isset($context["displayTable"]) ? $context["displayTable"] : $this->getContext($context, "displayTable")))) {
                // line 20
                echo "        <br/>
        <br/>
    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if ((isset($context["displayTable"]) ? $context["displayTable"] : $this->getContext($context, "displayTable"))) {
                // line 25
                echo "        <table style=\"border-collapse:collapse; margin-left: 5px;\">
            <thead style=\"background-color: rgb(";
                // line 26
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["tableHeaderBgColor"]) ? $context["tableHeaderBgColor"] : $this->getContext($context, "tableHeaderBgColor")), "html", null, true);
                echo "); color: rgb(";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["tableHeaderTextColor"]) ? $context["tableHeaderTextColor"] : $this->getContext($context, "tableHeaderTextColor")), "html", null, true);
                echo "); font-size: ";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTableHeaderTextSize"]) ? $context["reportTableHeaderTextSize"] : $this->getContext($context, "reportTableHeaderTextSize")), "html", null, true);
                echo "pt; text-transform: ";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTableHeaderTextTransform"]) ? $context["reportTableHeaderTextTransform"] : $this->getContext($context, "reportTableHeaderTextTransform")), "html", null, true);
                echo "; line-height:2.5em;\">
            ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reportColumns"]) ? $context["reportColumns"] : $this->getContext($context, "reportColumns")));
                foreach ($context['_seq'] as $context["_key"] => $context["columnName"]) {
                    // line 28
                    echo "                <th style=\"font-weight: ";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTableHeaderTextWeight"]) ? $context["reportTableHeaderTextWeight"] : $this->getContext($context, "reportTableHeaderTextWeight")), "html", null, true);
                    echo "; font-size:10px; text-align:left; padding: 6px 0;\">
                    &nbsp;";
                    // line 29
                    echo \Piwik\piwik_escape_filter($this->env, $context["columnName"], "html", null, true);
                    echo "&nbsp;&nbsp;
                </th>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columnName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </thead>
            <tbody>
            ";
                // line 34
                $context["cycleValues"] = array(0 => "", 1 => (("background-color: rgb(" . (isset($context["tableBgColor"]) ? $context["tableBgColor"] : $this->getContext($context, "tableBgColor"))) . ")"));
                // line 35
                echo "            ";
                $context["cycleIndex"] = 1;
                // line 36
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reportRows"]) ? $context["reportRows"] : $this->getContext($context, "reportRows")));
                foreach ($context['_seq'] as $context["rowId"] => $context["row"]) {
                    // line 37
                    echo "                ";
                    $context["rowMetrics"] = $this->getAttribute($context["row"], "columns", array());
                    // line 38
                    echo "
                ";
                    // line 39
                    if ($this->getAttribute((isset($context["reportRowsMetadata"]) ? $context["reportRowsMetadata"] : null), $context["rowId"], array(), "array", true, true)) {
                        // line 40
                        echo "                    ";
                        $context["rowMetadata"] = $this->getAttribute($this->getAttribute((isset($context["reportRowsMetadata"]) ? $context["reportRowsMetadata"] : $this->getContext($context, "reportRowsMetadata")), $context["rowId"], array(), "array"), "columns", array());
                        // line 41
                        echo "                ";
                    } else {
                        // line 42
                        echo "                    ";
                        $context["rowMetadata"] = null;
                        // line 43
                        echo "                ";
                    }
                    // line 44
                    echo "                <tr style=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_cycle((isset($context["cycleValues"]) ? $context["cycleValues"] : $this->getContext($context, "cycleValues")), (isset($context["cycleIndex"]) ? $context["cycleIndex"] : $this->getContext($context, "cycleIndex"))), "html", null, true);
                    echo ";line-height: 22px;\">
                    ";
                    // line 45
                    $context["cycleIndex"] = ((isset($context["cycleIndex"]) ? $context["cycleIndex"] : $this->getContext($context, "cycleIndex")) + 1);
                    // line 46
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["reportColumns"]) ? $context["reportColumns"] : $this->getContext($context, "reportColumns")));
                    foreach ($context['_seq'] as $context["columnId"] => $context["columnName"]) {
                        // line 47
                        echo "                        <td style=\"font-size: ";
                        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTableRowTextSize"]) ? $context["reportTableRowTextSize"] : $this->getContext($context, "reportTableRowTextSize")), "html", null, true);
                        echo "; ";
                        if (($context["columnId"] == "label")) {
                            echo "border-right: 1px solid rgb(";
                            echo \Piwik\piwik_escape_filter($this->env, (isset($context["tableCellBorderColor"]) ? $context["tableCellBorderColor"] : $this->getContext($context, "tableCellBorderColor")), "html", null, true);
                            echo "); ";
                        } else {
                            echo "border-left: 1px solid rgb(";
                            echo \Piwik\piwik_escape_filter($this->env, (isset($context["tableCellBorderColor"]) ? $context["tableCellBorderColor"] : $this->getContext($context, "tableCellBorderColor")), "html", null, true);
                            echo "); ";
                        }
                        echo " padding: 5px 0 5px 5px;\">
                            ";
                        // line 48
                        if (($context["columnId"] == "label")) {
                            // line 49
                            echo "                                ";
                            if ($this->getAttribute((isset($context["rowMetrics"]) ? $context["rowMetrics"] : null), $context["columnId"], array(), "array", true, true)) {
                                // line 50
                                echo "                                    ";
                                if ($this->getAttribute((isset($context["rowMetadata"]) ? $context["rowMetadata"] : null), "logo", array(), "any", true, true)) {
                                    // line 51
                                    echo "                                        <img src='";
                                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["rowMetadata"]) ? $context["rowMetadata"] : $this->getContext($context, "rowMetadata")), "logo", array()), "html", null, true);
                                    echo "'>
                                        &nbsp;
                                    ";
                                }
                                // line 54
                                echo "                                    ";
                                if ($this->getAttribute((isset($context["rowMetadata"]) ? $context["rowMetadata"] : null), "url", array(), "any", true, true)) {
                                    // line 55
                                    echo "                                        <a style=\"color: rgb(";
                                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTextColor"]) ? $context["reportTextColor"] : $this->getContext($context, "reportTextColor")), "html", null, true);
                                    echo ");\" href='";
                                    if (!twig_in_filter(twig_slice($this->env, $this->getAttribute((isset($context["rowMetadata"]) ? $context["rowMetadata"] : $this->getContext($context, "rowMetadata")), "url", array()), 0, 4), array(0 => "http", 1 => "ftp:"))) {
                                        echo "http://";
                                    }
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["rowMetadata"]) ? $context["rowMetadata"] : $this->getContext($context, "rowMetadata")), "url", array()), "html", null, true);
                                    echo "'>
                                    ";
                                }
                                // line 57
                                echo "                                    ";
                                echo $this->getAttribute((isset($context["rowMetrics"]) ? $context["rowMetrics"] : $this->getContext($context, "rowMetrics")), $context["columnId"], array(), "array");
                                // line 58
                                echo "                                    ";
                                if ($this->getAttribute((isset($context["rowMetadata"]) ? $context["rowMetadata"] : null), "url", array(), "any", true, true)) {
                                    // line 59
                                    echo "                                        </a>
                                    ";
                                }
                                // line 61
                                echo "                                ";
                            }
                            // line 62
                            echo "                            ";
                        } else {
                            // line 63
                            echo "                                ";
                            if (twig_test_empty($this->getAttribute((isset($context["rowMetrics"]) ? $context["rowMetrics"] : $this->getContext($context, "rowMetrics")), $context["columnId"], array(), "array"))) {
                                // line 64
                                echo "                                    0
                                ";
                            } else {
                                // line 66
                                echo "                                    ";
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), array($this->getAttribute((isset($context["rowMetrics"]) ? $context["rowMetrics"] : $this->getContext($context, "rowMetrics")), $context["columnId"], array(), "array"), 2)), "html", null, true);
                                echo "
                                ";
                            }
                            // line 68
                            echo "                            ";
                        }
                        // line 69
                        echo "                        </td>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['columnId'], $context['columnName'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['rowId'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "            </tbody>
        </table>
    ";
            }
            // line 76
            echo "    <br/>
    <a style=\"text-decoration:none; color: rgb(";
            // line 77
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTitleTextColor"]) ? $context["reportTitleTextColor"] : $this->getContext($context, "reportTitleTextColor")), "html", null, true);
            echo "); font-size: ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportBackToTopTextSize"]) ? $context["reportBackToTopTextSize"] : $this->getContext($context, "reportBackToTopTextSize")), "html", null, true);
            echo "pt;\" href=\"#reportTop\">
        ";
            // line 78
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_TopOfReport")), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/ReportRenderer/_htmlReportBody.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 78,  263 => 77,  260 => 76,  255 => 73,  248 => 71,  241 => 69,  238 => 68,  232 => 66,  228 => 64,  225 => 63,  222 => 62,  219 => 61,  215 => 59,  212 => 58,  209 => 57,  198 => 55,  195 => 54,  187 => 51,  184 => 50,  181 => 49,  179 => 48,  164 => 47,  159 => 46,  157 => 45,  152 => 44,  149 => 43,  146 => 42,  143 => 41,  140 => 40,  138 => 39,  135 => 38,  132 => 37,  127 => 36,  124 => 35,  122 => 34,  118 => 32,  109 => 29,  104 => 28,  100 => 27,  90 => 26,  87 => 25,  85 => 24,  82 => 23,  77 => 20,  75 => 19,  72 => 18,  67 => 16,  62 => 15,  56 => 13,  50 => 11,  48 => 10,  45 => 9,  42 => 8,  36 => 6,  34 => 5,  28 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<h2 id=\"{{ reportId }}\" style=\"color: rgb({{ reportTitleTextColor }}); font-size: {{ reportTitleTextSize }}pt; font-weight:normal;\">
    {{ reportName }}
</h2>

{% if reportRows is empty %}
    {{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}
{% else %}
    {% if displayGraph %}
        <img alt=\"\"
                {% if renderImageInline %}
                    src=\"data:image/png;base64,{{ generatedImageGraph }}\"
                {% else %}
                    src=\"cid:{{ reportId }}\"
                {% endif %}
                height=\"{{ graphHeight }}\"
                width=\"{{ graphWidth }}\"/>
    {% endif %}

    {% if displayGraph and displayTable %}
        <br/>
        <br/>
    {% endif %}

    {% if displayTable %}
        <table style=\"border-collapse:collapse; margin-left: 5px;\">
            <thead style=\"background-color: rgb({{ tableHeaderBgColor }}); color: rgb({{ tableHeaderTextColor }}); font-size: {{ reportTableHeaderTextSize }}pt; text-transform: {{ reportTableHeaderTextTransform }}; line-height:2.5em;\">
            {% for columnName in reportColumns %}
                <th style=\"font-weight: {{ reportTableHeaderTextWeight }}; font-size:10px; text-align:left; padding: 6px 0;\">
                    &nbsp;{{ columnName }}&nbsp;&nbsp;
                </th>
            {% endfor %}
            </thead>
            <tbody>
            {% set cycleValues=['','background-color: rgb('~tableBgColor~')'] %}
            {% set cycleIndex=1 %}
            {% for rowId,row in reportRows %}
                {% set rowMetrics=row.columns %}

                {% if reportRowsMetadata[rowId] is defined %}
                    {% set rowMetadata=reportRowsMetadata[rowId].columns %}
                {% else %}
                    {% set rowMetadata=null %}
                {% endif %}
                <tr style=\"{{ cycle(cycleValues, cycleIndex) }};line-height: 22px;\">
                    {% set cycleIndex=cycleIndex+1 %}
                    {% for columnId, columnName in reportColumns %}
                        <td style=\"font-size: {{ reportTableRowTextSize }}; {% if columnId == 'label' %}border-right: 1px solid rgb({{ tableCellBorderColor }}); {%  else %}border-left: 1px solid rgb({{ tableCellBorderColor }}); {% endif %} padding: 5px 0 5px 5px;\">
                            {% if columnId == 'label' %}
                                {% if rowMetrics[columnId] is defined %}
                                    {% if rowMetadata.logo is defined %}
                                        <img src='{{ currentPath }}{{ rowMetadata.logo }}'>
                                        &nbsp;
                                    {% endif %}
                                    {% if rowMetadata.url is defined %}
                                        <a style=\"color: rgb({{ reportTextColor }});\" href='{% if rowMetadata.url|slice(0,4) not in ['http','ftp:'] %}http://{% endif %}{{ rowMetadata.url }}'>
                                    {% endif %}
                                    {{ rowMetrics[columnId] | raw }}{# labels are escaped by SafeDecodeLabel filter in core/API/Response.php #}
                                    {% if rowMetadata.url is defined %}
                                        </a>
                                    {% endif %}
                                {% endif %}
                            {% else %}
                                {% if rowMetrics[columnId] is empty %}
                                    0
                                {% else %}
                                    {{ rowMetrics[columnId]|number(2) }}
                                {% endif %}
                            {% endif %}
                        </td>
                    {% endfor %}
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}
    <br/>
    <a style=\"text-decoration:none; color: rgb({{ reportTitleTextColor }}); font-size: {{ reportBackToTopTextSize }}pt;\" href=\"#reportTop\">
        {{ 'ScheduledReports_TopOfReport'|translate }}
    </a>
{% endif %}
";
    }
}
