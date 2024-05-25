<?php

include ("app/database/db.php");

$errMsg = '';

$users = selectAll('users');

// Код для форми реєстрації на семінар
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
  // Отримання даних з форми
  $login = trim($_POST['login']);
  $name = trim($_POST['surname']);
  $email = trim($_POST['mail']);
  $type = trim($_POST['seminar']);

  if($login === '' || $name === '' || $email === '' || $type === ''){
    $errMsg = "Не всі дані заповненні!";
  }elseif (mb_strlen($login, 'UTF8') < 2) {
    $errMsg = "Ім'я має бути більше 2-х символів!";

  }else{
    $existence = selectOne('users', ['email' => $email]);
    if($existence && $existence['email'] === $email){
      $errMsg = "Користувач з таким Email вже зареєстрований!";
    }else{
      // Запис даних користувача в базу даних
      $post = [
        'username' => $login,
        'surname' => $name,
        'email' => $email,
        'seminar' => $type
      ];

        $id = insert('users', $post);
        $user = selectOne('users', ['id' => $id]);

        header('Location: http://infohelp.great-site.net/');

    }
  }
}else{
  $login = '';
  $name = '';
  $email = '';
}


