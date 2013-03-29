<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=lito', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  require_once(TEMPLATES_PATH . "/error.html.php");
  require_once(TEMPLATES_PATH . "/footer.html.php");  	
  exit();
}
