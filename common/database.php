<?php
  function db_connect_init() {
    $db_config = array(
      'host' => 'localhost',
      'user' => 'root',
      'pass' => '123456'
    );
    $init_db = "bluesand";
    $link = mysqli_connect($db_config['host'], $db_config['user'], $db_config['pass'], $init_db);
    if (mysqli_connect_errno()) {
      die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_set_charset($link, "utf8");
    return $link;
  }