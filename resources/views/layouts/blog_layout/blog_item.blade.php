<article class="blog_item">
<div class="mb-5">
<?php
     $imgs= json_decode($blog->image);
           
    ?>
    <div class="blog_item_img">
    
      <div class="feature-img">
        <img class="img-fluid" src="{{asset('storage/img/'.$imgs[0] )}}" alt="">
     </div>
   
 
    
        <a href="#" class="blog_item_date">
            <h3>{{$blog->created_at->toDayDateTimeString()}}</h3>
            <p></p>
        </a>
    </div>
    

    <div class="blog_details">
        <a class="d-inline-block" href="{{url('blog/show/'.$blog->id)}}">
            <h2>{{$blog->title}}</h2>
        </a>
        <p>{{$blog->blog_body}}</p>
        <ul class="blog-info-link">
            <li><a href="#"><i class="far fa-user"></i>{{ $blog->tag}}</a></li>
            <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
        </ul>
    </div>
    </div>

    <div class="">
    
    </div>
</article>