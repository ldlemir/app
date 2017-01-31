<?php

/* layout.html.twig */
class __TwigTemplate_a23a2dea14ae8c61f035b07d4e9554c7a66e7a960eaa379e5abaa27b84a3ecc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fcba6958a8188194edefd0a13b32cacffe8476d6c6827164256fc0836eedc41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcba6958a8188194edefd0a13b32cacffe8476d6c6827164256fc0836eedc41->enter($__internal_3fcba6958a8188194edefd0a13b32cacffe8476d6c6827164256fc0836eedc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_3fcba6958a8188194edefd0a13b32cacffe8476d6c6827164256fc0836eedc41->leave($__internal_3fcba6958a8188194edefd0a13b32cacffe8476d6c6827164256fc0836eedc41_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_765296971a440f45a34b8115d1bf4f712828a32b14e1672141be8c94855d97f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765296971a440f45a34b8115d1bf4f712828a32b14e1672141be8c94855d97f8->enter($__internal_765296971a440f45a34b8115d1bf4f712828a32b14e1672141be8c94855d97f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_765296971a440f45a34b8115d1bf4f712828a32b14e1672141be8c94855d97f8->leave($__internal_765296971a440f45a34b8115d1bf4f712828a32b14e1672141be8c94855d97f8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7801dd9d103269bcdb12defce49f9721dcd1ff5ef38654457d0c73964d617149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7801dd9d103269bcdb12defce49f9721dcd1ff5ef38654457d0c73964d617149->enter($__internal_7801dd9d103269bcdb12defce49f9721dcd1ff5ef38654457d0c73964d617149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\"></link>
       <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"></link>
        ";
        
        $__internal_7801dd9d103269bcdb12defce49f9721dcd1ff5ef38654457d0c73964d617149->leave($__internal_7801dd9d103269bcdb12defce49f9721dcd1ff5ef38654457d0c73964d617149_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab8a03a863603c3e2b92d3bbbf36757f96b433862657ae5ddee3659a92b70e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8a03a863603c3e2b92d3bbbf36757f96b433862657ae5ddee3659a92b70e93->enter($__internal_ab8a03a863603c3e2b92d3bbbf36757f96b433862657ae5ddee3659a92b70e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "
        ";
        
        $__internal_ab8a03a863603c3e2b92d3bbbf36757f96b433862657ae5ddee3659a92b70e93->leave($__internal_ab8a03a863603c3e2b92d3bbbf36757f96b433862657ae5ddee3659a92b70e93_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e80eea9b707e80843dda42c0f6828a846fb9bb0ddc6524f421550a6caf46b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e80eea9b707e80843dda42c0f6828a846fb9bb0ddc6524f421550a6caf46b7b->enter($__internal_0e80eea9b707e80843dda42c0f6828a846fb9bb0ddc6524f421550a6caf46b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_0e80eea9b707e80843dda42c0f6828a846fb9bb0ddc6524f421550a6caf46b7b->leave($__internal_0e80eea9b707e80843dda42c0f6828a846fb9bb0ddc6524f421550a6caf46b7b_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 18,  113 => 17,  107 => 16,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('public/css/bootstrap.min.css')}}\"></link>
       <link rel=\"stylesheet\" href=\"{{asset('public/css/style.css')}}\"></link>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
        {{include('navbar.html.twig')}}
        {% endblock %}
        {% block javascripts %}
        <script src=\"{{asset('public/js/jquery-3.1.1.min.js')}}\"></script>
         <script src=\"{{asset('public/js/bootstrap.min.js')}}\"></script>
        {% endblock %}
    </body>
</html>
", "layout.html.twig", "/home/ubuntu/workspace/app/Resources/views/layout.html.twig");
    }
}
