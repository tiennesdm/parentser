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
                   <tr>
                       <td style="margin-right:100px;"><a href="ADDSTUDENT.php"><button name="submit">ADD STUDENT</button></a></td>
                <td><a href="ADDATTENDENCE.php"><button name="submit">ADD ATTENDANCE</button></a></td>
                   <td><a href="ADDMARKS.php"><button name="submit">ADD MARKS</button></a></td>
                    <td><a href="ADDPARENTDETAIL.php"><button name="submit">ADD PARENT DETAIL</button></a></td>
                   </tr>
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
              
                
              
          
                   
                    <div class="set1">
<fieldset class="field">
  <legend><B>SET THE INFORMATION</B></legend>
  <center>
      <form method="post" action="insertaddstudent.php">
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


<tr><td>M.NO</td>
    <td><input type="text"  class="set" name="phone" required="required"></td>

<tr><td>DOB</td>
<td><input type="date"  class="set" name="bday" required="required"></td></tr>

<tr><td>PASSWORD:</td>
    <td><input type="password" class="set" name="pass" required="required"></td></tr>

<tr><td>FEES</td>
    <td><input type="text"  class="set" name="fees" required="required"></td></tr>


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
        
        
        
        
        
        
        
        
        
    