<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.', 'Monitoring Covid19') }}</title>

    <!-- Scripts -->

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light " style="background: linear-gradient(to right, #0062E6, #33AEFF);">
        <a class="navbar-brand font-weight-light text-white" href="#">Lukaririnki Site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-right mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link disabled font-weight-light text-white" href="#" tabindex="-1" aria-disabled="true">Covid-19 Global</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-light text-white" href="https://kawalcorona.com/api/" tabindex="-1" aria-disabled="false">API For Developers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled font-weight-light text-white" href="#" tabindex="-1" aria-disabled="true">About Me</a>
                </li>
            </ul>
        </div>
    </nav>

        <br>    <h2 align="center">Report Covid-19</h2>
        <br>    <p align="center">Indonesian Live Data</p>
        <br>

        {{-- card --}}

        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                    <div class="card border-warning">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL POSITIF </h5>
                            <p class="card-text" value=""> {{ $data1 [0]['positif'] }} Orang </p>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-sm-4">
                    <div class="card border-success">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL SEMBUH</h5>
                            <p class="card-text">{{ $data1 [0]['sembuh'] }} Orang </p>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-sm-4">
                    <div class="card border-danger">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL MENINGGAL</h5>
                            <p class="card-text">{{ $data1 [0]['meninggal'] }} Orang </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- table --}}
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card" style="max-width: 100rem;">
                            <div class="card-header bg-transparent" style="align: center"><b>Data Kasus Covid-19 di Indonesia Berdasarkan Provinsi</b></div>
                                <div class="card-body">
                                    <div class="table-scroll scroll">
                                        <div class="table-striped" style="margin: 1% ; padding: 1% ; position: relative; height: 550px;">
                                            <table class="table mb-0">

                                                <thead align="left">
                                                    <tr>
                                                        <th>Nomor</th>
                                                        <th>Provinsi</th>
                                                        <th>Positif</th>
                                                        <th>Sembuh</th>
                                                        <th>Meninggal</th>
                                                    </tr>
                                                </thead>

                                                <tbody align="left">
                                                    @php
                                                        $nomor = 1;
                                                    @endphp
                                                            @foreach($data as $key => $data)

                                                                <tr>
                                                                    <td>{{ $nomor }}</td>
                                                                    <td>{{ $data ['attributes']['Provinsi'] }}</td>
                                                                    <td>{{ $data ['attributes']['Kasus_Posi'] }}</td>
                                                                    <td>{{ $data ['attributes']['Kasus_Semb'] }}</td>
                                                                    <td>{{ $data ['attributes']['Kasus_Meni'] }}</td>
                                                                </tr>

                                                    @php
                                                        $nomor++;
                                                    @endphp
                                                            @endforeach
                                                </tbody>


                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- footer --}}
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="background: linear-gradient(to right, #0062E6, #33AEFF);">
            <div class="container text-center">
              <small>Copyright &copy; Nur Fahmi Azis</small>
              <br>
              <small>Data From <a class="text-white" href="https://kawalcorona.com/">https://kawalcorona.com/</a></small>
            </div>
        </footer>

    {{-- jquery --}}
    <script type="text/javascript" src="{{ asset('jquery/jquery.js') }}"></script>
    {{-- JS --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
