<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/noir/templates/partials/base.html */
class __TwigTemplate_e3395e3390925c1dcfe1a2e63b2bf797cfb09deec18ee761fa329a5f19067d7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 2), "get", [0 => "flextype.settings.locale"], "method", false, false, false, 2), "html", null, true);
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "    </head>
    <body>
        <nav class=\"bg-black text-white\">
            <div class=\"container mx-auto pl-16 pr-16 pt-6 pb-6 clearfix\">
                <div class=\"w-full lg:w-2/12
                          text-center lg:text-left
                          float-left text-white py-2 uppercase tracking-wide\">
                    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Flextype\Plugin\Twig\Twig\UrlTwigExtension']->getUrl(), "html", null, true);
        echo "\" class=\"w-full lg:w-2/12 text-center text-base no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 39), "get", [0 => "plugins.site.settings.title"], "method", false, false, false, 39), "html");
        echo "</a>
                </div>
                <div class=\"w-full float-right lg:w-9/12 font-noirpro-semibold\">
                    <div class=\"text-right p-2\">
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "entries", [], "any", false, false, false, 43), "fetch", [0 => "", 1 => ["collection" => true]], "method", false, false, false, 43), "sortBy", [0 => "menu_item_order", 1 => "ASC"], "method", false, false, false, 43), "all", [], "method", false, false, false, 43));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "menu_item_title", [], "any", false, false, false, 44)) {
                // line 45
                echo "                                <a
                                    href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Flextype\Plugin\Twig\Twig\UrlTwigExtension']->getUrl(), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "menu_item_url", [], "any", false, false, false, 46), "html", null, true);
                echo "\"
                                    class=\"uppercase
                                  relative
                                  block
                                  text-white
                                  text-center
                                  no-underline
                                  mr-0
                                  border-black
                                  border-b-2
                                  hover:border-white
                                  lg:inline-block
                                  ";
                // line 58
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 58)) {
                    echo "lg:mr-0";
                } else {
                    echo "lg:mr-4";
                }
                // line 59
                echo "                                  ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "menu_item_url", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "id", [], "any", false, false, false, 59))) {
                    echo "border-white";
                }
                echo "\">
                                    ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "menu_item_title", [], "any", false, false, false, 60), "html", null, true);
                echo "
                                </a>
                            ";
            }
            // line 63
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </div>
                </div>
            </div>
        </nav>

        <main class=\"container mx-auto\">
            <section id=\"content\" class=\"p-16\">
                ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "            </section>
            <footer class=\"text-center pl-16 pr-16 pt-6 pb-16\">
                ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "            </footer>
        </main>

        ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 82), "has", [0 => "assets.site.js"], "method", false, false, false, 82)) {
            // line 83
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 83), "get", [0 => "assets.site.js"], "method", false, false, false, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
                // line 84
                echo "                ";
                if ($context["js"]) {
                    // line 85
                    echo "                    <script type=\"text/javascript\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Flextype\Plugin\Twig\Twig\UrlTwigExtension']->getUrl(), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $context["js"], "html", null, true);
                    echo "\"></script>
                ";
                }
                // line 87
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "        ";
        }
        // line 89
        echo "
        ";
        // line 90
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "emitter", [], "any", false, false, false, 90), "emit", [0 => "onThemeTail"], "method", false, false, false, 90);
        // line 91
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <meta charset=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 5), "get", [0 => "flextype.settings.charset"], "method", false, false, false, 5)), "html", null, true);
        echo "\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <meta name=\"description\" content=\"";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "description", [], "any", false, false, false, 7)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "description", [], "any", false, false, false, 7), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 7), "get", [0 => "plugins.site.settings.description"], "method", false, false, false, 7), "html", null, true);
        }
        echo "\">
            <meta name=\"keywords\" content=\"";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "keywords", [], "any", false, false, false, 8)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "keywords", [], "any", false, false, false, 8), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 8), "get", [0 => "plugins.site.settings.keywords"], "method", false, false, false, 8), "html", null, true);
        }
        echo "\">
            <meta name=\"robots\" content=\"";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "robots", [], "any", false, false, false, 9)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "robots", [], "any", false, false, false, 9), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 9), "get", [0 => "plugins.site.settings.robots"], "method", false, false, false, 9), "html", null, true);
        }
        echo "\">
            <meta name=\"generator\" content=\"Powered by Flextype\"/>

            ";
        // line 12
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "emitter", [], "any", false, false, false, 12), "emit", [0 => "onThemeMeta"], "method", false, false, false, 12);
        // line 13
        echo "
            <title>
                ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "title", [], "any", false, false, false, 15)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "title", [], "any", false, false, false, 15), "html");
            echo "
                    |
                ";
        }
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 17), "get", [0 => "plugins.site.settings.title"], "method", false, false, false, 17), "html");
        echo "</title>

            <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext\" rel=\"stylesheet\">

            ";
        // line 21
        $context["theme"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 21), "get", [0 => "plugins.site.settings.theme"], "method", false, false, false, 21);
        // line 22
        echo "            ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 22), "set", [0 => "assets.site.css.ness", 1 => (("project/themes/" . ($context["theme"] ?? null)) . "/assets/dist/css/build.min.css")], "method", false, false, false, 22);
        // line 23
        echo "
            ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 24), "has", [0 => "assets.site.css"], "method", false, false, false, 24)) {
            // line 25
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "registry", [], "any", false, false, false, 25), "get", [0 => "assets.site.css"], "method", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
                // line 26
                echo "                    <link href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Flextype\Plugin\Twig\Twig\UrlTwigExtension']->getUrl(), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["css"], "html", null, true);
                echo "\" rel=\"stylesheet\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            ";
        }
        // line 29
        echo "
            ";
        // line 30
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["flextype"] ?? null), "emitter", [], "any", false, false, false, 30), "emit", [0 => "onThemeHeader"], "method", false, false, false, 30);
        // line 31
        echo "        ";
    }

    // line 71
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 74
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                    <div class=\"text-xs uppercase\">
                        ";
        // line 76
        echo $this->extensions['Flextype\Plugin\Twig\Twig\I18nTwigExtension']->tr("site_powered_by_flextype");
        echo "
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "themes/noir/templates/partials/base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 76,  305 => 75,  301 => 74,  295 => 71,  291 => 31,  289 => 30,  286 => 29,  283 => 28,  272 => 26,  267 => 25,  265 => 24,  262 => 23,  259 => 22,  257 => 21,  250 => 17,  243 => 15,  239 => 13,  237 => 12,  227 => 9,  219 => 8,  211 => 7,  205 => 5,  201 => 4,  195 => 91,  193 => 90,  190 => 89,  187 => 88,  181 => 87,  173 => 85,  170 => 84,  165 => 83,  163 => 82,  158 => 79,  156 => 74,  152 => 72,  150 => 71,  141 => 64,  127 => 63,  121 => 60,  114 => 59,  108 => 58,  91 => 46,  88 => 45,  85 => 44,  68 => 43,  59 => 39,  50 => 32,  48 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/noir/templates/partials/base.html", "/Applications/MAMP/htdocs/atomastic/atomastic.com/project/themes/noir/templates/partials/base.html");
    }
}
