<?php session_start(); ?>
<html>
	<head>
    
    </head>
    <body class="body">
    	<div class="container-fluid">
        <div class="col-md-10 col-md-offset-1" style="box-shadow:0px 0px 40px #000">
        	<?php include "header.php"; ?>
            
            <div class="row" style="padding-top:10px">
            	<div class="col-md-6 col-md-offset-3">
                	<div class="panel panel-info">
                    	<div class="panel-heading" align="center">
                        	<h3>Admin Login</h3>
                        </div>
                        <?php
						$er=$er1=$er2="";
						if(isset($_POST['log']))
						{
							include "dbconnect.php";
							$a=$_POST['t1'];
							$b=$_POST['t2'];
							if($a=="")
							{
								$er1="Username is required..";
							}
							if($b=="")
							{
								$er2="Password is Required...";
							}
							if($a!="" AND $b!="")
							{
							$c="select *from admin where username='$a'";
							$d=mysql_query($c);
							$e=mysql_fetch_assoc($d);
							$dp=$e['password'];
							if($b==$dp)
							{
								$_SESSION['log']=true;
								$_SESSION['name']=$e['name'];
								header("location:admin_panel.php");
							}
							else
							{
								$er="Username & Password is Incorrect...";
							}
							}
						}
						?>
                        <div class="panel-body">
                        	<form method="post">
                            <p style="color:f00"><?php echo $er; ?></p>
                            	<label for="">Username <span style="color:#F00">* <?php echo $er1; ?></span></label>
                                <input type="text" name="t1" placeholder="Plz Enter Username *" class="form-control">
                                <label for="">Password <span style="color:#F00">* <?php echo $er2; ?></span></label>
                                <input type="password" name="t2" placeholder="Plz Enter Password *" class="form-control"><br>
                                <input type="submit" name="log" value="Login" class="btn btn-group-justified btn-success">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
        </div>
    </body>
</html>