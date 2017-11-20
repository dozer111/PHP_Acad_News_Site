<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 16.11.2017
 * Time: 13:41
 */

class Session
{
    public function __construct()
    {
        if(isset($_COOKIE['session_id']))
        {
            session_id($_COOKIE['session_id']);
            session_start();
        }
        else{
            session_start();
            setcookie('session_id',session_id());
        }
    }


    public function getSessionKey($key,$default=null)
    {
        return (isset($_COOKIE[$key]))?$_COOKIE[$key]:$default;
    }
    public function setSessionKey($key,$value)
    {
        if(!$key)return false;
        $_SESSION[$key]=$value;
        return true;
    }
    public function destroySession(){
        session_destroy();
    }















}