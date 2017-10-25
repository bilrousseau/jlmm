<?php

/* BRMainBundle:Default:index.html.twig */
class __TwigTemplate_5e80e57a70f0884d66c25d435d4bfd1c237a7bac6b74225cf83dd2cffd2028f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titleblock' => array($this, 'block_titleblock'),
            'bannerblock' => array($this, 'block_bannerblock'),
            'headerblock' => array($this, 'block_headerblock'),
            'searchblock' => array($this, 'block_searchblock'),
            'contentblock' => array($this, 'block_contentblock'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2e0f59f5867cef85d8026895a9609bdbb854d0387c7f8b443a435e946af082f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e0f59f5867cef85d8026895a9609bdbb854d0387c7f8b443a435e946af082f->enter($__internal_c2e0f59f5867cef85d8026895a9609bdbb854d0387c7f8b443a435e946af082f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BRMainBundle:Default:index.html.twig"));

        $__internal_fff0c248cbf5701bcc67d8030196cb62dc9642f2fe66ef3766ce80e824e24543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff0c248cbf5701bcc67d8030196cb62dc9642f2fe66ef3766ce80e824e24543->enter($__internal_fff0c248cbf5701bcc67d8030196cb62dc9642f2fe66ef3766ce80e824e24543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BRMainBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>";
        // line 3
        $this->displayBlock('titleblock', $context, $blocks);
        echo "</title>
\t</head>

\t<body>
\t\t";
        // line 7
        $this->displayBlock('bannerblock', $context, $blocks);
        // line 8
        echo "\t\t";
        $this->displayBlock('headerblock', $context, $blocks);
        // line 13
        echo "\t
\t\t";
        // line 14
        $this->displayBlock('searchblock', $context, $blocks);
        // line 27
        echo "\t\t";
        $this->displayBlock('contentblock', $context, $blocks);
        // line 30
        echo "\t</body>\t
</html>";
        
        $__internal_c2e0f59f5867cef85d8026895a9609bdbb854d0387c7f8b443a435e946af082f->leave($__internal_c2e0f59f5867cef85d8026895a9609bdbb854d0387c7f8b443a435e946af082f_prof);

        
        $__internal_fff0c248cbf5701bcc67d8030196cb62dc9642f2fe66ef3766ce80e824e24543->leave($__internal_fff0c248cbf5701bcc67d8030196cb62dc9642f2fe66ef3766ce80e824e24543_prof);

    }

    // line 3
    public function block_titleblock($context, array $blocks = array())
    {
        $__internal_f4e39d0513fab32841d1cc2ca41a0cdea7de0142386f859c46937e23f167bd39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e39d0513fab32841d1cc2ca41a0cdea7de0142386f859c46937e23f167bd39->enter($__internal_f4e39d0513fab32841d1cc2ca41a0cdea7de0142386f859c46937e23f167bd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleblock"));

        $__internal_58bfabdd7fdf464d9923aa09a2693c9860f8f74be1ada0e821b20b4184953a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bfabdd7fdf464d9923aa09a2693c9860f8f74be1ada0e821b20b4184953a71->enter($__internal_58bfabdd7fdf464d9923aa09a2693c9860f8f74be1ada0e821b20b4184953a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleblock"));

        echo "Je loue mon matos";
        
        $__internal_58bfabdd7fdf464d9923aa09a2693c9860f8f74be1ada0e821b20b4184953a71->leave($__internal_58bfabdd7fdf464d9923aa09a2693c9860f8f74be1ada0e821b20b4184953a71_prof);

        
        $__internal_f4e39d0513fab32841d1cc2ca41a0cdea7de0142386f859c46937e23f167bd39->leave($__internal_f4e39d0513fab32841d1cc2ca41a0cdea7de0142386f859c46937e23f167bd39_prof);

    }

    // line 7
    public function block_bannerblock($context, array $blocks = array())
    {
        $__internal_958324c5e3c4d9945b47fccf2fad621c8478e65c25d6e9e5d3cfd526792e530d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958324c5e3c4d9945b47fccf2fad621c8478e65c25d6e9e5d3cfd526792e530d->enter($__internal_958324c5e3c4d9945b47fccf2fad621c8478e65c25d6e9e5d3cfd526792e530d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bannerblock"));

        $__internal_84fd6bba5d66c5d71689d05fc592246c58079153ad02a1e18dd6807172ff6984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fd6bba5d66c5d71689d05fc592246c58079153ad02a1e18dd6807172ff6984->enter($__internal_84fd6bba5d66c5d71689d05fc592246c58079153ad02a1e18dd6807172ff6984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bannerblock"));

        echo "<h1>Je loue mon matos</h1>";
        
        $__internal_84fd6bba5d66c5d71689d05fc592246c58079153ad02a1e18dd6807172ff6984->leave($__internal_84fd6bba5d66c5d71689d05fc592246c58079153ad02a1e18dd6807172ff6984_prof);

        
        $__internal_958324c5e3c4d9945b47fccf2fad621c8478e65c25d6e9e5d3cfd526792e530d->leave($__internal_958324c5e3c4d9945b47fccf2fad621c8478e65c25d6e9e5d3cfd526792e530d_prof);

    }

    // line 8
    public function block_headerblock($context, array $blocks = array())
    {
        $__internal_28be631c38dda9cb556865a1aabe458e571928ca866f00537de7b14215094887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28be631c38dda9cb556865a1aabe458e571928ca866f00537de7b14215094887->enter($__internal_28be631c38dda9cb556865a1aabe458e571928ca866f00537de7b14215094887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerblock"));

        $__internal_457dc24d06eb02c0884a48ff13f43080569cde32f52936e9475f08e9e952b5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457dc24d06eb02c0884a48ff13f43080569cde32f52936e9475f08e9e952b5ed->enter($__internal_457dc24d06eb02c0884a48ff13f43080569cde32f52936e9475f08e9e952b5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerblock"));

        // line 9
        echo "\t\t\t<header>
\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("br_renter_form");
        echo "\">Proposer mon matos</a>
\t\t\t\t<a href=\"\">Inscription / Connexion</a>
\t\t\t</header>
\t\t";
        
        $__internal_457dc24d06eb02c0884a48ff13f43080569cde32f52936e9475f08e9e952b5ed->leave($__internal_457dc24d06eb02c0884a48ff13f43080569cde32f52936e9475f08e9e952b5ed_prof);

        
        $__internal_28be631c38dda9cb556865a1aabe458e571928ca866f00537de7b14215094887->leave($__internal_28be631c38dda9cb556865a1aabe458e571928ca866f00537de7b14215094887_prof);

    }

    // line 14
    public function block_searchblock($context, array $blocks = array())
    {
        $__internal_4eaf388274af99309d26c068f5255f8d3676bee8926445e5c0ea6aa56c0bc447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaf388274af99309d26c068f5255f8d3676bee8926445e5c0ea6aa56c0bc447->enter($__internal_4eaf388274af99309d26c068f5255f8d3676bee8926445e5c0ea6aa56c0bc447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchblock"));

        $__internal_0573ef49fd1fc63f3b6a34a4c1977ae4a27d9b65537750c9d7c85552824906be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0573ef49fd1fc63f3b6a34a4c1977ae4a27d9b65537750c9d7c85552824906be->enter($__internal_0573ef49fd1fc63f3b6a34a4c1977ae4a27d9b65537750c9d7c85552824906be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchblock"));

        // line 15
        echo "\t\t\t<section>
\t\t\t\t<select name=\"type\">
\t\t\t\t\t<option value=\"0\" selected>Qu'est-ce que je cherche?</option>
\t\t\t\t\t<option value=\"1\">Du son</option>
\t\t\t\t\t<option value=\"2\">De la lumière</option>
\t\t\t\t\t<option value=\"3\">Des images</option>
\t\t\t\t</select>
\t\t\t\t<input type=\"text\" name=\"location\" placeholder=\"Où ça ?\" />
\t\t\t\t<input type=\"checkbox\" name=\"geolocation\" /> Près de moi
\t\t\t\t<input type=\"submit\" /> Rechercher
\t\t\t</section>
\t\t";
        
        $__internal_0573ef49fd1fc63f3b6a34a4c1977ae4a27d9b65537750c9d7c85552824906be->leave($__internal_0573ef49fd1fc63f3b6a34a4c1977ae4a27d9b65537750c9d7c85552824906be_prof);

        
        $__internal_4eaf388274af99309d26c068f5255f8d3676bee8926445e5c0ea6aa56c0bc447->leave($__internal_4eaf388274af99309d26c068f5255f8d3676bee8926445e5c0ea6aa56c0bc447_prof);

    }

    // line 27
    public function block_contentblock($context, array $blocks = array())
    {
        $__internal_50842bd38191b8dca43d1e1f35ad37d6e8a9205f85782918a46df093be1af01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50842bd38191b8dca43d1e1f35ad37d6e8a9205f85782918a46df093be1af01d->enter($__internal_50842bd38191b8dca43d1e1f35ad37d6e8a9205f85782918a46df093be1af01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentblock"));

        $__internal_1dbac6c2ecb0583b0cf37ea3253f920543e02105642506b8141191a742ab6639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbac6c2ecb0583b0cf37ea3253f920543e02105642506b8141191a742ab6639->enter($__internal_1dbac6c2ecb0583b0cf37ea3253f920543e02105642506b8141191a742ab6639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentblock"));

        // line 28
        echo "\t\t<h2>Ici les résultats de la recherche</h2>
\t\t";
        
        $__internal_1dbac6c2ecb0583b0cf37ea3253f920543e02105642506b8141191a742ab6639->leave($__internal_1dbac6c2ecb0583b0cf37ea3253f920543e02105642506b8141191a742ab6639_prof);

        
        $__internal_50842bd38191b8dca43d1e1f35ad37d6e8a9205f85782918a46df093be1af01d->leave($__internal_50842bd38191b8dca43d1e1f35ad37d6e8a9205f85782918a46df093be1af01d_prof);

    }

    public function getTemplateName()
    {
        return "BRMainBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 28,  157 => 27,  136 => 15,  127 => 14,  113 => 10,  110 => 9,  101 => 8,  83 => 7,  65 => 3,  54 => 30,  51 => 27,  49 => 14,  46 => 13,  43 => 8,  41 => 7,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
\t<head>
\t\t<title>{% block titleblock %}Je loue mon matos{% endblock %}</title>
\t</head>

\t<body>
\t\t{% block bannerblock %}<h1>Je loue mon matos</h1>{% endblock %}
\t\t{% block headerblock %}
\t\t\t<header>
\t\t\t\t<a href=\"{{path('br_renter_form')}}\">Proposer mon matos</a>
\t\t\t\t<a href=\"\">Inscription / Connexion</a>
\t\t\t</header>
\t\t{% endblock %}\t
\t\t{% block searchblock %}
\t\t\t<section>
\t\t\t\t<select name=\"type\">
\t\t\t\t\t<option value=\"0\" selected>Qu'est-ce que je cherche?</option>
\t\t\t\t\t<option value=\"1\">Du son</option>
\t\t\t\t\t<option value=\"2\">De la lumière</option>
\t\t\t\t\t<option value=\"3\">Des images</option>
\t\t\t\t</select>
\t\t\t\t<input type=\"text\" name=\"location\" placeholder=\"Où ça ?\" />
\t\t\t\t<input type=\"checkbox\" name=\"geolocation\" /> Près de moi
\t\t\t\t<input type=\"submit\" /> Rechercher
\t\t\t</section>
\t\t{% endblock %}
\t\t{% block contentblock %}
\t\t<h2>Ici les résultats de la recherche</h2>
\t\t{% endblock %}
\t</body>\t
</html>", "BRMainBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/jlmm/src/BRMainBundle/Resources/views/Default/index.html.twig");
    }
}
