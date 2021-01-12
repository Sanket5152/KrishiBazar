<?php

$debug = 1;
//__EVENTTARGET=Calendar1&__EVENTARGUMENT=5450
$post_params = '__EVENTTARGET=Calendar1&__EVENTARGUMENT=5450&__LASTFOCUS=&__VIEWSTATE=%2FwEPDwULLTE3NTAzMTM4MzYPZBYCAgMPZBYMAgcPEGQPFg9mAgECAgIDAgQCBQIGAgcCCAIJAgoCCwIMAg0CDhYPEAUEMjAwMAUEMjAwMGcQBQQyMDAxBQQyMDAxZxAFBDIwMDIFBDIwMDJnEAUEMjAwMwUEMjAwM2cQBQQyMDA0BQQyMDA0ZxAFBDIwMDUFBDIwMDVnEAUEMjAwNgUEMjAwNmcQBQQyMDA3BQQyMDA3ZxAFBDIwMDgFBDIwMDhnEAUEMjAwOQUEMjAwOWcQBQQyMDEwBQQyMDEwZxAFBDIwMTEFBDIwMTFnEAUEMjAxMgUEMjAxMmcQBQQyMDEzBQQyMDEzZxAFBDIwMTQFBDIwMTRnFgECDmQCCQ8QZGQWAQILZAILDzwrAAoBAA8WBB4LVmlzaWJsZURhdGUGAEBi4hDb0QgeAlNEFgEGAMA1QqZuyAhkZAINDxYCHgdWaXNpYmxlaGQCDw8WAh8CaGQCEQ8QZGQWAGQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgIFDEltYWdlQnV0dG9uMgUMSW1hZ2VCdXR0b24x5LvtLZ2qkO71%2BB%2FYvmnfZbHLL18%3D&__EVENTVALIDATION=%2FwEWTwLwtt7gBQLSwtXkAgLSwpnTCALM9PumDwKhkfnTCAKJv7TUCAKJv8D%2FDwKJv9yCBgKJv%2BilDQKJv4TJBQKJv5DsDAKJv6y3AwKJv7jaCwKJv5SzDQKJv6DWBQLihpLPAgLihq6SCQLihro1AuKG1tgIAuKG4uMPArDenUMC0KSt6AgCn4vJagLh8LLyDQLJ86aRBAKw35mbCQKK%2FN%2FwCgK0jqvCCgKfkaS6DAKJ5paiAwKTgaGmAgLs0%2B3ZDgL%2F%2B9P4DAKh6eFRAqHpnboFAqHpnboFAqHpidUOAqHpidUOApyGm%2F4JApyGm%2F4JApyG95kBApyG47QKApyG3%2B8DApyGy4oLApyGp6YMApyGk8EFApyGj%2FwOApyGu8UDApyGl%2BAEAvefuYkGAveflaQPAvefgV8C95%2F9%2BgkC95%2FplQEC95%2FFsAoC95%2Bx7AMC95%2BthwsC95%2FZ7wkC95%2B1iwEC0rTHkwwC0rSzzwUC0rSv6g4C0rSbhQYC0rT3oA8C0rTjWwLStN%2F2CQLStMuRAQLStOf6BwLStNOVDwL93ofSBQL93vONDQL93u%2BoBgL93tvDDwL93rd%2FAv3eo5oIAv3en7UBAv3ei9AKAv3ep7kPAo7TxPYIYM6jG2mBqNWgIsnXliZHO%2FTCAdk%3D&drpDwnYear=2014&drpDwnMonth=December&hidStates=';
$fb_page_url ="http://agmarknet.nic.in/agnew/NationalBEnglish/MarketWiseDailyReport.aspx?ss=1"; // urlencodeurlencode
//$fb_page_url = urlencode("https://www.facebook.com"); // urlencodeurlencode

$uagent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/36.0.1985.125 Chrome/36.0.1985.125 Safari/537.36';
$cookies = 'cookies.txt';
touch($cookies);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $fb_page_url);
   // curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
    curl_setopt($ch, CURLOPT_USERAGENT, $uagent);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_params);
    $data = curl_exec($ch);
    if ($debug) {
        echo $data;
    }
    curl_close($ch);
    //exit(1);
?>