<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 15.11.2017
 * Time: 13:31
 */

class NewsModel
{

    const NEWS_TABLE_NAME='post';


    public function getAllNews(){}


    /**
     * @param $cat_id
     * @param int $limit
     * @return  array
     * --------------------------------------------
     * Method, that give us all news if limit =0,
     *                OR
     * number of posts in $limit
     *                 AND
     * sort it by $order
     * ---------------------------------------------
     *
     */
    public  function getAllNewsByCategory($cat_id,$order="DESC",$limit=0){
        $db=DB::getInstance();
        $query=($limit==0)?"SELECT * FROM `".self::NEWS_TABLE_NAME."` 
        WHERE `category_id`=".$cat_id." ORDER BY ".$order:"SELECT * FROM `".self::NEWS_TABLE_NAME."` 
        WHERE `category_id`=".$cat_id." ORDER BY `id` ".$order." LIMIT ".$limit;

        $res=$db->query($query)->fetch_all(MYSQLI_ASSOC);

        return $res;
    }


    /**
     * @param $cat_id
     * @param int $start
     * @param int $limit
     * @return mixed
     * --------------------------------------------------------------
     * gANFCWP ===> get All News From Category With Pagination
     *
     * ORDER BY DESC
     * ---------------------------------------------------------------
     *
     *
     *
     */
    public function gANFCWP($cat_id,$start=0,$limit=5)
    {

        $start=($start-1)*5;

        $query="SELECT * FROM `".self::NEWS_TABLE_NAME."` WHERE `".self::NEWS_TABLE_NAME."`.`category_id`=".$cat_id."
       ORDER BY `id` DESC LIMIT ".$start.",".$limit;
        $db=DB::getInstance();
        $res=$db->query($query)->fetch_all(MYSQLI_ASSOC);
        return $res;
   #SELECT * FROM `post` WHERE `post`.`category_id`=7 ORDER BY `id` DESC LIMIT 0,5

    }

    /**
     * @param $cat_id
     * @return int
     * ---------------------------------------------
     *Return count of posts by $cat_id category
     *              ||||||||||
     *Method helper to pagination
     * ----------------------------------------------
     */
    public function Post_Cat_count($cat_id)
    {
        $db=DB::getInstance();
        return $db->query("SELECT * FROM `".self::NEWS_TABLE_NAME."` WHERE  `category_id`=".$cat_id)->num_rows;
    }


    public function getArticleById($art_id){
        $db=DB::getInstance();
        return $res=$db->query("SELECT * FROM `".self::NEWS_TABLE_NAME."` WHERE `id`=".$art_id." LIMIT 1")->fetch_assoc();

    }


    /**
     * @param $user_id
     * @return mixed
     * --------------------------------------
     * Метод, который позволяет нам
     * получить все статьи
     * 1) на страницу пользователя
     * 2) за фильтром пользователя
     *
     * ---------------------------------------
     *  Возвращает массив из статей
     */
    public function getAllNewsFromUser($user_id)
    {
        $query="SELECT * FROM `".self::NEWS_TABLE_NAME."` WHERE `".self::NEWS_TABLE_NAME."`.`author_id`=".$user_id;
        $db=DB::getInstance();
        $res=$db->query($query)->fetch_all(MYSQLI_ASSOC);
        return $res;
    }


}