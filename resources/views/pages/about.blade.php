@extends('app')

@section('content')

    <h1>About</h1>


    @if (count($people))
    <h3>People I like:</h3>

        <ul>
         @foreach ($people as $person)
            <li> {{  $person }}</li>
            @endforeach
        </ul>
    @endif


<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus volutpat posuere enim ut placerat.
    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec in neque
    nec risus vestibulum fermentum id eget eros. Vestibulum ante ipsum primis in faucibus orci luctus et
    ultrices posuere cubilia Curae; Maecenas feugiat sem sit amet magna convallis, eu hendrerit magna
    sodales. Quisque sit amet mi neque. Vestibulum purus nulla, laoreet eu porta nec, gravida quis purus.
    Suspendisse semper fermentum suscipit.
</p>
@stop

