<?php

session_start();
require 'connect.php';


// Перевірка запиту до БД
function dbCheckError($query){
  $errInfo = $query->errorInfo();
  if ($errInfo[0] !== PDO::ERR_NONE){
    echo $errInfo[2];
    exit();
  }
  return true;
}

// Запит на отримання даних з однієї таблиці
function selectAll($table, $params = []){
  global $pdo;
  $sql = "SELECT * FROM $table";

  if(!empty($params)){
    $i = 0;
    foreach ($params as $key => $value){
      if (!is_numeric($value)){
        $value = "'".$value."'";
      }
      if ($i === 0){
        $sql = $sql . " WHERE $key = $value";
      }
      else {
        $sql = $sql . " AND $key = $value";
      }
      $i++;
    }
  }
  $query = $pdo->prepare($sql);
  $query->execute();
  dbCheckError($query);
  return $query->fetchAll();
}

// Запит на отримання одного рядка з таблиці
function selectOne($table, $params = []){
  global $pdo;
  $sql = "SELECT * FROM $table";

  if(!empty($params)){
    $i = 0;
    foreach ($params as $key => $value){
      if (!is_numeric($value)){
        $value = "'".$value."'";
      }
      if ($i === 0){
        $sql = $sql . " WHERE $key = $value";
      }
      else {
        $sql = $sql . " AND $key = $value";
      }
      $i++;
    }
  }
  $query = $pdo->prepare($sql);
  $query->execute();
  dbCheckError($query);
  return $query->fetch();
}

// Внесення даних в таблицю
function insert($table, $params) {
    global $pdo;
    $columns = implode(", ", array_keys($params));
    $values = implode(", ", array_map(function ($value) {
        return "'$value'";
    }, array_values($params)));

    $sql = "INSERT INTO $table ($columns) VALUES ($values)";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $pdo->lastInsertId();
}

// Оновлення даних в таблиці
function update($table, $id, $params){
  global $pdo;
  $i = 0;
  $str = '';
  foreach ($params as $key => $value){
    if ($i === 0){
      $str = $str . $key . "= '" . $value . "'";
    }
    else{
      $str = $str . ", " . $key . "= '" . $value . "' ";
    }
    $i++;
  }
  $sql = "UPDATE $table SET $str WHERE id = $id";

  $query = $pdo->prepare($sql);
  $query->execute($params);
  dbCheckError($query);
}

// Bидалення даних з таблиці
function delete($table, $id){
  global $pdo;

  $sql = "DELETE FROM $table WHERE id = $id";

  $query = $pdo->prepare($sql);
  $query->execute();
  dbCheckError($query);
}
