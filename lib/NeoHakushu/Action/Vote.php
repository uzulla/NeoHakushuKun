<?php
namespace NeoHakushu\Action;
class Vote
{
    public static function vote(\React\Http\Request $request, \React\Http\Response $response)
    {
        try{
            $PDO = \NeoHakushu\DB::getPDO();

            $s = $PDO->prepare('INSERT INTO vote (vote_id) VALUES (:vote_id)');
            $s->bindValue('vote_id', 1, \PDO::PARAM_INT);
            $s->execute();
        }catch(\Exception $e){
            echo "DB INSERT fail.";
            echo $e->getMessage();
        }

        $headers = array('Location' => '/');
        $response->writeHead(302, $headers);
        $response->end('redirect');
    }
}
