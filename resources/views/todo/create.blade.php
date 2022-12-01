<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/623fec9098.js" crossorigin="anonymous"></script>
    <title>TODO create</title>
</head>
<body style="text-align:center; margin-top: 200px">
    < x-decor />
    <div class="container">
    <h1>Start creating TODO list</h1>
    <h3><x-alert /></h3>
    <form action="/upload" method="post">
        @csrf
        <input class="write" type="text" name="title" value="{{ old('title') }}"/>
        <input class="done" type="submit" value="Create" />
    </form>
    <br>
    <a href="/index"><i class="fa-sharp fa-solid fa-arrow-left back"></i></a>
    </div>
</body>
</html>