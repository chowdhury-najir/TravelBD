@extends('layouts.main')

<script>
function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
</script>

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card text-center">
                <div class="card-header bg-primary "><h3>Create Blog </h3></div>
                <div class="card-body bg-light">
                    <form method="POST" action="{{ route('blog.stores') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-lg-4 col-form-label text-lg-right">{{ __('title')}}</label>
                            <div class="col-lg-6">
                                <input id="title" type="text" class="form-control" name="title"  required autocomplete="title" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tag" class="col-lg-4 col-form-label text-lg-right">{{ __('Tag') }}</label>

                            <div class="col-lg-6">
                                <select id="tag"  class="form-control" name="tag"  required  autofocus>
                                    <option>
                                    Travel
                                    </option>
                                  
                                    <option>
                                    Food
                                    </option>
                                    <option>
                                    Transport
                                    </option>
                                    <option>
                                    Restaurant
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                         
                                  <label for="blog_body" class="col-lg-4 col-form-label text-lg-right" >Blog Body</label>
                
                                <div class="col-lg-6">
                                <textarea class="form-control" id="blog_body" name="blog_body" rows="4" required ></textarea>
                                </div>
                        </div>
                        

                        <div class="form-group row">
                            <div class="col-lg-4 text-lg-right py-3">Upload Images</div>
                        
                            <div class="col-lg-6">
                                <input type="file" class="form-control" id="images" name="image[]" onchange="preview_images();" multiple/>
                            </div>
                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary ">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    <div class="row" id="image_preview"></div>
 
                </div>
           </div>
        </div>
    </div>
</div>
@endsection