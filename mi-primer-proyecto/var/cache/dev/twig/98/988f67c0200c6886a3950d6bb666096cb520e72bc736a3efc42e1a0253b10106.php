<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_01e7084e25287071b0abfd9c23e69bd90f8198c1c7034bcbfbf07a37b774f055 extends Twig_Template
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
        $__internal_7ebf22c6b9a8d2a257730b414b018087bc2aeb2d4394be492a5c4d6c82df4380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebf22c6b9a8d2a257730b414b018087bc2aeb2d4394be492a5c4d6c82df4380->enter($__internal_7ebf22c6b9a8d2a257730b414b018087bc2aeb2d4394be492a5c4d6c82df4380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_356e2ab32bbad38a0a8b34a3cc59ab01eb7936ddf0a0227a7a558d86bedfae72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356e2ab32bbad38a0a8b34a3cc59ab01eb7936ddf0a0227a7a558d86bedfae72->enter($__internal_356e2ab32bbad38a0a8b34a3cc59ab01eb7936ddf0a0227a7a558d86bedfae72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ebf22c6b9a8d2a257730b414b018087bc2aeb2d4394be492a5c4d6c82df4380->leave($__internal_7ebf22c6b9a8d2a257730b414b018087bc2aeb2d4394be492a5c4d6c82df4380_prof);

        
        $__internal_356e2ab32bbad38a0a8b34a3cc59ab01eb7936ddf0a0227a7a558d86bedfae72->leave($__internal_356e2ab32bbad38a0a8b34a3cc59ab01eb7936ddf0a0227a7a558d86bedfae72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3090aca8f92f34d520dce46da22773a45555f9281c6f6ab44980a91049570b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3090aca8f92f34d520dce46da22773a45555f9281c6f6ab44980a91049570b7->enter($__internal_d3090aca8f92f34d520dce46da22773a45555f9281c6f6ab44980a91049570b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_141a65ff4d2355fc610f45c02f7cdbd2daafbc7c6b9aceaf1c170f42765e4adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141a65ff4d2355fc610f45c02f7cdbd2daafbc7c6b9aceaf1c170f42765e4adb->enter($__internal_141a65ff4d2355fc610f45c02f7cdbd2daafbc7c6b9aceaf1c170f42765e4adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_141a65ff4d2355fc610f45c02f7cdbd2daafbc7c6b9aceaf1c170f42765e4adb->leave($__internal_141a65ff4d2355fc610f45c02f7cdbd2daafbc7c6b9aceaf1c170f42765e4adb_prof);

        
        $__internal_d3090aca8f92f34d520dce46da22773a45555f9281c6f6ab44980a91049570b7->leave($__internal_d3090aca8f92f34d520dce46da22773a45555f9281c6f6ab44980a91049570b7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_688aca65824d30e48b75a66c7a87804aab96e6d3dff4ab01b4eccda3de1151f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688aca65824d30e48b75a66c7a87804aab96e6d3dff4ab01b4eccda3de1151f0->enter($__internal_688aca65824d30e48b75a66c7a87804aab96e6d3dff4ab01b4eccda3de1151f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f8a74e219c205e7764718706024fa5dc0b408796cbc3d7d10836edef84fd14ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a74e219c205e7764718706024fa5dc0b408796cbc3d7d10836edef84fd14ea->enter($__internal_f8a74e219c205e7764718706024fa5dc0b408796cbc3d7d10836edef84fd14ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>";
        
        $__internal_f8a74e219c205e7764718706024fa5dc0b408796cbc3d7d10836edef84fd14ea->leave($__internal_f8a74e219c205e7764718706024fa5dc0b408796cbc3d7d10836edef84fd14ea_prof);

        
        $__internal_688aca65824d30e48b75a66c7a87804aab96e6d3dff4ab01b4eccda3de1151f0->leave($__internal_688aca65824d30e48b75a66c7a87804aab96e6d3dff4ab01b4eccda3de1151f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2e12092b8d4765a68a5b1c2fd118d13bcbab2247b3e667fb1da93e7694f9e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e12092b8d4765a68a5b1c2fd118d13bcbab2247b3e667fb1da93e7694f9e8a->enter($__internal_f2e12092b8d4765a68a5b1c2fd118d13bcbab2247b3e667fb1da93e7694f9e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d32f047d5dae772e93d0a74031edbbde3b25e32cef7b0bc650115804d306fb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32f047d5dae772e93d0a74031edbbde3b25e32cef7b0bc650115804d306fb65->enter($__internal_d32f047d5dae772e93d0a74031edbbde3b25e32cef7b0bc650115804d306fb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        
        $__internal_d32f047d5dae772e93d0a74031edbbde3b25e32cef7b0bc650115804d306fb65->leave($__internal_d32f047d5dae772e93d0a74031edbbde3b25e32cef7b0bc650115804d306fb65_prof);

        
        $__internal_f2e12092b8d4765a68a5b1c2fd118d13bcbab2247b3e667fb1da93e7694f9e8a->leave($__internal_f2e12092b8d4765a68a5b1c2fd118d13bcbab2247b3e667fb1da93e7694f9e8a_prof);

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
        return array (  93 => 13,  84 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
