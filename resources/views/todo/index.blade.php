<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/623fec9098.js" crossorigin="anonymous"></script>
    <title>TODO home</title>
</head>
<body>
    < x-decor />
    <div class="container">
    <h1>All tasks TO DO!</h1>
    <hr style="color:blueviolet">
    <br>
    @foreach ($all as $item) 
    <li style="list-style-type: none;">
        @if ($item->completed)
            <span style="text-decoration:line-through">{{$item->title}}</span>
        @else 
            <span class="todo-title">{{$item->title}}</span>
        @endif
        @php
        $time = (String)$item->created_at;
        $Day = explode(" ", $time);
        $formatTime = explode("-", $Day[0]);
        @endphp
        <span style="color:brown">@php echo str_repeat('&nbsp;', 5) . $formatTime[2] . "/" . $formatTime[1] . "/" . $formatTime[0] @endphp</span>
    @php echo str_repeat('&nbsp;', 5)@endphp
    <a href="{{asset('/' . $item->id . '/edit')}}"><i class="fa-solid fa-pen-to-square"></i></a>
    @php echo str_repeat('&nbsp;', 5)@endphp
    <a href="{{asset('/' . $item->id . '/complete')}}"><i class="fa-regular fa-square-check"></i></a>
    @php echo str_repeat('&nbsp;', 5)@endphp
    <a href="{{asset('/' . $item->id . '/delete')}}"><i class="fa-sharp fa-solid fa-trash"></i></a>
    </li>
    <br>
    <hr>
    <br>
    @endforeach
    <br>
    <a href="/create"><i class="fa-sharp fa-solid fa-plus add"></i></a>
    </div>
</body>
</html>