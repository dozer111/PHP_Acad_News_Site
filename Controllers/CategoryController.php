<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 15.11.2017
 * Time: 13:20
 */

class CategoryController extends CoreController
{
    public function actionIndex()
    {
        echo "<h2>".__METHOD__;
    }


    public function actionShow()
    {
        global $params;
        $url=$params[0];
        $newsModel=new NewsModel();


        #1 получение максимального количества записей для пагинации
        $countPages=$newsModel->Post_Cat_count($url);
        $maxPages=ceil($countPages/5);
        #2 получение текущей страницы
        $page=($res=$_GET['page'])?$res:1;
        #3 получение последних 5(дефолтных) записей с таблицы по категории
        $pagePosts=$newsModel->gANFCWP($url,$page);




        /**
         * В представление попадают данные об:
         * 1) текущей странице
         * 2) максимальном к-ве страниц
         * 3) 5 новостях
         * 4) О категории
         */
        return $this->getSmarty()->display('Category/show.tpl',
            compact('maxPages','page','pagePosts','url'));







    }












}