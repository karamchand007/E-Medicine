<?php session_start(); ?>
<html>
	<head>
    
    </head>
    <body class="body">
    	<div class="container-fluid">
        <div class="col-md-10 col-md-offset-1" style="box-shadow:0px 0px 40px #000">
        	<?php include "header.php"; 
			$_SESSION['m_name'];
				$_SESSION['m_price'];
				$_SESSION['m_type'];
				$_SESSION['amount'];
				$_SESSION['qu'];
			?>
            
            <div class="row" style="padding-top:10px">
            	<div class="col-md-12">
                	<div class="panel panel-success">
                    	<div class="panel-heading">
                        	<p>Customer's Registration Success</p>
                        </div>
                        <div class="panel-body">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                        	
                            <?php
							include "dbconnect.php";
							$a=$_REQUEST['t1'];
							$b=$_REQUEST['t2'];
							$c=$_REQUEST['t3'];
							$d=$_REQUEST['t4'];
							$e=md5($b);
							$f=substr($e,1,6);
							$g="insert into register(name,email,phone,address,password) values('$a','$b','$c','$d','$f')"; 
							mysql_query($g);
							
							?>
                            <h4>Your Username : <span style="color:#f00"><?php echo $b; ?></span></h4>
                            <h4>Your Password : <span style="color:#f00"><?php echo $f; ?></span></h4>
                            <p><strong>You Want to Login <a href="billing.php">Click Here</a></strong></p>
                        </div>
                        <div class="col-md-2"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
        </div>
    </body>
</html>