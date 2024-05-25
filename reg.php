<?php
  include 'app/controllers/users.php';
  include 'path.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-
  scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Реєстрація на семнар</title>
</head>
<body>

  <?php require "app/blocks/header.php" ?>

<div class="container reg_form">
  <form class="row justify-content-center" method="post" action="reg.php">
    <h2>Форма реєстрації на семінар</h2>
      <div class="mb-3 col-12 col-md-4 err">
        <p><?=$errMsg?></p>
      </div>
      <div class="w-100"></div>
      <div class="mb-3 col-12 col-md-4">
        <label for="disabledTextInput" class="form-label">Ваше ім'я</label>
        <input name="login" value = "<?=$login?>" type="text" id="disabledTextInput" class="form-control" placeholder="Введіть ваше ім'я...">
      </div>
      <div class="w-100"></div>
      <div class="mb-3 col-12 col-md-4">
        <label for="disabledTextInput" class="form-label">Ваше прізвище</label>
        <input name="surname" value = "<?=$name?>" type="text" id="disabledTextInput" class="form-control" placeholder="Введіть ваше прізвище...">
      </div>
      <div class="w-100"></div>
      <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input name="mail" value = "<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введіть ваш Email...">
        <div id="emailHelp" class="form-text">Ваш Email не буде використовуватись для спаму!</div>
      </div>
      <div class="w-100"></div>
      <div class="mb-3 col-12 col-md-4">
      <select name="seminar" value = "<?=$type?>" class="form-select" aria-label="Default select example">
        <option selected>Обрати семінар</option>
        <option value="Семінар з психологом">Семінар з психологом</option>
        <option value="Перша медична допомога">Перша медична допомога</option>
        <option value="Семінар з тривожності">Тривожність під час війни</option>
      </select>
      </div>
      <div class="w-100"></div>
      <div class="mb-3 col-12 col-md-4">
        <button type="submit" class="btn btn-secondary" name="button-reg">Зареєструватись</button>
      </div>
  </form>
</div>

  <?php require "app/blocks/footer.php" ?>

</body>
</html>
