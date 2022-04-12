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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "

                  <label for=\"inputNanme4\" class=\"form-label\">Nom :</label>
                  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                  <label for=\"inputNanme4\" class=\"form-label\">Prénom :</label>
                  ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                  <label for=\"inputEmail4\" class=\"form-label\">Email :</label>
                  ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                  <label for=\"inputNanme4\" class=\"form-label\">CIN :</label>
                  ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "cin", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                  <label for=\"inputPassword4\" class=\"form-label\">Mot De Passe :</label>
                  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "motDePasse", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                  <label for=\"inputPassword4\" class=\"form-label\">Confirmer Mot De Passe :</label>
                  <input type=\"password\" class=\"form-control\" id=\"inputPassword4\">
                <br/>
                <div class=\"text-center\">
                  ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "ajouter", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                  <button type=\"reset\" class=\"btn btn-secondary\">Annuler</button>
                </div>
              ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "<!-- Vertical Form -->


            </div>
          </div>
          </div>
          <a href=\"";
        // line 49
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
        return array (  137 => 49,  128 => 43,  122 => 40,  113 => 34,  107 => 31,  101 => 28,  94 => 24,  87 => 20,  81 => 17,  68 => 6,  58 => 5,  35 => 2,);
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
          <a href=\"{{ path('app_responsable_index')}}\">Liste Des Responsables</a>
          </div>
          </section>
          </main>
{% endblock %}
", "responsable/new.html.twig", "C:\\xampp\\htdocs\\Pidev\\templates\\responsable\\new.html.twig");
    }
}
