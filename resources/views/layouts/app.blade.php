<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="csrf_token()">
    <title>Cộng đồng sáo trúc Việt Nam</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    {{-- Navbar --}}
    @include('layouts.navbar')
    <!-- End NavBar -->

    <!-- Main content -->
    <div id="main-content" class="container-fluid mt-5 pt-5">
            <div class="row">
                <!-- Sidebar left -->
                @include('layouts.sidebar-left')
                <!-- End sidebar left -->
                
                <!-- Content -->
                @yield('content')
                <!-- End Content -->

                <!-- Sidebar right -->
            </div>
            <!-- End row -->
    </div>
    <!-- End Main Content -->
    <!-- Footer  -->
    @include('layouts.footer')
    <!-- End footer -->







    <!-- Link script -->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>