<?php

/* modules/svg_image_field/templates/svg-image-field-formatter.html.twig */
class __TwigTemplate_01e07a9bcf91078f9406237e3e5bc0a4012fc0668dd5d01f3431d56551f23ebb extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array("raw" => 2);
        $functions = array("file_url" => 4);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('raw'),
                array('file_url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        if ((isset($context["inline"]) ? $context["inline"] : null)) {
            // line 2
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["svg_data"]) ? $context["svg_data"] : null)));
            echo "
";
        } else {
            // line 4
            echo "  <img";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo " src=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array((isset($context["uri"]) ? $context["uri"] : null))), "html", null, true));
            echo " />
";
        }
    }

    public function getTemplateName()
    {
        return "modules/svg_image_field/templates/svg-image-field-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if inline %}
  {{ svg_data|raw }}
{% else %}
  <img{{ attributes }} src={{ file_url(uri) }} />
{% endif %}
";
    }
}
