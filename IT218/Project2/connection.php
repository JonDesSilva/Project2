<?php
  class Db {
    private static $instance = NULL;
    public $username = 'jed28';
    public $password = 'creepy76';
    public $hostname = 'sql2.njit.edu';


    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=$hostname;dbname=$username'
          , 'root', '', $pdo_options);
      }
      return self::$instance;
    }
  }
?>