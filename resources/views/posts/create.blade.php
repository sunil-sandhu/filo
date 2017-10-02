@extends ('layouts.master')



@section ('content')

@if (Route::has('login'))
    <div>
        @auth
            <div>

                <h1>Create a Post</h1>

            </div>


            <form method="POST" action="/posts">

                {{csrf_field()}}

                <div class="form-group">
                    <label for="content">What would you like to post?</label>
                    <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="post-title">Give your post a searchable tag</label>
                    <input type="text" class="form-control" id="tag" name="tag">
                </div>


                <button type="submit" class="btn">Post Filo</button>



            </form>




            @else
                <p>You must be logged in to create a post</p>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
    </div>
@endif


@endsection



@section ('footer')


@endsection



