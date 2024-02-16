@extends('layouts.frontend.frontend')
@section('frontend')
<section class="our_project2_area project_grid_three">
<div class="container">
<div class="main_c_b_title">
<h2>Kaj Bangla<br class="title_br">Gellery</h2>
{{-- <h6>Great & Awesome Works</h6> --}}
</div>

<div class="row our_project_details">
	@foreach ($gallaries as $gallary)
<div class="col-md-4 col-sm-6 building isolation interior">
<div class="project_item">
<img height="300px" style="border:1px solid green;" src="{{ asset($gallary->g_img) }}" alt="">

</div>
</div>
@endforeach


</div>
</div>
</section>
@endsection