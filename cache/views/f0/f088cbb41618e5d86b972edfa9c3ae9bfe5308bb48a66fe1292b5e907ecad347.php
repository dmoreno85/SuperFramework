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

/* register.twig.html */
class __TwigTemplate_f715d6fb39ed20cedcf03dfad1acc230c709bb9d6f378ab99cbfc52006502f7f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.twig.html", "register.twig.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"container\">
    <div class=\"wrapper\">
        <form role=\"form\" method=\"POST\" name=register_form\" class=\"form_signing\">
            <h3 class=\"form-signin-heading\">Registro</h3>
            <hr class=\"colorgraph\"></hr>
            <br/>
            <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Nombre\" required=\"\" autofocus=\"\">
            <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Correo\" required=\"\" autofocus=\"\">
            <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" required=\"\">
            <button class=\"btn btn-lg btn-primary btn-block\" name=\"submit\" value=\"Register\" >Register</button>
   
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "register.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "register.twig.html", "C:\\Users\\XiVo\\Desktop\\Proyectos Varios\\PHP\\SuperFramework\\templates\\register.twig.html");
    }
}
