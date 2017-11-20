<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 16.11.2017
 * Time: 14:07
 */

class TestController extends CoreController
{
    private $count;


    public function actionIndex()
    {
        $sess_id=$this->getSession()->getSessionKey('session_id');

        $url=$this->getParams();
        $url=$url[0];
        $userOnline=new UserOnlineModel();
        $online=$userOnline->getOnline($sess_id,$url);


       return $this->getSmarty()->display('Test/index.tpl',compact('online'));
    }
    public function actionTest()
    {
        $string='test5';
        $hash=password_hash($string,PASSWORD_DEFAULT);
        if(password_verify($string,$hash))echo "Zer gut";
    }




}