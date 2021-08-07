<?php session_start(); ?>
<html>
	<head>
    
    </head>
    <body class="body">
    	<div class="container-fluid">
        <div class="col-md-10 col-md-offset-1" style="box-shadow:0px 0px 40px #000">
        	<?php include "header.php"; ?>
            
            <div class="row" style="padding-top:10px">
            	<div class="col-md-12">
                	<div class="panel panel-warning">
                    	<div class="panel-heading">
                        	<p>Order Details</p>
                        </div>
                        <div class="panel-body">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                        	<?php
							   include "dbconnect.php";
							   $a=$_REQUEST['t1'];
							   $q="select *from medicine where name='$a'";
							   $qu=mysql_query($q);
							   $rs=mysql_fetch_assoc($qu);
							   $_SESSION['m_name']=$rs['name'];
							   $_SESSION['m_price']=$rs['price'];
							   $_SESSION['m_type']=$rs['type'];
							?>
                            <form method="post" action="order_now_action.php">
                            	<label for="">Medicine Name</label>
                                <input type="text" name="t1" class="form-control" value="<?php echo $_SESSION['m_name']; ?>" readonly>
                                <label for="">Medicine Price</label>
                                <input type="text" name="t2" class="form-control" value="<?php echo $_SESSION['m_price']; ?>" readonly>
                                <label for="">Medicine Type</label>
                                <input type="text" name="t3" class="form-control" value="<?php echo $_SESSION['m_type']; ?>" readonly>
                                <label for="">Enter Quantity</label>
                                <input type="text" name="t4" title="Plz enter only Numbers..." pattern="[0-9]{1,}" required class="form-control">
                                <br><input type="submit" value="Proceed" class="btn btn-group-justified btn-success">
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