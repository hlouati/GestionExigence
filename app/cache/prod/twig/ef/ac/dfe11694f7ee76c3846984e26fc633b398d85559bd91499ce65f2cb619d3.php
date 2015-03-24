<?php

/* projectBundle:besoin:newTwigTemplate.html.twig */
class __TwigTemplate_efacdfe11694f7ee76c3846984e26fc633b398d85559bd91499ce65f2cb619d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'Containtname' => array($this, 'block_Containtname'),
            'Containt' => array($this, 'block_Containt'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->env->resolveTemplate(array(0 => "userBundle:dashboard:dashboard.html.twig"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Containtname($context, array $blocks = array())
    {
        // line 4
        echo "        <a href=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Besoin_add", array("idprojet" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "idprojet"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-primary\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Ajouter</a>
  
    ";
    }

    // line 7
    public function block_Containt($context, array $blocks = array())
    {
        // line 8
        echo "


        ";
        // line 11
        $this->displayBlock('modal', $context, $blocks);
        // line 13
        echo "        
 
        
        
        <script>
        \$(document).ready(function(){
\$(\"#mytable #checkall\").click(function () {
        if (\$(\"#mytable #checkall\").is(':checked')) {
            \$(\"#mytable input[type=checkbox]\").each(function () {
                \$(this).prop(\"checked\", true);
            });

        } else {
            \$(\"#mytable input[type=checkbox]\").each(function () {
                \$(this).prop(\"checked\", false);
            });
        }
    });
    
    \$(\"[data-toggle=tooltip]\").tooltip();
});    
            
            
        </script>    
    ";
    }

    // line 11
    public function block_modal($context, array $blocks = array())
    {
        // line 12
        echo "            ";
    }

    public function getTemplateName()
    {
        return "projectBundle:besoin:newTwigTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  79 => 11,  51 => 13,  49 => 11,  44 => 8,  41 => 7,  32 => 4,  29 => 3,  20 => 2,);
    }
}
