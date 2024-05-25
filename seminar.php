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
  <title>Семінари</title>
</head>
<body>

  <?php require "app/blocks/header.php" ?>


  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>"Семінари з психології під час воєнного конфлікту: Підтримка та самопізнання"</h1>
            <p class="descr">Не залишайтеся наодинці зі своїми почуттями. Приєднуйтесь до наших семінарів з психології, щоб отримати підтримку, знання та інструменти, які допоможуть вам пройти через цей важкий період та знайти внутрішню міць для подальшого розвитку.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="carousel-caption">
            <h1>"Семінари з медицини: Навчання для надзвичайних ситуацій"</h1>
            <p class="descr">Необхідність володіння медичними навичками у воєнних умовах важлива для всіх, хто може опинитися в обстановці надзвичайних ситуацій. Приєднуйтесь до наших семінарів з медицини, щоб навчитися навичкам, які можуть врятувати життя.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item" >
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>"Семінари з тривожності: Заспокоєння та знаходження внутрішнього миру"</h1>
            <p class="descr">У воєнні часи тривожність та стрес можуть стати невід'ємною частиною життя. Наші семінари з тривожності спеціально розроблені для того, щоб надати вам знання, підтримку та інструменти для подолання стресу та тривожних станів.</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="container seminar">
    <div class="row justify-content-center">
      <div class="container lesson">
        <img class="pict" src="assets/img/psyh.jpg" alt="Фото психолога">
        <h2>Семінар з психологом</h2><br>
        <p>Семінар психологом, який пропонує цінні інструменти та підтримку для тих, хто зіткнувся з психологічними викликами.</p>
        <p>23 червня 10:00</p><br>
        <p><a class="btn btn-outline-secondary" href="reg.php">Записатись »</a></p>
      </div>
      <div class="lesson">
        <img class="pict" src="assets/img/doc.jpg" alt="Фото медицини">
        <h2>Перша медична допомога</h2><br>
        <p>Семінар з першої медичної допомоги, де ви отримаєте неоціненні навички, що можуть врятувати життя у надзвичайних ситуаціях.</p>
        <p>20 червня 12:00</p><br>
        <p><a class="btn btn-outline-secondary" href="<?php echo BASE_URL . 'reg.php'?>">Записатись »</a></p>
      </div>
      <div class="lesson">
        <img class="pict" src="assets/img/online.jpg" alt="Фото тривожності">
        <h2>Тривожність під час війни</h2><br>
        <p>Спеціально призначеного для тих, хто переживає стрес та тривожність у зв'язку з воєнним конфліктом.</p><br>
        <p>24 червня 16:00</p><br>
        <p><a class="btn btn-outline-secondary" href="reg.php">Записатись »</a></p>
      </div>
    </div>
  </div>

  <?php require "app/blocks/footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
