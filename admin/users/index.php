<?php

  include '../../app/database/db.php';
  include '../../app/controllers/admins.php';
  include '../../path.php';

  $users = selectAll('users');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-
  scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../assets/css/admin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Кабінет адміна</title>
</head>
<body>

  <?php require "../../app/blocks/header-admin.php" ?>

<div class="container">
  <div class="row">

    <div class="posts col-12">
      <div class="row title-table">
        <h2>Відстеження реєстрації на семінари</h2>
        <div class="col-1">ID</div>
        <div class="col-2">Ім'я</div>
        <div class="col-3">Прізвище</div>
        <div class="col-3">Email</div>
        <div class="col-3">Семінар</div>
      </div>
      <?php foreach ($users as  $user): ?>
      <div class="row post">
        <div class="col-1"><?=$user['id'];?></div>
        <div class="col-2"><?=$user['username'];?></div>
        <div class="col-3"><?=$user['surname'];?></div>
        <div class="col-3"><?=$user['email'];?></div>
        <div class="col-3"><?=$user['seminar'];?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

  <?php require "../../app/blocks/footer-admin.php" ?>

</body>
</html>
