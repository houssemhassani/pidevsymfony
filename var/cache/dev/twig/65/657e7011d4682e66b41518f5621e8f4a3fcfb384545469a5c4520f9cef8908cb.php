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

/* gestio_citoyen/index.html.twig */
class __TwigTemplate_1519e158b52e4cad473cb23c056d823c350fd258de3f0c5404ce387c4342b1b7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestio_citoyen/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestio_citoyen/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestio_citoyen/index.html.twig", 1);
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

        echo "Gestion des employées";
        
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
        echo "    <main id=\"main\" class=\"main\">

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestio_citoyen_new");
        echo "\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i></a>
                            <h5 class=\"card-title\">Liste des Citoyens</h5>
                            <!-- Table with stripped rows -->
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
                                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["citoyens"]) || array_key_exists("citoyens", $context) ? $context["citoyens"] : (function () { throw new RuntimeError('Variable "citoyens" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["citoyen"]) {
            // line 29
            echo "                                    <tr>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["citoyen"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["citoyen"], "prenom", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["citoyen"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["citoyen"], "cin", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestio_citoyen_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["citoyen"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">Supprimer</a>
                                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestio_citoyen_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["citoyen"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Modifier</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['citoyen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                </tbody>
                            </table>
                            <br/>
                            <a href=\"";
        // line 43
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
        return "gestio_citoyen/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 43,  153 => 40,  143 => 36,  139 => 35,  134 => 33,  130 => 32,  126 => 31,  122 => 30,  119 => 29,  115 => 28,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des employées{% endblock %}

{% block body %}
    <main id=\"main\" class=\"main\">

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <a href=\"{{ path('app_gestio_citoyen_new') }}\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i></a>
                            <h5 class=\"card-title\">Liste des Citoyens</h5>
                            <!-- Table with stripped rows -->
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
                                {% for citoyen in citoyens %}
                                    <tr>
                                        <td>{{ citoyen.nom }}</td>
                                        <td>{{ citoyen.prenom }}</td>
                                        <td>{{ citoyen.email }}</td>
                                        <td>{{ citoyen.cin }}</td>
                                        <td>
                                            <a href=\"{{ path('app_gestio_citoyen_delete', {'id': citoyen.id}) }}\">Supprimer</a>
                                            <a href=\"{{ path('app_gestio_citoyen_edit', {'id': citoyen.id}) }}\">Modifier</a>
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
", "gestio_citoyen/index.html.twig", "C:\\xampp\\htdocs\\PidevSymfony\\templates\\gestio_citoyen\\index.html.twig");
    }
}
