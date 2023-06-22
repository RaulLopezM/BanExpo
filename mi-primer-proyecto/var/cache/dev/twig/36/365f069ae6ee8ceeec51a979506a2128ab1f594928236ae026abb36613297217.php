<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_d818aefff0e45cf0942422533e942f1da4e4fdd12694aefdc1ee35d5b64a8d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
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
        $__internal_60017dbca9cf9bc1ced916089d42fd84d9ed61f9d86de75e2cc3be386139240f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60017dbca9cf9bc1ced916089d42fd84d9ed61f9d86de75e2cc3be386139240f->enter($__internal_60017dbca9cf9bc1ced916089d42fd84d9ed61f9d86de75e2cc3be386139240f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $__internal_49d786634734a980e48aaadd4e6f053e639639575a0c0a7aaefdecea6d9eff0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d786634734a980e48aaadd4e6f053e639639575a0c0a7aaefdecea6d9eff0b->enter($__internal_49d786634734a980e48aaadd4e6f053e639639575a0c0a7aaefdecea6d9eff0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60017dbca9cf9bc1ced916089d42fd84d9ed61f9d86de75e2cc3be386139240f->leave($__internal_60017dbca9cf9bc1ced916089d42fd84d9ed61f9d86de75e2cc3be386139240f_prof);

        
        $__internal_49d786634734a980e48aaadd4e6f053e639639575a0c0a7aaefdecea6d9eff0b->leave($__internal_49d786634734a980e48aaadd4e6f053e639639575a0c0a7aaefdecea6d9eff0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7f09bd5d4dbb73848d1ee68fd3258bb982eefed6c52f2a45f926155c73b5892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f09bd5d4dbb73848d1ee68fd3258bb982eefed6c52f2a45f926155c73b5892->enter($__internal_f7f09bd5d4dbb73848d1ee68fd3258bb982eefed6c52f2a45f926155c73b5892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1be21270b34382c1c4d379b5ef3c824b664144912c05571fe30f446cedb06022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be21270b34382c1c4d379b5ef3c824b664144912c05571fe30f446cedb06022->enter($__internal_1be21270b34382c1c4d379b5ef3c824b664144912c05571fe30f446cedb06022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        $context["time"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        ob_start();
        // line 6
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
        
        $__internal_1be21270b34382c1c4d379b5ef3c824b664144912c05571fe30f446cedb06022->leave($__internal_1be21270b34382c1c4d379b5ef3c824b664144912c05571fe30f446cedb06022_prof);

        
        $__internal_f7f09bd5d4dbb73848d1ee68fd3258bb982eefed6c52f2a45f926155c73b5892->leave($__internal_f7f09bd5d4dbb73848d1ee68fd3258bb982eefed6c52f2a45f926155c73b5892_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be20257698034d511e93200f7c5532b8907c94a4c87c266d3b966f6e93793d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be20257698034d511e93200f7c5532b8907c94a4c87c266d3b966f6e93793d3f->enter($__internal_be20257698034d511e93200f7c5532b8907c94a4c87c266d3b966f6e93793d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f8b2a33100fffbf1ea42541e8d482ae6ef3062fee108148c7d6ce5903bb9a612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b2a33100fffbf1ea42541e8d482ae6ef3062fee108148c7d6ce5903bb9a612->enter($__internal_f8b2a33100fffbf1ea42541e8d482ae6ef3062fee108148c7d6ce5903bb9a612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>";
        
        $__internal_f8b2a33100fffbf1ea42541e8d482ae6ef3062fee108148c7d6ce5903bb9a612->leave($__internal_f8b2a33100fffbf1ea42541e8d482ae6ef3062fee108148c7d6ce5903bb9a612_prof);

        
        $__internal_be20257698034d511e93200f7c5532b8907c94a4c87c266d3b966f6e93793d3f->leave($__internal_be20257698034d511e93200f7c5532b8907c94a4c87c266d3b966f6e93793d3f_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9da7a1e796d01ba4f71ed650b88eb29060424fa7fb9f1320992ed881e5529848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da7a1e796d01ba4f71ed650b88eb29060424fa7fb9f1320992ed881e5529848->enter($__internal_9da7a1e796d01ba4f71ed650b88eb29060424fa7fb9f1320992ed881e5529848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5d5b5fe2aa5a03fa874e64761a9b2a851fd4d165b512749e99f10e3349f43ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d5b5fe2aa5a03fa874e64761a9b2a851fd4d165b512749e99f10e3349f43ea->enter($__internal_e5d5b5fe2aa5a03fa874e64761a9b2a851fd4d165b512749e99f10e3349f43ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</td>
                    <td class=\"font-normal\">";
                // line 89
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>";
        }
        
        $__internal_e5d5b5fe2aa5a03fa874e64761a9b2a851fd4d165b512749e99f10e3349f43ea->leave($__internal_e5d5b5fe2aa5a03fa874e64761a9b2a851fd4d165b512749e99f10e3349f43ea_prof);

        
        $__internal_9da7a1e796d01ba4f71ed650b88eb29060424fa7fb9f1320992ed881e5529848->leave($__internal_9da7a1e796d01ba4f71ed650b88eb29060424fa7fb9f1320992ed881e5529848_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 98,  219 => 92,  211 => 89,  207 => 88,  204 => 87,  200 => 86,  179 => 67,  171 => 62,  163 => 57,  155 => 52,  149 => 48,  142 => 42,  140 => 41,  131 => 40,  118 => 35,  115 => 34,  106 => 33,  96 => 30,  91 => 26,  84 => 22,  77 => 18,  70 => 14,  66 => 12,  64 => 11,  59 => 7,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.templatecount }}</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.blockcount }}</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.macrocount }}</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    <td>{{ template }}</td>
                    <td class=\"font-normal\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/twig.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\twig.html.twig");
    }
}
