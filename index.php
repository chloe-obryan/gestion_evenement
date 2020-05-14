<?php
if(!isset($_GET['page'])){
$_GET['page']='accueil';
}
include_once('controleurs/router.controller.php');
$router=new Router();
$router->request();
?>