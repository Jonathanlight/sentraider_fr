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

/* @Translation/WebUI/create.html.twig */
class __TwigTemplate_794deb29fd5dc86f50523dcfe6e52b2fb03218fdcf541eb8e5808b1d0dec8132 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Translation/WebUI/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Translation/WebUI/create.html.twig"));

        // line 1
        echo "<div class=\"message row\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 1, $this->source); })()), "key", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <div class=\"col-md-6 col-xs-12\">
        <a class=\"message-key\" href=\"#";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 3, $this->source); })()), "key", [], "any", false, false, false, 3), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 3, $this->source); })()), "key", [], "any", false, false, false, 3), "html", null, true);
        echo "</a>
        <textarea
            class=\"message-textarea\"
            data-key=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 6, $this->source); })()), "key", [], "any", false, false, false, 6), "html", null, true);
        echo "\"
            onchange=\"editTranslation(this)\"
        >";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 8, $this->source); })()), "translation", [], "any", false, false, false, 8), "html", null, true);
        echo "</textarea>
        <div class=\"ajax-result\"></div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Translation/WebUI/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  57 => 6,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"message row\" id=\"{{ message.key }}\">
    <div class=\"col-md-6 col-xs-12\">
        <a class=\"message-key\" href=\"#{{ message.key }}\">{{ message.key }}</a>
        <textarea
            class=\"message-textarea\"
            data-key=\"{{ message.key }}\"
            onchange=\"editTranslation(this)\"
        >{{ message.translation }}</textarea>
        <div class=\"ajax-result\"></div>
    </div>
</div>
", "@Translation/WebUI/create.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/vendor/php-translation/symfony-bundle/Resources/views/WebUI/create.html.twig");
    }
}
