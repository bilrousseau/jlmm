<?php

/* BRMainBundle:Default:index.html.twig */
class __TwigTemplate_cfa3e4a47755e84b544cfe6a2c4fdfb1da6c5228705ac6043f3ce1280a2a7dc7 extends Twig_Template
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
        // line 29
        echo "\t</body>\t
</html>";
    }

    // line 3
    public function block_titleblock($context, array $blocks = array())
    {
        echo "Je loue mon matos";
    }

    // line 7
    public function block_bannerblock($context, array $blocks = array())
    {
        echo "<h1>Je loue mon matos</h1>";
    }

    // line 8
    public function block_headerblock($context, array $blocks = array())
    {
        // line 9
        echo "\t\t\t<header>
\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("br_renter_form");
        echo "\">Proposer mon matos</a>
\t\t\t\t<a href=\"\">Inscription / Connexion</a>
\t\t\t</header>
\t\t";
    }

    // line 14
    public function block_searchblock($context, array $blocks = array())
    {
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
    }

    // line 27
    public function block_contentblock($context, array $blocks = array())
    {
        // line 28
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "BRMainBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  97 => 27,  82 => 15,  79 => 14,  71 => 10,  68 => 9,  65 => 8,  59 => 7,  53 => 3,  48 => 29,  45 => 27,  43 => 14,  40 => 13,  37 => 8,  35 => 7,  28 => 3,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BRMainBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/jlmm/src/BRMainBundle/Resources/views/Default/index.html.twig");
    }
}
