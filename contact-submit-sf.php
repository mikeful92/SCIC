<?PHP
######################################################
#                                                    #
#                Forms To Go 4.3.3                   #
#             http://www.bebosoft.com/               #
#                                                    #
######################################################




define('kOptional', true);
define('kMandatory', false);

define('kStringRangeFrom', 1);
define('kStringRangeTo', 2);
define('kStringRangeBetween', 3);
        
define('kYes', 'yes');
define('kNo', 'no');




error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set('track_errors', true);

function DoStripSlashes($fieldValue)  { 
// temporary fix for PHP6 compatibility - magic quotes deprecated in PHP6
 if ( function_exists( 'get_magic_quotes_gpc' ) && get_magic_quotes_gpc() ) { 
  if (is_array($fieldValue) ) { 
   return array_map('DoStripSlashes', $fieldValue); 
  } else { 
   return trim(stripslashes($fieldValue)); 
  } 
 } else { 
  return $fieldValue; 
 } 
}

function FilterCChars($theString) {
 return preg_replace('/[\x00-\x1F]/', '', $theString);
}

function ProcessTextField(&$codeHtmlForm, $fieldName, $fieldValue) {

 $tagPattern = '/(<input[^>]+name=[\'\"]?\Q' . $fieldName . '\E[\'\"\s]+[^>]*>)/i';
 preg_match($tagPattern, $codeHtmlForm, $matches);

 $htmlTag = $matches[1];
 $valuePattern = '/value=[\'\"]?[^\'\"\s]*[\'\"\s]+/i';
 $replacementPattern = 'value="' . $fieldValue . '" ';
 
 if (preg_match($valuePattern, $htmlTag)) {
  $htmlTagToReplace = preg_replace($valuePattern, $replacementPattern, $htmlTag);
 } else {
  $valuePattern = '/([^>\/]*)([\/]?>)/';
  $replacementPattern = '\1 value="' . $fieldValue . '" \2';
  $htmlTagToReplace = preg_replace($valuePattern, $replacementPattern, $htmlTag);
 }

 $codeHtmlForm = preg_replace($tagPattern, $htmlTagToReplace, $codeHtmlForm);

}

function ProcessTextArea(&$codeHtmlForm, $fieldName, $fieldValue) {

 $tagPattern = '/(<textarea[^>]+name=[\'\"]?\Q' . $fieldName . '\E[\'\"\s]+[^>]*)>(.*?)(<\/textarea>)/is';
 $replacementPattern = '\1>' . $fieldValue . '\3';

 $codeHtmlForm = preg_replace($tagPattern, $replacementPattern, $codeHtmlForm);

}

function ProcessPHPFile($PHPFile) {
 
 ob_start();
 
 if (file_exists($PHPFile)) {
  require $PHPFile;
 } else {
  echo '<html><head><meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>Error</title></head><body>Forms To Go - Error: Unable to load HTML form: ' . $PHPFile . '</body></html>';
  exit;
 }
 
 return ob_get_clean();
}

function CheckString($value, $low, $high, $mode, $limitAlpha, $limitNumbers, $limitEmptySpaces, $limitExtraChars, $optional) {
 if ($limitAlpha == kYes) {
  $regExp = 'A-Za-z';
 }
 
 if ($limitNumbers == kYes) {
  $regExp .= '0-9'; 
 }
 
 if ($limitEmptySpaces == kYes) {
  $regExp .= ' '; 
 }

 if (strlen($limitExtraChars) > 0) {
 
  $search = array('\\', '[', ']', '-', '$', '.', '*', '(', ')', '?', '+', '^', '{', '}', '|', '/');
  $replace = array('\\\\', '\[', '\]', '\-', '\$', '\.', '\*', '\(', '\)', '\?', '\+', '\^', '\{', '\}', '\|', '\/');

  $regExp .= str_replace($search, $replace, $limitExtraChars);

 }

 if ( (strlen($regExp) > 0) && (strlen($value) > 0) ){
  if (preg_match('/[^' . $regExp . ']/', $value)) {
   return false;
  }
 }

 if ( (strlen($value) == 0) && ($optional === kOptional) ) {
  return true;
 } elseif ( (strlen($value) >= $low) && ($mode == kStringRangeFrom) ) {
  return true;
 } elseif ( (strlen($value) <= $high) && ($mode == kStringRangeTo) ) {
  return true;
 } elseif ( (strlen($value) >= $low) && (strlen($value) <= $high) && ($mode == kStringRangeBetween) ) {
  return true;
 } else {
  return false;
 }

}


function CheckEmail($email, $optional) {
 if ( (strlen($email) == 0) && ($optional === kOptional) ) {
  return true;
 } elseif ( eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email) ) {
  return true;
 } else {
  return false;
 }
}


function CheckDateFormat($value, $optional) {
 if ( (strlen($value) == 0) && ($optional === kOptional) ) {
  return true;
 }
 
 $year = substr($value, '6', '4');
 $month = substr($value, '0', '2');
 $day = substr($value, '3', '2');
 
 if ( ( @checkdate($month, $day, $year) ) && (strlen($value) == 10) ) {
  return true;
 } else {
  return false;
 }
}



if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
 $clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
 $clientIP = $_SERVER['REMOTE_ADDR'];
}

$FTGfirst_name = DoStripSlashes( $_POST['first_name'] );
$FTGlast_name = DoStripSlashes( $_POST['last_name'] );
$FTG00N80000002ngQ5 = DoStripSlashes( $_POST['00N80000002ngQ5'] );
$FTG00N80000004roD3 = DoStripSlashes( $_POST['00N80000004roD3'] );
$FTGemail = DoStripSlashes( $_POST['email'] );
$FTGphone = DoStripSlashes( $_POST['phone'] );
$FTG00N80000004rnnj = DoStripSlashes( $_POST['00N80000004rnnj'] );



$validationFailed = false;

# Fields Validations


if (!CheckString($FTGfirst_name, 1, 0, kStringRangeFrom, kNo, kNo, kNo, '', kMandatory)) {
 $FTGErrorMessage['first_name'] = 'Please enter first name';
 $validationFailed = true;
}

if (!CheckString($FTGlast_name, 1, 0, kStringRangeFrom, kNo, kNo, kNo, '', kMandatory)) {
 $FTGErrorMessage['last_name'] = 'Please enter last name';
 $validationFailed = true;
}

if (!CheckDateFormat($FTG00N80000002ngQ5, kMandatory)) {
 $FTGErrorMessage['00N80000002ngQ5'] = 'Please enter birthdate MM/DD/YYYY';
 $validationFailed = true;
}

if (!CheckString($FTG00N80000004roD3, 1, 0, kStringRangeFrom, kNo, kNo, kNo, '', kMandatory)) {
 $FTGErrorMessage['00N80000004roD3'] = 'Please enter current insurance';
 $validationFailed = true;
}

if (!CheckEmail($FTGemail, kMandatory)) {
 $FTGErrorMessage['email'] = 'Please enter a valid email';
 $validationFailed = true;
}

if (!CheckString($FTGphone, 1, 0, kStringRangeFrom, kNo, kNo, kNo, '', kMandatory)) {
 $FTGErrorMessage['phone'] = 'Please enter your phone number';
 $validationFailed = true;
}



# Display HTML form with filled values

if ($validationFailed === true) {

 $fileHtmlForm = 'contact-us.php';
 
 $codeHtmlForm = ProcessPHPFile($fileHtmlForm);

 ProcessTextField($codeHtmlForm, 'first_name', $FTGfirst_name);
 ProcessTextField($codeHtmlForm, 'last_name', $FTGlast_name);
 ProcessTextField($codeHtmlForm, '00N80000002ngQ5', $FTG00N80000002ngQ5);
 ProcessTextField($codeHtmlForm, '00N80000004roD3', $FTG00N80000004roD3);
 ProcessTextField($codeHtmlForm, 'email', $FTGemail);
 ProcessTextField($codeHtmlForm, 'phone', $FTGphone);
 ProcessTextArea($codeHtmlForm, '00N80000004rnnj', $FTG00N80000004rnnj);


 $errorList = @implode("<br />\n", $FTGErrorMessage);
 $codeHtmlForm = str_replace('<!--VALIDATIONERROR-->', $errorList, $codeHtmlForm);

 $codeHtmlForm = str_replace('<!--FIELDVALUE:first_name-->', $FTGfirst_name, $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--FIELDVALUE:last_name-->', $FTGlast_name, $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--FIELDVALUE:00N80000002ngQ5-->', $FTG00N80000002ngQ5, $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--FIELDVALUE:00N80000004roD3-->', $FTG00N80000004roD3, $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--FIELDVALUE:email-->', $FTGemail, $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--FIELDVALUE:phone-->', $FTGphone, $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--FIELDVALUE:00N80000004rnnj-->', $FTG00N80000004rnnj, $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--ERRORMSG:first_name-->', $FTGErrorMessage['first_name'], $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--ERRORMSG:last_name-->', $FTGErrorMessage['last_name'], $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--ERRORMSG:00N80000002ngQ5-->', $FTGErrorMessage['00N80000002ngQ5'], $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--ERRORMSG:00N80000004roD3-->', $FTGErrorMessage['00N80000004roD3'], $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--ERRORMSG:email-->', $FTGErrorMessage['email'], $codeHtmlForm);
 $codeHtmlForm = str_replace('<!--ERRORMSG:phone-->', $FTGErrorMessage['phone'], $codeHtmlForm);

 echo $codeHtmlForm;

}

if ( $validationFailed === false ) {

 # Email to Form Owner
  
 $emailSubject = FilterCChars("Website Request Information Form");
  
 $emailBody = "First Name : $FTGfirst_name\n"
  . "Last Name : $FTGlast_name\n"
  . "Birth Date : $FTG00N80000002ngQ5\n"
  . "Current Insurance : $FTG00N80000004roD3\n"
  . "Email Address : $FTGemail\n"
  . "Phone Number : $FTGphone\n"
  . "Comments : $FTG00N80000004rnnj\n"
  . "";
  $emailTo = '65 Insurance <mycustomplan@65insurance.com>';
   
  $emailFrom = FilterCChars("info@65insurance.com");
   
  $emailHeader = "From: $emailFrom\n"
   . 'Bcc: Matthew <menard.matthew@gmail.com>' . "\n"
   . "MIME-Version: 1.0\n"
   . "Content-type: text/plain; charset=\"ISO-8859-1\"\n"
   . "Content-transfer-encoding: 7bit\n";
   
  mail($emailTo, $emailSubject, $emailBody, $emailHeader);
  
  
  # Redirect user to success page

//header("Location: thank-you.php");

}

// =======================================
// START SALESFORCE SUBMISSION
// =======================================
define('OID', '123456789');
define('SF_URL', 'https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8');

$ch = curl_init(SF_URL);
$data = $_POST;
unset($data['submitbutton']);
unset($data['postpage']);

$data['oid'] = OID;
$data['sfga'] = '';
$data['123456789'] = $_SERVER['REMOTE_ADDR'];

foreach($data as &$item) {
$item = stripslashes($item);
}

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

$result = curl_exec($ch);
if( $result === false ) {
echo 'Error: '.curl_error($ch).PHP_EOL;
}
curl_close($ch);
// =======================================
// END SALESFORCE SUBMISSION
// =======================================

//header("Location: thank-you.php");
?>