<?php
  require 'common.php';
  $pdo = connect();
  $pdo->query('SET NAMES utf8');
  $st = $pdo->query("SELECT * FROM goods");
  $goods = $st->fetchAll();
  require 't_index.php';
?>