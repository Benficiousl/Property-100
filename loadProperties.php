<?php
$api_url = 'https://go.revolutioncrm.com/api/v1/properties/active/?format=json';

$client_id = 'prop100@revolutioncrm.com';
$client_secret = '58;Jd(NL?FR54^2,';

$context = stream_context_create(array(
  'http' => array(
    'header' => "Authorization: Basic " . base64_encode("$client_id:$client_secret"),
  ),
));

$result = file_get_contents($api_url, false, $context);
$data = json_decode($result, true) or die(json_last_error());
   $myfile = fopen("datafile.txt", "w");
   fwrite($myfile, $result."");
   fclose($myfile);

?>