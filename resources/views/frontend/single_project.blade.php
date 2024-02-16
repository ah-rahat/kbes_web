@extends('layouts.frontend.frontend')
@section('frontend')
<section class="project_single_area">
<div class="container">
<div class="project_single_inner">
<div class="project_single_slider">
<div id="slider" class="flexslider">
<ul class="slides">
<li><img style="height:300px" src="{{ asset($single_projects->proj_image) }}" alt=""></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="project_summery">
<h4 class="project_title">Projects  Summery</h4>
<br>
<ul>
<li><a href="#">Project’s Name : <span style="text-transform: uppercase;font-weight: bolder;">{{$single_projects->proj_title}}</span> </a></li>
@if ($single_projects->proj_link)
<li><a target="_blank" href="{{$single_projects->proj_link}}">To Know More: <span style="color:red;font-weight:bolder;">Click Here</span></a></li>
@endif
{{-- <li><a href="#">Value: <span>$154543</span></a></li>
<li><a href="#">Year Completed: <span>April 2010</span> </a></li>
<li><a href="#">Area: <span>21,000 m2</span></a></li>
<li><a href="#">Architect: <span>Masud & Rocky</span></a></li>
<li><a href="#">Location: <span>123, ABC Road, London</span></a></li>
<li><a href="#">Investors website: <span>www.domain.com</span></a></li> --}}
</ul>
</div>
</div>
<div class="col-md-6">
<div class="project_discription">
<h4 class="project_title">Project Description</h4>
<p>{{$single_projects->proj_description}}</p>
</div>

</div>
</div>

</div>
</div>
</section>


<section class="our_latest_project">
<div class="container">
<h3 class="out_title">Our Latest Projects</h3>
<div class="our_latest_slider owl-carousel">
@foreach ($latest_projects as $latest_project)
	<div class="item">
<div class="project_item">
<img height="300px" width="300px" src="{{ asset($latest_project->proj_image) }}" alt="">
<div class="project_hover">
<div class="project_hover_inner">
<div class="project_hover_content">
<a href="#"><h4>{{$latest_project->proj_title}}</h4></a>
<p>{{Str::limit($latest_project->proj_description,120)}}</p>
<a class="view_btn" href="{{ route('single_projects',$latest_project->proj_id) }}">View Project</a>
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