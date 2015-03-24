<?php

/* userBundle:logout:logout.html.twig */
class __TwigTemplate_d9806e0ca81ae43398902bc2642e280d7ee78591b27774647ebf6d092953683c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::empty.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::empty.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " logout";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        echo "  
     
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "userBundle:logout:logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  62 => 13,  54 => 7,  48 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
