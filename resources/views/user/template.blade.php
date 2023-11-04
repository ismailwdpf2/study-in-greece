<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <title>study-in-greece</title>
    <style>
        .home_header {
            height: 400px;
            width: 100%;
            background-image: url('{{ asset('user/img/homebanner.jpg') }}');
        }
        .last-content{
          height: 300px;
            width: 100%;
          background-image: url('{{ asset('user/img/homebg.jpg') }}');
        }
    </style>
</head>

<body>
    <header>

        <div class="container top-logo m-4">
            <a href="{{ route('home') }}"><img src="{{ asset('user/img/Logo_Study_In_Greece.png') }}"
                    alt=""></a>
        </div>
        
        <nav class="navbar navbar-expand-lg ">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                BECHELOR
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                MASTERS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">INTERNATIONAL STUDENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">LIVING IN GREECE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">CONTACT</a>
                        </li>

                    </ul>
                    <i class="fa-solid fa-magnifying-glass"
                        style=" color:white; background: #fb3807; border-radius:50%; padding:10px; margin-right: 50px"></i>
                </div>
            </div>
        </nav>

    </header>
    @yield('usercontent')

    <footer>
        <div class="row footer p-3">

            <div class="col-sm-6 col-md-3"><img src="{{ asset('user/img/Logo_Study_In_Greece_white.png') }}"
                    alt=""></div>
            <div class="col-sm-6 col-md-3">

                <ul>
                    <li>
                        <h5>Study In Greece</h5>
                    </li>
                    <li>Bachelors</li>
                    <li>Masters</li>
                    <li>Search for Degrees</li>
                    <li>Find Seminars in Greece</li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <ul>
                    <li>
                        <h5>Useful Info</h5>
                    </li>
                    <li>Living in Greece</li>
                    <li>International Students</li>
                    <li>Jobs in Greece</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter mx-2"></i>
              <i class="fa-brands fa-linkedin"></i>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('user/js/main.js') }}"></script>
</body>

</html>
