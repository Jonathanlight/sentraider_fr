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

/* @EasyAdmin/crud/field/text_editor.html.twig */
class __TwigTemplate_520792732f44ca5319fc86e4ea9eb7f23f2f539e62f912115f079800a6cdfa1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/text_editor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/text_editor.html.twig"));

        // line 4
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "crud", [], "any", false, false, false, 4), "currentAction", [], "any", false, false, false, 4), "detail")) {
            // line 5
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })()), "value", [], "any", false, false, false, 5);
            echo "
";
        } else {
            // line 7
            echo "    ";
            $context["html_id"] = ("ea-text-editor-" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "uniqueId", [], "any", false, false, false, 7));
            // line 8
            echo "    <a href=\"#\" data-toggle=\"modal\" data-target=\"#";
            echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "\">
        <i class=\"far fa-file-alt\"></i> ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.text_editor.view_content", [], "EasyAdminBundle"), "html", null, true);
            echo "
    </a>

    <div class=\"modal fade\" id=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 16, $this->source); })()), "label", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close", [], "EasyAdminBundle"), "html", null, true);
            echo "\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 22
            echo twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 22, $this->source); })()), "value", [], "any", false, false, false, 22);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/text_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  76 => 17,  72 => 16,  65 => 12,  59 => 9,  54 => 8,  51 => 7,  45 => 5,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var field \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% if ea.crud.currentAction == 'detail' %}
    {{ field.value|raw }}
{% else %}
    {% set html_id = 'ea-text-editor-' ~ field.uniqueId %}
    <a href=\"#\" data-toggle=\"modal\" data-target=\"#{{ html_id }}\">
        <i class=\"far fa-file-alt\"></i> {{ 'field.text_editor.view_content'|trans([], domain = 'EasyAdminBundle') }}
    </a>

    <div class=\"modal fade\" id=\"{{ html_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ field.label }}</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ 'action.close'|trans([], domain = 'EasyAdminBundle') }}\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ field.value|raw }}
                </div>
            </div>
        </div>
    </div>
{% endif %}
", "@EasyAdmin/crud/field/text_editor.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/templates/bundles/EasyAdminBundle/crud/field/text_editor.html.twig");
    }
}
