@extends('layouts.frontend.frontend')
@section('frontend')
<section class="project_single_area">
	<div class="container">
		<div class="project_single_inner">
			<div class="row">
				<div class="col-md-12">
					<div class="project_discription">
						<h4 class="project_title" style="color:#5b7bbd;text-transform: uppercase;">kaj Bangla Passport Tracker</h4>
						<form class="contact_us_form row" action="{{ route('passport_tracker_form') }}" method="post" id="contactForm" novalidate="">
							@csrf
							<div class="form-group col-md-6">

								<input type="text" class="form-control" value="@if (!empty(
								$api_response['passport_no'])){{$api_response['passport_no']}}@endif" id="passport"  name="passport" placeholder="Passport No">
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="contact" name="contact" placeholder="Contact No">
							</div>
							<div class="form-group col-md-12">
								<button style="background-color:#5b7bbd" type="submit" value="submit" class="btn submit_btn form-control">Submit</button>
							</div>
						</form>
					</div>
					@if ($showTab==1)
					@if ($error_code == 0)
					@if ($passport_rtn == 1)
					<p style="color:red;text-align: center;font-weight: bold;text-transform: uppercase;">Passport Returned</p>
					<p style="color:red;text-align: center;font-weight: bold;">পাসপোর্টটি ফেরত নিয়ে যাওয়া হইছে</p>
					
	
			<div class="row">
				<div class="col-md-3">
					
				</div>
				<div class="col-md-6" style="border:1px gray solid">
					<div class="" style="padding-top: 25px;padding-bottom: 25px;text-align:center;">
						<h4 class="">Passenger Name/যাত্রীর নাম:&nbsp;{{$api_response['passenger_name']}}</h4>
						<h4 class="">Return Date/ফেরতের তারিখ:&nbsp;{{date('d-M-Y', strtotime($api_response['pr_dt']))}}</h4>
						<p></p>
					</div>
				</div>
				<div class="col-md-3">
					
				</div>
		
	</div>

						@elseif($passport_rtn == 0)
								<div class="project_s_tab">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#passenger_info" aria-controls="passenger_info" role="tab" data-toggle="tab">PASSENGER INFO</a></li>
							<li role="presentation"><a href="#medical" aria-controls="medical" role="tab" data-toggle="tab">MEDICAL INFO</a></li>
							<li role="presentation"><a href="#visa" aria-controls="visa" role="tab" data-toggle="tab">VISA INFO</a></li>
							<li role="presentation"><a href="#flight" aria-controls="flight" role="tab" data-toggle="tab">Flight INFO</a></li>
							<li role="presentation"><a href="#pcr" aria-controls="pcr" role="tab" data-toggle="tab">PCR INFO</a></li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active fade in" id="passenger_info">
								<div class="row">
									<div class="col-md-4">
										<table class="styled-table">
											<thead>
												<tr>
													<th>Passenger Name</th>
													<th>{{$api_response['passenger_name']}}</th>
												</tr>
												<tr>
													<th>Passport No</th>
													<th>{{$api_response['passport_no']}}</th>
												</tr>
												<tr>
													<th>Passport Issue Date</th>
													<th>{{$api_response['passport_issue_dt']}}</th>
												</tr>
												<tr>
													<th>Passport Expire Date</th>
													<th>{{$api_response['passport_expire_dt']}}</th>
												</tr>
												<tr>
													<th>Date Of Birth</th>
													<th>{{$api_response['date_of_birth']}}</th>
												</tr>
												<tr>
													<th>Email</th>
													<th>{{$api_response['email']}}</th>
												</tr>
												<tr>
													<th>Present Address</th>
													<th>{{$api_response['present_address']}}</th>
												</tr>
												<tr>
													<th>Parmarent Address</th>
													<th>{{$api_response['parmanent_address']}}</th>
												</tr>
												
											</thead>
											
										</table>
									</div>
									<div class="col-md-4">
										<table>
											<thead>
												<tr>
													<th>Passenger Image</th>
												</tr>
												<tr>
													
													<th><img height="150px" width="150px" src="{{$url}}/{{$api_response['passenger_img']}}"></th>
												</tr>

												<tr>
													<th><button class="btn btn-primary" style="background-color: #007bff;border-color: #007bff;color: #fff;margin-top: 2px" onclick="ShowImg('{{$url}}{{$api_response['passenger_img']}}')">View</button></th>
												</tr>
												<tr>
													<th>------------------------------</th>
												</tr>
												<tr>
													<th>Passport Image</th>
												</tr>
												<tr>
													
													<th><img height="150px" width="150px" src="{{$url}}/{{$api_response['passport_img']}}"></th>
													
												</tr>
												<tr>
													<th><button class="btn btn-primary" style="background-color: #007bff;border-color: #007bff;color: #fff;margin-top: 2px" onclick="ShowImg('{{$url}}{{$api_response['passport_img']}}')">View</button></th>
												</tr>
											</thead>
										</table>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="medical">
								<table class="styled-table">
									@if (!empty($api_response['medical_center']))
									<thead>
										<tr>
											<th>Medical Date</th>
											<th>{{date('d-m-Y', strtotime($api_response['medical_dt']))}}</th>
										</tr>
										<tr>
											<th>Medical Expire Date</th>
											<th>{{$api_response['medical_exp_dt']}}</th>
										</tr>
										<tr>
											<th>Status</th>
											<th>@if ($api_response['medical_status'] == 1)
												{{"Waiting For Report"}}
												@elseif($api_response['medical_status'] == 2)
												{{"Fit"}}
												@elseif($api_response['medical_status'] == 3)
												{{"Unfit"}}
												@elseif($api_response['medical_status'] == 4)
												{{"Meet"}}/{{$api_response['medical_meetdt']}}
											@endif</th>
										</tr>
										<tr>
											<th>Medical Center</th>
											<th>{{$api_response['medical_center_name']}}</th>
										</tr>
									</thead>
									@else
									<p style="color:red;font-weight:bolder;text-align:center;">Medical Not Done Yet</p>
									@endif
									
									
								</table>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="visa">
								@if (!empty($api_response['visa_dt']))
									<div class="row">
									<div class="col-md-4">
										<table class="styled-table">
											<thead>
												<tr>
													<th>Visa Date</th>
													<th>{{$api_response['visa_dt']}}</th>
												</tr>
												<tr>
													<th>Visa Expire Date</th>
													<th>{{$api_response['visa_expire_dt']}}</th>
												</tr>
												<tr>
													<th>Visa No</th>
													@if (!empty($api_response['visa_no']))
														<th>{{$api_response['visa_no']}}</th>
														@else
													<th>{{"Visa No Not Available"}}</th>
													@endif

												</tr>
											</thead>
										</table>
									</div>
									<div class="col-md-4">
										<table>
											<thead>
												<tr>
													<th>Visa Image</th>
												</tr>
												<tr>
													
													<th><img height="150px" width="150px" src="{{$url}}/{{$api_response['visa_img']}}"></th>
												</tr>
												<tr>
													<th><button class="btn btn-primary" style="background-color: #007bff;border-color: #007bff;color: #fff;margin-top: 2px"  onclick="ShowImg('{{$url}}{{$api_response['visa_img']}}')">View</button></th>
												</tr>
												<tr>
													<th>------------------------------</th>
												</tr>
							
											</thead>
										</table>
									</div>
									
								</div>
								@else
								<p style="color:red;font-weight:bolder;text-align:center;">Visa Not Done Yet</p>
								@endif

							</div>
							<div role="tabpanel" class="tab-pane fade" id="flight">
								@if (!empty($api_response['flight_dt']))
									<div class="row">
									<div class="col-md-4">
										<table class="styled-table">
											<thead>
												<tr>
													<th>Flight Date</th>
													<th>{{$api_response['flight_dt']}}</th>
												</tr>
												<tr>
													<th>Flight No</th>
													<th>{{$api_response['flight_no']}}</th>
												</tr>
												<tr>
													<th>Airline Name</th>
														<th>{{$api_response['airline_name']}}</th>
												</tr>
												<tr>
													<th>Arrival Time</th>
														<th>{{ date('h:i a', strtotime($api_response['arrival_time']));}}</th>
												</tr>
												<tr>
													<th>Depatuare Time</th>
														<th>{{ date('h:i a', strtotime($api_response['dep_time']));}}</th>
												</tr>
											</thead>
										</table>
									</div>
								</div>
								@else
								<p style="color:red;font-weight:bolder;text-align:center;">Flight Not Done Yet</p>
								@endif
								
							</div>
							<div role="tabpanel" class="tab-pane fade" id="pcr">
								@if (!empty($api_response['pcr_test']))
									<div class="row">
									<div class="col-md-4">
										<table class="styled-table">
											<thead>
												<tr>
													<th>COVID-19</th>
													@if ($api_response['pcr_test']=='N')
														<th style="color:green;">{{"NEGETIVE"}}</th>
														@else
													<th style="color:red;">{{"POSITIVE"}}</th>
													@endif
												</tr>
													@if ($api_response['pcr_test']=="P")
													<tr>
														<th>NEXT PCR DATE</th>
														<th>{{$api_response['next_pcr_dt']}}</th>
													</tr>
													@endif
													
											
											{{-- 	<tr>
													<th>Flight No</th>
													<th>{{$api_response['flight_no']}}</th>
												</tr>
												<tr>
													<th>Airline Name</th>
														<th>{{$api_response['airline_name']}}</th>
												</tr>
												<tr>
													<th>Arrival Time</th>
														<th>{{ date('h:i a', strtotime($api_response['arrival_time']));}}</th>
												</tr>
												<tr>
													<th>Depatuare Time</th>
														<th>{{ date('h:i a', strtotime($api_response['dep_time']));}}</th>
												</tr> --}}
											</thead>
										</table>
									</div>
								</div>
								@else
								<p style="color:red;font-weight:bolder;text-align:center;">PCR Not Done Yet</p>
								@endif
							</div>
						</div>
					@endif
					
						@else
						<p style="color:red;text-align: center;font-weight: bold;">{{$error_msg}}</p>
						@endif
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="ibox-content">
                            <form>
                                <img src="" id="showImg" style="width: 100%;height: 100%;"> 
                            </form>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</section>
@endsection