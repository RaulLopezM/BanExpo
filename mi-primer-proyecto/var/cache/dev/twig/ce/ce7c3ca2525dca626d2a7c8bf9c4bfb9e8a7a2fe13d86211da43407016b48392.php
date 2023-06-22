<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_97e719644a2c2f26839e1f5bee277c9fa198dbad1cfbb6d44ba243e9db8ccf31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef7d4d052e3408039917c5e385dfdf734f1e9ed39bf52de5709a646f0ab0ec1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7d4d052e3408039917c5e385dfdf734f1e9ed39bf52de5709a646f0ab0ec1f->enter($__internal_ef7d4d052e3408039917c5e385dfdf734f1e9ed39bf52de5709a646f0ab0ec1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $__internal_5149fa98ffae925c28af87d6a81fa13127bba1b30a7b72eeb8804f8af1fb7d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5149fa98ffae925c28af87d6a81fa13127bba1b30a7b72eeb8804f8af1fb7d70->enter($__internal_5149fa98ffae925c28af87d6a81fa13127bba1b30a7b72eeb8804f8af1fb7d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef7d4d052e3408039917c5e385dfdf734f1e9ed39bf52de5709a646f0ab0ec1f->leave($__internal_ef7d4d052e3408039917c5e385dfdf734f1e9ed39bf52de5709a646f0ab0ec1f_prof);

        
        $__internal_5149fa98ffae925c28af87d6a81fa13127bba1b30a7b72eeb8804f8af1fb7d70->leave($__internal_5149fa98ffae925c28af87d6a81fa13127bba1b30a7b72eeb8804f8af1fb7d70_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_195d79fd724c39c6eb4cc63e0308c6f10cf7fe0e3c92bd499abf27ac2894edb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195d79fd724c39c6eb4cc63e0308c6f10cf7fe0e3c92bd499abf27ac2894edb4->enter($__internal_195d79fd724c39c6eb4cc63e0308c6f10cf7fe0e3c92bd499abf27ac2894edb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_664ce0cbcbd170a6b745b88f9f60d2d337647995b55c8741453185448108b1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664ce0cbcbd170a6b745b88f9f60d2d337647995b55c8741453185448108b1ab->enter($__internal_664ce0cbcbd170a6b745b88f9f60d2d337647995b55c8741453185448108b1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 83
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">";
        // line 91
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search", array("limit" => 10));
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", twig_array_merge(array("token" => "latest"), $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "all", array()))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\"";
        // line 97
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">";
        // line 98
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_bar", $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "all", array())));
        echo "
                    </div>
                </div>";
        // line 105
        if (array_key_exists("templates", $context)) {
            // line 106
            echo "                    <ul id=\"menu-profiler\">";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
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
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 108
                ob_start();
                // line 109
                if (                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 109)->hasBlock("menu", $context)) {
                    // line 110
                    $__internal_8c8c41821b6f30a560a3e0abe9aa14b61dd82f1e7834b4efe39e9c054dbeb798 = array("collector" => $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_markup_version" => ($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")));
                    if (!is_array($__internal_8c8c41821b6f30a560a3e0abe9aa14b61dd82f1e7834b4efe39e9c054dbeb798)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_8c8c41821b6f30a560a3e0abe9aa14b61dd82f1e7834b4efe39e9c054dbeb798);
                    // line 111
                    $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 111)->displayBlock("menu", $context);
                    $context = $context['_parent'];
                }
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 115
                if ( !twig_test_empty(($context["menu"] ?? $this->getContext($context, "menu")))) {
                    // line 116
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo ((($context["name"] == ($context["panel"] ?? $this->getContext($context, "panel")))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo ($context["menu"] ?? $this->getContext($context, "menu"));
                    echo "</a>
                                </li>";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                    </ul>";
        }
        // line 123
        echo "            </div>

            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">";
        // line 127
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        // line 128
        $this->displayBlock('panel', $context, $blocks);
        // line 129
        echo "                </div>
            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }())
    </script>";
        
        $__internal_664ce0cbcbd170a6b745b88f9f60d2d337647995b55c8741453185448108b1ab->leave($__internal_664ce0cbcbd170a6b745b88f9f60d2d337647995b55c8741453185448108b1ab_prof);

        
        $__internal_195d79fd724c39c6eb4cc63e0308c6f10cf7fe0e3c92bd499abf27ac2894edb4->leave($__internal_195d79fd724c39c6eb4cc63e0308c6f10cf7fe0e3c92bd499abf27ac2894edb4_prof);

    }

    // line 7
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3e118e7ed1288337c40ca7b232ac5ae55935029d839929c442c822f1033061a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e118e7ed1288337c40ca7b232ac5ae55935029d839929c442c822f1033061a6->enter($__internal_3e118e7ed1288337c40ca7b232ac5ae55935029d839929c442c822f1033061a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2574856253c0cabd785d6fe3470dd1519d146dcf30d8eb0f56310d4434045c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2574856253c0cabd785d6fe3470dd1519d146dcf30d8eb0f56310d4434045c4d->enter($__internal_2574856253c0cabd785d6fe3470dd1519d146dcf30d8eb0f56310d4434045c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        if (array_key_exists("profile", $context)) {
            // line 9
            $context["status_code"] = ((twig_in_filter("request", twig_get_array_keys_filter($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "collectors", array())))) ? ((($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array()), 0)) : (0))) : (0));
            // line 10
            $context["css_class"] = (((($context["status_code"] ?? $this->getContext($context, "status_code")) > 399)) ? ("status-error") : ((((($context["status_code"] ?? $this->getContext($context, "status_code")) > 299)) ? ("status-warning") : ("status-success"))));
            // line 11
            echo "
                <div class=\"status";
            // line 12
            echo twig_escape_filter($this->env, ($context["css_class"] ?? $this->getContext($context, "css_class")), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">";
            // line 15
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 16
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "</a>";
            } else {
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "url", array()), "html", null, true);
            }
            // line 20
            echo "                        </h2>";
            // line 22
            $context["request_collector"] = (($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "collectors", array(), "any", false, true), "request", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "collectors", array(), "any", false, true), "request", array()), false)) : (false));
            // line 23
            if ((array_key_exists("request_collector", $context) && $this->getAttribute(($context["request_collector"] ?? $this->getContext($context, "request_collector")), "redirect", array()))) {
                // line 24
                $context["redirect"] = $this->getAttribute(($context["request_collector"] ?? $this->getContext($context, "request_collector")), "redirect", array());
                // line 25
                $context["controller"] = $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "controller", array());
                // line 26
                $context["redirect_route"] = ("@" . $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "route", array()));
                // line 27
                echo "                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "status_code", array()), "html", null, true);
                echo "</span>
                                    Redirect from
                                </dt>
                                <dd>";
                // line 33
                echo twig_escape_filter($this->env, ((("GET" != $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "method", array()))) ? ($this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "method", array())) : ("")), "html", null, true);
                // line 34
                if ($this->getAttribute($this->getAttribute(($context["redirect"] ?? null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
                    // line 35
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "line", array()));
                    // line 36
                    if (($context["link"] ?? $this->getContext($context, "link"))) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), "html", null, true);
                        echo "\">";
                    }
                    // line 37
                    echo twig_escape_filter($this->env, ($context["redirect_route"] ?? $this->getContext($context, "redirect_route")), "html", null, true);
                    // line 38
                    if (($context["link"] ?? $this->getContext($context, "link"))) {
                        echo "</a>";
                    }
                } else {
                    // line 40
                    echo twig_escape_filter($this->env, ($context["redirect_route"] ?? $this->getContext($context, "redirect_route")), "html", null, true);
                }
                // line 42
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "token", array()), "panel" => $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "get", array(0 => "panel", 1 => "request"), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 47
            if (((($context["request_collector"] ?? $this->getContext($context, "request_collector")) && (($this->getAttribute(($context["request_collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["request_collector"] ?? null), "forward", array()), false)) : (false))) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["request_collector"] ?? null), "forward", array(), "any", false, true), "controller", array(), "any", false, true), "class", array(), "any", true, true))) {
                // line 48
                $context["forward"] = $this->getAttribute(($context["request_collector"] ?? $this->getContext($context, "request_collector")), "forward", array());
                // line 49
                $context["controller"] = $this->getAttribute(($context["forward"] ?? $this->getContext($context, "forward")), "controller", array());
                // line 50
                echo "<dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>";
                // line 53
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "line", array()));
                // line 54
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "class", array()))), "html", null, true);
                // line 56
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "method", array())) ? ((" :: " . $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "method", array()))) : ("")), "html", null, true);
                // line 57
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    echo "</a>";
                }
                // line 58
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute(($context["forward"] ?? $this->getContext($context, "forward")), "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["forward"] ?? $this->getContext($context, "forward")), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 62
            echo "
                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 65
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "method", array())), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 68
            echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "ip", array()), "html", null, true);
            echo "</dd>

                            <dt>Profiled on</dt>
                            <dd>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "time", array()), "r"), "html", null, true);
            echo "</dd>

                            <dt>Token</dt>
                            <dd>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "token", array()), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>";
        }
        
        $__internal_2574856253c0cabd785d6fe3470dd1519d146dcf30d8eb0f56310d4434045c4d->leave($__internal_2574856253c0cabd785d6fe3470dd1519d146dcf30d8eb0f56310d4434045c4d_prof);

        
        $__internal_3e118e7ed1288337c40ca7b232ac5ae55935029d839929c442c822f1033061a6->leave($__internal_3e118e7ed1288337c40ca7b232ac5ae55935029d839929c442c822f1033061a6_prof);

    }

    // line 128
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc9658369c33bc7f0211067e30fe54386cf2dee9cfc738ff67ee94f3564ddb6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9658369c33bc7f0211067e30fe54386cf2dee9cfc738ff67ee94f3564ddb6a->enter($__internal_cc9658369c33bc7f0211067e30fe54386cf2dee9cfc738ff67ee94f3564ddb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a407cc5ca9e5ffe98102cffd8bb686315abaca9370122b8e193d8619b7a0093b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a407cc5ca9e5ffe98102cffd8bb686315abaca9370122b8e193d8619b7a0093b->enter($__internal_a407cc5ca9e5ffe98102cffd8bb686315abaca9370122b8e193d8619b7a0093b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a407cc5ca9e5ffe98102cffd8bb686315abaca9370122b8e193d8619b7a0093b->leave($__internal_a407cc5ca9e5ffe98102cffd8bb686315abaca9370122b8e193d8619b7a0093b_prof);

        
        $__internal_cc9658369c33bc7f0211067e30fe54386cf2dee9cfc738ff67ee94f3564ddb6a->leave($__internal_cc9658369c33bc7f0211067e30fe54386cf2dee9cfc738ff67ee94f3564ddb6a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 128,  350 => 77,  344 => 74,  338 => 71,  332 => 68,  326 => 65,  321 => 62,  312 => 58,  308 => 57,  306 => 56,  304 => 55,  296 => 54,  294 => 53,  290 => 50,  288 => 49,  286 => 48,  284 => 47,  275 => 42,  272 => 40,  267 => 38,  265 => 37,  257 => 36,  255 => 35,  253 => 34,  251 => 33,  245 => 29,  241 => 27,  239 => 26,  237 => 25,  235 => 24,  233 => 23,  231 => 22,  229 => 20,  226 => 18,  219 => 16,  217 => 15,  212 => 12,  209 => 11,  207 => 10,  205 => 9,  203 => 8,  194 => 7,  173 => 129,  171 => 128,  169 => 127,  164 => 123,  161 => 121,  142 => 117,  136 => 116,  134 => 115,  129 => 111,  122 => 110,  120 => 109,  118 => 108,  101 => 107,  99 => 106,  97 => 105,  92 => 101,  88 => 98,  83 => 97,  78 => 95,  74 => 94,  68 => 91,  58 => 83,  56 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}

    <div id=\"summary\">
        {% block summary %}
            {% if profile is defined %}
                {% set status_code = ('request' in profile.collectors|keys) ? profile.getcollector('request').statuscode|default(0) : 0 %}
                {% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}

                <div class=\"status {{ css_class }}\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            {% if profile.method|upper in ['GET', 'HEAD'] %}
                                <a href=\"{{ profile.url }}\">{{ profile.url }}</a>
                            {% else %}
                                {{ profile.url }}
                            {% endif %}
                        </h2>

                        {% set request_collector = profile.collectors.request|default(false) %}
                        {% if request_collector is defined and request_collector.redirect -%}
                            {%- set redirect = request_collector.redirect -%}
                            {%- set controller = redirect.controller -%}
                            {%- set redirect_route = '@' ~ redirect.route %}
                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">{{ redirect.status_code }}</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    {{ 'GET' != redirect.method ? redirect.method }}
                                    {% if redirect.controller.class is defined -%}
                                        {%- set link = controller.file|file_link(controller.line) -%}
                                        {% if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                            {{ redirect_route }}
                                        {%- if link %}</a>{% endif -%}
                                    {%- else -%}
                                            {{ redirect_route }}
                                    {%- endif %}
                                    (<a href=\"{{ path('_profiler', { token: redirect.token, panel: request.query.get('panel', 'request') }) }}\">{{ redirect.token }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        {% if request_collector and request_collector.forward|default(false) and request_collector.forward.controller.class is defined -%}
                            {%- set forward = request_collector.forward -%}
                            {%- set controller = forward.controller -%}
                            <dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    {% set link = controller.file|file_link(controller.line) -%}
                                    {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                        {{- controller.class|abbr_class|striptags -}}
                                        {{- controller.method ? ' :: ' ~ controller.method }}
                                    {%- if link %}</a>{% endif %}
                                    (<a href=\"{{ path('_profiler', { token: forward.token }) }}\">{{ forward.token }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>{{ profile.method|upper }}</dd>

                            <dt>HTTP Status</dt>
                            <dd>{{ status_code }}</dd>

                            <dt>IP</dt>
                            <dd>{{ profile.ip }}</dd>

                            <dt>Profiled on</dt>
                            <dd>{{ profile.time|date('r') }}</dd>

                            <dt>Token</dt>
                            <dd>{{ profile.token }}</dd>
                        </dl>
                    </div>
                </div>
            {% endif %}
        {% endblock %}
    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">{{ include('@WebProfiler/Icon/menu.svg') }}</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler_search', { limit: 10 }) }}\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler', { token: 'latest' }|merge(request.query.all)) }}\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" {% if tokens is defined or about is defined %}data-toggle-initial=\"display\"{% endif %}>
                            {{ include('@WebProfiler/Icon/search.svg') }} <span class=\"hidden-small\">Search</span>
                        </a>

                        {{ render(path('_profiler_search_bar', request.query.all)) }}
                    </div>
                </div>

                {% if templates is defined %}
                    <ul id=\"menu-profiler\">
                        {% for name, template in templates %}
                            {% set menu -%}
                                {%- if block('menu', template) is defined -%}
                                    {% with { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version } %}
                                        {{- block('menu', template) -}}
                                    {% endwith %}
                                {%- endif -%}
                            {%- endset %}
                            {% if menu is not empty %}
                                <li class=\"{{ name }} {{ name == panel ? 'selected' : '' }}\">
                                    <a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{{ menu|raw }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>

            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    {{ include('@WebProfiler/Profiler/base_js.html.twig') }}
                    {% block panel '' %}
                </div>
            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }())
    </script>
{% endblock %}
", "@WebProfiler/Profiler/layout.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\layout.html.twig");
    }
}
