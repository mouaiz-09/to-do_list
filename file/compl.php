<?php
include  ('db.php');
$id = $_GET["id"];
if ($id) {
   $smt =$conn ->prepare("UPDATE `task` SET `iscompleted`= 1  WHERE id=?");
   $smt ->bind_param("i", $id);
   $smt -> execute();   
   $smt -> close() ;


    
}
header("location: index.php");
exit();


