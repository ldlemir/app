<?php

/* ProductProductBundle:Product:forms/form.html.twig */
class __TwigTemplate_bea84818d5eaf9f4d0505fda0fff8c496389eb5c54e1ad3ebb61eeec77c8b3af extends Twig_Template
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
        $__internal_8e630324b7942e59e94b536c7872bbeac9c71b4fb89a7758b9ea902ae4a30a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e630324b7942e59e94b536c7872bbeac9c71b4fb89a7758b9ea902ae4a30a66->enter($__internal_8e630324b7942e59e94b536c7872bbeac9c71b4fb89a7758b9ea902ae4a30a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductProductBundle:Product:forms/form.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<input class=\"btn btn-danger\" type=\"submit\" value=\"";
        // line 5
        echo " Eliminar Producto";
        echo "\" onclick=\"return confirm('Esta seguro de eliminar este producto')\"></input>

";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_8e630324b7942e59e94b536c7872bbeac9c71b4fb89a7758b9ea902ae4a30a66->leave($__internal_8e630324b7942e59e94b536c7872bbeac9c71b4fb89a7758b9ea902ae4a30a66_prof);

    }

    public function getTemplateName()
    {
        return "ProductProductBundle:Product:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  32 => 5,  27 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form)}}

{{form_widget(form)}}

<input class=\"btn btn-danger\" type=\"submit\" value=\"{{' Eliminar Producto' }}\" onclick=\"return confirm('Esta seguro de eliminar este producto')\"></input>

{{form_end(form)}}", "ProductProductBundle:Product:forms/form.html.twig", "/home/ubuntu/workspace/src/Product/ProductBundle/Resources/views/Product/forms/form.html.twig");
    }
}
