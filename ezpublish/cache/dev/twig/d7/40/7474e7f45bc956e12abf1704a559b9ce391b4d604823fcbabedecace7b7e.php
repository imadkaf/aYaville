<?php

/* aYalineHelloBundle:confirm:form.html.twig */
class __TwigTemplate_d7407474e7f45bc956e12abf1704a559b9ce391b4d604823fcbabedecace7b7e extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<section class=\"content-view-full\">
<div class=\"row\">
<div class=\"span8\">
 
<div class=\"attribute-header\">
<h1>";
        // line 10
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title");
        echo "</h1>
</div>
 
<div class=\"attribute-short\">
";
        // line 14
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "confirm");
        echo "
</div>
 
</div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "aYalineHelloBundle:confirm:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  38 => 10,  31 => 5,  28 => 4,);
    }
}
