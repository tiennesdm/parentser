
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
                <a class="navbar-brand" style="color:#ff0;">DEPARTMENT: <?php echo "<b>" .$_SESSION['department']."</b>"; ?></a>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href = "#" style="color:#ff0;"><span class = "glyphicon glyphicon-user">USER NAME: <?php echo "<b>".$_SESSION['teacher_name']."</b>"; ?> </span> </a></li>
                        
                        <li><a href = "teacher_logout_script.php" style="color:#ff0;"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
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
                             
                   
                    <div class="set1">
<fieldset class="field">
  <legend><B>SET THE INFORMATION</B></legend>
  <center>
      <form method="post" action="insertstudentattendbyteacher.php">
<table>
<tr><td>Name:</td>
<td><input type="text" name="uname" class="set" required="required">
</td>
<tr>
    <td>COURSES:</td>
<td><select class="set" name="course" required="required">
<option value="B.TECH">B.TECH</option>
<option value="BBA">BBA</option>
<option value="BCA">BCA</option>
<option value="LAW">LAW</option>
</select>
</td>
</tr>

<td>Branch</td><td><select class="set" name="branch" required="required">
<option value="cse">CSE</option>
<option value="it">IT</option>
<option value="mechanical">MECHANICAL</option>
<option value="electronics">ELECTRONICS</option>
<option value="civil">CIVIL</option>
<option value="ba">B.A</option>
<option value="llb">LLB</option>
<option value="ba/llb">BA/LLB</option>
</select></td></tr>


<tr><td>YEAR</td>
    <td><select class="set" name="year" required="required">
<OPTION>Ist</OPTION>
<OPTION>IInd</OPTION>
<OPTION>IIIrd</OPTION>
<OPTION>IVth</OPTION>
</SELECT>
</td></tr>




<tr><td>SEMESTER:</td>
<td><select class="set" name="sem" required="required">
<OPTION>Ist</OPTION>
<OPTION>IInd</OPTION>
<OPTION>IIIrd</OPTION>
<OPTION>IVth</OPTION>
<OPTION>Vth</OPTION>
<OPTION>VIth</OPTION>
<OPTION>VIIth</OPTION>
<OPTION>VIIIth</OPTION>
</SELECT></td></tr>

<tr><td>ROLL NO:</td>
<td><input type="text" name="rollno" class="set" required="required"></td></tr>

<tr><td>ATTENDENCE:</td>
    <td><select class="set" name="attend" required="required">
<OPTION>present</OPTION>
<OPTION>absent</OPTION>
<OPTION>leave</OPTION>
<OPTION>suspended</OPTION>
</select></td></tr>
<tr><td>PERFORMANCE:</td>
<td><input type="text" name="perform" class="set" required="required"></td></tr>



<tr><td></td><td><button name="submit" class="set">SUBMIT</button></td></tr>
</table>
</form>
  </center>      
</fieldset>
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