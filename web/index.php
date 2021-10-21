<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Heroku Exercise</title>
    <style>
        main {
            width: 300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        main form label {
            display: block;
        }

        .author {
            position: absolute;
            bottom: 10px;
        }
    </style>
</head>
<body>
<main>
    <h1>Очень важный сайт</h1>
    <?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo "<div>Добро пожаловать, ${_SESSION['login']}!</div>";
        echo "<a href='exit.php'>Выйти</a>";
    } else {
        include './form.html';
    }
    ?>
</main>
</body>
</html>
