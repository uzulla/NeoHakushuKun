<?php
namespace NeoHakushu;
class View
{
    static $twig = null;

    public static function getTwig(){
        if(is_null(static::$twig)){
            $loader = new \Twig_Loader_Filesystem(TEMPLATES_DIR);
            static::$twig = new \Twig_Environment($loader, array(
                'cache' => TEMPLATES_CACHE,
            ));

        }
    }

}
