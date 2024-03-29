@include('include.top')

<body>
    <!-- Topbar Start -->
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('include.nav')
    <!-- Navbar End -->
    @if(session()->has('message'))
           <div class="alert alert-sucess">
            
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
              {{session()->get('message')}}

           </div>



          @endif

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/Massage Treatment2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Massage Treatment</h3>
                            <p class="mx-md-5 px-5">Massage treatment is a therapeutic technique that involves manipulating the soft tissues of the body to promote relaxation, reduce stress, and alleviate pain.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="appointment">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/Facial Treatment.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Facial Treatment</h3>
                            <p class="mx-md-5 px-5">acial treatment is a skincare procedure that involves a series of steps to improve the appearance and health of the skin on the face. It typically includes cleansing, exfoliating, steaming, extracting impurities, applying a mask</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="appointment">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/Cellulite treatment.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Cellulite Treatment</h3>
                            <p class="mx-md-5 px-5">cellulite is a condition where the skin appears dimpled or lumpy due to the accumulation of fat deposits beneath the skin. While it is a common condition, it can be frustrating for those who experience it.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="appointment">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/Your Best Spa, Beauty & Skin Care Center.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About Us</h6>
                    <h1 class="mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                    <p class="pl-4 border-left border-primary">A spa is a business that offers various services to improve health, beauty, and relaxation. These services can include massages, facials, body treatments, manicures and pedicures, and other treatments designed to promote wellness and relaxation.</p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
                                <h6 class="text-uppercase">Spa Specialist</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">999</h3>
                                <h6 class="text-uppercase">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Service</h6>
                <h1>Spa & Beauty Services</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/Body Massage2.jpg" alt=""style="height: 30rem; ;"  >
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Body Massage</h4>
                    <p class="text-white px-3 mb-3" >is a therapeutic treatment that involves the manipulation of the soft tissues of the body, including muscles .</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/Stone Therapy 2.jpg" alt="" style="height: 30rem; ;">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Stone Therapy</h4>
                    <p class="text-white px-3 mb-3">is a type of massage therapy that uses heated stones to help relax and loosen tight muscles and tissues in the body.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/skin 4.jpg" alt="" style="height: 30rem; ;">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Facial Therapy</h4>
                    <p class="text-white px-3 mb-3"> is a type of massage therapy that uses heated stones to help relax and loosen tight muscles and tissues in the body. </p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment">Make Order</a>
                    </div> 
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/skin 2.jpg" alt="" style="height: 30rem; ;">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Skin Care</h4>
                    <p class="text-white px-3 mb-3">refers to the practices and routines that individuals use to maintain the health and appearance of their skin. It involves activities such as cleansing, moisturizing</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/steam_bath1.jpg" alt="" style="height: 30rem; ;">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">steam bath</h4>
                    <p class="text-white px-3 mb-3"> is a type of bathing experience where you sit or stand in a small, enclosed room filled with steam.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-6.jpg" alt="" style="height: 30rem; ;" >
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Face Masking</h4>
                    <p class="text-white px-3 mb-3"> is the practice of applying a mask or paste to the face for various skincare purposes. It involves using ingredients such as clay, charcoal, honey. </p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment">Make Order</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center bg-appointment mx-0">
            <div class="col-lg-6 py-5">
                <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                    <h1 class="text-white text-center mb-4">Make Appointment</h1>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name" required="required" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent p-4" placeholder="Your Email" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="custom-select bg-transparent px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Body Massage</option>
                                        <option value="2">Stone Therapy</option>
                                        <option value="3">Facial Therapy</option>
                                        <option value="4">Skin Care</option>
                                        <option value="5">steam bath</option>
                                        <option value="6">Face Masking</option>
                                        <option value="7">VIP Plan</option>   
                                        <option value="8">Family Plan</option>                  
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button  class="btn btn-primary btn-block"   type="submit" style="height: 47px;"    >Make Appointment</button>
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/opening.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                        <h1 class="mb-4">Best Relax And Spa Zone</h1>
                        <p>Welcome to Spa center  Our experienced therapists are dedicated to providing you with the best possible massage experience, tailored to your individual needs and preferences. We are committed to helping you achieve your wellness goals and look forward to providing you with the highest level of service and care. Thank you for choosing  Spa center , and we hope you enjoy your time with us."</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>sun – Thu : 9:00 AM - 7:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Saturday : 9:00 AM - 4:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Fri : Closed</li>
                        </ul>
                        <a href="appointment" class="btn btn-primary mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->


    <!-- Pricing Start -->
    <div class="container-fluid bg-pricing" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/price 2.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                        <div class="owl-carousel pricing-carousel">
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">jd</small><small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;"></small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">Session prices</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage:30jd </p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Stone Therapy:25jd</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Facial Therapy :15jd</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Skin Care:25jd</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>steam bath:30jd</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Face Masking:15jd</p>
                                    <a href="appointment" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">jd</small>40<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;"></small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">Family Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <p><i class="fa fa-check text-success mr-2"></i> Face Masking</p>
                                    <a href="appointment" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">jd</small>50<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;"></small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">VIP Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Skin Care</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>steam bath</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Face Masking</p>
                                    <a href="appointment" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Pricing End -->


    
    <!-- Team Start -->
     <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inlin

                    e-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
                    <h1 class="mb-5">Spa & Beauty Specialist</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/expet1.jpg" alt="" style="height: 17rem; width: 17rem;">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Nawal Mohammed</h5>
                                <p class="m-0">Spa & Beauty Expert</p>

                            </div>
                            <div class="team-social bg-dark text-center">
                               
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                                <img class="img-fluid" src="img/expert 2.jpg" alt="" style="height: 17rem; width: 17rem; ">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Asmaa Naeem</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                               
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                               
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/expert 3.jpg" alt="" style="height: 17rem; width: 17rem;">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Enas alkayyal</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                               
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                               
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/expert 4.jpg" alt="" style="height: 17rem; width: 17rem;">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">LAYAN BASUONI</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                               
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                               
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/clint say.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
                    <h1 class="mb-4">What Our Clients Say!</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/clint 1.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">muna abdallah </h6>
                                   
                                </div>
                            </div>
                            <p class="m-0">I had an amazing experience at the spa center; The massage was so relaxing and the staff were incredibly friendly and professional.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/clint 2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">linda laith</h6>
                                    
                                </div>
                            </div>
                            <p class="m-0"> The attention to detail and level of service is unmatched. I highly recommend it to anyone looking for a truly luxurious experience </p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/clint 3.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">malak mohammed</h6>
                                    
                                </div>
                            </div>
                            <p class="m-0">The place to go The staff are knowledgeable and attentive, and they go above and beyond to make sure you have a positive experience; I highly recommend it</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('include.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
   @include('include.bottom')