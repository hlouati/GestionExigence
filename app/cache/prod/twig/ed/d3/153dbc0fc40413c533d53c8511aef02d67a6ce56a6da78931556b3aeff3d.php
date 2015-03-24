<?php

/* projectBundle:besoin:listBesoin.html.twig */
class __TwigTemplate_edd3153dbc0fc40413c533d53c8511aef02d67a6ce56a6da78931556b3aeff3d extends Twig_Template
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
        echo "          ";
        if ($this->env->getExtension('security')->isGranted("ROLE_INTERCLIENT")) {
            echo "     <br/>
            <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Besoin_add", array("idprojet" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "get", array(0 => "idprojet"), "method"))), "html", null, true);
            echo "\">
                <span>Ajouter un nouveau besoin </span></a>
            <span class=\"glyphicon glyphicon-pencil\"></span>
            <br/><br/>";
        } else {
            // line 8
            echo "<br/><br/>";
        }
        // line 9
        echo "       
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
                                ";
                    // line 50
                    if ( !(null === $this->getAttribute($context["version"], "getDoc", array()))) {
                        echo "     <br/> <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["version"], "getDoc", array()), "getAbsolutePath", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["version"], "getDoc", array()), "getWebPath", array()), "html", null, true);
                        echo "</a>";
                    }
                    // line 51
                    echo "                             <br/>
                          ";
                    // line 52
                    if ($this->env->getExtension('security')->isGranted("ROLE_INTERCLIENT")) {
                        echo "      <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Doc_add", array("idprojet" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "get", array(0 => "idprojet"), "method"), "vBesoin" => $this->getAttribute($context["version"], "id", array()))), "html", null, true);
                        echo "\">
                                       <span>Attacher un fichier</span></a>
                                   <span class=\"glyphicon glyphicon-upload\"></span>
                                   <br/>";
                    }
                    // line 56
                    echo "                                
                               ";
                    // line 57
                    if ($this->env->getExtension('security')->isGranted("ROLE_INTERCAP")) {
                        echo "   <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Exigence_list", array("idprojet" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "get", array(0 => "idprojet"), "method"), "vBesoin" => $this->getAttribute($context["version"], "id", array()))), "html", null, true);
                        echo "\">
                                       <span>Ajouter une exigence </span></a>
                                   <span class=\"glyphicon glyphicon-book\"></span>
                                 <br/>  ";
                    }
                    // line 61
                    echo "                                  <br/>
                                ";
                    // line 62
                    if ($this->env->getExtension('security')->isGranted("ROLE_INTERCLIENT")) {
                        echo "   
                                  <a href=\"";
                        // line 63
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Vbesoin_add", array("idprojet" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "get", array(0 => "idprojet"), "method"), "idbesoin" => $this->getAttribute($this->getAttribute($context["version"], "getBesoin", array()), "getId", array()))), "html", null, true);
                        echo "\">
                                       <span>Ajouter une nouvelle version </span></a>
                                   <span class=\"glyphicon glyphicon-pencil\"></span>";
                    }
                    // line 66
                    echo "                                
 
                            ";
                }
                // line 69
                echo "                            
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                   
                 
            </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['besoin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        return "projectBundle:besoin:listBesoin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 77,  192 => 72,  184 => 69,  179 => 66,  173 => 63,  169 => 62,  166 => 61,  157 => 57,  154 => 56,  145 => 52,  142 => 51,  134 => 50,  130 => 49,  122 => 48,  117 => 47,  110 => 44,  105 => 41,  101 => 40,  94 => 36,  84 => 29,  79 => 27,  73 => 24,  67 => 20,  63 => 19,  54 => 12,  51 => 11,  46 => 9,  43 => 8,  36 => 5,  31 => 4,  28 => 3,  19 => 2,);
    }
}
