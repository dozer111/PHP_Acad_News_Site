<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 17.11.2017
 * Time: 17:09
 */

class AdminCategoryController extends CoreController
{

 public function actionIndex()
 {

     $listToSelect=CategoryModel::getCategoriesToSelect();

     #2 добавление категории
     $cat_id=$_POST['catName'];
     $cat_parent=$_POST['parentId'];
     $categoryModel=new CategoryModel($cat_id,$cat_parent);
     if($cat_id!=false && $cat_parent!=false)  $categoryModel->createCategory();
     $allCategoriesData=$categoryModel->getAllCategories();






     return $this->getSmarty()->display('Admin/Category/index.tpl',compact('listToSelect','allCategoriesData'));
 }

}