<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
	.body
	{
		background:#FFF;
	}
</style>
  <title>E-Medicine</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 10px;
  font-size: 20px;
  width: 40px;
  height:40px;
  text-align: center;
  text-decoration: none;
  border-radius:50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
.c li a
{
	color:#FFF;
	text-transform:capitalize;
}
.c li a:hover
{
	color:#FFF;
	text-transform:capitalize;
}
.d li a
{
	color:#fff;
	text-transform:capitalize;
	background:#999;
}
</style>
</head>
<body>
<div class="row" style="background:#F00">
	<div class="col-md-4 col-xs-12">
    	<p style="color:#fff; padding-top:5px;">
        	<a href="doner_panel.php"><img src="img/medicine logo.png" class="img-responsive"></a>
        </p>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4" align="center" style="padding-top:10px">
    	<span class="glyphicon glyphicon-phone-alt" style="color:#fff; font-size:20px"> 7209794742</span>
        <div class="col-md-12" style="padding-top:10px">
        <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
        </div>
    </div>
</div>
	<div class="row" style="padding-top:5px">
    	<div class="col-md-12 col-xs-12" style="background:#999">
        	<nav class="">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="glyphicon glyphicon-align-justify" style="color:#fff"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav c">
        <li class="active"><a href="doner_panel.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        
        <li><a href="add_medicine.php"><span class="glyphicon glyphicon-plus"></span> Add Medicine</a></li>
        <li>
          <a class="dropdown-toggle" data-toggle="dropdown" href="view_book.php"><span class="glyphicon glyphicon-eye-open"></span> View Book </a> </li>
        <li><a href="update_medicine.php"><span class="glyphicon glyphicon-pencil"></span> Update Medicine</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right c">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu d">
            <li><a href="logout.php">Logout</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
    </div>
</body>
</html>