@extends('layout.master')

@section('content')


    <div id="templateBannerArea">
        <img src="{{asset('images/Maintenance/Maintenance Service/Projects/Photo/10.JPG')}}" alt="Banner">
        <div class="divoverlay">
            <div class="container">
                Maintenance
            </div>

        </div>
        <div class="container">
            <h1 class="container">Maintenance</h1>

        </div>

    </div>

    <!-- Template Body Area-->
    <div class="templateBodyArea">
        <div class="container">
            <h1>Maintenance</h1>
            <p>
                We are at the forefront of maintenance engineering; we deal with all equipment maintenance and are responsible
                for the continuous running of equipment and machinery. We are also use specialised computer systems to oversee routine
                maintenance and organise any repairs that are needed.
                As a provider of maintenance engineering service, we will be involved in controlling and monitoring devices, as well as occasionally helping to manufacture
                items. We will play a vital role in the competence, development and progress of manufacturing and processing industries. By working
                alongside other engineering professionals we will have the chance to improve production facilities, reduce costly breakdowns and develop your own strategies to help
                progress reliability and safety within the workplace.

                As a Maintenance engineers have a number of responsibilities and tasks in their day to day working life.
                Though not limited to, these can typically include:<br/><br/>

                Designing maintenance strategies, procedures and methods<br/>
                Carrying out maintenance work<br/>
                Responding to faults with equipment<br/>
                Diagnosing issues with equipment<br/>
                Fitting new parts and ensuring equipment is working as it should be<br/>
                Carrying out inspections<br/>
                Monitoring maintenance costs<br/>
                Dealing with unplanned issues or repairs, including emergencies<br/><br/>
                As Maintenance engineers we will generally carry out these tasks based within a plant or site, and can also involve working on the factory floor. You should also be able to work to tight deadlines, especially when in response to breakdown emergencies that need fixing right away, so it’s important to work under pressure!
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
                        <img src="{{asset('images/Maintenance/Maintenance Service/Projects/Photo/2.JPG')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Maintenance Project</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Projects/Photo/3.JPG')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Maintenance Project</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Projects/Photo/6.JPG')}}" alt="EPC1" class="imageTemplate img-fluid">
                        <div class="overlayTemplate">
                            <div class="textTemplate">Maintenance Project</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="containerImage">
                        <img src="{{asset('images/Maintenance/Maintenance Service/Projects/Photo/7.JPG')}}" alt="EPC1" class="imageTemplate img-fluid">
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