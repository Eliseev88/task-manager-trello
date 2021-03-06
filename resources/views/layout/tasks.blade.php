<!DOCTYPE html>
<html lang="">
<head>
    <meta content="#7952b3" name="theme-color"/>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width,initial-scale=1.0" name="viewport"/>

    <link href="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.css" rel="stylesheet"/>
    <link crossorigin="anonymous" href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet"/>
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/861689887d.js"></script>

    <!-- Favicons -->
    <link href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180"/>

    <link href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json" rel="manifest"/>
    <link color="#7952b3" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" rel="mask-icon"/>
    <link href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico" rel="icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet"/>

    <link href="css/board.css"  rel="stylesheet"/>

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
                        <a href="#">??????????</a>
                    </li>

                    <li>
                        <a href="#">??????????????????????</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="account-content">

        <div class="navbar">

            <div class="navbar-link">
                <a href="#">??????????</a>


                <a href="#">???????????? ??????????</a>


                <a href="#">????????????????????</a>


                <a href="#">??????????????????</a>
            </div>
            <div class="navbar-link">
                <a class="navbar-link__exit" href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    ??????????
                </a>
            </div>
        </div>

        <div class="board">

            @include('components.board_column')

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
<script>

    const addTasks = document.querySelectorAll('.addtask');

    function handleClick(event) {

        if(event.target.classList.contains('fa-plus-square')){
            event.target.parentNode.parentNode.nextElementSibling.style.visibility === 'visible' ?
                event.target.parentNode.parentNode.nextElementSibling.style.visibility = 'hidden':
                event.target.parentNode.parentNode.nextElementSibling.style.visibility = 'visible';
            console.log( event.target.parentNode.parentNode.nextElementSibling);
        }else{
            event.target.parentNode.nextElementSibling.style.visibility === 'visible' ?
                event.target.parentNode.nextElementSibling.style.visibility = 'hidden':
                event.target.parentNode.nextElementSibling.style.visibility = 'visible';
            console.log( event.target.parentNode.nextElementSibling);
        }
    }

    addTasks.forEach((addTask) => {
        addTask.addEventListener('click', handleClick);
    });

</script>
</body>
</html>
