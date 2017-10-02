@extends ('layouts.master')



@section ('content')

    Filter down to all posts per tag.


@foreach ($post as $tag)

    <h1>{{ $tag->content }}</h1>
    <p>{{$tag->tag}}</p>

@endforeach


@endsection



@section ('footer')


@endsection
