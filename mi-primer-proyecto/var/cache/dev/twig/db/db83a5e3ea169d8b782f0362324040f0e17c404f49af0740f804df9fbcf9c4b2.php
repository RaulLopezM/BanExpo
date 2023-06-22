<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6e29ce9b88d8c4126f2fd70a666c4f050ee51ec8393e0f6b0e9fcdfa0e478674 extends Twig_Template
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
        $__internal_d8be4f5fe85a71dd768426c6b6f4dceb0f4df96cb001a5787a8a9d2000204b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8be4f5fe85a71dd768426c6b6f4dceb0f4df96cb001a5787a8a9d2000204b87->enter($__internal_d8be4f5fe85a71dd768426c6b6f4dceb0f4df96cb001a5787a8a9d2000204b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9057b3ae4ae1da1f03d7abab3a64e63afbf0120c3577a4017aee275f5263b913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9057b3ae4ae1da1f03d7abab3a64e63afbf0120c3577a4017aee275f5263b913->enter($__internal_9057b3ae4ae1da1f03d7abab3a64e63afbf0120c3577a4017aee275f5263b913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8be4f5fe85a71dd768426c6b6f4dceb0f4df96cb001a5787a8a9d2000204b87->leave($__internal_d8be4f5fe85a71dd768426c6b6f4dceb0f4df96cb001a5787a8a9d2000204b87_prof);

        
        $__internal_9057b3ae4ae1da1f03d7abab3a64e63afbf0120c3577a4017aee275f5263b913->leave($__internal_9057b3ae4ae1da1f03d7abab3a64e63afbf0120c3577a4017aee275f5263b913_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77b155a01e5018dc799808322ecd508909ca6c7618fd52f2a4663990080ca04c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b155a01e5018dc799808322ecd508909ca6c7618fd52f2a4663990080ca04c->enter($__internal_77b155a01e5018dc799808322ecd508909ca6c7618fd52f2a4663990080ca04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_783e61e92ca3040d654a2be2d102089ac9dac878517d3a95b3dd2d9b30ad0cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783e61e92ca3040d654a2be2d102089ac9dac878517d3a95b3dd2d9b30ad0cb4->enter($__internal_783e61e92ca3040d654a2be2d102089ac9dac878517d3a95b3dd2d9b30ad0cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>";
        }
        // line 9
        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_783e61e92ca3040d654a2be2d102089ac9dac878517d3a95b3dd2d9b30ad0cb4->leave($__internal_783e61e92ca3040d654a2be2d102089ac9dac878517d3a95b3dd2d9b30ad0cb4_prof);

        
        $__internal_77b155a01e5018dc799808322ecd508909ca6c7618fd52f2a4663990080ca04c->leave($__internal_77b155a01e5018dc799808322ecd508909ca6c7618fd52f2a4663990080ca04c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2035e38abd35d07bc7ac8284ff844c9d6d0836b094dadae278ba680a6016b0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2035e38abd35d07bc7ac8284ff844c9d6d0836b094dadae278ba680a6016b0e2->enter($__internal_2035e38abd35d07bc7ac8284ff844c9d6d0836b094dadae278ba680a6016b0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_94908f011e2f27c3829fa17c592ec08cbcddb7d36dd3a01e4ea3c7c996477cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94908f011e2f27c3829fa17c592ec08cbcddb7d36dd3a01e4ea3c7c996477cae->enter($__internal_94908f011e2f27c3829fa17c592ec08cbcddb7d36dd3a01e4ea3c7c996477cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>";
        }
        // line 21
        echo "    </span>";
        
        $__internal_94908f011e2f27c3829fa17c592ec08cbcddb7d36dd3a01e4ea3c7c996477cae->leave($__internal_94908f011e2f27c3829fa17c592ec08cbcddb7d36dd3a01e4ea3c7c996477cae_prof);

        
        $__internal_2035e38abd35d07bc7ac8284ff844c9d6d0836b094dadae278ba680a6016b0e2->leave($__internal_2035e38abd35d07bc7ac8284ff844c9d6d0836b094dadae278ba680a6016b0e2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdb9b9c4d6643650fdff74a5143d85dc7749b23fd33f8cbc4cc0d96b7d25c39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb9b9c4d6643650fdff74a5143d85dc7749b23fd33f8cbc4cc0d96b7d25c39a->enter($__internal_fdb9b9c4d6643650fdff74a5143d85dc7749b23fd33f8cbc4cc0d96b7d25c39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_67008be5933564610aaf0c4d29a374325bfd7ecbd119baa3e1086f960857cb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67008be5933564610aaf0c4d29a374325bfd7ecbd119baa3e1086f960857cb20->enter($__internal_67008be5933564610aaf0c4d29a374325bfd7ecbd119baa3e1086f960857cb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>";
        }
        
        $__internal_67008be5933564610aaf0c4d29a374325bfd7ecbd119baa3e1086f960857cb20->leave($__internal_67008be5933564610aaf0c4d29a374325bfd7ecbd119baa3e1086f960857cb20_prof);

        
        $__internal_fdb9b9c4d6643650fdff74a5143d85dc7749b23fd33f8cbc4cc0d96b7d25c39a->leave($__internal_fdb9b9c4d6643650fdff74a5143d85dc7749b23fd33f8cbc4cc0d96b7d25c39a_prof);

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
        return array (  125 => 33,  123 => 32,  118 => 28,  116 => 27,  114 => 25,  105 => 24,  95 => 21,  90 => 17,  88 => 16,  84 => 14,  79 => 13,  70 => 12,  60 => 9,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
