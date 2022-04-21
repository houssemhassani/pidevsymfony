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

/* gestio_citoyen/show.html.twig */
class __TwigTemplate_11af6ae184607e38ac9b1dad6ae878030c4ed0d7c1b1da8d6e8713a09c29ab70 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestio_citoyen/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestio_citoyen/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestio_citoyen/show.html.twig", 1);
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

        echo "Citoyen";
        
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
    <h1>Citoyen</h1>

    <table class=\"table\">

        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>

            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cin</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 38, $this->source); })()), "cin", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NumTel</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 42, $this->source); })()), "numTel", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 46, $this->source); })()), "ville", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 50, $this->source); })()), "photo", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>MotDePasse</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 54, $this->source); })()), "motDePasse", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>EmailConfirmed</th>
                <td>";
        // line 58
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 58, $this->source); })()), "emailConfirmed", [], "any", false, false, false, 58)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>
    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestio_citoyen_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestio_citoyen_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        echo "\">edit</a>


    ";
        // line 67
        echo twig_include($this->env, $context, "gestio_citoyen/_delete_form.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestio_citoyen/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 67,  181 => 64,  176 => 62,  169 => 58,  162 => 54,  155 => 50,  148 => 46,  141 => 42,  134 => 38,  127 => 34,  120 => 30,  113 => 26,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Citoyen{% endblock %}

{% block body %}
<main id=\"main\" class=\"main\">

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"card\">
                    <div class=\"card-body\">
    <h1>Citoyen</h1>

    <table class=\"table\">

        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ citoyen.id }}</td>

            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ citoyen.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ citoyen.prenom }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ citoyen.email }}</td>
            </tr>
            <tr>
                <th>Cin</th>
                <td>{{ citoyen.cin }}</td>
            </tr>
            <tr>
                <th>NumTel</th>
                <td>{{ citoyen.numTel }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ citoyen.ville }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>{{ citoyen.photo }}</td>
            </tr>
            <tr>
                <th>MotDePasse</th>
                <td>{{ citoyen.motDePasse }}</td>
            </tr>
            <tr>
                <th>EmailConfirmed</th>
                <td>{{ citoyen.emailConfirmed ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>
    <a href=\"{{ path('app_gestio_citoyen_index') }}\">back to list</a>

    <a href=\"{{ path('app_gestio_citoyen_edit', {'id': citoyen.id}) }}\">edit</a>


    {{ include('gestio_citoyen/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


{% endblock %}
", "gestio_citoyen/show.html.twig", "C:\\xampp\\htdocs\\PidevSymfony\\templates\\gestio_citoyen\\show.html.twig");
    }
}
