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

/* responsable/new.html.twig */
class __TwigTemplate_8e9af6701599c90a15c5fa0235894511b8d6f0bf13ef36da01f535a45228370a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "responsable/new.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "<main id=\"main\" class=\"main\">

 <section class=\"section\">
      <div class=\"row\">
 <div class=\"col-lg-6\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Ajout D'un Responsable</h5>

              <!-- Vertical Form -->
              ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                  <label for=\"inputNanme4\" class=\"form-label\">Nom :</label>
                  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  <span style=\"color:red\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'errors');
        echo "</span>


                  <label for=\"inputNanme4\" class=\"form-label\">Prénom :</label>
                  ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  <span style=\"color:red\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), 'errors');
        echo "</span>


                  <label for=\"inputEmail4\" class=\"form-label\">Email :</label>
                  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  <span style=\"color:red\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'errors');
        echo "</span>

                  <label for=\"inputNanme4\" class=\"form-label\">CIN :</label>
                  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "cin", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  <span style=\"color:red\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "cin", [], "any", false, false, false, 35), 'errors');
        echo "</span>

                  <label for=\"inputPassword4\" class=\"form-label\">Mot De Passe :</label>
                  ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "motDePasse", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  <span style=\"color:red\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "motDePasse", [], "any", false, false, false, 39), 'errors');
        echo "</span>

                  <label for=\"inputPassword4\" class=\"form-label\">Confirmer Mot De Passe :</label>
                  <input type=\"password\" class=\"form-control\" id=\"inputPassword4\">
                <br/>
                <div class=\"text-center\">
                  ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "ajouter", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                  <button type=\"reset\" class=\"btn btn-secondary\">Annuler</button>
                </div>
              ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "<!-- Vertical Form -->


            </div>
          </div>
          </div>
          <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_responsable_index");
        echo "\">Liste Des Responsables</a>
          </div>
          </section>
          </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "responsable/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 54,  148 => 48,  142 => 45,  133 => 39,  129 => 38,  123 => 35,  119 => 34,  113 => 31,  109 => 30,  102 => 26,  98 => 25,  91 => 21,  87 => 20,  81 => 17,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}


{% block body %}
<main id=\"main\" class=\"main\">

 <section class=\"section\">
      <div class=\"row\">
 <div class=\"col-lg-6\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Ajout D'un Responsable</h5>

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

                  <label for=\"inputNanme4\" class=\"form-label\">CIN :</label>
                  {{ form_widget(form.cin,{'attr':{'class':'form-control'}}) }}
                  <span style=\"color:red\">{{ form_errors(form.cin) }}</span>

                  <label for=\"inputPassword4\" class=\"form-label\">Mot De Passe :</label>
                  {{ form_widget(form.motDePasse,{'attr':{'class':'form-control'}}) }}
                  <span style=\"color:red\">{{ form_errors(form.motDePasse) }}</span>

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
          <a href=\"{{ path('app_responsable_index')}}\">Liste Des Responsables</a>
          </div>
          </section>
          </main>
{% endblock %}
", "responsable/new.html.twig", "C:\\xampp\\htdocs\\PidevSymfony\\templates\\responsable\\new.html.twig");
    }
}
