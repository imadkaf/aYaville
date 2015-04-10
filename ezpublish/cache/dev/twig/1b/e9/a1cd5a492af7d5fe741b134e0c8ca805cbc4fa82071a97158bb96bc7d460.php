<?php

/* aYalineHelloBundle:email:feedback.html.twig */
class __TwigTemplate_1be9a1cd5a492af7d5fe741b134e0c8ca805cbc4fa82071a97158bb96bc7d460 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["subject"]) ? $context["subject"] : $this->getContext($context, "subject")), "html", null, true);
        echo "</title>
</head>
<body>
<h1>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["subject"]) ? $context["subject"] : $this->getContext($context, "subject")), "html", null, true);
        echo "</h1>
<p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "fullName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email", array()), "html", null, true);
        echo " ) submitted this message:</p>
 
<p>";
        // line 11
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "message", array()), "html", null, true));
        echo "</p>
</body>
</html> ";
    }

    public function getTemplateName()
    {
        return "aYalineHelloBundle:email:feedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  34 => 9,  30 => 8,  24 => 5,  19 => 2,);
    }
}
