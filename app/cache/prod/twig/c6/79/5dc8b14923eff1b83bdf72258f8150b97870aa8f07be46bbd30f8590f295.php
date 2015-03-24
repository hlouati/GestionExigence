<?php

/* projectBundle:exigence:newTwigTemplate.html.twig */
class __TwigTemplate_c6795dc8b14923eff1b83bdf72258f8150b97870aa8f07be46bbd30f8590f295 extends Twig_Template
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
        echo "       
       
<!-- CUSTOM BOOTSTRAP ELEMENT -->
<!-- We will create a family tree using just CSS(3) The markup will be simple nested lists -->
<div class=\"tree\">
    <ul>
        
        <li>\t<a href=\"";
        // line 15
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Exigence_add", array("idprojet" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "idprojet"), "method"), "vBesoin" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "vBesoin"), "method"))), "html", null, true);
        echo "\">
                                       <span>Ajouter une nouvelle exigence   </span></a>
                                   <span class=\"glyphicon glyphicon-pencil\"></span></a>

            <ul>
                <li>\t<a href=\"#\">Exigence fonctionnelle</a>

                    <ul>
                        <li>\t<a href=\"\">
                                       <span>Ajouter une nouvelle version </span></a>
                                   <span class=\"glyphicon glyphicon-pencil\"></span></a>
                                
                            <ul>
                                  
                                   
                        
                                <li>\t<a href=\"#\"><span class=\"label label-success\">Nouveau</span> Rédiger le 13/14/15 par <span class=\"glyphicon glyphicon-user\"></span>hamdi
                                        <span>dificulter</span>
                                        <br/><br/><label>ksjfsjksfj</label></a>
                                               
                                           
                                        </li>
                                        <li>\t<a href=\"#\"> version 2.0</a>

                       
                                        </li>
                 
                                    
                       
                               
                    
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
        
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
        return "projectBundle:exigence:newTwigTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  40 => 8,  37 => 7,  31 => 4,  28 => 3,  19 => 2,);
    }
}
