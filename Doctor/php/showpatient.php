<?php
include "config.php";

session_start();
if(!isset($_SESSION['name'])){
//	echo "your logout";
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showpatient</title>
    <link rel="stylesheet" type="text/css" href="..//style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
    
    <!-- table -->
    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <td colspan="5"><h1 align="center">PATIENT RECODORD</h1> </td>
    <td> <a href="logout.php"><input type="submit" name="logout" value="LOGOUT"></a></td>
  </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Symptoms</th>
    </tr>
  </thead>
  <tbody>

      <?php
    
    $query ="SELECT * FROM patient";
    $fire =$conn->query($query);
  
    if($fire){
       while($user= $fire->fetch(PDO::FETCH_OBJ))
   echo" <tr> 
        <td> $user->id </td>
        <td> $user->name </td>
        <td> $user->tel </td>
        <td> $user->date </td>
        <td> $user->time </td>
        <td> $user->textarea </td>
    </tr>
    ";
     }
    ?>
  </tbody>
</table>
    <!-- close table -->
    
</body>
</html>