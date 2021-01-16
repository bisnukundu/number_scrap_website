<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
    <title> {{$data['title'] ?? "🥇 PREFIJOS POR PROVINCIAS DE ESPAÑA ✔️【en España】"}}</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-light bg-transparent">
                    <div class="container-fluid  justify-content-center justify-content-md-between">
                        <a href="/" class="navbar-brand"><img width="100px" src="{{ asset('img/telefonos.png') }}"
                                alt="logo" class="img-fluid"></a>
                        <form method="GET" action="/" class="d-flex">
                            <input name="search" class="form-control me-2" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    @yield('body')
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>