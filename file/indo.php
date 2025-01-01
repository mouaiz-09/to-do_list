<?php
include("db.php");
if ($_SERVER[ "REQUEST_METHOD"] == "POST"){
    
    $taskna = $_POST["taskname"];
    $sql = "
    INSERT INTO `task`( `taskname`) 
    VALUES ('$taskna')
    ";
    if ($conn->query($sql) === TRUE) {
        echo"";
     }else {
          echo "nik" ;
            }
    }
    $inprogres= $conn->query("SELECT * FROM `task` WHERE iscompleted =0 ");
    $donne= $conn->query("SELECT * FROM `task` WHERE iscompleted =1 ");
    $archif= $conn->query("SELECT * FROM `task` WHERE iscompleted =2 ");
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST |ABDE elmouaiz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
</head>
<body>
   
    <div class="had">
        <h1>hello abdo elmouaiz</h1>
    </div>

    <div class="ne">
        <form action="index.php" method="post">
            <input class="tq" type="text" name="taskname" id="name" placeholder="new task ..."  required >
            
            <div class="x">
                <input type="submit" value="add">
                <input type="reset" value="rest">
            </div>
        </form>
    </div>

    <!-- form get-->
     <div class="dz">
           <div class="g">
                <h1>to do list:</h1>
             <div class="s">
                      <!--in progers-->
                      <div class="coulm">
                         <div class="top">
                            <h3 class="blue"> °in progres :</h3>
                          </div>
                   <ul>
                    <?php
                        if ($inprogres ->num_rows > 0):?>
                                           <?php while ($row =$inprogres->fetch_assoc()):?>
                                              <li>
                                              <div>
                                                <h4>
                                                    <?php   echo $row["taskname"];?>
                                                  
                                              </h4>
                                            </div>
                                              <div class ="deel">
                                                  <a href="d.php?id=<?php  echo$row['id'];?>" class="red">Delet</a>
                                                    <a href="compl.php?id=<?php echo$row['id'];?>" class ="gren">Complet</a>
                                                    <a href="archif.php?id=<?php echo$row['id'];?>" class ="yloo">archif</a>
                                               </div>
                        
                                            </li>
                                            <?php endwhile ?>
                                                <li class="no">
                                          <div class="na" >
                                               <form action="index.php" method="post">
                                                       <input class="aq" type="text" name="taskname" id="name" placeholder="new task ..."  required >
                                                       <div class="f">
                                                           <input type="submit" value="add">
                                                     
                                                       </div>
                                                </form>
                                             </div> 
                                    </li>

                                 <?php else: ?>
                                    <li class="no">
                                          <div class="na" >
                                               <form action="index.php" method="post">
                                                       <input class="aq" type="text" name="taskname" id="name" placeholder="new task ..."  required >
                                                       <div class="f">
                                                           <input type="submit" value="add">
                                                     
                                                       </div>
                                                </form>
                                             </div> 
                                    </li>
                       <?php   endif; ?>
                  
                  </ul>
                    </div>

                       <!--doone-->
                <div class="coulm">
                         <div class="top">
                            <h3 class="green"> ° Doone :</h3>
                          </div>
          
               <ul>
               <?php if($donne->num_rows > 0):   ?>   
                <?php while($row = $donne->fetch_assoc()):   ?> 
                                          <li>
                                                  <div>
                                                   <h4>
                                                      <?php   echo $row["taskname"];?>
                                                  </h4>
                                                </div>
                                                 <div class ="deel">
                                              <a href="d.php?id=<?php echo$row['id'] ?>" class="red">Delet</a>
                                                    <a href="archif.php?id=<?php echo$row['id'];?>" class ="yloo">archif</a>

                                                   </div>

                                            </li>
                                 <?php endwhile; ?>
                                 <?php endif; ?>
                                 
              </ul>
          
                 </div>
                  <!--archif-->
                <div class="coulm " >
                    <div class="top">
                     <h3 class="blue yloo">   ARCHIF:</h3>
                       </div>
           <ul>
               <?php
                   if ($archif ->num_rows > 0):?>
                                      <?php while ($row =$archif->fetch_assoc()):?>
                                         <li>
                                         <div>
                                           <h4>
                                               <?php   echo $row["taskname"];?>
                                             
                                         </h4>
                                       </div>
                                         <div class ="deel">
                                             <a href="d.php?id=<?php  echo$row['id'];?>" class="red">Delet</a>
                                               <a href="compl.php?id=<?php echo$row['id'];?>" class ="gren">Complet</a>
                                          </div>
                   
                                       </li>
                                       <?php endwhile ?>
                              
    
                          
                  <?php   endif; ?>
             
           </ul>
       
                                           
                </div>
             </div>
     </div>  

    </div>


    <footer>
                                      <!--countect-->
        <div class="as">
            <div class="ad">

                <div class="countc">
                 <a href="https://www.instagram.com/abde.elmouazi/" target="_blank" rel="noopener noreferrer">
               <i class="fa-brands fa-instagram fa-lg" style="color: #ff00bb;"></i>
                    instgram
                </a>
                 <a href="https://github.com/mouaiz-09?tab=overview&from=2024-12-01&to=2024-12-31" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-github fa-lg" style="color:rgb(255, 255, 255);"></i>   
                 github
                </a>
          
               <a   href="mailto:https://rlqyyn@gmail.com">
                <i class="fa-solid fa-envelope fa-lg" style="color: #ff0000;"></i>
             gmail
               </a>
                </div>
                <div class="me">
                 <h3>Abd ELmouaiz</h3>
                 <h4>@2024</h4>
                </div>
            </div>
        </div>
    </footer>
      

</body>
</html>