<?php
  $link = mysqli_connect("localhost", "root", "", "student_detail");
  $select_query= "SELECT * FROM  tbstudentsheet";
  $select_query_result= mysqli_query($link, $select_query) or die($link);
  
  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login id</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/admin.css" rel="stylesheet">
        <link href="css/user id.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/tech.css">

        <script src="css/jquery.js"></script>
        <script src="css/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <style>
    .size{
        border-collapse: collapse;
        width:70%;
             text-align: center;
             margin-left:50px;
             

    }  
    fieldset{
        width:70%;  
    }
   
    th {
    background-color: lightseagreen;
    color: white;
    padding: 20px;
}

 

</style>
    </head>
    <body>
        
             <div class="navbar navbar-inverse navbar-fixed-top" style="background:blue;">
            <div class="container">
                
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
 
                <a class="navbar-brand" style="color:#ff0;">ADMIN</a>
                <?php
                session_start();
                ?>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href = "#" style="color:#ff0;"><span class = "glyphicon glyphicon-user">USER NAME: <?php    echo "<strong>".$_SESSION['uname']."</strong>"; ?> </span> </a></li>
                        
                        <li><a href = "adminlogout.php" style="color:#ff0;"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
       
        <div class="container" id="content">

            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer">
                <h1><center>Welcome ADMIN</center></h1>
              

            </div>
            <section id="pager">
 
                <main>
                    
               
                               <center>
                    <div id="form2">
                        <h2>INFORMATION ABOUT STUDENT</h2>
                    
               <table>
                   
                       <td><a href="ADDSTUDENT.php"><button>ADD STUDENT</button></a></td>
                <td><a href="ADDATTENDENCE.php"><button>ADD ATTENDANCE</button></a></td>
                   <td><a href="ADDMARKS.php"><button>ADD MARKS</button></a></td>
                    <td><a href="ADDPARENTDETAIL.php"><button name="submit">ADD PARENT DETAIL</button></a></td>
                   
                     <tr>
                         <td><a href="EDITSTUDENT.php"><button name="submit">EDIT STUDENT</button></a>
                             
                         </td>
                         <td><a href="EDITATTENDENCE.php"><button name="submit">EDIT ATTENDANCE</button></a></td>
                         <td><a href="EDITMARKS.php"><button name="submit">EDIT MARKS</button></a></td>
                            <td><a href="EDITPARENTDETAIL.php"><button name="submit">EDIT PARENTS DETAIL</button></a></td>
                   </tr>
                    <tr>
                       
                         <td><a href="ADDTEACHERDETAIL.php"><button>ADD TEACHER DETAIL</button></a></td>
                       <td><a href="EDITTEACHERDETAIL.php"><button>EDIT TEACHER DETAIL</button></a></td>
                       <td><a href="addstudentsheet.php"><button>ADD REAPPEAR DETAIL</button></a></td>
                       <td><a href="EDITSHEETDETAIL.php"><button>EDIT REAPPEAR DETAIL</button></a></td>
                   </tr>
                   <tr>
   <td><a href="feedback.php"><button>FeedBACK</button></a></td> 
                   </tr>
               </table>
                  </div>
                    </center>
        
                    <div>
                      
                     

<table class="size" border="2">
 
    <tr><th>NAME</th>
    <th >COURSE</th>
    <th>BRANCH</th>
    <th >YEAR</th>
    <th >SEMESTER</th>
     <th >ROLL NO.</th>
    <th>TEST </th>
      <th>SUBJECT</th>
    <th>REAPPEAR</th>
    <th >MODIFY</th>
    </tr>
    <tr>
 <?php while ($row= mysqli_fetch_array($select_query_result)){ ?>  
        <td ><?php echo $row['names']?></td>
        <td><?php echo $row['course']?></td>
        <td ><?php echo $row['branch']?></td>
        <td ><?php echo $row['year']?></td>
        <td ><?php echo $row['sem']?></td>
        <td ><?php echo $row['rollno']?></td>
        <td><?php echo $row['testno'] ?></td>
        
        <td ><?php echo $row['subject']?></td>
        <td ><?php echo $row['reappear']?></td>
       
        <td>
        <select name="modify">
        <option value="update">update</option>
        <option value="edit">edit</option>
        <option value="delete">delete</option>
        <option value="cancel">cancel</option>
        </select></td>
    </tr>
 <?php } ?>
    
  
</table>



      </div>
    </main>
               
</section>
            <footer>
    <div class="footer navbar navbar-bottom">
        <center>
            <h4>Copyright &copy; BY SHUBHAM MEHTA |  Contact Us: +91 90685 62376</h4>	
        </center>
    </div>
</footer>
        </div>    
    </body>
</html>      
        
        
        
        
        
        
        
        
        
    