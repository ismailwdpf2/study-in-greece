@extends('user.template')
@section('usercontent')
<section>
    <div class="home_header">
      <h1 class="top d-flex justify-content-center">Move Abroad</h1>
      <p class="d-flex justify-content-center">Find and compare Bachelor degrees from Universities and Colleges in Greece
      </p>
      <div class="search d-flex justify-content-center">
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle px-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Select a Bachelors Category
          </button>
          <ul class="dropdown-menu">
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
            <li><a class="dropdown-item" href="#">More</a></li>
            <li><a class="dropdown-item" href="#">Institutes</a></li>
            <li><a class="dropdown-item" href="#">Contact</a></li>
          </ul>
        </div>

        <div class="dropdown mx-3 ">
          <button class="btn btn-light dropdown-toggle px-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Search in all cities  
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Athens</a></li>
            <li><a class="dropdown-item" href="#">Thessaloniki</a></li>
            <li><a class="dropdown-item" href="#">Piraeus</a></li>
          </ul>
        </div>
        <button class="btn btn-danger px-3">search</button>
      </div>
    </div>
  </section>

  <section class="container">
    <h3 class="bcat">Bachelor degrees Category</h3>
    <div class="row">
        <div class="card col-2 b" style="height: 178px;">
            <div class="homecat">
              <div class="thumbnail">
                <img class="cat-svg" src="{{ asset("user/img/business-management-.svg") }}" alt="">
                <p>Business & Management</p>
              </div>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/finance-book-svgrepo-com.svg") }}" alt="">
              <p>Finance</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/business-management-.svg") }}" alt="">
              <p>Business & Management</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/pie-chart-pie-1.svg") }}" alt="">
              <p>Marketing & Media</p>
             </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/book.png") }}" alt="">
              <p>Law</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/programmer-svgrepo-com.svg") }}" alt="">
              <p>Computer Science & IT</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/edit-cover-1481-svgrepo-com.svg") }}" alt="">
              <p>Art & Design</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/setting-line-svgrepo-com.svg") }}" alt="">
              <p>Engineering & Technology</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/landmark-svgrepo-com.svg") }}" alt="">
              <p>Tourism</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/ship-1-svgrepo-com.svg") }}" alt="">
              <p>Shipping</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/health-svgrepo-com.svg") }}" alt="">
              <p>Health</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/psychology-book-svgrepo-com.svg") }}" alt="">
              <p>Psychology</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/education-learning-16-svgrepo-com.svg") }}" alt="">
              <p>Education</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/agriculture-svgrepo-com.svg") }}" alt="">
              <p>Agri-food</p>
            </div>
        </div>
        <div class="card col-2 b" style="height: 178px;">
            <div class="thumbnail">
              <img class="cat-svg" src="{{ asset("user/img/sun-svgrepo-com.svg") }}" alt="">
              <p>Summer Programmes</p>
            </div>
        </div>
    </div>
  </section>

  <section>
    <h3 class="bcat">Bechelor degrees by City</h3>
    <div class="city d-flex justify-content-center">
      <div class="city-title">Athens</div>
         <img class="city-pic" src="{{ asset('user/img/campus (1).jpeg') }}" alt="">
        
         <img class="city-pic" src="{{ asset("user/img/campus (2).jpg") }}" alt="">
         <img class="city-pic" src="{{ asset("user/img/campus (5).jpg") }}" alt="">
    </div>
  </section>
  <section class="last-content  ">
    <br>
    <h1 class="d-flex justify-content-center">Find Seminars and Online Courses in Greece</h1>
    <br> <br>
    <p class="d-flex justify-content-center">Compare hundreds of training seminars from over 150 seminar providers in Greece.
    </p>
    <p class="d-flex justify-content-center">Find a seminar in your favorite City in Greece or book an Online Course.
    </p>
    <div class="d-flex justify-content-center"><button class="btn btn-danger">Learn more</button></div>
  </section>
@endsection