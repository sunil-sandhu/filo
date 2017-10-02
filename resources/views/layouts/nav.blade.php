
@if (Auth::check())

<a class="">{{ Auth::user()->name }}</a>

@endif