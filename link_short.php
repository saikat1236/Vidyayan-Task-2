<?php
	if(isset($_POST['short-sub']))
	{
	$con=mysqli_connect("localhost","root","","url_shortener");
	if(!$con)
	{
		echo "Connection Error!";
		exit();
	}
	$orig_url=$_POST['link'];
	$rand= substr(md5(microtime()), rand(0,26),3);

	mysqli_query($con,"insert into short_url_data (orig_url,unique_exten) values('$orig_url','$rand')");
	
	

	}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Link Shortener</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style> @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12" style="height: 130px;"></div>
		</div>
		<div class="row" style="background-color: #dbf4ff; border-radius:10px;  border-style: solid; border-color: #4f92ff; border-width:1px;">
			<div class="col-sm-1"></div>
			<div class="col-sm-10"><h3 style="font-weight: bold; font-family: arial; font-size: 30px; text-align: center;background-color: #dbf4ff; border-radius:10px;  border-style: solid; border-color: red; border-width:1px;"><i>Link Shortening Website</i></h3>
				<br><br>
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<div class="col-sm-1"></div>
						<div class="col-sm-3" style="text-align: center; font-size: 19px">
							<label>Paste your Link to make Short</label>
						</div>
						<div class="col-sm-7" style="text-align: left;">
							<input type="text" id="s1" name="link" class="form-control" placeholder="Paste Your Link"  />
						</div>
						<div class="col-sm-1"></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12" style="text-align: center; font-size: 20px">
						<input type="submit" id="s10" name="short-sub" class="btn btn-success" value="Shorten The Link" />
						</div>
					<p>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-8" style="text-align: center;">
							<h3 style="font-weight: bold; font-family: arial; font-size: 30px; text-align: center;">Shortened Link Is Here</h3>
							<input type="text" style="width: 100%; height:;" value="<?php echo "localhost/a.php?"."$rand"; ?>";/>
							<?php echo "<a href=http://localhost/Vidyayan/Vidyayan_Task2/a.php?"."$rand>Use This Link</a>"; ?>
						</div>
						<div class="col-sm-2"></div>
					</div>
				</form>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
</body>
</html>