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

/* @EasyAdmin/crud/includes/_filters_modal.html.twig */
class __TwigTemplate_3ff85a507f6e7f029092d8ba2d8b8fe266691572f817950e5e2d11aa46febf23 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_filters_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_filters_modal.html.twig"));

        // line 1
        echo "<div id=\"modal-filters\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-sm btn-secondary\" id=\"modal-clear-button\" formtarget=\"_self\">
                    <i class=\"fa fa-close\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.clear", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                </button>
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                </h5>
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-sm btn-primary\" id=\"modal-apply-button\" formtarget=\"_self\">
                    <i class=\"fa fa-check\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.apply", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                </button>
            </div>
            <div class=\"modal-body p-0\">
                ";
        // line 17
        echo "                ";
        // line 18
        echo "            </div>
        </div>
    </div>
</div>
<script>
    const filterModal = document.querySelector('#modal-filters');

    document.querySelector('#modal-clear-button').addEventListener('click', function() {
        filterModal.querySelectorAll('.filter-field').forEach(filterField => {
            filterField.remove();
        });

        filterModal.querySelector('form').submit();
    });

    document.querySelector('#modal-apply-button').addEventListener('click', function() {
        filterModal.querySelectorAll('.filter-checkbox:not(:checked)').forEach(notAppliedFilter => {
            notAppliedFilter.closest('.filter-field').remove();
        });
        filterModal.querySelector('form').submit();
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/includes/_filters_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  69 => 17,  62 => 12,  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modal-filters\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-sm btn-secondary\" id=\"modal-clear-button\" formtarget=\"_self\">
                    <i class=\"fa fa-close\"></i> {{ 'filter.button.clear'|trans(domain = 'EasyAdminBundle') }}
                </button>
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-filter fa-fw\"></i> {{ 'filter.title'|trans(domain = 'EasyAdminBundle') }}
                </h5>
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-sm btn-primary\" id=\"modal-apply-button\" formtarget=\"_self\">
                    <i class=\"fa fa-check\"></i> {{ 'filter.button.apply'|trans(domain = 'EasyAdminBundle') }}
                </button>
            </div>
            <div class=\"modal-body p-0\">
                {# The filters form will be loaded via AJAX for better performance #}
                {# See @EasyAdmin/default/filters.html.twig template #}
            </div>
        </div>
    </div>
</div>
<script>
    const filterModal = document.querySelector('#modal-filters');

    document.querySelector('#modal-clear-button').addEventListener('click', function() {
        filterModal.querySelectorAll('.filter-field').forEach(filterField => {
            filterField.remove();
        });

        filterModal.querySelector('form').submit();
    });

    document.querySelector('#modal-apply-button').addEventListener('click', function() {
        filterModal.querySelectorAll('.filter-checkbox:not(:checked)').forEach(notAppliedFilter => {
            notAppliedFilter.closest('.filter-field').remove();
        });
        filterModal.querySelector('form').submit();
    });
</script>
", "@EasyAdmin/crud/includes/_filters_modal.html.twig", "/Users/jonathan/Desktop/work/sentraider_fr/app/symfony/templates/bundles/EasyAdminBundle/crud/includes/_filters_modal.html.twig");
    }
}
