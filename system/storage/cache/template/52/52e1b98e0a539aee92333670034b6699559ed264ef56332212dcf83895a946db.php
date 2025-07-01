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

/* journal3/template/journal3/product_card.twig */
class __TwigTemplate_ce0dbecbd578302aa1b7bc0a1d39536d9b9496d1a12def9419608bd00191ea31 extends \Twig\Template
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
        $context["prefix"] = (((($context["display"] ?? null) == "grid")) ? ("ProductGrid") : ("ProductList"));
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "  ";
            $context["classes"] = twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (twig_get_attribute($this->env, $this->source,             // line 4
$context["product"], "quantity", [], "any", false, false, false, 4) <= 0), "has-countdown" => twig_get_attribute($this->env, $this->source,             // line 5
$context["product"], "date_end", [], "any", false, false, false, 5), "has-zero-price" =>  !twig_get_attribute($this->env, $this->source,             // line 6
$context["product"], "price_value", [], "any", false, false, false, 6), "has-extra-button" => twig_get_attribute($this->env, $this->source,             // line 7
$context["product"], "extra_buttons", [], "any", false, false, false, 7)]], "method", false, false, false, 3);
            // line 9
            echo "
  <div class=\"product-layout ";
            // line 10
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 10)], "method", false, false, false, 10);
            echo " ";
            echo ($context["classes"] ?? null);
            echo "\">
    <div class=\"product-thumb\">
      ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 12), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 12) == "image")) {
                // line 13
                echo "        <div class=\"name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
                echo "</a></div>
      ";
            }
            // line 15
            echo "      <div class=\"image\">
        ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 16), "get", [0 => "quickviewStatus"], "method", false, false, false, 16)) {
                // line 17
                echo "          <div class=\"quickview-button\">
            <a class=\"btn btn-quickview\" ";
                // line 18
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewDisplay"), 1 => $context], "method", false, false, false, 18) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipStatus"), 1 => $context], "method", false, false, false, 18))) {
                    echo "data-toggle=\"tooltip\" data-tooltip-class=\"";
                    echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                    echo " quickview-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipPosition"), 1 => $context], "method", false, false, false, 18);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "quickviewText"], "method", false, false, false, 18);
                    echo "\"";
                }
                echo " onclick=\"quickview('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 18);
                echo "')\"><span class=\"btn-text\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "quickviewText"], "method", false, false, false, 18);
                echo "</span></a>
          </div>
        ";
            }
            // line 21
            echo "
        <a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
            echo "\" class=\"product-img ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 22)) {
                echo "has-second-image";
            }
            echo "\">
          <div>
            ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 24), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 24)) {
                // line 25
                echo "              <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 25);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 25)) {
                    echo "data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 25);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 25);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "\" class=\"img-responsive img-first lazyload\"/>
            ";
            } else {
                // line 27
                echo "              <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 27);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 27)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 27);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 27);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                echo "\" class=\"img-responsive img-first\"/>
            ";
            }
            // line 29
            echo "
            ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 30)) {
                // line 31
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 31)) {
                    // line 32
                    echo "                <img src=\"";
                    echo ($context["dummy_image"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 32);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 32)) {
                        echo "data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 32);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 32);
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                    echo "\" class=\"img-responsive img-second lazyload\"/>
              ";
                } else {
                    // line 34
                    echo "                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 34);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 34)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 34);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 34);
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                    echo "\" class=\"img-responsive img-second\"/>
              ";
                }
                // line 36
                echo "            ";
            }
            // line 37
            echo "
          </div>
        </a>

        ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 41)) {
                // line 42
                echo "          <div class=\"product-labels\">
            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 44
                    echo "              <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 44);
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 44);
                    echo "</b></span>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "          </div>
        ";
            }
            // line 48
            echo "
        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 49), "get", [0 => "countdownStatus"], "method", false, false, false, 49) && twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 49))) {
                // line 50
                echo "          <div class=\"countdown\" data-date=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 50);
                echo "\"></div>
        ";
            }
            // line 52
            echo "      </div>

      <div class=\"caption\">
        ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 55) || twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 55))) {
                // line 56
                echo "          <div class=\"stats\">
            ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "              <span class=\"stat-1\"><span class=\"stats-label\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 58), "label", [], "any", false, false, false, 58);
                    echo ":</span> <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 58), "text", [], "any", false, false, false, 58);
                    echo "</span></span>
            ";
                }
                // line 60
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "              <span class=\"stat-2\"><span class=\"stats-label\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 61), "label", [], "any", false, false, false, 61);
                    echo ":</span> <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 61), "text", [], "any", false, false, false, 61);
                    echo "</span></span>
            ";
                }
                // line 63
                echo "          </div>
        ";
            }
            // line 65
            echo "

              ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 67), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 67) == "default")) {
                // line 68
                echo "                <div class=\"name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 68);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
                echo "</a></div>
              ";
            }
            // line 70
            echo "
            <div class=\"description\">";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 71);
            echo "</div>

            
          
          
              ";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 76), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 76) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 76), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 76))) {
                // line 77
                echo "                <div class=\"wish-group\">
                  ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 78), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 78)) {
                    // line 79
                    echo "                  <a class=\"btn btn-wishlist\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 79), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistDisplay"), 1 => $context], "method", false, false, false, 79) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 79), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipStatus"), 1 => $context], "method", false, false, false, 79))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        echo " wishlist-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 79), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipPosition"), 1 => $context], "method", false, false, false, 79);
                        echo "\" title=\"";
                        echo ($context["button_wishlist"] ?? null);
                        echo "\" ";
                    }
                    echo " onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 79);
                    echo "')\"><span class=\"btn-text\">";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></a>
                  ";
                }
                // line 81
                echo "                </div>
              ";
            }
            // line 83
            echo "      
       
          

        

        ";
            // line 114
            echo "
        ";
            // line 115
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 115), "get", [0 => "catalogCartStatus"], "method", false, false, false, 115) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 115), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 115)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 115), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 115))) {
                // line 116
                echo "        <div class=\"buttons-wrapper\">
          <div class=\"button-group\">
            ";
                // line 118
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 118), "get", [0 => "catalogCartStatus"], "method", false, false, false, 118)) {
                    // line 119
                    echo "            <div class=\"cart-group\">
              <div class=\"stepper\">
                <input type=\"text\" name=\"quantity\" value=\"";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 121);
                    echo "\" data-minimum=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 121);
                    echo "\" class=\"form-control\"/>
                <input type=\"hidden\" name=\"product_id\" value=\"";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
                    echo "\"/>
                <span>
                <i class=\"fa fa-angle-up\"></i>
                <i class=\"fa fa-angle-down\"></i>
              </span>
              </div>
              <a class=\"btn btn-cart\" ";
                    // line 128
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 128), "getIn", [0 => (($context["prefix"] ?? null) . "CartDisplay"), 1 => $context], "method", false, false, false, 128) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 128), "getIn", [0 => (($context["prefix"] ?? null) . "CartTooltipStatus"), 1 => $context], "method", false, false, false, 128))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        echo " cart-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 128), "getIn", [0 => (($context["prefix"] ?? null) . "CartTooltipPosition"), 1 => $context], "method", false, false, false, 128);
                        echo "\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" ";
                    }
                    echo " onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 128);
                    echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span>\"><span class=\"btn-text\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></a>
            </div>
            ";
                }
                // line 131
                echo "
            
          </div>
          ";
                // line 134
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134)) {
                    // line 135
                    echo "              <div class=\"price\">
                <div>
                  ";
                    // line 137
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 137)) {
                        // line 138
                        echo "                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 138);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 138);
                        echo "</span>
                  ";
                    } else {
                        // line 140
                        echo "                    <span class=\"price-normal\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 140);
                        echo " /100g.</span>
                  ";
                    }
                    // line 142
                    echo "                </div>
                ";
                    // line 143
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 143)) {
                        // line 144
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 144);
                        echo "</span>
                ";
                    }
                    // line 146
                    echo "              </div>
            ";
                }
                // line 148
                echo "
        </div>
        ";
            }
            // line 151
            echo "
        ";
            // line 167
            echo "      </div>
    </div>
  </div>

<style> 
 ";
            // line 235
            echo "
.buttons-wrapper{
  display: flex!important;
  justify-content: space-between!important;
}

.price-normal{
  margin-top: 20px;
}

.product-thumb{
 -webkit-box-shadow: 0px 0px 37px -20px rgba(243, 81, 150, 1);
-moz-box-shadow: 0px 0px 37px -20px rgba(243, 81, 150, 1);
box-shadow: 0px 0px 37px -20px rgba(243, 81, 150, 1);
}

.main-products.product-grid .product-thumb .product-img
img{
  width: 261px!important;
  height: 261px!important;
  object-fit: cover!important;

}



";
            // line 269
            echo "</style>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/product_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 269,  461 => 235,  454 => 167,  451 => 151,  446 => 148,  442 => 146,  435 => 144,  433 => 143,  430 => 142,  424 => 140,  416 => 138,  414 => 137,  410 => 135,  408 => 134,  403 => 131,  383 => 128,  374 => 122,  368 => 121,  364 => 119,  362 => 118,  358 => 116,  356 => 115,  353 => 114,  345 => 83,  341 => 81,  323 => 79,  321 => 78,  318 => 77,  316 => 76,  308 => 71,  305 => 70,  297 => 68,  295 => 67,  291 => 65,  287 => 63,  279 => 61,  276 => 60,  268 => 58,  266 => 57,  263 => 56,  261 => 55,  256 => 52,  250 => 50,  248 => 49,  245 => 48,  241 => 46,  228 => 44,  224 => 43,  221 => 42,  219 => 41,  213 => 37,  210 => 36,  188 => 34,  164 => 32,  161 => 31,  159 => 30,  156 => 29,  134 => 27,  110 => 25,  108 => 24,  99 => 22,  96 => 21,  78 => 18,  75 => 17,  73 => 16,  70 => 15,  62 => 13,  60 => 12,  53 => 10,  50 => 9,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/product_card.twig", "C:\\OSPanel\\home\\TeaForYour-Ecom\\catalog\\view\\theme\\journal3\\template\\journal3\\product_card.twig");
    }
}
