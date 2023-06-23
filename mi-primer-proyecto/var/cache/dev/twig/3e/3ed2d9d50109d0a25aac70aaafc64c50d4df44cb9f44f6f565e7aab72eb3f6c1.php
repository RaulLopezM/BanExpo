<?php

/* base.html.twig */
class __TwigTemplate_9632f828f13b1fffd231950a1ca30213c1af9d5bfeca36705baa6c4299150f80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b546852490da358768a6f4232ef4cfb54579fae8c3332681fa3a1ef923914f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b546852490da358768a6f4232ef4cfb54579fae8c3332681fa3a1ef923914f31->enter($__internal_b546852490da358768a6f4232ef4cfb54579fae8c3332681fa3a1ef923914f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_35f8984d522a4ef2ddab6cc527a148b81a487e17b8131b79d43b20172f9e5ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f8984d522a4ef2ddab6cc527a148b81a487e17b8131b79d43b20172f9e5ee2->enter($__internal_35f8984d522a4ef2ddab6cc527a148b81a487e17b8131b79d43b20172f9e5ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    </body>
</html>
";
        
        $__internal_b546852490da358768a6f4232ef4cfb54579fae8c3332681fa3a1ef923914f31->leave($__internal_b546852490da358768a6f4232ef4cfb54579fae8c3332681fa3a1ef923914f31_prof);

        
        $__internal_35f8984d522a4ef2ddab6cc527a148b81a487e17b8131b79d43b20172f9e5ee2->leave($__internal_35f8984d522a4ef2ddab6cc527a148b81a487e17b8131b79d43b20172f9e5ee2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_72c5d791e0521c02182df025435a9719c5e925807862026040c259d6f6b72039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c5d791e0521c02182df025435a9719c5e925807862026040c259d6f6b72039->enter($__internal_72c5d791e0521c02182df025435a9719c5e925807862026040c259d6f6b72039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_980e685e266ec8bcccbe98fb384908e1960b0e444f807550a4caf9d77591d6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980e685e266ec8bcccbe98fb384908e1960b0e444f807550a4caf9d77591d6dc->enter($__internal_980e685e266ec8bcccbe98fb384908e1960b0e444f807550a4caf9d77591d6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_980e685e266ec8bcccbe98fb384908e1960b0e444f807550a4caf9d77591d6dc->leave($__internal_980e685e266ec8bcccbe98fb384908e1960b0e444f807550a4caf9d77591d6dc_prof);

        
        $__internal_72c5d791e0521c02182df025435a9719c5e925807862026040c259d6f6b72039->leave($__internal_72c5d791e0521c02182df025435a9719c5e925807862026040c259d6f6b72039_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50a46fe4fae4958aee5ab530b6a0cfb752babf4875948a496f9fa54b469ae8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a46fe4fae4958aee5ab530b6a0cfb752babf4875948a496f9fa54b469ae8fc->enter($__internal_50a46fe4fae4958aee5ab530b6a0cfb752babf4875948a496f9fa54b469ae8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ccc6b8e170d2ae14ff89d6575a14f48cff3a4df9dea05bb83933ae34c0ebce4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc6b8e170d2ae14ff89d6575a14f48cff3a4df9dea05bb83933ae34c0ebce4f->enter($__internal_ccc6b8e170d2ae14ff89d6575a14f48cff3a4df9dea05bb83933ae34c0ebce4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.css"), "html", null, true);
        echo "\">";
        
        $__internal_ccc6b8e170d2ae14ff89d6575a14f48cff3a4df9dea05bb83933ae34c0ebce4f->leave($__internal_ccc6b8e170d2ae14ff89d6575a14f48cff3a4df9dea05bb83933ae34c0ebce4f_prof);

        
        $__internal_50a46fe4fae4958aee5ab530b6a0cfb752babf4875948a496f9fa54b469ae8fc->leave($__internal_50a46fe4fae4958aee5ab530b6a0cfb752babf4875948a496f9fa54b469ae8fc_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_d65e7d4d969b2c4bc1fb25f184f722ca3ea39ee5ff49ec519d4d901f61e90e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65e7d4d969b2c4bc1fb25f184f722ca3ea39ee5ff49ec519d4d901f61e90e3f->enter($__internal_d65e7d4d969b2c4bc1fb25f184f722ca3ea39ee5ff49ec519d4d901f61e90e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a265242b54862fa75ea6234b2dc1ed09c72f6a3e5bfb268593b31ebbc373c5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a265242b54862fa75ea6234b2dc1ed09c72f6a3e5bfb268593b31ebbc373c5c0->enter($__internal_a265242b54862fa75ea6234b2dc1ed09c72f6a3e5bfb268593b31ebbc373c5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
            <header>
                <nav>
                    <div class=\"nav-wrapper blue\">
                        <a href=\"#\" class=\"brand-logo center\"> BanExpo <i class=\"fa-solid fa-vault\" style=\"color: #0d1868;\"></i></a>
                        <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                            <li><a href=\"sass.html\">Contactanos</a></li>

                        </ul>
                    </div>
                </nav>
            </header>";
        // line 27
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_a265242b54862fa75ea6234b2dc1ed09c72f6a3e5bfb268593b31ebbc373c5c0->leave($__internal_a265242b54862fa75ea6234b2dc1ed09c72f6a3e5bfb268593b31ebbc373c5c0_prof);

        
        $__internal_d65e7d4d969b2c4bc1fb25f184f722ca3ea39ee5ff49ec519d4d901f61e90e3f->leave($__internal_d65e7d4d969b2c4bc1fb25f184f722ca3ea39ee5ff49ec519d4d901f61e90e3f_prof);

    }

    public function block_contenido($context, array $blocks = array())
    {
        $__internal_a9ebfc9571c7abfaf8ffd78ef4c2d06529f7124811e073e4b8fa15ced4bb1a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ebfc9571c7abfaf8ffd78ef4c2d06529f7124811e073e4b8fa15ced4bb1a1b->enter($__internal_a9ebfc9571c7abfaf8ffd78ef4c2d06529f7124811e073e4b8fa15ced4bb1a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_5f91b2e41634d71fdc2b7c548fa98727ca8531285d7a07f59d987d4f7017384c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f91b2e41634d71fdc2b7c548fa98727ca8531285d7a07f59d987d4f7017384c->enter($__internal_5f91b2e41634d71fdc2b7c548fa98727ca8531285d7a07f59d987d4f7017384c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        
        $__internal_5f91b2e41634d71fdc2b7c548fa98727ca8531285d7a07f59d987d4f7017384c->leave($__internal_5f91b2e41634d71fdc2b7c548fa98727ca8531285d7a07f59d987d4f7017384c_prof);

        
        $__internal_a9ebfc9571c7abfaf8ffd78ef4c2d06529f7124811e073e4b8fa15ced4bb1a1b->leave($__internal_a9ebfc9571c7abfaf8ffd78ef4c2d06529f7124811e073e4b8fa15ced4bb1a1b_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5deaac6b5a673234d509b83e38e95194782ec5db2373188acba11c99dbc8d7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5deaac6b5a673234d509b83e38e95194782ec5db2373188acba11c99dbc8d7a2->enter($__internal_5deaac6b5a673234d509b83e38e95194782ec5db2373188acba11c99dbc8d7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3a9712e9b5dd6715e40515340f5bd730cf623b541ff2e9234c14027d72944db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9712e9b5dd6715e40515340f5bd730cf623b541ff2e9234c14027d72944db9->enter($__internal_3a9712e9b5dd6715e40515340f5bd730cf623b541ff2e9234c14027d72944db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.7.0.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://kit.fontawesome.com/8ca6a2f253.js\" crossorigin=\"anonymous\"></script>";
        // line 36
        $this->loadTemplate(":js:init.js.twig", "base.html.twig", 36)->display($context);
        
        $__internal_3a9712e9b5dd6715e40515340f5bd730cf623b541ff2e9234c14027d72944db9->leave($__internal_3a9712e9b5dd6715e40515340f5bd730cf623b541ff2e9234c14027d72944db9_prof);

        
        $__internal_5deaac6b5a673234d509b83e38e95194782ec5db2373188acba11c99dbc8d7a2->leave($__internal_5deaac6b5a673234d509b83e38e95194782ec5db2373188acba11c99dbc8d7a2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 36,  172 => 34,  168 => 33,  163 => 32,  154 => 31,  128 => 27,  115 => 14,  106 => 13,  95 => 8,  90 => 7,  81 => 6,  63 => 5,  51 => 38,  49 => 31,  47 => 13,  41 => 10,  39 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Home{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/materialize.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/dataTables.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}

            <header>
                <nav>
                    <div class=\"nav-wrapper blue\">
                        <a href=\"#\" class=\"brand-logo center\"> BanExpo <i class=\"fa-solid fa-vault\" style=\"color: #0d1868;\"></i></a>
                        <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                            <li><a href=\"sass.html\">Contactanos</a></li>

                        </ul>
                    </div>
                </nav>
            </header>

            {% block contenido %} {% endblock %}


        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.7.0.js') }}\"></script>
            <script src=\"{{ asset('js/materialize.js') }}\"></script>
            <script src=\"{{ asset('js/jquery.dataTables.min.js') }}\"></script>
            <script src=\"https://kit.fontawesome.com/8ca6a2f253.js\" crossorigin=\"anonymous\"></script>
            {% include ':js:init.js.twig' %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\app\\Resources\\views\\base.html.twig");
    }
}
