<?php

/* projectBundle:besoin:newTwigTemplate.html1.twig */
class __TwigTemplate_2fe2c84cff0f121eb1a6b82ae266835930bb66ab3aad6b3fc89e003585f339f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"table-responsive \">
        <table class=\"table table-hover table-striped\" height=\"180\">
          <thead>
            <tr>
              <th>#</th>
              <th>Nom</th>
              <th>Description</th>
              <th>Rédacteur</th>
              <th>Date de rédaction</th>
              
            </tr>
          </thead>
      
          <tbody id=\"myTable\">
             
                ";
        // line 16
        if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_version_);
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 17
            echo "            <tr>
              <td><div class=\"btn-group\">
                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">             
                +
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">Ajouter version</a></li>
                  <li><a href=\"#\">liste des version </a></li>
                  
                </ul>
              </div></td>
              <td>";
            // line 28
            if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_v_, "nom", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 29
            if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_v_, "descp", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 30
            if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_v_, "redact", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 31
            if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_v_, "date", array()), "m/d/Y"), "html", null, true);
            echo "</td>
       
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "           
           
            
          </tbody>
        </table>   
      </div>
                     
      <div class=\"col-md-12 text-center\">
      <ul class=\"pagination\" id=\"myPager\"></ul>
      </div>";
    }

    public function getTemplateName()
    {
        return "projectBundle:besoin:newTwigTemplate.html1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 35,  69 => 31,  64 => 30,  59 => 29,  54 => 28,  41 => 17,  36 => 16,  19 => 1,);
    }
}
