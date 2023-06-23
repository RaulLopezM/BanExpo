<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_570a11c9fe4fc8a75811714f39eb4e40a598d0edeec425637069d1390045d0ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_408c4299d8563e7cc47eb0a710915d56ea5f64dd535aa187542a031e98aff9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408c4299d8563e7cc47eb0a710915d56ea5f64dd535aa187542a031e98aff9a6->enter($__internal_408c4299d8563e7cc47eb0a710915d56ea5f64dd535aa187542a031e98aff9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_351d379f653a2fd0cb9ed882663bb1c1e601ff6c2bc9b9d32a010c523872fb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351d379f653a2fd0cb9ed882663bb1c1e601ff6c2bc9b9d32a010c523872fb85->enter($__internal_351d379f653a2fd0cb9ed882663bb1c1e601ff6c2bc9b9d32a010c523872fb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_408c4299d8563e7cc47eb0a710915d56ea5f64dd535aa187542a031e98aff9a6->leave($__internal_408c4299d8563e7cc47eb0a710915d56ea5f64dd535aa187542a031e98aff9a6_prof);

        
        $__internal_351d379f653a2fd0cb9ed882663bb1c1e601ff6c2bc9b9d32a010c523872fb85->leave($__internal_351d379f653a2fd0cb9ed882663bb1c1e601ff6c2bc9b9d32a010c523872fb85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a7f306223d9678a2569528ae92ce56e3fbe237c0d7908a79c9c932c24fb79d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7f306223d9678a2569528ae92ce56e3fbe237c0d7908a79c9c932c24fb79d2->enter($__internal_2a7f306223d9678a2569528ae92ce56e3fbe237c0d7908a79c9c932c24fb79d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_857ddb27253c3c53c48a2d455fab8bb37a5d5ba5968a4804230346da33bb8584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857ddb27253c3c53c48a2d455fab8bb37a5d5ba5968a4804230346da33bb8584->enter($__internal_857ddb27253c3c53c48a2d455fab8bb37a5d5ba5968a4804230346da33bb8584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>";
        
        $__internal_857ddb27253c3c53c48a2d455fab8bb37a5d5ba5968a4804230346da33bb8584->leave($__internal_857ddb27253c3c53c48a2d455fab8bb37a5d5ba5968a4804230346da33bb8584_prof);

        
        $__internal_2a7f306223d9678a2569528ae92ce56e3fbe237c0d7908a79c9c932c24fb79d2->leave($__internal_2a7f306223d9678a2569528ae92ce56e3fbe237c0d7908a79c9c932c24fb79d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_166b8f4232d8aa035fbd114b575cb094518f6abdaae4fdd5343478859be7b485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166b8f4232d8aa035fbd114b575cb094518f6abdaae4fdd5343478859be7b485->enter($__internal_166b8f4232d8aa035fbd114b575cb094518f6abdaae4fdd5343478859be7b485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ed0af06ec4602e5e6e8e61bb489c4b8a30e8ce65a94a140475de239ec7522c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed0af06ec4602e5e6e8e61bb489c4b8a30e8ce65a94a140475de239ec7522c1->enter($__internal_2ed0af06ec4602e5e6e8e61bb489c4b8a30e8ce65a94a140475de239ec7522c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>";
        
        $__internal_2ed0af06ec4602e5e6e8e61bb489c4b8a30e8ce65a94a140475de239ec7522c1->leave($__internal_2ed0af06ec4602e5e6e8e61bb489c4b8a30e8ce65a94a140475de239ec7522c1_prof);

        
        $__internal_166b8f4232d8aa035fbd114b575cb094518f6abdaae4fdd5343478859be7b485->leave($__internal_166b8f4232d8aa035fbd114b575cb094518f6abdaae4fdd5343478859be7b485_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  82 => 12,  76 => 11,  73 => 10,  64 => 9,  52 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
