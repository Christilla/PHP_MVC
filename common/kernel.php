<?php
class Kernel {
 
 private static $_instance= null;
 
 private function __construct() {
  
 }
 
 public static function getInstance(){
  echo 'Hi!';
  if(is_null(self::$_instance)){
   self::$_instance= new Kernel;
  }
  return self::$_instance;
 }
 
 public function Main(){
  $welcome = new Controller();
  
  $welcome->index();
 }
 
 
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

