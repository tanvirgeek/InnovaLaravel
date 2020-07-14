<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <script src="https://kit.fontawesome.com/cd788f68fb.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/template.css')}}"/>
    <title>Innova & MEP</title>
</head>


<body>
    <!--Icons-->
    <div id="topIconArea">
        <div class="container">
            <a href="">
                <img src="{{asset('images/book.png')}}" alt="">
                <div>Products PDF</div>
            </a>
            <a href="https://www.facebook.com/innovamep/" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
    <!--End Icons-->

    <!--Navigation Area-->
    <div id="navigationArea">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="Logo" class="img-fluid logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('maintenance.index')}}" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Maintenance
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item py-0" href="{{route('maintenance.tools')}}">Tools we have</a>
                                <a class="dropdown-item py-0" href="{{route('maintenance.services')}}">Services we provide</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('epc.index')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EPC
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item py-0" href="{{route('epc.hvac')}}">HVAC</a>
                                <a class="dropdown-item py-0" href="{{route('epc.fire.safety')}}">Fire Safety</a>
                                <a class="dropdown-item py-0" href="{{route('epc.process.piping')}}">Process Piping</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('consultancy.index')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Consultancy
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item py-0" href="{{route('consultancy.electrical')}}">Electrical</a>
                                <a class="dropdown-item py-0" href="{{route('consultancy.mechanical')}}">Mechanical</a>
                                <a class="dropdown-item py-0" href="{{route('consultancy.work.reference')}}">Work Reference</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('products')}}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>
    <!--End of Navigation Area-->

    {{--body content--}}

    @yield('content')

    {{--end of body content--}}


    <!--Footer Area-->
    <div id="footerArea">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="Logo" class="img-fluid"></a>
                </div>
                <div class="col-md-3 border-right">
                    <a href="{{route('contact')}}">Contuct Us</a><br/>
                    <a href="{{route('about')}}">About Us</a><br/>
                </div>
                <div class="col-md-3">
                    <h6>Follow Us</h6>
                    <a href="https://www.facebook.com/innovamep" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="www.google.com" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="www.google.com" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">Copyright 2020 Innova & MEP Engineers Limited. All rights reserved</a>
                </div>
            </div>
        </div>
    </div>
    


    <!-- Optional JavaScript --><!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <a id="back2Top" title="Back to top" href="#" style="color:#20AFE3; background-color:black">&#10148;</a>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script>
            jQuery(function ($) {
                $('.navbar .dropdown').hover(function () {
                    $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

                }, function () {
                    $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

                });

                $('.navbar .dropdown > a').click(function () {
                    location.href = this.href;
                });
            });
        </script>
        <script src="{{asset('js/scroll.js')}}"></script>


    </body>

</html>
<!--End of footerArea-->