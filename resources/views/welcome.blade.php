<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rayhan | syahan.my.id</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('img/styles.css') }}" rel="stylesheet" />

    <style>
        .masthead {
            min-height: 30rem;
            position: relative;
            display: table;
            width: 100%;
            height: auto;
            padding-top: 8rem;
            padding-bottom: 8rem;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.1) 100%), url("{{ asset('img/bg-masthead.jpg') }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .masthead h1,
        .masthead .h1 {
            font-size: 4rem;
            margin: 0;
            padding: 0;
        }

        @media (min-width: 992px) {
            .masthead {
                height: 100vh;
            }

            .masthead h1,
            .masthead .h1 {
                font-size: 5.5rem;
            }
        }
    </style>
</head>

<body id="page-top">

    <!-- Navbar Toggle -->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>

    <!-- Overlay -->
    <div id="overlay"></div>

    <!-- Navigation -->
    <nav id="navbar">
        <ul class="navbar-nav">
            <li class="navbar-brand text-center"><a href="#">Rayhan Al Farassy</a></li>
            <li class="navbar-nav-item text-center"><a href="#home">Home</a></li>
            <li class="navbar-nav-item text-center"><a href="#about">About</a></li>
            <li class="navbar-nav-item text-center"><a href="#skill">Skill</a></li>
            <li class="navbar-nav-item text-center"><a href="#portfolio">Portfolio</a></li>
            <li class="navbar-nav-item text-center"><a href="#contact">Contact</a></li>
            <a class="btn btn-primary btn-xl" href="{{ route('login') }}">Login</a>

        </ul>
    </nav>


    <!-- Home Section -->
    <header class="masthead d-flex align-items-center" id="home">
        <div class="container px-4 px-lg-5 text-center">
            @php
                $home = \App\Models\Section::where('section', 'home Nama')->first();
                $home1 = \App\Models\Section::where('section', 'home Title')->first();
                $home2 = \App\Models\Section::where('section', 'home Btn')->first();
                $home3 = \App\Models\Section::where('section', 'home Color')->first();
            @endphp
            @if ($home && $home1 && $home2 && $home3)
                <div class="container px-4 px-lg-5 text-center">
                    <h1 class="mb-1" style="color: {!! nl2br(e($home3->content)) !!};">{!! nl2br(e($home->content)) !!}</h1>
                    <h3 class="mb-5" style="color: {!! nl2br(e($home3->content)) !!};"><em>{!! nl2br(e($home1->content)) !!}</em></h3>
                    <a class="btn btn-primary btn-xl" href="#about">{!! nl2br(e($home2->content)) !!}</a>
                </div>
            @else
                <p>Content for the About section is not available.</p>
            @endif
        </div>
    </header>


    <!-- About Section -->

    @php
        $about = \App\Models\Section::where('section', 'about Introduction')->first();
        $about1 = \App\Models\Section::where('section', 'about Title')->first();
        $about2 = \App\Models\Section::where('section', 'about Image')->first();
        $about3 = \App\Models\Section::where('section', 'about Link')->first();
        $about4 = \App\Models\Section::where('section', 'about Link Btn')->first();
        $about5 = \App\Models\Section::where('section', 'about Btn')->first();
        $about6 = \App\Models\Section::where('section', 'about Color')->first();
    @endphp
    @if ($about && $about1 && $about2 && $about3 && $about4 && $about5 && $about6)
        <section class="content-section bg-{!! nl2br(e($about6->content)) !!}" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="profile-picture">
                            <img src="{!! nl2br(e($about2->content)) !!}" class="img-fluid rounded-circle" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <h2>{!! nl2br(e($about->content)) !!}</h2>
                        <p class="lead mb-5">
                            {!! nl2br(e($about1->content)) !!}
                            <a href="{!! nl2br(e($about3->content)) !!}">{!! nl2br(e($about4->content)) !!}</a>!
                        </p>
                        <a class="btn btn-dark btn-xl" href="#skill">{!! nl2br(e($about5->content)) !!}</a>
                    </div>
                </div>
            @else
                <p>Content for the About section is not available.</p>
    @endif
    </div>
    </section>

    <!-- Skills Section -->
    @php
        $skill = \App\Models\Section::where('section', 'skill Introduction')->first();
        $skill1 = \App\Models\Section::where('section', 'skill Title')->first();
        $skill2 = \App\Models\Section::where('section', 'skill 1')->first();
        $skill3 = \App\Models\Section::where('section', 'skill Desc1')->first();
        $skill4 = \App\Models\Section::where('section', 'skill 2')->first();
        $skill5 = \App\Models\Section::where('section', 'skill Desc2')->first();
        $skill6 = \App\Models\Section::where('section', 'skill 3')->first();
        $skill7 = \App\Models\Section::where('section', 'skill Desc3')->first();
        $skill8 = \App\Models\Section::where('section', 'skill 4')->first();
        $skill9 = \App\Models\Section::where('section', 'skill Desc4')->first();
        $skill10 = \App\Models\Section::where('section', 'skill Background Color')->first();
        $skill11 = \App\Models\Section::where('section', 'skill Text Color')->first();
    @endphp
    @if (
        $skill &&
            $skill1 &&
            $skill2 &&
            $skill3 &&
            $skill4 &&
            $skill5 &&
            $skill6 &&
            $skill7 &&
            $skill8 &&
            $skill9 &&
            $skill10)
        <section class="content-section bg-{!! nl2br(e($skill10->content)) !!} text-{!! nl2br(e($skill11->content)) !!} text-center"
            id="skill">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">{!! nl2br(e($skill->content)) !!}</h3>
                    <h2 class="mb-5">{!! nl2br(e($skill1->content)) !!}</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i
                                class="fa-solid fa-pen-nib"></i></span>
                        <h4><strong>{!! nl2br(e($skill2->content)) !!}</strong></h4>
                        <p class="text-faded mb-0">{!! nl2br(e($skill3->content)) !!}</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i
                                class="fa-solid fa-desktop"></i></span>
                        <h4><strong>{!! nl2br(e($skill4->content)) !!}</strong></h4>
                        <p class="text-faded mb-0">{!! nl2br(e($skill5->content)) !!}</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i
                                class="fa-solid fa-mobile-screen"></i></span>
                        <h4><strong>{!! nl2br(e($skill6->content)) !!}</strong></h4>
                        <p class="text-faded mb-0">
                            {!! nl2br(e($skill7->content)) !!}
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i
                                class="fa-solid fa-network-wired"></i></span>
                        <h4><strong>{!! nl2br(e($skill8->content)) !!}</strong></h4>
                        <p class="text-faded mb-0">{!! nl2br(e($skill9->content)) !!}</p>
                    </div>
                </div>
            </div>
        @else
            <p>Content for the Skills section is not available.</p>
    @endif
    </section>

    <!-- Portfolio Section -->
    @php
        $portfolio = \App\Models\Section::where('section', 'portfolio Introduction')->first();
        $portfolio1 = \App\Models\Section::where('section', 'portfolio Title')->first();
        $portfolio2 = \App\Models\Section::where('section', 'portfolio 1')->first();
        $portfolio3 = \App\Models\Section::where('section', 'portfolio Desc1')->first();
        $portfolio4 = \App\Models\Section::where('section', 'portfolio Image1')->first();
        $portfolio5 = \App\Models\Section::where('section', 'portfolio Link1')->first();
        $portfolio6 = \App\Models\Section::where('section', 'portfolio 2')->first();
        $portfolio7 = \App\Models\Section::where('section', 'portfolio Desc2')->first();
        $portfolio8 = \App\Models\Section::where('section', 'portfolio Image2')->first();
        $portfolio9 = \App\Models\Section::where('section', 'portfolio Link2')->first();
        $portfolio10 = \App\Models\Section::where('section', 'portfolio 3')->first();
        $portfolio11 = \App\Models\Section::where('section', 'portfolio Desc3')->first();
        $portfolio12 = \App\Models\Section::where('section', 'portfolio Image3')->first();
        $portfolio13 = \App\Models\Section::where('section', 'portfolio Link3')->first();
        $portfolio14 = \App\Models\Section::where('section', 'portfolio 4')->first();
        $portfolio15 = \App\Models\Section::where('section', 'portfolio Desc4')->first();
        $portfolio16 = \App\Models\Section::where('section', 'portfolio Image4')->first();
        $portfolio17 = \App\Models\Section::where('section', 'portfolio Link4')->first();
    @endphp
    @if (
        $portfolio &&
            $portfolio1 &&
            $portfolio2 &&
            $portfolio3 &&
            $portfolio4 &&
            $portfolio5 &&
            $portfolio6 &&
            $portfolio7 &&
            $portfolio8 &&
            $portfolio9 &&
            $portfolio10 &&
            $portfolio11 &&
            $portfolio12 &&
            $portfolio13 &&
            $portfolio14 &&
            $portfolio15 &&
            $portfolio16 &&
            $portfolio17)
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">{!! nl2br(e($portfolio->content)) !!}</h3>
                    <h2 class="mb-5">{!! nl2br(e($portfolio1->content)) !!}</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="{!! nl2br(e($portfolio5->content)) !!}">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">{!! nl2br(e($portfolio2->content)) !!}</div>
                                    <p class="mb-0">{!! nl2br(e($portfolio3->content)) !!}</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{!! nl2br(e($portfolio4->content)) !!}" alt="" />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="{!! nl2br(e($portfolio9->content)) !!}">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">{!! nl2br(e($portfolio6->content)) !!}</div>
                                    <p class="mb-0">{!! nl2br(e($portfolio7->content)) !!}</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{!! nl2br(e($portfolio8->content)) !!}" alt="" />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="{!! nl2br(e($portfolio13->content)) !!}">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">{!! nl2br(e($portfolio10->content)) !!}</div>
                                    <p class="mb-0">{!! nl2br(e($portfolio11->content)) !!}</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{!! nl2br(e($portfolio12->content)) !!}" alt="" />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="{!! nl2br(e($portfolio17->content)) !!}">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">{!! nl2br(e($portfolio14->content)) !!}</div>
                                    <p class="mb-0">{!! nl2br(e($portfolio15->content)) !!}
                                    </p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{!! nl2br(e($portfolio16->content)) !!}" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        @else
            <p>Content for the Portfolio section is not available.</p>
    @endif
    </section>

    <!-- Contact Section -->
    @php
        $contact = \App\Models\Section::where('section', 'contact Title')->first();
        $contact1 = \App\Models\Section::where('section', 'contact Emailbtn')->first();
        $contact2 = \App\Models\Section::where('section', 'contact Email')->first();
        $contact3 = \App\Models\Section::where('section', 'contact Button')->first();
        $contact4 = \App\Models\Section::where('section', 'contact Link')->first();
        $contact5 = \App\Models\Section::where('section', 'contact Color')->first();
        $contact6 = \App\Models\Section::where('section', 'contact Text Color')->first();
        $contact7 = \App\Models\Section::where('section', 'contact Image')->first();
    @endphp
    @if ($contact && $contact1 && $contact2 && $contact3 && $contact4 && $contact5 && $contact6 && $contact7)
        <section class="content-section bg-{!! nl2br(e($contact5->content)) !!} text-{!! nl2br(e($contact6->content)) !!}" id="contact"
            style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{!! nl2br(e($contact7->content)) !!}'); background-size: cover; background-position: center;">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">{!! nl2br(e($contact->content)) !!}</h2>
                <a class="btn btn-xl btn-light me-4" href="{!! nl2br(e($contact2->content)) !!}">{!! nl2br(e($contact1->content)) !!}</a>
                <a class="btn btn-xl btn-dark" href="{!! nl2br(e($contact4->content)) !!}">{!! nl2br(e($contact3->content)) !!}</a>
            </div>
        @else
            <p>Content for the Contact section is not available.</p>
    @endif
    </section>


    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3"
                        href="https://www.linkedin.com/in/rayhanalfarassy/"><i class="icon-social-linkedin"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3"
                        href="https://www.instagram.com/rayhanfay"><i class="icon-social-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://github.com/rayhanfay"><i
                            class="icon-social-github"></i></a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; syahan.my.id</p>
        </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('img/scripts.js') }}"></script>
</body>

</html>
