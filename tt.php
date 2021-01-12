<?php
function get_content($url)
{
   $ch = curl_init();

   curl_setopt ($ch, CURLOPT_URL, $url);
   curl_setopt ($ch, CURLOPT_HEADER, 0);

   ob_start();

   curl_exec ($ch);
   curl_close ($ch);
   $string = ob_get_contents();

   ob_end_clean();
   
   return $string;	

}

$key = get_content("https://secure-ssl.net/voicexmlconnect.com/outbound/out_login.php?username=MYUSER&pwd=MYPASS");

echo $key;

?>
<?php
$T="www.agmarknet.gov.in";
function get_content($T)
{
   $ch = curl_init();

   curl_setopt ($ch, CURLOPT_URL, $url);
   curl_setopt ($ch, CURLOPT_HEADER, 0);

   ob_start();

   curl_exec ($ch);
   curl_close ($ch);
   $string = ob_get_contents();

   ob_end_clean();
   
   return $string;	

}
$T="www.agmarknet.gov.in";
$key = get_content("https://secure-ssl.net/voicexmlconnect.com/outbound/out_login.php?username=MYUSER&pwd=MYPASS");

echo $key;

?>
