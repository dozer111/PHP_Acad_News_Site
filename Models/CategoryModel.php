<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 15.11.2017
 * Time: 13:04
 */

class CategoryModel
{
    const CATEGORY_TABLE_NAME='category';
    private $id;
    private $category_name;
    private $category_parent;
    private $img;


    public function __construct($cat_name='',$cat_parent=0,$img='no-image.png')
    {
        $this->category_name=$cat_name;
        $this->category_parent=$cat_parent;
        $this->img=$img;
    }


    /**
     * @return mixed
     * ----------------------------------
     * Получить все таблицы для отображения
     * на главной странице
     * ----------------------------------
     */
    public function getAllCategories(){
      $db=DB::getInstance();

      $res=$db->query("SELECT * FROM `".self::CATEGORY_TABLE_NAME."` ")->fetch_all(MYSQLI_ASSOC);
      return $res;

    }


    public function createCategory()
    {
        #INSERT INTO `category` (`id`, `category_name`, `category_parent`, `img`)
        # VALUES (NULL, 'Vasser', '0', 'no-image.png');
        $db=DB::getInstance();
        $query="INSERT INTO `".self::CATEGORY_TABLE_NAME."` (`category_name`, `category_parent`, `img`)VALUES ('".$this->category_name."','".$this->category_parent."','".$this->img."')";
        #die($query);
        $db->query($query);
        if(!$id=$db->insert_id)return false;
        $this->id=$id;
        return true;
    }


    /**
     * @return mixed
     * ------------------------------
     * Метод, который выдает для
     *админки номер категории и её название
     *
     * ------------------------------
     */
public static function getCategoriesToSelect()
{
    $query="SELECT `category`.`id`,`category`.`category_name` FROM `category`";
    $db=DB::getInstance();
    return $res=$db->query($query)->fetch_all(MYSQLI_ASSOC);
}





































}