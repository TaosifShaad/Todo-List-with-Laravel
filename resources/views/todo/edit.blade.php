<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/623fec9098.js" crossorigin="anonymous"></script>
    <title>TODO edit</title>
</head>
<body style="text-align:center; margin-top: 200px">
    <div class='ball'></div>
    <div class='ball ball1'></div>
    <div class='ball ball2'></div>
    <h1>Edit TODO</h1>
    <h3 style="color:goldenrod"><x-alert /></h3>
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <input style="display:none" type="number" name='id' value="{{$todo->id}}" />
        <input class="write" type="text" name="title" value="{{$todo->title}}" />
        <input class="done" type="submit" value="done" />
    </form>
    <br>
    <a href="/index"><i class="fa-sharp fa-solid fa-arrow-left back"></i></a>
</body>
</html>