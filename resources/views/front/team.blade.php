  @include('include.top')
<body>
    <!-- Topbar Start -->
   
    <!-- Topbar End -->


    <!-- Navbar Start -->
       @include('include.nav')
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Team</h3>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">Team</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
                    <h1 class="mb-5">Spa & Beauty Specialist</h1>
                </div>
            </div>

            <div class="row">
                @foreach($team as $teams)
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="teanimage/{{$teams->image}}" alt="" style="height: 300px;">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">{{$teams->name}}</h5>
                                <p class="m-0">{{$teams->specialty}}</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                              
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                               
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                  @endforeach
                
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
      @include('include.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    @include('include.bottom')