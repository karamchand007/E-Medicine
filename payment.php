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
                        <div class="col-md-8 col-md-offset-2">
                        <img src="img/payumoney.png" class="img-responsive"><br>
						<?php
							include "dbconnect.php";
							$a=$_REQUEST['t1'];$b=$_REQUEST['t2'];$c=$_REQUEST['t3'];
							$d=$_REQUEST['t4'];$e=$_REQUEST['t5'];$f=$_REQUEST['t6'];
							$g=$_REQUEST['t7'];$h=$_REQUEST['t8'];$i=$_REQUEST['t9'];
							$q="insert into book(name,email,phone,address,medicine,quantity,amount) values('$a','$b','$c','$d','$e','$h','$i')";
							mysql_query($q);
						?>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                        	<form method="post">
                            	<label for="">Amount </label>
                                <input type="text" name="t1" class="form-control" value="<?php echo $_SESSION['amount']; ?>" readonly>
                                <label for="">Card No.</label>
                                <input type="text" class="form-control">
                                <label for="">Card Holder's Name</label>
                                <input type="text" class="form-control">
                                <label for="">CVV No.</label>
                                <input type="password" class="form-control">
                                <label for="">Expairy Date</label><br>
                                <select>
                                	<option>Select...</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option><option>11</option><option>12</option>
                                </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select>
                                	<option>Select...</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2026</option>
                                    <option>2027</option>
                                    <option>2028</option>
                                </select><br>
                                <br><input type="submit" disabled class="btn btn-group-justified btn-success" value="Pay Now">
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