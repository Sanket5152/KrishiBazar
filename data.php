<?php

$debug = 1;
$fb_page_url = "agmarknet.nic.in/agnew/NationalBEnglish/MarketWiseDailyReport.aspx?ss=1";
$cookies = 'cookies.txt';
touch($cookies);
$uagent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/36.0.1985.125 Chrome/36.0.1985.125 Safari/537.36';


/**
    Get __VIEWSTATE & __EVENTVALIDATION
 */
$ch = curl_init($fb_page_url);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $uagent);

$html = curl_exec($ch);

curl_close($ch);

preg_match('~<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="(.*?)" />~', $html, $viewstate);
preg_match('~<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="(.*?)" />~', $html, $eventValidation);

$viewstate = $viewstate[1];
$eventValidation = $eventValidation[1];



/**
 Start Fetching process
 */
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $fb_page_url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 9850);
curl_setopt($ch, CURLOPT_USERAGENT, $uagent);

// Collecting all POST fields
$postfields = array();
$postfields['__EVENTTARGET'] = "Calendar1";
$postfields['__EVENTARGUMENT'] = 5450;
$postfields['__LASTFOCUS'] = "";
$postfields['__VIEWSTATE'] = $viewstate;
$postfields['__EVENTVALIDATION'] = $eventValidation;
$postfields['drpDwnYear'] = 2014;
$postfields['drpDwnMonth'] = "December";
$postfields['hidStates'] = "";

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
$ret = curl_exec($ch); // Get result as fetched web page.

    if ($debug) {
        echo $ret;
    }
    curl_close($ch);


?>