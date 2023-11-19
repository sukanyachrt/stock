<?php
error_reporting(E_ALL);
ini_set("display_errors", 0);
ob_start();
session_start();
class Bootstrap
{
  function __construct()
  {
    $url = isset($_GET['url']) ? $_GET['url'] : null;
    $url = rtrim($url, '/');
    $url = explode('/', $url);
   if (isset($url[1])) {
      require 'controllers/errors.php';
      $controller = new Errors();
      return false;
    } else {

      $file = 'controllers/index.php';
      if (is_file($file)) {
        require $file;
      } else {
        require 'controllers/errors.php';
        $controller = new Errors();
        return false;
      }



      if (class_exists($url[0])) {
        $controller = new $url[0];
      } else {
          if($url[0]==""){
            $controller = new index;
          }
          else{
            $controller = new notfound;
          }
       
        // if (isset($_SESSION['hn'])) {
        //   if ($_SESSION['hn'] == "") {
        //     $controller = new index;
        //   } else {
        //     $controller = new widgets;
        //   }
        // } else {
        //   $controller = new index;
        // }
      }




      /*
    if(isset($url[2])){
      $controller->{$url[1]}($url[2]);
    }else {
      if(isset($url[1])){
        $controller->{$url[1]}();
      }
    }
    */
    }
  }
}
