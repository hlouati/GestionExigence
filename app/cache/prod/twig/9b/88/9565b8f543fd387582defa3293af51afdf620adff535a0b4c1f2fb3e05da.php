<?php

/* userBundle:client:ajouterClient.html.twig */
class __TwigTemplate_9b889565b8f543fd387582defa3293af51afdf620adff535a0b4c1f2fb3e05da extends Twig_Template
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
         <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter client</h4>
       </div>
       <div class=\"modal-body\">
       ";
        // line 24
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "::formLayout.html.twig"));
        // line 25
        echo "     
        <form method=\"post\" ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
            
        <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "rsocial", array()), 'label', array("label" => "Raison Social:"));
        echo "</div>
        <div class=\"col-sm-6\">  ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "rsocial", array()), 'widget', array("attr" => array("cols" => "40", "rows" => "10")));
        echo "</div>
           </div><br/>  
           
        <div class=\"row\">
        <div class=\"col-sm-3\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adr", array()), 'label', array("label" => "Adresse :  :"));
        echo "</div>
        <div class=\"col-sm-6\"> ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adr", array()), 'widget');
        echo "</div>
        </div></br>
        <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tel", array()), 'label', array("label" => "Téléphone :"));
        echo "</div>
        <div class=\"col-sm-6\">  ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tel", array()), 'widget', array("attr" => array("cols" => "40", "rows" => "10")));
        echo "</div>
        </div><br/>

        <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'label', array("label" => "Email : :"));
        echo "</div>
        <div class=\"col-sm-6\">  ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'widget', array("attr" => array("cols" => "40", "rows" => "10")));
        echo "</div>
        </div><br/>
        
        <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "act", array()), 'label', array("label" => "Activité :"));
        echo "</div>
        <div class=\"col-sm-6\">  ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "act", array()), 'widget', array("attr" => array("cols" => "40", "rows" => "10")));
        echo "</div>
        </div><br/>
        
           <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "rep", array()), 'label', array("label" => "Choisir un réprésentant :"));
        echo "</div>
        <div class=\"col-sm-6\">  ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "rep", array()), 'widget', array("attr" => array("cols" => "40", "rows" => "10")));
        echo "</div>
         ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "rep", array()), 'errors');
        echo "
           </div>
   
     </div>
       <div class=\"modal-footer\">
         <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
         <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("Client_list");
        echo "\" class=\"btn btn-default\">Fermer</a>
       </div>
       ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo " 
         </form>
     </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
    ";
    }

    public function getTemplateName()
    {
        return "userBundle:client:ajouterClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 63,  152 => 61,  143 => 55,  139 => 54,  135 => 53,  128 => 49,  124 => 48,  117 => 44,  113 => 43,  106 => 39,  102 => 38,  96 => 35,  92 => 34,  85 => 30,  81 => 29,  75 => 26,  72 => 25,  70 => 24,  63 => 20,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 3,  27 => 2,  18 => 1,);
    }
}
