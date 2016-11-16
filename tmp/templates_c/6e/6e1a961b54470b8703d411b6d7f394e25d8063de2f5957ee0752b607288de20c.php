<?php

/* @CoreHome/ReportRenderer/_htmlReportHeader.twig */
class __TwigTemplate_944e02ed70d5e15141cd0829a6ee883ca58081ef863a98d8ed844ad223f115b1 extends Twig_Template
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
        echo "<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
</head>
<body style=\"font-family: ";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportFontFamily"]) ? $context["reportFontFamily"] : $this->getContext($context, "reportFontFamily")), "html", null, true);
        echo "; color: rgb(";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTextColor"]) ? $context["reportTextColor"] : $this->getContext($context, "reportTextColor")), "html", null, true);
        echo ");line-height: 1.33;\">

<a id=\"reportTop\" rel=\"noreferrer\" target=\"_blank\" href=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
        echo "\"><img title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GoTo", "Piwik")), "html", null, true);
        echo "\" border=\"0\" alt=\"Piwik\" src='";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["logoHeader"]) ? $context["logoHeader"] : $this->getContext($context, "logoHeader")), "html", null, true);
        echo "'/></a>

<h1 style=\"font-weight:normal; color: rgb(";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTitleTextColor"]) ? $context["reportTitleTextColor"] : $this->getContext($context, "reportTitleTextColor")), "html", null, true);
        echo "); font-size: ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTitleTextSize"]) ? $context["reportTitleTextSize"] : $this->getContext($context, "reportTitleTextSize")), "html", null, true);
        echo "pt;\">
    ";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTitle"]) ? $context["reportTitle"] : $this->getContext($context, "reportTitle")), "html", null, true);
        echo "
</h1>

<p>
    ";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        echo " - ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRange")), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["prettyDate"]) ? $context["prettyDate"] : $this->getContext($context, "prettyDate")), "html", null, true);
        echo "
</p>

";
        // line 18
        if ((isset($context["displaySegment"]) ? $context["displaySegment"] : $this->getContext($context, "displaySegment"))) {
            // line 19
            echo "<p style=\"color: rgb(";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTitleTextColor"]) ? $context["reportTitleTextColor"] : $this->getContext($context, "reportTitleTextColor")), "html", null, true);
            echo ");\">
    ";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_CustomVisitorSegment", "Piwik")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["segmentName"]) ? $context["segmentName"] : $this->getContext($context, "segmentName")), "html", null, true);
            echo "
</p>
";
        }
        // line 23
        echo "
";
        // line 24
        if ((twig_length_filter($this->env, (isset($context["reportMetadata"]) ? $context["reportMetadata"] : $this->getContext($context, "reportMetadata"))) > 1)) {
            // line 25
            echo "    <h2 style=\"font-weight:normal; color: rgb(";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTitleTextColor"]) ? $context["reportTitleTextColor"] : $this->getContext($context, "reportTitleTextColor")), "html", null, true);
            echo "); font-size: ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTitleTextSize"]) ? $context["reportTitleTextSize"] : $this->getContext($context, "reportTitleTextSize")), "html", null, true);
            echo "pt;\">
        ";
            // line 26
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_TableOfContent")), "html", null, true);
            echo "
    </h2>
    <ul>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reportMetadata"]) ? $context["reportMetadata"] : $this->getContext($context, "reportMetadata")));
            foreach ($context['_seq'] as $context["_key"] => $context["metadata"]) {
                // line 30
                echo "            <li>
                <a href=\"#";
                // line 31
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["metadata"], "uniqueId", array()), "html", null, true);
                echo "\" style=\"text-decoration:none; color: rgb(";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportTextColor"]) ? $context["reportTextColor"] : $this->getContext($context, "reportTextColor")), "html", null, true);
                echo ");\">
                    ";
                // line 32
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["metadata"], "name", array()), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/ReportRenderer/_htmlReportHeader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  111 => 32,  105 => 31,  102 => 30,  98 => 29,  92 => 26,  85 => 25,  83 => 24,  80 => 23,  72 => 20,  67 => 19,  65 => 18,  55 => 15,  48 => 11,  42 => 10,  33 => 8,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
</head>
<body style=\"font-family: {{ reportFontFamily }}; color: rgb({{ reportTextColor }});line-height: 1.33;\">

<a id=\"reportTop\" rel=\"noreferrer\" target=\"_blank\" href=\"{{ currentPath }}\"><img title=\"{{ 'General_GoTo'|translate(\"Piwik\") }}\" border=\"0\" alt=\"Piwik\" src='{{ logoHeader }}'/></a>

<h1 style=\"font-weight:normal; color: rgb({{ reportTitleTextColor }}); font-size: {{ reportTitleTextSize }}pt;\">
    {{ reportTitle }}
</h1>

<p>
    {{ description }} - {{ 'General_DateRange'|translate }} {{ prettyDate }}
</p>

{% if displaySegment %}
<p style=\"color: rgb({{ reportTitleTextColor }});\">
    {{ 'ScheduledReports_CustomVisitorSegment'|translate(\"Piwik\") }} {{ segmentName }}
</p>
{% endif %}

{% if reportMetadata|length > 1 %}
    <h2 style=\"font-weight:normal; color: rgb({{ reportTitleTextColor }}); font-size: {{ reportTitleTextSize }}pt;\">
        {{ 'ScheduledReports_TableOfContent'|translate }}
    </h2>
    <ul>
        {% for metadata in reportMetadata %}
            <li>
                <a href=\"#{{ metadata.uniqueId }}\" style=\"text-decoration:none; color: rgb({{ reportTextColor }});\">
                    {{ metadata.name }}
                </a>
            </li>
        {% endfor %}
    </ul>
{% endif %}
";
    }
}
