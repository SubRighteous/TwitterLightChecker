<html>
    <body>
<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "934196992795906048-ibkBh2c66f97XcJex9QeVFIi4vveXsK",
    'oauth_access_token_secret' => "ygyR3rXlDzitl5d0IFUpamZGw5NBbcQhvF3O2Jz2Kalz1",
    'consumer_key' => "QueAfQcIO2abML06Agq9EqwCi",
    'consumer_secret' => "SXGpe9PZl8n7TbNxcDcZfYqyuis8DAEn8h0w7rRTYRf8T72PWT"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);        
        
/** Perform a POST request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=J7mbo';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

?>
        </body>
</html>
