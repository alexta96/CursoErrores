<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5315672a426bae3b0e5cdbc6ee908daed443411eccf8ed921240595cefe0eca1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_214cec17cb32ec3ccba5f3b147efe9e104a59bc8bb57cb12929340c86f313288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214cec17cb32ec3ccba5f3b147efe9e104a59bc8bb57cb12929340c86f313288->enter($__internal_214cec17cb32ec3ccba5f3b147efe9e104a59bc8bb57cb12929340c86f313288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214cec17cb32ec3ccba5f3b147efe9e104a59bc8bb57cb12929340c86f313288->leave($__internal_214cec17cb32ec3ccba5f3b147efe9e104a59bc8bb57cb12929340c86f313288_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d835feb34e749ffbaa548f64d1ce22b5eb7aaf4e6432d6c55075ecc4ce35cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d835feb34e749ffbaa548f64d1ce22b5eb7aaf4e6432d6c55075ecc4ce35cbd->enter($__internal_0d835feb34e749ffbaa548f64d1ce22b5eb7aaf4e6432d6c55075ecc4ce35cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0d835feb34e749ffbaa548f64d1ce22b5eb7aaf4e6432d6c55075ecc4ce35cbd->leave($__internal_0d835feb34e749ffbaa548f64d1ce22b5eb7aaf4e6432d6c55075ecc4ce35cbd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38a97535db9a97a0378fee73b49da75755ec894ca6961869db6670d1bbd4635b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a97535db9a97a0378fee73b49da75755ec894ca6961869db6670d1bbd4635b->enter($__internal_38a97535db9a97a0378fee73b49da75755ec894ca6961869db6670d1bbd4635b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_38a97535db9a97a0378fee73b49da75755ec894ca6961869db6670d1bbd4635b->leave($__internal_38a97535db9a97a0378fee73b49da75755ec894ca6961869db6670d1bbd4635b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb8791305f473d025d57a2873062a6d39f397a00a6776243eff216dc7f561758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8791305f473d025d57a2873062a6d39f397a00a6776243eff216dc7f561758->enter($__internal_eb8791305f473d025d57a2873062a6d39f397a00a6776243eff216dc7f561758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_eb8791305f473d025d57a2873062a6d39f397a00a6776243eff216dc7f561758->leave($__internal_eb8791305f473d025d57a2873062a6d39f397a00a6776243eff216dc7f561758_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
