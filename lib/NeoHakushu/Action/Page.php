<?php
namespace NeoHakushu\Action;
class Page
{
    public static function render(\React\Http\Request $request, \React\Http\Response $response, $template_filename)
    {
        $headers = array('Content-Type' => 'text/html');
        $response->writeHead(200, $headers);
        $response->end(\NeoHakushu\View::$twig->render($template_filename));
    }
}
