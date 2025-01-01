<?php
include("db.php");
$id = $_GET["id"];
if ($id) {
   $smt =$conn ->prepare("DELETE FROM `task`  WHERE id=?");
   $smt ->bind_param("i", $id);
   $smt -> execute();   
   $smt -> close() ;

    
}
header("location: index.php");
exit();


