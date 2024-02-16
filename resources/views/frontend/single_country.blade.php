
@extends('layouts.frontend.frontend')
@section('frontend')
<section class="project_single_area">
<div class="container">
<div class="project_single_inner">
<div class="project_single_slider">
<div id="slider" class="flexslider">
<ul class="slides">
<img style="height: 300px;border:1px green solid" src="{{ asset($single_country_infos->country_image) }}" alt="">
</ul>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="project_summery">
<h4 class="project_title">Country  Summery</h4>
<br>
<ul>
<li><a href="#">Country Name : <span>{{$single_country_infos->country_name}}</span> </a></li>
<!--<li><a href="#">Working Company: <span>@foreach (explode(',', $single_country_infos['working_company']) as $company)-->
<!--     {{$company}}-->
<!--@endforeach</span></a></li>-->
{{-- <li><a href="#">Value: <span>$154543</span></a></li> --}}
{{-- <li><a href="#">Year Completed: <span>April 2010</span> </a></li> --}}
<li><a href="#">Year: <span>{{date('Y')}}</span></a></li>
<!--<li><a href="#">No Of ManPower: <span>{{150}}/{{date('M')}}</span></a></li>-->
{{-- <li><a href="#">Location: <span>123, ABC Road, London</span></a></li>
<li><a href="#">Investors website: <span>www.domain.com</span></a></li> --}}
</ul>
<p>{{$single_country_infos->country_description}}</p>
</div>
</div>
<div class="col-md-6">
<div class="project_discription">
<h4 class="project_title">DOCUMENTS NEEDED FOR  {{$single_country_infos->country_name}}</h4>
<ol style="list-style-type: upper-roman;">
	@foreach ($singleContry_docs as $singleContry_doc)
		<li style="font-size: 20px;color: green;font-weight: bolder;"><i class="fa fa-file"></i>{{$singleContry_doc->doc_title}}</li>
		<a style="text-decoration: underline;" href="{{ route('download.sample_docs',$singleContry_doc->doc_id) }}">Download</a>
	@endforeach
	
</ol>
</div>

</div>
</div>

</div>
</div>
</section>


<section class="our_latest_project">
	
<div class="container">
<h3 class="out_title">Our Latest Country</h3>
<div class="our_latest_slider owl-carousel">
	@foreach ($our_latest_country as $our_latest_cnty)
		<div class="item">
<div class="project_item">
<img src="{{ asset($our_latest_cnty->country_image) }}" alt="">
<div class="project_hover">
<div class="project_hover_inner">
<div class="project_hover_content">
<a href="#"><h4>{{$our_latest_cnty->country_name}}</h4></a>
<p>{{Str::limit($our_latest_cnty->country_description,60)}}</p>
<a class="view_btn" href="{{ route('single_country',$our_latest_cnty->country_id) }}">View Project</a>
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