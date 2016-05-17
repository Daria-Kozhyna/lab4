<?php

/* blocks/bottom.html.twig */
class __TwigTemplate_4a226de2ec4e2a9190065c4f35639f1c6919954804477234b33597d2a0e31013 extends Twig_Template
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
        echo "<div class=\"inline\">
    <div id=\"contacts\"><p>г.Харьков, ул. Сумская 72</p>
        <p>Тел: (057)728-32-43</p>
    </div>
    <div id=\"search\">
        <form id=\"fsearch\">
            <p><input type=\"search\" name=\"q\" placeholder=\"Поиск по сайту\">
                <input type=\"submit\" value=\"Найти\"></p>
        </form>
    </div>
</div>
<div id=\"menu-bottom\">
    ";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Default:menu"));
        echo "
</div>
<div id=\"c\">© 2015 Кофейня House
    <form id=\"datetime\" name=datetime>
        <p id=\"date\"><input name=date size=20></p>
        <p id=\"clock\"><input name=clock size=20></p>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "blocks/bottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  19 => 1,);
    }
}
/* <div class="inline">*/
/*     <div id="contacts"><p>г.Харьков, ул. Сумская 72</p>*/
/*         <p>Тел: (057)728-32-43</p>*/
/*     </div>*/
/*     <div id="search">*/
/*         <form id="fsearch">*/
/*             <p><input type="search" name="q" placeholder="Поиск по сайту">*/
/*                 <input type="submit" value="Найти"></p>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* <div id="menu-bottom">*/
/*     {{ render(controller('AppBundle:Default:menu')) }}*/
/* </div>*/
/* <div id="c">© 2015 Кофейня House*/
/*     <form id="datetime" name=datetime>*/
/*         <p id="date"><input name=date size=20></p>*/
/*         <p id="clock"><input name=clock size=20></p>*/
/*     </form>*/
/* </div>*/
