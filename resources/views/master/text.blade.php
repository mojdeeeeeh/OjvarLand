@extends('layouts.master')

@section('content')

<header role="banner" class="probootstrap-header myHeader">
    <h5><p class="probootstrap-logo">O J V A R L A N D</p></h5>
</header>

<div>
   <div class="row align-items-center" style="margin-bottom: 5%">
        <center class="col">
            <div id="app" class="container" style="vertical-alignment:middle; text-align: justify; text-justify: inter-word;">
                <h4><i class="fa fa-quote-left" aria-hidden="true"></i>
                SimpleText is the native text editor for the Apple classic Mac OS.[1] SimpleText allows editing including text formatting (underline, italic, bold, etc.), fonts, and sizes. It was developed to integrate the features included in the different versions of TeachText that were created by various software development groups within Apple.[2]
                <i class="fa fa-quote-right" aria-hidden="true"></i></h4>
            </div>
        </center>
    </div>

    <div class="row align-items-center">
        <center class="col">
            <div id="app" class="container" style="vertical-alignment:middle; text-align: justify; text-justify: inter-word;">
                <p>
                It can be considered similar to Windows' WordPad application. In later versions it also gained additional read only display capabilities for PICT files, as well as other Mac OS built-in formats like Quickdraw GX and QTIF, 3DMF and even QuickTime movies.[2] SimpleText can even record short sound samples and, using Apple's PlainTalk speech system, read out text in English. Users who wanted to add sounds longer than 24 seconds, however, needed to use a separate program to create the sound and then paste the desired sound into the document using ResEdit.[2]

                    SimpleText superseded TeachText, which was included in System Software up until Mac OS 8. The need for SimpleText arose after Apple stopped bundling MacWrite, to ensure that every user could open and read Readme documents.

                    The key improvement of SimpleText over TeachText was the addition of text styling. The underlying OS required by SimpleText implemented a standard styled text format, which meant that SimpleText could support multiple fonts and font sizes. Prior Macintosh OS versions lacked this feature, so TeachText supported only a single font per document. Adding text styling features made SimpleText WorldScript-savvy, meaning that it can use Simplified and Traditional Chinese characters.[3] Like TeachText, SimpleText was also limited to only 32 kB of text in a document,[2] although images could increase the total file size beyond this limit. SimpleText style information was stored in the file's resource fork in such a way that if the resource fork was stripped (such as by uploading to a non-Macintosh server), the text information would be retained.

                    In Mac OS X, SimpleText is replaced by the more powerful TextEdit application, which reads and writes more document formats as well as including word processor-like features such as a ruler and spell checking. TextEdit's styled text format is RTF, which is able to survive a single-forked file system intact.

                    Apple has released the source code for a Carbon version of SimpleText in the Mac OS X Panther Developer Tools. If the Developer Tools are installed, it can be found at /Developer/Examples/Carbon/SimpleText.
                <p>
            </div>
        </center>
    </div>
</div>

<footer class="footer" id="contact" style="padding-right: 50px!important; padding-bottom: 20px">
    <div class="text-right">
        <a href="{{ route('posts') }}">More articles</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ route('master') }}">Home</a>
    </div>
</footer>
@endsection
