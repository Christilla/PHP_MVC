<?php
class Autoloader{
 private static $_classDir = "./classes/";
 
 public static function classAutoloader($class){
  echo 'Hey Hey';
   echo $class."\n";
  $path = static::$_classDir."$class.php";
  $path = str_replace("\\","/",$path);
   echo $path."\n";
   
   if(file_exists($path)&& is_readable($path)){
      require_once $path;
   }
  
//     spl_autoload_register(function ($class) {
//   if(file_exists('./core/' . $class . '.php')):
//   include './core/' . $class . '.php';
//   elseif (file_exists('./models/' . $class . '.php')):
//   include './models/' . $class . '.php';
//   elseif (file_exists('./controllers/' . $class . '.php')):
//   include './controllers/' . $class . '.php';
//   endif;
//   });
  
  
  
 } 
}
//spl_autoload_register('Autoloader::classAutoloader');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

