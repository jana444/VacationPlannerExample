<?php
require 'config.php';

// Should return a PDO
function db_connect() {

  try {
    // TODO
    // try to open database connection using constants set in config.php
    // return $pdo;
    $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
    $user = DBUSER;
    $pass = DBPASS;

    $pdo = new PDO($connectionString,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
  }
  catch (PDOException $e)
  {
    die($e->getMessage());
  }
}

function add_activity() {
  global $pdo;

  if(isset($_POST['activity']) && !empty($_POST['activity'])) {
    try {
      $sql = "INSERT INTO activities (activity) VALUES (:activity)";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(':activity', $_POST['activity']);
      $statement->execute();
    } catch (PDOException $e) {
      echo "Error adding activity: " . $e->getMessage();
    }
  }
}

// Get all activities from database and store in $activities
function get_activities() {
    global $pdo;
    global $activities;

    $sql = "SELECT id, activity FROM activities ORDER BY activity ASC";
    $result = $pdo->query($sql);
    while($row = $result->fetch()){
        $activities[] = $row;
    }
}

function delete_activity(){
  global $pdo;

  if (isset($_POST['delete_activity']) && !empty($_POST['activity_id'])) {
    try {
      $sql = "DELETE FROM activities WHERE id = :id";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(':id', $_POST['activity_id'], PDO::PARAM_INT);
      $statement->execute();
    } catch (PDOException $e) {
      echo "Error deleting activity: " . $e->getMessage();
    }
  }
}

