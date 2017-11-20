<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 14.11.2017
 * Time: 14:39
 */

class MainController extends CoreController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function actionIndex()
    {
        # get Info about Categories
        $category= new CategoryModel();
        $allCategories=$category->getAllCategories();

        # get Info about category====> 5 latest news
        $post=new NewsModel();
        $newsArray=[];
        foreach ($allCategories as $category){

            $newsArray[$category['id']]=$post->getAllNewsByCategory($category['id'],"DESC",5);
        }

    return $this->getSmarty()->display('Main/index.tpl',compact('allCategories','newsArray'));

    }








}