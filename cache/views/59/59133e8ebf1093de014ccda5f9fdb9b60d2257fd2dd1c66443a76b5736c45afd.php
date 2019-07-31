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

/* template.twig.html */
class __TwigTemplate_126819ccc1308268e9dec866a617d1d81959f6330351f430d20e563c20f40871 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
        integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <title>SuperFramework</title>
</head>

<body>
  <header>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"/\">Home</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                  <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\">
                      <a class=\"nav-link\" href=\"./users\">Usuarios <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"./post\">Posts</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"./register\">Register</a>
                    </li>
                    <!-- <li class=\"nav-item\">
                      <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                    </li> -->
                  </ul>
                </div>
              </nav>
            </header>
    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
        integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
        integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\">
    </script>
</body>

</html>";
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
    }

    public function getTemplateName()
    {
        return "template.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  98 => 39,  94 => 38,  79 => 40,  77 => 38,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.twig.html", "C:\\Users\\XiVo\\Desktop\\Proyectos Varios\\PHP\\SuperFramework\\templates\\template.twig.html");
    }
}
