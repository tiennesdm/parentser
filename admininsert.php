<!doctype html>
<?php

 class insertpost{
     var $course="";
    var $branch="";
    var $year="";
     var $sem="";
      var $rollno="";
       var $uname="";
        var $pass="";
         var $fees="";
         var $phone="";
     var $bday="";
      var $attend="";
       var $perform="";
      var $obtainmarks="";
       var $totalmarks="";
        var $testno="";
        var $fathername="";
        var $username="";
        public $sheetpdf="";
        var $reappear="";
        var $subject="";


        function setfile(){
             if($_SERVER["REQUEST_METHOD"]=="POST")
             {
        $this->course=trim($_REQUEST['course']);
       $this->branch=trim( $_REQUEST['branch']);
      $this->year= trim($_REQUEST['year']);
       $this->phone=trim($_REQUEST['phone']);
     $this->sem=trim($_REQUEST['sem']);
      $this->rollno=trim($_REQUEST['rollno']);
      $this->uname=trim( $_REQUEST['uname']);
      $this->pass=trim($_REQUEST['pass']);
      $this->fees=trim($_REQUEST['fees']);
      $this->bday=trim($_REQUEST['bday']);
      $this->attend=trim($_REQUEST['attend']);
      $this->perform= trim( $_REQUEST['perform']);
      $this->obtainmarks=trim($_REQUEST['obtainmarks']);
      $this->totalmarks= trim( $_REQUEST['totalmarks']);
      $this->testno=trim($_REQUEST['testno']);
        $this->fathername=trim($_REQUEST['father']);
          $this->username=trim($_REQUEST['username']);
    
 
             } 
        }
             function setsheet(){
//    $this->sheetpdf=$_FILES['FILE']['sheetpdf'];
      $this->course=trim($_REQUEST['course']);            
    $this->subject=$_REQUEST['subject'];
    $this->reappear=$_REQUEST['reappear'];
     $this->branch=trim( $_REQUEST['branch']);
      $this->year= trim($_REQUEST['year']);
           $this->sem=trim($_REQUEST['sem']);
      $this->rollno=trim($_REQUEST['rollno']);
            $this->uname=trim( $_REQUEST['uname']);
         
         }    
         function inserttbstudent(){
             $link = mysqli_connect("localhost", "root", "", "student_detail");
         $sql = "INSERT INTO  tbstudent(name,course ,branch,year,sem,rollno,mobile,dob,password,fees) VALUES ('$this->uname','$this->course','$this->branch','$this->year','$this->sem','$this->rollno','$this->phone','$this->bday','$this->pass',' $this->fees')";    
        
        if(mysqli_query($link,$sql)){
   
    echo "<script>alert('successfully inserted')</script>";
     header('location: admin.php');
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
         
     
         
         }
           function inserttbstudentform(){
             $link = mysqli_connect("localhost", "root", "", "student_detail");
        
          $sql = "INSERT INTO tbstudentform (name,course ,branch,year,sem,rollno,attendenceobtain,performance) VALUES ('$this->uname','$this->course','$this->branch','$this->year','$this->sem','$this->rollno','$this->attend','$this->perform')";    
         
        if(mysqli_query($link,$sql)){
    echo "<script>alert('successfully inserted')</script>";
     header('location: admin.php');
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
         
     
         
         }     
       function inserttbstudentmarks(){
             $link = mysqli_connect("localhost", "root", "", "student_detail");
        
          $sql = "INSERT INTO tbstudentmarks (name,course ,branch,year,sem,rollno,totalmarks,obtainmarks,testno) VALUES ('$this->uname','$this->course','$this->branch','$this->year','$this->sem','$this->rollno','$this->totalmarks','$this->obtainmarks','$this->testno')";    
      
        if(mysqli_query($link,$sql)){
    echo "<script>alert('successfully inserted')</script>";
     header('location: admin.php');
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
         
     
         
         }

         function inserttbstudentfather(){
             $link = mysqli_connect("localhost", "root", "", "student_detail");
         $sql = "INSERT INTO  tbstudentfather(name,course ,branch,year,sem,rollno,fathername,username,password) VALUES ('$this->uname','$this->course','$this->branch','$this->year','$this->sem','$this->rollno','$this->fathername','$this->username','$this->pass')";    
        
        if(mysqli_query($link,$sql)){
   
    echo "<script>alert('successfully inserted')</script>";
     header('location: admin.php');
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
         
     
         
         }
         function insertteacher(){
             $link = mysqli_connect("localhost", "root", "", "student_detail");   
            $sql = "INSERT INTO  techer(teacher_name,password,department) VALUES ('$this->uname','$this->pass','$this->branch')";       
                   if(mysqli_query($link,$sql)){
   
    echo "<script>alert('successfully inserted')</script>";
     header('location: admin.php');
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}   
         }
       function inserttbstudentsheet(){
             $link = mysqli_connect("localhost", "root", "", "student_detail");
        
          $sql = "INSERT INTO  tbstudentsheet (names,course,branch,year,sem,rollno,testno,subject,reappear,sheetpdf) VALUES ('$this->uname','$this->course','$this->branch','$this->year','$this->sem','$this->rollno','$this->testno','$this->subject','$this->reappear','$this->sheetpdf')";    
      
        if(mysqli_query($link,$sql)or die("error")){
    echo "<script>alert('successfully inserted')</script>";
     header('location: admin.php');
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
         
     
        
         }


 }


  