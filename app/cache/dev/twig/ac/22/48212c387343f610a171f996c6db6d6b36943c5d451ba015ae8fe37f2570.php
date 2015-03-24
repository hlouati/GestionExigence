<?php

/* ::empty.html.twig */
class __TwigTemplate_ac2248212c387343f610a171f996c6db6d6b36943c5d451ba015ae8fe37f2570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    
 ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "   
     <!DOCTYPE html>          
          
 ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "            ";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "  
     <!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "  </title>

            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" >
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
             <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-table.css"), "html", null, true);
        echo "\" />
                        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
       
</head>

 <body> 
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        echo "  
     
 ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sb-admin.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/MultiNestedList.js"), "html", null, true);
        echo "\"></script> 
 

 </body>
</html>
  ";
    }

    public function getTemplateName()
    {
        return "::empty.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  121 => 31,  117 => 30,  113 => 29,  108 => 28,  105 => 27,  97 => 22,  91 => 7,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  52 => 7,  42 => 1,  38 => 37,  36 => 27,  31 => 24,  29 => 22,  26 => 21,  23 => 1,);
    }
}
