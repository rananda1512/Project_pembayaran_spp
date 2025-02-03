<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/template.css')}}">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar shadow">
        <div class="navbar-content ml-auto" id="navbarNav">
        </div>
        <div class="ml-1 nama-user">RIZKI ANANDA</div>
        <div class="icon ml-4 mt-1 pr-2">
            <h5>
                <a href="" style="text-decoration: none; color: white;"><i class="far fa-envelope" title="Mail"></i></a>
                <i class="fas fa-cog ml-1" title=""></i>
                <i class="fas fa-power-off ml-1"></i>
            </h5>
        </div>
    </nav>


    <!-- breadcrumb -->
    <div class="breadcrumb breadcrumb-master ml-auto">
        <div class="container">
            <div class="breadcrumb-header">
                <p>Home</p>
            </div>
            <div class="breadcrumb-nav">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- sidebar and content -->
    <div class="row">
        <div class="col-md-2">
            <div class="wrapper shadow">
                <nav id="sidebar">
                    <div class="sidebar-header shadow">
                        <h1>SPP</h1>
                    </div>
                    <div class="sidebar-body">
                        <ul class="">
                            <div class="sidebar-list active ml-5">
                                <li type="none"><span><i class="fas fa-home"></i></span><a href="" class="ml-2">Home</a>
                                </li>
                            </div>
                            <div class="sidebar-list active ml-5">
                                <li type="none"><span><i class="fas fa-home"></i><a href="#pageSubmenu"
                                            data-toggle="collapse" aria-expanded="false"
                                            class="drowdown-toggle ml-2">Data</a></span>
                                    <ul class="collapse list-unstyled ml-5" id="pageSubmenu">
                                        <li class="">
                                            <a href="#">siswa</a>
                                        </li>
                                        <li>
                                            <a href="#">sekolah</a>
                                        </li>
                                        <li>
                                            <a href="#">kelas</a>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                            <div class="sidebar-list active ml-5">
                                <li type="none"><span><i class="fas fa-home"></i></span><a href=""
                                        class="ml-2">Profile</a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="col-md-10" style="">
         {{-- content --}}
                @yield('content')

            </div>
        </div>
    </div>

    </div>
    <footer class="foote ml-6">
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>