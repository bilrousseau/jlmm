<?php

/* BRMainBundle:Renter:index.html.twig */
class __TwigTemplate_169ae4b4e43ddda0156701be4624e95cb66925c8ca2d320febd0d91dea43f8de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BRMainBundle:Default:index.html.twig", "BRMainBundle:Renter:index.html.twig", 1);
        $this->blocks = array(
            'titleblock' => array($this, 'block_titleblock'),
            'bannerblock' => array($this, 'block_bannerblock'),
            'bodyblock' => array($this, 'block_bodyblock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BRMainBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titleblock($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("titleblock", $context, $blocks);
        echo " - Proposer ";
    }

    // line 5
    public function block_bannerblock($context, array $blocks = array())
    {
        echo "<h1>Proposer mon matos</h1>";
    }

    // line 7
    public function block_bodyblock($context, array $blocks = array())
    {
        // line 8
        echo "<h2>Welcome to the Renter:index page</h2>
";
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
        return array (  47 => 8,  44 => 7,  38 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BRMainBundle:Renter:index.html.twig", "/Applications/MAMP/htdocs/jlmm/src/BRMainBundle/Resources/views/Renter/index.html.twig");
    }
}
