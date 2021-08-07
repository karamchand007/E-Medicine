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
                        	<p>Complete your payment</p>
                        </div>
                        <div class="panel-body">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                        	<form method="post" action="payment.php">
                            <label for="">Customer's Name</label>
                                <input type="text" name="t1" class="form-control" value="<?php echo $_SESSION['u_name']; ?>" readonly>
                                <label for="">Customer's Email ID</label>
                                <input type="text" name="t2" class="form-control" value="<?php echo $_SESSION['u_email']; ?>" readonly>
                                <label for="">Customer's Phone No.</label>
                                <input type="text" name="t3" value="<?php echo $_SESSION['u_phone']; ?>" readonly class="form-control">
                                <label for="">Customer's Address</label>
                                <input type="text" name="t4" value="<?php echo $_SESSION['add']; ?>" readonly class="form-control">
                            	<label for="">Medicine Name</label>
                                <input type="text" name="t5" class="form-control" value="<?php echo $_SESSION['m_name']; ?>" readonly>
                                <label for="">Medicine Price</label>
                                <input type="text" name="t6" class="form-control" value="<?php echo $_SESSION['m_price']; ?>" readonly>
                                <label for="">Medicine Type</label>
                                <input type="text" name="t7" class="form-control" value="<?php echo $_SESSION['m_type']; ?>" readonly>
                                <label for="">Quantity</label>
                                <input type="text" name="t8" class="form-control" value="<?php echo $_SESSION['qu']; ?>" readonly>
                                <label for="">Total Amount</label>
                                <input type="text" name="t9" value="<?php echo $_SESSION['amount']; ?>" readonly class="form-control">
                                
                                <br><input type="submit" value="Proceed to Payment" class="btn btn-group-justified btn-success">
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