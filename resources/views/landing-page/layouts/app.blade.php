<!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

    <head>
        @include('landing-page.layouts.head')
    </head>

    <body>

        <!-- Preloader -->
        <div id="preloader">
            <div id="status"></div>
        </div>
        <!-- Preloader Ends -->

        <!-- header starts -->
        @include('landing-page.layouts.header')
        <!-- header ends -->
        <div class="tet"></div>

        @yield('content')

        <!-- testomonial start -->
        <section class="testimonial pt-9" style="background-image:url({{asset('travelin/assets/images/testimonial.png')}})">
            <div class="container">
                <div class="section-title mb-6 text-center w-75 mx-auto">
                    <h4 class="mb-1 theme1">Our Testimonails</h4>
                    <h2 class="mb-1">Good Reviews By <span class="theme">Clients</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 pe-4">
                        <div class="testimonial-image">
                            <img src="{{ asset('travelin/assets/images/travel2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 ps-4">
                        <div class="row review-slider">
                            <div class="col-sm-4 item">
                                <div class="testimonial-item1 rounded">
                                    <div class="author-info d-flex align-items-center mb-4">
                                        <img src="{{ asset('travelin/assets/images/testimonial/img1.jpg') }}" alt="">
                                        <div class="author-title ms-3">
                                            <h5 class="m-0 theme">Jared Erondu</h5>
                                            <span>Supervisor</span>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p class="m-0"><i class="fa fa-quote-left me-2 fs-1"></i>Lorem Ipsum is simply dummy
                                            text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum
                                            has been the industry's standard dummy hic et quidem. Dignissimos maxime velit
                                            unde inventore quasi vero dolorem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 item">
                                <div class="testimonial-item1 rounded">
                                    <div class="author-info d-flex align-items-center mb-4">
                                        <img src="{{ asset('travelin/assets/images/testimonial/img1.jpg') }}" alt="">
                                        <div class="author-title ms-3">
                                            <h5 class="m-0 theme">Jared Erondu</h5>
                                            <span>Supervisor</span>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p class="m-0"><i class="fa fa-quote-left me-2 fs-1"></i>Lorem Ipsum is simply dummy
                                            text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum
                                            has been the industry's standard dummy hic et quidem. Dignissimos maxime velit
                                            unde inventore quasi vero dolorem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial ends -->

        <!-- partner starts -->
        <div class="our-partner p-0">
            <div class="container">
                <div class="partners_inner">
                    <ul>
                        <li><img src="{{ asset('travelin/assets/images/cl-5.png') }}" alt=""></li>
                        <li><img src="{{ asset('travelin/assets/images/cl-2.png') }}" alt=""></li>
                        <li><img src="{{ asset('travelin/assets/images/cl-3.png') }}" alt=""></li>
                        <li><img src="{{ asset('travelin/assets/images/cl-4.png') }}" alt=""></li>
                        <li><img src="{{ asset('travelin/assets/images/cl-5.png') }}" alt=""></li>
                        <li><img src="{{ asset('travelin/assets/images/cl-3.png') }}" alt=""></li>
                        <li><img src="{{ asset('travelin/assets/images/cl-2.png') }}" alt=""></li>
                        <li><img src="{{ asset('travelin/assets/images/cl-1.png') }}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- partner ends -->

        <!-- footer starts -->
        @include('landing-page.layouts.footer')
        <!-- footer ends -->

        <!-- Back to top start -->
        <div id="back-to-top">
            <a href="#"></a>
        </div>
        <!-- Back to top ends -->

        <!-- search popup -->
        <div id="search1">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

            <!-- login registration modal -->
        <div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="post-tabs">
                            <!-- tab navs -->
                            <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="login" aria-selected="false" class="nav-link active"
                                        data-bs-target="#login" data-bs-toggle="tab" id="login-tab" role="tab"
                                        type="button">Login</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="register" aria-selected="true" class="nav-link"
                                        data-bs-target="#register" data-bs-toggle="tab" id="register-tab" role="tab"
                                        type="button">Register</button>
                                </li>
                            </ul>
                            <!-- tab contents -->
                            <div class="tab-content blog-full" id="postsTabContent">
                                <!-- popular posts -->
                                <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login"
                                    role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="blog-image rounded">
                                                <a href="#"
                                                    style="background-image: url({{asset('travelin/assets/images/trending/trending5.jpg')}});"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="text-center border-b pb-2">Login</h4>
                                            <div class="log-reg-button d-flex align-items-center justify-content-between">
                                                <button type="submit" class="btn btn-fb">
                                                    <i class="fab fa-facebook"></i> Login with Facebook
                                                </button>
                                                <button type="submit" class="btn btn-google">
                                                    <i class="fab fa-google"></i> Login with Google
                                                </button>
                                            </div>
                                            <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                            <form method="post" action="#" name="contactform" id="contactform">
                                                <div class="form-group mb-2">
                                                    <input type="text" name="user_name" class="form-control" id="fname"
                                                        placeholder="User Name or Email Address">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="password" name="password_name" class="form-control"
                                                        id="lpass" placeholder="Password">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="exampleCheck">
                                                    <label class="custom-control-label mb-0" for="exampleCheck1">Remember
                                                        me</label>
                                                    <a class="float-end" href="#">Lost your password?</a>
                                                </div>
                                                <div class="comment-btn mb-2 pb-2 text-center border-b">
                                                    <input type="submit" class="nir-btn w-100" id="submit" value="Login">
                                                </div>
                                                <p class="text-center">Don't have an account? <a href="#"
                                                        class="theme">Register</a></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Recent posts -->
                                <div aria-labelledby="register-tab" class="tab-pane fade" id="register" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="blog-image rounded">
                                                <a href="#"
                                                    style="background-image: url({{asset('travelin/assets/images/trending/trending5.jpg')}});"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="text-center border-b pb-2">Register</h4>
                                            <div class="log-reg-button d-flex align-items-center justify-content-between">
                                                <button type="submit" class="btn btn-fb">
                                                    <i class="fab fa-facebook"></i> Login with Facebook
                                                </button>
                                                <button type="submit" class="btn btn-google">
                                                    <i class="fab fa-google"></i> Login with Google
                                                </button>
                                            </div>
                                            <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                            <form method="post" action="#" name="contactform1" id="contactform1">
                                                <div class="form-group mb-2">
                                                    <input type="text" name="user_name" class="form-control" id="fname1"
                                                        placeholder="User Name">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="text" name="user_name" class="form-control" id="femail"
                                                        placeholder="Email Address">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="password" name="password_name" class="form-control"
                                                        id="lpass1" placeholder="Password">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="password" name="password_name" class="form-control"
                                                        id="lrepass" placeholder="Re-enter Password">
                                                </div>
                                                <div class="form-group mb-2 d-flex">
                                                    <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                                    <label class="custom-control-label mb-0 ms-1 lh-1" for="exampleCheck1">I
                                                        have read and accept the Terms and Privacy Policy?</label>
                                                </div>
                                                <div class="comment-btn mb-2 pb-2 text-center border-b">
                                                    <input type="submit" class="nir-btn w-100" id="submit1"
                                                        value="Register">
                                                </div>
                                                <p class="text-center">Already have an account? <a href="#"
                                                        class="theme">Login</a></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- *Scripts* -->
        @include('landing-page.layouts.js')
    </body>

</html>
