<?php

/* ProductProductBundle:Product:index.html.twig */
class __TwigTemplate_ee49d500140c5a6425d2af62f03165908afe60c76097715b719723eaeebf5688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ProductProductBundle:Product:index.html.twig", 1);
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
        $__internal_1454a970c71b1883f70739a5600b469a1b2c85d3ea6d32ae2bf7d5c6bb9d98ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1454a970c71b1883f70739a5600b469a1b2c85d3ea6d32ae2bf7d5c6bb9d98ca->enter($__internal_1454a970c71b1883f70739a5600b469a1b2c85d3ea6d32ae2bf7d5c6bb9d98ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductProductBundle:Product:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1454a970c71b1883f70739a5600b469a1b2c85d3ea6d32ae2bf7d5c6bb9d98ca->leave($__internal_1454a970c71b1883f70739a5600b469a1b2c85d3ea6d32ae2bf7d5c6bb9d98ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1fe18fe84b4bf5ef7bd583867ad3b99c5a37ceb8e432f5ea77af5e948ea72f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fe18fe84b4bf5ef7bd583867ad3b99c5a37ceb8e432f5ea77af5e948ea72f8->enter($__internal_f1fe18fe84b4bf5ef7bd583867ad3b99c5a37ceb8e432f5ea77af5e948ea72f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "

</br>
         </br>
         ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "Flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "         
         <div class=\"alert alert-success\" role=\"alert\">
             
             <div class=\"container\">
                 ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
             </div>
             
         </div>
         
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  
       <div class=\"container\">
         
           <h2>Productos</h2> <br>
            
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_product_add");
        echo "\"  class=\"btn btn-info\">Agregar Producto</a> 
            
         
          <div class=\"row\">
          
          <div class=\"col-md-12\">
            
            <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Codío"), "html", null, true);
        echo "</th>
                <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nombre"), "html", null, true);
        echo "</th>
                <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Descripción"), "html", null, true);
        echo "</th>
                <th>";
        // line 38
        echo "Marca| trans";
        echo "</th>
                <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categoria"), "html", null, true);
        echo "</th>
                <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Precio"), "html", null, true);
        echo "</th>
                <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acciones"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>
                 ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["prodct"]) {
            // line 46
            echo "              <tr>
                
                   <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "code", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "description", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "brand", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "category", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "price", array()), "html", null, true);
            echo "</td>
                   <td>
                     <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_product_view", array("id" => $this->getAttribute($context["prodct"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Ver</a>
                     <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_product_edit", array("id" => $this->getAttribute($context["prodct"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Editar</a>
                     <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_product_delete", array("id" => $this->getAttribute($context["prodct"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\" return confirm('Esta seguro de')\">Eliminar</a>
                   </td>
               
              </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prodct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                
            </tbody>
          </table>
            
          </div>
          
        </div>
         
       </div>
";
        
        $__internal_f1fe18fe84b4bf5ef7bd583867ad3b99c5a37ceb8e432f5ea77af5e948ea72f8->leave($__internal_f1fe18fe84b4bf5ef7bd583867ad3b99c5a37ceb8e432f5ea77af5e948ea72f8_prof);

    }

    public function getTemplateName()
    {
        return "ProductProductBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  164 => 57,  160 => 56,  156 => 55,  151 => 53,  147 => 52,  143 => 51,  139 => 50,  135 => 49,  131 => 48,  127 => 46,  123 => 45,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  79 => 25,  72 => 20,  60 => 14,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig'%}

{% block body%}

{{parent()}}

</br>
         </br>
         {% for flashMessage in app.session.Flashbag.get('mensaje') %}
         
         <div class=\"alert alert-success\" role=\"alert\">
             
             <div class=\"container\">
                 {{flashMessage}}
             </div>
             
         </div>
         
         {% endfor %}
  
       <div class=\"container\">
         
           <h2>Productos</h2> <br>
            
            <a href=\"{{path('product_product_add')}}\"  class=\"btn btn-info\">Agregar Producto</a> 
            
         
          <div class=\"row\">
          
          <div class=\"col-md-12\">
            
            <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>{{'Codío'| trans}}</th>
                <th>{{'Nombre'| trans}}</th>
                <th>{{'Descripción'| trans}}</th>
                <th>{{'Marca| trans'}}</th>
                <th>{{'Categoria'| trans}}</th>
                <th>{{'Precio'| trans}}</th>
                <th>{{'Acciones'| trans}}</th>
              </tr>
            </thead>
            <tbody>
                 {%for prodct in products%}
              <tr>
                
                   <td>{{prodct.code}}</td>
                   <td>{{prodct.name}}</td>
                   <td>{{prodct.description}}</td>
                   <td>{{prodct.brand}}</td>
                   <td>{{prodct.category}}</td>
                   <td>{{prodct.price}}</td>
                   <td>
                     <a href=\"{{path('product_product_view',{id: prodct.id})}}\" class=\"btn btn-success\">Ver</a>
                     <a href=\"{{ path('product_product_edit', {id: prodct.id} ) }}\" class=\"btn btn-warning\">Editar</a>
                     <a href=\"{{ path('product_product_delete', {id:prodct.id}) }}\" class=\"btn btn-danger\" onclick=\" return confirm('Esta seguro de')\">Eliminar</a>
                   </td>
               
              </tr>
                {%endfor%}
                
            </tbody>
          </table>
            
          </div>
          
        </div>
         
       </div>
{% endblock%}", "ProductProductBundle:Product:index.html.twig", "/home/ubuntu/workspace/src/Product/ProductBundle/Resources/views/Product/index.html.twig");
    }
}
