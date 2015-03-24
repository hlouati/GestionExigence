<?php

/* userBundle:client:listClient.html.twig */
class __TwigTemplate_34e76ba1534fac55c3162b515ede52370e6d6c91c1c820a86d5e1bb139979a81 extends Twig_Template
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
        echo "<br/>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("Client_add");
        echo "\">
                <span>Ajouter un nouveau client </span></a>
            <span class=\"glyphicon glyphicon-pencil\"></span>
            <br/><br/>
    ";
    }

    // line 9
    public function block_Containt($context, array $blocks = array())
    {
        // line 10
        echo "      
        
              <table class=\"table table-condensed table-striped table-bordered table-hover no-margin\">
    <thead>
      <tr>
        <th style=\"width:5%\">
          <input class=\"no-margin\" type=\"checkbox\">
        </th>
        <th style=\"width:20%\" class=\"hidden-phone\">Raison social</th>
        <th style=\"width:10%\" class=\"hidden-phone\">Activité</th>
        <th style=\"width:15%\" class=\"hidden-phone\">Adresse</th>
        <th style=\"width:10%\" class=\"hidden-phone\">Téléphone</th>
        <th style=\"width:10%\" class=\"hidden-phone\">Email</th>
        <th style=\"width:10%\" class=\"hidden-phone\">Réprésentant</th>
        <th style=\"width:10%\" class=\"hidden-phone\">Action</th>
      </tr>
    </thead>
    <tbody>
        ";
        // line 28
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_client_);
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 29
            echo "      
        ";
            // line 30
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            if ((null === $this->getAttribute($_c_, "adr", array()))) {
                echo "<div class=\"alert alert-warning\" role=\"alert\">Vous avez pas encore des clients pensez à ajouter</div>";
            }
            echo "    
        <tr>
        <td>
          <input class=\"no-margin\" type=\"checkbox\">
        </td>
        <td>
          <span class=\"name\">";
            // line 36
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "rsocial", array()), "html", null, true);
            echo "</span>
        </td>
        <td class=\"hidden-phone\">";
            // line 38
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "act", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-phone\">
          ";
            // line 40
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "adr", array()), "html", null, true);
            echo "
        </td>
        <td class=\"hidden-phone\">";
            // line 42
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "tel", array()), "html", null, true);
            echo "</td>
        <td class=\"hidden-phone\">";
            // line 43
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "email", array()), "html", null, true);
            echo "</td>
         <td class=\"hidden-phone\">";
            // line 44
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_c_, "rep", array()), "getNom", array()), "html", null, true);
            echo " ";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_c_, "rep", array()), "getPrenom", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        
    </tbody>
  </table>
       
        ";
        // line 65
        $this->displayBlock('modal', $context, $blocks);
        // line 67
        echo "        
 
        
        
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

    // line 65
    public function block_modal($context, array $blocks = array())
    {
        // line 66
        echo "            ";
    }

    public function getTemplateName()
    {
        return "userBundle:client:listClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 66,  178 => 65,  150 => 67,  148 => 65,  142 => 61,  115 => 44,  110 => 43,  105 => 42,  99 => 40,  93 => 38,  87 => 36,  75 => 30,  72 => 29,  67 => 28,  47 => 10,  44 => 9,  35 => 4,  32 => 3,  29 => 2,  20 => 1,);
    }
}
