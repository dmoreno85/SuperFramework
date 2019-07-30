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

/* post.twig.html */
class __TwigTemplate_3fe2959ae370e383bd757911ab799d3715f1a98eb07f0e19864e167ec8f41aaf extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template.twig.html", "post.twig.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<!-- Page Content -->
<div id=\"post\" class=\"container\">
    <div class=\"row\">
        <!-- Blog Entries Column -->
        <div class=\"col-md-8\">
            <h1 class=\"my-4\">
               Blogger
            </h1>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "            <!-- Blog Post -->
            <div class=\"card mb-4\">
                <img class=\"card-img-top\" src=\"http://picsum.photos/1280/768?random='";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14), "html", null, true);
            echo "'\"
                    alt=\"Card image cap\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titulo", [], "any", false, false, false, 17), "html", null, true);
            echo "</h2>
                    <p class=\"card-text\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "descripcion", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                    <a href=\"#\" class=\"btn btn-primary\">Read More &rarr;</a>
                </div>
                <div class=\"card-footer text-muted\">
                    Posted on ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 22), "d-m-Y"), "html", null, true);
            echo " by
                    <a href=\"#\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "autor", [], "any", false, false, false, 23), "html", null, true);
            echo "</a>
                </div>
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
        <!-- Sidebar Widgets Column -->
        <div class=\"col-md-4\">
            <!-- Search Widget -->
            <div class=\"card my-4\">
                <h5 class=\"card-header\">Search</h5>
                <div class=\"card-body\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-secondary\" type=\"button\">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            <!-- Categories Widget -->
            <div class=\"card my-4\">
                <h5 class=\"card-header\">Categories</h5>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li>
                                    <a href=\"#\">Web Design</a>
                                </li>
                                <li>
                                    <a href=\"#\">HTML</a>
                                </li>
                                <li>
                                    <a href=\"#\">Freebies</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-lg-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li>
                                    <a href=\"#\">JavaScript</a>
                                </li>
                                <li>
                                    <a href=\"#\">CSS</a>
                                </li>
                                <li>
                                    <a href=\"#\">Tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side Widget -->
            <div class=\"card my-4\">
                <h5 class=\"card-header\">Side Widget</h5>
                <div class=\"card-body\">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature
                    the new
                    Bootstrap 4 card containers!
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "post.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 27,  102 => 23,  98 => 22,  91 => 18,  87 => 17,  81 => 14,  77 => 12,  60 => 11,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "post.twig.html", "C:\\Users\\XiVo\\Desktop\\Proyectos Varios\\PHP\\SuperFramework\\templates\\post.twig.html");
    }
}
