<?php

/* @DevicesDetection/list.twig */
class __TwigTemplate_011be0295a563f7df5bf4c1332b68a07a90fc2d9563d55536bd228078b02cb87 extends Twig_Template
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
        echo "<table class=\"dataTable\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itemList"]) ? $context["itemList"] : $this->getContext($context, "itemList")));
        foreach ($context['_seq'] as $context["name"] => $context["image"]) {
            // line 3
            echo "        <tr>
            <td><img src=\"";
            // line 4
            echo \Piwik\piwik_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" /> ";
            echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "@DevicesDetection/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<table class=\"dataTable\">
    {% for name,image in itemList %}
        <tr>
            <td><img src=\"{{ image }}\" /> {{ name }}</td>
        </tr>
    {% endfor %}
</table>
";
    }
}
