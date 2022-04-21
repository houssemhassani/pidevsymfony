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

/* citoyen/new.html.twig */
class __TwigTemplate_20469d5dc1d56c392c2fdfaba72f294388d0217149e35f41431e4603c541ef32 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "citoyen/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "citoyen/new.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 40
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo "assets/vendor/bootstrap-icons/bootstrap-icons.css";
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo "assets/vendor/quill/quill.snow.css";
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "  <title> Inscription Citoyen</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "<body>

  <main>
    <div class=\"container\">

      <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">


              <div class=\"card mb-3\">

                <div class=\"card-body\">

                  <div class=\"pt-4 pb-2\">
                    <h5 class=\"card-title text-center pb-0 fs-4\">Inscription</h5>
                    <p class=\"text-center small\">Entrez vos détails personnels</p>
                  </div>

                  ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"col-12\">
                      <label for=\"yourName\" class=\"form-label\">Nom :</label>
                      ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "nom", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  
                      <span style=\"color:red\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "nom", [], "any", false, false, false, 66), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourPrenom\" class=\"form-label\">Prénom :</label>
                      ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "prenom", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      
                      <span style=\"color:red\">";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "prenom", [], "any", false, false, false, 73), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Email :</label>
                      ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                     
                      <span style=\"color:red\">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Cin :</label>
                      ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "cin", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                     
                      <span style=\"color:red\">";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "cin", [], "any", false, false, false, 85), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Num_Tel :</label>
                      ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "numTel", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                     
                      <span style=\"color:red\">";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "numTel", [], "any", false, false, false, 91), 'errors');
        echo "</span>
                    </div>

                    

                    <div class=\"col-12\">
                      <label for=\"yourPassword\" class=\"form-label\">Mot De Passe :</label>
                      ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "motDePasse", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      
                      <span style=\"color:red\">";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "motDePasse", [], "any", false, false, false, 100), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-12\">
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\" id=\"acceptTerms\" required>
                        <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept the <a href=\"#\">terms and conditions</a></label>
                        <div class=\"invalid-feedback\">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class=\"col-12\">
                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "valider", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "btn btn-primary w-100"]]);
        echo "
                    </div>
                    <div class=\"col-12\">
                      <p class=\"small mb-0\">Already have an account? <a href=\"pages-login.html\">Log in</a></p>
                    </div>
                  ";
        // line 116
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'form_end');
        echo "<!-- Vertical Form -->

                </div>
              </div>

              <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "citoyen/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  360 => 151,  354 => 148,  350 => 147,  346 => 146,  342 => 145,  338 => 144,  334 => 143,  330 => 142,  326 => 141,  298 => 116,  290 => 111,  276 => 100,  271 => 98,  261 => 91,  256 => 89,  249 => 85,  244 => 83,  237 => 79,  232 => 77,  225 => 73,  220 => 71,  212 => 66,  207 => 64,  201 => 61,  179 => 41,  169 => 40,  159 => 8,  149 => 7,  129 => 30,  123 => 27,  119 => 26,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  89 => 14,  85 => 13,  79 => 9,  77 => 7,  72 => 4,  62 => 3,  52 => 40,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block head %}
<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
{% block title %}
  <title> Inscription Citoyen</title>{% endblock  %}
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ ('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ ('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
{% endblock %}
{% block body %}
<body>

  <main>
    <div class=\"container\">

      <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">


              <div class=\"card mb-3\">

                <div class=\"card-body\">

                  <div class=\"pt-4 pb-2\">
                    <h5 class=\"card-title text-center pb-0 fs-4\">Inscription</h5>
                    <p class=\"text-center small\">Entrez vos détails personnels</p>
                  </div>

                  {{ form_start(form,{'attr':{'novalidate': 'novalidate'}}) }}
                    <div class=\"col-12\">
                      <label for=\"yourName\" class=\"form-label\">Nom :</label>
                      {{ form_widget(form.nom,{'attr':{'class':'form-control'}}) }}
                  
                      <span style=\"color:red\">{{ form_errors(form.nom) }}</span>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourPrenom\" class=\"form-label\">Prénom :</label>
                      {{ form_widget(form.prenom,{'attr':{'class':'form-control'}}) }}
                      
                      <span style=\"color:red\">{{ form_errors(form.prenom) }}</span>
                    </div>
                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Email :</label>
                      {{ form_widget(form.email,{'attr':{'class':'form-control'}}) }}
                     
                      <span style=\"color:red\">{{ form_errors(form.email) }}</span>
                    </div>
                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Cin :</label>
                      {{ form_widget(form.cin,{'attr':{'class':'form-control'}}) }}
                     
                      <span style=\"color:red\">{{ form_errors(form.cin) }}</span>
                    </div>
                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Num_Tel :</label>
                      {{ form_widget(form.numTel,{'attr':{'class':'form-control'}}) }}
                     
                      <span style=\"color:red\">{{ form_errors(form.numTel) }}</span>
                    </div>

                    

                    <div class=\"col-12\">
                      <label for=\"yourPassword\" class=\"form-label\">Mot De Passe :</label>
                      {{ form_widget(form.motDePasse,{'attr':{'class':'form-control'}}) }}
                      
                      <span style=\"color:red\">{{ form_errors(form.motDePasse) }}</span>
                    </div>

                    <div class=\"col-12\">
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\" id=\"acceptTerms\" required>
                        <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept the <a href=\"#\">terms and conditions</a></label>
                        <div class=\"invalid-feedback\">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class=\"col-12\">
                    {{ form_widget(form.valider,{'attr':{'class':'btn btn-primary w-100'}})}}
                    </div>
                    <div class=\"col-12\">
                      <p class=\"small mb-0\">Already have an account? <a href=\"pages-login.html\">Log in</a></p>
                    </div>
                  {{ form_end(form) }}<!-- Vertical Form -->

                </div>
              </div>

              <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/chart.js/chart.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/quill/quill.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/tinymce/tinymce.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{ asset('assets/js/main.js') }}\"></script>

</body>
{% endblock %}
", "citoyen/new.html.twig", "C:\\xampp\\htdocs\\PidevSymfony\\templates\\citoyen\\new.html.twig");
    }
}
