<?php include_once("includes/db-connection.php") ?>
<?php include_once("includes/header.php") ?>

<main role="main" class="container">

	<div class="row">

		<div class="col-sm-8 blog-main">
		
			<?php
				if(isset($_GET['id'])) {
					
					$sql = "SELECT posts.title, posts.body, CONCAT(author.first_name, ' ', author.last_name) AS fullName FROM posts INNER JOIN author ON posts.author_id = author.id WHERE posts.id = {$_GET['id']}";
			
					$post = dbConnection($connection, $sql, $isSingle = true);
				
			?>
				
          <article class="va-c-article">
            <header>
            <h1><?php echo($post['title']) ?></a></h1>
            <div class="va-c-article__meta"> by <strong><?php echo($post['fullName']) ?></strong></div>
            </header>

            <div>
            <p><?php echo($post['body']) ?></p>

            <?php include_once('comments.php') ?>
            </div>
          </article>
			<?php
				} else {
					echo('id nije prosledjen kroz $_GET');
				}
			?>


		</div>
		
		<?php include_once("includes/sidebar.php") ?>

	</div>

</main>


<?php include_once("includes/footer.php") ?>