<?php

/* aYalineHelloBundle:full:form.html.twig */
class __TwigTemplate_3046b34138f9b14d5de19a94af75f5f61f94016c1f3719dd719cec396c4a96d4 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "intro");
        echo "
</div>
 
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
 
</div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "aYalineHelloBundle:full:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  45 => 14,  38 => 10,  31 => 5,  28 => 4,);
    }
}
