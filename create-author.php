<?php include_once("includes/db-connection.php") ?>
<?php include_once("includes/header.php") ?>

<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(!empty($_POST['first_name'])) {
      $firstName = $_POST['first_name'];
    }
    
    if(!empty($_POST['last_name'])) {
      $lastName = $_POST['last_name'];
    }
    
    if(!empty($_POST['gender'])) {
      $gender = $_POST['gender'];
    }
    
    if(!empty($firstName) && !empty($lastName) && !empty($gender)) {
      
      $sqlCreate = "INSERT INTO author (first_name, last_name, gender) VALUES ('$firstName', '$lastName', '$gender')";

      insertQuery($connection, $sqlCreate);

    }

  }

?>

<form method="post" action="create-author.php">
  
  <div class="container">

    <div class="row">

      <div class="col-sm-8 blog-main">
    
        <input type="text" placeholder="first name" name="first_name" class="input-field">
        <br>
        <input type="text" placeholder="last name" name="last_name" class="input-field"> <br>
        
        <label>Male
          <input id="radio-check" type="radio"  name="gender" value="M">
        </label>
        
        <label>Female
          <input id ="radio-check" type="radio" name="gender" value="F">
        </label><br>
        
        <button type="submit" name="author-button" value="Submit" class="button">Sign up</button>
      </div>

      <?php include_once("includes/sidebar.php") ?>

    </div>
  
  </div>

</form>

<script src="main.js"></script>

<?php include_once("includes/footer.php") ?>