<?php

/* extension/extension/captcha.twig */
class __TwigTemplate_60558dc76a4d0cc5fb21832c7903ee885be8685719db525cb81801e0516bbd9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["promotion"]) ? $context["promotion"] : null);
        echo "
<fieldset>
  <legend>";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</legend>
  ";
        // line 4
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 5
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 9
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 10
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 14
        echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 18
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
          <td class=\"text-left\">";
        // line 19
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
          <td class=\"text-right\">";
        // line 20
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
      
      ";
        // line 25
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            // line 26
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 27
                echo "      <tr>
        <td class=\"text-left\">";
                // line 28
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</td>
        <td class=\"text-left\">";
                // line 29
                echo $this->getAttribute($context["extension"], "status", array());
                echo "</td>
        <td class=\"text-right\">";
                // line 30
                if ($this->getAttribute($context["extension"], "installed", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["extension"], "edit", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> ";
                } else {
                    // line 31
                    echo "          <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
          ";
                }
                // line 33
                echo "          ";
                if ( !$this->getAttribute($context["extension"], "installed", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["extension"], "install", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_install"]) ? $context["button_install"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a> ";
                } else {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["extension"], "uninstall", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a> ";
                }
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      ";
        } else {
            // line 37
            echo "      <tr>
        <td class=\"text-center\" colspan=\"3\">";
            // line 38
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 41
        echo "      </tbody>
      
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "extension/extension/captcha.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  129 => 38,  126 => 37,  123 => 36,  101 => 33,  97 => 31,  89 => 30,  85 => 29,  81 => 28,  78 => 27,  73 => 26,  71 => 25,  63 => 20,  59 => 19,  55 => 18,  49 => 14,  41 => 10,  38 => 9,  30 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ promotion }}*/
/* <fieldset>*/
/*   <legend>{{ heading_title }}</legend>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="table-responsive">*/
/*     <table class="table table-bordered table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <td class="text-left">{{ column_name }}</td>*/
/*           <td class="text-left">{{ column_status }}</td>*/
/*           <td class="text-right">{{ column_action }}</td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       */
/*       {% if extensions %}*/
/*       {% for extension in extensions %}*/
/*       <tr>*/
/*         <td class="text-left">{{ extension.name }}</td>*/
/*         <td class="text-left">{{ extension.status }}</td>*/
/*         <td class="text-right">{% if extension.installed %} <a href="{{ extension.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a> {% else %}*/
/*           <button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-pencil"></i></button>*/
/*           {% endif %}*/
/*           {% if not extension.installed %} <a href="{{ extension.install }}" data-toggle="tooltip" title="{{ button_install }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></a> {% else %} <a href="{{ extension.uninstall }}" data-toggle="tooltip" title="{{ button_uninstall }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a> {% endif %}</td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*       {% else %}*/
/*       <tr>*/
/*         <td class="text-center" colspan="3">{{ text_no_results }}</td>*/
/*       </tr>*/
/*       {% endif %}*/
/*       </tbody>*/
/*       */
/*     </table>*/
/*   </div>*/
/* </fieldset>*/
/* */
