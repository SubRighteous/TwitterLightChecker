<?php

require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
     'oauth_access_token' => "934196992795906048-ibkBh2c66f97XcJex9QeVFIi4vveXsK",
     'oauth_access_token_secret' => "ygyR3rXlDzitl5d0IFUpamZGw5NBbcQhvF3O2Jz2Kalz1",
     'consumer_key' => "QueAfQcIO2abML06Agq9EqwCi",
     'consumer_secret' => "SXGpe9PZl8n7TbNxcDcZfYqyuis8DAEn8h0w7rRTYRf8T72PWT"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        
$requestMethod = "GET";
         
$getfield = '?screen_name=iagdotme&count=20';   
        
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest(),$assoc = TRUE);
   
if($string["errors"][0]["message"] != "")
{
    echo "<h3>Oh, There was a problem. </h3><p>It Seems that Twitter has returned an error : </p><p><em>".$string[errors][0]["message"]."</em></p>";exit();
}

echo "<pre>";
print_r($string);
echo "</pre>";

?>

