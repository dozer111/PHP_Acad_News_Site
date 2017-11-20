<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 14.11.2017
 * Time: 14:33
 */

class ErrorController extends CoreController
{
public function actionIndex()
{
    $err=$this->getParams();
    echo "<h1>WHOOPS ,file ==> ".$err[0]." <== was not found";
}


}