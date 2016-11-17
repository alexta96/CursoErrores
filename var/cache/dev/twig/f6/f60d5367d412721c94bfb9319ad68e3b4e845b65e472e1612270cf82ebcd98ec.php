<?php

/* base.html.twig */
class __TwigTemplate_5129471d0f6810384909f29f86b8cd05f36194196785588dad723060ecdefa30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e271ea6a2b47e67d58916b67aa6bd8f6dfeaffb462cdd72f1945c3600f3d8983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e271ea6a2b47e67d58916b67aa6bd8f6dfeaffb462cdd72f1945c3600f3d8983->enter($__internal_e271ea6a2b47e67d58916b67aa6bd8f6dfeaffb462cdd72f1945c3600f3d8983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e271ea6a2b47e67d58916b67aa6bd8f6dfeaffb462cdd72f1945c3600f3d8983->leave($__internal_e271ea6a2b47e67d58916b67aa6bd8f6dfeaffb462cdd72f1945c3600f3d8983_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bd49baaa43a054a2f760d214681705ee049c825657383b76e41d1508310fbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd49baaa43a054a2f760d214681705ee049c825657383b76e41d1508310fbb8->enter($__internal_1bd49baaa43a054a2f760d214681705ee049c825657383b76e41d1508310fbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1bd49baaa43a054a2f760d214681705ee049c825657383b76e41d1508310fbb8->leave($__internal_1bd49baaa43a054a2f760d214681705ee049c825657383b76e41d1508310fbb8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b031d23939ed295c6f7273abf5979f3ff5f9c40d789541008bbac577eaf1387f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b031d23939ed295c6f7273abf5979f3ff5f9c40d789541008bbac577eaf1387f->enter($__internal_b031d23939ed295c6f7273abf5979f3ff5f9c40d789541008bbac577eaf1387f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b031d23939ed295c6f7273abf5979f3ff5f9c40d789541008bbac577eaf1387f->leave($__internal_b031d23939ed295c6f7273abf5979f3ff5f9c40d789541008bbac577eaf1387f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0359f845ec45cff6352ce508cd30ee634eb4c1e06e753c169a8f7b3a812edbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0359f845ec45cff6352ce508cd30ee634eb4c1e06e753c169a8f7b3a812edbd->enter($__internal_e0359f845ec45cff6352ce508cd30ee634eb4c1e06e753c169a8f7b3a812edbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0359f845ec45cff6352ce508cd30ee634eb4c1e06e753c169a8f7b3a812edbd->leave($__internal_e0359f845ec45cff6352ce508cd30ee634eb4c1e06e753c169a8f7b3a812edbd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0bd6039af653b7321c2ffb192a7b3db68e510498aa1b62e89b149f5593f59a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd6039af653b7321c2ffb192a7b3db68e510498aa1b62e89b149f5593f59a4a->enter($__internal_0bd6039af653b7321c2ffb192a7b3db68e510498aa1b62e89b149f5593f59a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0bd6039af653b7321c2ffb192a7b3db68e510498aa1b62e89b149f5593f59a4a->leave($__internal_0bd6039af653b7321c2ffb192a7b3db68e510498aa1b62e89b149f5593f59a4a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
