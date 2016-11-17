<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_376d281eb8b2020d60ad49e34536f2d8572aeb7099bd5d36a88a8d684fb0b8c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc170bd492727a6be11eb1d10e9d34d4c65efff2594ba480426ce21162f1cb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc170bd492727a6be11eb1d10e9d34d4c65efff2594ba480426ce21162f1cb54->enter($__internal_bc170bd492727a6be11eb1d10e9d34d4c65efff2594ba480426ce21162f1cb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc170bd492727a6be11eb1d10e9d34d4c65efff2594ba480426ce21162f1cb54->leave($__internal_bc170bd492727a6be11eb1d10e9d34d4c65efff2594ba480426ce21162f1cb54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3b2824d323a805062ac20e339612d0f66cb32f8e4205f743929d77eafa8b215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b2824d323a805062ac20e339612d0f66cb32f8e4205f743929d77eafa8b215->enter($__internal_d3b2824d323a805062ac20e339612d0f66cb32f8e4205f743929d77eafa8b215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d3b2824d323a805062ac20e339612d0f66cb32f8e4205f743929d77eafa8b215->leave($__internal_d3b2824d323a805062ac20e339612d0f66cb32f8e4205f743929d77eafa8b215_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77758d4b86c787a011746f71dfff666078318e6d596224b41a753fb66e678ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77758d4b86c787a011746f71dfff666078318e6d596224b41a753fb66e678ed0->enter($__internal_77758d4b86c787a011746f71dfff666078318e6d596224b41a753fb66e678ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_77758d4b86c787a011746f71dfff666078318e6d596224b41a753fb66e678ed0->leave($__internal_77758d4b86c787a011746f71dfff666078318e6d596224b41a753fb66e678ed0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3be1e9f65bc7a82451545c9b18d3c2de4163c1023e9f4bcec786277d24c71298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be1e9f65bc7a82451545c9b18d3c2de4163c1023e9f4bcec786277d24c71298->enter($__internal_3be1e9f65bc7a82451545c9b18d3c2de4163c1023e9f4bcec786277d24c71298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3be1e9f65bc7a82451545c9b18d3c2de4163c1023e9f4bcec786277d24c71298->leave($__internal_3be1e9f65bc7a82451545c9b18d3c2de4163c1023e9f4bcec786277d24c71298_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
