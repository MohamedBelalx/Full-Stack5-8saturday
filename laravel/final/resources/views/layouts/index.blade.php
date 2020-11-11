<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

        </div>
    </nav>

    <header class='pt-3'>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <h1>Welcome To Our Shop, Here You Can Find All You Need</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit voluptas ducimus nisi qui incidunt nemo voluptatem voluptates velit recusandae corrupti, hic eos quam eum? Cum nihil ducimus consequuntur aperiam laudantium?</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                    <img class='img-fluid' src="{{asset('img/index/watch.png')}}" alt="">
                </div>
            </div>
        </div>
    </header>



    @yield('content')








    <footer>
        <div class="container h-100">
            <div class="row h-100 align-items-center text-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-twitch"></i>
                    <i class="fab fa-youtube"></i>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <p>Copy Rights &copy; Rec.. To FullStack</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
</body>
</html>