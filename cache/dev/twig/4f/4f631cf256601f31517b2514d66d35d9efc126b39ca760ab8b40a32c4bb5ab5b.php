<?php

/* ProductProductBundle:Product:view.html.twig */
class __TwigTemplate_28e2a4b539d550ac8a1288733c0674a3716defe8a23c95c6d40b20c611179586 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ProductProductBundle:Product:view.html.twig", 1);
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
        $__internal_9726607e923a59b4c83a3d7900b230e580091259ef6573f3d7fc500d08e1827d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9726607e923a59b4c83a3d7900b230e580091259ef6573f3d7fc500d08e1827d->enter($__internal_9726607e923a59b4c83a3d7900b230e580091259ef6573f3d7fc500d08e1827d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductProductBundle:Product:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9726607e923a59b4c83a3d7900b230e580091259ef6573f3d7fc500d08e1827d->leave($__internal_9726607e923a59b4c83a3d7900b230e580091259ef6573f3d7fc500d08e1827d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9471ca30f9711422a3c80c973221d940d8cd2340f5bd3ed4dbb4b07e5e20dee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9471ca30f9711422a3c80c973221d940d8cd2340f5bd3ed4dbb4b07e5e20dee0->enter($__internal_9471ca30f9711422a3c80c973221d940d8cd2340f5bd3ed4dbb4b07e5e20dee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayParentBlock("body", $context, $blocks);
        echo "
</br>
</br>
</br>
<div class=\"container\">
    
    <div class=\"row\">
        
           <div class=\"col-sm-10\">
               
                   
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Codígo:</label>
                      <label style=\"font-size: 17px;\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "code", array()), "html", null, true);
        echo "</label>
                      </div>
                  </div>
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Nombre:</label>
                      <label style=\"font-size: 17px;\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</label>
                      </div>
                  </div>
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Marca:</label>
                      <label style=\"font-size: 17px;\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "Brand", array()), "html", null, true);
        echo "</label>
                      </div>
                  </div>
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Categoria:</label>
                      <label style=\"font-size: 17px;\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category", array()), "html", null, true);
        echo "</label>
                      </div>
                  </div>
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Precio:</label>
                      <label style=\"font-size: 17px;\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</label>
                      </div>
                  </div>
                  
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Descripción:</label>
                      <label style=\"font-size: 17px;\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</label>
                      </div>
                  </div>
        
            </div>
            
            <div class=\"col-sm-2\">
                
                 <p>
            
                    ";
        // line 58
        echo twig_include($this->env, $context, "ProductProductBundle:Product:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form"))));
        echo "
                                   
                </p>
                
            </div>
           
       </div>
      
</div>
";
        
        $__internal_9471ca30f9711422a3c80c973221d940d8cd2340f5bd3ed4dbb4b07e5e20dee0->leave($__internal_9471ca30f9711422a3c80c973221d940d8cd2340f5bd3ed4dbb4b07e5e20dee0_prof);

    }

    public function getTemplateName()
    {
        return "ProductProductBundle:Product:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 58,  103 => 48,  93 => 41,  84 => 35,  75 => 29,  66 => 23,  57 => 17,  40 => 3,  34 => 2,  11 => 1,);
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
</br>
<div class=\"container\">
    
    <div class=\"row\">
        
           <div class=\"col-sm-10\">
               
                   
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Codígo:</label>
                      <label style=\"font-size: 17px;\">{{product.code}}</label>
                      </div>
                  </div>
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Nombre:</label>
                      <label style=\"font-size: 17px;\">{{product.name}}</label>
                      </div>
                  </div>
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Marca:</label>
                      <label style=\"font-size: 17px;\">{{product.Brand}}</label>
                      </div>
                  </div>
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Categoria:</label>
                      <label style=\"font-size: 17px;\">{{product.category}}</label>
                      </div>
                  </div>
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Precio:</label>
                      <label style=\"font-size: 17px;\">{{product.price}}</label>
                      </div>
                  </div>
                  
                  <div class=\"col-sm-4\">
                      <div class=\"jumbotron\">
                      <label style=\"font-size: 17px;\" class=\"label label-info\">Descripción:</label>
                      <label style=\"font-size: 17px;\">{{product.description}}</label>
                      </div>
                  </div>
        
            </div>
            
            <div class=\"col-sm-2\">
                
                 <p>
            
                    {{ include('ProductProductBundle:Product:forms/form.html.twig', {form: delete_form})}}
                                   
                </p>
                
            </div>
           
       </div>
      
</div>
{% endblock %}", "ProductProductBundle:Product:view.html.twig", "/home/ubuntu/workspace/src/Product/ProductBundle/Resources/views/Product/view.html.twig");
    }
}
