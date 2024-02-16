@extends('layouts.frontend.frontend')
@section('frontend')
<section class="project_single_area">
	<div class="container">
		<div class="project_single_inner">
			
			<div class="row">
				<div class="col-md-6">
					
					
					<div id="slider" class="flexslider">
						<ul class="slides">
							<br>
							<br>
							
							<li><img  src="{{ asset($management_massage->m_image) }}" alt=""></li>
						</ul>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="project_discription">
						<h4 class="project_title">{{$management_massage->m_name}}</h4>
						<span style="font-weight: bold;">{{$management_massage->m_designation}}
							<br>
						Kaj Bangla Employment Services RL-1345</span>
					    <br>
					    <br>
						<p>{{$management_massage->m_massage}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection