<?php session_start();
if(!empty($_SESSION['log']))
{
	?>
    <html>
	<head>
    
    </head>
    <body class="body">
    	<div class="container-fluid">
        <div class="col-md-10 col-md-offset-1" style="box-shadow:0px 0px 40px #000">
        	<?php include "header1.php"; ?>
            
            <div class="row" style="padding-top:10px">
            	<div class="col-md-6 col-md-offset-3">
                	<div class="panel panel-info">
                    	<div class="panel-heading">
                        	<p>Add Medicine</p>
                        </div>
                        <div class="panel-body">
                        	<form method="post" action="add_medicine_action.php" enctype="multipart/form-data">
                            	<label for="">Medicine Name</label>
                                <input type="text" name="t1" class="form-control" required placeholder="Plz Enter Medicine Name">
                                <label for="">Medicine Price</label>
                                <input type="text" name="t2" class="form-control" required placeholder="Plz Enter Medicine Price">
                                <label for="">Medicine Quantity</label>
                                <input type="text" name="t21" class="form-control" required placeholder="Plz Enter Medicine Quantity">
                                <label for="">Select Type</label>
                                <select name="t0" class="form-control">
                                	<option>Select..</option>
                                    <option>Pain</option>
                                    <option>Skin Care</option>
                                    <option>Eye Care</option>
                                    <option>Worm</option>
                                    <option>Depression</option>
                                </select>
                                <label for="">Image</label>
                                <input type="file" class="form-control" required name="t3"><br>
                                <input type="submit" value="Add" class="btn btn-group-justified btn-danger">
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
    <?php
}
else
{
	header("location:index.php");
}
?>