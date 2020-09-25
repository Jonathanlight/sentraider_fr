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

/* @Translation/WebUI/show.html.twig */
class __TwigTemplate_3b0d4ec9dbe928150c6963be144c01cb4fc8378f8ea4f5f617f236bedeaa1067 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            '_translation_bundle_body' => [$this, 'block__translation_bundle_body'],
            '_translation_bundle_js' => [$this, 'block__translation_bundle_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Translation/WebUI/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Translation/WebUI/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Translation/WebUI/show.html.twig"));

        // line 2
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@Translation/WebUI/base.html.twig", "@Translation/WebUI/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block__translation_bundle_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_translation_bundle_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_translation_bundle_body"));

        // line 5
        echo "    <div class=\"container locales\">
        <h5 class=\"mt-2\">Locales:</h5>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 8
            echo "            <a class=\"locales-item";
            if (0 === twig_compare((isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 8, $this->source); })()), $context["locale"])) {
                echo " active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translation_show", ["configName" => (isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new RuntimeError('Variable "configName" does not exist.', 8, $this->source); })()), "domain" => (isset($context["currentDomain"]) || array_key_exists("currentDomain", $context) ? $context["currentDomain"] : (function () { throw new RuntimeError('Variable "currentDomain" does not exist.', 8, $this->source); })()), "locale" => $context["locale"]]), "html", null, true);
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        <h5 class=\"mt-2\">Domains:</h5>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) || array_key_exists("domains", $context) ? $context["domains"] : (function () { throw new RuntimeError('Variable "domains" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 14
            echo "            <a class=\"locales-item";
            if (0 === twig_compare((isset($context["currentDomain"]) || array_key_exists("currentDomain", $context) ? $context["currentDomain"] : (function () { throw new RuntimeError('Variable "currentDomain" does not exist.', 14, $this->source); })()), $context["domain"])) {
                echo " active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translation_show", ["configName" => (isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new RuntimeError('Variable "configName" does not exist.', 14, $this->source); })()), "domain" => $context["domain"], "locale" => (isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 14, $this->source); })())]), "html", null, true);
            echo "\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <h5 class=\"mt-2\">Filter: <a class=\"show-only-empty\" href=\"javascript:void(0);\" onclick=\"showOnlyEmptyMessages(this)\">
                Only empty
            </a> |
            <a class=\"show-all\" href=\"javascript:void(0);\" onclick=\"showAllMessages(this)\">
                All
            </a>
        </h5>
    </div>
    <hr>
    <div class=\"container message-list\">
        <h1>Translations
            ";
        // line 29
        if ((isset($context["allow_create"]) || array_key_exists("allow_create", $context) ? $context["allow_create"] : (function () { throw new RuntimeError('Variable "allow_create" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                <a href=\"javascript:void(0);\"
                   class=\"btn btn-secondary\"
                   onclick='toggleElement(\"create-translation\")'
                   aria-controls=\"create-translation\">Add new</a>
            ";
        }
        // line 35
        echo "        </h1>

        ";
        // line 37
        if ((isset($context["allow_create"]) || array_key_exists("allow_create", $context) ? $context["allow_create"] : (function () { throw new RuntimeError('Variable "allow_create" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "            <div class=\"collapse\" id=\"create-translation\">
                <form class=\"form\" onsubmit=\"return createTranslation(this, '";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translation_create", ["configName" => (isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new RuntimeError('Variable "configName" does not exist.', 39, $this->source); })()), "locale" => (isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 39, $this->source); })()), "domain" => (isset($context["currentDomain"]) || array_key_exists("currentDomain", $context) ? $context["currentDomain"] : (function () { throw new RuntimeError('Variable "currentDomain" does not exist.', 39, $this->source); })())]), "html", null, true);
            echo "')\">
                    <div class=\"form-group\">
                        <label for=\"create-key\">Key</label>
                        <input type=\"text\" class=\"form-control\" id=\"create-key\" placeholder=\"foo.label\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"create-message\">Translation</label>
                        <input type=\"text\" class=\"form-control\" id=\"create-message\" placeholder=\"Lorem Ipsum\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                    <div class=\"ajax-result\"></div>
                </form>
            </div>
        ";
        }
        // line 53
        echo "
        <div id=\"new-translations\"></div>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 55, $this->source); })()), function ($__message__) use ($context, $macros) { $context["message"] = $__message__; return twig_get_attribute($this->env, $this->source, $context["message"], "new", [], "any", false, false, false, 55); }));
        foreach ($context['_seq'] as $context["idx"] => $context["message"]) {
            // line 56
            echo "            ";
            echo twig_call_macro($macros["macro"], "macro_printMessage", [($context["idx"] + 1), $context["message"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 56, $this->source); })()), (isset($context["file_base_path"]) || array_key_exists("file_base_path", $context) ? $context["file_base_path"] : (function () { throw new RuntimeError('Variable "file_base_path" does not exist.', 56, $this->source); })())], 56, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
        ";
        // line 59
        $context["idxStart"] = twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 59, $this->source); })()));
        // line 60
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 60, $this->source); })()), function ($__message__) use ($context, $macros) { $context["message"] = $__message__; return  !twig_get_attribute($this->env, $this->source, $context["message"], "new", [], "any", false, false, false, 60); }));
        foreach ($context['_seq'] as $context["idx"] => $context["message"]) {
            // line 61
            echo "            ";
            echo twig_call_macro($macros["macro"], "macro_printMessage", [($context["idx"] + (isset($context["idxStart"]) || array_key_exists("idxStart", $context) ? $context["idxStart"] : (function () { throw new RuntimeError('Variable "idxStart" does not exist.', 61, $this->source); })())), $context["message"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 61, $this->source); })()), (isset($context["file_base_path"]) || array_key_exists("file_base_path", $context) ? $context["file_base_path"] : (function () { throw new RuntimeError('Variable "file_base_path" does not exist.', 61, $this->source); })())], 61, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block__translation_bundle_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_translation_bundle_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_translation_bundle_js"));

        // line 67
        echo "    <script type=\"text/javascript\">
      var editUrl = \"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translation_edit", ["configName" => (isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new RuntimeError('Variable "configName" does not exist.', 68, $this->source); })()), "locale" => (isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 68, $this->source); })()), "domain" => (isset($context["currentDomain"]) || array_key_exists("currentDomain", $context) ? $context["currentDomain"] : (function () { throw new RuntimeError('Variable "currentDomain" does not exist.', 68, $this->source); })())]), "html", null, true);
        echo "\";
    </script>
    ";
        // line 70
        $this->displayParentBlock("_translation_bundle_js", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function macro_printMessage($__idx__ = null, $__message__ = null, $__allow_delete__ = null, $__base_path__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "idx" => $__idx__,
            "message" => $__message__,
            "allow_delete" => $__allow_delete__,
            "base_path" => $__base_path__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "printMessage"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "printMessage"));

            // line 74
            echo "    <div class=\"row message ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 74, $this->source); })()), "message", [], "any", false, false, false, 74)) ? ("") : ("empty"));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 74, $this->source); })()), "key", [], "any", false, false, false, 74), "html", null, true);
            echo "\">
        <div class=\"col-12\">
            <hr>
        </div>
        <div class=\"col-md-6 col-12\">
            <div class=\"form-group\">
                ";
            // line 80
            if (twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 80, $this->source); })()), "new", [], "any", false, false, false, 80)) {
                // line 81
                echo "                    <span class=\"text-primary\" title=\"New\">&#x25CF;</span>
                ";
            }
            // line 83
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 83, $this->source); })()), "obsolete", [], "any", false, false, false, 83)) {
                // line 84
                echo "                    <span class=\"text-warning\" title=\"Obsolete\">&#x26A0;</span>
                ";
            }
            // line 86
            echo "                <a class=\"message-key\" href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 86, $this->source); })()), "key", [], "any", false, false, false, 86), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 86, $this->source); })()), "key", [], "any", false, false, false, 86), "html", null, true);
            echo "</a>
                ";
            // line 87
            if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 87, $this->source); })())) {
                // line 88
                echo "                    <a class=\"message-delete close\" href=\"javascript:void(0)\" data-key=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 88, $this->source); })()), "key", [], "any", false, false, false, 88), "html", null, true);
                echo "\" title=\"Delete translation\" onclick='confirm(\"Are you sure?\")?deleteTranslation(this):false;'><span>&times;</span></a>
                ";
            }
            // line 90
            echo "                <textarea
                        class=\"form-control\"
                        data-key=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 92, $this->source); })()), "key", [], "any", false, false, false, 92), "html", null, true);
            echo "\"
                        onchange=\"editTranslation(this)\"
                        tabindex=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 94, $this->source); })()), "html", null, true);
            echo "\"
                >";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 95, $this->source); })()), "message", [], "any", false, false, false, 95), "html", null, true);
            echo "</textarea>
                <div class=\"ajax-result\"></div>
            </div>
        </div>

        <div class=\"col-md-6 col-12\">
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 101, $this->source); })()), "otherTranslations", [], "any", false, false, false, 101), function ($__trans__) use ($context, $macros) { $context["trans"] = $__trans__; return  !twig_test_empty($context["trans"]); }));
            foreach ($context['_seq'] as $context["locale"] => $context["trans"]) {
                // line 102
                echo "                <b>";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "</b>: ";
                echo twig_escape_filter($this->env, $context["trans"], "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['trans'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "        </div>

        <div class=\"col-12\">
            ";
            // line 107
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 107, $this->source); })()), "sourceLocations", [], "any", false, false, false, 107)), 0)) {
                // line 108
                echo "                <ul class=\"location-list\">
                    ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 109, $this->source); })()), "sourceLocations", [], "any", false, false, false, 109));
                foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                    // line 110
                    echo "                        <li>
                            <a href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(((isset($context["base_path"]) || array_key_exists("base_path", $context) ? $context["base_path"] : (function () { throw new RuntimeError('Variable "base_path" does not exist.', 111, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["location"], "path", [], "array", false, false, false, 111)), twig_get_attribute($this->env, $this->source, $context["location"], "line", [], "array", false, false, false, 111)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "path", [], "array", false, false, false, 111), "html", null, true);
                    echo "
                                at line ";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "line", [], "array", false, false, false, 112), "html", null, true);
                    echo " </a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                </ul>
            ";
            }
            // line 116
            echo "        </div>
    </div>

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
        return "@Translation/WebUI/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 116,  378 => 114,  370 => 112,  364 => 111,  361 => 110,  357 => 109,  354 => 108,  352 => 107,  347 => 104,  336 => 102,  332 => 101,  323 => 95,  319 => 94,  314 => 92,  310 => 90,  304 => 88,  302 => 87,  295 => 86,  291 => 84,  288 => 83,  284 => 81,  282 => 80,  270 => 74,  248 => 73,  236 => 70,  231 => 68,  228 => 67,  218 => 66,  207 => 63,  198 => 61,  193 => 60,  191 => 59,  188 => 58,  179 => 56,  175 => 55,  171 => 53,  154 => 39,  151 => 38,  149 => 37,  145 => 35,  138 => 30,  136 => 29,  123 => 18,  114 => 15,  105 => 14,  101 => 13,  98 => 12,  89 => 9,  80 => 8,  76 => 7,  72 => 5,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@Translation/WebUI/base.html.twig\" %}
{% import _self as macro %}

{% block _translation_bundle_body %}
    <div class=\"container locales\">
        <h5 class=\"mt-2\">Locales:</h5>
        {% for locale in locales %}
            <a class=\"locales-item{% if currentLocale == locale %} active{% endif %}\" href=\"{{ path('translation_show', {configName: configName, domain:currentDomain, locale:locale}) }}\">
                {{ locale }}
            </a>
        {% endfor %}
        <h5 class=\"mt-2\">Domains:</h5>
        {% for domain in domains %}
            <a class=\"locales-item{% if currentDomain == domain %} active{% endif %}\" href=\"{{ path('translation_show', {configName: configName, domain:domain, locale:currentLocale}) }}\">
                {{ domain }}
            </a>
        {% endfor %}
        <h5 class=\"mt-2\">Filter: <a class=\"show-only-empty\" href=\"javascript:void(0);\" onclick=\"showOnlyEmptyMessages(this)\">
                Only empty
            </a> |
            <a class=\"show-all\" href=\"javascript:void(0);\" onclick=\"showAllMessages(this)\">
                All
            </a>
        </h5>
    </div>
    <hr>
    <div class=\"container message-list\">
        <h1>Translations
            {% if allow_create %}
                <a href=\"javascript:void(0);\"
                   class=\"btn btn-secondary\"
                   onclick='toggleElement(\"create-translation\")'
                   aria-controls=\"create-translation\">Add new</a>
            {% endif %}
        </h1>

        {% if allow_create %}
            <div class=\"collapse\" id=\"create-translation\">
                <form class=\"form\" onsubmit=\"return createTranslation(this, '{{ path('translation_create', {configName: configName, locale:currentLocale,domain:currentDomain}) }}')\">
                    <div class=\"form-group\">
                        <label for=\"create-key\">Key</label>
                        <input type=\"text\" class=\"form-control\" id=\"create-key\" placeholder=\"foo.label\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"create-message\">Translation</label>
                        <input type=\"text\" class=\"form-control\" id=\"create-message\" placeholder=\"Lorem Ipsum\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                    <div class=\"ajax-result\"></div>
                </form>
            </div>
        {% endif %}

        <div id=\"new-translations\"></div>
        {% for idx, message in messages|filter(message => message.new) %}
            {{ macro.printMessage(idx + 1, message, allow_delete, file_base_path) }}
        {% endfor %}

        {% set idxStart = messages|length %}
        {% for idx, message in messages|filter(message => not message.new) %}
            {{ macro.printMessage(idx + idxStart, message, allow_delete, file_base_path) }}
        {% endfor %}
    </div>
{% endblock %}

{% block _translation_bundle_js %}
    <script type=\"text/javascript\">
      var editUrl = \"{{ path('translation_edit', {configName: configName, locale:currentLocale,domain:currentDomain}) }}\";
    </script>
    {{ parent() }}
{% endblock %}

{% macro printMessage(idx, message, allow_delete, base_path) %}
    <div class=\"row message {{ message.message ? '' : 'empty' }}\" id=\"{{ message.key }}\">
        <div class=\"col-12\">
            <hr>
        </div>
        <div class=\"col-md-6 col-12\">
            <div class=\"form-group\">
                {% if message.new %}
                    <span class=\"text-primary\" title=\"New\">&#x25CF;</span>
                {% endif %}
                {% if message.obsolete %}
                    <span class=\"text-warning\" title=\"Obsolete\">&#x26A0;</span>
                {% endif %}
                <a class=\"message-key\" href=\"#{{ message.key }}\">{{ message.key }}</a>
                {% if allow_delete %}
                    <a class=\"message-delete close\" href=\"javascript:void(0)\" data-key=\"{{ message.key }}\" title=\"Delete translation\" onclick='confirm(\"Are you sure?\")?deleteTranslation(this):false;'><span>&times;</span></a>
                {% endif %}
                <textarea
                        class=\"form-control\"
                        data-key=\"{{ message.key }}\"
                        onchange=\"editTranslation(this)\"
                        tabindex=\"{{ idx }}\"
                >{{ message.message }}</textarea>
                <div class=\"ajax-result\"></div>
            </div>
        </div>

        <div class=\"col-md-6 col-12\">
            {% for locale, trans in message.otherTranslations|filter(trans => not trans is empty) %}
                <b>{{ locale }}</b>: {{ trans }}<br>
            {% endfor %}
        </div>

        <div class=\"col-12\">
            {% if message.sourceLocations|length > 0 %}
                <ul class=\"location-list\">
                    {% for location in message.sourceLocations %}
                        <li>
                            <a href=\"{{ (base_path ~ location['path'])|file_link(location['line']) }}\">{{ location['path'] }}
                                at line {{ location['line'] }} </a></li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    </div>

{% endmacro %}
", "@Translation/WebUI/show.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/vendor/php-translation/symfony-bundle/Resources/views/WebUI/show.html.twig");
    }
}
