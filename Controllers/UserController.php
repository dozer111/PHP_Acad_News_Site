<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 17.11.2017
 * Time: 12:38
 */

class UserController extends CoreController
{

    public function actionIndex()
{
    #1 получаем данные о пользователе
    $params=$this->getParams();
    $user_id=$params[0];
    #2 получаем все новости пользователя с БД
    $newsModel=new NewsModel();
    $userNews=$newsModel->getAllNewsFromUser($user_id);
    return $this->getSmarty()->display('User/index.tpl',compact('userNews'));
}






}