<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/tuskForm.css">
</head>
<body>

    <form action="#" method="#">
        <div class="title">
            <!-- При нажатии на ссылку вызываем модальное окно о перемещении карточки в другую колонку, в идеале и на другую доску?-->
            <p>Название задачи</p>
            <p>в колонке <a href="#">В процессе</a></p>
        </div>

        <div>
        <div class="center">
            <div class="description">
                <label for="description">Описание</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                <button>Сохранить</button>
            </div>

            <div class="actions">
                <label for="comments">Действия</label>
                <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
                <button>Сохранить</button>
            </div>

        </div>
        <div class="links">
            <div class="block">
                <p>Рекомендуемые</p>
                <button>Участники</button>
            </div>

            <div>
                <p>Добавить на карточку</p>
                <button>Участники</button>
                <button>Метки</button>
                <button>Чек-лист</button>
                <button>Даты</button>
                <button>Вложения</button>
                <button>Обложка</button>
            </div>

            <div>
                <p>Улучшения</p>
                <button>Добавить улучшения</button>
            </div>

            <div>
                <p>Автоматизация</p>
                <button>Добавить кнопку</button>
            </div>

            <div>
                <p>Действия</p>
                <button>Перемещения</button>
                <button>Копирование</button>
                <button>Создать шаблон</button>
                <button>подписаться</button>
                <hr>
                <button>Архивация</button>
                <button>Поделиться</button>
            </div>
        </div>
        </div>

    </form>





</body>
</html>
