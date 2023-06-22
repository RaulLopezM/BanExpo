<?php

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_dae0dbc77c8c02ab25db621cdb2fc8f2706d7f8e4896ee535cd2b6d482ab6613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71f31c61cf9471dac1b46a3201a7eb5cabcb1f5cc3a22905242245682bd5054e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f31c61cf9471dac1b46a3201a7eb5cabcb1f5cc3a22905242245682bd5054e->enter($__internal_71f31c61cf9471dac1b46a3201a7eb5cabcb1f5cc3a22905242245682bd5054e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        $__internal_7dd4d5435c96df7d81105aaf9f94c7c0014ebdc7629268c2846da15438fb1f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd4d5435c96df7d81105aaf9f94c7c0014ebdc7629268c2846da15438fb1f83->enter($__internal_7dd4d5435c96df7d81105aaf9f94c7c0014ebdc7629268c2846da15438fb1f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71f31c61cf9471dac1b46a3201a7eb5cabcb1f5cc3a22905242245682bd5054e->leave($__internal_71f31c61cf9471dac1b46a3201a7eb5cabcb1f5cc3a22905242245682bd5054e_prof);

        
        $__internal_7dd4d5435c96df7d81105aaf9f94c7c0014ebdc7629268c2846da15438fb1f83->leave($__internal_7dd4d5435c96df7d81105aaf9f94c7c0014ebdc7629268c2846da15438fb1f83_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d16a894cacea679cb4735be03a983074215ca8b37f2771ff1442ba2dc481970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d16a894cacea679cb4735be03a983074215ca8b37f2771ff1442ba2dc481970->enter($__internal_5d16a894cacea679cb4735be03a983074215ca8b37f2771ff1442ba2dc481970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d8fe4485cb8d840793d3925acdd6e2f2a576e3733cd995825c56b8878f1aed19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fe4485cb8d840793d3925acdd6e2f2a576e3733cd995825c56b8878f1aed19->enter($__internal_d8fe4485cb8d840793d3925acdd6e2f2a576e3733cd995825c56b8878f1aed19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()) > 0) || ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0))) {
            // line 6
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
            // line 8
            ob_start();
            // line 9
            if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 10
                echo "
                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                    <span class=\"sf-toolbar-value sf-toolbar-status";
                // line 12
                if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()) > 50)) {
                    echo "sf-toolbar-status-yellow";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
                echo "</span>";
                // line 13
                if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()) > 0)) {
                    // line 14
                    echo "                        <span class=\"sf-toolbar-info-piece-additional-detail\">in";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
                    echo " ms</span>";
                }
                // line 16
                if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) {
                    // line 17
                    echo "                        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>";
                }
            } else {
                // line 22
                $context["status"] = ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) ? ("red") : (((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()) > 50)) ? ("yellow") : (""))));
                // line 24
                echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                // line 26
                if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()) == 0) && ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0))) {
                    // line 27
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-label\">errors</span>";
                } else {
                    // line 30
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                    // line 33
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
                    echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>";
                }
            }
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 41
            ob_start();
            // line 42
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status";
            // line 44
            echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()) > 50)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 48
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status";
            // line 52
            echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
            echo "</span>
            </div>";
            // line 54
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheEnabled", array())) {
                // line 55
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheHitsCount", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status";
                // line 61
                echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheMissesCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheMissesCount", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status";
                // line 65
                echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cachePutsCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cachePutsCount", array()), "html", null, true);
                echo "</span>
                </div>";
            } else {
                // line 68
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>";
            }
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 75
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter(($context["status"] ?? $this->getContext($context, "status")), "")) : (""))));
        }
        
        $__internal_d8fe4485cb8d840793d3925acdd6e2f2a576e3733cd995825c56b8878f1aed19->leave($__internal_d8fe4485cb8d840793d3925acdd6e2f2a576e3733cd995825c56b8878f1aed19_prof);

        
        $__internal_5d16a894cacea679cb4735be03a983074215ca8b37f2771ff1442ba2dc481970->leave($__internal_5d16a894cacea679cb4735be03a983074215ca8b37f2771ff1442ba2dc481970_prof);

    }

    // line 80
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b76e1424a794e7616dfa94622415cd91d6adc1c5d8e12707f463c6036d6e004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b76e1424a794e7616dfa94622415cd91d6adc1c5d8e12707f463c6036d6e004->enter($__internal_5b76e1424a794e7616dfa94622415cd91d6adc1c5d8e12707f463c6036d6e004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b4cc0d23dab58f10633b3b6542d282626868d34c8501aca828746eec1d6b1b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cc0d23dab58f10633b3b6542d282626868d34c8501aca828746eec1d6b1b08->enter($__internal_b4cc0d23dab58f10633b3b6542d282626868d34c8501aca828746eec1d6b1b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 81
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 83
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 84
            echo "
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 90
            echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>";
        } else {
            // line 95
            echo "
        <span class=\"label";
            // line 96
            echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) ? ("label-status-error") : (""));
            echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 97
            echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
            echo "</span>
            <strong>Doctrine</strong>";
            // line 99
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array())) {
                // line 100
                echo "                <span class=\"count\">
                    <span>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
                echo "</span>
                </span>";
            }
            // line 104
            echo "        </span>";
        }
        
        $__internal_b4cc0d23dab58f10633b3b6542d282626868d34c8501aca828746eec1d6b1b08->leave($__internal_b4cc0d23dab58f10633b3b6542d282626868d34c8501aca828746eec1d6b1b08_prof);

        
        $__internal_5b76e1424a794e7616dfa94622415cd91d6adc1c5d8e12707f463c6036d6e004->leave($__internal_5b76e1424a794e7616dfa94622415cd91d6adc1c5d8e12707f463c6036d6e004_prof);

    }

    // line 109
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20d56a80c2540cf5b83cd53e00ddcdd45ca2fb360e2dff459641ef7b3581a3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d56a80c2540cf5b83cd53e00ddcdd45ca2fb360e2dff459641ef7b3581a3d6->enter($__internal_20d56a80c2540cf5b83cd53e00ddcdd45ca2fb360e2dff459641ef7b3581a3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0535aff324408d074ff8adec238ab822b9153f0ae2be9a4a49437420ebd2db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0535aff324408d074ff8adec238ab822b9153f0ae2be9a4a49437420ebd2db0->enter($__internal_f0535aff324408d074ff8adec238ab822b9153f0ae2be9a4a49437420ebd2db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 110
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 112
        if (("explain" == ($context["page"] ?? $this->getContext($context, "page")))) {
            // line 113
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctrineBundle:Profiler:explain", array("token" =>             // line 114
($context["token"] ?? $this->getContext($context, "token")), "panel" => "db", "connectionName" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 116
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "connection"), "method"), "query" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 117
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "query"), "method"))));
        } else {
            // line 120
            $this->displayBlock("queries", $context, $blocks);
        }
        
        $__internal_f0535aff324408d074ff8adec238ab822b9153f0ae2be9a4a49437420ebd2db0->leave($__internal_f0535aff324408d074ff8adec238ab822b9153f0ae2be9a4a49437420ebd2db0_prof);

        
        $__internal_20d56a80c2540cf5b83cd53e00ddcdd45ca2fb360e2dff459641ef7b3581a3d6->leave($__internal_20d56a80c2540cf5b83cd53e00ddcdd45ca2fb360e2dff459641ef7b3581a3d6_prof);

    }

    // line 124
    public function block_queries($context, array $blocks = array())
    {
        $__internal_c3d0d600c9f4c976c872d7fdcf8aa2266595fcf2c8d1f609e5c681b71b4a15fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d0d600c9f4c976c872d7fdcf8aa2266595fcf2c8d1f609e5c681b71b4a15fa->enter($__internal_c3d0d600c9f4c976c872d7fdcf8aa2266595fcf2c8d1f609e5c681b71b4a15fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        $__internal_db5537ca7385ee01ed3732fc6edacb1e05d32e1de016ed7c140ae6a7d9e6a6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5537ca7385ee01ed3732fc6edacb1e05d32e1de016ed7c140ae6a7d9e6a6f0->enter($__internal_db5537ca7385ee01ed3732fc6edacb1e05d32e1de016ed7c140ae6a7d9e6a6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        // line 125
        echo "    <style>";
        // line 126
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 127
            echo "            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }";
        }
        // line 141
        echo "
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
    </style>";
        // line 147
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) > 1)) {
            // line 148
            echo "        <h2>Query Metrics</h2>
    
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "groupedQueryCount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Different statements</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">";
            // line 162
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
                <span class=\"label\">Query time</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Invalid entities</span>
            </div>";
            // line 171
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheEnabled", array())) {
                // line 172
                echo "                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheHitsCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheMissesCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cachePutsCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache puts</span>
                </div>";
            }
            // line 185
            echo "        </div>";
        }
        // line 188
        $context["group_queries"] = $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "getBoolean", array(0 => "group"), "method");
        // line 189
        if (($context["group_queries"] ?? $this->getContext($context, "group_queries"))) {
            // line 190
            echo "        <h2>Grouped Statements</h2>
        <p><a href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("panel" => "db", "token" => ($context["token"] ?? $this->getContext($context, "token")))), "html", null, true);
            echo "\">Show all queries</a></p>";
        } else {
            // line 193
            echo "        <h2>Queries</h2>
        <p><a href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("panel" => "db", "token" => ($context["token"] ?? $this->getContext($context, "token")), "group" => true)), "html", null, true);
            echo "\">Group similar statements</a></p>";
        }
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "queries", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 198
            if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "connections", array())) > 1)) {
                // line 199
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>";
            }
            // line 202
            if (twig_test_empty($context["queries"])) {
                // line 203
                echo "            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>";
            } else {
                // line 207
                if (($context["group_queries"] ?? $this->getContext($context, "group_queries"))) {
                    // line 208
                    $context["queries"] = $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "groupedQueries", array()), $context["connection"], array(), "array");
                }
                // line 210
                echo "            <table class=\"alt queries-table\">
                <thead>
                <tr>";
                // line 213
                if (($context["group_queries"] ?? $this->getContext($context, "group_queries"))) {
                    // line 214
                    echo "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "')\" style=\"cursor: pointer;\">Count<span></span></th>";
                } else {
                    // line 217
                    echo "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 218
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "')\" style=\"cursor: pointer;\">Time<span></span></th>";
                }
                // line 220
                echo "                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">";
                // line 224
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 225
                    $context["i"] = ((($context["group_queries"] ?? $this->getContext($context, "group_queries"))) ? ($this->getAttribute($context["query"], "index", array())) : ($context["i"]));
                    // line 226
                    echo "                        <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">";
                    // line 227
                    if (($context["group_queries"] ?? $this->getContext($context, "group_queries"))) {
                        // line 228
                        echo "                                <td class=\"time-container\">
                                    <span class=\"time-bar\" style=\"width:";
                        // line 229
                        echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute($context["query"], "executionPercent", array())), "html", null, true);
                        echo "%\"></span>
                                    <span class=\"nowrap\">";
                        // line 230
                        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                        echo "&nbsp;ms<br />(";
                        echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute($context["query"], "executionPercent", array())), "html", null, true);
                        echo "%)</span>
                                </td>
                                <td class=\"nowrap\">";
                        // line 232
                        echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "count", array()), "html", null, true);
                        echo "</td>";
                    } else {
                        // line 234
                        echo "                                <td class=\"nowrap\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo "</td>
                                <td class=\"nowrap\">";
                        // line 235
                        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                        echo "&nbsp;ms</td>";
                    }
                    // line 237
                    echo "                            <td>";
                    // line 238
                    echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery($this->getAttribute($context["query"], "sql", array()), true);
                    echo "

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>:";
                    // line 241
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["query"], "params", array())));
                    echo "
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\"";
                    // line 245
                    echo (((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\"";
                    // line 249
                    echo (((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>";
                    // line 251
                    if ($this->getAttribute($context["query"], "explainable", array())) {
                        // line 252
                        echo "                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"";
                        // line 253
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("panel" => "db", "token" => ($context["token"] ?? $this->getContext($context, "token")), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"])), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\">Explain query</a>";
                    }
                    // line 255
                    echo "                                </div>

                                <div id=\"formatted-query-";
                    // line 257
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">";
                    // line 258
                    echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery($this->getAttribute($context["query"], "sql", array()));
                    echo "
                                </div>

                                <div id=\"original-query-";
                    // line 261
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">";
                    // line 262
                    echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery($this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->replaceQueryParameters(($this->getAttribute($context["query"], "sql", array()) . ";"), $this->getAttribute($context["query"], "params", array())), true);
                    echo "
                                </div>";
                    // line 265
                    if ($this->getAttribute($context["query"], "explainable", array())) {
                        // line 266
                        echo "                                    <div id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\"></div>";
                    }
                    // line 268
                    echo "                            </td>
                        </tr>";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 271
                echo "                </tbody>
            </table>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "
    <h2>Database Connections</h2>";
        // line 278
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "connections", array())) {
            // line 279
            echo "        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>";
        } else {
            // line 283
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "connections", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
        }
        // line 285
        echo "
    <h2>Entity Managers</h2>";
        // line 288
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "managers", array())) {
            // line 289
            echo "        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>";
        } else {
            // line 293
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "managers", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
        }
        // line 295
        echo "
    <h2>Second Level Cache</h2>";
        // line 298
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheEnabled", array())) {
            // line 299
            echo "        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>";
        } else {
            // line 303
            if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheCounts", array())) {
                // line 304
                echo "            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>";
            } else {
                // line 308
                if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
                    // line 309
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheCounts", array())), false);
                } else {
                    // line 311
                    echo "                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 313
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheCounts", array()), "hits", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 318
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheCounts", array()), "misses", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 323
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheCounts", array()), "puts", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>";
                }
                // line 329
                if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheRegions", array()), "hits", array())) {
                    // line 330
                    echo "                <h3>Number of cache hits</h3>";
                    // line 331
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheRegions", array()), "hits", array())), false);
                }
                // line 334
                if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheRegions", array()), "misses", array())) {
                    // line 335
                    echo "                <h3>Number of cache misses</h3>";
                    // line 336
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheRegions", array()), "misses", array())), false);
                }
                // line 339
                if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheRegions", array()), "puts", array())) {
                    // line 340
                    echo "                <h3>Number of cache puts</h3>";
                    // line 341
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "cacheRegions", array()), "puts", array())), false);
                }
            }
        }
        // line 345
        echo "
    <h2>Entities Mapping</h2>";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "entities", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 349
            if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "managers", array())) > 1)) {
                // line 350
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                echo " <small>entity manager</small></h3>";
            }
            // line 353
            if (twig_test_empty($context["classes"])) {
                // line 354
                echo "            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>";
            } else {
                // line 358
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>";
                // line 366
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 367
                    $context["contains_errors"] = ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", false, true), $context["class"], array(), "array", true, true));
                    // line 368
                    echo "                    <tr class=\"";
                    echo ((($context["contains_errors"] ?? $this->getContext($context, "contains_errors"))) ? ("status-error") : (""));
                    echo "\">
                        <td>";
                    // line 369
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                        <td class=\"font-normal\">";
                    // line 371
                    if (($context["contains_errors"] ?? $this->getContext($context, "contains_errors"))) {
                        // line 372
                        echo "                                <ul>";
                        // line 373
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "mappingErrors", array()), $context["manager"], array(), "array"), $context["class"], array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 374
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "</li>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 376
                        echo "                                </ul>";
                    } else {
                        // line 378
                        echo "                                No errors.";
                    }
                    // line 380
                    echo "                        </td>
                    </tr>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 383
                echo "                </tbody>
            </table>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }";
        // line 445
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 446
            echo "            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetDataAltContent = target.getAttribute('data-toggle-alt-content');
                var targetElement = document.querySelector(targetSelector);
                target.setAttribute('data-toggle-alt-content', target.innerHTML);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = targetDataAltContent;
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = targetDataAltContent;
                }

                return false;
            }";
        }
        // line 463
        echo "
        //]]></script>";
        
        $__internal_db5537ca7385ee01ed3732fc6edacb1e05d32e1de016ed7c140ae6a7d9e6a6f0->leave($__internal_db5537ca7385ee01ed3732fc6edacb1e05d32e1de016ed7c140ae6a7d9e6a6f0_prof);

        
        $__internal_c3d0d600c9f4c976c872d7fdcf8aa2266595fcf2c8d1f609e5c681b71b4a15fa->leave($__internal_c3d0d600c9f4c976c872d7fdcf8aa2266595fcf2c8d1f609e5c681b71b4a15fa_prof);

    }

    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  887 => 463,  869 => 446,  867 => 445,  809 => 387,  801 => 383,  794 => 380,  791 => 378,  788 => 376,  780 => 374,  776 => 373,  774 => 372,  772 => 371,  768 => 369,  763 => 368,  761 => 367,  757 => 366,  748 => 358,  743 => 354,  741 => 353,  736 => 350,  734 => 349,  730 => 348,  727 => 345,  722 => 341,  720 => 340,  718 => 339,  715 => 336,  713 => 335,  711 => 334,  708 => 331,  706 => 330,  704 => 329,  697 => 323,  689 => 318,  681 => 313,  677 => 311,  674 => 309,  672 => 308,  667 => 304,  665 => 303,  660 => 299,  658 => 298,  655 => 295,  652 => 293,  647 => 289,  645 => 288,  642 => 285,  639 => 283,  634 => 279,  632 => 278,  629 => 275,  613 => 271,  598 => 268,  591 => 266,  589 => 265,  585 => 262,  580 => 261,  574 => 258,  569 => 257,  565 => 255,  557 => 253,  554 => 252,  552 => 251,  545 => 249,  534 => 245,  527 => 241,  521 => 238,  519 => 237,  515 => 235,  510 => 234,  506 => 232,  499 => 230,  495 => 229,  492 => 228,  490 => 227,  484 => 226,  482 => 225,  465 => 224,  462 => 223,  457 => 220,  453 => 218,  448 => 217,  444 => 215,  439 => 214,  437 => 213,  433 => 210,  430 => 208,  428 => 207,  423 => 203,  421 => 202,  416 => 199,  414 => 198,  397 => 197,  393 => 194,  390 => 193,  386 => 191,  383 => 190,  381 => 189,  379 => 188,  376 => 185,  370 => 181,  363 => 177,  356 => 173,  353 => 172,  351 => 171,  346 => 167,  338 => 162,  330 => 157,  322 => 152,  316 => 148,  314 => 147,  308 => 141,  293 => 127,  291 => 126,  289 => 125,  280 => 124,  269 => 120,  266 => 117,  265 => 116,  264 => 114,  263 => 113,  261 => 112,  259 => 110,  250 => 109,  239 => 104,  234 => 101,  231 => 100,  229 => 99,  225 => 97,  220 => 96,  217 => 95,  211 => 90,  207 => 89,  200 => 84,  198 => 83,  196 => 81,  187 => 80,  176 => 75,  169 => 68,  162 => 65,  153 => 61,  146 => 57,  142 => 55,  140 => 54,  134 => 52,  127 => 48,  118 => 44,  114 => 42,  112 => 41,  104 => 33,  97 => 30,  91 => 27,  89 => 26,  87 => 24,  85 => 22,  79 => 17,  77 => 16,  72 => 14,  70 => 13,  63 => 12,  59 => 10,  57 => 9,  55 => 8,  53 => 6,  51 => 4,  42 => 3,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends app.request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.querycount > 0 or collector.invalidEntityCount > 0 %}

        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% if profiler_markup_version == 1 %}

                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                    <span class=\"sf-toolbar-value sf-toolbar-status {% if collector.querycount > 50 %}sf-toolbar-status-yellow{% endif %}\">{{ collector.querycount }}</span>
                    {% if collector.querycount > 0 %}
                        <span class=\"sf-toolbar-info-piece-additional-detail\">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                    {% endif %}
                    {% if collector.invalidEntityCount > 0 %}
                        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">{{ collector.invalidEntityCount }}</span>
                    {% endif %}

            {% else %}

                {% set status = collector.invalidEntityCount > 0 ? 'red' : collector.querycount > 50 ? 'yellow' %}

                {{ include('@Doctrine/Collector/icon.svg') }}

                {% if collector.querycount == 0 and collector.invalidEntityCount > 0 %}
                    <span class=\"sf-toolbar-value\">{{ collector.invalidEntityCount }}</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                {% else %}
                    <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                {% endif %}

            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status {{ collector.querycount > 50 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.querycount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status {{ collector.invalidEntityCount > 0 ? 'sf-toolbar-status-red' : '' }}\">{{ collector.invalidEntityCount }}</span>
            </div>
            {% if collector.cacheEnabled %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.cacheHitsCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status {{ collector.cacheMissesCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cacheMissesCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status {{ collector.cachePutsCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cachePutsCount }}</span>
                </div>
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            {% endif %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}

    {% endif %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}

        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>{{ collector.querycount }}</span>
                <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
            </span>
        </span>

    {% else %}

        <span class=\"label {{ collector.invalidEntityCount > 0 ? 'label-status-error' }} {{ collector.querycount == 0 ? 'disabled' }}\">
            <span class=\"icon\">{{ include('@Doctrine/Collector/icon.svg') }}</span>
            <strong>Doctrine</strong>
            {% if collector.invalidEntityCount %}
                <span class=\"count\">
                    <span>{{ collector.invalidEntityCount }}</span>
                </span>
            {% endif %}
        </span>

    {% endif %}
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if 'explain' == page %}
        {{ render(controller('DoctrineBundle:Profiler:explain', {
            token: token,
            panel: 'db',
            connectionName: app.request.query.get('connection'),
            query: app.request.query.get('query')
        })) }}
    {% else %}
        {{ block('queries') }}
    {% endif %}
{% endblock %}

{% block queries %}
    <style>
        {% if profiler_markup_version == 1 %}
            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        {% endif %}

        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
    </style>

    {% if profiler_markup_version > 1 %}
        <h2>Query Metrics</h2>
    
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.querycount }}</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.groupedQueryCount }}</span>
                <span class=\"label\">Different statements</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                <span class=\"label\">Query time</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">{{ collector.invalidEntityCount }}</span>
                <span class=\"label\">Invalid entities</span>
            </div>
    
            {% if collector.cacheEnabled %}
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cacheHitsCount }}</span>
                \t<span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cacheMissesCount }}</span>
                \t<span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cachePutsCount }}</span>
                \t<span class=\"label\">Cache puts</span>
                </div>
            {% endif %}
        </div>
    {% endif %}

    {% set group_queries = request.query.getBoolean('group') %}
    {% if group_queries %}
        <h2>Grouped Statements</h2>
        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token }) }}\">Show all queries</a></p>
    {% else %}
        <h2>Queries</h2>
        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token, group: true }) }}\">Group similar statements</a></p>
    {% endif %}

    {% for connection, queries in collector.queries %}
        {% if collector.connections|length > 1 %}
            <h3>{{ connection }} <small>connection</small></h3>
        {% endif %}

        {% if queries is empty %}
            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        {% else %}
            {% if group_queries %}
                {% set queries = collector.groupedQueries[connection] %}
            {% endif %}
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    {% if group_queries %}
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Count<span></span></th>
                    {% else %}
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                    {% endif %}
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-{{ loop.index }}\">
                    {% for i, query in queries %}
                        {% set i = group_queries ? query.index : i %}
                        <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\">
                            {% if group_queries %}
                                <td class=\"time-container\">
                                    <span class=\"time-bar\" style=\"width:{{ '%0.2f'|format(query.executionPercent) }}%\"></span>
                                    <span class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms<br />({{ '%0.2f'|format(query.executionPercent) }}%)</span>
                                </td>
                                <td class=\"nowrap\">{{ query.count }}</td>
                            {% else %}
                                <td class=\"nowrap\">{{ loop.index }}</td>
                                <td class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms</td>
                            {% endif %}
                            <td>
                                {{ query.sql|doctrine_pretty_query(highlight_only = true) }}

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: {{ profiler_dump(query.params) }}
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" {{ profiler_markup_version == 1 ? 'onclick=\"return toggleRunnableQuery(this);\"' }} class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\" {{ profiler_markup_version == 1 ? 'onclick=\"return toggleRunnableQuery(this);\"' }} class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>

                                    {% if query.explainable %}
                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"{{ path('_profiler', { panel: 'db', token: token, page: 'explain', connection: connection, query: i }) }}\" onclick=\"return explain(this);\" data-target-id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\">Explain query</a>
                                    {% endif %}
                                </div>

                                <div id=\"formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                    {{ query.sql|doctrine_pretty_query }}
                                </div>

                                <div id=\"original-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                    {{ (query.sql ~ ';')|doctrine_replace_query_parameters(query.params)|doctrine_pretty_query(highlight_only = true) }}
                                </div>

                                {% if query.explainable %}
                                    <div id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\"></div>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <h2>Database Connections</h2>

    {% if not collector.connections %}
        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.connections, labels: ['Name', 'Service'] }, with_context = false ) }}
    {% endif %}

    <h2>Entity Managers</h2>

    {% if not collector.managers %}
        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.managers, labels: ['Name', 'Service'] }, with_context = false ) }}
    {% endif %}

    <h2>Second Level Cache</h2>

    {% if not collector.cacheEnabled %}
        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    {% else %}
        {% if not collector.cacheCounts %}
            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        {% else %}
            {% if profiler_markup_version == 1 %}
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheCounts }, with_context = false) }}
            {% else %}
                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.hits }}</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.misses }}</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.puts }}</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            {% endif %}

            {% if collector.cacheRegions.hits %}
                <h3>Number of cache hits</h3>
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.hits }, with_context = false) }}
            {% endif %}

            {% if collector.cacheRegions.misses %}
                <h3>Number of cache misses</h3>
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.misses }, with_context = false) }}
            {% endif %}

            {% if collector.cacheRegions.puts %}
                <h3>Number of cache puts</h3>
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.puts }, with_context = false) }}
            {% endif %}
        {% endif %}
    {% endif %}

    <h2>Entities Mapping</h2>

    {% for manager, classes in collector.entities %}
        {% if collector.managers|length > 1 %}
            <h3>{{ manager }} <small>entity manager</small></h3>
        {% endif %}

        {% if classes is empty %}
            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>
        {% else %}
            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                {% for class in classes %}
                    {% set contains_errors = collector.mappingErrors[manager] is defined and collector.mappingErrors[manager][class] is defined %}
                    <tr class=\"{{ contains_errors ? 'status-error' }}\">
                        <td>{{ class }}</td>
                        <td class=\"font-normal\">
                            {% if contains_errors %}
                                <ul>
                                    {% for error in collector.mappingErrors[manager][class] %}
                                        <li>{{ error }}</li>
                                    {% endfor %}
                                </ul>
                            {% else %}
                                No errors.
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        {% if profiler_markup_version == 1 %}
            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetDataAltContent = target.getAttribute('data-toggle-alt-content');
                var targetElement = document.querySelector(targetSelector);
                target.setAttribute('data-toggle-alt-content', target.innerHTML);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = targetDataAltContent;
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = targetDataAltContent;
                }

                return false;
            }
        {% endif %}

        //]]></script>
{% endblock %}
", "@Doctrine/Collector/db.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\doctrine\\doctrine-bundle\\Resources\\views\\Collector\\db.html.twig");
    }
}
