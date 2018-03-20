<?php
namespace Core\DB;
use PDO;
class QueryBuilder
{
    protected $pdo;
    protected static $con;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        static::$con=$pdo;
    }

    public static function All($table,$model)
    {
        $con= self::$con;
        $statement =$con->prepare("select * from {$table}");
        $statement->execute();
        return $tasks = $statement->fetchAll(PDO::FETCH_CLASS,$model);
    }
    public function selectAll($table)
    {

        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $tasks = $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parms)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parms)),
            ':' . implode(', :', array_keys($parms))

        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parms);
        }catch (Exception $exception){
            die($exception->getMessage());
        }
    }
}
