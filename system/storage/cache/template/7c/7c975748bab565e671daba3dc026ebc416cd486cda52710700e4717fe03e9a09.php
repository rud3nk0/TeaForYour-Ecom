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
class __TwigTemplate_08e3c2c3e0c2df846f04f1aac30ad6926752c25fe07ac5c3512dd1e7d5d7c370 extends \Twig\Template
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

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7\" crossorigin=\"anonymous\">


<h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>

<div class=\"card\" style=\"width: 28rem;\">
  <img src=\"view/image/addProduct.png\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 11
        echo ($context["documentation_add_product"] ?? null);
        echo "</p>
  </div>
</div>

<div style=\"border: 1px solid grey; padding: 20px; margin-top: 10px; font-size: 18px;\"> 
    <p>";
        // line 16
        echo ($context["documentation_add_product"] ?? null);
        echo "</p>
    <img src=\"view/image/addProduct.png\" alt=\"\" style=\"width: 1500px; height: auto;\" />
</div>

<div style=\"border: 1px solid grey; padding: 20px\"> 
    <p>";
        // line 21
        echo ($context["documentation_general"] ?? null);
        echo "</p>
    <img src=\"view/image/all.png\" alt=\"\" style=\"width: 1500px; height: auto;\" />
</div>



<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq\" crossorigin=\"anonymous\"></script>";
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
        return array (  68 => 21,  60 => 16,  52 => 11,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/documentation.twig", "");
    }
}
