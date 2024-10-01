<?php require('common/header.php'); ?>	
		<div class="row content mt-4 mb-3">
		<?php include('common/left-sidebar.php'); ?>
			<!-- #Left Sidebar End -->
			<div class="col-md-6">
			<!-- Recipe Loop Start -->
				<?php
					$limit=8;
					if(!isset($_GET['page']) || $_GET['page']==1){
						$start=0;
					}else{
						$start=($_GET['page']*$limit)-$limit;
					}
					$recipe=get_all_recipe_front($start,$limit);
					if($recipe['bool']==true){
						foreach($recipe['allData'] as $recipe){
							?>
				<div class="card mb-3">
					<div class="card-header bg-primary text-white"><?php echo $recipe['title']; ?></div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<a href="recipe-detail.php?recid=<?php echo $recipe['recipe_id']; ?>&title=<?php echo $recipe['title']; ?>" title="Recipe Title">
									<img alt="Recipe Title" class="img-fluid" src="<?php echo $path['siteUrl'];?>upload/<?php echo $recipe['img']; ?>" />
								</a>
							</div>
							<div class="col-md-8">
								<h4><a href="recipe-detail.php?recid=<?php echo $recipe['recipe_id']; ?>&title=<?php echo $recipe['title']; ?>" title="Recipe Title"><?php echo $recipe['title']; ?></a></h4>
								<p class="mt-2">
									<?php echo $recipe['small_desc']; ?>
								</p>
							</div>
						</div>
					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col-md-4"><i class="fa fa-eye"></i>&nbsp;<?php echo $recipe['views']; ?></div>
							<div class="col-md-8 text-end">
								<a href="recipe-detail.php?recid=<?php echo $recipe['recipe_id']; ?>&title=<?php echo $recipe['title']; ?>" class="text-primary">View Detail</a>
							</div>
						</div>
					</div>
				</div>
							<?php
						}
					}
				?>
				<!-- Recipe Loop End -->
				<nav>
					<ul class="pagination">
						<?php
							$totalRecipes=count_recipe();
							$totalRecipes=$totalRecipes['total'];
							$links=ceil($totalRecipes/$limit);
							for($i=1; $i<=$links; $i++){
								$class = (isset($_GET['page']) && $_GET['page']==$i) ? 'active' : '';
								?>
								<li class="page-item <?php echo $class; ?>"><a class="page-link" href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
								<?php
							}
						?>
					</ul>
				</nav>
			</div>
			<!-- #Middle Content End -->
			<?php include('common/right-sidebar.php'); ?>
		</div><!-- Row End -->
		<!-- #Content End -->
	</div><!-- Container End -->
<?php include('common/footer.php'); ?>