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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/respons.css') }}">
    <link rel="stylesheet" href="{{ asset('user/font/fl-bigmug-line.woff') }}">
    <link rel="stylesheet" href="{{ asset('user/font/fontawesome-webfont.woff2') }}">
    <link rel="stylesheet" href="{{ asset('user/font/Lato-Regular.woff2') }}">
    <title>move-abroad</title>

</head>
  
<body>
    <div class="container-fluid">
        <div class="top-logo">
            {{-- @if(isset($logo))
            <a href="{{ route('home') }}"><img id="logo" src="{{asset('storage/'.$logo->logo)}}" alt=""></a>
            @endif --}}

            <a href="{{ route('home') }}"><img id="logo" src="{{asset('user/img/move-abroad.png') }}"
        alt=""></a>

 {{-- <a href="{{ route('home') }}"><img src="{{ asset('storage/' . $logo->logo) }}" alt=""></a> --}}


        </div>
        <div class="underline">

            <nav class="navbar navbar-expand-lg ">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <li class=" nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            BACHELOR
                        </a>
                        <ul class="dropdown-menu " class="cat-manu">
                            <div class="row ">
                                <div class="col-sm-10 col-md-6 ">
                                    <li><a class="dropdown-item dropdown-item2" href="{{ route('home') }}"><i
                                                class="fa-solid fa-house-chimney" style="color: #209DE8;"></i> Bachelor
                                            Degrees Home</a>
                                    </li>
                                    <li class="dropdown-item"><b> Bachelors Categories</b></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="fblack dropdown-item" href="{{ url('bussiness') }}">Business &
                                            Management</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('marcket') }}">Marketing & Media</a></li>
                                    <li><a class="dropdown-item" href="{{ url('law') }}">Law</a></li>
                                    <li><a class="dropdown-item" href="{{ url('computer') }}">Computer Science & IT</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('art') }}">Art & Design</a></li>
                                    <li><a class="dropdown-item" href="{{ url('engineer') }}">Engineering &
                                            Technology</a></li>
                                    <li><a class="dropdown-item" href="{{ url('tourism') }}">Tourism</a></li>
                                    <li><a class="dropdown-item" href="{{ url('shipping') }}">Shipping</a></li>
                                </div>
                                <div class="col-sm-10 col-md-6 ">
                                    <li><a class="dropdown-item" href="{{ url('psycho') }}">Psychology</a></li>
                                    <li><a class="dropdown-item" href="{{ url('education') }}">Education</a></li>
                                    <li><a class="dropdown-item" href="{{ url('agri') }}">Agri-food</a></li>
                                    <li><a class="dropdown-item" href="{{ url('summer') }}">Summer Programmes</a></li>
                                    <span class="px-3"><b>More</b></span>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="{{ route('institute') }}">Institutes</a></li>
                                    <li><a class="dropdown-item" href="{{ route('contact') }}">Contact</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>

                    <li class=" nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            MASTERS
                        </a>
                        <ul class="container dropdown-menu " class="cat-manu">
                            <div class="row">
                                <div class="col-sm-10 col-md-6 ">
                                    <li> <a class="dropdown-item dropdown-item2" href="{{ route('home') }}"> <i
                                                class="fa-solid fa-house-chimney" style="color: #209DE8;"></i>Masters
                                            Degrees Home</a>
                                    </li>
                                    <li class="dropdown-item"><b> Masters Categories</b></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="{{ url('bussiness') }}">Business &
                                            Management</a></li>
                                    <li><a class="dropdown-item" href="{{ url('marcket') }}">Marketing & Media</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('law') }}">Law</a></li>
                                    <li><a class="dropdown-item" href="{{ url('computer') }}">Computer Science &
                                            IT</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('art') }}">Art & Design</a></li>
                                    <li><a class="dropdown-item" href="{{ url('engineer') }}">Engineering &
                                            Technology</a></li>
                                    <li><a class="dropdown-item" href="{{ url('tourism') }}">Tourism</a></li>
                                    <li><a class="dropdown-item" href="{{ url('shipping') }}">Shipping</a></li>

                                </div>
                                <div class="col-sm-10 col-md-6 ">
                                    <li><a class="dropdown-item" href="{{ url('psycho') }}">Psychology</a></li>
                                    <li><a class="dropdown-item" href="{{ url('education') }}">Education</a></li>
                                    <li><a class="dropdown-item" href="{{ url('agri') }}">Agri-food</a></li>
                                    <li><a class="dropdown-item" href="{{ url('summer') }}">Summer Programmes</a>
                                    </li>
                                    <span class="px-3"><b>More</b></span>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="{{ route('institute') }}">Institutes</a></li>
                                    <li><a class="dropdown-item" href="{{ route('contact') }}">Contact</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('intstudent') }}" class="nav-link ">INTERNATIONAL STUDENTS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('living') }}" class="nav-link ">LIVING IN GREECE</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">CONTACT</a>
                    </li>

                    <li class="nav-item">
                        <i class="fa-solid fa-magnifying-glass"
                            style=" color:white; background: #fb3807; border-radius:50%; padding:12px;  margin-left: 50px"></i>
                    </li>

                </ul>
            </nav>
        </div>
    </div>

    @yield('usercontent')

    <footer>
        <div class="row footer">
            <div class="col-sm-5 col-md-3"><img id="foot-logo" src="{{ asset('user/img/move-abroad.jpeg') }}"
                    alt="">
            </div>
            <div class="col-sm-5 col-md-3 mx-2">
                <ul class="foot-link">
                    <li>
                        <h6>Move Abroad</h6>
                    </li>
                    <li><a class="foot-menu" href="{{ route('home') }}">Bachelors</a></li>
                    <li><a class="foot-menu" href="{{ route('home') }}">Masters</a></li>
                    <li><a class="foot-menu" href="#">Search for Degrees</a></li>
                    <li><a class="foot-menu" href="#">Find Seminars in Greece</a></li>
                </ul>
            </div>
            <div class="col-sm-5 col-md-3">
                <ul class="foot-link">
                    <li>
                        <h6>Useful Info</h6>
                    </li>
                    <li><a class="foot-menu" href="{{ route('living') }}">Living in Greece</a></li>
                    <li><a class="foot-menu" href="{{ route('intstudent') }}">International Students</a></li>
                    <li><a class="foot-menu" href="#">Jobs in Greece</a></li>
                    <li><a class="foot-menu" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="footicon col-sm-5 col-md-2">
                <a href="#"><i class="fa-brands fa-facebook ft-icon"></i></a>
                <a href="#"><i class="fa-brands fa-twitter ft-icon mx-2"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin ft-icon"></i></a>
            </div>
        </div>
        <div class="footer-end">
            <p>Move Abroad @ 2023 | Terms of Use | Privacy Policy</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('user/js/main.js') }}"></script>
</body>

</html>
