<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3dacc56b083583556969429dbcc1df859a74098685dcbf928bdf871178cc2f08 extends Twig_Template
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
        $__internal_5d26becd55c9255eb6c1ce5373b844e69da63c84c9f5521bf0692e9e710a5853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d26becd55c9255eb6c1ce5373b844e69da63c84c9f5521bf0692e9e710a5853->enter($__internal_5d26becd55c9255eb6c1ce5373b844e69da63c84c9f5521bf0692e9e710a5853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d26becd55c9255eb6c1ce5373b844e69da63c84c9f5521bf0692e9e710a5853->leave($__internal_5d26becd55c9255eb6c1ce5373b844e69da63c84c9f5521bf0692e9e710a5853_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7924a6b84aa79e50260f71eaaefd6d8750f2a7db04f7fb18e113d3e3266d6d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7924a6b84aa79e50260f71eaaefd6d8750f2a7db04f7fb18e113d3e3266d6d07->enter($__internal_7924a6b84aa79e50260f71eaaefd6d8750f2a7db04f7fb18e113d3e3266d6d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7924a6b84aa79e50260f71eaaefd6d8750f2a7db04f7fb18e113d3e3266d6d07->leave($__internal_7924a6b84aa79e50260f71eaaefd6d8750f2a7db04f7fb18e113d3e3266d6d07_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_731548c4fcd64379575097f09eaa2bb508bdae00c110d016225e982cd4972684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731548c4fcd64379575097f09eaa2bb508bdae00c110d016225e982cd4972684->enter($__internal_731548c4fcd64379575097f09eaa2bb508bdae00c110d016225e982cd4972684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_731548c4fcd64379575097f09eaa2bb508bdae00c110d016225e982cd4972684->leave($__internal_731548c4fcd64379575097f09eaa2bb508bdae00c110d016225e982cd4972684_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de2dc60eb321c8d52fc82bcd5f894586ef36194b0e90ff3f6eba04e169baa18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2dc60eb321c8d52fc82bcd5f894586ef36194b0e90ff3f6eba04e169baa18b->enter($__internal_de2dc60eb321c8d52fc82bcd5f894586ef36194b0e90ff3f6eba04e169baa18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_de2dc60eb321c8d52fc82bcd5f894586ef36194b0e90ff3f6eba04e169baa18b->leave($__internal_de2dc60eb321c8d52fc82bcd5f894586ef36194b0e90ff3f6eba04e169baa18b_prof);

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
