<?php
error_reporting(E_ALL &~E_NOTICE);
function debug($var,$h1=0)
{
    echo "<pre>";
    if($h1!=0) echo "<h1>";
    print_r($var);
    echo "</pre>";
}

const DC=DIRECTORY_SEPARATOR;









/**
 * ----------------------------
 *  Request URI to ==> Route
 * ----------------------------
 */
$root=realpath(__DIR__.'/..');
$request=$_SERVER['REQUEST_URI'];
$request=explode('/',ltrim($request,'/'));






/**
 * Smarty install
 */
require_once ($root.DC.'libs'.DC.'Smarty.class.php');
$smarty=new Smarty();
$smarty->setTemplateDir($root.DC.'Views');
























/**
 *----------------------------------
 * Routing register
 * --------------------------------
 */
spl_autoload_register(function ($className) use ($root){
   $type='Helpers';
    if(strpos($className,'dmin'))$className='admin/'.$className;
   $type=(strpos($className,'Controller'))?'Controllers':$type;
   $type=(strpos($className,'Model'))?'Models':$type;

   $filePath=$root.'/'.$type.'/'.$className.'.php';
    if(file_exists($filePath))require_once ($root.DC.$type.DC.$className.'.php');
    else die("OOPS page ==> {$filePath} <br>was not found");


});





/**
 * ---------------------------------
 * Add session
 * ---------------------------------
 */
$session=new Session();




/**
 * --------------------------------------
 *  Receiving all needed Path points
 * --------------------------------------
 */

$controller=($res=ucfirst(array_shift($request)))?$res.'Controller':'MainController';
if(strpos($controller,'dmin') && isset($_SESSION['user']) && $_SESSION['user']['role']==1)
{   $c1=($res=array_shift($request))?ucfirst($res):'Main';
    $controller='Admin'.$c1."Controller";
}

$action=($res=ucfirst(array_shift($request)))?'action'.$res:'actionIndex';
$params=[];
$paramsCount=count($request);
foreach ($request as $key => $value)
{
    $params[$key]=$value;
}





$obj=new $controller();
if(!method_exists($obj= new $controller,$action))die('Action was not found');
$obj->$action();




























?>

