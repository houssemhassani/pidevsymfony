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

/* gestion_employee/index.html.twig */
class __TwigTemplate_429f04d5d0c6e6df79a2ad7cd6b2a477e4e43783dcf505edd2b8a96c7b022f42 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_employee/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_employee/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion_employee/index.html.twig", 1);
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

        echo "Gestion Employée";
        
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
        echo "<main id=\"main\" class=\"main\">

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-12\">

          <div class=\"card\">
            <div class=\"card-body\">

            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_employee_new");
        echo "\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i></a>
              <h5 class=\"card-title\">Liste des Employées</h5>
              <h3>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "getNom", [], "method", false, false, false, 17), "html", null, true);
        echo "</h3>
              <!-- Table with stripped rows -->
              ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "                  <h1>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "role", [], "any", false, false, false, 20), "html", null, true);
            echo " </h1>
              ";
        }
        // line 22
        echo "              <table class=\"table datatable\">
                <thead>
                  <tr>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">CIN</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">actions</th>
                  </tr>
                </thead>
                <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 34
            echo "                  <tr>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "prenom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "email", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "cin", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_employee_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Supprimer</a>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_employee_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">Modifier</a>
                    </td>

                 </tr>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
                </tbody>
              </table>
               <br/>
                <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestion_employee_new");
        echo "\">Ajouter nouveau</a>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
   
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestion_employee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 50,  171 => 46,  160 => 41,  156 => 40,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  136 => 34,  132 => 33,  119 => 22,  111 => 20,  109 => 19,  104 => 17,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion Employée{% endblock %}

{% block body %}
<main id=\"main\" class=\"main\">

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-12\">

          <div class=\"card\">
            <div class=\"card-body\">

            <a href=\"{{ path('app_gestion_employee_new') }}\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i></a>
              <h5 class=\"card-title\">Liste des Employées</h5>
              <h3>{{ user.getNom() }}</h3>
              <!-- Table with stripped rows -->
              {% if app.user %}
                  <h1>{{ app.user.nom }} {{ app.user.role }} </h1>
              {% endif%}
              <table class=\"table datatable\">
                <thead>
                  <tr>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">CIN</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">actions</th>
                  </tr>
                </thead>
                <tbody>
                {% for employee in employees %}
                  <tr>
                    <td>{{ employee.nom }}</td>
                    <td>{{ employee.prenom }}</td>
                    <td>{{ employee.email }}</td>
                    <td>{{ employee.cin }}</td>
                    <td>
                    <a href=\"{{ path('app_gestion_employee_delete', {'id': employee.id}) }}\">Supprimer</a>
                    <a href=\"{{ path('app_gestion_employee_edit', {'id': employee.id}) }}\">Modifier</a>
                    </td>

                 </tr>
                 {% endfor %}

                </tbody>
              </table>
               <br/>
                <a href=\"{{ path('app_gestion_employee_new') }}\">Ajouter nouveau</a>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
   
   
{% endblock %}
", "gestion_employee/index.html.twig", "C:\\xampp\\htdocs\\PidevSymfony\\templates\\gestion_employee\\index.html.twig");
    }
}
