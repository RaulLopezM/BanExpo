<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d1e92f4cdacbd9736a263565cad3ad7a61ebadb6f0c89cce94c888e82f3ef57a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa1ddb4f1bc67694617bbbdaf573b9f9a503b2abd089f80a6513a8efce9f6061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1ddb4f1bc67694617bbbdaf573b9f9a503b2abd089f80a6513a8efce9f6061->enter($__internal_fa1ddb4f1bc67694617bbbdaf573b9f9a503b2abd089f80a6513a8efce9f6061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e4fcead448acbe73ef89a46360fd4d540369e573aeb8486b39123641a935cc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fcead448acbe73ef89a46360fd4d540369e573aeb8486b39123641a935cc7c->enter($__internal_e4fcead448acbe73ef89a46360fd4d540369e573aeb8486b39123641a935cc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1ddb4f1bc67694617bbbdaf573b9f9a503b2abd089f80a6513a8efce9f6061->leave($__internal_fa1ddb4f1bc67694617bbbdaf573b9f9a503b2abd089f80a6513a8efce9f6061_prof);

        
        $__internal_e4fcead448acbe73ef89a46360fd4d540369e573aeb8486b39123641a935cc7c->leave($__internal_e4fcead448acbe73ef89a46360fd4d540369e573aeb8486b39123641a935cc7c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21199f8c0f993175f668ecc472ae33979ae65843f49f20a7921f8bbd1b4305e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21199f8c0f993175f668ecc472ae33979ae65843f49f20a7921f8bbd1b4305e3->enter($__internal_21199f8c0f993175f668ecc472ae33979ae65843f49f20a7921f8bbd1b4305e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2b7bfe81253e237110a430fe4527b7ac0497ded4b9a9592829c7d840580dc691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7bfe81253e237110a430fe4527b7ac0497ded4b9a9592829c7d840580dc691->enter($__internal_2b7bfe81253e237110a430fe4527b7ac0497ded4b9a9592829c7d840580dc691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        ob_start();
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        
        $__internal_2b7bfe81253e237110a430fe4527b7ac0497ded4b9a9592829c7d840580dc691->leave($__internal_2b7bfe81253e237110a430fe4527b7ac0497ded4b9a9592829c7d840580dc691_prof);

        
        $__internal_21199f8c0f993175f668ecc472ae33979ae65843f49f20a7921f8bbd1b4305e3->leave($__internal_21199f8c0f993175f668ecc472ae33979ae65843f49f20a7921f8bbd1b4305e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  56 => 9,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
