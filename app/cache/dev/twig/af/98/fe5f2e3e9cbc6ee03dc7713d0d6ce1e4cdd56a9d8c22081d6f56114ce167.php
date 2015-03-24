<?php

/* userBundle:login:newTwigTemplate.html.twig */
class __TwigTemplate_af98fe5f2e3e9cbc6ee03dc7713d0d6ce1e4cdd56a9d8c22081d6f56114ce167 extends Twig_Template
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
                        <h3 class=\"panel-title\">Please Sign In</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("user_login_check");
        echo "\" method=\"post\">

                            ";
        // line 14
        if ($this->getContext($context, "error")) {
            // line 15
            echo "                            <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message", array()), "html", null, true);
            echo "</div>
                            ";
        }
        // line 17
        echo "
                            <fieldset>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\"  type=\"username\" autofocus>
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" id=\"password\" name=\"_password\">
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
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
        return "userBundle:login:newTwigTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  69 => 17,  63 => 15,  61 => 14,  56 => 12,  43 => 3,  37 => 2,  11 => 1,);
    }
}
