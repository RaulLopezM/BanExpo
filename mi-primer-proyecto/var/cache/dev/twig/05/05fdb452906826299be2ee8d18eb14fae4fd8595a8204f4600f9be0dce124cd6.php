<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6025d28b4bb5d7d4c336996b705f029ccdfd6bbb49ae5255d024dbd9806c9b9f extends Twig_Template
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
        $__internal_6035048b2256448e0e10b433a33de96cc009e3992b01e41b1919e39d5d12302b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6035048b2256448e0e10b433a33de96cc009e3992b01e41b1919e39d5d12302b->enter($__internal_6035048b2256448e0e10b433a33de96cc009e3992b01e41b1919e39d5d12302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_db349b25b98f1da8eb029f497c7533166390e7d50b0d43d737cda92601836dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db349b25b98f1da8eb029f497c7533166390e7d50b0d43d737cda92601836dc8->enter($__internal_db349b25b98f1da8eb029f497c7533166390e7d50b0d43d737cda92601836dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6035048b2256448e0e10b433a33de96cc009e3992b01e41b1919e39d5d12302b->leave($__internal_6035048b2256448e0e10b433a33de96cc009e3992b01e41b1919e39d5d12302b_prof);

        
        $__internal_db349b25b98f1da8eb029f497c7533166390e7d50b0d43d737cda92601836dc8->leave($__internal_db349b25b98f1da8eb029f497c7533166390e7d50b0d43d737cda92601836dc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13d291afb00dc527ce0e75fb7d94ab5081ed750bfe2d1021d436c6e458995b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d291afb00dc527ce0e75fb7d94ab5081ed750bfe2d1021d436c6e458995b84->enter($__internal_13d291afb00dc527ce0e75fb7d94ab5081ed750bfe2d1021d436c6e458995b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ae31f340afcdd49746cb04a62d1c7dd133f93be932605db0636096bae164289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae31f340afcdd49746cb04a62d1c7dd133f93be932605db0636096bae164289->enter($__internal_5ae31f340afcdd49746cb04a62d1c7dd133f93be932605db0636096bae164289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>";
        
        $__internal_5ae31f340afcdd49746cb04a62d1c7dd133f93be932605db0636096bae164289->leave($__internal_5ae31f340afcdd49746cb04a62d1c7dd133f93be932605db0636096bae164289_prof);

        
        $__internal_13d291afb00dc527ce0e75fb7d94ab5081ed750bfe2d1021d436c6e458995b84->leave($__internal_13d291afb00dc527ce0e75fb7d94ab5081ed750bfe2d1021d436c6e458995b84_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_caf6e0ecbb3f8c07d96d1385d7dbe54788aa763cd4c99c81123b7c86fb1eb1eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf6e0ecbb3f8c07d96d1385d7dbe54788aa763cd4c99c81123b7c86fb1eb1eb->enter($__internal_caf6e0ecbb3f8c07d96d1385d7dbe54788aa763cd4c99c81123b7c86fb1eb1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cb5a4048a6a553c9ca3bb961ad3f26a783d00bbb34e442a9c0d27da019b9bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb5a4048a6a553c9ca3bb961ad3f26a783d00bbb34e442a9c0d27da019b9bed->enter($__internal_4cb5a4048a6a553c9ca3bb961ad3f26a783d00bbb34e442a9c0d27da019b9bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")";
        
        $__internal_4cb5a4048a6a553c9ca3bb961ad3f26a783d00bbb34e442a9c0d27da019b9bed->leave($__internal_4cb5a4048a6a553c9ca3bb961ad3f26a783d00bbb34e442a9c0d27da019b9bed_prof);

        
        $__internal_caf6e0ecbb3f8c07d96d1385d7dbe54788aa763cd4c99c81123b7c86fb1eb1eb->leave($__internal_caf6e0ecbb3f8c07d96d1385d7dbe54788aa763cd4c99c81123b7c86fb1eb1eb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebd5563899888743f75426191dd3d12a8a1a3984ee26865093019e3f62702bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd5563899888743f75426191dd3d12a8a1a3984ee26865093019e3f62702bb8->enter($__internal_ebd5563899888743f75426191dd3d12a8a1a3984ee26865093019e3f62702bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acaffd750fd290ca1128b242f9c37742d09a1330e031b32028e22efde73dee8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acaffd750fd290ca1128b242f9c37742d09a1330e031b32028e22efde73dee8f->enter($__internal_acaffd750fd290ca1128b242f9c37742d09a1330e031b32028e22efde73dee8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_acaffd750fd290ca1128b242f9c37742d09a1330e031b32028e22efde73dee8f->leave($__internal_acaffd750fd290ca1128b242f9c37742d09a1330e031b32028e22efde73dee8f_prof);

        
        $__internal_ebd5563899888743f75426191dd3d12a8a1a3984ee26865093019e3f62702bb8->leave($__internal_ebd5563899888743f75426191dd3d12a8a1a3984ee26865093019e3f62702bb8_prof);

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
        return array (  222 => 141,  213 => 140,  199 => 137,  190 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
