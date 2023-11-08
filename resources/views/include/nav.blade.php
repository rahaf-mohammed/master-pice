<div class="container-fluid bg-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+962798138362</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>SPA CENTER@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    
                   
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">SPA</span> Center</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="home" class="nav-item nav-link active">Home</a>
                    <a href="about" class="nav-item nav-link">About</a>
                    <a href="service" class="nav-item nav-link">Services</a>
                    <a href="price" class="nav-item nav-link">Pricing</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="appointment" class="dropdown-item">Appointment</a>
                            <a href="opening" class="dropdown-item">Open Hours</a>
                            <a href="team" class="dropdown-item">Our Team</a>
                            <a href="testimonial" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                    @if(Route::has('login'))

@auth

<x-app-layout>
</x-app-layout>


@else

                    <a href="{{route
                    ('register')}}" class="nav-item nav-link"> sign </a>

 @endauth
 @endif
 </div>
           <a href="/appointment" class="btn btn-primary d-none d-lg-block">Book Now</a>
            </div>
        </nav>
    </div>