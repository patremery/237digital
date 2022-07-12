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

/* includes/navigation.html.twig */
class __TwigTemplate_7197fb5744aba504c35327c647676d9b7a441a168c748f7b50701ae652d233b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navigation.html.twig"));

        // line 1
        echo "
        <!--  Start Navgition -->

        <div id=\"navi\" class=\"topnav\">
            <div class=\"container-fluid\">
                <div class=\"logo\">
                    <a href=\"#0\"><img src=\"img/logo-light.png\" alt=\"\"></a>
                </div>
                <div class=\"menu-icon\">
                    <span class=\"icon\">
                        <i></i>
                        <i></i>
                    </span>
                    <span class=\"text\" data-splitting>Menu</span>
                </div>
            </div>
        </div>
       
        <div class=\"hamenu\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-8\">
                        <div class=\"menu-links\">
                            <ul class=\"main-menu\">
                                <li>
                                    <div class=\"o-hidden\">
                                        <span class=\"link dmenu\"><span class=\"nm\">01.</span>Home <i
                                                class=\"fas fa-angle-right\"></i></span>
                                    </div>
                                    <div class=\"sub-menu\">
                                        <ul>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <span class=\"sub-link back\">Go Back <i
                                                            class=\"fas fa-long-arrow-alt-right\"></i></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"index-2-dark.html\" class=\"sub-link\"><span
                                                            class=\"nm\">01.</span>Index 1 <em>(Dark Version)</em></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"index-2.html\" class=\"sub-link\"><span class=\"nm\">02.</span>Index
                                                        2 <em>(Light Version)</em></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"index-full.html\" class=\"sub-link\"><span
                                                            class=\"nm\">03.</span>Full Screen <em>(Hot)</em></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"index-dark.html\" class=\"sub-link\"><span
                                                            class=\"nm\">04.</span>Index 3 <em>(Dark Version)</em></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"index.html\" class=\"sub-link\"><span class=\"nm\">05.</span>Index 4
                                                        <em>(Light Version)</em></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"o-hidden\">
                                        <a href=\"about-dark.html\" class=\"link\"><span class=\"nm\">02.</span>About Us</a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"o-hidden\">
                                        <span class=\"link dmenu\"><span class=\"nm\">03.</span>Portfolio <i
                                                class=\"fas fa-angle-right\"></i></span>
                                    </div>
                                    <div class=\"sub-menu\">
                                        <ul>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <span class=\"sub-link back\">Go Back <i
                                                            class=\"fas fa-long-arrow-alt-right\"></i></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"portfolio-2column-dark.html\" class=\"sub-link\"><span
                                                            class=\"nm\">01.</span>Two Columns</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"portfolio-3column-dark.html\" class=\"sub-link\"><span
                                                            class=\"nm\">02.</span>Three Columns</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"portfolio-full-dark.html\" class=\"sub-link\"><span
                                                            class=\"nm\">03.</span>Work Carousel</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"o-hidden\">
                                        <a href=\"blog-dark.html\" class=\"link\"><span class=\"nm\">04.</span>Stories</a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"o-hidden\">
                                        <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo " \" class=\"link\"><span class=\"nm\">05.</span>Contact</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4\">
                        <div class=\"cont-info\">
                            <div class=\"item\">
                                <h6>Phone :</h6>
                                <p>+0 762-2367-723</p>
                            </div>
                            <div class=\"item\">
                                <h6>Address :</h6>
                                <p>541 Melville Ave, Palo Alto, CA 94301,
                                    ask@ohio.colabr.io</p>
                            </div>
                            <div class=\"item\">
                                <h6>Email :</h6>
                                <p>Wevo_website@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 117,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <!--  Start Navgition -->

        <div id=\"navi\" class=\"topnav\">
            <div class=\"container-fluid\">
                <div class=\"logo\">
                    <a href=\"#0\"><img src=\"img/logo-light.png\" alt=\"\"></a>
                </div>
                <div class=\"menu-icon\">
                    <span class=\"icon\">
                        <i></i>
                        <i></i>
                    </span>
                    <span class=\"text\" data-splitting>Menu</span>
                </div>
            </div>
        </div>
       
        <div class=\"hamenu\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-8\">
                        <div class=\"menu-links\">
                            <ul class=\"main-menu\">
                                <li>
                                    <div class=\"o-hidden\">
                                        <span class=\"link dmenu\"><span class=\"nm\">01.</span>Home <i
                                                class=\"fas fa-angle-right\"></i></span>
                                    </div>
                                    <div class=\"sub-menu\">
                                        <ul>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <span class=\"sub-link back\">Go Back <i
                                                            class=\"fas fa-long-arrow-alt-right\"></i></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"index-2-dark.html\" class=\"sub-link\"><span
                                                            class=\"nm\">01.</span>Index 1 <em>(Dark Version)</em></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"index-2.html\" class=\"sub-link\"><span class=\"nm\">02.</span>Index
                                                        2 <em>(Light Version)</em></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"index-full.html\" class=\"sub-link\"><span
                                                            class=\"nm\">03.</span>Full Screen <em>(Hot)</em></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"index-dark.html\" class=\"sub-link\"><span
                                                            class=\"nm\">04.</span>Index 3 <em>(Dark Version)</em></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"index.html\" class=\"sub-link\"><span class=\"nm\">05.</span>Index 4
                                                        <em>(Light Version)</em></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"o-hidden\">
                                        <a href=\"about-dark.html\" class=\"link\"><span class=\"nm\">02.</span>About Us</a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"o-hidden\">
                                        <span class=\"link dmenu\"><span class=\"nm\">03.</span>Portfolio <i
                                                class=\"fas fa-angle-right\"></i></span>
                                    </div>
                                    <div class=\"sub-menu\">
                                        <ul>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <span class=\"sub-link back\">Go Back <i
                                                            class=\"fas fa-long-arrow-alt-right\"></i></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"portfolio-2column-dark.html\" class=\"sub-link\"><span
                                                            class=\"nm\">01.</span>Two Columns</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"portfolio-3column-dark.html\" class=\"sub-link\"><span
                                                            class=\"nm\">02.</span>Three Columns</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"o-hidden\">
                                                    <a href=\"portfolio-full-dark.html\" class=\"sub-link\"><span
                                                            class=\"nm\">03.</span>Work Carousel</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"o-hidden\">
                                        <a href=\"blog-dark.html\" class=\"link\"><span class=\"nm\">04.</span>Stories</a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"o-hidden\">
                                        <a href=\"{{ path('contact') }} \" class=\"link\"><span class=\"nm\">05.</span>Contact</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4\">
                        <div class=\"cont-info\">
                            <div class=\"item\">
                                <h6>Phone :</h6>
                                <p>+0 762-2367-723</p>
                            </div>
                            <div class=\"item\">
                                <h6>Address :</h6>
                                <p>541 Melville Ave, Palo Alto, CA 94301,
                                    ask@ohio.colabr.io</p>
                            </div>
                            <div class=\"item\">
                                <h6>Email :</h6>
                                <p>Wevo_website@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "includes/navigation.html.twig", "D:\\237digital\\templates\\includes\\navigation.html.twig");
    }
}
