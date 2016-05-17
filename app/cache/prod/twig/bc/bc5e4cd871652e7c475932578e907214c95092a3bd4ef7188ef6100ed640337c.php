<?php

/* blocks/layout.html.twig */
class __TwigTemplate_9961cba0ff7eb7a8b578b75018fd4b904dfa12b1e4b924208cc919cfd20fa009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blocks/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"table\">
        <div id=\"header\">
            ";
        // line 5
        $this->loadTemplate("blocks/header.html.twig", "blocks/layout.html.twig", 5)->display($context);
        // line 6
        echo "        </div>
        <div id=\"content\">
            <div id=\"osn-text\">
                ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "            </div>
            <div id=\"news\"> <a href=\"JavaScript:void();\">Новости</a></div>
            <div id=\"spisok-news\">
                <ul>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("show_page", array("url" => "news"));
        echo "\">Утро по-итальянски</a></li>
                    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("show_page", array("url" => "news"));
        echo "\">Новинки в меню House</a></li>
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("show_page", array("url" => "news"));
        echo "\">Встреча любителей кофе</a></li>
                </ul>
            </div>
            <div id=\"admin\"> 
                <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_login");
        echo "\">Админка</a>
                ";
        // line 22
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 23
            echo "                    <p>Здравствуйте, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("admin_logout");
            echo "\">Выход</a>
                ";
        }
        // line 26
        echo "            </div>
        </div>
        <div id=\"bottom\">
            ";
        // line 29
        $this->loadTemplate("blocks/bottom.html.twig", "blocks/layout.html.twig", 29)->display($context);
        // line 30
        echo "        </div>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "                ";
    }

    public function getTemplateName()
    {
        return "blocks/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 10,  94 => 9,  89 => 30,  87 => 29,  82 => 26,  77 => 24,  72 => 23,  70 => 22,  66 => 21,  59 => 17,  55 => 16,  51 => 15,  45 => 11,  43 => 9,  38 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <div id="table">*/
/*         <div id="header">*/
/*             {% include 'blocks/header.html.twig' %}*/
/*         </div>*/
/*         <div id="content">*/
/*             <div id="osn-text">*/
/*                 {% block content %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*             <div id="news"> <a href="JavaScript:void();">Новости</a></div>*/
/*             <div id="spisok-news">*/
/*                 <ul>*/
/*                     <li><a href="{{ path('show_page', {url: 'news'}) }}">Утро по-итальянски</a></li>*/
/*                     <li><a href="{{ path('show_page', {url: 'news'}) }}">Новинки в меню House</a></li>*/
/*                     <li><a href="{{ path('show_page', {url: 'news'}) }}">Встреча любителей кофе</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div id="admin"> */
/*                 <a href="{{ path('admin_login')}}">Админка</a>*/
/*                 {% if app.user %}*/
/*                     <p>Здравствуйте, {{ app.user.username }}</p>*/
/*                     <a href="{{ path('admin_logout')}}">Выход</a>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         <div id="bottom">*/
/*             {% include 'blocks/bottom.html.twig' %}*/
/*         </div>*/
/* {% endblock %}*/
