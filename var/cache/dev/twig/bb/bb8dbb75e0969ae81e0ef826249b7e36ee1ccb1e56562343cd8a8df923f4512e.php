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

/* default/_form.html.twig */
class __TwigTemplate_474ce8be8e26f640ce08c62fc2de12693392c81b9ad5dbf77e9f2a527a65f3b2 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/_form.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        if ((isset($context["page_title_param"]) || array_key_exists("page_title_param", $context))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 4, $this->source); })()), (isset($context["page_title_param"]) || array_key_exists("page_title_param", $context) ? $context["page_title_param"] : (function () { throw new RuntimeError('Variable "page_title_param" does not exist.', 4, $this->source); })())), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 4, $this->source); })())), "html", null, true);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1>
        ";
        // line 10
        if ((isset($context["page_title_param"]) || array_key_exists("page_title_param", $context))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 10, $this->source); })()), (isset($context["page_title_param"]) || array_key_exists("page_title_param", $context) ? $context["page_title_param"] : (function () { throw new RuntimeError('Variable "page_title_param" does not exist.', 10, $this->source); })())), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 10, $this->source); })())), "html", null, true);
        }
        // line 11
        echo "    </h1>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["method" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "method", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "method", []), "POST")) : ("POST")), "action" => twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 13, $this->source); })()), "action", [])]);
        echo "
    ";
        // line 14
        if ((false == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vars", []), "valid", []))) {
            // line 15
            echo "        ";
            $this->loadTemplate("default/_single_flash_message.html.twig", "default/_form.html.twig", 15)->display(twig_array_merge($context, ["type" => "danger", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.form_error")]));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'widget');
        echo "
    <div class=\"form-group row float-sm-right\">
        <input type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (((isset($context["submit_label"]) || array_key_exists("submit_label", $context))) ? (_twig_default_filter((isset($context["submit_label"]) || array_key_exists("submit_label", $context) ? $context["submit_label"] : (function () { throw new RuntimeError('Variable "submit_label" does not exist.', 22, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"))), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
    </div>
    ";
        // line 24
        if ((((isset($context["back_to_list_path"]) || array_key_exists("back_to_list_path", $context))) ? (_twig_default_filter((isset($context["back_to_list_path"]) || array_key_exists("back_to_list_path", $context) ? $context["back_to_list_path"] : (function () { throw new RuntimeError('Variable "back_to_list_path" does not exist.', 24, $this->source); })()), false)) : (false))) {
            // line 25
            echo "        <div class=\"form-group row float-sm-left\">
            <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["back_to_list_path"]) || array_key_exists("back_to_list_path", $context) ? $context["back_to_list_path"] : (function () { throw new RuntimeError('Variable "back_to_list_path" does not exist.', 26, $this->source); })()));
            echo "\" class=\"btn btn-link\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back_to_list"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 31
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 31,  136 => 27,  132 => 26,  129 => 25,  127 => 24,  122 => 22,  116 => 20,  113 => 19,  110 => 15,  108 => 14,  104 => 13,  100 => 11,  94 => 10,  90 => 8,  81 => 7,  66 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if page_title_param is defined %}{{ page_title|trans(page_title_param) }}{% else %}{{ page_title|trans }}{% endif %}
{% endblock %}

{% block body %}

    <h1>
        {% if page_title_param is defined %}{{ page_title|trans(page_title_param) }}{% else %}{{ page_title|trans }}{% endif %}
    </h1>

    {{ form_start(form, { method: attr.method|default('POST'), action: attr.action }) }}
    {% if false == form.vars.valid %}
        {% include 'default/_single_flash_message.html.twig' with {
            type: 'danger',
            message: 'message.form_error'|trans,
        }%}
    {% endif %}
    {{ form_widget(form) }}
    <div class=\"form-group row float-sm-right\">
        <input type=\"submit\" value=\"{{ submit_label|default('action.save'|trans) }}\" class=\"btn btn-primary\" />
    </div>
    {% if back_to_list_path|default(false) %}
        <div class=\"form-group row float-sm-left\">
            <a href=\"{{ url(back_to_list_path) }}\" class=\"btn btn-link\">
                {{ 'action.back_to_list'|trans }}
            </a>
        </div>
    {% endif %}
    {{ form_end(form) }}

{% endblock %}", "default/_form.html.twig", "/home/jlegutko/PhpstormProjects/Symfony_ztp/app/templates/default/_form.html.twig");
    }
}
