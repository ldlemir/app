<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_fde8fe81a1a69ebae29cfa4f13bfe05d28cd97043a95fbcb2018660c9c93bf85 extends Twig_Template
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
        $__internal_45176a5cd6c0521b1c12e649bbc07a5b58575e4e689a34f21c1b4647de12360f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45176a5cd6c0521b1c12e649bbc07a5b58575e4e689a34f21c1b4647de12360f->enter($__internal_45176a5cd6c0521b1c12e649bbc07a5b58575e4e689a34f21c1b4647de12360f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_js.html.twig"));

        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->loadTemplate("@WebProfiler/Profiler/base_js.html.twig", "@WebProfiler/Profiler/toolbar_js.html.twig", 2)->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }

                Sfjs.renderAjaxRequests();

                /* Handle toolbar-info position */
                var toolbarBlocks = document.querySelectorAll('.sf-toolbar-block');
                for (var i = 0; i < toolbarBlocks.length; i += 1) {
                    toolbarBlocks[i].onmouseover = function () {
                        var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                        var pageWidth = document.body.clientWidth;
                        var elementWidth = toolbarInfo.offsetWidth;
                        var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                        var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                        /* Reset right and left value, useful on window resize */
                        toolbarInfo.style.right = '';
                        toolbarInfo.style.left = '';

                        if (leftValue > 0 && rightValue > 0) {
                            toolbarInfo.style.right = (rightValue * -1) + 'px';
                        } else if (leftValue < 0) {
                            toolbarInfo.style.left = 0;
                        } else {
                            toolbarInfo.style.right = '-1px';
                        }
                    };
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
        
        $__internal_45176a5cd6c0521b1c12e649bbc07a5b58575e4e689a34f21c1b4647de12360f->leave($__internal_45176a5cd6c0521b1c12e649bbc07a5b58575e4e689a34f21c1b4647de12360f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 61,  86 => 30,  82 => 29,  78 => 28,  73 => 26,  69 => 25,  65 => 24,  53 => 15,  49 => 14,  45 => 12,  35 => 6,  33 => 5,  29 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sfwdt{{ token }}\" class=\"sf-toolbar\" style=\"display: none\"></div>
{% include '@WebProfiler/Profiler/base_js.html.twig' %}
<script>/*<![CDATA[*/
    (function () {
        {% if 'top' == position %}
            var sfwdt = document.getElementById('sfwdt{{ token }}');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        {% endif %}

        Sfjs.load(
            'sfwdt{{ token }}',
            '{{ path(\"_wdt\", { \"token\": token }) }}',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';
                    document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';
                    document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';
                    document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';
                    document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'none';
                }

                Sfjs.renderAjaxRequests();

                /* Handle toolbar-info position */
                var toolbarBlocks = document.querySelectorAll('.sf-toolbar-block');
                for (var i = 0; i < toolbarBlocks.length; i += 1) {
                    toolbarBlocks[i].onmouseover = function () {
                        var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                        var pageWidth = document.body.clientWidth;
                        var elementWidth = toolbarInfo.offsetWidth;
                        var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                        var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                        /* Reset right and left value, useful on window resize */
                        toolbarInfo.style.right = '';
                        toolbarInfo.style.left = '';

                        if (leftValue > 0 && rightValue > 0) {
                            toolbarInfo.style.right = (rightValue * -1) + 'px';
                        } else if (leftValue < 0) {
                            toolbarInfo.style.left = 0;
                        } else {
                            toolbarInfo.style.right = '-1px';
                        }
                    };
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '{{ path(\"_profiler\", { \"token\": token }) }}');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
", "@WebProfiler/Profiler/toolbar_js.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_js.html.twig");
    }
}
