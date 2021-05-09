<?php
     $imgs= json_decode($blog->image);
           
     foreach($imgs as $img ) { ?>   
<div class="media post_item">
    <img src="{{asset('storage/img/'.$img )}}" alt="post">
    <div class="media-body">
        <a href="single-blog.html">
            <h3>{{$blog->title}}</h3>
        </a>
        <p>January 12, 2019</p>
    </div>
</div>
<?php } ?>


