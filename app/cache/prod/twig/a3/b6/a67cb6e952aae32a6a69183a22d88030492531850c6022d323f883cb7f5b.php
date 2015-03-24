<?php

/* userBundle:menu:directeur.html.twig */
class __TwigTemplate_a3b6a67cb6e952aae32a6a69183a22d88030492531850c6022d323f883cb7f5b extends Twig_Template
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
        // line 9
        echo $this->env->getExtension('routing')->getPath("projet_add");
        echo "\"><i class=\"fa  fa-plus-circle fa-fw\"></i> Nouveau projet</a>
        </li>
        <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("project_list");
        echo "\" ><i class=\"fa fa-list-alt fa-fw\"></i> Liste projets</a>
        </li>
        <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("projet_archive");
        echo "\"><i class=\"fa  fa-archive fa-fw\"></i> Archive</a>
        </li>
    </ul>
</li>

<li>
<a href=\"#\"><i class=\"fa  fa-file-text fa-fw\"></i> Gestion Client<span class=\"fa arrow\"></span></a>
    <ul class=\"nav nav-second-level\">
        <li>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("Client_list");
        echo "\" ><i class=\"fa fa-list-alt fa-fw\"></i> Fiche clients</a>
        </li>
        <li>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("Client_add");
        echo "\" ><i class=\"fa  fa-plus-circle fa-fw\"></i> Nouveau client</a>
        </li>
    </ul>
</li>        
<li>
<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("user_gestion");
        echo "\"><i class=\"fa fa-users fa-fw\"></i> Gestion des comptes</a>
</li>
                        
                    
         
";
    }

    public function getTemplateName()
    {
        return "userBundle:menu:directeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  76 => 27,  70 => 24,  58 => 15,  52 => 12,  46 => 9,  36 => 3,  11 => 1,);
    }
}
