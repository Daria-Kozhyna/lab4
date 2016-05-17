<?php

/* blocks/menu.html.twig */
class __TwigTemplate_97e3e60d795fed30c5cc97ec28fe739ac199a1ece638c5e862e60c40e9d70897 extends Twig_Template
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
        echo "<ul>
    ";
        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 12
            echo "        <li>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_page", array("url" => twig_slice($this->env, $this->getAttribute($context["page"], "url", array()), 1))), "html", null, true);
            echo "\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "
            </a>
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "        <li>
            <a href=\"/'\">
                Главная
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "blocks/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 24,  46 => 18,  37 => 14,  33 => 13,  30 => 12,  25 => 11,  22 => 10,  19 => 1,);
    }
}
/* <ul>*/
/*     {#*/
/*     $menu_result = $pdo->query("SELECT * FROM  `page`");*/
/*     while ($menu_item = $menu_result->fetch(PDO::FETCH_ASSOC)) {*/
/*         ?>*/
/*         <li><a href="<?php echo $menu_item["url"] ?>"><?php echo $menu_item["name"] ?></a></li>*/
/*         <?php*/
/*     }*/
/*     #}*/
/* */
/*     {% for page in pages %}*/
/*         <li>*/
/*             <a href="{{ path('show_page', {url: page.url|slice(1)}) }}">*/
/*                 {{ page.name }}*/
/*             </a>*/
/*         </li>*/
/*     {% else %}*/
/*         <li>*/
/*             <a href="/'">*/
/*                 Главная*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
