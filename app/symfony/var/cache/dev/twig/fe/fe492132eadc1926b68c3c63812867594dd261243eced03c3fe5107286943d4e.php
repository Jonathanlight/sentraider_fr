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

/* @ApiPlatform/DataCollector/request.html.twig */
class __TwigTemplate_7be89d75837dcbc0683f8d9069adf8e6d8e5d99682a0d45d9b59e252efaa238b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ApiPlatform/DataCollector/request.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ApiPlatform/DataCollector/request.html.twig"));

        // line 77
        $macros["apiPlatform"] = $this->macros["apiPlatform"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@ApiPlatform/DataCollector/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 80
        echo "    ";
        ob_start();
        // line 81
        echo "        ";
        $context["status_color"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", [], "any", false, true, false, 81), "ignored_filters", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", [], "any", false, true, false, 81), "ignored_filters", [], "any", false, false, false, 81), false)) : (false))) ? ("yellow") : ("default"));
        // line 82
        echo "        ";
        echo twig_include($this->env, $context, "@ApiPlatform/DataCollector/api-platform-icon.svg");
        echo "
        <span class=\"sf-toolbar-value\"></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "
    ";
        // line 86
        ob_start();
        // line 87
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Resource Class</b>
            <span>";
        // line 89
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", [], "any", true, true, false, 89)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", [], "any", false, false, false, 89), "Not an API Platform resource")) : ("Not an API Platform resource")), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 91
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", [], "any", false, true, false, 91), "ignored_filters", [], "any", true, true, false, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", [], "any", false, true, false, 91), "ignored_filters", [], "any", false, false, false, 91), false)) : (false))) {
            // line 92
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Ignored Filters</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 94, $this->source); })()), "counters", [], "any", false, false, false, 94), "ignored_filters", [], "any", false, false, false, 94), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 97
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "
    ";
        // line 99
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 99, $this->source); })())]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 103
        echo "    ";
        // line 104
        echo "    <span class=\"label";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), "resourceClass", [], "any", false, false, false, 104)) ? ("") : (" disabled"));
        echo "\">
        <span class=\"icon\">
            ";
        // line 106
        echo twig_include($this->env, $context, "@ApiPlatform/DataCollector/api-platform.svg");
        echo "
        </span>
        <strong>API Platform</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 113
        echo "    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 115
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", [], "any", true, true, false, 115)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", [], "any", false, false, false, 115), "Not an API Platform resource")) : ("Not an API Platform resource")), "html", null, true);
        echo "</span>
            <span class=\"label\">Resource class</span>
        </div>
    </div>

    ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 120, $this->source); })()), "resourceMetadata", [], "any", false, false, false, 120)) {
            // line 121
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Resource Metadata</h3>
                <div class=\"tab-content\">
                    <h3>Short name: \"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 125, $this->source); })()), "resourceMetadata", [], "any", false, false, false, 125), "shortName", [], "any", false, false, false, 125), "html", null, true);
            echo "\"</h3>
                    ";
            // line 126
            echo twig_call_macro($macros["apiPlatform"], "macro_operationTable", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 126, $this->source); })()), "resourceMetadata", [], "any", false, false, false, 126), "itemOperations", [], "any", false, false, false, 126), "item", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAttributes", [], "any", false, true, false, 126), "item_operation_name", [], "any", true, true, false, 126)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAttributes", [], "any", false, true, false, 126), "item_operation_name", [], "any", false, false, false, 126), "")) : (""))], 126, $context, $this->getSourceContext());
            echo "
                    ";
            // line 127
            echo twig_call_macro($macros["apiPlatform"], "macro_operationTable", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "resourceMetadata", [], "any", false, false, false, 127), "collectionOperations", [], "any", false, false, false, 127), "collection", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAttributes", [], "any", false, true, false, 127), "collection_operation_name", [], "any", true, true, false, 127)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAttributes", [], "any", false, true, false, 127), "collection_operation_name", [], "any", false, false, false, 127), "")) : (""))], 127, $context, $this->getSourceContext());
            echo "
                    <table>
                        <thead>
                            <tr>
                                <th scope=\"col\" class=\"key\">Filters</th>
                                <th scope=\"col\"></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "filters", [], "any", false, false, false, 136));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["id"] => $context["filter"]) {
                // line 137
                echo "                                ";
                $context["ignored_filter"] = ($context["filter"] === null);
                // line 138
                echo "                                <tr";
                if ((isset($context["ignored_filter"]) || array_key_exists("ignored_filter", $context) ? $context["ignored_filter"] : (function () { throw new RuntimeError('Variable "ignored_filter" does not exist.', 138, $this->source); })())) {
                    echo " class=\"status-warning\"";
                }
                echo ">
                                    <td>
                                        ";
                // line 140
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "
                                        ";
                // line 141
                if ((isset($context["ignored_filter"]) || array_key_exists("ignored_filter", $context) ? $context["ignored_filter"] : (function () { throw new RuntimeError('Variable "ignored_filter" does not exist.', 141, $this->source); })())) {
                    // line 142
                    echo "                                            <span class=\"newline text-muted\">ignored filter</span>
                                        ";
                } else {
                    // line 144
                    echo "                                            ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["filter"]);
                    echo "
                                        ";
                }
                // line 146
                echo "                                    </td>
                                </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 149
                echo "                                <tr>
                                    <td class=\"text-muted\">
                                        No available filter declared for this resource.
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                        </tbody>
                    </table>

                    <table>
                        <thead>
                            <tr>
                                <th scope=\"col\" class=\"key\">Attributes</th>
                                <th scope=\"col\"></th>
                            </tr>
                        </thead>

                        <tbody>
                            ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 167, $this->source); })()), "resourceMetadata", [], "any", false, false, false, 167), "attributes", [], "any", false, false, false, 167));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 168
                echo "                                ";
                if (0 !== twig_compare($context["key"], "filters")) {
                    // line 169
                    echo "                                    <tr>
                                        <th scope=\"row\">";
                    // line 170
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</th>
                                        <td>";
                    // line 171
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"], 2);
                    echo "</td>
                                    </tr>
                                ";
                }
                // line 174
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"tab\">
                <h3 class=\"tab-title\">Data Providers</h3>
                <div class=\"tab-content\">
                    ";
            // line 182
            echo twig_call_macro($macros["apiPlatform"], "macro_providerTable", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 182, $this->source); })()), "collectionDataProviders", [], "any", false, false, false, 182), "collection data provider"], 182, $context, $this->getSourceContext());
            echo "
                    ";
            // line 183
            echo twig_call_macro($macros["apiPlatform"], "macro_providerTable", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 183, $this->source); })()), "itemDataProviders", [], "any", false, false, false, 183), "item data provider"], 183, $context, $this->getSourceContext());
            echo "
                    ";
            // line 184
            echo twig_call_macro($macros["apiPlatform"], "macro_providerTable", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 184, $this->source); })()), "subresourceDataProviders", [], "any", false, false, false, 184), "subresource data provider"], 184, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
            <div class=\"tab\">
                <h3 class=\"tab-title\">Data Persisters</h3>
                <div class=\"tab-content\">
                    ";
            // line 190
            echo twig_call_macro($macros["apiPlatform"], "macro_providerTable", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 190, $this->source); })()), "dataPersisters", [], "any", false, false, false, 190), "data persister"], 190, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function macro_operationLine($__key__ = null, $__operation__ = null, $__actualOperationName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "operation" => $__operation__,
            "actualOperationName" => $__actualOperationName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "operationLine"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "operationLine"));

            // line 4
            echo "    <tr>
        <th scope=\"row\"";
            // line 5
            if (0 === twig_compare((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 5, $this->source); })()), (isset($context["actualOperationName"]) || array_key_exists("actualOperationName", $context) ? $context["actualOperationName"] : (function () { throw new RuntimeError('Variable "actualOperationName" does not exist.', 5, $this->source); })()))) {
                echo " class=\"status-success\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "</th>
        <td";
            // line 6
            if (0 === twig_compare((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 6, $this->source); })()), (isset($context["actualOperationName"]) || array_key_exists("actualOperationName", $context) ? $context["actualOperationName"] : (function () { throw new RuntimeError('Variable "actualOperationName" does not exist.', 6, $this->source); })()))) {
                echo " class=\"status-success\"";
            }
            echo ">";
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 6, $this->source); })()), 1);
            echo "</td>
    </tr>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 10
    public function macro_operationTable($__object__ = null, $__name__ = null, $__actualOperationName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "object" => $__object__,
            "name" => $__name__,
            "actualOperationName" => $__actualOperationName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "operationTable"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "operationTable"));

            // line 11
            echo "    ";
            $macros["apiPlatform"] = $this;
            // line 12
            echo "    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">";
            // line 15
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 15, $this->source); })())), "html", null, true);
            echo " operations</th>
                <th scope=\"col\">Attributes</th>
            </tr>
        </thead>

        <tbody>
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 21, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["key"] => $context["itemOperation"]) {
                // line 22
                echo "            ";
                echo twig_call_macro($macros["apiPlatform"], "macro_operationLine", [$context["key"], $context["itemOperation"], (isset($context["actualOperationName"]) || array_key_exists("actualOperationName", $context) ? $context["actualOperationName"] : (function () { throw new RuntimeError('Variable "actualOperationName" does not exist.', 22, $this->source); })())], 22, $context, $this->getSourceContext());
                echo "
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 24
                echo "            <tr>
                <td colspan=\"2\" class=\"text-muted\">
                    No available ";
                // line 26
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 26, $this->source); })())), "html", null, true);
                echo " operation for this resource.
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['itemOperation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
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

    // line 34
    public function macro_providerTable($__object__ = null, $__name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "object" => $__object__,
            "name" => $__name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "providerTable"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "providerTable"));

            // line 35
            echo "    ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 35, $this->source); })()), "responses", [], "any", false, false, false, 35))) {
                // line 36
                echo "        <div class=\"empty\">
            <p>No calls to ";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 37, $this->source); })()), "html", null, true);
                echo " have been recorded.</p>
        </div>
    ";
            } else {
                // line 40
                echo "        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Answer</th>
                <th>";
                // line 45
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 45, $this->source); })())), "html", null, true);
                echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 49, $this->source); })()), "responses", [], "any", false, false, false, 49));
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
                foreach ($context['_seq'] as $context["class"] => $context["answer"]) {
                    // line 50
                    echo "                <tr>
                    <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 51), "html", null, true);
                    echo "</td>
                    <td class=\"font-normal\">
                        ";
                    // line 53
                    if (($context["answer"] === true)) {
                        // line 54
                        echo "                            <span class=\"label status-success same-width\">TRUE</span>
                        ";
                    } elseif ((                    // line 55
$context["answer"] === false)) {
                        // line 56
                        echo "                            <span class=\"label status-error same-width\">FALSE</span>
                        ";
                    } else {
                        // line 58
                        echo "                            <span class=\"label status-info same-width\">NOT USED</span>
                        ";
                    }
                    // line 60
                    echo "                    </td>
                    <td class=\"font-normal\">";
                    // line 61
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
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
                unset($context['_seq'], $context['_iterated'], $context['class'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "            </tbody>
            ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "context", [], "any", true, true, false, 65)) {
                    // line 66
                    echo "                <tfoot>
                    <tr>
                        <td class=\"font-normal\" colspan=\"2\"></td>
                        <td class=\"font-normal\">Context";
                    // line 69
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 69, $this->source); })()), "context", [], "any", false, false, false, 69), 2);
                    echo "</td>
                    </tr>
                </tfoot>
            ";
                }
                // line 73
                echo "        </table>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@ApiPlatform/DataCollector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 73,  597 => 69,  592 => 66,  590 => 65,  587 => 64,  570 => 61,  567 => 60,  563 => 58,  559 => 56,  557 => 55,  554 => 54,  552 => 53,  547 => 51,  544 => 50,  527 => 49,  520 => 45,  513 => 40,  507 => 37,  504 => 36,  501 => 35,  481 => 34,  464 => 30,  454 => 26,  450 => 24,  442 => 22,  437 => 21,  428 => 15,  423 => 12,  420 => 11,  399 => 10,  377 => 6,  369 => 5,  366 => 4,  345 => 3,  329 => 190,  320 => 184,  316 => 183,  312 => 182,  303 => 175,  297 => 174,  291 => 171,  287 => 170,  284 => 169,  281 => 168,  277 => 167,  263 => 155,  252 => 149,  245 => 146,  239 => 144,  235 => 142,  233 => 141,  229 => 140,  221 => 138,  218 => 137,  213 => 136,  201 => 127,  197 => 126,  193 => 125,  187 => 121,  185 => 120,  177 => 115,  173 => 113,  163 => 112,  148 => 106,  142 => 104,  140 => 103,  130 => 102,  118 => 99,  115 => 98,  112 => 97,  106 => 94,  102 => 92,  100 => 91,  95 => 89,  91 => 87,  89 => 86,  86 => 85,  79 => 82,  76 => 81,  73 => 80,  63 => 79,  52 => 1,  50 => 77,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% macro operationLine(key, operation, actualOperationName) %}
    <tr>
        <th scope=\"row\"{% if key == actualOperationName %} class=\"status-success\"{% endif %}>{{ key }}</th>
        <td{% if key == actualOperationName %} class=\"status-success\"{% endif %}>{{- profiler_dump(operation, 1) -}}</td>
    </tr>
{% endmacro %}

{% macro operationTable(object, name, actualOperationName) %}
    {% import _self as apiPlatform %}
    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">{{- name|capitalize }} operations</th>
                <th scope=\"col\">Attributes</th>
            </tr>
        </thead>

        <tbody>
        {% for key, itemOperation in object %}
            {{ apiPlatform.operationLine(key, itemOperation, actualOperationName) }}
        {% else %}
            <tr>
                <td colspan=\"2\" class=\"text-muted\">
                    No available {{ name|lower }} operation for this resource.
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro providerTable(object, name) %}
    {% if object.responses is empty %}
        <div class=\"empty\">
            <p>No calls to {{ name }} have been recorded.</p>
        </div>
    {% else %}
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Answer</th>
                <th>{{ name|capitalize }}</th>
            </tr>
            </thead>
            <tbody>
            {% for class, answer in object.responses %}
                <tr>
                    <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                    <td class=\"font-normal\">
                        {% if answer is same as(true) %}
                            <span class=\"label status-success same-width\">TRUE</span>
                        {% elseif answer is same as(false) %}
                            <span class=\"label status-error same-width\">FALSE</span>
                        {% else %}
                            <span class=\"label status-info same-width\">NOT USED</span>
                        {% endif %}
                    </td>
                    <td class=\"font-normal\">{{ class }}</td>
                </tr>
            {% endfor %}
            </tbody>
            {% if object.context is defined %}
                <tfoot>
                    <tr>
                        <td class=\"font-normal\" colspan=\"2\"></td>
                        <td class=\"font-normal\">Context{{ profiler_dump(object.context, 2) }}</td>
                    </tr>
                </tfoot>
            {% endif %}
        </table>
    {% endif %}
{% endmacro %}

{% import _self as apiPlatform %}

{% block toolbar %}
    {% set icon %}
        {% set status_color = collector.counters.ignored_filters|default(false) ? 'yellow' : 'default' %}
        {{ include('@ApiPlatform/DataCollector/api-platform-icon.svg') }}
        <span class=\"sf-toolbar-value\"></span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Resource Class</b>
            <span>{{ collector.resourceClass|default('Not an API Platform resource') }}</span>
        </div>
        {% if collector.counters.ignored_filters|default(false) %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Ignored Filters</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">{{ collector.counters.ignored_filters }}</span>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true, status: status_color }) }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label{{ collector.resourceClass ? '' : ' disabled' }}\">
        <span class=\"icon\">
            {{ include('@ApiPlatform/DataCollector/api-platform.svg') }}
        </span>
        <strong>API Platform</strong>
    </span>
{% endblock %}

{% block panel %}
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.resourceClass|default('Not an API Platform resource') }}</span>
            <span class=\"label\">Resource class</span>
        </div>
    </div>

    {% if collector.resourceMetadata %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Resource Metadata</h3>
                <div class=\"tab-content\">
                    <h3>Short name: \"{{ collector.resourceMetadata.shortName }}\"</h3>
                    {{ apiPlatform.operationTable(collector.resourceMetadata.itemOperations, 'item', collector.requestAttributes.item_operation_name|default('')) }}
                    {{ apiPlatform.operationTable(collector.resourceMetadata.collectionOperations, 'collection', collector.requestAttributes.collection_operation_name|default('')) }}
                    <table>
                        <thead>
                            <tr>
                                <th scope=\"col\" class=\"key\">Filters</th>
                                <th scope=\"col\"></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for id, filter in collector.filters %}
                                {% set ignored_filter = filter is same as(null) %}
                                <tr{% if ignored_filter %} class=\"status-warning\"{% endif %}>
                                    <td>
                                        {{ id }}
                                        {% if ignored_filter %}
                                            <span class=\"newline text-muted\">ignored filter</span>
                                        {% else %}
                                            {{ dump(filter) }}
                                        {% endif %}
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td class=\"text-muted\">
                                        No available filter declared for this resource.
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>

                    <table>
                        <thead>
                            <tr>
                                <th scope=\"col\" class=\"key\">Attributes</th>
                                <th scope=\"col\"></th>
                            </tr>
                        </thead>

                        <tbody>
                            {% for key, value in collector.resourceMetadata.attributes %}
                                {% if key != 'filters' %}
                                    <tr>
                                        <th scope=\"row\">{{ key }}</th>
                                        <td>{{- profiler_dump(value, 2) -}}</td>
                                    </tr>
                                {% endif %}
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"tab\">
                <h3 class=\"tab-title\">Data Providers</h3>
                <div class=\"tab-content\">
                    {{ apiPlatform.providerTable(collector.collectionDataProviders, 'collection data provider') }}
                    {{ apiPlatform.providerTable(collector.itemDataProviders, 'item data provider') }}
                    {{ apiPlatform.providerTable(collector.subresourceDataProviders, 'subresource data provider') }}
                </div>
            </div>
            <div class=\"tab\">
                <h3 class=\"tab-title\">Data Persisters</h3>
                <div class=\"tab-content\">
                    {{ apiPlatform.providerTable(collector.dataPersisters, 'data persister') }}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "@ApiPlatform/DataCollector/request.html.twig", "/Users/jonathan/Desktop/Work/folder/app1/sentraider_fr/app/symfony/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views/DataCollector/request.html.twig");
    }
}
