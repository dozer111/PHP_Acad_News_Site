<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 20.11.2017
 * Time: 18:07
 */



class AdminTagController extends CoreController
{
    /**
     *Основное меня для работы с тегами
     */
    public function actionIndex()
    {
        #1 получаем все категории для списка
        $tagModel=new TagModel();
        $tags=$tagModel::getAllTags();



        return $this->getSmarty()->display('Admin/Tag/index.tpl',compact('tags'));


    }

    public function actionCreate()
    {
    }
    public function actionCheck(){
        $actionPost=$_POST['submit'];
        
    }




}