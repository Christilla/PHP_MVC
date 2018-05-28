<?php

class Controller {
 
 
 public function view(String $dir = null, String $action ) {
  
  include('./views/layouts/header.php');
  
  if ($dir) {
    if (file_exists('./views/'.$dir.'/'.$action.'.php')) {
     include('./views/'.$dir.'/'.$action.'.php');
    }
  }
  if (file_exists('./views/'.$action.'.php')) {
   include('./views/'.$action.'.php');
  }
  include('./views/layouts/footer.php');
 }
 
// public function accueil(){
//  include 'view/headerView.php';
//  include(dirname(__FILE__).'/../view/accueil.php');
//  include 'view/footerView.php';
//  
// }
// 
// public function delete($param,$id){
//      
//  $delete = new Model();
//  $result = $delete->delete($param, $id);
//  $this->response($result['data'], $result['status'], $result[1]);
//  
// }
// 
// 
// public function get(){
//  
// }
// 
// public function post(){
//  
// }
// 
// 
// public function index(){
//  $url=$_SERVER['REQUEST_URI'];
//  
//  $url = explode('/', rtrim($url, '/'));
//  
//  if ($url[1] != "api") { $this->accueil();} else {
//    $method = $_SERVER['REQUEST_METHOD'];
//    
//     switch ($method) {
//      case 'DELETE':
//       $this->delete($url[2], $url[3]);
//       break;
//      case 'POST':
//       $this->post($url[2], $url[3], $url[4], $url[5], $url[6]);
//       break;
//      case 'GET':
//       $this->get($url[2], $url[3]);
//       break;
//      default:
//        $this->response('Method Not Alowed', 405);
//       break;
//     }
//  }
// }
 
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

