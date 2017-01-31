<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54bf55144d3e795488ed2df7d3141d0f40cad06d380b77451d87990cf54c69dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81b16bb1858c265f9998a45feb511aa5fbb803d864198c51584358a51ccb9823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b16bb1858c265f9998a45feb511aa5fbb803d864198c51584358a51ccb9823->enter($__internal_81b16bb1858c265f9998a45feb511aa5fbb803d864198c51584358a51ccb9823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81b16bb1858c265f9998a45feb511aa5fbb803d864198c51584358a51ccb9823->leave($__internal_81b16bb1858c265f9998a45feb511aa5fbb803d864198c51584358a51ccb9823_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4990ee31ef054cede9985210c9531fc694a129c9bdc48994c7f3e0ea051907f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4990ee31ef054cede9985210c9531fc694a129c9bdc48994c7f3e0ea051907f3->enter($__internal_4990ee31ef054cede9985210c9531fc694a129c9bdc48994c7f3e0ea051907f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4990ee31ef054cede9985210c9531fc694a129c9bdc48994c7f3e0ea051907f3->leave($__internal_4990ee31ef054cede9985210c9531fc694a129c9bdc48994c7f3e0ea051907f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b317c62b447cd0793f214f3add0447256dd80886e5549279da44fc1dfe1ba98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b317c62b447cd0793f214f3add0447256dd80886e5549279da44fc1dfe1ba98d->enter($__internal_b317c62b447cd0793f214f3add0447256dd80886e5549279da44fc1dfe1ba98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b317c62b447cd0793f214f3add0447256dd80886e5549279da44fc1dfe1ba98d->leave($__internal_b317c62b447cd0793f214f3add0447256dd80886e5549279da44fc1dfe1ba98d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8369f1b0b0abbd89198c98fd10a1b496d2bc4ec0d911162bed7252c8ef04130e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8369f1b0b0abbd89198c98fd10a1b496d2bc4ec0d911162bed7252c8ef04130e->enter($__internal_8369f1b0b0abbd89198c98fd10a1b496d2bc4ec0d911162bed7252c8ef04130e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8369f1b0b0abbd89198c98fd10a1b496d2bc4ec0d911162bed7252c8ef04130e->leave($__internal_8369f1b0b0abbd89198c98fd10a1b496d2bc4ec0d911162bed7252c8ef04130e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
