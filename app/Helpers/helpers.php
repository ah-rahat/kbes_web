<?php 
  function logo($company_name){
    $logo_path= App\Models\Frontend\Logo::select('logo_path','logo_id')->where('company_name',$company_name)->orderBy('logo_id','desc')->first();

    return $logo_path->logo_path;
      }
    function create_options($table_name)
    {
      $query=DB::select("SELECT * from $table_name");
      $options="";
      foreach ($query as $q) {
        $options.="<option value='".$q->com_type."'>".$q->com_type."</option>";
      }
      echo $options;
    }
 ?>