@extends('layout')

@section('header')
<div id="wrapper">
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1><a href="#">Homepage </a></h1>
                <p>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a></p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- end #header -->
    <div id="menu">
        <ul>
            <li class="current_page_item"><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="/update">Update</a></li>
            <li><a href="{{route('posts.index')}}">About</a></li>
            <li><a href="/posts">Posts</a></li>
            <li><a href="/create">Create Blog</a></li>
        </ul>
    </div>
    <!-- end #menu -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <div class="post">
                        <h2 class="title"><a href="#">Welcome to Black/White </a></h2>
                        <p class="meta">Posted by <a href="#">Someone</a> on November 10, 2011
                            &nbsp;&bull;&nbsp; <a href="" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
                        <div class="entry">
                            <p><img src="images/img03.jpg" width="186" height="186" alt="" class="alignleft border" />This is <strong>Black/White </strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.  The picture in this template is from <a href="http://pdohoto.org">PDPhoto.org</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :)</p>
                            <p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.</p>
                        </div>
                    </div>
                    <div class="post">
                        <h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
                        <p class="meta">Posted by <a href="#">Someone</a> on November 8, 2011
                            &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
                        <div class="entry">
                            <p><img src="images/img03.jpg" width="186" height="186" alt="" class="alignleft border" />Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, consectetuer nisl felis ac diam. Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. Mauris vitae nisl nec metus placerat consectetuer. </p>
                        </div>
                    </div>
                    <div class="post">
                        <h2 class="title"><a href="#">Phasellus pellentesque turpis </a></h2>
                        <p class="meta">Posted by <a href="#">Someone</a> on November 8, 2011
                            &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
                        <div class="entry">
                            <p><img src="images/img03.jpg" width="186" height="186" alt="" class="alignleft border" />Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc. Donec ipsum. Proin imperdiet est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc.</p>
                        </div>
                    </div>
                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->

                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
@endsection
