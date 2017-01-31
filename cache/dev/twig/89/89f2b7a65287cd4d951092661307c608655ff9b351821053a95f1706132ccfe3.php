<?php

/* layout.html.twig */
class __TwigTemplate_96e06cabc04df9c802c20da4f7acbb43bd07c6d15b88e0e8e152fe25f5308e85 extends Twig_Template
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
        $__internal_72d56de2668a0ece49f9f04db2755e836165aa096315c1cef76e25e068152a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d56de2668a0ece49f9f04db2755e836165aa096315c1cef76e25e068152a6d->enter($__internal_72d56de2668a0ece49f9f04db2755e836165aa096315c1cef76e25e068152a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_72d56de2668a0ece49f9f04db2755e836165aa096315c1cef76e25e068152a6d->leave($__internal_72d56de2668a0ece49f9f04db2755e836165aa096315c1cef76e25e068152a6d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b85e1534810f40ef11ea5228b990f2cf202fe27256c5ba205eb446278ffe551b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85e1534810f40ef11ea5228b990f2cf202fe27256c5ba205eb446278ffe551b->enter($__internal_b85e1534810f40ef11ea5228b990f2cf202fe27256c5ba205eb446278ffe551b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b85e1534810f40ef11ea5228b990f2cf202fe27256c5ba205eb446278ffe551b->leave($__internal_b85e1534810f40ef11ea5228b990f2cf202fe27256c5ba205eb446278ffe551b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f57a03c1072ab2c7f3bab09539965881cc5406052955eba885e590cbc3d6e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f57a03c1072ab2c7f3bab09539965881cc5406052955eba885e590cbc3d6e18->enter($__internal_2f57a03c1072ab2c7f3bab09539965881cc5406052955eba885e590cbc3d6e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\"></link>
       <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"></link>
        ";
        
        $__internal_2f57a03c1072ab2c7f3bab09539965881cc5406052955eba885e590cbc3d6e18->leave($__internal_2f57a03c1072ab2c7f3bab09539965881cc5406052955eba885e590cbc3d6e18_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8bcaf4e2100d39a293b82aba106353545acc9ec2236d02f3a6618ff6aefdf63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bcaf4e2100d39a293b82aba106353545acc9ec2236d02f3a6618ff6aefdf63->enter($__internal_a8bcaf4e2100d39a293b82aba106353545acc9ec2236d02f3a6618ff6aefdf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "
        ";
        
        $__internal_a8bcaf4e2100d39a293b82aba106353545acc9ec2236d02f3a6618ff6aefdf63->leave($__internal_a8bcaf4e2100d39a293b82aba106353545acc9ec2236d02f3a6618ff6aefdf63_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5162611c209e1270b914848d1c4126c9ecf8fe0e844a84e9ee07a37c77174530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5162611c209e1270b914848d1c4126c9ecf8fe0e844a84e9ee07a37c77174530->enter($__internal_5162611c209e1270b914848d1c4126c9ecf8fe0e844a84e9ee07a37c77174530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5162611c209e1270b914848d1c4126c9ecf8fe0e844a84e9ee07a37c77174530->leave($__internal_5162611c209e1270b914848d1c4126c9ecf8fe0e844a84e9ee07a37c77174530_prof);

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
