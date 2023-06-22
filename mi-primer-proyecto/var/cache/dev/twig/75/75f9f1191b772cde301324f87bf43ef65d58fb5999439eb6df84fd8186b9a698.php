<?php

/* :js:init.js.twig */
class __TwigTemplate_a57bb56d654bfe24859b63b03383faf27326ec06dfe235f4735475a2bb75f356 extends Twig_Template
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
        $__internal_dee756dfba4724c6ae46304ed3ca1fe27eded037b5234de4a8226fdfd18be63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee756dfba4724c6ae46304ed3ca1fe27eded037b5234de4a8226fdfd18be63a->enter($__internal_dee756dfba4724c6ae46304ed3ca1fe27eded037b5234de4a8226fdfd18be63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":js:init.js.twig"));

        $__internal_d9dffaeafcc3c0e60ce7c82538129516500e9a33c2ffd36b16d8723be63a8af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dffaeafcc3c0e60ce7c82538129516500e9a33c2ffd36b16d8723be63a8af8->enter($__internal_d9dffaeafcc3c0e60ce7c82538129516500e9a33c2ffd36b16d8723be63a8af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":js:init.js.twig"));

        // line 1
        echo "<script>
        \$(document).ready(function (){
            \$('select').material_select();
        });
</script>";
        
        $__internal_dee756dfba4724c6ae46304ed3ca1fe27eded037b5234de4a8226fdfd18be63a->leave($__internal_dee756dfba4724c6ae46304ed3ca1fe27eded037b5234de4a8226fdfd18be63a_prof);

        
        $__internal_d9dffaeafcc3c0e60ce7c82538129516500e9a33c2ffd36b16d8723be63a8af8->leave($__internal_d9dffaeafcc3c0e60ce7c82538129516500e9a33c2ffd36b16d8723be63a8af8_prof);

    }

    public function getTemplateName()
    {
        return ":js:init.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
        \$(document).ready(function (){
            \$('select').material_select();
        });
</script>", ":js:init.js.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\app/Resources\\views/js/init.js.twig");
    }
}
