<?php include_once("includes/db-connection.php") ?>
<?php include_once("includes/header.php") ?>
<?php

  $sql = "SELECT id, title, body, created_at FROM posts ORDER BY created_at DESC";

  $posts = dbConnection($connection, $sql);

?>

<main role="main" class="container">

  <div class="row">

    <div class="col-sm-8 blog-main">

      <?php
        foreach ($posts as $post) {
      ?>

      <article class="va-c-article">
        <header>
          <h1><a href="single-post.php?id=<?php echo($post['id']) ?>" class="blog_title"><?php echo($post['title']) ?></a></h1>

          <!-- <div class="va-c-article__meta"><?php echo($post['created_at']) ?> by <strong><?php echo($post['author']) ?></strong></div> -->
        </header>

        <div>
          <p><?php echo($post['body']) ?></p>
        </div>
      </article>

      <?php
        }
      ?>

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>
    </div>
    
    <?php include_once("includes/sidebar.php") ?>

  </div>
</main>

<?php include_once("includes/footer.php") ?>