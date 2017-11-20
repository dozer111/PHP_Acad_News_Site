<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 16.11.2017
 * Time: 12:55
 */

class PageVisitCountModel
{
    const TABLE_COUNT_VISITS_NAME='visit_page';


    /**
     * @param $url
     * @return bool
     * -------------------------------------------
     * Проверяет урл на наличие в БД
     *
     * Выдает буль для дальнейшей работы метода getInfoAboutCount
     * -------------------------------------------
     *
     */
    public function urlRewiew($url)
    {
        $db=DB::getInstance();
        $query="SELECT * FROM `".self::TABLE_COUNT_VISITS_NAME."` WHERE `page_url`='".$url."'";
        return (bool)$db->query($query)->num_rows;

    }









    /**
     * @return array
     * -------------------------------------
     * На основании урла, + зная буль с метода urlRewiew
     *              ДЕЛАЕТ
     * 1) Обновление каунтера
     * 2) Добавление урла в список
     *
     *
     * ---------------------------------------
     */
    public function setInfoAboutCount()
    {
        $url=$_SERVER['REQUEST_URI'];
        $action=$this->urlRewiew($url);
        $query=($action===true)?"UPDATE `".self::TABLE_COUNT_VISITS_NAME."` SET `count` = `count`+1 
        WHERE `".self::TABLE_COUNT_VISITS_NAME."`.`page_url` = '".$url."'":
            "INSERT INTO `".self::TABLE_COUNT_VISITS_NAME."` (`page_url`, `count`) VALUES ('".$url."', '1')";
        $db=DB::getInstance();
        return $db->query($query);

        #INSERT INTO `visit_page` (`page_url`, `count`) VALUES ('/', '0');
        # UPDATE `visit_page` SET `count` = '1' WHERE `visit_page`.`page_url` = '/';
        #UPDATE `visit_page` SET `count` = `count`+1 WHERE `visit_page`.`page_url` = '/';
    }

    public function getCountPage()
    {
        $url=$_SERVER['REQUEST_URI'];
        $this->setInfoAboutCount();
        $db=DB::getInstance();
        $query="SELECT * FROM `".self::TABLE_COUNT_VISITS_NAME."` 
        WHERE `".self::TABLE_COUNT_VISITS_NAME."`.`page_url`='".$url."'";
        return $db->query($query)->fetch_assoc();
    }




}