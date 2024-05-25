<?php include("path.php"); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-
  scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Про нас</title>
</head>
<body>

  <?php require "app/blocks/header.php" ?>

  <div class="container py-1 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Проєкт підтримки громадян <br>під час воєнних дій</h1><br>
        <p class="pl-5 pr-3 fs-4">Вітаємо на нашому веб-ресурсі! Ми - команда фахівців, яка присвятила свою роботу підтримці
          та інформуванню громадян під час воєнних дій. Наша місія полягає в тому, щоб забезпечити доступ до необхідної інформації,
          ресурсів та підтримки для тих, хто переживає важливі події та кризові ситуації.</p>
        <img class="fit-picture " src="assets/img/war.jpg" alt="фото">
        <p class="pl-5 pr-3 fs-4 mt-3">Наша мета - створити безпечне та інформоване середовище для всіх, хто потребує допомоги
          та підтримки під час воєнних дій. Долучайтесь до нашої спільноти та користуйтеся нашими ресурсами для забезпечення вашого
          благополуччя та безпеки.</p>
      </div>
  </div>


  <?php require "app/blocks/footer.php" ?>

</body>
</html>
