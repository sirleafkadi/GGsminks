<?php
require("model.php");

class View extends Model{

  static $model;

/////Default Constructor/////////////
function __construct(){
   self::$model = new Model();
}

    
/////Checking Database For Error/////////////
public function check_db(){
     $is_error = self::$model->check_db();

     if($is_error==true){ return $is_error; }
     else{ return null;}

   }

/////Get Category/////////////
public function get_cat(){
  
    try{

        $cat=parent::get_cat();
       
        if($cat==false){

            throw new Exception("<h6 style='color:red'> Unable to get category from database</h6>");
        }

        else{    
            foreach($cat as $cats){
            $id=$cats['cat_id'];
            $name=$cats['name'];
            include'views/cat_view.php';
            }
        }

    }catch(Exception $e){
        $err=$e->getMessage();
        echo  $err ;
    }


 

  }







}

?>