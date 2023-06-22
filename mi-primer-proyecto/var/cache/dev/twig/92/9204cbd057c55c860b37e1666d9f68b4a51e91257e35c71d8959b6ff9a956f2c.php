<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_40f8115cb1043a641f7934187705d2ce507f29a5abaaa902ac53755f06311227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_6f37211cc91f78f476c13b266838337dd44a92389fa27f4603ab7d50d6011f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f37211cc91f78f476c13b266838337dd44a92389fa27f4603ab7d50d6011f1f->enter($__internal_6f37211cc91f78f476c13b266838337dd44a92389fa27f4603ab7d50d6011f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $__internal_44b785d68c03d6019cdd114536dd50327305d901a64edae790b8655a1cc677c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b785d68c03d6019cdd114536dd50327305d901a64edae790b8655a1cc677c6->enter($__internal_44b785d68c03d6019cdd114536dd50327305d901a64edae790b8655a1cc677c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f37211cc91f78f476c13b266838337dd44a92389fa27f4603ab7d50d6011f1f->leave($__internal_6f37211cc91f78f476c13b266838337dd44a92389fa27f4603ab7d50d6011f1f_prof);

        
        $__internal_44b785d68c03d6019cdd114536dd50327305d901a64edae790b8655a1cc677c6->leave($__internal_44b785d68c03d6019cdd114536dd50327305d901a64edae790b8655a1cc677c6_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bd284632109c2245571747a08640d793f2e73f402346cdd2a98b6e1666f4f7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd284632109c2245571747a08640d793f2e73f402346cdd2a98b6e1666f4f7f9->enter($__internal_bd284632109c2245571747a08640d793f2e73f402346cdd2a98b6e1666f4f7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_611ca4d1c3123799307f3a4b0071a182ce15284a4f50a5c149638e3510473aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611ca4d1c3123799307f3a4b0071a182ce15284a4f50a5c149638e3510473aff->enter($__internal_611ca4d1c3123799307f3a4b0071a182ce15284a4f50a5c149638e3510473aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_611ca4d1c3123799307f3a4b0071a182ce15284a4f50a5c149638e3510473aff->leave($__internal_611ca4d1c3123799307f3a4b0071a182ce15284a4f50a5c149638e3510473aff_prof);

        
        $__internal_bd284632109c2245571747a08640d793f2e73f402346cdd2a98b6e1666f4f7f9->leave($__internal_bd284632109c2245571747a08640d793f2e73f402346cdd2a98b6e1666f4f7f9_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2065935876ddd1f8b88334d9f31cc557435c9db5baaba249243549a536dfa5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2065935876ddd1f8b88334d9f31cc557435c9db5baaba249243549a536dfa5ac->enter($__internal_2065935876ddd1f8b88334d9f31cc557435c9db5baaba249243549a536dfa5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bfc73f91deb17d9d1fa6dee0906d236e3841675d3d5232c28b6fde27c599d09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc73f91deb17d9d1fa6dee0906d236e3841675d3d5232c28b6fde27c599d09f->enter($__internal_bfc73f91deb17d9d1fa6dee0906d236e3841675d3d5232c28b6fde27c599d09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array())) {
            // line 7
            $context["is_authenticated"] = ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array()) && $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "authenticated", array()));
            // line 8
            $context["color_code"] = ((($context["is_authenticated"] ?? $this->getContext($context, "is_authenticated"))) ? ("") : ("yellow"));
        } else {
            // line 10
            $context["color_code"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array())) ? ("red") : (""));
        }
        // line 13
        ob_start();
        // line 14
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "user", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        ob_start();
        // line 19
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array())) {
            // line 20
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array())) {
                // line 21
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Logged in as</b>
                    <span>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "user", array()), "html", null, true);
                echo "</span>
                </div>

                <div class=\"sf-toolbar-info-piece\">
                    <b>Authenticated</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 28
                echo ((($context["is_authenticated"] ?? $this->getContext($context, "is_authenticated"))) ? ("green") : ("red"));
                echo "\">";
                echo ((($context["is_authenticated"] ?? $this->getContext($context, "is_authenticated"))) ? ("Yes") : ("No"));
                echo "</span>
                </div>

                <div class=\"sf-toolbar-info-piece\">
                    <b>Token class</b>
                    <span>";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "tokenClass", array()));
                echo "</span>
                </div>";
            } else {
                // line 36
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Authenticated</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                </div>";
            }
            // line 42
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array())) {
                // line 43
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Firewall name</b>
                    <span>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                </div>";
            }
            // line 49
            if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()) && $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logoutUrl", array()))) {
                // line 50
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Actions</b>
                    <span><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logoutUrl", array()), "html", null, true);
                echo "\">Logout</a></span>
                </div>";
            }
        } else {
            // line 56
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>The security is disabled.</span>
            </div>";
        }
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["color_code"] ?? $this->getContext($context, "color_code"))));
        
        $__internal_bfc73f91deb17d9d1fa6dee0906d236e3841675d3d5232c28b6fde27c599d09f->leave($__internal_bfc73f91deb17d9d1fa6dee0906d236e3841675d3d5232c28b6fde27c599d09f_prof);

        
        $__internal_2065935876ddd1f8b88334d9f31cc557435c9db5baaba249243549a536dfa5ac->leave($__internal_2065935876ddd1f8b88334d9f31cc557435c9db5baaba249243549a536dfa5ac_prof);

    }

    // line 65
    public function block_menu($context, array $blocks = array())
    {
        $__internal_766850b93e1e1b1a782712794d3525b4e4ad03becf9f366a171ebfb69bfd1f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766850b93e1e1b1a782712794d3525b4e4ad03becf9f366a171ebfb69bfd1f2b->enter($__internal_766850b93e1e1b1a782712794d3525b4e4ad03becf9f366a171ebfb69bfd1f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac8817c0d935f1c32ed98b25fffd153f24a421eaf18b547022a0f7c9c87e8e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8817c0d935f1c32ed98b25fffd153f24a421eaf18b547022a0f7c9c87e8e7a->enter($__internal_ac8817c0d935f1c32ed98b25fffd153f24a421eaf18b547022a0f7c9c87e8e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 66
        echo "    <span class=\"label";
        echo ((( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array()) ||  !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 67
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>";
        
        $__internal_ac8817c0d935f1c32ed98b25fffd153f24a421eaf18b547022a0f7c9c87e8e7a->leave($__internal_ac8817c0d935f1c32ed98b25fffd153f24a421eaf18b547022a0f7c9c87e8e7a_prof);

        
        $__internal_766850b93e1e1b1a782712794d3525b4e4ad03becf9f366a171ebfb69bfd1f2b->leave($__internal_766850b93e1e1b1a782712794d3525b4e4ad03becf9f366a171ebfb69bfd1f2b_prof);

    }

    // line 72
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a63d7e9f0a2588a7ac55aad4020c9c33dba4c2c62f020c4db5c504fbfe8a7d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63d7e9f0a2588a7ac55aad4020c9c33dba4c2c62f020c4db5c504fbfe8a7d03->enter($__internal_a63d7e9f0a2588a7ac55aad4020c9c33dba4c2c62f020c4db5c504fbfe8a7d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de84d5bd4256c4f6c7f5aa789b25957a037dfd1fe0428c77689356cb9d3ec514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de84d5bd4256c4f6c7f5aa789b25957a037dfd1fe0428c77689356cb9d3ec514->enter($__internal_de84d5bd4256c4f6c7f5aa789b25957a037dfd1fe0428c77689356cb9d3ec514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 73
        echo "    <h2>Security Token</h2>";
        // line 75
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array())) {
            // line 76
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array())) {
                // line 77
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 79
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "user", array()) == "anon.")) ? ("Anonymous") : ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "user", array()))), "html", null, true);
                echo "</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 84
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "authenticated", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>";
                // line 100
                echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "roles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "roles", array()), 1))));
                // line 102
                if (( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "authenticated", array()) && twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "roles", array())))) {
                    // line 103
                    echo "                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>";
                }
                // line 105
                echo "                        </td>
                    </tr>";
                // line 108
                if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "supportsRoleHierarchy", array())) {
                    // line 109
                    echo "                    <tr>
                        <th>Inherited Roles</th>
                        <td>";
                    // line 111
                    echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "inheritedRoles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "inheritedRoles", array()), 1))));
                    echo "</td>
                    </tr>";
                }
                // line 115
                if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array())) {
                    // line 116
                    echo "                    <tr>
                        <th>Token</th>
                        <td>";
                    // line 118
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array())));
                    echo "</td>
                    </tr>";
                }
                // line 121
                echo "                </tbody>
            </table>";
            } elseif ($this->getAttribute(            // line 123
($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array())) {
                // line 124
                echo "            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>";
            }
            // line 128
            echo "

        <h2>Security Firewall</h2>";
            // line 132
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array())) {
                // line 133
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 139
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "security_enabled", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 143
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "stateless", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 147
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "allows_anonymous", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>";
                // line 152
                if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "security_enabled", array())) {
                    // line 153
                    echo "                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>";
                    // line 163
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "provider", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "provider", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>";
                    // line 167
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "context", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "context", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>";
                    // line 171
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "entry_point", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "entry_point", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>";
                    // line 175
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "user_checker", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "user_checker", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>";
                    // line 179
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "access_denied_handler", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "access_denied_handler", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>";
                    // line 183
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "access_denied_url", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "access_denied_url", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>";
                    // line 187
                    echo ((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "listeners", array()))) ? ("(none)") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "listeners", array()), 1))));
                    echo "</td>
                        </tr>
                    </tbody>
                </table>";
                }
            } elseif ($this->getAttribute(            // line 192
($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array())) {
                // line 193
                echo "            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>";
            }
        } else {
            // line 198
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>";
        }
        // line 203
        if ( !twig_test_empty((($this->getAttribute(($context["collector"] ?? null), "voters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "voters", array()), array())) : (array())))) {
            // line 204
            echo "        <h2>Security Voters <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "voters", array())), "html", null, true);
            echo ")</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 208
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "voterStrategy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "voterStrategy", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>";
            // line 222
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "voters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                // line 223
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 224
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 225
                echo twig_escape_filter($this->env, $context["voter"], "html", null, true);
                echo "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "            </tbody>
        </table>";
        }
        // line 232
        if ( !twig_test_empty((($this->getAttribute(($context["collector"] ?? null), "accessDecisionLog", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "accessDecisionLog", array()), array())) : (array())))) {
            // line 233
            echo "        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "accessDecisionLog", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                // line 252
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 253
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 255
                echo (($this->getAttribute($context["decision"], "result", array())) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                // line 258
                echo "
                        </td>
                        <td>";
                // line 261
                if ((twig_length_filter($this->env, $this->getAttribute($context["decision"], "attributes", array())) == 1)) {
                    // line 262
                    echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute($context["decision"], "attributes", array())), "html", null, true);
                } else {
                    // line 264
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["decision"], "attributes", array())));
                }
                // line 266
                echo "                        </td>
                        <td>";
                // line 267
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["decision"], "object", array())));
                echo "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "            </tbody>
        </table>";
        }
        
        $__internal_de84d5bd4256c4f6c7f5aa789b25957a037dfd1fe0428c77689356cb9d3ec514->leave($__internal_de84d5bd4256c4f6c7f5aa789b25957a037dfd1fe0428c77689356cb9d3ec514_prof);

        
        $__internal_a63d7e9f0a2588a7ac55aad4020c9c33dba4c2c62f020c4db5c504fbfe8a7d03->leave($__internal_a63d7e9f0a2588a7ac55aad4020c9c33dba4c2c62f020c4db5c504fbfe8a7d03_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 270,  527 => 267,  524 => 266,  521 => 264,  518 => 262,  516 => 261,  512 => 258,  510 => 255,  506 => 253,  503 => 252,  486 => 251,  467 => 233,  465 => 232,  461 => 228,  445 => 225,  441 => 224,  438 => 223,  421 => 222,  405 => 208,  397 => 204,  395 => 203,  390 => 198,  384 => 193,  382 => 192,  375 => 187,  368 => 183,  361 => 179,  354 => 175,  347 => 171,  340 => 167,  333 => 163,  321 => 153,  319 => 152,  313 => 147,  306 => 143,  299 => 139,  292 => 135,  288 => 133,  286 => 132,  282 => 128,  277 => 124,  275 => 123,  272 => 121,  267 => 118,  263 => 116,  261 => 115,  256 => 111,  252 => 109,  250 => 108,  247 => 105,  244 => 103,  242 => 102,  240 => 100,  222 => 84,  214 => 79,  210 => 77,  208 => 76,  206 => 75,  204 => 73,  195 => 72,  182 => 67,  177 => 66,  168 => 65,  158 => 62,  152 => 56,  146 => 52,  142 => 50,  140 => 49,  135 => 45,  131 => 43,  129 => 42,  123 => 36,  118 => 33,  108 => 28,  100 => 23,  96 => 21,  94 => 20,  92 => 19,  90 => 18,  86 => 15,  82 => 14,  80 => 13,  77 => 10,  74 => 8,  72 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block page_title 'Security' %}

{% block toolbar %}
    {% if collector.token %}
        {% set is_authenticated = collector.enabled and collector.authenticated  %}
        {% set color_code = is_authenticated ? '' : 'yellow' %}
    {% else %}
        {% set color_code = collector.enabled ? 'red' : '' %}
    {% endif %}

    {% set icon %}
        {{ include('@Security/Collector/icon.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.user|default('n/a') }}</span>
    {% endset %}

    {% set text %}
        {% if collector.enabled %}
            {% if collector.token %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Logged in as</b>
                    <span>{{ collector.user }}</span>
                </div>

                <div class=\"sf-toolbar-info-piece\">
                    <b>Authenticated</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-{{ is_authenticated ? 'green' : 'red' }}\">{{ is_authenticated ? 'Yes' : 'No' }}</span>
                </div>

                <div class=\"sf-toolbar-info-piece\">
                    <b>Token class</b>
                    <span>{{ collector.tokenClass|abbr_class }}</span>
                </div>
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Authenticated</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                </div>
            {% endif %}

            {% if collector.firewall %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Firewall name</b>
                    <span>{{ collector.firewall.name }}</span>
                </div>
            {% endif %}

            {% if collector.token and collector.logoutUrl %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Actions</b>
                    <span><a href=\"{{ collector.logoutUrl }}\">Logout</a></span>
                </div>
            {% endif %}
        {% else %}
            <div class=\"sf-toolbar-info-piece\">
                <span>The security is disabled.</span>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: color_code }) }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.enabled or not collector.token ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Security/Collector/icon.svg') }}</span>
        <strong>Security</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Security Token</h2>

    {% if collector.enabled %}
        {% if collector.token %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.user == 'anon.' ? 'Anonymous' : collector.user }}</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            {{ collector.roles is empty ? 'none' : profiler_dump(collector.roles, maxDepth=1) }}

                            {% if not collector.authenticated and collector.roles is empty %}
                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            {% endif %}
                        </td>
                    </tr>

                    {% if collector.supportsRoleHierarchy %}
                    <tr>
                        <th>Inherited Roles</th>
                        <td>{{ collector.inheritedRoles is empty ? 'none' : profiler_dump(collector.inheritedRoles, maxDepth=1) }}</td>
                    </tr>
                    {% endif %}

                    {% if collector.token %}
                    <tr>
                        <th>Token</th>
                        <td>{{ profiler_dump(collector.token) }}</td>
                    </tr>
                    {% endif %}
                </tbody>
            </table>
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        {% endif %}


        <h2>Security Firewall</h2>

        {% if collector.firewall %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.firewall.name }}</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.security_enabled ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.stateless ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.allows_anonymous ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            {% if collector.firewall.security_enabled %}
                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>{{ collector.firewall.provider ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>{{ collector.firewall.context ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>{{ collector.firewall.entry_point ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>{{ collector.firewall.user_checker ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>{{ collector.firewall.access_denied_handler ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>{{ collector.firewall.access_denied_url ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>{{ collector.firewall.listeners is empty ? '(none)' : profiler_dump(collector.firewall.listeners, maxDepth=1) }}</td>
                        </tr>
                    </tbody>
                </table>
            {% endif %}
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        {% endif %}
    {% else %}
        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    {% endif %}

    {% if collector.voters|default([]) is not empty %}
        <h2>Security Voters <small>({{ collector.voters|length }})</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.voterStrategy|default('unknown') }}</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                {% for voter in collector.voters %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">{{ voter }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if collector.accessDecisionLog|default([]) is not empty %}
        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                {% for decision in collector.accessDecisionLog %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">
                            {{ decision.result
                                ? '<span class=\"label status-success same-width\">GRANTED</span>'
                                : '<span class=\"label status-error same-width\">DENIED</span>'
                            }}
                        </td>
                        <td>
                            {% if decision.attributes|length == 1 %}
                                {{ decision.attributes|first }}
                            {% else %}
                                {{ profiler_dump(decision.attributes) }}
                            {% endif %}
                        </td>
                        <td>{{ profiler_dump(decision.object) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@Security/Collector/security.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Resources\\views\\Collector\\security.html.twig");
    }
}
