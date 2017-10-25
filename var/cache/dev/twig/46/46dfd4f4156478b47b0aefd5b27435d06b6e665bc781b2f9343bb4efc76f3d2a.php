<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfc315d45591df80817bbc1537e040733ce314a3b9e52fd0068151f7344d9f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc315d45591df80817bbc1537e040733ce314a3b9e52fd0068151f7344d9f82->enter($__internal_dfc315d45591df80817bbc1537e040733ce314a3b9e52fd0068151f7344d9f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2999d71d679a3634d1d6ac0c71e3d66ca5a1e84059fbd3fa03da111eb64f0780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2999d71d679a3634d1d6ac0c71e3d66ca5a1e84059fbd3fa03da111eb64f0780->enter($__internal_2999d71d679a3634d1d6ac0c71e3d66ca5a1e84059fbd3fa03da111eb64f0780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_dfc315d45591df80817bbc1537e040733ce314a3b9e52fd0068151f7344d9f82->leave($__internal_dfc315d45591df80817bbc1537e040733ce314a3b9e52fd0068151f7344d9f82_prof);

        
        $__internal_2999d71d679a3634d1d6ac0c71e3d66ca5a1e84059fbd3fa03da111eb64f0780->leave($__internal_2999d71d679a3634d1d6ac0c71e3d66ca5a1e84059fbd3fa03da111eb64f0780_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fa8e33f648c887fa3824f01e98bf3dd818441c531866430d82251257ca6f3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa8e33f648c887fa3824f01e98bf3dd818441c531866430d82251257ca6f3eb->enter($__internal_5fa8e33f648c887fa3824f01e98bf3dd818441c531866430d82251257ca6f3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9679ab33eb5d25dcf43c133376337c68ce99b8c62223c7b49b4585fa12aa1d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9679ab33eb5d25dcf43c133376337c68ce99b8c62223c7b49b4585fa12aa1d8e->enter($__internal_9679ab33eb5d25dcf43c133376337c68ce99b8c62223c7b49b4585fa12aa1d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9679ab33eb5d25dcf43c133376337c68ce99b8c62223c7b49b4585fa12aa1d8e->leave($__internal_9679ab33eb5d25dcf43c133376337c68ce99b8c62223c7b49b4585fa12aa1d8e_prof);

        
        $__internal_5fa8e33f648c887fa3824f01e98bf3dd818441c531866430d82251257ca6f3eb->leave($__internal_5fa8e33f648c887fa3824f01e98bf3dd818441c531866430d82251257ca6f3eb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_412bf50a8b3dd7866bd637eb708536b567ab454f9e39b5c7ecb8b5dad708b910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412bf50a8b3dd7866bd637eb708536b567ab454f9e39b5c7ecb8b5dad708b910->enter($__internal_412bf50a8b3dd7866bd637eb708536b567ab454f9e39b5c7ecb8b5dad708b910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d5eabcce6bead614712589ddef35fb191c8fdad4ee2f230293f58f1f090c3851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5eabcce6bead614712589ddef35fb191c8fdad4ee2f230293f58f1f090c3851->enter($__internal_d5eabcce6bead614712589ddef35fb191c8fdad4ee2f230293f58f1f090c3851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d5eabcce6bead614712589ddef35fb191c8fdad4ee2f230293f58f1f090c3851->leave($__internal_d5eabcce6bead614712589ddef35fb191c8fdad4ee2f230293f58f1f090c3851_prof);

        
        $__internal_412bf50a8b3dd7866bd637eb708536b567ab454f9e39b5c7ecb8b5dad708b910->leave($__internal_412bf50a8b3dd7866bd637eb708536b567ab454f9e39b5c7ecb8b5dad708b910_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_916ee7363eb1bbf4f85d5afe58cd1a4595db8749efa026beed2329de5aa7af22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916ee7363eb1bbf4f85d5afe58cd1a4595db8749efa026beed2329de5aa7af22->enter($__internal_916ee7363eb1bbf4f85d5afe58cd1a4595db8749efa026beed2329de5aa7af22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3052f9c83845f8e9bb93c6c2cb2d65213146361d3f01422fdbeed91b0ef83de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3052f9c83845f8e9bb93c6c2cb2d65213146361d3f01422fdbeed91b0ef83de->enter($__internal_d3052f9c83845f8e9bb93c6c2cb2d65213146361d3f01422fdbeed91b0ef83de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d3052f9c83845f8e9bb93c6c2cb2d65213146361d3f01422fdbeed91b0ef83de->leave($__internal_d3052f9c83845f8e9bb93c6c2cb2d65213146361d3f01422fdbeed91b0ef83de_prof);

        
        $__internal_916ee7363eb1bbf4f85d5afe58cd1a4595db8749efa026beed2329de5aa7af22->leave($__internal_916ee7363eb1bbf4f85d5afe58cd1a4595db8749efa026beed2329de5aa7af22_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/jlmm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
