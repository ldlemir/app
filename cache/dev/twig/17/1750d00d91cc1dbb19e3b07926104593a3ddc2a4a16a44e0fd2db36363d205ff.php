<?php

/* ProductProductBundle:Product:add.html.twig */
class __TwigTemplate_926a800f051678f43b086b14f3ed5cee4cf2d2213cc05df787ed02a566084be7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ProductProductBundle:Product:add.html.twig", 1);
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
        $__internal_4fb5ada877fd52fc15428f6d909c7d23d3597854a04acd0c1990709e31b65bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb5ada877fd52fc15428f6d909c7d23d3597854a04acd0c1990709e31b65bc1->enter($__internal_4fb5ada877fd52fc15428f6d909c7d23d3597854a04acd0c1990709e31b65bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductProductBundle:Product:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fb5ada877fd52fc15428f6d909c7d23d3597854a04acd0c1990709e31b65bc1->leave($__internal_4fb5ada877fd52fc15428f6d909c7d23d3597854a04acd0c1990709e31b65bc1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_31d0351070b97820f489e30634f9c68af7d2a8f1ab0fb872b162b57e7840965d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d0351070b97820f489e30634f9c68af7d2a8f1ab0fb872b162b57e7840965d->enter($__internal_31d0351070b97820f489e30634f9c68af7d2a8f1ab0fb872b162b57e7840965d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"col-md-6 col-md-offset-3\">
            
            <h2>Nuevo Producto</h2>
            
           ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "product" => "form")));
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
        
        $__internal_31d0351070b97820f489e30634f9c68af7d2a8f1ab0fb872b162b57e7840965d->leave($__internal_31d0351070b97820f489e30634f9c68af7d2a8f1ab0fb872b162b57e7840965d_prof);

    }

    public function getTemplateName()
    {
        return "ProductProductBundle:Product:add.html.twig";
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
        <div class=\"col-md-6 col-md-offset-3\">
            
            <h2>Nuevo Producto</h2>
            
           {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'product': 'form'} }) }}
           
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

{% endblock %}", "ProductProductBundle:Product:add.html.twig", "/home/ubuntu/workspace/src/Product/ProductBundle/Resources/views/Product/add.html.twig");
    }
}
