<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 17.11.2017
 * Time: 17:09
 */

class AdminUserController extends CoreController
{
public function actionIndex()
{
    return $this->getSmarty()->display('Admin/User/index.tpl');
}















}