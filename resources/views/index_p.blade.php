<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/"/>
    <link href="{{asset('css/bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/bootstrap-grid.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('css/rectangle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet"/>

    <link href="{{asset('css/fontawesome/css/all.css')}}" rel="stylesheet" type="text/css"/>
    <!-- bootstrap style-->
    <link href="{{asset('css/bootstrap-grid.css')}}" rel="stylesheet" type="text/css"/>
    <!-- owl carousel style-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('owlcarousel/assets/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('owlcarousel/assets/owl.theme.default.min.css')}}"/>

    <title>Leen | Home</title>
    <style>
        .user-dropdown {
            position: relative;
            display: inline-flex;
            align-items: center;
            cursor: pointer;
        }

        .user-info span {
            margin-right: 10px;
        }

        .user-dropdown img {
            width: 12px; /* adjust as needed */
            height: 12px; /* adjust as needed */
        }

        .dropdown-menu_user {
            display: none;
            position: absolute;
            right: 0;
            top: 17px;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .user-dropdown:hover .dropdown-menu_user {
            display: block;
        }

        .dropdown-menu_user a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>


<header>
    <div class="col-6 col-md-6 col-lg-4 d-flex justify-content-end align-items-center">

        <div class="col-4 col-md-4 col-lg-4 pt-1">
            <div class="logo">
                <a href="{{route('index_p')}}"><img src="{{asset('img/logo.png')}}" alt="Logo"></a>
            </div>
        </div>
    </div>
    @if(auth())
        {{--        {{$name = auth()->user()->name}}--}}

    <div class="send_right d-flex justify-content-end">
        @if(isset(auth()->user()->name))
            <div class="user-dropdown">
                <div class="user-info">


                    <span>{{auth()->user()->name}}  <img src="{{asset('img/down.png')}}"></span>

                </div>
                <div class="dropdown-menu_user">
                    <a href="/profile">Profile</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf

                    </form>

                </div>
            </div>

        @else

            <a class="btn btn-lg btn-primary" href="{{url('register')}}"> Register</a>

        @endif
        @endif
    </div>


</header>


<div class="container">
    <br>
    <br>
    <div class="col-4 col-md-4 col-lg-4 pt-1">

        <section id="demos" class="tags">

            <div class="row">
                <div style="margin-left: 25%; margin-right: 25%">
                    <div class="large-12 columns py-5">
                        <div class="owl-carousel owl-carousel1  owl-theme">
                            <div class="item">
                                <a href="#">Roommates</a>
                            </div>
                            <div class="item">
                                <a href="#">Books</a>
                            </div>
                            <div class="item">
                                <a href="#">Courses</a>
                            </div>
                            <div class="item">
                                <a href="#">Events</a>
                            </div>
                            <div class="item">
                                <a href="#">Advice</a>
                            </div>
                            <div class="item">
                                <a href="#">Other</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


{{--center-body--}}


<div class="col-6 col-md-6 col-lg-4 d-flex justify-content-end align-items-center">

    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <div class="rectangle">
        <div class="image">
            <!-- You can either use an <img> tag or use a background image with CSS -->
        </div>
        <div class="line"></div>
        <div class="text-content">
            <p>Loyola Community Platform centralizes roommate matching, book trading, and course discussions for
                students. Replacing fragmented social media posts, it offers a cohesive, secure experience. Built
                responsively, it ensures seamless access across devices.</p>
        </div>
    </div>
    <div class="wrapper">
        <div class="left-section">
            <h2>Popular posts</h2>

            <div class="post">
                <h1>I need an advice about UX/UI Cou.</h1>
                <p>Dive into the world of collaborative design with Figma, the leading UX/UI design tool. Real-time
                    collaboration, cloud-based access, and intuitive features make it the top choice for modern
                    designers. Ready to bring your design ideas to life?</p>
                <div class="date-author">Jul 31,2023 | By Ivad</div>
                <div class="tag roommate">Roommate</div>
            </div>

            <div class="post">
                <h1>I need an advice about UX/UI Cou.</h1>
                <p>Dive into the world of collaborative design with Figma, the leading UX/UI design tool. Real-time
                    collaboration, cloud-based access, and intuitive features make it the top choice for modern
                    designers. Ready to bring your design ideas to life?</p>
                <div class="date-author">Jun 21,2023 | By Obaid</div>
                <div class="tag books">Books</div>
            </div>

            <div class="post">
                <h1>I need an advice about UX/UI Cou.</h1>
                <p>Dive into the world of collaborative design with Figma, the leading UX/UI design tool. Real-time
                    collaboration, cloud-based access, and intuitive features make it the top choice for modern
                    designers. Ready to bring your design ideas to life?</p>
                <div class="date-author">May 5,2023 | By Leena</div>
                <div class="tag courses">Courses</div>
            </div>
        </div>

        <div class="right-section">

            <div class="new-posts">
                <h2>New Posts</h2>
                <!-- Sample post, you can duplicate for more -->
                <div class="new-post">
                    <p>I need an advice about UX/UI Cou.</p>
                    <div class="date-author">May 5,2023 | By Leena</div>
                </div>
                <div class="new-post">
                    <p>I need an advice about UX/UI Cou.</p>
                    <div class="date-author">May 5,2023 | By Leena</div>
                </div>
                <div class="new-post">
                    <p>I need an advice about UX/UI Cou.</p>
                    <div class="date-author">May 5,2023 | By Leena</div>
                </div>

            </div>
        </div>
    </div>

</div>
</body>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('js/bootstrap-tagsinput-angular.js')}}"></script>
<script src="{{asset('owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('js/jquery-te-1.4.0.min.js')}}"></script>
<script>


</script>
<script>
    $(document).ready(function () {
        var owl = $(".owl-carousel1");
        owl.owlCarousel({
            rtl: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2500,
            autoplayHoverPause: true,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 5,
                },
                1000: {
                    items: 8,
                },
            },
        });
    });
</script>
</html>
