<?php
    
//   require_once("config.php"); 
      if (isset($_POST['login']))
      { 
  $name=$_POST['name']; 
  $password=$_POST['password']; 
  $query = "select * from admin where name = :name and password = :password";
  $stmt=$conn->prepare($query);  
              
  $stmt->bindParam(':name', $name); 
  $stmt->bindParam(':password', $password); 
  try{        
       $result=$stmt->execute();      
      
  $count=$stmt->rowCount();         
 if($count>0){          
    while($row=$stmt->fetch()){       
   session_start();           
   $_SESSION['name']=$row[1]; 
 echo "<script language = \"javascript\" type = \"text/javascript\">window.location.href=\"showpatient.php\"; </script>";           
      
header("location:showpatient.php");        
       }}     
      else{ 
     echo "<script> alert('Wrong Username andpassword'); </script>";
    }}     
    catch(Exception $e){  
              $e->getMessage();  
    }}      

?>