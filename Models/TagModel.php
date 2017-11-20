<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 20.11.2017
 * Time: 15:25
 */

class TagModel
{

    # Таблица тегов к новости
 /*  SELECT `post`.`id`,`tag`.`tag_name`
FROM `article_tag`
LEFT JOIN `post`
ON `article_tag`.`article_id`=`post`.`id`
LEFT JOIN `tag`
ON `article_tag`.`tag_id`=`tag`.`tag_id`
WHERE `post`.`id`=2
`*/
private $tagId;
private $tagName;
const TAGS_TABLE_NAME='tag';
public function __construct($tag_name='')
{
    $this->tagName=$tag_name;
}


    /**
     * @return bool|mixed
     * --------------------------
     * Получить все теги, сортированные с начала
     * --------------------------
     */
public static function getAllTags(){
    $db=DB::getInstance();
    $res=$db->query("SELECT * FROM  `".self::TAGS_TABLE_NAME."` ORDER BY `tag_id` ASC")->fetch_all(MYSQLI_ASSOC);
    if(!$id=$db->insert_id)return $res;
    return false;

}

    /**
     * @param $post_id
     * @return mixed
     * ----------------------------
     * Получить все статьи по id новости
     * ----------------------------
     */
 public function getTagByArticle($post_id)
 {
     $query="SELECT `post`.`id`,`tag`.`tag_name` FROM `article_tag` LEFT JOIN `post` ON `article_tag`.`article_id`=`post`.`id`
LEFT JOIN `tag` ON `article_tag`.`tag_id`=`tag`.`tag_id` WHERE `post`.`id`=".$post_id;
     $db=DB::getInstance();
     return $res=$db->query($query)->fetch_all(MYSQLI_ASSOC);
 }


 public function getTagByName(){}


    /**
     * @return bool
     * ------------------------------
     *Создаем тэг либо прямо со свойств обьекта,
     *              ИЛИ
     *Аргументом
     * ------------------------------
     */
 public function createTag($tagName=false)
 {
     $db=DB::getInstance();

     $query=($tagName===false)?"INSERT INTO `".self::TAGS_TABLE_NAME."` SET `tag_name`='".$this->tagName."'"
     : "INSERT INTO `".self::TAGS_TABLE_NAME."` SET `tag_name`='".$tagName."'";
     $db->query($query);
    if($id=$db->insert_id)
    {
        $this->tagId=$id;
        return true;
    }
    return false;
 }



 public function updateTag(){}
 public function deleteTag(){}
 public function deleteTagFromArticle(){}













}