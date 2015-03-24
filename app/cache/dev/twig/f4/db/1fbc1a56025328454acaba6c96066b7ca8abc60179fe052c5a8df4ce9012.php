<?php

/* projectBundle:projet:list.html.twig */
class __TwigTemplate_f4db1fbc1a56025328454acaba6c96066b7ca8abc60179fe052c5a8df4ce9012 extends Twig_Template
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
        echo "    <br/>
    <span><a href='";
        // line 5
        echo $this->env->getExtension('routing')->getPath("project_list");
        echo "' >Accueil</a></span> > <span><a href='' >Liste projet</a></span>   
<br/>
<br/>
           ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_DIRECTEUR")) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("projet_add");
            echo "\"><span>Ajouter un nouveau projet</span></a> <span class=\"glyphicon glyphicon-plus\"></span><br/><br/>";
        }
        // line 9
        echo "                
           
            
    ";
    }

    // line 13
    public function block_Containt($context, array $blocks = array())
    {
        // line 14
        echo " <table class=\"table table-condensed table-striped table-bordered table-hover no-margin\">
    <thead>
      <tr>
        <th style=\"width:10%\" class=\"hidden-phone\">Titre</th>
        <th style=\"width:20%\" class=\"hidden-phone\">Déscription</th>
        <th style=\"width:10%\" class=\"hidden-phone\">client</th>
     ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFPROJET")) {
            echo "    <th style=\"width:7%\" class=\"hidden-phone\">Intervenant</th>";
        }
        // line 21
        echo "       ";
        if ($this->env->getExtension('security')->isGranted("ROLE_DIRECTEUR")) {
            echo "   <th style=\"width:1%\" class=\"hidden-phone\">Action</th>";
        }
        // line 22
        echo "     
      </tr>
    </thead>
    <tbody>
    
       ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "u"));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 28
            echo "      <tr>
        
        <td> <span class=\"name\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Besoin_list", array("idprojet" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">   ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom", array()), "html", null, true);
            echo "</a></span></td>
        <td class=\"hidden-phone\">  ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-phone\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "client", array()), "getRsocial", array(), "method"), "html", null, true);
            echo "</td>
       ";
            // line 33
            if ($this->env->getExtension('security')->isGranted("ROLE_CHEFPROJET")) {
                echo "  <td class=\"hidden-phone\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Projet_inter", array("idprojet" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                echo "\">liste des intervenants</a></td>";
            }
            // line 34
            echo "        ";
            if ($this->env->getExtension('security')->isGranted("ROLE_DIRECTEUR")) {
                echo "<td class=\"hidden-phone\">
              <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle\" data-original-title=\"\" title=\"\">
              Action 
              <span class=\"caret\">
              </span>
            </button>
            <ul class=\"dropdown-menu pull-right\">
              <li>
                <a href=\"#\">Archiver</a>
              </li>
            </ul>
          </div>
        </td>";
            }
            // line 48
            echo "        
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        
    </tbody>
  </table>
       
        ";
        // line 55
        $this->displayBlock('modal', $context, $blocks);
        // line 57
        echo "
    ";
    }

    // line 55
    public function block_modal($context, array $blocks = array())
    {
        // line 56
        echo "            ";
    }

    public function getTemplateName()
    {
        return "projectBundle:projet:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  148 => 55,  143 => 57,  141 => 55,  135 => 51,  127 => 48,  109 => 34,  103 => 33,  99 => 32,  95 => 31,  89 => 30,  85 => 28,  81 => 27,  74 => 22,  69 => 21,  65 => 20,  57 => 14,  54 => 13,  47 => 9,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  20 => 2,);
    }
}
