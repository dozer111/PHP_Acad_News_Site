<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 16.11.2017
 * Time: 16:10
 */

class UserModel
{
    private $id;
    private $login;
    private $email;
    private $pass;
    private $created_at;
    private $role;

    const USER_TABLE_NAME='user';


    public function __construct($login,$email='false',$pass)
    {
        $this->login=$login;
        $this->pass=$pass;
        $this->email=$email;
    }

    public function createUser()
    {
        if($this->userExist())return false;
        $query="INSERT INTO `".self::USER_TABLE_NAME."` SET
        `login`='".$this->login."',
        `email`='".$this->email."',
        `pass`='".$this->pass."'
        ";
        $db=DB::getInstance();
        $db->query($query);
        if(!$id=$db->insert_id) return false;
        $this->id=$id;
        return true;
    }



    /**
     * @return bool
     * -----------------------------
     * Метод для проверки уникальности
     * пользователя за логином или
     * электронной почтой
     * -----------------------------
     */
    public function userExist()
    {
        $query="SELECT * FROM `".self::USER_TABLE_NAME."` WHERE `login`='".$this->login."' OR `email`='".$this->email."'";
        $db=DB::getInstance();
        return (bool)$db->query($query)->num_rows;
    }



    public function updateUser(){}


    public function getInfo(){
        $db=DB::getInstance();
        return $db->query("SELECT * FROM `".self::USER_TABLE_NAME."` WHERE `login`='".$this->login."'")->fetch_assoc();
    }


    /**
     * @param $login
     * @param $pass
     * @return array|bool
     * ----------------------------------
     * Метод, который после проверки
     * юзера на наличие
     *      ВОЗВРАЩАЕТ:
     * 1) false ели юзера нет
     * 2) массив значений с таблицы
     * -------------------------------------
     */
    public function loginUser()
    {
        $realUser=$this->userExist();
        if($realUser===false)return false;
        $db=DB::getInstance();
        $query="SELECT * FROM `".self::USER_TABLE_NAME."` WHERE `login`='".$this->login."'";

        $res=$db->query($query)->fetch_assoc();
        if(password_verify($this->pass,$res['pass'])) return $res;
        $err='Wrong Password';
        return $err;
    }



public static function isAdmin($user_id)
{
    $db=DB::getInstance();
    $query="SELECT * FROM `".self::USER_TABLE_NAME."` WHERE `id`=".$user_id."AND `role`=1";
    return (bool) $db->query($query)->num_rows;

}













}