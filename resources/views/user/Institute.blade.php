@extends('user.template')
@section('usercontent')
    <style>
        select {
            width: 250px;
            height: 30px;
            background-color: #1F75D6;
            color: white;
        }

        option {
            background-color: #ffffff;
            color: black;
            font-size: 18px;
            overflow: scroll;
        }

        .instute-card {
            height: 100px;
            width: 390px;
            margin: 6px;
            border: 1px solid #D2D6DF;
            border-radius: 5px;
        }
    </style>
    <div class="row mx-4 my-5">
        <div class="institute-top d-flex  justify-content-between my-1 ">
            <h4> Institute</h4>
            <div class="search-city">
                <select name="city" id="city">
                    <option value="" selected>search by city</option>
                    <option value="">Dhaka</option>
                    <option value="">Tangail</option>
                    <option value="">Khulna</option>
                    <option value="">Rajsahi</option>
                    <option value="">Kumilla</option>
                    <option value="">Nator</option>
                    <option value="">Sylhetr</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="instute-card">
                <div class="p-3 d-flex justify-content-between">
                    <img src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt="">
                    <div>
                        <p><a href="#">HAEC university</a> <br>
                            ashadh, Grecce
                        </p>
                    </div>
                </div>
            </div>
            <div class="instute-card">
                <div class="p-3 d-flex justify-content-between">
                    <img src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt="">
                    <div>
                        <p><a href="#">HAEC university</a> <br>
                            ashadh, Grecce
                        </p>
                    </div>
                </div>
            </div>
            <div class="instute-card">
                <div class="p-3 d-flex justify-content-between">
                    <img src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt="">
                    <div>
                        <p><a href="#">HAEC university</a> <br>
                            ashadh, Grecce
                        </p>
                    </div>
                </div>
            </div>
            <div class="instute-card">
                <div class="p-3 d-flex justify-content-between">
                    <img src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt="">
                    <div>
                        <p><a href="#">HAEC university</a> <br>
                            ashadh, Grecce
                        </p>
                    </div>
                </div>
            </div>
            <div class="instute-card">
                <div class="p-3 d-flex justify-content-between">
                    <img src="{{ asset('user/img/colleg_logo (1).jpg') }}" alt="">
                    <div>
                        <p><a href="#">HAEC university</a> <br>
                            ashadh, Grecce
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
