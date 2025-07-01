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

/* journal3/template/journal3/module/main_menu.twig */
class __TwigTemplate_298986ae15354913de6c645d1682718f21e4a0ba5542b7e82b0001daab209f45 extends \Twig\Template
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
        // line 34
        $macros["self"] = $this->macros["self"] = $this;
        // line 35
        if (($context["items"] ?? null)) {
            // line 36
            echo "  ";
            $context["isMobile"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 36), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 36);
            // line 37
            echo "  ";
            if (($context["first"] ?? null)) {
                // line 38
                echo "  <div class=\"menu-trigger menu-item main-menu-item\"><ul class=\"j-menu\"><li><a>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "menuTriggerText"], "method", false, false, false, 38);
                echo "</a></li></ul></div>
  ";
            }
            // line 40
            echo "  <div id=\"";
            echo ($context["id"] ?? null);
            echo "\" class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 40);
            echo "\">
    <ul class=\"j-menu\">";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 42
                echo "      ";
                $context["cid"] = twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "uniqueId", [0 => "collapse-"], "method", false, false, false, 42);
                // line 43
                echo "      <li class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 43)], "method", false, false, false, 43);
                echo " ";
                if ((($context["isMobile"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 43))) {
                    echo "open";
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 43)) {
                    echo "data-is-open";
                }
                echo ">
        ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 44)) {
                    // line 45
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 45), "href", [], "any", false, false, false, 45)) {
                        // line 46
                        echo "            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 46), "href", [], "any", false, false, false, 46);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 46)], "method", false, false, false, 46);
                        echo " ";
                        if ((($context["display"] ?? null) == "dropdown")) {
                            echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                        } else {
                            echo " class=\"collapse-toggle\"";
                        }
                        echo ">
              ";
                        // line 47
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 47), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 47), "total", [], "any", false, false, false, 47), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 47), "classes", [], "any", false, false, false, 47)], "method", false, false, false, 47);
                        echo "
              <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        // line 48
                        echo ($context["cid"] ?? null);
                        echo "\" ";
                        if ((($context["isMobile"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 48))) {
                            echo "aria-expanded=\"true\"";
                        }
                        echo "><i class=\"fa fa-plus\"></i></span>
              ";
                        // line 49
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 49)) {
                            // line 50
                            echo "                <span class=\"menu-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 50);
                            echo "</span>
              ";
                        }
                        // line 52
                        echo "            </a>
          ";
                    } else {
                        // line 54
                        echo "            <a ";
                        if ((($context["display"] ?? null) == "dropdown")) {
                            echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                        } else {
                            echo " class=\"collapse-toggle\"";
                        }
                        echo ">
              ";
                        // line 55
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 55), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 55), "total", [], "any", false, false, false, 55), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 55), "classes", [], "any", false, false, false, 55)], "method", false, false, false, 55);
                        echo "
              <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        // line 56
                        echo ($context["cid"] ?? null);
                        echo "\" ";
                        if ((($context["isMobile"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 56))) {
                            echo "aria-expanded=\"true\"";
                        }
                        echo "><i class=\"fa fa-plus\"></i></span>
              ";
                        // line 57
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 57)) {
                            // line 58
                            echo "                <span class=\"menu-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 58);
                            echo "</span>
              ";
                        }
                        // line 60
                        echo "            </a>
          ";
                    }
                    // line 62
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 62) == "multilevel")) {
                        // line 63
                        echo "            <div class=\"";
                        echo (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        echo " ";
                        if ((($context["isMobile"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 63))) {
                            echo "in";
                        }
                        echo "\" id=\"";
                        echo ($context["cid"] ?? null);
                        echo "\">
              <ul class=\"j-menu\">
                ";
                        // line 65
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 65));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 66
                            echo "                  ";
                            echo twig_call_macro($macros["self"], "macro_renderMenu", [($context["j3"] ?? null), $context["subitem"], ($context["display"] ?? null)], 66, $context, $this->getSourceContext());
                            echo "
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 68
                        echo "              </ul>
            </div>
          ";
                    }
                    // line 71
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 71) == "megamenu")) {
                        // line 72
                        echo "            <div class=\"";
                        echo (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        echo " ";
                        if ((($context["isMobile"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 72))) {
                            echo "in";
                        }
                        echo "\" id=\"";
                        echo ($context["cid"] ?? null);
                        echo "\">
              <div class=\"mega-menu-content\">";
                        // line 73
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 73);
                        echo "</div>
            </div>
          ";
                    }
                    // line 76
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 76) == "flyout")) {
                        // line 77
                        echo "            <div class=\"";
                        echo (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        echo " ";
                        if ((($context["isMobile"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 77))) {
                            echo "in";
                        }
                        echo "\" id=\"";
                        echo ($context["cid"] ?? null);
                        echo "\">
              ";
                        // line 78
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 78);
                        echo "
            </div>
          ";
                    }
                    // line 81
                    echo "        ";
                } else {
                    // line 82
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 82), "href", [], "any", false, false, false, 82)) {
                        // line 83
                        echo "            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 83), "href", [], "any", false, false, false, 83);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 83)], "method", false, false, false, 83);
                        echo ">
              ";
                        // line 84
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 84), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 84), "total", [], "any", false, false, false, 84), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 84), "classes", [], "any", false, false, false, 84)], "method", false, false, false, 84);
                        echo "
              ";
                        // line 85
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 85)) {
                            // line 86
                            echo "                <span class=\"menu-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 86);
                            echo "</span>
              ";
                        }
                        // line 88
                        echo "            </a>
          ";
                    } else {
                        // line 90
                        echo "            <a>
              ";
                        // line 91
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 91), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 91), "total", [], "any", false, false, false, 91), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 91), "classes", [], "any", false, false, false, 91)], "method", false, false, false, 91);
                        echo "
              ";
                        // line 92
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 92)) {
                            // line 93
                            echo "                <span class=\"menu-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 93);
                            echo "</span>
              ";
                        }
                        // line 95
                        echo "            </a>
          ";
                    }
                    // line 97
                    echo "        ";
                }
                // line 98
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "    </ul>
  </div>
";
        }
    }

    // line 1
    public function macro_renderMenu($__j3__ = null, $__item__ = null, $__display__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "j3" => $__j3__,
            "item" => $__item__,
            "display" => $__display__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "  ";
            $macros["self"] = $this;
            // line 3
            echo "  ";
            $context["cid"] = twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "uniqueId", [0 => "collapse-"], "method", false, false, false, 3);
            // line 4
            echo "  <li class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "classes", [], "any", false, false, false, 4)], "method", false, false, false, 4);
            echo "\">
    ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 5)) {
                // line 6
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 6), "href", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 7), "href", [], "any", false, false, false, 7);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 7)], "method", false, false, false, 7);
                    echo " ";
                    if ((($context["display"] ?? null) == "dropdown")) {
                        echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                    } else {
                        echo " class=\"collapse-toggle\"";
                    }
                    echo ">
          ";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 8), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 8), "total", [], "any", false, false, false, 8), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 8), "classes", [], "any", false, false, false, 8)], "method", false, false, false, 8);
                    echo "
          <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                    // line 9
                    echo ($context["cid"] ?? null);
                    echo "\"><i class=\"fa fa-plus\"></i></span>
        </a>
      ";
                } else {
                    // line 12
                    echo "        <a ";
                    if ((($context["display"] ?? null) == "dropdown")) {
                        echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                    } else {
                        echo " class=\"collapse-toggle\"";
                    }
                    echo ">
          ";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 13), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 13), "total", [], "any", false, false, false, 13), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 13), "classes", [], "any", false, false, false, 13)], "method", false, false, false, 13);
                    echo "
          <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                    // line 14
                    echo ($context["cid"] ?? null);
                    echo "\"><i class=\"fa fa-plus\"></i></span>
        </a>
      ";
                }
                // line 17
                echo "     <div class=\"";
                echo (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                echo "\" id=\"";
                echo ($context["cid"] ?? null);
                echo "\">
       <ul class=\"j-menu\">
         ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 20
                    echo "           ";
                    echo twig_call_macro($macros["self"], "macro_renderMenu", [($context["j3"] ?? null), $context["subitem"], ($context["display"] ?? null)], 20, $context, $this->getSourceContext());
                    echo "
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "         <hr>
       </ul>
     </div>
    ";
            } else {
                // line 26
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 26), "href", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 27), "href", [], "any", false, false, false, 27);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 27)], "method", false, false, false, 27);
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 27), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 27), "total", [], "any", false, false, false, 27), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 27), "classes", [], "any", false, false, false, 27)], "method", false, false, false, 27);
                    echo "</a>
      ";
                } else {
                    // line 29
                    echo "        <a>";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 29), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 29), "total", [], "any", false, false, false, 29), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 29), "classes", [], "any", false, false, false, 29)], "method", false, false, false, 29);
                    echo "</a>
      ";
                }
                // line 31
                echo "    ";
            }
            // line 32
            echo "  </li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/main_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 32,  412 => 31,  406 => 29,  396 => 27,  393 => 26,  387 => 22,  378 => 20,  374 => 19,  366 => 17,  360 => 14,  356 => 13,  347 => 12,  341 => 9,  337 => 8,  324 => 7,  321 => 6,  319 => 5,  314 => 4,  311 => 3,  308 => 2,  293 => 1,  286 => 100,  279 => 98,  276 => 97,  272 => 95,  266 => 93,  264 => 92,  260 => 91,  257 => 90,  253 => 88,  247 => 86,  245 => 85,  241 => 84,  234 => 83,  231 => 82,  228 => 81,  222 => 78,  211 => 77,  208 => 76,  202 => 73,  191 => 72,  188 => 71,  183 => 68,  174 => 66,  170 => 65,  158 => 63,  155 => 62,  151 => 60,  145 => 58,  143 => 57,  135 => 56,  131 => 55,  122 => 54,  118 => 52,  112 => 50,  110 => 49,  102 => 48,  98 => 47,  85 => 46,  82 => 45,  80 => 44,  67 => 43,  64 => 42,  60 => 41,  53 => 40,  47 => 38,  44 => 37,  41 => 36,  39 => 35,  37 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/main_menu.twig", "");
    }
}
