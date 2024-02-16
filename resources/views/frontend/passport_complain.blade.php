@extends('layouts.frontend.frontend')
@section('frontend')
<section class="project_single_area">
	<div class="container">
		<div class="project_single_inner">
			<div class="row">
				<div class="col-md-12">
					<div class="project_discription">
						<h4 class="project_title" style="color:#5b7bbd;text-transform: uppercase;">Post Your Complain</h4>
						<form class="contact_us_form row" action="" method="post" id="contactForm" novalidate="">
							@csrf
							<div class="row">
							<div class="form-group col-md-6">

								<input type="text" onkeyup="passportVerification(this.value)" class="form-control" id="passport"  name="passport" placeholder="আপনার পাসপোর্ট নাম্বার দিন">
								<div id="pass_Div" style="color:red;display: none;">*Passport No Can Not Be Null</div>
								<div id="passOk_Div" style="color: green;display: none;">*Passport Verified <span><i class="fa fa-verified" aria-hidden="true"></i></span></div>
								<div id="passNotOk_Div"  style="color:red;display: none;">*Passport Does Not Exist</div>
								<input type="hidden" id="passport_check">

							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="contact" name="contact" placeholder="বিদেশের ফোন নাম্বার দিন">
								<div id="contact_Div" style="color:red;display: none;">*Contact No Can Not Be Null</div>
							</div>
							</div>
							<br>
							<div class="row">
							<div class="form-group col-md-6">
								<select id="complain_type" multiple  class="form-control multi">
									{{create_options('complain_type')}}
									
								</select>
								<div id="complainType_Div" style="color:red;display: none;">*Complain Type No Can Not Be Null</div>
							</div>

							<div class="form-group col-md-6">
								<textarea id="complain" rows="8" class="form-control" placeholder="আপনার সমস্যা লিখুন"></textarea>
								<div id="complain_Div" style="color:red;display: none;">*Complain No Can Not Be Null</div>
							</div>
							</div>

							<div class="form-group col-md-12">
								<button style="background-color:#5b7bbd" type="button" value="submit" class="btn submit_btn form-control" onclick="postComplain()">Submit</button>
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	function passportVerification(passport){
		_token   = $('meta[name="csrf-token"]').attr('content');
			  $.ajax({  
        type: 'POST',  
        url: "{{ route('passport_verification') }}", 
        data: {
          passport_no:passport,
          _token:_token,
          
        },
        success: function(response) {
        	
        	if (response == 1) {
        		document.getElementById('passOk_Div').style.display="block";
        		document.getElementById('passNotOk_Div').style.display="none";
        		document.getElementById('pass_Div').style.display="none";
        		document.getElementById('passport_check').value=1;
        	}else{
        		document.getElementById('passNotOk_Div').style.display="block";
        		document.getElementById('passOk_Div').style.display="none";
        		document.getElementById('pass_Div').style.display="none";
        		document.getElementById('passport_check').value=null;
        	}
        }
    });
	}

</script>
<script type="text/javascript">
	function postComplain(){
		passport_check=document.getElementById('passport_check').value;
		passport_no=document.getElementById('passport').value
		contact=document.getElementById('contact').value
		complain=document.getElementById('complain').value
		complain_type=$("#complain_type").val();

		
		_token   = $('meta[name="csrf-token"]').attr('content');
		error_check=0;
		if (passport_no == "") {
			document.getElementById('pass_Div').style.display="block";
			document.getElementById('passNotOk_Div').style.display="none";
			error_check++;
		}else{
			document.getElementById('pass_Div').style.display="none";
		}
		if (contact == "") {
			document.getElementById('contact_Div').style.display="block";
			error_check++;
		}else{
			document.getElementById('contact_Div').style.display="none";
		}
		if (complain == "") {
			document.getElementById('complain_Div').style.display="block";
			error_check++;
		}else{
			document.getElementById('complain_Div').style.display="none";
		}
		if (complain_type == null) {
			document.getElementById('complainType_Div').style.display="block";
			error_check++;
		}else{
			document.getElementById('complainType_Div').style.display="none";
		}
		if (error_check == 0 && passport_check==1) {
			  $.ajax({  
        type: 'POST',  
        url: "{{ route('complain') }}", 
        data: {
          passport_no:passport_no,
          contact:contact,
          complain:complain,
          _token:_token,
          complain_type:complain_type,
          
        },
        success: function(response) {
        	
        	console.log(response)
           if(response==1)
           {
                cuteAlert({
                      type: "success",
                      title: "Your Complain Submitted Successfully",
                      message: "We will Contact You soon",
                      buttonText: "Okay"
                    }).then((e)=>{
                         window.location.replace("{{ route('passport_complain') }}");
                        })
           }
           else
           {
                cuteAlert({
                  type: "error",
                  title: "Unexpected Problems May Occur!!",
                  message: "Try Again Please",
                  buttonText: "Okay"
                }).then((e)=>{
                       window.location.replace("{{ route('passport_complain') }}");
                    })
           }
          
        }
    });
		}else{
			 cuteAlert({
              type: "error",
              title: "Please Fix the Errors",
              message: "",
              buttonText: "Okay"
            });
		}
	}
</script>
@endsection