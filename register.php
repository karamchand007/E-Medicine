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
                        	<p>Customer's Registration Form</p>
                        </div>
                        <div class="panel-body">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                        	
                            <form method="post" action="register_action.php">
                            	<label for="">Name</label>
                                <input type="text" name="t1" class="form-control" required>
                                <label for="">Email ID</label>
                                <input type="email" name="t2" class="form-control" required>
                            	<label for="">Mobile No.</label>
                                <input type="text" name="t3" class="form-control" pattern="[0-9]{10}" required>
                                <label for="">Address</label>
                                <textarea rows="3" class="form-control" name="t4"></textarea>
                                <br><input type="submit" value="Register" class="btn btn-group-justified btn-info">
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