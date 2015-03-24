<?php

/* userBundle:menu:intercap.html.twig */
class __TwigTemplate_5ec91528f4da19175b12b0c744abc72830da5964fe7f5860fe3a21c5d9fd8430 extends Twig_Template
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
        // line 11
        echo $this->env->getExtension('routing')->getPath("project_list");
        echo "\"><i class=\"fa fa-user fa-fw\"></i> Liste projets</a>
</li>
       

                
         
";
    }

    public function getTemplateName()
    {
        return "userBundle:menu:intercap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  36 => 3,  11 => 1,);
    }
}
