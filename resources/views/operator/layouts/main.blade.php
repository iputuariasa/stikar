<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/operator/style.css">
    <link rel="stylesheet" href="/css/operator/dashboard.css">
    <script src="https://kit.fontawesome.com/525a9b21ee.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        @if (auth()->user()->role == 'Operator')
            @include('operator.layouts.side-menu')
        @else
            @include('admin.layouts.side-menu')
        @endif
        
        <!-- Main -->
        <div class="main px-3">
            @if (auth()->user()->role == 'Operator')
                @include('operator.layouts.nav')
            @else
                @include('admin.layouts.nav')
            @endif

            @yield('container')

            {{-- @include('layouts.footer') --}}
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="/js/admin.js"></script>
    <script src="/js/previewImage.js"></script>
</body>
</html>