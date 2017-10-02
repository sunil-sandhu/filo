    <!-- form validation -->
    @if (count($errors))      <!-- if there are any errors -->
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach    <!-- Spit out the errors in the browser -->
            </ul>

        </div>
    @endif