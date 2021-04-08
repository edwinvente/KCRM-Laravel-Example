<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('components.head')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/create/developer') }}">Crear registro</a>
                    <a href="">Lista de registros</a>
                </div>

                <div>
                    @foreach ($developers as $developer)
                        <span>{{ $developer->developer }}</span> <br>
                        <span>{{ $developer->age }}</span> <br>
                        <span>{{ $developer->skill }}</span> <br>
                        <a href="{{ route('update.developer', ['id' => $developer->id]) }}">>Editar</a> <br><hr/>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
