@extends ('layouts.master')



@section ('content')


        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Filo
                </div>

                @if (Route::has('login'))
                    <div class="links">
                        @auth
                            <a href="{{ url('/home') }}">Dashboard</a>
                            <a href="{{ url('/posts/create') }}">Create Filo</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                                <a href="{{ route('register') }}">Register</a>
                                @endauth
                    </div>
                @endif
            </div>
        </div>



@section ('footer')


@endsection

