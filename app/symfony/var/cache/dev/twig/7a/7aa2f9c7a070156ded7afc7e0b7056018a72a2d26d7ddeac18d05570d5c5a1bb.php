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

/* @EasyAdmin/crud/includes/_select2_widget.html.twig */
class __TwigTemplate_c4df7df8096ff2f3e242c14cf07bd27d6403aa9f6aec4655c648596a9776499f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_select2_widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_select2_widget.html.twig"));

        // line 2
        $context["ea_select2_locales"] = [0 => "ar", 1 => "az", 2 => "bg", 3 => "ca", 4 => "cs", 5 => "da", 6 => "de", 7 => "el", 8 => "en", 9 => "es", 10 => "et", 11 => "eu", 12 => "fa", 13 => "fi", 14 => "fr", 15 => "gl", 16 => "he", 17 => "hi", 18 => "hr", 19 => "hu", 20 => "id", 21 => "is", 22 => "it", 23 => "ja", 24 => "km", 25 => "ko", 26 => "lt", 27 => "lv", 28 => "mk", 29 => "ms", 30 => "nb", 31 => "nl", 32 => "pl", 33 => "pt-BR", 34 => "pt", 35 => "ro", 36 => "ru", 37 => "sk", 38 => "sr-Cyrl", 39 => "sr", 40 => "sv", 41 => "th", 42 => "tr", 43 => "uk", 44 => "vi", 45 => "zh-CN", 46 => "zh-TW"];
        // line 3
        $context["ea_select2_locale"] = (((twig_get_attribute($this->env, $this->source, ($context["ea_select2_locales"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "i18n", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), [], "array", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea_select2_locales"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "i18n", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), [], "array", false, false, false, 3)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea_select2_locales"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "i18n", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), [], "array", false, false, false, 3)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea_select2_locales"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "i18n", [], "any", false, false, false, 3), "language", [], "any", false, false, false, 3), [], "array", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea_select2_locales"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "i18n", [], "any", false, false, false, 3), "language", [], "any", false, false, false, 3), [], "array", false, false, false, 3)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea_select2_locales"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "i18n", [], "any", false, false, false, 3), "language", [], "any", false, false, false, 3), [], "array", false, false, false, 3)) : ("en"))));
        // line 4
        echo "
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/easyadmin/select2/i18n/" . (isset($context["ea_select2_locale"]) || array_key_exists("ea_select2_locale", $context) ? $context["ea_select2_locale"] : (function () { throw new RuntimeError('Variable "ea_select2_locale" does not exist.', 5, $this->source); })())) . ".js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(function() {
        // Select2 widget is only enabled for the <select> elements which
        // explicitly ask for it

        function init() {
            \$('form select[data-widget=\"select2\"]').select2({
                theme: 'bootstrap',
                language: '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["ea_select2_locale"]) || array_key_exists("ea_select2_locale", $context) ? $context["ea_select2_locale"] : (function () { throw new RuntimeError('Variable "ea_select2_locale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "'
            });
        }

        \$(document).on('ea.collection.item-added', init);
        init();
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/includes/_select2_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  50 => 5,  47 => 4,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea_select2_locales = ['ar', 'az', 'bg', 'ca', 'cs', 'da', 'de', 'el', 'en', 'es', 'et', 'eu', 'fa', 'fi', 'fr', 'gl', 'he', 'hi', 'hr', 'hu', 'id', 'is', 'it', 'ja', 'km', 'ko', 'lt', 'lv', 'mk', 'ms', 'nb', 'nl', 'pl', 'pt-BR', 'pt', 'ro', 'ru', 'sk', 'sr-Cyrl', 'sr', 'sv', 'th', 'tr', 'uk', 'vi', 'zh-CN', 'zh-TW'] %}
{% set ea_select2_locale = ea_select2_locales[ea.i18n.locale] ?? ea_select2_locales[ea.i18n.language] ?? 'en' %}

<script src=\"{{ asset('bundles/easyadmin/select2/i18n/' ~ ea_select2_locale ~ '.js') }}\"></script>
<script type=\"text/javascript\">
    \$(function() {
        // Select2 widget is only enabled for the <select> elements which
        // explicitly ask for it

        function init() {
            \$('form select[data-widget=\"select2\"]').select2({
                theme: 'bootstrap',
                language: '{{ ea_select2_locale }}'
            });
        }

        \$(document).on('ea.collection.item-added', init);
        init();
    });
</script>
", "@EasyAdmin/crud/includes/_select2_widget.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/templates/bundles/EasyAdminBundle/crud/includes/_select2_widget.html.twig");
    }
}
