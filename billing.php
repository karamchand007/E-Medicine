<?php session_start(); ?>
<html>
	<head>
    
    </head>
    <body class="body">
    	<div class="container-fluid">
        <div class="col-md-10 col-md-offset-1" style="box-shadow:0px 0px 40px #000">
        	<?php include "header.php"; 
				
			?>
            
            <div class="row" style="padding-top:10px">
            	<div class="col-md-12">
                	<div class="panel panel-info">
                    	<div class="panel-heading">
                        	<p>Login OR Register Your Self</p>
                        </div>
                        <div class="panel-body">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                        
                        <?php 
						 if(isset($_POST['login']))
						 {
							 include "dbconnect.php";
							 $a=$_POST['l1'];
							 $b=$_POST['l2'];
							 $c="select *from register where email='$a'";
							 $d=mysql_query($c);
							 $e=mysql_fetch_assoc($d);
							 $dp=$e['password'];
							 if($dp==$b)
							 {
								 $_SESSION['m_name'];
									$_SESSION['m_price'];
									$_SESSION['m_type'];
									$_SESSION['amount'];
									$_SESSION['u_name']=$e['name'];
									$_SESSION['u_email']=$e['email'];
									$_SESSION['u_phone']=$e['phone'];
									$_SESSION['add']=$e['address'];
									$_SESSION['qu'];
								 header("location:after_login_billing.php");
							 }
						 }
						?>
                        	<form method="post">
                            	<label for="">Username (Email ID)</label>
                                <input type="text" name="l1" class="form-control" required>
                                <label for="">Password</label>
                                <input type="password" name="l2" class="form-control" required>
                            	
                                <br><input type="submit" name="login" value="Login" class="btn btn-group-justified btn-info">
                                <br><p><b>Not a Member ? <a href="register.php">Register Here</a></b></p>
                            </form>
                            
                        </div>
                        <div class="col-md-4"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
        </div>
    </body>
</html>