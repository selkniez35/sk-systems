<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_64ba0763d6b4ae230d84fcea4557ba7b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "    SK Systems - Développement web & solutions digitales
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "
    <section class=\"hero-section\">

        <div class=\"container\">

            <div class=\"row align-items-center min-vh-75\">

                <div class=\"col-lg-7\">

                <span class=\"badge bg-primary mb-3\">
                    Développement web sur mesure
                </span>


                    <h1 class=\"display-3 fw-bold\">
                        Créons des solutions digitales
                        <span class=\"text-primary\">
                        performantes
                    </span>
                    </h1>


                    <p class=\"lead text-secondary mt-4\">
                        SK Systems accompagne les entreprises et entrepreneurs
                        dans la création de sites web, applications métiers
                        et MVP adaptés à leurs objectifs.
                    </p>


                    <div class=\"mt-4\">

                        <a href=\"#services\"
                           class=\"btn btn-primary btn-lg me-3\">
                            Mes services
                        </a>


                        <a href=\"#mvp\"
                           class=\"btn btn-outline-dark btn-lg\">
                            Découvrir les MVP
                        </a>

                    </div>


                </div>


                <div class=\"col-lg-5 mt-5 mt-lg-0\">

                    <div class=\"hero-card shadow-lg\">

                        <div class=\"code-window\">

                            <div class=\"code-header\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>


                            <pre>
<span>&lt;SK Systems&gt;</span>

Symfony
PHP
JavaScript
API

<span>&lt;/SK Systems&gt;</span>
                        </pre>

                        </div>

                    </div>

                </div>
                
            </div>

        </div>

    </section>

    <section id=\"services\" class=\"py-5\">

        <div class=\"container\">


            <div class=\"text-center mb-5\">

                <h2 class=\"fw-bold\">
                    Mes services
                </h2>

                <p class=\"text-muted\">
                    Des solutions adaptées à votre projet.
                </p>

            </div>



            <div class=\"row g-4\">


                <div class=\"col-md-4\">

                    <div class=\"service-card\">

                        <div class=\"icon\">
                            🌐
                        </div>

                        <h4>
                            Sites web
                        </h4>

                        <p>
                            Sites vitrines modernes, rapides et optimisés
                            pour présenter votre activité.
                        </p>

                    </div>

                </div>



                <div class=\"col-md-4\">

                    <div class=\"service-card\">

                        <div class=\"icon\">
                            ⚙️
                        </div>

                        <h4>
                            Applications web
                        </h4>

                        <p>
                            Applications métiers développées avec
                            Symfony et PHP.
                        </p>

                    </div>

                </div>




                <div class=\"col-md-4\">

                    <div class=\"service-card\">

                        <div class=\"icon\">
                            🚀
                        </div>

                        <h4>
                            MVP
                        </h4>

                        <p>
                            Transformez votre idée en produit viable
                            et testez votre marché rapidement.
                        </p>

                    </div>

                </div>


            </div>


        </div>

    </section>

    <section id=\"mvp\" class=\"mvp-section py-5\">


        <div class=\"container\">


            <div class=\"text-center mb-5\">

                <h2 class=\"fw-bold\">
                    Mes offres MVP
                </h2>

                <p class=\"text-muted\">
                    Des formules simples pour lancer votre projet.
                </p>

            </div>



            <div class=\"row g-4\">



                <div class=\"col-md-4\">

                    <div class=\"price-card\">

                        <h4>
                            Starter
                        </h4>

                        <h2>
                            990€
                        </h2>


                        <ul>

                            <li>Site professionnel</li>
                            <li>Design responsive</li>
                            <li>Formulaire contact</li>
                            <li>Mise en ligne</li>

                        </ul>


                        <a href=\"#\"
                           class=\"btn btn-primary w-100\">
                            Commander
                        </a>


                    </div>

                </div>





                <div class=\"col-md-4\">

                    <div class=\"price-card featured\">

<span class=\"popular\">
Populaire
</span>


                        <h4>
                            Business
                        </h4>

                        <h2>
                            2490€
                        </h2>


                        <ul>

                            <li>Application web</li>
                            <li>Base de données</li>
                            <li>Espace utilisateur</li>
                            <li>Paiement en ligne</li>

                        </ul>


                        <a href=\"#\"
                           class=\"btn btn-primary w-100\">
                            Commander
                        </a>


                    </div>

                </div>

                <div class=\"col-md-4\">

                    <div class=\"price-card\">

                        <h4>
                            Sur mesure
                        </h4>

                        <h2>
                            Devis
                        </h2>


                        <ul>

                            <li>Architecture dédiée</li>
                            <li>Développement complet</li>
                            <li>Accompagnement</li>

                        </ul>

                        <a href=\"#\"
                           class=\"btn btn-outline-primary w-100\">
                            Contact
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class=\"py-5\">

        <div class=\"container text-center\">


            <h2 class=\"fw-bold\">
                Pourquoi SK Systems ?
            </h2>

            <p class=\"lead text-muted mt-3\">

                Une approche basée sur la qualité du code,
                la performance et la simplicité.

            </p>

        </div>

    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  131 => 14,  118 => 13,  104 => 9,  91 => 8,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}
    SK Systems - Développement web & solutions digitales
{% endblock %}


{% block stylesheets %}
    {{ parent() }}
{% endblock %}


{% block body %}

    <section class=\"hero-section\">

        <div class=\"container\">

            <div class=\"row align-items-center min-vh-75\">

                <div class=\"col-lg-7\">

                <span class=\"badge bg-primary mb-3\">
                    Développement web sur mesure
                </span>


                    <h1 class=\"display-3 fw-bold\">
                        Créons des solutions digitales
                        <span class=\"text-primary\">
                        performantes
                    </span>
                    </h1>


                    <p class=\"lead text-secondary mt-4\">
                        SK Systems accompagne les entreprises et entrepreneurs
                        dans la création de sites web, applications métiers
                        et MVP adaptés à leurs objectifs.
                    </p>


                    <div class=\"mt-4\">

                        <a href=\"#services\"
                           class=\"btn btn-primary btn-lg me-3\">
                            Mes services
                        </a>


                        <a href=\"#mvp\"
                           class=\"btn btn-outline-dark btn-lg\">
                            Découvrir les MVP
                        </a>

                    </div>


                </div>


                <div class=\"col-lg-5 mt-5 mt-lg-0\">

                    <div class=\"hero-card shadow-lg\">

                        <div class=\"code-window\">

                            <div class=\"code-header\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>


                            <pre>
<span>&lt;SK Systems&gt;</span>

Symfony
PHP
JavaScript
API

<span>&lt;/SK Systems&gt;</span>
                        </pre>

                        </div>

                    </div>

                </div>
                
            </div>

        </div>

    </section>

    <section id=\"services\" class=\"py-5\">

        <div class=\"container\">


            <div class=\"text-center mb-5\">

                <h2 class=\"fw-bold\">
                    Mes services
                </h2>

                <p class=\"text-muted\">
                    Des solutions adaptées à votre projet.
                </p>

            </div>



            <div class=\"row g-4\">


                <div class=\"col-md-4\">

                    <div class=\"service-card\">

                        <div class=\"icon\">
                            🌐
                        </div>

                        <h4>
                            Sites web
                        </h4>

                        <p>
                            Sites vitrines modernes, rapides et optimisés
                            pour présenter votre activité.
                        </p>

                    </div>

                </div>



                <div class=\"col-md-4\">

                    <div class=\"service-card\">

                        <div class=\"icon\">
                            ⚙️
                        </div>

                        <h4>
                            Applications web
                        </h4>

                        <p>
                            Applications métiers développées avec
                            Symfony et PHP.
                        </p>

                    </div>

                </div>




                <div class=\"col-md-4\">

                    <div class=\"service-card\">

                        <div class=\"icon\">
                            🚀
                        </div>

                        <h4>
                            MVP
                        </h4>

                        <p>
                            Transformez votre idée en produit viable
                            et testez votre marché rapidement.
                        </p>

                    </div>

                </div>


            </div>


        </div>

    </section>

    <section id=\"mvp\" class=\"mvp-section py-5\">


        <div class=\"container\">


            <div class=\"text-center mb-5\">

                <h2 class=\"fw-bold\">
                    Mes offres MVP
                </h2>

                <p class=\"text-muted\">
                    Des formules simples pour lancer votre projet.
                </p>

            </div>



            <div class=\"row g-4\">



                <div class=\"col-md-4\">

                    <div class=\"price-card\">

                        <h4>
                            Starter
                        </h4>

                        <h2>
                            990€
                        </h2>


                        <ul>

                            <li>Site professionnel</li>
                            <li>Design responsive</li>
                            <li>Formulaire contact</li>
                            <li>Mise en ligne</li>

                        </ul>


                        <a href=\"#\"
                           class=\"btn btn-primary w-100\">
                            Commander
                        </a>


                    </div>

                </div>





                <div class=\"col-md-4\">

                    <div class=\"price-card featured\">

<span class=\"popular\">
Populaire
</span>


                        <h4>
                            Business
                        </h4>

                        <h2>
                            2490€
                        </h2>


                        <ul>

                            <li>Application web</li>
                            <li>Base de données</li>
                            <li>Espace utilisateur</li>
                            <li>Paiement en ligne</li>

                        </ul>


                        <a href=\"#\"
                           class=\"btn btn-primary w-100\">
                            Commander
                        </a>


                    </div>

                </div>

                <div class=\"col-md-4\">

                    <div class=\"price-card\">

                        <h4>
                            Sur mesure
                        </h4>

                        <h2>
                            Devis
                        </h2>


                        <ul>

                            <li>Architecture dédiée</li>
                            <li>Développement complet</li>
                            <li>Accompagnement</li>

                        </ul>

                        <a href=\"#\"
                           class=\"btn btn-outline-primary w-100\">
                            Contact
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class=\"py-5\">

        <div class=\"container text-center\">


            <h2 class=\"fw-bold\">
                Pourquoi SK Systems ?
            </h2>

            <p class=\"lead text-muted mt-3\">

                Une approche basée sur la qualité du code,
                la performance et la simplicité.

            </p>

        </div>

    </section>

{% endblock %}
", "home/index.html.twig", "/var/www/sk-systems/templates/home/index.html.twig");
    }
}
