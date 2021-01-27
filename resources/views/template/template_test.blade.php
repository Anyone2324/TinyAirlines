{{$ticket->price}}
<br>
@foreach($arr as $elem)
    @if($elem == "Откуда")
        {{"Kyiv"}}
        @else
            {{$elem}}
    @endif
@endforeach
