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

/* gestion_employee/new.html.twig */
class __TwigTemplate_ca346c0c1bbb147b237f0e1f3cdf47a2df9d01e30a9f7e274c23ca749e041ddf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_employee/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_employee/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion_employee/new.html.twig", 1);
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

        echo "Ajout Employee";
        
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
        echo "


<main id=\"main\" class=\"main\">

 <section class=\"section\">
      <div class=\"row\">
 <div class=\"col-lg-6\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Ajout D'Un Employée</h5>
              
              <!-- Vertical Form -->
              ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                
                  <label for=\"inputNanme4\" class=\"form-label\">Nom :</label>
                  ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  <span style=\"color:red\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'errors');
        echo "</span>
               
                
                  <label for=\"inputNanme4\" class=\"form-label\">Prénom :</label>
                  ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  <span style=\"color:red\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'errors');
        echo "</span>
               
                
                  <label for=\"inputEmail4\" class=\"form-label\">Email :</label>
                  ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  <span style=\"color:red\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors');
        echo "</span>
                
                  <label for=\"inputCin4\" class=\"form-label\">CIN :</label>
                  ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "cin", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  <span style=\"color:red\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "cin", [], "any", false, false, false, 38), 'errors');
        echo " </span>

                  <label for=\"inputPassword4\" class=\"form-label\">Service :</label>
                  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "service", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "value" => "1"]]);
        echo "
                  <span style=\"color:red\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "service", [], "any", false, false, false, 42), 'errors');
        echo "</span>

                
                  <label for=\"inputPassword4\" class=\"form-label\">Mot De Passe :</label>
                  ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "motDePasse", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  <span style=\"color:red\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "motDePasse", [], "any", false, false, false, 47), 'errors');
        echo "</span>


                <label for=\"inputPassword4\" class=\"form-label\">confirm Mot De Passe :</label>
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "confirmMotDePasse", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <span style=\"color:red\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "</span>
                <br/>
                <div class=\"text-center\">
                  ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "ajouter", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                  <button type=\"reset\" class=\"btn btn-secondary\">Annuler</button>
                </div>
              ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "<!-- Vertical Form -->
              

            </div>
          </div>
          </div>
          <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_employee_index");
        echo "\">Liste Des Employees</a>
          </div>
          </section>
          </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestion_employee/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 64,  190 => 58,  184 => 55,  178 => 52,  174 => 51,  167 => 47,  163 => 46,  156 => 42,  152 => 41,  146 => 38,  142 => 37,  136 => 34,  132 => 33,  125 => 29,  121 => 28,  114 => 24,  110 => 23,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajout Employee{% endblock %}

{% block body %}



<main id=\"main\" class=\"main\">

 <section class=\"section\">
      <div class=\"row\">
 <div class=\"col-lg-6\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Ajout D'Un Employée</h5>
              
              <!-- Vertical Form -->
              {{ form_start(form,{'attr':{'novalidate': 'novalidate'}}) }}
                
                  <label for=\"inputNanme4\" class=\"form-label\">Nom :</label>
                  {{ form_widget(form.nom,{'attr':{'class':'form-control'}}) }}
                  <span style=\"color:red\">{{ form_errors(form.nom) }}</span>
               
                
                  <label for=\"inputNanme4\" class=\"form-label\">Prénom :</label>
                  {{ form_widget(form.prenom,{'attr':{'class':'form-control'}}) }}
                  <span style=\"color:red\">{{ form_errors(form.prenom) }}</span>
               
                
                  <label for=\"inputEmail4\" class=\"form-label\">Email :</label>
                  {{ form_widget(form.email,{'attr':{'class':'form-control'}}) }}
                  <span style=\"color:red\">{{ form_errors(form.email) }}</span>
                
                  <label for=\"inputCin4\" class=\"form-label\">CIN :</label>
                  {{ form_widget(form.cin,{'attr':{'class':'form-control'}}) }}
                  <span style=\"color:red\">{{ form_errors(form.cin) }} </span>

                  <label for=\"inputPassword4\" class=\"form-label\">Service :</label>
                  {{ form_widget(form.service,{'attr':{'class':'form-control','value':'1'}}) }}
                  <span style=\"color:red\">{{ form_errors(form.service) }}</span>

                
                  <label for=\"inputPassword4\" class=\"form-label\">Mot De Passe :</label>
                  {{ form_widget(form.motDePasse,{'attr':{'class':'form-control'}}) }}
                  <span style=\"color:red\">{{ form_errors(form.motDePasse) }}</span>


                <label for=\"inputPassword4\" class=\"form-label\">confirm Mot De Passe :</label>
                {{ form_widget(form.confirmMotDePasse,{'attr':{'class':'form-control'}}) }}
                <span style=\"color:red\">{{ message }}</span>
                <br/>
                <div class=\"text-center\">
                  {{ form_widget(form.ajouter,{'attr':{'class':'btn btn-primary'}})}}
                  <button type=\"reset\" class=\"btn btn-secondary\">Annuler</button>
                </div>
              {{ form_end(form) }}<!-- Vertical Form -->
              

            </div>
          </div>
          </div>
          <a href=\"{{ path('app_gestion_employee_index')}}\">Liste Des Employees</a>
          </div>
          </section>
          </main>
{% endblock %}
", "gestion_employee/new.html.twig", "C:\\xampp\\htdocs\\PidevSymfony\\templates\\gestion_employee\\new.html.twig");
    }
}
