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
        $__internal_dcf1ff5647c15e5f73146aee500682708ddf0717e33d9bc32f3f81024c8b5b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf1ff5647c15e5f73146aee500682708ddf0717e33d9bc32f3f81024c8b5b0a->enter($__internal_dcf1ff5647c15e5f73146aee500682708ddf0717e33d9bc32f3f81024c8b5b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_02a1e58b2552e1f976f53942edbc80f4028d155072ea68f9944214b6b08b9861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a1e58b2552e1f976f53942edbc80f4028d155072ea68f9944214b6b08b9861->enter($__internal_02a1e58b2552e1f976f53942edbc80f4028d155072ea68f9944214b6b08b9861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    </body>
</html>
";
        
        $__internal_dcf1ff5647c15e5f73146aee500682708ddf0717e33d9bc32f3f81024c8b5b0a->leave($__internal_dcf1ff5647c15e5f73146aee500682708ddf0717e33d9bc32f3f81024c8b5b0a_prof);

        
        $__internal_02a1e58b2552e1f976f53942edbc80f4028d155072ea68f9944214b6b08b9861->leave($__internal_02a1e58b2552e1f976f53942edbc80f4028d155072ea68f9944214b6b08b9861_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0a03039ca283077fbe225349c89fc8a26e98880a919ae2f2fcf3b137b35059a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a03039ca283077fbe225349c89fc8a26e98880a919ae2f2fcf3b137b35059a->enter($__internal_b0a03039ca283077fbe225349c89fc8a26e98880a919ae2f2fcf3b137b35059a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cab998d04f1a65760a8677f82693e766881a6ff4c3705d719d11fdc7bd3d730d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab998d04f1a65760a8677f82693e766881a6ff4c3705d719d11fdc7bd3d730d->enter($__internal_cab998d04f1a65760a8677f82693e766881a6ff4c3705d719d11fdc7bd3d730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_cab998d04f1a65760a8677f82693e766881a6ff4c3705d719d11fdc7bd3d730d->leave($__internal_cab998d04f1a65760a8677f82693e766881a6ff4c3705d719d11fdc7bd3d730d_prof);

        
        $__internal_b0a03039ca283077fbe225349c89fc8a26e98880a919ae2f2fcf3b137b35059a->leave($__internal_b0a03039ca283077fbe225349c89fc8a26e98880a919ae2f2fcf3b137b35059a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42e2c8bdc814da4a48c60ee2be8ea7abd61f23a36b050e48685fd5d369d4595b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e2c8bdc814da4a48c60ee2be8ea7abd61f23a36b050e48685fd5d369d4595b->enter($__internal_42e2c8bdc814da4a48c60ee2be8ea7abd61f23a36b050e48685fd5d369d4595b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_18b1679187d22205de1855e40ea8f8ab756058ea8d7e74e2b58aaca1604384c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b1679187d22205de1855e40ea8f8ab756058ea8d7e74e2b58aaca1604384c2->enter($__internal_18b1679187d22205de1855e40ea8f8ab756058ea8d7e74e2b58aaca1604384c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.css"), "html", null, true);
        echo "\">";
        
        $__internal_18b1679187d22205de1855e40ea8f8ab756058ea8d7e74e2b58aaca1604384c2->leave($__internal_18b1679187d22205de1855e40ea8f8ab756058ea8d7e74e2b58aaca1604384c2_prof);

        
        $__internal_42e2c8bdc814da4a48c60ee2be8ea7abd61f23a36b050e48685fd5d369d4595b->leave($__internal_42e2c8bdc814da4a48c60ee2be8ea7abd61f23a36b050e48685fd5d369d4595b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b24f0e3efe6d06e4f133163a1e33494f1ccabf9903f6e7ca3d1a5530773bc57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b24f0e3efe6d06e4f133163a1e33494f1ccabf9903f6e7ca3d1a5530773bc57->enter($__internal_8b24f0e3efe6d06e4f133163a1e33494f1ccabf9903f6e7ca3d1a5530773bc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_738dee632f3662b3defc7c2d3a5459a68e6f880946dd45b0e68f766fb172d3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738dee632f3662b3defc7c2d3a5459a68e6f880946dd45b0e68f766fb172d3d8->enter($__internal_738dee632f3662b3defc7c2d3a5459a68e6f880946dd45b0e68f766fb172d3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
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
        // line 26
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_738dee632f3662b3defc7c2d3a5459a68e6f880946dd45b0e68f766fb172d3d8->leave($__internal_738dee632f3662b3defc7c2d3a5459a68e6f880946dd45b0e68f766fb172d3d8_prof);

        
        $__internal_8b24f0e3efe6d06e4f133163a1e33494f1ccabf9903f6e7ca3d1a5530773bc57->leave($__internal_8b24f0e3efe6d06e4f133163a1e33494f1ccabf9903f6e7ca3d1a5530773bc57_prof);

    }

    public function block_contenido($context, array $blocks = array())
    {
        $__internal_262f577e40d846d13a770861647e034b435b0965e9fbfda43a863cd63745bf4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262f577e40d846d13a770861647e034b435b0965e9fbfda43a863cd63745bf4c->enter($__internal_262f577e40d846d13a770861647e034b435b0965e9fbfda43a863cd63745bf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_991d2f1efb8265ec254ec09b87e810d987b3addd986b30729d09bbff3b325b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991d2f1efb8265ec254ec09b87e810d987b3addd986b30729d09bbff3b325b4b->enter($__internal_991d2f1efb8265ec254ec09b87e810d987b3addd986b30729d09bbff3b325b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        
        $__internal_991d2f1efb8265ec254ec09b87e810d987b3addd986b30729d09bbff3b325b4b->leave($__internal_991d2f1efb8265ec254ec09b87e810d987b3addd986b30729d09bbff3b325b4b_prof);

        
        $__internal_262f577e40d846d13a770861647e034b435b0965e9fbfda43a863cd63745bf4c->leave($__internal_262f577e40d846d13a770861647e034b435b0965e9fbfda43a863cd63745bf4c_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0b2ab2cebde4f1ba86516627da64bfa6c3363b82d5dd3216aad67fda45f2dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b2ab2cebde4f1ba86516627da64bfa6c3363b82d5dd3216aad67fda45f2dbd->enter($__internal_e0b2ab2cebde4f1ba86516627da64bfa6c3363b82d5dd3216aad67fda45f2dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_abfe0fc98ab0b1de43a2c6baa38da50f4ae79632c7c2c05ed2fe4e5cc7afc7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfe0fc98ab0b1de43a2c6baa38da50f4ae79632c7c2c05ed2fe4e5cc7afc7f6->enter($__internal_abfe0fc98ab0b1de43a2c6baa38da50f4ae79632c7c2c05ed2fe4e5cc7afc7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.7.0.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://kit.fontawesome.com/8ca6a2f253.js\" crossorigin=\"anonymous\"></script>";
        // line 35
        $this->loadTemplate(":js:init.js.twig", "base.html.twig", 35)->display($context);
        
        $__internal_abfe0fc98ab0b1de43a2c6baa38da50f4ae79632c7c2c05ed2fe4e5cc7afc7f6->leave($__internal_abfe0fc98ab0b1de43a2c6baa38da50f4ae79632c7c2c05ed2fe4e5cc7afc7f6_prof);

        
        $__internal_e0b2ab2cebde4f1ba86516627da64bfa6c3363b82d5dd3216aad67fda45f2dbd->leave($__internal_e0b2ab2cebde4f1ba86516627da64bfa6c3363b82d5dd3216aad67fda45f2dbd_prof);

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
        return array (  172 => 35,  168 => 33,  164 => 32,  159 => 31,  150 => 30,  124 => 26,  111 => 13,  102 => 12,  90 => 7,  81 => 6,  63 => 5,  51 => 37,  49 => 30,  47 => 12,  41 => 9,  39 => 6,  36 => 5,  30 => 1,);
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
