@extends('ngo.app')
@section('content')
<!doctype html>
<html lang="en">

<head>

</head>

<body>

  <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Ask For Donate Now</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact US</li>
                </ul>
            </div>
        </div>
    </div>








    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="content">

              <form id="drequest_form" method="POST" action="{{route('post_request_donate')}}">
                @csrf
                <div style="padding:20px" class="col-sm-7">
                    <h2 >Donate Form</h2> <br>
                    <div class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>You Want to Pay</label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="amount" placeholder="Enter Your Amount" class="form-control input-sm"  ></div>
                    </div>

                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" name="message" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm"  id="btn-submit" type="submit">Send Message</button>
                        </div>
                    </div>

                </div>
              </form>
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">





                        <h2 style="margin-top:10px;">Address</h2>

                       Antonya Street, <br>
                        23/H-2, Building<br>
                        TA, AUS District<br>
                        Phone:+91 9159669599<br>
                        Email:support@smarteyeapps.com<br>
                        Website:www.smarteyeapps.com.com<br>







                    </div>


                </div>

            </div>
        </div>

    </div>






  <!--  ************************* Footer Starts Here ************************** -->




</body>


</html>
@endsection
