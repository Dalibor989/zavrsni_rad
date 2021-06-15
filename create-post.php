<?php include_once("includes/db-connection.php") ?>
<?php include_once("includes/header.php") ?>

<?php

  $sql = "SELECT id AS author_id, CONCAT(first_name, ' ', last_name) AS fullName FROM author;";
  $authors = dbConnection($connection, $sql);

  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST['title'])) {
      $title = $_POST['title'];
    }

    if(!empty($_POST['body'])) {
      $body = $_POST['body'];
    }

    if(!empty($_POST['author'])) {
      $authorId = $_POST['author'];
    }

    if(!empty($title) && !empty($body) && !empty($authorId)) {
      
      $sqlCreate = "INSERT INTO posts (title, body, author_id) VALUES ('$title', '$body', '$authorId')";
      
      insertQuery($connection, $sqlCreate);

    }

  }

?>

<form method="post" action="create-post.php">

  <div class="container">
    
    <div class="row">

      <div class="col-sm-8 blog-main">

        <?php foreach($authors as $author) { ?>
            <input type="radio" name="author" value="<?php echo($author['author_id']) ?>">
            <label for="author"><?php echo($author['fullName']) ?></label><br>
        <?php } ?>
        
        <input type="text" name="title"> <br><br>
        <textarea name="body" rows="10" cols="50"></textarea> <br><br>
        
        <button type="submit" name="post-button" id="create-post">Post</button>

      </div>
    
    <?php include_once("includes/sidebar.php") ?>

    </div>

  </div>

</form>


<?php include_once("includes/footer.php") ?>