<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 16.11.2017
 * Time: 12:17
 */

class NewsController extends CoreController
{

    public function actionIndex()
    {}


    /**
     * -----------------------------
     * Метод для:
     * 1) вывода статьи за айдишкой
     * 2) Показа популярных новостей из данной категории(пока не реализировал)
     *
     * -----------------------------
     */
    public function actionShow()
    {
        global $params;
        $url=$params[0];
        $newsModel=new NewsModel();

        #1 получение новости по id
        $getArticle=$newsModel->getArticleById($url);
        #2 получение к-ва просмотров страницы за всё время
        $viewsCountModel=new PageVisitCountModel();
        $visitedAllTimeData=$viewsCountModel->getCountPage();

        #3 получаем сведения об онлайн пользователях
        // Смотрим в TestController==>actionIndex

        #4 Получаем все теги по данной новости
        $tagModel=new TagModel();
        $tagsToArticle=$tagModel->getTagByArticle($url);


        /**
         * ------------------------------------------------------
         * На выход попадают такие данные:
         * 1) Массив с новостью ===  $getArticle
         * 2) Общее к-во просмотров ====  $visitedAllTimeData
         * 3) Массив с тэгами для новости ===  $tagsToArticle
         * --------------------------------------------------------
         */
        return $this->getSmarty()->display('News/show.tpl',compact('getArticle',
            'visitedAllTimeData','tagsToArticle'));

    }


}