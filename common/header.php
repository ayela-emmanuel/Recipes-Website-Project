

<?php require('common/functions.php'); 
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nigerian Recipes</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $path['siteUrl']; ?>/fonts/font-awesome-4.6.3/css/font-awesome.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $path['siteUrl']; ?>/css/style.css">
</head>
<body>
	<!-- Header Start -->
	<div class="header container">
		<div class="row top-header bg-primary" style="display: flex; justify-content:space-between; align-items:center;min-height:80px; margin-bottom:20px; border-radius:0px 0px 10px 10px;">
			<div class="col-md-3 logo">
				<h3><a href="index.php" title="Nigerian Recipes" class="logo" style="text-transform: uppercase;color:white;text-decoration:none"> Nigerian Recipes</a></h3>
			</div>

			<div class="text-right" style="display: flex; justify-content:center; align-items:center;max-width:400px ">
				<div><a href="index.php" style="color:white; margin:5px; text-decoration:none; font-weight:bold; font-family:sans-serif">Home</a></div>
				<div><a href="allcategory.php" style="color:white; margin:5px; text-decoration:none; font-weight:bold; font-family:sans-serif">All Recipes</a></div>
				<div><a href="submit-opinion.php" style="color:white; margin:5px; text-decoration:none; font-weight:bold; font-family:sans-serif">Submit Opinion</a></div>
			</div>

		</div>
		<!-- #Top Header End -->
		<div class="row search-bar margin-top30 margin-bottom20">
			<div class="col-md-4 col-md-offset-4">
				<form class="form-inline" action="search.php" method="get" style="display: flex;">
				    <input type="text" name="q" class="form-control" id="search" placeholder="Search Here..." style="max-width:250px">

				  <input type="submit" value="Search" name="search" class="btn btn-success">
				</form>
			</div>
		</div>