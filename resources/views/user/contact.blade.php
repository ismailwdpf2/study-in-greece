@extends('user.template')
@section('usercontent')
    <div class="">
        <h2 class="contact">Contact</h2>
        <div>
            <p class="contact-p">Study in Greece is the ultimate study guide for international students who seek to study in Greece. As a part
                of the really successful <a href="#">Semind.gr - Education Portal</a> which features hundreds of
                seminars, workshops, and studies, Study in Greece aims to provide you with the best bachelor's and master's
                degrees offered in Greece by leading universities and colleges.</p>
        </div>
        <div class="contact-form py-5">
            <b>
                <p style="text-align: center;">YOU CAN CONTACT US BY FILLING IN THE FOLLOWING FORM:</p>
            </b>
            <div class="row container contact-item">
                <div class="col-md-6 ">
                    <div class="form-group my-3">
                        <input type="text" class="form-control" id="fullName" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" placeholder="Phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group my-3">
                        <input type="text" class="form-control" id="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="form-group my-3">
                    <textarea name="" class="form-control" cols="100" rows="8" placeholder="Massage"></textarea>
                </div>
                <div class="form-group text-right">
                    <button class="send-mssg btn btn-primary px-3">Send</button>
                </div>
            </div>
        </div>
        <div class="f-content">
            <h3 style="color: #0B3565; margin-top:10px">Move-Abroad</h3>
            <span>Room No: 328-329, RH Home Center, Green Road, Farm Gate Dhaka, Bangladesh.</span>
            <p>Email: <a href="#">moveabroad@gmail.com</a> | Phone: 01721-401920</p>
        </div>
    </div>
@endsection
