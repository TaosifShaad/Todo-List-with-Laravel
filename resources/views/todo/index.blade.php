<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO home</title>
</head>
<body style="text-align: center">
    <h1>All tasks TO DO!</h1>
    @foreach ($all as $item) 
    <li>
        @if ($item->completed)
            <span style="text-decoration:line-through">{{$item->title}}</span>
        @else 
            {{$item->title}}
        @endif
        @php
        $time = (String)$item->created_at;
        $Day = explode(" ", $time);
        $formatTime = explode("-", $Day[0]);
        @endphp
        <span style="color:blue">@php echo str_repeat('&nbsp;', 5) . $formatTime[2] . "/" . $formatTime[1] . "/" . $formatTime[0] @endphp</span>
    @php echo str_repeat('&nbsp;', 5)@endphp
    <a href="{{asset('/' . $item->id . '/edit')}}">edit</a>
    <a href="{{asset('/' . $item->id . '/complete')}}">complete</a>
    <a href="{{asset('/' . $item->id . '/delete')}}">delete</a>
    </li>
    <br>
    @endforeach
    <br>
    <a href="/create">Add task</a>
</body>
</html>