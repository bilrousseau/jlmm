<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f701afb5e1eac1700605de96850c4e62a12132037ef938ea0dd4f170607ff057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f701afb5e1eac1700605de96850c4e62a12132037ef938ea0dd4f170607ff057->enter($__internal_f701afb5e1eac1700605de96850c4e62a12132037ef938ea0dd4f170607ff057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4d085adc80a0b2656c3045a54d6d59ca999a6c18430fdd2c4c7b1ee2abf10206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d085adc80a0b2656c3045a54d6d59ca999a6c18430fdd2c4c7b1ee2abf10206->enter($__internal_4d085adc80a0b2656c3045a54d6d59ca999a6c18430fdd2c4c7b1ee2abf10206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f701afb5e1eac1700605de96850c4e62a12132037ef938ea0dd4f170607ff057->leave($__internal_f701afb5e1eac1700605de96850c4e62a12132037ef938ea0dd4f170607ff057_prof);

        
        $__internal_4d085adc80a0b2656c3045a54d6d59ca999a6c18430fdd2c4c7b1ee2abf10206->leave($__internal_4d085adc80a0b2656c3045a54d6d59ca999a6c18430fdd2c4c7b1ee2abf10206_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_748e71de6d125aaf84ba64b31fa1f1d76d1dbe2f2ebef449ef3b9eb1450cceb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748e71de6d125aaf84ba64b31fa1f1d76d1dbe2f2ebef449ef3b9eb1450cceb0->enter($__internal_748e71de6d125aaf84ba64b31fa1f1d76d1dbe2f2ebef449ef3b9eb1450cceb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05eeb9b28b388b31f7ae2a4361d3bd966009dd72af5fedba4166a0d8848f703f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05eeb9b28b388b31f7ae2a4361d3bd966009dd72af5fedba4166a0d8848f703f->enter($__internal_05eeb9b28b388b31f7ae2a4361d3bd966009dd72af5fedba4166a0d8848f703f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_05eeb9b28b388b31f7ae2a4361d3bd966009dd72af5fedba4166a0d8848f703f->leave($__internal_05eeb9b28b388b31f7ae2a4361d3bd966009dd72af5fedba4166a0d8848f703f_prof);

        
        $__internal_748e71de6d125aaf84ba64b31fa1f1d76d1dbe2f2ebef449ef3b9eb1450cceb0->leave($__internal_748e71de6d125aaf84ba64b31fa1f1d76d1dbe2f2ebef449ef3b9eb1450cceb0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82cd036ceef07b2dd439db21b4be141f89a38ffe6dfc7299437e1e1b1ee47871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82cd036ceef07b2dd439db21b4be141f89a38ffe6dfc7299437e1e1b1ee47871->enter($__internal_82cd036ceef07b2dd439db21b4be141f89a38ffe6dfc7299437e1e1b1ee47871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2b88f0f3495a8a607517e2b9c284f73c3db77c29597985767f57105932b9596d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b88f0f3495a8a607517e2b9c284f73c3db77c29597985767f57105932b9596d->enter($__internal_2b88f0f3495a8a607517e2b9c284f73c3db77c29597985767f57105932b9596d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2b88f0f3495a8a607517e2b9c284f73c3db77c29597985767f57105932b9596d->leave($__internal_2b88f0f3495a8a607517e2b9c284f73c3db77c29597985767f57105932b9596d_prof);

        
        $__internal_82cd036ceef07b2dd439db21b4be141f89a38ffe6dfc7299437e1e1b1ee47871->leave($__internal_82cd036ceef07b2dd439db21b4be141f89a38ffe6dfc7299437e1e1b1ee47871_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d63f72fbc1e0fca6e67795e1ed808fbdbb50d51c0aeed4cc8be7282e20019b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63f72fbc1e0fca6e67795e1ed808fbdbb50d51c0aeed4cc8be7282e20019b67->enter($__internal_d63f72fbc1e0fca6e67795e1ed808fbdbb50d51c0aeed4cc8be7282e20019b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3061da2061b0fd42ec81de7cf3df3833347857bb177b17960bc5b8672470e154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3061da2061b0fd42ec81de7cf3df3833347857bb177b17960bc5b8672470e154->enter($__internal_3061da2061b0fd42ec81de7cf3df3833347857bb177b17960bc5b8672470e154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3061da2061b0fd42ec81de7cf3df3833347857bb177b17960bc5b8672470e154->leave($__internal_3061da2061b0fd42ec81de7cf3df3833347857bb177b17960bc5b8672470e154_prof);

        
        $__internal_d63f72fbc1e0fca6e67795e1ed808fbdbb50d51c0aeed4cc8be7282e20019b67->leave($__internal_d63f72fbc1e0fca6e67795e1ed808fbdbb50d51c0aeed4cc8be7282e20019b67_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/jlmm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
