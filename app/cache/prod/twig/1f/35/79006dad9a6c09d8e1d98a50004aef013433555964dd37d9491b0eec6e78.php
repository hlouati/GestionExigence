<?php

/* userBundle:dashboard:dashboard.html.twig */
class __TwigTemplate_1f3579006dad9a6c09d8e1d98a50004aef013433555964dd37d9491b0eec6e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menulayout' => array($this, 'block_menulayout'),
            'Containtname' => array($this, 'block_Containtname'),
            'Containt' => array($this, 'block_Containt'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->env->resolveTemplate(twig_join_filter(array(0 => "userBundle:menu:", 1 => $this->getContext($context, "roles"), 2 => ".html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["role"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "roles", array()), 0, array(), "array"), "_");
        // line 2
        $context["roles"] = twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "role"), 1, array(), "array"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " dashboard ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "  
    <div id=\"wrapper\">
        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("project_list");
        echo "\">Accueil</a>
            </div>
            <!-- /.navbar-header -->

            <ul class=\"nav navbar-top-links navbar-right\">
           
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-user fa-fw\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "nom", array()), "html", null, true);
        echo " <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                       
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "\"><i class=\"fa fa-sign-out fa-fw\"></i> Déconnexion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
             <div class=\"navbar-default navbar-static-side\" role=\"navigation\">
                <div class=\"sidebar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                      
        ";
        // line 40
        $this->displayBlock('menulayout', $context, $blocks);
        echo " 
                                   </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
    </div>
                                                                     
<div id=\"page-wrapper\">
           
    
                 ";
        // line 53
        $this->displayBlock('Containtname', $context, $blocks);
        // line 54
        echo "     
                      ";
        // line 55
        $this->displayBlock('Containt', $context, $blocks);
        // line 58
        echo "</div>
            
                     
";
    }

    // line 40
    public function block_menulayout($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("menulayout", $context, $blocks);
        echo " ";
    }

    // line 53
    public function block_Containtname($context, array $blocks = array())
    {
    }

    // line 55
    public function block_Containt($context, array $blocks = array())
    {
        // line 56
        echo "          
                      ";
    }

    public function getTemplateName()
    {
        return "userBundle:dashboard:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  133 => 55,  128 => 53,  120 => 40,  113 => 58,  111 => 55,  108 => 54,  106 => 53,  90 => 40,  75 => 28,  67 => 23,  56 => 15,  42 => 5,  36 => 4,  32 => 3,  30 => 2,  28 => 1,  22 => 3,);
    }
}
