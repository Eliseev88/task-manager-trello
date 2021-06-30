<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="GeekBrains students">

    <title>KB</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('/assets/css/tasks.css') }} " rel="stylesheet">
</head>
<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="home" viewBox="0 0 16 16">
        <path fill="white" fill-rule="evenodd"
              d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
        <path fill="white" fill-rule="evenodd"
              d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
    </symbol>
    <symbol id="bell" viewBox="0 0 16 16">
        <path fill="white" fill-rule="evenodd"
              d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
    </symbol>
    <symbol id="question" viewBox="0 0 16 16">
        <path fill="white" fill-rule="evenodd"
              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
    </symbol>
    <symbol id="plus" viewBox="0 0 16 16">
        <path fill="white" fill-rule="evenodd"
              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
    </symbol>
    <symbol id="dots" viewBox="0 0 16 16">
        <path fill="white" fill-rule="evenodd"
              d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
    </symbol>
    <symbol id="bi-chat" viewBox="0 0 16 16">
        <path fill="white" fill-rule="evenodd"
              d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
    </symbol>
    <symbol id="bi-paperclip" viewBox="0 0 16 16">
        <path fill="white" fill-rule="evenodd"
              d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
    </symbol>
</svg>

<main class="bg-dark">
    <div class="bg-dark">
        <div class="row">
            <div class="col-3 col-md-auto">
                <div class="nav-bar">
                    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-secondary" style="width: 90px;">
                        <a href="/"
                           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-4">KB</span>
                        </a>
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none"
                               id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                                aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                        <ul class="nav-link text-white">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">
                                    <svg class="bi bi-house-fill">
                                        <use xlink:href="#home"/>
                                    </svg>

                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi bi-bell-fill">
                                        <use xlink:href="#bell"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi bi-question-circle-fill">
                                        <use xlink:href="#question"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi bi-plus-circle-fill">
                                        <use xlink:href="#plus"/>
                                    </svg>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="desc-col col-9 col-md-10">
                <div class="row">
                    <nav class="navbar navbar-light bg-dark">
                        <div class="container p-3">
                            <h2 class="text-white">Name Board</h2>

                            <nav aria-label="Page navigation example bg-dark">
                                <ul class="pagination">
                                    <li class="page-item"><a href="#"><img src="https://github.com/mdo.png" alt=""
                                                                           width="48" height="48" class="rounded"></a>
                                    </li>
                                    <li class="page-item"><a href="#"><img src="https://github.com/mdo.png" alt=""
                                                                           width="48" height="48" class="rounded"></a>
                                    </li>
                                    <li class="page-item"><a href="#"><img src="https://github.com/mdo.png" alt=""
                                                                           width="48" height="48" class="rounded"></a>
                                    </li>
                                    <div class="invite bg-secondary rounded"><a href="#"><span class=""> +2</span></a>
                                    </div>
                                </ul>
                            </nav>
                            <a class="nav-link text-white" href="#"><h2 class="text-white">+Invite</h2></a>


                        </div>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-4 col-md-4">
                        <div class="card-body bg-secondary text-white rounded">
                            <div class="card-body-nav ">
                                <p class="card-title">Backlog</p>
                                <a href="#" class="nav-link active" aria-current="page">
                                    <svg class="bi bi-three-dots-vertical">
                                        <use xlink:href="#dots"/>
                                    </svg>

                                </a>
                            </div>
                            <div class="card-body bg-secondary-light text-white rounded">
                                <span class="title-second task">Название подзадачи</span>
                                <br>
                                <p> Тут допустим будет написано описание задачи или вывод фото.
                                    можно просто вывести здесь статусы.
                                    нужно основательно подумать что мы хотим тут увидеть</p>

                                <div class="card-body-nav-footer ">
                                    <div class="card-body-nav-footer-left">
                                        <a href="#"><img src="https://github.com/mdo.png" alt=""
                                                         width="48" height="48" class="rounded"></a>

                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-chat">
                                                <use xlink:href="#bi-chat"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>

                                        </a>
                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-paperclip">
                                                <use xlink:href="#bi-paperclip"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5+
                                        <span class="visually-hidden">unread messages</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="card-body-nav-footer-right">
                                        <span class="l-5 badge rounded-pill bg-primary">Статус</span>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body bg-secondary-light text-white rounded">
                                <span class="title-second task">Картинка</span>
                                <div>
                                    <img src="https://github.com/mdo.png" alt=""
                                         width="100%" height="100%" class="rounded">
                                </div>
                                <div class="card-body-nav-footer ">
                                    <div class="card-body-nav-footer-left">
                                        <a href="#"><img src="https://github.com/mdo.png" alt=""
                                                         width="48" height="48" class="rounded"></a>

                                        <a href="#" class=" nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-chat">
                                                <use xlink:href="#bi-chat"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>

                                        </a>
                                        <a href="#" class=" nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-paperclip">
                                                <use xlink:href="#bi-paperclip"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5+
                                        <span class="visually-hidden">unread messages</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="card-body-nav-footer-right">
                                        <span class="l-5 badge rounded-pill bg-success">статус</span>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body bg-secondary-light text-white rounded">
                                <span class="title-second task">Заголовок 3</span>
                                <br>
                                <p> Тут допустим будет написано описание задачи или вывод фото.
                                    можно просто вывести здесь статусы.
                                    нужно основательно подумать что мы хотим тут увидеть</p>

                                <div class="card-body-nav-footer ">
                                    <div class="card-body-nav-footer-left">
                                        <a href="#"><img src="https://github.com/mdo.png" alt=""
                                                         width="48" height="48" class="rounded"></a>

                                        <a href="#" class=" nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-chat">
                                                <use xlink:href="#bi-chat"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>

                                        </a>
                                        <a href="#" class=" nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-paperclip">
                                                <use xlink:href="#bi-paperclip"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5+
                                        <span class="visually-hidden">unread messages</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="card-body-nav-footer-right">
                                        <span class="l-5 badge rounded-pill bg-primary">Статус</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="card-body bg-secondary text-white rounded">
                            <div class="card-body-nav ">
                                <p class="card-title">Backlog</p>
                                <a href="#" class="nav-link active" aria-current="page">
                                    <svg class="bi bi-three-dots-vertical">
                                        <use xlink:href="#dots"/>
                                    </svg>

                                </a>
                            </div>
                            <div class="card-body bg-secondary-light text-white rounded">
                                <span class="title-second task">Название подзадачи</span>
                                <br>
                                <p> Тут допустим будет написано описание задачи или вывод фото.
                                    можно просто вывести здесь статусы.
                                    нужно основательно подумать что мы хотим тут увидеть</p>

                                <div class="card-body-nav-footer ">
                                    <div class="card-body-nav-footer-left">
                                        <a href="#"><img src="https://github.com/mdo.png" alt=""
                                                         width="48" height="48" class="rounded"></a>

                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-chat">
                                                <use xlink:href="#bi-chat"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>

                                        </a>
                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-paperclip">
                                                <use xlink:href="#bi-paperclip"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5+
                                        <span class="visually-hidden">unread messages</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="card-body-nav-footer-right">
                                        <span class="l-5 badge rounded-pill bg-primary">Статус</span>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body bg-secondary-light text-white rounded">
                                <span class="title-second task">Картинка</span>
                                <div>
                                    <img src="https://github.com/mdo.png" alt=""
                                         width="100%" height="100%" class="rounded">
                                </div>
                                <div class="card-body-nav-footer ">
                                    <div class="card-body-nav-footer-left">
                                        <a href="#"><img src="https://github.com/mdo.png" alt=""
                                                         width="48" height="48" class="rounded"></a>

                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-chat">
                                                <use xlink:href="#bi-chat"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>

                                        </a>
                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-paperclip">
                                                <use xlink:href="#bi-paperclip"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5+
                                        <span class="visually-hidden">unread messages</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="card-body-nav-footer-right">
                                        <span class="l-5 badge rounded-pill bg-success">статус</span>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body bg-secondary-light text-white rounded">
                                <span class="title-second task">Заголовок 3</span>
                                <br>
                                <p> Тут допустим будет написано описание задачи или вывод фото.
                                    можно просто вывести здесь статусы.
                                    нужно основательно подумать что мы хотим тут увидеть</p>

                                <div class="card-body-nav-footer ">
                                    <div class="card-body-nav-footer-left">
                                        <a href="#"><img src="https://github.com/mdo.png" alt=""
                                                         width="48" height="48" class="rounded"></a>

                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-chat">
                                                <use xlink:href="#bi-chat"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>

                                        </a>
                                        <a href="#" class=" nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-paperclip">
                                                <use xlink:href="#bi-paperclip"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5+
                                        <span class="visually-hidden">unread messages</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="card-body-nav-footer-right">
                                        <span class="l-5 badge rounded-pill bg-primary">Статус</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="card-body bg-secondary text-white rounded">
                            <div class="card-body-nav ">
                                <p class="card-title">Backlog</p>
                                <a href="#" class="nav-link active" aria-current="page">
                                    <svg class="bi bi-three-dots-vertical">
                                        <use xlink:href="#dots"/>
                                    </svg>

                                </a>
                            </div>
                            <div class="card-body bg-secondary-light text-white rounded">
                                <span class="title-second task">Название подзадачи</span>
                                <br>
                                <p> Тут допустим будет написано описание задачи или вывод фото.
                                    можно просто вывести здесь статусы.
                                    нужно основательно подумать что мы хотим тут увидеть</p>

                                <div class="card-body-nav-footer ">
                                    <div class="card-body-nav-footer-left">
                                        <a href="#"><img src="https://github.com/mdo.png" alt=""
                                                         width="48" height="48" class="rounded"></a>

                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-chat">
                                                <use xlink:href="#bi-chat"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>

                                        </a>
                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-paperclip">
                                                <use xlink:href="#bi-paperclip"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5+
                                        <span class="visually-hidden">unread messages</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="card-body-nav-footer-right">
                                        <span class="l-5 badge rounded-pill bg-primary">Статус</span>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body bg-secondary-light text-white rounded">
                                <span class="title-second task">Картинка</span>
                                <div>
                                    <img src="https://github.com/mdo.png" alt=""
                                         width="100%" height="100%" class="rounded">
                                </div>
                                <div class="card-body-nav-footer ">
                                    <div class="card-body-nav-footer-left">
                                        <a href="#"><img src="https://github.com/mdo.png" alt=""
                                                         width="48" height="48" class="rounded"></a>

                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-chat">
                                                <use xlink:href="#bi-chat"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>

                                        </a>
                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-paperclip">
                                                <use xlink:href="#bi-paperclip"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5+
                                        <span class="visually-hidden">unread messages</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="card-body-nav-footer-right">
                                        <span class="l-5 badge rounded-pill bg-success">статус</span>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body bg-secondary-light text-white rounded">
                                <span class="title-second task">Заголовок 3</span>
                                <br>
                                <p> Тут допустим будет написано описание задачи или вывод фото.
                                    можно просто вывести здесь статусы.
                                    нужно основательно подумать что мы хотим тут увидеть</p>

                                <div class="card-body-nav-footer ">
                                    <div class="card-body-nav-footer-left">
                                        <a href="#"><img src="https://github.com/mdo.png" alt=""
                                                         width="48" height="48" class="rounded"></a>

                                        <a href="#" class=" nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-chat">
                                                <use xlink:href="#bi-chat"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>

                                        </a>
                                        <a href="#" class="nav-link active primary position-relative"
                                           aria-current="page">
                                            <svg class="bi bi-paperclip">
                                                <use xlink:href="#bi-paperclip"/>
                                            </svg>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5+
                                        <span class="visually-hidden">unread messages</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="card-body-nav-footer-right">
                                        <span class="l-5 badge rounded-pill bg-primary">Статус</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>


</main>


<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js"></script>
</body>
</html>
