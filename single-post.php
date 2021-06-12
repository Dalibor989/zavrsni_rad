
<?php include_once("header.php") ?>

<main role="main" class="container">

	<div class="row">

		<div class="col-sm-8 blog-main">
		
			<?php
				if(isset($_GET['id'])) {
					
					$sql = "SELECT id, title, body, author FROM posts WHERE id = {$_GET['id']}";

					$statement = $connection->prepare($sql);


					$statement->execute();


					$statement->setFetchMode(PDO::FETCH_ASSOC);
			
					$posts = $statement->fetch();
				
				?>
				
					<article class="va-c-article">
						<header>
							<h1><?php echo($posts['title']) ?></a></h1>
								<div class="va-c-article__meta"> by <?php echo($posts['author']) ?></div>
							</header>

							<div>
								<p><?php echo($posts['body']) ?></p>

								<?php include_once('comments.php') ?>

							</div>
					</article>
			<?php
				} else {
					echo('id nije prosledjen kroz $_GET');
				}
			?>


		</div>
		
		<?php include_once("sidebar.php") ?>

	</div>

</main>


<?php include_once("footer.php") ?>