<?php

/* projectBundle:besoin:newTwigTemplate.html2.twig */
class __TwigTemplate_dc434396ac62a176934fe3a21e6ffc96a67626b4d619114e1230b74b116011fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'Containtname' => array($this, 'block_Containtname'),
            'Containt' => array($this, 'block_Containt'),
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
        echo "            <br/>
            <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Besoin_add", array("idprojet" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "get", array(0 => "idprojet"), "method"))), "html", null, true);
        echo "\">
                <span>Ajouter un nouveau besoin </span></a>
            <span class=\"glyphicon glyphicon-pencil\"></span>
            <br/><br/>
       
    ";
    }

    // line 11
    public function block_Containt($context, array $blocks = array())
    {
        // line 12
        echo "       
       
<!-- CUSTOM BOOTSTRAP ELEMENT -->
 

    
            <div class=\"panel-group ng-scope\" id=\"accordion\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "verBesoin"));
        foreach ($context['_seq'] as $context["_key"] => $context["besoin"]) {
            // line 20
            echo "                
         <div class=\"panel panel-default\" style=\"display: block;\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "nom", array()), "html", null, true);
            echo " </div>
                                <div class=\"col-sm-3\"></div>
                                <div class=\"col-sm-3\">Version <span class=\"badge\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["besoin"], "version", array()), "count", array()), "html", null, true);
            echo "</span> </div>
                                <div class=\"col-sm-3\"><span class=\"label-info pull-right\">View <i class=\"fa fa-angle-double-down\"></i></span></div>
                            </div>
                        </div>
                    </a>
                </h4>
            </div>
            <div id=\"collapse";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
                  
         
                     
                    ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["besoin"], "version", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 41
                echo "                        <div class=\"panel-body\">
                            
                            
                            ";
                // line 44
                if (($this->getAttribute($context["version"], "curent", array()) == "true")) {
                    echo " 
                            <span class=\"label label-success\">Nouveau</span>
                           
                            ";
                } else {
                    // line 47
                    echo "<span class=\"label label-danger\">Ancien</span>";
                }
                echo " 
                            ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "descp", array()), "html", null, true);
                echo "<br/><br/>Rédiger le :";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["version"], "date", array()), "d/m/y"), "html", null, true);
                echo " par <span class=\"glyphicon glyphicon-user\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["version"], "redact", array()), "getNom", array()), "html", null, true);
                echo "
                            ";
                // line 49
                if (($this->getAttribute($context["version"], "curent", array()) == "true")) {
                    echo " 
                             <br/>
                                <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Doc_add", array("idprojet" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "get", array(0 => "idprojet"), "method"), "vBesoin" => $this->getAttribute($context["version"], "id", array()))), "html", null, true);
                    echo "\">
                                       <span>Attacher un fichier</span></a>
                                   <span class=\"glyphicon glyphicon-upload\"></span>
                                 <br/>
                                
                                 <a href=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Exigence_add", array("idprojet" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "get", array(0 => "idprojet"), "method"), "vbesoin" => $this->getAttribute($this->getAttribute($context["version"], "getBesoin", array()), "getId", array()))), "html", null, true);
                    echo "\">
                                       <span>Ajouter une exigence </span></a>
                                   <span class=\"glyphicon glyphicon-book\"></span>
                                 <br/>  
                                  <br/>
                                  
                                  <a href=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Vbesoin_add", array("idprojet" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "get", array(0 => "idprojet"), "method"), "idbesoin" => $this->getAttribute($this->getAttribute($context["version"], "getBesoin", array()), "getId", array()))), "html", null, true);
                    echo "\">
                                       <span>Ajouter une nouvelle version </span></a>
                                   <span class=\"glyphicon glyphicon-pencil\"></span>
                                
 
                            ";
                }
                // line 68
                echo "                            
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                   
                 
            </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['besoin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </div>

         
        
<script type=\"text/javascript\">


</script>
 <style type=\"text/css\">

    </style> 
        <script>
        \$(document).ready(function(){
\$(\"#mytable #checkall\").click(function () {
        if (\$(\"#mytable #checkall\").is(':checked')) {
            \$(\"#mytable input[type=checkbox]\").each(function () {
                \$(this).prop(\"checked\", true);
            });

        } else {
            \$(\"#mytable input[type=checkbox]\").each(function () {
                \$(this).prop(\"checked\", false);
            });
        }
    });
    
    \$(\"[data-toggle=tooltip]\").tooltip();
});    
            
            
        </script>    
    ";
    }

    public function getTemplateName()
    {
        return "projectBundle:besoin:newTwigTemplate.html2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 76,  162 => 71,  154 => 68,  145 => 62,  136 => 56,  128 => 51,  123 => 49,  115 => 48,  110 => 47,  103 => 44,  98 => 41,  94 => 40,  87 => 36,  77 => 29,  72 => 27,  66 => 24,  60 => 20,  56 => 19,  47 => 12,  44 => 11,  34 => 5,  31 => 4,  28 => 3,  19 => 2,);
    }
}
