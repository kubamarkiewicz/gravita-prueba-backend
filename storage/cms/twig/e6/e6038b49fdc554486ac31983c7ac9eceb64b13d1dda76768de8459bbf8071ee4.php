<?php

/* /Users/macbook/work projects/2018/_new projects/gravita/prueba_programacion/www/cms/themes/demo/pages/404.htm */
class __TwigTemplate_c2ef38602ec867b4c642c0481147114903acf9cda2471a735b0f1f0042a96e65 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/macbook/work projects/2018/_new projects/gravita/prueba_programacion/www/cms/themes/demo/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>", "/Users/macbook/work projects/2018/_new projects/gravita/prueba_programacion/www/cms/themes/demo/pages/404.htm", "");
    }
}
