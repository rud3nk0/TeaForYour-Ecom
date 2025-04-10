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

/* common/column_left.twig */
class __TwigTemplate_6ba83d4fe768a26c02c29bd9626e3bdcc65ddda1ce2ddca840cca9635b40bc4d extends \Twig\Template
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
        echo "<nav id=\"column-left\">
  <div id=\"navigation\"><span class=\"fa fa-bars\"></span> ";
        // line 2
        echo ($context["text_navigation"] ?? null);
        echo "</div>

  <ul id=\"menu\">
    ";
        // line 5
        $context["i"] = 0;
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 7
            echo "    <li id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 7);
            echo "\">

        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 9)) {
                // line 10
                echo "        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 10);
                echo "\">
          <i class=\"fa ";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 11);
                echo " fw\"></i> 
          ";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 12);
                echo "
        </a>
        ";
            } else {
                // line 15
                echo "        
        <a href=\"#collapse";
                // line 16
                echo ($context["i"] ?? null);
                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">
          <i class=\"fa ";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 17);
                echo " fw\"></i> 
          ";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 18);
                echo "
        </a>
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 22)) {
                // line 23
                echo "
          <ul id=\"collapse";
                // line 24
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse\">
            ";
                // line 25
                $context["j"] = 0;
                // line 26
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 27
                    echo "              <li>
                ";
                    // line 28
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 28)) {
                        // line 29
                        echo "                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 29);
                        echo "\">
                      ";
                        // line 30
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 30);
                        echo "
                    </a>
                  ";
                    } else {
                        // line 33
                        echo "                    <a href=\"#collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">
                      ";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 34);
                        echo "
                    </a>
                  ";
                    }
                    // line 37
                    echo "
                  ";
                    // line 38
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 38)) {
                        // line 39
                        echo "                    <ul id=\"collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" class=\"collapse\">
                      ";
                        // line 40
                        $context["k"] = 0;
                        // line 41
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 41));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 42
                            echo "                        <li>";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 42)) {
                                // line 43
                                echo "                            <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 43);
                                echo "\">
                              ";
                                // line 44
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 44);
                                echo "
                            </a>
                          ";
                            } else {
                                // line 47
                                echo "                            <a href=\"#collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">
                              ";
                                // line 48
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 48);
                                echo "
                            </a>
                          ";
                            }
                            // line 51
                            echo "                          ";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 51)) {
                                // line 52
                                echo "                            <ul id=\"collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\" class=\"collapse\">
                              ";
                                // line 53
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 53));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 54
                                    echo "                                <li>
                                  <a href=\"";
                                    // line 55
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "href", [], "any", false, false, false, 55);
                                    echo "\">
                                    ";
                                    // line 56
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "name", [], "any", false, false, false, 56);
                                    echo "
                                  </a>
                                </li>
                              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 60
                                echo "                            </ul>
                          ";
                            }
                            // line 62
                            echo "                          </li>
                        ";
                            // line 63
                            $context["k"] = (($context["k"] ?? null) + 1);
                            // line 64
                            echo "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 65
                        echo "                    </ul>
                ";
                    }
                    // line 66
                    echo " 
              </li>
              ";
                    // line 68
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 69
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "          </ul>
        ";
            }
            // line 72
            echo "
      </li>
    ";
            // line 74
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 75
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "  </ul>

  <div id=\"stats\">
    <ul>
      <li>
        <div>";
        // line 81
        echo ($context["text_complete_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["complete_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 83
        echo ($context["complete_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["complete_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["complete_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 87
        echo ($context["text_processing_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["processing_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
        // line 89
        echo ($context["processing_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["processing_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["processing_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 93
        echo ($context["text_other_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["other_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
        // line 95
        echo ($context["other_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["other_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["other_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 95,  312 => 93,  301 => 89,  294 => 87,  283 => 83,  276 => 81,  269 => 76,  263 => 75,  261 => 74,  257 => 72,  253 => 70,  247 => 69,  245 => 68,  241 => 66,  237 => 65,  231 => 64,  229 => 63,  226 => 62,  222 => 60,  212 => 56,  208 => 55,  205 => 54,  201 => 53,  192 => 52,  189 => 51,  183 => 48,  174 => 47,  168 => 44,  163 => 43,  160 => 42,  155 => 41,  153 => 40,  146 => 39,  144 => 38,  141 => 37,  135 => 34,  128 => 33,  122 => 30,  117 => 29,  115 => 28,  112 => 27,  107 => 26,  105 => 25,  101 => 24,  98 => 23,  96 => 22,  93 => 21,  87 => 18,  83 => 17,  79 => 16,  76 => 15,  70 => 12,  66 => 11,  61 => 10,  59 => 9,  53 => 7,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/column_left.twig", "");
    }
}
