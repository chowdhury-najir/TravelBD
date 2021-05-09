
<?php 

$imgs=json_decode($hotel->image);
?>
<div class="col-lg-6 col-md-6">
    <div class="single_place">
        <img  src="{{asset('storage/img/'.$imgs[0] )}}" width="400" height="300" alt="">
    
        <div class="hover_Text d-flex align-items-end justify-content-between">
            <div class="hover_text_iner">
                <a href="#" class="place_btn">visit</a>
                <h3>{{$hotel->name}}</h3>
                <p>{{$hotel->address}}</p>
                <p>{{$hotel->contact}}</p>
                
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
