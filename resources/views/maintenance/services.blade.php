@extends('layout.master')

@section('content')

    <div id="templateBannerArea">
        <img src="{{asset('images/Maintenance/Maintenance Service/Projects/Photo/6.JPG')}}" alt="Banner">
        <div class="divoverlay">
            <div class="container">
                Services We Provide
            </div>

        </div>
        <div class="container">
            <h1 class="container">Maintenance</h1>

        </div>

    </div>

    <!-- Template Body Area-->
    <div class="templateBodyArea">
        <div class="container">
            <h1>Services We Provide</h1>
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


    <!-- Featured Project Area-->
    <div class="featuredProjectArea">
        <div class="container">
            <h1>Featured Projects</h1>
            <div class="row featuredImages">
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Projects/Photo/8.JPG')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Maintenance Project</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Projects/Photo/9.JPG')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Maintenance Project</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Projects/Photo/10.JPG')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Maintenance Project</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Projects/Photo/11.JPG')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Maintenance Project</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Featured Project Area-->

@endsection