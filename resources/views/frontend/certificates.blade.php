@extends('layouts.frontend.frontend')
@section('frontend')
<section class="our_project2_area project_grid_three">
	<div class="container">
		<div class="main_c_b_title">
			<h2>Our<br class="title_br">CERTIFICATES & ACCREDITATION </h2>
			<h6>Great & Awesome Works</h6>
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
			@foreach ($certificates as $certificate)
			<div class="col-md-4 col-sm-6 building isolation interior">
				<div class="project_item">
					<img height="300px" style="border: 1px green solid" src="{{ asset($certificate->cert_img) }}" alt="">
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection