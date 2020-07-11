@extends('layout.master')

@section('content')
    <div id="templateBannerArea">
        <img src="{{asset('images/grey.jpg')}}" alt="Banner">
        <div class="divoverlay">
            <div class="container">
                Electrical Consultancy
            </div>

        </div>
        <div class="container">
            <h1 class="container">Consultancy</h1>

        </div>

    </div>

    <!-- Template Body Area-->
    <div class="templateBodyArea">
        <div class="container">
            <h1>Electrical</h1>
            <p>
                Consultancy services including design, drawing, engineering of entire electrical installation.<br/>
                Preparation of technical bid in respect of the requirements of the scheme, Bill of Material, cable schedule, termination schedule, SLD, switchyard layout, trench layout design and drawings of associated civil work.<br/>
                Preparation of estimate for the work involved.<br/>
                Services for supervision on erection, testing and commissioning<br/>
                Project coordination and monitoring. <br/>
            </p>
        </div>
    </div>
    <!-- End of Template Body Area-->
@endsection