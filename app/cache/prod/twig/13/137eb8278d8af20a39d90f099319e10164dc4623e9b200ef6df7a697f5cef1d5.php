<?php

/* @Twig/Exception/error403.html.twig */
class __TwigTemplate_a947ab498ec9d4cfb78d7feb3462cf8686f366a0ea03d54199b0d9035a8b5843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blocks/layout.html.twig", "@Twig/Exception/error403.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blocks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    У вас нет доступа к личному кабинету
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'blocks/layout.html.twig' %}*/
/* {% block content %}*/
/*     У вас нет доступа к личному кабинету*/
/* {% endblock %}*/
