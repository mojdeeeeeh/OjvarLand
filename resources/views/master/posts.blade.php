@extends('layouts.master')

@section('content')
<header role="banner" class="probootstrap-header myHeader">
    <h5><p class="probootstrap-logo">O J V A R L A N D</p></h5>
</header>

<div id="two" class="full-height myDiv" >
   <div class="h-100 row align-items-center">
        <center class="col">
            <div id="app" class="container" style="vertical-alignment:middle; text-align: justify; text-justify: inter-word;">
                <h4><i class="fa fa-quote-left" aria-hidden="true"></i>
                SimpleText is the native text editor for the Apple classic Mac OS.[1] SimpleText allows editing including text formatting (underline, italic, bold, etc.), fonts, and sizes. It was developed to integrate the features included in the different versions of TeachText that were created by various software development groups within Apple.[2]
                <i class="fa fa-quote-right" aria-hidden="true"></i></4>
                &nbsp;&nbsp;
                <h5><a href="{{ route('text') }}">More</a></h5>
            </div>
        </center>
    </div>
</div>

<div id="two" class="full-height myDiv">
   <div class="h-100 row align-items-center">
        <center class="col">
            <div id="app" class="container" style="vertical-alignment:middle; text-align: justify; text-justify: inter-word;">
                <h4><i class="fa fa-quote-left" aria-hidden="true"></i>
                SimpleText is the native text editor for the Apple classic Mac OS.[1] SimpleText allows editing including text formatting (underline, italic, bold, etc.), fonts, and sizes. It was developed to integrate the features included in the different versions of TeachText that were created by various software development groups within Apple.[2]
                <i class="fa fa-quote-right" aria-hidden="true"></i></4>
                &nbsp;&nbsp;
                <h5><a href="{{ route('text') }}">More</a></h5>
            </div>
        </center>
    </div>
</div>

<div id="two" class="full-height myDiv">
   <div class="h-100 row align-items-center">
        <center class="col">
            <div id="app" class="container" style="vertical-alignment:middle; text-align: justify; text-justify: inter-word;">
                <h4><i class="fa fa-quote-left" aria-hidden="true"></i>
                SimpleText is the native text editor for the Apple classic Mac OS.[1] SimpleText allows editing including text formatting (underline, italic, bold, etc.), fonts, and sizes. It was developed to integrate the features included in the different versions of TeachText that were created by various software development groups within Apple.[2]
                <i class="fa fa-quote-right" aria-hidden="true"></i></4>
                &nbsp;&nbsp;
                <h5><a href="{{ route('text') }}">More</a></h5>
            </div>
        </center>
    </div>
</div>

<div id="two" class="full-height myDiv">
   <div class="h-100 row align-items-center">
        <center class="col">
            <div id="app" class="container" style="vertical-alignment:middle; text-align: justify; text-justify: inter-word;">
                <h4><i class="fa fa-quote-left" aria-hidden="true"></i>
                SimpleText is the native text editor for the Apple classic Mac OS.[1] SimpleText allows editing including text formatting (underline, italic, bold, etc.), fonts, and sizes. It was developed to integrate the features included in the different versions of TeachText that were created by various software development groups within Apple.[2]
                <i class="fa fa-quote-right" aria-hidden="true"></i></4>
                &nbsp;&nbsp;
                <h5><a href="{{ route('text') }}">More</a></h5>
            </div>
        </center>
    </div>
</div>


{{-- <footer class="page-footer font-small blue fixed-bottom" style="padding-right: 50px!important; padding-bottom: 20px">
    <div class="footer-copyright text-right py-3">
        <a href="{{ route('posts') }}">More articles</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ route('text') }}">Members</a>
    </div>
</footer> --}}
<footer class="footer" id="contact" style="padding-right: 50px!important; padding-bottom: 20px">
    <div class="text-right">
        <a href="{{ route('members') }}">Members</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ route('master') }}">Home</a>
    </div>
</footer>
@endsection
