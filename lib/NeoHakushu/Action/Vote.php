<?php
namespace NeoHakushu\Action;
class Vote
{
    public static function vote(\React\Http\Request $request, \React\Http\Response $response)
    {
        try{
            $s = \NeoHakushu\DB::getVotePreparedStatement();
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
