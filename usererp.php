

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login id</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/logincss.css" rel="stylesheet">
        <link href="css/user id.css" rel="stylesheet">
        <script src="css/jquery.js"></script>
        <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="css/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
            <script> 
$(document).ready(function(){
    $("#flips").click(function(){
        $("#panelss").slideToggle("slow").css("background-color", "white");
    });
});
        $(document).ready(function(){
    $("#flips1").click(function(){
        $("#panelss1").slideToggle("slow").css("background-color", "white");
        
    });
});
        $(document).ready(function(){
    $("#flips2").click(function(){
        $("#panelss2").slideToggle("slow").css("background-color", "white");

    });
});
       $(document).ready(function(){
    $("#flips3").click(function(){
        $("#panelss3").slideToggle("slow").css("background-color", "white");
     
    });
});
       $(document).ready(function(){
    $("#flips4").click(function(){
        $("#panelss4").slideToggle("slow").css("background-color", "white");

    });
});
       $(document).ready(function(){
    $("#flips5").click(function(){
        $("#panelss5").slideToggle("slow").css("background-color", "white");

    });
});
</script>
    </head>
    <body>
       
        <div class="navbar navbar-inverse navbar-fixed-top" style="background:blue;">
            <div class="container">
                
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
        <?php
        $host="localhost";
$user="root";
$database="student_detail";
$con= mysqli_connect($host, $user, "", $database);
       
session_start();
$roll=$_SESSION['rollno'];
$sql_q="Select tbstudent.rollno,tbstudent.fees,tbstudentform.attendenceobtain,tbstudentsheet.subject,tbstudentsheet.reappear,tbstudentform.performance,tbstudentmarks.totalmarks,tbstudentmarks.obtainmarks,tbstudentmarks.testno from tbstudent,tbstudentmarks,tbstudentform,tbstudentsheet where tbstudent.rollno=tbstudentform.rollno AND tbstudentform.rollno=tbstudentmarks.rollno AND tbstudentmarks.rollno=tbstudentsheet.rollno AND tbstudent.rollno='$roll'";
$query= mysqli_query($con,$sql_q);
$row= mysqli_fetch_array($query);
$rows=$row['fees'];
$attend=$row['attendenceobtain'];
$perform=$row['performance'];
$totalmarks=$row['totalmarks'];
$obtainmarks=$row['obtainmarks'];
$testno=$row['testno'];
$subject=$row['subject'];
$reappear=$row['reappear'];
?>
                <a class="navbar-brand" style="color:white;">STUDENT NAME: <?php    echo "<strong>". $_SESSION['name']."</strong>"; ?></a>
             
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href = "#" style="color:white;"><span class = "glyphicon glyphicon-user">FATHER'S NAME: <?php    echo "<strong>"."MR.".$_SESSION['fathername'] ."</strong>"; ?> </span> </a></li>
                        
                        <li><a href = "logout_script.php" style="color:white;"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
       
       
<div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron">
                <h1>Welcome to  PARENTS AIS</h1>
                <p>THIS IS AIS FOR TO INFORM ABOUT YOUR CHILD MARKS AND PERFORMANCE IN THE CLASS</p>

            </div>
          
            <section id="pager">
 
                <main><center>INFORMATION ABOUT YOUR CHILD</center>
                  
      <ul class="lu">
          <li class="mylist">  <div id="flips"><h4>PERFORMANCE</h4></div>
              <div id="panelss"><?php echo $perform ?>  </div>  </li>
          <li class="mylist">  <div id="flips1"><h4>REAPPEAR</h4></div>
              <div id="panelss1"><?php echo $reappear."<br>in<br>AND SUBJECT".$subject?></div>    </li>
          <li class="mylist">  <div id="flips2"><h4>ATTENDANCE</h4></div>
<div id="panelss2"><?php echo $attend ?> </div>    </li>
   
      </ul>
          <ul class="lu">
              <li class="mylist">  <div id="flips3"><h4>MARKS</h4></div>
                  <div id="panelss3"><?php echo $obtainmarks."<br>outof</br>".$totalmarks ?> </div>    </li>
              <li class="mylist">  <div id="flips4"><h4>FEES</h4></div>
<div id="panelss4"><?php echo $rows?> </div>    </li>
              
      </ul>

    </main>
               
</section>
            <footer>
    <div class="footer navbar navbar-bottom">
        <center>
            <h4 style="color:white">Copyright &copy; BY SHUBHAM MEHTA |  Contact Us: +91 90685 62376</h4>	
        </center>
    </div>
</footer>
        </div>    
    </body>
</html>