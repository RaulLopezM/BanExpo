<?php

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_a52eb25bd636366321339bde64721a7b710e6936e8cfed84a9391930eaf29e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
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
        $__internal_f8b5eb647eddcb36e426924396181638052b122add2c39074eec4c9cc51f6f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b5eb647eddcb36e426924396181638052b122add2c39074eec4c9cc51f6f26->enter($__internal_f8b5eb647eddcb36e426924396181638052b122add2c39074eec4c9cc51f6f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $__internal_71ac5d949131281f237e76317084c86eaf9db41eaa24f2c77f4a86d99cb5af87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ac5d949131281f237e76317084c86eaf9db41eaa24f2c77f4a86d99cb5af87->enter($__internal_71ac5d949131281f237e76317084c86eaf9db41eaa24f2c77f4a86d99cb5af87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b5eb647eddcb36e426924396181638052b122add2c39074eec4c9cc51f6f26->leave($__internal_f8b5eb647eddcb36e426924396181638052b122add2c39074eec4c9cc51f6f26_prof);

        
        $__internal_71ac5d949131281f237e76317084c86eaf9db41eaa24f2c77f4a86d99cb5af87->leave($__internal_71ac5d949131281f237e76317084c86eaf9db41eaa24f2c77f4a86d99cb5af87_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b83af882f49e61f3f6939d6f05f092b40419e651680e086161cc65c2cbdbcccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83af882f49e61f3f6939d6f05f092b40419e651680e086161cc65c2cbdbcccb->enter($__internal_b83af882f49e61f3f6939d6f05f092b40419e651680e086161cc65c2cbdbcccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4532fb2428214f17d59cc6a3c26f961ceccb796db2b8b6138aba59c7139b9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4532fb2428214f17d59cc6a3c26f961ceccb796db2b8b6138aba59c7139b9c7->enter($__internal_e4532fb2428214f17d59cc6a3c26f961ceccb796db2b8b6138aba59c7139b9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        if (("unknown" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 5
            $context["block_status"] = "";
            // line 6
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
        } elseif (("eol" == $this->getAttribute(        // line 7
($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 8
            $context["block_status"] = "red";
            // line 9
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
        } elseif (("eom" == $this->getAttribute(        // line 10
($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 11
            $context["block_status"] = "yellow";
            // line 12
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
        } elseif (("dev" == $this->getAttribute(        // line 13
($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 14
            $context["block_status"] = "yellow";
            // line 15
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
        } else {
            // line 17
            $context["block_status"] = "";
            // line 18
            $context["symfony_version_status"] = "";
        }
        // line 21
        ob_start();
        // line 22
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array())) {
            // line 23
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-value\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>";
        } elseif ($this->getAttribute(        // line 25
($context["collector"] ?? null), "symfonyState", array(), "any", true, true)) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">";
            // line 27
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
            </span>
            <span class=\"sf-toolbar-value\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</span>";
        }
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">";
        // line 35
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array())) {
            // line 36
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</b>
                    <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 41
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>";
        // line 45
        if (($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))) {
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "</a>";
        } else {
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()), "html", null, true);
        }
        // line 50
        echo "                </span>
            </div>";
        // line 53
        if ( !("n/a" === $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", array()))) {
            // line 54
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 60
        if ( !("n/a" === $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", array()))) {
            // line 61
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 67
        if ( !("n/a" === $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array()))) {
            // line 68
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 70
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array())) ? ("green") : ("red"));
            echo "\">";
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>";
        }
        // line 73
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 86
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 87
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">";
        // line 97
        if ($this->getAttribute(($context["collector"] ?? null), "symfonyversion", array(), "any", true, true)) {
            // line 98
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>";
            // line 101
            if (("Silex" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array()))) {
                // line 102
                echo "                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>";
            } else {
                // line 106
                echo "                            <a href=\"https://symfony.com/doc/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
                echo "/index.html\" rel=\"help\">
                                Read Symfony";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
                echo " Docs
                            </a>";
            }
            // line 110
            echo "                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>";
        }
        // line 121
        echo "        </div>";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 124
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true, "name" => "config", "status" => ($context["block_status"] ?? $this->getContext($context, "block_status")), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . ($context["symfony_version_status"] ?? $this->getContext($context, "symfony_version_status"))) . "\"")));
        
        $__internal_e4532fb2428214f17d59cc6a3c26f961ceccb796db2b8b6138aba59c7139b9c7->leave($__internal_e4532fb2428214f17d59cc6a3c26f961ceccb796db2b8b6138aba59c7139b9c7_prof);

        
        $__internal_b83af882f49e61f3f6939d6f05f092b40419e651680e086161cc65c2cbdbcccb->leave($__internal_b83af882f49e61f3f6939d6f05f092b40419e651680e086161cc65c2cbdbcccb_prof);

    }

    // line 127
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5eaf94e52e75ec1a3359ccb0c722c70c5b19def91be74a5533fa5d3b56e9098c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eaf94e52e75ec1a3359ccb0c722c70c5b19def91be74a5533fa5d3b56e9098c->enter($__internal_5eaf94e52e75ec1a3359ccb0c722c70c5b19def91be74a5533fa5d3b56e9098c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d457e9f441eaab863c4e71c6c231849b7d2a55676d5e2161b5192b410453a44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d457e9f441eaab863c4e71c6c231849b7d2a55676d5e2161b5192b410453a44c->enter($__internal_d457e9f441eaab863c4e71c6c231849b7d2a55676d5e2161b5192b410453a44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 128
        echo "    <span class=\"label label-status-";
        echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()) == "eol")) ? ("red") : (((twig_in_filter($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()), array(0 => "eom", 1 => "dev"))) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 129
        echo twig_include($this->env, $context, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>";
        
        $__internal_d457e9f441eaab863c4e71c6c231849b7d2a55676d5e2161b5192b410453a44c->leave($__internal_d457e9f441eaab863c4e71c6c231849b7d2a55676d5e2161b5192b410453a44c_prof);

        
        $__internal_5eaf94e52e75ec1a3359ccb0c722c70c5b19def91be74a5533fa5d3b56e9098c->leave($__internal_5eaf94e52e75ec1a3359ccb0c722c70c5b19def91be74a5533fa5d3b56e9098c_prof);

    }

    // line 134
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b4c7e7f983d4275e47c491bd86a79cfe09d4435c1a80dba2cd0107e5e493170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4c7e7f983d4275e47c491bd86a79cfe09d4435c1a80dba2cd0107e5e493170->enter($__internal_7b4c7e7f983d4275e47c491bd86a79cfe09d4435c1a80dba2cd0107e5e493170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_87d47831bf26fcd3d01674246c9174c98dd7ccbabbae311b8b52d39f0a79a650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d47831bf26fcd3d01674246c9174c98dd7ccbabbae311b8b52d39f0a79a650->enter($__internal_87d47831bf26fcd3d01674246c9174c98dd7ccbabbae311b8b52d39f0a79a650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 135
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array())) {
            // line 137
            echo "        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</a>
        </p>";
        } else {
            // line 155
            echo "        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Symfony version</span>
            </div>";
            // line 163
            if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", array()))) {
                // line 164
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Application name</span>
                </div>";
            }
            // line 170
            if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", array()))) {
                // line 171
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Environment</span>
                </div>";
            }
            // line 177
            if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array()))) {
                // line 178
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 179
                echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
                echo "</span>
                    <span class=\"label\">Debug</span>
                </div>";
            }
            // line 183
            echo "        </div>";
        }
        // line 185
        echo "
    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 195
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">PHP acceleration</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 200
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasxdebug", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <div class=\"metrics metrics-horizontal\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 207
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "haszendopcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 212
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasapc", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">APC</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 217
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasxcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">XCache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 222
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "haseaccelerator", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">EAccelerator</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>";
        // line 231
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array())) {
            // line 232
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array())), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 242
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 243
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 244
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array()), $context["name"], array(), "array"), "html", null, true);
                echo "</td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "            </tbody>
        </table>";
        }
        
        $__internal_87d47831bf26fcd3d01674246c9174c98dd7ccbabbae311b8b52d39f0a79a650->leave($__internal_87d47831bf26fcd3d01674246c9174c98dd7ccbabbae311b8b52d39f0a79a650_prof);

        
        $__internal_7b4c7e7f983d4275e47c491bd86a79cfe09d4435c1a80dba2cd0107e5e493170->leave($__internal_7b4c7e7f983d4275e47c491bd86a79cfe09d4435c1a80dba2cd0107e5e493170_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 247,  475 => 244,  471 => 243,  468 => 242,  464 => 241,  452 => 232,  450 => 231,  446 => 228,  437 => 222,  429 => 217,  421 => 212,  413 => 207,  403 => 200,  395 => 195,  387 => 190,  380 => 185,  377 => 183,  371 => 179,  368 => 178,  366 => 177,  360 => 172,  357 => 171,  355 => 170,  349 => 165,  346 => 164,  344 => 163,  339 => 159,  333 => 155,  328 => 152,  319 => 146,  311 => 141,  305 => 137,  303 => 135,  294 => 134,  281 => 129,  276 => 128,  267 => 127,  257 => 124,  254 => 121,  242 => 110,  237 => 107,  232 => 106,  227 => 102,  225 => 101,  221 => 98,  219 => 97,  212 => 92,  204 => 87,  200 => 86,  191 => 80,  187 => 79,  180 => 73,  173 => 70,  169 => 68,  167 => 67,  162 => 63,  158 => 61,  156 => 60,  151 => 56,  147 => 54,  145 => 53,  142 => 50,  139 => 48,  132 => 46,  130 => 45,  125 => 41,  120 => 38,  116 => 37,  113 => 36,  111 => 35,  109 => 34,  107 => 33,  102 => 29,  97 => 27,  95 => 26,  93 => 25,  90 => 24,  85 => 23,  83 => 22,  81 => 21,  78 => 18,  76 => 17,  73 => 15,  71 => 14,  69 => 13,  67 => 12,  65 => 11,  63 => 10,  61 => 9,  59 => 8,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    {% if 'unknown' == collector.symfonyState %}
        {% set block_status = '' %}
        {% set symfony_version_status = 'Unable to retrieve information about the Symfony version.' %}
    {% elseif 'eol' == collector.symfonyState %}
        {% set block_status = 'red' %}
        {% set symfony_version_status = 'This Symfony version will no longer receive security fixes.' %}
    {% elseif 'eom' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version will only receive security fixes.' %}
    {% elseif 'dev' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version is still in the development phase.' %}
    {% else %}
        {% set block_status = '' %}
        {% set symfony_version_status = '' %}
    {% endif %}

    {% set icon %}
        {% if collector.applicationname %}
            <span class=\"sf-toolbar-label\">{{ collector.applicationname }}</span>
            <span class=\"sf-toolbar-value\">{{ collector.applicationversion }}</span>
        {% elseif collector.symfonyState is defined %}
            <span class=\"sf-toolbar-label\">
                {{ include('@WebProfiler/Icon/symfony.svg') }}
            </span>
            <span class=\"sf-toolbar-value\">{{ collector.symfonyversion }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            {% if collector.applicationname %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ collector.applicationname }}</b>
                    <span>{{ collector.applicationversion }}</span>
                </div>
            {% endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    {% if profiler_url %}
                        <a href=\"{{ profiler_url }}\">{{ collector.token }}</a>
                    {% else %}
                        {{ collector.token }}
                    {% endif %}
                </span>
            </div>

            {% if 'n/a' is not same as(collector.appname) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>{{ collector.appname }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.env) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>{{ collector.env }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.debug) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.debug ? 'green' : 'red' }}\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                </div>
            {% endif %}
        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>
                    {{ collector.phpversion }}
                    &nbsp; <a href=\"{{ path('_profiler_phpinfo') }}\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasaccelerator ? 'green' : 'red' }}\">accel</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>{{ collector.sapiName }}</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            {% if collector.symfonyversion is defined %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        {% if 'Silex' == collector.applicationname %}
                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        {% else %}
                            <a href=\"https://symfony.com/doc/{{ collector.symfonyversion }}/index.html\" rel=\"help\">
                                Read Symfony {{ collector.symfonyversion }} Docs
                            </a>
                        {% endif %}
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right', block_attrs: 'title=\"' ~ symfony_version_status ~ '\"' }) }}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.symfonyState == 'eol' ? 'red' : collector.symfonyState in ['eom', 'dev'] ? 'yellow' : '' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/config.svg') }}</span>
        <strong>Configuration</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.applicationname %}
        {# this application is not the Symfony framework #}
        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationname }}</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationversion }}</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony {{ collector.symfonyversion }}</a>
        </p>
    {% else %}
        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.symfonyversion }}</span>
                <span class=\"label\">Symfony version</span>
            </div>

            {% if 'n/a' != collector.appname %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.appname }}</span>
                    <span class=\"label\">Application name</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.env %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.env }}</span>
                    <span class=\"label\">Environment</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.debug %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                    <span class=\"label\">Debug</span>
                </div>
            {% endif %}
        </div>
    {% endif %}

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpversion }}</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">PHP acceleration</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasxdebug ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <div class=\"metrics metrics-horizontal\">
        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.haszendopcache ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasapc ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">APC</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasxcache ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">XCache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.haseaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">EAccelerator</span>
        </div>
    </div>

    <p>
        <a href=\"{{ path('_profiler_phpinfo') }}\">View full PHP configuration</a>
    </p>

    {% if collector.bundles %}
        <h2>Enabled Bundles <small>({{ collector.bundles|length }})</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                {% for name in collector.bundles|keys|sort %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">{{ name }}</th>
                    <td class=\"font-normal\">{{ collector.bundles[name] }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/config.html.twig", "C:\\xampp\\htdocs\\Prueba\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\config.html.twig");
    }
}
