<?php

class Database{

 static $list=array("db_msg"=>"", "error"=>false, "pdo"=>"");

protected function sql_database(){

     try{
       self::$list["pdo"] = new PDO('mysql: host=localhost; port=3308 dbname=ggsminks; charset=utf8', 'developer', 'Moneymoney27');
       self::$list["pdo"]->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
        self::$list["error"]=false;
        self::$list["db_msg"]="";
        return self::$list;
       }
        
catch(PDOException $e){
    $database_error='<h5 style="color:red; text-align:center; margin-top:10% "> Unable to connect to the database: '. '<br/><br>'.'Error Code '.$e->getCode().'</h5>';
         self::$list["db_msg"]= $database_error;
         self::$list["error"]=true;
          return self::$list;  
    }


}

//END CLASS
} 

?>