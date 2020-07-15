@extends('layout.master')

@section('content')

    <div id="templateBannerArea">
        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/1.jpeg')}}" alt="Banner">
        <div class="divoverlay">
            <div class="container">
                Tools We Have
            </div>

        </div>
        <div class="container">
            <h1 class="container">Maintenance</h1>

        </div>

    </div>

    <!-- Template Body Area-->
    <div class="templateBodyArea">
        <div class="container">
            <h1>Tools We Have</h1>
            <p>
                We say, we are group of professional engineers who have been contributing to the economic growth
                through serving industrial & infrastructural development of the Bangladesh by being innovative in all the
                process to make best use of the limited resources that this mother world have for us.
                Though we have started as export & import business conglomerate gradually with the excellence in all
                the engineering sectors we stepped in as EPC contractor in energy & power, brick & ceramic, feed mill, automatic
                rice & rice bran oil and fish & food cold storage industries.
                As a single source supplier or an EPC contractor, our scope of work can be divided into few segments while setting
                up an industry. Design of the project, Civil Construction of the project, out sourcing & installation of the
                machinery & equipment, Commissioning or start up of the projects.
                We believe individually & collectively, we have improvement areas, thus learning is an endless journey. Moreover,
                in this competitive era, maximum usage of limited resources & environment friendly technology are the dominant
                factors to attain sustainable competitive advantage for an organization, an industry or for a country. These maxims
                lead us to achieve our goals to be the most prevailing engineering, procurement & construction company in this
                region
            </p>
        </div>
    </div>
    <!-- End of Template Body Area-->

    <div class="container">
        <h1 style="text-align:center">Get Man power and Tools PDF below:</h1>
    </div>
    {{--Tools Pdf Files--}}
    @if(isset($pdfs) and count($pdfs) > 0)
        <div class="container">
            
            <div class="row ml-4">
                @if(isset($pdfs[0]))
                    <div class="col-md-6 col-sm-12 col-12 text-center">
                        <iframe src="{{asset('uploads/' . $pdfs[0]->uploaded_as)}}" frameborder="1" width="100%" height="200px"></iframe>
                        <a class="btn btn-info mt-2" href="{{asset('uploads/' . $pdfs[0]->uploaded_as)}}" download>Download Pdf</a>
                    </div>
                @endif

                @if(isset($pdfs[1]))
                    <div class="col-md-6 col-sm-12 col-12 text-center">
                        <iframe src="{{asset('uploads/' . $pdfs[1]->uploaded_as)}}" frameborder="1" width="100%" height="200px"></iframe>
                        <a class="btn btn-info mt-2" href="{{asset('uploads/' . $pdfs[1]->uploaded_as)}}" download="">Download Pdf</a>
                    </div>
                @endif
            </div>
        </div>
    @endif

    <!-- Featured Project Area-->
    <div class="featuredProjectArea">
        <div class="container">
            <h1>Tools Images:</h1>
            <div class="row featuredImages">
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/2.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/3.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/4.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/5.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/10.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/11.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/12.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/10.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/9.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/8.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/7.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Tools We have/6.jpeg')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Tools</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Featured Project Area-->

@endsection