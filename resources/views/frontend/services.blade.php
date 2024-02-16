@extends('layouts.frontend.frontend')
@section('frontend')
<section class="our_project2_area project_grid_three">
<div class="container">
<div class="main_c_b_title">
<h2>Our<br class="title_br">Services</h2>
<h6>Great & Awesome Services</h6>
</div>
{{-- <ul class="our_project_filter">
<li class="active" data-filter="*"><a href="#">All</a></li>
<li data-filter=".building"><a href="#">Buildings</a></li>
<li data-filter=".interior"><a href="#">Interior</a></li>
<li data-filter=".design"><a href="#">Design</a></li>
<li data-filter=".isolation"><a href="#">Isolation</a></li>
<li data-filter=".plumbing"><a href="#">Plumbing</a></li>
<li data-filter=".tiling"><a href="#">Tiling</a></li>
</ul> --}}
<div class="row our_project_details">
	@foreach ($services as $service)
	<div class="col-md-4 col-sm-6 building isolation interior">
<div class="project_item">
<img width="300px" height="300px" src="{{ asset($service->ser_img) }}" alt="">
<div class="project_hover">
<div class="project_hover_inner">
<div class="project_hover_content">
<a href="#"><h4>{{$service->ser_title}}</h4></a>
<p>{{Str::limit($service->ser_description,100)}}</p>
<a class="view_btn" href="{{ route('single_services',$service->ser_id) }}">Read Details</a>
</div>
</div>
</div>
</div>
</div>
	@endforeach


</div>
</div>
</section>

@endsection