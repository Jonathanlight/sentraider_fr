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

/* default/index.html.twig */
class __TwigTemplate_6a566ef65d16644b3fca9c0da8f4e23aa927fb10d4a1438a4d5295a070ca70f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Icons Grid -->
    <section class=\"features-icons bg-light text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"icon-screen-desktop m-auto text-primary\"></i>
                        </div>
                        <h3>Fully Responsive</h3>
                        <p class=\"lead mb-0\">This theme will look great on any device, no matter the size!</p>
                        <button class=\"btn btn-primary btn-block\"> ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\MyExtension']->formatPriceTwig(150, "€"), "html", null, true);
        echo " </button>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"icon-layers m-auto text-primary\"></i>
                        </div>
                        <h3>Bootstrap 4 Ready</h3>
                        <p class=\"lead mb-0\">Featuring the latest build of the new Bootstrap 4 framework!</p>
                        <button class=\"btn btn-secondary btn-block\"> ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\MyExtension']->formatPriceTwig(380, "€"), "html", null, true);
        echo " </button>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"icon-check m-auto text-primary\"></i>
                        </div>
                        <h3>Easy to Use</h3>
                        <p class=\"lead mb-0\">Ready to use with your own content, or customize the source files!</p>
                        <button class=\"btn btn-info btn-block\"> ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\MyExtension']->formatPriceTwig(850, "\$"), "html", null, true);
        echo " </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Showcases -->
    <section class=\"showcase\">
        <div class=\"container-fluid p-0\">
            <div class=\"row no-gutters\">

                <div class=\"col-lg-6 order-lg-2 text-white showcase-img\" style=\"background-image: url('img/bg-showcase-1.jpg');\"></div>
                <div class=\"col-lg-6 order-lg-1 my-auto showcase-text\">
                    <h2>Fully Responsive Design</h2>
                    <p class=\"lead mb-0\">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                </div>
            </div>
            <div class=\"row no-gutters\">
                <div class=\"col-lg-6 text-white showcase-img\" style=\"background-image: url('img/bg-showcase-2.jpg');\"></div>
                <div class=\"col-lg-6 my-auto showcase-text\">
                    <h2>Updated For Bootstrap 4</h2>
                    <p class=\"lead mb-0\">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
                </div>
            </div>
            <div class=\"row no-gutters\">
                <div class=\"col-lg-6 order-lg-2 text-white showcase-img\" style=\"background-image: url('img/bg-showcase-3.jpg');\"></div>
                <div class=\"col-lg-6 order-lg-1 my-auto showcase-text\">
                    <h2>Easy to Use &amp; Customize</h2>
                    <p class=\"lead mb-0\">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class=\"testimonials text-center bg-light\">
        <div class=\"container\">
            <h2 class=\"mb-5\">What people are saying...</h2>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"testimonial-item mx-auto mb-5 mb-lg-0\">
                        <img class=\"img-fluid rounded-circle mb-3\" src=\"img/testimonials-1.jpg\" alt=\"\">
                        <h5>Margaret E.</h5>
                        <p class=\"font-weight-light mb-0\">\"This is fantastic! Thanks so much guys!\"</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"testimonial-item mx-auto mb-5 mb-lg-0\">
                        <img class=\"img-fluid rounded-circle mb-3\" src=\"img/testimonials-2.jpg\" alt=\"\">
                        <h5>Fred S.</h5>
                        <p class=\"font-weight-light mb-0\">\"Bootstrap is amazing. I've been using it to create lots of super nice landing pages.\"</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"testimonial-item mx-auto mb-5 mb-lg-0\">
                        <img class=\"img-fluid rounded-circle mb-3\" src=\"img/testimonials-3.jpg\" alt=\"\">
                        <h5>Sarah W.</h5>
                        <p class=\"font-weight-light mb-0\">\"Thanks so much for making these free resources available to us!\"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class=\"call-to-action text-white text-center\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-9 mx-auto\">
                    <h2 class=\"mb-4\">Ready to get started? Sign up now!</h2>
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
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  114 => 27,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil !{% endblock %}

{% block body %}
    <!-- Icons Grid -->
    <section class=\"features-icons bg-light text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"icon-screen-desktop m-auto text-primary\"></i>
                        </div>
                        <h3>Fully Responsive</h3>
                        <p class=\"lead mb-0\">This theme will look great on any device, no matter the size!</p>
                        <button class=\"btn btn-primary btn-block\"> {{ 150|priceEuro('€') }} </button>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"icon-layers m-auto text-primary\"></i>
                        </div>
                        <h3>Bootstrap 4 Ready</h3>
                        <p class=\"lead mb-0\">Featuring the latest build of the new Bootstrap 4 framework!</p>
                        <button class=\"btn btn-secondary btn-block\"> {{ 380|priceEuro('€') }} </button>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"features-icons-item mx-auto mb-0 mb-lg-3\">
                        <div class=\"features-icons-icon d-flex\">
                            <i class=\"icon-check m-auto text-primary\"></i>
                        </div>
                        <h3>Easy to Use</h3>
                        <p class=\"lead mb-0\">Ready to use with your own content, or customize the source files!</p>
                        <button class=\"btn btn-info btn-block\"> {{ 850|priceEuro('\$') }} </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Showcases -->
    <section class=\"showcase\">
        <div class=\"container-fluid p-0\">
            <div class=\"row no-gutters\">

                <div class=\"col-lg-6 order-lg-2 text-white showcase-img\" style=\"background-image: url('img/bg-showcase-1.jpg');\"></div>
                <div class=\"col-lg-6 order-lg-1 my-auto showcase-text\">
                    <h2>Fully Responsive Design</h2>
                    <p class=\"lead mb-0\">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                </div>
            </div>
            <div class=\"row no-gutters\">
                <div class=\"col-lg-6 text-white showcase-img\" style=\"background-image: url('img/bg-showcase-2.jpg');\"></div>
                <div class=\"col-lg-6 my-auto showcase-text\">
                    <h2>Updated For Bootstrap 4</h2>
                    <p class=\"lead mb-0\">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
                </div>
            </div>
            <div class=\"row no-gutters\">
                <div class=\"col-lg-6 order-lg-2 text-white showcase-img\" style=\"background-image: url('img/bg-showcase-3.jpg');\"></div>
                <div class=\"col-lg-6 order-lg-1 my-auto showcase-text\">
                    <h2>Easy to Use &amp; Customize</h2>
                    <p class=\"lead mb-0\">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class=\"testimonials text-center bg-light\">
        <div class=\"container\">
            <h2 class=\"mb-5\">What people are saying...</h2>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"testimonial-item mx-auto mb-5 mb-lg-0\">
                        <img class=\"img-fluid rounded-circle mb-3\" src=\"img/testimonials-1.jpg\" alt=\"\">
                        <h5>Margaret E.</h5>
                        <p class=\"font-weight-light mb-0\">\"This is fantastic! Thanks so much guys!\"</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"testimonial-item mx-auto mb-5 mb-lg-0\">
                        <img class=\"img-fluid rounded-circle mb-3\" src=\"img/testimonials-2.jpg\" alt=\"\">
                        <h5>Fred S.</h5>
                        <p class=\"font-weight-light mb-0\">\"Bootstrap is amazing. I've been using it to create lots of super nice landing pages.\"</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"testimonial-item mx-auto mb-5 mb-lg-0\">
                        <img class=\"img-fluid rounded-circle mb-3\" src=\"img/testimonials-3.jpg\" alt=\"\">
                        <h5>Sarah W.</h5>
                        <p class=\"font-weight-light mb-0\">\"Thanks so much for making these free resources available to us!\"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class=\"call-to-action text-white text-center\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-9 mx-auto\">
                    <h2 class=\"mb-4\">Ready to get started? Sign up now!</h2>
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
    </section>
{% endblock %}
", "default/index.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/templates/default/index.html.twig");
    }
}
