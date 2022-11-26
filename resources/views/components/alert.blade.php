<div>
    @if (session()->has('success'))
        {{session()->get('success')}}
    @elseif ($errors->any())
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    @endif
</div>