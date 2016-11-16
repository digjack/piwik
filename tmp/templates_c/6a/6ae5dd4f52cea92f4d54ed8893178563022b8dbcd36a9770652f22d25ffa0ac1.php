<?php

/* @MobileMessaging/reportParametersScheduledReports.twig */
class __TwigTemplate_b08d1c564410403d0c113c5cf7fd5c5f89b23310191c61094a4296bf9978d63a extends Twig_Template
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
        echo "
<tr class='";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportType"]) ? $context["reportType"] : $this->getContext($context, "reportType")), "html", null, true);
        echo "'>
    <td class=\"first\">
    ";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_PhoneNumbers")), "html", null, true);
        echo "
    </td>
    <td>
    <div class=\"entityInlineHelp\">
    ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : $this->getContext($context, "phoneNumbers"))) == 0)) {
            // line 9
            echo "        <div><span class=\"icon-info\"></span> ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_MobileReport_NoPhoneNumbers")), "html", null, true);
            echo "
    ";
        } else {
            // line 11
            echo "        <ul class=\"clearfix\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : $this->getContext($context, "phoneNumbers")));
            foreach ($context['_seq'] as $context["_key"] => $context["phoneNumber"]) {
                // line 13
                echo "            <li class=\"clear\"><label><input name='phoneNumbers' type='checkbox' id='";
                echo \Piwik\piwik_escape_filter($this->env, $context["phoneNumber"], "html", null, true);
                echo "'/>";
                echo \Piwik\piwik_escape_filter($this->env, $context["phoneNumber"], "html", null, true);
                echo "</label></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phoneNumber'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </ul>
        <div><span class=\"icon-info\"></span> ";
            // line 16
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_MobileReport_AdditionalPhoneNumbers")), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "        <a href=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "MobileMessaging", "action" => "index", "updated" => null))), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_MobileReport_MobileMessagingSettingsLink")), "html", null, true);
        echo "</a></div>
    </div>
    <script>
    \$(function () {
        resetReportParametersFunctions ['";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportType"]) ? $context["reportType"] : $this->getContext($context, "reportType")), "html", null, true);
        echo "'] = function () {
            var reportParameters = {
            'phoneNumbers': []
            };
            updateReportParametersFunctions['";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportType"]) ? $context["reportType"] : $this->getContext($context, "reportType")), "html", null, true);
        echo "'](reportParameters);
        };

        updateReportParametersFunctions['";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportType"]) ? $context["reportType"] : $this->getContext($context, "reportType")), "html", null, true);
        echo "'] = function (reportParameters) {

            if (reportParameters == null) return;

            \$('[name=phoneNumbers]').removeProp('checked');
            \$(reportParameters.phoneNumbers).each(function (index, phoneNumber) {
            \$('#\\\\' + phoneNumber).prop('checked', 'checked');
            });

            \$(document).trigger('ScheduledReport.edit', {});

        };

        getReportParametersFunctions['";
        // line 42
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportType"]) ? $context["reportType"] : $this->getContext($context, "reportType")), "html", null, true);
        echo "'] = function () {
            var parameters = Object();
            var selectedPhoneNumbers = \$.map(
                \$('[name=phoneNumbers]').filter(function() {
                    return !this.disabled && this.checked;
                }),
                function (phoneNumber) {
                    return \$(phoneNumber).attr('id');
                }
            );

            // returning [''] when no phone numbers are selected avoids the \"please provide a value for 'parameters'\" error message
            parameters.phoneNumbers = selectedPhoneNumbers.length > 0 ? selectedPhoneNumbers : [''];

            return parameters;
        };
    });
    </script>

    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MobileMessaging/reportParametersScheduledReports.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 42,  91 => 29,  85 => 26,  78 => 22,  68 => 18,  63 => 16,  60 => 15,  49 => 13,  45 => 12,  42 => 11,  36 => 9,  34 => 8,  27 => 4,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "
<tr class='{{ reportType }}'>
    <td class=\"first\">
    {{ 'MobileMessaging_PhoneNumbers'|translate }}
    </td>
    <td>
    <div class=\"entityInlineHelp\">
    {% if phoneNumbers|length == 0 %}
        <div><span class=\"icon-info\"></span> {{ 'MobileMessaging_MobileReport_NoPhoneNumbers'|translate }}
    {% else %}
        <ul class=\"clearfix\">
        {% for phoneNumber in phoneNumbers %}
            <li class=\"clear\"><label><input name='phoneNumbers' type='checkbox' id='{{ phoneNumber }}'/>{{ phoneNumber }}</label></li>
        {% endfor %}
        </ul>
        <div><span class=\"icon-info\"></span> {{ 'MobileMessaging_MobileReport_AdditionalPhoneNumbers'|translate }}
    {% endif %}
        <a href=\"{{ linkTo({'module':\"MobileMessaging\", 'action': 'index', 'updated':null}) }}\">{{ 'MobileMessaging_MobileReport_MobileMessagingSettingsLink'|translate }}</a></div>
    </div>
    <script>
    \$(function () {
        resetReportParametersFunctions ['{{ reportType }}'] = function () {
            var reportParameters = {
            'phoneNumbers': []
            };
            updateReportParametersFunctions['{{ reportType }}'](reportParameters);
        };

        updateReportParametersFunctions['{{ reportType }}'] = function (reportParameters) {

            if (reportParameters == null) return;

            \$('[name=phoneNumbers]').removeProp('checked');
            \$(reportParameters.phoneNumbers).each(function (index, phoneNumber) {
            \$('#\\\\' + phoneNumber).prop('checked', 'checked');
            });

            \$(document).trigger('ScheduledReport.edit', {});

        };

        getReportParametersFunctions['{{ reportType }}'] = function () {
            var parameters = Object();
            var selectedPhoneNumbers = \$.map(
                \$('[name=phoneNumbers]').filter(function() {
                    return !this.disabled && this.checked;
                }),
                function (phoneNumber) {
                    return \$(phoneNumber).attr('id');
                }
            );

            // returning [''] when no phone numbers are selected avoids the \"please provide a value for 'parameters'\" error message
            parameters.phoneNumbers = selectedPhoneNumbers.length > 0 ? selectedPhoneNumbers : [''];

            return parameters;
        };
    });
    </script>

    </td>
</tr>
";
    }
}
