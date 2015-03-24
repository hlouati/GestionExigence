<?php

/* userBundle:gestionUtilisateur:formType.html.twig */
class __TwigTemplate_4792fe95db6067ad298632465d06230277d1166a6234c1126e94f2ae5274ffb3 extends Twig_Template
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
        return $this->env->resolveTemplate(array(0 => "userBundle:gestionUtilisateur:home.html.twig"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_modal($context, array $blocks = array())
    {
        // line 3
        echo "          <!-- Modal -->
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" >
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
             <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
               <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sb-admin.js"), "html", null, true);
        echo "\"></script>  

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
         <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
       </div>
       <div class=\"modal-body\">

    

    <div class=\"form-group\">
        
       
        <div class=\"list-group\">
             <a href=\"\" class=\"list-group-item list-group-item-info\">Choisir type utilisateur</a>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("user_add", array("type" => "Directeur"));
        echo "\" class=\"list-group-item\">Directeur</a>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("user_add", array("type" => "ChefProjet"));
        echo "\" class=\"list-group-item \">Chef de projet</a>
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("user_add", array("type" => "RepClient"));
        echo "\" class=\"list-group-item\">Réprésentant Client</a>
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("user_add", array("type" => "InterClient"));
        echo "\" class=\"list-group-item \">Intervenant Client</a>
       <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("user_add", array("type" => "InterCap"));
        echo "\" class=\"list-group-item \">Intervenant Capgemeni</a>
    
        </div>  
            
            
            
        
    </div>

      
       <div class=\"modal-footer\">
         </div>
        
     </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
 </div> 
    ";
    }

    public function getTemplateName()
    {
        return "userBundle:gestionUtilisateur:formType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  30 => 3,  27 => 2,  18 => 1,);
    }
}
