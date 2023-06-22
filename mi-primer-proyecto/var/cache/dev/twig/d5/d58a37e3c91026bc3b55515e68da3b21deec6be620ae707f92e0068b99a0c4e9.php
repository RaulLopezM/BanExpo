<?php

/* @Twig/Exception/traces.html.twig */
class __TwigTemplate_ef7a3791b2446e6335ee234564079a6c7fe9cedcd865f70111996edc407c0f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc9ee42a1134f8132f081e5c2fc7b62a98afda9ecb4bf5b0acfb9b8e954cd64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9ee42a1134f8132f081e5c2fc7b62a98afda9ecb4bf5b0acfb9b8e954cd64a->enter($__internal_fc9ee42a1134f8132f081e5c2fc7b62a98afda9ecb4bf5b0acfb9b8e954cd64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));

        $__internal_cba81079a98d27a55394ead3f407fdc4547d08f03afec577eb4021b41d31c704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba81079a98d27a55394ead3f407fdc4547d08f03afec577eb4021b41d31c704->enter($__internal_cba81079a98d27a55394ead3f407fdc4547d08f03afec577eb4021b41d31c704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));

        // line 1
        echo "<div class=\"block\">";
        // line 2
        if ((($context["count"] ?? $this->getContext($context, "count")) > 0)) {
            // line 3
            echo "        <h2>
            <span><small>[";
            // line 4
            echo twig_escape_filter($this->env, ((($context["count"] ?? $this->getContext($context, "count")) - ($context["position"] ?? $this->getContext($context, "position"))) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($context["count"] ?? $this->getContext($context, "count")) + 1), "html", null, true);
            echo "]</small></span>";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()));
            echo ":";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true)));
            echo "&nbsp;";
            // line 6
            ob_start();
            // line 7
            echo "            <a href=\"#\" onclick=\"toggle('traces-";
            echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
            echo "', 'traces'); switchIcons('icon-traces-";
            echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
            echo "-open', 'icon-traces-";
            echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
            echo "-close'); return false;\">
                <img class=\"toggle\" id=\"icon-traces-";
            // line 8
            echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
            echo "-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:";
            echo (((0 == ($context["count"] ?? $this->getContext($context, "count")))) ? ("inline") : ("none"));
            echo "\" />
                <img class=\"toggle\" id=\"icon-traces-";
            // line 9
            echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
            echo "-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:";
            echo (((0 == ($context["count"] ?? $this->getContext($context, "count")))) ? ("none") : ("inline"));
            echo "\" />
            </a>";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "        </h2>";
        } else {
            // line 14
            echo "        <h2>Stack Trace</h2>";
        }
        // line 16
        echo "
    <a id=\"traces-link-";
        // line 17
        echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
        echo "\"></a>
    <ol class=\"traces list-exception\" id=\"traces-";
        // line 18
        echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
        echo "\" style=\"display:";
        echo (((0 == ($context["count"] ?? $this->getContext($context, "count")))) ? ("block") : ("none"));
        echo "\">";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 20
            echo "            <li>";
            // line 21
            $this->loadTemplate("@Twig/Exception/trace.html.twig", "@Twig/Exception/traces.html.twig", 21)->display(array("prefix" => ($context["position"] ?? $this->getContext($context, "position")), "i" => $context["i"], "trace" => $context["trace"]));
            // line 22
            echo "            </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ol>
</div>
";
        
        $__internal_fc9ee42a1134f8132f081e5c2fc7b62a98afda9ecb4bf5b0acfb9b8e954cd64a->leave($__internal_fc9ee42a1134f8132f081e5c2fc7b62a98afda9ecb4bf5b0acfb9b8e954cd64a_prof);

        
        $__internal_cba81079a98d27a55394ead3f407fdc4547d08f03afec577eb4021b41d31c704->leave($__internal_cba81079a98d27a55394ead3f407fdc4547d08f03afec577eb4021b41d31c704_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  92 => 22,  90 => 21,  88 => 20,  84 => 19,  79 => 18,  75 => 17,  72 => 16,  69 => 14,  66 => 12,  59 => 9,  53 => 8,  44 => 7,  42 => 6,  37 => 5,  32 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"block\">
    {% if count > 0 %}
        <h2>
            <span><small>[{{ count - position + 1 }}/{{ count + 1 }}]</small></span>
            {{ exception.class|abbr_class }}: {{ exception.message|nl2br|format_file_from_text }}&nbsp;
            {% spaceless %}
            <a href=\"#\" onclick=\"toggle('traces-{{ position }}', 'traces'); switchIcons('icon-traces-{{ position }}-open', 'icon-traces-{{ position }}-close'); return false;\">
                <img class=\"toggle\" id=\"icon-traces-{{ position }}-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: {{ 0 == count ? 'inline' : 'none' }}\" />
                <img class=\"toggle\" id=\"icon-traces-{{ position }}-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: {{ 0 == count ? 'none' : 'inline' }}\" />
            </a>
            {% endspaceless %}
        </h2>
    {% else %}
        <h2>Stack Trace</h2>
    {% endif %}

    <a id=\"traces-link-{{ position }}\"></a>
    <ol class=\"traces list-exception\" id=\"traces-{{ position }}\" style=\"display: {{ 0 == count ? 'block' : 'none' }}\">
        {% for i, trace in exception.trace %}
            <li>
                {% include '@Twig/Exception/trace.html.twig' with { 'prefix': position, 'i': i, 'trace': trace } only %}
            </li>
        {% endfor %}
    </ol>
</div>
", "@Twig/Exception/traces.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.html.twig");
    }
}
