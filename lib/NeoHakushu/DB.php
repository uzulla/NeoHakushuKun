<?php
namespace NeoHakushu;
class DB
{
    /** @var \PDO */
    static $PDO = null;

    static $prepared_cache = null;

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

    public static function getVotePreparedStatement(){
        if(is_null(static::$PDO)){
            static::getPDO();
        }
        if(is_null(static::$prepared_cache)){
            try{
                static::$prepared_cache = static::$PDO->prepare('INSERT INTO vote (vote_id) VALUES (:vote_id)');
            }catch(\Exception $e){
                error_log('DB prepared fail.');
                error_log($e->getMessage());
                exit;
            }
        }
        return static::$prepared_cache;
    }

}
