<?php

/* projectBundle:exigence:ajouterVersion.html.twig */
class __TwigTemplate_939f25271a943ba9909d457c2f33343352606d838826165a3129b52adf869820 extends Twig_Template
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
         <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter une version Exigence</h4>
       </div>
       <div class=\"modal-body\">
       ";
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $this->env->getExtension('form')->renderer->setTheme($_form_, array(0 => "::formLayout.html.twig"));
        // line 25
        echo "     
        <form method=\"post\" ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo ">
            
        <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type", array()), 'label', array("label" => "Choisir un type:"));
        echo "</div>
        <div class=\"col-sm-6\">  ";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type", array()), 'widget', array("attr" => array("cols" => "40", "rows" => "10")));
        echo "</div>
           </div><br/>  
           
        <div class=\"row\">
        <div class=\"col-sm-3\">";
        // line 34
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nom", array()), 'label', array("label" => "Libellé  :"));
        echo "</div>
        <div class=\"col-sm-6\"> ";
        // line 35
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nom", array()), 'widget');
        echo "</div>
        </div></br>
        <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "descp", array()), 'label', array("label" => "Déscription :"));
        echo "</div>
        <div class=\"col-sm-6\">  ";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "descp", array()), 'widget', array("attr" => array("cols" => "40", "rows" => "10")));
        echo "</div>
        </div><br/>

        <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "perio", array()), 'label', array("label" => "Priorité :"));
        echo "</div>
        <div class=\"col-sm-6\">  ";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "perio", array()), 'widget', array("attr" => array("cols" => "40", "rows" => "10")));
        echo "</div>
        </div><br/>
        
           <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 48
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "def", array()), 'label', array("label" => "Difficulté :"));
        echo "</div>
        <div class=\"col-sm-6\">  ";
        // line 49
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "def", array()), 'widget', array("attr" => array("cols" => "40", "rows" => "10")));
        echo "</div>
        </div>
   
     </div>
       <div class=\"modal-footer\">
         <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
         <a href=\"";
        // line 55
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Besoin_list", array("idprojet" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "idprojet"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-default\">Fermer</a>
       </div>
       ";
        // line 57
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo " 
         </form>
     </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
    ";
    }

    public function getTemplateName()
    {
        return "projectBundle:exigence:ajouterVersion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 57,  149 => 55,  139 => 49,  134 => 48,  126 => 44,  121 => 43,  113 => 39,  108 => 38,  101 => 35,  96 => 34,  88 => 30,  83 => 29,  76 => 26,  73 => 25,  70 => 24,  63 => 20,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 3,  27 => 2,  18 => 1,);
    }
}
