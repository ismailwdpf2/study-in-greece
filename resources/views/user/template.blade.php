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
    <title>move-abroad</title>
    <style>
        .home_header {
            height: 460px;
            width: 100%;
            background-image: url('{{ asset('user/img/BSC_homepage.jpg') }}');
        }
    </style>
</head>

<body>
    <header>

        <div class=" top-logo">
            <a href="{{ route('home') }}"><img id="logo" src="{{ asset('user/img/move-abroad.png') }}"
                    alt=""></a>
        </div>
        <div class="underline">
            <nav class="navbar navbar-expand-lg">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 container d-flex justify-content-between ">

                    <li class=" nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            BECHELOR
                        </a>
                        <ul class="dropdown-menu p-2" id="cat-manu">
                            <div class="row ">
                                <div class="col-6">
                                    <li><a class="dropdown-item dropdown-item2" href="{{ route('home') }}"><i
                                                class="fa-solid fa-house-chimney" style="color: #209DE8;"></i> Bachelor
                                            Degrees Home</a>
                                    </li>
                                    <li class="dropdown-item"><b> Bachelors Categories</b></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="{{ url('bussiness') }}">Business & Management</a>
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
                                <div class="col-6">
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
                        <ul class="dropdown-menu p-2" id="cat-manu">
                            <div class="row">
                                <div class="col-6">
                                    <li> <a class="dropdown-item dropdown-item2" href="{{ route('home') }}"> <i
                                                class="fa-solid fa-house-chimney" style="color: #209DE8;"></i>Masters
                                            Degrees Home</a>
                                    </li>
                                    <li class="dropdown-item"><b> Masters Categories</b></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="{{ url('bussiness') }}">Business &
                                            Management</a></li>
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
                                <div class="col-6">
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
                    <i class="fa-solid fa-magnifying-glass"
                        style=" color:white; background: #fb3807; border-radius:50%; padding:10px;  margin-left: 50px"></i>
                </ul>

            </nav>
        </div>
    </header>
    @yield('usercontent')

    <footer>
        <div class="row footer">

            <div class="col-sm-5 col-md-3"><img id="foot-logo" src="{{ asset('user/img/move-abroad.jpeg') }}"
                    alt="">
            </div>
            <div class="col-sm-5 col-md-3 mx-2">

                <ul>                
                    <li><h5>Move Abroad</h5></li> 
                    <li>Bachelors</li>
                    <li>Masters</li>
                    <li>Search for Degrees</li>
                    <li>Find Seminars in Greece</li>
                </ul>
            </div>
            <div class="col-sm-5 col-md-3">
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
            <div class="col-sm-5 col-md-2">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter mx-2"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
        </div>
        <div class="footer-end">
            <p>Praxis @ 2023 | Terms of Use | Privacy Policy</p>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('user/js/main.js') }}"></script>
</body>

</html>
