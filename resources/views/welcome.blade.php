<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="csrf_token()">
    <title>Cộng đồng sáo trúc Việt Nam</title>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}""">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Cộng đồng sáo</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
           
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-microphone" aria-hidden="true"></i>Cảm âm hay</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>Beat sáo</a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Action</a>
                       
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-question" aria-hidden="true"></i>Hỏi đáp sáo trúc</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="">
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm cảm âm" aria-label="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        </nav>
    </div>
    <h3>OK men</h3>


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>