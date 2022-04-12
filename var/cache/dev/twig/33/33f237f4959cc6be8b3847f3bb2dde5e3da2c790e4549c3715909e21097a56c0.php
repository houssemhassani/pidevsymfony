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
        echo "<!DOCTYPE html>


<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title> Inscription Citoyen</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo "assets/vendor/bootstrap-icons/bootstrap-icons.css";
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo "assets/vendor/quill/quill.snow.css";
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

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

                  ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"col-12\">
                      <label for=\"yourName\" class=\"form-label\">Nom :</label>
                      ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "nom", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  
                      <span style=\"color:red\">";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "nom", [], "any", false, false, false, 67), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourPrneom\" class=\"form-label\">Prénom :</label>
                      ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "prenom", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      
                      <span style=\"color:red\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "prenom", [], "any", false, false, false, 74), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Email :</label>
                      ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                     
                      <span style=\"color:red\">";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Cin :</label>
                      ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "cin", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                     
                      <span style=\"color:red\">";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "cin", [], "any", false, false, false, 86), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Num_Tel :</label>
                      ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "numTel", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                     
                      <span style=\"color:red\">";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "numTel", [], "any", false, false, false, 92), 'errors');
        echo "</span>
                    </div>

                    

                    <div class=\"col-12\">
                      <label for=\"yourPassword\" class=\"form-label\">Mot De Passe :</label>
                      ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "motDePasse", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      
                      <span style=\"color:red\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "motDePasse", [], "any", false, false, false, 101), 'errors');
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
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "valider", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "btn btn-primary w-100"]]);
        echo "
                    </div>
                    <div class=\"col-12\">
                      <p class=\"small mb-0\">Already have an account? <a href=\"pages-login.html\">Log in</a></p>
                    </div>
                  ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
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
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "citoyen/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 152,  289 => 149,  285 => 148,  281 => 147,  277 => 146,  273 => 145,  269 => 144,  265 => 143,  261 => 142,  233 => 117,  225 => 112,  211 => 101,  206 => 99,  196 => 92,  191 => 90,  184 => 86,  179 => 84,  172 => 80,  167 => 78,  160 => 74,  155 => 72,  147 => 67,  142 => 65,  136 => 62,  103 => 32,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>


<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title> Inscription Citoyen</title>
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
                      <label for=\"yourPrneom\" class=\"form-label\">Prénom :</label>
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

</html>
", "citoyen/new.html.twig", "C:\\xampp\\htdocs\\Pidev\\templates\\citoyen\\new.html.twig");
    }
}
