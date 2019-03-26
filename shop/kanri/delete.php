<?php
  require 'common.php';
  $pdo = connect();
  $pdo->query('SET NAMES utf8');
  $st = $pdo->query("DELETE FROM goods WHERE code={$_GET['code']}");
  header('Location: index.php');
?>

