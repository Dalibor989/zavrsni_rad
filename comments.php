<?php include_once("header.php") ?>

<?php

  $sql = "SELECT comments.author AS cAuthor, comments.text FROM comments LEFT JOIN posts ON posts.id = comments.post_id WHERE comments.post_id = {$_GET['id']}";

  $statement = $connection->prepare($sql);

  $statement->execute();

  $statement->setFetchMode(PDO::FETCH_ASSOC);


  $comments = $statement->fetchAll();

?>

<?php
  foreach($comments as $comment) {
?>

<article class="va-c-article">
  <header>
    <div class="va-c-article__meta"> by <?php echo($comment['cAuthor']) ?></div>
  </header>

  <div>
    <p><?php echo($comment['text']) ?></p>
  </div>
</article>

<?php
  }
?>