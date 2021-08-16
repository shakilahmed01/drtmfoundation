@extends('ngo.app')
@section('content')

<div class="event-box">
    <img src="{{asset('Dashboard/assets/images/events/image_04.jpg')}}" alt="">
    <h4>Child Education in Africa</h4>
    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
    <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>

  <br>
  <br>
  <form id="donate_form" method="POST" action="{{route('post_donate')}}">
    @csrf
  <div class="row">
    <div class="col-auto">
      <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" autofocus placeholder="First Name">
    </div>
    <div class="col-auto">
      <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" required autocomplete="last_name" autofocus placeholder="Last Name">
    </div>
    <div class="col-auto">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
    </div>
    <div class="col-auto">
      <input type="numeric" class="form-control @error('amount') is-invalid @enderror" name="amount" required autocomplete="amount" autofocus placeholder="50$">
    </div>
    <button class="btn btn-primary" id="btn-submit" type="submit" >Submit</button>
  </div>
</form>

<br>
<br>


</div>


@endsection
