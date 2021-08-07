<html>
	<head>
    
    </head>
    <body class="body">
    	<div class="container-fluid">
        <div class="col-md-10 col-md-offset-1" style="box-shadow:0px 0px 40px #000">
        	<?php include "header.php"; ?>
            
            <div class="row" style="padding-top:10px">
            	<div class="col-md-12">
                	<?php 
					include "dbconnect.php";
					$a=$_REQUEST['t1'];
					$b=$_REQUEST['t2'];
					$c=$_REQUEST['t3'];
					$d=$_REQUEST['t4'];
					$q="insert into enquiry(name,email,phone,message) values('$a','$c','$b','$d')";
					mysql_query($q);
					
					?>
                    <h3>Thank You ! <br>Your Message has been send we will contact within 24 Hours...</h3>
                </div>
            </div>	
            <?php include "footer.php"; ?>
        </div>
        </div>
    </body>
</html>