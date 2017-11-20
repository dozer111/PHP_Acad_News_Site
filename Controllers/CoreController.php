<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 14.11.2017
 * Time: 14:33
 */

abstract class CoreController
{
    private $params;
    private $smarty;
    private $session;
    public function __construct()
    {
        global $params;
        $this->params=$params;
        global $smarty;
        $this->smarty=$smarty;
        global $session;
        $this->session=$session;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function getSmarty()
    {
        return $this->smarty;
    }

    public function getSession()
    {
        return $this->session;
    }



    abstract public function actionIndex();


}