@extends('layouts.main')
@section('content')
<section class="top_place section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Top Places to visit</h2>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                    </div>
                </div>
            </div>
            <div class="row">
             @foreach($blogs as $blog)
                @include('layouts.places')
             @endforeach
                
            </div>
        </div>
 </section>

 @endsection