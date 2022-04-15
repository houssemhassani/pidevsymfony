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
        echo "    <h1>Citoyen</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cin</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 28, $this->source); })()), "cin", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NumTel</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 32, $this->source); })()), "numTel", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 36, $this->source); })()), "ville", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 40, $this->source); })()), "photo", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>MotDePasse</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 44, $this->source); })()), "motDePasse", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>EmailConfirmed</th>
                <td>";
        // line 48
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 48, $this->source); })()), "emailConfirmed", [], "any", false, false, false, 48)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestio_citoyen_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestio_citoyen_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["citoyen"]) || array_key_exists("citoyen", $context) ? $context["citoyen"] : (function () { throw new RuntimeError('Variable "citoyen" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 57
        echo twig_include($this->env, $context, "gestio_citoyen/_delete_form.html.twig");
        echo "
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
        return array (  177 => 57,  172 => 55,  167 => 53,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Citoyen{% endblock %}

{% block body %}
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
{% endblock %}
", "gestio_citoyen/show.html.twig", "C:\\xampp\\htdocs\\PidevSymfony\\templates\\gestio_citoyen\\show.html.twig");
    }
}
