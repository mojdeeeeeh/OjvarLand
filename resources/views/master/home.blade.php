@extends('layouts.master')

@section('content')
<header role="banner" class="probootstrap-header myHeader">
    <h5><p class="probootstrap-logo">O J V A R L A N D</p></h5>
</header>

<div style="height:110vh" class="full-height">
   <div class="h-100 row align-items-center">
        <center class="col">
            <div id="app" class="container" style="vertical-alignment:middle; text-align: justify; text-justify: inter-word;">
              <div class="row">
                {{-- Hide icon in sm size --}}
                <div class="col-lg-2 col-md-3 d-none d-sm-block">
                  <i class="fa fa-puzzle-piece big-icon" aria-hidden="true"></i>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-12">
                  <h3><i class="fa fa-quote-left" aria-hidden="true"></i>
                  SimpleText is the native text editor for the Apple classic Mac OS.[1] SimpleText allows editing including text formatting (underline, italic, bold, etc.), fonts, and sizes. It was developed to integrate the features included in the different versions of TeachText that were created by various software development groups within Apple.[2]
                  <i class="fa fa-quote-right" aria-hidden="true"></i></h3>
                  &nbsp;&nbsp;
                  <h5><a href="{{ route('text') }}">More</a></h5>
                </div>
              </div>
            </div>
        </center>
    </div>
</div>

<footer class="footer" id="contact" style="padding-right: 5%!important; padding-bottom: 5%">
    <div class="text-right">
        <a href="{{ route('posts') }}">More articles</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ route('members') }}">Members</a>
    </div>
</footer>
@endsection
