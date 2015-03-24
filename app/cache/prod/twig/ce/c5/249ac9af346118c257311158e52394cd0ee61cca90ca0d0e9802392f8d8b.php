<?php

/* projectBundle:exigence:listExigence.html.twig */
class __TwigTemplate_cec5249ac9af346118c257311158e52394cd0ee61cca90ca0d0e9802392f8d8b extends Twig_Template
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
        echo "            
    
    ";
    }

    // line 7
    public function block_Containt($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_INTERCAP")) {
            echo "   
  <div class=\"tree\">
    <ul>
        
        <li>\t <a href=\"";
            // line 12
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Exigence_add", array("idprojet" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "idprojet"), "method"), "vBesoin" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "vBesoin"), "method"))), "html", null, true);
            echo "\">
                                       <span>Ajouter une nouvelle exigence   </span></a>
                                   <span class=\"glyphicon glyphicon-pencil\"></span></a> 
                                  
            <ul> 
                ";
            // line 17
            if (isset($context["exig"])) { $_exig_ = $context["exig"]; } else { $_exig_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_exig_);
            foreach ($context['_seq'] as $context["_key"] => $context["exigence"]) {
                // line 18
                echo "                    <li>\t<a href=\"#\">Exigence ";
                if (isset($context["exigence"])) { $_exigence_ = $context["exigence"]; } else { $_exigence_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_exigence_, "type", array()), "html", null, true);
                echo "</a>

                    <ul>
                          <li>\t<a href=\"";
                // line 21
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (isset($context["exigence"])) { $_exigence_ = $context["exigence"]; } else { $_exigence_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VExigence_add", array("idprojet" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "idprojet"), "method"), "vBesoin" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "vBesoin"), "method"), "idExig" => $this->getAttribute($_exigence_, "id", array()))), "html", null, true);
                echo "\">
                                       <span>Ajouter une nouvelle version </span></a>
                                   <span class=\"glyphicon glyphicon-pencil\"></span></a>
                                
                            <ul>
                        
                        ";
                // line 27
                if (isset($context["exigence"])) { $_exigence_ = $context["exigence"]; } else { $_exigence_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exigence_, "version", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                    // line 28
                    echo "                            
                            
                     
                        
                                <li>\t<a href=\"#\">";
                    // line 32
                    if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
                    if (($this->getAttribute($_version_, "curent", array()) == "true")) {
                        echo " 
                            <span class=\"label label-success\">Nouveau</span>
                           
                            ";
                    } else {
                        // line 35
                        echo "<span class=\"label label-danger\">Ancien</span>";
                    }
                    echo " <span class=\"glyphicon glyphicon-time\"></span>";
                    if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_version_, "date", array()), "d/m/y"), "html", null, true);
                    echo "
                                        <span style=\"margin-left: 20%\">déficulter :  ";
                    // line 36
                    if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_version_, "def", array()), "html", null, true);
                    echo "</span > <span style=\"margin-left:72%\">périorité :  ";
                    if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_version_, "perio", array()), "html", null, true);
                    echo "</span>
                                        <br/><br/><label>ksjfsjksfj</label><br/><br/>
                                    
                                    <span class=\"glyphicon glyphicon-user\"style=\"margin-left: 80%\">hamdi</span> 
                                        </a>
                                        
                                               
                                           
                                  
                 
                                    
                       
                               
                    
                           
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                         </ul>
                        </li>
                    </ul>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exigence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "  
            </ul>
        </li>
    </ul>
</div>
 
 ";
        } else {
            // line 62
            echo "                 
            <div class=\"alert alert-danger\" role=\"alert\">Vous avez pas les droits</div>      
 ";
        }
        // line 64
        echo " 
     
     
<script type=\"text/javascript\">

\$(function () {
    \$('.tree li').hide();
    \$('.tree li:first').show();
    \$('.tree li').on('click', function (e) {
        var children = \$(this).find('> ul > li');
        if (children.is(\":visible\")) children.hide('fast');
        else children.show('fast');
        e.stopPropagation();
    });
});


</script>

    ";
    }

    public function getTemplateName()
    {
        return "projectBundle:exigence:listExigence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 64,  153 => 62,  144 => 56,  134 => 52,  108 => 36,  100 => 35,  92 => 32,  86 => 28,  81 => 27,  70 => 21,  62 => 18,  57 => 17,  48 => 12,  40 => 8,  37 => 7,  31 => 4,  28 => 3,  19 => 2,);
    }
}
