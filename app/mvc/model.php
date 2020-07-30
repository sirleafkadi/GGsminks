<?php 

require("templets/database.php");
class Model extends Database{
static $list;
static $public_list=array("db_msg"=>"", "error"=>"");

  
/////Checking Database/////////////
    protected function check_db(){
        
        self::$list = parent::sql_database();
        $db_msg = self::$list["db_msg"];
        if(self::$list['error']==true){
            self::$public_list["db_msg"]=$db_msg;
            self::$public_list["error"]=self::$list["error"];
           return self::$public_list; 
        }

        else{
            self::$public_list["error"]=false;
            return self::$public_list;
        }

    }

/////Get Categories/////////////
protected function get_cat(){
    try{

        $sql="select * from ggsminks.category";
        $row = self::$list['pdo']->query($sql);
        return $row;

    }catch(Exception $e){
        echo "<h6 style='color:red'><span style='font-size:25px'>Error:</span> <br><br>  Code: ".$e->getCode()."</h6>";
    }


}

/////END||Categories/////////////









}


?>