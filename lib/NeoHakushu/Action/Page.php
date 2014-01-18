<?php
namespace NeoHakushu\Action;
class Page
{
    public static function render(\React\Http\Request $request, \React\Http\Response $response, $template_filename)
    {
        $loader = new \Twig_Loader_Filesystem(TEMPLATES_DIR);
        $twig = new \Twig_Environment($loader, array(
            'cache' => TEMPLATES_CACHE,
        ));

        $headers = array('Content-Type' => 'text/html');
        $response->writeHead(200, $headers);
        $response->end($twig->render($template_filename));
    }
}
