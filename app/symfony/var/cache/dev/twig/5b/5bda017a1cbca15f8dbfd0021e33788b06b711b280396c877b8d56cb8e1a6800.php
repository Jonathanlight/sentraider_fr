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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_e4cef120dfa756f1ded23e4dab555116227a5a48d341e008c6d98a5e5b1fb008 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'global_actions' => [$this, 'block_global_actions'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'filters' => [$this, 'block_filters'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        // line 5
        $context["__internal_05cdadd13bea799bd27a04e0f7219b5fbe68a6783733c67530c9c07b586f816b"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 8
        $context["has_batch_actions"] = ((false && (isset($context["batch_form"]) || array_key_exists("batch_form", $context))) && 1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 8, $this->source); })()), "crud", [], "any", false, false, false, 8), "actions", [], "any", false, false, false, 8), "batchActions", [], "any", false, false, false, 8)), 0));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        ((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 10, $this->source); })())), 0)) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 10, $this->source); })())), "name", [], "any", false, false, false, 10)), "html", null, true))) : (print ("")));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("index" . ((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 11, $this->source); })())), 0)) ? ((" index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 11, $this->source); })())), "name", [], "any", false, false, false, 11))) : (""))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        $context["default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 15, $this->source); })()), "crud", [], "any", false, false, false, 15), "defaultPageTitle", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 15, $this->source); })()), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15), "EasyAdminBundle");
        // line 16
        echo "        ";
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 16, $this->source); })()), "crud", [], "any", false, false, false, 16), "customPageTitle", [], "any", false, false, false, 16))) ? ((isset($context["default_title"]) || array_key_exists("default_title", $context) ? $context["default_title"] : (function () { throw new RuntimeError('Variable "default_title" does not exist.', 16, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 16, $this->source); })()), "crud", [], "any", false, false, false, 16), "customPageTitle", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 16, $this->source); })()), "i18n", [], "any", false, false, false, 16), "translationParameters", [], "any", false, false, false, 16),         // line 5
(isset($context["__internal_05cdadd13bea799bd27a04e0f7219b5fbe68a6783733c67530c9c07b586f816b"]) || array_key_exists("__internal_05cdadd13bea799bd27a04e0f7219b5fbe68a6783733c67530c9c07b586f816b", $context) ? $context["__internal_05cdadd13bea799bd27a04e0f7219b5fbe68a6783733c67530c9c07b586f816b"] : (function () { throw new RuntimeError('Variable "__internal_05cdadd13bea799bd27a04e0f7219b5fbe68a6783733c67530c9c07b586f816b" does not exist.', 5, $this->source); })()))));
        $___internal_226b78e90b5f48fd7995a9ad942d0279f520dfdd2c1740a8ca28ea0b2ee0dce5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo twig_spaceless($___internal_226b78e90b5f48fd7995a9ad942d0279f520dfdd2c1740a8ca28ea0b2ee0dce5_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 21
        echo "    ";
        $this->displayBlock('global_actions', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["global_actions"]) || array_key_exists("global_actions", $context) ? $context["global_actions"] : (function () { throw new RuntimeError('Variable "global_actions" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 23
            echo "            ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 23), ["action" => $context["action"]], false);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 29
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 43
        echo "    ";
        // line 44
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "get", [0 => "sort"], "method", false, false, false, 44)));
        // line 45
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "get", [0 => "sort"], "method", false, false, false, 45));
        // line 46
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 47
        echo "    ";
        $context["has_footer"] = 0 !== twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 47, $this->source); })())), 0);
        // line 48
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 48, $this->source); })()), "crud", [], "any", false, false, false, 48), "isSearchEnabled", [], "any", false, false, false, 48);
        // line 49
        echo "    ";
        $context["has_filters"] = 1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 49, $this->source); })())), 0);
        // line 50
        echo "    ";
        $context["has_datagrid_tools"] = ((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 50, $this->source); })()) || (isset($context["has_filters"]) || array_key_exists("has_filters", $context) ? $context["has_filters"] : (function () { throw new RuntimeError('Variable "has_filters" does not exist.', 50, $this->source); })()));
        // line 51
        echo "
    ";
        // line 52
        if ((isset($context["has_datagrid_tools"]) || array_key_exists("has_datagrid_tools", $context) ? $context["has_datagrid_tools"] : (function () { throw new RuntimeError('Variable "has_datagrid_tools" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "        <div class=\"datagrid-header-tools\">

            <div class=\"col-12\">
                <div class=\"text-left p-2 \"></div>
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "session", [], "any", false, false, false, 57), "flashBag", [], "any", false, false, false, 57), "get", [0 => "success"], "method", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 58
                echo "                    <div class=\"alert alert-success\" role=\"alert\">
                        <i class=\"fa fa-clipboard-check\" style=\"color: white;font-size: 30px;\"></i> &nbsp; ";
                // line 59
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "session", [], "any", false, false, false, 63), "flashBag", [], "any", false, false, false, 63), "get", [0 => "error"], "method", false, false, false, 63));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 64
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        <i class=\"fa fa-ban\" style=\"color: white;font-size: 30px;\"></i> &nbsp; ";
                // line 65
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                <div class=\"text-left p-2 \"></div>
            </div>

            <div class=\"datagrid-search\">
                ";
            // line 72
            $this->displayBlock('search', $context, $blocks);
            // line 98
            echo "            </div>

            <div class=\"datagrid-filters\">
                ";
            // line 101
            $this->displayBlock('filters', $context, $blocks);
            // line 116
            echo "            </div>
        </div>
    ";
        }
        // line 119
        echo "
    <div class=\"content-panel\">
        <div class=\"content-panel-body with-rounded-top with-min-h-250 without-padding ";
        // line 121
        echo (( !(isset($context["has_footer"]) || array_key_exists("has_footer", $context) ? $context["has_footer"] : (function () { throw new RuntimeError('Variable "has_footer" does not exist.', 121, $this->source); })())) ? ("without-footer") : (""));
        echo "\">
            <table class=\"table datagrid with-rounded-top ";
        // line 122
        echo (( !(isset($context["has_footer"]) || array_key_exists("has_footer", $context) ? $context["has_footer"] : (function () { throw new RuntimeError('Variable "has_footer" does not exist.', 122, $this->source); })())) ? ("with-rounded-bottom") : (""));
        echo "\">
                <thead>
                ";
        // line 124
        $this->displayBlock('table_head', $context, $blocks);
        // line 153
        echo "                </thead>

                <tbody>
                ";
        // line 156
        $this->displayBlock('table_body', $context, $blocks);
        // line 214
        echo "                </tbody>
            </table>
        </div>

        ";
        // line 218
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 218, $this->source); })())), 0)) {
            // line 219
            echo "            <div class=\"content-panel-footer without-padding without-border\">
                ";
            // line 220
            $this->displayBlock('paginator', $context, $blocks);
            // line 223
            echo "            </div>
        ";
        }
        // line 225
        echo "    </div>

    ";
        // line 227
        $this->displayBlock('delete_form', $context, $blocks);
        // line 230
        echo "
    ";
        // line 231
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 231, $this->source); })())), 0)) {
            // line 232
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 73
        echo "                    ";
        if ((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 73, $this->source); })())) {
            // line 74
            echo "                        <div class=\"form-action form-action-search\">
                            <form method=\"get\">
                                ";
            // line 76
            $this->displayBlock('search_form', $context, $blocks);
            // line 94
            echo "                            </form>
                        </div>
                    ";
        }
        // line 97
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 77
        echo "                                    ";
        // line 78
        echo "                                    ";
        $context["query_parameters"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "query", [], "any", false, false, false, 78), "all", [], "any", false, false, false, 78), ["referrer" => null, "page" => 1]);
        // line 81
        echo "
                                    ";
        // line 84
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->flattenArray((isset($context["query_parameters"]) || array_key_exists("query_parameters", $context) ? $context["query_parameters"] : (function () { throw new RuntimeError('Variable "query_parameters" does not exist.', 84, $this->source); })())));
        foreach ($context['_seq'] as $context["paramName"] => $context["paramValue"]) {
            // line 85
            echo "                                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["paramName"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
            echo "\">
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['paramName'], $context['paramValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
                                    <div class=\"form-group\">
                                        <div class=\"form-widget\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 90
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 90), "get", [0 => "query"], "method", true, true, false, 90) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 90), "get", [0 => "query"], "method", false, false, false, 90)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 90), "get", [0 => "query"], "method", false, false, false, 90), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 90, $this->source); })()), "i18n", [], "any", false, false, false, 90), "translationParameters", [], "any", false, false, false, 90), "EasyAdminBundle"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        // line 102
        echo "                    ";
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 102, $this->source); })())), 0)) {
            // line 103
            echo "                        ";
            $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 103), "query", [], "any", false, true, false, 103), "get", [0 => "filters"], "method", true, true, false, 103)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 103), "query", [], "any", false, true, false, 103), "get", [0 => "filters"], "method", false, false, false, 103), [])) : ([])));
            // line 104
            echo "                        <div class=\"btn-group action-filters\">
                            <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getCrudUrlBuilder(), "setAction", [0 => "renderFilters"], "method", false, false, false, 105), "includeReferrer", [], "method", false, false, false, 105), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button ";
            echo (((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 105, $this->source); })())) ? ("action-filters-applied") : (""));
            echo "\" data-modal=\"#modal-filters\">
                                <i class=\"fa fa-filter fa-fw\"></i> ";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 106, $this->source); })()), "i18n", [], "any", false, false, false, 106), "translationParameters", [], "any", false, false, false, 106), "EasyAdminBundle"), "html", null, true);
            if ((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 106, $this->source); })())) {
                echo " <span class=\"text-primary\">(";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 106, $this->source); })())), "html", null, true);
                echo ")</span>";
            }
            // line 107
            echo "                            </a>
                            ";
            // line 108
            if ((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 108, $this->source); })())) {
                // line 109
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getCrudUrlBuilder(), "unset", [0 => "filters"], "method", false, false, false, 109), "html", null, true);
                echo "\" class=\"btn btn-secondary action-filters-reset\">
                                    <i class=\"fa fa-close\"></i>
                                </a>
                            ";
            }
            // line 113
            echo "                        </div>
                    ";
        }
        // line 115
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 125
        echo "                    <tr>
                        ";
        // line 126
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 126, $this->source); })())) {
            // line 127
            echo "                            <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                        ";
        }
        // line 129
        echo "
                        ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 130, $this->source); })())), "fields", [], "any", true, true, false, 130) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 130, $this->source); })())), "fields", [], "any", false, false, false, 130)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 130, $this->source); })())), "fields", [], "any", false, false, false, 130)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 131
            echo "                            ";
            $context["isSortingField"] = (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 131), (isset($context["sort_field_name"]) || array_key_exists("sort_field_name", $context) ? $context["sort_field_name"] : (function () { throw new RuntimeError('Variable "sort_field_name" does not exist.', 131, $this->source); })())) || (twig_in_filter("field-association", twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 131)) && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (isset($context["sort_field_name"]) || array_key_exists("sort_field_name", $context) ? $context["sort_field_name"] : (function () { throw new RuntimeError('Variable "sort_field_name" does not exist.', 131, $this->source); })())) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 131) . ".")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))));
            // line 132
            echo "                            ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 132, $this->source); })())) ? (((0 === twig_compare((isset($context["sort_order"]) || array_key_exists("sort_order", $context) ? $context["sort_order"] : (function () { throw new RuntimeError('Variable "sort_order" does not exist.', 132, $this->source); })()), "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 133
            echo "                            ";
            $context["column_icon"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 133, $this->source); })())) ? (((0 === twig_compare((isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new RuntimeError('Variable "nextSortDirection" does not exist.', 133, $this->source); })()), "DESC")) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 134
            echo "
                            <th class=\"";
            // line 135
            echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 135, $this->source); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 135)) ? ("field-virtual") : (""));
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 135), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 135, $this->source); })()), "i18n", [], "any", false, false, false, 135), "textDirection", [], "any", false, false, false, 135), "html", null, true);
            echo "\">
                                ";
            // line 136
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 136)) {
                // line 137
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getCrudUrlBuilder(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 137) => (isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new RuntimeError('Variable "nextSortDirection" does not exist.', 137, $this->source); })())]]), "includeReferrer", [], "method", false, false, false, 137), "html", null, true);
                echo "\">
                                        ";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 138);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, (isset($context["column_icon"]) || array_key_exists("column_icon", $context) ? $context["column_icon"] : (function () { throw new RuntimeError('Variable "column_icon" does not exist.', 138, $this->source); })()), "html", null, true);
                echo "\"></i>
                                    </a>
                                ";
            } else {
                // line 141
                echo "                                    <span>";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 141);
                echo "</span>
                                ";
            }
            // line 143
            echo "                            </th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "
                        ";
        // line 146
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 146, $this->source); })())), 0) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 146, $this->source); })())), "actions", [], "any", false, false, false, 146)))) {
            // line 147
            echo "                            <th ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 147, $this->source); })()), "crud", [], "any", false, false, false, 147), "showEntityActionsAsDropdown", [], "any", false, false, false, 147)) {
                echo "width=\"10px\"";
            }
            echo " dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 147, $this->source); })()), "i18n", [], "any", false, false, false, 147), "textDirection", [], "any", false, false, false, 147), "html", null, true);
            echo "\">
                                <span class=\"sr-only\">";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 148, $this->source); })()), "i18n", [], "any", false, false, false, 148), "translationParameters", [], "any", false, false, false, 148), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                            </th>
                        ";
        }
        // line 151
        echo "                    </tr>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 157
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 157, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 158
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 158)) {
                // line 159
                echo "                            ";
                $context["some_results_are_hidden"] = true;
                // line 160
                echo "                        ";
            } else {
                // line 161
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 161), "html", null, true);
                echo "\">
                                ";
                // line 162
                if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 162, $this->source); })())) {
                    // line 163
                    echo "                                    <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 163), "html", null, true);
                    echo "\"></td>
                                ";
                }
                // line 165
                echo "
                                ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 166));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 167
                    echo "                                    <td class=\"";
                    echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 167), (isset($context["sort_field_name"]) || array_key_exists("sort_field_name", $context) ? $context["sort_field_name"] : (function () { throw new RuntimeError('Variable "sort_field_name" does not exist.', 167, $this->source); })()))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 167), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 167), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 167, $this->source); })()), "i18n", [], "any", false, false, false, 167), "textDirection", [], "any", false, false, false, 167), "html", null, true);
                    echo "\">
                                        ";
                    // line 168
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 168), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                                    </td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "
                                ";
                // line 172
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 195
                echo "                            </tr>

                        ";
            }
            // line 198
            echo "                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 199
            echo "                        <tr>
                            <td class=\"no-results\" colspan=\"100\">
                                ";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 201, $this->source); })()), "i18n", [], "any", false, false, false, 201), "translationParameters", [], "any", false, false, false, 201), "EasyAdminBundle"), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "
                    ";
        // line 206
        if ((isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 206, $this->source); })())) {
            // line 207
            echo "                        <tr class=\"datagrid-row-empty\">
                            <td class=\"text-center\" colspan=\"";
            // line 208
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 208, $this->source); })())), "fields", [], "any", false, false, false, 208)) + 1), "html", null, true);
            echo "\">
                                <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                            </td>
                        </tr>
                    ";
        }
        // line 213
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        // line 173
        echo "                                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 173, $this->source); })()), "actions", [], "any", false, false, false, 173))) {
            // line 174
            echo "                                        <td class=\"actions\">
                                            ";
            // line 175
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 175, $this->source); })()), "crud", [], "any", false, false, false, 175), "showEntityActionsAsDropdown", [], "any", false, false, false, 175)) {
                // line 176
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 176, $this->source); })()), "actions", [], "any", false, false, false, 176));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 177
                    echo "                                                    ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 177), ["action" => $context["action"], "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 177, $this->source); })()), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 177, $this->source); })()), "crud", [], "any", false, false, false, 177), "showEntityActionsAsDropdown", [], "any", false, false, false, 177)], false);
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "                                            ";
            } else {
                // line 180
                echo "                                                <div class=\"dropdown dropdown-actions\">
                                                    <a class=\"dropdown-toggle btn btn-secondary btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <i class=\"fa fa-fw fa-ellipsis-h\"></i>
                                                    </a>

                                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                                        ";
                // line 186
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 186, $this->source); })()), "actions", [], "any", false, false, false, 186));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 187
                    echo "                                                            ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 187), ["action" => $context["action"], "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 187, $this->source); })()), "crud", [], "any", false, false, false, 187), "showEntityActionsAsDropdown", [], "any", false, false, false, 187)], false);
                    echo "
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "                                                    </div>
                                                </div>
                                            ";
            }
            // line 192
            echo "                                        </td>
                                    ";
        }
        // line 194
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 220
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        // line 221
        echo "                    ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 221, $this->source); })()), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 221));
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 228
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 236
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 237
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            const customSwitches = document.querySelectorAll('td.field-boolean .custom-control.custom-switch input[type=\"checkbox\"]');
            for (i = 0; i < customSwitches.length; i++) {
                customSwitches[i].addEventListener('change', function () {
                    const customSwitch = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const fieldName = this.closest('.custom-switch').dataset.fieldname;

                    const toggleUrl = \"";
        // line 249
        echo twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getCrudUrlBuilder(), "setAction", [0 => "edit"], "method", false, false, false, 249);
        echo "\"
                        + \"&entityId=\" + this.closest('tr').dataset.id
                        + \"&fieldName=\" + fieldName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        customSwitch.checked = oldValue;
                        customSwitch.disabled = true;
                        customSwitch.closest('.custom-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__entityId_placeholder__', id));
                        deleteForm.trigger('submit');
                    });
            });

            ";
        // line 280
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 280, $this->source); })())), 0)) {
            // line 281
            echo "            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            var setInnerHTML = function(element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach(oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function(event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({ backdrop: true, keyboard: true });
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            ";
        }
        // line 311
        echo "

            ";
        // line 313
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 313, $this->source); })())) {
            // line 314
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            \$('button[name=\"batch_form[name]\"].ask-confirm-batch-button').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                \$('#modal-batch-action').modal({ backdrop : true, keyboard : true })
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');
                    });
            });
            ";
        }
        // line 363
        echo "        });
    </script>

    ";
        // line 366
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 366, $this->source); })()), "request", [], "any", false, false, false, 366), "get", [0 => "query"], "method", false, false, false, 366))) {
            // line 367
            echo "        <script type=\"text/javascript\">
            const search_query = \"";
            // line 368
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 368), "query", [], "any", true, true, false, 368)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 368), "query", [], "any", false, false, false, 368), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([search_query], search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1066 => 368,  1063 => 367,  1061 => 366,  1056 => 363,  1005 => 314,  1003 => 313,  999 => 311,  967 => 281,  965 => 280,  931 => 249,  915 => 237,  905 => 236,  892 => 228,  882 => 227,  869 => 221,  859 => 220,  849 => 194,  845 => 192,  840 => 189,  831 => 187,  827 => 186,  819 => 180,  816 => 179,  807 => 177,  802 => 176,  800 => 175,  797 => 174,  794 => 173,  784 => 172,  774 => 213,  767 => 209,  763 => 208,  760 => 207,  758 => 206,  755 => 205,  745 => 201,  741 => 199,  728 => 198,  723 => 195,  721 => 172,  718 => 171,  709 => 168,  698 => 167,  694 => 166,  691 => 165,  685 => 163,  683 => 162,  678 => 161,  675 => 160,  672 => 159,  669 => 158,  650 => 157,  640 => 156,  629 => 151,  623 => 148,  614 => 147,  612 => 146,  609 => 145,  602 => 143,  596 => 141,  588 => 138,  583 => 137,  581 => 136,  571 => 135,  568 => 134,  565 => 133,  562 => 132,  559 => 131,  555 => 130,  552 => 129,  548 => 127,  546 => 126,  543 => 125,  533 => 124,  523 => 115,  519 => 113,  511 => 109,  509 => 108,  506 => 107,  499 => 106,  493 => 105,  490 => 104,  487 => 103,  484 => 102,  474 => 101,  458 => 90,  453 => 87,  442 => 85,  437 => 84,  434 => 81,  431 => 78,  429 => 77,  419 => 76,  409 => 97,  404 => 94,  402 => 76,  398 => 74,  395 => 73,  385 => 72,  371 => 232,  369 => 231,  366 => 230,  364 => 227,  360 => 225,  356 => 223,  354 => 220,  351 => 219,  349 => 218,  343 => 214,  341 => 156,  336 => 153,  334 => 124,  329 => 122,  325 => 121,  321 => 119,  316 => 116,  314 => 101,  309 => 98,  307 => 72,  301 => 68,  292 => 65,  289 => 64,  285 => 63,  282 => 62,  273 => 59,  270 => 58,  266 => 57,  260 => 53,  258 => 52,  255 => 51,  252 => 50,  249 => 49,  246 => 48,  243 => 47,  240 => 46,  237 => 45,  234 => 44,  232 => 43,  222 => 42,  208 => 29,  198 => 28,  188 => 25,  179 => 23,  174 => 22,  154 => 21,  144 => 20,  134 => 14,  131 => 5,  129 => 16,  127 => 15,  125 => 14,  115 => 13,  96 => 11,  77 => 10,  67 => 4,  65 => 8,  63 => 5,  50 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entities \\EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityDtoCollection #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% extends ea.templatePath('layout') %}
{% trans_default_domain ea.i18n.translationDomain %}

{# TODO: change this when reenabling batch actions #}
{% set has_batch_actions = false and batch_form is defined and ea.crud.actions.batchActions|length > 0 %}

{% block body_id entities|length > 0 ? 'ea-index-' ~ entities|first.name : '' %}
{% block body_class 'index' ~ (entities|length > 0 ? ' index-' ~ entities|first.name : '') %}

{% block content_title %}
    {%- apply spaceless -%}
        {% set default_title = ea.crud.defaultPageTitle|trans(ea.i18n.translationParameters, 'EasyAdminBundle') %}
        {{ ea.crud.customPageTitle is null ? default_title|raw : ea.crud.customPageTitle|trans(ea.i18n.translationParameters)|raw }}
    {%- endapply -%}
{% endblock %}

{% block page_actions %}
    {% block global_actions %}
        {% for action in global_actions %}
            {{ include(action.templatePath, { action: action }, with_context = false) }}
        {% endfor %}
    {% endblock global_actions %}
{% endblock page_actions %}

{% block content_header %}
    {{ parent() }}

    {# TODO:
    {% block batch_actions %}
        {% for batchAction in ea.crud.actions.batchActions %}
            {{ include(batchAction.templatePath, { action: batchAction }, with_context = false) }}
        {% endfor %}

        {{ include('@EasyAdmin/crud/includes/_batch_action_modal.html.twig', {}, with_context = false) }}
    {% endblock %}
    #}
{% endblock content_header %}

{% block main %}
    {# sort can be multiple; let's consider the sorting field the first one #}
    {% set sort_field_name = app.request.get('sort')|keys|first %}
    {% set sort_order = app.request.get('sort')|first %}
    {% set some_results_are_hidden = false %}
    {% set has_footer = entities|length != 0 %}
    {% set has_search = ea.crud.isSearchEnabled %}
    {% set has_filters = filters|length > 0 %}
    {% set has_datagrid_tools = has_search or has_filters %}

    {% if has_datagrid_tools %}
        <div class=\"datagrid-header-tools\">

            <div class=\"col-12\">
                <div class=\"text-left p-2 \"></div>
                {% for flashMessage in app.session.flashBag.get('success') %}
                    <div class=\"alert alert-success\" role=\"alert\">
                        <i class=\"fa fa-clipboard-check\" style=\"color: white;font-size: 30px;\"></i> &nbsp; {{ flashMessage }}
                    </div>
                {% endfor %}

                {% for flashMessage in app.session.flashBag.get('error') %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        <i class=\"fa fa-ban\" style=\"color: white;font-size: 30px;\"></i> &nbsp; {{ flashMessage }}
                    </div>
                {% endfor %}
                <div class=\"text-left p-2 \"></div>
            </div>

            <div class=\"datagrid-search\">
                {% block search %}
                    {% if has_search %}
                        <div class=\"form-action form-action-search\">
                            <form method=\"get\">
                                {% block search_form %}
                                    {# reset the referrer and page number whenever a new query is performed #}
                                    {% set query_parameters = ea.request.query.all|merge({
                                        referrer: null, page: 1,
                                    }) %}

                                    {# browsers remove the query string when submitting forms using GET;
                                       that's why all query string parameters are added as hidden form fields #}
                                    {% for paramName, paramValue in query_parameters|ea_flatten_array %}
                                        <input type=\"hidden\" name=\"{{ paramName }}\" value=\"{{ paramValue }}\">
                                    {% endfor %}

                                    <div class=\"form-group\">
                                        <div class=\"form-widget\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query') ?? '' }}\" placeholder=\"{{ 'action.search'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}\">
                                        </div>
                                    </div>
                                {% endblock %}
                            </form>
                        </div>
                    {% endif %}
                {% endblock search %}
            </div>

            <div class=\"datagrid-filters\">
                {% block filters %}
                    {% if filters|length > 0 %}
                        {% set applied_filters = ea.request.query.get('filters')|default([])|keys %}
                        <div class=\"btn-group action-filters\">
                            <a href=\"{{ ea_url().setAction('renderFilters').includeReferrer() }}\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button {{ applied_filters ? 'action-filters-applied' }}\" data-modal=\"#modal-filters\">
                                <i class=\"fa fa-filter fa-fw\"></i> {{ 'filter.title'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}{% if applied_filters %} <span class=\"text-primary\">({{ applied_filters|length }})</span>{% endif %}
                            </a>
                            {% if applied_filters %}
                                <a href=\"{{ ea_url().unset('filters') }}\" class=\"btn btn-secondary action-filters-reset\">
                                    <i class=\"fa fa-close\"></i>
                                </a>
                            {% endif %}
                        </div>
                    {% endif %}
                {% endblock filters %}
            </div>
        </div>
    {% endif %}

    <div class=\"content-panel\">
        <div class=\"content-panel-body with-rounded-top with-min-h-250 without-padding {{ not has_footer ? 'without-footer' }}\">
            <table class=\"table datagrid with-rounded-top {{ not has_footer ? 'with-rounded-bottom' }}\">
                <thead>
                {% block table_head %}
                    <tr>
                        {% if has_batch_actions %}
                            <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                        {% endif %}

                        {% for field in entities|first.fields ?? [] %}
                            {% set isSortingField = (field.property == sort_field_name) or ('field-association' in field.cssClass and sort_field_name starts with field.property ~ '.') %}
                            {% set nextSortDirection = isSortingField ? (sort_order == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                            {% set column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-arrow-up' : 'fa-arrow-down') : 'fa-sort' %}

                            <th class=\"{{ isSortingField ? 'sorted' }} {{ field.isVirtual ? 'field-virtual' }} text-{{ field.textAlign }}\" dir=\"{{ ea.i18n.textDirection }}\">
                                {% if field.isSortable %}
                                    <a href=\"{{ ea_url({ page: 1, sort: { (field.property): nextSortDirection } }).includeReferrer() }}\">
                                        {{ field.label|raw }} <i class=\"fa fa-fw {{ column_icon }}\"></i>
                                    </a>
                                {% else %}
                                    <span>{{ field.label|raw }}</span>
                                {% endif %}
                            </th>
                        {% endfor %}

                        {% if entities|length > 0 and entities|first.actions is not empty %}
                            <th {% if ea.crud.showEntityActionsAsDropdown %}width=\"10px\"{% endif %} dir=\"{{ ea.i18n.textDirection }}\">
                                <span class=\"sr-only\">{{ 'action.entity_actions'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}</span>
                            </th>
                        {% endif %}
                    </tr>
                {% endblock table_head %}
                </thead>

                <tbody>
                {% block table_body %}
                    {% for entity in entities %}
                        {% if not entity.isAccessible %}
                            {% set some_results_are_hidden = true %}
                        {% else %}
                            <tr data-id=\"{{ entity.primaryKeyValueAsString }}\">
                                {% if has_batch_actions %}
                                    <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"{{ entity.primaryKeyValue }}\"></td>
                                {% endif %}

                                {% for field in entity.fields %}
                                    <td class=\"{{ field.property == sort_field_name ? 'sorted' }} text-{{ field.textAlign }} {{ field.cssClass }}\" dir=\"{{ ea.i18n.textDirection }}\">
                                        {{ include(field.templatePath, { field: field, entity: entity }, with_context = false) }}
                                    </td>
                                {% endfor %}

                                {% block entity_actions %}
                                    {% if entity.actions is not empty %}
                                        <td class=\"actions\">
                                            {% if not ea.crud.showEntityActionsAsDropdown %}
                                                {% for action in entity.actions %}
                                                    {{ include(action.templatePath, { action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                                {% endfor %}
                                            {% else %}
                                                <div class=\"dropdown dropdown-actions\">
                                                    <a class=\"dropdown-toggle btn btn-secondary btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <i class=\"fa fa-fw fa-ellipsis-h\"></i>
                                                    </a>

                                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                                        {% for action in entity.actions %}
                                                            {{ include(action.templatePath, { action: action, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            {% endif %}
                                        </td>
                                    {% endif %}
                                {% endblock entity_actions %}
                            </tr>

                        {% endif %}
                    {% else %}
                        <tr>
                            <td class=\"no-results\" colspan=\"100\">
                                {{ 'datagrid.no_results'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}
                            </td>
                        </tr>
                    {% endfor %}

                    {% if some_results_are_hidden %}
                        <tr class=\"datagrid-row-empty\">
                            <td class=\"text-center\" colspan=\"{{ entities|first.fields|length + 1 }}\">
                                <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> {{ 'datagrid.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                            </td>
                        </tr>
                    {% endif %}
                {% endblock table_body %}
                </tbody>
            </table>
        </div>

        {% if entities|length > 0 %}
            <div class=\"content-panel-footer without-padding without-border\">
                {% block paginator %}
                    {{ include(ea.templatePath('crud/paginator')) }}
                {% endblock paginator %}
            </div>
        {% endif %}
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', with_context = false) }}
    {% endblock delete_form %}

    {% if filters|length > 0 %}
        {{ include('@EasyAdmin/crud/includes/_filters_modal.html.twig') }}
    {% endif %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            const customSwitches = document.querySelectorAll('td.field-boolean .custom-control.custom-switch input[type=\"checkbox\"]');
            for (i = 0; i < customSwitches.length; i++) {
                customSwitches[i].addEventListener('change', function () {
                    const customSwitch = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const fieldName = this.closest('.custom-switch').dataset.fieldname;

                    const toggleUrl = \"{{ ea_url().setAction('edit')|raw }}\"
                        + \"&entityId=\" + this.closest('tr').dataset.id
                        + \"&fieldName=\" + fieldName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        customSwitch.checked = oldValue;
                        customSwitch.disabled = true;
                        customSwitch.closest('.custom-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__entityId_placeholder__', id));
                        deleteForm.trigger('submit');
                    });
            });

            {% if filters|length > 0 %}
            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            var setInnerHTML = function(element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach(oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function(event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({ backdrop: true, keyboard: true });
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            {% endif %}


            {% if has_batch_actions %}
            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            \$('button[name=\"batch_form[name]\"].ask-confirm-batch-button').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                \$('#modal-batch-action').modal({ backdrop : true, keyboard : true })
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');
                    });
            });
            {% endif %}
        });
    </script>

    {% if app.request.get('query') is not empty %}
        <script type=\"text/javascript\">
            const search_query = \"{{ ea.search.query|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([search_query], search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "@EasyAdmin/crud/index.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/templates/bundles/EasyAdminBundle/crud/index.html.twig");
    }
}
