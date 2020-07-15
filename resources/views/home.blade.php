@extends('layout.master')

@section('content')

    <!--Slider Area-->
    <div id="carouselExampleCaptions" class="carousel fade-in" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/banner1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block transparentDiv">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Orion Power Rupsha Limited</h2>
                            </div>
                            <div class="col-md-6">
                                <p>105 MW Power Plant
                                </p>
                            </div>
                            <!--<div class="col-md-3">
                                <button class="sliderlearnMore">Learn More</button>
                            </div>-->
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="{{asset('images/EPC/EPC or Turnkey solution/Project/7. Olympic Indusries Limited/Olympic 01.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block transparentDiv">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Olympic Indusries Limited</h2>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    EPC work done
                                </p>
                            </div>
                            <!--<div class="col-md-3">
                                <button class="sliderlearnMore">Learn More</button>
                            </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--End of sliderArea-->

    <!--Help Client Area-->
    <div id="helpClientArea">
        <div class="container">
            <h1>Integrating the best minds and technology to help clients create exceptional built environments.</h1>
            <p>Innova & MEP is a leading Bangladeshi engineering firm that specializes in full-service MEP, 
                EPC, Consultancy, Maintenance, commissioning also we sell products. We provide a full
                range of engineering services for projects of every size and budget. Please check our other pages to know more.</p>
        </div>
    </div>
    <!--Help Client Area-->

    <!--OurProjectArea-->
    <div id="ourProjectArea">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-4 overlayParent">
                            <img src="{{asset('images/banner1.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="textOurProject">Orion Power Rupsha Limited 105 MW, EPC</div>
                            </div>
                        </div>
                        <div class="col-md-4 overlayParent">
                            <img src="{{asset('images/EPC/EPC or Turnkey solution/Project/6. Modhumoti 100MW HFO Based Power Plant/Modhumoti 01.JPG')}}" alt="">
                            <div class="overlay">
                                <div class="textOurProject">Modhumoti 100MW HFO based Power Plant</div>
                            </div>
                        </div>
                        <div class="col-md-4 overlayParent">
                            <img src="{{asset('images/EPC/EPC or Turnkey solution/Project/7. Olympic Indusries Limited/Olympic 01.jpg')}}" alt="">
                            <div class="overlay">
                                <div class="textOurProject">Olympic Industries Limited</div>
                            </div>
                        </div>
                        <div class="col-md-4 overlayParent">
                            <img src="{{asset('images/EPC/EPC or Turnkey solution/Project/1. Bhola 225 MW Combine Cycle Power Plant/1.jpeg')}}" alt="">
                            <div class="overlay">
                                <div class="textOurProject">Bhola 225MW Power Plant, EPC</div>
                            </div>
                        </div>
                        <div class="col-md-4 overlayParent">
                            <img src="{{asset('images/EPC/EPC or Turnkey solution/Project/2. Orion Power Sonargaon Limited/3.JPG')}}" alt="">
                            <div class="overlay">
                                <div class="textOurProject">Orion Power Sonargaon Limited</div>
                            </div>
                        </div>
                        <div class="col-md-4 overlayParent">
                            <img src="{{asset('images/EPC/EPC or Turnkey solution/Project/4. Orion Power Rupsha Limited, 105 MW Power Plant/ULJT5618.JPG')}}" alt="">
                            <div class="overlay">
                                <div class="textOurProject">Howard Johnson Hotel</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 OurProjectsDiv">
                    <h3 class="ourprojects marginleft">
                            <span>Our
                            </span>Projects</h3>
                    <p class="ourprojectsp marginleft">At Innova & MEP , our goal remains unchanged, we continue to
                        focus on the
                        advancement of our engineering practice. Through thoughtful engagement with our
                        clients we design across a diverse market base to enhance the built environment.
                        Take a look.</p>
                    <!--<button class="marginleft">See All Projects</button>
                    <br>
                    <p class="marginleft">
                        <strong>New!</strong>Create your customized Project Brochure.

                        <span>Learn More</span>
                    </p> -->
                </div>
            </div>
        </div>
    </div>
    <!--OurProjectArea-->

    <!--Our Services area-->

    <div id="ourServicesArea">

        <div class="container">
            <h3>Our Services</h3>
            <div class="row">
                <div class="col-md-2 overlayParent">
                    <img src="{{asset('images/EPC/EPC or Turnkey solution/Project/6. Modhumoti 100MW HFO Based Power Plant/Modhumoti 01.JPG')}}" alt="">
                    <div class="overlay"></div>
                    <div class="text">EPC</div>
                </div>
                <div class="col-md-2 overlayParent">
                    <img src="{{asset('images/EPC/EPC or Turnkey solution/Project/7. Olympic Indusries Limited/Olympic 01.jpg')}}" alt="">
                    <div class="overlay"></div>
                    <div class="text">Maintenance</div>
                </div>
                <div class="col-md-2 overlayParent">
                    <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/11.jpeg')}}" alt="">
                    <div class="overlay"></div>
                    <div class="text">MEP</div>
                </div>
                <div class="col-md-2 overlayParent">
                    <img src="{{asset('images/banner1.jpg')}}" alt="">
                    <div class="overlay"></div>
                    <div class="text">HVAC</div>
                </div>
                <div class="col-md-2 overlayParent">
                    <img src="{{asset('images/EPC/EPC or Turnkey solution/Project/2. Orion Power Sonargaon Limited/4.JPG')}}" alt="">
                    <div class="overlay"></div>
                    <div class="text">Fire Life Safety</div>
                </div>
                <div class="col-md-2 overlayParent">
                    <img src="{{asset('images/EPC/EPC or Turnkey solution/Project/2. Orion Power Sonargaon Limited/6.JPG')}}" alt="">
                    <div class="overlay"></div>
                    <div class="text">Consultancy</div>
                </div>
            </div>
        </div>
    </div>
    <!--End of ourServices Area-->

@endsection