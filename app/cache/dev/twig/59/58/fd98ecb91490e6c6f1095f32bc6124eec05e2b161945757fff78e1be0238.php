<?php

/* projectBundle:projet:archive.html.twig */
class __TwigTemplate_5958fd98ecb91490e6c6f1095f32bc6124eec05e2b161945757fff78e1be0238 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 2
        return $this->env->resolveTemplate(array(0 => "userBundle:dashboard:dashboard.html.twig"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "projectBundle:projet:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 2,);
    }
}
