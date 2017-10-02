@extends ('layouts.master')



@section ('content')

INDEX PAGE FOR TAGS


@foreach ($posts as $tag)

    <div>
        <a href="tags/{{$tag->tag}}">{{$tag->tag}}</a>
    </div>

@endforeach

@endsection



@section ('footer')


@endsection
