<?php

/* @Diagnostics/configfile.twig */
class __TwigTemplate_706efde874f47d24cbfd7e05a114688c032a0ea621819f68f84f1489fd46a491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Diagnostics/configfile.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <h2 piwik-enriched-headline>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Diagnostics_ConfigFileTitle")), "html", null, true);
        echo "</h2>
    <p>
        ";
        // line 19
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Diagnostics_ConfigFileIntroduction", "<code>\"config/config.ini.php\"</code>"));
        echo "
        ";
        // line 20
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Diagnostics_HideUnchanged", "<a ng-click=\"hideGlobalConfigValues=!hideGlobalConfigValues\">", "</a>"));
        echo "

        <h3>";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Diagnostics_Sections")), "html", null, true);
        echo "</h3>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allConfigValues"]) ? $context["allConfigValues"] : $this->getContext($context, "allConfigValues")));
        foreach ($context['_seq'] as $context["category"] => $context["values"]) {
            // line 24
            echo "            <a href=\"#";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</a><br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </p>

    <table class=\"simple-table diagnostics configfile\">
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allConfigValues"]) ? $context["allConfigValues"] : $this->getContext($context, "allConfigValues")));
        foreach ($context['_seq'] as $context["category"] => $context["configValues"]) {
            // line 31
            echo "            <tr><td colspan=\"3\"><a name=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html_attr");
            echo "\"></a><h3>";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</h3></td></tr>

            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["configValues"]);
            foreach ($context['_seq'] as $context["key"] => $context["configEntry"]) {
                // line 34
                echo "                <tr ";
                if ($this->getAttribute($context["configEntry"], "isCustomValue", array())) {
                    echo "class=\"custom-value\"";
                } else {
                    echo "ng-hide=\"hideGlobalConfigValues\"";
                }
                echo ">
                    <td class=\"name\">";
                // line 35
                echo \Piwik\piwik_escape_filter($this->env, $context["key"], "html", null, true);
                if (twig_test_iterable($this->getAttribute($context["configEntry"], "value", array()))) {
                    echo "[]";
                }
                echo "</td>
                    <td class=\"value\">
                        ";
                // line 37
                echo $this->getAttribute($this, "humanReadableValue", array(0 => $this->getAttribute($context["configEntry"], "value", array())), "method");
                echo "
                    </td>
                    <td class=\"description\">
                        ";
                // line 40
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["configEntry"], "description", array()), "html", null, true);
                echo "

                        ";
                // line 42
                if ((($this->getAttribute($context["configEntry"], "isCustomValue", array()) || (null === $this->getAttribute($context["configEntry"], "value", array()))) &&  !(null === $this->getAttribute($context["configEntry"], "defaultValue", array())))) {
                    // line 43
                    echo "                            ";
                    if ($this->getAttribute($context["configEntry"], "description", array())) {
                        echo "<br />";
                    }
                    // line 44
                    echo "
                            ";
                    // line 45
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Default")), "html", null, true);
                    echo ":
                            <span class=\"defaultValue\">";
                    // line 46
                    echo $this->getAttribute($this, "humanReadableValue", array(0 => $this->getAttribute($context["configEntry"], "defaultValue", array())), "method");
                    echo "<span>
                        ";
                }
                // line 48
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['configEntry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['configValues'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>

";
    }

    // line 3
    public function gethumanReadableValue($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            if (call_user_func_array($this->env->getTest('false')->getCallable(), array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 5
                echo "        false
    ";
            } elseif (call_user_func_array($this->env->getTest('true')->getCallable(), array(            // line 6
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 7
                echo "        true
    ";
            } elseif ((null ===             // line 8
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                // line 9
                echo "    ";
            } elseif (call_user_func_array($this->env->getTest('emptyString')->getCallable(), array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 10
                echo "        ''
    ";
            } else {
                // line 12
                echo "        ";
                echo \Piwik\piwik_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ", "), "html", null, true);
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@Diagnostics/configfile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 12,  183 => 10,  180 => 9,  178 => 8,  175 => 7,  173 => 6,  170 => 5,  167 => 4,  155 => 3,  148 => 52,  142 => 51,  134 => 48,  129 => 46,  125 => 45,  122 => 44,  117 => 43,  115 => 42,  110 => 40,  104 => 37,  96 => 35,  87 => 34,  83 => 33,  75 => 31,  71 => 30,  65 => 26,  54 => 24,  50 => 23,  46 => 22,  41 => 20,  37 => 19,  31 => 17,  28 => 16,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'admin.twig' %}

{% macro humanReadableValue(value) %}
    {% if value is false %}
        false
    {% elseif value is true %}
        true
    {% elseif value is null %}
    {% elseif value is emptyString %}
        ''
    {% else %}
        {{ value|join(', ') }}
    {% endif %}
{% endmacro %}

{% block content %}
    <h2 piwik-enriched-headline>{{ 'Diagnostics_ConfigFileTitle'|translate }}</h2>
    <p>
        {{ 'Diagnostics_ConfigFileIntroduction'|translate('<code>\"config/config.ini.php\"</code>')|raw }}
        {{ 'Diagnostics_HideUnchanged'|translate('<a ng-click=\"hideGlobalConfigValues=!hideGlobalConfigValues\">', '</a>')|raw }}

        <h3>{{ 'Diagnostics_Sections'|translate }}</h3>
        {% for category, values in allConfigValues %}
            <a href=\"#{{ category|e('html_attr') }}\">{{ category }}</a><br />
        {% endfor %}
    </p>

    <table class=\"simple-table diagnostics configfile\">
        <tbody>
        {% for category, configValues in allConfigValues %}
            <tr><td colspan=\"3\"><a name=\"{{ category|e('html_attr') }}\"></a><h3>{{ category }}</h3></td></tr>

            {% for key, configEntry in configValues %}
                <tr {% if configEntry.isCustomValue %}class=\"custom-value\"{% else %}ng-hide=\"hideGlobalConfigValues\"{% endif %}>
                    <td class=\"name\">{{ key }}{% if configEntry.value is iterable %}[]{% endif %}</td>
                    <td class=\"value\">
                        {{ _self.humanReadableValue(configEntry.value) }}
                    </td>
                    <td class=\"description\">
                        {{ configEntry.description }}

                        {% if (configEntry.isCustomValue or configEntry.value is null) and configEntry.defaultValue is not null %}
                            {% if configEntry.description %}<br />{% endif %}

                            {{ 'General_Default'|translate }}:
                            <span class=\"defaultValue\">{{ _self.humanReadableValue(configEntry.defaultValue) }}<span>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
        {% endfor %}
        </tbody>
    </table>

{% endblock %}";
    }
}
