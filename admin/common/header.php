

<?php require('../common/functions.php'); ?>
<?php
	if(!isset($_SESSION['admin'])){
		header("location:/admin/login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Nigerian Recipes</title>
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.6.3/css/font-awesome.min.css">
	<!--<link rel="stylesheet" type="text/css" href="../lib/bootstrap-3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 top-header">
				<ul class="pull-right">
					<li><a href="<?php echo $path['siteUrl']; ?>" target="_blank">Front View</a></li>
					<li><a href="/admin/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		<h3 class="page-header"><a href="index.php" class="logo"> Nigerian Recipes</a></h3>
		<div class="row">
			<!-- Left Sidebar Start -->
			<div class="col-md-3">
				<div class="list-group">
					<?php
						$currentPage=$_SERVER['PHP_SELF'];
						$endString=explode('/',$currentPage);
						$endStringg=end($endString);
						$recIndPos=strpos($endStringg,'index');
						$recPos=strpos($endStringg,'recipe');
						$catPos=strpos($endStringg,'category');
						$oPos=strpos($endStringg,'opinions');
					?>
					<a href="index.php" class="list-group-item <?php if($recPos!==false || $recIndPos!==false){echo 'active';} ?>">Recipes</a>
					<a href="category.php" class="list-group-item <?php if($catPos!==false){echo 'active';} ?>">Categories</a>
					<a href="opinions.php" class="list-group-item <?php if($oPos!==false){echo 'active';} ?>">Opinions</a>
				</div>
			</div>
			<!-- Left Sidebar End -->