
<?php
    if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
        //Send request and receive latitude and longitude
        $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
        $json = @file_get_contents($url);
        $data = json_decode($json);
        $status = $data->status;
        if($status=="OK"){
            $location = $data->results[0]->formatted_address;
        }else{
            $location =  'No location found.';
        }
        echo $location; 
    } 
?>
<?php
  $lat= 26.754347; //latitude
  $lng= 81.001640; //longitude
  $address= getaddress($lat,$lng);
  if($address)
  {
    echo $address;
  }
  else
  {
    echo "Not found";
  }
?>
