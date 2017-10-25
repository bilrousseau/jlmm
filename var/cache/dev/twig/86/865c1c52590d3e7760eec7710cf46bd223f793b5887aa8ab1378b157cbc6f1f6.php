<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7e26d89cebca07da76ca0301ee70b30bd07654d1f07af4fb2a9890374442405b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e26d89cebca07da76ca0301ee70b30bd07654d1f07af4fb2a9890374442405b->enter($__internal_7e26d89cebca07da76ca0301ee70b30bd07654d1f07af4fb2a9890374442405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0cf4f56cdae749c2b5919f5824c2d613b7acd5c4e37a699842700db34a863e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf4f56cdae749c2b5919f5824c2d613b7acd5c4e37a699842700db34a863e77->enter($__internal_0cf4f56cdae749c2b5919f5824c2d613b7acd5c4e37a699842700db34a863e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e26d89cebca07da76ca0301ee70b30bd07654d1f07af4fb2a9890374442405b->leave($__internal_7e26d89cebca07da76ca0301ee70b30bd07654d1f07af4fb2a9890374442405b_prof);

        
        $__internal_0cf4f56cdae749c2b5919f5824c2d613b7acd5c4e37a699842700db34a863e77->leave($__internal_0cf4f56cdae749c2b5919f5824c2d613b7acd5c4e37a699842700db34a863e77_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c715fd90420b6ad2c44432d65e91745d8afd5354f024ce42f30596ccff84c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c715fd90420b6ad2c44432d65e91745d8afd5354f024ce42f30596ccff84c9d->enter($__internal_0c715fd90420b6ad2c44432d65e91745d8afd5354f024ce42f30596ccff84c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6a52c9bb230cc6bd0a66bfd52c02711497b185fc26d93e3d3a42cdd2d0200dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a52c9bb230cc6bd0a66bfd52c02711497b185fc26d93e3d3a42cdd2d0200dc2->enter($__internal_6a52c9bb230cc6bd0a66bfd52c02711497b185fc26d93e3d3a42cdd2d0200dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6a52c9bb230cc6bd0a66bfd52c02711497b185fc26d93e3d3a42cdd2d0200dc2->leave($__internal_6a52c9bb230cc6bd0a66bfd52c02711497b185fc26d93e3d3a42cdd2d0200dc2_prof);

        
        $__internal_0c715fd90420b6ad2c44432d65e91745d8afd5354f024ce42f30596ccff84c9d->leave($__internal_0c715fd90420b6ad2c44432d65e91745d8afd5354f024ce42f30596ccff84c9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ab893babf5a1f76e72fb05c524c22e8fb3b0ee662058eda1fd32a7099c3795d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab893babf5a1f76e72fb05c524c22e8fb3b0ee662058eda1fd32a7099c3795d->enter($__internal_7ab893babf5a1f76e72fb05c524c22e8fb3b0ee662058eda1fd32a7099c3795d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4f3798af08a2e97ead890f3339e4d458e6113e2a8aebf55df540491cadaa3261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3798af08a2e97ead890f3339e4d458e6113e2a8aebf55df540491cadaa3261->enter($__internal_4f3798af08a2e97ead890f3339e4d458e6113e2a8aebf55df540491cadaa3261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f3798af08a2e97ead890f3339e4d458e6113e2a8aebf55df540491cadaa3261->leave($__internal_4f3798af08a2e97ead890f3339e4d458e6113e2a8aebf55df540491cadaa3261_prof);

        
        $__internal_7ab893babf5a1f76e72fb05c524c22e8fb3b0ee662058eda1fd32a7099c3795d->leave($__internal_7ab893babf5a1f76e72fb05c524c22e8fb3b0ee662058eda1fd32a7099c3795d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71b32e12d8fad6fa35bd1c99a6df8359b8f9260dc7a8dcd1aa3f1b77b49e79e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b32e12d8fad6fa35bd1c99a6df8359b8f9260dc7a8dcd1aa3f1b77b49e79e2->enter($__internal_71b32e12d8fad6fa35bd1c99a6df8359b8f9260dc7a8dcd1aa3f1b77b49e79e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06b4523cd0ec2cca611ae98f74771f04a0f06584ecb7919e291b65ca067af0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b4523cd0ec2cca611ae98f74771f04a0f06584ecb7919e291b65ca067af0e2->enter($__internal_06b4523cd0ec2cca611ae98f74771f04a0f06584ecb7919e291b65ca067af0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_06b4523cd0ec2cca611ae98f74771f04a0f06584ecb7919e291b65ca067af0e2->leave($__internal_06b4523cd0ec2cca611ae98f74771f04a0f06584ecb7919e291b65ca067af0e2_prof);

        
        $__internal_71b32e12d8fad6fa35bd1c99a6df8359b8f9260dc7a8dcd1aa3f1b77b49e79e2->leave($__internal_71b32e12d8fad6fa35bd1c99a6df8359b8f9260dc7a8dcd1aa3f1b77b49e79e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/jlmm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
