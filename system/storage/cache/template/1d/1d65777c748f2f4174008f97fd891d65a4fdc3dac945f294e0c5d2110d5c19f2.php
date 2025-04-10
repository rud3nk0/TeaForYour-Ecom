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

/* extension/module/documentation.twig */
class __TwigTemplate_ff3b9b0209bbca2e1276ea58228cad291e20f0cae169f73dbea02f96970ac95f extends \Twig\Template
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
        // line 1
        echo "<!-- admin/view/template/extension/module/documentation.twig -->

<h1>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h1>

<div style=\"border: 1px solid grey; padding: 20px\"> 
    <p>";
        // line 6
        echo ($context["documentation_add_product"] ?? null);
        echo "</p>
    <img src=\"view/image/addProduct.png\" alt=\"\" style=\"width: 1500px; height: auto;\" />
</div>

<div style=\"border: 1px solid grey; padding: 20px\"> 
    <p>";
        // line 11
        echo ($context["documentation_general"] ?? null);
        echo "</p>
    <img src=\"view/image/all.png\" alt=\"\" style=\"width: 1500px; height: auto;\" />
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/documentation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/documentation.twig", "");
    }
}
