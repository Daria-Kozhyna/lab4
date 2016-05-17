<?php

/* SonataUserBundle:Admin:Security/login.html.twig */
class __TwigTemplate_88a248d28afe5371be55efe4c2168d2eac094e53c387fce35702e31582e77399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : null), "SonataUserBundle:Admin:Security/login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"connection\">
        <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\">

            ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 8
            echo "                <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "SonataUserBundle"), "html", null, true);
            echo "</div>
            ";
        }
        // line 10
        echo "
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

            <div class=\"control-group\">
                <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                <div class=\"controls\">
                    <input type=\"text\" id=\"username\" name=\"_username\" autocomplete=\"off\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" class=\"big sonata-medium\"/>
                </div>
            </div>

            <div class=\"control-group\">
                <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                <div class=\"controls\">
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"big sonata-medium\" />
                </div>
            </div>

            <div class=\"control-group\">
                <label for=\"remember_me\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </label>
            </div>

            <div class=\"form-actions\">
                <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin:Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  82 => 32,  69 => 22,  61 => 17,  55 => 14,  49 => 11,  46 => 10,  40 => 8,  38 => 7,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends base_template %}*/
/* */
/* {% block content %}*/
/*     <div class="connection">*/
/*         <form action="{{ path("sonata_user_admin_security_check") }}" method="post">*/
/* */
/*             {% if error %}*/
/*                 <div class="alert alert-error">{{ error|trans({}, 'SonataUserBundle') }}</div>*/
/*             {% endif %}*/
/* */
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*             <div class="control-group">*/
/*                 <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/* */
/*                 <div class="controls">*/
/*                     <input type="text" id="username" name="_username" autocomplete="off" value="{{ last_username }}" class="big sonata-medium"/>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="control-group">*/
/*                 <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/* */
/*                 <div class="controls">*/
/*                     <input type="password" id="password" name="_password" class="big sonata-medium" />*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="control-group">*/
/*                 <label for="remember_me">*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                     {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                 </label>*/
/*             </div>*/
/* */
/*             <div class="form-actions">*/
/*                 <input type="submit" class="btn btn-primary" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock content %}*/
/* */
