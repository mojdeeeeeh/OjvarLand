@extends('layouts.master')

@section('content')
<header role="banner" class="probootstrap-header myHeader">
    <h5><p class="probootstrap-logo">O J V A R L A N D</p></h5>
</header>

<div class="container">
    <div class="row">
        <div class="card-group">
          <div class="card" style="margin: 5px;">
            <center>
                <img class="card-img-top profile-image" src="{{asset('template/img/person_3.jpg') }}" alt="Card image cap">
            </center>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card" style="margin: 5px;">
            <center>
                <img class="card-img-top profile-image" src="{{asset('template/img/person_3.jpg') }}" alt="Card image cap">
            </center>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card" style="margin: 5px;">
            <center>
                <img class="card-img-top profile-image" src="{{asset('template/img/person_3.jpg') }}" alt="Card image cap">
            </center>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
    </div>
</div>


<footer class="footer" id="contact" style="padding-right: 50px!important; padding-bottom: 20px">
    <div class="text-right">
        <a href="{{ route('posts') }}">More articles</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ route('master') }}">Home</a>
    </div>
</footer>
@endsection
