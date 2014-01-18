<?php
namespace NeoHakushu;
class Route
{
    public static function dispatch(\React\Http\Request $request, \React\Http\Response $response)
    {
        $path = $request->getPath();

        if($path == '/'){
            \NeoHakushu\Action\Page::render($request, $response, 'index.twig');
        }elseif($path == '/vote'){
            // commit
            \NeoHakushu\Action\Vote::vote($request, $response, 'index.twig');
        }else{
            //error
            $headers = array('Content-Type' => 'text/plain');
            $response->writeHead(404, $headers);
            $response->end('404 Notfound.');
        }
    }
}
