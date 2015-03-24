<?php

/* userBundle:login:login.html.twig */
class __TwigTemplate_050af983e4d350e70fa453f100635d7feb3bda40849a7033af7746b7047cbec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::empty.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::empty.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " login";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo "  
     <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Connexion
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("user_login_check");
        echo "\" method=\"post\">

                            ";
        // line 13
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 14
            echo "                            <div class=\"alert alert-error\">";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message", array()), "html", null, true);
            echo "</div>
                            ";
        }
        // line 16
        echo "
                            <fieldset>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
        echo "\"  type=\"username\" autofocus>
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" id=\"password\" name=\"_password\" type=\"password\">
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Garder ma session active
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               <input type=\"submit\" value=\"Connexion\" class=\"btn btn-lg btn-success btn-block\">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
";
    }

    public function getTemplateName()
    {
        return "userBundle:login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  70 => 16,  63 => 14,  60 => 13,  55 => 11,  43 => 3,  37 => 2,  11 => 1,);
    }
}
