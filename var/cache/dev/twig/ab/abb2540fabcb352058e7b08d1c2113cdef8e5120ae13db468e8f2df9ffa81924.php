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

/* blog/index.html.twig */
class __TwigTemplate_f1d4d110b6a465dd73253638de81966880bbf96eb7faede3f2d0b2f03225f984 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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

        echo " Hello BlogController! ";
        
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
        echo "     <!-- Start Header -->

        <section class=\"page-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-7 col-md-9\">
                        <div class=\"cont\">
                            <h1 class=\"extra-title mb-10\">Our Blog.</h1>
                            <p>All the most current news and events of our creative team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Header -->

        <!-- Start Blog -->

        <section class=\"blog-pg section-padding\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-11\">
                        <div class=\"posts\">
                            <div class=\"item mb-80\">
                                <div class=\"img\">
                                    <a href=\"blog-details.html\">
                                        <img src=\"img/blog/b1.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"content\">
                                    <div class=\"row\">
                                        <div class=\"col-10\">
                                            <div class=\"tags\">
                                                <a href=\"#0\">WordPress</a>
                                                <a href=\"#0\">Themeforest</a>
                                                <a href=\"#0\">Wavo</a>
                                            </div>
                                            <h4 class=\"title\"><a href=\"blog-details.html\">Build a Beautiful Blog With Ease</a></h4>
                                            <p>Success is no accident. It is hard work, perseverance, learning,
                                                studying, sacrifice and most of all, love of what you are doing.
                                            </p>
                                            <a href=\"blog-details.html\" class=\"more\">Read More</a>
                                        </div>
                                        <div class=\"col-2 valign\">
                                            <div class=\"date\">
                                                <a href=\"#0\">
                                                    <span class=\"num\">06</span>
                                                    <span>August</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item mb-80\">
                                <div class=\"img\">
                                    <a href=\"blog-details.html\">
                                        <img src=\"img/blog/b2.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"content\">
                                    <div class=\"row\">
                                        <div class=\"col-10\">
                                            <div class=\"tags\">
                                                <a href=\"#0\">WordPress</a>
                                                <a href=\"#0\">Themeforest</a>
                                                <a href=\"#0\">Wavo</a>
                                            </div>
                                            <h4 class=\"title\"><a href=\"blog-details.html\">Build a Beautiful Blog With Ease</a></h4>
                                            <p>Success is no accident. It is hard work, perseverance, learning,
                                                studying, sacrifice and most of all, love of what you are doing.
                                            </p>
                                            <a href=\"blog-details.html\" class=\"more\">Read More</a>
                                        </div>
                                        <div class=\"col-2 valign\">
                                            <div class=\"date\">
                                                <a href=\"#0\">
                                                    <span class=\"num\">06</span>
                                                    <span>August</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item mb-80\">
                                <div class=\"img\">
                                    <a href=\"blog-details.html\">
                                        <img src=\"img/blog/b3.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"content\">
                                    <div class=\"row\">
                                        <div class=\"col-10\">
                                            <div class=\"tags\">
                                                <a href=\"#0\">WordPress</a>
                                                <a href=\"#0\">Themeforest</a>
                                                <a href=\"#0\">Wavo</a>
                                            </div>
                                            <h4 class=\"title\"><a href=\"blog-details.html\">Build a Beautiful Blog With Ease</a></h4>
                                            <p>Success is no accident. It is hard work, perseverance, learning,
                                                studying, sacrifice and most of all, love of what you are doing.
                                            </p>
                                            <a href=\"blog-details.html\" class=\"more\">Read More</a>
                                        </div>
                                        <div class=\"col-2 valign\">
                                            <div class=\"date\">
                                                <a href=\"#0\">
                                                    <span class=\"num\">06</span>
                                                    <span>August</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"img\">
                                    <a href=\"blog-details.html\">
                                        <img src=\"img/blog/b4.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"content\">
                                    <div class=\"row\">
                                        <div class=\"col-10\">
                                            <div class=\"tags\">
                                                <a href=\"#0\">WordPress</a>
                                                <a href=\"#0\">Themeforest</a>
                                                <a href=\"#0\">Wavo</a>
                                            </div>
                                            <h4 class=\"title\"><a href=\"blog-details.html\">Build a Beautiful Blog With Ease</a></h4>
                                            <p>Success is no accident. It is hard work, perseverance, learning,
                                                studying, sacrifice and most of all, love of what you are doing.
                                            </p>
                                            <a href=\"blog-details.html\" class=\"more\">Read More</a>
                                        </div>
                                        <div class=\"col-2 valign\">
                                            <div class=\"date\">
                                                <a href=\"#0\">
                                                    <span class=\"num\">06</span>
                                                    <span>August</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"pagination\">
                                <span class=\"active\"><a href=\"#0\">1</a></span>
                                <span><a href=\"#0\">2</a></span>
                                <span><a href=\"#0\"><i class=\"fas fa-angle-right\"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Blog -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Hello BlogController! {% endblock %}

{% block body %}
     <!-- Start Header -->

        <section class=\"page-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-7 col-md-9\">
                        <div class=\"cont\">
                            <h1 class=\"extra-title mb-10\">Our Blog.</h1>
                            <p>All the most current news and events of our creative team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Header -->

        <!-- Start Blog -->

        <section class=\"blog-pg section-padding\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-11\">
                        <div class=\"posts\">
                            <div class=\"item mb-80\">
                                <div class=\"img\">
                                    <a href=\"blog-details.html\">
                                        <img src=\"img/blog/b1.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"content\">
                                    <div class=\"row\">
                                        <div class=\"col-10\">
                                            <div class=\"tags\">
                                                <a href=\"#0\">WordPress</a>
                                                <a href=\"#0\">Themeforest</a>
                                                <a href=\"#0\">Wavo</a>
                                            </div>
                                            <h4 class=\"title\"><a href=\"blog-details.html\">Build a Beautiful Blog With Ease</a></h4>
                                            <p>Success is no accident. It is hard work, perseverance, learning,
                                                studying, sacrifice and most of all, love of what you are doing.
                                            </p>
                                            <a href=\"blog-details.html\" class=\"more\">Read More</a>
                                        </div>
                                        <div class=\"col-2 valign\">
                                            <div class=\"date\">
                                                <a href=\"#0\">
                                                    <span class=\"num\">06</span>
                                                    <span>August</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item mb-80\">
                                <div class=\"img\">
                                    <a href=\"blog-details.html\">
                                        <img src=\"img/blog/b2.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"content\">
                                    <div class=\"row\">
                                        <div class=\"col-10\">
                                            <div class=\"tags\">
                                                <a href=\"#0\">WordPress</a>
                                                <a href=\"#0\">Themeforest</a>
                                                <a href=\"#0\">Wavo</a>
                                            </div>
                                            <h4 class=\"title\"><a href=\"blog-details.html\">Build a Beautiful Blog With Ease</a></h4>
                                            <p>Success is no accident. It is hard work, perseverance, learning,
                                                studying, sacrifice and most of all, love of what you are doing.
                                            </p>
                                            <a href=\"blog-details.html\" class=\"more\">Read More</a>
                                        </div>
                                        <div class=\"col-2 valign\">
                                            <div class=\"date\">
                                                <a href=\"#0\">
                                                    <span class=\"num\">06</span>
                                                    <span>August</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item mb-80\">
                                <div class=\"img\">
                                    <a href=\"blog-details.html\">
                                        <img src=\"img/blog/b3.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"content\">
                                    <div class=\"row\">
                                        <div class=\"col-10\">
                                            <div class=\"tags\">
                                                <a href=\"#0\">WordPress</a>
                                                <a href=\"#0\">Themeforest</a>
                                                <a href=\"#0\">Wavo</a>
                                            </div>
                                            <h4 class=\"title\"><a href=\"blog-details.html\">Build a Beautiful Blog With Ease</a></h4>
                                            <p>Success is no accident. It is hard work, perseverance, learning,
                                                studying, sacrifice and most of all, love of what you are doing.
                                            </p>
                                            <a href=\"blog-details.html\" class=\"more\">Read More</a>
                                        </div>
                                        <div class=\"col-2 valign\">
                                            <div class=\"date\">
                                                <a href=\"#0\">
                                                    <span class=\"num\">06</span>
                                                    <span>August</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"img\">
                                    <a href=\"blog-details.html\">
                                        <img src=\"img/blog/b4.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"content\">
                                    <div class=\"row\">
                                        <div class=\"col-10\">
                                            <div class=\"tags\">
                                                <a href=\"#0\">WordPress</a>
                                                <a href=\"#0\">Themeforest</a>
                                                <a href=\"#0\">Wavo</a>
                                            </div>
                                            <h4 class=\"title\"><a href=\"blog-details.html\">Build a Beautiful Blog With Ease</a></h4>
                                            <p>Success is no accident. It is hard work, perseverance, learning,
                                                studying, sacrifice and most of all, love of what you are doing.
                                            </p>
                                            <a href=\"blog-details.html\" class=\"more\">Read More</a>
                                        </div>
                                        <div class=\"col-2 valign\">
                                            <div class=\"date\">
                                                <a href=\"#0\">
                                                    <span class=\"num\">06</span>
                                                    <span>August</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"pagination\">
                                <span class=\"active\"><a href=\"#0\">1</a></span>
                                <span><a href=\"#0\">2</a></span>
                                <span><a href=\"#0\"><i class=\"fas fa-angle-right\"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Blog -->


{% endblock %}
", "blog/index.html.twig", "D:\\237digital\\templates\\blog\\index.html.twig");
    }
}
