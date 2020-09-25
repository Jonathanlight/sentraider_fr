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

/* @EasyAdmin/welcome.html.twig */
class __TwigTemplate_e8dfb42dc69b39107542d5f023a0ac7aeb2a1d0c0d7ab2d590fd328d7b2cc7b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/welcome.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "@EasyAdmin/welcome.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo " Dashboad ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"content\">

        <div class=\"container\">
            <!-- Breadcrumbs-->
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                    <a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.dashboard.title"), "html", null, true);
        echo "</a>
                </li>
                <li class=\"breadcrumb-item active\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
        echo " </li>
            </ol>
            <!-- Icon Cards-->
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <h1> Tableau de bord </h1>
            </div>
            <div class=\"row mt-3\">
                <div class=\"col-6 alert-success\">
                    <span class=\"display-3\"> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countUser"]) || array_key_exists("countUser", $context) ? $context["countUser"] : (function () { throw new RuntimeError('Variable "countUser" does not exist.', 25, $this->source); })()), "value", [], "array", false, false, false, 25), "html", null, true);
        echo " </span> Utilisateurs
                </div>
                <div class=\"col-6 alert-dark\">
                    <span class=\"display-3\"> ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countHelp"]) || array_key_exists("countHelp", $context) ? $context["countHelp"] : (function () { throw new RuntimeError('Variable "countHelp" does not exist.', 28, $this->source); })()), "value", [], "array", false, false, false, 28), "html", null, true);
        echo " </span> Aides
                </div>
            </div>
            <div class=\"row mt-5\">
                <div class=\"col-12\">
                    <h3> Liste des villes </h3>

                    <ul class=\"list-group\">
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 37
            echo "                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <span class=\"display-4\">
                                <i class=\"fa fa-map\"></i>
                                ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "
                            </span>
                            <span class=\"badge badge-pill\">
                                <img class=\"img-thumbnail\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["city"], "imageFile"), "html", null, true);
            echo "\" style=\"width: 150px;\">
                            </span>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 47,  147 => 43,  141 => 40,  136 => 37,  132 => 36,  121 => 28,  115 => 25,  101 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}

{% block page_title %} Dashboad {% endblock %}

{% block content %}
    <div class=\"content\">

        <div class=\"container\">
            <!-- Breadcrumbs-->
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                    <a href=\"#\">{{ 'page.dashboard.title'|trans }}</a>
                </li>
                <li class=\"breadcrumb-item active\">{{ app.user.username }} </li>
            </ol>
            <!-- Icon Cards-->
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <h1> Tableau de bord </h1>
            </div>
            <div class=\"row mt-3\">
                <div class=\"col-6 alert-success\">
                    <span class=\"display-3\"> {{ countUser['value'] }} </span> Utilisateurs
                </div>
                <div class=\"col-6 alert-dark\">
                    <span class=\"display-3\"> {{ countHelp['value'] }} </span> Aides
                </div>
            </div>
            <div class=\"row mt-5\">
                <div class=\"col-12\">
                    <h3> Liste des villes </h3>

                    <ul class=\"list-group\">
                        {% for city in cities %}
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <span class=\"display-4\">
                                <i class=\"fa fa-map\"></i>
                                {{ city.name }}
                            </span>
                            <span class=\"badge badge-pill\">
                                <img class=\"img-thumbnail\" src=\"{{ vich_uploader_asset(city, 'imageFile') }}\" style=\"width: 150px;\">
                            </span>
                        </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endblock content %}
", "@EasyAdmin/welcome.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/templates/bundles/EasyAdminBundle/welcome.html.twig");
    }
}
