<!DOCTYPE html>
<!--use Kernel;-->
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
 <head>
  <meta charset="UTF-8">
  <title></title>
 </head>
 <body>
  <?php
  // put your code here
  require_once ('common/kernel.php');
  require_once ('common/autoloader.php');
  require_once ('config.php');
  
   spl_autoload_register(function ($class) {
   if(file_exists('./core/' . $class . '.php')):
   include './core/' . $class . '.php';
   elseif (file_exists('./common/' . $class . '.php')):
   include './common/' . $class . '.php';
   elseif (file_exists('./controller/' . $class . '.php')):
   include './controller/' . $class . '.php';
   endif;
   });
  spl_autoload_register('Autoloader::classAutoloader');
   
  Kernel::getInstance()-> main;
  Autoloader::classAutoloader($class);
  ?>
 </body>
</html>
