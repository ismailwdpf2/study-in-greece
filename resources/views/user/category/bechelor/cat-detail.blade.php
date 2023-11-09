@extends('user.template')
@section('usercontent')
    <div>
        <div class="detail-top">
            <p class="text-white cat-title">Bachelor| Business Management|</p>
            <div>
                <div class="container dtl-banner bg-white d-flex">
                    <div><b>Bachelors:</b>
                        <p>Marketing & Media</p>
                        <h1>BA (Hons) Business Management (Marketing)</h1>
                        <div class="my-5">
                            <div>
                                <p> Share it:</p>
                                <a href="#"><i class="shareicon fa-brands fa-facebook" style="color: #075ef2;"></i></a>
                                <a href="#"><i class="shareicon fa-brands fa-facebook-messenger"
                                        style="color: #0459ec;"></i></a>
                                <a href="#"><i class="shareicon fa-brands fa-linkedin"
                                        style="color: #055bf0;"></i></a>
                                <a href="#"><i class="shareicon fa-solid fa-envelope" style="color: #86898d;"></i></a>
                                <a href="#"><i class="shareicon fa-sharp fa-solid fa-share-nodes"
                                        style="color: #2cd84e;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="dtl-img">
                        <img src="{{ asset('user/img/marketing_epik_B.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="college-card d-flex justify-content-between">
                <div class="p-3 d-flex">
                    <img src="{{ asset('user/img/deree_new_logo.jpg') }}" alt="">
                    <div>
                        <span>Institute:</span>
                        <h5>DEREE - The American College of Greece</h5>
                        <a href="#">See all Bachelors offered by this institute</a>
                    </div>
                </div>
                <div class="p-4 mx-5">
                    <a href=""><i class="fa-solid fa-square-phone"></i></a> +88 210 600 9800
                </div>
            </div>
            <div class="icon-card my-2">
                <span><i class="fa-solid fa-location-dot"></i> Athens, Thessaloniki</span>
                <span> <i class="fa-regular fa-calendar"></i> February 2024, October 2024</span>
                <span> <i class="fa-regular fa-hourglass-half"></i> 3 years</span>
                <span> <i class="fa-regular fa-id-card"></i> Bachelor</span>
                <span> <i class="fa-regular fa-house"></i> Full-time</span>
                <span><i class="fa-solid fa-earth-americas"></i> Greek, English</span>
            </div>
        </div>
        <div class="container">
            <div class=" row">

                <div class="col-8 mx-2">
                    <div class="dtl-main">
                        <div class="mx-4">
                            <span style="color: #0B3565">ENTRY REQUIREMENTS</span>
                            <br>
                            <p><b>Greek students</b></p>
                        </div>
                        <ul>
                            <li style="list-style: disc;">
                                One letter of recommendation from teacher/professor of last institution attended; letter
                                from private tutor is not accepted.

                            </li>
                            <li style="list-style: disc;">
                                Official high school transcript(s) and diploma or official college/university transcript(s)
                                and catalog (if applying for transfer credits).
                            </li>
                            <li style="list-style: disc;">
                                Acceptable evidence of proficiency in English: IELTS (score 6.5 or higher), Pearson Test of
                                Academic English: PTE Academic (59 or above), Michigan State University Certificate of
                                English Language Proficiency (MSU – CELP), Michigan Proficiency Certificate, Cambridge
                                Proficiency Certificate, Cambridge Advanced English (CAE) with Grade A only, TOEFL (score 87
                                or higher on internet based), GCE, International Baccalaureate, Graduates of accredited
                                English language institutions.
                                If none of the above can be provided, then the candidate will have to take the English
                                Placement Test administered by the College.
                            </li>
                            <li style="list-style: disc;">
                                Certified copy of state identification card candidates will attend an interview with a
                                designated College representative after all application materials have been submitted.
                            </li>
                        </ul>
                        <div class="mx-4">
                            <span><b>merican Students</b></span> <br>
                            <span>First Year Students</span>
                            <p>
                                Students who are currently in high school, students who have not attended college after high
                                school graduation, or students with less than 12 college credit hours are considered First
                                Year Students.
                                The following documents are needed for admissions:
                            </p>
                        </div>
                        <ul>
                            <li style="list-style: disc;">
                                Completed online application form.
                            </li>
                            <li style="list-style: disc;">
                                A 250-300 word personal statement which addresses how studying at ACG will further your life
                                goals. The essay can be completed online along with the application form
                            </li>
                            <li style="list-style: disc;">
                                Official transcripts.
                            </li>
                            <li>
                                One academic letter of recommendation.
                            </li>
                            <li style="list-style: disc;">
                                Copy of passport.
                            </li>
                        </ul>
                    </div>
                    <div class="dtl-main my-2">

                        <h6>THROUGH THE MSc in RISK MANAGEMENT PROGRAM, YOU WILL:
                        </h6>

                        <ul>
                            <li style="list-style: disc;">
                                Develop an appreciation of financial & operational risks faced by financial institutions,
                                corporations and market investors.
                            </li>
                            <li style="list-style: disc;">
                                Strengthen quantitative skills required for measuring the impact of extreme events.
                            </li>
                            <li style="list-style: disc;">
                                Be prepared to deal with risks that may arise from unforeseen circumstances.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dtl-sidebar">
                        <p style="color: #0B3565">TUITION FEES</p>
                        <span> For information regarding student fees please contact the Institute.</span>
                    </div>

                    <div class="dtl-cform">
                        <div>
                            <h5>Contact Us</h5>
                            <p>Interested? Fill in the contact form and an advisor from the Institute will get in touch with
                                you shortly.</p>
                        </div>
                        <form action="#" method="post">

                            <div class="form-group my-1">
                                <input class="form-control" type="text" name="full_name" placeholder="Full Name*"
                                    required>
                            </div>

                            <div class="form-group my-1">
                                <input class="form-control" type="tel" name="phone" placeholder="Phone*" required>
                            </div>
                            <div class="form-group my-1">
                                <input class="form-control" type="email" name="email" placeholder="E-mail*" required>
                            </div>
                            <div class="form-group my-1">
                                <input class="form-control" type="text" name="nationality" placeholder="Nationality*"
                                    required>
                            </div>
                            <div class="form-group my-1">
                                <input class="form-control" type="text" name="location" placeholder="I live in*"
                                    required>
                            </div>
                            <div class="form-group my-1">
                                <input class="form-control" type="text" name="Desired" placeholder="Desired Start*"
                                    required>
                            </div>
                            <div class="form-group my-1">
                                <textarea class="form-control" name="" id="" cols="30" rows="3">Question to the Instituion</textarea>
                            </div>
                            <div class="form-group text-right">
                                <button class="send-mssg btn btn-danger px-3">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
