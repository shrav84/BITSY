<?php
include 'newp.php';
if(isset($_POST['send'])){
 $Username= $_POST['Username'];
 $mailid= $_POST['mailid'];
 $interest= $_POST['interest'];

 

    $sql="insert into `newsletter`(Username, mailid, interest)
    values('$Username','$mailid','$interest')";
    $result = mysqli_query($con,$sql);
    if(!$result)
    {
      die(mysqli_error($con));
    }
if($result)
  {
   echo "Data Inserted";
   exit;
  }
  
    
   }
 
?>