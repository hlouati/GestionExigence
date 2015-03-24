<?php

/* userBundle:gestionUtilisateur:home.html.twig */
class __TwigTemplate_417c74787b776ace17075888ed235ea3a1561e58cc065b7ae943120de5e148f6 extends Twig_Template
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
        // line 1
        return $this->env->resolveTemplate(array(0 => "userBundle:dashboard:dashboard.html.twig"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_Containtname($context, array $blocks = array())
    {
        // line 3
        echo "    <br/>
    <span><a href='' >Accueil</a></span> > <span><a href='' >Liste utilisateur</a></span>   
<br/>
<br/>
           ";
        // line 7
        if ($this->env->getExtension('security')->isGranted("ROLE_DIRECTEUR")) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_add");
            echo "\">
                <span>Ajouter un nouveau utilisateur</span></a>";
        }
        // line 9
        echo "            <span class=\"glyphicon glyphicon-plus\"></span>
            <br/><br/>
    ";
    }

    // line 12
    public function block_Containt($context, array $blocks = array())
    {
        // line 13
        echo " <table class=\"table table-condensed table-striped table-bordered table-hover no-margin\">
    <thead>
      <tr>
        <th style=\"width:10%\" class=\"hidden-phone\">Nom</th>
        <th style=\"width:10%\" class=\"hidden-phone\">Prenom</th>
        <th style=\"width:10%\" class=\"hidden-phone\">Email</td>
        <th style=\"width:10%\" class=\"hidden-phone\">Role</td>
        <th style=\"width:1%\" class=\"hidden-phone\">Action</th>
     
      </tr>
    </thead>
    <tbody>
        ";
        // line 25
        if (isset($context["listUser"])) { $_listUser_ = $context["listUser"]; } else { $_listUser_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_listUser_);
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 26
            echo "      <tr>
 
        <td> <span class=\"name\"> ";
            // line 28
            if (isset($context["u"])) { $_u_ = $context["u"]; } else { $_u_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_u_, "nom", array()), "html", null, true);
            echo "</a></span></td>
        <td class=\"hidden-phone\">  ";
            // line 29
            if (isset($context["u"])) { $_u_ = $context["u"]; } else { $_u_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_u_, "prenom", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-phone\">";
            // line 30
            if (isset($context["u"])) { $_u_ = $context["u"]; } else { $_u_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_u_, "email", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-phone\">";
            // line 31
            if (isset($context["u"])) { $_u_ = $context["u"]; } else { $_u_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_u_, "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 32
                echo "      ";
                if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
                echo twig_escape_filter($this->env, $_role_, "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo " </td>
        <td class=\"hidden-phone\">
              <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle\" data-original-title=\"\" title=\"\">
              Action 
              <span class=\"caret\">
              </span>
            </button>
            <ul class=\"dropdown-menu pull-right\">
              <li>
                <a href=\"#\">Supprimer</a>
              </li>
            </ul>
          </div>
        </td>
        
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
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
        return "userBundle:gestionUtilisateur:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 56,  143 => 55,  138 => 57,  136 => 55,  130 => 51,  107 => 33,  97 => 32,  92 => 31,  87 => 30,  82 => 29,  77 => 28,  73 => 26,  68 => 25,  54 => 13,  51 => 12,  45 => 9,  38 => 7,  32 => 3,  29 => 2,  20 => 1,);
    }
}
