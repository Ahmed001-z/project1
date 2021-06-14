@extends('layouts.app')
@section('content')

    <body>
    <div id="colorlib-page">
        <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                <div class="text-center">
                    <div class="author-img" style="background-image: url({{$setting->photo}});"></div>
                    <h1 id="colorlib-logo"><a href="/">{{$setting->name}}</a></h1>
                    <span class="position"><a href="/"></a>{{$setting->title}}</span>
                </div>
                <nav id="colorlib-main-menu" role="navigation" class="navbar">
                    <div id="navbar" class="collapse">
                        <ul>
                            <li class="active"><a href="#" data-nav-section="home">الرئيسية</a></li>
                            <li><a href="#" data-nav-section="about">من نحن</a></li>
                            <li><a href="#" data-nav-section="services">الخدمات التدريبية</a></li>
                            <li><a href="#" data-nav-section="research">البحوث والدراسات الإدارية</a></li>
                            <li><a href="#" data-nav-section="experience">خدمات إستشارية</a></li>
                            <li><a href="#" data-nav-section="contact">اتصل بنا</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="colorlib-footer">
                    <p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script><i class="icon-heart" aria-hidden="true"></i> by <a href="/" target="_blank">kamal majed</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </span> <span><a href="https://unsplash.com/" target="_blank"></a></span></small></p>

                </div>

            </aside>

            <div id="colorlib-main">

                @if ($files->count()>0)
                    <section id="colorlib-hero" class="js-fullheight" data-section="home">
                        <div class="flexslider js-fullheight">
                            <ul class="slides">
                                <li style="background-image: url(images/img_bg_3.jpg);">
                                    <div class="overlay"></div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                                <div class="slider-text-inner js-fullheight">
                                                    <div class="desc">
                                                        <h1 style="background-color: floralwhite">{{$files->title}}</h1>
                                                        <h2><a href="https://colorlib.com/" target="_blank"></a></h2>
                                                        <h2><a class="btn btn-primary" href="/{{$files->file}}" >تحميل السيرة الذاتية <i class="icon-download4"></i></a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </section>
                @else
                    <p scope="row" class="text-center" style="color: mediumblue;">There Is No Files Founds!!</p>
                @endif


                @if ($categorys->count()>0)
                    <section class="colorlib-experience" data-section="about">
                        <div class="colorlib-narrow-content">


                            @foreach($categorys as $category)

                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                        <h2 class="colorlib-heading">من نحن؟</h2>
                                        <p>{{$category->title}}</p>
                                    </div>
                                </div>

                            @endforeach

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="timeline-centered">

                                        @foreach($categories as $cat)


                                            <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                                                <div class="timeline-entry-inner">
                                                    <div class="timeline-icon color-2">
                                                        <i class="icon-pen2"></i>
                                                    </div>
                                                    <div class="timeline-label">
                                                        <h3>{{$cat->name}}</h3>
                                                        <p>{{$cat->small_text}}</p>

                                                    </div>
                                                </div>
                                            </article>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @else
                    <p scope="row" class="text-center" style="color: mediumblue;">There Is No Abouts founds !!</p>
                @endif


                <section class="colorlib-experience" data-section="services">
                    <div class="colorlib-narrow-content">

                        @foreach ($category2 as $cate)

                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                    <h2 class="colorlib-heading">البرامج التدريبية</h2>
                                    <p>{{$cate->title}}</p>
                                </div>
                            </div>

                        @endforeach

                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline-centered">

                                    @foreach($category_act as $cate_c)


                                        <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                            <div class="timeline-entry-inner">
                                                <div class="timeline-icon color-3">
                                                    <i class="icon-pen2"></i>
                                                </div>
                                                <div class="timeline-label">
                                                    <h3>{{ $cate_c->name }}</h3>
                                                    <p>{{$cate_c->small_text}}</p>
                                                </div>
                                            </div>
                                        </article>


                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                @if ($category_res->count()>0)

                    <section class="colorlib-experience" data-section="research">
                        <div class="colorlib-narrow-content">
                            @foreach ($category_res as $res)

                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                        <h2 class="colorlib-heading">أبحاث علمية</h2>
                                        <p>{{$res->title}}</p>
                                    </div>
                                </div>

                            @endforeach

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="timeline-centered">
                                        @foreach ($category_sm_res as $sm_res)

                                            <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
                                                <div class="timeline-entry-inner">
                                                    <div class="timeline-icon color-4">
                                                        <i class="icon-pen2"></i>
                                                    </div>
                                                    <div class="timeline-label">
                                                        <h3>{{ $sm_res->name }}</h3>
                                                        <p>{{$sm_res->small_text}}</p>
                                                    </div>
                                                </div>
                                            </article>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @else
                    <p scope="row" class="text-center" style="color: mediumblue;">There Is No  Researches Founds</p>
                @endif




                @if ($category_sc->count()>0)
                    <section class="colorlib-experience" data-section="experience">
                        <div class="colorlib-narrow-content">
                            <div class="row">

                                @foreach ($category_sc as $sc)

                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                        <h2 class="colorlib-heading">خبرات استشارية</h2>
                                        <p>{{$sc->title}}</p>
                                    </div>

                                @endforeach

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="timeline-centered">

                                        @foreach ($category_sm_sc as $sm_sc)


                                            <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                                <div class="timeline-entry-inner">

                                                    <div class="timeline-icon color-1">
                                                        <i class="icon-pen2"></i>
                                                    </div>

                                                    <div class="timeline-label">
                                                        <h2>{{ $sm_sc->name }}</h2>
                                                        <p>{{$sm_sc->small_text}}</p>
                                                    </div>
                                                </div>
                                            </article>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @else
                    <p scope="row" class="text-center" style="color: mediumblue;">There Is No  Experiences Founds</p>
                @endif


                @include('includs.contacts')

            </div><!-- end:colorlib-main -->
        </div><!-- end:container-wrap -->
    </div><!-- end:colorlib-page -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Counters -->
    <script src="js/jquery.countTo.js"></script>
    <script src="https://code.iconify.design/1/1.0.5/iconify.min.js"></script>


    <!-- MAIN JS -->
    <script src="js/main.js"></script>

    </body>
    </html>

@endsection
