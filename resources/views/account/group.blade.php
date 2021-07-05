<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        body {
            font-size: 26px;
            font-family: "Montserrat", sans-serif;
        }

        table {
            outline: 1px solid #1b1e21;
        }
        th {
            outline: 1px solid #1b1e21;
            margin: 5px;
        }
        tr {
            outline: 1px solid #1b1e21;
            margin: 5px;
        }
        td {
            outline: 1px solid #1b1e21;
            margin: 5px;
        }
    </style>
</head>
<body>

<a href="{{ route('group.create') }}">create group</a>

<br>

<table>

    <tr>
        <th>пользователь</th>
        <th>Группа</th>
        <th>название группы</th>
        <th>статус</th>
        <th>редактировать</th>
        <th>удалить</th>
    </tr>

    @foreach($groups as $group)
    <tr>
        <td>{{ $group->user_id }}</td>
        <td>{{ $group->group_id }}</td>
        <td>{{ $group->group_name }}</td>
        <td>{{  $group->role }}</td>
        <td><a href="{{ route('group.edit', ['id' => $group->group_id]) }}">редактировать</a></td>
        <td><a href="{{ route('group.destroy', ['id' => $group->group_id]) }}">удалить</a></td>
    </tr>
    @endforeach

</table>


</body>
</html>
