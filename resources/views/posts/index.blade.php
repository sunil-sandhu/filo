@extends ('layouts.master')



@section ('content')
    <h1>INDEX PAGE FOR POSTS </h1>
@foreach ($posts as $post)

    <h1>{{ $post->content }}</h1>
    <p>{{$post->tag}}</p>

@endforeach


@endsection



@section ('footer')


@endsection
