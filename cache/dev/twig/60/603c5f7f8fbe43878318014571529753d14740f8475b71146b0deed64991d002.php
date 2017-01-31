<?php

/* ProductProductBundle:Product:edit.html.twig */
class __TwigTemplate_87e87dd1e998dd9bd59d53d6f9b60da17a8adb6b7c0bf48ebbbe439e074a60e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ProductProductBundle:Product:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c454484761ecc7796a1b38429b9b4b649919be5c8e0faab1efa694440279c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c454484761ecc7796a1b38429b9b4b649919be5c8e0faab1efa694440279c58->enter($__internal_5c454484761ecc7796a1b38429b9b4b649919be5c8e0faab1efa694440279c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductProductBundle:Product:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c454484761ecc7796a1b38429b9b4b649919be5c8e0faab1efa694440279c58->leave($__internal_5c454484761ecc7796a1b38429b9b4b649919be5c8e0faab1efa694440279c58_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6314d431e1cda199bba94da51fd6da08ea9c5cdcb26ac057c8a97fcf6cf892ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6314d431e1cda199bba94da51fd6da08ea9c5cdcb26ac057c8a97fcf6cf892ad->enter($__internal_6314d431e1cda199bba94da51fd6da08ea9c5cdcb26ac057c8a97fcf6cf892ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
</br>
</br>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-2\">
            
            <h2>Editar Producto</h2>
            
           ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("product" => "form")));
        echo "
           
           <div class=\"form-group\">
               
               ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'label');
        echo "
               ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "codígo")));
        echo "
               <span class=\"text-danger\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'errors');
        echo "</span>
               
           </div>
           
           <div class=\"form-group\">
               
               ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
               ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre")));
        echo "
               ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
               
           </div>
           
           <div class=\"form-group\">
               
               ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
               ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Descripcion")));
        echo "
               ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
               
           </div>
            
            <div class=\"form-group\">
               
               ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brand", array()), 'label');
        echo "
               ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brand", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Marca")));
        echo "
               ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brand", array()), 'errors');
        echo "
               
           </div>
           
           <div class=\"form-group\">
               
               ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label');
        echo "
               ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Categoria")));
        echo "
               ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'errors');
        echo "
               
           </div>
           
           <div class=\"form-group\">
               
               ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'label');
        echo "
               ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Precio")));
        echo "
               ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'errors');
        echo "
               
           </div>
           
         <p>
              ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-block")));
        echo "     
        </p>
    
            
            ";
        // line 68
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            
             <!--<a href=\"path('product_product_index')\" class=\"btn btn-info\">Regresar a la lista de Productos</href>-->
            
        </div>
    </div>
</div>

";
        
        $__internal_6314d431e1cda199bba94da51fd6da08ea9c5cdcb26ac057c8a97fcf6cf892ad->leave($__internal_6314d431e1cda199bba94da51fd6da08ea9c5cdcb26ac057c8a97fcf6cf892ad_prof);

    }

    public function getTemplateName()
    {
        return "ProductProductBundle:Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 68,  163 => 64,  155 => 59,  151 => 58,  147 => 57,  138 => 51,  134 => 50,  130 => 49,  121 => 43,  117 => 42,  113 => 41,  104 => 35,  100 => 34,  96 => 33,  87 => 27,  83 => 26,  79 => 25,  70 => 19,  66 => 18,  62 => 17,  55 => 13,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends 'layout.html.twig'%}
{%block body%}

{{parent()}}
</br>
</br>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-2\">
            
            <h2>Editar Producto</h2>
            
           {{ form_start(form, {'attr': {'product': 'form'} }) }}
           
           <div class=\"form-group\">
               
               {{form_label(form.code) }}
               {{form_widget(form.code, {'attr':{'class' : 'form-control', 'placeholder':'codígo'} } )}}
               <span class=\"text-danger\">{{form_errors(form.code)}}</span>
               
           </div>
           
           <div class=\"form-group\">
               
               {{form_label(form.name)}}
               {{ form_widget(form.name, {'attr' : {'class': 'form-control', 'placeholder': 'Nombre' } }) }}
               {{ form_errors(form.name) }}
               
           </div>
           
           <div class=\"form-group\">
               
               {{form_label(form.description)}}
               {{ form_widget(form.description, {'attr' : {'class': 'form-control', 'placeholder': 'Descripcion' } }) }}
               {{ form_errors(form.description) }}
               
           </div>
            
            <div class=\"form-group\">
               
               {{form_label(form.brand)}}
               {{ form_widget(form.brand, {'attr' : {'class': 'form-control', 'placeholder': 'Marca' } }) }}
               {{ form_errors(form.brand) }}
               
           </div>
           
           <div class=\"form-group\">
               
               {{form_label(form.category)}}
               {{ form_widget(form.category, {'attr' : {'class': 'form-control', 'placeholder': 'Categoria' } }) }}
               {{ form_errors(form.category) }}
               
           </div>
           
           <div class=\"form-group\">
               
               {{form_label(form.price)}}
               {{ form_widget(form.price, {'attr' : {'class': 'form-control', 'placeholder': 'Precio' } }) }}
               {{ form_errors(form.price) }}
               
           </div>
           
         <p>
              {{ form_widget(form.save,  {'attr' : {'class': 'btn btn-success btn-block' } })}}     
        </p>
    
            
            {{ form_end(form) }}
            
             <!--<a href=\"path('product_product_index')\" class=\"btn btn-info\">Regresar a la lista de Productos</href>-->
            
        </div>
    </div>
</div>

{% endblock %}", "ProductProductBundle:Product:edit.html.twig", "/home/ubuntu/workspace/src/Product/ProductBundle/Resources/views/Product/edit.html.twig");
    }
}
