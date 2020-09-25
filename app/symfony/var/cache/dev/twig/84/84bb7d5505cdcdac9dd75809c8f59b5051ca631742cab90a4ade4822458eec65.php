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

/* base.html.twig */
class __TwigTemplate_7afcd9066fae8f7222e26177ba834d1beda0604c15a5dbf62916c23043d8c2ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico\">

    <!-- Custom fonts for this template -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/landing-page.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-light bg-light static-top\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn-primary btn-sm mt-3\" href=\"#\">Contact</a>
        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_login");
        echo "\" class=\"btn btn-success btn-sm mt-3 white\">
            EasyAdmin 3 Connexion
        </a>
    </div>
</nav>

<!-- Masthead -->
<header class=\"masthead text-white text-center\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-9 mx-auto\">
                <h1 class=\"mb-5\">  ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\MyExtension']->cutStringTwig("Build a landing page for your business or project and generate more leads!"), "html", null, true);
        echo " </h1>
            </div>
            <div class=\"col-md-10 col-lg-8 col-xl-7 mx-auto\">
                <form>
                    <div class=\"form-row\">
                        <div class=\"col-12 col-md-9 mb-2 mb-md-0\">
                            <input type=\"email\" class=\"form-control form-control-lg\" placeholder=\"Enter your email...\">
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <button type=\"submit\" class=\"btn btn-block btn-lg btn-primary\">Sign up!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "

<!-- Footer -->
<footer class=\"footer bg-light\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 h-100 text-center text-lg-left my-auto\">
                <ul class=\"list-inline mb-2\">
                    <li class=\"list-inline-item\">
                        <a href=\"#\">About</a>
                    </li>
                    <li class=\"list-inline-item\">&sdot;</li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">Contact</a>
                    </li>
                    <li class=\"list-inline-item\">&sdot;</li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">Terms of Use</a>
                    </li>
                    <li class=\"list-inline-item\">&sdot;</li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">Privacy Policy</a>
                    </li>
                </ul>
                <p class=\"text-muted small mb-4 mb-lg-0\">&copy; Your Website 2020. All Rights Reserved.</p>
            </div>
            <div class=\"col-lg-6 h-100 text-center text-lg-right my-auto\">
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item mr-3\">
                        <a href=\"#\">
                            <i class=\"fab fa-facebook fa-2x fa-fw\"></i>
                        </a>
                    </li>
                    <li class=\"list-inline-item mr-3\">
                        <a href=\"#\">
                            <i class=\"fab fa-twitter-square fa-2x fa-fw\"></i>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">
                            <i class=\"fab fa-instagram fa-2x fa-fw\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js\"></script>
<script src=\"https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js\"></script>
";
        // line 118
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 118,  199 => 64,  187 => 119,  185 => 118,  130 => 65,  128 => 64,  107 => 46,  92 => 34,  88 => 33,  75 => 23,  68 => 19,  64 => 18,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico\">

    <!-- Custom fonts for this template -->
    <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/landing-page.min.css') }}\" rel=\"stylesheet\">

</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-light bg-light static-top\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <a href=\"{{ path('contact') }}\" class=\"btn btn-primary btn-sm mt-3\" href=\"#\">Contact</a>
        <a href=\"{{ path('admin_login') }}\" class=\"btn btn-success btn-sm mt-3 white\">
            EasyAdmin 3 Connexion
        </a>
    </div>
</nav>

<!-- Masthead -->
<header class=\"masthead text-white text-center\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-9 mx-auto\">
                <h1 class=\"mb-5\">  {{ cutString('Build a landing page for your business or project and generate more leads!') }} </h1>
            </div>
            <div class=\"col-md-10 col-lg-8 col-xl-7 mx-auto\">
                <form>
                    <div class=\"form-row\">
                        <div class=\"col-12 col-md-9 mb-2 mb-md-0\">
                            <input type=\"email\" class=\"form-control form-control-lg\" placeholder=\"Enter your email...\">
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <button type=\"submit\" class=\"btn btn-block btn-lg btn-primary\">Sign up!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

{% block body %}{% endblock %}


<!-- Footer -->
<footer class=\"footer bg-light\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 h-100 text-center text-lg-left my-auto\">
                <ul class=\"list-inline mb-2\">
                    <li class=\"list-inline-item\">
                        <a href=\"#\">About</a>
                    </li>
                    <li class=\"list-inline-item\">&sdot;</li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">Contact</a>
                    </li>
                    <li class=\"list-inline-item\">&sdot;</li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">Terms of Use</a>
                    </li>
                    <li class=\"list-inline-item\">&sdot;</li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">Privacy Policy</a>
                    </li>
                </ul>
                <p class=\"text-muted small mb-4 mb-lg-0\">&copy; Your Website 2020. All Rights Reserved.</p>
            </div>
            <div class=\"col-lg-6 h-100 text-center text-lg-right my-auto\">
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item mr-3\">
                        <a href=\"#\">
                            <i class=\"fab fa-facebook fa-2x fa-fw\"></i>
                        </a>
                    </li>
                    <li class=\"list-inline-item mr-3\">
                        <a href=\"#\">
                            <i class=\"fab fa-twitter-square fa-2x fa-fw\"></i>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">
                            <i class=\"fab fa-instagram fa-2x fa-fw\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js\"></script>
<script src=\"https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/templates/base.html.twig");
    }
}
