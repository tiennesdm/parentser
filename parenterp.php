<!DOCTYPE html>


<html>
    <head>
        <title>LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/parenterp.css"/>
       <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
       
    </head>
    <body>
        
            <div id="header_wrapper">
                <div id="header">
                    <img src="img/bsitm2.jpg" style="float:left;margin-left:-5em;" width="400" height="100"/>
                    <form method="post" action="logininsert.php" id="form1">
                        <strong>USERNAME:</strong>
                       
                        <input type="text" name="uname" placeholder="BAL 15/cs103" required="required"/>
                        <strong>PASSWORD:</strong>
                        <input type="password" name="psd" placeholder="15/cs103" required="required"/>
                        <button name="login">LOGIN</button>
                    </form>
                     <h5><a href="teacher.php" style="float:right;margin-left:50em; margin-top:-8px;  ">SIGN IN AS A TEACHER </a></h5>
                    
                </div>
            </div>
        
        <div id="content">
            <img src="img/parent.jpg" style="float:left; margin-left:40px; margin-top: 20px;" width="500" alt="parent"/>
        </div>
        <div id="form2">
            <form method="post" action="insert.php">
               <h1>WRITE YOUR FEEDBACK</h1>
               <table>
                   <tr>
                       <td>NAME:</td>
                       <td><input type="text" name="name" required="required"/></td>
                   </tr>
                    <tr>
                       <td>CITY:</td>
                       <td><input type="text" name="city" required="required"/></td>
                   </tr>
                     <tr>
                       <td>ADDRESS:</td>
                       <td><input type="text" name="address" required="required"/></td>
                   </tr>
                    <tr>
                       <td>PHONE:</td>
                       <td><input type="tel" name="phone" required="required" minlength="10" maxlength="10"/></td>
                   </tr>
                    
                   <tr>
                       <td>FEEDBACK:</td>
                       <td><textarea name="feedback" required="required"></textarea></td>
                   </tr>
                   <tr>
                       <td></td>
                       <td><button name="submit"> SUBMIT</button></td>
                   </tr>
               </table>
            </form>
        </div>
        <footer>
    <div class="footer">
        <center>
            <h2>Copyright &copy; BY SHUBHAM MEHTA |  Contact Us: +91 90685 62376</h2>	
        </center>
    </div>
</footer>
    
    </body>
</html>

