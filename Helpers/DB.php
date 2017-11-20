<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 15.11.2017
 * Time: 12:59
 */

final class DB
{
    private static $db;
    private function __construct(){}
    private function __clone(){}

    public static function getInstance()
    {
        if(!self::$db)
        {
            $db=new mysqli('localhost','root','','phpacad1');
            if($err=$db->connect_error)throw new Exception($err);
        return self::$db=$db;
        }
        return self::$db;
    }


}