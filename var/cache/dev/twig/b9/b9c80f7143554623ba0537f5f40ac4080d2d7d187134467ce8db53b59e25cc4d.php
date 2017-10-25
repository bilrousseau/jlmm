<?php

/* BRMainBundle:Renter:index.html.twig */
class __TwigTemplate_4cd6cd50ddde20143968ceee4af513adf13f60df761540dab959fca087115ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BRMainBundle:Default:index.html.twig", "BRMainBundle:Renter:index.html.twig", 1);
        $this->blocks = array(
            'titleblock' => array($this, 'block_titleblock'),
            'bannerblock' => array($this, 'block_bannerblock'),
            'contentblock' => array($this, 'block_contentblock'),
            'addblock' => array($this, 'block_addblock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BRMainBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbbcd34e2671242a1b31bc6eb8838dedf328e39407f2887c723857d51e52110d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbcd34e2671242a1b31bc6eb8838dedf328e39407f2887c723857d51e52110d->enter($__internal_fbbcd34e2671242a1b31bc6eb8838dedf328e39407f2887c723857d51e52110d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BRMainBundle:Renter:index.html.twig"));

        $__internal_4a2d94f0d35abf4bbaa3a5ffa91332d1e350465d3307c7dd9ed647a97c60159e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2d94f0d35abf4bbaa3a5ffa91332d1e350465d3307c7dd9ed647a97c60159e->enter($__internal_4a2d94f0d35abf4bbaa3a5ffa91332d1e350465d3307c7dd9ed647a97c60159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BRMainBundle:Renter:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbbcd34e2671242a1b31bc6eb8838dedf328e39407f2887c723857d51e52110d->leave($__internal_fbbcd34e2671242a1b31bc6eb8838dedf328e39407f2887c723857d51e52110d_prof);

        
        $__internal_4a2d94f0d35abf4bbaa3a5ffa91332d1e350465d3307c7dd9ed647a97c60159e->leave($__internal_4a2d94f0d35abf4bbaa3a5ffa91332d1e350465d3307c7dd9ed647a97c60159e_prof);

    }

    // line 3
    public function block_titleblock($context, array $blocks = array())
    {
        $__internal_b5723d7b58734f0142c8d5a7423de3cb2c173c7d87170588747dc6b65b7824a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5723d7b58734f0142c8d5a7423de3cb2c173c7d87170588747dc6b65b7824a5->enter($__internal_b5723d7b58734f0142c8d5a7423de3cb2c173c7d87170588747dc6b65b7824a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleblock"));

        $__internal_c1692bfbc783296530140aed6dd99bd5fb50842055aa0802bd02d3b25beebd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1692bfbc783296530140aed6dd99bd5fb50842055aa0802bd02d3b25beebd62->enter($__internal_c1692bfbc783296530140aed6dd99bd5fb50842055aa0802bd02d3b25beebd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleblock"));

        echo " ";
        $this->displayParentBlock("titleblock", $context, $blocks);
        echo " - Proposer ";
        
        $__internal_c1692bfbc783296530140aed6dd99bd5fb50842055aa0802bd02d3b25beebd62->leave($__internal_c1692bfbc783296530140aed6dd99bd5fb50842055aa0802bd02d3b25beebd62_prof);

        
        $__internal_b5723d7b58734f0142c8d5a7423de3cb2c173c7d87170588747dc6b65b7824a5->leave($__internal_b5723d7b58734f0142c8d5a7423de3cb2c173c7d87170588747dc6b65b7824a5_prof);

    }

    // line 5
    public function block_bannerblock($context, array $blocks = array())
    {
        $__internal_2e782485eb513539d746b7e7a246f1c7667cc27fabcc7bd0a4d4e42ff0375451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e782485eb513539d746b7e7a246f1c7667cc27fabcc7bd0a4d4e42ff0375451->enter($__internal_2e782485eb513539d746b7e7a246f1c7667cc27fabcc7bd0a4d4e42ff0375451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bannerblock"));

        $__internal_dda6a5277ebf08f4a9027abfd828fc2f3361f5b6ed99399daaa6a5a42f4d4805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda6a5277ebf08f4a9027abfd828fc2f3361f5b6ed99399daaa6a5a42f4d4805->enter($__internal_dda6a5277ebf08f4a9027abfd828fc2f3361f5b6ed99399daaa6a5a42f4d4805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bannerblock"));

        echo "<h1>Proposer mon matos</h1>";
        
        $__internal_dda6a5277ebf08f4a9027abfd828fc2f3361f5b6ed99399daaa6a5a42f4d4805->leave($__internal_dda6a5277ebf08f4a9027abfd828fc2f3361f5b6ed99399daaa6a5a42f4d4805_prof);

        
        $__internal_2e782485eb513539d746b7e7a246f1c7667cc27fabcc7bd0a4d4e42ff0375451->leave($__internal_2e782485eb513539d746b7e7a246f1c7667cc27fabcc7bd0a4d4e42ff0375451_prof);

    }

    // line 7
    public function block_contentblock($context, array $blocks = array())
    {
        $__internal_7a580aede25f12909d43c981657943a586afcc3600f9ab6693d15dcaa50709d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a580aede25f12909d43c981657943a586afcc3600f9ab6693d15dcaa50709d2->enter($__internal_7a580aede25f12909d43c981657943a586afcc3600f9ab6693d15dcaa50709d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentblock"));

        $__internal_1d4d22593b7c12e5ffc7c5dc059b104d081a640f935447cdee7cd0628bd64d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4d22593b7c12e5ffc7c5dc059b104d081a640f935447cdee7cd0628bd64d6f->enter($__internal_1d4d22593b7c12e5ffc7c5dc059b104d081a640f935447cdee7cd0628bd64d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentblock"));

        // line 8
        echo "<h2>Voici le formulaire de location</h2>
";
        
        $__internal_1d4d22593b7c12e5ffc7c5dc059b104d081a640f935447cdee7cd0628bd64d6f->leave($__internal_1d4d22593b7c12e5ffc7c5dc059b104d081a640f935447cdee7cd0628bd64d6f_prof);

        
        $__internal_7a580aede25f12909d43c981657943a586afcc3600f9ab6693d15dcaa50709d2->leave($__internal_7a580aede25f12909d43c981657943a586afcc3600f9ab6693d15dcaa50709d2_prof);

    }

    // line 11
    public function block_addblock($context, array $blocks = array())
    {
        $__internal_9e8885cf9ff32113d5614ce6eb0d03f1995dd3a3a28c70993608982d058e5778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8885cf9ff32113d5614ce6eb0d03f1995dd3a3a28c70993608982d058e5778->enter($__internal_9e8885cf9ff32113d5614ce6eb0d03f1995dd3a3a28c70993608982d058e5778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addblock"));

        $__internal_f8906a89b346c69e29ce68390872b00f253c715dd2463d75090f7281a2d28f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8906a89b346c69e29ce68390872b00f253c715dd2463d75090f7281a2d28f5f->enter($__internal_f8906a89b346c69e29ce68390872b00f253c715dd2463d75090f7281a2d28f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addblock"));

        // line 12
        echo "\t<button><a href={path('br_main_homepage')}>Ajouter</a></button>
";
        
        $__internal_f8906a89b346c69e29ce68390872b00f253c715dd2463d75090f7281a2d28f5f->leave($__internal_f8906a89b346c69e29ce68390872b00f253c715dd2463d75090f7281a2d28f5f_prof);

        
        $__internal_9e8885cf9ff32113d5614ce6eb0d03f1995dd3a3a28c70993608982d058e5778->leave($__internal_9e8885cf9ff32113d5614ce6eb0d03f1995dd3a3a28c70993608982d058e5778_prof);

    }

    public function getTemplateName()
    {
        return "BRMainBundle:Renter:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 12,  101 => 11,  90 => 8,  81 => 7,  63 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BRMainBundle:Default:index.html.twig\" %}

{% block titleblock %} {{ parent() }} - Proposer {% endblock %}

{% block bannerblock %}<h1>Proposer mon matos</h1>{% endblock %}

{% block contentblock %}
<h2>Voici le formulaire de location</h2>
{% endblock %}

{% block addblock %}
\t<button><a href={path('br_main_homepage')}>Ajouter</a></button>
{% endblock %}

", "BRMainBundle:Renter:index.html.twig", "/Applications/MAMP/htdocs/jlmm/src/BRMainBundle/Resources/views/Renter/index.html.twig");
    }
}
