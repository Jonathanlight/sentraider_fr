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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_025111b1881cc484fbc620d5b2b82332c6f0c9549353a5894539e7ebf7e9a93c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate((((isset($context["ea"]) || array_key_exists("ea", $context))) ? (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 5)) : ("@EasyAdmin/page/login_minimal.html.twig")), "@EasyAdmin/page/login.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        // line 6
        $context["__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393"] = (((isset($context["ea"]) || array_key_exists("ea", $context))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6)) : ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context))) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo "page-login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, (((isset($context["page_title"]) || array_key_exists("page_title", $context))) ? ((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 9, $this->source); })())) : ((((isset($context["ea"]) || array_key_exists("ea", $context))) ? (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 9, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 9)) : ("")))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 12
        echo "    ";
        $context["page_title"] =         $this->renderBlock("page_title", $context, $blocks);
        // line 13
        echo "    ";
        $context["_username_label"] = (((isset($context["username_label"]) || array_key_exists("username_label", $context))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["username_label"]) || array_key_exists("username_label", $context) ? $context["username_label"] : (function () { throw new RuntimeError('Variable "username_label" does not exist.', 13, $this->source); })()), [],         // line 6
(isset($context["__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393"]) || array_key_exists("__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393", $context) ? $context["__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393"] : (function () { throw new RuntimeError('Variable "__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 14
        echo "    ";
        $context["_password_label"] = (((isset($context["password_label"]) || array_key_exists("password_label", $context))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["password_label"]) || array_key_exists("password_label", $context) ? $context["password_label"] : (function () { throw new RuntimeError('Variable "password_label" does not exist.', 14, $this->source); })()), [],         // line 6
(isset($context["__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393"]) || array_key_exists("__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393", $context) ? $context["__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393"] : (function () { throw new RuntimeError('Variable "__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 15
        echo "    ";
        $context["_sign_in_label"] = (((isset($context["sign_in_label"]) || array_key_exists("sign_in_label", $context))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["sign_in_label"]) || array_key_exists("sign_in_label", $context) ? $context["sign_in_label"] : (function () { throw new RuntimeError('Variable "sign_in_label" does not exist.', 15, $this->source); })()), [],         // line 6
(isset($context["__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393"]) || array_key_exists("__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393", $context) ? $context["__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393"] : (function () { throw new RuntimeError('Variable "__internal_20e1f7eb00bb50a700cbff63f9e55da7091138c2a6a6378b02e1787475c88393" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 16
        echo "
    <div class=\"login-wrapper\">
        <header class=\"main-header mb-4\">
            <div id=\"header-logo\">
                ";
        // line 20
        $this->displayBlock('header_logo', $context, $blocks);
        // line 33
        echo "            </div>
        </header>

        ";
        // line 36
        if ((((isset($context["error"]) || array_key_exists("error", $context))) ? (_twig_default_filter((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), false)) : (false))) {
            // line 37
            echo "            <div class=\"w-100 alert alert-danger\">
                ";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "messageKey", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "messageData", [], "any", false, false, false, 38), "security"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 41
        echo "
        <section class=\"content\">
            <form method=\"post\" action=\"";
        // line 43
        echo twig_escape_filter($this->env, (((isset($context["action"]) || array_key_exists("action", $context))) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 43, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\">
                ";
        // line 44
        if ((((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context))) ? (_twig_default_filter((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context) ? $context["csrf_token_intention"] : (function () { throw new RuntimeError('Variable "csrf_token_intention" does not exist.', 44, $this->source); })()), false)) : (false))) {
            // line 45
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context) ? $context["csrf_token_intention"] : (function () { throw new RuntimeError('Variable "csrf_token_intention" does not exist.', 45, $this->source); })())), "html", null, true);
            echo "\">
                ";
        }
        // line 47
        echo "
                <input type=\"hidden\" name=\"";
        // line 48
        echo twig_escape_filter($this->env, (((isset($context["target_path_parameter"]) || array_key_exists("target_path_parameter", $context))) ? (_twig_default_filter((isset($context["target_path_parameter"]) || array_key_exists("target_path_parameter", $context) ? $context["target_path_parameter"] : (function () { throw new RuntimeError('Variable "target_path_parameter" does not exist.', 48, $this->source); })()), "_target_path")) : ("_target_path")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (((isset($context["target_path"]) || array_key_exists("target_path", $context))) ? (_twig_default_filter((isset($context["target_path"]) || array_key_exists("target_path", $context) ? $context["target_path"] : (function () { throw new RuntimeError('Variable "target_path" does not exist.', 48, $this->source); })()), (((isset($context["ea"]) || array_key_exists("ea", $context))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 48, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 48))) : ("/")))) : ((((isset($context["ea"]) || array_key_exists("ea", $context))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 48, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 48))) : ("/")))), "html", null, true);
        echo "\" />

                <div class=\"form-group field-text\">
                    <label for=\"username\" class=\"sr-only form-control-label required\">";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["_username_label"]) || array_key_exists("_username_label", $context) ? $context["_username_label"] : (function () { throw new RuntimeError('Variable "_username_label" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "</label>
                    <div class=\"form-widget form-widget-with-icon\">
                        <i class=\"fa fa-fw fa-user\"></i>
                        <input type=\"text\" id=\"username\" name=\"";
        // line 54
        echo twig_escape_filter($this->env, (((isset($context["username_parameter"]) || array_key_exists("username_parameter", $context))) ? (_twig_default_filter((isset($context["username_parameter"]) || array_key_exists("username_parameter", $context) ? $context["username_parameter"] : (function () { throw new RuntimeError('Variable "username_parameter" does not exist.', 54, $this->source); })()), "_username")) : ("_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["_username_label"]) || array_key_exists("_username_label", $context) ? $context["_username_label"] : (function () { throw new RuntimeError('Variable "_username_label" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (((isset($context["last_username"]) || array_key_exists("last_username", $context))) ? (_twig_default_filter((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 54, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" required autofocus>
                    </div>
                </div>

                <div class=\"form-group field-password\">
                    <label for=\"password\" class=\"sr-only form-control-label required\">";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["_password_label"]) || array_key_exists("_password_label", $context) ? $context["_password_label"] : (function () { throw new RuntimeError('Variable "_password_label" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "</label>
                    <div class=\"form-widget form-widget-with-icon\">
                        <i class=\"fa fa-fw fa-lock\"></i>
                        <input type=\"password\" id=\"password\" name=\"";
        // line 62
        echo twig_escape_filter($this->env, (((isset($context["password_parameter"]) || array_key_exists("password_parameter", $context))) ? (_twig_default_filter((isset($context["password_parameter"]) || array_key_exists("password_parameter", $context) ? $context["password_parameter"] : (function () { throw new RuntimeError('Variable "password_parameter" does not exist.', 62, $this->source); })()), "_password")) : ("_password")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["_password_label"]) || array_key_exists("_password_label", $context) ? $context["_password_label"] : (function () { throw new RuntimeError('Variable "_password_label" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "\" required>
                    </div>
                </div>

                <div class=\"form-group field-button\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"this.form.submit(); this.disabled=true;\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["_sign_in_label"]) || array_key_exists("_sign_in_label", $context) ? $context["_sign_in_label"] : (function () { throw new RuntimeError('Variable "_sign_in_label" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "</button>
                </div>
            </form>
        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 21
        echo "                    ";
        if ((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "                        ";
            if ((isset($context["ea"]) || array_key_exists("ea", $context))) {
                // line 23
                echo "                            <a class=\"logo ";
                echo ((1 === twig_compare(twig_length_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 23, $this->source); })())), 14)) ? ("logo-long") : (""));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, strip_tags((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 23, $this->source); })())), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 23, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 23));
                echo "\">
                                ";
                // line 24
                echo (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 24, $this->source); })());
                echo "
                            </a>
                        ";
            } else {
                // line 27
                echo "                            <div class=\"logo ";
                echo ((1 === twig_compare(twig_length_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 27, $this->source); })())), 14)) ? ("logo-long") : (""));
                echo "\">
                                ";
                // line 28
                echo (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 28, $this->source); })());
                echo "
                            </div>
                        ";
            }
            // line 31
            echo "                    ";
        }
        // line 32
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 32,  269 => 31,  263 => 28,  258 => 27,  252 => 24,  243 => 23,  240 => 22,  237 => 21,  227 => 20,  211 => 67,  201 => 62,  195 => 59,  183 => 54,  177 => 51,  169 => 48,  166 => 47,  160 => 45,  158 => 44,  154 => 43,  150 => 41,  144 => 38,  141 => 37,  139 => 36,  134 => 33,  132 => 20,  126 => 16,  124 => 6,  122 => 15,  120 => 6,  118 => 14,  116 => 6,  114 => 13,  111 => 12,  101 => 11,  82 => 9,  63 => 8,  53 => 5,  51 => 6,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# This template checks for 'ea' variable existence because it can
   be used in a EasyAdmin Dashboard controller, where 'ea' is defined
   or from any other Symfony controller, where 'ea' is not defined #}
{% extends ea is defined ? ea.templatePath('layout') : '@EasyAdmin/page/login_minimal.html.twig' %}
{% trans_default_domain ea is defined ? ea.i18n.translationDomain : (translation_domain is defined ? translation_domain ?? 'messages') %}

{% block body_class 'page-login' %}
{% block page_title %}{{ page_title is defined ? page_title : (ea is defined ? ea.dashboardTitle : '') }}{% endblock %}

{% block wrapper_wrapper %}
    {% set page_title = block('page_title') %}
    {% set _username_label = username_label is defined ? username_label|trans : 'login_page.username'|trans({}, 'EasyAdminBundle') %}
    {% set _password_label = password_label is defined ? password_label|trans : 'login_page.password'|trans({}, 'EasyAdminBundle') %}
    {% set _sign_in_label = sign_in_label is defined ? sign_in_label|trans : 'login_page.sign_in'|trans({}, 'EasyAdminBundle') %}

    <div class=\"login-wrapper\">
        <header class=\"main-header mb-4\">
            <div id=\"header-logo\">
                {% block header_logo %}
                    {% if page_title %}
                        {% if ea is defined %}
                            <a class=\"logo {{ page_title|length > 14 ? 'logo-long' }}\" title=\"{{ page_title|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                {{ page_title|raw }}
                            </a>
                        {% else %}
                            <div class=\"logo {{ page_title|length > 14 ? 'logo-long' }}\">
                                {{ page_title|raw }}
                            </div>
                        {% endif %}
                    {% endif %}
                {% endblock header_logo %}
            </div>
        </header>

        {% if error|default(false) %}
            <div class=\"w-100 alert alert-danger\">
                {{ error.messageKey|trans(error.messageData, 'security') }}
            </div>
        {% endif %}

        <section class=\"content\">
            <form method=\"post\" action=\"{{ action|default('') }}\">
                {% if csrf_token_intention|default(false) %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(csrf_token_intention) }}\">
                {% endif %}

                <input type=\"hidden\" name=\"{{ target_path_parameter|default('_target_path') }}\" value=\"{{ target_path|default(ea is defined ? path(ea.dashboardRouteName) : '/') }}\" />

                <div class=\"form-group field-text\">
                    <label for=\"username\" class=\"sr-only form-control-label required\">{{ _username_label }}</label>
                    <div class=\"form-widget form-widget-with-icon\">
                        <i class=\"fa fa-fw fa-user\"></i>
                        <input type=\"text\" id=\"username\" name=\"{{ username_parameter|default('_username') }}\" class=\"form-control\" placeholder=\"{{ _username_label }}\" value=\"{{ last_username|default('') }}\" required autofocus>
                    </div>
                </div>

                <div class=\"form-group field-password\">
                    <label for=\"password\" class=\"sr-only form-control-label required\">{{ _password_label }}</label>
                    <div class=\"form-widget form-widget-with-icon\">
                        <i class=\"fa fa-fw fa-lock\"></i>
                        <input type=\"password\" id=\"password\" name=\"{{ password_parameter|default('_password') }}\" class=\"form-control\" placeholder=\"{{ _password_label }}\" required>
                    </div>
                </div>

                <div class=\"form-group field-button\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"this.form.submit(); this.disabled=true;\">{{ _sign_in_label }}</button>
                </div>
            </form>
        </section>
    </div>
{% endblock %}
", "@EasyAdmin/page/login.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/templates/bundles/EasyAdminBundle/page/login.html.twig");
    }
}
