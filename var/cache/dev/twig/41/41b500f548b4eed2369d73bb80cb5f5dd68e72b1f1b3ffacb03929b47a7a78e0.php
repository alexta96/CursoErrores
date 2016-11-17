<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_46c6b20f9d6d7276c30910729352fb1f37eb28c39776e402fd0e8611c245c5bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b19d47579ef1e4c513a6dfc23994156ceec836667d7dd280e93e2aaa7b1b0e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19d47579ef1e4c513a6dfc23994156ceec836667d7dd280e93e2aaa7b1b0e73->enter($__internal_b19d47579ef1e4c513a6dfc23994156ceec836667d7dd280e93e2aaa7b1b0e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b19d47579ef1e4c513a6dfc23994156ceec836667d7dd280e93e2aaa7b1b0e73->leave($__internal_b19d47579ef1e4c513a6dfc23994156ceec836667d7dd280e93e2aaa7b1b0e73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db07695b260ee9b43c43284597a939a18e02698fe5ec10413dbd182832cfb0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db07695b260ee9b43c43284597a939a18e02698fe5ec10413dbd182832cfb0f7->enter($__internal_db07695b260ee9b43c43284597a939a18e02698fe5ec10413dbd182832cfb0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db07695b260ee9b43c43284597a939a18e02698fe5ec10413dbd182832cfb0f7->leave($__internal_db07695b260ee9b43c43284597a939a18e02698fe5ec10413dbd182832cfb0f7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c981a276253c565f2fb42e61d636eaec7001d669b26029a2adece4dd689e9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c981a276253c565f2fb42e61d636eaec7001d669b26029a2adece4dd689e9ad->enter($__internal_6c981a276253c565f2fb42e61d636eaec7001d669b26029a2adece4dd689e9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c981a276253c565f2fb42e61d636eaec7001d669b26029a2adece4dd689e9ad->leave($__internal_6c981a276253c565f2fb42e61d636eaec7001d669b26029a2adece4dd689e9ad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0f7375620af40ea64ee3beed343b303df8d8a8a8141521059dfe3a285c07800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f7375620af40ea64ee3beed343b303df8d8a8a8141521059dfe3a285c07800->enter($__internal_e0f7375620af40ea64ee3beed343b303df8d8a8a8141521059dfe3a285c07800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e0f7375620af40ea64ee3beed343b303df8d8a8a8141521059dfe3a285c07800->leave($__internal_e0f7375620af40ea64ee3beed343b303df8d8a8a8141521059dfe3a285c07800_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
