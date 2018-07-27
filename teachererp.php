
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login id</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/admin.css" rel="stylesheet">
        <link href="css/user id.css" rel="stylesheet">
        <script src="css/jquery.js"></script>
        <script src="css/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

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
       
session_start();
   
?>
                <a class="navbar-brand" style="color:white;">DEPARTMENT: <?php echo "<b>" .$_SESSION['department']."</b>"; ?></a>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href = "#" style="color:white;"><span class = "glyphicon glyphicon-user">USER NAME: <?php echo "<b>".$_SESSION['teacher_name']."</b>"; ?> </span> </a></li>
                        
                        <li><a href = "teacher_logout_script.php" style="color:white;"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
       
        <div class="container" id="content">

            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer">
                <h1>Welcome to  PARENTS ERP</h1>
                <p>SENDS YOUR INFORMATION TO ALL PARENTS OF YOUR STUDENT</p>

            </div>
           <!-----main--->
            <section id="pager">
 
                <main>
                    <div id="form2">
                        <center><h2>UPLOAD THE INFORMATION</h2>
   <table>
                  
     
                   <tr>
                     
                       <td><a href="addstudentbyteacher.php"><button name="submit">ADD ATTENDANCE</button></a></td>
                       <td><a href="addstudentmarksbyteacher.php"><button name="submit">ADD MARKS</button></a></td>
   <td><a href="addreappearbyteachecher.php"><button>ADD REAPPEAR</button></a></td>
                   </tr>
                       <tr>
                    
                           <td><a href="attendancedatail.php"><button> ATTENDANCE  DETAIL</button></a></td>
                           <td><a href="marksdetail.php"><button> MARKS  DETAIL</button></a></td>
                           <td><a href="reappeardetail.php"><button> REAPPEAR DETAIL</button></a></td>

                   </tr>
   </table>
                        </center>
                    </div>
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