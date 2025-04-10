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
class __TwigTemplate_b87dbe9b198c8b03f6939dc76f6ef1309cec9b3a492272188ac364f40eb29fef extends \Twig\Template
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

<div class=\"card\" style=\"width: 100rem;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 10
        echo ($context["documentation_add_product"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/addProduct.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 17
        echo ($context["documentation_general"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/all.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 24
        echo ($context["documentation_data"] ?? null);
        echo "</p>
  </div>
    <img src=\"view/image/data.png\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h2 class=\"card-text\" style=\"margin-top: 5px;\">";
        // line 28
        echo ($context["documentation_data_dop"] ?? null);
        echo "</h2>
  </div>
  <img src=\"view/image/data_dop.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 35
        echo ($context["documentation_link"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/link.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 42
        echo ($context["documentation_attribute"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/attribute.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 49
        echo ($context["documentation_option"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/option.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 56
        echo ($context["documentation_image"] ?? null);
        echo "</p>
  </div>
  <img src=\"view/image/image.png\" class=\"card-img-top\" alt=\"...\">
</div>

<div class=\"card\" style=\"width: 100rem; margin-top: 10px;\">
  <div class=\"card-body\">
    <p class=\"card-text\">";
        // line 63
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
        return array (  128 => 63,  118 => 56,  108 => 49,  98 => 42,  88 => 35,  78 => 28,  71 => 24,  61 => 17,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/documentation.twig", "");
    }
}
