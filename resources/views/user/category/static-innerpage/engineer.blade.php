@extends('user.template')
@section('usercontent')
<style>
   select{
    width: 100%;
    margin-top: 10px
   }
   span{
    color: #2078DB;
    margin-right: 16px;
   }
</style>

    <div class="cat-main">
        <p class="text-center text-white py-5 h6">SPONSORED BY</p>

        <div class="container d-flex justify-content-center ">
            <div class=" college-card container d-flex justify-content-center">
                <div><img class="p-3" src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt=""></div>
                <div class="p-3">
                    <h6><a href="#">City Unity College</a></h6>
                    <p>Bachelor, Master Degrees
                        and PhD</p>
                </div>
            </div>
            <div class=" college-card container d-flex justify-content-center">
                <div><img class="p-3" src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt=""></div>
                <div class="p-3">
                    <h6><a href="#">City Unity College</a></h6>
                    <p>Bachelor, Master Degrees
                        and PhD</p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h3 class="text-center py-2"> <img style="height: 40px" src="{{ asset("user/img/business-management-.svg") }}" alt="">: Engineering & Technology</h3>
    </div>

    <div class="container">
        <div class=" row">
            <div class="col-3 p-4 cat-sidebar d-fluid my-3 ">

                <div class="nav-item dropdown my-3">
                    <label for="bechelor"><b>BECHELOR</b></label> <br>
                    <select id="bechelor" name="bechelor">
                      <option value="" selected><a class="dropdown-item" href="{{route('cat_main')}}">Business & Management</a></option>
                      <option value=""><a class="dropdown-item" href="#">Marketing & Media</a></option>
                      <option value=""><a class="dropdown-item" href="#">Law</a></option>
                      <option value=""><a class="dropdown-item" href="#">Computer Science & IT</a></option>
                      <option value=""><a class="dropdown-item" href="#">Art & Design</a></option>
                      <option value=""><a class="dropdown-item" href="#">Engineering & Technology</a></option>
                      <option value=""><a class="dropdown-item" href="#">Tourism</a></option>
                      <option value=""><a class="dropdown-item" href="#">Shipping</a></option>
                      <option value=""><a class="dropdown-item" href="#">Psychology</a></option>
                      <option value=""><a class="dropdown-item" href="#">Education</a></option>
                      <option value=""><a class="dropdown-item" href="#">Agri-food</a></option>
                      <option value=""><a class="dropdown-item" href="#">Summer Programmes</a></option>
                      <option value=""><a class="dropdown-item" href="#">More</a></option>
                      <option value=""><a class="dropdown-item" href="#">Institutes</a></option>
                      <option value=""><a class="dropdown-item" href="#">Contact</a></option>
                    </select>
                </div>

                <div class="nav-item dropdown my-3">
                    <label for="city"><b>CITY</b></label> <br>
                    <select id="city" name="city">
                        <option value="" selected>Select City</option>
                      <option value="">Athens</option>
                      <option value="">Thessaloniki</option>
                      <option value="">Piraeus</option>
                    </select>
                </div>

                <div class="nav-item dropdown my-3">
                    <label for="type"><b>TYPE</b></label> <br>
                    <select id="type" name="type">
                        <option value="" selected>Select Type</option>
                      <option value="">Full-time</option>
                      <option value="">Per-time</option>
                    </select>
                </div>

                <div class="nav-item dropdown my-3">
                    <label for="language"><b>Language</b></label> <br>
                    <select id="language" name="language">
                        <option value="" selected>Select Language</option>
                      <option value="bd">Bangla</option>
                      <option value="en">English</option>
                    </select>
                </div>              
            </div>



            <div class="col-9">
                <div class=" cat-postarea my-3 p-3">
                    <div>
                        <h5>Engineering & Technology</h5>
                        <span><i class="fa-solid fa-location-dot" style="color: #2078DB;"></i> Athens, Thessaloniki</span>
                        <span> <i class="fa-regular fa-calendar" style="color: #2078DB;"></i> February 2024, October 2024</span>
                        <span> <i class="fa-regular fa-hourglass-half" style="color: #2078DB;"></i> 3 years</span>
                        <span> <i class="fa-regular fa-id-card" style="color: #2078DB;"></i> Bachelor</span>
                        <span> <i class="fa-regular fa-house" style="color: #2078DB;"></i> Full-time</span>
                        <span><i class="fa-solid fa-earth-americas" style="color: #2078DB;"></i> Greek, English</span>
                    </div>

                    <div class="d-flex p-2">
                        <img class="p-3" src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt="">

                        Marketing is constantly developing. BA (Hons) Business (Marketing) helps participants comprehend the fundamental principles of marketing so as to be able to adjust and keep up with the constant changes. The business marketing p...
                    </div>
                    <div class="d-flex justify-content-between">
                    <p> Institute: <span>Mediterranean College</span></p>
                    <a href="{{route("cat_detail")}}"><button class="btn btn-danger px-4">more</button></a>

                    </div>
                 </div>
                <div class=" cat-postarea my-3 p-3">
                    <div>
                        <h5>Engineering & Technology</h5>
                        <span><i class="fa-solid fa-location-dot" style="color: #2078DB;"></i> Athens, Thessaloniki</span>
                        <span> <i class="fa-regular fa-calendar" style="color: #2078DB;"></i> February 2024, October 2024</span>
                        <span> <i class="fa-regular fa-hourglass-half" style="color: #2078DB;"></i> 3 years</span>
                        <span> <i class="fa-regular fa-id-card" style="color: #2078DB;"></i> Bachelor</span>
                        <span> <i class="fa-regular fa-house" style="color: #2078DB;"></i> Full-time</span>
                        <span><i class="fa-solid fa-earth-americas" style="color: #2078DB;"></i> Greek, English</span>
                    </div>

                    <div class="d-flex p-2">
                        <img class="p-3" src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt="">

                        Marketing is constantly developing. BA (Hons) Business (Marketing) helps participants comprehend the fundamental principles of marketing so as to be able to adjust and keep up with the constant changes. The business marketing p...
                    </div>
                    <div class="d-flex justify-content-between">
                    <p> Institute: <span>Mediterranean College</span></p>
                    <a href="{{route("cat_detail")}}"><button class="btn btn-danger px-4">more</button></a>

                    </div>
                 </div>
                <div class=" cat-postarea my-3 p-3">
                    <div>
                        <h5>Engineering & Technology</h5>
                        <span><i class="fa-solid fa-location-dot" style="color: #2078DB;"></i> Athens, Thessaloniki</span>
                        <span> <i class="fa-regular fa-calendar" style="color: #2078DB;"></i> February 2024, October 2024</span>
                        <span> <i class="fa-regular fa-hourglass-half" style="color: #2078DB;"></i> 3 years</span>
                        <span> <i class="fa-regular fa-id-card" style="color: #2078DB;"></i> Bachelor</span>
                        <span> <i class="fa-regular fa-house" style="color: #2078DB;"></i> Full-time</span>
                        <span><i class="fa-solid fa-earth-americas" style="color: #2078DB;"></i> Greek, English</span>
                    </div>

                    <div class="d-flex p-2">
                        <img class="p-3" src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt="">

                        Marketing is constantly developing. BA (Hons) Business (Marketing) helps participants comprehend the fundamental principles of marketing so as to be able to adjust and keep up with the constant changes. The business marketing p...
                    </div>
                    <div class="d-flex justify-content-between">
                    <p> Institute: <span>Mediterranean College</span></p>
                    <a href="{{route("cat_detail")}}"><button class="btn btn-danger px-4">more</button></a>
                    </div>
                 </div>
                
            </div>
            
        </div>
    </div>

@endsection
