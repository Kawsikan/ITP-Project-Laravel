@extends('layouts.app')

@section('content')
<div class="back">
    <img src="{{URL::asset('/img/4.jpg')}}" class="d-block w-100" height="650" alt="image">
    <div class="bottom-left">Catering</div>
</div>
<!----------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------->
<!-- Show success message when booking is made  -->
<div  class="bg-light pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <!-- Show success message when booking is made  -->
          <div class="col-md-12 text-center">
                  @if(session()->get('success'))
                  <div class="alert alert-success">
                      {{ session()->get('success') }}
                  </div>
                  @endif
          </div>
            <h2 class="featurette-heading">We have variety of Catering <span class="text-muted">Package Menu.</span></h2>
            <h2><span class="text-muted">Check out now.</span></h2>

</div>
@foreach ($cpackages as $cpackage)
<div class="bg-light pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-1">
    <div class="title">
        <h2 class="display-5">{{$cpackage->p_name}}</h2>
    </div>
    </div>
    <div class="bg-white shadow mx-auto" style="width: 75%; height: 400px; border-radius: 21px 21px 21px 21px;">
        <br>
        <img src="{{URL::asset('/img/car1.jpg')}}" height="150" width="200" alt="image">
        <div class="desc">
        <h5 class="lead">{{$cpackage->description}}</h5>
        </div>
        <br>
        <h5 class="display-5">Rs.{{$cpackage->price}} per person</h5>
        <br>
        <a class="btn btn btn-danger" href="/getPackage/{{$cpackage->id}}" title="Book Now!">BOOK NOW </a>
    </div>
    <br>
</div>
</div>
@endforeach
 @endsection