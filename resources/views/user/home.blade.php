@extends('user.template')
@section('usercontent')
    <style>
        .home_header {
            background-image: url('{{ asset('user/img/BSC_homepage.jpg') }}');
        }

        .last-content {
            background-image: url('{{ asset('user/img/endo_banner.jpg') }}');
        }

        .img-city1 {
            background-image: url('{{ asset('user/img/campus.jpg') }}');
        }

        .img-city2 {
            background-image: url('{{ asset('user/img/campus.jpeg') }}')
        }

        .img-city3 {
            background-image: url('{{ asset('user/img/campus1.jpg') }}')
        }
    </style>
    <div>
        <section>
            <div class="home_header">
                <h1 class="top d-flex justify-content-center">Move Abroad</h1>
                <p class="d-flex justify-content-center">Find and compare Bachelor degrees from Universities and Colleges in
                    Greece
                </p>
                <div class="search d-flex justify-content-center">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle px-2" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <h5 class="select-cat mx-3">Select a Bachelors Category</h5>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-search">
                            <li><a class="dropdown-item" href="#">Marketing & Media</a></li>
                            <li><a class="dropdown-item" href="#">Law</a></li>
                            <li><a class="dropdown-item" href="#">Computer Science & IT</a></li>
                            <li><a class="dropdown-item" href="#">Art & Design</a></li>
                            <li><a class="dropdown-item" href="#">Engineering & Technology</a></li>
                            <li><a class="dropdown-item" href="#">Tourism</a></li>
                            <li><a class="dropdown-item" href="#">Shipping</a></li>
                            <li><a class="dropdown-item" href="#">Psychology</a></li>
                            <li><a class="dropdown-item" href="#">Education</a></li>
                            <li><a class="dropdown-item" href="#">Agri-food</a></li>
                            <li><a class="dropdown-item" href="#">Summer Programmes</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mx-2 ">
                        <button class="btn btn-light dropdown-toggle px-2" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">

                            <h5 class="select-cat mx-5 ">
                                Search in all cities
                                </h5>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-search">
                            <li><a class="dropdown-item" href="#">Athens</a></li>
                            <li><a class="dropdown-item" href="#">Thessaloniki</a></li>
                            <li><a class="dropdown-item" href="#">Piraeus</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-danger  px-4">search</button>
                </div>
            </div>
        </section>
        <section class="">
            <h3 class="bcat">Bachelor degrees Category</h3>
            <div class="row homecat-icon">

                <div class=" thumbnail">
                    <a href="{{ url('bussiness') }}">
                        <div>
                            <div>
                                <img class="cat-svg" src="{{ asset('user/img/business-management-.svg') }}" alt="">
                                <p>Business & Management</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('finance') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/finance-book-svgrepo-com.svg') }}" alt="">
                            <p>Finance</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('bussiness') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/business-management-.svg') }}" alt="">
                            <p>Business & Management</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('marcket') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/pie-chart-pie-1.svg') }}" alt="">
                            <p>Marketing & Media</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('law') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/book.png') }}" alt="">
                            <p>Law</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('computer') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/programmer-svgrepo-com.svg') }}" alt="">
                            <p>Computer Science & IT</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('art') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/edit-cover-1481-svgrepo-com.svg') }}"
                                alt="{{ url('tourism') }}">
                            <p>Art & Design</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('engineer') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/setting-line-svgrepo-com.svg') }}" alt="">
                            <p>Engineering & Technology</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('tourism') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/landmark-svgrepo-com.svg') }}" alt="">
                            <p>Tourism</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('shipping') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/ship-1-svgrepo-com.svg') }}" alt="">
                            <p>Shipping</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/health-svgrepo-com.svg') }}" alt="">
                            <p>Health</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('psycho') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/psychology-book-svgrepo-com.svg') }}"
                                alt="{{ url('psycho') }}">
                            <p>Psychology</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('education') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/education-learning-16-svgrepo-com.svg') }}"
                                alt="">
                            <p>Education</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/agriculture-svgrepo-com.svg') }}"
                                alt="{{ url('agri') }}">
                            <p>Agri-food</p>
                        </div>
                    </a>
                </div>
                <div class=" thumbnail">
                    <a href="{{ url('summer') }}">
                        <div>
                            <img class="cat-svg" src="{{ asset('user/img/sun-svgrepo-com.svg') }}" alt="">
                            <p>Summer Programmes</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section>
            <h3 class="bcat2">Bechelor degrees by City</h3>
            <div class="row city d-flex justify-content-center">
                <div class="col-sm-10 col-md-3 img-city1">

                    <a href="#">
                        <h4 class="title">
                            Athens
                        </h4>
                    </a>
                </div>
                <div class="col-sm-10 col-md-3 mx-3 img-city2">

                    <a href="#">
                        <h4 class="title">
                            Thessaloniki
                        </h4>
                    </a>
                </div>
                <div class="col-sm-10 col-md-3 img-city3">

                    <a href="#">
                        <h4 class="title">
                            Piraeus
                        </h4>
                    </a>
                </div>
            </div>
        </section>
        <section class="last-content py-5  ">

            <h1 class="text-center">Find Seminars and Online Courses in Greece</h1>
            <br> <br>
            <p class="text-center">Compare hundreds of training seminars from over 150 seminar providers in
                Greece.
            </p>
            <p class="text-center">Find a seminar in your favorite City in Greece or book an Online Course.
            </p>
            <button class="last-content-btn">Learn more</button>
        </section>
    </div>
@endsection
