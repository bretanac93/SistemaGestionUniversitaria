<?php

/* GestionBundle:Asignatura:EvaluacionAsignatura.html.twig */
class __TwigTemplate_f3ecc101f77c459c5632262e4a91b924f8779e489f93d907d60ffb280d85e69f extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluaciones"]) ? $context["evaluaciones"] : $this->getContext($context, "evaluaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "tipo", array()), "html", null, true);
            echo "
\t\t";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "nota", array()), "html", null, true);
            echo "
\t\t<br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "GestionBundle:Asignatura:EvaluacionAsignatura.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  23 => 2,  19 => 1,);
    }
}
