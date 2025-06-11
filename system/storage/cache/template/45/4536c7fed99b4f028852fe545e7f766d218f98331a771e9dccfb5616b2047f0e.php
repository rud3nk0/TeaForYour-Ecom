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
class __TwigTemplate_9affa561f9e0feadfc77323345ebc5fe6cfab4c9c2ceccb07c9bf4fa845c11ae extends \Twig\Template
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
        // line 24
        echo ($context["documentation_general"] ?? null);
        echo "</p>
      </button>
    </h2>
    <div id=\"flush-collapseTwo\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">
        <img src=\"view/image/All.png\" class=\"card-img-top\" alt=\"...\">
      </div>
    </div>
  </div>
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseThree\" aria-expanded=\"false\" aria-controls=\"flush-collapseThree\">
        <p class=\"card-text\">";
        // line 36
        echo ($context["documentation_data"] ?? null);
        echo "</p>
      </button>
    </h2>
    <div id=\"flush-collapseThree\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">
        <img src=\"view/image/data.png\" class=\"card-img-top\" alt=\"...\">
      </div>
    </div>
  </div>

  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseFour\" aria-expanded=\"false\" aria-controls=\"flush-collapseFour\">
        <p class=\"card-text\">";
        // line 49
        echo ($context["documentation_link"] ?? null);
        echo "</p>
      </button>
    </h2>
    <div id=\"flush-collapseFour\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">
        <img src=\"view/image/link.png\" class=\"card-img-top\" alt=\"...\">
      </div>
    </div>
  </div>

  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseFive\" aria-expanded=\"false\" aria-controls=\"flush-collapseFive\">
        <p class=\"card-text\">";
        // line 62
        echo ($context["documentation_attribute"] ?? null);
        echo "</p>
      </button>
    </h2>
    <div id=\"flush-collapseFive\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">
        <img src=\"view/image/attribute.png\" class=\"card-img-top\" alt=\"...\">
      </div>
    </div>
  </div>

</div>

";
        // line 96
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
        return array (  130 => 96,  115 => 62,  99 => 49,  83 => 36,  68 => 24,  53 => 12,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/documentation.twig", "");
    }
}
