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

/* journal3/template/account/order_list.twig */
class __TwigTemplate_15750adede7ce6f8761a6b2b454ab7fe0e945f135917bba7f57d104cbf60f547 extends \Twig\Template
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
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 4);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 4);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 7), "get", [0 => "pageTitlePosition"], "method", false, false, false, 7) == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 10);
        echo "
<div id=\"account-order\" class=\"container\">
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "pageTitlePosition"], "method", false, false, false, 21) == "default")) {
            // line 22
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 24
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 25
        if (($context["orders"] ?? null)) {
            // line 26
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center\">";
            // line 30
            echo ($context["column_order_id"] ?? null);
            echo "</td>
              ";
            // line 32
            echo "              <td class=\"text-center\">";
            echo ($context["column_customer"] ?? null);
            echo "</td>
              <td class=\"text-center\">";
            // line 33
            echo ($context["column_product"] ?? null);
            echo "</td>
              <td class=\"text-center\">";
            // line 34
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-center\">";
            // line 35
            echo ($context["column_total"] ?? null);
            echo "</td>
              <td class=\"text-center\">";
            // line 36
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 42
                echo "            <tr>
              <td class=\"text-center\">#";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 43);
                echo "</td>
              ";
                // line 45
                echo "              <td class=\"text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 45);
                echo "</td>
              <td class=\"text-center\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 46);
                echo "</td>
              <td class=\"text-center\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 47);
                echo "</td>
              <td class=\"text-center\">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 48);
                echo "</td>
              <td class=\"text-center\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 49);
                echo "</td>
              <td class=\"text-center\"><a href=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 50);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "          </tbody>
        </table>
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
            // line 57
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 58
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 61
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 63
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 64
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 66
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 67
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 69
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 69,  231 => 67,  227 => 66,  220 => 64,  217 => 63,  211 => 61,  205 => 58,  201 => 57,  195 => 53,  184 => 50,  180 => 49,  176 => 48,  172 => 47,  168 => 46,  163 => 45,  159 => 43,  156 => 42,  152 => 41,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  127 => 32,  123 => 30,  117 => 26,  115 => 25,  110 => 24,  104 => 22,  102 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/order_list.twig", "");
    }
}
