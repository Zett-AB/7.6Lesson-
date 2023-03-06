<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 7.6. Проектирование базы данных. Хранение данных в разных таблицах</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>

<body>
    <main>
        <header class="title">
            <h1>
                Урок 7.6. Проектирование базы данных. Хранение данных в разных таблицах
            </h1>
            <h4 class="sub-title">
                В этом уроке вы узнаете основы проектирования баз данных и о том, как хранить данные в разных таблицах
            </h4>
        </header>
        <div>
            <?php
            $nickname = "Александр!";
            $hello = "Привет ";
            $offer = "Продолжаем изучение РНР<br>
                        Урок об основах проектирования баз данных и как хранить данные в разных таблицах";

            echo "<h2 class='sub-title-php'>" . $hello . $nickname . "<br>" . "<br>" . $offer . "</h2>";
            ?>
        </div>
    </main>

</body>

</html>