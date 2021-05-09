@extends('layouts.main')
    @section('content')

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
                <div class="card-header bg-primary "><h3>Create New Hotels </h3></div>
                <div class="card-body bg-light">
                    <form method="POST" action="{{ route('hotel.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-lg-4 col-form-label text-lg-right">{{ __('Hotel Name')}}</label>
                            <div class="col-lg-6">
                                <input id="title" type="text" class="form-control" name="name"  required autocomplete="title" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-lg-4 col-form-label text-lg-right">{{ __('City') }}</label>

                            <div class="col-lg-6">
                                <select id="tag"  class="form-control" name="city"  required  autofocus>
                                    <option>
                                    Sylhet
                                    </option>
                                  
                                    <option>
                                    Chittagong
                                    </option>
                                    <option>
                                    Cox's Bazar
                                    </option>
                                    <option>
                                    Rangamati
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-lg-4 col-form-label text-lg-right">{{ __('Address')}}</label>
                            <div class="col-lg-6">
                                <input id="address" type="text" class="form-control" name="address"  required autocomplete="address" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact" class="col-lg-4 col-form-label text-lg-right">{{ __('Contact')}}</label>
                            <div class="col-lg-6">
                                <input id="contact" type="text" class="form-control" name="contact"  required autocomplete="contact" autofocus>
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