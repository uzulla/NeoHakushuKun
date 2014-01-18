<?php
require 'vendor/autoload.php';

define('APP_DIR', __DIR__);
define('TEMPLATES_DIR', __DIR__."/templates");
define('TEMPLATES_CACHE', __DIR__."/twig_cache");

\NeoHakushu\DB::getVotePreparedStatement();
\NeoHakushu\View::getTwig();

$app = function ($request, $response) {
    \NeoHakushu\Route::dispatch($request, $response);
};

$loop = React\EventLoop\Factory::create();
$socket = new React\Socket\Server($loop);
$http = new React\Http\Server($socket, $loop);

$http->on('request', $app);
echo "Server running at http://127.0.0.1:1337\n";

$socket->listen(1337);
$loop->run();
