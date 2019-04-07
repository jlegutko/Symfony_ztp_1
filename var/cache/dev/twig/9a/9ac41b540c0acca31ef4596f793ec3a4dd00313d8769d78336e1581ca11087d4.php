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

/* default/_form_category_edit.html.twig */
class __TwigTemplate_8f04711ab01eedd16889a198ca6fc1c7160be12be4dfbf7a9c8ef7437d269742 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_form_category_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_form_category_edit.html.twig"));

        // line 1
        $this->loadTemplate("default/_form.html.twig", "default/_form_category_edit.html.twig", 1)->display(twig_array_merge($context, ["page_title" => "title.category_edit", "page_title_param" => ["%id%" => twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 3, $this->source); })()), "id", [])], "attr" => ["method" => "PUT", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_edit", ["id" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 6, $this->source); })()), "id", [])])], "back_to_list_path" => "category_index"]));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/_form_category_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  42 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'default/_form.html.twig' with {
    page_title: 'title.category_edit',
    page_title_param: {'%id%': category.id},
    attr: {
        method: 'PUT',
        action: url('category_edit', {'id': category.id}),
    },
    back_to_list_path: 'category_index',
} %}", "default/_form_category_edit.html.twig", "/home/jlegutko/PhpstormProjects/Symfony_ztp/app/templates/default/_form_category_edit.html.twig");
    }
}
