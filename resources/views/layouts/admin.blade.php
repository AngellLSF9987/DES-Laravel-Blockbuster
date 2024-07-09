<!doctype html>
<html lang="es-Es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ asset('img\background2.ico') }}" /> <!-- Icono personalizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Admin - The BlockBuster')</title>
</head>

<body>

    <!-- header -->

    <header class="masthead bg-dark text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('title', 'Admin - THE BLOCKBUSTER')</h2>
        </div>
    </header>

    <!-- nav -->

    <nav class="navbar navbar-expand-lg navbar-danger bg-danger py-8">
        <div class="container-fluid">
            <a class="navbar-brand text-white text-decoration-none" href="{{ route('admin.home.index') }}"><span
                    class="fs-4">Admin Home Panel</span></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('admin.home.index') }}" class="nav-link active text-white">- Actors &&
                            Actresses
                            -</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex mb-3">
                <input type="search" class="form-control me-2" name="search" id="" aria-label="Search" placeholder="Search..." />
                <button class="btn btn-success" type="submit">Search</button>
            </div>
            <div class="col-0 content-dark" id="logoAdmin">
                <nav class="p-3 shadow-off text-end">
                    <span class="profile-font">Admin</span>
                    <img class="img-profile rounded-circle" src="{{ asset('/img/user.png') }}">
                </nav>
            </div>
        </div>
    </nav>
    <div class="main">
        <div class="g-0 m-5">
            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                @yield('content')
            </div>
            <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the home page</a>
        </div>
    </div>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>