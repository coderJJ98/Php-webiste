Hello 

Greetings from IndiaSMS.
Following is the format for the php code

<?php
 $username="shyamr";
 $password = "rajput12";
 $type ="TEXT";
 $sender="ALERTS";
 $mobile="7227879520";
$message = urlencode("This is an example message");

   $baseurl ="https://app.indiasms.com/sendsms/bulksms";
  $url =$baseurl."?username=".$username."&password=".$password."&type=".$type."&sender=".$sender."&mobile=".$mobile."&message=".$message;

   if( function_exists("curl_init")){
     $ch = curl_init();
  curl_setopt ( $ch, CURLOPT_URL, $url );
  curl_setopt ( $ch, CURLOPT_TIMEOUT, 30 );
  curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 0 );
  curl_setopt ( $ch, CURLOPT_HEADER, 0 );
  curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
  $response = curl_exec ( $ch );
     curl_close($ch);
  // echo "<pre>"; print_r($response);echo "<pre>";
 }else{
  $return_val = file($url);
  $response = $return_val[0];
 }

 list($send,$msgcode) = explode('|',$response);
    if (trim($send) == "SUBMIT_SUCCESS") {
     echo "Sms send successfully.";
    }else{
      echo "Unable to Send SMS successfully.";
    }
?>