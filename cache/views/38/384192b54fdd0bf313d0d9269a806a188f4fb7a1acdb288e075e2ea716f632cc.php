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

/* usersView.twig.html */
class __TwigTemplate_0fc6a7d8791c67f4f3d18ac9b137c5eaeb810d8a953942fb5893ff95905c1d79 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template.twig.html", "usersView.twig.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
<h1>USERS</h1>
 <div class=\"container bootstrap snippet\">
    <div class=\"panel-body inf-content\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 8
            echo "        <div class=\"row\">
            <div class=\"col-md-4\">
                <img alt=\"\" style=\"width:300px;\" title=\"\" class=\"img-circle img-thumbnail isTooltip\" src=\"https://api.adorable.io/avatars/300/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "\" data-original-title=\"Usuario\"> 
                <ul title=\"Ratings\" class=\"list-inline ratings text-center\">
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-star\"></span></a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-star\"></span></a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-star\"></span></a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-star\"></span></a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-star\"></span></a></li>
                </ul>
            </div>
            <div class=\"col-md-6\">
                <strong>Information</strong><br>
                <div class=\"table-responsive\">
                <table class=\"table table-condensed table-responsive table-user-information\">
                    <tbody>
                        <!-- <tr>        
                            <td>
                                <strong>
                                    <span class=\"glyphicon glyphicon-asterisk text-primary\"></span>
                                    Identificacion                                                
                                </strong>
                            </td>
                            <td class=\"text-primary\">
                                123456789     
                            </td>
                        </tr>  -->
                        <tr>    
                            <td>
                                <strong>
                                    <span class=\"glyphicon glyphicon-user  text-primary\"></span>    
                                    Name                                                
                                </strong>
                            </td>
                            <td class=\"text-primary\">
                              ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "   
                            </td>
                        </tr>
                        <!-- <tr>        
                            <td>
                                <strong>
                                    <span class=\"glyphicon glyphicon-cloud text-primary\"></span>  
                                    Lastname                                                
                                </strong>
                            </td>
                            <td class=\"text-primary\">
                                Bootstrap  
                            </td>
                        </tr>  -->
     
                        <tr>        
                            <td>
                                <strong>
                                    <span class=\"glyphicon glyphicon-envelope text-primary\"></span> 
                                    Email                                                
                                </strong>
                            </td>
                            <td class=\"text-primary\">
                                ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 66), "html", null, true);
            echo " 
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class=\"glyphicon glyphicon-calendar text-primary\"></span>
                                    created                                                
                                </strong>
                            </td>
                            <td class=\"text-primary\">
                                ";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["users"] ?? null), "created_at", [], "any", false, false, false, 77), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class=\"glyphicon glyphicon-calendar text-primary\"></span>
                                    Modified                                                
                                </strong>
                            </td>
                            <td class=\"text-primary\">
                                 ";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["users"] ?? null), "update_at", [], "any", false, false, false, 88), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                        </tr>                                    
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    
    </div>
    </div>     
  
                                 
";
    }

    public function getTemplateName()
    {
        return "usersView.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 96,  154 => 88,  140 => 77,  126 => 66,  100 => 43,  64 => 10,  60 => 8,  56 => 7,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "usersView.twig.html", "C:\\Users\\XiVo\\Desktop\\Proyectos Varios\\PHP\\SuperFramework\\templates\\usersView.twig.html");
    }
}
