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

/* contact/create.html.twig */
class __TwigTemplate_db93776ec3a0aea82837ce7516292ae5b13535aa0f6dffd5052bb6614229c202 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/create.html.twig", 1);
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

        echo " Parlez-nous de votre projet ";
        
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
        <!-- Start Header -->

        <section class=\"page-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-7 col-md-9\">
                        <div class=\"cont\">
                            <h4>Do you want to work <span class=\"stroke\">together</span>, or talk about an <span
                                    class=\"stroke\">idea?</span> Let's do this.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"img-wrapper\">
                <div class=\"title\">
                    <div class=\"container\">
                        <h3>Contact Us</h3>
                    </div>
                </div>
                <div class=\"map\" id=\"ieatmaps\"></div>
            </div>
        </section>

        <!-- Start Header -->

        <!-- Start Contact -->

        <section class=\"contact section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form\">
                            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 39, $this->source); })()), 'form_start');
        echo "

                                <div class=\"messages\"></div>

                                <div class=\"controls\">

                                    <div class=\"form-group\">
                                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46), 'widget');
        echo "
                                    </div>

                                    <div class=\"form-group\">
                                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'widget');
        echo "
                                    </div>

                                    <div class=\"form-group\">
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 54, $this->source); })()), "phone", [], "any", false, false, false, 54), 'widget');
        echo "
                                    </div>

                                    <div class=\"form-group\">
                                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 58, $this->source); })()), "subject", [], "any", false, false, false, 58), 'widget');
        echo "
                                    </div>

                                    <div class=\"form-group\">
                                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 62, $this->source); })()), "message", [], "any", false, false, false, 62), 'widget');
        echo "
                                    </div>

                                    <button type=\"submit\" class=\"btn-curve btn-blc\"><span>Envoyer le Message</span></button>
                                </div>
                            ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-5 offset-lg-1\">
                        <div class=\"cont-info\">
                            <h2 class=\"extra-title wow\" data-splitting>Parlons de votre projet
                            </h2>
                            <div class=\"item mb-40\">
                                <h5><a href=\"#0\">contact@237digital.com</a></h5>
                                <h5>+237694244030</h5>
                            </div>
                            <h2 class=\"extra-title wow\" data-splitting>Visitez-nous.
                            </h2>
                            <div class=\"item\">
                                <h6>Biyem-assi
                                    <br>Yaoundé, Cameroun</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Contact -->

        <!-- Start call-to-action -->

        <section class=\"call-action nogif\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-lg-9\">
                        <div class=\"content\">
                            <h6 class=\"wow\" data-splitting>See All Works</h6>
                            <h2 class=\"wow\" data-splitting>Portfolio.</h2>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-lg-3 valign\">
                        <a href=\"portfolio-2column.html\" class=\"btn-curve btn-lit\"><span>View Works</span></a>
                    </div>

                </div>
            </div>
        </section>

        <!-- End call-to-action -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 67,  161 => 62,  154 => 58,  147 => 54,  140 => 50,  133 => 46,  123 => 39,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends 'base.html.twig' %}

{% block title %} Parlez-nous de votre projet {% endblock %}

{% block body %}
    
        <!-- Start Header -->

        <section class=\"page-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-7 col-md-9\">
                        <div class=\"cont\">
                            <h4>Do you want to work <span class=\"stroke\">together</span>, or talk about an <span
                                    class=\"stroke\">idea?</span> Let's do this.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"img-wrapper\">
                <div class=\"title\">
                    <div class=\"container\">
                        <h3>Contact Us</h3>
                    </div>
                </div>
                <div class=\"map\" id=\"ieatmaps\"></div>
            </div>
        </section>

        <!-- Start Header -->

        <!-- Start Contact -->

        <section class=\"contact section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form\">
                            {{ form_start(contact_form) }}

                                <div class=\"messages\"></div>

                                <div class=\"controls\">

                                    <div class=\"form-group\">
                                        {{ form_widget(contact_form.name) }}
                                    </div>

                                    <div class=\"form-group\">
                                        {{ form_widget(contact_form.email) }}
                                    </div>

                                    <div class=\"form-group\">
                                        {{ form_widget(contact_form.phone) }}
                                    </div>

                                    <div class=\"form-group\">
                                        {{ form_widget(contact_form.subject) }}
                                    </div>

                                    <div class=\"form-group\">
                                        {{ form_widget(contact_form.message) }}
                                    </div>

                                    <button type=\"submit\" class=\"btn-curve btn-blc\"><span>Envoyer le Message</span></button>
                                </div>
                            {{ form_end(contact_form) }}
                        </div>
                    </div>
                    <div class=\"col-lg-5 offset-lg-1\">
                        <div class=\"cont-info\">
                            <h2 class=\"extra-title wow\" data-splitting>Parlons de votre projet
                            </h2>
                            <div class=\"item mb-40\">
                                <h5><a href=\"#0\">contact@237digital.com</a></h5>
                                <h5>+237694244030</h5>
                            </div>
                            <h2 class=\"extra-title wow\" data-splitting>Visitez-nous.
                            </h2>
                            <div class=\"item\">
                                <h6>Biyem-assi
                                    <br>Yaoundé, Cameroun</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Contact -->

        <!-- Start call-to-action -->

        <section class=\"call-action nogif\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-lg-9\">
                        <div class=\"content\">
                            <h6 class=\"wow\" data-splitting>See All Works</h6>
                            <h2 class=\"wow\" data-splitting>Portfolio.</h2>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-lg-3 valign\">
                        <a href=\"portfolio-2column.html\" class=\"btn-curve btn-lit\"><span>View Works</span></a>
                    </div>

                </div>
            </div>
        </section>

        <!-- End call-to-action -->

{% endblock %}", "contact/create.html.twig", "D:\\237digital\\templates\\contact\\create.html.twig");
    }
}
