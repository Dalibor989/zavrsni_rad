<?php include_once("includes/db-connection.php") ?>
<?php include_once("includes/header.php") ?>

<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST['name'])) {
      $name = $_POST['name'];
    }

    if(!empty($_POST['surname'])) {
      $surname = $_POST['surname'];
    }

    if(!isset($_POST['gender'])) {
      $gender = $_POST['gender'];
    }

    if(!empty($title) && !empty($body) && isset($gender)) {

      $sql = "INSERT INTO author (name, surname, gender) VALUES ('$name', '$surname', '$gender')";

      try {
        $statement = $connection->prepare($sql);
        $statement->execute();
        echo 'New record created succefully.';
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }

    }

  }

?>
<div class="container">

  <form action="create-author.php" method="post">
  
    <input type="text" placeholder="name" name="name">
    <br>
    <input type="text" placeholder="surname" name="surname"> <br>
    
    <input type="radio" name="gender" value="M">
    <label for="M">M</label>
    
    <input type="radio" name="gender" value="F">
    <label for="F">F</label><br>
    
    <button type="submit" name="submit" value="Submit">Submit</button>
  
  </form>
  
</div>


<?php include_once("includes/sidebar.php") ?>

<?php include_once("includes/footer.php") ?>