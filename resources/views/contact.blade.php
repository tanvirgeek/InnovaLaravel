@extends('layout.master')

@section('content')
    <div id="templateBannerArea">
        <img src="{{asset('images/EPC/EPC or Turnkey solution/Project/4. Orion Power Rupsha Limited, 105 MW Power Plant/OPRL 03.JPG')}}" alt="Banner">
        <div class="divoverlay">
            <div class="container">
                Contact Us
            </div>

        </div>
        <div class="container">
            <h1 class="container">Contact us</h1>
        </div>

    </div>

    <!-- Template Body Area-->
    <div class="templateBodyArea">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>The Office</h1>
                    <p>Address: House # 358-360, Road # 05, Mirpur DOHS, Dhaka-1216. <br/>
                        Phone: +88028080545, +8801819504816, +8801717758090<br/>
                        Email: info@innovaepc.net, info.innovaepc@gmail.com, coo.innovaepc@gmail.com
                    </p>
                </div>
                <div class="col-md-6">
                    @if(isset($success))
                        <p class="alert alert-success text-success ml-0">{{$success}}</p>
                    @endif
                    <h1>Write us a message</h1>
                    <div class="containerContact">
                        <form action="{{route('contact.post')}}" method="post">
                            {{ csrf_field() }}
                            <label for="fname"> Name</label>
                            <input type="text" id="fname" name="name" placeholder="Your name.." required>

                            <label for="lname">Email</label>
                            <input type="email" id="email" name="email" placeholder="email" required>

                            <label for="subject">Message</label>
                            <textarea id="subject" name="message" placeholder="Write something.." style="height:200px" required></textarea>

                            <input id="sendEmail" type="submit" value="Submit">

                            <div class="float-right mt-3" id="loading">
                                <div class="spinner-border text-info"  role="status"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- End of Template Body Area-->
@endsection



