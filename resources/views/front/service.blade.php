   @include('include.top')
<body>
    <!-- Topbar Start -->
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
     
    <!-- Navbar End -->
    @include('include.nav')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Services</h3>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">Services</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


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
                <img class="img-fluid" src="img/Body Massage2.jpg" alt=""  style="height: 30rem; ;">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Body Massage</h4>
                    <p class="text-white px-3 mb-3">is a therapeutic treatment that involves the manipulation of the soft tissues of the body, including muscles .</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/Stone Therapy 2.jpg" alt=""  style="height: 30rem; ;">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Stone Therapy</h4>
                    <p class="text-white px-3 mb-3">is a type of massage therapy that uses heated stones to help relax and loosen tight muscles and tissues in the body.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/skin 4.jpg" alt=""  style="height: 30rem; ;">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Facial Therapy</h4>
                    <p class="text-white px-3 mb-3">is a type of massage therapy that uses heated stones to help relax and loosen tight muscles and tissues in the body.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/skin 2.jpg" alt=""  style="height: 30rem; ;">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Skin Care</h4>
                    <p class="text-white px-3 mb-3">refers to the practices and routines that individuals use to maintain the health and appearance of their skin. It involves activities such as cleansing, moisturizing</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/steam_bath1.jpg" alt=""  style="height: 30rem; ;">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Stream Bath</h4>
                    <p class="text-white px-3 mb-3">is a type of bathing experience where you sit or stand in a small, enclosed room filled with steam</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-6.jpg" alt=""  style="height: 30rem; ;">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Face Masking</h4>
                    <p class="text-white px-3 mb-3">is the practice of applying a mask or paste to the face for various skincare purposes. It involves using ingredients such as clay, charcoal, honey.</p>
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
                                        <option value="1">Body Massage </option>
                                        <option value="2">Stone Therapy </option>
                                        <option value="3"> Facial Therapy </option>
                                        <option value="4">Skin Care </option>
                                        <option value="5">Stream Bath </option>
                                        <option value="6">Face Masking </option>
                                        <option value="7">VIP Plan </option>
                                        <option value="8">Family Plan </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


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
                                    <h6 class="text-uppercase">muna abdallah</h6>
                                    
                                </div>
                            </div>
                            <p class="m-0">I had an amazing experience at the spa center; The massage was so relaxing and the staff were incredibly friendly and professional.</p>.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/clint 2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">linda laith</h6>
                                   
                                </div>
                            </div>
                            <p class="m-0">The attention to detail and level of service is unmatched. I highly recommend it to anyone looking for a truly luxurious experience .</p>
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