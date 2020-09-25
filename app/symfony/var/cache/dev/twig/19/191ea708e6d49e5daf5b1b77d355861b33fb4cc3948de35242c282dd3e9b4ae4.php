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

/* email/contact.html.twig */
class __TwigTemplate_2cbdaea1ee2d7686f2371619d6c35dbdbfda33ea94f5fde61ffec80a7228adeb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/contact.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Site</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style>
        .bg-1 {background-color: #0A7B0E;color: #ffffff;}
        .bg-2 {background-color: #fff;color: #000;}
        .bg-3 {background-color: #ffffff;color: #555555;}
        .container-fluid {padding-top: 0px;padding-bottom: 0px;}
        .img-icon{width: 100px;padding-top: 7px;}
        .border-nop{ border: none;text-align: left;}
        .sizefooter{padding: 15px;text-align:center;}
        .red{color:red; font-weight:bold;}
        .text-center{text-align:center;}
        .text-left{text-align:left;}
        .text-right{text-align:right;}
        .btnconfig{ background-color: #0A7B0E;color: white;padding: 15px 32px; text-align: center;text-decoration: none;display: inline-block;font-size: 16px;
            margin: .375rem;
            border: 0;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        }
    </style>
</head>
<body>
<div class=\"bg-2 text-center sizefooter\" style=\"border-bottom:5px #0a6704 solid;\">
    <div style=\"text-align: center;\">
        <img src=\"https://symfony.com/logos/symfony_black_03.png\" class=\"img-icon\" >
    </div>
</div>
<div class=\"container-fluid bg-3 text-left\" style=\"text-align:center;\">
    <p>Name: ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</p>
    <p>Email: ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</p>
    <p>Description:  ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " </p>
    <hr>
</div>
<div class=\"bg-1 sizefooter\">
    <p><a href=\"https://www.site.fr/\" style=\"font-size: 15px;color: black;\" target=\"_blank\" data-saferedirecturl=\"https://www.site.fr/\">https://www.<wbr>site.fr/</a></p>
    <p style=\"font-size: 13px;\">
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 36,  82 => 35,  78 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Site</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style>
        .bg-1 {background-color: #0A7B0E;color: #ffffff;}
        .bg-2 {background-color: #fff;color: #000;}
        .bg-3 {background-color: #ffffff;color: #555555;}
        .container-fluid {padding-top: 0px;padding-bottom: 0px;}
        .img-icon{width: 100px;padding-top: 7px;}
        .border-nop{ border: none;text-align: left;}
        .sizefooter{padding: 15px;text-align:center;}
        .red{color:red; font-weight:bold;}
        .text-center{text-align:center;}
        .text-left{text-align:left;}
        .text-right{text-align:right;}
        .btnconfig{ background-color: #0A7B0E;color: white;padding: 15px 32px; text-align: center;text-decoration: none;display: inline-block;font-size: 16px;
            margin: .375rem;
            border: 0;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        }
    </style>
</head>
<body>
<div class=\"bg-2 text-center sizefooter\" style=\"border-bottom:5px #0a6704 solid;\">
    <div style=\"text-align: center;\">
        <img src=\"https://symfony.com/logos/symfony_black_03.png\" class=\"img-icon\" >
    </div>
</div>
<div class=\"container-fluid bg-3 text-left\" style=\"text-align:center;\">
    <p>Name: {{ name }}</p>
    <p>Email: {{ email }}</p>
    <p>Description:  {{ description }} </p>
    <hr>
</div>
<div class=\"bg-1 sizefooter\">
    <p><a href=\"https://www.site.fr/\" style=\"font-size: 15px;color: black;\" target=\"_blank\" data-saferedirecturl=\"https://www.site.fr/\">https://www.<wbr>site.fr/</a></p>
    <p style=\"font-size: 13px;\">
</div>
</body>
</html>", "email/contact.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/templates/email/contact.html.twig");
    }
}
