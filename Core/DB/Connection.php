<?php
namespace Core\DB;

class Connection  
{
    public static function make($config)
    {
        try{
            return new \PDO(
                'mysql:host='.$config['host'].';dbname='.$config['db_name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }catch(\PDOException $e){
            die($e->getMessage());
        }
    }
}
