
<?php 

$imgs=json_decode($blog->image);
?>
<div class="col-lg-6 col-md-6">
    <div class="single_place">
        <img class="img-fluid" src="{{asset('storage/img/'.$imgs[0] )}}" alt="">
    
        <div class="hover_Text d-flex align-items-end justify-content-between">
            <div class="hover_text_iner">
                <a href="#" class="place_btn">visit</a>
                <h3>{{$blog->title}}</h3>
                <p>{{$blog->tag}}</p>
                <div class="place_review">
                    <a href="#"><i class="fas fa-star"></i></a>
                    <a href="#"><i class="fas fa-star"></i></a>
                    <a href="#"><i class="fas fa-star"></i></a>
                    <a href="#"><i class="fas fa-star"></i></a>
                    <a href="#"><i class="fas fa-star"></i></a>
                    <span>(210 review)</span>
                </div>
            </div>
            <div class="details_icon text-right">
                <i class="ti-share"></i>
            </div>
        </div>
    </div>
 </div>
