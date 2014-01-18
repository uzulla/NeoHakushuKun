<?php
namespace NeoHakushu;
class DB
{
    /** @var \PDO */
    static $PDO = null;

    public static function getPDO(){
        if(is_null(static::$PDO)){
            try{
                error_log("Open DB DSN:".APP_DIR."/sqlite.db");
                static::$PDO = new \PDO('sqlite:'.APP_DIR."/sqlite.db");
            }catch(\Exception $e){
                error_log('DB getPDO fail.');
                error_log($e->getMessage());
                exit;
            }
        }
        return static::$PDO;

    }
}
