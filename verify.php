<?php
ob_start();
session_start();
require_once('includes/recaptchalib.php');
//Recaptcha Settings
$publickey = "6LeuUh4TAAtAAAFz6sokIh0bpllN-qWyErjzPOaQU";
// you got this from the signup page
$privatekey = "6LeuUh4TAAAAAIQgrFzRw7967rsSdCi2xTszKmMt";
//curl method posting
//extract data from the post
extract($_POST);
    
if ($submit){
    $ok = 1;
    $resp = recaptcha_check_answer ($privatekey,   $_SERVER["REMOTE_ADDR"],   $_POST["recaptcha_challenge_field"],   $_POST["recaptcha_response_field"]);
        
    if (!$resp->is_valid) {
      $ok = 0;
      echo("Verify is failing");
    }

        
    if ($ok){
      //set POST variables
      // CTR curl code to resubmit to Salesforce web to lead
      //set POST variables
      echo("Verify is progressing 1");
      $url = 'https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
      $fields = array(
        'oid'=>urlencode($oid),
        'retURL'=>urlencode($retURL),
        'first_name'=>urlencode($first_name),
        'last_name'=>urlencode($last_name),
        'phone'=>urlencode($phone),
        '00NC0000006ZTAg'=>urlencode($email),
        '00N80000004rnnj'=>urlencode($comment),
        '00N80000002ngQ5'=>urlencode($birthdate)
      );
        //url-ify the data for the POST
      foreach($fields as $key=>$value) {
          $fields_string .= $key.'='.$value.'&';
      }

      rtrim($fields_string,'&');
      //print_r($fields_string);
      //open connection
      $ch = curl_init();
      //set the url, number of POST vars, POST data
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_POST,count($fields));
      curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
      //execute post
      $result = curl_exec($ch);
      //close connection
      curl_close($ch);
    }//if $OK else {

    die ("<p>The reCAPTCHA wasn't entered correctly. Go back and try it again.<br>" .         "(reCAPTCHA said: " . $resp->error . ")</p>");
}//if submit
?>