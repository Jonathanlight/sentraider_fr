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

/* @Translation/WebUI/index.html.twig */
class __TwigTemplate_1fe71c6694395d52a424e054781f7a8564f82fea5e7a20be0f765078b0a4d894 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            '_translation_bundle_body' => [$this, 'block__translation_bundle_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Translation/WebUI/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Translation/WebUI/index.html.twig"));

        // line 2
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@Translation/WebUI/base.html.twig", "@Translation/WebUI/index.html.twig", 1);
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
        echo "    <div class=\"container\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogues"]) || array_key_exists("catalogues", $context) ? $context["catalogues"] : (function () { throw new RuntimeError('Variable "catalogues" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cataloge"]) {
            // line 7
            echo "            <h3 class=\"mt-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localeMap"]) || array_key_exists("localeMap", $context) ? $context["localeMap"] : (function () { throw new RuntimeError('Variable "localeMap" does not exist.', 7, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["cataloge"], "locale", [], "any", false, false, false, 7), [], "array", false, false, false, 7), "html", null, true);
            echo "</h3>
            <table class=\"table domain-table\">
                ";
            // line 9
            $context["totalMessages"] = 0;
            // line 10
            echo "                ";
            $context["translatedMessages"] = 0;
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, $context["cataloge"], "all", [], "any", false, false, false, 11)));
            foreach ($context['_seq'] as $context["domain"] => $context["messages"]) {
                // line 12
                echo "                    ";
                $context["pg"] = 0;
                // line 13
                echo "                    ";
                $context["translated"] = 0;
                // line 14
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 15
                    echo "                        ";
                    if (0 !== twig_compare($context["message"], "")) {
                        // line 16
                        echo "                            ";
                        $context["translated"] = ((isset($context["translated"]) || array_key_exists("translated", $context) ? $context["translated"] : (function () { throw new RuntimeError('Variable "translated" does not exist.', 16, $this->source); })()) + 1);
                        // line 17
                        echo "                        ";
                    }
                    // line 18
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                    ";
                if (1 === twig_compare((isset($context["translated"]) || array_key_exists("translated", $context) ? $context["translated"] : (function () { throw new RuntimeError('Variable "translated" does not exist.', 19, $this->source); })()), 0)) {
                    // line 20
                    echo "                        ";
                    $context["pg"] = twig_round((((isset($context["translated"]) || array_key_exists("translated", $context) ? $context["translated"] : (function () { throw new RuntimeError('Variable "translated" does not exist.', 20, $this->source); })()) / twig_length_filter($this->env, $context["messages"])) * 100), 2);
                    // line 21
                    echo "                    ";
                }
                // line 22
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translation_show", ["configName" => (isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new RuntimeError('Variable "configName" does not exist.', 24, $this->source); })()), "domain" => $context["domain"], "locale" => twig_get_attribute($this->env, $this->source, $context["cataloge"], "locale", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\">
                                ";
                // line 25
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "
                            </a>
                        </td>
                        <td class=\"progressbar-cell\">
                            ";
                // line 29
                echo twig_call_macro($macros["macro"], "macro_progress", [(isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new RuntimeError('Variable "pg" does not exist.', 29, $this->source); })()), ""], 29, $context, $this->getSourceContext());
                echo "
                        </td>
                        <td>
                            <div class=\"text-nowrap\">
                                <small>(";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["translated"]) || array_key_exists("translated", $context) ? $context["translated"] : (function () { throw new RuntimeError('Variable "translated" does not exist.', 33, $this->source); })()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["messages"]), "html", null, true);
                echo ")</small>
                                <b>";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new RuntimeError('Variable "pg" does not exist.', 34, $this->source); })()), "html", null, true);
                echo " %</b>
                            </div>
                        </td>
                    </tr>
                    ";
                // line 38
                $context["totalMessages"] = ((isset($context["totalMessages"]) || array_key_exists("totalMessages", $context) ? $context["totalMessages"] : (function () { throw new RuntimeError('Variable "totalMessages" does not exist.', 38, $this->source); })()) + twig_length_filter($this->env, $context["messages"]));
                // line 39
                echo "                    ";
                $context["translatedMessages"] = ((isset($context["translatedMessages"]) || array_key_exists("translatedMessages", $context) ? $context["translatedMessages"] : (function () { throw new RuntimeError('Variable "translatedMessages" does not exist.', 39, $this->source); })()) + (isset($context["translated"]) || array_key_exists("translated", $context) ? $context["translated"] : (function () { throw new RuntimeError('Variable "translated" does not exist.', 39, $this->source); })()));
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['domain'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            </table>
            ";
            // line 42
            if (0 === twig_compare((isset($context["totalMessages"]) || array_key_exists("totalMessages", $context) ? $context["totalMessages"] : (function () { throw new RuntimeError('Variable "totalMessages" does not exist.', 42, $this->source); })()), 0)) {
                // line 43
                echo "                ";
                $context["pg"] = 100;
                // line 44
                echo "            ";
            } elseif ((1 === twig_compare((isset($context["translatedMessages"]) || array_key_exists("translatedMessages", $context) ? $context["translatedMessages"] : (function () { throw new RuntimeError('Variable "translatedMessages" does not exist.', 44, $this->source); })()), 0) && 1 === twig_compare((isset($context["totalMessages"]) || array_key_exists("totalMessages", $context) ? $context["totalMessages"] : (function () { throw new RuntimeError('Variable "totalMessages" does not exist.', 44, $this->source); })()), 0))) {
                // line 45
                echo "                ";
                $context["pg"] = twig_round((((isset($context["translatedMessages"]) || array_key_exists("translatedMessages", $context) ? $context["translatedMessages"] : (function () { throw new RuntimeError('Variable "translatedMessages" does not exist.', 45, $this->source); })()) / (isset($context["totalMessages"]) || array_key_exists("totalMessages", $context) ? $context["totalMessages"] : (function () { throw new RuntimeError('Variable "totalMessages" does not exist.', 45, $this->source); })())) * 100), 2);
                // line 46
                echo "            ";
            } else {
                // line 47
                echo "                ";
                $context["pg"] = 0;
                // line 48
                echo "            ";
            }
            // line 49
            echo "
            <div class=\"text-xs-center\">
                Total progress for this language:
                <small>(";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["translatedMessages"]) || array_key_exists("translatedMessages", $context) ? $context["translatedMessages"] : (function () { throw new RuntimeError('Variable "translatedMessages" does not exist.', 52, $this->source); })()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["totalMessages"]) || array_key_exists("totalMessages", $context) ? $context["totalMessages"] : (function () { throw new RuntimeError('Variable "totalMessages" does not exist.', 52, $this->source); })()), "html", null, true);
            echo ")</small>
                <b>";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new RuntimeError('Variable "pg" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "%</b>
            </div>
            ";
            // line 55
            echo twig_call_macro($macros["macro"], "macro_progress", [(isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new RuntimeError('Variable "pg" does not exist.', 55, $this->source); })()), "total-progressbar"], 55, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cataloge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function macro_progress($__pg__ = null, $__class__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "pg" => $__pg__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress"));

            // line 61
            echo "    ";
            if (-1 === twig_compare((isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new RuntimeError('Variable "pg" does not exist.', 61, $this->source); })()), 60)) {
                // line 62
                echo "        ";
                $context["type"] = "danger";
                // line 63
                echo "    ";
            } elseif (-1 === twig_compare((isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new RuntimeError('Variable "pg" does not exist.', 63, $this->source); })()), 80)) {
                // line 64
                echo "        ";
                $context["type"] = "warning";
                // line 65
                echo "    ";
            } else {
                // line 66
                echo "        ";
                $context["type"] = "success";
                // line 67
                echo "    ";
            }
            // line 68
            echo "    <div class=\"py-1\">
        <div class=\"progress\">
            <div class=\"progress-bar bg-";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "\" role=\"progressbar\" style=\"width: ";
            echo twig_escape_filter($this->env, (isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new RuntimeError('Variable "pg" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, (isset($context["pg"]) || array_key_exists("pg", $context) ? $context["pg"] : (function () { throw new RuntimeError('Variable "pg" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
        </div>
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
        return "@Translation/WebUI/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 70,  274 => 68,  271 => 67,  268 => 66,  265 => 65,  262 => 64,  259 => 63,  256 => 62,  253 => 61,  233 => 60,  222 => 57,  214 => 55,  209 => 53,  203 => 52,  198 => 49,  195 => 48,  192 => 47,  189 => 46,  186 => 45,  183 => 44,  180 => 43,  178 => 42,  175 => 41,  169 => 40,  166 => 39,  164 => 38,  157 => 34,  151 => 33,  144 => 29,  137 => 25,  133 => 24,  129 => 22,  126 => 21,  123 => 20,  120 => 19,  114 => 18,  111 => 17,  108 => 16,  105 => 15,  100 => 14,  97 => 13,  94 => 12,  89 => 11,  86 => 10,  84 => 9,  78 => 7,  74 => 6,  71 => 5,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@Translation/WebUI/base.html.twig\" %}
{% import _self as macro %}

{% block _translation_bundle_body %}
    <div class=\"container\">
        {% for cataloge in catalogues %}
            <h3 class=\"mt-3\">{{ localeMap[cataloge.locale] }}</h3>
            <table class=\"table domain-table\">
                {% set totalMessages = 0 %}
                {% set translatedMessages = 0 %}
                {% for domain,messages in cataloge.all|sort %}
                    {% set pg = 0 %}
                    {% set translated = 0 %}
                    {% for message in messages %}
                        {% if message != '' %}
                            {% set translated = translated + 1 %}
                        {% endif %}
                    {% endfor %}
                    {% if translated > 0 %}
                        {% set pg = (translated/messages|length*100)|round(2) %}
                    {% endif %}
                    <tr>
                        <td>
                            <a href=\"{{ path(\"translation_show\", {configName: configName, domain:domain, locale:cataloge.locale}) }}\">
                                {{ domain }}
                            </a>
                        </td>
                        <td class=\"progressbar-cell\">
                            {{ macro.progress(pg, \"\") }}
                        </td>
                        <td>
                            <div class=\"text-nowrap\">
                                <small>({{ translated }} / {{ messages|length }})</small>
                                <b>{{ pg }} %</b>
                            </div>
                        </td>
                    </tr>
                    {% set totalMessages = totalMessages + messages|length %}
                    {% set translatedMessages = translatedMessages + translated %}
                {% endfor %}
            </table>
            {% if totalMessages == 0 %}
                {% set pg = 100 %}
            {% elseif translatedMessages > 0 and totalMessages > 0 %}
                {% set pg = (translatedMessages/totalMessages*100)|round(2) %}
            {% else %}
                {% set pg = 0 %}
            {% endif %}

            <div class=\"text-xs-center\">
                Total progress for this language:
                <small>({{ translatedMessages }} / {{ totalMessages }})</small>
                <b>{{ pg }}%</b>
            </div>
            {{ macro.progress(pg, \"total-progressbar\") }}
        {% endfor %}
    </div>
{% endblock %}

{% macro progress(pg, class) %}
    {% if pg < 60 %}
        {% set type=\"danger\" %}
    {% elseif pg < 80 %}
        {% set type=\"warning\" %}
    {% else %}
        {% set type=\"success\" %}
    {% endif %}
    <div class=\"py-1\">
        <div class=\"progress\">
            <div class=\"progress-bar bg-{{ type }}\" role=\"progressbar\" style=\"width: {{ pg }}%\" aria-valuenow=\"{{ pg }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
        </div>
    </div>
{% endmacro %}
", "@Translation/WebUI/index.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/vendor/php-translation/symfony-bundle/Resources/views/WebUI/index.html.twig");
    }
}
