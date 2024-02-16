@extends('layouts.frontend.frontend')
@section('frontend')
<div class="container">
<div class="comment_form_area">
<h3>Contact Us</h3>
{{-- @include('sweetalert::alert') --}}
<form class="contact_us_form row" action="" method="POST" id="contactForm" novalidate="">
	@csrf
	<div class="row">
<div class="form-group col-md-6">
<input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
<div id="name_Div" style="display: none;color:red">*Name Can Not Be Empty
</div>
</div>
<div class="form-group col-md-6">
<input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
<div id="email_Div" style="display: none;color:red;">*Email Can Not Be Empty
</div>
</div>
</div>
<div class="row">
<div class="form-group col-md-6">
<input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone">
<div id="phone_Div" style="display: none;color:red;">*Phone Number Can Not Be Empty
</div>
</div>
<div class="form-group col-md-6">
<input type="text" class="form-control" id="address" name="address" placeholder="Your Address">
<div id="address_Div" style="display: none;color:red;">*Address Can Not Be Empty
</div>
</div>
</div>
<div class="row">
<div class="form-group col-md-12">
<textarea class="form-control" name="message" id="message" rows="1" placeholder="Your Message"></textarea>
<div id="massage_Div" style="display: none;color:red;">*Massage Can Not Be Empty
</div>
</div>
</div>
<br>

<div class="form-group col-md-12">
<button type="button" value="submit" onclick="submitContactInfo()" class="btn submit_btn form-control">Submit</button>
</div>
</form>
<br>
</div>
</div>
<script type="text/javascript">
	function submitContactInfo(){
		var name=document.getElementById('name').value;
		var email=document.getElementById('email').value;
		var phone=document.getElementById('phone').value;
		var address=document.getElementById('address').value;
		var message=document.getElementById('message').value;
		_token   = $('meta[name="csrf-token"]').attr('content');
		var error_check=0;
		if (name == "") {
			document.getElementById('name_Div').style.display="block";
			error_check++;
		}else{
			document.getElementById('name_Div').style.display="none";
		}	
		if (phone == "") {
			document.getElementById('phone_Div').style.display="block";
			error_check++;
		}else{
			document.getElementById('phone_Div').style.display="none";
		}	
		if (message == "") {
			document.getElementById('massage_Div').style.display="block";
			error_check++;
		}else{
			document.getElementById('massage_Div').style.display="none";
		}
		if (error_check == 0) {
				  $.ajax({  
        type: 'POST',  
        url: "{{ route('contact.registration') }}", 
        data: {
          name:name,
          email:email,
          phone:phone,
          _token:_token,
          address:address,
          message:message,
          
        },
        success: function(response) {
        	
        	console.log(response)
           if(response==1)
           {
                cuteAlert({
                      type: "success",
                      title: "Your Registration Submitted Successfully",
                      message: "We will Contact You soon",
                      buttonText: "Okay"
                    }).then((e)=>{
                         window.location.replace("{{ route('contact') }}");
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
                       window.location.replace("{{ route('contact') }}");
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