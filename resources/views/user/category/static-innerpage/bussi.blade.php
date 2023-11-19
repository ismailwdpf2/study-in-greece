@extends('user.template')
@section('usercontent')

    <div class="cat-main">
        <h6 class="text-center text-white" id="sponsorby">SPONSORED BY</h6>

        <div id="inner-card" class=" d-flex justify-content-center ">
            <div class=" college-card  d-flex justify-content-center">
                <div><img class="p-3" src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt=""></div>
                <div class="p-3">
                    <h6><a href="#">City Unity College</a></h6>
                    <p>Bachelor, Master Degrees
                        and PhD</p>
                </div>
            </div>
            <div class=" college-card  d-flex justify-content-center">
                <div><img class="p-3" src="{{ asset('user/img/colleg_logo (2).png') }}" alt=""></div>
                <div class="p-3">
                    <h6><a href="#">DIE College</a></h6>
                    <p>Bachelor, Master Degrees
                        and PhD</p>
                </div>
            </div>
            <div class=" college-card  d-flex justify-content-center">
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
        <h3 class="inner-tittle"><img style="height: 35px; margin-bottom:3px"
                src="{{ asset('user/img/business-management-.svg') }}" alt="">&nbsp;&nbsp;Bachelor: Business &
            Management</h3>
    </div>
    
    <h6 class="post-count">24 Bachelor degrees found</h6>

    <div class="inner-lyout" >
        <div class=" row">
            <div class="cat-sidebar d-fluid px-4">

                <div class="nav-item dropdown">
                    <label for="bechelor"><b>Bachelors Catagories</b></label> <br>
                    <select id="bechelor" name="bechelor">
                        <option value="" class="selected">Business & Management</option>
                        <option value="">Marketing & Media</option>
                        <option value="">Law</option>
                        <option value="">Computer Science & IT</option>
                        <option value="">Art & Design</option>
                        <option value="">Engineering & Technology</option>
                        <option value="">Tourism</option>
                        <option value="">Shipping</option>
                        <option value="">Psychology</option>
                        <option value="">Education</option>
                        <option value="">Agri-food</option>
                        <option value="">Summer Programmes</option>
                    </select>
                </div>

                <div class="nav-item dropdown">
                    <label for="city"><b>City</b></label> <br>
                    <select id="city" name="city">
                        <option value="" class="selected">Select City</option>
                        <option value="">Athens</option>
                        <option value="">Thessaloniki</option>
                        <option value="">Piraeus</option>
                    </select>
                </div>

                <div class="nav-item dropdown">
                    <label for="type"><b>Type</b></label> <br>
                    <select id="type" name="type">
                        <option value="" class="selected">Select Type</option>
                        <option value="">Full-time</option>
                        <option value="">Per-time</option>
                    </select>
                </div>

                <div class="nav-item dropdown">
                    <label for="language"><b>Language</b></label> <br>
                    <select id="language" name="language">
                        <option value="" class="selected">Select Language</option>
                        <option value="bd">Bangla</option>
                        <option value="en">English</option>
                    </select>
                </div>
            </div>
            <div class="cat-postbar">
                <div class="cat-postarea my-3">
                    <div>
                        <h5><a class="post-tittle" href="#">BSc (Hons) in Business Administration (Accounting with
                                Finance pathway)</a></h5>
                        <div class="post-icon">
                            <a href="#"><i class="fa-solid fa-location-dot" style="color: #2078DB;"></i> Athens,
                                Thessaloniki</a>
                            <a href="#"> <i class="fa-regular fa-calendar" style="color: #2078DB;"></i> February 2024,
                                October 2024</a>
                            <a href="#"><i class="fa-regular fa-hourglass-half" style="color: #2078DB;"></i> 3
                                years</a>
                            <a href="#"><i class="fa-regular fa-id-card" style="color: #2078DB;"></i> Bachelor</a>
                            <a href="#"><i class="fa-regular fa-house" style="color: #2078DB;"></i> Full-time</a>
                            <a href="#"><i class="fa-solid fa-earth-americas" style="color: #2078DB;"></i> Greek,
                                English</a>
                        </div>
                    </div>

                    <div class="d-flex p-2">
                        <img class="p-3" src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt="">

                        <div class="descip"> Marketing is constantly developing. BA (Hons) Business (Marketing) helps participants comprehend the
                        fundamental principles of marketing so as to be able to adjust and keep up with the constant
                        changes. The business marketing </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="institute-end"><b>Institute:</b> <span>Mediterranean College</span></p>
                        <a href="{{ route('cat_detail') }}"><button class="more-btn">more</button></a>
                    </div>
                </div>
                <div class="cat-postarea my-3">
                    <div>
                        <h5><a class="post-tittle" href="#">BSc (Hons) in Business Administration (Accounting with
                                Finance pathway)</a></h5>
                        <div class="post-icon">
                            <a href="#"><i class="fa-solid fa-location-dot" style="color: #2078DB;"></i> Athens,
                                Thessaloniki</a>
                            <a href="#"> <i class="fa-regular fa-calendar" style="color: #2078DB;"></i> February
                                2024,
                                October 2024</a>
                            <a href="#"><i class="fa-regular fa-hourglass-half" style="color: #2078DB;"></i> 3
                                years</a>
                            <a href="#"><i class="fa-regular fa-id-card" style="color: #2078DB;"></i> Bachelor</a>
                            <a href="#"><i class="fa-regular fa-house" style="color: #2078DB;"></i> Full-time</a>
                            <a href="#"><i class="fa-solid fa-earth-americas" style="color: #2078DB;"></i> Greek,
                                English</a>
                        </div>
                    </div>

                    <div class="d-flex p-2">
                        <img class="p-3" src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt="">
                       <div class="descip">
                        Marketing is constantly developing. BA (Hons) Business (Marketing) helps participants comprehend the
                        fundamental principles of marketing so as to be able to adjust and keep up with the constant
                        changes. The business marketing p...
                    </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="institute-end"><b>Institute:</b> <span>Mediterranean College</span></p>
                        <a href="{{ route('cat_detail') }}"><button class="more-btn">more</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div aria-label="Page navigation">
        <ul class="pagination justify-content-end">
            <li class="page-item">
                <a class="page-link" href="#">Previous</a>
            </li>
            <li class="page-item mx-1"><a class="pg12" href="#">1</a></li>&nbsp;
            <li class="page-item mx-1"><a class="pg12" href="#">2</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </div>

    <div class="cat-footer">
        <p class="text-center text-white" id="sponsorby">SPONSORED BY</p>
        <div class="cat-footer-card">
            <div class=" college-card  d-flex justify-content-center">
                <div><img class="p-3" src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt=""></div>
                <div class="p-3">
                    <h6><a href="#">City Unity College</a></h6>
                    <p>Bachelor, Master Degrees
                        and PhD</p>
                </div>
            </div>
        </div>

    </div>
@endsection
