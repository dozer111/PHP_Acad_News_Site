<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 16.11.2017
 * Time: 16:10
 */

class AuthController extends CoreController
{
    public function actionIndex(){}

    public function actionLogin(){
        if($_SERVER["REQUEST_METHOD"]=='GET')$this->getSmarty()->display('Auth/login.tpl');

        #1 узнаем все нужные нам данные
        $login=$_POST['login'];
        $pass=$_POST['pass1'];

        $userModel=new UserModel($login,'false',$pass);
        #2 пробуем авторизировать пользователя
        $res=$userModel->loginUser();
        if(is_array($res)) {
            $user = $this->getSession()->setSessionKey('user', $res);
            header('Location:/');
        }
        else{
            return $this->getSmarty()->display('Auth/wpass.tpl',compact('res'));

        }



    }



    public function actionLogout(){
        $this->getSession()->destroySession();
        header('Location:/');
    }


    /**
     * @return bool|void
     * ------------------------------------
     *                  1
     * Метод смотрит, какой из запросов поступает на вход,
     * и если GET ==> то переходим на страничку регистрации
     * POST ==> переходим на страничку авторизации
     *
     *                  2
     *Авторизируем пользователя,
     * Заносим данные в сессию и переходим на другую страницу

     * -------------------------------------
     */
    public function actionRegister(){
        if($_SERVER['REQUEST_METHOD']=='GET')$this->getSmarty()->display('Auth/register.tpl');

        #получаем данные из формы
        $login=$_POST['login'];
        $email=$_POST['email'];
        $pass1=$_POST['pass1'];
        $pass1=password_hash($pass1,PASSWORD_DEFAULT);
        #1 создаем пользователя и заносим всё в модель для рассмотрения
        $userModel=new UserModel($login,$email,$pass1);
        $create=(bool)$userModel->createUser();

        #2 после внесения пользователя в БД, проверяем,
        // реально ли он там создался, и если нет, то в
        // представлении пишем что ,,Есть такой один, уже,,
        if($create===false)die("Sorry user already exists");
        // а если есть, возвращаем массив данных
        $userInfo=$userModel->getInfo();
        #3 Проброс данных о пользователе в сессию
        $this->getSession()->setSessionKey('user',$userInfo);
        header('Location:/');
    }


}