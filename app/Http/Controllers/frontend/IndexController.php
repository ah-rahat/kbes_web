<?php

namespace App\Http\Controllers\frontend;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Frontend\Country;
use App\Models\Frontend\Service;
use App\Models\Frontend\Project;
use App\Models\Frontend\Registration;
use App\Models\Frontend\CountryDoc;
use App\Models\Frontend\Management;
use App\Models\Frontend\Certificate;
use App\Models\Frontend\Gallery;


class IndexController extends Controller
{
    public function home()
    {
        $projects=Project::where('proj_status','1')->get();
        $countries=Country::where('country_status','1')->take(6)->get();
        $base64_enc = file_get_contents('http://www.kajbanglait.com/KajBanglaAccountDesk/api/get/getProcessedPassportInfo');
        $base64_dec=base64_decode($base64_enc);
        $api_response=json_decode($base64_dec,true);
        $our_managements=Management::all();


        return view('welcome',compact('api_response','countries','projects','our_managements'));
    }   
    public function clients ()
    {
        return view('frontend/ourClients');
    } 
    public function certificates ()
    {
        $certificates=Certificate::all();
        return view('frontend/certificates',compact('certificates'));
    }   
    public function gallery ()
    {
        $gallaries=Gallery::all();
        return view('frontend/gallery',compact('gallaries'));
    }   
    public function social_activity ()
    {
        return view('frontend/social_activity');
    }    
    public function news_blogs ()
    {
        return view('frontend/news_blogs');
    }  
    public function services()
    {
        $services=Service::where('ser_status','1')->get();
        return view('frontend/services',compact('services'));
    }
    public function circular()
    {
        return view('frontend/circular');
    }
    public function career()
    {
        return view('frontend/career');
    }     
    public function about()
    {
        return view('frontend/about');
    }  
    public function kbc()
    {
        return view('frontend/kbc');
    }   
    public function rep_japan()
    {
        return view('frontend/rep_japan');
    }  
    public function female_workers()
    {
        return view('frontend/female_workers');
    }  
     public function contact()
    {
        return view('frontend/contact');
    }   
    public function single_clients()
    {
        return view('frontend/single_clients');
    } 
    public function single_country($country_id)
    {

        $single_country_infos=Country::where('country_id',$country_id)->first();
        $singleContry_docs=CountryDoc::where('country_id',$country_id)->get();
        $our_latest_country=Country::where('country_id','!=',$country_id)->get();
        
        return view('frontend/single_country',compact('single_country_infos','singleContry_docs','our_latest_country'));
    } 
    public function single_service($ser_id)
    {
        $single_services=Service::where('ser_id',$ser_id)->first();
        $latest_services=Service::where('ser_id','!=',$ser_id)->get();
        return view('frontend/single_service',compact('single_services','latest_services'));
    } 
     public function single_project ($project_id)
    {
       $single_projects=Project::where('proj_id',$project_id)->first();
       $latest_projects=Project::where('proj_id','!=',$project_id)->get();
        return view('frontend/single_project',compact('single_projects','latest_projects'));
    }
    public function passport_tracker()
    {
        $showTab=0;
        
        return view('frontend/passport_tracker',compact('showTab'));
    } 
    public function passport_tracker_form(Request $request)
    {
        $passport_no=$request->passport;
        $phone=$request->contact;
        $api_response=[];
        $error_code=NULL;
        $error_msg=NULL;
        $showTab=1;
        $url='http://www.kajbanglait.com/KajBanglaAccountDesk/';
        $jsonData='{
    "queryData":{

        "PASSPORT_NO":"'.$passport_no.'",
        "PHONE":"'.$phone.'"
    }
}';
   $base64=base64_encode($jsonData);
        $api_response = json_decode(file_get_contents('http://www.kajbanglait.com/KajBanglaAccountDesk/api/get/getPassportInfo?requestString='.$base64), true);
     
    if(isset($api_response['ERROR_CODE']) and !empty($api_response['ERROR_CODE']))
    {
        $error_code=1;
        $error_msg=$api_response['ERROR_MSG'];
        $passport_rtn=2;
    }
    else
    {
        if ($api_response['PASSPORT_RTN'] == 1) {
            $passport_rtn=1;
        }else{
            $passport_rtn=0;
            $error_code=0;
            $error_msg=NULL;
        }
        
    }
        return view('frontend/passport_tracker',compact('error_msg','error_code','api_response','showTab','url','passport_rtn'));
    }
    public function download_about_pdf()
    {

        $path='public/pdf/pdf_about/kaj_bangla_profile.pdf';
        return Storage::download($path,'kajbangla_about.pdf');
    }  
    public function download_sample_docs($doc_id)
    {
        $doc_infos=CountryDoc::where('doc_id',$doc_id)->first();
        $doc_path=$doc_infos->doc_path;
        $doc_title=$doc_infos->doc_title;

        print $path="public/county_docs/$doc_path";
        return Storage::download($path,"$doc_title.docx");
    } 
    public function registration (Request $request)
    {
        
       $storeRegistration=new Registration();
       $storeRegistration->name=$request->name;
       $storeRegistration->email=$request->email;
       $storeRegistration->phone=$request->phone;
       $storeRegistration->address=$request->address;
       $storeRegistration->message=$request->message;
       $storeRegistration->ip=$request->getClientIp();
       $storeRegistration->updated_at=NULL;
       $test=$storeRegistration->save();
       if ($test) {
           $response=1;
       }else{
        $response=2;
       }
       print $response;
       
       
       
    }  
    public function passport_complain()
    {
        
       return view('frontend/passport_complain');
    } 
    public function passport_complain_store(Request $request)
    {
        $passport_no=$request->passport_no;
        $contact=$request->contact;
        $complain=$request->complain;
        $complain_type=$request->complain_type;
        $complain_type=implode(",", $complain_type);
        
        $ip_address=$request->getClientIp();

            $jsonData='{
   "queryData":{

        "PASSPORT_NO":"'.$passport_no.'",
        "PHONE":"'.$contact.'", 
        "COMPLAIN":"'.$complain.'", 
        "IP_ADD":"'.$ip_address.'", 
        "COM_TYPE":"'.$complain_type.'" 
    }
}';

        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://www.kajbanglait.com/KajBanglaAccountDesk/api/post/postComplain',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>"$jsonData",
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: PHPSESSID=nihq7qlm13rqtoa7f03oli7llh'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
    }
   

    public function passport_verification(Request $request)
    {
        $passport_no=$request->passport_no;
             $jsonData='{
   "queryData":{

        "PASSPORT_NO":"'.$passport_no.'"
       
    }
}';
        $base64=base64_encode($jsonData);
        $api_response = json_decode(file_get_contents('http://www.kajbanglait.com/KajBanglaAccountDesk/api/get/getPassportVerificationInformation?requestString='.$base64), true);
         print $api_response;
    }
    public function management_massage ($m_id)
    {
        $management_massage=Management::where('m_id',$m_id)->first();
        return view('frontend/management_massage',compact('management_massage'));
    }
   public function admission_japan()
    {
        
        return view('frontend/admission');
    }
   
}

