<?php

/* {% extends "eZDemoBundle::pagelayout.html.twig" %}

{% block content %}
{{ viewResult|raw }}
{% endblock %} */
class __TwigTemplate_2e148e28708d85132a373399fb9d22113550a41297e41f1d3d9acbda35b5aff8 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("eZDemoBundle::pagelayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "eZDemoBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo (isset($context["viewResult"]) ? $context["viewResult"] : $this->getContext($context, "viewResult"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "{% extends \"eZDemoBundle::pagelayout.html.twig\" %}

{% block content %}
{{ viewResult|raw }}
{% endblock %}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,);
    }
}
