<?php

/* projectBundle:projet:intervanant.html.twig */
class __TwigTemplate_04f483bc6c355c92734f3015a0cea94663a65e66e2863334f3455fb4acd6632f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->env->resolveTemplate(array(0 => "userBundle:gestionUtilisateur:modal.html.twig"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_modal($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context["listUser"] = "";
        echo " 
          <!-- Modal -->
          <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" >
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
 <script type=\"text/javascript\">
 \$(document).ready(function() {
   \$('#myModal').modal({
    show: true,
   })
 });
</script>
 <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-     labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\">
     <div class=\"modal-content\">
       <div class=\"modal-header\">
         <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("user_gestion");
        echo "\" class=\"close\" >&times;</a>
         <h4 class=\"modal-title\" id=\"myModalLabel\">Liste des intervenant</h4>
       </div>
       <div class=\"modal-body\">
    ";
        // line 24
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFPROJET")) {
            echo " 
            <span>Ajouter un intervenant</span>
        
            <a href=\"";
            // line 27
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Projet_interCl", array("idprojet" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "idprojet"), "method"))), "html", null, true);
            echo "\"><span>Client</span></a>             
            <a href=\"";
            // line 28
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Projet_interCap", array("idprojet" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "idprojet"), "method"))), "html", null, true);
            echo "\">
                <span>Capgemeni</span></a>";
        }
        // line 29
        echo "<br/>
     <br/>
       <table class=\"table table-condensed table-striped table-bordered table-hover no-margin\">
    <thead>
      <tr>
        <th style=\"width:10%\" class=\"hidden-phone\">Nom</th>
        <th style=\"width:20%\" class=\"hidden-phone\">Prenom</th>
        <th style=\"width:10%\" class=\"hidden-phone\">Roles</th>
        <th style=\"width:10%\" class=\"hidden-phone\">Action</th>
     
      </tr>
    </thead>
    <tbody>
    
    ";
        // line 43
        if (isset($context["u"])) { $_u_ = $context["u"]; } else { $_u_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_u_, "user", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            echo "        <tr>
 
        <td class=\"hidden-phone\">";
            // line 46
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nom", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-phone\">";
            // line 47
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "prenom", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-phone\">";
            // line 48
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_user_, "Roles", array()), 0, array(), "array"), "html", null, true);
            echo "</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    
    </tbody>
  </table>
        
        
        
        
        
        
                </br>       
     </div>
       <div class=\"modal-footer\">
         
         <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("project_list");
        echo "\" class=\"btn btn-default\">Fermer</a>
       </div>

         </form>
     </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
    
        ";
    }

    public function getTemplateName()
    {
        return "projectBundle:projet:intervanant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 79,  147 => 66,  122 => 48,  117 => 47,  112 => 46,  108 => 44,  103 => 43,  87 => 29,  81 => 28,  76 => 27,  70 => 24,  63 => 20,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 3,  27 => 2,  18 => 1,);
    }
}
