<?php
namespace NelsonPHP\Http\Views;
//use  \Illuminate\Http\Response;
use Illuminate\Http\Response;
class View
{
    
    private $template;
    private  $params;
    
    public function __construct($template, Array $params= []) {
    
        $this->template=$template;
        $this->params=$params;
    }
    
    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function render(){
        
        $content= $this->loadTemplate();
        $response=new Response($content);
        return $response;
        
    }
    
    private function loadTemplate(){
        
         $path=dirname(dirname(__DIR__) ).'\resources\views';
         $templePath="$path/{$this->template}.php";
       //  $templePath=  realpath($templePath);
       $templePath=str_replace("/", "&#92;", $templePath);
        //$templePath=$path.$this->template;
        $this->includeTemplateFromFile($templePath, $this->params);
        
    }
    
    private function  includeTemplateFromFile($path, $params){
        echo "$path";
         $path=str_replace("&#92;", "/", $path);
        if(file_exists($path)){
            echo "existe";
            extract($params);
             return  include $path;
           
            
        }else{
            
            echo "error";
        }
    }
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

