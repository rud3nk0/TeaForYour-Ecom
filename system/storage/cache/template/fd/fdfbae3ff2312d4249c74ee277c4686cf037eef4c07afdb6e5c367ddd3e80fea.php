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

/* journal3/template/account/login.twig */
class __TwigTemplate_e815d1ac067c38f61f55ed4f58d2d749f6f421eccad39b01c231048fad861635 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 2), "isPopup", [], "method", false, false, false, 2)) {
            // line 3
            echo "<ul class=\"breadcrumb\">
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 5
                echo "  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</ul>
";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 8), "get", [0 => "pageTitlePosition"], "method", false, false, false, 8) == "top")) {
                // line 9
                echo "  <h1 class=\"title page-title\"><span>";
                echo ($context["heading_title"] ?? null);
                echo "</span></h1>
";
            }
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 11);
            echo "
<div id=\"account-login\" class=\"container\">
  ";
            // line 13
            if (($context["success"] ?? null)) {
                // line 14
                echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
                echo ($context["success"] ?? null);
                echo "</div>
  ";
            }
            // line 16
            echo "  ";
            if (($context["error_warning"] ?? null)) {
                // line 17
                echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo ($context["error_warning"] ?? null);
                echo "</div>
  ";
            }
            // line 19
            echo "  <div class=\"row\">";
            echo ($context["column_left"] ?? null);
            echo "
    ";
            // line 20
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 21
                echo "    ";
                $context["class"] = "col-sm-6";
                // line 22
                echo "    ";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 23
                echo "    ";
                $context["class"] = "col-sm-9";
                // line 24
                echo "    ";
            } else {
                // line 25
                echo "    ";
                $context["class"] = "col-sm-12";
                // line 26
                echo "    ";
            }
            // line 27
            echo "    <div id=\"content\" class=\"";
            echo ($context["class"] ?? null);
            echo "\">
      ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 28), "get", [0 => "pageTitlePosition"], "method", false, false, false, 28) == "default")) {
                // line 29
                echo "        <h1 class=\"title page-title\">";
                echo ($context["heading_title"] ?? null);
                echo "</h1>
      ";
            }
            // line 31
            echo "      ";
            echo ($context["content_top"] ?? null);
            echo "
      <div class=\"row login-box\">
        <div class=\"col-sm-6\">
            <div class=\"well\">
              ";
        }
        // line 36
        echo "                  <h2 class=\"title\">";
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
                    <p><strong>";
        // line 37
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
                  <form action=\"";
        // line 38
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal login-form\">
                      <div class=\"form-group\">
                          <label class=\"control-label\" for=\"input-email\">";
        // line 40
        echo ($context["entry_email"] ?? null);
        echo "</label>
                          <input type=\"text\" name=\"email\" value=\"";
        // line 41
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                      </div>
                      <div class=\"form-group\">
                          <label class=\"control-label\" for=\"input-password\">";
        // line 44
        echo ($context["entry_password"] ?? null);
        echo "</label>
                            <input type=\"password\" name=\"password\" value=\"";
        // line 45
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                            <div>
                              <a href=\"";
        // line 47
        echo ($context["forgotten"] ?? null);
        echo "\" target=\"_top\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
                            </div>
                      </div>
                      <div class=\"buttons\">
                            <div class=\"pull-right\">
                              <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<span>";
        // line 52
        echo ($context["button_login"] ?? null);
        echo "</span>\">
                                <span>";
        // line 53
        echo ($context["button_login"] ?? null);
        echo "</span>
                              </button>
                            </div>
                      </div>
                            ";
        // line 57
        if (($context["redirect"] ?? null)) {
            // line 58
            echo "                            <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
                            ";
        }
        // line 60
        echo "                  </form>
              ";
        // line 61
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 61), "isPopup", [], "method", false, false, false, 61)) {
            // line 62
            echo "            </div>
          </div>


        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2 class=\"title\">";
            // line 68
            echo ($context["text_new_customer"] ?? null);
            echo "</h2>
            <p><strong>";
            // line 69
            echo ($context["text_register"] ?? null);
            echo "</strong></p>
            <p>";
            // line 70
            echo ($context["text_register_account"] ?? null);
            echo "</p>
            <div class=\"buttons\">
              <div class=\"pull-right\">
                <a href=\"";
            // line 73
            echo ($context["register"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
              </div>
            </div>
          </div>
        </div>

        

      </div>
      ";
            // line 84
            echo "</div>
";
        }
        // line 86
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 86,  248 => 84,  234 => 73,  228 => 70,  224 => 69,  220 => 68,  212 => 62,  210 => 61,  207 => 60,  201 => 58,  199 => 57,  192 => 53,  188 => 52,  178 => 47,  171 => 45,  167 => 44,  159 => 41,  155 => 40,  150 => 38,  146 => 37,  141 => 36,  132 => 31,  126 => 29,  124 => 28,  119 => 27,  116 => 26,  113 => 25,  110 => 24,  107 => 23,  104 => 22,  101 => 21,  99 => 20,  94 => 19,  88 => 17,  85 => 16,  79 => 14,  77 => 13,  72 => 11,  66 => 9,  64 => 8,  61 => 7,  50 => 5,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/login.twig", "");
    }
}
