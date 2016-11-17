<?php

/* PacoLocoBundle:Default:msgTexto.html.twig */
class __TwigTemplate_1f7a2a74b896df5e5fdbe012b3348a3ad5c609ad5ec67f2062b8ba220a6002f9 extends Twig_Template
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
        $__internal_c385772837d356afce5f4253374e53cb10d6335e9388ad407ab890ea08db9e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c385772837d356afce5f4253374e53cb10d6335e9388ad407ab890ea08db9e2b->enter($__internal_c385772837d356afce5f4253374e53cb10d6335e9388ad407ab890ea08db9e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PacoLocoBundle:Default:msgTexto.html.twig"));

        // line 1
        echo "El mensaje es
<br>
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        echo "
";
        
        $__internal_c385772837d356afce5f4253374e53cb10d6335e9388ad407ab890ea08db9e2b->leave($__internal_c385772837d356afce5f4253374e53cb10d6335e9388ad407ab890ea08db9e2b_prof);

    }

    public function getTemplateName()
    {
        return "PacoLocoBundle:Default:msgTexto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "El mensaje es
<br>
{{texto}}
";
    }
}
