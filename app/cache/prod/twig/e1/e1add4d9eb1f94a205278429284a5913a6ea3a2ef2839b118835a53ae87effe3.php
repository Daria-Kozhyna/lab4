<?php

/* blocks/header.html.twig */
class __TwigTemplate_f6c025d24e75c34e404fec7e6e753f160b5d463eeb5993c2a4576eaf5b5cef3f extends Twig_Template
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
        // line 1
        echo "<div id=\"logo\"> 
    <a href=\"JavaScript:void();\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Логотип\" >
    </a> 
</div>
<div id=\"head-menu\">
    ";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Default:menu"));
        echo "
</div>
<div id=\"nazvanie\"> <h3>Кофейня Хауз - лучшее место для встречи! </h3></div>
<div id=\"picture\"> <a><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/coffee.jpg"), "html", null, true);
        echo "\" alt=\"Кофе\" ></a> </div>";
    }

    public function getTemplateName()
    {
        return "blocks/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div id="logo"> */
/*     <a href="JavaScript:void();">*/
/*         <img src="{{ asset('img/logo.png') }}" alt="Логотип" >*/
/*     </a> */
/* </div>*/
/* <div id="head-menu">*/
/*     {{ render(controller('AppBundle:Default:menu')) }}*/
/* </div>*/
/* <div id="nazvanie"> <h3>Кофейня Хауз - лучшее место для встречи! </h3></div>*/
/* <div id="picture"> <a><img src="{{ asset('img/coffee.jpg') }}" alt="Кофе" ></a> </div>*/
