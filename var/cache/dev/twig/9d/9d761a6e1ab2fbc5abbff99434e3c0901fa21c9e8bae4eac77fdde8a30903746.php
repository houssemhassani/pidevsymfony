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

/* employee/edit.html.twig */
class __TwigTemplate_34ceac34157623e6741926ed7e991974d51cb61ddae9f54e47a77c337215f7f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employee/edit.html.twig", 1);
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

        echo "Modifier Employee";
        
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
        echo "    <div class=\"row\">
        <div style=\"display: flex;align-items: center;justify-content: center;margin-top: 80px; padding:10px\">

              <div class=\"card\">
                <div class=\"card-body\">
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_index");
        echo "\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i></a>
                  <h5 class=\"card-title\">Modification D'un Employée</h5>


                  ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "

                                    <label for=\"inputNanme4\" class=\"form-label\">Nom :</label>
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                                    <label for=\"inputNanme4\" class=\"form-label\">Prénom :</label>
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                                    <label for=\"inputEmail4\" class=\"form-label\">Email :</label>
                                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    <label for=\"inputNanme4\" class=\"form-label\">CIN :</label>
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "cin", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    <label for=\"inputPassword4\" class=\"form-label\">Mot De Passe :</label>
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "motDePasse", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    <label for=\"inputPassword4\" class=\"form-label\">Confirmer Mot De Passe :</label>
                                    <input type=\"password\" class=\"form-control\" id=\"inputPassword4\">
                                  <br/>
                                  <div class=\"text-center\">
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "ajouter", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                                    <button type=\"reset\" class=\"btn btn-secondary\">Annuler</button>
                                  </div>
                                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "<!-- Vertical Form -->

                </div>
              </div>
              </div>
            </div>

    ";
        // line 48
        echo twig_include($this->env, $context, "employee/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_index");
        echo "\">back to list</a>

    ";
        // line 52
        echo twig_include($this->env, $context, "employee/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employee/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 52,  164 => 50,  159 => 48,  149 => 41,  143 => 38,  134 => 32,  128 => 29,  122 => 26,  115 => 22,  108 => 18,  102 => 15,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Employee{% endblock %}

{% block body %}
    <div class=\"row\">
        <div style=\"display: flex;align-items: center;justify-content: center;margin-top: 80px; padding:10px\">

              <div class=\"card\">
                <div class=\"card-body\">
                <a href=\"{{ path('app_employee_index') }}\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i></a>
                  <h5 class=\"card-title\">Modification D'un Employée</h5>


                  {{ form_start(form) }}

                                    <label for=\"inputNanme4\" class=\"form-label\">Nom :</label>
                                    {{ form_widget(form.nom,{'attr':{'class':'form-control'}}) }}


                                    <label for=\"inputNanme4\" class=\"form-label\">Prénom :</label>
                                    {{ form_widget(form.prenom,{'attr':{'class':'form-control'}}) }}


                                    <label for=\"inputEmail4\" class=\"form-label\">Email :</label>
                                    {{ form_widget(form.email,{'attr':{'class':'form-control'}}) }}

                                    <label for=\"inputNanme4\" class=\"form-label\">CIN :</label>
                                    {{ form_widget(form.cin,{'attr':{'class':'form-control'}}) }}

                                    <label for=\"inputPassword4\" class=\"form-label\">Mot De Passe :</label>
                                    {{ form_widget(form.motDePasse,{'attr':{'class':'form-control'}}) }}

                                    <label for=\"inputPassword4\" class=\"form-label\">Confirmer Mot De Passe :</label>
                                    <input type=\"password\" class=\"form-control\" id=\"inputPassword4\">
                                  <br/>
                                  <div class=\"text-center\">
                                    {{ form_widget(form.ajouter,{'attr':{'class':'btn btn-primary'}})}}
                                    <button type=\"reset\" class=\"btn btn-secondary\">Annuler</button>
                                  </div>
                                {{ form_end(form) }}<!-- Vertical Form -->

                </div>
              </div>
              </div>
            </div>

    {{ include('employee/_form.html.twig', {'button_label': 'Update'}) }}

    <a href=\"{{ path('app_employee_index') }}\">back to list</a>

    {{ include('employee/_delete_form.html.twig') }}
{% endblock %}
", "employee/edit.html.twig", "C:\\xampp\\htdocs\\Pidev\\templates\\employee\\edit.html.twig");
    }
}
