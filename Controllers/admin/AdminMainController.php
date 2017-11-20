<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 17.11.2017
 * Time: 16:28
 */

class AdminMainController extends CoreController
{
    public function actionIndex()
    {
        $this->getSmarty()->display('Admin/Main/index.tpl');
    }

}