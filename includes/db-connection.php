<?php

  $servername = "127.0.0.1";
  $username = "phpmyadmin";
  $password = "daranasus";
  $dbname = "blog";

  try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e)
  {
    echo $e->getMessage();
  }

  function dbConnection($connection, $sql, $isSingle = false) {
    $statement = $connection->prepare($sql);

    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    if($isSingle) {
      return $statement->fetch();
    }

    return $statement->fetchAll();
  }

?>