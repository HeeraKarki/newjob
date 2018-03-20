<?php
/**
 * Created by PhpStorm.
 * User: bkj
 * Date: 3/17/18
 * Time: 1:31 AM
 */

class Model
{
    protected $table;
    protected $fillable;

    public static function all(){
        $db=App::get('database');
        $nw= new static;
        return QueryBuilder::All($nw->table,static::class);
    }

    public function __construct()
    {

    }
}