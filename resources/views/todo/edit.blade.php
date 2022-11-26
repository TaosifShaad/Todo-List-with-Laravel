<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO edit</title>
</head>
<body style="text-align:center; margin-top: 100px">
    <h1>Edit TODO</h1>
    <h3 style="color:goldenrod"><x-alert /></h3>
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <input style="display:none" type="number" name='id' value="{{$todo->id}}" />
        <input type="text" name="title" value="{{$todo->title}}"/>
        <input type="submit" value="done" />
    </form>
    <br>
    <a href="/index">back</a>
</body>
</html>