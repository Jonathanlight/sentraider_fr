<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Translation/SymfonyProfiler/translation.html.twig */
class __TwigTemplate_c78d51687403be84843d9ef5591185e9365a593ef7e6dafb16d9b0f2b0e43c6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'panel' => [$this, 'block_panel'],
            'defined_messages' => [$this, 'block_defined_messages'],
            'fallback_messages' => [$this, 'block_fallback_messages'],
            'missing_messages' => [$this, 'block_missing_messages'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Collector/translation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Translation/SymfonyProfiler/translation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Translation/SymfonyProfiler/translation.html.twig"));

        // line 7
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Collector/translation.html.twig", "@Translation/SymfonyProfiler/translation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 10
        echo "    <h2>PHP Translation</h2>

    <div>
        <a class=\"btn\" href=\"javascript:void(0);\" onclick='syncAll()'>Synchronize all translations</a><br />
        <div id=\"top-result-area\"></div>
    </div>

    ";
        // line 17
        $this->displayParentBlock("panel", $context, $blocks);
        echo "

    <span class=\"hidden\">
        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/translation/css/images/loader.svg"), "html", null, true);
        echo "\" width=\"60\" id=\"svg-loader\">
    </span>

    ";
        // line 23
        $this->loadTemplate("@Translation/SymfonyProfiler/javascripts.html.twig", "@Translation/SymfonyProfiler/translation.html.twig", 23)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_defined_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "defined_messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "defined_messages"));

        // line 27
        echo "    ";
        $context["messages"] = [];
        // line 28
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "messages", [], "any", false, false, false, 28), function ($__message__) use ($context, $macros) { $context["message"] = $__message__; return 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 28), twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED")); }));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 29
            echo "        ";
            $context["messages"] = twig_array_merge((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 29, $this->source); })()), [$context["key"] => $context["message"]]);
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        echo twig_call_macro($macros["helper"], "macro_render_table", [(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 32, $this->source); })())], 32, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_fallback_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fallback_messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fallback_messages"));

        // line 36
        echo "    ";
        $context["messages"] = [];
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "messages", [], "any", false, false, false, 37), function ($__message__) use ($context, $macros) { $context["message"] = $__message__; return 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 37), twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK")); }));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 38
            echo "        ";
            $context["messages"] = twig_array_merge((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 38, $this->source); })()), [$context["key"] => $context["message"]]);
            // line 39
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    ";
        // line 41
        echo twig_call_macro($macros["helper"], "macro_render_table", [(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 41, $this->source); })())], 41, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_missing_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "missing_messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "missing_messages"));

        // line 45
        echo "    ";
        $context["messages"] = [];
        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "messages", [], "any", false, false, false, 46), function ($__message__) use ($context, $macros) { $context["message"] = $__message__; return 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 46), twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING")); }));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 47
            echo "        ";
            $context["messages"] = twig_array_merge((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 47, $this->source); })()), [$context["key"] => $context["message"]]);
            // line 48
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
    <form action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("php_translation_profiler_translation_create_assets", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 50, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\"
        id=\"translations-list\" onSubmit=\"return saveTranslations(this);\" >

            ";
        // line 53
        echo twig_call_macro($macros["helper"], "macro_render_table", [(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 53, $this->source); })()), true], 53, $context, $this->getSourceContext());
        echo "

        <p class=\"full-width\" id=\"translationResult\"></p>

        <button type=\"submit\" class=\"btn\">
            Add selected messages
        </button>

    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function macro_render_table($__messages__ = null, $__withCheckbox__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "withCheckbox" => $__withCheckbox__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 65
            echo "    <table>
        <thead>
        <tr>
            ";
            // line 68
            if ((isset($context["withCheckbox"]) || array_key_exists("withCheckbox", $context) ? $context["withCheckbox"] : (function () { throw new RuntimeError('Variable "withCheckbox" does not exist.', 68, $this->source); })())) {
                // line 69
                echo "                <th>
                    <input type=\"checkbox\" id=\"check-all-control\" onchange=\"toggleCheckAll(this)\" checked=\"checked\">
                </th>
            ";
            }
            // line 73
            echo "            <th>Locale</th>
            <th>Domain</th>
            <th>Times used</th>
            <th>Message ID</th>
            <th>Message Preview</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 82, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 83
                echo "            <tr id=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                <td>
                    ";
                // line 85
                if ((isset($context["withCheckbox"]) || array_key_exists("withCheckbox", $context) ? $context["withCheckbox"] : (function () { throw new RuntimeError('Variable "withCheckbox" does not exist.', 85, $this->source); })())) {
                    // line 86
                    echo "                        <input type=\"checkbox\" name=\"translationKey\" value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" checked=\"checked\" class=\"translation-key-checkbox\">
                    ";
                }
                // line 88
                echo "                </td>
                <td class=\"font-normal text-small\">";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "locale", [], "any", false, false, false, 89), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small text-bold nowrap\">";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "domain", [], "any", false, false, false, 90), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "count", [], "any", false, false, false, 91), "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 93), "html", null, true);
                echo "

                    ";
                // line 95
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["message"], "transChoiceNumber", [], "any", false, false, false, 95))) {
                    // line 96
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 98
                echo "
                    ";
                // line 99
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, false, 99)), 0)) {
                    // line 100
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 100), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, false, 103));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 104
                        echo "                                ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["parameters"]);
                        echo "
                                ";
                        // line 105
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 105)) {
                            echo "<br />";
                        }
                        // line 106
                        echo "                            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "                        </div>
                    ";
                }
                // line 109
                echo "                </td>
                <td class=\"translation\">
                    ";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "translation", [], "any", false, false, false, 111), "html", null, true);
                echo "
                </td>
                <td width=\"155px\">
                    ";
                // line 114
                ob_start();
                // line 115
                echo "                    <a class=\"edit btn btn-sm\" href=\"javascript:void(0);\" onclick='getEditForm(\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\")'>Edit</a>
                        |
                    <a class=\"sync btn btn-sm\" href=\"javascript:void(0);\" onclick='syncMessage(\"";
                // line 117
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\")'>Sync</a>
                    ";
                $___internal_8728748d2b58d25e971ff2f1870d7c1e1a60f049ed6427e6d3a04845819b78b2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 114
                echo twig_spaceless($___internal_8728748d2b58d25e971ff2f1870d7c1e1a60f049ed6427e6d3a04845819b78b2_);
                // line 119
                echo "                </td>
            </tr>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "        </tbody>
    </table>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@Translation/SymfonyProfiler/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 122,  431 => 119,  429 => 114,  424 => 117,  418 => 115,  416 => 114,  410 => 111,  406 => 109,  402 => 107,  388 => 106,  384 => 105,  379 => 104,  362 => 103,  358 => 102,  352 => 100,  350 => 99,  347 => 98,  343 => 96,  341 => 95,  336 => 93,  331 => 91,  327 => 90,  323 => 89,  320 => 88,  314 => 86,  312 => 85,  306 => 83,  289 => 82,  278 => 73,  272 => 69,  270 => 68,  265 => 65,  245 => 64,  225 => 53,  219 => 50,  216 => 49,  210 => 48,  207 => 47,  202 => 46,  199 => 45,  189 => 44,  177 => 41,  174 => 40,  168 => 39,  165 => 38,  160 => 37,  157 => 36,  147 => 35,  135 => 32,  132 => 31,  126 => 30,  123 => 29,  118 => 28,  115 => 27,  105 => 26,  95 => 23,  89 => 20,  83 => 17,  74 => 10,  64 => 9,  53 => 1,  51 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Collector/translation.html.twig' %}

{#
 # Authors Tobias Nyholm, Damien Alexandre (damienalexandre), Damien Harper
 #}

{% import _self as helper %}

{% block panel %}
    <h2>PHP Translation</h2>

    <div>
        <a class=\"btn\" href=\"javascript:void(0);\" onclick='syncAll()'>Synchronize all translations</a><br />
        <div id=\"top-result-area\"></div>
    </div>

    {{ parent() }}

    <span class=\"hidden\">
        <img src=\"{{ asset(\"bundles/translation/css/images/loader.svg\") }}\" width=\"60\" id=\"svg-loader\">
    </span>

    {% include \"@Translation/SymfonyProfiler/javascripts.html.twig\" %}
{% endblock %}

{% block defined_messages %}
    {% set messages = [] %}
    {% for key, message in collector.messages|filter(message => message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_DEFINED')) %}
        {% set messages = messages|merge({(key): message}) %}
    {% endfor %}

    {{ helper.render_table(messages) }}
{% endblock %}

{% block fallback_messages %}
    {% set messages = [] %}
    {% for key, message in collector.messages|filter(message => message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK')) %}
        {% set messages = messages|merge({(key): message}) %}
    {% endfor %}

    {{ helper.render_table(messages) }}
{% endblock %}

{% block missing_messages %}
    {% set messages = [] %}
    {% for key, message in collector.messages|filter(message => message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING')) %}
        {% set messages = messages|merge({(key): message}) %}
    {% endfor %}

    <form action=\"{{ path('php_translation_profiler_translation_create_assets', {'token': token}) }}\" method=\"post\"
        id=\"translations-list\" onSubmit=\"return saveTranslations(this);\" >

            {{ helper.render_table(messages, true) }}

        <p class=\"full-width\" id=\"translationResult\"></p>

        <button type=\"submit\" class=\"btn\">
            Add selected messages
        </button>

    </form>
{% endblock %}

{% macro render_table(messages, withCheckbox = false) %}
    <table>
        <thead>
        <tr>
            {% if withCheckbox %}
                <th>
                    <input type=\"checkbox\" id=\"check-all-control\" onchange=\"toggleCheckAll(this)\" checked=\"checked\">
                </th>
            {% endif %}
            <th>Locale</th>
            <th>Domain</th>
            <th>Times used</th>
            <th>Message ID</th>
            <th>Message Preview</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for key, message in messages %}
            <tr id=\"{{ key }}\">
                <td>
                    {% if withCheckbox %}
                        <input type=\"checkbox\" name=\"translationKey\" value=\"{{ key }}\" checked=\"checked\" class=\"translation-key-checkbox\">
                    {% endif %}
                </td>
                <td class=\"font-normal text-small\">{{ message.locale }}</td>
                <td class=\"font-normal text-small text-bold nowrap\">{{ message.domain }}</td>
                <td class=\"font-normal text-small\">{{ message.count }}</td>
                <td>
                    {{ message.id }}

                    {% if message.transChoiceNumber is not null %}
                        <small class=\"newline\">(pluralization is used)</small>
                    {% endif %}

                    {% if message.parameters|length > 0 %}
                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-{{ loop.index }}\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-{{ loop.index }}\" class=\"hidden\">
                            {% for parameters in message.parameters %}
                                {{ profiler_dump(parameters) }}
                                {% if not loop.last %}<br />{% endif %}
                            {% endfor %}
                        </div>
                    {% endif %}
                </td>
                <td class=\"translation\">
                    {{ message.translation }}
                </td>
                <td width=\"155px\">
                    {% apply spaceless %}
                    <a class=\"edit btn btn-sm\" href=\"javascript:void(0);\" onclick='getEditForm(\"{{ key }}\")'>Edit</a>
                        |
                    <a class=\"sync btn btn-sm\" href=\"javascript:void(0);\" onclick='syncMessage(\"{{ key }}\")'>Sync</a>
                    {% endapply %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@Translation/SymfonyProfiler/translation.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/vendor/php-translation/symfony-bundle/Resources/views/SymfonyProfiler/translation.html.twig");
    }
}
