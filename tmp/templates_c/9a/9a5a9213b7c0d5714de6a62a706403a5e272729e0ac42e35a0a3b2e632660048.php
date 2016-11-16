<?php

/* @CoreUpdater/updateSuccess.twig */
class __TwigTemplate_45d7f71dfe4679c0438b27da8af7d00a4e9d6c4b12c8ae0c1d13e2b212845fa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CoreUpdater/layout.twig", "@CoreUpdater/updateSuccess.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CoreUpdater/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"header\">
        <h1>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateSuccessTitle")), "html", null, true);
        echo "</h1>
    </div>

    <div class=\"content\">

        <h2>
            ";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ThankYouUpdatePiwik")), "html", null, true);
        echo "
        </h2>

        <p>
            ";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PostUpdateMessage")), "html", null, true);
        echo "

        </p>
        <p></p>

        <h2>
            ";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PostUpdateSupport")), "html", null, true);
        echo "
        </h2>

        <div class=\"row\" style=\"margin-top:7%\">
            <div class=\"col-sm-5 col-sm-offset-1\">
                <a href=\"https://piwik.org/support/?pk_medium=Update_Success_button&pk_source=Piwik_App&pk_campaign=App_Updated\" class=\"btn btn-lg btn-block\">";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ProfessionalServices")), "html", null, true);
        echo "</a>
            </div>

            <div class=\"col-sm-5\">
                <a href=\"https://piwik.org/hosting/?pk_medium=App_Cloud_button&pk_source=Piwik_App&pk_campaign=App_Updated\" class=\"btn btn-lg btn-block\">";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_CloudHosting")), "html", null, true);
        echo "</a>
            </div>
        </div>

    </div>

    <div class=\"footer\">
        <a href=\"index.php\">";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ContinueToPiwik")), "html", null, true);
        echo "</a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/updateSuccess.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  75 => 31,  68 => 27,  60 => 22,  51 => 16,  44 => 12,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@CoreUpdater/layout.twig' %}

{% block content %}

    <div class=\"header\">
        <h1>{{ 'CoreUpdater_UpdateSuccessTitle'|translate }}</h1>
    </div>

    <div class=\"content\">

        <h2>
            {{ 'CoreUpdater_ThankYouUpdatePiwik'|translate }}
        </h2>

        <p>
            {{ 'CoreUpdater_PostUpdateMessage'|translate }}

        </p>
        <p></p>

        <h2>
            {{ 'CoreUpdater_PostUpdateSupport'|translate }}
        </h2>

        <div class=\"row\" style=\"margin-top:7%\">
            <div class=\"col-sm-5 col-sm-offset-1\">
                <a href=\"https://piwik.org/support/?pk_medium=Update_Success_button&pk_source=Piwik_App&pk_campaign=App_Updated\" class=\"btn btn-lg btn-block\">{{ 'CoreUpdater_ProfessionalServices'|translate }}</a>
            </div>

            <div class=\"col-sm-5\">
                <a href=\"https://piwik.org/hosting/?pk_medium=App_Cloud_button&pk_source=Piwik_App&pk_campaign=App_Updated\" class=\"btn btn-lg btn-block\">{{ 'CoreUpdater_CloudHosting'|translate }}</a>
            </div>
        </div>

    </div>

    <div class=\"footer\">
        <a href=\"index.php\">{{ 'General_ContinueToPiwik'|translate }}</a>
    </div>

{% endblock %}
";
    }
}
