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

/* home/index.html.twig */
class __TwigTemplate_7b0895fef4f5ef8d09fc339fc66c26da6488fa1366ad66784dd29da90b1e0a48 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo " Welcome to 237digital! ";
        
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
        echo "      <!-- Start Slider -->

        <section class=\"slider fixed-slider center-slider slide-controls\">
            <div class=\"swiper-container parallax-slider\">
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\">
                        <div class=\"bg-img valign\" data-background=\"assets/img/bg.jpg\" data-overlay-dark=\"5\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 offset-lg-1\">
                                        <div class=\"caption\">
                                            <h1 data-splitting><a href=\"project-details2-dark.html\">From
                                                    <br> <span class=\"stroke\">Inside</span> Out</a>
                                            </h1>
                                            <a href=\"project-details2-dark.html\" class=\"dis\" data-splitting>Discover Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide\">
                        <div class=\"bg-img valign\" data-background=\"assets/img/bg1.jpg\" data-overlay-dark=\"5\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 offset-lg-1\">
                                        <div class=\"caption\">
                                            <h1 data-splitting><a href=\"project-details2-dark.html\">Luxury <br> <span class=\"stroke\">Real</span>
                                                    Estate</a>
                                            </h1>
                                            <a href=\"project-details2-dark.html\" class=\"dis\" data-splitting>Discover Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide\">
                        <div class=\"bg-img valign\" data-background=\"assets/img/bg2.jpg\" data-overlay-dark=\"5\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 offset-lg-1\">
                                        <div class=\"caption\">
                                            <h1 data-splitting><a href=\"project-details2-dark.html\">Classic <br> <span class=\"stroke\">And</span>
                                                    Modern</a></h1>
                                            <a href=\"project-details2-dark.html\" class=\"dis\" data-splitting>Discover Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide\">
                        <div class=\"bg-img valign\" data-background=\"assets/img/bg4.jpg\" data-overlay-dark=\"5\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 offset-lg-1\">
                                        <div class=\"caption\">
                                            <h1 data-splitting><a href=\"project-details2-dark.html\">Explore <br> <span class=\"stroke\">The</span>
                                                    World</a></h1>
                                            <a href=\"project-details2-dark.html\" class=\"dis\" data-splitting>Discover Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"social\">
                    <span class=\"icon\"><i class=\"fas fa-share-alt\"></i></span>
                    <a href=\"#0\">Facebook</a>
                    <a href=\"#0\">Twitter</a>
                    <a href=\"#0\">Behance</a>
                </div>

                <!-- slider setting -->
                <div class=\"swiper-button-next swiper-nav-ctrl next-ctrl\">
                    <i class=\"fas fa-caret-right\"></i>
                </div>
                <div class=\"swiper-button-prev swiper-nav-ctrl prev-ctrl\">
                    <i class=\"fas fa-caret-left\"></i>
                </div>
                <div class=\"swiper-pagination\"></div>
            </div>
        </section>

        <!-- ==================== Start Slider ==================== -->


        <div class=\"main-content\">


            <!-- ==================== Start About agency ==================== -->

            <section class=\"agency section-padding\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-7\">
                            <div class=\"imgsec\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"item\">
                                            <div class=\"imgone big-bord wow fadeInDown\" data-wow-delay=\".8s\">
                                                <img class=\"thumparallax-down\" src=\"img/01.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"exp\">
                                                <h2 class=\"nmb-font\">28</h2>
                                                <h6>Years Of Experience</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"item\">
                                            <div class=\"imgtwo big-bord wow fadeInUp\" data-wow-delay=\".6s\">
                                                <img class=\"thumparallax\" src=\"img/02.jpg\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class=\"col-lg-5 valign\">
                            <div class=\"content\">
                                <h6 class=\"sub-title wow\" data-splitting>About Agency</h6>
                                <h4 class=\"wow\" data-splitting>Unlimited Skills <br> for Super Projects.</h4>
                                <p class=\"wow txt\" data-splitting>Branding is no longer simply about visual appeal
                                    (or the
                                    cherry in the apple pie example, as
                                    given in my earlier article). <br>We develop creative solutions for small and big
                                    brands alike, build authentic
                                    product identities and much more. </p>

                                <a href=\"about-dark.html\" class=\"btn-curve mt-40 wow fadeInUp\" data-wow-delay=\".8s\"><span>About
                                        Us</span></a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End About agency ==================== -->



            <!-- ==================== Start Works ==================== -->

            <section class=\"work-carousel mcolumn\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"section-head\">
                                <h6 class=\"wow\" data-splitting>Awesome Works</h6>
                                <h3 class=\"wow\" data-splitting>Our Creative Works.</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 no-padding\">
                            <div class=\"swiper-container\">
                                <div class=\"swiper-wrapper\">
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"300\"></div><img
                                                        src=\"img/portfolio/02.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Innovation and Crafts.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"500\"></div><img
                                                        src=\"img/portfolio/01.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Inspiring new space.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"700\"></div><img
                                                        src=\"img/portfolio/03.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Natural plus modern.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"400\"></div><img
                                                        src=\"img/portfolio/04.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Innovation and Crafts.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"200\"></div><img
                                                        src=\"img/portfolio/05.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Inspiring new space.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"500\"></div><img
                                                        src=\"img/portfolio/06.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Natural plus modern.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"300\"></div><img
                                                        src=\"img/portfolio/07.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Inspiring new space.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"200\"></div><img
                                                        src=\"img/portfolio/08.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Innovation and Crafts.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- slider setting -->
                                <div class=\"swiper-button-next swiper-nav-ctrl next-ctrl\">
                                    <i class=\"ion-ios-arrow-right\"></i>
                                </div>
                                <div class=\"swiper-button-prev swiper-nav-ctrl prev-ctrl\">
                                    <i class=\"ion-ios-arrow-left\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Works ==================== -->



            <!-- ==================== Start About ==================== -->

            <section class=\"about blc section-padding\" data-overlay-dark=\"0\">
                <div class=\"container\">
                    <div class=\"row mb-80\">
                        <div class=\"col-lg-7\">
                            <div class=\"intro\">
                                <h6 class=\"sub-title wow\" data-splitting>Know Us Better</h6>
                                <h2 class=\"extra-title wow\" data-splitting>We help to create strategies, design &
                                    development.
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6 items\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <span class=\"icon\">
                                    <i class=\"ion-ios-monitor\"></i>
                                </span>
                                <h5>Interface Design</h5>
                                <p>Implementation and rollout of new network infrastructure,
                                    including consolidation.</p>
                                <a href=\"#0\" class=\"more-stroke\"><span></span></a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 items active\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <span class=\"icon\">
                                    <i class=\"ion-ios-bolt-outline\"></i>
                                </span>
                                <h5>Creative Always</h5>
                                <p>Implementation and rollout of new network infrastructure,
                                    including consolidation.</p>
                                <a href=\"#0\" class=\"more-stroke\"><span></span></a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 items\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <span class=\"icon\">
                                    <i class=\"ion-cube\"></i>
                                </span>
                                <h5>Real-time Editing</h5>
                                <p>Implementation and rollout of new network infrastructure,
                                    including consolidation.</p>
                                <a href=\"#0\" class=\"more-stroke\"><span></span></a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 items\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <span class=\"icon\">
                                    <i class=\"ion-ios-color-wand\"></i>
                                </span>
                                <h5>Art Concept</h5>
                                <p>Implementation and rollout of new network infrastructure,
                                    including consolidation.</p>
                                <a href=\"#0\" class=\"more-stroke\"><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End About ==================== -->


            <!-- ==================== Start Minimal-Area ==================== -->

            <section class=\"min-area\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"img\">
                                <img class=\"thumparallax-down\" src=\"img/min-area.jpg\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-lg-6 valign\">
                            <div class=\"content\">
                                <h6 class=\"sub-title wow\" data-splitting>Case Study</h6>
                                <h4 class=\"wow\" data-splitting>Dream. Innovate. Implement.</h4>
                                <p class=\"wow txt\" data-splitting>Our creative Ad agency is ranked among the finest in
                                    the US. We cultivate smart ideas for start-ups and seasoned players. By adhering to
                                    industry standards, we create some stunning portfolios. Company branding redefines.
                                </p>
                                <ul>
                                    <li class=\"wow fadeInUp\" data-wow-delay=\".2s\">We provide free initial
                                        consultation and
                                        support.</li>
                                    <li class=\"wow fadeInUp\" data-wow-delay=\".4s\">We work with some of the most
                                        successful
                                        businesses.</li>
                                </ul>
                                <a href=\"about-dark.html\" class=\"btn-curve mt-40 wow fadeInUp\"
                                    data-wow-delay=\".8s\"><span>Discover</span></a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Minimal-Area ==================== -->



            <!-- ==================== Start Video-wrapper ==================== -->

            <section class=\"video-wrapper section-padding bg-img parallaxie valign\" data-background=\"img/bg7.jpg\"
                data-overlay-dark=\"6\">
                <div class=\"full-width text-center\">
                    <a class=\"vid\" href=\"https://vimeo.com/127203262\">
                        <div class=\"vid-butn\">
                            <span class=\"icon\">
                                <i class=\"fas fa-play\"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </section>

            <!-- ==================== End Video-wrapper ==================== -->



            <!-- ==================== Start Testimonials ==================== -->

            <section class=\"testimonials no-bg section-padding\">
                <div class=\"text-bg\">Testimonials</div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 offset-lg-1 positive-r\">
                            <div class=\"slider-for wow fadeInUp\" data-wow-delay=\".3s\">
                                <div class=\"info\">
                                    <div class=\"author\">
                                        <img src=\"img/clients/1.jpg\" alt=\"\">
                                    </div>
                                    <h6>Alex Martin <span>Envato Customer</span> </h6>
                                </div>
                                <div class=\"info\">
                                    <div class=\"author\">
                                        <img src=\"img/clients/2.jpg\" alt=\"\">
                                    </div>
                                    <h6>Alex Martin <span>Envato Customer</span> </h6>
                                </div>
                                <div class=\"info\">
                                    <div class=\"author\">
                                        <img src=\"img/clients/3.jpg\" alt=\"\">
                                    </div>
                                    <h6>Alex Martin <span>Envato Customer</span> </h6>
                                </div>
                            </div>
                            <div class=\"navs wow fadeIn\" data-wow-delay=\".3s\">
                                <span class=\"next\">
                                    <i class=\"ion-ios-arrow-right\"></i>
                                </span>
                                <span class=\"prev\">
                                    <i class=\"ion-ios-arrow-left\"></i>
                                </span>
                            </div>
                        </div>

                        <div class=\"col-lg-8 quote-text\">
                            <div class=\"slider-nav wow fadeInUp\" data-wow-delay=\".3s\">
                                <div class=\"item\">
                                    <div class=\"cont\">
                                        <p>\" Nulla metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat
                                            condimentum velit class aptent taciti sociosqu ad litora torquent per
                                            conubia
                                            nostra. \"
                                        </p>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"cont\">
                                        <p>\" Nulla metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat
                                            condimentum velit class aptent taciti sociosqu ad litora torquent per
                                            conubia
                                            nostra. \"
                                        </p>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"cont\">
                                        <p>\" Nulla metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat
                                            condimentum velit class aptent taciti sociosqu ad litora torquent per
                                            conubia
                                            nostra. \"
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <span class=\"quote-icon wow fadeInUp\" data-wow-delay=\".5s\"><img src=\"img/icons/quote.svg\"
                                    alt=\"\"></span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Testimonials ==================== -->



            <!-- ==================== Start Blog ==================== -->

            <section class=\"blog-grid section-padding pb-0\">
                <div class=\"stories bg-img no-cover bg-pattern\" data-background=\"img/pattern.svg\"></div>
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-lg-4\">
                            <div class=\"item wow fadeInUp md-mb50\" data-wow-delay=\".3s\">
                                <div class=\"post-img\">
                                    <div class=\"img\">
                                        <img src=\"img/blog/2.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"cont\">
                                    <div class=\"info\">
                                        <a href=\"#0\">Alex Smith</a>
                                        <a href=\"#0\">August 06 2019</a>
                                    </div>

                                    <h5><a href=\"#0\">48 Best WordPress Themes On Envato</a></h5>

                                    <a href=\"blog-details-dark.html\" class=\"more\">
                                        <span>Read More <i class=\"icofont-caret-right\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4\">
                            <div class=\"item wow fadeInUp md-mb50\" data-wow-delay=\".1s\">
                                <div class=\"post-img\">
                                    <div class=\"img\">
                                        <img src=\"img/blog/1.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"cont\">
                                    <div class=\"info\">
                                        <a href=\"#0\">Alex Smith</a>
                                        <a href=\"#0\">August 06 2019</a>
                                    </div>

                                    <h5><a href=\"#0\">Master These Awesome New Skills in May 2019</a></h5>

                                    <a href=\"blog-details-dark.html\" class=\"more\">
                                        <span>Read More <i class=\"icofont-caret-right\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4\">
                            <div class=\"item wow fadeInUp\" data-wow-delay=\".5s\">
                                <div class=\"post-img\">
                                    <div class=\"img\">
                                        <img src=\"img/blog/3.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"cont\">
                                    <div class=\"info\">
                                        <a href=\"#0\">Alex Smith</a>
                                        <a href=\"#0\">August 06 2019</a>
                                    </div>

                                    <h5><a href=\"#0\">48 Best WordPress Themes On Envato</a></h5>

                                    <a href=\"blog-details-dark.html\" class=\"more\">
                                        <span>Read More <i class=\"icofont-caret-right\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Blog ==================== -->



            <!-- ==================== Start clients Brands ==================== -->

            <section class=\"clients section-padding\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 col-md-10\">
                            <div class=\"intro mb-80\">
                                <h6 class=\"sub-title wow\" data-splitting>OUR CLIENTS</h6>
                                <h2 class=\"extra-title wow\" data-splitting>Some friends have made while working
                                    together.
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"row bord\">
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/01.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".6s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/02.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".8s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/03.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/04.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".4s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/05.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".7s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/06.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".5s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/07.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/08.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End clients Brands -->

            <!-- Start call-to-action -->

            <section class=\"call-action section-padding\" data-overlay-dark=\"0\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content text-center\">
                                <h6 class=\"wow\" data-splitting>Let’s Talk</h6>
                                <h2 class=\"wow\" data-splitting>about your <b>next <br> project</b>.</h2>
                                <a href=\"contact-dark.html\" class=\"btn-curve btn-lit mt-30\"><span>Get In Touch</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End call-to-action -->



            <!-- Start footer-sm -->

            <footer class=\"footer-sm\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"left\">
                                <p>All right reserved.</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"right\">
                                <p>© 2020, Wavo Template. Made with passion by UI-ThemeZ.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!--End footer-sm -->

        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
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

{% block title %} Welcome to 237digital! {% endblock %}

{% block body %}
      <!-- Start Slider -->

        <section class=\"slider fixed-slider center-slider slide-controls\">
            <div class=\"swiper-container parallax-slider\">
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\">
                        <div class=\"bg-img valign\" data-background=\"assets/img/bg.jpg\" data-overlay-dark=\"5\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 offset-lg-1\">
                                        <div class=\"caption\">
                                            <h1 data-splitting><a href=\"project-details2-dark.html\">From
                                                    <br> <span class=\"stroke\">Inside</span> Out</a>
                                            </h1>
                                            <a href=\"project-details2-dark.html\" class=\"dis\" data-splitting>Discover Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide\">
                        <div class=\"bg-img valign\" data-background=\"assets/img/bg1.jpg\" data-overlay-dark=\"5\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 offset-lg-1\">
                                        <div class=\"caption\">
                                            <h1 data-splitting><a href=\"project-details2-dark.html\">Luxury <br> <span class=\"stroke\">Real</span>
                                                    Estate</a>
                                            </h1>
                                            <a href=\"project-details2-dark.html\" class=\"dis\" data-splitting>Discover Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide\">
                        <div class=\"bg-img valign\" data-background=\"assets/img/bg2.jpg\" data-overlay-dark=\"5\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 offset-lg-1\">
                                        <div class=\"caption\">
                                            <h1 data-splitting><a href=\"project-details2-dark.html\">Classic <br> <span class=\"stroke\">And</span>
                                                    Modern</a></h1>
                                            <a href=\"project-details2-dark.html\" class=\"dis\" data-splitting>Discover Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide\">
                        <div class=\"bg-img valign\" data-background=\"assets/img/bg4.jpg\" data-overlay-dark=\"5\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 offset-lg-1\">
                                        <div class=\"caption\">
                                            <h1 data-splitting><a href=\"project-details2-dark.html\">Explore <br> <span class=\"stroke\">The</span>
                                                    World</a></h1>
                                            <a href=\"project-details2-dark.html\" class=\"dis\" data-splitting>Discover Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"social\">
                    <span class=\"icon\"><i class=\"fas fa-share-alt\"></i></span>
                    <a href=\"#0\">Facebook</a>
                    <a href=\"#0\">Twitter</a>
                    <a href=\"#0\">Behance</a>
                </div>

                <!-- slider setting -->
                <div class=\"swiper-button-next swiper-nav-ctrl next-ctrl\">
                    <i class=\"fas fa-caret-right\"></i>
                </div>
                <div class=\"swiper-button-prev swiper-nav-ctrl prev-ctrl\">
                    <i class=\"fas fa-caret-left\"></i>
                </div>
                <div class=\"swiper-pagination\"></div>
            </div>
        </section>

        <!-- ==================== Start Slider ==================== -->


        <div class=\"main-content\">


            <!-- ==================== Start About agency ==================== -->

            <section class=\"agency section-padding\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-7\">
                            <div class=\"imgsec\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"item\">
                                            <div class=\"imgone big-bord wow fadeInDown\" data-wow-delay=\".8s\">
                                                <img class=\"thumparallax-down\" src=\"img/01.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"exp\">
                                                <h2 class=\"nmb-font\">28</h2>
                                                <h6>Years Of Experience</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"item\">
                                            <div class=\"imgtwo big-bord wow fadeInUp\" data-wow-delay=\".6s\">
                                                <img class=\"thumparallax\" src=\"img/02.jpg\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class=\"col-lg-5 valign\">
                            <div class=\"content\">
                                <h6 class=\"sub-title wow\" data-splitting>About Agency</h6>
                                <h4 class=\"wow\" data-splitting>Unlimited Skills <br> for Super Projects.</h4>
                                <p class=\"wow txt\" data-splitting>Branding is no longer simply about visual appeal
                                    (or the
                                    cherry in the apple pie example, as
                                    given in my earlier article). <br>We develop creative solutions for small and big
                                    brands alike, build authentic
                                    product identities and much more. </p>

                                <a href=\"about-dark.html\" class=\"btn-curve mt-40 wow fadeInUp\" data-wow-delay=\".8s\"><span>About
                                        Us</span></a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End About agency ==================== -->



            <!-- ==================== Start Works ==================== -->

            <section class=\"work-carousel mcolumn\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"section-head\">
                                <h6 class=\"wow\" data-splitting>Awesome Works</h6>
                                <h3 class=\"wow\" data-splitting>Our Creative Works.</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 no-padding\">
                            <div class=\"swiper-container\">
                                <div class=\"swiper-wrapper\">
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"300\"></div><img
                                                        src=\"img/portfolio/02.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Innovation and Crafts.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"500\"></div><img
                                                        src=\"img/portfolio/01.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Inspiring new space.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"700\"></div><img
                                                        src=\"img/portfolio/03.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Natural plus modern.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"400\"></div><img
                                                        src=\"img/portfolio/04.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Innovation and Crafts.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"200\"></div><img
                                                        src=\"img/portfolio/05.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Inspiring new space.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"500\"></div><img
                                                        src=\"img/portfolio/06.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Natural plus modern.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"300\"></div><img
                                                        src=\"img/portfolio/07.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Inspiring new space.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"content\">
                                            <div class=\"img\">
                                                <span class=\"imgio\">
                                                    <div class=\"wow cimgio\" data-delay=\"200\"></div><img
                                                        src=\"img/portfolio/08.jpg\" alt=\"\">
                                                </span>
                                            </div>
                                            <div class=\"cont\">
                                                <h6><a href=\"project-details2-dark.html\">art & illustration</a></h6>
                                                <h4><a href=\"project-details2-dark.html\">Innovation and Crafts.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- slider setting -->
                                <div class=\"swiper-button-next swiper-nav-ctrl next-ctrl\">
                                    <i class=\"ion-ios-arrow-right\"></i>
                                </div>
                                <div class=\"swiper-button-prev swiper-nav-ctrl prev-ctrl\">
                                    <i class=\"ion-ios-arrow-left\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Works ==================== -->



            <!-- ==================== Start About ==================== -->

            <section class=\"about blc section-padding\" data-overlay-dark=\"0\">
                <div class=\"container\">
                    <div class=\"row mb-80\">
                        <div class=\"col-lg-7\">
                            <div class=\"intro\">
                                <h6 class=\"sub-title wow\" data-splitting>Know Us Better</h6>
                                <h2 class=\"extra-title wow\" data-splitting>We help to create strategies, design &
                                    development.
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6 items\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <span class=\"icon\">
                                    <i class=\"ion-ios-monitor\"></i>
                                </span>
                                <h5>Interface Design</h5>
                                <p>Implementation and rollout of new network infrastructure,
                                    including consolidation.</p>
                                <a href=\"#0\" class=\"more-stroke\"><span></span></a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 items active\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <span class=\"icon\">
                                    <i class=\"ion-ios-bolt-outline\"></i>
                                </span>
                                <h5>Creative Always</h5>
                                <p>Implementation and rollout of new network infrastructure,
                                    including consolidation.</p>
                                <a href=\"#0\" class=\"more-stroke\"><span></span></a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 items\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <span class=\"icon\">
                                    <i class=\"ion-cube\"></i>
                                </span>
                                <h5>Real-time Editing</h5>
                                <p>Implementation and rollout of new network infrastructure,
                                    including consolidation.</p>
                                <a href=\"#0\" class=\"more-stroke\"><span></span></a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 items\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <span class=\"icon\">
                                    <i class=\"ion-ios-color-wand\"></i>
                                </span>
                                <h5>Art Concept</h5>
                                <p>Implementation and rollout of new network infrastructure,
                                    including consolidation.</p>
                                <a href=\"#0\" class=\"more-stroke\"><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End About ==================== -->


            <!-- ==================== Start Minimal-Area ==================== -->

            <section class=\"min-area\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"img\">
                                <img class=\"thumparallax-down\" src=\"img/min-area.jpg\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-lg-6 valign\">
                            <div class=\"content\">
                                <h6 class=\"sub-title wow\" data-splitting>Case Study</h6>
                                <h4 class=\"wow\" data-splitting>Dream. Innovate. Implement.</h4>
                                <p class=\"wow txt\" data-splitting>Our creative Ad agency is ranked among the finest in
                                    the US. We cultivate smart ideas for start-ups and seasoned players. By adhering to
                                    industry standards, we create some stunning portfolios. Company branding redefines.
                                </p>
                                <ul>
                                    <li class=\"wow fadeInUp\" data-wow-delay=\".2s\">We provide free initial
                                        consultation and
                                        support.</li>
                                    <li class=\"wow fadeInUp\" data-wow-delay=\".4s\">We work with some of the most
                                        successful
                                        businesses.</li>
                                </ul>
                                <a href=\"about-dark.html\" class=\"btn-curve mt-40 wow fadeInUp\"
                                    data-wow-delay=\".8s\"><span>Discover</span></a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Minimal-Area ==================== -->



            <!-- ==================== Start Video-wrapper ==================== -->

            <section class=\"video-wrapper section-padding bg-img parallaxie valign\" data-background=\"img/bg7.jpg\"
                data-overlay-dark=\"6\">
                <div class=\"full-width text-center\">
                    <a class=\"vid\" href=\"https://vimeo.com/127203262\">
                        <div class=\"vid-butn\">
                            <span class=\"icon\">
                                <i class=\"fas fa-play\"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </section>

            <!-- ==================== End Video-wrapper ==================== -->



            <!-- ==================== Start Testimonials ==================== -->

            <section class=\"testimonials no-bg section-padding\">
                <div class=\"text-bg\">Testimonials</div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 offset-lg-1 positive-r\">
                            <div class=\"slider-for wow fadeInUp\" data-wow-delay=\".3s\">
                                <div class=\"info\">
                                    <div class=\"author\">
                                        <img src=\"img/clients/1.jpg\" alt=\"\">
                                    </div>
                                    <h6>Alex Martin <span>Envato Customer</span> </h6>
                                </div>
                                <div class=\"info\">
                                    <div class=\"author\">
                                        <img src=\"img/clients/2.jpg\" alt=\"\">
                                    </div>
                                    <h6>Alex Martin <span>Envato Customer</span> </h6>
                                </div>
                                <div class=\"info\">
                                    <div class=\"author\">
                                        <img src=\"img/clients/3.jpg\" alt=\"\">
                                    </div>
                                    <h6>Alex Martin <span>Envato Customer</span> </h6>
                                </div>
                            </div>
                            <div class=\"navs wow fadeIn\" data-wow-delay=\".3s\">
                                <span class=\"next\">
                                    <i class=\"ion-ios-arrow-right\"></i>
                                </span>
                                <span class=\"prev\">
                                    <i class=\"ion-ios-arrow-left\"></i>
                                </span>
                            </div>
                        </div>

                        <div class=\"col-lg-8 quote-text\">
                            <div class=\"slider-nav wow fadeInUp\" data-wow-delay=\".3s\">
                                <div class=\"item\">
                                    <div class=\"cont\">
                                        <p>\" Nulla metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat
                                            condimentum velit class aptent taciti sociosqu ad litora torquent per
                                            conubia
                                            nostra. \"
                                        </p>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"cont\">
                                        <p>\" Nulla metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat
                                            condimentum velit class aptent taciti sociosqu ad litora torquent per
                                            conubia
                                            nostra. \"
                                        </p>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"cont\">
                                        <p>\" Nulla metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat
                                            condimentum velit class aptent taciti sociosqu ad litora torquent per
                                            conubia
                                            nostra. \"
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <span class=\"quote-icon wow fadeInUp\" data-wow-delay=\".5s\"><img src=\"img/icons/quote.svg\"
                                    alt=\"\"></span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Testimonials ==================== -->



            <!-- ==================== Start Blog ==================== -->

            <section class=\"blog-grid section-padding pb-0\">
                <div class=\"stories bg-img no-cover bg-pattern\" data-background=\"img/pattern.svg\"></div>
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-lg-4\">
                            <div class=\"item wow fadeInUp md-mb50\" data-wow-delay=\".3s\">
                                <div class=\"post-img\">
                                    <div class=\"img\">
                                        <img src=\"img/blog/2.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"cont\">
                                    <div class=\"info\">
                                        <a href=\"#0\">Alex Smith</a>
                                        <a href=\"#0\">August 06 2019</a>
                                    </div>

                                    <h5><a href=\"#0\">48 Best WordPress Themes On Envato</a></h5>

                                    <a href=\"blog-details-dark.html\" class=\"more\">
                                        <span>Read More <i class=\"icofont-caret-right\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4\">
                            <div class=\"item wow fadeInUp md-mb50\" data-wow-delay=\".1s\">
                                <div class=\"post-img\">
                                    <div class=\"img\">
                                        <img src=\"img/blog/1.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"cont\">
                                    <div class=\"info\">
                                        <a href=\"#0\">Alex Smith</a>
                                        <a href=\"#0\">August 06 2019</a>
                                    </div>

                                    <h5><a href=\"#0\">Master These Awesome New Skills in May 2019</a></h5>

                                    <a href=\"blog-details-dark.html\" class=\"more\">
                                        <span>Read More <i class=\"icofont-caret-right\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-lg-4\">
                            <div class=\"item wow fadeInUp\" data-wow-delay=\".5s\">
                                <div class=\"post-img\">
                                    <div class=\"img\">
                                        <img src=\"img/blog/3.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"cont\">
                                    <div class=\"info\">
                                        <a href=\"#0\">Alex Smith</a>
                                        <a href=\"#0\">August 06 2019</a>
                                    </div>

                                    <h5><a href=\"#0\">48 Best WordPress Themes On Envato</a></h5>

                                    <a href=\"blog-details-dark.html\" class=\"more\">
                                        <span>Read More <i class=\"icofont-caret-right\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Blog ==================== -->



            <!-- ==================== Start clients Brands ==================== -->

            <section class=\"clients section-padding\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 col-md-10\">
                            <div class=\"intro mb-80\">
                                <h6 class=\"sub-title wow\" data-splitting>OUR CLIENTS</h6>
                                <h2 class=\"extra-title wow\" data-splitting>Some friends have made while working
                                    together.
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"row bord\">
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/01.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".6s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/02.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".8s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/03.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/04.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".4s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/05.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".7s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/06.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".5s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/07.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-6 brands\">
                            <div class=\"item wow fadeIn\" data-wow-delay=\".3s\">
                                <div class=\"img\">
                                    <img src=\"img/clients/brands/08.png\" alt=\"\">
                                </div>
                                <a href=\"#0\" class=\"link\" data-splitting>www.wavo.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End clients Brands -->

            <!-- Start call-to-action -->

            <section class=\"call-action section-padding\" data-overlay-dark=\"0\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content text-center\">
                                <h6 class=\"wow\" data-splitting>Let’s Talk</h6>
                                <h2 class=\"wow\" data-splitting>about your <b>next <br> project</b>.</h2>
                                <a href=\"contact-dark.html\" class=\"btn-curve btn-lit mt-30\"><span>Get In Touch</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End call-to-action -->



            <!-- Start footer-sm -->

            <footer class=\"footer-sm\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"left\">
                                <p>All right reserved.</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"right\">
                                <p>© 2020, Wavo Template. Made with passion by UI-ThemeZ.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!--End footer-sm -->

        </div>
{% endblock %}
", "home/index.html.twig", "D:\\237digital\\templates\\home\\index.html.twig");
    }
}
