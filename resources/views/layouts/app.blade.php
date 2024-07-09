<!doctype html>
<html lang="es-ES">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ asset('img\background2.ico') }}" /> <!-- Icono personalizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'THE BLOCKBUSTER')</title>
</head>

<body>

    <!-- header -->

    <header class="masthead bg-dark text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('title', 'Admin - THE BLOCKBUSTER')</h2>
        </div>
    </header>

    <!-- nav -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger py-4">
        <div class="container">
            <a class="navbar-brand" href="{{route('home.index')}}">@yield('subtitle','El Mundo del Cine hasta tú quieras')</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{route('home.index')}}">
                        <h4>Home</h4>
                    </a>
                    <a class="nav-link active" href="{{route('actors.index')}}">
                        <h4>Celebrities</h4>
                    </a>
                    <a class="nav-link active" href="{{route('admin.home.index')}}">
                        <h4>Admin - Panel</h4>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    <!-- footer -->
    <div class="footer">
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    <b>Cinéfilos por un tubo</b><br />
                    Copyright - @yield('author', 'Developed by: Angel Luis Saorin Faura')
                    </a>
                </small>
            </div>
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
