<?php

  $sql = "SELECT gender, id AS author_id, CONCAT(first_name, ' ', last_name) AS fullName FROM author;";
  $authors = dbConnection($connection, $sql);

?>

<?php foreach($authors as $author) { ?>
  <label class="<?php echo($author['gender']) ?>">
    <input type="radio" name="author" value="<?php echo($author['author_id']) ?>">
    <?php echo($author['fullName']) ?>
  </label><br>
<?php } ?>
