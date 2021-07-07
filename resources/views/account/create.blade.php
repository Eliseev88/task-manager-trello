<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<form method="post" action="{{ route('group.store') }}">
    @csrf
    @method('put')

    <div class="form-group">
        <label for="name">Название группы *</label>
        <input type="text" class="form-control" name="name" id="name" value="">
    </div>

    <br>
    <button class="btn btn-success" type="submit">Редактировать новость</button>
</form>
</body>
</html>
