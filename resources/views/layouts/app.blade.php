<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">


                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
            
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">

                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" <p class="text-left">Golongan</p>

                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/golongan/create') }}">Tambah Golongan</a></li>
                     <li><a href="{{ url('/golongan')}}">Index Golongan</a></li></ul>

                <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" <p class="text-left">Jabatan</p>

                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/jabatan/create') }}">Tambah Jabatan</a></li>
                     <li><a href="{{ url('/jabatan')}}">Index Jabatan</a></li></ul>

                     
                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" <p class="text-left">Pegawai</p>

                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/pegawai/create') }}">Tambah Pegawai</a></li>
                     <li><a href="{{ url('/pegawai')}}">Index Pegawai</a></li></ul>
                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" <p class="text-left">Kategori Lembur</p>

                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/kategori_lembur/create') }}">Tambah Kategori Lembur</a></li>
                     <li><a href="{{ url('/kategori_lembur')}}">Index Kategori Lembur</a></li></ul>

                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" <p class="text-left">Lembur Pegawai</p>

                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/lembur_pegawai/create') }}">Tambah Lembur Pegawai</a></li>
                     <li><a href="{{ url('/lembur_pegawai')}}">Index Lembur Pegawai </a></li></ul>
                    
                     <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" <p class="text-left">Tunjangan</p>


                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/tunjangan/create') }}">Tambah tunjangan</a></li>
                     <li><a href="{{ url('/tunjangan')}}">Index tunjangan</a></li></ul>

                     <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" <p class="text-left">Tunjangan Pegawai</p>

                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/tunjangan_pegawai/create') }}">Tambah Tunjangan Pegawai  </a></li>
                     <li><a href="{{ url('/tunjangan_pegawai')}}">Index Tunjangan Pegawai   </a></li></ul>

                  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" <p class="text-left">Penggajian</p>

                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/Pengajian/create') }}">Tambah Pengajian</a></li>
                     <li><a href="{{ url('/Penggajian')}}">Index Penggajian</a></li></ul>


  
                    </ul>
        
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
