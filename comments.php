<?php include_once("includes/db-connection.php") ?>
<?php include_once("includes/header.php") ?>

<?php

  $sql = "SELECT comments.author AS cAuthor, comments.text FROM comments LEFT JOIN posts ON posts.id = comments.post_id WHERE comments.post_id = {$_GET['id']}";

  $comments = dbConnection($connection, $sql);

?>

<?php
  foreach($comments as $comment) {
?>

<article class="va-c-article">
  
  <div>
    <ul>
      <li><?php echo($comment['text']) ?> </br>
      by <strong><?php echo($comment['cAuthor']) ?></strong></li>
    </ul>
  </div>
</article>

<?php
  }
?>