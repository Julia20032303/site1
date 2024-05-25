<?php
include '../path.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
  scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Веб-ресурс</title>
</head>
<body>

<?php require "../app/blocks/header.php"?>

<div class="container main">
    <h2>Швидка допомога при загрозі</h2>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="../index.php">Всі пости</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="first.php">Обстріли та мінування</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="second.php">Окупація</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="third.php">Перша допомога</a>
        </li>
    </ul>
    <div class="row">
        <div class="col">
            <div class="card">
                <h3 class="card-title">Перша допомога пораненому</h3>
                <img src="../assets/img/5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Практичні поради та інструкції щодо надання допомоги постраждалим у різних ситуаціях.</p>
                    <p><a class="btn btn-outline-secondary" href="../posts/single5.php">Читати більше »</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "../app/blocks/footer.php"?>

</body>
</html>
