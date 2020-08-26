<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/admin/image/index.png')}}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/website/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/website/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/website/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/website/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/website/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/website/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/website/css/style.css')}}" rel="stylesheet">
    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: url("{{asset('uploads/background/'.$background->image)}}") top right no-repeat;
            background-size: cover;
            position: relative;
        }
    </style>
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="#portfolio"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                <li><a href="#services"><i class="bx bx-server"></i> <span>Services</span></a></li>
                <li><a href="#contact"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @foreach($heroes as $hero)
    <section id="hero" class="d-flex flex-column justify-content-center" >
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>{{$hero->name}}</h1>

            <p>I'm <span class="typed" data-typed-items="{{$hero->name_a}}, {{$hero->name_b}}, {{$hero->name_c}}, {{$hero->name_d}}"></span></p>
            <div class="social-links">
                <a href="{{$hero->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{$hero->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{$hero->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{$hero->skype}}" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="{{$hero->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->
    @endforeach

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <p>{{$abouts->h_desc}}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('uploads/about/'.$abouts->image) }}" class="img-fluid" alt="" >
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>{{$abouts->title}}</h3>
                        <p class="font-italic">
                            {{$abouts->m_desc}}
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong>{{$abouts->birth}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong>{{$abouts->site}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong>{{$abouts->phone}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$abouts->city}}</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong>{{$abouts->age}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$abouts->degree}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{$abouts->email}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Country:</strong> {{$abouts->country}}</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            {{$abouts->l_desc}}
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    @foreach($facts as $fact)

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="icofont-{{$fact->icon}}"></i>
                            <span data-toggle="counter-up">{{$fact->number}}</span>
                            <p>{{$fact->name}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6">
                        @foreach($skills as $skill)
                        <div class="progress">
                            <span class="skill">{{$skill->name}} <i class="val">{{$skill->percent}}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->value}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6">
                        @foreach($skills2 as $row)
                        <div class="progress">
                            <span class="skill">{{$row->name}} <i class="val">{{$row->percent}}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$row->value}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Identity</h3>
                        <div class="resume-item pb-0">
                            <h4>{{$hero_resume->name}}</h4>
                            <p><em>{{$about_resume->m_desc}}</em></p>
                            <ul>
                                <li>{{$about_resume->address}}</li>
                                <li>{{$about_resume->phone}}</li>
                                <li>{{$about_resume->email}}</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        @foreach($educations as $education)
                        <div class="resume-item">
                            <h4>{{$education->degree}}</h4>
                            <h5>{{$education->year}}</h5>
                            <p><em>{{$education->versity}}</em></p>
                            <p>{{$education->skill}}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6">

                        <h3 class="resume-title">Professional Experience</h3>
                        @foreach($experiences as $experience)
                        <div class="resume-item">
                            <h4>{{$experience->rank}}</h4>
                            <h5>{{$experience->year}}</h5>
                            <p><em>{{$experience->work_place}}</em></p>
                            <ul>
                                <li>{{$experience->work1}}</li>
                                <li>{{$experience->work2}} </li>
                                <li>{{$experience->work3}}</li>
                                <li>{{$experience->work4}}</li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach($categories as $categorie)
                            <li data-filter=".{{$categorie->slug}}">{{$categorie->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($portfolio as $port)
                    <div class="col-lg-4 col-md-6 portfolio-item {{$port->category->slug}}">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('uploads/portfolio/'.$port->image) }}" class="img-fluid" alt="" style="width: 350px; height: 200px;">
                            <div class="portfolio-info">
                                <h4>{{$port->title}}</h4>
                                <p>{{$port->category->name}}</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('uploads/portfolio/'.$port->image) }}" data-gall="portfolioGallery" class="venobox" title="{{$port->title}}"><i class="bx bx-plus"></i></a>
                                    <a href="{{ asset('uploads/portfolio/'.$port->image) }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                                </svg>
                                <i class="bx {{$service->icon}}"></i>
                            </div>
                            <h4><a href="">{{$service->name}}</a></h4>
                            <p>{{$service->desc}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                </div>

                <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">
                    @foreach($testimonials as $testimonial)
                    <div class="testimonial-item">
                        <img src="{{ asset('uploads/testimonial/'.$testimonial->photo) }}" class="testimonial-img" alt="">
                        <h3>{{$testimonial->name}}</h3>
                        <h4>{{$testimonial->title}}</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{$testimonial->desc}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>{{$abouts->city}},{{$abouts->country}}</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{$abouts->email}}</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>{{$abouts->phone}}</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Brandon Johnson</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
            <div class="social-links">
                @foreach($socials as $social)
                <a href="{{$social->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{$social->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{$social->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{$social->skype}}" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="{{$social->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                @endforeach
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Portfolio</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
               <a href="https://bootstrapmade.com/">Md Sumon</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/website/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/website/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/website/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/website/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/website/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/website/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/website/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('assets/website/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/website/vendor/typed.js/typed.min.js')}}"></script>
    <script src="{{asset('assets/website/vendor/aos/aos.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/website/js/main.js')}}"></script>

</body>

</html>
