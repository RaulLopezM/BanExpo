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
        $__internal_1eeaccedb675998c1a5e9225ac739d02ac799434ecf96c51357f6833a0dcce90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eeaccedb675998c1a5e9225ac739d02ac799434ecf96c51357f6833a0dcce90->enter($__internal_1eeaccedb675998c1a5e9225ac739d02ac799434ecf96c51357f6833a0dcce90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaPrimerBundle:Default:index.html.twig"));

        $__internal_b2fa32aa51609de477fe02a933c2acf33699ffd9e60868a4215992696501fd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fa32aa51609de477fe02a933c2acf33699ffd9e60868a4215992696501fd7d->enter($__internal_b2fa32aa51609de477fe02a933c2acf33699ffd9e60868a4215992696501fd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaPrimerBundle:Default:index.html.twig"));

        // line 25
        $context["asset_path"] = "resources/prueba/";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eeaccedb675998c1a5e9225ac739d02ac799434ecf96c51357f6833a0dcce90->leave($__internal_1eeaccedb675998c1a5e9225ac739d02ac799434ecf96c51357f6833a0dcce90_prof);

        
        $__internal_b2fa32aa51609de477fe02a933c2acf33699ffd9e60868a4215992696501fd7d->leave($__internal_b2fa32aa51609de477fe02a933c2acf33699ffd9e60868a4215992696501fd7d_prof);

    }

    // line 27
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_3a4aefcc3ce954c59910e018f380504772829e37ee6412312192042998e6dd91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4aefcc3ce954c59910e018f380504772829e37ee6412312192042998e6dd91->enter($__internal_3a4aefcc3ce954c59910e018f380504772829e37ee6412312192042998e6dd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_2f96de747c40e8da1a2e78068f96241a1bc64034e8941e1efb8bcc1f267091f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f96de747c40e8da1a2e78068f96241a1bc64034e8941e1efb8bcc1f267091f0->enter($__internal_2f96de747c40e8da1a2e78068f96241a1bc64034e8941e1efb8bcc1f267091f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
                        <button class=\"btn waves-effect waves-light\" id=\"btnCargar\">Aceptar
                            <i class=\"fa-solid fa-check\" style=\"color: #ffffff;\"></i>
                        </button>
                        <button class=\"btn waves-effect waves-light right \" name=\"\">Limpiar
                            <i class=\"fa-regular fa-trash-can\" style=\"color: #ffffff;\"></i>
                        </button>
                </div>
            </div>
    </div>


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
                                <input id=\"email\" type=\"number\" class=\"validate\">
                                <label for=\"email\">Cantidad</label>
                            </div>
                        </div>
                        <a class=\"btn waves-effect waves-light\">Aceptar
                            <i class=\"fa-solid fa-check\" style=\"color: #ffffff;\"></i>
                        </a>
                        <button class=\"btn waves-effect waves-light\"  name=\"\">Limpiar
                            <i class=\"fa-regular fa-trash-can\" style=\"color: #ffffff;\"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"card col s12\">
                <table id=\"tb_historial\" class=\"striped\" >
                    <thead>
                    <h3>Historial de movimientos  </h3>
                    <h5>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "data", array(), "array"), 0, array(), "array"), "Cliente", array()), "html", null, true);
        echo "</h5>
                    <h4 class=\"right\">Saldo </h4>
                    <tr>
                        <th>Numero de cuenta</th>
                        <th>Cliente</th>
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
        
        $__internal_2f96de747c40e8da1a2e78068f96241a1bc64034e8941e1efb8bcc1f267091f0->leave($__internal_2f96de747c40e8da1a2e78068f96241a1bc64034e8941e1efb8bcc1f267091f0_prof);

        
        $__internal_3a4aefcc3ce954c59910e018f380504772829e37ee6412312192042998e6dd91->leave($__internal_3a4aefcc3ce954c59910e018f380504772829e37ee6412312192042998e6dd91_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4ed5375ca42f79c51b34e38e07972e2e74b9ddbec3c81220ed77f4abcb89746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ed5375ca42f79c51b34e38e07972e2e74b9ddbec3c81220ed77f4abcb89746->enter($__internal_d4ed5375ca42f79c51b34e38e07972e2e74b9ddbec3c81220ed77f4abcb89746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_516998250bf02c5e47f79677f4089f20cedb01f0092ebd43f0ce624910ecd5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516998250bf02c5e47f79677f4089f20cedb01f0092ebd43f0ce624910ecd5fa->enter($__internal_516998250bf02c5e47f79677f4089f20cedb01f0092ebd43f0ce624910ecd5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script>
            var url_getMovimientos= \"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("insertar_movimientos");
        echo "\"
           
        </script>
        <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["asset_path"] ?? $this->getContext($context, "asset_path")) . "primerBundle.js")), "html", null, true);
        echo "\"></script>";
        
        $__internal_516998250bf02c5e47f79677f4089f20cedb01f0092ebd43f0ce624910ecd5fa->leave($__internal_516998250bf02c5e47f79677f4089f20cedb01f0092ebd43f0ce624910ecd5fa_prof);

        
        $__internal_d4ed5375ca42f79c51b34e38e07972e2e74b9ddbec3c81220ed77f4abcb89746->leave($__internal_d4ed5375ca42f79c51b34e38e07972e2e74b9ddbec3c81220ed77f4abcb89746_prof);

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
        return array (  174 => 125,  168 => 122,  163 => 120,  154 => 119,  126 => 99,  53 => 28,  44 => 27,  34 => 1,  32 => 25,  11 => 1,);
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
                        <button class=\"btn waves-effect waves-light\" id=\"btnCargar\">Aceptar
                            <i class=\"fa-solid fa-check\" style=\"color: #ffffff;\"></i>
                        </button>
                        <button class=\"btn waves-effect waves-light right \" name=\"\">Limpiar
                            <i class=\"fa-regular fa-trash-can\" style=\"color: #ffffff;\"></i>
                        </button>
                </div>
            </div>
    </div>


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
                                <input id=\"email\" type=\"number\" class=\"validate\">
                                <label for=\"email\">Cantidad</label>
                            </div>
                        </div>
                        <a class=\"btn waves-effect waves-light\">Aceptar
                            <i class=\"fa-solid fa-check\" style=\"color: #ffffff;\"></i>
                        </a>
                        <button class=\"btn waves-effect waves-light\"  name=\"\">Limpiar
                            <i class=\"fa-regular fa-trash-can\" style=\"color: #ffffff;\"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"card col s12\">
                <table id=\"tb_historial\" class=\"striped\" >
                    <thead>
                    <h3>Historial de movimientos  </h3>
                    <h5>{{ data['data'][0].Cliente}}</h5>
                    <h4 class=\"right\">Saldo </h4>
                    <tr>
                        <th>Numero de cuenta</th>
                        <th>Cliente</th>
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
            var url_getMovimientos= \"{{ path('insertar_movimientos') }}\"
           
        </script>
        <script type=\"text/javascript\" src=\"{{ asset(asset_path ~ 'primerBundle.js') }}\"></script>
{% endblock %}
", "PruebaPrimerBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\src\\Prueba\\PrimerBundle/Resources/views/Default/index.html.twig");
    }
}
