<?php

/* userBundle:menu:repclient.html.twig */
class __TwigTemplate_38a6eba8a98d881a27cd18929b618362041d759cb2e02d40e2ce8cc05022da12 extends Twig_Template
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
<a href=\"tables.html\"><i class=\"fa fa-user fa-fw\"></i> Mon compte</a>
</li>

<li>
<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("project_list");
        echo "\"><i class=\"fa fa-user fa-fw\"></i> Liste projets</a>
</li>
       



                        
                    
         
";
    }

    public function getTemplateName()
    {
        return "userBundle:menu:repclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  36 => 3,  11 => 1,);
    }
}
