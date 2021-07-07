<!DOCTYPE html>
<html lang="">
<head>
    <meta content="#7952b3" name="theme-color"/>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width,initial-scale=1.0" name="viewport"/>

    <link href="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.css" rel="stylesheet"/>
    <link crossorigin="anonymous" href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet"/>
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/861689887d.js"></script>

    <!-- Favicons -->
    <link href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" rel="apple-touch-icon"
          sizes="180x180"/>

    <link href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json" rel="manifest"/>
    <link color="#7952b3" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg"
          rel="mask-icon"/>
    <link href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico" rel="icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet"/>

    <link href="{{ asset('css/board.css') }}" rel="stylesheet"/>

    <title></title>
</head>
<body class="font-montserrat-alternate bg-dark">


<div id="app">

    <header>
        <div class="container header-menu">
            <a class="header-menu_logo" href="#">
                <i class="fas fa-tasks icon"></i>
                Kanban
            </a>

            <button
                aria-controls="navbarTogglerDemo02"
                aria-expanded="false"
                aria-label="Toggle navigation"
                class="header-dropdown"
                data-bs-target="#navbarTogglerDemo02"
                data-bs-toggle="collapse"
                type="button"
            >
                <span></span>
            </button>

            <div class="header-menu_list">
                <ul>
                    <li class="dropdown">
                        <a
                            v-pre
                            id="navbarDropdown"
                            aria-expanded="false"
                            aria-haspopup="true"
                            data-toggle="dropdown"
                            href="#"
                            role="button"
                        >
                            <i class="fas fa-chevron-down"></i>
                        </a>

                        <div aria-labelledby="navbarDropdown">
                            <a href="#"></a>

                            <a href="account">Account</a>

                            <form id="logout-form" action="#" method="POST"></form>
                        </div>
                    </li>


                    <li>
                        <a href="#">Войти</a>
                    </li>

                    <li>
                        <a href="#">Регистрация</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="account-content">

        <div class="navbar">

            <div class="navbar-link">
                <a href="#">Доски</a>


                <a href="">Список задач</a>


                <a href="#">статистика</a>


                <a href="#">Настройки</a>
            </div>
            <div class="navbar-link">
                <a class="navbar-link__exit" href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    Выход
                </a>
            </div>
        </div>


        <div class="board">

            @foreach ($userBoards as $allBoard)
                @foreach($allBoard as $board)
                    <div class="board-column">

                        <div class="board-column_title">
                            <p class="">{{$board['name']}}</p>
                            <a aria-current="page" class="" href="#">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                        </div>

                        <!-- стандартная задача-->
                        <div class="board-column_task">
                            <div class="task-title">
                                <a href="#">Название подзадачи</a>
                                <a aria-current="page" class="" href="#">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                            </div>
                            <div class="task-info">
                                <a href="#">
                                    <img alt="" class="rounded" height="48" src="https://githut.com/mdo.png" width="48">
                                </a>

                                <a href="#" aria-current="page" class="">
                                    <i class="far fa-comments"></i>
                                    <span class="">99+</span>
                                </a>

                                <a href="#" aria-current="page" class="">
                                    <i class="fas fa-paperclip"></i>
                                    <span class="">5+</span>
                                </a>

                                <div class="task-info_status">
                                    <span class="">Статус</span>
                                </div>
                            </div>
                        </div>

                        <!-- стандартная задача с описанием-->
                        <div class="board-column_task">
                            <div class="task-title">
                                <a href="#">Название подзадачи</a>
                                <a aria-current="page" class="" href="#">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                            </div>

                            <div class="task-description">
                                <p>
                                    Тут допустим будет написано описание задачи или вывод фото.
                                    можно просто вывести здесь статусы.
                                    нужно основательно подумать что мы хотим тут увидеть
                                </p>
                            </div>

                            <div class="task-info">
                                <a href="#">
                                    <img alt="" class="rounded" height="48" src="https://githut.com/mdo.png" width="48">
                                </a>

                                <a href="#" aria-current="page" class="">
                                    <i class="far fa-comments"></i>
                                    <span class="">99+</span>
                                </a>

                                <a href="#" aria-current="page" class="">
                                    <i class="fas fa-paperclip"></i>
                                    <span class="">5+</span>
                                </a>

                                <div class="task-info_status">
                                    <span class="">Статус</span>
                                </div>
                            </div>
                        </div>

                        <!-- стандартная задача с картинкой -->
                        <div class="board-column_task">
                            <div class="task-title">
                                <a href="#">Название подзадачи</a>
                                <a aria-current="page" class="" href="#">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                            </div>

                            <div class="task-description">
                                <p>
                                    Тут допустим будет написано описание задачи или вывод фото.
                                    можно просто вывести здесь статусы.
                                    нужно основательно подумать что мы хотим тут увидеть
                                </p>
                            </div>

                            <div class="task-image">
                                <a href="#">
                                    <img src="../../../assets/13.png" alt="doc"/>
                                </a>
                            </div>


                            <div class="task-info">
                                <a href="#">
                                    <img alt="" class="rounded" height="48" src="https://githut.com/mdo.png" width="48">
                                </a>

                                <a href="#" aria-current="page" class="">
                                    <i class="far fa-comments"></i>
                                    <span class="">99+</span>
                                </a>

                                <a href="#" aria-current="page" class="">
                                    <i class="fas fa-paperclip"></i>
                                    <span class="">5+</span>
                                </a>

                                <div class="task-info_status">
                                    <span class="">Статус</span>
                                </div>
                            </div>
                        </div>

                        <div class="board-column_addTask">
                            <a class="#">
                                <i class="fas fa-plus-square"></i>
                                Добавить задачу
                            </a>
                        </div>

                    </div>
                @endforeach
            @endforeach


        </div>
    </div>
</div>

<script
    crossorigin="anonymous"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"
>

</script>

<script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js"></script>
</body>
</html>
