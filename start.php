<?php 

class Start{


function activate(){
    session_start();
    ob_start();
    $_SESSION['error']["db_error"]="";

}

}
?>