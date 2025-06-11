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

/* journal3/template/journal3/headers/desktop/compact.twig */
class __TwigTemplate_4539afe45a163c51389d5095c142ed2408809f8ee9db588dcdd2cfdd3e3f9225 extends \Twig\Template
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
        echo "<div class=\"header header-compact header-sm\">
  <div class=\"top-bar navbar-nav\">
    ";
        // line 3
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => "desktop_top_menu"], "method", false, false, false, 3);
        echo "

    ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 5), "get", [0 => "langPosition"], "method", false, false, false, 5) == "top")) {
            // line 6
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">
          ";
            // line 8
            echo ($context["language"] ?? null);
            echo "
        </div>
        <div class=\"desktop-currency-wrapper\">
          ";
            // line 11
            echo ($context["currency"] ?? null);
            echo "
        </div>
      </div>
    ";
        }
        // line 15
        echo "
    <div class=\"third-menu\">";
        // line 16
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 16), "get", [0 => "desktop_top_menu_3"], "method", false, false, false, 16);
        echo "</div>

    ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "secondaryMenuPosition"], "method", false, false, false, 18) == "top")) {
            // line 19
            echo "      <div class=\"top-menu secondary-menu\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 19), "get", [0 => "desktop_top_menu_2"], "method", false, false, false, 19);
            echo "</div>
    ";
        }
        // line 21
        echo "  </div>

  <div class=\"mid-bar navbar-nav\">
    ";
        // line 25
        echo "    <div class=\"desktop-logo-wrapper\">
      <div id=\"logo\">
        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "logo_src"], "method", false, false, false, 27)) {
            echo "                        
          <a href=\"";
            // line 28
            echo ($context["home"] ?? null);
            echo "\">
            <img src=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "logo_src"], "method", false, false, false, 29);
            echo "\"
                 ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 30), "get", [0 => "logo2x_src"], "method", false, false, false, 30)) {
                // line 31
                echo "                   srcset=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "logo_src"], "method", false, false, false, 31);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "logo2x_src"], "method", false, false, false, 31);
                echo " 2x\"
                 ";
            }
            // line 33
            echo "                 width=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "logo_width"], "method", false, false, false, 33);
            echo "\"
                 height=\"";
            // line 34
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "logo_height"], "method", false, false, false, 34);
            echo "\"
                 alt=\"";
            // line 35
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\"/>
          </a>
        ";
        } else {
            // line 38
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
        ";
        }
        // line 40
        echo "      </div>
    </div>

    ";
        // line 44
        echo "    <div class=\"desktop-main-menu-wrapper navbar-nav\">
      ";
        // line 45
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 45), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 45)) ? ("") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 45), "get", [0 => "desktop_main_menu"], "method", false, false, false, 45)));
        echo "
    </div>

    ";
        // line 49
        echo "    <div class=\"header-cart-group\">
      ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 50), "get", [0 => "langPosition"], "method", false, false, false, 50) == "search")) {
            // line 51
            echo "        <div class=\"language-currency top-menu\">
          <div class=\"desktop-language-wrapper\">
            ";
            // line 53
            echo ($context["language"] ?? null);
            echo "
          </div>
          <div class=\"desktop-currency-wrapper\">
            ";
            // line 56
            echo ($context["currency"] ?? null);
            echo "
          </div>
        </div>
      ";
        }
        // line 60
        echo "
      ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 61), "get", [0 => "secondaryMenuPosition"], "method", false, false, false, 61) == "cart")) {
            // line 62
            echo "        <div class=\"top-menu secondary-menu\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 62), "get", [0 => "desktop_top_menu_2"], "method", false, false, false, 62);
            echo "</div>
      ";
        }
        // line 64
        echo "
      ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 65), "get", [0 => "catalogSearchStatus"], "method", false, false, false, 65)) {
            // line 66
            echo "        <div class=\"desktop-search-wrapper mini-search\">
          ";
            // line 67
            echo ($context["search"] ?? null);
            echo "
        </div>
      ";
        }
        // line 70
        echo "
      <div class=\"desktop-cart-wrapper\">
        ";
        // line 72
        echo ($context["cart"] ?? null);
        echo "
      </div>
    </div>
  </div>
</div>
<style>
  .module-master_slider-26 .ms-bullet-selected{
    width: 63px !important;
  }
  .grid-row-top-3{
    background:rgba(0, 0, 0, 0.12) !important;
  }

  .product-thumb{
    width: 315px!important;
    height: 481px!important;
    margin-right: 10px!important;
    background: #212122!important;
    border: none!important;
    padding: 0px!important;
  }

  .btn-wishlist:hover{
  color: #F35196!important;
}

.product-label-default.product-label-29{
  margin: 0!important;
  padding: 0!important;
}
</style>";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/desktop/compact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 72,  198 => 70,  192 => 67,  189 => 66,  187 => 65,  184 => 64,  178 => 62,  176 => 61,  173 => 60,  166 => 56,  160 => 53,  156 => 51,  154 => 50,  151 => 49,  145 => 45,  142 => 44,  137 => 40,  129 => 38,  121 => 35,  117 => 34,  112 => 33,  104 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 25,  81 => 21,  75 => 19,  73 => 18,  68 => 16,  65 => 15,  58 => 11,  52 => 8,  48 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/desktop/compact.twig", "C:\\OSPanel\\home\\TeaForYour-Ecom\\catalog\\view\\theme\\journal3\\template\\journal3\\headers\\desktop\\compact.twig");
    }
}
