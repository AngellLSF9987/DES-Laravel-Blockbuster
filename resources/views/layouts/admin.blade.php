<!doctype html>
<html lang="es-Es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ asset('img\background2.ico') }}" /> <!-- Icono personalizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Admin - The BlockBuster')</title>
</head>

<body>
    <div class="header">
        <div class="row g-0">
            <!-- sidebar -->
            <div class="p-3 col fixed text-white bg-dark">
                <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                    <span class="fs-4">Admin Home Panel</span>
                </a>
                <hr />
                <ul>
                    <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Actors && Actresses -</a></li>
                    <!--<li>
                        <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">- Go back to the home page -</a>
                    </li>-->
                </ul>
            </div>
            <!-- sidebar -->
            <div class="col content-grey">
                <nav class="p-3 shadow text-end">
                    <span class="profile-font">Admin</span>
                    <img class="img-profile rounded-circle" src="{{ asset('/img/user.png') }}">
                </nav>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="g-0 m-5">
            @yield('content')
            <hr>
            <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the home page</a>
        </div>
    </div>


    <!-- footer -->
    <div class="footer">
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    <b>Cinéfilos por un tubo</b><br />
                    Copyright - Angel Luis Saorin Faura
                    </a>
                </small>
            </div>
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
