<?php

/* GestionBundle:Profesor:login.html.twig */
class __TwigTemplate_e6be244c8f29fefe2a7bd6673f8f6a59efa14a35267ff821457ec3a28dfe4a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "    <h1 class=\"title\">Login</h1>


    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("check_path");
        echo "\" method=\"post\">
    <p>UserName <input type=\"type\" name=\"_username\" /><br /></p>
    <p>Contrasena <input type=\"type\" name=\"_password\"/><br/></p>

    <p> <input type=\"submit\" value=\"enviar\"> </p>
</form>

";
    }

    public function getTemplateName()
    {
        return "GestionBundle:Profesor:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 2,  20 => 1,);
    }
}
