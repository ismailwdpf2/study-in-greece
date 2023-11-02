@extends('user.template')
@section('usercontent')
<section>
    <div class="home_header">
      <h1 class="top d-flex justify-content-center">Study in Greece</h1>
      <p class="d-flex justify-content-center">Find and compare Bachelor degrees from Universities and Colleges in Greece
      </p>
      <div class="search d-flex justify-content-center">
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle px-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Select a Bachelors Category
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>

        <div class="dropdown mx-3 ">
          <button class="btn btn-light dropdown-toggle px-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Search in all cities  
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
        <button class="btn btn-danger px-3">search</button>
      </div>
    </div>
  </section>

  <section>
    <h3 class="bcat">Bachelor degrees Category</h3>
    <div class="row">
        <div class=" col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"></div>
        </div>
        <div class=" col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"></div>
        </div>
        <div class=" col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"></div>
        </div>
        <div class=" col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"></div>
        </div>
        <div class=" col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"></div>
        </div>
        <div class=" col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"></div>
        </div>
        <div class=" col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"></div>
        </div>
        <div class=" col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"></div>
        </div>
    </div>
  </section>

  <section>
    <h3 class="bcat">Bechelor degrees by City</h3>
    <div class="d-flex justify-content-center">
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