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

/* auth/register.twig */
class __TwigTemplate_c9a883a5a604ed6e4d4dec32fc766938 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "auth/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("auth/layout.twig", "auth/register.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <section class=\"vh-100 bg-primary bg-gradient\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
                    <div class=\"card bg-light text-white\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-5 text-center\">
                            <div class=\"mb-4\">
                                <h2 class=\"fw-bold mb-5 text-uppercase text-primary d-flex justify-content-center align-items-center\">
                                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo.png"), "html", null, true);
        echo "\" width=\"64\" height=\"64\"
                                         alt=\"Expennies Logo\" />
                                    Register
                                </h2>
                                <form method=\"post\" action=\"/register\">
                                    ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "fields", [], "any", false, false, false, 19);
        echo "

                                    <div class=\"form-outline form-white mb-4\">
                                        <input type=\"text\" name=\"name\" required
                                               value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "\"
                                               class=\"form-control form-control-lg ";
        // line 24
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 24)) ? ("is-invalid") : (""));
        echo "\"
                                               placeholder=\"Name\" />
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 27
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 27)), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-outline form-white mb-4\">
                                        <input type=\"email\" name=\"email\" required
                                               value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "email", [], "any", false, false, false, 32), "html", null, true);
        echo "\"
                                               class=\"form-control form-control-lg ";
        // line 33
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 33)) ? ("is-invalid") : (""));
        echo "\"
                                               placeholder=\"Email\" />
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 36
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 36)), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-outline form-white mb-4\">
                                        <input type=\"password\" name=\"password\" required
                                               class=\"form-control form-control-lg ";
        // line 41
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 41)) ? ("is-invalid") : (""));
        echo "\"
                                               placeholder=\"Password\" />
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 44
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 44)), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-outline form-white mb-5\">
                                        <input type=\"password\" name=\"confirmPassword\" required
                                               class=\"form-control form-control-lg ";
        // line 49
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "confirmPassword", [], "any", false, false, false, 49)) ? ("is-invalid") : (""));
        echo "\"
                                               placeholder=\"Confirm Password\" />
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 52
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "confirmPassword", [], "any", false, false, false, 52)), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <button class=\"btn btn-primary bg-gradient text-white btn-lg px-5\" type=\"submit\">
                                        Register
                                    </button>
                                </form>
                            </div>
                            <div>
                                <p class=\"mb-0 text-dark\">Have an account?
                                    <a href=\"/login\" class=\"text-primary fw-bold\">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "auth/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 52,  133 => 49,  125 => 44,  119 => 41,  111 => 36,  105 => 33,  101 => 32,  93 => 27,  87 => 24,  83 => 23,  76 => 19,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth/register.twig", "/var/www/resources/views/auth/register.twig");
    }
}
