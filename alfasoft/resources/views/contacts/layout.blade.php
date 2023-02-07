<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <title>@yield('title')</title>
</head>

<body>

    <header>

        <nav class="menu container d-flex flex-align-items-center flex-space-between">
            <div>
                <ul class="menu-list d-flex">
                    <li><a href="{{ url('/contacts/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> New Contact
                        </a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="btn btn-success btn-sm">My contacts</a>
                    </li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="btn btn-success btn-sm"
                                onclick="event.preventDefault();
                        this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a href="/login" class="btn btn-success btn-sm">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="btn btn-success btn-sm">Register</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>

    </header>
    <main>
        <div class="container">
            <div class="row">
                @if (session('msg'))
                    <p class="msg"> {{ session('msg') }} </p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>



    <footer>
        <p>Contacto - 912808989</p>
        <p>Alfasoft &copy; 2023</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
