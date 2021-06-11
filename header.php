<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "vivify";
    $dbname = "blog";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>

<div class="blog-masthead">
  <div class="container">
		<nav class="nav">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">New features</a>
		<a class="nav-link" href="#">Press</a>
		<a class="nav-link" href="#">New hires</a>
		<a class="nav-link" href="#">About</a>
		</nav>
  </div>
</div>

	<div class="blog-header">
    <div class="container">
    <h1 class="blog-title">The Bootstrap Blog</h1>
    <p class="lead blog-description">An example blog template built with Bootstrap.</p>
  </div>
</div>