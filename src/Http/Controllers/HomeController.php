<?php
namespace NelsonPHP\Http\Controllers;
use Illuminate\Http\Request;
use \NelsonPHP\Http\Views\View;
class HomeController{
    
    public function index(Request $request ){
        
        $view= new View('home',['message'=>'Hello form a view']);
       
        $response=  $view->render();
        
        $response->send();
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

