<?php

/* ProductProductBundle:Product:index.html.twig */
class __TwigTemplate_cbdf7a74859a51254b80edf872d8a3c45b049b01a13454ae5d7978d2022de014 extends Twig_Template
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
        $__internal_9c449b1de6283ab9922dc5d48d20528133e146e095d3378aeef11c7d4fa1fed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c449b1de6283ab9922dc5d48d20528133e146e095d3378aeef11c7d4fa1fed6->enter($__internal_9c449b1de6283ab9922dc5d48d20528133e146e095d3378aeef11c7d4fa1fed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductProductBundle:Product:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c449b1de6283ab9922dc5d48d20528133e146e095d3378aeef11c7d4fa1fed6->leave($__internal_9c449b1de6283ab9922dc5d48d20528133e146e095d3378aeef11c7d4fa1fed6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a515a0a94a1f1dacd4ab0eb1713b072d49718a7fa90ceef2a125db9b97f71a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a515a0a94a1f1dacd4ab0eb1713b072d49718a7fa90ceef2a125db9b97f71a95->enter($__internal_a515a0a94a1f1dacd4ab0eb1713b072d49718a7fa90ceef2a125db9b97f71a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
              
              <div class=\"count\">
                Total de Registros: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
             </div>
            
            <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>";
        // line 39
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Codígo", "p.code");
        echo " </th>
                <th>";
        // line 40
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "p.name");
        echo " </th>
                <th>";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Descripción", "p.description");
        echo " </th>
                <th>";
        // line 42
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Marca", "p.brand");
        echo " </th>
                <th>";
        // line 43
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Categoria", "p.category");
        echo " </th>
                <th>";
        // line 44
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Precio", "p.price");
        echo " </th>
                <th>";
        // line 45
        echo "Acciones";
        echo "</th>
               
              </tr>
            </thead>
            <tbody>
                 ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["prodct"]) {
            // line 51
            echo "              <tr>
                
                   <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "code", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "name", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "description", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "brand", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "category", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodct"], "price", array()), "html", null, true);
            echo "</td>
                   <td>
                     <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_product_view", array("id" => $this->getAttribute($context["prodct"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Ver</a>
                     <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_product_edit", array("id" => $this->getAttribute($context["prodct"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Editar</a>
                   </td>
               
              </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prodct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                
            </tbody>
          </table>
          
        <div class=\"navigation\">
    ";
        // line 71
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
            
          </div>
          
        </div>
         
       </div>
";
        
        $__internal_a515a0a94a1f1dacd4ab0eb1713b072d49718a7fa90ceef2a125db9b97f71a95->leave($__internal_a515a0a94a1f1dacd4ab0eb1713b072d49718a7fa90ceef2a125db9b97f71a95_prof);

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
        return array (  186 => 71,  179 => 66,  168 => 61,  164 => 60,  159 => 58,  155 => 57,  151 => 56,  147 => 55,  143 => 54,  139 => 53,  135 => 51,  131 => 50,  123 => 45,  119 => 44,  115 => 43,  111 => 42,  107 => 41,  103 => 40,  99 => 39,  90 => 33,  79 => 25,  72 => 20,  60 => 14,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
              
              <div class=\"count\">
                Total de Registros: {{ pagination.getTotalItemCount }}
             </div>
            
            <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>{{ knp_pagination_sortable(pagination, 'Codígo', 'p.code') }} </th>
                <th>{{ knp_pagination_sortable(pagination, 'Nombre', 'p.name') }} </th>
                <th>{{ knp_pagination_sortable(pagination, 'Descripción', 'p.description') }} </th>
                <th>{{ knp_pagination_sortable(pagination, 'Marca', 'p.brand') }} </th>
                <th>{{ knp_pagination_sortable(pagination, 'Categoria', 'p.category') }} </th>
                <th>{{ knp_pagination_sortable(pagination, 'Precio', 'p.price') }} </th>
                <th>{{'Acciones'}}</th>
               
              </tr>
            </thead>
            <tbody>
                 {%for prodct in pagination%}
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
                   </td>
               
              </tr>
                {%endfor%}
                
            </tbody>
          </table>
          
        <div class=\"navigation\">
    {{ knp_pagination_render(pagination) }}
        </div>
            
          </div>
          
        </div>
         
       </div>
{% endblock%}", "ProductProductBundle:Product:index.html.twig", "/home/ubuntu/workspace/src/Product/ProductBundle/Resources/views/Product/index.html.twig");
    }
}
