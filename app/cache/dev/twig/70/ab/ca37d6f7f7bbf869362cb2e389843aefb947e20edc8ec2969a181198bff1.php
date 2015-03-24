<?php

/* projectBundle:projet:ajouterProjet.html.twig */
class __TwigTemplate_70abca37d6f7f7bbf869362cb2e389843aefb947e20edc8ec2969a181198bff1 extends Twig_Template
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
         <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter Projet</h4>
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
        <div class=\"col-sm-3\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom", array()), 'label', array("label" => "Titre :"));
        echo "</div>
        <div class=\"col-sm-6\"> ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom", array()), 'widget');
        echo "</div>
        </div></br>
        <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description", array()), 'label', array("label" => "Déscription :"));
        echo "</div>
        <div class=\"col-sm-6\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description", array()), 'widget');
        echo "</div>
        </div>
        </br>
        <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "user", array()), 'label', array("label" => "Choisir un chef de projet :"));
        echo "</div>
        <div class=\"col-sm-6\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "user", array()), 'widget');
        echo "</div>
        </div>
        </br>
        <div class=\"row\">
        <div class=\"col-sm-3\"> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "client", array()), 'label', array("label" => "Choisir Client :"));
        echo "</div>
        <div class=\"col-sm-6\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "client", array()), 'widget');
        echo "</div>
        </div>
     
                </br>       
     </div>
       <div class=\"modal-footer\">
         <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
         <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("project_list");
        echo "\" class=\"btn btn-default\">Fermer</a>
       </div>
       ";
        // line 52
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
        return "projectBundle:projet:ajouterProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 52,  126 => 50,  116 => 43,  112 => 42,  105 => 38,  101 => 37,  94 => 33,  90 => 32,  84 => 29,  80 => 28,  75 => 26,  72 => 25,  70 => 24,  63 => 20,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 3,  27 => 2,  18 => 1,);
    }
}
