<?php
  $link = mysqli_connect("localhost", "root", "", "student_detail");
session_start();

      switch ($_POST['page']) {
case 1:  $query="SELECT pk,fees FROM  tbstudent WHERE pk=";
    die;
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
        $num = mysqli_num_rows($result);
            
if($num==1)
    {
           
         $row = mysqli_fetch_array($result);
       
         $_SESSION['fees']=$row['fees'];
         
     
     }
            
break;
             
case 2: 
    echo $query="SELECT pk,attendenceobtain,performance FROM tbstudentform WHERE pk='$pk'";
    die;
           $result = mysqli_query($con, $query)or die(mysqli_error($con));
                $num = mysqli_num_rows($result);
            
        if($num==1)
    {
            
         $row = mysqli_fetch_array($result);
         
         $_SESSION['attendenceobtain']=$row['attendenceobtain'];
          $_SESSION['performance']=$row['performance'];
       
     }
     break;
   
     case 3: 
         echo $query="SELECT pk,totalmarks,obtainmarks,testno FROM tbstudentmarks WHERE pk='$pk'";
         die;
           $result = mysqli_query($con, $query)or die(mysqli_error($con));
                $num = mysqli_num_rows($result);
            
        if($num==1)
    {
            
         $row = mysqli_fetch_array($result);
         
         $_SESSION['totalmarks']=$row['totalmarks'];
          $_SESSION['obtainmarks']=$row['obtainmarks'];
            $_SESSION['testno']=$row['testno'];
       
     }
     break;
}  
