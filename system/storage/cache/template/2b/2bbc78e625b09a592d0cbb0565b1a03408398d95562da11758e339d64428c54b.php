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
class __TwigTemplate_8a4c7353c67aac900849140affacd96c97cb7a91b14309e636ee80459141510b extends \Twig\Template
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

<div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne\" aria-expanded=\"false\" aria-controls=\"flush-collapseOne\">
       ";
        // line 12
        echo ($context["documentation_add_product"] ?? null);
        echo "
      </button>
    </h2>
    <div id=\"flush-collapseOne\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">
        <img src=\"view/image/addProduct.png\" class=\"card-img-top\" alt=\"...\">
      
      </div>
    </div>
  </div>
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseTwo\" aria-expanded=\"false\" aria-controls=\"flush-collapseTwo\">
        <p class=\"card-text\">";
        // line 25
        echo ($context["documentation_general"] ?? null);
        echo "</p>
      </button>
    </h2>
    <div id=\"flush-collapseTwo\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">
        <img src=\"view/image/all.png\" class=\"card-img-top\" alt=\"...\">
      </div>
    </div>
  </div>
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseThree\" aria-expanded=\"false\" aria-controls=\"flush-collapseThree\">
        <p class=\"card-text\">";
        // line 37
        echo ($context["documentation_general"] ?? null);
        echo "</p>
      </button>
    </h2>
    <div id=\"flush-collapseThree\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">
       <img src=\"view/image/all.png\" class=\"card-img-top\" alt=\"...\">
      </div>
    </div>
  </div>
</div>

";
        // line 99
        echo "


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
        return array (  98 => 99,  84 => 37,  69 => 25,  53 => 12,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/documentation.twig", "");
    }
}
