<?php

/* PruebaPrimerBundle:Default:index.html.twig */
class __TwigTemplate_fcd932eb310839ea05d3587d2392f12f608d0454f346a02ce2dad7e5891a69c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PruebaPrimerBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0ef30faa3d63d08f17f6849362fdc216c8e93477027b5863e658e7ea090aa88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ef30faa3d63d08f17f6849362fdc216c8e93477027b5863e658e7ea090aa88->enter($__internal_c0ef30faa3d63d08f17f6849362fdc216c8e93477027b5863e658e7ea090aa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaPrimerBundle:Default:index.html.twig"));

        $__internal_40d19c5d1a0dc44434df9dd921de67692c159b236604455da0975aa9b122e8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d19c5d1a0dc44434df9dd921de67692c159b236604455da0975aa9b122e8f0->enter($__internal_40d19c5d1a0dc44434df9dd921de67692c159b236604455da0975aa9b122e8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaPrimerBundle:Default:index.html.twig"));

        // line 25
        $context["asset_path"] = "resources/prueba/";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ef30faa3d63d08f17f6849362fdc216c8e93477027b5863e658e7ea090aa88->leave($__internal_c0ef30faa3d63d08f17f6849362fdc216c8e93477027b5863e658e7ea090aa88_prof);

        
        $__internal_40d19c5d1a0dc44434df9dd921de67692c159b236604455da0975aa9b122e8f0->leave($__internal_40d19c5d1a0dc44434df9dd921de67692c159b236604455da0975aa9b122e8f0_prof);

    }

    // line 27
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_dfc385daa149f2422e1d9027286b673354217d0bd813c39bdbc3e9327f954494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc385daa149f2422e1d9027286b673354217d0bd813c39bdbc3e9327f954494->enter($__internal_dfc385daa149f2422e1d9027286b673354217d0bd813c39bdbc3e9327f954494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_525d77fd3680cb465cdae8b0e50eca80f473e17ff6aa4b6b8b879f25ddb26703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525d77fd3680cb465cdae8b0e50eca80f473e17ff6aa4b6b8b879f25ddb26703->enter($__internal_525d77fd3680cb465cdae8b0e50eca80f473e17ff6aa4b6b8b879f25ddb26703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 28
        echo "    <div class=\"row\">
        <h2>Bienvenido </h2>
    </div>

    <div class=\"container \">
        <div class=\"col s12 m6\">
            <div class=\"card blue-grey darken-1\">
                <div class=\"card-content white-text\">
                    <span class=\"card-title center \">Ingrese su numero de cuenta </span>
                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                <input id=\"cuenta\" type=\"number\"name =\"cuenta\" class=\"validate\">
                                <label for=\"noCu\">Numero de cuenta <i class=\"fa-solid fa-address-card\" style=\"color: #ffffff;\"></i></label>
                            </div>
                        </div>
                        <a class=\"btn waves-effect waves-light\" id=\"btnCargar\">Aceptar
                            <i class=\"fa-solid fa-check\" style=\"color: #ffffff;\"></i>
                        </a>
                </div>
            </div>
    </div>

    <h3 class=\"center\">Acciones</h3>
    <div class=\"row\">
        <div class=\"col s12 m6\">
            <div class=\"card blue-grey darken-1\">
                <div class=\"card-content white-text\">
                    <span class=\"card-title\">Depositos <i class=\"fa-regular fa-credit-card\" style=\"color: #ffffff;\"></i></span>
                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                <input id=\"cantidad\" type=\"text\" name=\"cantidad\" class=\"validate\">
                                <label for=\"email\">Cantidad</label>
                            </div>
                        </div>
                            <a class=\"btn waves-effect waves-light\" id=\"btnDepositar\">Aceptar
                            <i class=\"fa-solid fa-check\" style=\"color: #ffffff;\"></i>
                        </a>
                </div>
            </div>
        </div>
        <div class=\"col s12 m6\">
            <div class=\"card blue-grey darken-1\">
                <div class=\"card-content white-text\">
                    <span class=\"card-title\">Retiros <i class=\"fa-solid fa-money-bill-transfer\" style=\"color: #ffffff;\"></i></span>
                    <form>
                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                <input id=\"cantidadR\" type=\"number\" class=\"validate\">
                                <label for=\"cantidadR\">Cantidad</label>
                            </div>
                        </div>
                        <a class=\"btn waves-effect waves-light\" id=\"btnRetirar\">Aceptar
                            <i class=\"fa-solid fa-check\" style=\"color: #ffffff;\"></i>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"row\">
            <div class=\"card col s12\">
                <table id=\"tb_historial\" class=\"striped\" >
                    <thead>
                    <h3>Historial de movimientos </h3>
                    <h5 id=\"nomCliente\"></h5>
                    <h4 class=\"right\">Saldo </h4>
                    <tr>
                        <th>Numero de cuenta</th>
                        <th>Movimiento</th>
                        <th>Cantidad</th>
                    </tr>
                    </thead>

                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>";
        
        $__internal_525d77fd3680cb465cdae8b0e50eca80f473e17ff6aa4b6b8b879f25ddb26703->leave($__internal_525d77fd3680cb465cdae8b0e50eca80f473e17ff6aa4b6b8b879f25ddb26703_prof);

        
        $__internal_dfc385daa149f2422e1d9027286b673354217d0bd813c39bdbc3e9327f954494->leave($__internal_dfc385daa149f2422e1d9027286b673354217d0bd813c39bdbc3e9327f954494_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae9c54175fc4e6452e469fc7723ed3c39274198a7930ba66844cd8505d561c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9c54175fc4e6452e469fc7723ed3c39274198a7930ba66844cd8505d561c0e->enter($__internal_ae9c54175fc4e6452e469fc7723ed3c39274198a7930ba66844cd8505d561c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5664532056cdfc97b0d60a586c3517da59fe3647958ea5a8691da02342cfdf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5664532056cdfc97b0d60a586c3517da59fe3647958ea5a8691da02342cfdf88->enter($__internal_5664532056cdfc97b0d60a586c3517da59fe3647958ea5a8691da02342cfdf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script>
            var url_setMovimientos= \"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("insertar_movimientos");
        echo "\"
            var url_getMovimientos= \"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_movimientos");
        echo "\"
        </script>
        <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["asset_path"] ?? $this->getContext($context, "asset_path")) . "primerBundle.js")), "html", null, true);
        echo "\"></script>";
        
        $__internal_5664532056cdfc97b0d60a586c3517da59fe3647958ea5a8691da02342cfdf88->leave($__internal_5664532056cdfc97b0d60a586c3517da59fe3647958ea5a8691da02342cfdf88_prof);

        
        $__internal_ae9c54175fc4e6452e469fc7723ed3c39274198a7930ba66844cd8505d561c0e->leave($__internal_ae9c54175fc4e6452e469fc7723ed3c39274198a7930ba66844cd8505d561c0e_prof);

    }

    public function getTemplateName()
    {
        return "PruebaPrimerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 118,  162 => 116,  158 => 115,  153 => 113,  144 => 112,  53 => 28,  44 => 27,  34 => 1,  32 => 25,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{# <table>
    <thead>
        <th>
            Nombre
        </th>
        <th>
            Apellidos
        </th>
        <th>
            Correo
        </th>
    </thead>
    <tbody>
    {%  for i in data.data %}
        <tr>
            <td>{{ i.Nombre }}</td>
            <td>{{ i.Apellidos }}</td>
            <td>{{ i.Correo }}</td>
        </tr>
    {% endfor %}
    </tbody>

</table>  #}
{% set asset_path = 'resources/prueba/' %}

{% block contenido%}
    <div class=\"row\">
        <h2>Bienvenido </h2>
    </div>

    <div class=\"container \">
        <div class=\"col s12 m6\">
            <div class=\"card blue-grey darken-1\">
                <div class=\"card-content white-text\">
                    <span class=\"card-title center \">Ingrese su numero de cuenta </span>
                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                <input id=\"cuenta\" type=\"number\"name =\"cuenta\" class=\"validate\">
                                <label for=\"noCu\">Numero de cuenta <i class=\"fa-solid fa-address-card\" style=\"color: #ffffff;\"></i></label>
                            </div>
                        </div>
                        <a class=\"btn waves-effect waves-light\" id=\"btnCargar\">Aceptar
                            <i class=\"fa-solid fa-check\" style=\"color: #ffffff;\"></i>
                        </a>
                </div>
            </div>
    </div>

    <h3 class=\"center\">Acciones</h3>
    <div class=\"row\">
        <div class=\"col s12 m6\">
            <div class=\"card blue-grey darken-1\">
                <div class=\"card-content white-text\">
                    <span class=\"card-title\">Depositos <i class=\"fa-regular fa-credit-card\" style=\"color: #ffffff;\"></i></span>
                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                <input id=\"cantidad\" type=\"text\" name=\"cantidad\" class=\"validate\">
                                <label for=\"email\">Cantidad</label>
                            </div>
                        </div>
                            <a class=\"btn waves-effect waves-light\" id=\"btnDepositar\">Aceptar
                            <i class=\"fa-solid fa-check\" style=\"color: #ffffff;\"></i>
                        </a>
                </div>
            </div>
        </div>
        <div class=\"col s12 m6\">
            <div class=\"card blue-grey darken-1\">
                <div class=\"card-content white-text\">
                    <span class=\"card-title\">Retiros <i class=\"fa-solid fa-money-bill-transfer\" style=\"color: #ffffff;\"></i></span>
                    <form>
                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                <input id=\"cantidadR\" type=\"number\" class=\"validate\">
                                <label for=\"cantidadR\">Cantidad</label>
                            </div>
                        </div>
                        <a class=\"btn waves-effect waves-light\" id=\"btnRetirar\">Aceptar
                            <i class=\"fa-solid fa-check\" style=\"color: #ffffff;\"></i>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"row\">
            <div class=\"card col s12\">
                <table id=\"tb_historial\" class=\"striped\" >
                    <thead>
                    <h3>Historial de movimientos </h3>
                    <h5 id=\"nomCliente\"></h5>
                    <h4 class=\"right\">Saldo </h4>
                    <tr>
                        <th>Numero de cuenta</th>
                        <th>Movimiento</th>
                        <th>Cantidad</th>
                    </tr>
                    </thead>

                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

{% endblock %}
{% block javascripts%}
        {{ parent() }}
        <script>
            var url_setMovimientos= \"{{ path('insertar_movimientos') }}\"
            var url_getMovimientos= \"{{ path('get_movimientos') }}\"
        </script>
        <script type=\"text/javascript\" src=\"{{ asset(asset_path ~ 'primerBundle.js') }}\"></script>
{% endblock %}
", "PruebaPrimerBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\src\\Prueba\\PrimerBundle/Resources/views/Default/index.html.twig");
    }
}
