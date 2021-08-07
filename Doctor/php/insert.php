<?php
if (isset($_POST['submit'])) {
    # code...
    $name=$_POST['name'];
    $tel=$_POST['tel'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $textarea=$_POST['textarea'];
    //insert query into table
    $query="INSERT INTO patient(name, tel, date,time, textarea) 
    VALUE ('$name','$tel','$date','$time','$textarea')";
    $result=$conn->query($query);

    if ( $result) {
        # code...
        echo "<script> alert('patient  record has been submitted '); </script>";
      //  echo "data has been submitted ";
    }
    else{
         # code...
         echo "<script> alert('patient  record has been not submitted '); </script>";
        // echo "data has been not submitted ";
    }

}

?>