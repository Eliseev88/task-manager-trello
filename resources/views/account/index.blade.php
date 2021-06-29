<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>

    <script src="https://kit.fontawesome.com/861689887d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="logo">
        <i class="fas fa-tasks icon"></i>
        kanban
    </div>
    <div class="userMenu">
        <p>Добро пожаловать, USER</p>
        <img
            src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fru.depositphotos.com%2Fstock-photos%2F%25D0%25BF%25D1%2580%25D0%25B8%25D0%25BD%25D1%2586.html&psig=AOvVaw3if1HXcxOYCOmhslkSi9mO&ust=1625062808446000&source=images&cd=vfe&ved=0CAcQjRxqFwoTCPCkku6EvfECFQAAAAAdAAAAABAR"
            alt="avatar">
        <button><i class="fas fa-chevron-down"></i></button>
    </div>
</header>
<div class="content">
    <div class="navbar">
        <div>
            <div>
                <p>Категории</p>
                <a href="#">Имя категории</a>
                <a href="#">Имя категории</a>
                <a href="#">Имя категории</a>
                <a href="#">Имя категории</a>
                <a href="#">Имя категории</a>
            </div>
            <div>
                <p>Данные</p>
                <a href="#">Вид данных</a>
                <a href="#">Вид данных</a>
                <a href="#">Вид данных</a>
                <a href="#">Вид данных</a>
                <a href="#">Вид данных</a>
            </div>
            <div>
                <a href="#"><i class="fas fa-sign-out-alt "></i> Выход</a>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="bigBlock">
            <div class="title">
                <p>Успехи за неделю</p>
                <i class="fas fa-ellipsis-h"></i>
            </div>

            <div class="radius">
                <div class="radiusBlock">
                    <p>Создано</p>
                    <div>
                        <p>197 задач</p>
                    </div>
                </div>

                <div class="radiusBlock">
                    <p>Выполнено</p>
                    <div>
                        <p>197 задач</p>
                    </div>
                </div>

                <div class="radiusBlock">
                    <p>Выполнено</p>
                    <div>
                        <p>197 задач</p>
                    </div>
                </div>
            </div>


        </div>
        <div class="bigBlock">
            <div class="title">
                <p>Активные задачи</p>
                <i class="fas fa-ellipsis-h"></i>
            </div>
            <div class="tusks">

                <!-- здесь откручиваем задачи, стилистику настрою  -->
                <div class="tusk">
                    <label>
                        <input type="radio" class="radio" name="bubu" checked>
                        <span class="pseudo-radio"></span>
                        Приготовить ужин
                    </label>
                    <div>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
                <div class="tusk">
                    <label>
                        <input type="radio" class="radio" name="bubu" checked>
                        <span class="pseudo-radio"></span>
                        Приготовить ужин
                    </label>
                    <div>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
                <div class="tusk">
                    <label>
                        <input type="radio" class="radio" name="bubu" checked>
                        <span class="pseudo-radio"></span>
                        Приготовить ужин
                    </label>
                    <div>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
                <div class="tusk">
                    <label>
                        <input type="radio" class="radio" name="bubu" checked>
                        <span class="pseudo-radio"></span>
                        Приготовить ужин
                    </label>
                    <div>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="bigBlock">
            <div class="title">
                <p>Дата и время</p>
                <i class="fas fa-ellipsis-h"></i>
            </div>

            <div>
                <div class="date">
                    28 июля 2020 16:30
                </div>
            </div>

        </div>
        <div class="bigBlock">
            <div class="title">
                <p>Завершенные задачи</p>
                <i class="fas fa-ellipsis-h"></i>
            </div>
            <div class="tusks">
                <div class="tusk">
                    <label>
                        Приготовить ужин
                    </label>
                    <div>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
                <div class="tusk">
                    <label>
                        Приготовить ужин
                    </label>
                    <div>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
                <div class="tusk">
                    <label>
                        Приготовить ужин
                    </label>
                    <div>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
                <div class="tusk">
                    <label>
                        Приготовить ужин
                    </label>
                    <div>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
