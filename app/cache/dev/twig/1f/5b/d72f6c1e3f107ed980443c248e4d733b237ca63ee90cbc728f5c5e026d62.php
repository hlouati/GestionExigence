<?php

/* userBundle:menu:chefprojet.html.twig */
class __TwigTemplate_1f5bd72f6c1e3f107ed980443c248e4d733b237ca63ee90cbc728f5c5e026d62 extends Twig_Template
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
            'menulayout' => array($this, 'block_menulayout'),
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

    // line 3
    public function block_menulayout($context, array $blocks = array())
    {
        echo "  

              

       
<li>
<a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Gestion projets<span class=\"fa arrow\"></span></a>
    <ul class=\"nav nav-second-level\">
        
        <li>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("project_list");
        echo "\" ><i class=\"fa fa-list-alt fa-fw\"></i> Liste projets</a>
        </li>
         <li>
        <a href=\"\"><i class=\"fa  fa-archive fa-fw\"></i> Archive</a>
        </li>
        
    </ul>
</li>              

                        
                    
         
";
    }

    public function getTemplateName()
    {
        return "userBundle:menu:chefprojet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  36 => 3,  11 => 1,);
    }
}
