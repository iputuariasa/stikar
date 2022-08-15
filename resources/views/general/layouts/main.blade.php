@if (auth()->user()->role == 'Siswa')
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stikar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://kit.fontawesome.com/525a9b21ee.js" crossorigin="anonymous"></script>
    </head>
    <body>

        @include('layouts.navbar')

        @yield('container')

        @include('layouts.footer')

        <!-- Modal -->
            <!-- TKJ -->
            <div class="modal fade" id="tkj" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tkjLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="tkjLabel">Teknik Komputer dan Jaringan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RPL -->
            <div class="modal fade" id="rpl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="rplLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="rplLabel">Rekayasa Perangkat Lunak</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MM -->
            <div class="modal fade" id="mm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mmLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="mmLabel">Multimedia</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AK -->
            <div class="modal fade" id="ak" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="akLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="akLabel">Akuntansi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AP -->
            <div class="modal fade" id="ap" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="apLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="apLabel">Akomodasi Perhotelan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
    </html>
@else
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{$title}}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        @if (auth()->user()->role == 'Operator')
            <link rel="stylesheet" href="/css/operator/style.css">
            <link rel="stylesheet" href="/css/operator/dashboard.css">
        @else
            <link rel="stylesheet" href="/css/admin/style.css">
            <link rel="stylesheet" href="/css/admin/dashboard.css">
        @endif
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
@endif



