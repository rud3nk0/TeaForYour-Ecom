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
class __TwigTemplate_336f42c08e8b1633f58d6aad6d9cf000400a169219338655ed20252dc3de6e22 extends \Twig\Template
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
        Accordion Item #1
      </button>
    </h2>
    <div id=\"flush-collapseOne\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">
      <div class=\"card\" style=\"width: 100rem;\">
        <div class=\"card-body\">
          <p class=\"card-text\">";
        // line 19
        echo ($context["documentation_add_product"] ?? null);
        echo "</p>
        </div>
        <img src=\"view/image/addProduct.png\" class=\"card-img-top\" alt=\"...\">
      </div>
      </div>
    </div>
  </div>
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseTwo\" aria-expanded=\"false\" aria-controls=\"flush-collapseTwo\">
        Accordion Item #2
      </button>
    </h2>
    <div id=\"flush-collapseTwo\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseThree\" aria-expanded=\"false\" aria-controls=\"flush-collapseThree\">
        Accordion Item #3
      </button>
    </h2>
    <div id=\"flush-collapseThree\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionFlushExample\">
      <div class=\"accordion-body\">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>


<div class=\"card\" style=\"width: 100rem;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 51
        echo ($context["documentation_add_product"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/addProduct.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 58
        echo ($context["documentation_general"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/all.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 65
        echo ($context["documentation_data"] ?? null);
        echo "</p>
  </div>
    <img src=\"view/image/data.png\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h2 class=\"card-text\" style=\"margin-top: 5px;\">";
        // line 69
        echo ($context["documentation_data_dop"] ?? null);
        echo "</h2>
  </div>
  <img src=\"view/image/data_dop.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 76
        echo ($context["documentation_link"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/link.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 83
        echo ($context["documentation_attribute"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/attribute.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 90
        echo ($context["documentation_option"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/option.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 97
        echo ($context["documentation_image"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/image.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 104
        echo ($context["documentation_seo"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/seo.png\" class=\"card-img-top\" alt=\"...\">
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
        return array (  172 => 104,  162 => 97,  152 => 90,  142 => 83,  132 => 76,  122 => 69,  115 => 65,  105 => 58,  95 => 51,  60 => 19,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/documentation.twig", "");
    }
}
