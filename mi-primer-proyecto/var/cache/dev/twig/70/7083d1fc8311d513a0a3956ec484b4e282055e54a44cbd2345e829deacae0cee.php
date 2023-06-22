<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_2863279c7bc54f25ded5f81a44f1e6c62cd0d2f32862877d35b32e500ff05fa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
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
        $__internal_945b9a94e75ac5261de7663863c77064a411746045757c885e344a1a8a550798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945b9a94e75ac5261de7663863c77064a411746045757c885e344a1a8a550798->enter($__internal_945b9a94e75ac5261de7663863c77064a411746045757c885e344a1a8a550798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $__internal_89bace78bb8f563bf96bdb97ab5456b38766e4a734a4e6cd5f54e2e7b201a7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bace78bb8f563bf96bdb97ab5456b38766e4a734a4e6cd5f54e2e7b201a7d8->enter($__internal_89bace78bb8f563bf96bdb97ab5456b38766e4a734a4e6cd5f54e2e7b201a7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_945b9a94e75ac5261de7663863c77064a411746045757c885e344a1a8a550798->leave($__internal_945b9a94e75ac5261de7663863c77064a411746045757c885e344a1a8a550798_prof);

        
        $__internal_89bace78bb8f563bf96bdb97ab5456b38766e4a734a4e6cd5f54e2e7b201a7d8->leave($__internal_89bace78bb8f563bf96bdb97ab5456b38766e4a734a4e6cd5f54e2e7b201a7d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fff40b23e6746b9ef09caa85f7f958775c65b92e9d6fba1c78a045d0a72b16b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff40b23e6746b9ef09caa85f7f958775c65b92e9d6fba1c78a045d0a72b16b5->enter($__internal_fff40b23e6746b9ef09caa85f7f958775c65b92e9d6fba1c78a045d0a72b16b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_21e8904b88ff79143fda806fc7c7f97e9fa9f4405b394a8603528252cd842fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e8904b88ff79143fda806fc7c7f97e9fa9f4405b394a8603528252cd842fdd->enter($__internal_21e8904b88ff79143fda806fc7c7f97e9fa9f4405b394a8603528252cd842fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>";
        
        $__internal_21e8904b88ff79143fda806fc7c7f97e9fa9f4405b394a8603528252cd842fdd->leave($__internal_21e8904b88ff79143fda806fc7c7f97e9fa9f4405b394a8603528252cd842fdd_prof);

        
        $__internal_fff40b23e6746b9ef09caa85f7f958775c65b92e9d6fba1c78a045d0a72b16b5->leave($__internal_fff40b23e6746b9ef09caa85f7f958775c65b92e9d6fba1c78a045d0a72b16b5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de9170ebd0dd8235966a7b235dcac8ef8488372603d675720eb5a42f7794105d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9170ebd0dd8235966a7b235dcac8ef8488372603d675720eb5a42f7794105d->enter($__internal_de9170ebd0dd8235966a7b235dcac8ef8488372603d675720eb5a42f7794105d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c9812288ae7a57cfec0edddbbc24288c0b8eae784111c8eaa3afa9e3cd143eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9812288ae7a57cfec0edddbbc24288c0b8eae784111c8eaa3afa9e3cd143eb->enter($__internal_7c9812288ae7a57cfec0edddbbc24288c0b8eae784111c8eaa3afa9e3cd143eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>";
        // line 15
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">";
            // line 25
            echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">";
            // line 32
            if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>";
            } else {
                // line 44
                echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array()));
            }
            // line 46
            echo "                </div>
            </div>
        </div>";
        }
        
        $__internal_7c9812288ae7a57cfec0edddbbc24288c0b8eae784111c8eaa3afa9e3cd143eb->leave($__internal_7c9812288ae7a57cfec0edddbbc24288c0b8eae784111c8eaa3afa9e3cd143eb_prof);

        
        $__internal_de9170ebd0dd8235966a7b235dcac8ef8488372603d675720eb5a42f7794105d->leave($__internal_de9170ebd0dd8235966a7b235dcac8ef8488372603d675720eb5a42f7794105d_prof);

    }

    // line 52
    public function getrender_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cca2862fb83a9926460ba428ae9f2fbcbf4db5c56b9408981c48ea618428b706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cca2862fb83a9926460ba428ae9f2fbcbf4db5c56b9408981c48ea618428b706->enter($__internal_cca2862fb83a9926460ba428ae9f2fbcbf4db5c56b9408981c48ea618428b706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_1b854189104f2f28da62de1286d1fe43696735069dcdc2cf69ecc63e206f3ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1b854189104f2f28da62de1286d1fe43696735069dcdc2cf69ecc63e206f3ca1->enter($__internal_1b854189104f2f28da62de1286d1fe43696735069dcdc2cf69ecc63e206f3ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>";
            // line 61
            $context["previous_event"] = $this->getAttribute(twig_first($this->env, ($context["listeners"] ?? $this->getContext($context, "listeners"))), "event", array());
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listeners"] ?? $this->getContext($context, "listeners")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                if (($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($context["listener"], "event", array()) != ($context["previous_event"] ?? $this->getContext($context, "previous_event"))))) {
                    // line 64
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>";
                    // line 73
                    $context["previous_event"] = $this->getAttribute($context["listener"], "event", array());
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right\">";
                // line 77
                echo twig_escape_filter($this->env, (($this->getAttribute($context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 78
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "data", array())));
                echo "</td>
            </tr>";
                // line 81
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 82
                    echo "                </tbody>";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </table>";
            
            $__internal_1b854189104f2f28da62de1286d1fe43696735069dcdc2cf69ecc63e206f3ca1->leave($__internal_1b854189104f2f28da62de1286d1fe43696735069dcdc2cf69ecc63e206f3ca1_prof);

            
            $__internal_cca2862fb83a9926460ba428ae9f2fbcbf4db5c56b9408981c48ea618428b706->leave($__internal_cca2862fb83a9926460ba428ae9f2fbcbf4db5c56b9408981c48ea618428b706_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 85,  216 => 82,  214 => 81,  210 => 78,  206 => 77,  202 => 75,  199 => 73,  195 => 70,  190 => 67,  187 => 65,  185 => 64,  183 => 63,  166 => 62,  164 => 61,  156 => 53,  138 => 52,  125 => 46,  122 => 44,  110 => 33,  108 => 32,  104 => 30,  96 => 25,  91 => 22,  87 => 20,  82 => 16,  80 => 15,  78 => 13,  69 => 12,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
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

{% import _self as helper %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Event Dispatcher</h2>

    {% if collector.calledlisteners is empty %}
        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ collector.calledlisteners|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledlisteners) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.notcalledlisteners|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notcalledlisteners is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notcalledlisteners) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.data) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "@WebProfiler/Collector/events.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\events.html.twig");
    }
}
